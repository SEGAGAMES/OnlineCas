<?php

set_time_limit(3000);

error_reporting(E_ALL);

/**
 * Export a MySQL Database
 *
 * @package      database
 * @author       Pulkit Gupta
 * @param        string $host The MySQL Host
 * @param        string $user The MySQL User
 * @param        string $pass The MySQL User password
 * @param        string $db The Database Name
 * @param        string $file The path of the file where the data is to be saved.
 * @return       bool true on success. false on failure
 * @since     	 1.0
 */

// Export the database !!!
function export_mysql_fn($shost, $suser, $spass, $sdb, $sdbfile, $replace_data){
	//echo $shost.' == '. $suser.' == '. $spass.' == '. $sdb.' == '. $sdbfile;
	
	global $skip_tables_data, $settings, $_thisdb_tables;
	
	$link = soft_mysql_connect($shost, $suser, $spass, true);
	
	soft_mysql_query('SET CHARACTER SET utf8mb4', $link);
	
	//Set default wait_timeout so mysql won't go away if wait time is low
	soft_mysql_query('SET @@wait_timeout=28800', $link);
	
	// Open and create a file handle for sql.
	$handle = fopen($sdbfile,'a');
	
	$s_def = $alter_queries = $sresponse = '';
	$sql_alter = $tables = array();
	
	// Export the header only if we are writing the file for the 1st time, no header for appending the file
	if(empty($GLOBALS['last_table'])){
		$ser_ver = PMA_sversion($link);
		$s_def = PMA_exportHeader($sdb, $ser_ver);
		
		fwrite($handle, $s_def);
	}
	
	// We did not create the database ! So just export the tables required for this database
	if(empty($settings['source_data']['dbcreated']) && !empty($settings['source_data']['softdbtables'])){
	
		$thisdb_tables = $settings['source_data']['softdbtables'];
		
		$additional_tables = (!empty($settings['source_data']['additional_tables']) ? $settings['source_data']['additional_tables'] : array());
		
		if(!is_array($settings['source_data']['softdbtables'])){
			$thisdb_tables = unserialize($settings['source_data']['softdbtables']);
		}
		
		$thisdb_tables = (!empty($additional_tables) ? array_merge($additional_tables, $thisdb_tables) : $thisdb_tables);
	
		// This is just to remove the ` since we are not getting it in $tables below
		foreach($thisdb_tables as $tk => $tv){
			$_thisdb_tables[trim($tk, '`')] = trim($tv, '`');
		}
	}
	
	//List Views
	$squery = soft_mysql_query('SHOW TABLE STATUS FROM `' . $sdb . '` WHERE COMMENT = \'VIEW\'', $link);
	
	$views = array();	
	if(soft_mysql_num_rows($squery) > 0){
		while($row = soft_mysql_fetch_row($squery)){
			$views[] = $row[0];
		}
	}
	
	// Sort the views
	usort($views, 'strnatcasecmp');
	
	// List the tables
	$squery = soft_mysql_query('SHOW TABLES FROM `' . $sdb . '`', $link);
	
	while($row = soft_mysql_fetch_row($squery)){
	
		// We do not need to export this table
		if(!empty($_thisdb_tables) && is_array($_thisdb_tables) && !in_array($row[0], $_thisdb_tables)){
			continue;
		}
		
		if(in_array($row[0], $views)){
			continue;
		}
		
		$tables[] = $row[0];
	}
	
	// Sort the tables
	usort($tables, 'strnatcasecmp');	
	
	foreach($tables as $table => $v){
		
		// Get the table structure(table definition)
		$stable_defn = PMA_getTableDef($link, $sdb, $v, "\n");
		
		$s_def = $stable_defn['structure']."\n";
		
		// List of alter queries 
		// We have changed this because the OLD method was putting the ALTER queries after CREATE table query which was causing issues.
		// This is before skipping existing done tables because we have not written the alter queries for the tables that are exported
		if(!empty($stable_defn['alter'])){
			$alter_queries .= $stable_defn['alter'];
		}
		
		
		if(!empty($GLOBALS['last_table']) && $GLOBALS['start'] == 0){
			if($GLOBALS['last_table'] == $v){
				$GLOBALS['start'] = 1; // give a jump start once the last backed up table is found..
			}
			continue; // continue to skip tables already exported
		}
		
		fwrite($handle, $s_def);
		
		// Get the table data(table contents)
		// We have added $handle so that we can write the INSERT queries directly when we get it. 
		// Basically To avoid MEMORY EXHAUST FOR  BIG INSERTS
		
		//Skip tables insert queries that may cause an issue($skip_tables_data defined in scripts clone.php)
		if(!is_array($skip_tables_data) || !in_array($v, $skip_tables_data)){
			PMA_exportData($link, $sdb, $v, "\n", $handle, $replace_data);
		}
		
		// We can run the script for the end time already set
		if(time() >= $GLOBALS['end']){ 
			$GLOBALS['end_table'] = $v; // set end table so that we know where to start from
			break;
		}
	}
	
	// If we have reached time limit return
	// We will continue in the next call
	if(!empty($GLOBALS['end_table'])){
		fclose($handle);
		return true;
	}
	
	//Save Views
	foreach($views as $view){
		$match_found = false;
		$defn = PMA_getViews($sdb, $view, "\n", $link);
		
		$view_def = $defn['structure']."\n";
		$view_def = str_replace($sdb, $settings['softdb'], $view_def);
		
		foreach($_thisdb_tables as $table){
			if(preg_match('/'.$table.'/is', $view_def)){
				$match_found = true;
				break;
			}
		}
		
		if(!empty($match_found)){
			fwrite($handle, $view_def);
		}
	}
	
	fwrite($handle, $alter_queries);
	
	//List Triggers/Events/Procedures/Functions	
	//Triggers
	$triggers = PMA_getTriggers($sdb, $link);
	foreach($triggers as $trigger){
		fwrite($handle, "\n".$trigger['drop']."\nDELIMITER //\n");
		fwrite($handle, $trigger['create']."// \nDELIMITER ;\n\n");
	}
	
	//Events
	$events = PMA_getEvents($sdb, $link);
	foreach($events as $event){
		fwrite($handle, "\n".$event['drop']."\nDELIMITER $$ \n-- \n-- Events \n--\n");
		fwrite($handle, $event['create']);
		fwrite($handle, "\n$$ \nDELIMITER ;\n\n");
	}
	
	//Functions
	$functions = PMA_getProceduresOrFunctions($sdb, 'FUNCTION', $link);
	foreach($functions as $function){
		fwrite($handle, "\n".$function['drop']."\nDELIMITER $$ \n-- \n-- Functions \n--\n");
		fwrite($handle, $function['create']);
		fwrite($handle, "\n$$ \nDELIMITER ;\n\n");
	}
	
	//Procedures
	$procedures = PMA_getProceduresOrFunctions($sdb, 'PROCEDURE', $link);
	foreach($procedures as $procedure){
		fwrite($handle, "\n".$procedure['drop']."\nDELIMITER $$ \n-- \n-- Procedures \n--\n");
		fwrite($handle, $procedure['create']);
		fwrite($handle, "\n$$ \nDELIMITER ;\n\n");
	}
	
	$sresponse = PMA_exportFooter(); // Just to add the finishing lines
	fwrite($handle, $sresponse);
	fclose($handle);
	
	// Just check that file is created or not ??
	if(file_exists($sdbfile)){
		return true;
	}
	
	return false;
	
} //End of database export

function PMA_getViews($db, $view, $crlf, $link){
	
	$schema_create = $auto_increment = $dump = '';
	$new_crlf = $crlf;
	
	// This is for foreign language characters
	//To read the values from the old DB in UTF8MB4 format
	//soft_mysql_query('SET NAMES "utf8mb4"', $link);
	
	// Complete view dump,
	// Whether to quote view and fields names or not
	soft_mysql_query('SET SQL_QUOTE_SHOW_CREATE = 1', $link);
	
	// Create view structure
	$result = soft_mysql_query('SHOW CREATE VIEW `'.$db.'`.`'.$view.'`', $link);

	// Construct the dump for the view structure
	$dump .=  '--' . $crlf
			. '-- Structure for view ' . '`' . $view.'`' . $crlf
			. '--' . $crlf
			. 'DROP VIEW IF EXISTS `' . $view . '`;' . $crlf . $crlf;
	
	if ($row = soft_mysql_fetch_assoc($result)) {
			
		$create_query = $row['Create View'];
		
		preg_match('/DEFINER=(.*?) SQL/is', $create_query, $matches);
		$create_query = str_replace($matches[1], 'CURRENT_USER', $create_query);

		$schema_create .= $new_crlf . $dump;

		// Convert end of line chars to one that we want (note that MySQL doesn't return query it will accept in all cases)
		if (strpos($create_query, "(\r\n ")) {
			$create_query = str_replace("\r\n", $crlf, $create_query);
		} elseif (strpos($create_query, "(\n ")) {
			$create_query = str_replace("\n", $crlf, $create_query);
		} elseif (strpos($create_query, "(\r ")) {
			$create_query = str_replace("\r", $crlf, $create_query);
		}
		
		$schema_create .= $create_query;
	}
		
	soft_mysql_free_result($result);
    	
	// Dump the structure !!!
	$return['structure'] = $schema_create . ';' . $crlf;
	
	return $return;
}

function PMA_getTriggers($db, $link){
	
	global $settings, $_thisdb_tables;
	
	$query = soft_mysql_query('SHOW TRIGGERS FROM `' . $db . '`', $link);
	$result = array(); //added as empty so don't give warning when data is empty..
		
	while($trigger = soft_mysql_fetch_assoc($query)){
		
		if(!in_array($trigger['Table'], $_thisdb_tables)){
			continue;
		}
		
		$one_result = array();
		$one_result['name'] = $trigger['Trigger'];
		$one_result['table'] = $trigger['Table'];
		$one_result['action_timing'] = $trigger['Timing'];
		$one_result['event_manipulation'] = $trigger['Event'];
		$one_result['definition'] = $trigger['Statement'];
		$one_result['definer'] = $trigger['Definer'];
		$one_result['full_trigger_name'] = '`'.$trigger['Trigger'].'`';
		$one_result['drop'] = 'DROP TRIGGER IF EXISTS `' . $db .'`.'. $one_result['full_trigger_name'].';';
		$one_result['create'] = 'CREATE TRIGGER '
			. $one_result['full_trigger_name'] . ' '
			. $trigger['Timing'] . ' '
			. $trigger['Event']
			. ' ON ' . '`'. $trigger['Table'].'`'
			. "\n" . ' FOR EACH ROW '
			. $trigger['Statement'] . "\n" . $delimiter . "\n";
		$one_result['drop'] = str_replace($db, $settings['softdb'], $one_result['drop']);
		$one_result['create'] = str_replace($db, $settings['softdb'], $one_result['create']);	
		$result[] = $one_result;
	}

	// Sort results by name
	$name = array();
	foreach ($result as $value) {
		$name[] = $value['name'];
	}
	
	if(!empty($result)){
		array_multisort($name, SORT_ASC, $result);
	}
	
	return($result);
	
}

function PMA_getEvents($db, $link){
	
	$query = soft_mysql_query('SHOW EVENTS FROM `' . $db . '`', $link);

	$result = array();
	while ($event = soft_mysql_fetch_assoc($query)) {
			$one_result = array();
			$one_result['name'] = $event['Name'];
			$one_result['type'] = $event['Type'];
			$one_result['status'] = $event['Status'];
			$one_result['drop'] = 'DROP EVENT IF EXISTS `' . $db .'`.`'. $one_result['name'].'`;';
			
			$result[] = $one_result;
	}

	// Doing this outside loop because mysqlnd does not support query unless fetch is completed
	foreach($result as $rk => $value) {
		$result[$rk]['create'] = PMA_getDefinition($db, 'EVENT', $value['name'], $link);
	}
	
	// Sort results by name
	$name = array();
	foreach ($result as $value) {
		$name[] = $value['name'];
	}
	
	if(!empty($result)){
		array_multisort($name, SORT_ASC, $result);
	}

	return $result;
}

/**
 * returns the array of PROCEDURE/FUNCTION names
 *
 * @param string $db    db name
 * @param string $which PROCEDURE | FUNCTION | EVENT
 * @param string $link  connection link to the database
 *
 * @return array names of Procedures/Functions
 */
function PMA_getProceduresOrFunctions($db, $which, $link)
{
	$query = soft_mysql_query('SHOW ' . $which . ' STATUS;', $link);
	$result = array();
	
	while($one_show = soft_mysql_fetch_assoc($query)) {
		if ($one_show['Db'] == $db && $one_show['Type'] == $which) {
			$one_show['drop'] = 'DROP '.$which.' IF EXISTS `' . $db .'`.`'. $one_show['Name'].'`;';
			
			$result[] = $one_show;
		}
	}

	// Doing this outside loop because mysqlnd does not support query unless fetch is completed
	foreach($result as $rk => $value) {
	    $result[$rk]['create'] = PMA_getDefinition($db, $which, $value['Name'], $link);
	}
	
	return $result;
}

/**
 * returns the definition of a specific PROCEDURE, FUNCTION or EVENT
 *
 * @param string $db    db name
 * @param string $which PROCEDURE | FUNCTION | EVENT
 * @param string $name  the procedure|function|event name
 * @param string $link  connection link to the database
 *
 * @return string the definition
 */
function PMA_getDefinition($db, $which, $name, $link)
{
	$returned_field = array(
		'PROCEDURE' => 'Create Procedure',
		'FUNCTION'  => 'Create Function',
		'EVENT'     => 'Create Event'
	);
	$query = soft_mysql_query('SHOW CREATE '.$which.' `'.$db.'`.`'.$name.'`;', $link);
	
	if ($res = soft_mysql_fetch_assoc($query)){
		return($res[$returned_field[$which]]);
	}
	
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


// Form the table structure && the alter queries if any !! 
function PMA_getTableDef($link, $db, $table, $crlf, $show_dates = false, $add_semicolon = true) {
	
    global $sql_drop_table, $sql_alter;
    global $sql_constraints;
    global $sql_constraints_query; // just the text of the query
    global $sql_drop_foreign_keys;

    $schema_create = $auto_increment = $sql_constraints = '';
    $new_crlf = $crlf;
	
	// Get the Status of the table so as to produce the auto increment value
	$qresult = soft_mysql_query('SHOW TABLE STATUS FROM `'.$db.'` LIKE \''.$table.'\'', $link);
	
	// Handle auto-increment values
	if (soft_mysql_num_rows($qresult) > 0) {
		
		$tmpres = soft_mysql_fetch_assoc($qresult);
		
		if($tmpres['Comment'] != 'VIEW'){
			// Is auto-increment value is set ??
			if(!empty($tmpres['Auto_increment'])){
				$auto_increment .= ' AUTO_INCREMENT=' . $tmpres['Auto_increment'] . ' ';
			}
			
		}
	
	}
	// Free resourse
	soft_mysql_free_result($qresult);
	
	//added as empty so don't give warning when data is empty..
	$dump = '';
	
	// Construct the dump for the table structure
	$dump .=  '--' . $crlf
			. '-- Table structure for table ' . '`' . $table.'`' . $crlf
			. '--' . $crlf . $crlf;
		 
    $schema_create .= $new_crlf . $dump;

    // Complete table dump,
    // Whether to quote table and fields names or not
    soft_mysql_query('SET SQL_QUOTE_SHOW_CREATE = 1', $link);
	
	// Create table structure
	$result = soft_mysql_query('SHOW CREATE TABLE `'.$db.'`.`'.$table.'`', $link);
	
    if ($row = soft_mysql_fetch_assoc($result)) {
		
        $create_query = $row['Create Table'];
		unset($row);

        // Convert end of line chars to one that we want (note that MySQL doesn't return query it will accept in all cases)
        if (strpos($create_query, "(\r\n ")) {
            $create_query = str_replace("\r\n", $crlf, $create_query);
        } elseif (strpos($create_query, "(\n ")) {
            $create_query = str_replace("\n", $crlf, $create_query);
        } elseif (strpos($create_query, "(\r ")) {
            $create_query = str_replace("\r", $crlf, $create_query);
        }

        // are there any constraints to cut out?
        if (preg_match('@CONSTRAINT|FOREIGN[\s]+KEY@', $create_query)) {

            // Split the query into lines, so we can easily handle it.
			// We know lines are separated by $crlf (done few lines above).	
            $sql_lines = explode($crlf, $create_query);
			$sql_count = count($sql_lines);

            // Lets find first line with constraints
            for ($i = 0; $i < $sql_count; $i++) {
                if (preg_match('@^[\s]*(CONSTRAINT|FOREIGN[\s]+KEY)@', $sql_lines[$i])) {
                 	break;
                }
            }

            // If we really found a constraint
            if ($i != $sql_count) {
				
                // remove , from the end of create statement
                $sql_lines[$i - 1] = preg_replace('@,$@', '', $sql_lines[$i - 1]);

                // comments for current table
                $sql_constraints .= $crlf
								 . PMA_exportComment()
								 . PMA_exportComment('Constraints for table ' . '`' . $table.'`')
								 . PMA_exportComment();
                
                // Let's do the work
                $sql_constraints_query .= 'ALTER TABLE `'.$table.'`' . $crlf;
                $sql_constraints .= 'ALTER TABLE `'.$table.'`' . $crlf;
                $sql_drop_foreign_keys .= 'ALTER TABLE `'.$table.'` `'.$db.'`' . $crlf;

                $first = TRUE;
                for ($j = $i; $j < $sql_count; $j++) {
                    if (preg_match('@CONSTRAINT|FOREIGN[\s]+KEY@', $sql_lines[$j])) {
                        if (!$first) {
                            $sql_constraints .= $crlf;
                        }
                        if (strpos($sql_lines[$j], 'CONSTRAINT') === FALSE) {
                            $tmp_str = preg_replace('/(FOREIGN[\s]+KEY)/', 'ADD \1', $sql_lines[$j]);
                            $sql_constraints_query .= $tmp_str;
                            $sql_constraints .= $tmp_str;
                        } else {
                            $tmp_str = preg_replace('/(CONSTRAINT)/', 'ADD \1', $sql_lines[$j]);
                            $sql_constraints_query .= $tmp_str;
                            $sql_constraints .= $tmp_str;
                            preg_match('/(CONSTRAINT)([\s])([\S]*)([\s])/', $sql_lines[$j], $matches);
                            if (! $first) {
                                $sql_drop_foreign_keys .= ', ';
                            }
                            $sql_drop_foreign_keys .= 'DROP FOREIGN KEY ' . $matches[3];
                        }
                        $first = FALSE;
                    } else {
                        break;
                    }
                }
                $sql_constraints .= ';' . $crlf;
                $sql_constraints_query .= ';';
				
				// Dump the alter queries!!!
				$return['alter'] = $sql_constraints; 
				
				$create_query = implode($crlf, array_slice($sql_lines, 0, $i)) . $crlf . implode($crlf, array_slice($sql_lines, $j, $sql_count - 1));
				unset($sql_lines);
            }
        }
        $schema_create .= $create_query;
    }

    // remove a possible "AUTO_INCREMENT = value" clause
    // that could be there starting with MySQL 5.0.24
    $schema_create = preg_replace('/AUTO_INCREMENT\s*=\s*([0-9])+/', '', $schema_create);

    $schema_create .= $auto_increment;
		
    soft_mysql_free_result($result);
    	
	// Dump the structure !!!
	$return['structure'] = $schema_create . ($add_semicolon ? ';' . $crlf : '');
	return $return;
	 
} // end of the 'PMA_getTableDef()' function

// Internal function to get meta details about the database 
function PMA_DBI_get_fields_meta($sresult) {
    $fields       = array();
    $num_fields   = mysql_num_fields($sresult);
    for ($i = 0; $i < $num_fields; $i++) {
        $field = mysql_fetch_field($sresult, $i);
        $field->flags = mysql_field_flags($sresult, $i);
        $field->orgtable = mysql_field_table($sresult, $i);
        $field->orgname = mysql_field_name($sresult, $i);
        $fields[] = $field;
    }
    return $fields;
}

// Export data - values 
function PMA_exportData($link, $db, $table, $crlf, $handle, $replace_data){
	
    global $current_row;
	$count = $GLOBALS['settings']['get_db_export_chunksize'];
	$limit = 0;

	// We have modified this code because we were getting error if inserts were >50000
	$cnt_qry = 'SELECT count(*) FROM `'.$db . '`.`' . $table . '`';
	$cnt_result = soft_mysql_query($cnt_qry, $link, 1);
	$cnt_res = soft_mysql_fetch_row($cnt_result);
	// Free resourse
	soft_mysql_free_result($cnt_result);
	
	$sql_query  = 'SELECT * FROM `'.$db . '`.`' . $table . '` LIMIT 0,'.$count;

    $formatted_table_name = '`' . $table . '`';

	$squery= soft_mysql_query($sql_query, $link, 1);
	
	$fields_cnt = soft_mysql_num_fields($squery);

	// Get field information
	if(extension_loaded('mysqli')){
		$fields_meta    = getFieldsMeta($squery);
	}else{
		$fields_meta    = PMA_DBI_get_fields_meta($squery);
	}
	
	$field_flags    = array();
	for ($j = 0; $j < $fields_cnt; $j++) {
		$field_flags[$j] = soft_mysql_field_flags($squery, $j);
	}

	for ($j = 0; $j < $fields_cnt; $j++) {
		$field_set[$j] = '`'.$fields_meta[$j]->name . '`';
	}

	$sql_command = 'INSERT';
	
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
			$squery= soft_mysql_query($sql_query, $link, 1);
		}
		
		$row = soft_mysql_fetch_array($squery);
		
		// If we get empty result than break the loop
		if(!$row){
			break;
		}
		
		if ($current_row == 0) {
			$head = PMA_exportComment()
				  . PMA_exportComment('Dumping data for table' . ' ' . $formatted_table_name)
				  . PMA_exportComment()
				  . $crlf;
			fwrite($handle, $head);
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
				
				$query_buffer = ';' . $crlf;
				fwrite($handle, $query_buffer);
				$query_size = 0;
				$current_row = 1;
				$insert_line = $schema_insert . $insert_line;
			}
		}
		// Gather query size
		$query_size += strlen($insert_line);
		
		unset($values);

		$query_buffer = ($current_row == 1 ? '' : $separator . $crlf) . $insert_line;
		// To avoide MEMORY EXHAUST
		fwrite($handle, $query_buffer);
		
		// Decrement till 0 so that next 10000 rows can be selected
		$count--;
		
	}// End of FOR
	if ($current_row > 0) {
		
		$query_buffer = ';' . $crlf;
		fwrite($handle, $query_buffer);
		
	}
	
	// Free resourses
	soft_mysql_free_result($squery);
	
	$end_line = (!empty($query_buffer) ? $crlf : '' ). PMA_exportComment('--------------------------------------------------------');
	fwrite($handle, $end_line);
	
	//return $query_buffer . $end_line;
		
} 

function PMA_exportComment($text = '')
{
	$crlf = "\n";
	$ret = '--' . (empty($text) ? '' : ' ') . $text . $crlf;
	return $ret;
}

function PMA_exportHeader($db, $ser_ver)
{
    $crlf = "\n";  

    $head  =  PMA_exportComment('Softaculous SQL Dump')
           .  PMA_exportComment('http://www.softaculous.com')
           .  PMA_exportComment()
		   .  PMA_exportComment('Host: localhost')
           .  PMA_exportComment('Generation Time: '. date("F j, Y, g:i a") .'')
		   .  PMA_exportComment('Server version: '. $ser_ver .'')
           .  PMA_exportComment('PHP Version' . ': ' . phpversion())
           .  $crlf;

    /* We want exported AUTO_INCREMENT fields to have still same value, do this only for recent MySQL exports */
    $head .=  'SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";' . $crlf;
    
    /* Change timezone if we should export timestamps in UTC */
    $head .= 'SET time_zone = "+00:00";' . $crlf . $crlf;
  
	// by default we use the connection charset
	$set_names = 'utf8mb4';
		
	$head .=  $crlf
		   . '/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;' . $crlf
		   . '/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;' . $crlf
		   . '/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;' . $crlf
		   . '/*!40101 SET NAMES ' . $set_names . ' */;' . $crlf . $crlf;
	
	$head .= PMA_exportComment()
		  . PMA_exportComment('Database: `' . $db . '`')
		  . PMA_exportComment()
		  . $crlf
		  . PMA_exportComment('--------------------------------------------------------')
		  . PMA_exportComment('HEADER EXPORTED SOFTACULOUS');

    return $head;

}

function PMA_exportFooter()
{
    $crlf = "\n";
    $foot = '';

	$foot .=  $crlf
	   . '/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;' . $crlf
	   . '/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;' . $crlf
	   . '/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;' . $crlf;
	
	return $foot;
}

function PMA_sversion($link){
	
	// Get version
	$vres = soft_mysql_query('SELECT VERSION()', $link);
	$version = soft_mysql_fetch_assoc($vres);
	// Free resourse
	soft_mysql_free_result($vres);
	
	// Explode to extract version
	$version = explode('-', $version['VERSION()']);
	return $version[0];
	
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

function softdie($txt, $l_table = ''){
	$array = array();
	$array['settings'] = $GLOBALS['settings'];
	$array['result'] = $txt;
	$array['data'] = (!empty($GLOBALS['data']) ? $GLOBALS['data'] : '');
	
	if(!empty($l_table)){
		$array['l_table'] = $l_table;
	}
	
	// Was there an error ?
	if(!empty($GLOBALS['error'])){
		$array['error'] = $GLOBALS['error'];
	}
	
	if($txt == 'DONE'){
		$array['dbfile_size'] = $GLOBALS['dbfile_size'];
	}
	
	echo '<r_import>'.base64_encode(serialize($array)).'</r_import>';die();
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

/**
 * Replace string recursively
 *
 * @package		softaculous
 * @author		Salman Shaikh
 * @param		$data is an array containing data to be replaced with new values
 * @param		$replace_data array having old and new values
 * @since		5.1.3
 */

function recursive_replace_data($data, $replace_data){
	
	foreach($data as $k => $v){
		if(is_string($v)){
			$data[$k] = strtr($v, $replace_data);
		}
		elseif(is_array($v)){
			$data[$k] = recursive_replace_data($v, $replace_data); //Handled For php72 (Passing $replace_data)
		}
	}
	
	return $data;
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
	
	return 's:'.strlen($matches[2]).':"'.$matches[2].'";'.@$matches[3];
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
		$str = preg_replace_callback('/s:(\d+):"(.*?)";(?=[:}|a:|s:|S:|b:|d:|i:|o:|O:|C:|r:|R:|N;])/s', 'fix_serialize_callback', $str);
		
	}
	
	return $str;
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

function optGET($name, $default = ''){

global $error;

	//Check the GETED NAME was GETed
	if(isset($_GET[$name])){
	
		return inputsec(htmlizer(trim($_GET[$name])));
		
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
$skip_tables_data = unserialize(base64_decode('[[[skip_tables_data]]]'));

global $user, $globals, $theme, $softpanel, $settings, $iscripts, $catwise, $error, $skip_tables_data;

// Export the DATABASE
$dbfile = $settings['source_data']['softsqlfile'];
$dbuser = (empty($softpanel->backupmysql['user']) ? $settings['source_data']['softdbuser'] : $softpanel->backupmysql['user']);
$dbpass = (empty($softpanel->backupmysql['pass']) ? $settings['source_data']['softdbpass'] : $softpanel->backupmysql['pass']);

$sql_conn = soft_mysql_connect($settings['source_data']['softdbhost'], $dbuser, $dbpass, true);

if(!$sql_conn){
	$error['mysql_connect'] = 'Could not connect mysql for exporting database';
	softdie('conn');
}

$host = $settings['source_data']['softdbhost'];
$user = $settings['source_data']['softdbuser'];
$pass = $settings['source_data']['softdbpass'];
$db = $settings['source_data']['softdb'];

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
$GLOBALS['last_table'] = '';
$GLOBALS['last_table'] = optGET('last_table');
if(!empty($GLOBALS['last_table'])){
	$GLOBALS['last_table'] = rawurldecode($GLOBALS['last_table']);
}
	
// Set default values
$GLOBALS['start'] = 0;
$GLOBALS['end_table'] = '';

if(!export_mysql_fn($host, $user, $pass, $db, $dbfile, $replace_data)){
	$error[] = 'Could not export the database';
	softdie('failexport');
}
if(!file_exists($dbfile)){
	$error['export_db'] = 'Could not create sql file from database';
	softdie('failexport');
}

// Is the backup process INCOMPLETE ? 
if(!empty($GLOBALS['end_table'])){
	softdie('INCOMPLETE', $GLOBALS['end_table']);
}

$GLOBALS['dbfile_size'] = filesize($dbfile);

softdie('DONE');

