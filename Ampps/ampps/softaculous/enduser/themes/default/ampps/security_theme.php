<?php

//////////////////////////////////////////////////////////////
//===========================================================
// userindex_theme.php
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

if(!defined('SOFTACULOUS')){

	die('Hacking Attempt');

}

function security_theme(){

global $theme, $globals, $softpanel, $user, $l, $updates_available, $pmastate, $newmysqlstatus, $amppsstatus;

softheader($l['<title>']);

echo '
<div class="bg">
	<div class="row sai_main_head mt-4" style="width:100%;" align="center">
		<div class="col-12 text-center">
			<span class="form-title"><img height="40" width="40" src="'.$theme['a_images'].'security.png" />'.$l['security_center'].'</span>
		</div>
	</div><hr />
	
	<table border="0" cellpadding="5" cellspacing="0" width="100%" class="table table-hover mb-2 borderless">
		<thead class="sai_head2">
			<tr>
				<th style="min-width:80%;">'.$l['subject_name'].'</th>
				<th>'.$l['subject_status'].'</th>
			</tr>
		</thead>';
	if($amppsstatus==1){
		$amppssecure='Secure';
		echo '
		<tr>
			<td>'.$l['ampps_subject'].'</font></td>
			<td><font color="green" face="Arial"><b>'.$amppssecure.'</b></font></td>
		</tr>';
	}
	else{
		$amppssecure='Unsecure';
		echo '
		<tr>
			<td>'.$l['ampps_subject'].'<br/>
			<font color="red">'.$l['ampps_unsecure'].'</font><br/></td>
			<td><font color="red" face="Arial"><b>'.$amppssecure.'</b></font></td>
		</tr>';
	}
	if($pmastate == 1){ 
		$pmastatus='Secure';
		echo '
		<tr>
			<td>'.$l['phpmyadmin_subject'].'</td>
			<td><font color="green" face="Arial"><b>'.$pmastatus.'</b></font></td>
		</tr>';
	}
	else{ 
		$pmastatus='Unsecure';
		echo '
		<tr>
			<td>'.$l['phpmyadmin_subject'].'<br><font color="red">'.$l['phpmyadmin_unsecure'].'</td>
			<td><font color="red" face="Arial"><b>'.$pmastatus.'</b></font></td>
		</tr>';
	}
	if($newmysqlstatus==1){
		$mysqlstatus='Secure';
		echo '
		<tr>
			<td>'.$l['mysql_subject'].'</font></td>
			<td><font color="green" face="Arial"><b>'.$mysqlstatus.'</b></font></td>
		</tr>';
	}
	else
	{
		$mysqlstatus='Unsecure';
		echo '
		<tr>
			<td>'.$l['mysql_subject'].'</font><br/><font color="red">'.$l['mysql_unsecure'].'</font><br/></td>
			<td><font color="red" face="Arial"><b>'.$mysqlstatus.'</b></font></td>
		</tr>';
	}

	echo '</table></br>
	<div class="row ml-0">
		<div class="col-sm-5">
			<span class="sai_head">To fix the problems for MySQL go to: </span>
		</div>
	</div><br />
				
	<div class="row ml-0">
		<div class="col-sm-5">		
			<img height="40" width="40" src="'.$theme['a_images'].'security.png" alt="" />&nbsp&nbsp&nbsp<a href="'.$globals['ind'].'act=mysqlsettings"><b>Change MySQL root Password</b></a>
		</div>
	</div><br />
	
	<div class="row ml-0">
		<div class="col-sm-5">
			<span class="sai_head">To fix the problems for AMPSS go to:</span>
		</div>
	</div><br />
			
	<div class="row ml-0">
		<div class="col-sm-5">			
			<img height="48" width="40" src="'.$theme['a_images'].'secure.png" alt="" />&nbsp&nbsp&nbsp<a href="'.$globals['ind'].'act=secure"><b>Set AMPPS Password</b></a>
		</div>
	</div><br />
</div>';

softfooter();
}		

