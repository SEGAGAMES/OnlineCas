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

function status_theme(){

global $theme, $globals, $softpanel, $user, $l, $updates_available, $apachestatus, $mysqldstatus, $pythonstatus, $extension, $mongodbstatus, $ftpstatus;

softheader($l['<title>']);

echo '<script language="javascript" type="text/javascript"><!-- // --><![CDATA[

$(document).ready(function(){	
		$(".sai_altrowstable tr").mouseover(function(){
			var old_class = $(this).attr("class");		
			$(this).attr("class", "sai_tr_bgcolor");		
			$(this).mouseout(function(){
				$(this).attr("class", old_class);
			});
		});	
	});					
	// ]]></script>';
echo '
<div class="bg">
	<div class="row sai_main_head mt-4" style="width:100%;" align="center">
		<div class="col-12 text-center">
			<label class="sai_main_head d-block"><img height="48" width="48" src="'.$theme['a_images'].'status.png" />'.$l['status'].'</label>
		</div>
	</div><hr />

		<div class="row mt-2">
			<div class="col-12 px-4">
				<label class="sai_sub_head d-block">'.$l['service_status'].'</label>
				<hr class="sai_main_head_hr">
			</div>
		</div>
		<table border="0" cellpadding="5" cellspacing="0" width="100%" class="table table-hover mb-2 borderless">
			<thead class="sai_head2">
			<tr>
				<th width="45%" style="text-align:left">'.$l['process_name'].'</th>
				<th width="55%" style="text-align:left">'.$l['process_status'].'</th>
			<tr>
			</thead>
	<tr>
		<td align="left">' . $l['apache_status'] . '</td>';
		if($apachestatus == 1){
			echo '<td align="left"><font color="green">' . $l['active'] . '</font></td>';
		}
		else{
			echo '<td align="left"><font color="red">' . $l['inactive'] . '</font></td>';
		}
		echo '</tr>
		<tr>
		<td align="left">' . $l['mysqld_status'] . '</td>';
		if($mysqldstatus == 1){
			echo '<td align="left"><font color="green" >' . $l['active'] . '</font></td>';
		}
		else{
			echo '<td align="left"><font color="red" >' . $l['inactive'] . '</font></td>';
		}
		echo '</tr>
		<tr>
		<td align="left">' . $l['python_status'] . '</td>';
		if($pythonstatus == 1){
			echo '<td align="left"><font color="green" >' . $l['active'] . '</font></td>';
		}
		else{
			echo '<td align="left"><font color="red" >' . $l['inactive'] . '</font></td>';
		}
		echo '</tr>
		<tr>
		<td align="left">' . $l['mongodb_status'] . '</td>';
		if($mongodbstatus == 1){
			echo '<td align="left"><font color="green" >' . $l['active'] . '</font></td>';
		}
		else{
			echo '<td align="left"><font color="red" >' . $l['inactive'] . '</font></td>';
		}
		echo '</tr>
		<tr>
		<td align="left">' . $l['ftp_status'] . '</td>';
		if($ftpstatus == 1){
			echo '<td align="left"><font color="green" >' . $l['active'] . '</font></td>';
		}
		else{
			echo '<td align="left"><font color="red" >' . $l['inactive'] . '</font></td>';
		}
		echo '</tr>';
		echo  '<tr>
		<td align="left">' . $l['ssl_status'] . '</td>';
		if($softpanel->is_ssl() == true){
			echo '<td align="left"><font color="green" >' . $l['active'] . '</font></td>';
		}
		else{
			echo '<td align="left"><font color="red" >' . $l['inactive'] . '</font></td>';
		}
		echo '</tr>';

	echo '</table><br />

	<div class="row mt-2">
		<div class="col-12 px-4">
			<label class="sai_sub_head d-block">'.$l['php_extension'].'</label>
			<hr class="sai_main_head_hr">
		</div>
	</div>
	<table border="0" cellpadding="5" cellspacing="0" width="100%" class="table table-hover mb-2 borderless">
		<tr>
			<thead class="sai_head2">
				<th width="45%" style="text-align:left">'.$l['extension_name'].'</th>
				<th width="55%" style="text-align:left">'.$l['status'].'</th>
			</thead>
		</tr>';
	$i=1;
	foreach($extension as $k => $v){
		echo '<tr class="'.($i % 2 == 0 ? "table table-hover" : "table table-hover").'">
		<td align="left">'.$k.'</td>';
		if($v == 1){
			echo '<td align="left"><font color="green" >' . $l['active'] . '</font></td>';
		}else{
			echo '<td align="left"><font color="red" >' . $l['inactive'] . '</font></td>';
		}
		echo '</tr>';
		$i++;
	}
echo '</tr>
</table></br>

	<div>
		<span class="sai_exp2">'.$l['extension_note'].'</span></center></br>
	</div>';
echo '</div><!--end of bg-->';	
softfooter();

}
		
/*function died(){
print_r(error_get_last());
}
register_shutdown_function('died');*/
