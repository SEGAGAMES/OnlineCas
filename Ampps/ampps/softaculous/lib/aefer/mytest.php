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

function can_create_file(){
	$file = dirname(__FILE__).'/soft.tmp';
	$fp = @fopen($file, 'wb');
	if($fp === FALSE){
		return false;
	}
	
	if(@fwrite($fp, 'ampps') === FALSE){
		return false;
	}
	
	@fclose($fp);
	
	// Check if the file exists
	if(file_exists($file)){
		@unlink($file);
		return true;
	}
	
	return false;	
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

function softdie($txt){
	$array = array();
	$array['settings'] = $GLOBALS['settings'];
	$array['can_create_file'] = can_create_file();
	$array['result'] = $txt;
	echo '<aefer>'.base64_encode(serialize($array)).'</aefer>';die();
}

// First Delete yourself !
@unlink(__FILE__); // More has to be done here !

// The settings
$settings = unserialize(base64_decode('[[[settings]]]'));

if(!empty($settings['softdbhost'])){
	//Make the Connection
	$__conn = @soft_mysql_connect($settings['softdbhost'], $settings['softdbuser'], $settings['softdbpass'], true);
	
	//CHECK Errors and SELECT DATABASE
	if(!empty($__conn)){
		if(!(@soft_mysql_select_db($settings['softdb'], $__conn))){
			softdie('1');
		}
	}else{
		softdie('2');
	}
}

$max_exec = (int) ini_get('max_execution_time');

if($max_exec < 31){
	softdie('MAXTIME');
}

softdie('DONE');

