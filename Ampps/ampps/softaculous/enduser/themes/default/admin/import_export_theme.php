<?php

//////////////////////////////////////////////////////////////
//===========================================================
// import_theme.php
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

function import_export_theme(){

global $theme, $globals, $user, $l, $error, $updated, $info, $report, $allusers, $imported;

softheader($l['<title>']);

echo '<div class="container-fluid">
	<div class="container my-4">
		<div class="sai-page-title text-center">
			<h2>'.$l['import_export'].'</h2>
		</div>
	</div>		
</div>';

error_handle($error);

if(!empty($imported)){
	echo '<div class="container-fluid width80">
			<div class="alert alert-success"><i class="fas fa-check sai_icons mr-2"></i>
			'.$l['settings_imported'].'</div>
		</div>';
}

echo '<form accept-charset="'.$globals['charset'].'" name="importexport" method="post" action="" enctype="multipart/form-data" class="form-horizontal">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 col-lg-6">
				<div class="sai-card p-3 mb-3">
					<div class="sai_main_head">
						<h2 class="sai-heading mb-2">'.$l['import_setting'].'</h2>
						<hr class = "sai_main_head_hr"/>
					</div>
					<div class="form-group">
						<p class="sai_exp2">'.$l['import_setting_exp'].'</p>
						<input type="file" name="import_file" class="d-block mb-2"/>
						<input type="submit" name="import_setting" value="'.$l['import_setting'].'" class="flat-butt mt-2"/>
					</div>
				</div>			
			</div>
			<div class="col-12 col-lg-6">
				<div class="sai-card p-3 mb-3">
					<div class="sai_main_head">
						<h2 class="sai-heading mb-2">'.$l['export_setting'].'</h2>
						<hr class = "sai_main_head_hr"/>
					</div>
					<div class="form-group">
						<span class="sai_exp2">'.$l['export_setting_exp'].'</span>
						<button class="flat-butt d-block my-3"><a href="'.$globals['ind'].'act=import_export&download=softaculous_settings.zip" class="text-decoration-none text-white">'.$l['export_setting'].'</a></button>
					</div>
					<br /><br />
				</div>
			</div>
		</div>
	</div>
</div>
'.csrf_display().'
</form>';

softfooter();

}

?>