<?php

//////////////////////////////////////////////////////////////
//===========================================================
// js_theme.php
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


function js_theme(){

global $user, $globals, $l, $theme, $softpanel, $iscripts, $catwise, $error, $scripts, $allcatwise;
global $software, $soft, $info, $settings, $init_tab, $overwrite_option, $dbs, $installed, $__settings, $setupcontinue, $installations, $notes, $show_installtype, $protocols, $nopackage, $ajaxhttpsexists, $ajaxhttps, $new_insid;

if(optGET('notify')){	
	
	get_softaculous_file('http://www.softaculous.com/notifyversion.php?softid="'.$soft.'"');
	echo 1;
	return true;

}

if(optGET('ajaxdownload') && !empty($nopackage)){	

	if(!csrf_validate()){
		return false;
	}
	
	// Try to download the package
	if(method_exists($softpanel, 'updatesoftwares')){
		_updatesoftwares($soft, 0, 0, 1);
		echo 1;
		return true;
	}
	
	// False call
	echo 0;
	return false;

}

// Give the staus
if(optGET('ajaxstatus')){
	
	$_status = soft_progress(optGET('ajaxstatus'));
	
	$tmp_status = unserialize($_status[1]);
	$_status[1] = $tmp_status['current_status'];
	
	if(!empty($_status)){
		echo implode('|', $_status);
		return true;
	}
	
	// False call
	echo 0;
	return false;

}

if(!empty($ajaxhttps)){
	echo $ajaxhttpsexists;
	return true;
}

// Auto Installation responses
if(isset($_GET['autoinstall'])){
	
	// Installed successfully
	if(!empty($installed)){
		echo 'installed';
		return true;
	}
	
	// Are there errors
	if(!empty($error)){
		echo serialize($error);
		return false;
	}
}

$outdated_script = is_outdated_script($soft);

//First add the installation info
if(empty($installed)){
	
	$random_username = true;
	
	// This is to see if a script has predefined username and cannot be changed
	foreach($settings as $ik => $iv){		
		if($ik == 'hidden') continue;
		foreach($iv as $ikk => $ivv){				
			if($ikk == 'admin_username' && preg_match('/disabled=\"disabled\"/is', $ivv['tag'])){
				$random_username = false;
			}			
		}
	}
	
	$info['install'] = '<div id="fadeout_div">
	<form accept-charset="'.$globals['charset'].'" name="installsoftware" method="post" action="" onsubmit="return checkform();" id="installsoftware" class="form-horizontal">';

	if(ampps() && !is_ampps_premium() && count($user['ins']) >= 3){
		$info['install'] .= '<center class="alert alert-warning">'.$l['ampps_notify_premium'].'</center>';
	}

	if(!can_use_soft($soft, $use_msg)){
		$info['install'] .= '<center class="alert alert-warning">'.$use_msg.'</center>';
	}

$info['install'] .= error_handle($error, "100%", 0, 1).'<script language="javascript" type="text/javascript"><!-- // --><![CDATA[';

//If domain has SSL installed then select protocol https:// by default on page load.
if((empty($globals['default_protocol']) || $globals['default_protocol'] <= 1) && empty($globals['off_checkhttps'])){
	$info['install'] .= '	
	
	$(document).ready(function(){
		
		$("#install, #install_now").click(function(){
			check_https();
		});

		if($("#install_win").is(":visible")){
			check_https();
		}
		
		shift_check_all("shift_select_ins");
	});
		
	function check_https(){
		$.ajax({
			type: "POST",
			url: "'.$globals['index'].'act=js&soft='.$soft.'&checkhttps="+encodeURIComponent($("#softdomain").val()),
			timeout:10000,
			// Checking for success
			success: function(data){
				if(data == "true"){
					$("#softproto").val(3);
				}
			}
		});
	}';
}

$info['install'] .= '

$("#quick_install_btn, #show_less_form").click(function(){
	quick_install();
});

//Handling if user clicked on quick install and come back to custom install.
$("#custom_install_btn, #show_full_form").click(function(){
	custom_install();
});

';

// This is because we do not want to overwrite the value in case of AJAX calls
if(empty($_GET['jsnohf'])){
	$info['install'] .= 'var is_quick_install = '.(!empty($globals['quick_install_default']) ? '1' : '0').';

	$("#show_install_option").click(function(){
		$("#quick_install_dropdown").slideToggle("fast");
	});';
}

$info['install'] .= '
$(document).ready(function(){
	
	//Get width of install tab to show the dropdown with correct width
	var installwidth = $("#install").width();
	var caretwidth = $("#show_install_option").width();
	var total_instab_width = installwidth+caretwidth;
	
	$("#quick_install_dropdown").css("width",total_instab_width);
	
	if($("#install_win").is(":visible")){
		post_install_but();
	}
});

$("#install, #install_now").click(function(){
	post_install_but();
});

function toggle_advoptions(ele){
	//alert("#"+ele);
	if ($("#"+ele).is(":hidden")){
		$("#"+ele).slideDown("slow");
		$("#"+ele+"_toggle_plus").attr("class", "fas fa-minus-square");
	}
	else{
		$("#"+ele).slideUp("slow");
		$("#"+ele+"_toggle_plus").attr("class", "fas fa-plus-square");
	}
}

function plus_onmouseover(ele){
	$("#"+ele.id+"_plus").attr("src", "'.$theme['images'].'plus_hover.gif");
}

function plus_onmouseout(ele){
	$("#"+ele.id+"_plus").attr("src", "'.$theme['images'].'plus.gif");
}

function display_pass_strength(score, per){
	
	var lang;
	//disp_per = $("#pass-strength-hidden").val();
	
	if(typeof per == "undefined") per = 0;
	
	if(score == "bad") lang = "'.$l['bad'].'";
	if(score == "good") lang = "'.$l['good'].'";
	if(score == "strong") lang = "'.$l['strong'].'";
	if(score == "short") lang = "'.$l['short'].'";
	if(score == "strength_indicator") lang = "'.$l['strength_indicator'].'";
	
	$("#pass-strength-result").addClass(score).html( lang+" ("+per+"/100)" );
}

function checkform(dosubmit){
	
	// If admin has set the password strength than only we will check for it.
	'.(!empty($globals['pass_strength']) ? '
	//alert($("#pass-strength-hidden").val());
	if(parseInt($("#pass-strength-hidden").val()) < '.$globals['pass_strength'].'){
		alert("'.$l['err_pass_strength'].'"+'.$globals['pass_strength'].');
		return false;
	}' : '').'
		
	try{
		if(!formcheck()){
			return false;
		}
	}catch(e){
		//Do nothing
	}
	$_("softsubmitbut").disabled = true;
	
	if(!get_package()){
		return false;
	}
	
	if(useprog){
		
		// Send a request to check the status
		progressbar.start();
		
		// Return false so that the form is not submitted
		return false;
	
	// This is OLD School !
	}else{		
		if(dosubmit == 1){			
			$_("installsoftware").submit();	
		}
		show_msg("'.$l['installing'].'");
	}
	
	return true;
	
};

var progressbar = {
	timer: 0,
	total_width: 0,	
	status_key: "",
	synctimer: 0,
	fadeout_div: "#fadeout_div",
	win_div: "#install_win",
	progress_div: "#progress_bar",
	formid: "#installsoftware",
	frequency: 8000,
	
	current: function(){
		try{
			var tmp_cur = Math.round(parseInt($_("progress_color").width)/parseInt($_("table_progress").width)*100);
			if(tmp_cur > 100){
				tmp_cur = 99;
			}
			return tmp_cur;
		}catch(e){
			return -1;	
		}
	},
	
	reset: function(){ try{
		clearTimeout(this.timer);
		$_("progress_color").width = 1;
	}catch(e){ }},
	
	move: function(dest, speed, todo){ try{
		var cur = this.current();
		if(cur < 0){
			clearTimeout(this.timer);
			return false;
		}
		var cent = cur + 1;
		var new_width = cent/100*this.total_width;
		if(new_width < 1){
			new_width = 1;
		}
		//alert(new_width+" "+dest+" "+cent);
		
		$_("progress_color").width = new_width;
		$_("progress_percent").innerHTML = "("+cent+" %)";
		
		if(cent < dest){
			this.timer = setTimeout("progressbar.move("+dest+", "+speed+")", speed);
		}else{
			eval(todo);	
		}
	}catch(e){ }},
	
	text: function(txt){ try{
		$_("progress_txt").innerHTML = txt;
	}catch(e){ }},
	
	sync: function(){
		if(progressbar.status_key.length < 2){
			return false;
		}
		$.ajax({
			url: window.location+"&ajaxstatus="+progressbar.status_key+"&random="+Math.random(),
			type: "GET",
			success: function(data){
				if(data == 0) return false;
				var tmp = data.split("|");
				var cur = progressbar.current();
				tmp[2] = (3000/(tmp[0]-cur));
				//alert(tmp);
				if(tmp[0] > cur){
					if(parseInt(tmp[2]) == 0){
						tmp[2] = 800;
					}
					progressbar.move(tmp[0], tmp[2]);
				}
				progressbar.text(tmp[1]);
				progressbar.synctimer = setTimeout("progressbar.sync()", progressbar.frequency);
			}
		});
	},
	
	sync_abort: function(){
		clearTimeout(this.synctimer);
	},
	
	start: function(){ try{
		this.post();
		this.reset();
		this.total_width = parseInt($_("table_progress").width);
		this.move(95, 800);
		this.status_key = $("#soft_status_key").attr("value");
		this.sync();
	}catch(e){ }},
	
	post: function(){
		
		// Scroll to the Top and show the progress bar
		goto_top();
		$(progressbar.fadeout_div).fadeOut(500, 
			function(){
				$(progressbar.progress_div).fadeOut(1);
				$(progressbar.progress_div).fadeIn(500);
			}
		);
		
		try{
			var sid = $_("softbranch").value;
		}catch(e){
			var sid = '.$soft.'
		}
		
		$.ajax({
			url: window.location+"&jsnohf=1",
			type: "POST",
			data: $(progressbar.formid).serialize(),
			complete: function( jqXHR, status, responseText ) {
				
				progressbar.sync_abort();
				
				// Store the response as specified by the jqXHR object
				responseText = jqXHR.responseText;
				
				try{
					//alert(responseText);
					if(responseText.match(/\<\!\-\-PROC_DONE\-\-\>/gi)){
						progressbar.text("'.addslashes($l['finishing_process']).'");
						progressbar.move(99, 10, "$(progressbar.progress_div).fadeOut(1)");
					}else{
						progressbar.reset();
					}
				}catch(e){ }
				
				if ( jqXHR.state() == "resolved" ) {
				
					// #4825: Get the actual response in case
					// a dataFilter is present in ajaxSettings
					jqXHR.done(function( r ) {
						responseText = r;
					});
			
					// Create a dummy div to hold the results
					// inject the contents of the document in, removing the scripts
					// to avoid any "Permission Denied" errors in IE
					var newhtml = jQuery("<div>").append(responseText).find(progressbar.win_div).html();
					
					$(progressbar.win_div).animate({opacity: 0}, 1000, "", function(){
						$(progressbar.win_div).html(newhtml);
						
						//quick install? this is because now the newhtml has been filled in win_div(for error and selectversion)
						post_install_but();
						
						show_backup();
						check_pass_strength();
						new_theme_funcs_init();
						$(document).trigger("reinit_install_window");
					}).delay(50).animate({opacity: 1}, 500);
					
					//alert(newhtml);
					
				}else{
					alert("Oops ... the connection was lost");
				}
			}
		});
	}
};

function show_msg(msg){	
	$_("show_txt").innerHTML = "<br /><br /> &nbsp; "+msg+" &nbsp; <img src=\"'.$theme['images'].'progress.gif\" />";
	$_("show_txt").style.display = "";
}

// Is the package there ?
var nopackage = '.(empty($nopackage) ? 0 : 1).';

// Use the Progress Bar ?
var useprog = 1;
try{
	if(BrowserDetect.browser.toLowerCase() == "safari" && BrowserDetect.version.toString().substr(0, 1) == "3"){
		useprog = 0;
	}
}catch(e){ }

function get_package(){	
	if(nopackage){
		
		show_msg("'.$l['downloading'].'");
		
		var csrf_token = $("#csrf_token").val(); 
		
		try{

			$.ajax({
				type: "POST",
				data: "csrf_token="+csrf_token,
				url: "'.$globals['index'].'act=js&soft='.$soft.'&ajaxdownload=1&random="+Math.random(),
				// Checking for error
				success: function(data){
					get_package_handle(data);
				}
			});	
		}catch(e){ }
		
		return false;
	}else{
		$_("show_txt").style.display = "none";
		return true;
	}
};

function get_package_handle(resp){
	nopackage = 0;
	show_msg("'.$l['installing'].'");
	checkform(1);
};

softemail = new Object();
function softmail(){
	try{
		var use_eu_email = "'.(!empty($globals['use_eu_email']) ? $globals['use_eu_email'] : 0).'";
		if(use_eu_email > 0){
			return true;
		}
		var sofdom = "softdomain";
		for(x in softemail){
			if(softemail[x] == true) continue;
			var temp = $_(x).value.split("@");
			if($_(sofdom).value.indexOf("/") > 0){
				var dom_value = $_(sofdom).value.substring(0, $_(sofdom).value.indexOf("/"));
			}else{
				var dom_value = $_(sofdom).value;
			}
			$_(x).value = temp[0] + "@" + dom_value;
		}
	}catch(e){
		return false;
	}
};

function checkhttps(proto_id, softdomain_id, alrt){
	try{
		var id = $_(proto_id);
		var proto = id.options[id.selectedIndex].text;
		var no_proto = proto.replace("https://", "");
	
		$("#checkhttps_wait").css("display","inline-block");
		if(proto.indexOf("https") !== -1){
		
			 $.ajax({
				type: "POST",
				url: "'.$globals['index'].'act=js&soft='.$soft.'&checkhttps="+encodeURIComponent(no_proto+$_(softdomain_id).value),
				timeout:10000,
				// Checking for error
				success: function(data){
					$("#checkhttps_wait").css("display","none");
					is_https(trim(data));
				},
				error: function(jqXHR, status, e) {
					$("#checkhttps_wait").css("display","none");
					is_https(e);
					return false;
				}
			}); 
			
			//AJAX("'.$globals['index'].'act=software&soft='.$soft.'&checkhttps="+id.options[id.selectedIndex].text+$_(softdomain_id).value, "is_https(re)");
		}else{
			$("#checkhttps_wait").css("display","none");
			is_https("true");
		}
		if(alrt == true){
			alert(proto+$_(softdomain_id).value);
		}
	}catch(e){
		//
	}
	return true;
};

function is_https(re){
	try{
		httpserror = "";
		
		//Check if it exists
		if(re !== "true"){
			httpserror = "'.$l['no_https'].'";
		}
		if(httpserror != ""){
			$_("httpserror").style.display = "block";
			$_("httpserror").innerHTML = httpserror;
			return false;
		}else{
			$_("httpserror").style.display = "none";
		}
		
	}catch(e){
		//
	}
	return true;
};

function prepend_prefix(prefix){
	// Decide prefix USERNAME, DOMAIN OR USER DEFINED
	if(prefix != "" && prefix == "username") prefix = "'.$softpanel->user['name'].'";
	if(prefix != "" && prefix == "domain") prefix = "'.current(array_keys($softpanel->domainroots)).'";
	if(prefix != "" && prefix != "domain" && prefix != "username");
	// APPEND OLD USERNAME OR DEFAULT USERNAME
	var old = $_("admin_username").value
	temp = $_("admin_username").value.split("-");
	if (typeof temp[1] == \'string\' || temp[1] instanceof String){
		$_("admin_username").value = prefix+"-"+temp[1];
	}else{
		$_("admin_username").value = prefix+"-"+old;
	}
}

function change_admin_prefix(domain){
	var admin_prefix = \''.$globals['admin_prefix'].'\';
	var random_username = \''.(!empty($random_username) ? 'true' : '').'\';
	var empty_username = \''.(empty($globals['empty_username']) ? 'true' : '').'\';
	var gl_random_username = \''.(empty($globals['random_username']) ? 'true' : '').'\';
	if(admin_prefix == "domain" && random_username == "true" && empty_username == "true" && gl_random_username == "true"){
		prepend_prefix(domain);
	}
}
  
// show/hide backup options
function show_backup(){

	var auto_backup = $("#auto_backup").val();
	
	if(auto_backup == 0){
		$("#auto_backup_rotation").attr("disabled", true);
		$("#custom_autobackup_cron").css("display", "none");
	}else{
		if(auto_backup == "custom"){
			$("#custom_autobackup_cron").css("display", "block");
		}else{
			$("#custom_autobackup_cron").css("display", "none");
		}
		$("#auto_backup_rotation").attr("disabled", false);
	}
	
	return true;
};

'.(!empty($_POST) ? '' : 'addonload(\'softmail();show_backup();\');');

$info['install'] .= '// ]]></script>';

$info['install'] .= '<div class="row">
	<div class="col-12 mb-4">
		<div class="bg">
			<button type="button" class="btn pull-right btn sai-button quick_form_toggle_btn" id="show_full_form" style="display:none;" onclick="custom_install();return false;">'.$l['custom_install'].'</button>
			<button type="button" class="btn pull-right btn sai-button quick_form_toggle_btn" id="show_less_form" style="display:none;" onclick="quick_install();return false;">'.$l['quick_install'].'</button>
			<div class="sai_sub_head">'.$l['setup'].'</div>
			<hr class="sai_main_head_hr" />';
	
			$info['install'] .= '
			<div class="row">
			<div class="col-sm-7">
				<label class="form-label d-block mb-0" for="softdirectory">'.$l['choose_url'].'</label>
				<span class="sai_exp2">'.$l['choose_url_exp'].'</span>
				<div class="row mt-2" style="margin-left:0px; margin-right:0px;">';
				if(empty($softpanel->noprotocol) && empty($globals['hide_protocol'])){
					$info['install'] .= '
					<div class="col-sm-3 custom_install" style="padding-left:0px; padding-right:1px; width:24%;">
					<select name="softproto" class="form-control" id="softproto" onblur="checkhttps(\'softproto\', \'softdomain\', false)">';
					foreach($protocols as $k => $v){
						$info['install'] .= '<option value="'.$k.'" '.(optPOST('softproto') == $k || ($globals['default_protocol'] == $k && empty($_POST['softproto'])) ? 'selected="selected"' : '').'>'.$v.'</option>';
					}
				$info['install'] .= '</select>
						<span class="sai_exp2 ml-1">'.$l['choose_protocol'].'
							<span class="sai_exp">'.$l['choose_protocol_exp'].'</span>
						</span>
					</div>
					<div class="col-sm-6" style="padding-left:0px; padding-right:0px;">						
						<select name="softdomain" class="form-control" id="softdomain" onchange="softmail();change_admin_prefix(this.value);" onblur="checkhttps(\'softproto\', \'softdomain\', false)">';
						if(!empty($globals['blank_domain'])){
							$info['install'] .= '<option value="" '.(empty($_POST['softdomain']) ? 'selected="selected"' : '').'>('.$l['select_domain'].')</option>';
						}
						foreach($softpanel->domainroots as $domain => $dompath){
							$info['install'] .= '<option value="'.$domain.'" '.((!empty($_POST['softdomain']) && $_POST['softdomain'] == $domain) ? 'selected="selected"' : '').'>'.$domain.'</option>';
						}
					$info['install'] .= '
						</select>
						<span class="sai_exp2 ml-1">'.$l['choose_domain'].'
							<span class="sai_exp">'.$l['choose_domain_exp'].'</span>
						</span>';
					}
			$info['install'] .= '
					</div>
					<div class="col-sm-3" style="padding-left:1px;padding-right:0px;">';
		
					if(empty($globals['no_indir'])){
						$info['install'] .= '
							<input type="text" name="softdirectory" class="form-control" id="softdirectory" size="30" value="'.POSTval('softdirectory', (!empty($globals['no_prefill']) ? '' : $software['softname'])).'" />
							<span class="sai_exp2" style="margin-left:4px;">'.$l['in_directory'].'
								<span class="sai_exp">'.$l['in_directory_exp'].'</span>
							</span>';
					}
			$info['install'] .= '
					</div>
					
					<div class="row col-sm-12">
						<div style="display:none;" id="checkhttps_wait">
							<img src="'.$theme['images'].'progress.gif" alt="Please wait..">
						</div>
						<span id="httpserror" style="display:none; padding:10px; margin-bottom:0px;" class="alert alert-warning"></span>
					</div>
				
				</div><! -- row mt-2 -->
				</div><! -- col-7 -->';
	
	
	if(!empty($show_installtype)){

		$info['install'] .= '
		<div class="col-12 col-md-6 mt-2 mb-2">
			<label for="jsinstalltype" class="form-label">'.$l['ins_type'].'</label>
			<span class="sai_exp">'.$l['ins_type_exp'].'</span>
			<select name="jsinstalltype" id="jsinstalltype" class="form-control">
					<option value="0" '.(POSTselect('jsinstalltype', 0)).'>'.$l['ori_pack'].'</option>
					<option value="1" '.(POSTselect('jsinstalltype', 1, 1)).'>'.$l['just_lib'].'</option>
			</select>
		</div>';
	}
	
	// Do we need to load any additional fields required by server admin ?
	if(!empty($GLOBALS['install_fields'])){
		
		foreach($GLOBALS['install_fields'] as $ifk => $ifv){
			
			if(empty($ifv['input'])) continue;
			
			//Adding class to input
			if(preg_match('/type="text"/is', $ifv['input']) && !preg_match('/class="form-control"/is', $ifv['input'])){
				$ifv['input'] = preg_replace('/>/is', ' class="form-control">',$ifv['input']);
			}
			
			if(preg_match('/<select/is', $ifv['input']) && !preg_match('/class="form-control"/is', $ifv['input'])){
				$ifv['input'] = preg_replace('/<select/is', '<select class="form-control"',$ifv['input']);
			}
			
			$info['install'] .= '
			<div class="col-12 col-md-6 mt-2 mb-2 custom_install">
				<label class="sai_head">'.$ifv['head'].'</label><br />
				<span class="sai_exp2">'.$ifv['exp'].'</span>
				'.$ifv['input'].'
			</div>';
			
		}
	}
	
	$info['install'] .= '
			</div><! -- row -->
		</div><! -- bg -->
	</div><! -- col-12 -->';


if(!empty($settings)){
	
	if(file_exists($software['path'].'/install.js')){
		$info['install'] .= '<script language="javascript" type="text/javascript"><!--// --><![CDATA[';		
		$info['install'] .= @parselanguages(str_replace('$(', '$_(', file_get_contents($software['path'].'/install.js')));
		$info['install'] .= '// ]]></script>';
	}

	foreach($settings as $group => $sets){
		
		if($group == 'hidden' || empty($sets)) continue;
	
		$info['install'] .= '<div class="col-12 col-md-6 script_blocks mb-4">
			<div class="bg h-100 ">
				<div class="sai_sub_head">'.$group.'</div>
				<hr class="sai_main_head_hr">';

		foreach($sets as $sk => $sv){
			
			//Adding class form-control to input
			if(preg_match('/type="text"/is', $sv['tag'])){
				$sv['tag'] = preg_replace('/>/is', ' class="form-control">',$sv['tag']);
			}
			if(preg_match('/<select/is', $sv['tag'])){
				$sv['tag'] = preg_replace('/<select/is', '<select class="form-control"',$sv['tag']);
			}
			
			$info['install'] .= '
				<div class="script_fields" '.(!empty($sv['quick_install']) ? 'quick_install="1"' : '').'>
				
					<label for='.$sk.' class="form-label" id="sai_head">'.$sv['head'].'</label>
					'.(empty($sv['exp']) ? '' : '<span class="sai_exp">'.$sv['exp'].'</span>').'	
					
					'.(preg_match('/admin_pass|softpass/is', $sv['tag']) ? preg_replace('/>|\/>/is',' onkeyup="check_pass_strength();">', '
					
					'.$sv['tag'].'
					<div class="strength-indicator w-90 d-inline-block"><div id="pass-strength-result" class="d-inline-block pass-strength-result">'.$l['strength_indicator'].'</div></div>') : $sv['tag']).'
					
					'.(preg_match('/softmail/is', $sv['tag']) ? '<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
							softemail["'.$sk.'"] = false;
							//Add an event handler
							$_("'.$sk.'").onkeydown = function(){
								softemail["'.$sk.'"] = true;
							}
							// ]]></script>
							' : '').'
					'.(preg_match('/admin_pass|softpass/is', $sv['tag']) ? '
					
					<input id="toggle_pass_admin" type="checkbox" style="display:none;" onclick="toggle_pass(\'show_hide_admin\', \'admin_pass\');"/>
					<label  for="toggle_pass_admin"  style="margin-top:6px;">
						<span class="sai_toggle-pass mt-1 mr-1" id="show_hide_admin">'.$l['hide'].'</span>
					</label>
					
					<a class="generate-password" href="javascript: void(0);" onclick="$_(\''.$sk.'\').value=randstr(10, 1, '.(!empty($globals['pass_strength']) ? $globals['pass_strength'] : 0).');check_pass_strength();return false;" title="'.$l['randpass'].'"><i class="fas fa-key"></i></a>' : '').'
							
					'.(preg_match('/admin_pass|softpass/is', $sv['tag']) && (!empty($softpanel->securepass) || !empty($globals['random_pass'])) ? '
					<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
					addonload(\'$_("'.$sk.'").value=randstr(10, 1, '.(!empty($globals['pass_strength']) ? $globals['pass_strength'] : 0).');check_pass_strength();\');
					// ]]></script>
					' : '').'

					'.(preg_match('/admin_pass|softpass/is', $sv['tag']) && !empty($globals['empty_pass']) ? '
					<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
					addonload(\'$_("'.$sk.'").value="";check_pass_strength();\');
					// ]]></script>
					' : '').'

					'.(preg_match('/dbprefix/is', $sv['tag']) && !empty($globals['random_dbprefix']) ? '
					<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
					addonload(\'$_("'.$sk.'").value=randstr(3)+"_";\');
					// ]]></script>
					' : '').'

					'.(preg_match('/admin_username/is', $sv['tag']) && !empty($globals['random_username']) && !empty($random_username) ? '
					<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
					addonload(\'$_("'.$sk.'").value=randstr(5);\');
					// ]]></script>
					' : '').'

					'.(preg_match('/admin_username/is', $sv['tag']) && !empty($globals['empty_username']) && !empty($random_username) ? '
					<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
					addonload(\'$_("'.$sk.'").value="";\');
					// ]]></script>
					' : '').'

					'.(preg_match('/admin_username/is', $sv['tag']) && !empty($globals['admin_prefix']) && empty($globals['empty_username']) && empty($globals['random_username']) && !empty($random_username) ? '<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
					addonload(\'prepend_prefix("'.$globals['admin_prefix'].'");\');
						// ]]></script>
					' : '').'<!--//Code for admin setting for admin email and admin username-->

					'.(preg_match('/admin_username/is', $sv['tag']) && !empty($globals['use_eu_username']) && empty($globals['empty_username']) && !empty($random_username) && empty($globals['random_username']) ? '
					<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
					$(document).ready(function(){$_("'.$sk.'").value="'.$softpanel->user['name'].'";});
					// ]]></script>
					' : '').'

					'.(preg_match('/admin_email|board_email|site_email|bug_email|noreply_email|feedback_email|wiki_mail/is', $sv['tag']) && !empty($globals['use_eu_email']) ? '
					<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
					$(document).ready(function(){$_("'.$sk.'").value="'.$user['email'].'";});
					// ]]></script>
					' : '').'	
				<br />
			</div>';
		}
	
		$info['install'] .= '<br />
					</div><!--end of script_blocks-->
			</div><!--end of bg class-->';
	
	}

	//The Hidden groups 
	if(!empty($settings['hidden'])){
	
		foreach($settings['hidden'] as $sk => $sv){
	
			$info['install'] .= $sv['tag'].'
			'.(preg_match('/softmail/is', $sv['tag']) ? '<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
			softemail["'.$sk.'"] = false;
			//Add an event handler
			$_("'.$sk.'").onkeydown = function(){
				softemail["'.$sk.'"] = true;
			}
			// ]]></script>
			' : '');
		}
	}
}//End of if($settings)
	
// Advance option 
$info['install'] .= '
	<div class="bg custom_install">
		<div class="sai_sub_head" id="advoptions_toggle" onclick="toggle_advoptions(\'advoptions\');" style="cursor:pointer">
			<i id="advoptions_toggle_plus" class="fas fa-plus-square" class="mr-2"></i>
			<span class="">'.$l['adv_option'].'</span>
			<hr class="sai_main_head_hr d-block mt-3 ml-4 m-0">
		</div>
			<div id="advoptions" class="mt-4" style="display:none;">
			';
			
			$info['install'] .= '
			<div class="col-12 col-md-6 mb-2">';
				//Do not show 'disable update notifications' option if both 'Turn off all Emails sent to endusers' and 'Disable End User Update E-Mails' or either is enabled in Admin Panel
				if(empty($globals['off_email_link']) && empty($globals['eu_email_off'])){
					$info['install'] .= '
						<div>
						<label class="sai_head mb-2" for="disable_notify_update">'.$l['disable_notify_update'].'</label>
						<span class="sai_exp">'.$l['exp_disable_notify_update'].'</span>
						<input type="checkbox" name="disable_notify_update" id="disable_notify_update" '.POSTchecked('disable_notify_update').' /><br />
						</div>';
				}
				
				$info['install'] .= '
				</div>';
				
				if(empty($globals['off_rbackup']) && empty($globals['disable_backup_restore'])){
					$info['install'] .= '
					<div class="col-12 col-md-6 mb-2">
						<label for="backup_location" class="sai_head mb-2">'.$l['backup_location'].'</label>
						<span class="sai_exp">'.$l['backup_location_exp'].'</span>
					
						<select name="backup_location" class="form-control" id="backup_location">
							<option value="0"'.POSTselect('backup_location', 0).'>'.$l['default'].'</option>
							<option value="-1"'.POSTselect('backup_location', -1).'>'.$l['local_folder'].'</option>';
							if(!empty($user['remote_backup_locs'])){
								foreach($user['remote_backup_locs'] as $ck => $cv){
									$info['install'] .= '<option value="'.$ck.'" '.POSTselect('backup_location', $ck, (@$user['default_backup_location'] == $ck ? '1' : '0')).'>'.$cv['name'].'</option>';
								}
							}
						$info['install'] .= '</select><br />
					</div>';
				}
				
				// Auto backups option only if backups is not disabled and panel is not remote
				if(empty($globals['disable_backup_restore']) && empty($globals['disable_auto_backup']) && !aefer() && empty($softpanel->disable_auto_backup)){
					$info['install'] .= '
					<div class="col-12 col-md-6 mb-2">						
						<label for="auto_backup" class="sai_head mb-2">'.$l['auto_backup'].'</label>
						<span class="sai_exp">'.$l['exp_auto_backup'].'</span>
						<select name="auto_backup" class="form-control" id="auto_backup" onchange="show_backup();">
							<option value="0" '.POSTselect('auto_backup', '0', 1).'>'.$l['no_backup'].'</option>'.
							(empty($globals['disable_auto_backup_daily']) ? '<option value="daily" '.POSTselect('auto_backup', 'daily', ($globals['auto_backup'] == 'daily' ? 1 : '')).'>'.$l['daily'].'</option>' : '').
							(empty($globals['disable_auto_backup_weekly']) ? '<option value="weekly" '.POSTselect('auto_backup', 'weekly', ($globals['auto_backup'] == 'weekly' ? 1 : '')).'>'.$l['weekly'].'</option>' : '').
							(empty($globals['disable_auto_backup_monthly']) ? '<option value="monthly" '.POSTselect('auto_backup', 'monthly', ($globals['auto_backup'] == 'monthly' ? 1 : '')).'>'.$l['monthly'].'</option>' : '').
							(empty($globals['disable_auto_backup_custom']) ? '<option value="custom" '.POSTselect('auto_backup', 'custom').'>'.$l['custom_autobackup'].'</option>' : '').'
						</select><br />
					</div>
					
					<div class="col-12 col-md-6 mb-2" id="custom_autobackup_cron" style="display:none;">						
						<label for="autobackup_cron_min" class="sai_head">'.$l['custom_autobackup_cron'].'</label>
						<span class="sai_exp">'.$l['custom_autobackup_cron_exp'].'</span>
						<div class="row">
							<div class="col-sm-2">
								<label for="autobackup_cron_min">'.$l['cron_min'].'</label>	
								<input type="text" class="form-control" name="autobackup_cron_min" id="autobackup_cron_min" size="2" value="'.POSTval('autobackup_cron_min', '').'" />
							</div>
							<div class="col-sm-2">
								<label for="autobackup_cron_hour">'.$l['cron_hour'].'</label>
								<input type="text" class="form-control" name="autobackup_cron_hour" id="autobackup_cron_hour" size="2" value="'.POSTval('autobackup_cron_hour', '').'" />
							</div>
							<div class="col-sm-2">
								<label for="autobackup_cron_day">'.$l['cron_day'].'</label>
								<input type="text" class="form-control" name="autobackup_cron_day" id="autobackup_cron_day" size="2" value="'.POSTval('autobackup_cron_day', '').'" />
							</div>
							<div class="col-sm-2">
								<label for="autobackup_cron_month">'.$l['cron_month'].'</label>
								<input type="text" class="form-control" name="autobackup_cron_month" id="autobackup_cron_month" size="2" value="'.POSTval('autobackup_cron_month', '').'" />
							</div>
							<div class="col-sm-2">
								<label for="autobackup_cron_weekday">'.$l['cron_weekday'].'</label>
								<input type="text" class="form-control" name="autobackup_cron_weekday" id="autobackup_cron_weekday" size="2" value="'.POSTval('autobackup_cron_weekday', '').'" />
							</div>
						</div><br />
					</div>
					
					<div class="col-12 col-md-6 mb-2">						
						<label class="sai_head mb-2" for="auto_backup_rotation">'.$l['auto_backup_rotation'].'</label>
						<span class="sai_exp">'.$l['exp_auto_backup_rotation'].'</span>
						<select name="auto_backup_rotation" class="form-control" id="auto_backup_rotation">';    
							for($i=0; $i<=10; $i++){
								// Do we have a limit from admin ?
								if(!empty($globals['auto_backup_limit']) && ($i > $globals['auto_backup_limit'] || $i == 0) || !empty($globals['max_backups']) && ($i > $globals['max_backups'] || $i == 0)) continue;
								$info['install'] .= '<option value="'.$i.'" '.POSTselect('auto_backup_rotation', $i, (!empty($globals['auto_backup_rotation']) ? $i == $globals['auto_backup_rotation'] : $i == 4) ? '1' : '0').'>'.(empty($i) ? $l['unlimited'] : $i).'</option>';
							}
						$info['install'] .= '</select><br />	
					</div>';
				}
		$info['install'] .= '</div>
			</div><br />
	</div><!--end of bg-->';


$info['install'] .= '
	<div class="text-center mt-4">
		<input type="hidden" name="softsubmit" id="softsubmit" value="'.$l['softsubmit'].'" />
		<input type="hidden" name="pass-strength-hidden" id="pass-strength-hidden" value="" />
		<input type="submit" name="softsubmitbut" id="softsubmitbut" class="btn sai-button" value="'.$l['softsubmit'].'"/><span id="show_txt" style="display:none;"></span>
		<br /><br /><br />
		'.(empty($globals['off_email_link']) && empty($globals['off_install_mail']) ? '<span class="sai_head">'.$l['ins_emailto'].'</span> : <input type="text" name="emailto" id="emailto" size="20" value="'.POSTval('emailto', '').'" />' : '').'
	</div>
	<input type="hidden" name="soft_status_key" id="soft_status_key" value="'.POSTval('soft_status_key', generateRandStr(32)).'" />
	'.csrf_display().'
	</form></div>';

$info['install'] .= '
	<div id="progress_bar" style="height:125px; width:100%; display: none;">
		<br />
		<center>
		<font size="4" id="progress_txt" style="width:100%;">'.$l['checking_data'].'</font>
		<font style="font-size: 18px;font-weight: 400;width:100%;" id="progress_percent">(0 %)</font><br /><br />
		</center>
		<table width="500" cellpadding="0" cellspacing="0" id="table_progress" border="0" align="center" height="28" style="border:1px solid #CCC; -moz-border-radius: 5px;
		-webkit-border-radius: 5px; border-radius: 5px; width:50%;">
			<tr>
				<td id="progress_color" width="1" style="background-image: url('.$theme['images'].'bar.gif); -moz-border-radius: 4px; -webkit-border-radius: 4px; border-radius: 4px;"></td>
				<td id="progress_nocolor">&nbsp;</td>
			</tr>
		</table><br />
		<center>'.$l['wait_note'].'</center>
	</div>
	<br /><br /><br />';

}elseif(!empty($installed)){

	$info['install'] = '
	<div class="bg2">
	<h5>'.$l['congrats'].'</h5>
	<hr class="sai_main_head_hr" style="width:20%;">
	<p style="font-size:13px;">
	'.$software['name'].' '.$l['succesful'].' : <br />
	<a href="'.$__settings['softurl'].'" target="_blank">'.$__settings['softurl'].'</a>
	<br /><br />'.$l['enjoy'].'<br /><br />
	'.(!empty($notes) ? $l['install_notes'].' : <br />
	<div class="sai_notes">'.softparse($notes, $soft).'</div><br /><br />' : '').'
	'.$l['please_note'].'<br /><br />
	'.(!empty($globals['ampps_enabled']) && empty($globals['no_ampps']) && $globals['softpanel'] != 'ampps' ? lang_vars($l['ampps_download'], array($software['name'])).'<br /><br />' : '').'
	'.$l['regards'].',<br />
	'.$l['softinstaller'].'
	</p><br /><br />
	<center><b><a href="'.script_link($soft).'&highlight='.$new_insid.'&postact=install" class="sai_head">'.$l['return'].'</a></b></center><br /><br />';

	if(empty($globals['install_tweet_off']) || empty($globals['lictype'])){
		$info['install'] .= '<form method="get" action="https://twitter.com/intent/tweet" id="tweet" onsubmit="return dotweet(this);">
			<div class="row justify-content-center">
			<div class="col-sm-7">
			<div class="card">
				<div class="card-header" style="font-size:14px;">
					<font><b>'.$l['install_tweet_sub'].' :</b></font>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-sm-12">
							<textarea id="txttweet" name="text" cols="80" row="3" style="resize:none; width:100%;">'.loadtweetdata('install_tweet', $l['install_tweet']).'</textarea>
						</div>
					</div>
					<br />
					<div class="row">
						<div class="col-sm-12">
							<input type="submit" value="Tweet!" class="btn btn-info pull-right" onsubmit="return false;" id="twitter-btn" />
						</div>
					</div>
				</div>
			</div>
			</div>
			</div>
		</form>';
	}
	
	$info['install'] .= '<br /></div><!--end of bg2 class--><!--PROC_DONE-->
	<br /><br />';

}

softheader($l['<title>'].$software['name']);

//Added the show_text & hide_text variable for when the header is not loaded (Iframe)
echo '
<script>
	var show_text = "'.$l['show'].'";
	var hide_text = "'.$l['hide'].'";
</script>';

$loadedinfo = array('install', 'overview', 'features', 'reviews', 'ratings');

?>
<script language="JavaScript" src="<?php echo $theme['url'].'/js/tabber.js';?>" type="text/javascript">
</script>
<script language="JavaScript" id="ratings_js_file" type="text/javascript"></script>
<script language="JavaScript" id="review_js_file"  type="text/javascript"></script>
<script language="JavaScript" id="reviews_js_file"  type="text/javascript"></script>
<script type="text/javascript">
tabs = new tabber;
tabs.tabs = new Array('<?php echo implode('\', \'', $loadedinfo);?>');
tabs.tabwindows = new Array('<?php echo implode('_win\', \'', $loadedinfo);?>_win');
tabs.inittab = <?php echo '\''.$init_tab.'\';';?>
addonload('tabs.init();loadraterev();check_pass_strength();');

function loadraterev(){
<?php 
	if(empty($globals['off_rating_link']) && $soft < 10000){
		echo '$_(\'ratings_js_file\').src = "'.fastestmirror().'/ratingsjs.php?soft='.$soft.'&user='.$softpanel->user['name'].'&ip='.$_SERVER['SERVER_ADDR'].'";';
	}
		
	if(empty($globals['off_review_link']) && $soft < 10000){
		echo '$_(\'review_js_file\').src =  "'.fastestmirror().'/reviewjs.php?soft='.$soft.'&user='.$softpanel->user['name'].'&ip='.$_SERVER['SERVER_ADDR'].'";';
		echo '$_(\'reviews_js_file\').src =  "'.fastestmirror().'/reviewsjs.php?soft='.$soft.'&user='.$softpanel->user['name'].'&ip='.$_SERVER['SERVER_ADDR'].'";';	
	} 
?>
};

function notifyversion(){
	if(AJAX(window.location+"&notify=true", "notified(re)")){
		return false;
	}else{
		return true;	
	}
};

function notified(re){
	if(re == 1){
		alert('<?php echo $l['notifyversion'] ?>');
	}
};
</script>
<?php

$url = $theme['images'];
$ratings = array();
$deduct = 1;
$r = $scripts[$soft]['ratings'];
for($i_r=1; $i_r<=5; $i_r++){		
	if($r >= 1){
		$ratings[$i_r] = '<i class="fas fa-star" alt="('.number_format($scripts[$soft]['ratings'], 2).' out of 5)"></i>';
	}elseif($r > 0){
		$ratings[$i_r] = '<i class="fas fa-star-half-alt" alt="('.number_format($scripts[$soft]['ratings'], 2).' out of 5)"></i>';
	}else{
		$ratings[$i_r] = '<i class="far fa-star" alt="('.number_format($scripts[$soft]['ratings'], 2).' out of 5)"></i>';
	}
	$r = $r - $deduct;
}	

// For custom themes
if($soft > 10000){
	if(file_exists($globals['euthemes'].'/'.$globals['theme_folder'].'/images/topscripts/48/'.$iscripts[$soft]['softname'].'.png')){
		$custom_48 = $theme['images'].'topscripts/48/'.$iscripts[$soft]['softname'].'.png';
	}else{
		$custom_48 = $theme['images'].'/custom.png';
	}
}

echo '<div class="bg">
	<div id="currentrating" style="display:none"></div>
	<div class="row">
		<div class="col-md-1 col-sm-2 col-2 logo_style">
			'.(!empty($custom_48) ? '<img src="'.$custom_48.'" alt="">' : '<img src="'.$globals['softimages'].'top15/48/'.$scripts[$soft]['softname'].'.png" >').'
		</div>
		<div class="col-md-11 col-sm-10 col-10 details_style" style="padding-left:0px;">
			<span class="sai_process_heading mr-1">'.$software['name'].'</span>'.($soft > 10000 ? '' : '
			<span class="someclass sai_coverstars" title="'.$scripts[$soft]['ratings'].'">'.implode('', $ratings).'</span><br/>').'

			<p class="details pl-2">
				<span class="details-label">'.$l['software_ver'].'</span> : '.(!empty($tmp_ver) ? $tmp_ver : $software['ver']).'
				<a href="javascript" onclick="notifyversion(); return false;" class="someclass" title="'.$l['notify_ver'].'">
					<i class="fas fa-comment-alt px-1 sai_icons" style="color:#4099FF;"></i>
				</a>
			</p>

			<p class="details pl-2">
				<span class="details-label">'.(!empty($info['release_date']) ? $l['release_date'].'</span> : '.$info['release_date'] : '').'
				'.(!empty($info['changelog']) ? '
				<a href="" data-toggle="modal" data-target="#changelog_div" class="sai_changelogbut">'.$l['changelog'].'</a>' : '').'
			</p>
		</div>
	</div><br />
	
	<style>
	
		.logo_style{
			padding-left: 25px !important;
			padding-top: 12px !important;
		}
		
		@media screen and (min-width: 360px) and (max-width: 767px){
			.logo_style{
				padding: 18px 0px 10px 8px !important;
			}
			.related_scripts{
				padding-left: 0px !important;
			}
		}
		@media screen and (min-width: 768px) and (max-width: 799px){
			.logo_style{
				padding: 18px 0px 10px 8px !important;
			}
		}
	</style>
	
	<script type=text/javascript>';
	if(!empty($softpanel->pheader)){
		if(is_cp_theme('x3')){
			echo '
			$(document).ready(function(){
				
				// This is as per new method. Required
				$(".details_style").css("padding-left","40px");
				
				$(".ver_style").css("margin-left","0px");
				$(".release_style").css("margin-left","0px");
				$(".change_style").css({"margin-left":"0px", "margin-top":"-15px"});
			});';
		}else{
			echo '
			$(document).ready(function(){
				$(".ver_style").css("margin-left","0px");
				$(".release_style").css("margin-left","0px");
				$(".change_style").css({"margin-left":"0px", "margin-top":"-10px"});
			});';
		}
	}
	echo '
	</script>
	
	<div class="old_tab">
		<div class="sai_tabs row">
			<div class="sai_single-tab" style="width:16%">
				<a href="javascript:tabs.tab(\'install\')" class="sai_tab" id="install">'.$l['install'].'</a>
			</div>
			<div>
				<a class="sai_insbut" id="show_install_option"><span class="caret" style="cursor:pointer; padding:6px;"></span></a>
			</div>
			<div class="sai_single-tab" style="width:16%">
				<a href="javascript:tabs.tab(\'overview\')" class="sai_tab" id="overview">'.$l['overview'].'</a>
			</div>
			<div class="sai_single-tab" style="width:16%">
				<a href="javascript:tabs.tab(\'features\')" class="sai_tab" id="features">'.$l['features'].'</a>
			</div>
			'.(empty($globals['off_demo_link']) ? '<div class="sai_single-tab" style="width:16%"><a href="'.($soft >= 10000 && !empty($info['demo']) ? $info['demo'] : $globals['ind'].'act=demos&soft='.$soft).'" class="sai_tab" id="demo" target="_blank">'.$l['demo'].'</a></div>' : '').'
			'.(empty($globals['off_rating_link']) && $soft < 10000 ? '<div class="sai_single-tab" style="width:16%"><a href="javascript:tabs.tab(\'ratings\')" class="sai_tab" id="ratings">'.$l['ratings'].'</a></div>' : '').'
			'.(empty($globals['off_review_link']) && $soft < 10000 ? '<div class="sai_single-tab" style="width:16%"><a href="javascript:tabs.tab(\'reviews\')" class="sai_tab" id="reviews">'.$l['reviews'].'</a></div>' : '').'
		</div>
		<div class="quick_install_dropdown sai_single-tab" id="quick_install_dropdown" style="display:none;">
			<div id="quick_install_btn" class="quick_install_dropdown_btn">
				<a href="javascript:tabs.tab(\'install\')">'.$l['quick_install'].'</a>
			</div>
			<div id="custom_install_btn" class="quick_install_dropdown_btn">
				<a href="javascript:tabs.tab(\'install\')">'.$l['custom_install'].'</a>
			</div>
		</div>
	</div><br />
	
	<div class="new_tab">
		<nav class="navbar navbar-default p-0">
			<div class="navbar-header w-100 p-3">
				<button type="button" class="navbar-toggle d-inline-block pull-right" data-toggle="collapse" data-target="#myNavbar">
					<i class="fas fa-bars"></i>
				</button>
				<ul class="nav">
					<li class="active">
						<a href="javascript:tabs.tab(\'install\')" id="install" class="sai_tab2 text text-decoration-none" style="height:40px; top:5px;">'.$l['install'].'</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size:16px;">

						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a href="javascript:tabs.tab(\'install\')" id="quick_install_btn" class="dropdown-item sai_tab2 text-decoration-none">'.$l['quick_install'].'</a>
							<div class="dropdown-divider"></div>
							<a href="javascript:tabs.tab(\'install\')" id="custom_install_btn" class="dropdown-item sai_tab2 text-decoration-none">'.$l['custom_install'].'</a>
						</div>
				  </li>
				</ul>
			</div>
			<div class="collapse navbar-collapse soft-options p-2 px-3" id="myNavbar" data-toggle="collapse" data-target=".navbar-collapse">
				<ul class="nav navbar-nav">
					<a href="javascript:tabs.tab(\'overview\')" id="overview" class="sai_tab2 text-decoration-none">
					<li>
						'.$l['overview'].'
					</li>
					</a>
					<div class="dropdown-divider"></div>
					<a href="javascript:tabs.tab(\'features\')" id="features" class="sai_tab2 text-decoration-none">
					<li>
						'.$l['features'].'
					</li>
					</a>
					<div class="dropdown-divider"></div>
					'.(empty($globals['off_demo_link']) ? '
						<a href="'.($soft >= 10000 && !empty($info['demo']) ? $info['demo'] : $globals['ind'].'act=demos&soft='.$soft).'" class="sai_tab2 text-decoration-none" id="demo" target="_blank">
					<li>
					'.$l['demo'].'
					</li>
					</a>' : '').'
					<div class="dropdown-divider"></div>
					'.(empty($globals['off_rating_link']) && $soft < 10000 ? '
						<a href="javascript:tabs.tab(\'ratings\')" class="sai_tab2 text-decoration-none" id="ratings">
					<li>
					'.$l['ratings'].'
					</li>
					</a>' : '').'
					<div class="dropdown-divider"></div>
					'.(empty($globals['off_review_link']) && $soft < 10000 ? '
						<a href="javascript:tabs.tab(\'reviews\')" class="sai_tab2 text-decoration-none" id="reviews">
					<li>
					'.$l['reviews'].'
					</li>
					</a>' : '').'
				</ul>
			</div>
		</nav>
	</div>';
	
	apply_filters('pre_software_overview_theme', $soft);
	
	if(!empty($outdated_script)){
		echo '<div class="alert alert-warning text-center mt-2">'.lang_vars($l['outdated_script'], array($software['name'])).'</div>';
	}
	
	echo '

	<script type="text/javascript">
	$_(tabs.inittab).className = tabs.tabbedclass;
	var softid = '.$soft.'

	tabs.override = function(id){
		if(id == \'install\'){
			$_(\'install\').className = \'sai_insbutclicked\';
		}else{
			$_(\'install\').className = \'sai_insbut\';
		}
	};
	</script>';

	//Parse and take care of images
	$info['overview'] = (!empty($info['changelog']) ? '
	<div class="modal fade" id="changelog_div" role="dialog">
		<div class="modal-dialog modal-lg">
		  <!-- Modal content-->
		  <div class="modal-content">
			<div class="modal-header">
			<h4 class="modal-title">Changelog</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>          
			</div>
			<div class="modal-body">
			  '.$info['changelog'].'
			</div>
		  </div>
		</div>
	</div>' : '').'
	<div class="bg2">
		<div class="row">
			<div class="col-sm-12 col-xs-12">
				<p class="softphrase-overview">'.softparse($info['overview'], $soft).'</p>
				<div class="row">
					<div class="col-sm-12 col-md-3 col-xs-12">					
						<span class="sai-icon-style">
							<i class="fas fa-inbox"></i>
						</span>					
						<span class="sai_head">'.$l['space_req'].'</span>
						<span class="sai_exp2 mt-2 d-block">'.
							(!empty($globals['off_available_space']) ? '' : $l['available_space'].' : '.(is_numeric($softpanel->spaceremain) ? number_format($softpanel->spaceremain/1024/1024, 2) : $softpanel->spaceremain).' '.$l['mb'].'<br />')
							.$l['req_space'].' : '.number_format($software['spacereq']/1024/1024, 2).' '.$l['mb']
						.'</span>
					</div>
					<div class="col-sm-12 col-md-3 col-xs-12">					
						<a href="'.$info['support'].'" class="text-decoration-none">
							<span class="sai-icon-style">
								<i class="fas fa-question-circle"></i>
							</span>
						</a>					
						<span class="sai_head">'.$l['software_support'].'</span><br/>
						<a class="mt-2 d-block support-link" href="'.$info['support'].'" target="_blank">'.$l['support_link'].'</a>
						<span class="sai_exp2">'.$l['support_note'].'</span>
					</div>
				</div>
			</div>
		</div>
		<div class="row mt-4 text-center">
			<div class="col-6 col-lg-2">
				<a href="javascript:tabs.tab(\'install\')" id="install_now">
					<span class="btn sai-button">'.$l['install_now'].'</span>
				</a>
			</div>
			<div class="col-6 col-lg-2">
				<a href="javascript:tabs.tab(\'overview\')" id="my_app">
					<span class="btn sai-button">'.$l['my_apps'].'</span>
				</a>
			</div>	
		</div>
	</div><!--end of bg2 class-->';


	if(!empty($installations[$soft])){

		$info['overview'] .= '
		<div class="row mt-5">
			<div class="col-12">
				<div class="text-center">
					<span class="sai_newhead d-block" id="current_ins">'.$l['current_ins'].'</span>
					<hr class="sai_main_head_hr">
				</div>
				<div class="table-responsive">';
		$info['overview'] .= '
			<table class="table table-hover installation-list-table">			
				<thead class="sai_head2">
					<tr>
						<th>'.$l['link'].'</th>
						<th>'.$l['ins_time'].'</th>
						<th>'.$l['version'].'</th>
						<th style="text-align:center;">'.$l['options'].'</th>
						<th><input type="checkbox" id="check_all"></th>
					</tr>
				</thead>';
			
			$highlight = optGET('highlight');
			$action = optGET('postact');

		foreach($installations[$soft] as $ik => $iv){
			
			$is_cloneable = is_cloneable($iv['sid']);
			
			$is_upgradable = is_upgradable($ik);
		
			$info['overview'] .= '<tr id="trid' . $ik . '">
				<td class="endurl"><a href="'.$iv['softurl'].'" target="_blank" id="insurl'.$ik.'">'.$iv['softurl'].'</a>'.(($highlight == $ik && !empty($action)) ? '<span id="highlight" class="ml-1"><b class="sai_highlight">'.$l['act_'.$action].'</b></span>' : '').'</td>				
				<td>
					'.datify($iv['itime']).'
				</td>
				<td>
					'.$iv['ver'].(!empty($is_upgradable) ? ' <a href="'.$globals['ind'].'act=upgrade&insid='.$ik.'" title="'.$l['upd_to'].' '.implode(' or ', $is_upgradable).'" class="someclass"><i class="fas fa-sync-alt px-1 sai_icons" style="color:#1565C0; font-size:1.2em;"></i></a>' : '').'
				</td>
				<td align="right">'.
				(!empty($is_cloneable) ? ' <a href="'.$globals['ind'].'act=sclone&insid='.$ik.'" title="'.$l['clone'].'" class="someclass mr-1"><i class="fas fa-copy px-1 sai_icons" style="color:#1565C0;"></i></a>' : '').
				(empty($globals['disable_backup_restore']) ? '<a href="'.$globals['ind'].'act=backup&insid='.$ik.'" title="'.$l['backup'].'" class="someclass mr-1"><i class="fas fa-file-archive px-1 sai_icons" style="color:#119768;"></i></a>' : '').
				'<a href="'.$globals['ind'].'act=editdetail&insid='.$ik.'" title="'.$l['editdetail'].'" class="someclass"><i class="fas fa-pencil-alt px-1 sai_icons" style="color:#FF5D00;"></i></a>
				<a href="'.$globals['ind'].'act=remove&insid='.$ik.'" title="'.$l['remove'].'" class="someclass"><i class="fas fa-trash-alt sai_icons" style="color:red;"></i></a>
					</td>
					<td>
						<input type="checkbox" name="insids[]" id="'.$iv['softurl'].'" value="'.$ik.'" class="shift_select_ins soft_inslist">
					</td>
				</tr>';
		}
		
		$info['overview'] .= '</table>
						</div>
					</div>		
				</div>
		<p class="text-right">
			<span class="sai_head">'.$l['with_selected'].':</span>
			<select name="multi_options" id="multi_options" class="mr-1">
				<option name="todo" id="todo" value="0">---</option>
				<option name="todo" id="todo" value="mult_rem">'.$l['remove_complete'].'</option>
				<option name="todo" id="todo" value="mult_rem_info">'.$l['remove_info'].'</option>
			</select>

			<input type="button" value="'.$l['go'].'" onclick="show_confirm()" class="btn sai-button">
		</p>
		<div id="rem_div"></div>
		
		<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
		insids = new Array();
		removed = new Object();

		function show_confirm(){
			
			insids = new Array();
			removed = new Object();
			
			$sel_opt = $_("multi_options").value;
			
			if($sel_opt != "mult_rem" && $sel_opt != "mult_rem_info"){
				return false;
			}

			// Build the list of Installations to remove
			var field = document.getElementsByName(\'insids[]\');
				insids = new Array();
				var c = 0;
				for(i = 0; i < field.length; i++){
					if(field[i].checked == true){
						insids[c] = field[i].value;
						c++;
					}
				
			}
			//alert(insids);
			
			if(c == 0){
				alert("'.$l['no_sel_inst'].'");
				return false;
			}
			
			var r = confirm("'.$l['del_insid'].'");
			if(r != true){
				return false;
			}
			
			if($sel_opt == "mult_rem_info"){
				remove_by_id(insids[0], "", 0, 1);
			}else{
				remove_by_id(insids[0], "", 0);
			}
		}
		
		function remove_by_id(insid, re, oldinsid, info_only){

			removed[insid] = false;
			info_only = info_only || 0;
			
			if(re.length > 0 && oldinsid > 0){
				if(re == "removed"){
					removed[insid] = true;
				}
			}
			
			nextinsid = 0;
			
			// Find the next INSTALLATION to remove
			for(i = 0; i < insids.length; i++){
				if(typeof(removed[insids[i]]) != "undefined"){
					continue;
				}
				nextinsid = insids[i];
				break;
			}
			
			// If there is something left to be removed
			if(insid != 0){
				var csrf_token = $("#csrf_token").val(); 
		
				try{

					$.ajax({
						type: "POST",
						data: "csrf_token="+csrf_token,
						url: "'.$globals['index'].'act=remove&insid="+insid+"&ajax=1&ssk="+randomstring(32)+"&random="+Math.random()+"&info_only="+info_only,
						// Checking for error
						success: function(data){
							remove_by_id(nextinsid, data, insid, info_only);
						}
					});		
					$_("rem_div").innerHTML = "<br /><br /><p align=\"center\"><img src=\"' . $theme['images'] . 'ajax_remove.gif\"> <br />'.$l['rem_inst_id']. ' ID: " +insid+ ", URL: " + $_("insurl"+insid)+"<br /></p>";
					return true;
				}catch(e){
					return false;
				}
			}
			$_("rem_div").innerHTML = "";
			alert("'.$l['inst_remvd'].'");
			location.reload(true);
			return true;
		}
		
		$(document).ready(function(){
			$("#check_all").on("click", function(event){
				if(this.checked == true){
					$(".soft_inslist").prop("checked", true);
				}else{
					$(".soft_inslist").prop("checked", false);
				}
			});
			
			$(".sai_altrowstable tr").mouseover(function(){
				var old_class = $(this).attr("class");
				
				if(old_class == "nohover") return;
				
				//alert(old_class);
				$(this).attr("class", "sai_tr_bgcolor");
				
				$(this).mouseout(function(){
					$(this).attr("class", old_class);
				});
				
			});
			
			$("#my_app").click(function(){
				goto_id("current_ins");
			});';
		
	// If we get anything in $highlight than only we have to call this JS function other wise it will cause the JS error.
	if(!empty($highlight)){
		$info['overview'] .= 'goto_id("insurl'.$highlight.'");
		$("#highlight").fadeOut(10000);';
	}
		
	$info['overview'] .= '});

		// ]]></script>';
	}

	if(count($allcatwise[$software['type']][$software['cat']]) > 2 && $software['cat'] != 'others' && empty($globals['disable_related_scripts'])){

		$info['overview'] .= '
	<div class="bg2">
		<div class="row mt-2">
			<div class="col-12 ">
				<span class="sai_newhead d-block" id="current_ins">'.$l['related_scripts'].'</span>
				<hr class="sai_main_head_hr">
			</div>		
		</div>
		
		<div class="row related_scripts">';
					
		$i = 0;
		
		foreach($allcatwise[$software['type']][$software['cat']] as $k => $v){

			if(($k == $soft) || (!empty($scripts[$k]['parent']) && !empty($iscripts[$scripts[$k]['parent']]))){
				continue;
			}
			
			// Show only 5 scripts
			if($i == 5){
				break;
			}
			
			$info['overview'] .='
			<div class="col-sm-3 col-md-2 col-6">
				<a href="'.script_link($k).'" title="'.$v['desc'].'" alt="" class="someclass softtooltip related-scripts">
					<div class="sai_blog_script">
						<div class="sai_demo_script_logo">
							<img src="'.$globals['softimages'].'top15/48/'.$v['softname'].'.png" >	
						</div>
						<div class="sai_script_name">'.$v['name'].'</div>
					</div>
				</a>
			</div>';
			
			$i++;
			
		}
		
		$info['overview'] .='</div><!--end of row-->
	</div><!--end of bg2 class-->';
	}

	//Parse and take care of images
	$info['features'] = '<div class="bg2"><br />'.softparse($info['features'], $soft).'</div><!--end of bg2 class-->';

	$info['ratings'] = '';
	$info['reviews'] = '<div class="bg2"><div id="allreviews"></div></div><!--end of bg2 class-->';

	foreach($info as $k => $v){
		
		if(in_array($k, array('demo', 'support', 'changelog'))) continue;
		
		echo '<div id="'.$k.'_win" style="display: '.($init_tab == $k ? "block" : "none").'; width:100%;"><br />
		'.$v.'
		</div>';

	}

echo '</div>';

softfooter();

}

?>