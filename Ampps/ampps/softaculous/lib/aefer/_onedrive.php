<?php 

class onedrive{
	
	var $access_token;
	var $refresh_token;
	var $path;
	var $filename;
	var $filesize = 0;
	var $complete = 0;
	var $offset = 0;
	var $tmpsize = 0;
	var $chunk = 4194304;
	var $range_lower_limit = 0;
	var $range_upper_limit = 0;
	var $bytes_remaining = 0;
	var $num_bytes = 0;
	var $num_fragments = 0;
	var $chunk_size = 0;
	var $onedrive_file_id = '';
	var $mode = '';
	var $wp = NULL; // Memory Write Pointer
	var $upload_url = '';
	var $local_dest = '';
	var $root_folder_path = 'root:';
	var $graph_api_url = 'https://graph.microsoft.com/v1.0/me/drive/';
	// APP name is Softaculous Auto Installer and is assigned to developers@softaculous.com Microsoft account
	var $app_key = '31422ea4-40e4-4f0a-ab63-0324fe586c62';
	var $app_secret = 'PDK8Q~tlOFNlVzR8CAKC8mg._bvzShbBEVBm6dtY';
	var $app_dir = 'Softaculous Auto Installer';
	var $redirect_uri = 'https://s2.softaculous.com/onedrive/callback.php';
	var $scopes = 'files.Read Files.ReadWrite offline_access';

	function stream_open($path, $mode, $options, &$opened_path){
		global $error, $l, $user;

		$stream = parse_url($path);
		$this->refresh_token = $stream['host'];
		$this->path = $stream['path'];
		$this->mode = $mode;

		//One Drive access token expires in an hour so we need to refresh
		$this->access_token = $this->refresh_token_func($this->refresh_token);
		
		$pathinfo = pathinfo($this->path);
		$dirlist = explode('/', $pathinfo['dirname']);
		$this->filename = $pathinfo['basename'];

		//Local destination where the backup tar file will be stored initially.
		$this->local_dest = $GLOBALS['local_dest'].'/'.$this->filename;
		return true;
	}

	function stream_write($data){
		global $error, $l;
		
		if(!is_resource($this->wp)){
			$this->wp = fopen($this->local_dest, 'a+');
		}
		$data_size = strlen($data);
		
		//Write into local tar created inside softaculous_backups
		fwrite($this->wp, $data);
		return $data_size;
	}

	function stream_close(){
		global $error, $l;
		
		if(preg_match('/w|a/is', $this->mode)){
			if(empty($GLOBALS['end_file'])){
				
				$this->create_upload_session();
				//Delete local tar file
				@unlink($this->local_dest);
			}
		}
		return true;
	}

	//One Drive API to create an Upload Session
	function create_upload_session(){
		global $error, $l;
		
		$url = $this->graph_api_url.$this->root_folder_path.rawurlencode($this->path).':/createUploadSession';
		$headers = array('Content-Type: application/json',
				        "Cache-Control: no-cache",
				        "Pragma: no-cache",
				        "Authorization: bearer ".$this->access_token);
				
		$data= '{}';
		$response = $this->__curl($url, $headers, $data);

		if(!empty($response['error'])){
			$error[] = $response['error'];
			return false;
		}

		$resp_data = json_decode($response['result'], true);
        $this->upload_url = $resp_data['uploadUrl'];
        if(empty($this->upload_url)){
        	$error[] = $l['onedrive_err_upload_url'];
        	return false;
        }

        $this->upload_start();
        return true;
	}

	//One Drive API to Upload
	function upload_start(){
        global $error, $l;

        $this->filesize = filesize($this->local_dest); 
        $this->num_fragments = ceil($this->filesize / $this->chunk);
        $this->bytes_remaining = $this->filesize;

        while ($this->tmpsize < $this->num_fragments) {
            $this->chunk_size = $this->num_bytes = $this->chunk;
            $this->range_lower_limit = $this->tmpsize * $this->chunk;
            $this->range_upper_limit = $this->tmpsize * $this->chunk + $this->chunk_size - 1;
            $this->offset = $this->tmpsize * $this->chunk;

            if ($this->bytes_remaining < $this->chunk_size) {
                $this->chunk_size = $this->num_bytes = $this->bytes_remaining;
                $this->range_upper_limit = $this->filesize - 1;
            }

            if ($stream = fopen($this->local_dest, 'rb')) {
                $data = stream_get_contents($stream, $this->chunk_size, $this->offset);
                fclose($stream);
            }

            //Call upload append function to write the data from Local tar file to One Drive
			$retcode = $this->upload_append($this->upload_url, $data, $this->filesize);

			if($retcode == '201 Created'){
				$this->complete = 1;
			}
			
			if(!empty($error)){
				break;
			}

            $this->bytes_remaining = $this->bytes_remaining - $this->chunk_size;
            $this->tmpsize++;
        }

        if(empty($this->complete)){
			$error[] = $l['onedrive_err_end'];
			return false;
		}

		return true;
    }

	//One Drive API to append
	function upload_append($upload_url, $data, $final_size, $retry = false){
		global $error, $l;

		$headers = array(
					'Content-Length: '.$this->num_bytes, 
					'Content-Range: bytes '.$this->range_lower_limit.'-'.$this->range_upper_limit.'/'.$final_size);
		
		$response = $this->__curl($upload_url, $headers, $data, 'PUT');
		
		// Was there any interruption ? Lets retry
		if(!empty($response['error']) && (preg_match('/SSL_ERROR_SYSCALL/', $response['error']) || preg_match('/SSL_read/', $response['error'])) && empty($retry)){
			$retcode = 'SSL_ERROR_SYSCALL';
			return $this->upload_append($upload_url, $data, $final_size, true);
		}
		
		if(!empty($response['error'])){
			$error[] = $response['error'];
			return false;
		}

		//Check for response code
		$resp_obj= json_decode($response['result'], true);
		
		// Was there any interruption ? Lets retry
		if(empty($resp_obj) && empty($retry)){
			$retcode = '404';
			return $this->upload_append($upload_url, $data, $final_size, true);
		}
		
		$retcode = '404';
		
		if(!empty($resp_obj)){
			if(array_key_exists("nextExpectedRanges",$resp_obj)){
				$retcode = '308 Resume Incomplete';
			}elseif(array_key_exists("id",$resp_obj)){
				$retcode = '201 Created';
			}else{
				$retcode = '416 Requested Range Not Satisfiable';
			}
		}else{
			$retcode = '416 Requested Range Not Satisfiable';
		}
		
		if($retcode == '416 Requested Range Not Satisfiable' && empty($retry)){
			return $this->upload_append($upload_url, $data, $final_size, true);
		}
		
		if($retcode != '308 Resume Incomplete' && $retcode != '201 Created'){
			$error[] = $retcode;
			return false;
		}
		
		if($retcode == '308 Resume Incomplete'){
			$this->range_lower_limit = $this->range_upper_limit + 1;
			$this->offset = $this->range_upper_limit + 1;

		}elseif($retcode == '201 Created'){
			$this->onedrive_file_id = $resp_obj['id'];
		}

		return $retcode;
	}

	//In response to file_exists(), is_file(), is_dir()
	function url_stat($path){
		global $error;

		$stream = parse_url($path);
		$this->refresh_token = $stream['host'];
		$file_path = $stream['path'];
		$pathinfo = pathinfo($stream['path']);
		$filename = $pathinfo['basename'];

		//One Drive access token expires in an hour so we need to refresh
		if(empty($this->access_token)){
			$this->access_token = $this->refresh_token_func($this->refresh_token);
		}

		//Metadata for the root folder is unsupported
		if(!empty($filename)){
			
			$url=$this->graph_api_url.$this->root_folder_path.rawurlencode($file_path).':';
			$headers = array('Content-Type: application/json',
					        "Cache-Control: no-cache",
					        "Pragma: no-cache",
					        "Authorization: bearer ".$this->access_token); 
		    $resp = $this->__curl($url, $headers, '', 'GET');
		    
			$data = json_decode($resp['result'], true);
			if(array_key_exists("folder",$data)){
				$mode = 0040000;	//For DIR
			}else{
				$mode = 0100000;	//For File
			}
			
			if(!empty($data['id'])){
				$stat = array('dev' => 0,
							'ino' => 0,
							'mode' => $mode,
							'nlink' => 0,
							'uid' => 0,
							'gid' => 0,
							'rdev' => 0,
							'size' => $data['size'],
							'atime' => strtotime($data['createdDateTime']),
							'mtime' => strtotime($data['fileSystemInfo']['lastModifiedDateTime']),
							'ctime' => strtotime($data['fileSystemInfo']['createdDateTime']),
							'blksize' => 0,
							'blocks' => 0);
					
				$this->filesize = $stat['size'];
				return $stat;
			}
		}
		return false;
	}

    //Get onedrive file/folder id if exist
    function get_onedrive_file_id($filename, $refresh_token = ''){
    	global $error, $l;

		if(!empty($refresh_token)){
			$this->refresh_token = $refresh_token;
		}

		//One Drive access token expires in an hour so we need to refresh
		if(empty($this->access_token)){
			$this->access_token = $this->refresh_token_func($this->refresh_token);
		}

        $url=$this->graph_api_url.$this->root_folder_path.rawurlencode($filename).':';
    	$headers = array('Content-Type: application/json',
				        "Cache-Control: no-cache",
				        "Pragma: no-cache",
				        "Authorization: bearer ".$this->access_token); 
        $response = $this->__curl($url, $headers, '', 'GET');

        if(!empty($response['error'])){
			//$error[] = $response['error'];
			return false;
		}

		$data = json_decode($response['result'], true);

		if(!empty($data['error'])){
			
			return false;
		}

		$this->onedrive_file_id = $data['id'];
		return $this->onedrive_file_id;
    }

	//Download Backup File from One Drive to local server
	function download_file_loop($source, $dest, $startpos = 0){
		global $error;

		$stream = parse_url($source);
		$this->refresh_token = $stream['host'];
		$path = $stream['path'];

		//One Drive access token expires in an hour so we need to refresh
		if(empty($this->access_token)){
			$this->access_token = $this->refresh_token_func($this->refresh_token);
		}

		$this->get_onedrive_file_id($path);
		$file_stats = $this->url_stat($source);
		$this->filesize = $file_stats['size'];

		$url = $this->graph_api_url.$this->root_folder_path.rawurlencode($path).':';
		$headers = array('Content-Type: application/json',
				        "Cache-Control: no-cache",
				        "Pragma: no-cache",
				        "Authorization: bearer ".$this->access_token);
		
		$resp = $this->__curl($url, $headers, '', 'GET');

		//Fetch download URL
		$object = json_decode($resp['result'], true);
        $download_url = $object['@microsoft.graph.downloadUrl'];

		$this->range_lower_limit = $startpos;
		$this->range_upper_limit = ($this->range_lower_limit + $this->chunk) - 1;

		$fp = @fopen($dest, "ab");
		while(!$this->__eof()){

			if(time() >= $GLOBALS['end']){
				$GLOBALS['l_readbytes'] = filesize($dest);
				break;
			}

			if($this->range_upper_limit >= $this->filesize){
				$this->range_upper_limit = $this->filesize - 1;
			}
	
			$block = $this->__read($download_url, $this->range_lower_limit, $this->range_upper_limit);
			fwrite($fp, $block);
			  
			$this->offset = $this->range_upper_limit + 1;
			$this->range_lower_limit = $this->range_upper_limit + 1;
			$this->range_upper_limit = ($this->range_lower_limit + $this->chunk) - 1;
		}
		fclose($fp);
	}

	function __read($download_url, $lower_limit, $upper_limit){
		global $error;
		
		$headers = array('Range: bytes='.$lower_limit.'-'.$upper_limit);
		
		$resp = $this->__curl($download_url, $headers, '', 'GET');
		
		if(!empty($resp['error'])){
			$error[] = $resp['error'];
		}

		return $resp['result'];
	}

	function __eof(){
		if($this->offset < $this->filesize){
			return false;
		}
		return true;
	}

    //Delete the backup from One Drive
    function unlink($path){
		global $error, $l;
		
		$stream = parse_url($path);
		$this->refresh_token = $stream['host'];
		$pathinfo = pathinfo($stream['path']);
		$filename = $pathinfo['basename'];
		$file_path = $stream['path'];

		//One Drive access token expires in an hour so we need to refresh
		if(empty($this->access_token)){
			$this->access_token = $this->refresh_token_func($this->refresh_token);
		}

		if(empty($this->onedrive_file_id)){
			$this->get_onedrive_file_id($file_path);
		}
		
		$url=$this->graph_api_url.'items/'.$this->onedrive_file_id.':';
    	$headers = array('Content-Type: application/json',
				        "Cache-Control: no-cache",
				        "Pragma: no-cache",
				        "Authorization: bearer ".$this->access_token);
		
		$resp = $this->__curl($url, $headers, '', 'DELETE');

		if(!empty($resp['error'])){
			$error[] = $resp['error'];
			return false;
		}

		return true;
	}

    //Rename the backup file
    function rename($from, $to){
		global $error;
		
		$stream_from = parse_url($from);
		$this->refresh_token = $stream_from['host'];
		$from_path = $stream_from['path'];
		$from_pathinfo = pathinfo($stream_from['path']);
		$from_file = $from_pathinfo['basename'];
		
		$stream_to = parse_url($to);
		$to_path = trim($stream_to['path'], '/\\');
		$to_pathinfo = pathinfo($stream_to['path']);
		$to_file = $to_pathinfo['basename'];

		//One Drive access token expires in an hour so we need to refresh
		if(empty($this->access_token)){
			$this->access_token = $this->refresh_token_func($this->refresh_token);
		}

		$this->get_onedrive_file_id($from_path);

		$url = $url=$this->graph_api_url.'items/'.$this->onedrive_file_id.':';
		$data= '{
				  "name": "'.$to_file.'"
				}';
    	$headers = array('Content-Type: application/json',
				        "Cache-Control: no-cache",
				        "Pragma: no-cache",
				        "Authorization: bearer ".$this->access_token);
		
		$resp = $this->__curl($url, $headers, $data, 'PATCH');

		if(!empty($resp['error'])){
			$error[] = $resp['error'];
			return false;
		}	
		return $resp['result'];	
	}

	/**
	 * Generate One Drive Refresh and Access Token from the Authorization Code provided
	 *
	 * @package	softaculous 
	 * @author	Pratik Jaiswal
	 * @param	string $auth_code The authorization code generated by user during access grant process
	 * @return	string $data One Drive Refresh and Access Token which we can use to create backup files
	 * @since	5.7.1
	 */

	function generate_onedrive_token($auth_code){
		global $error, $l, $onedrive;
		
		$refresh_token = rawurldecode($refresh_token);	

		$url = 'https://login.microsoftonline.com/common/oauth2/v2.0/token';
		$headers = array("Content-Type: application/x-www-form-urlencoded");
		$post = http_build_query(array(
							'client_id' => $this->app_key,
                              'redirect_uri' => $this->redirect_uri,
                              'client_secret' => $this->app_secret,
                              'code' => $auth_code,
                              'grant_type' => 'authorization_code',
                              'scope' => $this->scopes));
				
		$resp = $this->__curl($url, $headers, $post);
		
		if(!empty($resp['error'])){
			$error[] = $resp['error'];
			return false;
		}
		
		$data = json_decode($resp['result'], true);
		
		if(!empty($data['error'])){
			if(is_array($data['error'])){
				$error[] = $data['error']['code'].' : '.$data['error']['message'];
			}else{
				$error[] = $data['error'].' : '.$data['error_description'];
			}
			return false;
		}

		return $data;
	}

	/**
	 * Generate a new Access Token or Refresh Token from the previous Refresh Token.
	 *
	 * @package	softaculous 
	 * @author	Pratik Jaiswal
	 * @param	string $refresh_token The refresh token generated by user during access grant process
	 * @return	string $token One Drive Access Token which we can use for authentication in behalf of user
	 * @since	5.7.1
	 */

	function refresh_token_func($refresh_token){
		global $error, $l, $onedrive;
		
		$refresh_token = rawurldecode($refresh_token);	

		$url = 'https://login.microsoftonline.com/common/oauth2/v2.0/token';
		
		$headers = array("Content-Type: application/x-www-form-urlencoded");
		$post = http_build_query(array(
							'client_id' => $this->app_key,
	                         'redirect_uri' => $this->redirect_uri,
	                         'client_secret' => $this->app_secret,
	                         'refresh_token' => $refresh_token,
	                         'grant_type' => 'refresh_token'));
				
		$resp = $this->__curl($url, $headers, $post);
		
		if(!empty($resp['error'])){
			$error[] = $resp['error'];
			return false;
		}
		
		$data = json_decode($resp['result'], true);
		
		if(!empty($data['error'])){
			if(is_array($data['error'])){
				$error[] = $data['error']['code'].' : '.$data['error']['message'];
			}else{
				$error[] = $data['error'].' : '.$data['error_description'];
			}
			return false;
		}

		return $data['access_token'];
	}

	
	/**
	 * Create Softaculous App Directory in user's One Drive account
	 *
	 * @package	softaculous 
	 * @author	Pratik jaiswal
	 * @param	string $refresh_token Refresh Token of user's One Drive account to generate the access token
	 * @since	5.7.1
	 */
	function create_onedrive_app_dir($refresh_token){
		global $globals, $onedrive, $error;
		
		$file_id = $this->get_onedrive_file_id($this->app_dir, $refresh_token);

		if(empty($file_id)){
			$this->create_dir($this->app_dir);
		}
	}

	function create_dir($dirname){
		global $error, $l, $onedrive;
		
		$url = $this->graph_api_url.'root/children';
    	$data= '{
		  "name": "'.$dirname.'",
		  "folder": { }
		}';
    	$headers = array('Content-Type: application/json',
				        "Cache-Control: no-cache",
				        "Pragma: no-cache",
				        "Authorization: bearer ".$this->access_token);
        $resp = $this->__curl($url, $headers, $data, 'POST');

		if(!empty($resp['error'])){
			$error[] = $resp['error'];
			return false;
		}
		
		$data = json_decode($resp['result'], true);
		
		if(!empty($data['error'])){
			if(is_array($data['error'])){
				$error[] = $data['error']['code'].' : '.$data['error']['message'];
			}else{
				$error[] = $data['error'].' : '.$data['error_description'];
			}
			return false;
		}
		return $data['id'];
	}

	function __curl($url, $headers = '', $post = '', $request_type = 'POST'){
		global $error, $l;
		
		// Set the curl parameters.
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_URL, $url);
		
		if(!empty($headers)){
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		}
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $request_type);
		//We are setting this as on some servers, the default HTTP version was taken as 2.0 by curl, causing issue
		curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
		
		if(!empty($post)){
			curl_setopt($ch, CURLOPT_POST, TRUE);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
		}
		// Turn off the server and peer verification (TrustManager Concept).
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

		//Get response from the server.
		$resp = array();
		$resp['result'] = curl_exec($ch);
		$resp['error'] = curl_error($ch);
		
		curl_close($ch);
		return $resp;
	}
}