<?php

//////////////////////////////////////////////////////////////
//===========================================================
// settings_theme.php
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

function settings_theme(){

global $theme, $globals, $user, $l, $langs, $skins, $error, $saved, $softpanel, $protocols, $timezone_list;

//Is suPHP installed ?
$apache_modules = (function_exists('apache_get_modules') ? apache_get_modules() : '');
if(is_array($apache_modules)){
	foreach($apache_modules as $av){
		if(strtolower($av) == 'mod_suphp'){
			$suphp = true;
		}
	}
}

softheader($l['<title>']);

echo '<div class="container-fluid">
	<div class="container my-4">
		<div class="sai-page-title text-center">
			<h2>'.$l['settings'].'</h2>
		</div>
	</div>		
</div>';

echo '<link rel="stylesheet" type="text/css" href="'.$theme['url'].'/spectrum.css?'.$globals['version'].'" />
<script src="'.$theme['url'].'/js/spectrum.js" type="text/javascript"></script>
<script language="javascript" type="text/javascript"><!-- // --><![CDATA[

function show_ud(id){
	var val = id.value;
	if(val == "user_defined"){
		$("#admin_prefix_ud").css("display", "");
	}else{
		$("#admin_prefix_ud").css("display", "none");
	}
}

function showtip(txt, el){	
	
	$_("stooltip").innerHTML = txt;
	
	var pos = findelpos(el);
	$_("stooltip").style.display = "";
	var tipheight = parseInt($_("stooltip").offsetHeight);
	var tipwidth = parseInt($_("stooltip").offsetWidth);
	//alert(tipheight+" "+tipwidth);
	
	var abody = findelpos($_("abody"));
	var bodyWidth = abody[0] + $_("abody").offsetWidth
	
	if((pos[0] + tipwidth) > bodyWidth){
		pos[0] = pos[0] - (pos[0] + tipwidth - bodyWidth) + 15;
	}
	
	$_("stooltip").style.left = pos[0]+"px";
	$_("stooltip").style.top = (pos[1]-5-tipheight)+"px";
	
	el.onmouseout = function(){
		hidetip();
	};

};

function hidetip(){
	$_("stooltip").style.display = "none";
}

function isNumber(n) {
	if(isNaN(n.value)){
		alert(n.value+\' is not a valid Number\');
		return false;
	}
}

$(document).ready(function() {
	$("#off_sitepad").change(function() {
		if($(this).prop("checked")){
			alert("'.$l['off_sitepad_conf'].'");
		}
	});
});
// ]]></script>';

if(!empty($saved)){
	echo '<div class="container-fluid">
		<div class="alert alert-success text-center">
			<a href="#close" class="close" data-dismiss="alert">&times;</a>
			<i class="fas fa-check sai_icons mr-2"></i>
			 '.$l['settings_saved'].'
		</div>
	</div>';
}

echo '<div id="stooltip" style="display:none; position:absolute; top: 0px; left: 0px; border: 1px solid #CCC; padding: 8px; background: #FFF; z-index:1000;"></div>
<form accept-charset="'.$globals['charset'].'" name="editsettings" method="post" action="" class="form-horizontal">
<div class="container-fluid">';

error_handle($error);

echo '<div class="row">
	<div class="col-12 col-lg-6">';
	
if(!defined('SOFTRESELLER')){
	echo '<div class="sai-card p-3">
	<div class="sai_main_head">
		<h2 class="sai-heading mb-2">'.$l['pathhead'].'</h2>
		<hr class="sai_main_head_hr"/>
	</div>
	<div class="sai_form">
		<div class="form-group">
			<label for="softpath" class="sai-label d-block">'.$l['softpath'].'</label>
			<span class="sai_exp2 mb-1 d-block">'.$l['softpath_exp'].'</span>
			<input type="text" name="path" class="form-control" id="softpath" value="'.aPOSTval('path', $globals['path']).'" />
		</div>

		<div class="form-group">
			<label for="softscripts" class="sai-label d-block">'.$l['softscripts'].'</label>
			<span class="sai_exp2 mb-1 d-block">'.$l['softscripts_exp'].'</span>
			<input type="text" name="softscripts" class="form-control" id="softscripts" value="'.aPOSTval('softscripts', $globals['softscripts']).'" />
		</div>

		<p><input type="submit" class="flat-butt" name="editsettings" value="'.$l['edit_settings'].'"/></p>
	</div>
</div><br />';
}
	echo '<div class="sai-card p-3">
	<div class="sai_main_head">
		<h2 class="sai-heading mb-2">'.$l['rebranding_settings'].'</h2>
		<hr class="sai_main_head_hr"/>
	</div>
	<div class="sai_form">
		<div class="form-group">	
			<label for="sn" class="sai-label d-block">'.$l['sitename'].'</label>
			<span class="sai_exp2 mb-1 d-block">'.$l['sitename_exp'].'</span>
			<input type="text" name="sn" id="sn" class="form-control" value="'.aPOSTval('sn', $globals['sn']).'" />
		</div>';

		if(!defined('SOFTRESELLER') && method_exists($softpanel, 'register_wordpress_manager')){
			echo '
			<div class="form-group">
				<label class="sai-label" for="wordpress_manager_title">'.$l['wordpress_manager_title'].'</label>
				<span class="sai_exp2 d-block mb-2">'.$l['wordpress_manager_title_exp'].'</span>
				<input type="text" name="wordpress_manager_title" id="wordpress_manager_title" class="form-control" value="'.aPOSTval('wordpress_manager_title', @$globals['wordpress_manager_title']).'" />
			</div>';
		}
		
		echo '

		<div class="form-group">
			<label for="logo_url" class="sai-label d-block">'.$l['logo_url'].'</label>
			<span class="sai_exp2 mb-1 d-block">'.$l['logo_url_exp'].'</span>
			<input type="text" name="logo_url" class="form-control" id="logo_url" value="'.aPOSTval('logo_url', $globals['logo_url']).'" />
		</div>
	
		<div class="form-group">
			<label for="demo_logo" class="sai-label d-block">'.$l['demo_logo'].'</label>
			<span class="sai_exp2 mb-1 d-block">'.$l['demo_logo_exp'].'</span>
			<input type="text" name="demo_logo" class="form-control" id="demo_logo" value="'.aPOSTval('demo_logo', $globals['demo_logo']).'" />		
		</div>
	
		<div class="form-group">
			<label for="demo_logo_url" class="sai-label d-block">'.$l['demo_logo_url'].'</label>
			<span class="sai_exp2 mb-1 d-block">'.$l['demo_logo_url_exp'].'</span>
			<input type="text" name="demo_logo_url" class="form-control" id="demo_logo_url" value="'.aPOSTval('demo_logo_url', $globals['demo_logo_url']).'" />
		</div>
	
		<div class="form-group">
			<label for="favicon_logo" class="sai-label d-block">'.$l['favicon_logo'].'</label>
			<span class="sai_exp2 mb-1 d-block">'.$l['favicon_logo_exp'].'</span>
			<input type="text" name="favicon_logo" class="form-control" id="favicon_logo" value="'.aPOSTval('favicon_logo', $globals['favicon_logo']).'" />
		</div>
		
		<p><input type="submit" class="flat-butt " name="editsettings" value="'.$l['edit_settings'].'"/></p>
	</div>
</div><br />

<div class="sai-card p-3">
	<div class="sai_main_head">
		<h2 class="sai-heading mb-2">'.$l['gen_set'].'</h2>
		<hr class="sai_main_head_hr"/>
	</div>
	<div class="sai_form">';
		
	if(!defined('SOFTRESELLER')){
		
		echo '<div class="form-group">
			<input type="checkbox" name="is_vps" id="is_vps" '.POSTchecked('is_vps', $globals['is_vps']).' />	
			<label for="is_vps" class="sai-label">'.$l['is_vps'].'</label>
			<span class="sai_exp2 mb-1 d-block">'.$l['is_vps_exp'].'</span>
		</div>

		<div class="form-group">
			<label for="cookie_name" class="sai-label d-block">'.$l['cook_name'].'</label>
			<span class="sai_exp2 mb-1 d-block">'.$l['cook_name_exp'].'</span>
			<input type="text" name="cookie_name" id="cookie_name" class="form-control" value="'.aPOSTval('cookie_name', $globals['cookie_name']).'" />
		</div>
		
		<div class="form-group">
			<label for="chmod_files" class="sai-label d-block">'.$l['chmod_files'].'</label>
			<span class="sai_exp2 mb-1 d-block">'.$l['chmod_files_exp'].' '.(empty($suphp) ? '' : '<b>('.$l['suphp_detected'].')</b>').'</span>
			<input type="text" name="chmod_files" id="chmod_files" class="form-control"  value="'.aPOSTval('chmod_files', $globals['chmod_files']).'" />
		</div>
		
		<div class="form-group">
			<label for="chmod_dir" class="sai-label d-block">'.$l['chmod_dir'].'</label>
			<span class="sai_exp2 mb-1 d-block">'.$l['chmod_dir_exp'].' '.(empty($suphp) ? '' : '<b>('.$l['suphp_detected'].')</b>').'</span>
			<input type="text" name="chmod_dir" id="chmod_dir" class="form-control" value="'.aPOSTval('chmod_dir', $globals['chmod_dir']).'" />
		</div>
		
		<div class="form-group">
			<label for="chmod_conf_file" class="sai-label d-block">'.$l['chmod_conf_file'].'</label>
			<span class="sai_exp2 mb-1 d-block">'.$l['chmod_conf_file_exp'].'</span>
			<input type="text" name="chmod_conf_file" id="chmod_conf_file" class="form-control" value="'.aPOSTval('chmod_conf_file', @$globals['chmod_conf_file']).'" />
		</div>
		
		<div class="form-group">
			<label for="footer_link" class="sai-label d-block">'.$l['footer_link'].'</label>
			<span class="sai_exp2 mb-1 d-block">'.$l['footer_link_exp'].'</span>
			<input type="text" name="footer_link" id="footer_link" class="form-control" size="20" value="'.aPOSTval('footer_link', @$globals['footer_link']).'" />
		</div>';
	}

	if($globals['softpanel'] == 'directadmin' && !defined('SOFTRESELLER')){
		echo '<div class="form-group">
			<label for="remote_mysql" class="sai-label d-block">'.$l['remote_mysql'].'</label>
			<span class="sai_exp2 mb-1 d-block">'.$l['remote_mysql_exp'].'</span>
			<input type="text" name="remote_mysql" id="remote_mysql" class="form-control" size="20" value="'.aPOSTval('remote_mysql', @$globals['remote_mysql']).'" />
		</div>';
	}	
		
	if(!defined('SOFTRESELLER')){
		echo '<div class="form-group">
			<label for="soft_email" class="sai-label d-block">'.$l['soft_email'].'</label>
			<span class="sai_exp2 mb-1 d-block">'.$l['soft_email_exp'].'</span>
			<input type="text" name="soft_email" id="soft_email" class="form-control" size="30" value="'.aPOSTval('soft_email', $globals['soft_email']).'" />
		</div>';
	}
		
	echo '<div class="form-group">
		<label for="from_email" class="sai-label d-block">'.$l['from_email'].'</label>
		<span class="sai_exp2 mb-1 d-block">'.$l['from_email_exp'].'</span>
		<input type="text" name="from_email" id="from_email" size="30" class="form-control" value="'.aPOSTval('from_email', $globals['from_email']).'" />
	</div>
		
	<div class="form-group">
		<label for="language" class="sai-label d-block">'.$l['choose_lang'].'</label>
		<span class="sai_exp2 mb-1 d-block">'.$l['choose_lang_exp'].'</span>
		<select name="language" id="language" class="form-control">';
		foreach($langs as $k => $v){
			echo '<option value="'.$v.'" '.(empty($_POST['language']) && $globals['language'] == $v ? 'selected="selected"' : (@trim($_POST['language']) == $v ? 'selected="selected"' : '') ).'>'._ucfirst($v).'</option>';
		}
		echo '</select>
	</div>
		
	<div class="form-group">
		<label for="default_protocol" class="sai-label d-block">'.$l['choose_protocol'].'</label>
		<span class="sai_exp2 mb-1 d-block">'.$l['choose_protocol_exp'].'</span>
		<select name="default_protocol" id="default_protocol" class="form-control">';
		foreach($protocols as $pk => $pv){
			echo '<option value="'.$pk.'" '.($globals['default_protocol'] == $pk ? 'selected="selected"' : '').'>'.$pv.'</option>';
		}
		echo '</select>
	</div>
		
	<div class="form-group">
		<label class="sai-label d-block">'.$l['off_protocol'].'</label>
		<span class="sai_exp2 mb-1 d-block">'.$l['off_protocol_exp'].'</span>
		<div class="row">';
		foreach($protocols as $pk => $pv){
			echo '<div class="col-6">
				<input type="checkbox" id="off_proto_'.$pk.'" name="off_proto_'.$pk.'" '.POSTchecked('off_proto_'.$pk, @$globals['off_proto_'.$pk]).' /><span class="sai-label ml-1"><label for="off_proto_'.$pk.'" class="sai-label">'.$pv.'</label></span>
			</div>';
		}
	echo'</div>
	</div>
		
	<div class="form-group">
		<label for="theme_folder" class="sai-label d-block">'.$l['choose_theme'].'</label>
		<span class="sai_exp2 mb-1 d-block">'.$l['choose_theme_exp'].'</span>
		<select name="theme_folder" id="theme_folder" class="form-control">';
		foreach($skins as $k => $v){
			echo '<option value="'.$v.'" '.(empty($_POST['theme_folder']) && $globals['theme_folder'] == $v ? 'selected="selected"' : (trim($_POST['theme_folder']) == $v ? 'selected="selected"' : '') ).'>'._ucfirst($v).'</option>';	
		}
		echo '</select>
	</div>';
					
	if(!defined('SOFTRESELLER')){
		echo '<div class="form-group">		
		<label class="sai-label">'.$l['default_hf_bg'].'</label>
		<input type="color" name="color" id="default_hf_bg" class="changecolor"/>
		<input type="hidden" name="default_hf_bg" value="'.aPOSTval('default_hf_bg', $globals['default_hf_bg']).'" id="hidden_default_hf_bg">
		<span class="sai_exp2 mb-1 d-block">'.$l['default_hf_bg_exp'].'</span>
	</div>

	<div class="form-group">		
		<label class="sai-label">'.$l['default_cat_hover'].'</label>
		<input type="color" name="color" id="default_cat_hover" class="changecolor"/>
		<input type="hidden" name="default_cat_hover" value="'.aPOSTval('default_cat_hover', $globals['default_cat_hover']).'" id="hidden_default_cat_hover">
		<span class="sai_exp2 mb-1 w-75 d-block">'.$l['default_cat_hover_exp'].'</span>
	</div>
		
	<div class="form-group">
		<label class="sai-label">'.$l['default_hf_text'].'</label>		
		<input type="color" name="color" id="default_hf_text" class="changecolor"/>
		<input type="hidden" name="default_hf_text" value="'.aPOSTval('default_hf_text', $globals['default_hf_text']).'" id="hidden_default_hf_text">
		<span class="sai_exp2 mb-1 w-75 d-block">'.$l['default_hf_text_exp'].'</span>
	</div>
	
	<div class="form-group">
		<label class="sai-label">'.$l['default_scriptname_text'].'</label>		
		<input type="color" name="color" id="default_scriptname_text" class="changecolor"/>
		<input type="hidden" name="default_scriptname_text" value="'.aPOSTval('default_scriptname_text', $globals['default_scriptname_text']).'" id="hidden_default_scriptname_text">
		<span class="sai_exp2 mb-1 w-75 d-block">'.$l['default_scriptname_text_exp'].'</span>
	</div>';
		
	echo '<div class="form-group">
		<label class="sai-label d-block" for="time_format">'.$l['time_format'].'</label>
		<span class="sai_exp2 mb-1 w-75 d-block">'.$l['time_format_exp'].'</span>
		<input type="text" id="time_format" name="time_format" class="form-control" size="30" value="'.aPOSTval('time_format', $globals['time_format']).'" />
	</div>

	<div class="form-group">
		<label class="sai-label d-block" for="timezone" >'.$l['timezone'].'</label>
		<select name="timezone" style="font-size:12px " id="timezone" class="form-control">
			<option value="0" '.(empty($_POST['timezone']) && empty($globals['timezone']) ? 'selected="selected"' : '').' >'.$l['default_timezone'].'</option>';
			foreach($timezone_list as $zone => $zone_details){
				echo '<option value="'.$zone.'" '.(POSTval('timezone', $globals['timezone']) === $zone ? 'selected="selected"' : '').' >('.$zone_details['pretty_offset'].') '.$zone_details['display_timezone'].'</option>';
			}
		echo '</select>
	</div>
		
	<div class="form-group">
		<label class="sai-label d-block" for="user_homedir">'.$l['user_homedir'].'</label>
		<span class="sai_exp2 mb-1 d-block">'.$l['user_homedir_exp'].'</span>
		<input type="text" id="user_homedir" name="user_homedir" class="form-control" size="30" value="'.POSTval('user_homedir', $globals['user_homedir']).'" />
	</div>
		
	<div class="form-group">
		<label for="logs_level" class="sai-label d-block">'.$l['logs_level'].'</label>
		<span class="sai_exp2 mb-1 d-block">'.$l['logs_level_exp'].'</span>
		<select name="logs_level" id="logs_level" class="form-control">
			<option value="0" '.POSTselect('logs_level', 0, (empty($globals['logs_level']) ? '1' : '0')).'>'.$l['off'].'</option>
			<option value="1" '.POSTselect('logs_level', 1, ($globals['logs_level'] == '1' ? '1' : '0')).'>1</option>
			<option value="2" '.POSTselect('logs_level', 2, ($globals['logs_level'] == '2' ? '1' : '0')).'>2</option>
			<option value="3" '.POSTselect('logs_level', 3, ($globals['logs_level'] == '3' ? '1' : '0')).'>3</option>
			<option value="4" '.POSTselect('logs_level', 4, ($globals['logs_level'] == '4' ? '1' : '0')).'>4 ('.$l['logs_level-4'].')</option>
		</select>
	</div>';

	if(!aefer() && !ent() && method_exists($softpanel, 'loadvars_cli')){
		
		echo '<div class="form-group">
			<input type="checkbox" id="auto_import_manual_ins" name="auto_import_manual_ins" '.POSTchecked('auto_import_manual_ins', $globals['auto_import_manual_ins']).' />
			<label class="sai-label" for="auto_import_manual_ins">'.$l['auto_import_manual_ins'].'</label>
			<span class="sai_exp2 mb-1 d-block">'.$l['auto_import_manual_ins_exp'].'</span>	
		</div>';
	}

	if($globals['softpanel'] == 'cpanel' || $globals['softpanel'] == 'plesk'){
		
		echo '<div class="form-group">
			<input type="checkbox" id="off_auto_import_wptoolkit" name="off_auto_import_wptoolkit" '.POSTchecked('off_auto_import_wptoolkit', !$globals['off_auto_import_wptoolkit']).' />
			<label class="sai-label" for="off_auto_import_wptoolkit">'.$l['auto_import_wptoolkit'].'</label>
			<span class="sai_exp2 mb-1 d-block">'.$l['auto_import_wptoolkit_exp'].'</span>	
		</div>';
	}
		
	if(aefer() || ent() || $globals['softpanel'] == 'isp'){
		echo '<div class="form-group">
			<input type="checkbox" id="disable_csrf" name="disable_csrf" '.POSTchecked('disable_csrf', @$globals['disable_csrf']).' />	
			<label class="sai-label" for="disable_csrf">'.$l['disable_csrf'].'</label>
			<span class="sai_exp2 mb-1 d-block">'.$l['disable_csrf_exp'].'</span>
		</div>';
	}
	
	if($globals['softpanel'] == 'hc'){
		echo '<div class="form-group">
			<input type="text" class="form-control" id="hc_apiurl" name="hc_apiurl" size="30" value="'.aPOSTval('hc_apiurl', htmlizer($globals['hc_apiurl'])).'" />		
			<label class="sai-label" for="hc_apiurl">'.$l['hc_api_url'].'</label>
			<span class="sai_exp2 mb-1 d-block">'.$l['hc_api_url_exp'].'</span>
		</div>';
	}
		
	if(aefer() || ent()){
		echo '<div class="form-group">
			<input type="checkbox" id="enc_user_pass" name="enc_user_pass" '.POSTchecked('enc_user_pass', @$globals['enc_user_pass']).' />
			<label class="sai-label" for="enc_user_pass">'.$l['enc_user_pass'].'</label>
			<span class="sai_exp2 mb-1 d-block">'.$l['enc_user_pass_exp'].'</span>
		</div>

		<div class="form-group">
			<input type="checkbox" id="force_softaculous_on_ssl" name="force_softaculous_on_ssl" '.POSTchecked('force_softaculous_on_ssl', @$globals['force_softaculous_on_ssl']).' />	
			<label class="sai-label" for="force_softaculous_on_ssl">'.$l['force_softaculous_on_ssl'].'</label>
			<span class="sai_exp2 mb-1 d-block">'.$l['force_softaculous_on_ssl_exp'].'</span>
		</div>';
	}
	
	}
		
	echo '<p><input type="submit" class="flat-butt " name="editsettings" value="'.$l['edit_settings'].'"/></p>
	</div>
</div><br/>

<div class="sai-card p-3">
	<div class="sai_main_head">
		<h2 class="sai-heading mb-2">'.$l['sitepad_settings'].'</h2>
		<hr class="sai_main_head_hr"/>
	</div>
	
	<div class="sai_form">
		<div class="form-group">
			<input type="checkbox" id="off_sitepad" name="off_sitepad"  '.POSTchecked('off_sitepad', @$globals['off_sitepad']).' />	
			<label class="sai-label" for="off_sitepad">'.$l['off_sitepad'].'</label>
			<span class="sai_exp2 mb-1 d-block">'.$l['off_sitepad_exp'].'</span>
		</div>
		
		<div class="form-group">
			<input type="checkbox" name="hide_sitepad" id="hide_sitepad" '.POSTchecked('hide_sitepad', @$globals['hide_sitepad']).' />	
			<label class="sai-label" for="hide_sitepad">'.$l['hide_sitepad'].'</label>
			<span class="sai_exp2 mb-1 d-block">'.$l['hide_sitepad_exp'].'</span>			
		</div>
		
		<div class="form-group">
			<label for="sm_brand" class="sai-label d-block">'.$l['sm_brand'].'</label>
			<span class="sai_exp2 mb-1 d-block">'.$l['sm_brand_exp'].'</span>
			<input type="text" name="sm_brand" id="sm_brand" class="form-control" value="'.aPOSTval('sm_brand', $globals['sm_brand']).'" />
		</div>
		
		<div class="form-group">
			<label for="sm_sitename" class="sai-label d-block">'.$l['sm_sitename'].'</label>
			<span class="sai_exp2 mb-1 d-block">'.$l['sm_sitename_exp'].'</span>
			<input type="text" name="sm_sitename" id="sm_sitename" class="form-control" value="'.aPOSTval('sm_sitename', $globals['sm_sitename']).'" />
		</div>
		
		<div class="form-group">
			<label for="sm_brand_editor" class="sai-label d-block">'.$l['sm_brand_editor'].'</label>
			<span class="sai_exp2 mb-1 d-block">'.$l['sm_brand_editor_exp'].'</span>
			<input type="text" name="sm_brand_editor" id="sm_brand_editor" class="form-control" value="'.aPOSTval('sm_brand_editor', $globals['sm_brand_editor']).'" />
		</div>

		<div class="form-group">
			<label for="sm_logo_url" class="sai-label d-block">'.$l['sm_logo_url'].'</label>
			<span class="sai_exp2 mb-1 d-block">'.$l['sm_logo_url_exp'].'</span>		
			<input type="text" name="sm_logo_url" id="sm_logo_url" class="form-control" value="'.aPOSTval('sm_logo_url', $globals['sm_logo_url']).'" />
		</div>
		
		<div class="form-group">
			<label for="sm_brand_url" class="sai-label d-block">'.$l['sm_brand_url'].'</label>
			<span class="sai_exp2 mb-1 d-block">'.$l['sm_brand_url_exp'].'</span>		
			<input type="text" name="sm_brand_url" id="sm_brand_url" class="form-control" value="'.aPOSTval('sm_brand_url', $globals['sm_brand_url']).'" />
		</div>
				
		<div class="form-group">
			<label for="host_sm" class="sai-label d-block">'.$l['host_sm'].'</label>
			<span class="sai_exp2 mb-1 d-block">'.$l['host_sm_exp'].'</span>
			<input type="text" name="host_sm" id="host_sm" class="form-control" size="30" value="'.aPOSTval('host_sm', $globals['host_sm']).'" />
		</div>

		<div class="form-group">
			<label for="sm_brand_demos" class="sai-label d-block">'.$l['sm_brand_demos'].'</label>
			<span class="sai_exp2 mb-1 d-block">'.$l['sm_brand_demos_exp'].'</span>
			<input type="text" name="sm_brand_demos" id="sm_brand_demos" class="form-control" size="30" value="'.aPOSTval('sm_brand_demos', $globals['sm_brand_demos']).'" />
		</div>
		
		<div class="form-group">
			<input type="checkbox" id="sm_no_demos" name="sm_no_demos" '.POSTchecked('sm_no_demos', $globals['sm_no_demos']).' />	
			<label class="sai-label" for="sm_no_demos">'.$l['sm_no_demos'].'</label>
			<span class="sai_exp2 mb-1 d-block">'.$l['sm_no_demos_exp'].'</span>			
		</div>

		<div class="form-group">
			<input type="checkbox" id="sm_no_recent_themes" name="sm_no_recent_themes" '.POSTchecked('sm_no_recent_themes', $globals['sm_no_recent_themes']).' />	
			<label class="sai-label" for="sm_no_recent_themes">'.$l['sm_no_recent_themes'].'</label>
			<span class="sai_exp2 mb-1 d-block">'.$l['sm_no_recent_themes_exp'].'</span>
		</div>

		<div class="form-group">
			<label for="sm_ftp_host" class="sai-label d-block">'.$l['sm_ftp_host'].'</label>
			<span class="sai_exp2 mb-1 d-block">'.$l['sm_ftp_host_exp'].'</span>
			<input type="text" name="sm_ftp_host" id="sm_ftp_host" class="form-control" size="30" value="'.aPOSTval('sm_ftp_host', $globals['sm_ftp_host']).'" />
		</div>
		
		<div class="form-group">
			<label for="sm_ftp_port" class="sai-label d-block">'.$l['sm_ftp_port'].'</label>
			<span class="sai_exp2 mb-1 d-block">'.$l['sm_ftp_port_exp'].'</span>
			<input type="text" name="sm_ftp_port" id="sm_ftp_port" class="form-control" size="30" value="'.aPOSTval('sm_ftp_port', $globals['sm_ftp_port']).'" />
		</div>				
		<p><input type="submit" class="flat-butt " name="editsettings" value="'.$l['edit_settings'].'"/></p>
	</div>
</div><br />';
		
if(!defined('SOFTRESELLER')){
	// PFX Settings will be here
	if(!empty($globals['lictype'])){
		echo '<div class="sai-card p-3">
		<div class="sai_main_head mb-2">
			<h2 class="sai-heading mb-2">'.$l['pfx_settings'].'</h2>
			<hr class="sai_main_head_hr"/>
		</div>
		<div class="sai_form">
			<div class="form-group">
				<input type="checkbox" id="eu_enable_themes" name="eu_enable_themes" '.POSTchecked('eu_enable_themes', @$globals['eu_enable_themes']).' />	
				<label class="sai-label" for="eu_enable_themes">'.$l['eu_enable_themes'].'</label>
				<span class="sai_exp2 mb-1 d-block">'.$l['eu_enable_themes_exp'].'</span>
			</div>
		</div>
	</div><br/>';
	}	
		
	echo '<div class="sai-card p-3">
	<div class="sai_main_head mb-2">
		<h2 class="sai-heading mb-2">'.$l['update_settings'].'</h2>
		<hr class="sai_main_head_hr"/>
	</div>
	<div class="sai_form">
		<div class="form-group">
		  <div class = "row">
		   <div class = "col-md-12">
			<label class="sai-label d-block">'.$l['auto_upd_softac'].'</label>
			<span class="sai_exp2 mb-1 d-block">'.$l['auto_upd_softac_exp'].'</span>
		   </div>
		   <div class = "col-md-12">
			<span class="d-block mb-0"><input type="radio" name="update" value="0" '.POSTradio('update', 0, $globals['update']).' /> <label class="sai-label mb-1">'.$l['never_update'].'</label></span>
			<span class="d-block mb-0"><input type="radio" name="update" value="1" '.POSTradio('update', 1, $globals['update']).' /> <label class="sai-label mb-1">'.$l['stable'].'</label></span> 
			<span class="d-block mb-0"><input type="radio" name="update" value="2" '.POSTradio('update', 2, $globals['update']).' /> <label class="sai-label mb-1">'.$l['release_cand'].'</label></span>
		   </div>
		  </div>
		</div>';
		
		echo '<div class="form-group">
			<input type="checkbox" id="update_softs" name="update_softs" '.POSTchecked('update_softs', $globals['update_softs']).' />
			<label class="sai-label" for="update_softs">'.$l['auto_upd_soft'].'</label>
			<span class="sai_exp2 mb-1 d-block">'.$l['auto_upd_soft_exp'].'</span>		
		</div>

		<div class="form-group">
			<input type="checkbox" id="add_softs" name="add_softs" '.POSTchecked('add_softs', $globals['add_softs']).' />
			<label class="sai-label" for="add_softs">'.$l['auto_add_soft'].'</label>
			<span class="sai_exp2 mb-1 d-block">'.$l['auto_add_soft_exp'].'</span>	
		</div>
			
		<div class="form-group">
			<input type="checkbox" id="email_update" name="email_update" '.POSTchecked('email_update', $globals['email_update']).' />
			<label class="sai-label" for="email_update">'.$l['email_upd_soft'].'</label>
			<span class="sai_exp2 mb-1 d-block">'.$l['email_upd_soft_exp'].'</span>	
		</div>
			
		<div class="form-group">
			<input type="checkbox" id="email_update_softs" name="email_update_softs" '.POSTchecked('email_update_softs', $globals['email_update_softs']).' />	
			<label class="sai-label" for="email_update_softs">'.$l['email_upd_softs'].'</label>
			<span class="sai_exp2 mb-1 d-block">'.$l['email_upd_softs_exp'].'</span>		
		</div>';
			
		echo '<div class="form-group">			
			<label for="cron_time" class="sai-label d-block">'.$l['cron_time'].'</label>
			<span class="sai_exp2 mb-1 d-block">'.$l['cron_time_exp'].'</span>
			<input type="text" name="cron_time" id="cron_time" class="form-control" size="30" value="'.aPOSTval('cron_time', $globals['cron_time']).'" />
		</div>
			
		<div class="form-group">
			<label for="php_bin" class="sai-label d-block" >'.$l['php_bin'].'</label>
			<span class="sai_exp2 mb-1 d-block">'.$l['php_bin_exp'].'</span>	
			<input type="text" class="form-control" id="php_bin" name="php_bin" size="30" value="'.aPOSTval('php_bin', htmlizer($globals['php_bin'])).'" />
		</div>

		<p><input type="submit" class="flat-butt " name="editsettings" value="'.$l['edit_settings'].'"/></p>
	</div>
</div><br />

<div class="sai-card p-3">
	<div class="sai_main_head mb-2">
		<h2 class="sai-heading mb-2">'.$l['remove_options'].'</h2>
		<hr class="sai_main_head_hr"/>
	</div>
	<div class="sai_form">
		<div class="form-group">
			<input type="checkbox" id="remove_dir" name="remove_dir" '.POSTchecked('remove_dir', $globals['remove_dir']).' />
			<label for="remove_dir" class="sai-label">'.$l['remove_dir'].'</label>
			<span class="sai_exp2 mb-1 d-block">'.$l['remove_dir_exp'].'</span>
		</div>
		
		<div class="form-group">
			<input type="checkbox" id="remove_db" name="remove_db" '.POSTchecked('remove_db', $globals['remove_db']).' />
			<label for="remove_db" class="sai-label">'.$l['remove_db'].'</label>
			<span class="sai_exp2 mb-1 d-block">'.$l['remove_db_exp'].'</span>			
		</div>
		
		<div class="form-group">
			<input type="checkbox" id="remove_datadir" name="remove_datadir" '.POSTchecked('remove_datadir', $globals['remove_datadir']).' />
			<label for="remove_datadir" class="sai-label">'.$l['remove_datadir'].'</label>
			<span class="sai_exp2 mb-1 d-block">'.$l['remove_datadir_exp'].'</span>
		</div>
		
		<div class="form-group">
			<input type="checkbox" id="remove_wwwdir" name="remove_wwwdir" '.POSTchecked('remove_wwwdir', $globals['remove_wwwdir']).' />
			<label for="remove_wwwdir" class="sai-label">'.$l['remove_wwwdir'].'</label>
			<span class="sai_exp2 mb-1 d-block">'.$l['remove_wwwdir_exp'].'</span>
		</div>
		
		<p><input type="submit" class="flat-butt " name="editsettings" value="'.$l['edit_settings'].'"/></p>
	</div>
</div><br />

<div class="sai-card p-3">
	<div class="sai_main_head mb-2">
		<h2 class="sai-heading mb-2">'.$l['privacy_settings'].'</h2>
		<hr class="sai_main_head_hr"/>
	</div>
	<div class="sai_form">
		<div class="form-group">
			<input type="checkbox" id="off_ins_stats" name="off_ins_stats" '.POSTchecked('off_ins_stats', $globals['off_ins_stats']).' />	
			<label class="sai-label" for="off_ins_stats" >'.$l['off_ins_stats'].'</label>
			<span class="sai_exp2 mb-1 d-block">'.$l['off_ins_stats_exp'].'</span>
		</div>
		<div class="form-group">
			<input type="checkbox" id="off_os_stats" name="off_os_stats" '.POSTchecked('off_os_stats', $globals['off_os_stats']).' />	
			<label class="sai-label" for="off_os_stats" >'.$l['off_os_stats'].'</label>
			<span class="sai_exp2 mb-1 d-block">'.$l['off_os_stats_exp'].'</span>
		</div>
		<p><input type="submit" class="flat-butt " name="editsettings" value="'.$l['edit_settings'].'"/></p>
	</div>
</div><br />

<div class="sai-card p-3">
	<div class="sai_main_head mb-2">
		<h2 class="sai-heading mb-2">'.$l['social_media'].'</h2>
		<hr class="sai_main_head_hr"/>
	</div>
	<div class="sai_form">
		<div class="form-group">
			<input type="checkbox" id="install_tweet_off" name="install_tweet_off" '.POSTchecked('install_tweet_off', $globals['install_tweet_off']).' />	
			<label class="sai-label" for="install_tweet_off" >'.$l['install_tweet_off'].'</label>
			<span class="sai_exp2 mb-1 d-block">'.$l['install_tweet_off_exp'].'</span>
		</div>
		
		<div class="form-group">
			<label for="install_tweet" class="sai-label d-block">'.$l['install_tweet_msg'].'</label>
			<span class="sai_exp2 mb-1 d-block">'.$l['install_tweet_msg_exp'].'</span>
			<span class="sai_exp2 mb-1 d-block" style="cursor:pointer;" onmouseover="showtip(\''.$l['tweet_vars'].'\', this)">'.$l['tweet_vars_link'].'</span>
			<input type="text" name="install_tweet" id="install_tweet" class="form-control" size="30" value="'.aPOSTval('install_tweet', (!empty($globals['install_tweet']) ? $globals['install_tweet'] : $l['install_tweet'])).'" />
		</div>
		
		<div class="form-group">
			<input type="checkbox" id="upgrade_tweet_off" name="upgrade_tweet_off" '.POSTchecked('upgrade_tweet_off', $globals['upgrade_tweet_off']).' />	
			<label class="sai-label" for="upgrade_tweet_off">'.$l['upgrade_tweet_off'].'</label>
			<span class="sai_exp2 mb-1 d-block">'.$l['upgrade_tweet_off_exp'].'</span>
		</div>
		
		<div class="form-group">
			<label for="upgrade_tweet" class="sai-label d-block">'.$l['upgrade_tweet_msg'].'</label>
			<span class="sai_exp2 mb-1 d-block">'.$l['upgrade_tweet_msg_exp'].'</span>
			<span class="sai_exp2 mb-1 d-block" style="cursor:pointer;" onmouseover="showtip(\''.$l['tweet_vars'].'\', this)">'.$l['tweet_vars_link'].'</span>
			<input type="text" name="upgrade_tweet" id="upgrade_tweet" class="form-control" size="30" value="'.aPOSTval('upgrade_tweet', (!empty($globals['upgrade_tweet']) ? $globals['upgrade_tweet'] : $l['upgrade_tweet'])).'" />
		</div>
		
		<div class="form-group">
			<input type="checkbox" id="clone_tweet_off" name="clone_tweet_off" '.POSTchecked('clone_tweet_off', $globals['clone_tweet_off']).' />	
			<label class="sai-label" for="clone_tweet_off">'.$l['clone_tweet_off'].'</label>
			<span class="sai_exp2 mb-1 d-block">'.$l['clone_tweet_off_exp'].'</span>
		</div>

		<div class="form-group">
			<label for="clone_tweet" class="sai-label d-block">'.$l['clone_tweet_msg'].'</label>
			<span class="sai_exp2 mb-1 d-block">'.$l['clone_tweet_msg_exp'].'</span>
			<span class="sai_exp2 mb-1 d-block" style="cursor:pointer;" onmouseover="showtip(\''.$l['tweet_vars'].'\', this)">'.$l['tweet_vars_link'].'</span>
			<input type="text" name="clone_tweet" class="form-control" id="clone_tweet" size="30" value="'.aPOSTval('clone_tweet', (!empty($globals['clone_tweet']) ? $globals['clone_tweet'] : $l['clone_tweet'])).'" />
		</div>
		<div class="form-group">
			<input type="checkbox" id="staging_tweet_off" name="staging_tweet_off" '.POSTchecked('staging_tweet_off', $globals['staging_tweet_off']).' />	
			<label class="sai-label" for="staging_tweet_off">'.$l['staging_tweet_off'].'</label>
			<span class="sai_exp2 mb-1 d-block">'.$l['staging_tweet_off_exp'].'</span>
		</div>

		<div class="form-group">
			<label for="staging_tweet" class="sai-label d-block">'.$l['staging_tweet_msg'].'</label>
			<span class="sai_exp2 mb-1 d-block">'.$l['staging_tweet_msg_exp'].'</span>
			<span class="sai_exp2 mb-1 d-block" style="cursor:pointer;" onmouseover="showtip(\''.$l['tweet_vars'].'\', this)">'.$l['tweet_vars_link'].'</span>
			<input type="text" name="staging_tweet" class="form-control" id="staging_tweet" size="30" value="'.aPOSTval('staging_tweet', (!empty($globals['staging_tweet']) ? $globals['staging_tweet'] : $l['staging_tweet'])).'" />
		</div>
		<div class="form-group">
			<input type="checkbox" id="pushtolive_tweet_off" name="pushtolive_tweet_off" '.POSTchecked('pushtolive_tweet_off', $globals['pushtolive_tweet_off']).' />	
			<label class="sai-label" for="pushtolive_tweet_off">'.$l['pushtolive_tweet_off'].'</label>
			<span class="sai_exp2 mb-1 d-block">'.$l['pushtolive_tweet_off_exp'].'</span>
		</div>

		<div class="form-group">
			<label for="pushtolive_tweet" class="sai-label d-block">'.$l['pushtolive_tweet_msg'].'</label>
			<span class="sai_exp2 mb-1 d-block">'.$l['pushtolive_tweet_msg_exp'].'</span>
			<span class="sai_exp2 mb-1 d-block" style="cursor:pointer;" onmouseover="showtip(\''.$l['tweet_vars'].'\', this)">'.$l['tweet_vars_link'].'</span>
			<input type="text" name="pushtolive_tweet" class="form-control" id="pushtolive_tweet" size="30" value="'.aPOSTval('pushtolive_tweet', (!empty($globals['pushtolive_tweet']) ? $globals['pushtolive_tweet'] : $l['pushtolive_tweet'])).'" />
		</div>
		
		<div class="form-group">
			<input type="checkbox" id="restore_template_tweet_off" name="restore_template_tweet_off" '.POSTchecked('restore_template_tweet_off', $globals['restore_template_tweet_off']).' />	
			<label class="sai-label" for="restore_template_tweet_off">'.$l['restore_template_tweet_off'].'</label>
			<span class="sai_exp2 mb-1 d-block">'.$l['restore_template_tweet_off_exp'].'</span>
		</div>

		<div class="form-group">
			<label for="clone_tweet" class="sai-label d-block">'.$l['restore_template_tweet_msg'].'</label>
			<span class="sai_exp2 mb-1 d-block">'.$l['restore_template_tweet_msg_exp'].'</span>
			<span class="sai_exp2 mb-1 d-block" style="cursor:pointer;" onmouseover="showtip(\''.$l['tweet_vars'].'\', this)">'.$l['tweet_vars_link'].'</span>
			<input type="text" name="restore_template_tweet" class="form-control" id="restore_template_tweet" size="30" value="'.aPOSTval('restore_template_tweet', (!empty($globals['restore_template_tweet']) ? $globals['restore_template_tweet'] : $l['restore_template_tweet'])).'" />
		</div>
		<p><input type="submit" class="flat-butt " name="editsettings" value="'.$l['edit_settings'].'"/></p>
	</div>
</div><br />

<div class="sai-card p-3">
	<div class="sai_main_head mb-2">
		<h2 class="sai-heading mb-2">'.$l['disable_soft'].'</h2>
		<hr class="sai_main_head_hr"/>
	</div>
	<div class="sai_form">
		<div class="form-group">
			<input type="checkbox" id="off" name="off" '.POSTchecked('off', $globals['off']).' />
			<label class="sai-label" for="off">'.$l['soft_off'].'</label>
			<span class="sai_exp2 mb-1 d-block">'.$l['soft_off_exp'].'</span>
		</div>
		
		<div class="form-group">
			<label for="off_subject" class="sai-label d-block">'.$l['off_sub'].'</label><br />
			<input type="text" name="off_subject" class="form-control" id="off_subject" size="30" value="'.aPOSTval('off_subject', $globals['off_subject']).'" />
		</div>
		
		<div class="form-group">
			<label for="off_message" class="sai-label d-block">'.$l['off_message'].'</label><br />
			<textarea name="off_message" class="form-control" cols="30" rows="6">'.aPOSTval('off_message', $globals['off_message']).'</textarea>
		</div><br />
		<p><input type="submit" class="flat-butt " name="editsettings" value="'.$l['edit_settings'].'"/></p>
	</div><br />
</div>';
}
	
echo '</div>
	
<div class="col-12 col-lg-6">
	<div class="sai-card p-3">
		<div class="sai_main_head mb-2">
			<h2 class="sai-heading mb-2">'.$l['end_user_set'].'</h2>
			<hr class="sai_main_head_hr"/>
		</div>
		<div class="sai_form">
			<div class="form-group">
				<input type="checkbox" id="no_prefill"  name="no_prefill" '.POSTchecked('no_prefill', @$globals['no_prefill']).' />
				<label class="sai-label" for="no_prefill">'.$l['no_prefill'].'</label>
				<span class="sai_exp2 d-block mb-1">'.$l['no_prefill_exp'].'</span>				
			</div>
		
			<div class="form-group">
				<input type="checkbox" id="no_indir" name="no_indir" '.POSTchecked('no_indir', @$globals['no_indir']).' />		
				<label class="sai-label" for="no_indir">'.$l['no_indir'].'</label>
				<span class="sai_exp2 d-block mb-1">'.$l['no_indir_exp'].'</span>
			</div>
		
			<div class="form-group">
				<input type="checkbox" id="random_username" name="random_username" '.POSTchecked('random_username', @$globals['random_username']).' />	
				<label class="sai-label" for="random_username">'.$l['random_username'].'</label>
				<span class="sai_exp2 d-block mb-1">'.$l['random_username_exp'].'</span>
			</div>
		
			<div class="form-group">
				<input type="checkbox" id="random_pass" name="random_pass" '.POSTchecked('random_pass', @$globals['random_pass']).' />
				<label class="sai-label" for="random_pass">'.$l['random_pass'].'</label>
				<span class="sai_exp2 d-block mb-1">'.$l['random_pass_exp'].'</span>				
			</div>
			
			<div class="form-group">
				<input type="checkbox" id="random_dbprefix" name="random_dbprefix" '.POSTchecked('random_dbprefix', @$globals['random_dbprefix']).' />
				<label class="sai-label" for="random_dbprefix">'.$l['random_dbprefix'].'</label>
				<span class="sai_exp2 d-block mb-1">'.$l['random_dbprefix_exp'].'</span>
			</div>';
		
		if(!defined('SOFTRESELLER')){
			echo '<div class="form-group">
				<input type="checkbox" id="empty_username" name="empty_username" '.POSTchecked('empty_username', @$globals['empty_username']).' />	
				<label class="sai-label" for="empty_username">'.$l['empty_username'].'</label>
				<span class="sai_exp2 d-block mb-1">'.$l['empty_username_exp'].'</span>
			</div>

			<div class="form-group">
				<input type="checkbox" id="empty_pass" name="empty_pass" '.POSTchecked('empty_pass', @$globals['empty_pass']).' />	
				<label class="sai-label" for="empty_pass">'.$l['empty_pass'].'</label>
				<span class="sai_exp2 d-block mb-1">'.$l['empty_pass_exp'].'</span>
			</div>
			
			<div class="form-group">
				<input type="checkbox" id="empty_email" name="empty_email" '.POSTchecked('empty_email', @$globals['empty_email']).' />	
				<label class="sai-label" for="empty_email">'.$l['empty_email'].'</label>
				<span class="sai_exp2 d-block mb-1">'.$l['empty_email_exp'].'</span>
			</div>
			
			<div class="form-group">
				<input type="checkbox" id="gzip" name="gzip" '.POSTchecked('gzip', $globals['gzip']).' />
				<label class="sai-label" for="gzip">'.$l['comp_output'].'</label>
				<span class="sai_exp2 d-block mb-1">'.$l['comp_output_exp'].'</span>
			</div>';
		}
	
if(!empty($softpanel->native_ui)){
	echo '<div class="form-group">
		<input type="checkbox" id="panel_hf" name="panel_hf" size="30" '.POSTchecked('panel_hf', @$globals['panel_hf']).' />		
		<label class="sai-label" for="panel_hf">'.$l['panel_hf'].'</label><br />
		<span class="sai_exp2 d-block mb-1">'.$l['panel_hf_exp'].'</span>
	</div>';
}

if(!defined('SOFTRESELLER')){
	echo '<div class="form-group">
		<input type="checkbox" id="show_cscript_in_top" name="show_cscript_in_top" '.POSTchecked('show_cscript_in_top', @$globals['show_cscript_in_top']).' />
		<label class="sai-label" for="show_cscript_in_top">'.$l['show_cscript_in_top'].'</label>
		<span class="sai_exp2 d-block mb-1">'.$l['show_cscript_in_top_exp'].'</span>			
	</div>';
		
	if(!empty($softpanel->user_mod_dir)){
		echo '<div class="form-group">
			<input type="checkbox" id="user_mod_dir" name="user_mod_dir" '.POSTchecked('user_mod_dir', $globals['user_mod_dir']).' />
			<label class="sai-label" for="user_mod_dir">'.$l['user_mod_dir'].'</label>
			<span class="sai_exp2 d-block mb-1">'.$l['user_mod_dir_exp'].'</span>
		</div>';
		
		if($globals['softpanel'] == 'cpanel'){
			echo '<div class="form-group">
				<input type="checkbox" id="nat_config" name="nat_config" '.POSTchecked('nat_config', $globals['nat_config']).' />			
				<label class="sai-label" for="nat_config">'.$l['nat_config'].'</label>
				<span class="sai_exp2 d-block mb-1">'.$l['nat_config_exp'].'</span>
			</div>';
		}
	}
	
	echo '<div class="form-group">
			<label for="pass_strength" class="sai-label d-block">'.$l['pass_strength'].'</label>
			<span class="sai_exp2 d-block mb-1">'.$l['pass_strength_exp'].'</span>
			<input type="text" name="pass_strength" id="pass_strength" class="form-control" size="30" value="'.aPOSTval('pass_strength', $globals['pass_strength']).'" />
		</div>
		
		<div class="form-group">			
			<label for="admin_prefix" class="sai-label d-block">'.$l['admin_prefix'].'</label>
			<span class="sai_exp2 d-block mb-1">'.$l['admin_prefix_exp'].'</span>
			<select id="admin_prefix" name="admin_prefix" onchange="show_ud(this);" class="form-control">
				<option value="" '.((isset($_POST['admin_prefix']) && $_POST['admin_prefix'] == "") ? 'selected="selected"' : ((!isset($_POST['admin_prefix']) && $globals['admin_prefix'] == "") ? 'selected="selected"' : '')).'>'.$l['ap_none'].'</option>
				
				<option value="username" '.((isset($_POST['admin_prefix']) && $_POST['admin_prefix'] == "username") ? 'selected="selected"' : ((!isset($_POST['admin_prefix']) && $globals['admin_prefix'] == "username") ? 'selected="selected"' : '')).'>'.$l['ap_username'].'</option>
				
				<option value="domain" '.((isset($_POST['admin_prefix']) && $_POST['admin_prefix'] == "domain") ? 'selected="selected"' : ((!isset($_POST['admin_prefix']) && $globals['admin_prefix'] == "domain") ? 'selected="selected"' : '')).'>'.$l['ap_domain'].'</option>
				
				<option value="user_defined" '.((isset($_POST['admin_prefix']) && $_POST['admin_prefix'] == "user_defined") ? 'selected="selected"' : ((!isset($_POST['admin_prefix']) && $globals['admin_prefix'] != "username" && $globals['admin_prefix'] != "domain" && $globals['admin_prefix'] != "") ? 'selected="selected"' : '')).'>'.$l['ap_admin_defined'].'</option>
				
			</select>
			<input type="text" class="form-control" id="admin_prefix_ud" name="admin_prefix_ud" '.((!empty($_POST['admin_prefix_ud']) && $_POST['admin_prefix'] != "" && $_POST['admin_prefix'] != "username" && $_POST['admin_prefix'] != "domain") ? 'value="'.$_POST['admin_prefix_ud'].'" style=""' : ((!isset($_POST['admin_prefix']) && ($globals['admin_prefix'] != "username" && $globals['admin_prefix'] != "domain" && $globals['admin_prefix'] != "")) ? 'value="'.$globals['admin_prefix'].'" style=""' : 'style="display:none"')).' />
		</div>';

	// At the moment only for H-Sphere we are providing this option
	if($globals['softpanel'] == 'hsphere'){
		echo '<div class="form-group">
			<label for="ephp_bin" class="sai-label d-block">'.$l['ephp_bin'].'</label>
			<span class="sai_exp2 d-block mb-1">'.$l['ephp_bin_exp'].sphpbin().'</span>
			<input type="text" name="ephp_bin" class="form-control" id="ephp_bin" value="'.aPOSTval('ephp_bin', $globals['ephp_bin']).'" size="30" />				
		</div>';
	}
}

if($globals['softpanel'] == 'ampps'){
	echo '<div class="form-group">
			<label for="adomain_path" class="sai-label d-block">'.$l['default_domain_path'].'</label>
			<span class="sai_exp2 d-block mb-1">'.$l['default_domain_path_exp'].'</span>
			<input type="text" name="adomain_path" id="adomain_path" class="form-control" size="30" value="'.aPOSTval('adomain_path', $globals['adomain_path']).'" />
		</div>';
}

if($globals['softpanel'] != 'ampps' && !empty($globals['ampps_enabled']) && !empty($globals['lictype'])){
	echo '<div class="form-group">
			<input type="checkbox" name="no_ampps" '.POSTchecked('no_ampps', @$globals['no_ampps']).' />
			<label class="sai-label">'.$l['no_ampps_download'].'</label>
			<span class="sai_exp2 d-block mb-1">'.$l['no_ampps_download_exp'].'</span>
		</div>';
}

if(!defined('SOFTRESELLER')){
	echo '<div class="form-group">
			<input type="checkbox" id="no_strong_mysql_pass" name="no_strong_mysql_pass" '.POSTchecked('no_strong_mysql_pass', @$globals['no_strong_mysql_pass']).' />
			<label class="sai-label" for="no_strong_mysql_pass">'.$l['no_strong_mysql_pass'].'</label>
			<span class="sai_exp2 d-block mb-1">'.$l['no_strong_mysql_pass_exp'].'</span>
		</div>
	
		<div class="form-group">			
			<label for="dbpass_len" class="sai-label d-block">'.$l['dbpass_len'].'</label>
			<span class="sai_exp2 d-block mb-1">'.$l['dbpass_len_exp'].'</span>
			<input type="text" id="dbpass_len" name="dbpass_len" class="form-control" value="'.aPOSTval('dbpass_len', @$globals['dbpass_len']).'" onblur="isNumber(this)"/>
		</div>
	
		<div class="form-group">
			<input type="checkbox" name="pre_download_all" '.POSTchecked('pre_download_all', @$globals['pre_download_all']).' />
			<label class="sai-label">'.$l['pre_download_all'].'</label>
			<span class="sai_exp2 d-block mb-1">'.$l['pre_download_all_exp'].'</span>			
		</div>

		<div class="form-group">
			<input type="checkbox" id="enc_db_pass" name="enc_db_pass" '.POSTchecked('enc_db_pass', @$globals['enc_db_pass']).' />
			<label class="sai-label" for="enc_db_pass">'.$l['enc_db_pass'].'</label>
			<span class="sai_exp2 d-block mb-1">'.$l['enc_db_pass_exp'].'</span>			
		</div>

		<div class="form-group">
			<input type="checkbox" id="disable_branches" name="disable_branches" '.POSTchecked('disable_branches', @$globals['disable_branches']).' />	
			<label class="sai-label" for="disable_branches">'.$l['disable_branches'].'</label>
			<span class="sai_exp2 d-block mb-1">'.$l['disable_branches_exp'].'</span>
		</div>';

	if(asperapp(1, 0, 0)){ // Only for Softaculous
	echo '<div class="form-group">
			<label class="sai-label d-block" for="default_landing">'.$l['default_landing'].'</label>
			<span class="sai_exp2 d-block mb-1">'.$l['default_landing_exp'].'</span>
			<select name="default_landing" class="form-control" id="default_landing">
				<option value="" '.(!isset($_POST['default_landing']) && empty($globals['default_landing']) ? 'selected="selected"' : '').'>'.$l['top_scripts'].'</option>
				<option value="wordpress" '.(isset($_POST['default_landing']) && $_POST['default_landing'] == 'wordpress' ? 'selected="selected"' : ($globals['default_landing'] == 'wordpress' ? 'selected="selected"' : '')).'>'.$l['wp_manager'].'</option>
				<option value="installations" '.(isset($_POST['default_landing']) && $_POST['default_landing'] == 'installations' ? 'selected="selected"' : ($globals['default_landing'] == 'installations' ? 'selected="selected"' : '')).'>'.$l['all_ins'].'</option>
				<option value="outdated_ins" '.(isset($_POST['default_landing']) && $_POST['default_landing'] == 'outdated_ins' ? 'selected="selected"' : ($globals['default_landing'] == 'outdated_ins' ? 'selected="selected"' : '')).'>'.$l['outdated_ins'].'</option>
				<option value="all_scripts" '.(isset($_POST['default_landing']) && $_POST['default_landing'] == 'all_scripts' ? 'selected="selected"' : ($globals['default_landing'] == 'all_scripts' ? 'selected="selected"' : '')).'>'.$l['all_scripts'].'</option>
			</select>
		</div>';
	}

	if(aefer()){
	echo '<div class="form-group">
			<input type="checkbox" id="no_ftp_encrypted" name="no_ftp_encrypted" '.POSTchecked('no_ftp_encrypted', @$globals['no_ftp_encrypted']).' />
			<label class="sai-label" for="no_ftp_encrypted">'.$l['no_ftp_encrypted'].'</label>
			<span class="sai_exp2 d-block mb-1">'.$l['no_ftp_encrypted_exp'].'</span>
		</div>
		
		<div class="form-group">
			<input type="checkbox" id="no_add_domain" name="no_add_domain" '.POSTchecked('no_add_domain', @$globals['no_add_domain']).' />
			<label class="sai-label" for="no_add_domain">'.$l['no_add_domain'].'</label><br />
			<span class="sai_exp2 d-block mb-1">'.$l['no_add_domain_exp'].'</span>
		</div>
		
		<div class="form-group">
			<input type="checkbox" id="no_prefill_db" name="no_prefill_db" '.POSTchecked('no_prefill_db', @$globals['no_prefill_db']).' />
			<label class="sai-label" for="no_prefill_db">'.$l['no_prefill_db'].'</label>
			<span class="sai_exp2 d-block mb-1">'.$l['no_prefill_db_exp'].'</span>
		</div>';
	}

	if(aefer() || ent()){
	echo '<div class="form-group">
			<label for="session_timeout" class="sai-label d-block">'.$l['session_timeout'].'</label>
			<span class="sai_exp2 d-block mb-1">'.$l['session_timeout_exp'].'</span>
			<input type="text" id="session_timeout" name="session_timeout" class="form-control" value="'.aPOSTval('session_timeout', @$globals['session_timeout']).'" onblur="isNumber(this)"/>
		</div>
	
		<div class="form-group">
			<input type="checkbox" id="sync_domains" name="sync_domains" '.POSTchecked('sync_domains', @$globals['sync_domains']).' />
			<label class="sai-label" for="sync_domains">'.$l['sync_domains'].'</label>
			<span class="sai_exp2 d-block mb-1">'.(aefer() ? $l['sync_domains_exp_remote'] : $l['sync_domains_exp_ent']).'</span>
		</div>';
	}		
		
	echo '<div class="form-group">
			<input type="checkbox" id="no_prefill_pass" name="no_prefill_pass" '.POSTchecked('no_prefill_pass', @$globals['no_prefill_pass']).' />		
			<label class="sai-label" for="no_prefill_pass">'.$l['no_prefill_pass'].'</label>
			<span class="sai_exp2 d-block mb-1">'.$l['no_prefill_pass_exp'].'</span>
		</div>
		
		<div class="form-group">
			<input type="checkbox" id="disable_sign_on" name="disable_sign_on" '.POSTchecked('disable_sign_on', @$globals['disable_sign_on']).' />	
			<label class="sai-label" for="disable_sign_on">'.$l['disable_sign_on'].'</label>
			<span class="sai_exp2 d-block mb-1">'.$l['disable_sign_on_exp'].'</span>
		</div>
		
		<div class="form-group">
			<input type="checkbox" id="use_eu_username" name="use_eu_username" '.POSTchecked('use_eu_username', @$globals['use_eu_username']).' />	
			<label class="sai-label" for="use_eu_username">'.$l['use_eu_username'].'</label>
			<span class="sai_exp2 d-block mb-1">'.$l['use_eu_username_exp'].'</span>
		</div>
		
		<div class="form-group">
			<input type="checkbox" id="use_eu_email" name="use_eu_email" '.POSTchecked('use_eu_email', @$globals['use_eu_email']).' />
			<label class="sai-label" for="use_eu_email">'.$l['use_eu_email'].'</label>
			<span class="sai_exp2 d-block mb-1">'.$l['use_eu_email_exp'].'</span>
		</div>
		
		<div class="form-group">
			<input type="checkbox" id="off_available_space" name="off_available_space" '.POSTchecked('off_available_space', @$globals['off_available_space']).' />
			<label class="sai-label" for="off_available_space">'.$l['off_available_space'].'</label>
			<span class="sai_exp2 d-block mb-1">'.$l['off_available_space_exp'].'</span>
		</div>
		
		<div class="form-group">
			<input type="checkbox" id="off_checkhttps" name="off_checkhttps" '.POSTchecked('off_checkhttps', @$globals['off_checkhttps']).' />	
			<label class="sai-label" for="off_checkhttps">'.$l['off_checkhttps'].'</label>
			<span class="sai_exp2 d-block mb-1">'.$l['off_checkhttps_exp'].'</span>
		</div>
		
		<div class="form-group">
			<input type="checkbox" id="quick_install_default" name="quick_install_default" '.POSTchecked('quick_install_default', @$globals['quick_install_default']).' />	
			<label class="sai-label" for="quick_install_default">'.$l['quick_install_default'].'</label>
			<span class="sai_exp2 d-block mb-1">'.$l['quick_install_default_exp'].'</span>
		</div>
		
		<div class="form-group">
			<input type="checkbox" id="off_custom_install" name="off_custom_install" '.POSTchecked('off_custom_install', @$globals['off_custom_install']).' />	
			<label class="sai-label" for="off_custom_install">'.$l['off_custom_install'].'</label>
			<span class="sai_exp2 d-block mb-1">'.$l['off_custom_install_exp'].'</span>
		</div>';
		
	if(!aefer() && !ent()){
	echo'<div class="form-group">
			<input type="checkbox" id="sync_ins_list" name="sync_ins_list" '.POSTchecked('sync_ins_list', @$globals['sync_ins_list']).' />		
			<label class="sai-label" for="sync_ins_list">'.$l['sync_ins_list'].'</label>
			<span class="sai_exp2 d-block mb-1">'.$l['sync_ins_list_exp'].'</span>
		</div>
	
		<div class="form-group">
			<input type="checkbox" id="sync_ins_real_ver" name="sync_ins_real_ver" '.POSTchecked('sync_ins_real_ver', @$globals['sync_ins_real_ver']).' />	
			<label class="sai-label" for="sync_ins_real_ver">'.$l['sync_ins_real_ver'].'</label>
			<span class="sai_exp2 d-block mb-1">'.$l['sync_ins_real_ver_exp'].'</span>
		</div>
		
		<div class="form-group">
			<label for="max_staging" class="sai-label d-block">'.$l['max_staging'].'</label>
			<span class="sai_exp2 d-block mb-1">'.$l['max_staging_exp'].'</span>
			<input type="text" name="max_staging" id="max_staging" class="form-control" size="30" value="'.aPOSTval('max_staging', $globals['max_staging']).'" />			
		</div>

		<div class="form-group">
			<label for="screenshot_frequency" class="sai-label">'.$l['screenshot_frequency'].'</label>
			<span class="sai_exp2 d-block mb-1">'.$l['screenshot_frequency_exp'].'</span>
			<div class="input-group position-relative w-75">
				<input type="number" id="screenshot_frequency" class="form-control" aria-describedby="screenshot_frequency" name="screenshot_frequency" value="'.aPOSTval('screenshot_frequency', @$globals['screenshot_frequency']).'" onblur="isNumber(this)"/ >
				<label class="input-group-addon sai-label after-text" id="screenshot_frequency">hours</label>
			</div>
		</div>';
	}
}

echo '<p><input type="submit" class="flat-butt " name="editsettings" value="'.$l['edit_settings'].'"/></p>
	</div>
</div><br />';

if(!defined('SOFTRESELLER')){
echo '<div class="sai-card p-3">
<div class="sai_main_head mb-2">
	<h2 class="sai-heading mb-2">'.$l['backup_set'].'</h2>
	<hr class="sai_main_head_hr"/>
</div>
	<div class="sai_form">
		<div class="form-group">
			<label class="sai-label d-block">'.$l['disable_auto_backup'].'</label>
			<span class="sai_exp2 d-block mb-1">'.$l['disable_auto_backup_exp'].'</span>		
			
			<div class="row">
				<div class="col-12">
					<p class="sai-details">
						<input type="checkbox" id="disable_auto_backup" name="disable_auto_backup" '.POSTchecked('disable_auto_backup', @$globals['disable_auto_backup']).' />
						<span class="sai-label ml-1"><label class="sai-label" for="disable_auto_backup">'.$l['auto_backup_all'].'</label></span>
					</p>	
					<p class="sai-details">
						<input type="checkbox" id="disable_auto_backup_daily" name="disable_auto_backup_daily" '.POSTchecked('disable_auto_backup_daily', @$globals['disable_auto_backup_daily']).' />
						<span class="sai-label ml-1"><label class="sai-label" for="disable_auto_backup_daily">'.$l['auto_backup_daily'].'</label></span>
					</p>
					<p class="sai-details">
						<input type="checkbox" id="disable_auto_backup_weekly" name="disable_auto_backup_weekly" '.POSTchecked('disable_auto_backup_weekly', @$globals['disable_auto_backup_weekly']).' />
						<span class="sai-label ml-1"><label class="sai-label" for="disable_auto_backup_weekly">'.$l['auto_backup_weekly'].'</label></span>
					</p>
					<p class="sai-details">
						<input type="checkbox" id="disable_auto_backup_monthly" name="disable_auto_backup_monthly" '.POSTchecked('disable_auto_backup_monthly', @$globals['disable_auto_backup_monthly']).' />
						<span class="sai-label ml-1"><label class="sai-label" for="disable_auto_backup_monthly">'.$l['auto_backup_monthly'].'</label></span>
					</p>
					<p class="sai-details">
						<input type="checkbox" id="disable_auto_backup_custom" name="disable_auto_backup_custom" '.POSTchecked('disable_auto_backup_custom', @$globals['disable_auto_backup_custom']).' />
						<span class="sai-label ml-1"><label class="sai-label" for="disable_auto_backup_custom">'.$l['auto_backup_custom'].'</label></span>
					</p>
				</div>
			</div>
		</div>';

	if(!aefer() && !ent()){	
	echo'<div class="form-group">
			<label class="sai-label d-block" for="auto_backup">'.$l['auto_backup'].'</label>
			<span class="sai_exp2 d-block mb-1">'.$l['auto_backup_exp'].'</span>
		
			<select name="auto_backup" class="form-control" id="auto_backup">
				<option value="0" '.POSTselect('auto_backup', '0', 1).'>'.$l['no_backup'].'</option>
				<option value="daily" '.POSTselect('auto_backup', 'daily', ($globals['auto_backup'] == 'daily' ? 1 : '')).'>'.$l['daily'].'</option>
				<option value="weekly" '.POSTselect('auto_backup', 'weekly', ($globals['auto_backup'] == 'weekly' ? 1 : '')).'>'.$l['weekly'].'</option>
				<option value="monthly" '.POSTselect('auto_backup', 'monthly', ($globals['auto_backup'] == 'monthly' ? 1 : '')).'>'.$l['monthly'].'</option>
			</select>
		</div>
		
		<div class="form-group">
			<label class="sai-label d-block" for="auto_backup_rotation">'.$l['backup_rotation'].'</label>
			<span class="sai_exp2 d-block mb-1">'.$l['backup_rotation_exp'].'</span>
			<select name="auto_backup_rotation" id="auto_backup_rotation" class="form-control">';
				for($i=0; $i<=10; $i++){
					echo '<option value="'.$i.'" '.(empty($_POST['auto_backup_rotation']) && $globals['auto_backup_rotation'] == $i ? 'selected="selected"' : (trim($_POST['auto_backup_rotation']) == $i ? 'selected="selected"' : '') ).'>'.(empty($i) ? $l['auto_backup_default'] : ($i == -1 ? $l['auto_backup_unlimited'] : $i)).'</option>';        
				}
				echo '<option value="-1" '.(empty($_POST['auto_backup_rotation']) && $globals['auto_backup_rotation'] == -1 ? 'selected="selected"' : (trim($_POST['auto_backup_rotation']) == -1 ? 'selected="selected"' : '') ).'>'.$l['auto_backup_unlimited'].'</option>';
			echo '</select>
		</div>';
	}
	echo'<div class="form-group">
			<label class="sai-label d-block" for"auto_backup_limit">'.$l['auto_backup_limit'].'</label>
			<span class="sai_exp2 d-block mb-1">'.$l['auto_backup_limit_exp'].'</span>
			<select name="auto_backup_limit" id="auto_backup_limit" class="form-control">';    
				for($i=0; $i<=10; $i++){
					echo '<option value="'.$i.'" '.(empty($_POST['auto_backup_limit']) && $globals['auto_backup_limit'] == $i ? 'selected="selected"' : (trim($_POST['auto_backup_limit']) == $i ? 'selected="selected"' : '') ).'>'.(empty($i) ? $l['auto_backup_unlimited'] : $i).'</option>';        
				}	
			echo '</select>
		</div>
	
		<div class="form-group">		
			<label class="sai-label d-block" for="max_backups">'.$l['max_backups'].'</label>
			<span class="sai_exp2 d-block mb-1">'.$l['max_backups_exp'].'</span>			
			<select name="max_backups" id="max_backups" class="form-control">';
				for($i=0; $i<=10; $i++){
					echo '<option value="'.$i.'" '.(empty($_POST['max_backups']) && $globals['max_backups'] == $i ? 'selected="selected"' : (trim($_POST['max_backups']) == $i ? 'selected="selected"' : '') ).'>'.(empty($i) ? $l['max_backups_unlimited'] : $i).'</option>';        
				}	
			echo '</select>
		</div>
		
		<div class="form-group">
			<label class="sai-label d-block" for="max_backups_local">'.$l['max_backups_local'].'</label>
			<span class="sai_exp2 d-block mb-1">'.$l['max_backups_local_exp'].'</span>
			<select name="max_backups_local" id="max_backups_local" class="form-control">';
			for($i=0; $i<=10; $i++){
					echo '<option value="'.$i.'" '.(empty($_POST['max_backups_local']) && $globals['max_backups_local'] == $i ? 'selected="selected"' : (trim($_POST['max_backups_local']) == $i ? 'selected="selected"' : '') ).'>'.(empty($i) ? $l['max_backups_unlimited'] : $i).'</option>';        
				}	
			echo '</select>
		</div>
		
		<div class="form-group">		
			<label class="sai-label d-block" for="max_insid_backups">'.$l['max_insid_backups'].'</label>
			<span class="sai_exp2 d-block mb-1">'.$l['max_insid_backups_exp'].'</span>			
			<select name="max_insid_backups" id="max_insid_backups" class="form-control">';
				for($i=0; $i<=10; $i++){
					echo '<option value="'.$i.'" '.(empty($_POST['max_insid_backups']) && $globals['max_insid_backups'] == $i ? 'selected="selected"' : (trim($_POST['max_insid_backups']) == $i ? 'selected="selected"' : '') ).'>'.(empty($i) ? $l['max_backups_unlimited'] : $i).'</option>';        
				}	
			echo '</select>
		</div>
		
		<div class="form-group">
			<label class="sai-label d-block" for="max_insid_backups_local">'.$l['max_insid_backups_local'].'</label>
			<span class="sai_exp2 d-block mb-1">'.$l['max_insid_backups_local_exp'].'</span>
			<select name="max_insid_backups_local" id="max_insid_backups_local" class="form-control">';
			for($i=0; $i<=10; $i++){
					echo '<option value="'.$i.'" '.(empty($_POST['max_insid_backups_local']) && $globals['max_insid_backups_local'] == $i ? 'selected="selected"' : (trim($_POST['max_insid_backups_local']) == $i ? 'selected="selected"' : '') ).'>'.(empty($i) ? $l['max_backups_unlimited'] : $i).'</option>';        
				}	
			echo '</select>
		</div>';

		if(!aefer() && !ent()){
		echo '<div class="form-group">
				<label for="backups_expire" class="sai-label d-block">'.$l['backups_expire'].'</label>
				<span class="sai_exp2 d-block mb-1">'.$l['backups_expire_exp'].'</span>
				<div class="input-group position-relative w-75">
					<input type="text" id="backups_expire" class="form-control" aria-describedby="backups_expire" name="backups_expire" value="'.aPOSTval('backups_expire', @$globals['backups_expire']).'" onblur="isNumber(this)"/ >
					<span class="input-group-addon after-text sai-label" id="backups_expire">days</span>
				</div>
			</div>';
		}
		
	echo '<div class="form-group">
			<input type="checkbox" id="disable_backup_restore" name="disable_backup_restore" size="30" '.POSTchecked('disable_backup_restore', @$globals['disable_backup_restore']).' />			
			<label class="sai-label" for="disable_backup_restore">'.$l['disable_backup_restore'].'</label>
			<span class="sai_exp2 d-block mb-1">'.$l['disable_backup_restore_exp'].'</span>
		</div>
		
		<div class="form-group">
			<input type="checkbox" id="disable_backup_upgrade" name="disable_backup_upgrade" '.POSTchecked('disable_backup_upgrade', @$globals['disable_backup_upgrade']).' />
			<label class="sai-label" for="disable_backup_upgrade">'.$l['disable_backup_upgrade'].'</label>
			<span class="sai_exp2 d-block mb-1">'.$l['disable_backup_upgrade_exp'].'</span>
		</div>
		
		<div class="form-group">
			<label for="set_backup_dir" class="sai-label">'.$l['set_backup_dir'].'</label>
			<span class="sai_exp2 d-block mb-1">'.$l['set_backup_dir_exp'].'</span>
			<input type="text" name="set_backup_dir" id="set_backup_dir" class="form-control" size="20" value="'.aPOSTval('set_backup_dir', @$globals['set_backup_dir']).'" />			
		</div>
		
		<div class="form-group">
			<input type="checkbox" name="upgrade_backup_on" id="upgrade_backup_on" '.POSTchecked('upgrade_backup_on', @$globals['upgrade_backup_on']).' />	
			<label for="upgrade_backup_on" class="sai-label">'.$l['upgrade_backup_on'].'</label>
			<span class="sai_exp2 d-block mb-1">'.$l['upgrade_backup_on_exp'].'</span>
		</div>
		
		<div class="form-group">
			<label class="sai-label">'.$l['disable_backup'].'</label><br />
			<span class="sai_exp2 d-block mb-1">'.$l['disable_backup_exp'].'</span>
			<div class="row">
				<div class="col-6">
					<p class="sai-details">
						<input type="checkbox" id="disable_local_backup" name="disable_local_backup" '.POSTchecked('disable_local_backup', @$globals['disable_local_backup']).' />
						<span class="sai-label ml-1"><label class="sai-label" for="disable_local_backup">'.$l['disable_local_backup'].'</label></span>
					</p>
					<p class="sai-details">
						<input type="checkbox" id="disable_backup_ftp" name="disable_backup_ftp" '.POSTchecked('disable_backup_ftp', @$globals['disable_backup_ftp']).' />
						<span class="sai-label ml-1"><label class="sai-label" for="disable_backup_ftp">'.$l['remote_backup_ftp'].'</label></span>
					</p>
					<p class="sai-details">
						<input type="checkbox" id="disable_backup_softftpes" name="disable_backup_softftpes" '.POSTchecked('disable_backup_softftpes', @$globals['disable_backup_softftpes']).' />
						<span class="sai-label ml-1"><label class="sai-label" for="disable_backup_softftpes">'.$l['remote_backup_ftps'].'</label></span>
					</p>
					<p class="sai-details">
						<input type="checkbox" id="disable_backup_softsftp" name="disable_backup_softsftp" '.POSTchecked('disable_backup_softsftp', @$globals['disable_backup_softsftp']).' />
						<span class="sai-label ml-1"><label class="sai-label" for="disable_backup_softsftp">'.$l['remote_backup_sftp'].'</label></span>
					</p>
					<p class="sai-details">
						<input type="checkbox" id="disable_backup_aws" name="disable_backup_aws" '.POSTchecked('disable_backup_aws', @$globals['disable_backup_aws']).' />
						<span class="sai-label ml-1"><label class="sai-label" for="disable_backup_aws">'.$l['remote_backup_aws'].'</label></span>
					</p>
				</div>
				<div class="col-6">
					<p class="sai-details">
						<input type="checkbox" id="off_rbackup" name="off_rbackup" '.POSTchecked('off_rbackup', @$globals['off_rbackup']).' />
						<span class="sai-label ml-1"><label class="sai-label" for="off_rbackup">'.$l['off_rbackup'].'</label></span>
					</p>
					<p class="sai-details">
						<input type="checkbox" id="disable_backup_dropbox" name="disable_backup_dropbox" '.POSTchecked('disable_backup_dropbox', @$globals['disable_backup_dropbox']).' />
						<span class="sai-label ml-1"><label class="sai-label" for="disable_backup_dropbox">'.$l['remote_backup_dropbox'].'</label></span>
					</p>
					<p class="sai-details">
						<input type="checkbox" id="disable_backup_gdrive" name="disable_backup_gdrive" '.POSTchecked('disable_backup_gdrive', @$globals['disable_backup_gdrive']).' />
						<span class="sai-label ml-1"><label class="sai-label" for="disable_backup_gdrive">'.$l['remote_backup_gdrive'].'</label></span>
					</p>
					<p class="sai-details">
						<input type="checkbox" id="disable_backup_webdav" name="disable_backup_webdav" '.POSTchecked('disable_backup_webdav', @$globals['disable_backup_webdav']).' />
						<span class="sai-label ml-1"><label class="sai-label" for="disable_backup_webdav">'.$l['remote_backup_webdav'].'</label></span>
					</p>
					<p class="sai-details">
						<input type="checkbox" id="disable_backup_onedrive" name="disable_backup_onedrive" '.POSTchecked('disable_backup_onedrive', @$globals['disable_backup_onedrive']).' />
						<span class="sai-label ml-1"><label class="sai-label" for="disable_backup_onedrive">'.$l['remote_backup_onedrive'].'</label></span>
					</p>
				</div>
			</div>
		</div>
		
		<div class="form-group">
			<input type="checkbox" name="off_backup_au" id="off_backup_au" '.POSTchecked('off_backup_au', @$globals['off_backup_au']).' />	
			<label for="off_backup_au" class="sai-label">'.$l['off_backup_au'].'</label>
			<span class="sai_exp2 d-block mb-1">'.$l['off_backup_au_exp'].'</span>
		</div><br />
		
		<div class="form-group">
				<input type="checkbox" name="off_push_to_live_backup" id="off_push_to_live_backup" '.POSTchecked('off_push_to_live_backup', @$globals['off_push_to_live_backup']).' />	
				<label for="off_push_to_live_backup" class="sai-label">'.$l['off_push_to_live_backup'].'</label>
				<span class="sai_exp2 d-block mb-1">'.$l['off_push_to_live_backup_exp'].'</span>
		</div><br />
		<p><input type="submit" class="flat-butt " name="editsettings" value="'.$l['edit_settings'].'"/></p>
	</div>
</div><br />';
}

echo '<div class="sai-card p-3">
	<div class="sai_main_head mb-2">
		<h2 class="sai-heading mb-2">'.$l['email_set'].'</h2>
		<hr class="sai_main_head_hr"/>
	</div>
	<div class="sai_form">
		<div class="form-group">
			<input type="checkbox" name="off_email_link" '.POSTchecked('off_email_link', $globals['off_email_link']).' />	
			<label class="sai-label">'.$l['off_email_link'].'</label>
			<span class="sai_exp2 d-block mb-1">'.$l['off_email_link_exp'].'</span>			
		</div>';

if(!defined('SOFTRESELLER')){
echo '<div class="form-group">
		<input type="checkbox" id="off_remove_mail" name="off_remove_mail" '.POSTchecked('off_remove_mail', $globals['off_remove_mail']).' />
		<label class="sai-label" for="off_remove_mail">'.$l['off_remove_mail'].'</label>
		<span class="sai_exp2 d-block mb-1">'.$l['off_remove_mail_exp'].'</span>
	</div>

	<div class="form-group">
		<input type="checkbox" id="off_install_mail" name="off_install_mail" '.POSTchecked('off_install_mail', $globals['off_install_mail']).' />		
		<label class="sai-label" for="off_install_mail">'.$l['off_install_mail'].'</label>
		<span class="sai_exp2 d-block mb-1">'.$l['off_install_mail_exp'].'</span>
	</div>
	
	<div class="form-group">	
		<input type="checkbox" id="off_edit_mail" name="off_edit_mail" '.POSTchecked('off_edit_mail', $globals['off_edit_mail']).' />	
		<label class="sai-label" for="off_edit_mail">'.$l['off_edit_mail'].'</label>
		<span class="sai_exp2 d-block mb-1">'.$l['off_edit_mail_exp'].'</span>
	</div>
	
	<div class="form-group">
		<input type="checkbox" id="off_clone_mail" name="off_clone_mail" '.POSTchecked('off_clone_mail', $globals['off_clone_mail']).' />	
		<label class="sai-label" for="off_clone_mail">'.$l['off_clone_mail'].'</label>
		<span class="sai_exp2 d-block mb-1">'.$l['off_clone_mail_exp'].'</span>
	</div>
	
	<div class="form-group">
		<input type="checkbox" id="off_staging_mail" name="off_staging_mail" '.POSTchecked('off_staging_mail', $globals['off_staging_mail']).' />	
		<label class="sai-label" for="off_staging_mail">'.$l['off_staging_mail'].'</label>
		<span class="sai_exp2 d-block mb-1">'.$l['off_staging_mail_exp'].'</span>
	</div>
	
	<div class="form-group">
		<input type="checkbox" id="eu_email_off" name="eu_email_off" '.POSTchecked('eu_email_off', @$globals['eu_email_off']).' />
		<label class="sai-label" for="eu_email_off">'.$l['eu_email_off'].'</label>
		<span class="sai_exp2 d-block mb-1">'.$l['eu_email_off_exp'].'</span>
	</div>
	
	<div class="form-group">
		<input type="checkbox" id="off_backup_mail" name="off_backup_mail" '.POSTchecked('off_backup_mail', $globals['off_backup_mail']).' />
		<label class="sai-label" for="off_backup_mail">'.$l['off_backup_mail'].'</label>
		<span class="sai_exp2 d-block mb-1">'.$l['off_backup_mail_exp'].'</span>		
	</div>
	
	<div class="form-group">
		<input type="checkbox" id="off_restore_mail" name="off_restore_mail" '.POSTchecked('off_restore_mail', $globals['off_restore_mail']).' />
		<label class="sai-label" for="off_restore_mail">'.$l['off_restore_mail'].'</label>
		<span class="sai_exp2 d-block mb-1">'.$l['off_restore_mail_exp'].'</span>
	</div>
	
	<div class="form-group">
		<input type="checkbox" id="off_template_mail" name="off_template_mail" '.POSTchecked('off_template_mail', $globals['off_template_mail']).' />
		<label class="sai-label" for="off_template_mail">'.$l['off_template_mail'].'</label>
		<span class="sai_exp2 d-block mb-1">'.$l['off_template_mail_exp'].'</span>		
	</div>
	
	<div class="form-group">
		<input type="checkbox" id="off_restore_template_mail" name="off_restore_template_mail" '.POSTchecked('off_restore_template_mail', $globals['off_restore_template_mail']).' />
		<label class="sai-label" for="off_restore_template_mail">'.$l['off_restore_template_mail'].'</label>
		<span class="sai_exp2 d-block mb-1">'.$l['off_restore_template_mail_exp'].'</span>
	</div>
	
	<div class="form-group">
		<input type="checkbox" id="off_import_mail" name="off_import_mail" '.POSTchecked('off_import_mail', $globals['off_import_mail']).' />
		<label class="sai-label" for="off_import_mail">'.$l['off_import_mail'].'</label>
		<span class="sai_exp2 d-block mb-1">'.$l['off_import_mail_exp'].'</span>
	</div>';
}

echo '<div class="form-group">
	<input type="checkbox" id="email_password" name="email_password" '.POSTchecked('email_password', $globals['email_password']).' />			
	<label class="sai-label" for="email_password">'.$l['email_password'].'</label><br />
	<span class="sai_exp2 d-block mb-1">'.$l['email_password_exp'].'</span>
</div>
	
	<div class="form-group">
		<label class="sai-label">'.$l['eu_default_email_settings'].'</label><br />
		<span class="sai_exp2 d-block mb-2">'.$l['eu_default_email_settings_exp'].'</span>
		<div class="row mt-1">
			<div class="col-12 col-lg-6">
				<span class="d-block">
					<input type="checkbox" id="eu_off_default_install_notify" name="eu_off_default_install_notify" '.(isset($_REQUEST['eu_off_default_install_notify']) || empty($globals['eu_off_default_install_notify']) ? 'checked="checked"' : '').'/>
					<label class="sai-label" for="eu_off_default_install_notify">'.$l['eu_off_default_install_notify'].'</label>
				</span>
				<span class="d-block">
					<input type="checkbox" id="eu_off_default_remove_notify" name="eu_off_default_remove_notify" '.(isset($_REQUEST['eu_off_default_remove_notify']) || empty($globals['eu_off_default_remove_notify']) ? 'checked="checked"' : '').' />
					<label class="sai-label" for="eu_off_default_remove_notify"> '.$l['eu_off_default_remove_notify'].'</label>
				</span>
				<span class="d-block">
					<input type="checkbox" id="eu_off_default_edit_notify" name="eu_off_default_edit_notify" '.(isset($_REQUEST['eu_off_default_edit_notify']) || empty($globals['eu_off_default_edit_notify']) ? 'checked="checked"' : '').' />
					<label class="sai-label" for="eu_off_default_edit_notify">'.$l['eu_off_default_edit_notify'].'</label>
				</span>
				<span class="d-block">
					<input type="checkbox" id="eu_off_default_backup_notify" name="eu_off_default_backup_notify" '.(isset($_REQUEST['eu_off_default_backup_notify']) || empty($globals['eu_off_default_backup_notify']) ? 'checked="checked"' : '').' />
					<label class="sai-label" for="eu_off_default_backup_notify">'.$l['eu_off_default_backup_notify'].'</label>
				</span>
				<span class="d-block">
					<input type="checkbox" id="eu_off_default_restore_notify" name="eu_off_default_restore_notify" '.(isset($_REQUEST['eu_off_default_restore_notify']) || empty($globals['eu_off_default_restore_notify']) ? 'checked="checked"' : '').' />
					<label class="sai-label" for="eu_off_default_restore_notify">'.$l['eu_off_default_restore_notify'].'</label>
				</span>
				<span class="d-block">
					<input type="checkbox" id="eu_off_default_import_notify" name="eu_off_default_import_notify" '.(isset($_REQUEST['eu_off_default_import_notify']) || empty($globals['eu_off_default_import_notify']) ? 'checked="checked"' : '').' />
					<label class="sai-label" for="eu_off_default_import_notify">'.$l['eu_off_default_import_notify'].'</label>
				</span>
			</div>
			<div class="col-12 col-lg-6">
				<span class="d-block">
					<input type="checkbox" id="eu_off_default_clone_notify" name="eu_off_default_clone_notify" '.(isset($_REQUEST['eu_off_default_clone_notify']) || empty($globals['eu_off_default_clone_notify']) ? 'checked="checked"' : '').' />
					<label class="sai-label" for="eu_off_default_clone_notify">'.$l['eu_off_default_clone_notify'].'</label>
				</span>
				<span class="d-block">
					<input type="checkbox" id="eu_off_default_staging_notify" name="eu_off_default_staging_notify" '.(isset($_REQUEST['eu_off_default_staging_notify']) || empty($globals['eu_off_default_staging_notify']) ? 'checked="checked"' : '').' />
					<label class="sai-label" for="eu_off_default_staging_notify"> '.$l['eu_off_default_staging_notify'].'</label>
				</span>
				<span class="d-block">
					<input type="checkbox" id="eu_off_default_template_notify" name="eu_off_default_template_notify" '.(isset($_REQUEST['eu_off_default_template_notify']) || empty($globals['eu_off_default_template_notify']) ? 'checked="checked"' : '').' />
					<label class="sai-label" for="eu_off_default_template_notify">'.$l['eu_off_default_template_notify'].'</label>
				</span>
				<span class="d-block">
					<input type="checkbox" id="eu_off_default_restore_template_notify" name="eu_off_default_restore_template_notify" '.(isset($_REQUEST['eu_off_default_restore_template_notify']) || empty($globals['eu_off_default_restore_template_notify']) ? 'checked="checked"' : '').' />
					<label class="sai-label" for="eu_off_default_restore_template_notify">'.$l['eu_off_default_restore_template_notify'].'</label>
				</span>
				<span class="d-block">
					<input type="checkbox" id="eu_off_default_update_notify" name="eu_off_default_update_notify" '.(isset($_REQUEST['eu_off_default_update_notify']) || empty($globals['eu_off_default_update_notify']) ? 'checked="checked"' : '').' />
					<label class="sai-label" for="eu_off_default_update_notify">'.$l['eu_off_default_update_notify'].'</label>
				</span>
				<span class="d-block">
					<input type="checkbox" id="eu_default_plainpass_notify" name="eu_default_plainpass_notify" '.POSTchecked('eu_default_plainpass_notify', @$globals['eu_default_plainpass_notify']).' />
					<label class="sai-label" for="eu_default_plainpass_notify">'.$l['eu_default_plainpass_notify'].'</label>
				</span>
			</div>
		</div>		
	</div><br />

	<p><input type="submit" class="flat-butt " name="editsettings" value="'.$l['edit_settings'].'"/></p>
	</div>
</div><br />
<div class="sai-card p-3">
	<div class="sai_main_head mb-2">
		<h2 class="sai-heading mb-2">'.$l['hide_feature_set'].'</h2>
		<hr class="sai_main_head_hr"/>
	</div>
	<div class="sai_form">
	
		<div class="form-group">
			<input type="checkbox" onclick="disable_softaculous_modal();" id="disable_softaculous_pro_plugin" name="disable_softaculous_pro_plugin" '.POSTchecked('disable_softaculous_pro_plugin', @$globals['disable_softaculous_pro_plugin']).' />	
			<label class="sai-label" for="disable_softaculous_pro_plugin">'.$l['disable_softaculous_pro_plugin'].'</label>
			<span class="sai_exp2 d-block mb-2">'.$l['disable_softaculous_pro_plugin_exp'].'</span>
		</div>
		
		<div class="form-group">
		<label for="wp_fp_pref" class="sai-label d-block">'.$l['wp_featured_plugins'].'</label>
		<span class="sai_exp2 mb-1 d-block">'.$l['wp_featured_plugins_exp'].'</span>
			<select name="wp_fp_pref" id="wp_fp_pref" class="form-control">
				<option value="0" '.POSTselect('wp_fp_pref', 0, (empty($globals['wp_fp_pref']) ? '1' : '0')).'>'.$l['wp_featured_plugins_recommended'].'</option>
				<option value="1" '.POSTselect('wp_fp_pref', 1, ($globals['wp_fp_pref'] == '1' ? '1' : '0')).'>'.$l['wp_featured_plugins_unchecked'].'</option>
				<option value="2" '.POSTselect('wp_fp_pref', 2, ($globals['wp_fp_pref'] == '2' ? '1' : '0')).'>'.$l['wp_featured_plugins_disabled'].'</option>
			</select>
		</div>';
		
		if(!defined('SOFTRESELLER')){
            
			echo '
			<div class="form-group">
				<input type="checkbox" id="disable_wordpress_manager" name="disable_wordpress_manager" '.POSTchecked('disable_wordpress_manager', @$globals['disable_wordpress_manager']).' />	
				<label class="sai-label" for="disable_wordpress_manager">'.$l['disable_wordpress_manager'].'</label>
				<span class="sai_exp2 d-block mb-2">'.$l['disable_wordpress_manager_exp'].'</span>
			</div>';
		
			if($globals['softpanel'] == 'cpanel'){
				echo
				'<div class="form-group">
					<input type="checkbox" id="disable_wp_icon_jupiter" name="disable_wp_icon_jupiter" '.POSTchecked('disable_wp_icon_jupiter', @$globals['disable_wp_icon_jupiter']).' />	
					<label class="sai-label" for="disable_wp_icon_jupiter">'.$l['disable_wp_icon_jupiter'].'</label>
					<span class="sai_exp2 d-block mb-2">'.$l['disable_wp_icon_jupiter_exp'].'</span>
				</div>';
			}
			
			echo 
			'<div class="form-group">
				<input type="checkbox" id="disable_security_measures" name="disable_security_measures"'.POSTchecked('disable_security_measures', @$globals['disable_security_measures']).'/>	
				<label class="sai-label" for="disable_security_measures">'.$l['disable_security_measures'].'</label>
				<span class="sai_exp2 d-block mb-2">'.$l['disable_security_measures_exp'].'</span>
			</div>';
			
		}
		
		echo '
		<div class="form-group">
			<input type="checkbox" id="eu_news_off" name="eu_news_off"'.POSTchecked('eu_news_off', @$globals['eu_news_off']).'/>	
			<label class="sai-label" for="eu_news_off">'.$l['eu_news_off'].'</label>
			<span class="sai_exp2 d-block mb-2">'.$l['eu_news_off_exp'].'</span>
		</div>

		<div class="form-group">
			<input type="checkbox" id="off_demo_link" name="off_demo_link" '.POSTchecked('off_demo_link', @$globals['off_demo_link']).' />	
			<label class="sai-label" for="off_demo_link">'.$l['off_demo_link'].'</label>
			<span class="sai_exp2 d-block mb-2">'.$l['off_demo_link_exp'].'</span>
		</div>
	
		<div class="form-group">
			<input type="checkbox" id="off_screenshot_link" name="off_screenshot_link" '.POSTchecked('off_screenshot_link', @$globals['off_screenshot_link']).' />	
			<label class="sai-label" for="off_screenshot_link">'.$l['off_screenshot_link'].'</label>
			<span class="sai_exp2 d-block mb-2">'.$l['off_screenshot_link_exp'].'</span>
		</div>
		
		<div class="form-group">
			<input type="checkbox" id="off_rating_link" name="off_rating_link" '.POSTchecked('off_rating_link', @$globals['off_rating_link']).' />	
			<label class="sai-label" for="off_rating_link">'.$l['off_rating_link'].'</label>
			<span class="sai_exp2 d-block mb-2">'.$l['off_rating_link_exp'].'</span>
		</div>
		
		<div class="form-group">
			<input type="checkbox" id="off_review_link" name="off_review_link" '.POSTchecked('off_review_link', @$globals['off_review_link']).' />
			<label class="sai-label" for="off_review_link">'.$l['off_review_link'].'</label>
			<span class="sai_exp2 d-block mb-2">'.$l['off_review_link_exp'].'</span>
		</div>';
		
if(!defined('SOFTRESELLER')){
	echo '<div class="form-group">
		<input type="checkbox" id="perl_scripts" name="perl_scripts" '.POSTchecked('perl_scripts', @$globals['perl_scripts']).' />		
		<label class="sai-label" for="perl_scripts">'.$l['perl_scripts'].'</label>
		<span class="sai_exp2 d-block mb-2">'.$l['perl_scripts_exp'].'</span>
	</div>
	<div class="form-group">
		<input type="checkbox" id="nolabels" name="nolabels" size="30" '.POSTchecked('nolabels', $globals['nolabels']).' />
		<label class="sai-label" for="nolabels">'.$l['nolabels'].'</label>
		<span class="sai_exp2 d-block mb-2">'.$l['nolabels_exp'].'</span>
	</div>';
		
	// Classes are only avaialable to Premium License
	if(!empty($globals['lictype'])){
	echo '<div class="form-group">
			<input type="checkbox" id="disable_classes" name="disable_classes" size="30" '.POSTchecked('disable_classes', @$globals['disable_classes']).' />
			<label class="sai-label" for="disable_classes">'.$l['disable_classes'].'</label>
			<span class="sai_exp2 d-block mb-2">'.$l['disable_classes_exp'].'</span>
		</div>';
	}
	
	echo '<div class="form-group">
		<input type="checkbox" id="disable_reseller_panel" name="disable_reseller_panel" size="30" '.POSTchecked('disable_reseller_panel', @$globals['disable_reseller_panel']).' />
		<label class="sai-label" for="disable_reseller_panel">'.$l['disable_reseller_panel'].'</label>
		<span class="sai_exp2 d-block mb-2">'.$l['disable_reseller_panel_exp'].'</span>
	</div>
	
	<div class="form-group">
		<input type="checkbox" id="disable_clone" name="disable_clone" '.POSTchecked('disable_clone', @$globals['disable_clone']).' />	
		<label class="sai-label" for="disable_clone">'.$l['disable_clone'].'</label>
		<span class="sai_exp2 d-block mb-2">'.$l['disable_clone_exp'].'</span>
	</div>
	
	<div class="form-group">
		<input type="checkbox" id="disable_import" name="disable_import" '.POSTchecked('disable_import', @$globals['disable_import']).' />
		<label class="sai-label" for="disable_import">'.$l['disable_import'].'</label>
		<span class="sai_exp2 d-block mb-2">'.$l['disable_import_exp'].'</span>
	</div>
	
	<div class="form-group">
		<input type="checkbox" id="disable_remote_import" name="disable_remote_import" '.POSTchecked('disable_remote_import', @$globals['disable_remote_import']).' />
		<label class="sai-label" for="disable_remote_import">'.$l['disable_remote_import'].'</label>
		<span class="sai_exp2 d-block mb-2">'.$l['disable_remote_import_exp'].'</span>	
	</div>
		
	<div class="form-group">
		<input type="checkbox" id="disable_manage_sets" name="disable_manage_sets" '.POSTchecked('disable_manage_sets', @$globals['disable_manage_sets']).' />
		<label class="sai-label" for="disable_manage_sets">'.$l['disable_manage_sets'].'</label>
		<span class="sai_exp2 d-block mb-2">'.$l['disable_manage_sets_exp'].'</span>
	</div>
	
	<div class="form-group">
		<input type="checkbox" name="off_staging" id="off_staging" '.POSTchecked('off_staging', $globals['off_staging']).' />	
		<label for="off_staging" class="sai-label">'.$l['off_staging'].'</label>
		<span class="sai_exp2 d-block mb-2">'.$l['off_staging_exp'].'</span>
	</div>
	
	<div class="form-group">
		<input type="checkbox"  id="off_customize_theme" name="off_customize_theme" '.POSTchecked('off_customize_theme', $globals['off_customize_theme']).' />
		<label class="sai-label" for="off_customize_theme">'.$l['off_customize_theme'].'</label>
		<span class="sai_exp2 d-block mb-2">'.$l['off_customize_exp'].'</span>
	</div>

	<div class="form-group">
		<input type="checkbox" id="off_sync_link" name="off_sync_link" '.POSTchecked('off_sync_link', @$globals['off_sync_link']).' />	
		<label class="sai-label" for="off_sync_link">'.$l['off_sync_link'].'</label>
		<span class="sai_exp2 d-block mb-2">'.$l['off_sync_link_exp'].'</span>		
	</div>

	<div class="form-group">
		<input type="checkbox" id="off_panel_link" name="off_panel_link" '.POSTchecked('off_panel_link', @$globals['off_panel_link']).' />	
		<label class="sai-label" for="off_panel_link">'.$l['off_panel_link'].'</label>
		<span class="sai_exp2 d-block mb-2">'.$l['off_panel_link_exp'].'</span>
	</div>
	<div class="form-group">
		<input type="checkbox" id="off_enduser_suggestions" name="off_enduser_suggestions" '.POSTchecked('off_enduser_suggestions', @$globals['off_enduser_suggestions']).' />	
		<label class="sai-label" for="off_enduser_suggestions">'.$l['off_enduser_suggestions'].'</label>
		<span class="sai_exp2 d-block mb-2">'.$l['off_enduser_suggestions_exp'].'</span>
	</div>';
}

echo '<p><input type="submit" class="flat-butt " name="editsettings" value="'.$l['edit_settings'].'"/></p>
	</div>
</div><br />';

if(!defined('SOFTRESELLER')){
	echo '<div class="sai-card p-3">
	<div class="sai_main_head mb-2">
		<h2 class="sai-heading mb-2">'.$l['auto_upgrade_set'].'</h2>
		<hr class="sai_main_head_hr"/>
	</div>
	<div class="sai_form">
		<div class="form-group">
			<input type="checkbox" id="preselect_autoupgrade_plugins" name="preselect_autoupgrade_plugins" '.POSTchecked('preselect_autoupgrade_plugins', @$globals['preselect_autoupgrade_plugins']).' />
			<label class="sai-label" for="preselect_autoupgrade_plugins">'.$l['preselect_autoupgrade_plugins'].'</label>
			<span class="sai_exp2 d-block mb-2">'.$l['preselect_autoupgrade_plugins_exp'].'</span>				
		</div>		
		<div class="form-group">
			<input type="checkbox" id="preselect_autoupgrade_themes" name="preselect_autoupgrade_themes" '.POSTchecked('preselect_autoupgrade_themes', @$globals['preselect_autoupgrade_themes']).' />
			<label class="sai-label" for="preselect_autoupgrade_themes">'.$l['preselect_autoupgrade_themes'].'</label>
			<span class="sai_exp2 d-block mb-2">'.$l['preselect_autoupgrade_themes_exp'].'</span>
		</div>
		
		<div class="form-group">
			<input type="checkbox" id="force_upgrade_plugins" name="force_upgrade_plugins" '.POSTchecked('force_upgrade_plugins', @$globals['force_upgrade_plugins']).' />		
			<label class="sai-label" for="force_upgrade_plugins">'.$l['force_upgrade_plugins'].'</label>
			<span class="sai_exp2 d-block mb-2">'.$l['force_upgrade_plugins_exp'].'</span>
		</div>
		
		<div class="form-group">
			<input type="checkbox" id="force_upgrade_themes" name="force_upgrade_themes" '.POSTchecked('force_upgrade_themes', @$globals['force_upgrade_themes']).' />	
			<label class="sai-label" for="force_upgrade_themes">'.$l['force_upgrade_themes'].'</label>
			<span class="sai_exp2 d-block mb-2">'.$l['force_upgrade_themes_exp'].'</span>
		</div>
		
		<div class="form-group">
			<input type="checkbox" id="off_upgrade_plugins" name="off_upgrade_plugins" '.POSTchecked('off_upgrade_plugins', @$globals['off_upgrade_plugins']).' />
			<label class="sai-label" for="off_upgrade_plugins">'.$l['off_upgrade_plugins'].'</label>
			<span class="sai_exp2 d-block mb-2">'.$l['off_upgrade_plugins_exp'].'</span>
		</div>
		
		<div class="form-group">
			<input type="checkbox" id="off_upgrade_themes" name="off_upgrade_themes" '.POSTchecked('off_upgrade_themes', @$globals['off_upgrade_themes']).' />
			<label class="sai-label" for="off_upgrade_themes">'.$l['off_upgrade_themes'].'</label>
			<span class="sai_exp2 d-block mb-2">'.$l['off_upgrade_themes_exp'].'</span>				
		</div>
		
		<div class="form-group">
			<label class="sai-label">'.$l['enable_auto_upgrade'].'</label>
			<span class="sai_exp2 d-block mb-2">'.$l['enable_auto_upgrade_exp'].'</span>
			<span class="d-block mb-0">
				<input type="radio" name="enable_auto_upgrade" value="0" '.POSTradio('enable_auto_upgrade', 0, @$globals['enable_auto_upgrade']).' /> 
				<label class="sai-label">'.$l['dont_auto_upgrade'].'</label>
			</span>
			<span class="d-block mb-0">
				<input type="radio" name="enable_auto_upgrade" value="2" '.POSTradio('enable_auto_upgrade', 2, @$globals['enable_auto_upgrade']).' /> 
				<label class="sai-label">'.$l['minor_auto_upgrade'].' </label>
			</span>
			<span class="d-block mb-0">
				<input type="radio" name="enable_auto_upgrade" value="1" '.POSTradio('enable_auto_upgrade', 1, @$globals['enable_auto_upgrade']).' /> 
				<label class="sai-label">'.$l['major_auto_upgrade'].'</label>
			</span>
		</div>
		
		<div class="form-group">
			<label class="sai-label">'.$l['force_auto_upgrade'].'</label>
			<span class="sai_exp2 d-block mb-2">'.$l['force_auto_upgrade_exp'].'</span>			
			<span class="d-block mb-0">
				<input type="radio" name="force_auto_upgrade" value="0" '.POSTradio('force_auto_upgrade', 0, @$globals['force_auto_upgrade']).' /> 
				<label class="sai-label">'.$l['dont_auto_upgrade'].'</label>
			</span>
			<span class="d-block mb-0">
				<input type="radio" name="force_auto_upgrade" value="2" '.POSTradio('force_auto_upgrade', 2, @$globals['force_auto_upgrade']).' /> 
				<label class="sai-label">'.$l['minor_auto_upgrade'].'</label>
			</span>
			<span class="d-block mb-0">
				<input type="radio" name="force_auto_upgrade" value="1" '.POSTradio('force_auto_upgrade', 1, @$globals['force_auto_upgrade']).' />
				<label class="sai-label">'.$l['major_auto_upgrade'].'</label>
			</span>							
		</div>
	
		<div class="form-group">
			<label class="sai-label" for="max_bg_process">'.$l['max_bg_process'].'</label>
			<span class="sai_exp2 d-block mb-2">'.$l['max_bg_process_exp'].'</span>
			<input type="text" id="max_bg_process" name="max_bg_process" class="form-control" size="30" value="'.aPOSTval('max_bg_process', $globals['max_bg_process']).'" />
		</div>
		
		<div class="form-group">
			<label for="au_extra_retry" class="sai-label">'.$l['au_extra_retry'].'</label>
			<span class="sai_exp2 d-block mb-2">'.$l['au_extra_retry_exp'].'</span>
			<div class="input-group postion-relative w-75">
				<input type="text" id="au_extra_retry" class="form-control" aria-describedby="au_extra_retry" name="au_extra_retry" value="'.aPOSTval('au_extra_retry', @$globals['au_extra_retry']).'" onblur="isNumber(this)"/ style="width:75%;" >
				<span class="input-group-addon sai-label after-text" id="au_extra_retry">hours</span>
			</div>
		</div>
		<p><input type="submit" class="flat-butt " name="editsettings" value="'.$l['edit_settings'].'"/></p>
	</div>
</div><br />';
}

echo '</div>
</div>
</div>
'.csrf_display().'
</form>

<!-- List Set Items Modal -->
<div class="modal fade" id="disable_softaculous_pro_plugin_modal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header" style="background:#0069d9;color:#ffffff">
          <h5 class="modal-title">'.$l['disable_softaculous_pro_plugin'].'</h5>
          <button type="button" class="close d-inline-block" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body" id="list_plugins_themes">
            <div class="modal-body">
				'.$l['disable_softaculous_pro_conf'].'
			</div>
        </div>
        <div class="modal-footer">
          <button type="button" class="flat-butt" id="confirmBtn" data-dismiss="modal">'.$l['ok'].'</button>
          <button type="button" class="flat-butt" id="cancelBtn" data-dismiss="modal">'.$l['cancel'].'</button>
        </div>
      </div>
    </div>
</div>

<script>

function disable_softaculous_modal(){
    
	if($("#disable_softaculous_pro_plugin").is(":checked") === false){
		return true;
	}
	
	$("#disable_softaculous_pro_plugin_modal").modal("show");

	$("#confirmBtn").on("click", function() {
		$("#disable_softaculous_pro_plugin").prop("checked", true);
	});   

	$("#cancelBtn").on("click", function() {
		$("#disable_softaculous_pro_plugin").prop("checked", false);
	});
};

function updateColor(color, id) {
	
	var hexColor = "transparent";
	if(color) {
		hexColor = color.toHexString();
	}
	if(hexColor == "transparent") return;
	
	// Set the hidden value so that we can save the settings
	$("#default_hf_bg").val("1");
	
	// For changing text colors of category heading
	if(id == "default_hf_text"){
		$(".soft_cathead a").css("color", hexColor);
		$(".soft_nav a").css("color", hexColor);
		$(".fa").css("color", hexColor);
		
		// set the hidden value so that it can be saved
		$("#hidden_default_hf_text").val(hexColor);
	}
	
	// For changing text colors of category heading hover color
	if(id == "default_cat_hover"){
		try{
			$(".soft_cathead:hover, .soft_cathead_slide:hover").css("background-color", hexColor);
			//$(".soft_cathead_slide:hover").css("background-color", hexColor);
		
			// set the hidden value so that it can be saved
			$("#hidden_default_cat_hover").val(hexColor);
		}catch(e){
			// do nothing
		}
	}
	
	// For changing text colors of script names
	if(id == "default_scriptname_text"){
		$(".softlinks li a").css("color", hexColor);
		
		// set the hidden value so that it can be saved
		$("#hidden_default_scriptname_text").val(hexColor);
	}
	
	// For changing background color
	if(id == "default_hf_bg"){
		$(".soft_nav").css("background", hexColor);
		
		// set the hidden value so that it can be saved
		$("#hidden_default_hf_bg").val(hexColor);
	}
	
}

var pallete_array = [
		["rgb(0, 0, 0)", "rgb(67, 67, 67)", "rgb(102, 102, 102)", /*"rgb(153, 153, 153)","rgb(183, 183, 183)",*/
		"rgb(204, 204, 204)", "rgb(217, 217, 217)", /*"rgb(239, 239, 239)", "rgb(243, 243, 243)",*/ "rgb(255, 255, 255)"],
		["rgb(152, 0, 0)", "rgb(255, 0, 0)", "rgb(255, 153, 0)", "rgb(255, 255, 0)", "rgb(0, 255, 0)",
		"rgb(0, 255, 255)", "rgb(74, 134, 232)", "rgb(0, 0, 255)", "rgb(153, 0, 255)", "rgb(255, 0, 255)"],
		["rgb(230, 184, 175)", "rgb(244, 204, 204)", "rgb(252, 229, 205)", "rgb(255, 242, 204)", "rgb(217, 234, 211)",
		"rgb(208, 224, 227)", "rgb(201, 218, 248)", "rgb(207, 226, 243)", "rgb(217, 210, 233)", "rgb(234, 209, 220)",
		"rgb(221, 126, 107)", "rgb(234, 153, 153)", "rgb(249, 203, 156)", "rgb(255, 229, 153)", "rgb(182, 215, 168)",
		"rgb(162, 196, 201)", "rgb(164, 194, 244)", "rgb(159, 197, 232)", "rgb(180, 167, 214)", "rgb(213, 166, 189)",
		"rgb(204, 65, 37)", "rgb(224, 102, 102)", "rgb(246, 178, 107)", "rgb(255, 217, 102)", "rgb(147, 196, 125)",
		"rgb(118, 165, 175)", "rgb(109, 158, 235)", "rgb(111, 168, 220)", "rgb(142, 124, 195)", "rgb(194, 123, 160)",
		"rgb(166, 28, 0)", "rgb(204, 0, 0)", "rgb(230, 145, 56)", "rgb(241, 194, 50)", "rgb(106, 168, 79)",
		"rgb(69, 129, 142)", "rgb(60, 120, 216)", "rgb(61, 133, 198)", "rgb(103, 78, 167)", "rgb(166, 77, 121)",
		/*"rgb(133, 32, 12)", "rgb(153, 0, 0)", "rgb(180, 95, 6)", "rgb(191, 144, 0)", "rgb(56, 118, 29)",
		"rgb(19, 79, 92)", "rgb(17, 85, 204)", "rgb(11, 83, 148)", "rgb(53, 28, 117)", "rgb(116, 27, 71)",*/
		"rgb(91, 15, 0)", "rgb(102, 0, 0)", "rgb(120, 63, 4)", "rgb(127, 96, 0)", "rgb(39, 78, 19)",
		"rgb(12, 52, 61)", "rgb(28, 69, 135)", "rgb(7, 55, 99)", "rgb(32, 18, 77)", "rgb(76, 17, 48)"]
	];

$(function() {
	$("#default_hf_bg").spectrum({
		allowEmpty:true,
		color : "'.(!empty($globals['default_hf_bg']) ? $globals['default_hf_bg'] : '#333333').'",
		showInput: true,
		className: "full-spectrum",
		showInitial: true,
		showPalette: true,
		showSelectionPalette: true,
		maxPaletteSize: 10,
		preferredFormat: "hex",
		localStorageKey: "soft.demo",
		move: function (color) {
			updateColor(color, this.id);
		},
		hide: function (color) {
			updateColor(color, this.id);
		},
		palette: pallete_array
	});
});

$(function() {
	$("#default_cat_hover").spectrum({
		allowEmpty:true,
		color : "'.(!empty($globals['default_cat_hover']) ? $globals['default_cat_hover'] : '#4096ee').'",
		showInput: true,
		className: "full-spectrum",
		showInitial: true,
		showPalette: true,
		showSelectionPalette: true,
		maxPaletteSize: 10,
		preferredFormat: "hex",
		localStorageKey: "soft.demo",
		move: function (color) {
			updateColor(color, this.id);
		},
		hide: function (color) {
			updateColor(color, this.id);
		},
		palette: pallete_array
	});
});

$(function() {
	$("#default_hf_text").spectrum({
		allowEmpty:true,
		color : "'.(!empty($globals['default_hf_text']) ? $globals['default_hf_text'] : '#F2F2F2').'",
		showInput: true,
		className: "full-spectrum",
		showInitial: true,
		showPalette: true,
		showSelectionPalette: true,
		maxPaletteSize: 10,
		preferredFormat: "hex",
		localStorageKey: "soft.demo",
		move: function (color) {
			updateColor(color, this.id);
		},
		hide: function (color) {
			updateColor(color, this.id);
		},
		palette: pallete_array
	});
});

$(function() {
	$("#default_scriptname_text").spectrum({
		allowEmpty:true,
		color : "'.(!empty($globals['default_scriptname_text']) ? $globals['default_scriptname_text'] : '#FFFFFF').'",
		showInput: true,
		className: "full-spectrum",
		showInitial: true,
		showPalette: true,
		showSelectionPalette: true,
		maxPaletteSize: 10,
		preferredFormat: "hex",
		localStorageKey: "soft.demo",
		move: function (color) {
			updateColor(color, this.id);
		},
		hide: function (color) {
			updateColor(color, this.id);
		},
		palette: pallete_array
	});
});
</script>';

softfooter();

}

?>