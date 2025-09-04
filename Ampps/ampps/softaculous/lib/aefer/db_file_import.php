<?php

set_time_limit(3000);

error_reporting(E_ALL);

function import_mysql_fn($dbfile, $host, $user, $pass, $db){
	
	global $settings, $error, $imported_tables;
	
	//Make the Connection
	if(empty($__conn)){
		$__conn = @soft_mysql_connect($host, $user, $pass, true);
	}
	
	//CHECK Errors and SELECT DATABASE
	if(!empty($__conn)){
		if(!(@soft_mysql_select_db($db, $__conn))){
			$error[] = 'The MySQL Database could not be selected '.soft_mysql_error($__conn);
			return false;
		}
	}else{
		$error[] = 'The MySQL Connection could not be established '.soft_mysql_error($__conn);
		return false;
	}
	
	$start = 0;
	$delimiter = ';';
	
	$file = fopen($dbfile, 'r');

	if(is_resource($file) === true){
		$query = array();
		$num = 0;
		while(feof($file) === false){

			if(is_string($query) === true){
				$query = array();
			}
			
			$line = fgets($file);
			
			if(!empty($GLOBALS['last_ftell']) && empty($start) && preg_match('!-- HEADER EXPORTED SOFTACULOUS!', trim($line))){
				fseek($file, $GLOBALS['last_ftell']);
				$line = fgets($file);
				$start = 1;
			}
			
			$query[] = $line;

			if(preg_match('~' . preg_quote($delimiter, '~') . '\s*$~iS', end($query)) === 1){
				$query = trim(implode('', $query));
	
				if(!empty($settings['parse_query'])){
					$query = @sparse($query);
				}
					
				// Save a list of tables imported
				soft_preg_replace_all('/CREATE(\s*?)TABLE(\s*?)(.*?)(\s*?)\(/is', $query, $imported_tables, 3);
				
				$result = soft_mysql_query($query, $__conn);
				
				if(!$result){
					$error[] = 'Could not make the query numbered'.' <br />MySQL Error No : '.soft_mysql_errno($__conn).'<br />MySQL Error : '.soft_mysql_error($__conn).(!empty($_GET['debug']) && $_GET['debug'] == 'errquery' ? ' Query : '.$query : '');
					return false;	
				}else{
					$num++;
				}
			
				// We can run the scripts for the end time already set
				if(time() >= $GLOBALS['end']){ 
					$GLOBALS['end_ftell'] = ftell($file); // set end ftell so that we know where to start from
					break;
				}  
			}
		}
		
		fclose($file);
		
		// Is there only one query ?
		if($num == 1){
			
			// Is it a SELECT query ?
			if(preg_match('/^(SELECT|SHOW|DESCRIBE)/is', $query)){ // CHECKSUM|OPTIMIZE|ANALYZE|CHECK|EXPLAIN
				
				// Accumulate the data !
				if(soft_mysql_num_rows($result) > 0){
					while($row = soft_mysql_fetch_assoc($result)){
						$return[] = $row;
					}
				}
				
			}
	
			// Is it a INSERT query ? Then we will have to return insert id
			if(preg_match('/^INSERT/is', $query)){
				$return[] = soft_mysql_insert_id($__conn);
			}	
		}

		// Are we to return the data ?
		if(!empty($return)){
			return $return;
		}
	}else{
		$error['err_no_open_db_file'] = 'Could not open the database import file';
		return false;
	}
	
	return true;
	
} 

// Internal function to add slashes to row values 
function PMA_sqlAddslashes($a_string = '', $is_like = false, $crlf = false, $php_code = false) {

    if ($is_like) {
        $a_string = str_replace('\\', '\\\\\\\\', $a_string);
    } else {
        $a_string = str_replace('\\', '\\\\', $a_string);
    }

    if ($crlf) {
        $a_string = str_replace("\n", '\n', $a_string);
        $a_string = str_replace("\r", '\r', $a_string);
        $a_string = str_replace("\t", '\t', $a_string);
    }

    if ($php_code) {
        $a_string = str_replace('\'', '\\\'', $a_string);
    } else {
        $a_string = str_replace('\'', '\'\'', $a_string);
    }

    return $a_string;
} // end of the 'PMA_sqlAddslashes()' function

// SELECT - Replace - UPDATE values in the database
function PMA_replaceUpdate($shost, $suser, $spass, $db, $tables, $crlf, $replace_data){

    global $current_row;
	
	//read table
	$clone_conn = soft_mysql_connect($shost, $suser, $spass);
	soft_mysql_select_db($db, $clone_conn);
	
	//write table
	$replace_conn = soft_mysql_connect($shost, $suser, $spass);
	soft_mysql_select_db($db, $replace_conn);
	
	// This is for foreign language characters
	//To read the values from the old DB in UTF8MB4 format
	soft_mysql_query('SET NAMES "utf8mb4"', $clone_conn);
	
	//Set default wait_timeout so mysql won't go away if wait time is low
	soft_mysql_query('SET @@wait_timeout=28800', $clone_conn);
	
	foreach($tables as $table){
		$table = trim($table, '`');
		
		$count = $GLOBALS['settings']['get_db_export_chunksize'];
		$limit = 0;

		// We have modified this code because we were getting error if inserts were >50000
		$cnt_qry = 'SELECT count(*) FROM `'.$db . '`.`' . $table . '`';
		$cnt_result = soft_mysql_query($cnt_qry, $clone_conn, 1);
		$cnt_res = soft_mysql_fetch_row($cnt_result);
		// Free resourse
		soft_mysql_free_result($cnt_result);
		
		$sql_query  = 'SELECT * FROM `'.$db . '`.`' . $table . '` LIMIT 0,'.$count;

		$formatted_table_name = '\'' . $table . '\'';

		$squery= soft_mysql_query($sql_query, $clone_conn, 1);
		
		$fields_cnt = soft_mysql_num_fields($squery);

		// Get field information
		
		if(extension_loaded('mysqli')){
			$fields_meta    = getFieldsMeta($squery);
		}else{
			$fields_meta    = PMA_DBI_get_fields_meta($squery);
		}
		
		//r_print($fields_meta);
		$field_flags    = array();
		for ($j = 0; $j < $fields_cnt; $j++) {
			$field_flags[$j] = soft_mysql_field_flags($squery, $j);
		}

		for ($j = 0; $j < $fields_cnt; $j++) {
			$field_set[$j] = '`'.$fields_meta[$j]->name . '`';
		}

		$sql_command = 'REPLACE';
	   
		$insert_delayed = '';
		$separator = ',';

		$schema_insert = $sql_command . $insert_delayed .' INTO `' . $table . '` VALUES';
		
		$search       = array("\x00", "\x0a", "\x0d", "\x1a"); //\x08\\x09, not required
		$replace      = array('\0', '\n', '\r', '\Z');
		$current_row  = 0;
		$query_size   = 0;

		$schema_insert .= $crlf;
		for($i = $cnt_res[0]; $i >= 0; $i--){
			
			// Now if 10000 rows has been processed than select next.
			if($count == 0){
				// Now free the result for preventing memory exhaust
				soft_mysql_free_result($squery);
				$count = $GLOBALS['settings']['get_db_export_chunksize'];
				$limit = $limit + $count;
				$sql_query  = 'SELECT * FROM `'.$db . '`.`' . $table . '` LIMIT '.($limit).', '.$count;
				$squery= soft_mysql_query($sql_query, $clone_conn, 1);
			}
			
			$row = soft_mysql_fetch_array($squery);
			
			// If we get empty result than break the loop
			if(!$row){
				break;
			}
			
			if ($current_row == 0) {
			/* 	$head = PMA_exportComment()
					  . PMA_exportComment('Dumping data for table' . ' ' . $formatted_table_name)
					  . PMA_exportComment()
					  . $crlf; */
				//soft_mysql_query($head, $clone_conn);
			}
			$current_row++;
			
			for ($j = 0; $j < $fields_cnt; $j++) {
				// NULL
				if (!isset($row[$j]) || is_null($row[$j])) {
					$values[]  = 'NULL';
				// a number
				// timestamp is numeric on some MySQL 4.1, BLOBs are sometimes numeric
				} elseif ($fields_meta[$j]->numeric && $fields_meta[$j]->type != 'timestamp' 
						&& !$fields_meta[$j]->blob) {
					$values[] = $row[$j];
				} elseif ($fields_meta[$j]->type == 'bit') {
					$values[] = PMA_printableBitValue($row[$j], $fields_meta[$j]->length);
				}elseif (soft_is_serialized_str($row[$j])){
					
					$replaced_data = strtr($row[$j], $replace_data);
					$replaced_data = recalculate_serialize($replaced_data);
					$values[] = '\'' . str_replace($search, $replace, PMA_sqlAddslashes($replaced_data)) . '\'';
					
				} else {
					$replaced_data = strtr($row[$j], $replace_data);
					$values[] = '\'' . str_replace($search, $replace, PMA_sqlAddslashes($replaced_data)) . '\'';
				} // end if
			} // end for
			
			
			if ($current_row == 1) {
				$insert_line  = $schema_insert . '(' . implode(', ', $values) . ')';
			} else {
				$insert_line  = '(' . implode(', ', $values) . ')';
				if ($query_size + strlen($insert_line) > 50000) {
					
					$query_buffer .= ';' . $crlf;
					
					// This is for foreign language characters
					//To insert the values into the new DB in UTF8MB4 format
					soft_mysql_query('SET NAMES "utf8mb4"', $replace_conn);
					soft_mysql_query('SET SESSION sql_mode = "NO_AUTO_VALUE_ON_ZERO"', $replace_conn);
					//echo $query_buffer.PHP_EOL;
					soft_mysql_query($query_buffer, $replace_conn);
					
					// We empty $query_buffer because we have already executed the query in previous line
					$query_buffer = '';
					$query_size = 0;
					$current_row = 1;
					$insert_line = $schema_insert . $insert_line;
				}
			}
			// Gather query size
			$query_size += strlen($insert_line);
			
			unset($values);

			$query_buffer .= ($current_row == 1 ? '' : $separator . $crlf) . $insert_line;
					
			// Decrement till 0 so that next 10000 rows can be selected
			$count--;
			
		}// End of FOR
		if ($current_row > 0) {
		
			// This is for foreign language characters
			//To insert the values into the new DB in UTF8MB4 format
			soft_mysql_query('SET NAMES "utf8mb4"', $replace_conn);
			soft_mysql_query('SET SESSION sql_mode = "NO_AUTO_VALUE_ON_ZERO"', $replace_conn);
			
			$query_buffer .= ';' . $crlf;
			//echo $query_buffer.'<br />';
			$ret = soft_mysql_query($query_buffer, $replace_conn);
			
			//echo soft_mysql_error($clone_conn).'<br />';
			$query_buffer = '';
			$query_size = 0;
			$current_row = 1;
			$insert_line = $schema_insert . $insert_line;
			
		}
		
		// Free resourses
		soft_mysql_free_result($squery);
		
		//$end_line = (!empty($query_buffer) ? $crlf : '' ). PMA_exportComment('--------------------------------------------------------');
		//soft_mysql_query($end_line, $clone_conn);
		//return $query_buffer . $end_line;
	}
		
	return true;
		
}

function sparse($string){

global $settings;

	foreach($settings as $k => $v){
		if(($k == 'softpath' || $k == 'softdatadir' || $k == 'wwwdir') && function_exists('altdomroots')) $v = altdomroots($v);	
		if(!is_array($v)){
			$string = str_replace('[['.$k.']]', $v, $string);
		}
		
	}	
	return $string;
	
}

function softdie($txt, $l_ftell = ''){
	$array = array();
	$array['settings'] = $GLOBALS['settings'];
	$array['result'] = $txt;
	$array['data'] = (!empty($GLOBALS['data']) ? $GLOBALS['data'] : '');
	$array['imported_tables'] = (!empty($GLOBALS['imported_tables']) ? $GLOBALS['imported_tables'] : '');
	
	if(!empty($l_ftell)){
		$array['l_ftell'] = $l_ftell;
	}
	
	// Was there an error ?
	if(!empty($GLOBALS['error'])){
		$array['error'] = $GLOBALS['error'];
	}
	
	echo '<aefer>'.base64_encode(serialize($array)).'</aefer>';die();
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
	
	// php 8.1 throws mysqli_sql_exception if the database doesn't exists
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

function soft_mysql_fetch_field($result, $field){
	
	// If $result is not a resource return else it will lead to FATAL error
	if(empty($result)){
		return false;
	}
	
	if(extension_loaded('mysqli')){
		$return = @mysqli_fetch_field($result, $field);
	}else{
		$return = @mysql_fetch_field($result, $field);
	}
	
	return $return;
}


function soft_mysql_field_flags($result, $i){
	
	// If $result is not a resource return else it will lead to FATAL error
	if(empty($result)){
		return false;
	}
	
	if(!extension_loaded('mysqli')){
		return mysql_field_flags($result, $i);
	}
	
	$f = mysqli_fetch_field_direct($result, $i);
	$type = $f->type;
	$charsetnr = $f->charsetnr;
	$f = $f->flags;
	$flags = '';
	if ($f & MYSQLI_UNIQUE_KEY_FLAG) {
		$flags .= 'unique ';
	}
	if ($f & MYSQLI_NUM_FLAG) {
		$flags .= 'num ';
	}
	if ($f & MYSQLI_PART_KEY_FLAG) {
		$flags .= 'part_key ';
	}
	if ($f & MYSQLI_SET_FLAG) {
		$flags .= 'set ';
	}
	if ($f & MYSQLI_TIMESTAMP_FLAG) {
		$flags .= 'timestamp ';
	}
	if ($f & MYSQLI_AUTO_INCREMENT_FLAG) {
		$flags .= 'auto_increment ';
	}
	if ($f & MYSQLI_ENUM_FLAG) {
		$flags .= 'enum ';
	}
	// See http://dev.mysql.com/doc/refman/6.0/en/c-api-datatypes.html:
	// to determine if a string is binary, we should not use MYSQLI_BINARY_FLAG
	// but instead the charsetnr member of the MYSQL_FIELD
	// structure. Watch out: some types like DATE returns 63 in charsetnr
	// so we have to check also the type.
	// Unfortunately there is no equivalent in the mysql extension.
	if (($type == MYSQLI_TYPE_TINY_BLOB || $type == MYSQLI_TYPE_BLOB
		|| $type == MYSQLI_TYPE_MEDIUM_BLOB || $type == MYSQLI_TYPE_LONG_BLOB
		|| $type == MYSQLI_TYPE_VAR_STRING || $type == MYSQLI_TYPE_STRING)
		&& 63 == $charsetnr
	) {
		$flags .= 'binary ';
	}
	if ($f & MYSQLI_ZEROFILL_FLAG) {
		$flags .= 'zerofill ';
	}
	if ($f & MYSQLI_UNSIGNED_FLAG) {
		$flags .= 'unsigned ';
	}
	if ($f & MYSQLI_BLOB_FLAG) {
		$flags .= 'blob ';
	}
	if ($f & MYSQLI_MULTIPLE_KEY_FLAG) {
		$flags .= 'multiple_key ';
	}
	if ($f & MYSQLI_UNIQUE_KEY_FLAG) {
		$flags .= 'unique_key ';
	}
	if ($f & MYSQLI_PRI_KEY_FLAG) {
		$flags .= 'primary_key ';
	}
	if ($f & MYSQLI_NOT_NULL_FLAG) {
		$flags .= 'not_null ';
	}
	return trim($flags);
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

function soft_mysql_affected_rows($conn){

	if(empty($conn)){
		return false;
	}
	
	if(extension_loaded('mysqli')){
		$return = @mysqli_affected_rows($conn);
	}else{
		$return = @mysql_affected_rows($conn);
	}
	
	return $return;
}

function soft_mysql_insert_id($conn){
	
	if(empty($conn)){
		return false;
	}
	
	if(extension_loaded('mysqli')){
		$return = @mysqli_insert_id($conn);
	}else{
		$return = @mysql_insert_id($conn);
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

function soft_mysql_error($conn){
	
	if(empty($conn)){
		return false;
	}
	
	if(extension_loaded('mysqli')){
		// In mysqli if connection  is not made then we will get connection error using the following function.
		if(empty($conn)){
			$return = @mysqli_connect_error();
		}else{
			$return = @mysqli_error($conn);
		}
		
	}else{
		$return = @mysql_error($conn);
	}
	
	return $return;
}

function soft_mysql_errno($conn){
	
	if(empty($conn)){
		return false;
	}
	
	if(extension_loaded('mysqli')){
		$return = @mysqli_errno($conn);
	}else{
		$return = @mysql_errno($conn);
	}
	
	return $return;
}

function getFieldsMeta($result){
	// Build an associative array for a type look up
	
	// If $result is not a resource return else it will lead to FATAL error
	if(empty($result)){
		return false;
	}
	
	if(!defined('MYSQLI_TYPE_VARCHAR')){
		define('MYSQLI_TYPE_VARCHAR', 15);
	}
	
	$typeAr = array();
	$typeAr[MYSQLI_TYPE_DECIMAL]     = 'real';
	$typeAr[MYSQLI_TYPE_NEWDECIMAL]  = 'real';
	$typeAr[MYSQLI_TYPE_BIT]         = 'int';
	$typeAr[MYSQLI_TYPE_TINY]        = 'int';
	$typeAr[MYSQLI_TYPE_SHORT]       = 'int';
	$typeAr[MYSQLI_TYPE_LONG]        = 'int';
	$typeAr[MYSQLI_TYPE_FLOAT]       = 'real';
	$typeAr[MYSQLI_TYPE_DOUBLE]      = 'real';
	$typeAr[MYSQLI_TYPE_NULL]        = 'null';
	$typeAr[MYSQLI_TYPE_TIMESTAMP]   = 'timestamp';
	$typeAr[MYSQLI_TYPE_LONGLONG]    = 'int';
	$typeAr[MYSQLI_TYPE_INT24]       = 'int';
	$typeAr[MYSQLI_TYPE_DATE]        = 'date';
	$typeAr[MYSQLI_TYPE_TIME]        = 'time';
	$typeAr[MYSQLI_TYPE_DATETIME]    = 'datetime';
	$typeAr[MYSQLI_TYPE_YEAR]        = 'year';
	$typeAr[MYSQLI_TYPE_NEWDATE]     = 'date';
	$typeAr[MYSQLI_TYPE_ENUM]        = 'unknown';
	$typeAr[MYSQLI_TYPE_SET]         = 'unknown';
	$typeAr[MYSQLI_TYPE_TINY_BLOB]   = 'blob';
	$typeAr[MYSQLI_TYPE_MEDIUM_BLOB] = 'blob';
	$typeAr[MYSQLI_TYPE_LONG_BLOB]   = 'blob';
	$typeAr[MYSQLI_TYPE_BLOB]        = 'blob';
	$typeAr[MYSQLI_TYPE_VAR_STRING]  = 'string';
	$typeAr[MYSQLI_TYPE_STRING]      = 'string';
	$typeAr[MYSQLI_TYPE_VARCHAR]     = 'string'; // for Drizzle
	// MySQL returns MYSQLI_TYPE_STRING for CHAR
	// and MYSQLI_TYPE_CHAR === MYSQLI_TYPE_TINY
	// so this would override TINYINT and mark all TINYINT as string
	// https://sourceforge.net/p/phpmyadmin/bugs/2205/
	//$typeAr[MYSQLI_TYPE_CHAR]        = 'string';
	$typeAr[MYSQLI_TYPE_GEOMETRY]    = 'geometry';
	$typeAr[MYSQLI_TYPE_BIT]         = 'bit';

	$fields = mysqli_fetch_fields($result);

	// this happens sometimes (seen under MySQL 4.0.25)
	if (!is_array($fields)) {
		return false;
	}

	foreach ($fields as $k => $field) {
		$fields[$k]->_type = $field->type;
		$fields[$k]->type = $typeAr[$field->type];
		$fields[$k]->_flags = $field->flags;
		$fields[$k]->flags = soft_mysql_field_flags($result, $k);

		// Enhance the field objects for mysql-extension compatibilty
		//$flags = explode(' ', $fields[$k]->flags);
		//array_unshift($flags, 'dummy');
		$fields[$k]->multiple_key
			= (int) (bool) ($fields[$k]->_flags & MYSQLI_MULTIPLE_KEY_FLAG);
		$fields[$k]->primary_key
			= (int) (bool) ($fields[$k]->_flags & MYSQLI_PRI_KEY_FLAG);
		$fields[$k]->unique_key
			= (int) (bool) ($fields[$k]->_flags & MYSQLI_UNIQUE_KEY_FLAG);
		$fields[$k]->not_null
			= (int) (bool) ($fields[$k]->_flags & MYSQLI_NOT_NULL_FLAG);
		$fields[$k]->unsigned
			= (int) (bool) ($fields[$k]->_flags & MYSQLI_UNSIGNED_FLAG);
		$fields[$k]->zerofill
			= (int) (bool) ($fields[$k]->_flags & MYSQLI_ZEROFILL_FLAG);
		$fields[$k]->numeric
			= (int) (bool) ($fields[$k]->_flags & MYSQLI_NUM_FLAG);
		$fields[$k]->blob
			= (int) (bool) ($fields[$k]->_flags & MYSQLI_BLOB_FLAG);
	}
	return $fields;
}

function PMA_printableBitValue($value, $length){
	// if running on a 64-bit server or the length is safe for decbin()
	if (PHP_INT_SIZE == 8 || $length < 33) {
		$printable = decbin($value);
	} else {
		// FIXME: does not work for the leftmost bit of a 64-bit value
		$i = 0;
		$printable = '';
		while ($value >= pow(2, $i)) {
			++$i;
		}
		if ($i != 0) {
			--$i;
		}

		while ($i >= 0) {
			if ($value - pow(2, $i) < 0) {
				$printable = '0' . $printable;
			} else {
				$printable = '1' . $printable;
				$value = $value - pow(2, $i);
			}
			--$i;
		}
		$printable = strrev($printable);
	}
	$printable = str_pad($printable, $length, '0', STR_PAD_LEFT);
	return $printable;
}

/**
 * Determines if the given string is a serialized array/object
 *
 * @package		softaculous
 * @author		Brijesh Kothari
 * @since		5.3.1
 * @param       	string $str string to check if it is serialized or not
 * @returns		boolean true if the string is serialized array or object else false
 */
function soft_is_serialized_str($data, $strict = true){
	
	/* if(preg_match('/^a:(.*?):{/is', $data) || preg_match('/^O:(.*?):/is', $data)){
		return true;
	}
	
	return false; */
	
	// if it isn't a string, it isn't serialized.
	if (!is_string($data)) {
		return false;
	}
	$data = trim($data);
	if ('N;' == $data) {
		return true;
	}
	if (strlen($data) < 4) {
		return false;
	}
	if (':' !== $data[1]) {
		return false;
	}
	
	if ($strict) {
		$lastc = substr($data, -1);
		if (';' !== $lastc && '}' !== $lastc) {
			return false;
		}
	} else {
		$semicolon = strpos($data, ';');
		$brace     = strpos($data, '}');
		// Either ; or } must exist.
		if (false === $semicolon && false === $brace) {
			return false;
		}
		// But neither must be in the first X characters.
		if (false !== $semicolon && $semicolon < 3) {
			return false;
		}
		if (false !== $brace && $brace < 4) {
			return false;
		}
	}
	$token = $data[0];
	
	switch ($token) {
		case 's' :
			if ($strict) {
				if ('"' !== substr($data, -2, 1)) {
					return false;
				}
			} elseif (false === strpos($data, '"')) {
				return false;
			}
		// or else fall through
		case 'a' :
		case 'O' :
			return (bool) preg_match("/^{$token}:[0-9]+:/s", $data);
		case 'b' :
		case 'i' :
		case 'd' :
			$end = $strict ? '$' : '';
			return (bool) preg_match("/^{$token}:[0-9.E-]+;$end/", $data);
	}
	
	return false;
	
}

/**
 * Fixes broken serialized string (object, array)
 *
 * @package      string 
 * @author       Bhavana Sangare
 * @param        string $str
 * @return       Returns string with correct string lenght
 * @since     	 5.2.8
 */
// Note : This will not work for a serialized string in an array key
function recalculate_serialize($str){
	
	if(soft_is_serialized_str($str)){
		
		// NOTE : Any changes in this pattern will need to be handled in callback function as well
		$str = preg_replace_callback('/s:(\d+):"(.*?)";(?=([:]|(?<=;)\}(?!\.)|a:|s:|S:|b:|d:|i:|o:|O:|C:|r:|R:|N;))/s', 'fix_serialize_callback', $str);
		
	}
	
	return $str;
}

/**
 * Callback for fixing any broken serialized string
 *
 * @package      string 
 * @author       Brijesh Kothari
 * @param        array $matches
 * @return       string Returns the fixed serialize content
 * @since     	 5.3.1
 * NOTE : Any changes in this function will affect anywhere this function is used as a callback
 */
function fix_serialize_callback($matches){
	
	//r_print($matches);
	
	// We are not using soft_is_serialized_str() because that checks for ; or } at the end and our data can be a:2:{s:3:"three
	if(preg_match('/^a:(.*?):{/is', $matches[2]) || preg_match('/^O:(.*?):/is', $matches[2])){
		return $matches[0];
	}
	
	return 's:'.strlen($matches[2]).':"'.$matches[2].'";';
}

function soft_preg_replace_all($pattern, $file, &$var, $valuenum, $stripslashes = ''){
	preg_match_all($pattern, $file, $matches);
	foreach($matches[$valuenum] as $mk => $mv){
		if(empty($stripslashes)){
			$var[] = trim($mv);
		}else{
			$var[] = stripslashes(trim($mv));
		}
	}
}

function optGET($name, $default = ''){

global $error;

	//Check the GETED NAME was GETed
	if(isset($_GET[$name])){
	
		return inputsec(htmlizer(trim($_GET[$name])));
		
	}else{
		
		return $default;
	
	}

}

function optREQ($name, $default = ''){

global $error;

	//Check the POSTED NAME was posted
	if(isset($_REQUEST[$name])){
	
		return inputsec(htmlizer(trim($_REQUEST[$name])));
		
	}else{
		
		return $default;
	
	}

}

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

function htmlizer($string){

global $globals;

	$string = htmlentities($string, ENT_QUOTES, $globals['charset']);
	
	preg_match_all('/(&amp;#(\d{1,7}|x[0-9a-fA-F]{1,6});)/', $string, $matches);//r_print($matches);
	
	foreach($matches[1] as $mk => $mv){		
		$tmp_m = entity_check($matches[2][$mk]);
		$string = str_replace($matches[1][$mk], $tmp_m, $string);
	}
	
	return $string;
	
}

function entity_check($string){
	
	//Convert Hexadecimal to Decimal
	$num = ((substr($string, 0, 1) === 'x') ? hexdec(substr($string, 1)) : (int) $string);
	
	//Squares and Spaces - return nothing 
	$string = (($num > 0x10FFFF || ($num >= 0xD800 && $num <= 0xDFFF) || $num < 0x20) ? '' : '&#'.$num.';');
	
	return $string;
			
}

@unlink(__FILE__); // More has to be done here !

// The settings
$settings = unserialize(base64_decode('[[[settings]]]'));
$software = unserialize(base64_decode('[[[software]]]'));
$replace_data = unserialize(base64_decode('[[[replace_data]]]'));

global $user, $globals, $theme, $softpanel, $settings, $iscripts, $catwise, $error;

// Import the DATABASE
$dbfile = $settings['db_import_file'];

if(!file_exists($dbfile)){
	$error['no_db_file'] = 'Database import file does not exist';
	softdie('fail_nofile');
}

$dbuser = (empty($softpanel->backupmysql['user']) ? $settings['softdbuser'] : $softpanel->backupmysql['user']);
$dbpass = (empty($softpanel->backupmysql['pass']) ? $settings['softdbpass'] : $softpanel->backupmysql['pass']);

$sql_conn = soft_mysql_connect($settings['softdbhost'], $dbuser, $dbpass, true);

if(!$sql_conn){
	$error['mysql_connect'] = 'Could not connect mysql for importing the database';
	softdie('conn');
}

// We need to stop execution in 25 secs.. We will be called again if the process is incomplete
//Increased the exec time to 500 temporarily as Backup on remote in aefer is creating incorrectly compressed file when the backups executes in loop

// Is custom keep alive time defained ? 
if(!empty($settings['SOFTACULOUS_KEEP_ALIVE'])){
	$keepalive = (int) $settings['SOFTACULOUS_KEEP_ALIVE'];
}

// Set default value
if(empty($keepalive)){
	$keepalive = 25;
}

$GLOBALS['end'] = (int) time() + $keepalive;

// Empty last file everytime as a precaution
$GLOBALS['last_ftell'] = '';
$GLOBALS['last_ftell'] = (int) optGET('last_ftell');

if(!empty($_REQUEST['imported_tables'])){
	$GLOBALS['imported_tables'] = unserialize(base64_decode(optREQ('imported_tables')));
}
	
// Set default values
$GLOBALS['start'] = 0;
$GLOBALS['end_ftell'] = '';

if(!import_mysql_fn($dbfile, $settings['softdbhost'],  $settings['softdbuser'], $settings['softdbpass'], $settings['softdb'])){
	$error[] = 'Could not import the sql file';
	softdie('failimport');
}

// Is the backup process INCOMPLETE ? 
if(!empty($GLOBALS['end_ftell'])){
	softdie('INCOMPLETE', $GLOBALS['end_ftell']);
}

// Should be done only if whole db import is completed
if(!empty($replace_data)){
	// Select, Replace and Update the data in database
	if(!PMA_replaceUpdate($settings['softdbhost'], $settings['softdbuser'], $settings['softdbpass'], $settings['softdb'], $imported_tables, "\n", $replace_data)){
		$error[] = 'Could not replace data in the database';
		softdie('failimport');
	}
}

softdie('DONE');

