<?php

//////////////////////////////////////////////////////////////
//===========================================================
// userindex_theme.php
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

function userindex_theme(){

global $theme, $globals, $softpanel, $user, $l, $updates_available, $iscripts, $scripts ,$info, $cscripts, $usage;

$__tmp = explode(':', (!empty($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'localhost'));
$globals['HTTP_HOST'] = $__tmp[0];

softheader($l['<title>'], 'js');

/*For native UI support*/
	if(!empty($softpanel->pheader)){
		if(is_cp_theme('paper_lantern')){
			echo '
			<style>
				.row_usi {
				padding-left: 45px;
				padding-right: 0px;
				}
				
				.row_usi_warn {
				padding-left: 110px;
				padding-right: 30px;
				}
				
				.sai_inputs_cls input{
				width:280px;
				}
				
				.sai_suggestions_cls{
				width:280px;
				}
				
				.row_usi_cls {
				padding-left: 50px;
				}
				
				@media screen and (min-width: 980px) and (max-width: 1279px){
					.row_usi{
					padding-left: 20px;
					padding-right: 0;
					}
					
					.row_usi_warn{
					padding-left: 50px;
					padding-right: 0;
					}
				}
				
				@media screen and (min-width: 800px) and (max-width: 979px){
					.row_usi{
					padding: 0 5px;
					}
					
					.row_usi_warn{
					padding-left: 30px;
					padding-right: 5px;
					}
					
					.sai_inputs_cls input{
					width:250px;
					}
					
					.sai_suggestions_cls{
					width:250px;
					}
				}
				
				@media screen and (min-width: 768px) and (max-width: 799px){
					.row_usi{
					padding: 0 100px;
					}
					
					.row_usi_warn{
					padding-left: 130px;
					padding-right: 120px;
					}
					
					.sai_inputs_cls{
					padding-left:70px;	
					}
					
					.sai_inputs_cls input{
					width:300px;
					}
					
					.sai_suggestions_cls{
					width:300px;
					}
					
					.row_usi_cls {
					padding-left: 180px;
					}
				}
				
				@media screen and (min-width: 360px) and (max-width: 767px){
					.row_usi{
					padding: 0 10px;
					}
					
					.row_usi_warn{
					padding-left: 35px;
					padding-right: 65px;
					}
					
					.sai_inputs_cls input{
					width:130px;
					}
					
					.sai_suggestions_cls{
					width:130px;
					}
					
					.row_usi_cls {
					padding-left: 0;
					}
					
					.sai_classes_boxgrid{
					width:250px;
					}
					
					.sai_classes_boxgrid2{
					width:250px;
					}
				}
				
				@media screen and (min-width: 320px) and (max-width: 359px){
					.row_usi{
					padding: 0 10px;
					}
					
					.row_usi_warn{
					padding-left: 35px;
					padding-right: 30px;
					}
					
					.sai_inputs_cls input{
					width:130px;
					}
					
					.sai_suggestions_cls{
					width:130px;
					}
					
					.row_usi_cls {
					padding-left: 0;
					}
					
					.sai_classes_boxgrid{
					width:250px;
					}
					
					.sai_classes_boxgrid2{
					width:250px;
					}
				}
			</style>';
		}else{
			echo '
			<style>
				.row_usi {
				padding: 0;
				}
				
				.row_usi_warn {
				padding-left: 45px;
				padding-right: 40px;
				}
				
				.sai_inputs_cls input{
				width:190px;
				}
				
				.sai_suggestions_cls{
				width:190px;
				}
				
				.row_usi_cls {
				padding-left: 80px;
				}
				
				@media screen and (min-width: 1280px) and (max-width: 1300px){					
					.row_usi_warn{
					padding-left: 50px;
					padding-right: 40px;
					}
				}
				
				@media screen and (min-width: 980px) and (max-width: 1279px){
					.row_usi{
					padding: 0 40px;
					}
					
					.row_usi_warn{
					padding-left: 55px;
					padding-right: 40px;
					}
				}
				
				@media screen and (min-width: 800px) and (max-width: 979px){					
					.row_usi {
					padding: 0 20px;
					}
					
					.row_usi_warn{
					padding-left: 40px;
					padding-right: 40px;
					}
				}
				
				@media screen and (min-width: 768px) and (max-width: 799px){
					.row_usi {
					padding: 0 120px;
					}
					
					.row_usi_warn{
					padding-left: 130px;
					padding-right: 135px;
					}
					
					.sai_inputs_cls{
					padding-left:70px;	
					}
					
					.sai_inputs_cls input{
					width:300px;
					}
					
					.sai_suggestions_cls{
					width:300px;
					}
					
					.row_usi_cls {
					padding-left: 180px;
					}
				}
			</style>';
		}
	}
	
	if($globals['softpanel'] == 'plesk' && $globals['panel_hf'] == 1){
		echo '<style>';
		// If not admin
		if($GLOBALS["usertype"] != 1){
			echo '
			.row_usi {
			padding-left: 45px;
			padding-right: 0px;
			}
			
			.row_usi_warn {
			padding-left: 70px;
			padding-right: 20px;
			}
			
			@media screen and (min-width: 980px) and (max-width: 1279px){
				.row_usi{
				padding-left: 20px;
				padding-right: 0;
				}
				
				.row_usi_warn{
				padding-left: 50px;
				padding-right: 0;
				}
			}
			
			@media screen and (min-width: 768px) and (max-width: 799px){
				.row_usi{
				padding: 0 100px;
				}
				
				.row_usi_warn{
				padding-left: 130px;
				padding-right: 120px;
				}
			}
			';
		}else{
			echo '
			.row_usi {
			padding-left: 0;
			padding-right: 0;
			}
			
			.row_usi_warn {
			padding-left: 70px;
			padding-right: 20px;
			}
			
			@media screen and (min-width: 980px) and (max-width: 1279px){
				.row_usi{
				padding-left: 20px;
				padding-right: 0;
				}
				
				.row_usi_warn{
				padding-left: 50px;
				padding-right: 0;
				}
			}
			
			@media screen and (min-width: 768px) and (max-width: 799px){
				.row_usi{
				padding: 0 30px;
				}
				
				.row_usi_warn{
				padding-left: 130px;
				padding-right: 120px;
				}
			}
			';
		}
		echo '			
			@media screen and (min-width: 800px) and (max-width: 979px){
				.row_usi{
				padding-left: 60px;
				padding-right: 0px;
				}
				
				.row_usi_warn{
				padding-left: 30px;
				padding-right: 5px;
				}
			}
			
			@media screen and (min-width: 360px) and (max-width: 767px){
				.row_usi{
				padding: 0 200px;
				}
				
				.row_usi_warn{
				padding-left: 35px;
				padding-right: 65px;
				}
				
				.sai_classes_boxgrid{
				width:250px;
				}
				
				.sai_classes_boxgrid2{
				width:250px;
				}
			}
			
			@media screen and (min-width: 320px) and (max-width: 359px){
				.row_usi{
				padding: 0 10px;
				}
				
				.row_usi_warn{
				padding-left: 35px;
				padding-right: 30px;
				}
				
				.sai_classes_boxgrid{
				width:250px;
				}
				
				.sai_classes_boxgrid2{
				width:250px;
				}
			}
		</style>';
	}

echo '<script>
$(document).ready(function(){
	var this_theme = "'.$theme['this_theme'].'";
	
	if(this_theme == "modern"){
			$("body").css("background-color", "#F8F8F8");
	}
		
	$(".sai_boxgrid").hover(function(){
		$(this).stop().animate({top:"-200px"},{queue:false,duration:200});
		
		}, function() {
			$(this).stop().animate({top:"0px"},{queue:true,duration:200});
	});
	
	$(".about").click(function(){
		$(".right_panel_two").fadeOut(1); 
		$(".right_panel_one").fadeIn(500);
	});
	$(".topscripts").click(function(){
		$(".right_panel_one").fadeOut(1); 
		$(".right_panel_two").fadeIn(500);
	});
	$(".someclass").tipTip({delay:0});	
	$("#news").attr("src", "https://www.softaculous.com/news.js");
});

</script>';
	
	// top 10 scripts based on the rating formula 
	foreach($scripts as $k => $v){
		
		if(empty($iscripts[$k]) || (!empty($scripts[$k]['parent']) && !empty($iscripts[$scripts[$k]['parent']]))){
			continue;
		}
		
		$top[$k] = $v['ratings']*$v['votes'];
		
	}

	if(is_array($top)){
		arsort($top);
	}

	if(file_exists($globals['path'].'/conf/top_scripts.php') && !empty($globals['lictype'])){
		$top = unserialize(file_get_contents($globals['path'].'/conf/top_scripts.php'));
	}


	//r_print($globals);
	if(!empty($globals['show_cscript_in_top'])){
		//r_print($top_custom_list);
		foreach($cscripts as $ck => $cv){
			if(array_key_exists($ck, $iscripts)){
				$top_custom[$ck] = $ck;
			}
		}
		
		$tmp_top = $top;
		
		// Do we need to add any other default scripts ?
		if(!empty($top_custom)){	
			$top = $top_custom;
		}
		
		if(!empty($tmp_top)){
			$top += $tmp_top;
		}
	}

	foreach($scripts as $k => $v){
		
		// We have to remove the scripts which are not enabled AND yet coming from top_scripts.php (i.e. Admin have saved it from top scripts)
		if(!array_key_exists($k, $iscripts) && !empty($top[$k])){
			unset($top[$k]);
		}
		
		if(empty($iscripts[$k]) || (!empty($scripts[$k]['parent']) && !empty($iscripts[$scripts[$k]['parent']]))){
			continue;
		}
		
		if(!empty($globals['append_apps'])){
			$top[$k] = $v['ratings']*$v['votes'];
		}
		
	}
	
	echo '
	<style>
	/*  to align the boxes with the bg2 form */
	.right_panel_two{
	width:98%; 
	margin: 15px 10px;
	}
	</style>
	<div>
		<div class="right_panel_two" '.($globals['softpanel'] == 'ampps' ? 'style="display:none"' : '').'>';
	
	// Show some statistics
	if(!empty($user['ins'])){
	
		echo '<div class="row justify-content-md-center">';
				
				$col_class = ((!empty($softpanel->pheader) ? (is_cp_theme('paper_lantern') ? 'col-lg-4 col-md-6 col-sm-6 col-xs-12' : 'col-lg-6 col-md-6 col-sm-6 col-xs-12') : 'col-lg-4 col-md-4 col-sm-6 col-xs-12'));
				echo '
				<div class="'.$col_class.'">
					<a href="'.$globals['ind'].'act=installations" class="text-decoration-none">
						<div class="resource_gr mb-2 mb-md-0 installation-block">
							<div class="resource_header">
								<i class="fas fa-archive"></i>
								<span class="resource_heading ml-1">'.$l['ins_stats'].'</span>
								<span class="badge float-right">'.count($user['ins']).'</span>
							</div>
						</div>
					</a>
				</div>';
				
				if(!empty($updates_available)){
					$ua_href = $globals['ind'].'act=installations&showupdates=true';
					$ua_badge = (int) $updates_available;
					$ua_fa = 'fa-exclamation-triangle';
					$ua_type= "warning";
				}else{
					$ua_href = '';
					$ua_badge = 0;
					$ua_fa = 'fa-check';
					$ua_type= "success";
				}
				
				echo '<div class="'.$col_class.'">
					<a href="'.$ua_href.'" class="text-decoration-none">
						<div class="resource_gr mb-2 mb-md-0 outdated-block '.$ua_type.'">
							<div class="resource_header">
								<i class="fas '.$ua_fa.' fa-3x"></i>
								<span class="resource_heading ml-1">'.$l['outdated_stats'].'</span>
								<span class="badge float-right">'.$ua_badge.'</span>
							</div>
						</div>
					</a>
				</div>';
				
				if(empty($globals['disable_backup_restore'])){
					
					$b_count = 0;
					$backups_count = get_backups_count(listbackups());
					$backups_count = (int) $backups_count;
					if(!empty($globals['max_backups'])){
						$b_count = $backups_count.' / '.$globals['max_backups'];
					}else{
						$b_count = $backups_count;
					}
					
					echo '
					<div class="'.$col_class.'">
						<a href="'.$globals['ind'].'act=backups" class="text-decoration-none">
							<div class="resource_gr mb-2 mb-md-0 backup-block">
								<div class="resource_header">
									<i class="fas fa-file-archive fa-3x"></i>
									<span class="resource_heading ml-1">'.$l['backups_stats'].'</span>
									<span class="badge float-right">'.$b_count.'</span>
								</div>
							</div>
						</a>
					</div>';
				}
			echo '</div>';			
	}
	
	$ts_cols = '12';
	if(ampps()){
		$ts_cols = '11';
	}
	
	echo '<div class="row">
			<div class="col-sm-'.$ts_cols.' text-center">
					<span class="sai_main_head d-block">'.$l['top_scrip'].'</span>
					<hr class="sai_main_head_hr">
			</div>';
			
			if(ampps()){
				echo '<div class ="col-sm-1">
					<div class="sai_main_head d-block about mb-2">
						<img src="'.$theme['images'].'info_star.png" width="30" height="30" class="someclass" title="'.$l['about'].'" style="border:none;float:right;"/>&nbsp;&nbsp;
					</div>	
				</div>';
				
			}
	echo '</div>
		';
	
	echo '
	<div class="row mt-2">';
		
	$i = 0;
	$j = 1;		
	$url = $globals['mirror_images'];
	$url_i = $globals['softimages'].'top15/70/';
	
	foreach ($top as $k => $v) {		
		$demo_scriptname = str_replace(' ', '_', $scripts[$k]['name']);
		$ratings = array();
		$deduct = 1;
		$r = $scripts[$k]['ratings'];
	
		if($k > 10000){
			if(file_exists($globals['euthemes'].'/'.$globals['theme_folder'].'/images/topscripts/'.$iscripts[$k]['softname'].'.png')){
				$url_i = $theme['images'].'topscripts/'.$iscripts[$k]['softname'].'.png';
				$url_i32 = $theme['images'].'topscripts/32/'.$k.'__logo.gif';
			}else{
				$url_i = $theme['images'].'custom_script.png';
			}
			$image_name = $url_i;
		}else{
			$url_i = $globals['softimages'].'top15/70/';
			$url_i32 = $globals['softimages'].'top15/32/'.$k.'__logo.gif';
			$image_name = $url_i.$iscripts[$k]['softname'].'.png';
		}
		
		for($i_r=1; $i_r<=5; $i_r++){		
			if($r >= 1){
				$ratings[$i_r] = '<i class="fas fa-star" alt="('.number_format($scripts[$k]['ratings'], 2).' out of 5)"></i>';
			}elseif($r > 0){
				$ratings[$i_r] = '<i class="fas fa-star-half-alt" alt="('.number_format($scripts[$k]['ratings'], 2).' out of 5)"></i>';
			}else{
				$ratings[$i_r] = '<i class="far fa-star" alt="('.number_format($scripts[$k]['ratings'], 2).' out of 5)"></i>';
			}
			$r = $r - $deduct;
		}	
		
		$ts_class = ((!empty($softpanel->pheader) ? (is_cp_theme('paper_lantern') ? 'col-lg-4 col-md-6 col-sm-6 col-xs-12' : 'col-lg-6 col-md-6 col-sm-6 col-xs-12') : 'col-lg-4 col-md-6 col-sm-6 col-xs-12'));
		
		echo '
		<div class="'.$ts_class.'">			
			<div class="sai_boxgrid2_ts">
				<div class="p-3" id="row_'.$j.'" onclick="location.href=\''.script_link($k, 1).'&tab=overview\';"  style="cursor:pointer;">
					<div class="sai_block d-inline-block mr-2" id="saiblock_'.$j.'">
						<img class="cover" src="'.$image_name.'" class="img-fluid" />						
					</div>
					<div class="d-inline-block align-middle">
						<div class="mt-2" id="row_ts_'.$j.'">
							<span class="script-title">'.$iscripts[$k]['name'].'</span>
							'.(empty($globals['off_rating_link']) && $k < 10000 ? '
							<div class="sai_coverstars mt-1">'.implode('', $ratings).'</div>' : '').'
						</div>
					</div>
					<hr>
					<div class="saihover-details mt-2" id="saihover_'.$j.'">
						<a class="text-decoration-none" href="'.script_link($k, 1).'&tab=overview">
							<p style="height:65px;">'.(strlen($iscripts[$k]['desc']) > 110 ? substr($iscripts[$k]['desc'], 0, 100).' <span>['.$l['more'].']</span>' : $iscripts[$k]['desc']).'</p>
						</a>
						
						<div class="row justify-content-center">
							<div class="col-3" align="center">
								<a href="'.script_link($k, 1).'&tab=install" class="sai_btns sai_btns_invert text-decoration-none">'.$l['install_button'].'</a>
							</div>';
							
							if(empty($globals['off_demo_link'])){
								
								echo '<div class="col-3" align="center">
									<span>
										<a href="'.$globals['ind'].'act=demos&soft='.$k.'" target="_blank" class="sai_btns text-decoration-none">'.$l['demo_button'].'</a>
									</span>
								</div>';
							}
							
							echo '<div class="col-4" align="center">
								<span>
									<a href="'.script_link($k, 1).'&tab=overview" class="sai_btns text-decoration-none">'.$l['overview_button'].'</a>
								</span>
							</div>
						</div>					
					</div>
				</div>
			</div>
		</div>';
		
		// Show 8 scripts for all native UI i.e. cp, da, pl except cp paper_lantern where its 15
		if($j == (!empty($softpanel->pheader) ? (is_cp_theme('paper_lantern') ? 15 : 8) : (($globals['softpanel'] == 'plesk' && $globals['panel_hf'] == 1) ? ($GLOBALS["usertype"] != 1 ? 8 : 15) : 15))){
			break;
		}
		$j++;
		$i++;
	}
	echo '
	</div>';		

apply_filters('post_top_scripts_interface');
echo '</div><!-- Closing of TAB2 DIV--!>';
echo '<div class="right_panel_one" '.($globals['softpanel'] == 'ampps' ? '' : 'style="display:none"').'>';

if($globals['softpanel'] == 'ampps'){
	
	include_once(dirname(__FILE__).'/ampps/amppsindex_theme.php');
	amppsindex_theme();

}
//THIS IS THE CLOSING OF TAB2 DIV
echo '
</div><!-- Closing of main DIV --!>';

// news updates box
if(empty($globals['eu_news_off'])){

	echo '<script language="javascript" type="text/javascript"  id="news"></script>
	
	<script type="text/javascript">
	var news_retry = 0;
	function load_soft_info(){
		if(!$_("softnews")){ // Is the news DIV there ?
			return true;
		}
		$_("softnews").style.width = $_("softnewsholder").offsetWidth;
		
		//The news
		
		if(typeof(soft_news) == "undefined"){
			$_("softnews").innerHTML = "'.$l['conect_to_soft'].'";
			news_retry ++;
			if(news_retry <= 3){
				setTimeout(load_soft_info, 1000);
			}
		}else{
			var newsstr = "";
			for(x in soft_news){
				newsstr = newsstr+\'<div class="softnewshead">\'+soft_news[x][0]+\'</div>\'+\'<div class="softnewsblock">\'+soft_news[x][1]+\'</div><br />\';
			}
			$_("softnews").innerHTML = newsstr;
		}
	}
	addonload(\'load_soft_info();\');
	
	</script>

<!----#News---->
<div class="row mt-4">
	<div class="col-md-1"></div>
	<div class="col-md-10">
		<div class="soft-news">
			<div class="news-header" >
				<div class="news_content_header 12">
					'.$l['news'].'
				</div>				
			</div>
			<div class="news_content" id="softnewsholder">
				<div class="softnews" id="softnews"'.(!empty($softpanel->pheader) ? 'style="overflow: auto;width:auto; height:auto; "' : 'style="height:auto;"').'></div>
			</div>			
		</div>		
	</div>
	<div class="col-md-1"></div>
		
</div>
	

';

}
softfooter();

}



function js_userindex_theme(){

	global $theme, $globals, $softpanel, $user, $l;
	
	softheader($l['<title>']);
	
	echo '
	<div class="bg bg_usi"><br />
		<div class="row">
			<div style="width:20%; float:left;">
				<img src="'.$theme['images'].'javascripts.jpg" alt="" class="img-fluid"/>
			</div>
			<div style="width:80%; float:right; padding:0 20px;">
				<font class="sai_newhead">'.$l['javascriptify'].'</font>
				<br /><br />
				<font class="sai_feature_exp">'.$l['javascriptify_exp'].'</font>
			</div>
		</div>
		
		<br /><br />
		
		<div class="row">
			<div style="width:80%; float:left; padding-right:50px;">
				<font class="sai_newhead">'.$l['served_ajax'].'</font>
				<br /><br />
				<font class="sai_feature_exp">'.$l['served_ajax_exp'].'</font>
			</div>
			<div style="width:20%; float:right;">
				<img src="'.$theme['images'].'ajax.jpg" alt="" class="img-fluid"/>
			</div>
		</div>
		
		<br /><br />
		
		<div class="row">
			<div style="width:20%; float:left;">
				<img src="'.$theme['images'].'dragme.gif" alt="" id="dragme" style="position:relative;" class="img-fluid"/>
		
				<script language="javascript" src="'.$theme['url'].'/js/domdrag.js" type="text/javascript"></script>
				<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
				Drag.init($_("dragme"), $_("dragme"));
				// ]]>
				</script>
			</div>
			<div style="width:80%; float:right; padding:0 20px;">
				<font class="sai_newhead">'.$l['play_demos'].'</font>
				<br /><br />
				<font class="sai_feature_exp">'.$l['play_demos_exp'].'</font>
			</div>
		</div>
		
		<br /><br />
		
		<div class="row">
			<div style="width:80%; float:left; padding-right:50px;">
				<font class="sai_newhead">'.$l['cross_browser'].'</font>
				<br /><br />
				<font class="sai_feature_exp">'.$l['cross_browser_exp'].'</font>
			</div>
			<div style="width:20%; float:right;">
				<img src="'.$theme['images'].'crossbrowser.jpg" alt="" class="img-fluid"/>
			</div>
		</div>
		
		<br /><br />
		
		<div class="row">
			<div style="width:20%; float:left;">
				<img src="'.$theme['images'].'jscode.jpg" alt="" class="img-fluid"/>
			</div>
			<div style="width:80%; float:right; padding:0 20px;">
				<font class="sai_newhead">'.$l['code_poetry'].'</font>
				<br /><br />
				<font class="sai_feature_exp">'.$l['code_poetry_exp'].'</font>
			</div>
		</div>
		<br /><br />
	</div><!--end of bg class-->';
	
	softfooter();

}

function perl_userindex_theme(){
	global $theme, $globals, $softpanel, $user, $l;
	softheader($l['<title>']);
	echo '
	<div class="bg bg_usi"><br />
		<div class="row">
			<div style="width:20%; float:left;">
				<img src="'.$theme['images'].'perl.jpg" alt="" class="img-fluid"/>
			</div>
			<div style="width:80%; float:right; padding:0 20px;">
				<font class="sai_newhead">'.$l['glimpse_perl'].'</font>
				<br /><br />
				<font class="sai_feature_exp">'.$l['perl_exp'].'</font>
			</div>
		</div>
		
		<br /><br />
		
		<div class="row">
			<div style="width:80%; float:left; padding-right:50px;">
				<font class="sai_newhead">'.$l['served_cgi'].'</font>
				<br /><br />
				<font class="sai_feature_exp">'.$l['served_cgi_exp'].'</font>
			</div>
			<div style="width:20%; float:right;">
				<img src="'.$theme['images'].'poc.png" alt="" class="img-fluid"/>
			</div>
		</div>
		
		<br /><br />
		
		<div class="row">
			<div style="width:20%; float:left;">
				<img src="'.$theme['images'].'chess.png" alt="" id="dragme" style="position:relative;" class="img-fluid"/>
				
				<script language="javascript" src="'.$theme['url'].'/js/domdrag.js" type="text/javascript"></script>
				
				<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
				Drag.init($_("dragme"), $_("dragme"));
				// ]]>
				</script>
			</div>
			<div style="width:80%; float:right; padding:0 20px;">
				<font class="sai_newhead">'.$l['play_demos_perl'].'</font>
				<br /><br />
				<font class="sai_feature_exp">'.$l['play_demos_perl_exp'].'</font>
			</div>
		</div>
		<br /><br />
	</div><!--end of bg class-->';
	
	softfooter();
}

function classes_userindex_theme(){
	
	global $theme, $globals, $softpanel, $user, $l;
	$globals['mode'] = 'classes';
	softheader($l['<title>']);
	
	if(!empty($softpanel->pheader)){
		if(is_cp_theme('paper_lantern')){
			echo '
			<style>
				.sai_inputs_cls input{
				width:280px;
				}
				
				.sai_suggestions_cls{
				width:280px;
				}
				
				.row_usi_cls {
				padding-left: 50px;
				}
				
				@media screen and (min-width: 320px) and (max-width: 767px){
					.sai_inputs_cls input{
					width:130px;
					}
					
					.sai_suggestions_cls{
					width:130px;
					}
					
					.row_usi_cls {
					padding-left: 0;
					}
					
					.sai_classes_boxgrid{
					width:250px;
					}
					
					.sai_classes_boxgrid2{
					width:250px;
					}
				}
				
				@media screen and (min-width: 768px) and (max-width: 799px){
					.sai_inputs_cls{
					padding-left:70px;	
					}
					
					.sai_inputs_cls input{
					width:300px;
					}
					
					.sai_suggestions_cls{
					width:300px;
					}
					
					.row_usi_cls {
					padding-left: 180px;
					}
				}
				
				@media screen and (min-width: 800px) and (max-width: 980px){
					.sai_inputs_cls input{
					width:250px;
					}
					
					.sai_suggestions_cls{
					width:250px;
					}
				}
			</style>';
		}else{
			echo '
			<style>
				.sai_inputs_cls input{
				width:190px;
				}
				
				.sai_suggestions_cls{
				width:190px;
				}
				
				.row_usi_cls {
				padding-left: 80px;
				}
				
				@media screen and (min-width: 768px) and (max-width: 799px){
					.sai_inputs_cls{
					padding-left:70px;	
					}
					
					.sai_inputs_cls input{
					width:300px;
					}
					
					.sai_suggestions_cls{
					width:300px;
					}
					
					.row_usi_cls {
					padding-left: 180px;
					}
				}
			</style>';
		}
	}
	
	if($globals['softpanel'] == 'plesk' && $globals['panel_hf'] == 1){
		// If not admin
		if($GLOBALS["usertype"] != 1){
			echo '
			<style>
				.sai_inputs_cls input{
				width:130px;
				}
				
				.sai_suggestions_cls{
				width:130px;
				}
				
				.row_usi_cls {
				padding-left: 0;
				}
				
				@media screen and (min-width: 320px) and (max-width: 359px){
					.sai_inputs_cls input{
					width:130px;
					}
					
					.sai_suggestions_cls{
					width:130px;
					}
					
					.row_usi_cls {
					padding-left: 0;
					}
				}
				
				@media screen and (min-width: 360px) and (max-width: 767px){
					.sai_inputs_cls input{
					width:130px;
					}
					
					.sai_suggestions_cls{
					width:130px;
					}
					
					.row_usi_cls {
					padding-left: 180px;
					}
					
					.sai_classes_boxgrid{
					width:250px;
					}
					
					.sai_classes_boxgrid2{
					width:250px;
					}
				}
				
				@media screen and (min-width: 768px) and (max-width: 799px){
					.sai_inputs_cls{
					padding-left:70px;	
					}
					
					.sai_inputs_cls input{
					width:300px;
					}
					
					.sai_suggestions_cls{
					width:300px;
					}
					
					.row_usi_cls {
					padding-left: 180px;
					}
				}
				
				@media screen and (min-width: 800px) and (max-width: 980px){
					.sai_inputs_cls input{
					width:280px;
					}
					
					.sai_suggestions_cls{
					width:280px;
					}
					
					.row_usi_cls {
					padding-left: 120px;
					}
				}
			</style>';
		}else{
			echo '
			<style>
				.sai_inputs_cls input{
				width:170px;
				}
				
				.sai_suggestions_cls{
				width:170px;
				}
				
				.row_usi_cls {
				padding-left: 50px;
				}
				
				@media screen and (min-width: 320px) and (max-width: 767px){
					.sai_inputs_cls input{
					width:170px;
					}
					
					.sai_suggestions_cls{
					width:170px;
					}
					
					.row_usi_cls {
					padding-left: 120px;
					}
					
					.sai_classes_boxgrid{
					width:250px;
					}
					
					.sai_classes_boxgrid2{
					width:250px;
					}
				}
				
				@media screen and (min-width: 768px) and (max-width: 980px){
					.sai_inputs_cls{
					padding-left:0px;	
					}
					
					.sai_inputs_cls input{
					width:250px;
					}
					
					.sai_suggestions_cls{
					width:250px;
					}
					
					.row_usi_cls {
					padding-left: 70px;
					}
				}
			</style>';
		}
	}
	
	
	$tc_class = ((!empty($softpanel->pheader) ? (is_cp_theme('paper_lantern') ? 'col-lg-6 col-md-6 col-sm-12 col-xs-12' : 'col-lg-12 col-md-12 col-sm-12 col-xs-12') : (($globals['softpanel'] == 'plesk' && $globals['panel_hf'] == 1) ? 'col-lg-4 col-md-6 col-sm-12 col-xs-12' : 'col-lg-4 col-md-4 col-sm-12 col-xs-12')));
	
	echo '
	<div class="bg bg_usi">
		<br />
		
		<script>
		$(document).ready(function(){
			$("#tab2").hide();
			$("#about").click(function(){
				$("#tab1").fadeOut(1); 
				$("#tab2").fadeIn(500);
			});
			$("#top").click(function(){
				$("#tab2").fadeOut(1); 
				$("#tab1").fadeIn(500);
			});
		
		});
		
		//alert("'.$globals['api_nuphp'].'top_classes.php?top=20&in=json&callback=?");
		$.getJSON("'.$globals['api_nuphp'].'top_classes.php?top=20&in=json&callback=?", 
				
			function (data) {
			 var soft_classes = \'<div class="row row_usi_cls">\';
			 var br = 1; 
			 $.each(data.data, function (i, item) {
				//alert(item.author);
				soft_classes += \'<div class="'.$tc_class.'" style="padding-bottom: 20px;"><div class="sai_classes_boxgrid2" id="'.$globals['index'].'act=classes&cid=\'+item.cid+\'&tab=overview" onclick=window.location=this.id;><div class="sai_classes_boxgrid"><div><h2>\'
				+item.name+
				\'</h2><p style="padding:10px;height:50px;">\'
				+item.desc+\'</p><p style="padding:10px;height:15px;"><b> '.$l['cl_ratings'].'</b> : \'
				+parseFloat(item.ratings)+\'</p> </div><div style="height:200px;"><br /><h2>\'
				+item.name+
				\'</h2><p style="margin-left:10px;margin-top:15px"> <b>'.$l['cl_author'].'</b> : \'
				+item.author+\'</p><p style="margin-left:10px;"> <b>'.$l['cl_license'].'</b> :\'
				+item.license+\'</p><p style="margin-left:10px;"> <b>'.$l['cl_version'].'</b> :\'
				+item.version+\'</p><div align="center"> <a href="'.$globals['index'].'act=classes&cid=\'+item.cid+\'&tab=install" class="sai_cbutton">'.$l['cl_install_but'].'</a><a href="'.$globals['index'].'act=classes&cid=\'+item.cid+\'&tab=file" class="sai_cbutton">'.$l['cl_show_files'].'</a></div></div></div></div></div>\';
				 
				 br += 1 ;
			 });// end of each loop
			
			soft_classes += "</div>";
			$("#tab1").append(soft_classes); 
				
			$(".sai_classes_boxgrid").hover(function(){$(this).stop().animate({top:"-200px"},{queue:false,duration:200});},function() 
			{$(this).stop().animate({top:"0px"},{queue:true,duration:200});});
			
			 }); // end of get json function
			
		 </script>';
		
		echo '
		<div class="tab1" id="tab1" '.($globals['softpanel'] == 'ampps' ? 'style="display:block"' : '').'>
			<script language="javascript" src="'.$theme['url'].'/js/classes_suggest.js"></script>
			<div class="row">
				<div class="col-lg-10 col-md-11 col-sm-10 col-xs-10" style="text-align:center;">
					<span class="sai_main_head">'.$l['top_classes'].'</span>
				</div>
					
				<div class="col-lg-2 col-md-1 col-sm-2 col-xs-2">
					<a href="javascript:void(0)" id="about"><img src="'.$theme['images'].'info_star.png" alt="'.$l['about'].'" title="'.$l['about'].'" ></a>&nbsp;&nbsp;							
				</div>
			</div>
			<hr>
			
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-2 col-xs-2"></div>
				<div class="col-lg-5 col-md-5 col-sm-7 col-xs-6">
					<fieldset class="sai_inputs sai_inputs_cls">
						<form accept-charset="'.$globals['charset'].'" name="classsearch" method="post" action="" onsubmit="classes_suggestjs.set_inputstring(\'submit\');return false;" id="classsearchform">
							<input type="text" name="searchString" id="searchString" class="sai_inputs sai_inputs_cls" autofocus placeholder="'.$l['search_classes'].'"  onKeyUp="classes_suggestjs.myKeyDownHandler(event, this.value, this.id);" autocomplete="off" sugurl="'.$globals['api_nuphp'].'" onblur="classes_suggestjs.show(1,this.id);" classes_ind="'.$globals['ind'].'"><br />
							<div id="searchsuggestions" class="sai_suggestions sai_suggestions_cls"></div>
						</form>
					</fieldset>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-3 col-xs-4"><div class="sai_search_button" onclick="classes_suggestjs.set_inputstring(\'submit\');"></div></div>
			</div>
			<br /><br />
		</div>';// THIS IS THE CLOSING OF TAB1 DIV
		
		echo '
		<div class="tab2" id="tab2" '.($globals['softpanel'] == 'ampps' ? 'style="display:none"' : '').'>
		
			<div style="float:right">
				<a href="javascript:void(0)" id="top"><img src="'.$theme['images'].'top_star.png" alt="'.$l['top_classes'].'" title="'.$l['top_classes'].'" id="top"></a>
			</div>
			<center>
				<span class="sai_newhead">'.APP.'</span>
			</center>
			<hr>
			<div class="row">
				<div style="width:20%; float:left;">	
					<img src="'.$theme['images'].'puzzle_pieces.jpg" style=""alt="" class="img-fluid" />
				</div>
				<div style="width:80%; float:right; padding:0 20px;">	
					<font class="sai_newhead">'.$l['classes'].'</font>
					<br /><br />
					<font class="sai_feature_exp">'.$l['classes_exp'].'</font>
				</div>
			</div>
			
			<br /><br />
			
			<div class="row">
				<div style="width:80%; float:left; padding-right:50px;">	
					<font class="sai_newhead">'.$l['classes_speedup'].'</font>
					<br /><br />
					<font class="sai_feature_exp">'.$l['classes_speedup_exp'].'</font>
				</div>
				<div style="width:20%; float:right;">	
					<img src="'.$theme['images'].'speed_up_simple.jpg"  alt="" class="img-fluid"/>
				</div>
			</div>
			
			<br /><br />
			
			<div class="row">
				<div style="width:20%; float:left;">	
					<img src="'.$theme['images'].'integrate.jpg" alt="" class="img-fluid"/>
				</div>
				<div style="width:80%; float:right; padding:0 20px;">	
					<font class="sai_newhead">'.$l['classes_1000'].'</font>
					<br /><br />
					<font class="sai_feature_exp">'.$l['classes_1000_exp'].'</font>
				</div>
			</div>
			
			<br /><br />';
			
		//THIS IS THE CLOSING OF TAB2 DIV
	echo '
		</div><br /><br />
	</div><!--end of bg class-->';
	
	softfooter();
}

function java_userindex_theme(){

global $theme, $globals, $softpanel, $user, $l;

softheader($l['<title>']);

echo '<table width="100%" cellpadding="4" cellspacing="1" border="0">
<tr>
	<td width="115">
		<img src="'.$theme['images'].'efficient.gif" alt="" />
	</td>
	<td valign="top">
		<font class="sai_newhead">'.$l['efficient'].'</font>
		<br /><br />
		<font class="sai_feature_exp">
		'.$l['efficient_exp'].'
		</font>
	</td>
</tr>
</table>

<table width="100%" cellpadding="4" cellspacing="1" border="0">
<tr>
	<td valign="top">
		<font class="sai_newhead">'.$l['convenient'].'</font>
		<br /><br />
		<font class="sai_feature_exp">
		'.$l['convenient_exp'].'
		</font>
	</td>
	<td width="115">
		<img src="'.$theme['images'].'convenient.gif" alt="" />
	</td>
</tr>
</table>

<br /><br />

<table width="100%" cellpadding="4" cellspacing="1" border="0">
<tr>
	<td width="130">
	
	<img src="'.$theme['images'].'dragme.gif" alt="" id="dragme" style="position:relative;" />
	
<script language="javascript" src="'.$theme['url'].'/js/domdrag.js" type="text/javascript"></script>

<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
Drag.init($_("dragme"), $_("dragme"));
// ]]></script>

	</td>
	<td valign="top">
		<font class="sai_newhead">'.$l['play_demos'].'</font>
		<br /><br />
		<font class="sai_feature_exp">
		'.$l['play_demos_exp'].'
		</font>
	</td>
</tr>
</table>

<br /><br />

<table width="100%" cellpadding="4" cellspacing="1" border="0">
<tr>
	<td valign="top">
		<font class="sai_newhead">'.$l['powerful'].'</font>
		<br /><br />
		<font class="sai_feature_exp">
		'.$l['powerful_exp'].'
		</font>
	</td>
	<td width="115">
		<img src="'.$theme['images'].'powerful.gif" alt="" />
	</td>
</tr>
</table>

<br /><br />

<table width="100%" cellpadding="4" cellspacing="1" border="0">
<tr>
	<td width="140">
		<img src="'.$theme['images'].'portable.gif" alt="" />
	</td>
	<td valign="top">
		<font class="sai_newhead">'.$l['portable'].'</font>
		<br /><br />
		<font class="sai_feature_exp">
		'.$l['portable_exp'].'
		</font>
	</td>
</tr>
</table>

<br /><br />';

softfooter();

}

function python_userindex_theme(){

global $theme, $globals, $softpanel, $user, $l;

softheader($l['<title>']);

echo '<table width="100%" cellpadding="4" cellspacing="1" border="0">
<tr>
	<td width="115">
		<img src="'.$theme['images'].'python.jpg" alt="" />
	</td>
	<td valign="top">
		<font class="sai_newhead">'.$l['glimpse_python'].'</font>
		<br /><br />
		<font class="sai_feature_exp">
		'.$l['python_exp'].'
		</font>
	</td>
</tr>
</table>

<table width="100%" cellpadding="4" cellspacing="1" border="0">
<tr>
	<td valign="top">
		<font class="sai_newhead">'.$l['interpreter'].'</font>
		<br /><br />
		<font class="sai_feature_exp">
		'.$l['interpreter_exp'].'
		</font>
	</td>
	<td width="115">
		<img src="'.$theme['images'].'convenient.gif" alt="" />
	</td>
</tr>
</table>

<br /><br />

<table width="100%" cellpadding="4" cellspacing="1" border="0">
<tr>
	<td width="130">
	
	<img src="'.$theme['images'].'dragme.gif" alt="" id="dragme" style="position:relative;" />
	
<script language="javascript" src="'.$theme['url'].'/js/domdrag.js" type="text/javascript"></script>

<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
Drag.init($_("dragme"), $_("dragme"));
// ]]></script>

	</td>
	<td valign="top">
		<font class="sai_newhead">'.$l['play_demos'].'</font>
		<br /><br />
		<font class="sai_feature_exp">
		'.$l['play_demos_exp'].'
		</font>
	</td>
</tr>
</table>
<br /><br />';

softfooter();

}

// The Application Index theme
function apps_userindex_theme(){

global $theme, $globals, $softpanel, $user, $l;

softheader($l['<title>']);

echo '<table width="100%" cellpadding="4" cellspacing="1" border="0">
<tr>
	<td width="115">
		<img src="'.$theme['images'].'efficient.gif" alt="" />
	</td>
	<td valign="top">
		<font class="sai_newhead">'.$l['efficient'].'</font>
		<br /><br />
		<font class="sai_feature_exp">
		'.$l['efficient_exp'].'
		</font>
	</td>
</tr>
</table>

<table width="100%" cellpadding="4" cellspacing="1" border="0">
<tr>
	<td valign="top">
		<font class="sai_newhead">'.$l['convenient'].'</font>
		<br /><br />
		<font class="sai_feature_exp">
		'.$l['convenient_exp'].'
		</font>
	</td>
	<td width="115">
		<img src="'.$theme['images'].'convenient.gif" alt="" />
	</td>
</tr>
</table>

<br /><br />

<table width="100%" cellpadding="4" cellspacing="1" border="0">
<tr>
	<td width="130">
	
	<img src="'.$theme['images'].'dragme.gif" alt="" id="dragme" style="position:relative;" />
	
<script language="javascript" src="'.$theme['url'].'/js/domdrag.js" type="text/javascript"></script>

<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
Drag.init($_("dragme"), $_("dragme"));
// ]]></script>

	</td>
	<td valign="top">
		<font class="sai_newhead">'.$l['play_demos'].'</font>
		<br /><br />
		<font class="sai_feature_exp">
		'.$l['play_demos_exp'].'
		</font>
	</td>
</tr>
</table>

<br /><br />

<table width="100%" cellpadding="4" cellspacing="1" border="0">
<tr>
	<td valign="top">
		<font class="sai_newhead">'.$l['powerful'].'</font>
		<br /><br />
		<font class="sai_feature_exp">
		'.$l['powerful_exp'].'
		</font>
	</td>
	<td width="115">
		<img src="'.$theme['images'].'powerful.gif" alt="" />
	</td>
</tr>
</table>

<br /><br />

<table width="100%" cellpadding="4" cellspacing="1" border="0">
<tr>
	<td width="140">
		<img src="'.$theme['images'].'portable.gif" alt="" />
	</td>
	<td valign="top">
		<font class="sai_newhead">'.$l['portable'].'</font>
		<br /><br />
		<font class="sai_feature_exp">
		'.$l['portable_exp'].'
		</font>
	</td>
</tr>
</table>

<br /><br />';

softfooter();

}

?>