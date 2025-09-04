<?php

//////////////////////////////////////////////////////////////
//===========================================================
// categories_theme.php
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

function topscripts_theme(){

global $theme, $globals, $user, $l, $langs, $skins, $error, $saved, $categories, $iscripts, $scripts, $top, $top_selected, $reset_topscripts, $softpanel;

softheader($l['<title>']);

echo '<div class="container-fluid">
	<div class="container my-4">
		<div class="sai-page-title text-center">
			<h2>'.$l['show_top_scripts'].'</h2>
		</div>
	</div>
</div>';

if(!empty($saved)){
	echo '<div class="container-fluid width80">
			<div class="alert alert-success text-center"><i class="fas fa-check sai_icons mr-2"></i>
			'.$l['settings_saved'].'</div>
		</div>';
}

if(!empty($reset_topscripts)){
	echo '<div class="container-fluid width80">
			<div class="alert alert-success text-center"><i class="fas fa-check sai_icons mr-2"></i>
			'.$l['reset_topscripts_done'].'</div>
		</div>';
}

echo '<script language="javascript">
	function reset_topscript(){
		var cnf = confirm("'.$l['resetscripts_warning'].'");
		if(cnf){
			window.location = "'.$globals['index'].'act=topscripts&reset_topscripts=1";
		}
		return false;
	};
</script>
<script language="javascript" src="'.$theme['url'].'/js/script_select.js" type="text/javascript"> </script>
<script language="javascript" src="'.$theme['url'].'/js/jquery.js" type="text/javascript"> </script>';

echo '<form accept-charset="'.$globals['charset'].'" name="reordercat" method="post" action="" clss="form-horizontal">
<div class="container-fluid">';

error_handle($error);

echo '<div class="row">
	<div class="col-12 col-lg-10 offset-lg-1">
		<div class="sai-card p-4">
			<div class="sai_main_head">
				<h2 class="sai-heading mb-2">'.$l['top_scripts_set'].'</h2>
				<hr class = "sai_main_head_hr"/>
			</div>
			<div class="form-group">
				<input type="checkbox" name="enable_topscripts" id="enable_topscripts" '.(!empty($globals['show_top_scripts']) ? "checked=checked" : "").'>		
				<label for="enable_topscripts" class="sai-label">'.$l['enable_apps'].'</label>
				<span class="sai_exp2 d-block mb-1">'.$l['enable_apps_exp'].'</span>
			</div>
			
			<div class="form-group">
				<input type="checkbox" name="append_apps" id="append_apps" '.POSTchecked('append_apps', $globals['append_apps']).'>
				<label for="append_apps" class="sai-label">'.$l['append_apps'].'</label>
				<span class="sai_exp2 d-block mb-1">'.$l['append_apps_exp'].'</span>
			</div>';
			
		if(method_exists($softpanel,'save_topscripts_index')){
		echo '<div class="form-group">
				<label for="show_top_scripts" class="sai-label d-block">'.$l['show_top_scripts'].'</label>
				<span class="sai_exp2 d-block mb-1">'.$l['show_top_scripts_exp'].'</span>
				<input type="text" class="form-control" name="show_top_scripts" id="show_top_scripts" size="30" value="'.aPOSTval('show_top_scripts', $globals['show_top_scripts']).'" />
			</div>
		
			<div class="form-group">
				<input type="checkbox" name="disable_cats" id="disable_cats" '.POSTchecked('disable_cats', $globals['disable_cats']).'>
				<label for="disable_cats" class="sai-label">'.$l['disable_cats'].'</label>
				<span class="sai_exp2 d-block mb-1">'.$l['disable_cats_exp'].'</span>
			</div>
		
			<div class="form-group">
				<input type="checkbox" name="enable_myins" id="enable_myins" '.POSTchecked('enable_myins', $globals['enable_myins']).'>
				<label for="enable_myins" class="sai-label">'.$l['enable_myins'].'</label>
				<span class="sai_exp2 d-block mb-1">'.$l['enable_myins_exp'].'</span>
			</div>';

			if($globals['softpanel'] == 'cpanel'){
				echo '<div class="form-group">
					<input type="checkbox" name="show_in_notice" id="show_in_notice" '.POSTchecked('show_in_notice', $globals['show_in_notice']).'>
					<label for="show_in_notice" class="sai-label">'.$l['show_in_notice'].'</label>
					<span class="sai_exp2 d-block mb-1">'.$l['show_in_notice_exp'].'</span>					
				</div>
				
				<div class="form-group">
					<label for="group_order" class="sai-label d-block">'.$l['group_order'].'</label>
					<span class="sai_exp2 d-block mb-1">'.$l['group_order_exp'].'</span>
					<input type="text" class="form-control" name="group_order" id="group_order" size="30" value="'.optPOST('group_order', $globals['group_order']).'">
				</div>';
			}
		}
	echo '</div>
		<div class="sai-card p-4 mt-4">
			<div class="sai_main_head">
				<h2 class="sai-heading mb-2">'.$l['select_from_below'].'</h2>
				<hr class = "sai_main_head_hr"/>
			</div>
			<div class="sai_form">
				<div class="row">
					<div class="col-5">
						<label for="softpath" class="sai-label d-block">'.$l['select_top_scripts'].' :</label>
						<link href="'.$globals['mirror_images'].'sprites/32.css" rel="stylesheet" type="text/css" />      
						<div id="all_users" class="all-scripts w-100 mt-3 p-2">';
						
						foreach($top as $k => $v){
							
							if($k == $top_selected[$k]){
								continue;	 
							}
							
							echo '<div id="user'.$k.'" sid="'.$k.'" class="innertxt">
									<div class="sp32_'.$iscripts[$k]['softname'].' d-inline-block"></div>
									<span class="sai-label align-top script-label ml-2"> '.$iscripts[$k]['name'].'</span>
								</div>
								<input type="hidden" id="select'.$k.'" class="selectit" />';
						}
						
						echo '</div>		
					</div>
					
					<div class="col-2 my-auto text-center">
						<div class="align-middle">
							<a href="javascript:void(0);" id="move_right" class="d-block mb-2">
								<i class="fas fa-angle-double-right soft-icons"></i>
							</a>
							<a href="javascript:void(0);" id="move_left" class="d-block">
								<i class="fas fa-angle-double-left soft-icons"></i>
							</a>
							<div class="float_break"></div>   
						</div>
					</div>
					
					<div class="col-5">
						<label for="softpath" class="sai-label d-block">'.$l['selected_top_scripts'].' :</label>
						<div id="selected_users" class="all-scripts w-100 mt-3 p-2">';
						if(count($top_selected) > 0){
							foreach($top_selected as $k => $v){
								
								if(empty($iscripts[$k])){
									continue;	 	
								}								
								echo '<div id="user'.$k.'" sid="'.$k.'" class="innertxt2">
									<div class="sp32_'.$iscripts[$k]['softname'].' d-inline-block"></div>
									<span  class="sai-label align-top script-label ml-2">'.$iscripts[$k]['name'].'</span>
									<input type="hidden" id="select'.$k.'" class="selectit" />
								</div>';
							}
						}						
					echo '</div>
					</div>
				</div>
				<div class="row mt-4">
					<div class="col-12 mx-auto">
						<span class="bboxtxt sai-label d-block" >'.$l['script_note'].' :</span> 
						<span class="sai_exp2 d-block mb-1">'.$l['script_note_exp'].'</span>
					</div>
				</div>		
			</div>
		</div>
		</div>
	</div>
</div>

</div><br />';

echo '<input type="hidden" name="hidden_selected" id="hidden_selected" />
<p align="center">
	'.csrf_display().'
	<input type="submit" name="savescript" value="'.$l['savescript'].'" class="flat-butt" />&nbsp;
	<input type="button" name="reset_topscripts" value="'.$l['reset_topscripts'].'" class="flat-butt" onclick="reset_topscript();" />
</p>
'.(empty($globals['lictype']) ? '<div class="sai_notebox width80"><font class="bboxtxt">'.$l['soft_free_note'].'</font></div>' : '').'<br />
</form>';

echo '<script language="javascript">

	$(document).ready(function () {
		// Uncheck each checkbox on body load
		//$("#all_users .selectit").each(function() {this.checked = false;});
		//$("#selected_users .selectit").each(function() {this.checked = false;});
		
		//onload we have to save the PREVIOUS slected scripts
		var scripts = "";
		$("#selected_users .innertxt2").each(function() {
			var s_id = $(this).attr("sid");
			if (scripts == "") 
				scripts += s_id;
			else
				scripts += "," + s_id;
		});
		document.getElementById("hidden_selected").value = scripts;
		
    	$("#all_users .innertxt").click(function() {
			
			var color = $(this).css("background-color");
			if(color != "transparent" && (!color.match(/rgb(a?)\(0/))){
				$(this).css("background-color","transparent");
			}else{
				$(this).css("background-color","#8FC2FF");
			}
			var userid = $(this).attr("id");
			$("#" + userid).toggleClass("innertxt_bg");
		});
		
		$("#selected_users .innertxt2").click(function() {
			
			var color = $(this).css("background-color");
			if(color != "transparent" && (!color.match(/rgb(a?)\(0/))){
				$(this).css("background-color","transparent");
			}else{
				$(this).css("background-color","#8FC2FF");
			}
			var userid = $(this).attr("id");
			$("#" + userid).toggleClass("innertxt_bg");
		});
		
		$("#move_right").click(function() {
			var users = $("#selected_users .innertxt2").length;
			var selected_users = $("#all_users .innertxt_bg").length;
			
			/*if (users + selected_users > 14) {
				alert("You can only chose maximum 14 Scripts.");
				return;
			}*/
			
			$("#all_users .innertxt_bg").each(function() {
				var user_clone = $(this).clone(true);
				$(user_clone).removeClass("innertxt");
				$(user_clone).removeClass("innertxt_bg");
				$(user_clone).addClass("innertxt2");
				$(user_clone).css("background-color","transparent");
				
				$("#selected_users").append(user_clone);
				$(this).remove();
			});
			
			var scripts = "";
			$("#selected_users .innertxt2").each(function() {
				var s_id = $(this).attr("sid");
				if (scripts == "") 
					scripts += s_id;
				else
					scripts += "," + s_id;
			});
			document.getElementById("hidden_selected").value = scripts;
		});
		
		$("#move_left").click(function() {
			$("#selected_users .innertxt_bg").each(function() {
				
				
				var user_clone = $(this).clone(true);
				$(user_clone).removeClass("innertxt2");
				$(user_clone).removeClass("innertxt_bg");
				$(user_clone).addClass("innertxt");
				$(user_clone).css("background-color","transparent");
				
				$("#all_users").append(user_clone);
				$(this).remove();
			});
			
			var scripts = "";
			$("#selected_users .innertxt2").each(function() {
				var s_id = $(this).attr("sid");
				if (scripts == "") 
					scripts += s_id;
				else
					scripts += "," + s_id;
			});
			document.getElementById("hidden_selected").value = scripts;
		});
		
		$("#view").click(function() {
			var scripts = "";
			$("#selected_users .innertxt2").each(function() {
				var s_id = $(this).attr("sid");
				if (scripts == "") 
					scripts += s_id;
				else
					scripts += "," + s_id;
			});
			document.getElementById("hidden_selected").value = scripts;
			//alert(scripts);
			
		});
	});		

</script>';

softfooter();

}

?>