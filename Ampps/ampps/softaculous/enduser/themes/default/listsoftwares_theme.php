<?php

//////////////////////////////////////////////////////////////
//===========================================================
// listsoftwares_theme.php
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

function listsoftwares_theme(){

	global $theme, $globals, $user, $l, $cat, $list, $scripts , $allcatwise , $softs, $iscripts, $apps, $_scripts;
	
	softheader($l['<title>'].' - '.$l[$cat]);
	
	if(!empty($globals['lictype'])){
	
		echo '
		<style>
			._softable{
			border:5px solid #F0F0F0;
			}	
			
			._deschead a:link, ._deschead a:visited, ._deschead a:active, ._deschead a:hover{
			color: #666666;
			font-size:15px;
			font-weight:bold;
			font-family: Arial, Helvetica, sans-serif;
			text-decoration:none;
			}
			
			._descr{
			font-size:11px;
			padding-left:15px;
			}
			
			._icodesc a:link, ._icodesc a:visited, ._icodesc a:active, ._icodesc a:hover{
			color:#666666;
			font-weight:bold;
			font-size:12px;
			font-family: Arial, Helvetica, sans-serif;
			text-decoration:none;
			}
			
			._ratings{
			font-size:12px;
			font-weight:bolder;
			}
			
			._views{
			font-size:12px;
			font-weight:bolder;
			}
			
			._imghr{
			margin:6px 0px;
			}
			
			._links{
			padding: 5px 0 0 30px;	
			}
		
		</style>'; 
		
		if($globals['mode'] == 'apps'){
			$scripts = $apps;
			echo '<link rel="stylesheet" type="text/css" href="'.$globals['mirror_images'].'webuzo/sprites/80.css" />';	
		}else{
			echo '<link rel="stylesheet" type="text/css" href="'.$globals['mirror_images'].'sprites/80.css" />';
		}
		
		$category = @$allcatwise[$globals['mode']][$cat];
		$ids_ = array_keys($category);
		$ids = array_keys($category);
		
		foreach($ids_ as $v){
			
			$v = (int) trim($v);
			if(!empty($v)){
				$ids[$v] = $v;
			}
		}
		
		if(empty($ids)){
			return false;
		}
		
		$branches = array();
		
		$url = $theme['images'];
	
		foreach ($_scripts as $k => $v) {
			
			if(!in_array($k, $ids)){
				continue;
			}
			
			// If the script has a parent and it is enabled we will display only the parent
			if(!empty($v['parent']) && array_key_exists($v['parent'], $iscripts)){
				continue;
			}
			
			$ratings = array();
			$deduct = 1;
			$r = $v['ratings'];
			
			for($i=1; $i<=5; $i++){		
				if($r >= 1){
					$ratings[$i] = '<i class="fas fa-star" alt="('.number_format($v['ratings'], 2).' out of 5)"></i>';
				}elseif($r > 0){
					$ratings[$i] = '<i class="fas fa-star-half-alt" alt="('.number_format($v['ratings'], 2).' out of 5)"></i>';
				}else{
					$ratings[$i] = '<i class="far fa-star" alt="('.number_format($v['ratings'], 2).' out of 5)"></i>';
				}
				$r = $r - $deduct;
			}	
			
			$demo_scriptname = str_replace(' ', '_', $v['name']);
			
			$logo_url = '';
			
			if($k >= 10000){
				if(file_exists(dirname($theme['path']).'/default/images/topscripts/'.$v['sid'].'__logo.gif')){
					$logo_url = $url.'topscripts/'.$v['sid'].'__logo.gif';
				}
			}else{
				$logo_url = $globals['mirror_images'].($globals['mode'] == 'apps' ? 'webuzo/softimages/'.$k.'__logo.gif' : 'softimages/'.$v['sid'].'__logo.gif');
			}
			
			$script_link = (($globals['mode'] == 'apps') ? app_link($v['aid']) : script_link($v['sid']));
					
			$desc = (webuzo() ? $v['description'] : (!empty($l['description_'.$k]) ? $l['description_'.$k] : $v['description']));
			
			$desc_text = (strlen($desc) > 360 ? substr($desc, 0, 350).' <span><a href="'.$script_link.'">['.$l['more'].']</a></span>' : $desc);
			
			echo'
			<div class="bg">
				
				<div class="row">
					<div class=" col-sm-12 sai_loginhead">
						<a class="title-link" href="'.$script_link.'&tab=install">'.$v['name'].'</a>

						'.($k < 10000 && empty($globals['off_rating_link']) ? '<span class="someclass stars-rating" title="'.$v['ratings'].'">'.implode('', $ratings).'</span>' : '').'
						
						<a href="'.$script_link.'&tab=install" class="ml-2">
							<div class="btn sai-button">'.$l['install_button'].'</div>
						</a>
					</div>
				</div>
				<hr />
				<div class="row">
					<div class="col-xl-2 col-md-3 col-sm-2 col-xs-3 text-left text-sm-center text-md-center">';
					if(!empty($logo_url)){
						echo '<a href="'.$script_link.'&tab=install">
								<img src="'.$logo_url.'" alt="'.$v['softname'].'" class="img-fluid mb-2">
							</a>';
					}
					
					echo '</div>
					
					<div class="col-xl-8 col-md-6 col-sm-8">
						<p class="details"><span class="details-label">'.$l['version'].'</span> : '.$v['version'].(!empty($branches[$k]) ? ', '.implode(', ', $branches[$k]) : '').'</p>
						<p class="details"><span class="details-label">'.(!empty($v['release_date']) ? $l['release_date'].'</span> : '.$v['release_date'] : '').'</p>
						<p class="description">'.$desc_text.'</p>
						
					</div>
					
					<div class="col-xl-2 col-md-3 col-sm-2">
					
						'.(($globals['mode'] != 'apps') ? (empty($globals['off_demo_link']) ? ' 
							<a class="demo-btn mr-2 d-inline-block d-md-block mb-1" href="'.($k >= 10000 ? $v['demo'] : $globals['ind'].'act=demos&soft='.$v['sid']).'" target="_blank">
								<i class="fas fa-play fa-2x"></i>
								<span class="_links">'.$l['demo'].'</span>
							</a><br class="d-none d-md-inline-block"/>
						' : '') : '').'
						
						<a class="support-btn mr-2 d-inline-block d-md-block mb-1" href="'.$v['support'].'">
							<i class="far fa-life-ring fa-2x"></i>
							<span class="_links">'.$l['support'].'</span>
						</a><br class="d-none d-md-inline-block"/>
						
						<a class="download-btn mr-2 d-inline-block d-md-block mb-1" href="'.$script_link.'">
							<i class="fas fa-download fa-2x"></i>
							<span class="_links">'.number_format($v['space']/1024/1024, 2).' MB</span>
						</a>
					</div>
				</div><br class="d-none d-md-inline-block"/>
			</div><!--end of bg-->
			<br />';
		}
	}else{
		echo $l['soft_free_note'];
	}
	
	softfooter();

}

?>