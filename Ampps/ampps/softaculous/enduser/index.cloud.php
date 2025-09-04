<?php

//////////////////////////////////////////////////////////////
//===========================================================
// index.php
//===========================================================
// SOFTACULOUS 
// Version : 1.1
// Inspired by the DESIRE to be the BEST OF ALL
// ----------------------------------------------------------
// Started by: Alons
// Date:       10th Jan 2009
// Time:       21:00 hrs
// Site:       http://www.softaculous.com/ (SOFTACULOUS)
// ----------------------------------------------------------
// Please Read the Terms of use at http://www.softaculous.com
// ----------------------------------------------------------
//===========================================================
// (c)Softaculous Inc.
//===========================================================
//////////////////////////////////////////////////////////////

@define('SOFTACULOUS', 1);

$enduser_ports = array('80', '443');
$admin_ports = array('2006', '2007');

// Can be defined by using auto_prepend_file custom config
if(defined('SOFT_ENDUSER_PORTS')){
	$enduser_ports = SOFT_ENDUSER_PORTS;
}

// Can be defined by using auto_prepend_file custom config
if(defined('SOFT_ADMIN_PORTS')){
	$admin_ports = SOFT_ADMIN_PORTS;
}

$globals['load_wpc_dev'] = 1;
$globals['prod'] = 1;

// Enduser
if(in_array($_SERVER['SERVER_PORT'], $enduser_ports)){
	include_once('E:/Program Files/EasyPHP 3.0/www\soft\softaculous\includes/enduser.php');

// Admin Panel
}elseif(in_array($_SERVER['SERVER_PORT'], $admin_ports)){
	include_once('E:/Program Files/EasyPHP 3.0/www\soft\softaculous\includes/admin.php');
}

