<?php

//////////////////////////////////////////////////////////////
//===========================================================
// help_theme.php
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

function help_theme(){

global $user, $globals, $l, $theme, $softpanel, $iscripts, $catwise, $error, $faq_list;

	softheader($l['<title>']);
	
	echo '
	<div class="bg">
	<div class="row sai_main_head mt-4" style="width:100%;" align="center">
		<div class="col-12 text-center">
			<i class="fas fa-question-circle fa-2x mr-2" style="color:#00A0D2;"></i>
			<span class="form-title">'.$l['faq'].'</span>
		</div>
	</div><hr />';

	foreach($faq_list as $fk => $fv){
		echo '
		<div class="row">
			<div class="col-sm-12">
				<div class="px-3">
					<div class="sai_sub_head d-block">'.$fv['question'].'</div>
					<hr class="sai_main_head_hr my-3">
					<div class="sai_ans"><p>'.$fv['answer'].'</p></div>
				</div>
			</div>
		</div>';
	}
	
	echo '
	</div>';

	softfooter();

}

?>