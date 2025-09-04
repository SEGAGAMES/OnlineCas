<?php

//////////////////////////////////////////////////////////////
//===========================================================
// email_theme.php
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

function email_theme(){

global $theme, $globals, $user, $l, $langs, $skins, $error, $saved;

softheader($l['<title>']);

error_handle($error);

echo '<form accept-charset="'.$globals['charset'].'" name="editemailsettings" method="post" action="" class="form-horizontal">
<div class="container-fluid">
	<div class="container">
		<div class="row my-5">
			<div class="col-12 col-lg-10 mx-auto">
				<div class="sai-card p-4">
					<div class="sai_main_head">
						<i class="far fa-envelope sai-icon d-inline-block mr-1"></i>
						<h2 class="sai-heading d-inline-block mb-2 position-relative" style="top:-4px;">'.$l['emailhead'].'</h2>
					</div>
					<hr class="sai_main_head_hr"/>
					<div class="sai_form">';		
						if(!empty($saved)){
							echo '<div class="alert alert-success text-center"><a href="#close" class="close" data-dismiss="alert">&times;</a>
							<i class="fas fa-check sai_icons mr-2"></i>
			  				'.$l['settings_saved'].'</div>';
						}
						
						if(!empty($globals['enc_mail_pass']) && !empty($globals['mail_pass'])){
							$globals['mail_pass'] = smart_pass_decrypt($globals['mail_pass'], $globals['enc_mail_pass']);
						}
					echo '<div class="row mb-3">
						<div class="col-12 mb-3 col-lg-6">
							<label for="mail" class="sai-label d-block">'.$l['mailmethod'].'</label>
							<span class="sai_exp2 d-block mb-1">'.$l['mailmethod_exp'].'</span>
							<select name="mail" id="mail" class="form-control">
								<option value="1" '.(isset($_POST['mail']) && $_POST['mail'] == '1' ? 'selected="selected"' : ($globals['mail'] == 1 ? 'selected="selected"' : '')).'>PHP Mail</option>
								<option value="0" '.(isset($_POST['mail']) && $_POST['mail'] == '0' ? 'selected="selected"' : ($globals['mail'] == 0 ? 'selected="selected"' : '')).'>SMTP</option>
							</select>
						</div>
						<div class="col-12 mb-3 col-lg-6">
							<label for="mail_authtype" class="sai-label d-block">'.$l['mailauthtype'].'</label>
							<span class="sai_exp2 d-block mb-1">'.$l['mailauthtype_exp'].'</span>
							<select name="mail_authtype" id="mail_authtype" class="form-control">
								<option value="0" '.(isset($_POST['mail_authtype']) && $_POST['mail_authtype'] == '0' ? 'selected="selected"' : ($globals['mail_authtype'] == 0 ? 'selected="selected"' : '')).'>Default</option>
								<option value="CRAM-MD5" '.(isset($_POST['mail_authtype']) && $_POST['mail_authtype'] == 'CRAM-MD5' ? 'selected="selected"' : ($globals['mail_authtype'] == 'CRAM-MD5' ? 'selected="selected"' : '')).'>CRAM-MD5</option>
								<option value="noauth" '.(isset($_POST['mail_authtype']) && $_POST['mail_authtype'] == 'noauth' ? 'selected="selected"' : ($globals['mail_authtype'] == 'noauth' ? 'selected="selected"' : '')).'>No Authentication</option>
							</select>
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-12 mb-3 col-lg-6">
							<label for="mail_server" class="sai-label d-block">'.$l['smtp_server'].'</label>
							<input type="text" name="mail_server" class="form-control" id="mail_server" size="30" value="'.aPOSTval('mail_server', $globals['mail_server']).'" />
						</div>
						<div class="col-12 mb-3 col-lg-6">
							<label for="mail_port" class="sai-label d-block">'.$l['smtp_port'].'</label>
							<input type="text" name="mail_port" class="form-control" id="mail_port" size="30" value="'.aPOSTval('mail_port', $globals['mail_port']).'" />
						</div>
					</div>
					<div class="row">
						<div class="col-12 mb-3 col-lg-6">
							<label for="mail_user" class="sai-label d-block">'.$l['smtp_user'].'</label>
							<input type="text" name="mail_user" class="form-control" id="mail_user" size="30" value="'.aPOSTval('mail_user', $globals['mail_user']).'" />
						</div>
						<div class="col-12 mb-3 col-lg-6">
							<label for="mail_pass" class="sai-label d-block">'.$l['smtp_pass'].'</label>
							<div class="row">
								<div class="col-sm-11">
									<input type="password" name="mail_pass" class="form-control" id="mail_pass" size="30" value="'.aPOSTval('mail_pass', $globals['mail_pass']).'" /></div>
								<div class="col-sm-1" style="margin-left:-20px;">
									<input id="toggle_pass_mail_pass" type="checkbox" style="display:none;" onclick="toggle_pass(\'show_hide_mail_pass\', \'mail_pass\');"/>
									<label for="toggle_pass_mail_pass" style="margin-top:8px;cursor:pointer;">
										<span id="show_hide_mail_pass">'.$l['show'].'</span>
									</label>
								</div>
							</div>
						</div>
					</div>
					<div class="row my-2">
						<div class="col-12 mb-3 col-lg-6">
							<input type="checkbox" name="mail_send" id="mail_send" size="30" '.POSTchecked('mail_send').' />
							<label for="mail_send" class="sai-label">'.$l['mail_send'].'</label>
						</div>
						<div class="col-12 mb-3 col-lg-6">
							<input type="checkbox" name="enc_mail_pass" id="enc_mail_pass" '.POSTchecked('enc_mail_pass', @$globals['enc_mail_pass']).' />
							<label for="enc_mail_pass" class="sai-label">'.$l['enc_mail_pass'].'</label>
						</div>
					</div>
					
					<p class="mt-3 text-center">'.csrf_display().'
						<input type="submit" name="editemailsettings" class="flat-butt" value="'.$l['edit_settings'].'"/>
					</p>
					</div>
				</div>				
			</div>
		</div>		
	</div>
</div>
</form>';

softfooter();

}

?>