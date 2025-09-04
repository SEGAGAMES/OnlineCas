<?php

//////////////////////////////////////////////////////////////
//===========================================================
// settings_theme.php
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

function licensekey_theme(){

global $theme, $globals, $user, $l, $langs, $skins, $error, $licsubmit;

softheader($l['<title>']);

echo '<form accept-charset="'.$globals['charset'].'" name="licensekey" method="post" action="" class="form-horizontal">

<div class="container-fluid">
	<div class="container">
		<div class="row my-5">
			<div class="col-12 col-lg-10 mx-auto">
				<div class="sai-card p-4">
					<div class="sai_main_head">
						<i class="fas fa-id-badge sai-icon d-inline-block mr-1"></i>
						<h2 class="sai-heading d-inline-block mb-2 position-relative" style="top:-4px;">'.$l['license_key'].'</h2>
					</div>
					<hr class="sai_main_head_hr"/>
					<div class="sai_form">';

					error_handle($error);

					if(!empty($licsubmit)){
						echo '<div class="alert alert-success text-center">
							<i class="fas fa-check sai_icons mr-2"></i>
						 '.$l['license_success'].'</div>';
					}

					echo '
					<div class="row mb-3">
						<div class="col-12 mb-3 col-lg-6">
							<label for="enter_license" class="sai-label d-block">'.$l['enter_license_key'].'</label>
							<span class="sai_exp2 d-block mb-1">'.$l['exp_license_key'].'</span>
							<input type="text" name="enter_license" class="form-control" id="enter_license" size="30" value="'.POSTval('enter_license', '').'" autocomplete=off />
						</div>
						<div class="col-12 mb-3 col-lg-6">
							<label for="enter_email" class="sai-label d-block">'.$l['enter_email'].'</label>
							<span class="sai_exp2 d-block mb-1">'.$l['exp_enter_email'].'</span>
							<input type="text" name="enter_email" class="form-control" id="enter_email" size="30" value="'.POSTval('enter_email', '').'" autocomplete=on />
						</div>
					</div>
					
					<p class="mt-3 text-center">'.csrf_display().'
						<input type="submit" name="submit_license" class="flat-butt" value="'.$l['submit_license'].'"/>
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