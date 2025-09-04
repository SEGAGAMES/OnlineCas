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

function adduser_theme(){

global $theme, $globals, $user, $l, $langs, $error, $reseller, $iscripts, $plans, $done, $_cpplan, $_users, $allcatwise, $_resellers, $loaded_scripts, $softpanel, $__adduser;

softheader($l['<title>']);

echo '<form accept-charset="'.$globals['charset'].'" name="addplan" method="post" action="">
<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
	
function show(){
	if($_("is_reseller").checked){		
		$_("num_users_row").style.display = "";
	}else{
		$_("num_users_row").style.display = "none";
		$_("num_users").value = 0;
	}
}
addonload("show();");

// ]]></script>';

echo '<link href="https://www.softaculous.net/images/sprites/20.css" rel="stylesheet" type="text/css" />
<div class="container-fluid">
	<div class="container">
		<div class="row my-5">
			<div class="col-12 col-lg-10 mx-auto">
				<div class="sai-card p-4">
					<div class="sai_main_head">
						<i class="fas sai-blogs sai-icon d-inline-block mr-1"></i>
						<h2 class="sai-heading d-inline-block mb-2 position-relative" style="top:-4px;">'.$l['title'].'</h2>
					</div>
					<hr class="sai_main_head_hr"/>
					<div class="sai_form">';

					error_handle($error);

					if(!empty($done)){
						echo '<div class="alert alert-success text-center">
							<i class="fas fa-check sai_icons mr-2"></i>
						 '.$l['done'].'</div>';
					}

					echo '
					<div class="row mb-3">
						<div class="col-12 mb-3 col-lg-6">
							<label for="username" class="sai-label d-block">'.$l['username'].'</label>
							<span class="sai_exp2 d-block mb-1">'.$l['exp_username'].'</span>
							<input type="text" name="username" class="form-control" id="username" size="30" value="'.POSTval('username', '').'" />
						</div>
						<div class="col-12 mb-3 col-lg-6">
							<label for="user_email" class="sai-label d-block">'.$l['user_email'].'</label>
							<span class="sai_exp2 d-block mb-1">'.$l['exp_user_email'].'</span>
							<input type="text" name="user_email" class="form-control" id="user_email" size="30" value="'.POSTval('user_email', '').'" />
						</div>
					</div>';
					
					if(ent()){
						echo '
						<div class="row mb-3">
							<div class="col-12 mb-3 col-lg-6">
								<label for="uid" class="sai-label d-block">'.$l['uid'].'</label>
								<span class="sai_exp2 d-block mb-1">'.$l['exp_uid'].'</span>
								<input type="text" name="uid" class="form-control" id="uid" size="30" value="'.POSTval('uid', '').'" />
							</div>
							<div class="col-12 mb-3 col-lg-6">
								<label for="gid" class="sai-label d-block">'.$l['gid'].'</label>
								<span class="sai_exp2 d-block mb-1">'.$l['exp_gid'].'</span>
								<input type="text" name="gid" class="form-control" id="gid" size="30" value="'.POSTval('gid', '').'" />
							</div>
						</div>';
					}
					
					if(!defined('SOFTRESELLER')){
						echo '
						<div class="row mb-3">
							<div class="col-12 mb-3 col-lg-6">
								<input type="checkbox" name="is_reseller" id="is_reseller" '.POSTchecked('is_reseller', true).' onclick="show(this);">
								<label for="is_reseller" class="sai-label">'.$l['is_reseller'].'</label>
								<span class="sai_exp2 d-block mb-1">'.$l['exp_is_reseller'].'</span>
							</div>
							<div class="col-12 mb-3 col-lg-6" id="num_users_row" style="display:none;">
								<label for="num_users" class="sai-label d-block">'.$l['number_of_users'].'</label>
								<span class="sai_exp2 d-block mb-1">'.$l['exp_number_of_users'].'</span>
								<input type="text" name="num_users" class="form-control" id="num_users" size="30" value="'.POSTval('num_users', '').'" />
							</div>
						</div>';
					}
					
					echo '
					<p class="mt-3 text-center">'.csrf_display().'
						<input type="submit" name="saveuser" class="flat-butt" value="'.$l['saveuser'].'"/>
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