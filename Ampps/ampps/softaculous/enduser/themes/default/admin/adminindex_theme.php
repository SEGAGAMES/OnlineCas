<?php

//////////////////////////////////////////////////////////////
//===========================================================
// adminindex_theme.php
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

function adminindex_theme(){

global $theme, $globals, $user, $l, $scripts, $cscripts, $iscripts, $count_data, $softpanel, $sitepad_installed, $outdated_scripts;

softheader($l['<title>']);

if(optGET('rebuild_cache') && !defined('SOFTRESELLER')){
	$count_data = get_count_cache(1);
	echo json_encode($count_data);
	return true;
}

echo '<script language="javascript" type="text/javascript" src="'.serverurls('latestinfo').'"></script>

<script type="text/javascript">
function load_soft_info(){
	$_("softnews").style.width = $_("softnewsholder").offsetWidth;
	//The news
	if(typeof(soft_news) == "undefined"){
		$_("softnews").innerHTML = "'.$l['conect_to_soft'].'";
	}else{
		var newsstr = "";
		for(x in soft_news){
			newsstr = newsstr+\'<div class="softnewshead">\'+soft_news[x][0]+\'</div>\'+\'<div class="softnewsblock">\'+soft_news[x][1]+\'</div><br />\';
		}
		$_("softnews").innerHTML = newsstr;
	}
	//The current version
	if(typeof(soft_latest_version) == "undefined"){
		$_("newsoftversion").innerHTML = "<i>'.$l['no_info'].'</i>";
	}else{
		$_("newsoftversion").innerHTML = soft_latest_version;
	}
}
addonload(\'load_soft_info();\');

function rotate_img() {
	
	$("#refresh_ins_count, #refresh_user_count, #refresh_domain_count").click(function () {
		$(this).first().addClass("fa-rotate-360");
	});
}
				
	$(document).ready(function(){
		
		$("#refresh_ins_count, #refresh_user_count, #refresh_domain_count").tooltip();  
		
		$("#refresh_user_count, #refresh_ins_count, #refresh_domain_count").click(function(){
			var that = this;
			$.getJSON("'.$globals['ind'].'act=adminindex&rebuild_cache=1&jsnohf=1", function(data){
				$(that).first().removeClass("fa-rotate-360");
				//alert(data.ins_user);
				$("#total_ins").html(data.ins_count);
				$("#total_user").html(data.users_count);
				$("#total_domain").html(data.domain_count);
			});
		});
	});

</script>

<div class="bg2 p-4">';
	
	if(!empty($sitepad_installed)){
		echo '<div class="container-fluid"><div class="alert alert-success text-center">
			<a href="#close" class="close" data-dismiss="alert">&times;</a>
			<i class="fas fa-check sai_icons mr-2"></i>
			SitePad installation has started in background, your users can now access SitePad from their control panel accounts. 
		</div>
	</div>';
	}

	if(!defined('SOFTRESELLER')){
		echo '<div class="row mb-2">
			<div class="col-12 col-lg-4 mb-2">
				<div class="sai_smbox p-3">
					<div class="row">
						<div class="col-8">
							<div class="smbox">
								<i class="smbox-icon fas fa-user-alt d-block mb-1"></i>
								<span class="smbox-title d-inline-block">'.$l['users'].'</span>
								<button class="smbox-refresh-btn" title="'.$l['users_count_title'].'" id ="refresh_user_count" data-placement="bottom" onclick="rotate_img()">
									<i class="fas fa-sync fa-1x"></i>
								</button>
							</div>
						</div>
						<div class="col-4">
							<div class="smbox-info text-center">
								<span id="total_user" class="smbox-total">'.(int) $count_data['users_count'].'</span>								
							</div>
						</div>
					</div>					
				</div>
			</div>
			<div class="col-12 col-lg-4 mb-2">
				<div class="sai_smbox p-3">
					<div class="row">
						<div class="col-8">
							<div class="smbox">
								<i class="smbox-icon fas fa-archive d-block mb-1"></i>
								<span class="smbox-title d-inline-block">'.$l['total_ins'].'</span>
								<button class="smbox-refresh-btn" title="'.$l['ins_count_title'].'" id ="refresh_ins_count" data-placement="bottom" onclick="rotate_img()">
									<i class="fas fa-sync fa-1x"></i>
								</button>
							</div>
						</div>
						<div class="col-4">
							<div class="smbox-info text-center">
								<span id="total_ins" class="smbox-total">'.(int) $count_data['ins_count'].'</span>								
							</div>
						</div>
					</div>					
				</div>
			</div>
			<div class="col-12 col-lg-4 mb-2">
				<div class="sai_smbox p-3">
					<div class="row">
						<div class="col-6">
							<div class="smbox">
								<i class="smbox-icon fas fa-chart-area d-block mb-1"></i>
								<span class="smbox-title d-inline-block">'.$l['enabled_scripts'].'</span>
							</div>
						</div>
						<div class="col-6">
							<div class="smbox-info text-center">
								<span id="total_domain" class="smbox-total">'.(count($iscripts) - count($cscripts)).'/'.count($scripts).'</span>	
							</div>
						</div>
					</div>					
				</div>
			</div>
		</div>';
		
	}
	
	if(can_show_sitepad()){
		$license_col = 8;
		$sitepad_col = 4;
		$badge_align = 'center';
	}else{
		$license_col = 12;
		$sitepad_col = 0;
		$badge_align = 'center';
	}
	
	if(can_show_backuply_server()){

		echo '<div class="container-fluid"><div class="alert alert-success text-center">
			<a href="'.$globals['index'].'backuply_dismiss=1" style="text-decoration:none; margin:0px" class="close" >&times;</a>
			<img class="img" src="https://backuply.com/sitepad-data/uploads/2022/11/Backuply-logo-1.png" title="Backuply-logo" alt="Backuply-logo" width="40"> &nbsp;<a class="navbar-brand text-primary" style="text-decoration:none; margin:0px" href="'.$globals['index'].'act=backuply">Backuply</a> for Servers (Premium) is available for free with your '.APP.' License. &nbsp; <a href="'.$globals['index'].'act=backuply&install=1" class="flat-butt btn-lg">Install Now</a> <a href="'.$globals['index'].'act=backuply" class="flat-butt btn-lg">Read More</a>
		</div>
	</div>';
	
	}
	
	if(!empty($outdated_scripts) && !defined('SOFTRESELLER')){
		echo '<div class="row my-2 text-center">
		<div class="col-12 col-lg-11 alert alert-warning p-3 mx-auto">
			<a href="'.$globals['ind'].'act=softwares" class="text-decoration-none">
				<i class="fas fa-exclamation-triangle sai_icons mr-2"></i>'.$outdated_scripts.' '.$l['disable_scripts'].'
			</a>
		</div>
	</div>';
	}
	
	echo '<div class="row my-2">
		<div class="col-12 col-lg-'.$license_col.' mb-3">
			<div class="sai_licensebox p-3">
				<span class="sai-title">'.$l['soft_info'].'</span>
				<hr class="sai_main_head_hr">
				<div class="row">
					<div class="col-12">
						'.(!defined('SOFTRESELLER') ? '<label class="soft-label">'.$l['soft_license'].': </label> <span class="soft-details">'.$globals['license'].' ('.$globals['primary_ip'].')</span><br />' : '').'
					</div>
					<div class="col-md-8 col-sm-12">
						<div class="softinfo">
							<div class="license-detials">';
							
								if(!defined('SOFTRESELLER')){
									
								echo '<label class="soft-label">'.$l['soft_license_type'].' : </label> <span class="soft-details">';
								
								// Free license
								if(empty($globals['lictype'])){
									echo '
								<span class="badge badge-danger" style="font-size:20px; vertical-align:middle;">'.$l['type_0'].'</span>
								<br/>
								<a href="'.serverurls('buy').'" target="_blank">
									<button class="btn btn-success btn-sm">'.$l['become_premium'].'</button>
								</a>
								<a href="'.serverurls('pricing').'" target="_blank">
									<button class="btn btn-warning btn-sm">'.$l['pricing'].'</button>
								</a>';
								
								}elseif(!empty($globals['licexpired'])){
									
									// Expired license
									echo '
								<span class="badge badge-danger" style="font-size:20px; vertical-align:middle;">'.$l['type_expired'].'</span>
								<br/>
								<a href="'.serverurls('buy').'" target="_blank">
									<button class="btn btn-warning btn-sm">'.$l['renew_license'].'</button>
								</a>';
								
								}else{
									
									// Premium license
									echo '<span class="badge badge-success" style="font-size:20px; vertical-align:middle;">'.$l['type_1'].'</span>';
								}
								
								echo '
								
								<a href="'.$globals['ind'].'refreshlicense">
									<button class="btn btn-primary btn-sm">'.$l['refreshlicense'].'</button>
								</a>'.(asperapp(0, 1, 1) ? '&nbsp; (<a href="'.$globals['ind'].'act=licensekey">Enter License Key</a>)' : '').'
								<br />
								</span>';
									
								} // END IF !SOFTRESELLER
								
								echo '
								<label class="soft-label">'.$l['server_addr'].': </label><span class="soft-details">'.(!empty($_SERVER['SERVER_ADDR']) ? $_SERVER['SERVER_ADDR'] : $_SERVER['LOCAL_ADDR']).'</span>
								<br />

								'.(!defined('SOFTRESELLER') ? '<label class="soft-label">'.$l['expires'].': </label><span class="soft-details">'.(empty($globals['licexpires']) ? $l['never'] : makedate($globals['licexpires']).' (DD/MM/YYYY)' ).'</span><br />': '').
								'<label class="soft-label">'.$l['ip_license'].' :</label> <span class="soft-details">'.@substr(curl_call(fastestmirror().'/ip.php', 0, 5), 0, 16).'</span><br />
								<label class="soft-label">'.$l['php_version'].' :</label> <span class="soft-details">'.sphpversion().'</span><br />
								<label class="soft-label">'.$l['soft_version'].' :</label> <span class="soft-details">'.$globals['version'].'</span><br />
								<label class="soft-label">'.$l['latest_soft_version'].' :</label> <span id="newsoftversion" class="soft-details"></span>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-12">';
						if($globals['softpanel'] == 'ampps'){
							echo '<div align="'.$badge_align.'"><img src="'.$theme['images'].$globals['softpanel'].(empty($globals['lictype']) ? 'free' : 'premium').'.png" class="img-responsive"/></div>';
						}else{
							echo '<div align="'.$badge_align.'"><img src="'.$theme['images'].'softaculous'.(empty($globals['lictype']) ? 'free' : 'premium').'.png"/></div>';
						}
					echo'
					</div>
				</div>
			</div>
		</div>';
		
		// Do we have to show SitePad info ?
		if(!empty($sitepad_col)){
			
			echo '<div class="col-12 col-lg-'.$sitepad_col.'">
				<div class="sai-alert p-3">
					<h4 class="sai-title"><img src="'.$theme['images'].'sitepad_32.gif" class="mr-1"/>SitePad Website Builder</h4><hr class="sai_main_head_hr" />	
					<p class="sai-alert-details">SitePad is now included in Softaculous scripts list.</p>
					<p class="sai-alert-details">SitePad does not host the user\'s website and the final website will be hosted on your server.</p>
					<p class="sai-alert-details">SitePad is based on a Freemium model with 15 themes in Free version. <a href="mailto:sales@softaculous.com">Know more</a>.</p>
					<p class="sai-alert-details">You can disable SitePad from the <a href="'.$globals['index'].'act=settings">Settings page</a>.</p>
			</div>
		</div>';
					
		}
		
	echo '</div>';
	
	// Do we need to show promos ?
	$show_promo = 0;
	if(!defined('SOFTRESELLER') && !file_exists($globals['path'].'/conf/no_promo')){
		$show_promo = 1;
	}
	
	if(!empty($show_promo)){
		
		
		/* if(!is_dir('/usr/local/pinguzo/')){
			
			// Pinguzo promo
			$promo[] = '
			<div class="col-12">
				<div class="sai-alert p-3">
					<h2 class="sai-title">Pinguzo - Server and Website Monitoring</h2>
					<hr class="sai_main_head_hr" />
					<div class="row">
						<div class="col-6">
							<p class="sai-alert-details">We have been developing Pinguzo, which is a Server and Website Monitoring SaaS. As you know, downtime can happen on your Servers and Websites. Pinguzo can send notifications instantly, so that you can take corrective steps.</p>
							<p class="sai-alert-details">You can use your <span class="sai-imp-details">Softaculous Account to Sign In</span>. Since its a SaaS, you will not need to manage any storage or processes related to monitoring.</p>
							<p class="sai-alert-details">
								<a href="https://cp.pinguzo.com" target="new">
									<button class="flat-butt">Let\'s Try Pinguzo</button>
								</a>
							</p>
							<p class="sai-alert-details">If you have any feedback / questions, please do let us know - <a href="mailto:support%40pinguzo.com">support@pinguzo.com</a>.</p>
						</div>
						<div class="col-6">
							<img src="'.$theme['images'].'pinguzo_scr.jpg" class="img-responsive w-100">
						</div>
					</div>
				</div>				
			</div>';		
		} */
		
		if(($globals['softpanel'] == 'cpanel' || $globals['softpanel'] == 'directadmin' || $globals['softpanel'] == 'plesk') && !is_dir('/usr/local/sitepad/')){
			
			// SitePad promo
			$promo[] = '
			<div class="col-12">
				<div class="sai-alert p-3">
					<h2 class="sai-title">SitePad Website Builder</h2>
					<hr class="sai_main_head_hr"/>
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<p class="sai-alert-details">We have been developing SitePad, which is a website builder that publishes static web pages to hosting account. SitePad is an Easy to use, Drag &amp; Drop Website builder with <span class="sai-imp-details">40+</span> Widgets like Image/Video Slider, Image Galleries, Rich Text and many more!! SitePad currently has <span class="sai-imp-details">345+</span> Themes and we are adding more..</p>							
							<p class="sai-alert-details">SitePad plugin can be installed in your control panel and users can publish their site to their hosting account with just One Click.</p>							
							<p class="sai-alert-details">Pricing starts at $5/month per server with unlimited users and goes down to $3/month with volumes</p>							
							<p class="sai-alert-details">
								<a href="?install_sitepad=1"><button class="flat-butt mr-1">Install SitePad</button></a>
								<a href="http://sitepad.com" target="new"><button class="flat-butt">More Details</button></a>
							</p>
							<p class="sai-alert-details">If you have any feedback / questions, please do let us know - <a href="mailto:support%40sitepad.com">support@sitepad.com</a>.</span></p>
						</div>
						<div class="col-md-6 col-sm-12">
							<img src="'.$theme['images'].'sitemush_scr.png" class="w-100 img-responsive">
						</div>
					</div>
				</div>								
			</div>';
		}
		
		// Virtualizor promo
		$promo[] = '
		<div class="col-12">
			<div class="sai-alert p-3">
				<h2 class="sai-title">Virtualizor - VPS Control Panel</h2>
				<hr class="sai_main_head_hr"/>
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<p class="sai-alert-details">Virtualizor is a powerful web based VPS Control Panel. It supports OpenVZ, Xen PV, Xen HVM, XenServer, Linux KVM, LXC and OpenVZ 7 virtualization. Admins can create a VPS on the fly by the click of a button. VPS users can start, stop, restart and manage their VPS using a very advanced web based GUI.</p>
						<p class="sai-alert-details">Pricing starts at $9/month per server with unlimited VPS and goes down to $7/month with volumes
						</p>
						<p class="sai-alert-details">
							<a href="http://virtualizor.com" target="new">
								<button class="flat-butt">Try Virtualizor</button>
							</a>
						</p>
						<p class="sai-alert-details">If you have any feedback / questions, please do let us know - <a href="mailto:support%40virtualizor.com">support@virtualizor.com</a>.</p>
					</div>
					<div class="col-md-6 col-sm-12">
						<img src="'.$theme['images'].'virtualizor_scr.png" class="w-100 img-responsive">
					</div>
				</div>
			</div>
		</div>';
		
		echo '
		<div class="clearfix"></div>
		<div class="row my-5">
			'.$promo[mt_rand(0, count($promo) - 1)].'
		</div>';
	}

	echo '<div class="row my-5">
		<div class="col-10 offset-1">
			<div class="soft-news">
				<div class="news-header">
					<div class="news_content_header">'.$l['news'].'</div>
				</div>
				<div class="news_content" id="softnewsholder">
					<div class="softnews" id="softnews"></div>					
				</div>
			</div>			
		</div>
	</div>
	
</div><br />';

softfooter();

}

?>