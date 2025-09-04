<?php

//////////////////////////////////////////////////////////////
//===========================================================
// sitepad_theme.php
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


function sitepad_overview_theme(){
	
global $insid, $user, $__settings, $globals, $software, $iscripts, $soft, $theme, $error, $l, $SESS, $sitepad_plans, $user_sitepad;
	
	softheader($l['<title>']);
	
// SitePad new editor alert	
if(!empty($user_sitepad['apikey']) && empty($user_sitepad['no_new_editor_alert']) && can_show_sitepad()){
	
	$editor = $globals['sm_brand_editor'];
	if(empty($editor)){
		$editor = (empty($globals['sm_brand']) ? 'SitePad' : '').' Editor';
	}
	
	echo '				
<script>
$(document).ready(function(){
	$("#newEditorModal").modal();
});

function dismiss_new_editor_alert(){
	
	return $.ajax({
		url: "'.$globals['index'].'act=sitepad_overview&no_new_editor_alert=1&api=json",
		type: "GET",
		dataType: "json",
		success:function(data){
			$("#newEditorModal").modal("hide");
		}
	});
	
};

</script>

<!-- Modal -->
<div class="modal fade" id="newEditorModal" tabindex="-1" role="dialog" aria-labelledby="newEditorModalTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" style="display: inline-block;">'.lang_vars_name($l['new_editor_title'], array('editor' => $editor)).'</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				'.lang_vars_name($l['new_editor_exp'], array('editor' => $editor)).'
			</div>
			<div class="modal-footer">
				<a href="'.$globals['index'].'act=sitepad"><span class="btn btn-info" role="button">'.$l['access_old_editor'].'</span></a>
				<button type="button" class="btn btn-primary" onclick="dismiss_new_editor_alert()">'.$l['dismiss'].'</button>
				<button type="button" class="btn btn-secondary" data-dismiss="modal">'.$l['close'].'</button>
			</div>
		</div>
	</div>
</div>';
			
}
	
	$num_themes = '360+';
	
	echo '<style>

	.spicons-backgrounds{
		box-shadow:0 10px 20px 0 #F2F2F2;
	}

	.spicons-background{
		background-color: #3F51B5;
		border-radius: 100px;
		width: 75px;
		height: 75px;
		margin: 0 auto;
	}

	.smeicons, .smeicons-before::before{
		margin: -6px 0 0;
	}

	.spicons{
		color: #ffffff;
		font-size: 32px;
		margin : 20px auto;
	}

	.feature-wrap{
		box-shadow: 0 10px 20px 0 #F2F2F2;
		height: 240px;
		padding: 20px;
	}

	.feature-wrap .feature-title{
		color: #333333;
		font-family: Poppins;
		font-size: 24px;
		font-weight:500;
	}

	.feature-wrap .feature-title{
		color: #333333;
		font-family: Poppins;
		font-size: 24px;
		font-weight:500;
	}

	.feature-wrap .feature-content{
		color:#6c757d;
		font-family: Poppins;
		font-size: 14px;
	}
	
	.sitepad_getstarted_but {
		padding:10px 25px;
		font-weight:500;
		text-align:center;
		font-size: 14px;
		color: #FFFFFF !important;
		background-color: #2ED8B6 !important;
		text-decoration:none !important;
	}

	.sitepad_getstarted_but a{
		text-decoration: none;
		color:#fff;
		display:block;
	}
	.sitepad_getstarted_but:hover{
		background-color: #59e0c5;
	}
	
	.sitepad-old-but{
		display:inline-block;
		padding:10px 25px;
		font-weight:500;
		text-align:center;
		font-size: 15px;
		color: #FFFFFF !important;
		background-color: #4099FF !important;
		text-decoration: none !important;
	}
	
	.plans_heading{
		background: #00B249;
		color: #FFFFFF !important;
		font-size: 24px !important;
	}
	.plans_price{
		background: #33C16D;
		color: #FFFFFF !important;
		font-size: 20px !important;
		line-height: 45%;
	}
	.head_span{
		border-bottom: 1px solid #fff;
	}
	.most_popular{
		background: #FA9300 !important;
	}

	.buy_button{
		font-size: 16px;
		padding: 5px 30px;
		line-height: 25px;
		background: #FA9300 !important;
		color: #FFFFFF !important;
		border: 0px;
		cursor: pointer;
		text-decoration:none !important;
	}
	.buy_button:hover{
		background: #D77E00 !important;
	}

	.pricing_tab ul{
		border: 1px solid rgba(0, 0, 0, 0.14);
		box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14);
		margin-top: -1px;
	}
	.pricing_tab{
		padding: 10px;
		width: 25%;
		padding-top: 0px;
	}
	.pricing_tab li {
		border-bottom: 1px solid rgba(0, 0, 0, 0.05);
		color: #737373;
		margin-bottom: 0;
		padding: 20px;
		text-align: center;
		list-style-type: none;
		font-size: 16px;
	}
	.pricing_tab ul {
		padding: 0;
	}
	.plan_highlight{
		width:25%;
	}
	.tab{
		display: inline-flex;
		width: 100%;
	}
	
	</style>
	
	<script>
	
	function toggle_plans(){
		$("#sitepad_plans").toggle("100");
	}
	
	</script>
	
	<link rel="stylesheet" type="text/css" href="'.$theme['url'].'/css/smeicons.css" />
	<div class="bg"><br />
	
		<div class="row mt-2 sai_main_head" style="width:100%;" align="center">
			<div class="col-12 col-8 text-center" style="padding:0px 10px 0 0; text-align:right;">
				<img src="'.$theme['images'].'sitepad_32.gif" class="mr-2"/>SitePad '.$l['builder'].'</div>
		</div><hr>
		
		<div class="row mt-2">
			<div id="carousel-generic" class="carousel slide carousel-fade" data-ride="carousel">
				
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#carousel-generic" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-generic" data-slide-to="1"></li>
					<li data-target="#carousel-generic" data-slide-to="2"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
				
					<div class="carousel-item active">
						<img src="'.$theme['images'].'sitepad_banner.jpg" class="img-responsive d-block w-100" alt="SitePad Website Builder">
						<div class="carousel-caption content" style="margin-right : 25% !important; left:5% !important; text-shadow:none !important; top: 5%">
							<h2 style="color:#FFFFFF;"><font size="15px">SitePad '.$l['builder'].'</font></h2>
							<p style="color:#FFFFFF; !important">'.$l['slider1_desc'].'<br />
							'.$num_themes.' '.$l['slider1_desc2'].' <br /><br />
							'.$l['slider1_desc3'].'<br /></p>
						</div>
					</div>
					
					<div class="carousel-item">
						<img src="'.$theme['images'].'themes_collection.jpg" class="img-responsive d-block w-100" alt="Themes Collection">
						<div class="carousel-caption content" style="margin-right : 25% !important;margin-bottom:2% !important; left:5% !important; text-shadow:none !important;">
							<h2 style="color:#000000;"><font size="15px">'.$num_themes.' '.$l['slider2_title'].'</font></h2>
							<p style="color:#000000; !important">'.$l['slider2_desc'].'<br /><br />'.$l['slider2_desc2'].'</p>
						</div>
					</div>
					
					<div class="carousel-item">
						<img src="'.$theme['images'].'sitepad_widget.jpg" class="img-responsive d-block w-100" alt="SitePad Widget">
						<div class="carousel-caption content" style="margin-left : 22% !important;margin-bottom:2% !important; right:5% !important; text-shadow:none !important;">
							<h2 style="color:#fff;"><font size="15px">'.$l['slider4_title'].'</font></h2>
							<p style="color:#fff;">'.$l['slider4_desc'].'<br /><br />
							'.$l['slider4_desc2'].'</p>
						</div>
					</div>
				
				</div>
				
			</div>
		</div>
		<br /><br />
		
		<div class="row mt-2" align="center">
			<div class="col-sm-12 col-xs-12">
				<a href="'.$globals['ind'].'act=software&soft=4" class="sitepad_getstarted_but mr-2">
					<span>'.$l['get_started_btn'].'</span>
				</a>
				<a target="_blank" onClick="toggle_plans(); return false;" class="sitepad_getstarted_but mr-2" style="cursor:pointer;">
					<span>'.$l['view_plan_btn'].'</span>
				</a>
				'.(!empty($user_sitepad['apikey']) ? '
				<a href="'.$globals['ind'].'act=sitepad" class="sitepad-old-but mt-4 mt-md-0">
					'.$l['access_old_editor'].'
				</a>' : '').'
			</div>
		</div>
		
		<div id="sitepad_plans" class="text-center mt-5" style="display:none;">
			<h3 class="orange text-center">'.$l['seu_plan_title'].'</h3>
			<hr class="sai_main_head_hr mx-auto"/>
			<div class="row text-center mt-4">';
		
		foreach($sitepad_plans as $slug => $plan){
			
			echo '			
				<div class="col-12 mt-3 mt-md-0 col-md-3" id="'.$slug.'">
					<div class="plan">
						<div class="plan-type py-3">							
							<span class="plan-price" data-price="'.$plan['price'].'">'.(empty($plan['price']) ? 'No Cost' : '$'.$plan['price'].'/Year').'</span>
							<h3 class="head_span mt-2">'.$plan['name'].'</h3>
						</div>
						<div class="plan-features py-3">
							<span class="d-block my-3 features">'.(empty($plan['themes']) ? $l['plan_unlimited'] : $plan['themes']).' Themes</span>
							<span class="d-block my-3 features">'.(empty($plan['sites']) ? $l['plan_unlimited'] : $plan['sites']).' Site'.($plan['sites'] != 1 ? 's' : '').' *</span>
							<span class="d-block my-3 features">'.(empty($plan['pages']) ? $l['plan_unlimited'] : $plan['pages']).' Pages'.(empty($plan['pages']) ? '' : ' per site').'</span>
							<span class="d-block my-3 features">'.$l['plan_unlimited'].' Blog Posts</span>
							<span class="d-block my-3 features">'.$l['plan_download'].' '.(!empty($plan['download_sites']) ? '<span class="fas fa-check fa-lg" style="color:#00B249;"></span>' : '<span class="fas fa-times fa-lg" style="color:#D41B27;"></span>').'</span>
							<span class="d-block my-4 features">
								<a href="'.$globals['ind'].'act=software&soft=4" target="_blank" class="btn sai-plan-btn">'.$l['get_started_btn'].'</a>
							</span>
						</div>						
					</div>					
				</div>';
		}
		
			echo '</div>
			<div class="text-center mt-3">
				<span class="soft-notice">* '.$l['expiry_notice'].'</span>
			</div>
		</div>
		<div class="features-block p-2">
			<div id="top_feature" class="mt-4 text-center">			
				<h2 class="orange text-center">'.$l['feature_title'].'</h2>
				<hr class="style-two sai_main_head_hr mx-auto" />		
				<div class="row mt-2">
					<div class="col-12 col-sm-6 col-md-4 col-xl-4 p-3">
						<div class="feature-wrap text-center">
							<div class="spicons-background d-block">
								<span class="fas fa-download fa-2x spicons">
								</span>
							</div>
							<h4 class="mt-2 feature-title">'.$l['one_click_title'].'</h4>
							<p class="feature-content">'.$l['one_click_desc'].'</p>
						</div>
					</div>			
					<div class="col-12 col-sm-6 col-md-4 col-xl-4 p-3">
						<div class="feature-wrap text-center">
							<div class="spicons-background">
								<span class="far fa-image fa-2x spicons"></span>
							</div>
							<h4 class="mt-2 feature-title">'.$num_themes.' '.$l['num_themes_title'].'</h4>
							<p class="feature-content">'.$num_themes.' '.$l['num_themes_desc'].'</p>
						</div>
					</div>			
					<div class="col-12 col-sm-6 col-md-4 col-xl-4 p-3">
						<div class="feature-wrap text-center">
							<div class="spicons-background">
								<span class="fas fa-th fa-2x spicons"></span>
							</div>
							<h4 class="mt-2 feature-title">'.$l['widgets_title'] .'</h4>
							<p class="feature-content">'.$l['widgets_desc'] .'</p>
						</div>
					</div>
				</div>
				
				<div class="row mt-2">
					<div class="col-12 col-sm-6 col-md-4 col-xl-4 p-3">
						<div class="feature-wrap text-center">
							<div class="spicons-background">
								<span class="fas fa-paste fa-2x spicons"></span>
							</div>
							<h4 class="mt-2 feature-title">'.$l['responsive_title'].'</h4>
							<p class="feature-content">'.$l['responsive_desc'].'</p>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-md-4 col-xl-4 p-3">
						<div class="feature-wrap text-center">
							<div class="spicons-background">
								<span class="fas fa-file-alt fa-2x spicons"></span>
							</div>
							<h4 class="mt-2 feature-title">'.$l['static_title'].'</h4>
							<p class="feature-content">'.$l['static_desc'].'</p>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-md-4 col-xl-4 p-3">
						<div class="feature-wrap text-center">
							<div class="spicons-background">
								<span class="fas fa-check fa-2x spicons"></span>
							</div>
							<h4 class="mt-2 feature-title">'.$l['easy_to_title'].'</h4>
							<p class="feature-content">'.$l['easy_to_desc'].'</p>
						</div>
					</div>
				</div>
			</div>
			<div id="all_feature">
				<div id="feature_sec">			
					<div class="row mt-2">
						<div class="col-12 col-sm-6 col-md-4 col-xl-4 p-3">
							<div class="feature-wrap text-center">
								<div class="spicons-background">
									<span class="fas fa-share-alt fa-2x spicons"></span>
								</div>
								<h4 class="mt-2 feature-title">'.$l['social_title'].'</h4>
								<p class="feature-content">'.$l['social_desc'].'</p>
							</div>
						</div>
						<div class="col-12 col-sm-6 col-md-4 col-xl-4 p-3">
							<div class="feature-wrap text-center">
								<div class="spicons-background"><span class="fas fa-user fa-2x spicons"></span></div>
								<h4 class="mt-2 feature-title">'.$l['blog_title'].'</h4>
								<p class="feature-content">'.$l['blog_desc'].'</p>
							</div>
						</div>
						<div class="col-12 col-sm-6 col-md-4 col-xl-4 p-3">
							<div class="feature-wrap text-center">
								<div class="spicons-background">
									<span class="fas fa-video fa-2x spicons"></span>
								</div>
								<h4 class="mt-2 feature-title">'.$l['media_title'].'</h4>
								<p class="feature-content">'.$l['media_desc'].'</p>
							</div>
						</div>
					</div>
					
					<div class="row mt-2">
						<div class="col-12 col-sm-6 col-md-4 col-xl-4 p-3">
							<div class="feature-wrap text-center">
								<div class="spicons-background">
									<span class="far fa-copy fa-2x spicons"></span>
								</div>
								<h4 class="mt-2 feature-title">'.$l['replicate_title'].'</h4>
								<p class="feature-content">'.$l['replicate_desc'].'</p>
							</div>
						</div>
						<div class="col-12 col-sm-6 col-md-4 col-xl-4 p-3">
							<div class="feature-wrap text-center">
								<div class="spicons-background">
									<span class="fas fa-random fa-2x spicons"></span>
								</div>
								<h4 class="mt-2 feature-title">'.$l['flexible_title'].'</h4>
								<p class="feature-content">'.$l['flexible_desc'].'</p>
							</div>
						</div>
						<div class="col-12 col-sm-6 col-md-4 col-xl-4 p-3">
							<div class="feature-wrap text-center">
								<div class="spicons-background"><span class="fas fa-globe fa-2x spicons"></span></div>
								<h4 class="mt-2 feature-title">'.$l['multisite_title'].'</h4>
								<p class="feature-content">'.$l['multisite_desc'].'</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="all_widgets" class="mt-4 p-2 text-center">
			<h2 class="orange text-center">'.$l['list_widgets_title'].'</h2>
			<hr class="style-two sai_main_head_hr" />
			<div class="row mt-2">
				<div class="col-12 col-sm-6 col-md-4 col-xl-4 p-3">
					<div class="feature-wrap text-center">
						<div class="spicons-background">
							<span class="smeicons fa-2x smeicons-before spicons smeicons-sm_heading">
							</span>
						</div>
						<h4 class="mt-2 feature-title">'.$l['widget_title_title'].'</h4>
						<p class="feature-content">'.$l['widget_title_desc'].'</p>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-md-4 col-xl-4 p-3">
					<div class="feature-wrap text-center">
						<div class="spicons-background">
							<span class="smeicons fa-2x smeicons-before spicons smeicons-sm_text"></span>
						</div>
						<h4 class="mt-2 feature-title">'.$l['widget_paragraph_title'].'</h4>
						<p class="feature-content">'.$l['widget_paragraph_desc'].'</p>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-md-4 col-xl-4 p-3">
					<div class="feature-wrap text-center">
						<div class="spicons-background">
							<span class="smeicons fa-2x smeicons-before spicons smeicons-sm_code"></span>
						</div>
						<h4 class="mt-2 feature-title">'.$l['widget_richtext_title'].'</h4>
						<p class="feature-content">'.$l['widget_richtext_desc'].'</p>
					</div>
				</div>
			</div>
			
			<div class="row mt-2">
				<div class="col-12 col-sm-6 col-md-4 col-xl-4 p-3">
					<div class="feature-wrap text-center">
						<div class="spicons-background">
							<span class="smeicons fa-2x smeicons-before spicons smeicons-sm_quote"></span>
						</div>
						<h4 class="mt-2 feature-title">'.$l['widget_quote_title'].'</h4>
						<p class="feature-content"'.$l['widget_quote_desc'].'</p>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-md-4 col-xl-4 p-3">
					<div class="feature-wrap text-center">
						<div class="spicons-background">
							<span class="smeicons fa-2x smeicons-before spicons smeicons-sm_list"></span>
						</div>
						<h4 class="mt-2 feature-title">'.$l['widget_list_title'].'</h4>
						<p class="feature-content">'.$l['widget_list_desc'].'</p>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-md-4 col-xl-4 p-3">
					<div class="feature-wrap text-center">
						<div class="spicons-background">
							<span class="smeicons fa-2x smeicons-before spicons smeicons-sm_icon"></span>
						</div>
						<h4 class="mt-2 feature-title">'.$l['widget_icon_title'].'</h4>
						<p class="feature-content">'.$l['widget_icon_desc'].'</p>
					</div>
				</div>
			</div>
			
			<div class="row mt-2">
				<div class="col-12 col-sm-6 col-md-4 col-xl-4 p-3">
					<div class="feature-wrap text-center">
						<div class="spicons-background"><span class="smeicons fa-2x smeicons-before spicons smeicons-sm_image"></span></div>
						<h4 class="mt-2 feature-title">'.$l['widget_image_title'].'</h4>
						<p class="feature-content">'.$l['widget_image_desc'].'</p>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-md-4 col-xl-4 p-3">
					<div class="feature-wrap text-center">
						<div class="spicons-background">
							<span class="smeicons fa-2x smeicons-before spicons smeicons-sm_image_slider"></span>
						</div>
						<h4 class="mt-2 feature-title">'.$l['widget_slider_title'].'</h4>
						<p class="feature-content">'.$l['widget_slider_desc'].'</p>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-md-4 col-xl-4 p-3">
					<div class="feature-wrap text-center">
						<div class="spicons-background">
							<span class="smeicons fa-2x smeicons-before spicons smeicons-sm_grid_gallery">
							</span>
						</div>
						<h4 class="mt-2 feature-title">'.$l['widget_gridgallery_title'].'</h4>
						<p class="feature-content">'.$l['widget_gridgallery_desc'].'</p>
					</div>
				</div>
			</div>
			
			<div class="row mt-2">
				<div class="col-12 col-sm-6 col-md-4 col-xl-4 p-3">
					<div class="feature-wrap text-center">
						<div class="spicons-background">
							<span class="smeicons fa-2x smeicons-before spicons smeicons-mpce_image_hotspot"></span>
						</div>
						<h4 class="mt-2 feature-title">'.$l['widget_hotspot_title'].'</h4>
						<p class="feature-content">'.$l['widget_hotspot_desc'].'</p>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-md-4 col-xl-4 p-3">
					<div class="feature-wrap text-center">
						<div class="spicons-background">
							<span class="smeicons fa-2x smeicons-before spicons smeicons-sm_button">
							</span>
						</div>
						<h4 class="mt-2 feature-title">'.$l['widget_button_title'].'</h4>
						<p class="feature-content">'.$l['widget_button_desc'].'</p>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-md-4 col-xl-4 p-3">
					<div class="feature-wrap text-center">
						<div class="spicons-background">
							<span class="smeicons fa-2x smeicons-before spicons smeicons-sm_button_group">
							</span>
						</div>
						<h4 class="mt-2 feature-title">'.$l['widget_btngroup_title'].'</h4>
						<p class="feature-content">'.$l['widget_btngroup_desc'].'</p>
					</div>
				</div>
			</div>
			
			<div class="row mt-2">
				<div class="col-12 col-sm-6 col-md-4 col-xl-4 p-3">
					<div class="feature-wrap text-center">
						<div class="spicons-background">
							<span class="smeicons fa-2x smeicons-before spicons smeicons-sm_download_button">
							</span>
						</div>
						<h4 class="mt-2 feature-title">'.$l['widget_downloadbtn_title'].'</h4>
						<p class="feature-content">'.$l['widget_downloadbtn_desc'].'</p>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-md-4 col-xl-4 p-3">
					<div class="feature-wrap text-center">
						<div class="spicons-background">
							<span class="smeicons fa-2x smeicons-before spicons smeicons-sm_social_buttons"></span>
						</div>
						<h4 class="mt-2 feature-title">'.$l['widget_sharebtn_title'].'</h4>
						<p class="feature-content">'.$l['widget_sharebtn_desc'].'</p>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-md-4 col-xl-4 p-3">
					<div class="feature-wrap text-center">
						<div class="spicons-background">
							<span class="smeicons fa-2x smeicons-before spicons smeicons-sm_wp_audio"></span>
						</div>
						<h4 class="mt-2 feature-title">'.$l['widget_audio_title'].'</h4>
						<p class="feature-content">'.$l['widget_audio_desc'].'</p>
					</div>
				</div>
			</div>
			
			<div class="row mt-2">
				<div class="col-12 col-sm-6 col-md-4 col-xl-4 p-3">
					<div class="feature-wrap text-center">
						<div class="spicons-background">
							<span class="smeicons fa-2x smeicons-before spicons smeicons-sm_video"></span>
						</div>
						<h4 class="mt-2 feature-title">'.$l['widget_video_title'].'</h4>
						<p class="feature-content">'.$l['widget_video_desc'].'</p>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-md-4 col-xl-4 p-3">
					<div class="feature-wrap text-center">
						<div class="spicons-background">
							<span class="smeicons fa-2x smeicons-before spicons smeicons-mpceva_video_slider"></span>
						</div>
						<h4 class="mt-2 feature-title">'.$l['widget_videoslider_title'].'</h4>
						<p class="feature-content">'.$l['widget_videoslider_desc'].'</p>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-md-4 col-xl-4 p-3">
					<div class="feature-wrap text-center">
						<div class="spicons-background">
							<span class="smeicons fa-2x smeicons-before spicons smeicons-mpceva_video_lightbox"></span>
						</div>
						<h4 class="mt-2 feature-title">'.$l['widget_vLightbox_title'].'</h4>
						<p class="feature-content">'.$l['widget_vLightbox_desc'].'</p>
					</div>
				</div>
			</div>
			
			<div class="row mt-2">
				<div class="col-12 col-sm-6 col-md-4 col-xl-4 p-3">
					<div class="feature-wrap text-center">
						<div class="spicons-background">
							<span class="smeicons fa-2x smeicons-before spicons smeicons-sm_service_box"></span>
						</div>
						<h4 class="mt-2 feature-title">'.$l['widget_servicebox_title'].'</h4>
						<p class="feature-content">'.$l['widget_servicebox_desc'].'</p>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-md-4 col-xl-4 p-3">
					<div class="feature-wrap text-center">
						<div class="spicons-background">
							<span class="smeicons fa-2x smeicons-before spicons smeicons-sm_tabs"></span>
						</div>
						<h4 class="mt-2 feature-title">'.$l['widget_tabs_title'].'</h4>
						<p class="feature-content">'.$l['widget_tabs_desc'].'</p>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-md-4 col-xl-4 p-3">
					<div class="feature-wrap text-center">
						<div class="spicons-background">
							<span class="smeicons fa-2x smeicons-before spicons smeicons-sm_accordion"></span>
						</div>
						<h4 class="mt-2 feature-title">'.$l['widget_accordian_title'].'</h4>
						<p class="feature-content">'.$l['widget_accordian_desc'].'</p>
					</div>
				</div>
			</div>
			
			<div class="row mt-2">
				<div class="col-12 col-sm-6 col-md-4 col-xl-4 p-3">
					<div class="feature-wrap text-center">
						<div class="spicons-background">
							<span class="smeicons fa-2x smeicons-before spicons smeicons-sm_table"></span>
						</div>
						<h4 class="mt-2 feature-title">'.$l['widget_table_title'].'</h4>
						<p class="feature-content">'.$l['widget_table_desc'].'</p>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-md-4 col-xl-4 p-3">
					<div class="feature-wrap text-center">
						<div class="spicons-background">
							<span class="smeicons fa-2x smeicons-before spicons smeicons-sm_cta"></span>
						</div>
						<h4 class="mt-2 feature-title">'.$l['widget_cta_title'].'</h4>
						<p class="feature-content">'.$l['widget_cta_desc'].'</p>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-md-4 col-xl-4 p-3">
					<div class="feature-wrap text-center">
						<div class="spicons-background">
							<span class="smeicons fa-2x smeicons-before spicons smeicons-sm_modal"></span>
						</div>
						<h4 class="mt-2 feature-title">'.$l['widget_modal_title'].'</h4>
						<p class="feature-content">'.$l['widget_modal_desc'].'</p>
					</div>
				</div>
			</div>
			
			<div class="row mt-2">
				<div class="col-12 col-sm-6 col-md-4 col-xl-4 p-3">
					<div class="feature-wrap text-center">
						<div class="spicons-background">
							<span class="smeicons fa-2x smeicons-before spicons smeicons-sm_popup"></span>
						</div>
						<h4 class="mt-2 feature-title">'.$l['widget_splash_title'].'</h4>
						<p class="feature-content">'.$l['widget_splash_desc'].'</p>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-md-4 col-xl-4 p-3">
					<div class="feature-wrap text-center">
						<div class="spicons-background">
							<span class="smeicons fa-2x smeicons-before spicons smeicons-sm_space"></span>
						</div>
						<h4 class="mt-2 feature-title">'.$l['widget_space_title'].'</h4>
						<p class="feature-content">'.$l['widget_space_desc'].'</p>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-md-4 col-xl-4 p-3">
					<div class="feature-wrap text-center">
						<div class="spicons-background">
							<span class="smeicons fa-2x smeicons-before spicons smeicons-sm_embed"></span>
						</div>
						<h4 class="mt-2 feature-title">'.$l['widget_embed_title'].'</h4>
						<p class="feature-content">'.$l['widget_embed_desc'].'</p>
					</div>
				</div>
			</div>
			
			<div class="row mt-2">
				<div class="col-12 col-sm-6 col-md-4 col-xl-4 p-3">
					<div class="feature-wrap text-center">
						<div class="spicons-background">
							<span class="smeicons fa-2x smeicons-before spicons smeicons-sm_google_chart">
							</span>
						</div>
						<h4 class="mt-2 feature-title">'.$l['widget_chart_title'].'</h4>
						<p class="feature-content">'.$l['widget_chart_desc'].'</p>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-md-4 col-xl-4 p-3">
					<div class="feature-wrap text-center">
						<div class="spicons-background">
							<span class="smeicons fa-2x smeicons-before spicons smeicons-sm_google_map"></span>
						</div>
						<h4 class="mt-2 feature-title">'.$l['widget_maps_title'].'</h4>
						<p class="feature-content">'.$l['widget_maps_desc'].'</p>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-md-4 col-xl-4 p-3">
					<div class="feature-wrap text-center">
						<div class="spicons-background">
							<span class="smeicons fa-2x smeicons-before spicons smeicons-mpce_countdown_timer"></span>
						</div>
						<h4 class="mt-2 feature-title">'.$l['widget_timer_title'].'</h4>
						<p class="feature-content">'.$l['widget_timer_desc'].'</p>
					</div>
				</div>
			</div>
			
			<div class="row mt-2">
				<div class="col-12 col-sm-6 col-md-4 col-xl-4 p-3">
					<div class="feature-wrap text-center">
						<div class="spicons-background">
							<span class="smeicons fa-2x smeicons-before spicons smeicons-mpce_pta_pricing_table"></span>
						</div>
						<h4 class="mt-2 feature-title">'.$l['widget_pricingtble_title'].'</h4>
						<p class="feature-content">'.$l['widget_pricingtble_desc'].'</p>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-md-4 col-xl-4 p-3">
					<div class="feature-wrap text-center">
						<div class="spicons-background">
							<span class="smeicons fa-2x smeicons-before spicons smeicons-mpce_cfa_contact_form"></span>
						</div>
						<h4 class="mt-2 feature-title">'.$l['widget_contact_title'].'</h4>
						<p class="feature-content">'.$l['widget_contact_desc'].'</p>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-md-4 col-xl-4 p-3">
					<div class="feature-wrap text-center">
						<div class="spicons-background">
							<span class="smeicons fa-2x smeicons-before spicons smeicons-sm_site_title"></span>
						</div>
						<h4 class="mt-2 feature-title">'.$l['widget_sitetitle_title'].'</h4>
						<p class="feature-content">'.$l['widget_sitetitle_desc'].'</p>
					</div>
				</div>
			</div>
			
			<div class="row mt-2">
				<div class="col-12 col-sm-6 col-md-4 col-xl-4 p-3">
					<div class="feature-wrap text-center">
						<div class="spicons-background">
							<span class="smeicons fa-2x smeicons-before spicons smeicons-sm_primary_nav_menu"></span>
						</div>
						<h4 class="mt-2 feature-title">'.$l['widget_primarymenu_title'].'</h4>
						<p class="feature-content">'.$l['widget_primarymenu_desc'].'</p>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-md-4 col-xl-4 p-3">
					<div class="feature-wrap text-center">
						<div class="spicons-background">
							<span class="smeicons fa-2x smeicons-before spicons smeicons-sm_posts_grid"></span>
						</div>
						<h4 class="mt-2 feature-title">'.$l['widget_postgrid_title'].'</h4>
						<p class="feature-content">'.$l['widget_postgrid_desc'].'</p>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-md-4 col-xl-4 p-3">
					<div class="feature-wrap text-center">
						<div class="spicons-background">
							<span class="smeicons fa-2x smeicons-before spicons smeicons-sm_wp_pages"></span>
						</div>
						<h4 class="mt-2 feature-title">'.$l['widget_pages_title'].'</h4>
						<p class="feature-content">'.$l['widget_pages_desc'].'</p>
					</div>
				</div>
			</div>
			
			<div class="row mt-2">
				<div class="col-12 col-sm-6 col-md-4 col-xl-4 p-3">
					<div class="feature-wrap text-center">
						<div class="spicons-background">
							<span class="smeicons fa-2x smeicons-before spicons smeicons-sm_wp_posts"></span>
						</div>
						<h4 class="mt-2 feature-title">'.$l['widget_recent_title'].'</h4>
						<p class="feature-content">'.$l['widget_recent_desc'].'</p>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-md-4 col-xl-4 p-3">
					<div class="feature-wrap text-center">
						<div class="spicons-background">
							<span class="smeicons fa-2x smeicons-before spicons smeicons-sm_wp_calendar"></span>
						</div>
						<h4 class="mt-2 feature-title">'.$l['widget_calendar_title'].'</h4>
						<p class="feature-content">'.$l['widget_calendar_desc'].'</p>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-md-4 col-xl-4 p-3">
					<div class="feature-wrap text-center">
						<div class="spicons-background">
							<span class="smeicons fa-2x smeicons-before spicons smeicons-sm_posts_slider"></span>
						</div>
						<h4 class="mt-2 feature-title">'.$l['widget_postslider_title'].'</h4>
						<p class="feature-content">'.$l['widget_postslider_desc'].'</p>
					</div>
				</div>
			</div>
			
			<div class="row mt-2">
				<div class="col-12 col-sm-6 col-md-4 col-xl-4 p-3">
					<div class="feature-wrap text-center">
						<div class="spicons-background">
							<span class="smeicons fa-2x smeicons-before spicons smeicons-sm_wp_categories"></span>
						</div>
						<h4 class="mt-2 feature-title">'.$l['widget_categories_title'].'</h4>
						<p class="feature-content">'.$l['widget_categories_desc'].'</p>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-md-4 col-xl-4 p-3">
					<div class="feature-wrap text-center">
						<div class="spicons-background">
							<span class="smeicons fa-2x smeicons-before spicons smeicons-sm_wp_archives"></span>
						</div>
						<h4 class="mt-2 feature-title">'.$l['widget_archives_title'].'</h4>
						<p class="feature-content">'.$l['widget_archives_desc'].'</p>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-md-4 col-xl-4 p-3">
					<div class="feature-wrap text-center">
						<div class="spicons-background">
							<span class="smeicons fa-2x smeicons-before spicons smeicons-sm_wp_tagcloud "></span>
						</div>
						<h4 class="mt-2 feature-title">'.$l['widget_tags_title'].'</h4>
						<p class="feature-content">'.$l['widget_tags_desc'].'</p>
					</div>
				</div>
			</div>
		</div>
		<br /><br />
		
		<div class="row mt-2" align="center">
			<div class="col-sm-12 col-xs-12">
				<a href="'.$globals['ind'].'act=software&soft=4" target="_blank" style="text-decoration:none;">
					<span class="sitepad_getstarted_but">'.$l['get_started_btn'].'</span>
				</a>
			</div>
		</div>
		<br /><br /><br />
	</div>
</div>';
	
	softfooter();

}
