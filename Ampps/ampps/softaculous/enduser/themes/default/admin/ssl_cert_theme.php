<?php

//////////////////////////////////////////////////////////////
//===========================================================
// update_ssl_cert_theme.php
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

function ssl_cert_theme(){

global $globals, $l, $theme, $langs, $error, $updated;

softheader($l['<title>']);

echo '<form accept-charset="'.$globals['charset'].'" name="updatesslcert" method="post" action="">

<div class="container-fluid">
	<div class="container">
		<div class="row my-5">
			<div class="col-12 col-lg-10 mx-auto">
				<div class="sai-card p-4">
					<div class="sai_main_head">
						<i class="fas fa-lock sai-icon d-inline-block mr-1"></i>
						<h2 class="sai-heading d-inline-block mb-2 position-relative" style="top:-4px;">'.$l['update_ssl_cert'].'</h2>
					</div>
					<hr class="sai_main_head_hr"/>
					<div class="sai_form">';

					error_handle($error);

					if(!empty($updated)){
						echo '<div class="alert alert-success text-center">
							<i class="fas fa-check sai_icons mr-2"></i>
						 '.$l['save_key'].'</div>';
					}

					echo '
					<div class="row mb-3">
						<div class="col-12 mb-3 col-lg-12">
							<label for="kpaste" class="sai-label d-block">'.$l['paste_key'].'</label>
							<textarea name="kpaste" id="kpaste"  rows="15" cols="70" class="form-control" wrap="off">'.aPOSTval('kpaste').'</textarea>		
						</div>
					</div>
					
					<div class="row mb-3">
						<div class="col-12 mb-3 col-lg-12">
							<label for="cpaste" class="sai-label d-block">'.$l['paste_crt'].'</label>
							<textarea name="cpaste" id="cpaste"  rows="15" cols="70" class="form-control" wrap="off">'.aPOSTval('cpaste').'</textarea>		
						</div>
					</div>
					
					<p class="mt-3 text-center">'.csrf_display().'
						<input type="hidden" name="update_ssl" value="1" />
						<input type="submit" name="update_ssl" id="submitkey" class="flat-butt" value="'.$l['update_button'].'"/>
						&nbsp;<img id="instcert" src="'.$theme['images'].'progress.gif" style="display:none">
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