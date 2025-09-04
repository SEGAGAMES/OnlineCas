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

function proxy_theme(){

global $theme, $globals, $user, $l, $langs, $skins, $error, $saved;

softheader($l['<title>']);
		
echo '<form accept-charset="'.$globals['charset'].'" name="editeproxysettings" method="post" action="">
<div class="container-fluid">
	<div class="container">
		<div class="row my-5">
			<div class="col-12 col-lg-10 mx-auto">
				<div class="sai-card p-4">
					<div class="sai_main_head">
						<h2 class="sai-heading d-inline-block mb-2 position-relative" style="top:-4px;">'.$l['proxyhead'].'</h2>
					</div>
					<hr class="sai_main_head_hr"/>
					<div class="sai_form">';

					error_handle($error);

					if(!empty($saved)){
						echo '<div class="alert alert-success text-center">
							<i class="fas fa-check sai_icons mr-2"></i>
						 '.$l['settings_saved'].'</div>';
					}

					echo '
					<div class="row mb-3">
						<div class="col-12 mb-3 col-lg-6">
							<input type="checkbox" name="proxy_check" id="proxy_check" size="30" '.POSTchecked('proxy_check', $globals['proxy_check']).' />
							<label for="proxy_check" class="sai-label">'.$l['proxy_check'].'</label>
						</div>
					</div>
					
					<div class="row mb-3">
						<div class="col-12 mb-3 col-lg-6">
							<label for="proxy_ip" class="sai-label d-block">'.$l['proxy_ip'].'</label>
							<input type="text" name="proxy_ip" class="form-control" id="proxy_ip" size="30" value="'.aPOSTval('proxy_ip', $globals['proxy_ip']).'" />
						</div>
						<div class="col-12 mb-3 col-lg-6">
							<label for="proxy_port" class="sai-label d-block">'.$l['proxy_port'].'</label>
							<input type="text" name="proxy_port" class="form-control" id="proxy_port" size="30" value="'.aPOSTval('proxy_port', $globals['proxy_port']).'" />
						</div>
					</div>
					
					<div class="row mb-3">
						<div class="col-12 mb-3 col-lg-6">
							<label for="proxy_user" class="sai-label d-block">'.$l['proxy_user'].'</label>
							<input type="text" name="proxy_user" class="form-control" id="proxy_user" size="30" value="'.aPOSTval('proxy_user', $globals['proxy_user']).'" />
						</div>
						<div class="col-12 mb-3 col-lg-6">
							<label for="proxy_pass" class="sai-label d-block">'.$l['proxy_pass'].'</label>
							<input type="password" name="proxy_pass" class="form-control" id="proxy_pass" size="30" value="'.aPOSTval('proxy_pass', $globals['proxy_pass']).'" />
						</div>
					</div>
					
					<p class="mt-3 text-center">'.csrf_display().'
						<input type="submit" name="editproxysettings" class="flat-butt" value="'.$l['edit_settings'].'"/>
					</p>
					<font class="bboxtxt">'.$l['tcp_note'].'</font>
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