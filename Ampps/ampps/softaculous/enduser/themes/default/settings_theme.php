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

global $user, $globals, $l, $theme, $softpanel, $iscripts, $catwise, $error;
global $installations, $langs, $saved, $deleted, $timezone_list;

softheader($l['<title>']);

echo '
<link rel="stylesheet" type="text/css" href="'.$theme['url'].'/spectrum.css?'.$GLOBALS['globals']['version'].'" />
<form accept-charset="'.$globals['charset'].'" name="editsettings" method="post" action="" id="editsettings" class="form-horizontal">

<div class="bg"><br />
	<div class="row">
		<div class="col-12 text-center sai_main_head">
			<i class="fas fa-wrench fa-2x mr-2" style="color:#00A0D2;"></i>
			<span class="form-title">'.$l['settings'].'</span>
		</div>
	</div><hr />';
	error_handle($error, '100%');
	
	if(!empty($saved)){
		echo '<div class="alert alert-success" style="padding:10px;font-size:15px;"><center><img src="'.$theme['images'].'message_success.gif">&nbsp;&nbsp;'.$l['settings_saved'].'</div></center>';
	}
	
	if(!empty($deleted)){
		echo '<div class="alert alert-warning" style="padding:10px;font-size:15px;"><center><a href="#close" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.$l['backuploc_deleted'].'</center></div>';
	}
	
	if(empty($globals['disable_manage_sets'])){
		
		echo '<div class="row">
			<div class="col-12 px-4">
				<a class="sai-info-link d-inline-block pull-right" href="'.$globals['ind'].'act=manage_sets">'.$l['manage_sets'].'</a>
			</div>
		</div>';
	}
	
	echo'
	<div class="row mt-4">
		<div class="col-sm-6 col-xs-12 px-4">
			<label  for="choose_lang" class="sai_head">'.$l['choose_lang'].'</label>
			<span class="sai_exp">'.$l['exp_lang'].'</span>
			<select name="language" id="choose_lang" class="form-control">';
				foreach($langs as $k => $v){
					echo '<option class="form-control" value="'.$v.'" '.(empty($_POST['language']) && (empty($user['language']) ? $globals['language'] : $user['language']) == $v ? 'selected="selected"' : (trim($_POST['language']) == $v ? 'selected="selected"' : '') ).'>'.(!empty($l['label_'.$v]) ? $l['label_'.$v] : _ucfirst($v)).'</option>';
				}
			echo '</select>
		</div>
		<div class="col-sm-6 col-xs-12 px-4">
			<label for="timezone" class="sai_head">'.$l['timezone'].'</label>
			<select name="timezone" id="timezone" class="form-control">
				<option value="0" '.(empty($_POST['timezone']) && empty($user['timezone']) ? 'selected="selected"' : '').' >'.$l['default_timezone'].'</option>';
				foreach($timezone_list as $zone => $zone_details){
					echo '<option class="form-control" value="'.$zone.'" '.(POSTval('timezone', $user['timezone']) === $zone ? 'selected="selected"' : '').' >('.$zone_details['pretty_offset'].') '.$zone_details['display_timezone'].'</option>';
				}
			echo '
			</select>
		</div>			
	</div><br />';

	echo '
	<div class="row">
		<div class="col-sm-6 col-xs-12 px-4 mb-3">
			<input type="checkbox" name="arrange_domain" id="arrange_domain" '.POSTchecked('arrange_domain', $user['arrange_domain']).' />
			<label for="arrange_domain" class="sai_head ml-1">'.$l['arrange_domain'].'</label>
			<span class="sai_exp">'.$l['exp_arrange_domain'].'</span>
		</div>';
		
		if(empty($globals['off_backup_au'])){
			echo '<div class="col-sm-6 col-xs-12 px-4 mb-3">
				<input type="checkbox" name="off_backup_au" id="off_backup_au" '.POSTchecked('off_backup_au', $user['off_backup_au']).' />
				<label for="off_backup_au" class="sai_head ml-1">'.$l['off_backup_au'].'</label>
				<span class="sai_exp">'.$l['exp_off_backup_au'].'</span>
			</div>';
		}
	
		if($theme['this_theme'] == 'modern' && empty($globals['off_customize_theme'])){
			echo '<div class="col-sm-6 col-xs-12 px-4 mb-3">
				<input type="checkbox" name="user_defined_color" id="user_defined_color" '.POSTchecked('user_defined_color', $user['user_defined_color']).' onchange="change_div(this.id);" />
				<label for="user_defined_color" class="sai_head ml-1">'.$l['use_custom_color'].'</label>
				<span class="sai_exp">'.$l['exp_use_custom_color'].'</span>
			</div>';
		}
			
		if(empty($globals['off_enduser_suggestions']) && !is_billing_request()){
			echo '<div class="col-sm-6 col-xs-12 px-4 mb-3">
			<input type="checkbox" name="disable_suggestions" id="disable_suggestions" '.POSTchecked('disable_suggestions', $user['disable_suggestions']).' />
				<label for="disable_suggestions" class="sai_head ml-1">'.$l['disable_suggestions'].'</label>
				<span class="sai_exp">'.$l['exp_disable_suggestions'].'</span>
			</div>';
		}
	
	echo '</div><br />'; // end row

	if($theme['this_theme'] == 'modern' && empty($globals['off_customize_theme'])){
		
	echo '
	<div class="row">
		<div class="col-sm-6 col-xs-12">
		<div id="show_color_option" '.(!empty($user['user_defined_color']) ? '' : 'style="display:none;"').'>
		<div class="row">
			<div class="col-sm-8">
				<label class="sai_head">'.$l['left_panel_bg'].'</label>
				<span class="sai_exp">'.$l['left_panel_bg_exp'].'</span>
			</div>
			<div class="col-sm-4">
				<input type="color" name="color" id="left_panel_bg" class="changecolor"/>&nbsp;&nbsp;
				<input type="hidden" name="left_panel_bg" value="'.aPOSTval('left_panel_bg', $user['color_theme']['left_panel_bg']).'" id="hidden_left_panel_bg">
				<input type="color" name="color" id="left_panel_cathead_hover" class="changecolor" />
				<input type="hidden" name="left_panel_cathead_hover" value="'.aPOSTval('left_panel_cathead_hover', $user['color_theme']['left_panel_cathead_hover']).'" id="hidden_left_panel_cathead_hover">
			</div>
		</div><br />
		
		<div class="row">
			<div class="col-sm-8">
				<label class="sai_head">'.$l['text_color'].'</label>
				<span class="sai_exp">'.$l['text_color_exp'].'</span>
			</div>
			<div class="col-sm-4">
				<input type="color" name="color" id="left_panel_cathead" class="changecolor"/>&nbsp;&nbsp;
				<input type="hidden" name="left_panel_cathead" value="'.aPOSTval('left_panel_cathead', $user['color_theme']['left_panel_cathead']).'" id="hidden_left_panel_cathead">
				<input type="color" name="color" id="left_panel_scriptname" class="changecolor"/>
				<input type="hidden" name="left_panel_scriptname" value="'.aPOSTval('left_panel_scriptname', $user['color_theme']['left_panel_scriptname']).'" id="hidden_left_panel_scriptname">
			</div>
		</div><br />
		</div>
		</div>
	</div>
	
	<div class="row">
		<div class="col-12 px-4 text-center">
			<input type="submit" class="btn sai-button" name="editsettings" value="'.$l['edit_settings'].'" /><br /><img id="waiting" src="'.$theme['images'].'progress.gif" style="display:none">
		</div>
	</div>';
		
	}

	if(empty($globals['off_rbackup']) && empty($globals['disable_backup_restore'])){
		
	echo'<br />
	<div class="row mt-4">
		<div class="col-12 px-4 text-center">
			<label class="page-title">'.$l['list_backup_locs'].'<hr /></label>
			
		</div>
		<div class="col-12 px-4">
			<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
				function conf_del(){
					return confirm("'.$l['conf_del'].'");
				};
			// ]]></script>
			<table border="0" cellpadding="5" cellspacing="0" width="100%" class="table table-hover mb-2 borderless backup-table">
				<thead class="sai_head2">
					<th>'.$l['default'].'</th>
					<th style="min-width:20%;">'.$l['backuploc_name'].'</th>
					<th>'.$l['backup_proto'].'</th>
					<th>'.$l['backuploc'].'</th>
					<th>'.$l['backuploc_edit'].'</th>
					<th>'.$l['backuploc_del'].'</th>
				</thead>';
				
				$local_backup_dir = $user['backup_dir'];
				$local_backup_dir = apply_filters('show_local_backup_dir', $local_backup_dir);
				
				if(empty($globals['disable_local_backup'])){
				echo '
				<tr>
					<td style="text-align: center;"><input type="radio" name="default_backup_location" value="0" '.(!empty($_POST) ? (empty($_POST['default_backup_location']) ? 'checked="checked"' : '') : (empty($user['default_backup_location']) ? 'checked="checked"' : '')).' /></td>
					<td>'.$l['local_folder'].'</td>
					<td align="center">-</td>
					<td>'.$local_backup_dir.'</td>
					<td align="center">-</td>
					<td align="center">-</td>
				</tr>';
				}
				
				if(!empty($user['remote_backup_locs'])){
					foreach($user['remote_backup_locs'] as $k => $v){
						echo '<tr>
							<td style="text-align: center;"><input type="radio" name="default_backup_location" value="'.$k.'" '.POSTradio('default_backup_location', $k, $user['default_backup_location']).' /></td>
							<td>'.$v['name'].'</td>
							<td>'.$l['backup_'.$v['protocol']].'</td>
							<td>'.$v['backup_loc'].'</td>
							<td align="center"><a href="'.$globals['ind'].'act=editbackuploc&loc_id='.$k.'" title="'.$l['backuploc_edit'].'" class="someclass"><i class="fas fa-pencil-alt px-1 sai_icons" style="color:#FF5D00;"></i></a></td>
							<td align="center"><a href="'.$globals['ind'].'act=settings&del_loc_id='.$k.'" onclick="return conf_del();" title="'.$l['backuploc_del'].'" class="someclass"><i class="fas fa-trash-alt sai_icons" style="color:red;"></i></a></td>
						</tr>';
					}
				}
				
			echo '</table><br/>
			<div class="text-center mt-3">
				<a class="sai-btn-link" href="'.$globals['ind'].'act=addbackuploc" style="text-decoration:none;">'.$l['add_backup_loc'].'</a>
			</div>
		</div>
	</div>
	
	<div class="row my-5">
		<div class="col-12 px-4 text-center">
			<input type="submit" class="btn sai-button" name="editsettings" value="'.$l['edit_settings'].'" /><br /><img id="waiting" src="'.$theme['images'].'progress.gif" style="display:none">
		</div>
	</div>';
	
	}
	
	echo '
</div><br /><!--end of bg class-->
'.csrf_display().'
</form>';

if($theme['this_theme'] == 'modern'){
	echo '
	<script src="'.$theme['url'].'/js/spectrum.js" type="text/javascript"></script>
	<script type="text/javascript">
	
	function change_div(id){
	
		//alert($_(id).checked);
		
		if($_(id).checked == true){
			$("#show_color_option").show();
		}else{
			$("#show_color_option").hide();
		}
	}
	
	function reset_theme(){
		$("#user_defined_color").val("0");
		$("#editsettings").submit();
	}
	
	function updateColor(color, id) {
		
		var hexColor = "transparent";
		if(color) {
			hexColor = color.toHexString();
		}
		if(hexColor == "transparent") return;
		
		// Set the hidden value so that we can save the settings of user
		$("#user_defined_color").val("1");
		
		// For changing text colors of category heading
		if(id == "left_panel_cathead"){
			$(".soft_cathead a, .software-type a, .software-type i, .left-option-link a").css("color", hexColor);
			$(".soft_nav a").css("color", hexColor);
			$(".fa").css("color", hexColor);
			
			// set the hidden value so that it can be saved
			$("#hidden_left_panel_cathead").val(hexColor);
		}
		
		// For changing text colors of category heading hover color
		if(id == "left_panel_cathead_hover"){
			try{
				$(".soft_cathead:hover, .soft_cathead_slide:hover").css("background-color", hexColor);
				//$(".soft_cathead_slide:hover").css("background-color", hexColor);
			
				// set the hidden value so that it can be saved
				$("#hidden_left_panel_cathead_hover").val(hexColor);
			}catch(e){
				// do nothing
			}
		}
		
		// For changing text colors of script names
		if(id == "left_panel_scriptname"){
			$(".softlinks li a").css("color", hexColor);
			
			// set the hidden value so that it can be saved
			$("#hidden_left_panel_scriptname").val(hexColor);
		}
		
		// For changing background color
		if(id == "left_panel_bg"){
			$(".left_panel").css("background-image", "none");
			$(".left_panel").css("background-color", hexColor);
			$(".soft_nav, .submenu").css("background", hexColor);
			
			// set the hidden value so that it can be saved
			$("#hidden_left_panel_bg").val(hexColor);
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
	
	';
	
	foreach($user['color_theme'] as $kc => $vc){
		
	echo '$(function() {
			$("#'.$kc.'").spectrum({
				allowEmpty:true,
				color : "'.$vc.'",
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
		});';
	}
	echo '
	</script>';
}// END OF "if($theme['this_theme'] == 'modern'){"

softfooter();

}

?>