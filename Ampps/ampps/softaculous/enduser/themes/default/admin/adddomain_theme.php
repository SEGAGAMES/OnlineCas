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

function adddomain_theme(){

global $theme, $globals, $user, $l, $langs, $error, $reseller, $iscripts, $plans, $done, $_cpplan, $_users, $allcatwise, $_resellers, $loaded_scripts, $softpanel, $__adduser;

softheader($l['<title>']);

echo '<form accept-charset="'.$globals['charset'].'" name="adddomain" method="post" action="">

<div class="container-fluid">
	<div class="container">
		<div class="row my-5">
			<div class="col-12 col-lg-10 mx-auto">
				<div class="sai-card p-4">
					<div class="sai_main_head">
						<i class="fas sai-www sai-icon d-inline-block mr-1"></i>
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
							<label for="domain" class="sai-label d-block">'.$l['domain'].'</label>
							<span class="sai_exp2 d-block mb-1">'.$l['exp_domain'].'</span>
							<input type="text" name="domain" class="form-control" id="domain" size="30" value="'.POSTval('domain', '').'" />
						</div>
					</div>
					
					<div class="row mb-3">
						<div class="col-12 mb-3 col-lg-6">
							<label for="path" class="sai-label d-block">'.$l['path'].'</label>
							<span class="sai_exp2 d-block mb-1">'.$l['exp_path'].'</span>
							<input type="text" name="path" class="form-control" id="path" size="30" value="'.POSTval('path', '').'" />
						</div>
						<div class="col-12 mb-3 col-lg-6">
							<label for="backup_dir" class="sai-label d-block">'.$l['backup_dir'].'</label>
							<span class="sai_exp2 d-block mb-1">'.$l['exp_backup_dir'].'</span>
							<input type="text" name="backup_dir" class="form-control" id="backup_dir" size="30" value="'.POSTval('backup_dir', '').'" />
						</div>
					</div>
					
					<div class="row mb-3">
						<div class="col-12 mb-3 col-lg-6">
							<label for="replace_path" class="sai-label d-block">'.$l['replace_path'].'</label>
							<span class="sai_exp2 d-block mb-1">'.$l['exp_replace_path'].'</span>
							<input type="text" name="replace_path" class="form-control" id="replace_path" size="30" value="'.POSTval('replace_path', '').'" />
						</div>
						<div class="col-12 mb-3 col-lg-6">
							<label for="data_dir" class="sai-label d-block">'.$l['data_dir'].'</label>
							<span class="sai_exp2 d-block mb-1">'.$l['exp_data_dir'].'</span>
							<input type="text" name="data_dir" class="form-control" id="data_dir" size="30" value="'.POSTval('data_dir', '').'" />
						</div>
					</div>
					
					<p class="mt-3 text-center">'.csrf_display().'
						<input type="submit" name="savedomain" class="flat-butt" value="'.$l['savedomain'].'"/>
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