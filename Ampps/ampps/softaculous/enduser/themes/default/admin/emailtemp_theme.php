<?php

//////////////////////////////////////////////////////////////
//===========================================================
// emailtemp_theme.php
//===========================================================
// SOFTACULOUS VIRTUALIZOR
// Version : 1.0
// Inspired by the DESIRE to be the BEST OF ALL
// ----------------------------------------------------------
// Started by: Alons
// Date:       8th Mar 2010
// Time:       23:00 hrs
// Site:       http://www.virtualizor.com/ (SOFTACULOUS VIRTUALIZOR)
// ----------------------------------------------------------
// Please Read the Terms of use at http://www.virtualizor.com
// ----------------------------------------------------------
//===========================================================
// (c)Softaculous Ltd.
//===========================================================
//////////////////////////////////////////////////////////////

if(!defined('SOFTACULOUS')){

	die('Hacking Attempt');

}

function emailtemp_theme(){

global $theme, $globals, $kernel, $user, $l, $error, $emailtemps, $done, $notice;

softheader($l['<title>']);

echo '<div class="container-fluid">
	<div class="container my-4">
		<div class="row">
			<div class="col-12 col-lg-8 mx-auto">
				<div class="sai-card p-4">
					<div class="sai_main_head">
						<i class="far fa-envelope sai-icon d-inline-block mr-1"></i>
						<h2 class="sai-heading d-inline-block mb-2 position-relative" style="top:-4px;">'.$l['emailtemp'].'</h2>
					</div>
					<hr class="sai_main_head_hr"/>';
					if(!empty($notice)){
						echo '<div class="row my-2 text-center">
							<div class="col-12 col-lg-10 alert alert-warning p-3 mx-auto">
								<i class="fas fa-exclamation-triangle fa-2x mr-2"></i>'.$l['action_not_applicable'].'
							</div>
						</div>';
					}else{
						echo '<div class="sai_form">';
						
						error_handle($error);
						
						echo '<div class="sai-heading-block tables-cols" style="line-height:1;">
							<label class="d-inline-block">'.$l['tempname'].'</label>
							<label class="d-inline-block pull-right">'.$l['options'].'</label>
						</div>';
					
						$i=1;
					
						foreach($emailtemps as $k=>$v){
						echo '<div class="sai-email-options">
							<label class="sai_bboxtxt">'.$l['temp_'.$k].'</label>
							<a href="'.$globals['ind'].'act=editemailtemp&temp='.$k.'" class="sai-edit-icon pull-right">
								<i class="fas fa-pencil-alt px-1 sai_icons" style="color:#FF5D00;" title="Edit"></i>
							</a>
						</div>';
						$i++;
					}
				echo '</div>
				</div>
			</div>
		</div>		
	</div>';
}

softfooter();

}

?>