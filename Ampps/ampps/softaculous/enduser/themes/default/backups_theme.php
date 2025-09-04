<?php

//////////////////////////////////////////////////////////////
//===========================================================
// backups_theme.php
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


function backups_theme(){

global $user, $globals, $l, $theme, $softpanel, $iscripts, $catwise, $error, $scripts;
global $backups, $deleted, $tmpbackup_info, $cur_backups;

softheader($l['<title>']);

echo '<div class="bg">

<div class="row sai_main_head">
	<div class="col-12 my-3 text-center">
		<i class="far fa-file-archive fa-2x mr-2" style="color:#00A0D2;"></i>
		<span class="form-title">'.$l['backups_head'].'</span>
	</div>
</div><hr />';

error_handle($error, '100%');

if(!empty($deleted)){
	echo '<div class="alert alert-warning"><center><a href="#close" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.$l['backup_deleted'].'</center></div>';
}

if(!empty($globals['backups_expire'])){
	echo '<center class="alert alert-warning"><a href="#close" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.lang_vars($l['backups_expire'], array($globals['backups_expire'])).'</center>';
}

if(!empty($globals['max_backups'])){
	echo '<center class="alert alert-warning"><a href="#close" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.lang_vars($l['max_backups'], array($cur_backups, $globals['max_backups'])).'</center>';
}

$info_only = optGET('info_only');

echo '<div id="stooltip" style="display:none; position:absolute; top: 0px; left: 0px; border: 1px solid #CCC; padding: 8px; background: #FFF; z-index:1000;"></div>
<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
function _confirm(){
	var conf = confirm("'.$l['confirm_del'].'");
	if(conf){
		return true;
	}else{
		return false;
	}
};

// ]]></script>';

if(empty($globals['off_rbackup'])){
	echo '<div class="row">
		<div class="col-12 text-right">
			<a class="btn sai-button pull-right" href="'.$globals['ind'].'act=settings" style="text-decoration:none;">'.$l['backup_locations'].'</a>
		</div>		
	</div><br />';
}

echo '<div class="backup-table mb-4">
	<table border="0" cellpadding="0" cellspacing="0" width="100%" class="table table-hover header-table">
	<tr>
		<thead class="sai_head2">
			<th width="31%">'.$l['bac_time'].'</th>
			<th width="30%">'.$l['file'].'</th>
			<th width="6%">'.$l['size'].'</th>
			<th width="8%" align="left">'.$l['version'].'</b></th>
			<th width="7%">'.$l['note'].'</th>
			<th width="12%">'.$l['options'].'</th>
			<th class="text-center"><input type="checkbox" id="check_all_backups" onchange="multiple_check()"></th>
		</thead>
	</tr>
	</table>';

	if(is_array($backups) && count($backups) > 0){

		foreach($backups as $sid => $backs){

			echo '<link href="'.$globals['mirror_images'].'sprites/20.css" rel="stylesheet" type="text/css" />
			<table border="0" cellpadding="5" cellspacing="0" width="100%" class="table table-responsive">
				<tr>
					<th width="31%" class="sai_head sai_table_head">
							<span class="sp20_'.$iscripts[$sid]['softname'].'"></span>
							<span>&nbsp;'.(empty($iscripts[$sid]) ? $l['no_info'] : '<a href="'.script_link($sid, 1).'" style="text-decoration:none;">'.$iscripts[$sid]['name'].'</a>').'</span>
							<span class="pull-right" style="margin-right:12px;"><input type="checkbox" id="'.$iscripts[$sid]['softname'].'_check_backups" onchange="script_backups_check(this.id)" class="check_all_backups"></span>
					</th>
				</tr>
				<tr>
					<td>
					<table border="0" cellpadding="5" cellspacing="0" width="100%" id="abody" class="table table-hover borderless">';
					$j=1;
					foreach($backs as $bk => $bv){
						$i=1;
						
						foreach($bv as $ik => $iv){
							echo '<tr><td width="30%">';
							if($i == 1){
								if(empty($user['ins'][$bk]['softurl'])){
									echo lang_vars($l['installation_removed'], array($iv['softurl']));
								}else{
									echo '<a href="'.$user['ins'][$bk]['softurl'].'" target="_blank">'.$user['ins'][$bk]['softurl'].'</a>';
								}
							}else{
								echo '&nbsp;';
							}
							echo '</td>';
							
							if(!empty($iv['backup_location']) || aefer()){
								echo '<td width="30%">'.$iv['name'].'</td>';
							}else{
								echo '<td width="30%" style="word-break:break-all;"><a href="'.$globals['ind'].'act=backups&download='.rawurlencode($iv['name']).'" title="'.$l['download'].'">'.$iv['name'].'</a></td>';
								
							}
							
							echo '</td>
							<td width="10%">'.number_format($iv['size']/1024/1024, 2).' '.$l['size_mb'].'</td>
							<td width="8%">'.(!empty($iv['ver']) ? $iv['ver'] : '').'</td>'.
							(!empty($iv['backup_note']) ? '<td width="5%"><i class="fas fa-clipboard px-1 sai_icons" style="cursor:pointer;" onmouseover="showtip(\''.addcslashes(htmlentities($iv['backup_note']), "'").'\', this);"></i></td>' : '<td width="4%">&nbsp</td>')
							.'
							<td width="14%" class="text-right">';
							
							if(!empty($iv['backup_location'])){
								
								echo '<i onmouseover="showtip(\''.$l['remote_location'].addcslashes(htmlentities($user['remote_backup_locs'][$iv['backup_location']]['name']), "'").'\', this);" style="cursor:pointer;color:#1565C0;" class="fas fa-external-link-alt px-2 sai_icons"></i>';
								
							}elseif(!aefer()){
								
								echo '<a href="'.$globals['ind'].'act=backups&download='.rawurlencode($iv['name']).'" title="'.$l['download'].'"><i class="fas fa-download px-2 sai_icons" style="color:#1565C0;"></i></a>';
								
							}
							
							echo '
							<a href="'.$globals['ind'].'act=restore&restore='.rawurlencode($iv['name']).'" title="'.$l['restore'].'"><i class="fas fa-undo px-2 sai_icons" style="color:green;"></i></a>
							
							<form accept-charset="'.$globals['charset'].'" method="post" action="'.$globals['ind'].'act=backups&remove='.rawurlencode($iv['name']).(!empty($info_only) ? '&info_only=1' : '').'" class="form-horizontal">
								'.csrf_display().'
								<button type="submit" title="'.$l['remove'].'" onclick="return _confirm();" style="border-width:0; padding:0; background:none;"><i class="fas fa-trash-alt px-2 sai_icons" style="color:red;"></i></button>
								
							</td>
							</form>
							<td width="3%">
								<input type="checkbox" name="insids[]" id="'.$iv['softurl'].'" value="'.$iv['name'].'" class="shift_select_backups check_all_backups '.$iscripts[$sid]['softname'].'_check_backups">
							</td>
							</tr>';
							$i++;
						}
						$j++;
						
					}
				echo '</table>
				</td></tr>
			</table><br />';
		}

	}else{

		echo '<div class="row">
		<div class="col-12 text-center p-2 empty-notice">
			<p class="m-0">'.$l['no_ins'].'</p>
		</div>
	</div>';
}

	echo '</div>
		<p align="right">
			'.$l['with_selected'].': 
			<select name="multi_options" id="multi_options">
				<option name="todo" id="todo" value="0">---</option>
				<option name="todo" id="todo" value="mult_rem">'.$l['remove'].'</option>
			</select>
			'.csrf_display().'
			<input type="button" value="'.$l['go'].'" onclick="show_confirm()" class="sai_graybluebut">
			<br />
		</p>
		<div id="rem_div"></div>
</div><!--end of bg class-->
<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
insids = new Array();
removed = new Object();

function show_confirm(){
	
	insids = new Array();
	removed = new Object();
	
	if($_("multi_options").value != "mult_rem"){
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

	remove_by_id(insids[0], "", 0);
}

function remove_by_id(insid, re, oldinsid){

	removed[insid] = false;
	
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

	// If there is something left to be removed
	if(insid != 0){
		
		var csrf_token = $("#csrf_token").val(); 
		
		try{	
			$.ajax({
				type: "POST",
				data: "csrf_token="+csrf_token,
				url: "'.$globals['index'].'act=backups&remove="+insid+"&ajax=1&random="+Math.random(),
				// Checking for error
				success: function(data){
					remove_by_id(nextinsid, data, insid);	
				}
			});
			
			$_("rem_div").innerHTML = "<br /><br /><p align=\"center\"><img src=\"' . $theme['images'] . 'ajax_remove.gif\"> <br />'.$l['rem_backup_id']. ' File: " +insid+ "<br /></p>";
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

function multiple_check(){
	$("#check_all_backups").on("click", function(event){
		if(this.checked == true){
			$(".check_all_backups").prop("checked", true);
		}else{
			$(".check_all_backups").prop("checked", false);
		}
	});
}

function script_backups_check(element){
	var softname = element.split("_")[0];
	if($("#" + element).prop("checked") == true){
		$("." + softname + "_check_backups").prop("checked", true);
	}else{
		$("." + softname + "_check_backups").prop("checked", false);
	}
}


$(document).ready(function(){
	multiple_check();

	$(".sai_altrowstable tr").mouseover(function(){
		var old_class = $(this).attr("class");
		//alert(old_class);
		$(this).attr("class", "sai_tr_bgcolor");
		
		$(this).mouseout(function(){
			$(this).attr("class", old_class);
		});
	});
	
	shift_check_all("shift_select_backups");
	
});

// ]]></script>';

softfooter();

}

?>