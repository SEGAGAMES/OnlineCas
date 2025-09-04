<?php

//////////////////////////////////////////////////////////////
//===========================================================
// ratings_theme.php
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

function ratings_theme(){

global $user, $globals, $l, $theme, $softpanel, $iscripts, $catwise, $error, $scripts;
global $soft, $software;

	softheader($l['<title>']);
	
	error_handle($error, '100%');
	
	echo '<link href="'.$globals['mirror_images'].'sprites/80.css" rel="stylesheet" type="text/css" />
	<div class="sai_main_head">
		<div class="col-12">
			<div class="pl-3">
				<div class="iconbg d-inline-block mr-2">
					<i class="fas fa-star"></i>
				</div>
				<span class="page-title">'.$l['script_ratings'].'</span>
				<div class="page-sub-text mt-3">
					<p>'.$l['click_logo'].'</p>
				</div>
			</div>
		</div>
	</div>';
	
	foreach($catwise as $cat => $softs){
		
		if(empty($softs)) continue;
		
		$catimg = (!empty($GLOBALS['catimgs']['php_'.$cat]) ?  $GLOBALS['catimgs']['php_'.$cat] : $theme['images'].'cats/php_'.$cat.'.png');
		
		echo '<div class="bg mt-2">
			<div class="sai_heading_full">
				<img src="'.$catimg.'" alt="" class="title-img"/>
				<span class="script-title">'.$l['cat_php_'.$cat].'</span>
			</div><hr />
			<div class="row" style="width:100%;">';

		foreach($softs as $sid => $softw){
					
			if(empty($softw['ins'])) continue;
			if($sid >= 10000) continue;
			if(!empty($scripts[$sid]['parent']) && array_key_exists($scripts[$sid]['parent'], $iscripts)) continue;
			
			echo '<div class="col-md-2 col-xs-6" >
				<a href="'.$globals['ind'].'act=software&soft='.$sid.'&tab=ratings" target="_blank" title="'.$softw['desc'].'" width="80" alt="" class="someclass" style="text-decoration:none;margin-top:5px;">
					<div class="sai_blog_script">
						<div class="sai_demo_script_logo">
							<div class="sp80_'.$softw['softname'].'"></div>
						</div>
						<div class="sai_script_name">'.$softw['name'].'</div>
					</div>
				</a><br />
			</div>';
		}
		echo '
		</div>
		</div><br />';
	}
	
softfooter();

}

?>