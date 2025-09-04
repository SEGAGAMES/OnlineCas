<?php

error_reporting(E_ALL);

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

function soft_mysql_num_fields($result){
	
	// If $result is not a resource return else it will lead to FATAL error
	if(empty($result)){
		return false;
	}
	
	if(extension_loaded('mysqli')){
		$return = @mysqli_num_fields($result);
	}else{
		$return = @mysql_num_fields($result);
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

function soft_mysql_free_result($result){
	
	// If $result is not a mysql result object return else it will lead to FATAL error
	if(empty($result) || !is_object($result)){
		return false;
	}
	
	if(extension_loaded('mysqli')){
		$return = @mysqli_free_result($result);
	}else{
		$return = @mysql_free_result($result);
	}
	
	return $return;
}

function soft_mysql_connect($host, $user, $pass, $newlink = false){

	try{
		if(extension_loaded('mysqli')){
			//echo 'mysqli';
			//To handle connection if user passes a custom port along with the host as 127.0.0.1:6446.
			//For testing, use port 127.0.0.1 instead of localhost as 127.0.0.1:6446 http://php.net/manual/en/mysqli.construct.php#112328
			$exh = explode(':', $host);
			if(!empty($exh[1])){
				$sconn = @mysqli_connect($exh[0], $user, $pass, '', $exh[1]);
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

function soft_mysql_fetch_row($result){
	
	// If $result is not a resource return else it will lead to FATAL error
	if(empty($result)){
		return false;
	}
	
	if(extension_loaded('mysqli')){
		$return = @mysqli_fetch_row($result);
	}else{
		$return = @mysql_fetch_row($result);
	}
	
	return $return;
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

function softdie($txt, $l_file = ''){
	$array = array();
	$array['result'] = $txt;
	
	// Add last transferred file to the array if the process is still INCOMPLETE
	if(!empty($l_file)){
		$array['l_file'] = $l_file;
	}
	
	// Was there an error ?
	if(!empty($GLOBALS['error'])){
		$array['error'] = $GLOBALS['error'];
	}
	
	echo '<aefer>'.base64_encode(serialize($array)).'</aefer>';die();
}

@unlink(__FILE__); // More has to be done here !

$source_struct = unserialize(base64_decode('[[[source_struct]]]'));
$liveins = unserialize(base64_decode('[[[ins]]]'));

$con = @soft_mysql_connect($liveins['softdbhost'], $liveins['softdbuser'], $liveins['softdbpass']);
			
if(!$con){
	soft_log(2, $__settings['softurl'].' Unable to connect to the live site database'.var_export($liveins, true));
	$error['mysql_connect'] = $l['cant_connect_mysql'];
	return false;
}
 
soft_mysql_select_db($liveins['softdb'], $con);

soft_mysql_query("SET FOREIGN_KEY_CHECKS=0", $con); //Ignore foreign key before truncate(If any foreign constrain set then truncate or drop will fail)

//First drop views if any?
if(!empty($source_struct['views'])){
	foreach($source_struct['views'] as $dk => $dv){
		soft_mysql_query("DROP VIEW ".$dv, $con);
	}
}
 
$result = soft_mysql_query('SHOW TABLES', $con);
$drop_queries = array();

while($row = soft_mysql_fetch_array($result)){
	// To be executed
	$drop_queries[] = "DROP TABLE `$row[0]`";
}

// Doing this outside loop because mysqlnd does not support query unless fetch is completed
foreach($drop_queries as $drop_query) {
    soft_mysql_query($drop_query, $con);
}

soft_mysql_query("SET FOREIGN_KEY_CHECKS=1", $con); //Enable it back
			
softdie('DONE');
