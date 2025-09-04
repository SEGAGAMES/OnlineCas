<?php

//////////////////////////////////////////////////////////////
//===========================================================
// editdetail_theme.php
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


function editdetail_theme(){

global $user, $globals, $l, $theme, $softpanel, $iscripts, $catwise, $error, $edit, $settings;
global $insid, $edited, $software, $soft, $scripts, $version_updated, $account_details_editable, $no_autoupgrade, $add_to_fileindex, $__settings, $default_fileindex, $pfx_error, $owned_themes, $full_tables, $default_tables, $no_autoupgrade_acl, $notes, $act;

// For update theme and plugins ajax call
if(optGET('upgradenow')){
	
	// It was not successful
	if(!empty($error)){
		echo '0'.current($error);
		return false;
	}
	
	// It was successful
	if(!empty($edited)){
		
		if(!empty($_REQUEST['upgradeplugins'])){
			$successmsg = $l['plugins_upgrade_success'];
		}
		
		if(!empty($_REQUEST['upgradetheme'])){
			$successmsg = $l['theme_upgrade_success'];
		}
		
		echo '1'.$successmsg;
		return true;
	}
}

softheader($l['<title>']);

echo '<script language="javascript" type="text/javascript"><!-- // --><![CDATA[

var message_box = function(){			
	return {
		show_message: function(title, body , image) {			
			var okbutton = \'<input  style="width:75px; margin-top:5px; background:#00A0D2; color:#FFF;" class="sai_submit" type="button" onclick="message_box.close_message();" value="OK" />\';
			if(image == "1"){
				var img = \'<img src="'.$theme['images'].'error.gif" />\';
			}else{
				var img = \'<img src="'.$theme['images'].'confirm.gif" />\';			
			}
								
			if(jQuery(\'.sai_message_box\').html() === null || jQuery(\'.sai_message_box\').html() === undefined ) {
				var message = \'<div class="sai_message_box"><table border="0" cellpadding="8" width="100%" height="100%"><tr ><td rowspan="2" width="30%" > \'+ img + \'</td><td width="70%" class ="msg_tr1">\' +  title + \'</td></tr><tr class ="msg_tr2"><td style="text-align:left">\' + body + \'</td></tr><tr ><td colspan="2">\' + okbutton + \'</td></tr></table></div>\';
				jQuery(document.body).append( message );								
				jQuery(\'.sai_message_box\').css(\'top\', jQuery(\'html, body\').scrollTop() + 150);
				jQuery(\'.sai_message_box\').show(\'slow\');
			}else{
				var message =\' <table border="0" width="100%" cellpadding="8" height="100%"><tr ><td rowspan="2" width="30%">\'+ img +  \'</td><td widt="70%" class ="msg_tr1">\' + title + \'</td></tr><tr class ="msg_tr2"><td style="text-align:left">\' + body + \'</td></tr><tr ><td colspan="2">\' + okbutton + \'</td></tr></table>\';				
				jQuery(\'.sai_message_box\').css(\'top\', jQuery(\'html, body\').scrollTop() + 150);
				jQuery(\'.sai_message_box\').show(\'slow\');
				jQuery(\'.sai_message_box\').html( message );
			}
		},
		close_message: function() {
			jQuery(\'.sai_message_box\').hide(\'fast\');
		}
	}
}();

$(document).ready(function(){
		
	// For Plugins Upgrade
	$("#plugins_upgrade").click(function(){
		
		$("#upgradeplugins").val(1);
		$("#plugins_upgrade_gif").css("display", "");
		
		return upgradenow("plugins");
													
	});

	// For Theme Upgrade
	$("#theme_upgrade").click(function(){
		
		$("#upgradetheme").val(1);
		$("#theme_upgrade_gif").css("display", "");
		
		return upgradenow("theme");
													
	});
	
	$("#issue_softwp_license").click(function(){
		
		insid = $("#issue_softwp_license").attr("insid");
		
		document.querySelector(".issue_softwp_license").innerHTML = \'<a><img src="' . $theme['images'] . 'load.gif" alt="' . $l['installing'] . '" width="25" ></a>\';
		document.querySelector("#issue_softwp_license").disabled = true;

		var csrf_token = $("#csrf_token").val();

		$.ajax({
			type: "GET",
			data: {
				"insid":insid,
				"csrf_token":csrf_token,
				"issue_prod_license":"1",
				},
			url: "' . $globals['index'] . 'act=editdetail&api=json",
			success: function(data){
				var resp = JSON.parse(data.trim());
				if(!resp.done){
					if(resp.error){
						alert(Object.values(resp.error).join("\n"));
					}else{
						alert("' . $l['some_error_occurred'] . '");
					}
					resp = false;
					//console.log(resp.error);
				}
				else{
					if(resp.userins.softaculous_pro_license){
						document.querySelector(".issue_softwp_license").innerHTML = resp.userins.softaculous_pro_license + "&nbsp;&nbsp;&nbsp;";
					}
					resp = resp.done;
					document.querySelector("#issue_softwp_license").disabled = false;
					document.querySelector("#issue_softwp_license").value = "'.$l['softwp_re_gen_license'].'";
				}
			}
		});
	});
});

function upgradenow(action){
	$.ajax({
		type: "POST",
		url: window.location+"&upgradenow=1",					
		data: $("#editsettings").serialize(),
		
		// Checking for error
		success: function(data){
			
			$("#" + action + "_upgrade_gif").css("display", "none");
			
			// Reset the button so it is not submitted next time
			$("#upgrade" + action).val(0);
			
			var result = data.trim().substring(0,1);
			if(result == "1"){
				var msg = data.trim().substring(1);
				message_box.show_message( "'.$l['done'].'", msg, 2);
			}
			if(result == "0"){
				var msg = data.trim().substring(1);
				message_box.show_message( "'.$l['error'].'", msg, 1);
			}
		},
		error: function() {
			message_box.show_message("Error", "Oops ... the connection was lost", 1);
		}													
	});
	
	return false;
}
// ]]></script>';

echo '
<script language="javascript" type="text/javascript"><!-- // --><![CDATA[

// show/hide backup options
function show_backup(){
	try{
		var auto_backup = $("#auto_backup").val();
		if(auto_backup == 0){
			$("#auto_backup_rotation").prop("disabled", true);
			$("#custom_autobackup_cron").css("display", "none");
		}else{
			if(auto_backup == "custom"){
				$("#custom_autobackup_cron").css("display", "block");
			}else{
				$("#custom_autobackup_cron").css("display", "none");
			}				
			$("#auto_backup_rotation").prop("disabled", false);
		}
		
	}catch(e){
		//
	}
	return true;
};

function toggle_advoptions(ele){
	//alert("#"+ele);
	if ($("#"+ele).is(":hidden")){
		$("#"+ele).slideDown("slow");
		$("#advoptions_toggle_plus").attr("class", "fas fa-minus-square");
	}
	else{
		$("#"+ele).slideUp("slow");
		$("#advoptions_toggle_plus").attr("class", "fas fa-plus-square");
	}

}

function plus_onmouseover(ele){
	$("#"+ele.id+"_plus").attr("src", "'.$theme['images'].'plus_hover.gif");
}

function plus_onmouseout(ele){
	$("#"+ele.id+"_plus").attr("src", "'.$theme['images'].'plus.gif");
}

$(document).ready(function() {
	$("#editfiles tr").click(function(event) {
		if (event.target.type !== "checkbox") {
		  $(":checkbox", this).trigger("click");
		}
	});
});

'.(!empty($_POST) ? '' : 'addonload(\'show_backup();\');').'

// ]]></script>';

$width_size = 65;

if(!empty($softpanel->leftpanel_resize)){
	$width_size = 40;
}

if(!empty($edited)){

	$return = '';
	$role = '';

	if(can_wordpress_manager($soft)){
		$return .= '<a role="button" href="'.$globals['ind'].'act=wordpress&insid='.$insid.'"><span class="btn btn-outline-primary">'.$l['return_to_wpm'].'</span></a>&nbsp';
		
		$role = 'role="button"';
	}

	$return .= '<a '.$role.' href="'.script_link($soft).'&highlight='.$insid.'&postact=edit"><span class="btn btn-outline-primary">'.$l['return'].'</span></a>';
	
	//Filter to customize the return to link
	$return = apply_filters('return_link', $return, $act);
	
	echo '
	<div class="bg"><br />
		<div class="alert alert-success"><center>'.$l['details_edited'].'</center></div><br />';
		
		if(!empty($notes)){
			echo $l['edit_notes'].' : <br />
			<div class="sai_notes">'.softparse($notes, $soft).'</div><br />';
		}
		
		if(!empty($pfx_error)){
			error_handle($pfx_error, "100%");
		}
			
	echo '<br /><center>'.$return.'</center><br />
	</div><!--end of bg-->';
}else{

	$return = '';
	$role = '';

	if(can_wordpress_manager($soft)){
		$return .= '<a role="button" href="'.$globals['ind'].'act=wordpress&insid='.$insid.'"><span class="btn btn-outline-primary">'.$l['return_to_wpm'].'</span></a>&nbsp';
		
		$role = 'role="button"';
	}

	$return .= '<a '.$role.' href="'.script_link($soft).'"><span class="btn btn-outline-primary">'.$l['return'].'</span></a>';
	
	//Filter to customize the return to link
	$return = apply_filters('return_link', $return, $act);
	
	echo '
	<form accept-charset="'.$globals['charset'].'" name="editsettings" id="editsettings" method="post" action="" class="form-horizontal">
		<div class="bg"><br />
			<div class="row sai_main_head mt-8 mb-4">
			
				<div class="col-12 text-center">
					<i class="fas fa-pencil-alt fa-1x mr-2" style="color:#00A0D2;"></i>
					<span class="form-title">'.$l['edit_ins'].'</span>
				</div>
			</div>';
			
			error_handle($error, '100%');
			
			if(!empty($version_updated)){
				echo '<div class="alert alert-warning m-3" align="center">
					<a href="#close" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.$l['version_edited'].'</div>';
			}

			echo (!empty($GLOBALS['alreadyupdated']) ? '
				<form accept-charset="'.$globals['charset'].'" method="post" name="uprec" id="uprec" action="">
					<center class="alert alert-warning m-3">
						<a href="#close" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						<a href="'.$globals['index'].'act=editdetail&insid='.$insid.'&updateversion=1" style="text-decoration:none;"><img src="'.$theme['images'].'notice.gif" /> &nbsp; '.lang_vars($l['alreadyupdated'], array($GLOBALS['alreadyupdated'], $user['ins'][$insid]['ver'])).'</a>
					</center>
					'.csrf_display().'
				</form>' : '');

			echo '
			<div class="card m-3 p-3 admin-settings">
				<div class="sai_sub_head">'.$l['ins_details'].'</div>
				<hr class="sai_main_head_hr">
				<div class="row">';
		
				if(empty($globals['hide_directory_url'])){
					echo '
					<div class="col-sm-6 col-xs-12 mb-2">
						<label for="edit_dir" class="sai_head mb-2">'.$l['edit_dir'].'</label><br />
						<input type="text" name="edit_dir" id="edit_dir" class="form-control" value="'.POSTval('edit_dir', $user['ins'][$insid]['softpath']).'" size="'.$width_size.'" />
					</div>	
					<div class="col-sm-6 col-xs-12 mb-2">
						<label for="edit_url" class="sai_head mb-2">'.$l['edit_url'].'</label>
						<input type="text" name="edit_url" id="edit_url" class="form-control" value="'.POSTval('edit_url', $user['ins'][$insid]['softurl']).'" size="'.$width_size.'" />
					</div>';
				}
				
				// Web directory @since 3.5
				if(!empty($user['ins'][$insid]['wwwdir'])){
					echo '
					<div class="col-sm-6 col-xs-12 mb-2">
						<label for="edit_wwwdir" class="sai_head mb-2">'.$l['edit_wwwdir'].'</label><br />
						<input type="text" name="edit_wwwdir" id="edit_wwwdir" class="form-control" value="'.POSTval('edit_wwwdir', $user['ins'][$insid]['wwwdir']).'" size="'.$width_size.'" />
					</div>';
				}
				
				// Web directory URL @since 3.5
				if(!empty($user['ins'][$insid]['wwwurl'])){
				
					echo '
					<div class="col-sm-6 col-xs-12 mb-2">
						<label for="edit_wwwurl" class="sai_head mb-2">'.$l['edit_wwwurl'].'</label><br />
						<input type="text" name="edit_wwwurl" id="edit_wwwurl" class="form-control" value="'.POSTval('edit_wwwurl', $user['ins'][$insid]['wwwurl']).'" size="'.$width_size.'" />
					</div>';
				}
				
				// Data directory ?
				if(!empty($user['ins'][$insid]['softdatadir'])){
				
					echo '
					<div class="col-sm-6 col-xs-12 mb-2">
						<label for="edit_datadir" class="sai_head mb-2">'.$l['edit_datadir'].'</label><br />
						<input type="text" name="edit_datadir" id="edit_datadir" class="form-control" value="'.POSTval('edit_datadir', $user['ins'][$insid]['softdatadir']).'" size="'.$width_size.'" />
					</div>';
				}
			
				if(!empty($user['ins'][$insid]['softdb'])){
					
					echo '
					<div class="col-sm-6 col-xs-12 mb-2">
						<label for="edit_db" class="sai_head mb-2">'.$l['edit_db'].'</label>
						<input type="text" name="edit_dbname" id="edit_db" class="form-control" value="'.POSTval('edit_dbname', $user['ins'][$insid]['softdb']).'" size="'.$width_size.'" />
					</div>';
				}
				
				if(!empty($user['ins'][$insid]['softdbuser'])){
				
					echo '
					<div class="col-sm-6 col-xs-12 mb-2">
						<label for="edit_dbuser" class="sai_head mb-2">'.$l['edit_dbuser'].'</label><br />
						<input type="text" name="edit_dbuser" id="edit_dbuser" class="form-control" value="'.POSTval('edit_dbuser', $user['ins'][$insid]['softdbuser']).'" size="'.$width_size.'" />
					</div>';
				}
			
				if(!empty($user['ins'][$insid]['display_softdbpass'])){
				
					echo '
					<div class="col-sm-6 col-xs-12 mb-2">
						<label for="edit_dbpass" class="sai_head mb-2">'.$l['edit_dbpass'].'</label>
						'.((!empty($globals['no_prefill_pass'])) ? '<span class="sai_exp">'.$l['edit_dbpass_exp'].'</span>' : '').'
						<div class="row">
							<div class="col-sm-11">
								<input type="password" name="edit_dbpass" id="edit_dbpass" class="form-control" value="'.aPOSTval('edit_dbpass', (empty($globals['no_prefill_pass']) ? htmlizer($user['ins'][$insid]['softdbpass']) : '')).'" size="'.$width_size.'" autocomplete="new-password" />
							</div>
							<div class="col-sm-1" style="margin-left:-20px;">
								<input id="toggle_pass_dbpass" type="checkbox" style="display:none;" onclick="toggle_pass(\'show_hide_dbpass\', \'edit_dbpass\');"/><label for="toggle_pass_dbpass" style="margin-top:6px;"><span id="show_hide_dbpass">'.$l['show'].'</span></label>
							</div>
						</div>
					</div>';
				}
				
				if(!empty($user['ins'][$insid]['softdbhost'])){
				
					echo '
					<div class="col-sm-6 col-xs-12 mb-2">
						<label for="edit_dbhost" class="sai_head mb-2">'.$l['edit_dbhost'].'</label><br />
						<input type="text" name="edit_dbhost" class="form-control" id="edit_dbhost" value="'.aPOSTval('edit_dbhost', $user['ins'][$insid]['softdbhost']).'" size="'.$width_size.'" />
					</div>';
				}
				
				echo '
				<div class="col-sm-6 col-xs-12 mb-2">';
				
				//Do not show 'disable update notifications' option if both 'Turn off all Emails sent to endusers' and 'Disable End User Update E-Mails' or either is enabled in Admin Panel
				if(empty($globals['off_email_link']) && empty($globals['eu_email_off'])){
					echo '
					<div>
						<input type="checkbox" class="mr-1 mb-0" name="disable_notify_update" id="disable_notify_update" '.POSTchecked('disable_notify_update', $user['ins'][$insid]['disable_notify_update']).' />
						<label for="disable_notify_update" class="sai_head mb-2">'.$l['disable_notify_update'].'</label>
						<span class="sai_exp">'.$l['exp_disable_notify_update'].'</span>
					</div>';
				}
				
				if(empty($globals['off_upgrade_plugins']) && !empty($software['update_plugins'])){
					echo '
					<div>
						<input type="checkbox" name="auto_upgrade_plugins" class="mr-1 mb-0" id="auto_upgrade_plugins" id="auto_upgrade_plugins" '.POSTchecked('auto_upgrade_plugins', (!empty($globals['force_upgrade_plugins']) ? $globals['force_upgrade_plugins'] : $user['ins'][$insid]['auto_upgrade_plugins'])).(!empty($globals['force_upgrade_plugins']) ? 'disabled' : '').' />
						
						<label for="auto_upgrade_plugins" class="sai_head mb-2">'.lang_vars($l['auto_upgrade_plugins'], array($software['name'])).'</label>
						<span class="sai_exp">'.lang_vars($l['exp_auto_upgrade_plugins'], array($software['name'])).'</span>
					</div>';
				}
			
				if(empty($globals['off_upgrade_themes']) && !empty($software['update_themes'])){
					echo '
					<div>
						<input type="checkbox" class="mr-1 mb-0" name="auto_upgrade_themes" id="auto_upgrade_themes" '.POSTchecked('auto_upgrade_themes', (!empty($globals['force_upgrade_themes']) ? $globals['force_upgrade_themes'] : $user['ins'][$insid]['auto_upgrade_themes'])).(!empty($globals['force_upgrade_themes']) ? 'disabled' : '').' />
						
						<label for="auto_upgrade_themes" class="sai_head mb-2">'.lang_vars($l['auto_upgrade_themes'], array($software['name'])).'</label>
						<span class="sai_exp">'.lang_vars($l['exp_auto_upgrade_themes'], array($software['name'])).'</span>
					</div>';
				}
				
				echo '
				</div>
				<div class="col-sm-6 col-xs-12 mb-2">
				<div class="row">';
					
				if(empty($globals['off_upgrade_plugins']) && !empty($software['update_plugins'])){
					echo '
					<div class="col-sm-6 col-xs-12 mb-2" style="text-align:center;">
						<input type="hidden" name="upgradeplugins" id="upgradeplugins" />
						<input id="plugins_upgrade" class="btn sai-button" name="plugins_upgrade" value="'.$l['plugins_upgrade_now'].'" type="button">
						<img id="plugins_upgrade_gif" src="'.$theme['images'].'progress.gif" style="display:none">
					</div>';
				}
				
				if(empty($globals['off_upgrade_themes']) && !empty($software['update_themes'])){
					echo '
					<div class="col-sm-6 col-xs-12" style="text-align:center;">
						<input type="hidden" name="upgradetheme" id="upgradetheme" />
						<input id="theme_upgrade" class="btn sai-button" name="theme_upgrade" value="'.$l['theme_upgrade_now'].'" type="button">
						<img id="theme_upgrade_gif" src="'.$theme['images'].'progress.gif" style="display:none">
					</div>';
				}
				
				echo '
				</div>
				</div>';
				
				if(!empty($scripts[$soft]['auto_upgrade']) && empty($no_autoupgrade) && empty($no_autoupgrade_acl)){
					
					$user['ins'][$insid]['eu_auto_upgrade'] = (int) $user['ins'][$insid]['eu_auto_upgrade'];
					
					echo '
					<div class="col-sm-6 col-xs-12 mb-2">
						<label for="eu_auto_upgrade" class="sai_head mb-2">'.$l['eu_auto_upgrade'].'</label>
						<span class="sai_exp">'.$l['exp_eu_auto_upgrade'].'</span>
						<br />
						<input type="radio" class="mr-1" name="eu_auto_upgrade" id="eu_auto_upgrade_0" value="0" '.POSTradio('eu_auto_upgrade', 0, $user['ins'][$insid]['eu_auto_upgrade']).(!empty($globals['force_auto_upgrade']) ? 'disabled' : '').' /> 
						<label for="eu_auto_upgrade_0" class="radio-title">'.$l['dont_auto_upgrade'].'</label> <br />
						
						'.(!empty($software['has_minor']) ? '<input type="radio" class="mr-1" name="eu_auto_upgrade" id="eu_auto_upgrade_2" value="2" '.POSTradio('eu_auto_upgrade', 2, $user['ins'][$insid]['eu_auto_upgrade']).(!empty($globals['force_auto_upgrade']) ? 'disabled' : '').' /> <label for="eu_auto_upgrade_2" class="radio-title">'.$l['minor_auto_upgrade'].'</label><br />' : '').'
						
						<input type="radio" class="mr-1" name="eu_auto_upgrade" id="eu_auto_upgrade_1" value="1" '.POSTradio('eu_auto_upgrade', 1, (!empty($globals['force_auto_upgrade']) ? $globals['force_auto_upgrade'] : $user['ins'][$insid]['eu_auto_upgrade'])).(!empty($globals['force_auto_upgrade']) ? 'disabled' : '').' /> <label for="eu_auto_upgrade_1" class="radio-title">'.$l['major_auto_upgrade'].'</label>
					</div>';
				}
				
				if(empty($globals['off_rbackup']) && empty($globals['disable_backup_restore'])){
					echo '
					<div class="col-sm-6 col-xs-12 mb-2">
						<label for="backup_location" class="sai_head mb-2">'.$l['backup_loc'].'</label>
						<span class="sai_exp">'.$l['exp_backup_loc'].'</span>	
					
						<select name="backup_location" class="form-control" id="backup_location">
									<option value="0" '.POSTselect('backup_location', 0, (empty($user['ins'][$insid]['backup_location']) ? '1' : '0')).'>'.$l['default'].'</option>';
									if(empty($globals['disable_local_backup'])){
										echo '<option value="-1" '.POSTselect('backup_location', -1, ($user['ins'][$insid]['backup_location'] == -1 ? '1' : '0')).'>'.$l['local_folder'].'</option>';
									}
							foreach($user['remote_backup_locs'] as $k => $v){
								echo '<option value="'.$k.'" '.POSTselect('backup_location', $k, ($user['ins'][$insid]['backup_location'] == $k ? '1' : '0')).'>'.$v['name'].'</option>';
							}
						echo '</select>
					</div>';
				}
		
				if(empty($globals['disable_backup_restore']) && empty($globals['disable_auto_backup'])){
					echo '
					<div class="col-sm-6 col-xs-12 mb-2">
						<label for="auto_backup" class="sai_head mb-2">'.$l['auto_backup'].'</label>
						<span class="sai_exp">'.$l['exp_auto_backup'].'</span>	
						<select name="auto_backup" class="form-control" id="auto_backup" onchange="show_backup();">
						<option value="0" '.POSTselect('auto_backup', '0', (empty($user['ins'][$insid]['auto_backup']) ? '1' : '0')).'>'.$l['no_backup'].'</option>'.
						(empty($globals['disable_auto_backup_daily']) ? '<option value="daily" '.POSTselect('auto_backup', 'daily', ($user['ins'][$insid]['auto_backup'] == 'daily' ? '1' : '0')).'>'.$l['daily'].'</option>' : '').
						(empty($globals['disable_auto_backup_weekly']) ? '<option value="weekly" '.POSTselect('auto_backup', 'weekly', ($user['ins'][$insid]['auto_backup'] == 'weekly' ? '1' : '0')).'>'.$l['weekly'].'</option>' : '').
						(empty($globals['disable_auto_backup_monthly']) ? '<option value="monthly" '.POSTselect('auto_backup', 'monthly', ($user['ins'][$insid]['auto_backup'] == 'monthly' ? '1' : '0')).'>'.$l['monthly'].'</option>' : '').
						(empty($globals['disable_auto_backup_custom']) ? '<option value="custom" '.POSTselect('auto_backup', 'custom', ($user['ins'][$insid]['auto_backup'] == 'custom' ? '1' : '0')).'>'.$l['custom_autobackup'].'</option>' : '').'
						</select>					
					</div>';
					
					$autobackup_cron = explode(",", $user['ins'][$insid]['auto_backup_crontime']);
					
					echo '
					<div id="custom_autobackup_cron" class="col-sm-6 col-xs-12" style="display:none;">
						<div class="row">
						<div class="col-sm-12 col-xs-12">
							<label for="autobackup_cron_min" class="sai_head mb-2">'.$l['custom_autobackup_cron'].'</label>
							<span class="sai_exp">'.$l['custom_autobackup_cron_exp'].'</span>
						</div>
						<div class="col-sm-12 col-xs-12 mb-2">
							<div class="row">
								<div class="col-sm-2">
									<label for="autobackup_cron_min" class="sai_head mb-2">'.$l['cron_min'].'</label>	
									<input type="text" class="form-control" name="autobackup_cron_min" id="autobackup_cron_min" size="2" value="'.POSTval('autobackup_cron_min', $autobackup_cron[0]).'" />
								</div>
								<div class="col-sm-2">
									<label for="autobackup_cron_hour" class="sai_head mb-2">'.$l['cron_hour'].'</label>
									<input type="text" class="form-control" name="autobackup_cron_hour" id="autobackup_cron_hour" size="2" value="'.POSTval('autobackup_cron_hour', $autobackup_cron[1]).'" />
								</div>
								<div class="col-sm-2">
									<label for="autobackup_cron_day" class="sai_head mb-2">'.$l['cron_day'].'</label>
									<input type="text" class="form-control" name="autobackup_cron_day" id="autobackup_cron_day" size="2" value="'.POSTval('autobackup_cron_day', $autobackup_cron[2]).'" />
								</div>
								<div class="col-sm-2">
									<label for="autobackup_cron_month" class="sai_head mb-2">'.$l['cron_month'].'</label>
									<input type="text" class="form-control" name="autobackup_cron_month" id="autobackup_cron_month" size="2" value="'.POSTval('autobackup_cron_month', $autobackup_cron[3]).'" />
								</div>
								<div class="col-sm-2">
									<label for="autobackup_cron_weekday" class="sai_head mb-2">'.$l['cron_weekday'].'</label>
									<input type="text" class="form-control" name="autobackup_cron_weekday" id="autobackup_cron_weekday" size="2" value="'.POSTval('autobackup_cron_weekday', $autobackup_cron[4]).'" />
								</div>
							</div>
						</div>
						</div>	
					</div>';
					
					echo '
					<div class="col-sm-6 col-xs-12 mb-2">
						<label for="auto_backup_rotation" class="sai_head mb-2">'.$l['auto_backup_rotation'].'</label>
						<span class="sai_exp">'.$l['exp_auto_backup_rotation'].'</span>
						<select name="auto_backup_rotation" class="form-control" id="auto_backup_rotation">';
						
						if(isset($user['ins'][$insid]['auto_backup_rotation'])){
							$current_rotation = $user['ins'][$insid]['auto_backup_rotation'];
							
							// Is the current limit set greater than the admin max limit ?
							if(!empty($globals['auto_backup_limit']) && $user['ins'][$insid]['auto_backup_rotation'] > $globals['auto_backup_limit']){
								$current_rotation = $globals['auto_backup_limit'];
							}
						}
						
						for($i=0; $i<=10; $i++){
							// Do we have a limit from admin ?
							if(!empty($globals['auto_backup_limit']) && ($i > $globals['auto_backup_limit'] || $i == 0) || !empty($globals['max_backups']) && ($i > $globals['max_backups'] || $i == 0)) continue;
							echo '<option value="'.$i.'" '.POSTselect('auto_backup_rotation', $i, (!empty($current_rotation) && $current_rotation == $i ? '1' : ((!isset($current_rotation) && $i == 4) ? '1' : '0'))).'>'.(empty($i) ? $l['unlimited'] : $i).'</option>';
						}
						echo '</select>		
					</div>';
				}
				
				if(!empty($add_to_fileindex)){
				
					echo '
					<div class="col-sm-6 col-xs-12 mb-2">
						<label for="advoptions_toggle" class="sai_head mb-2">'.$l['select_files'].'</label>
						<span class="sai_exp">'.$l['select_files_exp'].'</span><br />
						
						<div id="advoptions_toggle" onclick="toggle_advoptions(\'selectfile\');" class="sai_head" style="background: none; cursor:pointer;"><i id="advoptions_toggle_plus" class="fas fa-plus-square" class="mr-2"></i> &nbsp; '.$l['select_files_list'].'</div>
						<div id="selectfile" style="display:none">
							<table class="table table-hover">
								<thead class="sai_head2">
									<tr>
										<th width="5%"><input type="checkbox" id="check_all_edit" name="check_all_edit"></th>
										<th colspan="2">'.$l['check_all_edit'].'</th>
									</tr>
								</thead>';
								foreach($add_to_fileindex as $ck => $cv){
									
									if(in_array($cv['name'], $default_fileindex) && in_array($cv['name'], $__settings['fileindex'])) continue;
									
									echo '<tr>
											<td><input type="checkbox" name="add_to_fileindex[]" class="soft_filelist" value="'.$cv['name'].'" '.POSTmulticheck('add_to_fileindex', $cv['name'], $__settings['fileindex']).' id="add_to_fileindex_'.$cv['name'].'" /></td>
											<td width="5%"><img src="'.$theme['images'].''.(!empty($cv['dir']) ? 'dir.png' : 'file.png').'"></td>
											<td><label for="add_to_fileindex_'.$cv['name'].'" style="cursor:pointer;">'.$cv['name'].'</label></td>
										</tr>';
									$i++;
								}
							echo '
							</table>
						</div>	
					</div>';	
					
					if(empty($globals['disable_backup_restore'])){
						
						echo '
						<div class="col-sm-6 col-xs-12 mb-2">
							<label for="select_files_backup" class="sai_head">'.$l['select_files_backup'].'</label>
							<span class="sai_exp">'.$l['select_files_backup_exp'].'</span>
							
							<select name="select_files_backup" class="form-control" id="select_files_backup">
								<option value="0" '.POSTselect('select_files_backup', '0', (empty($user['ins'][$insid]['select_files_backup']) ? '1' : '0')).'>'.$l['no'].'</option>
								<option value="1" '.POSTselect('select_files_backup', '1', (!empty($user['ins'][$insid]['select_files_backup']) ? '1' : '0')).'>'.$l['yes'].'</option>
							</select>				
						</div>';
					}
				}
				
				if(!empty($__settings['softdb']) && aefer() && empty($data['dbcreated'])){
					echo '
					<div class="col-sm-6 col-xs-12 mb-2">
						<label for="tables_toggle" class="sai_head mb-2">'.$l['select_tables'].'</label>
						<span class="sai_exp">'.$l['select_tables_exp'].'</span><br />
						<div id="tables_toggle" onclick="toggle_advoptions(\'select_tables\');" class="sai_head" style="background: none; cursor:pointer;"><i id="advoptions_toggle_plus" class="fas fa-plus-square" class="mr-2"></i> &nbsp; Select tables</div>
						<div id="select_tables" style="display:none">
							<table class="table table-hover">
								<thead class="sai_head2">
									<tr>
										<th width="5%"><input type="checkbox" id="check_all_tables" name="check_all_tables"></th>
										<th colspan="2">'.$l['check_all_edit'].'</th>
									</tr>
								</thead>';
								foreach($full_tables as $k => $v){											
									echo '<tr>
											<td><input type="checkbox" name="add_to_softdbtables[]" class="soft_tablelist" value="'.$v.'" '.POSTmulticheck('add_to_softdbtables', $v, $__settings['softdbtables']).' '. (in_array($v, $default_tables) ? 'disabled' : '').' id="add_to_softdbtables_'.$v.'" /></td>
											<td><label for="add_to_softdbtables_'.$v.'" style="cursor:pointer;">'.trim($v, '`').'</label></td>
										</tr>';
									$i++;
								}
							echo '
							</table>
						</div>	
					</div>';
				}
			echo '</div>
			</div>';
		
			if(!empty($settings)){
			
				echo '
				<div class="card m-3 p-3 admin-settings">';
			
					foreach($settings as $group => $sets){
						
						if($group == 'hidden' || empty($sets)) continue;
					
						echo '
					<div class="sai_sub_head">'.$group.'</div>
					<hr class="sai_main_head_hr">
					<div class="row">';
					
						foreach($sets as $sk => $sv){
							
							if($sk == 'admin_pass' || $sk == 'signon_username' || $sk == 'admin_username'){
								$exp_class = 'sai_exp';
							}else{
								$exp_class = 'sai_exp';					
							}
							
							echo '
								<div class="col-sm-6 col-xs-12 mb-2">
									<label for='.$sk.' class="sai_head mb-2">'.$sv['head'].'</label>
									'.(empty($sv['exp']) ? '' : '
									<p class="mb-1 '.$exp_class.'">'.$sv['exp'].'</p>');
								
								//Adding class to input
								if(preg_match('/type="text"/is', $sv['tag'])){
									$sv['tag'] = preg_replace('/>/is', 'class="form-control">',$sv['tag']);
								}
								
								if($sk == 'admin_pass'){
									$sv['tag'] = preg_replace('/type="text"/is', 'type="password"',$sv['tag']);
									echo '
									<div class="row">
										<div class="col-sm-11">'.$sv['tag'].'</div>
										<div class="col-sm-1" style="margin-left:-20px;">
											<input id="toggle_pass_admin" type="checkbox" style="display:none;" onclick="toggle_pass(\'show_hide_admin\', \'admin_pass\');"/>
											<label for="toggle_pass_admin" style="margin-top:6px;">
												<span id="show_hide_admin">'.$l['show'].'</span>
											</label>
										</div>
									</div>
								</div>';
								}else{
									echo $sv['tag'].'</div>';
								}					
						}
						echo '</div>';
					}
				
		
					//The Hidden groups 
					if(!empty($settings['hidden'])){
					
						foreach($settings['hidden'] as $sk => $sv){
							echo $sv['tag'];
						}					
					}		
				echo '</div><!--end of bg clss-->';
			}//End of if($settings)

		
// Do we have to display the theme 
if((!empty($globals['eu_enable_themes'])) && !empty($software['has_theme'])){
		
	if(function_exists('__'.$software['softname'].'_theme_show_options')){
		echo call_user_func('__'.$software['softname'].'_theme_show_options');
	}	
}		
		echo '
			<div class="bg m-3 info_block">			
				<div class="sai_sub_head">'.$l['info'].'</div>
				<hr class="sai_main_head_hr">			
				<div class="row mb-3">
					<div class="col-sm-5 col-xs-12">
						<span class="sai_head">'.$l['ins_softname'].'</span>
					</div>
					<div class="col-sm-6 col-xs-12">
						<span class="sai_info">'.$software['name'].'</span>
					</div>
				</div>
				
				<div class="row mb-3">
					<div class="col-sm-5 col-xs-12">
						<span class="sai_head">'.$l['ins_num'].'</span>
					</div>
					<div class="col-sm-6 col-xs-12">
						<span class="sai_info">'.$user['ins'][$insid]['insid'].'</span>
					</div>
				</div>
				
				<div class="row mb-3">
					<div class="col-sm-5 col-xs-12">
						<span class="sai_head">'.$l['ins_ver'].'</span>
					</div>
					<div class="col-sm-6 col-xs-12">
						<span class="sai_info">'.$user['ins'][$insid]['ver'].'</span>
					</div>
				</div>
				
				<div class="row mb-3">
					<div class="col-sm-5 col-xs-12">
						<span class="sai_head">'.$l['ins_time'].'</span>
					</div>
					<div class="col-sm-6 col-xs-12">
						<span class="sai_info">'.datify($user['ins'][$insid]['itime']).'</span>
					</div>
				</div>
		
				<div class="row mb-3">
					<div class="col-sm-5 col-xs-12">
						<span class="sai_head">'.$l['ins_path'].'</span>
					</div>
					<div class="col-sm-6 col-xs-12">
						<span class="sai_info">'.$user['ins'][$insid]['softpath'].'</span>
					</div>
				</div>
				
				<div class="row mb-3">
					<div class="col-sm-5 col-xs-12">
						<span class="sai_head">'.$l['ins_url'].'</span>
					</div>
					<div class="col-sm-6 col-xs-12">
						<span class="sai_info"><a href="'.$user['ins'][$insid]['softurl'].'" target="_blank">'.$user['ins'][$insid]['softurl'].'</a></span>
					</div>
				</div>';
		
				if(!empty($user['ins'][$insid]['admin_folder']) || !empty($scripts[$soft]['admin_url'])){
					$adminurl = $user['ins'][$insid]['softurl'].'/'.(!empty($user['ins'][$insid]['admin_folder']) ? $user['ins'][$insid]['admin_folder'] : $scripts[$soft]['admin_url']);
					echo '
					<div class="row mb-3">
						<div class="col-sm-5 col-xs-12">
							<span class="sai_head">'.$l['ins_admin_url'].'</span>
						</div>
						<div class="col-sm-6 col-xs-12">
							<span class="sai_info"><a href="'.$adminurl.'" target="_blank">'.$adminurl.'</a></span>
						</div>
					</div>';
				}
		
				echo '
				
				'.(empty($user['ins'][$insid]['wwwdir']) ? '' :'
					<div class="row mb-3">
						<div class="col-sm-5 col-xs-12">
							<span class="sai_head">'.$l['ins_wwwdir'].'</span>
						</div>
						<div class="col-sm-6 col-xs-12">
							<span class="sai_info">'.$user['ins'][$insid]['wwwdir'].'</span>
						</div>			
					</div>
				').'
				
				'.(empty($user['ins'][$insid]['wwwurl']) ? '' : '
					<div class="row mb-3">
						<div class="col-sm-5 col-xs-12">
							<span class="sai_head">'.$l['ins_wwwurl'].'</span>
						</div>
						<div class="col-sm-6 col-xs-12">
							<span class="sai_info">'.$user['ins'][$insid]['wwwurl'].'</span>
						</div>		
					</div>
				').'
				
				'.(empty($user['ins'][$insid]['softdatadir']) ? '' : '
					<div class="row mb-3">
						<div class="col-sm-5 col-xs-12">
							<span class="sai_head">'.$l['ins_datadir'].'</span>
						</div>
						<div class="col-sm-6 col-xs-12">
							<span class="sai_info">'.$user['ins'][$insid]['softdatadir'].'</span>
						</div>
					</div>
				').'	
				
				'.(empty($user['ins'][$insid]['softdb']) ? '' : '
					<div class="row mb-3">
						<div class="col-sm-5 col-xs-12">
							<span class="sai_head">'.$l['ins_db'].'</span>
						</div>
						<div class="col-sm-6 col-xs-12">
							<span class="sai_info">'.$user['ins'][$insid]['softdb'].'</span>
						</div>
					</div>
				').'	
				
				'.(empty($user['ins'][$insid]['softdbuser']) ? '' : '
					<div class="row mb-3">
						<div class="col-sm-5 col-xs-12">
							<span class="sai_head">'.$l['ins_dbuser'].'</span>
						</div>
						<div class="col-sm-6 col-xs-12">
							<span class="sai_info">'.$user['ins'][$insid]['softdbuser'].'</span>
						</div>
					</div>
				').'	
				
				'.(empty($user['ins'][$insid]['softdbhost']) ? '' : '
					<div class="row mb-3">
						<div class="col-sm-5 col-xs-12">
							<span class="sai_head">'.$l['ins_dbhost'].'</span>
						</div>
						<div class="col-sm-6 col-xs-12">
							<span class="sai_info">'.$user['ins'][$insid]['softdbhost'].'</span>
						</div>
					</div>
				').'	
				
				'.(empty($user['ins'][$insid]['cron_command']) ? '' : '
					<div class="row mb-3">
						<div class="col-sm-5 col-xs-12">
							<span class="sai_head">'.$l['ins_cron_command'].'</span>
						</div>
						<div class="col-sm-6 col-xs-12">
							<span class="sai_info">'.base64_decode($user['ins'][$insid]['cron_command']).'</span>
						</div>
					</div>
				
				')
				
				.((is_wordpress($soft) && softaculous_is_pro() && (empty($globals['wp_fp_pref']) || $globals['wp_fp_pref'] != 2)) ? '
					<div class="row mb-3">
						<div class="col-sm-5 col-xs-12">
							<span class="sai_head">'.$l['softwp_license'].'</span>
						</div>
						<div class="col-sm-6 col-xs-12">
							<span class="sai_info issue_softwp_license">
								'.(!empty($user['ins'][$insid]['softaculous_pro_license']) ? $user['ins'][$insid]['softaculous_pro_license'] . '&nbsp;&nbsp;&nbsp;' : '').'
							</span>
							<input type="button" class="flat-butt btn sai-button" id="issue_softwp_license" name="issue_softwp_license" insid="'.$insid.'" style="padding: 5px 10px;" value="'.(!empty($user['ins'][$insid]['softaculous_pro_license']) ? $l['softwp_re_gen_license'] : $l['softwp_gen_license']).'">
						</div>
					</div>' : '').'
			</div><!--end of bg class-->
			
			<div class="text-center my-4">
				<input type="hidden" name="editins" id="editins" value="'.$l['editins'].'" />
				<input type="submit" name="softsubmitbut" class="flat-butt btn sai-button" id="softsubmitbut" value="'.$l['editins'].'"  />
				<center>
					<p class="mt-3">'.$return.'</p>
				</center>
			</div>
								
		</div><!--end of bg class-->
		'.csrf_display().'
	</form>
	
	<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
		$(document).ready(function(){
		
			$("#check_all_edit").on("click", function(event){
				if(this.checked == true){
					$(".soft_filelist").prop("checked", true);
				}else{
					$(".soft_filelist").prop("checked", false);
				}
			});
			
			$("#check_all_tables").on("click", function(event){
				if(this.checked == true){
					$(".soft_tablelist").prop("checked", true);
				}else{
					$(".soft_tablelist").prop("checked", false);
				}
			});
		
			$(".sai_altrowstable tr").mouseover(function(){
				var old_class = $(this).attr("class");
				//alert(old_class);
				$(this).attr("class", "sai_tr_bgcolor");
				
				$(this).mouseout(function(){
					$(this).attr("class", old_class);
				});
			});
			
		});
	// ]]></script>';

}

// Is there a UI Controller ?
if(function_exists('__'.$software['softname'].'_theme_html')){
	call_user_func('__'.$software['softname'].'_theme_html');
}

softfooter();

}

?>