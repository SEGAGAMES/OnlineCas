<?php

//////////////////////////////////////////////////////////////
//===========================================================
// updates_theme.php
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

function updates_theme(){

global $theme, $globals, $user, $l, $error, $updated, $info, $report;

softheader($l['<title>']);

echo '<div class="container-fluid">
	<div class="row my-5">
		<div class="col-12 col-lg-10 mx-auto">
			<div class="sai-card p-3">
				<div class="sai_main_head">
					<h2 class="sai-heading mb-2">'.$l['update_softaculous'].'</h2>
					<hr class = "sai_main_head_hr"/>
				</div>
				<div class="sai_form">';
						error_handle($error);
						if(!empty($updated)){
							echo '<div class="alert alert-success text-center"><i class="fas fa-check sai_icons mr-2"></i>
							'.$l['updated_successfully'].'</div>';
						}

						if(!empty($report)){
							echo'<label>'.$l['update_logs'].': </label>
							<span>'.implode('<br />', $report['log']).'</span>
							<img src="'.$theme['images'].'admin/'.(empty($report['status']) ? 'softerror.gif' : 'softok.gif').'" />';
						}

						$curr_version = (!empty($updated) ? $report['version'] : asperapp($globals['version'], @$globals['webuzo_version'], @$globals['ampps_version']));
						$latest_version = (empty($info['version']) ? $l['not_connect_soft'] : $info['version']);
					echo '<form accept-charset="'.$globals['charset'].'" name="updatesoftaculous" method="post" action="">
							
						<label class="sai-label">'.$l['cur_ver'].': </label> <span class="sai-label">'.$curr_version.'</span><br/>
						<label class="sai-label">'.$l['latest_ver'].': </label> '.($curr_version != $latest_version ? '<span class="sai-label" style="color:#FF0033;">' : '<span class="sai-label">').$latest_version.'</span>
						<hr />
						<div>'.$info['message'].'</div>

						'.($curr_version != $latest_version ? '<p align="center"><input type="submit" name="update" value="'.$l['updatesoftaculous'].'" '.(empty($info['link']) ? 'disabled="disabled"' : '').' class="flat-butt" /></p>' : '').'
						'.csrf_display().'
					</form>';
				echo'</div>
			</div>
		</div>
	</div>
</div>';

softfooter();

}

?>