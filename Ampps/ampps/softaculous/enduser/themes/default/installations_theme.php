<?php

//////////////////////////////////////////////////////////////
//===========================================================
// installations_theme.php
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


function installations_theme(){

global $user, $globals, $l, $theme, $softpanel, $iscripts, $catwise, $error, $scripts, $no_autoupgrade;
global $installations, $sortby, $disabled_scripts, $no_autoupgrade_acl;

if(!empty($installations) && optGET('api')){
	_api($installations, optGET('api'));
	return;
}

softheader($l['<title>']);
error_handle($error, '100%');
echo '
<script>
function ampps_premium_handle(){
	$("#ampps_premium_err").show();
}

$(function(){
	$("[data-hide]").on("click", function(){
		$(this).closest("." + $(this).attr("data-hide")).hide();
	});
});
</script>

<div class="bg">
<br/>
<div class="row sai_main_head ">
	<div class="col-12 text-center">
		<i class="fas fa-archive fa-2x mr-1" style="color:#00A0D2;"></i>
		<span class="form-title">'.$l['scripts_ins'].'</span>
	</div>
</div><hr />';
if(optGET('showupdates')){
	echo '<center class="alert alert-warning">
			<a href="#close" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<a href="'.$globals['ind'].'act=installations" style="text-decoration:none;">'.$l['showing_only'].' '.$l['see_all'].'</a>
		</center>';
}
echo '<div class="row">
	<div class="col-12 p-4 text-right">
		<div class="sortby">
			<div style="display:none;" id="sortby_wait"><img src="'.$theme['images'].'progress.gif" alt="please wait.."></div>
			<label class="soft-label mr-1">'.$l['sort_by'].':</label>
			<select name="sortby" onchange="sortby(this.value);">
				<option selected="selected" value="default">'.$l['sort_script'].'</option>
				<option value="domains">'.$l['sort_domain'].'</option>
				<option value="time">'.$l['sort_ins_time'].'</option>
			</select>
		</div>
	</div>
</div>';

echo '
<div id="ampps_premium_err" style="display:none;" class="alert alert-warning">
<center>
	<a href="#" class="close" data-hide="alert">&times;</a>
	'.$l['ampps_notify_premium'].'</a>
</center>
</div>

<div id="installations_table" class="installations-table mb-4">
	<table border="0" cellpadding="5" cellspacing="0" width="100%" class="table table-hover">
		<tr>
			<thead class="sai_head2">
				<th width="30%">'.$l['link'].'</th>
				<th width="6%">'.$l['admin'].'</th>
				<th width="20%">'.$l['ins_time'].'</th>
				<th width="15%">'.$l['version'].'</th>
				<th width="25%" style="text-align:center;">'.$l['options'].'</th>
				<th width="4%"><input type="checkbox" id="check_all_ins" onchange="multiple_check()"></th>
			<thead>
		</tr>
	</table>
';

if(is_array($installations) && count($installations) > 0){

foreach($installations as $sid => $installs){

	echo '<link href="'.$globals['mirror_images'].'sprites/20.css" rel="stylesheet" type="text/css" />
		<table border="0" cellpadding="5" cellspacing="0" width="100%" class="table table-hover">
		<tr>
			<th colspan="10" class="sai_head sai_table_head" >
				
				<span '.(($sortby != 'domains') ? 'class="sp20_'.$iscripts[$sid]['softname'].'"' : '').'></span>
				
				<span>&nbsp; '.(($sortby != 'domains') ? (empty($iscripts[$sid]) ? $l['no_info'] : '<a href="'.script_link($sid, 1).'" style="text-decoration:none;">'.$iscripts[$sid]['name'].'</a>') : $sid).'</span>
				
				<span class="pull-right" style="margin-right:2px;">
					<input type="checkbox" id="'.$iscripts[$sid]['softname'].'_check_ins" onchange="script_ins_check(this.id)" class="check_all_ins">
				</span>
			</th>
		</tr>';
	
	$ins_tr = array();
	foreach($installs as $ik => $iv){
		
		$iv['sid'] = get_sid_by_version($iv['ver'], $iv['sid']);
		
		$sign_on = has_sign_on($iv['sid']);
		$tmp_sid = is_upgradable($ik);
		$is_cloneable = is_cloneable($iv['sid']);
		$can_staging = can_staging($iv['sid']);
		$can_template = can_template_ins($iv['sid']);
		$ins_row = '';
		
		if(!empty($tmp_sid)){
			$tmp_upgradeto = implode(' or ', $tmp_sid);
			$tmp_sid = array_keys($tmp_sid);
		}
		
		$ins_row = '<tr id="trid' . $ik . '" class="installations-list">
		<td width="30%" class="endurl "><a href="'.$iv['softurl'].'" target="_blank" id="insurl'.$ik.'">'.$iv['softurl'].'</a></td>
		<td width="6%"><a href="'.(empty($globals['disable_sign_on']) && !empty($sign_on) ? $globals['ind'].'act=sign_on&insid='.$ik.'&autoid='.srandstr(32) : $iv['softurl'].'/'.(!empty($iv['admin_folder']) ? $iv['admin_folder'] : admin_folder($iv['sid']))).'" target="_blank" title="'.$l['login_exp'].'" class="someclass"><i class="fas fa-user px-1 sai_icons"></i></a></td>
		<td width="20%">'.datify($iv['itime']).'</td>
		<td width="15%">'.$iv['ver'].(!empty($tmp_sid) ? ' <a href="'.update_link($iv).'" title="'.$l['upd_to'].' '.$tmp_upgradeto.'" class="someclass"><i class="fas fa-sync-alt px-1 sai_icons" style="color:#1565C0; font-size:1.2em;"></i></a>' : '').
		(!empty($iv['eu_auto_upgrade']) && empty($no_autoupgrade['disable_autoupgrade']) && empty($no_autoupgrade['scripts'][$iv['sid']]) && !empty($scripts[$iv['sid']]['auto_upgrade']) && empty($no_autoupgrade_acl) ? '<i class="fas fa-check-circle px-1 sai_icons" style="color:green; cursor:pointer;" title="'.$l['auto_upgrade_enabled'].' '.($iv['eu_auto_upgrade'] == 1 ? $l['auto_upgrade_major'] : $l['auto_upgrade_minor']).'" class="someclass"></i>' : '').'</td>
		
		<td width="25%" align="right">
		'.(can_wordpress_manager($iv['sid']) ? '<a href="'.$globals['ind'].'act=wordpress&insid='.$ik.'" title="'.$l['wordpress_manager'].'" class="someclass"><img src="'.$theme['images'].'wp-gray.png" height="23" width="23"/></a>' : '').'
		'.(!empty($can_publish) && ampps() ? '<a href="'.$globals['ind'].'act=ampps_publish&insid='.$ik.'" title="'.$l['ampps_publish'].'" class="someclass" onclick="'.(ampps() && !is_ampps_premium() ? "ampps_premium_handle();return false" : '').'"><i class="fas fa-cloud-upload-alt px-1 sai_icons" style="color:#00A0D2;"></i></a>' : '' ).''
		.(!empty($can_template) ? ' <a href="'.$globals['ind'].'act=create_template&insid='.$ik.'" title="'.$l['create_template'].'" class="someclass" onclick="'.(ampps() && !is_ampps_premium() ? "ampps_premium_handle();return false" : '').'"><i class="fas fa-box px-1 sai_icons" style="color:#00A0D2;"></i></a>' : '')
		.(!empty($can_staging) ? (!empty($iv['is_staging']) ? '<a href="'.$globals['ind'].'act=pushtolive&insid='.$ik.'" title="'.$l['pushtolive'].'" class="someclass" onclick="'.(ampps() && !is_ampps_premium() ? "ampps_premium_handle();return false" : '').'"><i class="fas fa-code-branch px-1 sai_icons" style="color:#1565C0;"></i></a>' : '').' <a href="'.$globals['ind'].'act=staging&insid='.$ik.'" title="'.$l['staging'].'" class="someclass" onclick="'.(ampps() && !is_ampps_premium() ? "ampps_premium_handle();return false" : '').'"><i class="fas fa-network-wired px-1 sai_icons" style="color:#1565C0;"></i></a>' : '')
		.(!empty($is_cloneable) ? ' <a href="'.$globals['ind'].'act=sclone&insid='.$ik.'" title="'.$l['clone'].'" class="someclass mr-1" onclick="'.(ampps() && !is_ampps_premium() ? "ampps_premium_handle();return false" : '').'"><i class="fas fa-copy px-1 sai_icons" style="color:#1565C0;"></i></a>' : '')
		.(empty($globals['disable_backup_restore']) ? '<a href="'.$globals['ind'].'act=backup&insid='.$ik.'" title="'.$l['backup'].'" class="someclass mr-1" onclick="'.(ampps() && !is_ampps_premium() ? "ampps_premium_handle();return false" : '').'"><i class="fas fa-file-archive px-1 sai_icons" style="color:#119768;"></i></a>' : '').
		'<a href="'.$globals['ind'].'act=editdetail&insid='.$ik.'" title="'.$l['editdetail'].'" class="someclass"><i class="fas fa-pencil-alt px-1 sai_icons" style="color:#FF5D00;"></i></a>
		<a href="'.$globals['ind'].'act=remove&insid='.$ik.'" title="'.$l['remove'].'" class="someclass"><i class="fas fa-trash-alt sai_icons" style="color:red;"></i></a></td>
		<td width="4%"><input type="checkbox" class="shift_select_ins check_all_ins '.$iscripts[$sid]['softname'].'_check_ins" name="insids[]" id="'.$iv['softurl'].'" value="'.$ik.'">
		</td>
	</tr>';
		
		if(array_key_exists('is_staging', $iv)){
			$ins_tr[$iv['is_staging']] .= $ins_row;
		}else{
			if(!empty($ins_tr[$ik])){
				$ins_tr[$ik] = $ins_row.$ins_tr[$ik];
			}else{
				$ins_tr[$ik] .= $ins_row;
			}
		}
		
	}
	
	echo implode('', $ins_tr);
	
	echo '</table><br /><br />';

}

}else{
	echo '<br /><center>'.$l['no_ins'].'</center><br />';
}

echo '</div><br />';
	
// List the installations of scripts which have been disabled by Softaculous or Admin
// In this user can delete, backup, and restore the installations.
// Clone and Upgrade are not possible as the packages wont be there.

$show_disabled_scripts = apply_filters('show_disabled_scripts', true);

if(is_array($disabled_scripts) && count($disabled_scripts) > 0 && !empty($show_disabled_scripts)){
	echo '<br /><center>
		<span class="sai_main_head">'.$l['disabled_scripts'].'</span>
		<hr>
	</center>
		<table border="0" cellpadding="5" cellspacing="0" width="100%" class="table table-hover">
			<tr>
				<thead class="sai_head2" style="background:#333; color:#fff;">
					<th><b>'.$l['link'].'</b></th>
					<th width="150"><b>'.$l['admin'].'</b></th>
					<th width="190"><b>'.$l['ins_time'].'</b></th>
					<th width="120"><b>'.$l['version'].'</b></th>
					<th width="150"><b>'.$l['options'].'</b></th>
					<th width="50"><input type="checkbox" id="check_all_disabled" onchange="multiple_check()"></th>
				<thead>
			</tr>
		</table>';
		
		foreach($disabled_scripts as $sid => $installs){
			
			echo '<table border="0" cellpadding="5" cellspacing="0" width="100%" class="table table-hover">
				<tr>
					<th colspan="10" style="background:#EFEFEF;">
						<table border="0" cellpadding="0" cellspacing="0">
							<tr class="no">
								<th> &nbsp; '.$l['no_info'].'</th>
							</tr>
						</table>
					</th>
				</tr>';
		
			foreach($installs as $ik => $iv){
			
				echo '<tr id="trid' . $ik . '">
				<td class="endurl"><a href="'.$iv['softurl'].'" target="_blank" id="insurl'.$ik.'">'.$iv['softurl'].'</a></td>
				<td width="140"><a href="'.$iv['softurl'].'/'.(!empty($iv['admin_folder']) ? $iv['admin_folder'] : admin_folder($iv['sid'])).'" target="_blank" title="'.$l['login_exp'].'" class="someclass"><i class="fas fa-user px-1 sai_icons"></i></a></td>
				<td width="190">'.datify($iv['itime']).'</td>
				<td width="70">'.$iv['ver'].'</td>
				<td width="200" align="center"><a href="'.$globals['ind'].'act=remove&insid='.$ik.'" title="'.$l['remove'].'" class="someclass"><i class="fas fa-trash-alt sai_icons" style="color:red;"></i></a>
				<td width="50"><input type="checkbox" class="check_all_disabled" name="insids[]" id="'.$iv['softurl'].'" value="'.$ik.'">
				</td>
			</tr>';
			
			}
			echo '</table><br /><br />';
		}

	}
	echo '<div class="row">
		<div class="col-12 my-4 text-right">
			<label class="soft-label mr-1">'.$l['with_selected'].':</label>
			<select name="multi_options" id="multi_options">
				<option name="todo" id="todo" value="0">---</option>
				<option name="todo" id="todo" value="mult_rem">'.$l['remove_complete'].'</option>
				<option name="todo" id="todo" value="mult_rem_info">'.$l['remove_info'].'</option>
			</select>'.csrf_display().'
			<input type="button" value="'.$l['go'].'" onclick="show_confirm()" class="sai_graybluebut">
		</div>
	</div>
		
		<div id="rem_div"></div>

<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
insids = new Array();
removed = new Object();

function show_confirm(){
	
	insids = new Array();
	removed = new Object();
	
	$sel_opt = $_("multi_options").value;
	
	if($sel_opt != "mult_rem" && $sel_opt != "mult_rem_info"){
		return false;
	}

	// Build the list of Installations to remove
	var field = document.getElementsByName(\'insids[]\');
		insids = new Array();
		var c = 0;
		for(i = 0; i < field.length; i++){
			if(field[i].checked == true){
				insids[c] = field[i].value;
				c++;
			}
		
	}
	//alert(insids);
	
	if(c == 0){
		alert("'.$l['no_sel_inst'].'");
		return false;
	}
	
	var r = confirm("'.$l['del_insid'].'");
	if(r != true){
		return false;
	}
	
	if($sel_opt == "mult_rem_info"){
		remove_by_id(insids[0], "", 0, 1);
	}else{
		remove_by_id(insids[0], "", 0);
	}
	
}

function remove_by_id(insid, re, oldinsid, info_only){

	removed[insid] = false;
	info_only = info_only || 0;
	
	if(re.length > 0 && oldinsid > 0){
		if(re == "removed"){
			removed[insid] = true;
		}
	}
	
	nextinsid = 0;
	
	// Find the next INSTALLATION to remove
	for(i = 0; i < insids.length; i++){
		if(typeof(removed[insids[i]]) != "undefined"){
			continue;
		}
		nextinsid = insids[i];
		break;
	}
	
	
	var csrf_token = $("#csrf_token").val(); 
	
	// If there is something left to be removed
	if(insid != 0){
		
		try{

			$.ajax({
				type: "POST",
				data: "csrf_token="+csrf_token,
				url: "'.$globals['index'].'act=remove&insid="+insid+"&ajax=1&ssk="+randomstring(32)+"&random="+Math.random()+"&info_only="+info_only,
				// Checking for error
				success: function(data){
					remove_by_id(nextinsid, data, insid, info_only);
					
				}
			});
			
			$_("rem_div").innerHTML = "<br /><br /><p align=\"center\"><img src=\"' . $theme['images'] . 'ajax_remove.gif\"> <br />'.$l['rem_inst_id']. ' ID: " +insid+ ", URL: " + $_("insurl"+insid)+"<br /></p>";
			return true;
		}catch(e){
			return false;
		}
	}
	$_("rem_div").innerHTML = "";
	alert("'.$l['inst_remvd'].'");
	location.reload(true);
	return true;
}

function sortby(sb){
	
	$("#sortby_wait").css("display", "inline");
	$.ajax({
		type: "GET",
		url: "'.$globals['index'].'act=installations&sortby="+sb+"&jsnohf=1",
		// Checking for error
		success: function(data){
			$("#sortby_wait").css("display", "none");
			var $response=$(data);
			//query the jq object for the values
			var output = $response.find("#installations_table").html();
			$("#installations_table").html(output);
			new_theme_funcs_init();
			multiple_check();
		},
		error: function(data) {
			//alert(data.description);
			return false;
		}
	});
}

function multiple_check(){
	$("#check_all_ins").on("click", function(event){
		if(this.checked == true){
			$(".check_all_ins").prop("checked", true);
		}else{
			$(".check_all_ins").prop("checked", false);
		}
	});

	$("#check_all_disabled").on("click", function(event){
		if(this.checked == true){
			$(".check_all_disabled").prop("checked", true);
		}else{
			$(".check_all_disabled").prop("checked", false);
		}
	});

	$("#check_all_classes").on("click", function(event){
		if(this.checked == true){
			$(".check_all_classes").prop("checked", true);
		}else{
			$(".check_all_classes").prop("checked", false);
		}
	});
}

function script_ins_check(element){
	var softname = element.split("_")[0];
	if($("#" + element).prop("checked") == true){
		$("." + softname + "_check_ins").prop("checked", true);
	}else{
		$("." + softname + "_check_ins").prop("checked", false);
	}
}

$(document).ready(function(){
	multiple_check();
	$(".sai_altrowstable tr").mouseover(function(){
		if($(this).attr("class") == "no"){
			return;
		}
		var old_class = $(this).attr("class");
		//alert(old_class);
		$(this).attr("class", "sai_tr_bgcolor");
		
		$(this).mouseout(function(){
			$(this).attr("class", old_class);
		});
	});
	
	shift_check_all("shift_select_ins");
	
});

// ]]></script>';


// For CLASSES INSTALLATION LIST

ksort($user['classes_ins']);

if(count($user['classes_ins']) > 0){

	echo '<br /><center>
			<span class="sai_main_head">'.$l['classes_ins'].'</span>
			<hr>
		</center>
	<table border="0" cellpadding="2" cellspacing="0" width="100%"  class="table table-hover">
	<tr>
		<thead class="sai_head2" style="background:#333; color:#fff;">
			<th><b>'.$l['link'].'</b></th>
			<th width="180"><b>'.$l['ins_time'].'</b></th>
			<th width="80"><b>'.$l['version'].'</b></th>
			<th width="120"><b>'.$l['options'].'</b></th>
			<th width="50"><input type="checkbox" id="check_all_classes" onchange="multiple_check()"></th>
		<thead>
	</tr>
	</table>
	';

	$th = 0;

	//r_print($user['classes_ins']);
	echo '<table border="0" cellpadding="5" cellspacing="0" width="100%" class="table table-hover">';

	foreach($user['classes_ins'] as $k => $v){
		
		foreach($v as $ik => $iv){
			if($th == 0){
				echo '<tr>
					<th colspan="10" style="background:#EFEFEF;">'.$iv['name'].$iv['cid'].'</th>
				</tr>';	
			}
			
			echo '<tr id="trid' . $ik . '">
				<td>'.$iv['softpath'].'</td>
				<td width="180">'.datify($iv['itime']).'</td>
				<td width="80">'.$iv['ver'].'</td>
				<td width="120"><a href="'.$globals['ind'].'act=classes_remove&cinsid='.$ik.'" title="'.$l['remove'].'"><img src="'.$theme['images'].'remove.gif" /></a></td>
				<td width="50"><input type="checkbox" class="check_all_classes" name="cinsids[]" value="'.$ik.'">
				</td>
			</tr>';
			$th = 1;
		}
		$th = 0;
	}
	echo '</table><br /><br />
	<p align="right" style="width:100%">
		'.$l['with_selected'].': 
		<select name="multi_options_classes" id="multi_options_classes">
			<option name="todo_classes" id="todo_classes" value="0">---</option>
			<option name="todo_classes" id="todo_classes" value="mult_rem">'.$l['remove_classes'].'</option>
		</select>&nbsp;&nbsp;
		'.csrf_display().'
		<input type="button" value="'.$l['go'].'" onclick="show_confirm_classes()" class="sai_graybluebut">
		<br />
	</p>
	<div id="rem_div_classes"></div>
<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
cinsids = new Array();
removed = new Object();

function show_confirm_classes(){
	
	cinsids = new Array();
	removed = new Object();
	
	if($_("multi_options_classes").value != "mult_rem"){
		return false;
	}

	// Build the list of Installations to remove
	var field = document.getElementsByName(\'cinsids[]\');
		cinsids = new Array();
		var c = 0;
		for(i = 0; i < field.length; i++){
			if(field[i].checked == true){
				cinsids[c] = field[i].value;
				c++;
			}
		
	}
	//alert(cinsids);
	
	if(c == 0){
		alert("'.$l['no_sel_inst'].'");
		return false;
	}
	
	var r = confirm("'.$l['del_insid'].'");
	if(r != true){
		return false;
	}
	
	remove_by_id_classes(cinsids[0], "", 0);
}

function remove_by_id_classes(cinsid, re, oldcinsid){

	removed[cinsid] = false;
	
	if(re.length > 0 && oldcinsid > 0){
		if(re == "removed"){
			removed[cinsid] = true;
		}
	}
	
	nextcinsid = 0;
	
	// Find the next INSTALLATION to remove
	for(i = 0; i < cinsids.length; i++){
		if(typeof(removed[cinsids[i]]) != "undefined"){
			continue;
		}
		nextcinsid = cinsids[i];
		break;
	}
	
	var csrf_token = $("#csrf_token").val();
	
	// If there is something left to be removed
	if(cinsid != 0){
		try{
			$.ajax({
				type: "POST",
				data: "csrf_token="+csrf_token,
				url: "'.$globals['index'].'act=classes_remove&cinsid="+cinsid+"&ajax=1&random="+Math.random(),
				// Checking for error
				success: function(data){
					remove_by_id_classes(nextcinsid, data, cinsid);
				}
			});

			$_("rem_div_classes").innerHTML = "<br /><br /><p align=\"center\"><img src=\"' . $theme['images'] . 'ajax_remove.gif\"> <br />'.$l['rem_inst_id']. ' ID: " +cinsid+ "<br /></p>";
			return true;
		}catch(e){
			alert(e.description);
			return false;
		}
	}
	$_("rem_div_classes").innerHTML = "";
	alert("'.$l['inst_remvd'].'");
	location.reload(true);
	return true;
}

// ]]></script>';

}
echo '</div>';
softfooter();

}

?>