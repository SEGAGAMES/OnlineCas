<?php

//////////////////////////////////////////////////////////////
//===========================================================
// root_pass.php
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

function root_pass_theme(){
	
global $theme, $globals, $kernel, $user, $l, $error, $done, $onboot, $user_name, $iapps;

softheader($l['<title>']);

echo '<form accept-charset="'.$globals['charset'].'" action="" method="post" name="changepass" id="editform" class="form-horizontal">

<div class="container-fluid">
	<div class="container">
		<div class="row my-5">
			<div class="col-12 col-lg-10 mx-auto">
				<div class="sai-card p-4">
					<div class="sai_main_head">
						<i class="fas fa-key sai-icon d-inline-block mr-1"></i>
						<h2 class="sai-heading d-inline-block mb-2 position-relative" style="top:-4px;">'.$l['change_note'].'</h2>
					</div>
					<hr class="sai_main_head_hr"/>
					<div class="sai_form">';

					error_handle($error);

					if(!empty($done)){
						echo '<div class="alert alert-success text-center">
							<i class="fas fa-check sai_icons mr-2"></i>
						 '.$l['change_final'].'</div>';
					}

					echo '
					
					<div class="row mb-3">
						<div class="col-12 mb-3 col-lg-6">
							<label for="newpass" class="sai-label d-block">'.$l['new_pass'].'</label>
							<input type="password" name="newpass" class="form-control" id="newpass" size="30" value="" />
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-12 mb-3 col-lg-6">
							<label for="conf" class="sai-label d-block">'.$l['retype_pass'].'</label>
							<input type="password" name="conf" class="form-control" id="conf" size="30" value="" />
						</div>
					</div>
					
					<p class="mt-3">'.csrf_display().'
						<input type="hidden" name="changepass" value="1" />
						<input type="submit" name="changepass" name="submitpass" class="flat-butt" value="'.$l['submit_button'].'"/>
						&nbsp;<img id="createpass" src="'.$theme['images'].'progress.gif" style="display:none">
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