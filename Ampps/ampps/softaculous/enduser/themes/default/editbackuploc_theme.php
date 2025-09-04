<?php

//////////////////////////////////////////////////////////////
//===========================================================
// editbackuploc_theme.php
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


function editbackuploc_theme(){

global $user, $globals, $l, $theme, $error, $dropbox;
global $saved, $edit_location;

softheader($l['<title>']);

echo '
<div class="bg"><br />
	<form accept-charset="'.$globals['charset'].'" name="editbackup" method="post" action="" class="form-horizontal">
	
		<div class="row">
			<div class="col-12 text-center sai_main_head">
				<i class="fas fa-file-archive fa-2x mr-2" style="color:#00A0D2;"></i>
				<span class="form-title">'.$l['edit_backup'].'</span>
			</div>
		</div>';
		
		error_handle($error, '100%');
		
		if(!empty($saved)){
			echo '<div class="alert alert-success mt-4" style="padding:10px;font-size:15px;"><center><img src="'.$theme['images'].'message_success.gif">&nbsp;&nbsp;'.$l['backup_loc_saved'].'</div></center>';
		}
		
		echo'
		<div class="card m-2 p-3">
		<div class="row">
			<div class="col-12 col-md-6 col-xl-6 mb-2">
				<label for="location_name" class="sai_head">'.$l['location_name'].'</label><br/>
				<span class="sai_exp2">'.$l['location_name_exp'].'</span>
				<input type="text" name="location_name" id="location_name" class="form-control" value="'.POSTval('location_name', $edit_location['name']).'" />
			</div>
			<div class="col-12 col-md-6 col-xl-6 mb-2">
				<label for="protocol" class="sai_head">'.$l['protocol'].'</label><br />
				<span class="sai_exp2">'.$l['protocol_exp'].'</span>
				<select name="protocol" class="form-control" id="protocol">'
					.(empty($globals['disable_backup_ftp']) ? '<option value="ftp" '.(isset($_REQUEST['protocol']) && $_REQUEST['protocol'] == 'ftp' ? 'selected="selected"' : ($edit_location['protocol'] == 'ftp' ? 'selected="selected"' : '')).'>'.$l['ftp'].'</option>' : '').
					(empty($globals['disable_backup_softftpes']) ? '<option value="softftpes" '.(isset($_REQUEST['protocol']) && $_REQUEST['protocol'] == 'softftpes' ? 'selected="selected"' : ($edit_location['protocol'] == 'softftpes' ? 'selected="selected"' : '')).'>'.$l['ftps'].'</option>' : '').
					(empty($globals['disable_backup_softsftp']) ? '<option value="softsftp" '.(isset($_REQUEST['protocol']) && $_REQUEST['protocol'] == 'softsftp' ? 'selected="selected"' : ($edit_location['protocol'] == 'softsftp' ? 'selected="selected"' : '')).'>'.$l['sftp'].'</option>' : '').
					(empty($globals['disable_backup_dropbox']) ? '<option value="dropbox" '.(isset($_REQUEST['protocol']) && $_REQUEST['protocol'] == 'dropbox' ? 'selected="selected"' : ($edit_location['protocol'] == 'dropbox' ? 'selected="selected"' : '')).'>'.$l['dropbox'].'</option>' : '').	
					(empty($globals['disable_backup_gdrive']) ? '<option value="gdrive" '.(isset($_REQUEST['protocol']) && $_REQUEST['protocol'] == 'gdrive' ? 'selected="selected"' : ($edit_location['protocol'] == 'gdrive' ? 'selected="selected"' : '')).'>'.$l['gdrive'].'</option>' : '').
					(empty($globals['disable_backup_webdav']) ? '<option value="webdav" '.(isset($_REQUEST['protocol']) && $_REQUEST['protocol'] == 'webdav' ? 'selected="selected"' : ($edit_location['protocol'] == 'webdav' ? 'selected="selected"' : '')).'>'.$l['webdav'].'</option>' : '').
					(empty($globals['disable_backup_onedrive']) ? '<option value="onedrive" '.(isset($_REQUEST['protocol']) && $_REQUEST['protocol'] == 'onedrive' ? 'selected="selected"' : ($edit_location['protocol'] == 'onedrive' ? 'selected="selected"' : '')).'>'.$l['onedrive'].'</option>' : '').
					(empty($globals['disable_backup_aws']) ? '<option value="softaws" '.(isset($_REQUEST['protocol']) && $_REQUEST['protocol'] == 'softaws' ? 'selected="selected"' : ($edit_location['protocol'] == 'softaws' ? 'selected="selected"' : '')).'>'.$l['aws_s3bucket'].'</option>' : '').'
				</select>
			</div>
		</div>
		
		<div class="row" id="dropbox_authorize"><br/>
			<div class="col-12 col-md-6 col-xl-6 mb-2">
				<label for="dropbox_auth" class="sai_head" id="dropbox_auth_head">'.$l['dropbox_authorization'].'</label><br />
				<span class="sai_exp2">'.$l['dropbox_authorization_exp'].maybe_show_docs('https://softaculous.com/docs/Edit_Backup_Location_Dropbox', '&nbsp;&nbsp;'.$l['view_guide']).'</span>
				<br /><a href="https://www.dropbox.com/oauth2/authorize?response_type=code&token_access_type=offline&client_id='.$dropbox->app_key.'" target="_blank"><input class="flat-butt someclass" type="button" name="dropbox_auth" id="dropbox_auth" value="'.$l['dropbox_authorize'].'" title="'.$l['dropbox_auth_tooltip'].'" style="font-size:15px; width:150px;" /></a>
			</div>
			<div class="col-12 col-md-6 col-xl-6 mb-2" id="dropbox_code">
				<label for="access_code" class="sai_head" id="dropbox_code_head">'.$l['dropbox_code'].'</label><br />
				<span class="sai_exp2">'.$l['dropbox_code_exp'].'</span>
				<input type="text" name="access_code" id="access_code" class="form-control" value="'.POSTval('access_code', '').'" />
			</div>
		</div>
		
		<div id="aws_s3bucket">

			<div class="row">
				<div class="col-12 col-md-6 col-xl-6 mb-2">
					<label for="aws_endpoint" class="sai_head" id="aws_endpoint_head">'.$l['aws_endpoint'].'</label><br />
					<span class="sai_exp2">'.$l['aws_endpoint_exp'].'</span>
					<input type="text" name="aws_endpoint" id="aws_endpoint" class="form-control" value="'.POSTval('aws_endpoint', $edit_location['aws_endpoint']).'" />
				</div>
				<div class="col-12 col-md-6 col-xl-6 mb-2">
					<label for="aws_region" class="sai_head" id="aws_region_head">'.$l['aws_region'].'</label><br />
					<span class="sai_exp2">'.$l['aws_region_exp'].'</span>
					<input type="text" name="aws_region" id="aws_region" class="form-control" value="'.POSTval('aws_region', $edit_location['aws_region']).'" />
				</div>
			</div>

			<div class="row">
				<div class="col-12 col-md-6 col-xl-6 mb-2">
					<label for="aws_accessKey" class="sai_head" id="aws_accessKey_head">'.$l['aws_accessKey'].'</label><br />
					<input type="text" name="aws_accessKey" id="aws_accessKey" class="form-control" value="'.POSTval('aws_accessKey', $edit_location['aws_accessKey']).'" />
				</div>
				<div class="col-12 col-md-6 col-xl-6 mb-2">
					<label for="aws_secretKey" class="sai_head" id="aws_secretKey_head">'.$l['aws_secretKey'].'</label><br />
					<div class="row">
						<div class="col-sm-11">
						<input type="password" name="aws_secretKey" id="aws_secretKey" class="form-control" value="'.POSTval('aws_secretKey', $edit_location['aws_secretKey']).'" autocomplete="off" />
						</div>
						<div class="col-sm-1" style="margin-left:-20px;">
						<input id="aws_toggle_passwd" type="checkbox" style="display:none;" onclick="toggle_pass(\'aws_show_hide\', \'aws_secretKey\');" /><label for="aws_toggle_passwd" style="margin-top:6px;"><span id="aws_show_hide">'.$l['show'].'</span></label>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-12 col-md-6 col-xl-6 mb-2">
					<label for="aws_bucketname" class="sai_head" id="aws_bucketname_head">'.$l['aws_bucketname'].'</label><br />
					<span class="sai_exp2">'.$l['aws_bucketname_exp'].'</span>
					<input type="text" name="aws_bucketname" id="aws_bucketname" class="form-control" value="'.POSTval('aws_bucketname', $edit_location['aws_bucketname']).'" />
				</div>
			</div>

		</div>
		
		<div class="row" id="ftp_details">
		
			<div class="col-12 col-md-6 col-xl-6 mb-2">
				<label for="server_host" class="sai_head">'.$l['server_host'].'</label><br/>
				<span class="sai_exp2" id="server_host_exp">'.$l['server_host_exp'].'</span>
				<input type="text" name="server_host" id="server_host" class="form-control" value="'.POSTval('server_host', $edit_location['server_host']).'" />
			</div>
			
			<div class="col-12 col-md-6 col-xl-6 mb-2">
				<label for="port" class="sai_head">'.$l['port'].'</label><br/>
				<span class="sai_exp2" id="port_exp">'.$l['port_exp'].'</span>
				<input type="text" name="port" id="port" class="form-control" value="'.POSTval('port', $edit_location['port']).'" />
			</div>
		</div>

		<div class="row">
			<div class="col-12 col-md-6 col-xl-6 mb-2" id="trauthpass">
				<label for="auth_password" class="sai_head">'.$l['auth_password'].'</label><br/>
				<span class="sai_exp2">'.$l['auth_password_exp'].'</span>
				&nbsp;&nbsp; <input type="radio" name="auth_password" id="auth_password" value="1" onchange="check_auth_password();" '.POSTradio('auth_password', 1, (empty($edit_location['private_key']) ? 1 : 0)).' />&nbsp;'.$l['auth_method_pass'].' &nbsp;&nbsp;
				<input type="radio" name="auth_password" id="auth_password" value="" onchange="check_auth_password();" '.POSTradio('auth_password', '', (empty($edit_location['private_key']) ? null : '')).' />&nbsp;'.$l['auth_method_key'].'<br /><br />
			</div>
		</div>
			
		<div class="row" id="ftp_credentials">
			<div class="col-12 col-md-6 col-xl-6 mb-2">
				<label for="ftp_user" class="sai_head" id="ftp_user_head">'.$l['ftp_user'].'</label><br />
				<span class="sai_exp2" id="ftp_user_exp">'.$l['ftp_user_exp'].'</span>
				<input type="text" name="ftp_user" id="ftp_user" class="form-control" value="'.POSTval('ftp_user', $edit_location['ftp_user']).'" />
			</div>
			
			<div class="col-12 col-md-6 col-xl-6 mb-2" id="ftp_pass">
				<label for="ftp_passwd" class="sai_head" id="ftp_pass_head">'.$l['ftp_pass'].'</label><br />
				<span class="sai_exp2" id="ftp_pass_exp">'.$l['ftp_pass_exp'].'</span>
				<div class="row">
					<div class="col-sm-11">
					<input type="password" name="ftp_pass" id="ftp_passwd" class="form-control" value="'.POSTval('ftp_pass', $edit_location['ftp_pass']).'" autocomplete="off" />
					</div>
					<div class="col-sm-1" style="margin-left:-20px;">
					<input id="toggle_passwd" type="checkbox" style="display:none;" onclick="toggle_pass(\'show_hide\', \'ftp_passwd\');" /><label for="toggle_passwd" style="margin-top:6px;"><span id="show_hide">'.$l['show'].'</span></label>
					</div>
				</div>
			</div>
		</div>
			
		<div class="row">
			<div class="col-12 col-md-6 col-xl-6 mb-2" id="pri">
				<label for="private_key" class="sai_head">'.$l['private_key'].'</label><br/>
				<span class="sai_exp2">'.$l['private_key_exp'].'</span>
				<textarea name="private_key" id="private_key" rows="15" cols="70" class="form-control">'.aPOSTval('private_key', $edit_location['private_key']).'</textarea>
			</div>
			
			<div class="col-12 col-md-6 col-xl-6 mb-2" id="passphrase_div">
				<label for="passphrase" class="sai_head">'.$l['passphrase'].'</label><br/>
				<span class="sai_exp2">'.$l['passphrase_exp'].'</span>
				<input type="text" name="passphrase" id="passphrase" class="form-control" value="'.POSTval('passphrase', $edit_location['passphrase']).'" />
			</div>
		</div>
		
		<div class="row" id="backup_location"><br />
			<div class="col-12 col-md-6 col-xl-6 mb-2">
				<label for="backup_loc" class="sai_head" id="backup_loc_title">'.$l['backup_loc'].'</label><br />
				<span class="sai_exp2" id="backup_loc_exp"></span>
				<input type="text" name="backup_loc" id="backup_loc" class="form-control" value="'.POSTval('backup_loc', $edit_location['backup_loc']).'" />
			</div>
		</div>
		
		<p align="center">
			<br /><br />
			'.csrf_display().'
			<input class="btn sai-button" type="submit" name="editbackuploc" value="'.$l['edit_backup_loc'].'" />
			<br /><br />
			<img id="waiting" src="'.$theme['images'].'progress.gif" style="display:none">
			
			<b><a class="sai_head" href="'.$globals['ind'].'act=settings">'.$l['return_settings'].'</a></b>
		</p>
	
	</div><!--end of card m-3-->
	</form>
	</div>
</div><br /><!--end of bg class-->	

<script src="'.$theme['url'].'/js/spectrum.js" type="text/javascript"></script>
<script type="text/javascript">

	//Added the show_text & hide_text variable for when the header is not loaded (Iframe)
	var show_text = "'.$l['show'].'";
	var hide_text = "'.$l['hide'].'";
	
	$(document).ready(function(){
		check_auth_password();
		checkprotocol();
		$("#protocol").change(function(){
			checkprotocol();
		});
		
		$("#dropbox_auth").click(function(){
			$("#dropbox_code").show();
		});
	});

	function checkprotocol(){
		
		$("#ftp_user_head").html($("#protocol option:selected").text().toUpperCase()+" "+"'.$l['ftp_user'].'");
		$("#ftp_pass_head").html($("#protocol option:selected").text().toUpperCase()+" "+"'.$l['ftp_pass'].'");

		if($("#protocol").val() == "ftp"){
			if($("#port").val() == "" || $("#port").val() == "22" || $("#port").val() == "443"){
				$("#port").val("21");
			}
			
			show_ftp();
			hide_dropbox();
			hide_aws_s3bucket();

			$("#trauthpass").hide();
			hide_sshkey();
			$("#server_host_exp").html("'.$l['server_host_exp'].'");
			$("#port_exp").html("'.$l['port_exp'].'");
			$("#ftp_user_exp").html("'.$l['ftp_user_exp'].'");
			$("#ftp_pass_exp").html("'.$l['ftp_pass_exp'].'");
			$("#backup_loc_exp").html("'.$l['rel_backup_loc_exp'].'");
			$("#backup_loc_title").html("'.$l['backup_loc'].'");
		}
		
		if($("#protocol").val() == "softftpes"){
			if($("#port").val() == "" || $("#port").val() == "22" || $("#port").val() == "443"){
				$("#port").val("21");
			}
			
			show_ftp();
			hide_dropbox();
			hide_aws_s3bucket();

			$("#trauthpass").hide();
			hide_sshkey();
			$("#server_host_exp").html("'.$l['server_host_exp'].'");
			$("#port_exp").html("'.$l['port_exp'].'");
			$("#ftp_user_exp").html("'.$l['ftp_user_exp'].'");
			$("#ftp_pass_exp").html("'.$l['ftp_pass_exp'].'");
			$("#backup_loc_exp").html("'.$l['rel_backup_loc_exp'].'");
			$("#backup_loc_title").html("'.$l['backup_loc'].'");
		}		
		
		if($("#protocol").val() == "softsftp"){
			if($("#port").val() == "" || $("#port").val() == "21" || $("#port").val() == "443"){
				$("#port").val("22");
			}
			
			show_ftp();
			hide_dropbox();
			hide_aws_s3bucket();

			$("#trauthpass").show();
			check_auth_password();
			$("#server_host_exp").html("'.$l['server_host_exp'].'");
			$("#port_exp").html("'.$l['port_exp'].'");
			$("#ftp_user_exp").html("'.$l['ftp_user_exp'].'");
			$("#ftp_pass_exp").html("'.$l['ftp_pass_exp'].'");
			$("#backup_loc_exp").html("'.$l['abs_backup_loc_exp'].'");
			$("#backup_loc_title").html("'.$l['backup_loc'].'");
		}		
		
		if($("#protocol").val() == "dropbox"){		
			$("#dropbox_code").hide();
			show_dropbox();
			hide_ftp();
			hide_aws_s3bucket();

			$("#trauthpass").hide();
			hide_sshkey();
			$("#backup_loc_exp").html("'.$l['dropbox_backup_loc_exp'].'");
			$("#backup_loc_title").html("'.$l['dropbox_backup_loc'].'");
		}
		
		if($("#protocol").val() == "gdrive"){
			hide_ftp();
			hide_dropbox();
			hide_aws_s3bucket();

			$("#trauthpass").hide();
			hide_sshkey();
			$("#backup_loc_exp").html("'.$l['dropbox_backup_loc_exp'].'");
			$("#backup_loc_title").html("'.$l['dropbox_backup_loc'].'");
		}

		if($("#protocol").val() == "onedrive"){
			hide_ftp();
			hide_dropbox();
			hide_aws_s3bucket();
			
			$("#trauthpass").hide();
			hide_sshkey();
			$("#backup_loc_exp").html("'.$l['dropbox_backup_loc_exp'].'");
			$("#backup_loc_title").html("'.$l['dropbox_backup_loc'].'");
		}

		if($("#protocol").val() == "webdav"){
			if($("#port").val() == "" || $("#port").val() == "21"){
				$("#port").val("443");
			}
			
			show_ftp();
			hide_dropbox();
			hide_aws_s3bucket();

			$("#trauthpass").hide();
			hide_sshkey();
			$("#server_host_exp").html("'.$l['webdav_server_host_exp'].'");
			$("#port_exp").html("'.$l['webdav_port_exp'].'");
			$("#ftp_user_exp").html("'.$l['webdav_ftp_user_exp'].'");
			$("#ftp_pass_exp").html("'.$l['webdav_ftp_pass_exp'].'");
			$("#backup_path_exp").html("'.$l['webdav_backup_loc_exp'].'");
			$("#backup_loc_title").html("'.$l['backup_loc'].'");
		}

		if($("#protocol").val() == "softaws"){
			hide_ftp();
			hide_dropbox();
			show_aws_s3bucket();

			$("#trauthpass").hide();
			hide_sshkey();
			$("#backup_path_exp").html("'.$l['aws_backup_loc_exp'].'");
			$("#backup_loc_title").html("'.$l['aws_backup_loc'].'");
		}
	}
	
	function check_auth_password(){
		if($("#auth_password").is(":checked")){
			hide_sshkey();
		}else{
			show_sshkey();
		}
	}
	
	function show_ftp(){
		$("#ftp_details").show();
		$("#ftp_credentials").show();
		$("#host").show();
		$("#server_host").prop("disabled", false);
		$("#port").prop("disabled", false);
		$("#ftp_user").prop("disabled", false);
		$("#ftp_pass").prop("disabled", false);
	}
	
	function hide_ftp(){
		$("#ftp_details").hide();
		$("#ftp_credentials").hide();
		$("#host").hide();
		$("#server_host").prop("disabled", true);
		$("#port").prop("disabled", true);
		$("#ftp_user").prop("disabled", true);
		$("#ftp_pass").prop("disabled", true);
	}
	
	function show_dropbox(){
		$("#dropbox_authorize").show();
		$("#access_code").prop("disabled", false);
	}
	
	function hide_dropbox(){
		$("#dropbox_authorize").hide();
		$("#access_code").prop("disabled", true);
	}

	function show_aws_s3bucket(){
		$("#aws_s3bucket").show();
	}
	
	function hide_aws_s3bucket(){
		$("#aws_s3bucket").hide();
	}
	
	function hide_sshkey(){
		$("#private_key").prop("disabled", true);
		$("#pri").hide();
		$("#passphrase_div").hide();
		$("#ftp_pass").show();
	}

	function show_sshkey(){
		$("#private_key").prop("disabled", false);
		$("#pri").show();
		$("#passphrase_div").show();
		$("#ftp_pass").hide();
	}
	
	function theme_init(){
		$(".someclass").tipTip();
	}

</script>';
	
	softfooter();
}

?>