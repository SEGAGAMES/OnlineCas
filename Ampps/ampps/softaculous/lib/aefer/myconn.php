<?php

error_reporting(E_ALL);

function inputsec($string){
	
	//get_magic_quotes_gpc is depricated in php 7.4
	if(version_compare(PHP_VERSION, '7.4', '<')){
		if(!get_magic_quotes_gpc()){
		
			$string = addslashes($string);
		
		}else{
		
			$string = stripslashes($string);
			$string = addslashes($string);
		
		}
	}else{
		$string = addslashes($string);
	}
	
	// This is to replace ` which can cause the command to be executed in exec()
	$string = str_replace('`', '\`', $string);
	
	return $string;

}

function get_web_file($url){

	$allow_url_open = (int) ini_get('allow_url_fopen');
	
	if(!empty($allow_url_open)){
	
		//Read the file
		$file = @file_get_contents($url);
	
	}elseif(function_exists('curl_exec')){
	
		// Set the curl parameters.
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
	
		// Turn off the server and peer verification (TrustManager Concept).
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
	
		// Follow redirects
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
		
		// UserAgent and Cookies
		curl_setopt($ch, CURLOPT_USERAGENT, 'Softaculous');
		
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	
		// Get response from the server.
		$file = curl_exec($ch);
		
		curl_close($ch);
	
	}else{
		return false;
	}
	
	//Did we get something
	if(empty($file)){
	
		return false;
	
	}
	
	return $file;
	
}//End of function

function GET($name){
	
	global $GET;
	
	if(isset($_GET[$name]) && !empty($_GET[$name])){
		return inputsec(trim($_GET[$name]));
	}
	
	return $GET[$name];
}

function soft_mysql_connect($host, $user, $pass, $newlink = false){
	
	// php 8.1 throws mysqli_sql_exception if the db/dbuser doesn't exists
	try{
		if(extension_loaded('mysqli')){
			//echo 'mysqli';
			//To handle connection if user passes a custom port along with the host as 127.0.0.1:6446.
			//For testing, use port 127.0.0.1 instead of localhost as 127.0.0.1:6446 http://php.net/manual/en/mysqli.construct.php#112328
			$exh = explode(':', $host);
			if(!empty($exh[1])){
				//In webuzo we connect to MYSQL through mysql.sock e.g localhost:/var/lib/mysql/mysql.sock
				//In case of socket $exh[1] will have the socket path and socket is the 6th parameter
				if(!is_numeric($exh[1])){
					$sconn = @mysqli_connect($exh[0], $user, $pass, '', 3306, $exh[1]);
				}else{
					$sconn = @mysqli_connect($exh[0], $user, $pass, '', $exh[1]);
				}
			}else{
				$sconn = @mysqli_connect($host, $user, $pass);
			}
		}else{
			//echo 'mysql';
			$sconn = @mysql_connect($host, $user, $pass, $newlink);
		}
	}catch(Exception $e){
		return false;
	}
	
	return $sconn;
}

function soft_mysql_select_db($db, $conn){

	if(empty($conn)){
		return false;
	}
	
	try{
		if(extension_loaded('mysqli')){
			$return = @mysqli_select_db($conn, $db);
		}else{
			$return = @mysql_select_db($db, $conn);
		}
	}catch(Exception $e){
		return false;
	}

	return $return;
}

function soft_mysql_query($query, $conn, $unbuffer_mode = 0){
	
	if(empty($conn) || empty($query)){
		return false;
	}

	try{
		if(extension_loaded('mysqlnd') && !empty($unbuffer_mode)){
			$return = @mysqli_query($conn, $query, MYSQLI_USE_RESULT);
		}elseif(extension_loaded('mysqli')){
			$return = @mysqli_query($conn, $query);
		}else{
			$return = @mysql_query($query, $conn);
		}
	}catch(Exception $e){
		return false;
	}
	
	return $return;
}

function soft_mysql_fetch_array($result){
	
	// If $result is not a resource return else it will lead to FATAL error
	if(empty($result)){
		return false;
	}
	
	if(extension_loaded('mysqli')){
		$return = @mysqli_fetch_array($result);
	}else{
		$return = @mysql_fetch_array($result);
	}
	
	return $return;
}

function soft_mysql_fetch_assoc($result){
	
	// If $result is not a resource return else it will lead to FATAL error
	if(empty($result)){
		return false;
	}
	
	if(extension_loaded('mysqli')){
		$return = @mysqli_fetch_assoc($result);
	}else{
		$return = @mysql_fetch_assoc($result);
	}
	
	return $return;
}

function soft_mysql_num_rows($result){
	
	// If $result is not a resource return else it will lead to FATAL error
	if(empty($result)){
		return false;
	}
	
	// $result->type == 1 when mysqlnd and unbuffered queries i.e. with use result
	// $result->type == 0 when not mysqlnd and buffered queries i.e. without use result
	if(extension_loaded('mysqlnd') && !empty($result->type)){
		$return = (int) (!empty($result));
	}elseif(extension_loaded('mysqli')){
		$return = @mysqli_num_rows($result);
	}else{
		$return = @mysql_num_rows($result);
	}
	
	return $return;
}

function softdie($txt){
	$array = array();
	$array['settings'] = $GLOBALS['settings'];
	$array['result'] = $txt;
	$array['tables'] = $GLOBALS['tables'];
	
	// Was there an error ?
	if(!empty($GLOBALS['error'])){
		$array['error'] = $GLOBALS['error'];
	}
	
	echo '<aefer>'.base64_encode(serialize($array)).'</aefer>';die();
}

// The settings
$settings = unserialize(base64_decode('[[[settings]]]'));
	
/*echo '<pre>';
print_r($settings);
echo '</pre>';*/

$host = $settings['softdbhost'];
$user = $settings['softdbuser'];
$pass = $settings['softdbpass'];
$db = $settings['softdb'];

//Make the Connection
$__conn = @soft_mysql_connect($host, $user, $pass, true);

//CHECK Errors and SELECT DATABASE
if(!empty($__conn)){
	if(!(@soft_mysql_select_db($db, $__conn))){
		$error[] = 'No such database : <strong>'.$db.'</strong>';
		softdie('seldb');
	}
}else{
	$error[] = 'MySQL connection could not be established';
	softdie('conn');
}

if(!empty($settings['get_tables'])){
	$result = soft_mysql_query("SHOW TABLES", $__conn);
	if(!$result){
		$error[] = 'Error while fetching tables from '.$db;
		softdie('err_tables');
	}
	if(soft_mysql_num_rows($result) > 0){
		while($row = soft_mysql_fetch_assoc($result)){
			$tables[] = $row['Tables_in_'.$db];
		}
	}else{
		$error[] = 'Empty Database : '.$db;
		softdie('no_tables');
	}
}

// Delete the file in the end.
@unlink(__FILE__);
softdie('DONE');

