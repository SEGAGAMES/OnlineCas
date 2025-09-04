<?php

//////////////////////////////////////////////////////////////
//===========================================================
// manage_sets_theme.php
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

function manage_sets_theme(){

global $globals, $l, $theme, $langs, $error, $sets, $user, $themes_count, $plugins_count, $selected_set, $done;

//Code is placed here to prevent the theme part below this from displaying.
//Search for plugins/themes
if(optGET('search_key')){
	$search_key = inputsec(trim($_GET['search_key']));
	$is_plugin = optGET('plugins');
	search_wp_plugins_themes($search_key, $is_plugin);
	return false;
}

if(isset($_REQUEST['default_value'])){
	if(!empty($error)){
		echo '0'.current($error);
		return false;
	}
}

softheader($l['<title>']);

echo '
<script src="'.$theme['url'].'/js/dropzone.min.js"></script>
<link rel="stylesheet" href="'.$theme['url'].'/css/dropzone.min.css">
<style>
.dz-preview, .dz-image{
	min-height:50px !important;
	height:50px !important;
	padding: 0px !important;
}
.dz-details{
	padding: 0px !important;
}

/* Nav tabs style */
#nav-tab a{
text-decoration: none;
}
</style>
<script language="javascript" type="text/javascript"><!-- // --><![CDATA[

var sets_list = '.json_encode($sets, JSON_FORCE_OBJECT).';

$( document ).ready(function() {
	
	multiple_checks();
	
	$("#create_sets").click(function(){
		$("#add_sets_div").slideToggle();
	});
	
	$("#add_sets").click(function(){
		
		var set_nam = $("#set_input").val();
		var validate = /[a-zA-Z0-9_\- ]+/;
		
		for (var i=0; i < set_nam.length; i++) {
			
			if(!(validate.test(set_nam[i]))){
				alert("'.$l['invalid_set_name'].'");
				return false;
			}
		}
		
		$("#add_sets_div").slideToggle();
	});
	
	//Remove sets
	$("#remove_sets").click(function(){
		
		var sets =  document.getElementsByName("sets[]");
		
		sets_data = new Array();
		var c = 0;
		for(i = 0; i < sets.length; i++){
			if(sets[i].checked == true){
				sets_data[c] = sets[i].id;
				c++;
			}
		}
		
		//No sets selected to remove, abort it
		if(sets_data.length == 0){
			alert("'.$l['sel_sets_torem'].'");
			return false;
		}
		
		var csrf_token = $("#csrf_token").val(); 
		
		$.ajax({
		url: window.location+"&jsnohf=1&remove_sets=1",
		type: "POST",
		data: {csrf_token:csrf_token,sets:sets_data},
		success: function(data){
			//alert(data);
			//No plugin posted
			if(sets_data.length > 0){
				alert("'.$l['sets_rem_success'].'");
			}
			
			//To prevent from asking resend popup while reloading page
			window.location.href = window.location.href;
			
		}
		});

	});

	// Hide error/success warning on tab change
	$("#nav-tab a").on("click", function(){
	  	$("#add_failed").hide();
	  	$("#add_success").hide();
	});
	
	//Set default value
	$(".default_value").on("click", function(event){
	
		var set_name = $(this).attr("id");
		set_name = set_name.replace("default_value_", "");
		var csrf_token = $("#csrf_token").val();
		
		if(this.checked == true){
			checked = 1;
		}else{
			checked = 0;
		}
		
		$.ajax({
			url: window.location+"&api=json&set_name="+encodeURIComponent(set_name)+"&default_value="+encodeURIComponent(checked),
			type: "POST",
			data: "csrf_token="+csrf_token,
			success: function(data){
				if(!data){
					alert("'.$l['api_no_resp'].'");
					return false;
				}
				
				var resp = JSON.parse(data);
				if(!resp){
					alert("'.$l['api_invalid_resp'].'");
					return false;
				}
				
				if(!resp.done){
					
					if(resp.error){
						var error_disp = "'.$l['following_errors_occured'].':\n";
						for(x in resp.error){
							error_disp = error_disp+resp.error[x]+"\n";
						}
						alert(error_disp);
						return false;
					}
					
					alert("'.$l['fail_save_pref'].'");
					return true;
				}
				
				alert(resp.done);
			}
		});		
		
	});
	
	function multiple_checks(){
		$("#check_allsets").on("click", function(event){
			if(this.checked == true){
				$(".check_allsets").prop("checked", true);
			}else{
				$(".check_allsets").prop("checked", false);
			}
		});
	}
	
});

function remove_plugin_submit(){
	var plugin_or_theme = $("#plugin_or_theme").val();
	
	if(plugin_or_theme == "plugins"){
		plugin_or_theme = "plugins";
		$("#plugin_removed_success").text("'.$l['plugin_rem_success'].'").css("text-align", "center");
	}else{
		plugin_or_theme = "themes";
		$("#plugin_removed_success").text("'.$l['theme_rem_success'].'").css("text-align", "center");
	}
	
	var remove_plugins_themes =  document.getElementsByName("remove_plugins_themes[]");
	
	plugins_themes_to_remove = new Array();
	var c = 0;
	for(i = 0; i < remove_plugins_themes.length; i++){
		if(remove_plugins_themes[i].checked == true){
			plugins_themes_to_remove[c] = remove_plugins_themes[i].value;
			c++;
		}
	}
	
	var set = $("#plugin_theme_set").val();
	var csrf_token = $("#csrf_token").val();
	
	$_("rem_plth_"+set).innerHTML = "<a><img src=\''.$theme['images'].'load.gif\' alt=\''.$l['removing'].'\' width=\'25\' ></a>";
	
	$.ajax({
		url: window.location+"&jsnohf=1&plugins_themes_to_remove="+encodeURIComponent(plugins_themes_to_remove)+"&set_name="+encodeURIComponent(set)+"&"+plugin_or_theme+"=1",
		type: "POST",
		data: "csrf_token="+csrf_token,
		success: function(data){
			//alert(data);
			if(plugins_themes_to_remove.length > 0){
				$("#plugin_removed_success").fadeTo(3000, 500).slideUp(1000, function(){
					$("#plugin_removed_success").slideUp(1000);
				});
			}
			
			$_("rem_plth_"+set).innerHTML = "";
			
			var plugins_count = parseInt($(data).find("#plugins_count").val());	
			var themes_count = parseInt($(data).find("#themes_count").val());
			
			if(plugin_or_theme == "plugins"){	
				if(plugins_count === 0){
					$("#"+set+"_plugin_count").html("");
				}else{
					$("#"+set+"_plugin_count").html(plugins_count+"'.$l['total_plugin_theme'].'");
				}
			}else{
				if(themes_count === 0){
					$("#"+set+"_theme_count").html("");
				}else{
					$("#"+set+"_theme_count").html(themes_count+"'.$l['total_plugin_theme'].'");
				}
			}	
		}
	});
}

//Creates the list of plugins/themes to remove via modal(popup)
function remove_wp_plugins_themes(set, to_remove){
	
	var plugins_themes_list;
	
	$("#remove_plugins_themes").empty();
	
	var csrf_token = $("#csrf_token").val();
	
	//Get plugins_themes count
	$.ajax({
		type: "POST",
		data: "csrf_token="+csrf_token,
		url: window.location+"&set_stats="+encodeURIComponent(set)+"&get_plugins_themes_count=1",
		timeout:0,
		// Checking for success
		success: function(data){
			
			var selected_set = $(data).find("#selected_set").text();
			var selected_set_data = JSON.parse(selected_set);
			var set_data = new Object();
			
			if(to_remove == "plugins"){
				$(".modal-title").text("'.$l['sel_plug_rem'].'");
				
				if(selected_set_data.plugins){
					set_data = selected_set_data.plugins;
				}
			
				if(selected_set_data.custom_plugins){
					for(var x in selected_set_data.custom_plugins){
						set_data[selected_set_data.custom_plugins[x].slug] = selected_set_data.custom_plugins[x].name;
					}
				}
				
			}else{
				$(".modal-title").text("'.$l['sel_theme_rem'].'");
				
				if(selected_set_data.themes){
					set_data = selected_set_data.themes;
				}
				
				
				if(selected_set_data.custom_themes){
					for(var x in selected_set_data.custom_themes){
						set_data[selected_set_data.custom_themes[x].slug] = selected_set_data.custom_themes[x].name;
					}
				}
				
			}
			
			$("#plugin_or_theme").val(to_remove);
			$("#plugin_theme_set").val(set);
			
			//var tmp = plugins_themes.split(",");
			
			if(set_data === undefined || (set_data.length <= 0 && Object.keys(set_data) <= 0)){
				if(to_remove == "plugins"){
					plugins_themes_list = "'.$l['no_plug_sel'].'"; 
				}else{
					plugins_themes_list = "'.$l['no_theme_sel'].'"; 
				}
				
				$("#remove_plugins_themes").append("<tr><td><div class=\'alert alert-warning\'>"+plugins_themes_list+"</div></td></tr><br />");
				
				return false;
			}
			
			for(var slug in set_data){
				//alert(slug);
				//alert(set_data[slug]);
				
				var plugin_list = "";
				
				plugins_themes_list = "<input id="+set+" type=\"checkbox\" name=\"remove_plugins_themes[]\"  value=\'"+slug+"\'></td><td>"+set_data[slug];
			
				$("#remove_plugins_themes").append("<tr><td width=\"25px\">"+plugins_themes_list+"</td></tr><br />");
			}
		}
	});
}

function add_plugins_themes(set_name, vall){
	
	//Clean previous search value or results
	$("#search_input").val("");
	$("#plugin_theme_results").empty();
	
	$("#set_post").val("");
	//alert(set_name);
	//alert(vall);
	$("#set_post").val(set_name); // To determine in which set the plugin or thmes to be added	
	$("#plugin_or_theme").val(vall); // To determine if the search is for theme or plugin
	
	if(vall == "'.$l['add_plugins'].'"){
		plugin_or_theme = "plugin";
	}else{
		plugin_or_theme = "theme";
	}
	
	$("#upload_type").val(plugin_or_theme);
	
	$("#add_success").text("");
	$("#add_success").hide();
	$("#add_failed").text("");
	$("#add_failed").hide();
	
	if(vall == "Add Plugins"){
		$(".modal-title").text("'.$l['sel_plug_add'].'");
		$("#pot_add_tab").text("'.$l['add_plugins'].'");
		$("#pot_upload_tab").text("'.$l['upload_plugins'].'");
	}else{
		$(".modal-title").text("'.$l['sel_theme_add'].'");
		$("#pot_add_tab").text("'.$l['add_themes'].'");
		$("#pot_upload_tab").text("'.$l['upload_themes'].'");
	}
	
}

//Filters the plugin search result
function filter_plugins(){
		
	var val = $("#search_input").val();
	var plugin_or_theme = $("#plugin_or_theme").val();
	
	if(plugin_or_theme == "'.$l['add_plugins'].'"){
		plugin_or_theme = "plugins";
	}else{
		plugin_or_theme = "themes";
	}
	
	$.ajax({
		url: window.location+"&jsnohf=1&search_key="+encodeURIComponent(val)+"&"+plugin_or_theme+"=1",
		type: "GET",
		success: function(data){//alert(data);
			
			var input, filter, table, tr, td, i;
			input = document.getElementById("search_input");
			filter = input.value.toUpperCase();
			
			$("#plugin_theme_results").html(data);
			
			table = document.getElementById("plugin_theme_results");
			
			tr = table.getElementsByTagName("tr");
			
			for (i = 0; i < tr.length; i++) {
				td = tr[i].getElementsByTagName("td")[1];     
			}	
		}
	});	
}

function submit_custom(slug, fileName){
	
	$("#add_failed").hide();
	$("#add_success").hide();
	
	var is_plugin_or_theme = $("#plugin_or_theme").val();
	
	if(is_plugin_or_theme == "'.$l['add_plugins'].'"){
		is_plugin_or_theme = "plugins";
	}else{
		is_plugin_or_theme = "themes";
	}
	
	var sets_name = $("#set_post").val();
	var name = [$("#custom_name").val()];
	
	if(name == null){
		$("#add_failed").text("'.$l['err_custom_fields'].'").css("text-align", "center");
		$("#add_failed").show();
		$("#add_success").hide();
		return false;
	}else{	
		
		var csrf_token = $("#csrf_token").val(); 
		var formdata = new FormData();
		formdata.append("add_plugins_themes_data_slugs", slug);
		formdata.append("add_plugins_themes_data_names", name);
		formdata.append("add_plugins_themes_data_filename", fileName);
		formdata.append("csrf_token", csrf_token);
		
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				
				var data = JSON.parse(this.responseText);
				
				if(data.error){
					$("#add_failed").text(data.error);
					$("#add_failed").show();
					return false;
				}
				
				if(!data.done || data.done == null){
					$("#add_failed").text("'.$l['err_custom_upload'].'").css("text-align", "center");
					$("#add_failed").show();
					return false;
				}
				
				if(is_plugin_or_theme == "plugins"){
					$("#add_success").text("'.$l['plugin_add_success'].'").css("text-align", "center");	
				}else{
					$("#add_success").text("'.$l['theme_add_success'].'").css("text-align", "center");
				}
				
				$("#custom_name").val("");
				$("#add_failed").hide();
				$("#add_success").show();
				$("#plugin_theme_results").empty();
				$_("add_plth").innerHTML = "";
				
				var plugins_count = data.plugins_count;	
				var themes_count = data.themes_count;
				
				if(is_plugin_or_theme == "plugins"){
					$("#"+sets_name+"_plugin_count").html(plugins_count+"'.$l['total_plugin_theme'].'");
				}else{
					$("#"+sets_name+"_theme_count").html(themes_count+"'.$l['total_plugin_theme'].'");
				}
			}
		};
		
		xhttp.open("POST", window.location+"&api=json&sets_name="+encodeURIComponent(sets_name)+"&"+is_plugin_or_theme+"=1&add_plugins_themes_data=1&add_plugins_themes_custom=1&get_plugins_themes_count=1", true);
		xhttp.send(formdata);
	}


}

function submit_addition(){
	$_("add_plth").innerHTML = "<a><img src=\''.$theme['images'].'load.gif\' alt=\''.$l['adding'].'\' width=\'25\' ></a>";
	
	var is_plugin_or_theme = $("#plugin_or_theme").val();

	if(is_plugin_or_theme == "'.$l['add_plugins'].'"){
		is_plugin_or_theme = "plugins";
	}else{
		is_plugin_or_theme = "themes";
	}
	
	var plugins_or_themes = document.getElementsByName("plugins_or_themes[]");
	var sets_name =  $("#set_post").val();
	
	//var add_plugins_themes_data = new Object();
	//var add_plugins_themes_data = new Array();
	var slugs = new Array();
	var names = new Array();
	
	var c = 0;
	for(i = 0; i < plugins_or_themes.length; i++){
		
		if(plugins_or_themes[i].checked == true){
			//var plth_id = plugins_or_themes[i].value;
			//alert("Slug: "+plug_theme_name);
			//add_plugins_themes_data[plugins_or_themes[i].value] = document.getElementById(plugins_or_themes[i].value).innerHTML;
			
			//add_plugins_themes_data.plth_id = document.getElementById(plugins_or_themes[i].value).innerHTML;
			
			//alert("Name: "+document.getElementById(plugins_or_themes[i].value).innerHTML);
			
			slugs[c] = plugins_or_themes[i].value;
			names[c] = document.getElementById(plugins_or_themes[i].value).value;
			c++;
		}
	}
	//alert(add_plugins_themes_data);
	
	
	//var jsonString = JSON.stringify(add_plugins_themes_data);alert("JSONstring: "+jsonString);
	
	if(slugs.length == 0){
		if(is_plugin_or_theme == "plugins"){
			$("#add_failed").text("'.$l['sel_plugins'].'").css("text-align", "center");
		}else{
			$("#add_failed").text("'.$l['sel_themes'].'").css("text-align", "center");
		}
		$("#add_failed").show();
		$("#add_success").hide();
		$_("add_plth").innerHTML = "";
		return false;
		
	}else{
		
		var csrf_token = $("#csrf_token").val(); 
		
		$.ajax({
			url: window.location+"&jsnohf=1&sets_name="+encodeURIComponent(sets_name)+"&"+is_plugin_or_theme+"=1&add_plugins_themes_data=1",
			type: "POST",
			data: {add_plugins_themes_data_slugs : slugs, add_plugins_themes_data_names : names, csrf_token : csrf_token},
			success: function(data){
				//alert(data);
				if(is_plugin_or_theme == "plugins"){
					$("#add_success").text("'.$l['plugin_add_success'].'").css("text-align", "center");	
				}else{
					$("#add_success").text("'.$l['theme_add_success'].'").css("text-align", "center");
				}
				
				$("#add_failed").hide();
				$("#add_success").show();
				$("#plugin_theme_results").empty();
				$_("add_plth").innerHTML = "";
				
				var plugins_count = $(data).find("#plugins_count").val();	
				var themes_count = $(data).find("#themes_count").val();
				
				if(is_plugin_or_theme == "plugins"){
					$("#"+sets_name+"_plugin_count").html(plugins_count+"'.$l['total_plugin_theme'].'");
				}else{
					$("#"+sets_name+"_theme_count").html(themes_count+"'.$l['total_plugin_theme'].'");
				}	
			},
			error: function(data) {
				$_("add_plth"+siteid).innerHTML = "";
			}
		});
	}
	
	return true;
}

var search_timer;

$(document).on("keyup", "#search_input",  function(e) {
	
	var search_string = $(this).val();
	clearTimeout(search_timer);

	if (search_string == "") {
		$("#plugin_theme_results").hide();
	}else{
		$("#plugin_theme_results").show();
		search_timer = setTimeout("filter_plugins();", 300);
	};
});

//on keydown, clear the countdown 
$(document).on("keydown", "#search_input", function () {
  clearTimeout(search_timer);
});

function list_set_items(setname){
	
	var set_plugins, set_themes, plugins_data, themes_data;
	
	
	$(".modal-title").text(setname.replace("_admin", ""));
	
	$("#list_plugins_themes").empty();
	
	var csrf_token = $("#csrf_token").val();
	
	//Get plugins_themes count
	$.ajax({
		type: "POST",
		data: "csrf_token="+csrf_token,
		url: window.location+"&set_stats="+encodeURIComponent(setname)+"&get_plugins_themes_count=1",
		timeout:0,
		// Checking for success
		success: function(data){
			
			var selected_set = $(data).find("#selected_set").text();
			var selected_set_data = JSON.parse(selected_set);
			
			var set_plugins = new Object();
			var set_themes = new Object();
			
			if(selected_set_data.plugins){
				set_plugins = selected_set_data.plugins;
			}
			
			if(selected_set_data.themes){
				set_themes = selected_set_data.themes;
			}
			
			if(selected_set_data.custom_plugins){
				for(var x in selected_set_data.custom_plugins){
					set_plugins[selected_set_data.custom_plugins[x].slug] = selected_set_data.custom_plugins[x].name;
				}
			}
			
			if(selected_set_data.custom_themes){
				for(var x in selected_set_data.custom_themes){
					set_themes[selected_set_data.custom_themes[x].slug] = selected_set_data.custom_themes[x].name;
				}
			}
			
			if((set_plugins === undefined || (set_plugins.length <= 0 && Object.keys(set_plugins) <= 0)) && (set_themes === undefined || (set_themes.length <= 0 && Object.keys(set_themes) <= 0))){
				$("#list_plugins_themes").append("<div class=\'alert alert-warning\'>'.$l['empty_set'].'</div>");
			}
			
			//Plugins
			if(set_plugins !== undefined){
				plugins_data = "<h4>'.$l['plugins'].'</h4><ul class=\"softlist\">";
				for(var pl in set_plugins){
					plugins_data += "<li>"+set_plugins[pl]+"</li>";
				}
				$("#list_plugins_themes").append("</ul>" + plugins_data);
			}
			
			//Themes
			if(set_themes !== undefined){
				themes_data = "<br /><h4>'.$l['themes'].'</h4><ul class=\"softlist\">";
				for(var th in set_themes){
					themes_data += "<li>"+set_themes[th]+"</li>";
				}
				$("#list_plugins_themes").append("</ul>" + themes_data);
			}
		}
	});
}

function softsubmit_install_set(){

	$_("install_div").innerHTML = "<a><img src=\''.$theme['images'].'load.gif\' alt=\''.$l['installing'].'\' width=\'25\' ></a>";
	
	var setname = $("#softinstall_set_name").val();
	
	var softwebsites = document.getElementsByName("webids[]");
	
	var ins_path = new Array();
	var c = 0;
	for(var i = 0; i < softwebsites.length; i++){
		if(softwebsites[i].checked == true){
			ins_path[c] = softwebsites[i].value;
			c++;
		}
	}
	
	//When there is no site selected
	if ((ins_path === undefined || ins_path.length <= 0)) {
		$("#install_failed").show();
		$("#install_failed").html("'.$l['no_select_site'].'");
		$_("install_div").innerHTML = "";
		return true;
	}
	
	ins_path.toString();
	var csrf_token = $("#csrf_token").val();
	
	$.ajax({
		type: "POST",
		data: "csrf_token="+csrf_token,
		url: window.location+"&softinstall_set="+encodeURIComponent(setname)+"&softwebsites="+encodeURIComponent(ins_path),
		timeout:0,
		// Checking for success
		success: function(data){
			$("#install_failed").hide();
			$("#install_success").show();
			$_("install_div").innerHTML = "";
		},
		error: function(data) {
			$("#install_failed").show();
			$("#install_success").hide();
			$_("install_div").innerHTML = "";
		}
	});
}
// ]]></script>

<style>
.softlist{
	padding-left: 25px;
}
</style>
';


echo '<div class="container-fluid">
	<div class="container mt-4">
		<div class="row">
			<div class="col-12 mx-auto">
				<div class="sai-card p-4">
					<div class="sai-page-title">
						<i class="fas fa-chart-pie soft-icon d-inline-block mr-1"></i>
						<h2 class="sai-heading d-inline-block mb-2">'.$l['<title>'].'</h2>
					</div>
					<hr class = "sai_main_head_hr"/>';
					
					error_handle($error);
					
					echo '
					<input id="plugins_count" type="hidden" value="'.$plugins_count.'">
					<input id="themes_count" type="hidden" value="'.$themes_count.'">
					<div id="selected_set" style="display:none;">'.$selected_set.'</div>
					<input name="create_sets" class="flat-butt" id="create_sets" value="'.$l['create_sets'].'" type="button">
					<input name="remove_sets" class="flat-butt" id="remove_sets" value="'.$l['remove_sets'].'" type="button">
					<div class="sai_form mt-2">
						<form accept-charset="'.$globals['charset'].'" name="manage_plugin_theme" method="post" action="">
							<div class="row" id="add_sets_div" style="display:none;">
								<div class="col-6">
									<input type="text" name="set_input" class="form-control" id="set_input" size="30" placeholder="'.$l['name_of_set'].'"/><br />
								</div>
								<div class="col-6">
									<input name="add_sets" class="flat-butt" id="add_sets" value="'.$l['create_set_button'].'" type="submit">
								</div>
							</div>
							'.csrf_display().'
						</form>
						<div id="plugin_removed_success" class="alert alert-success" style="display:none;"><center></center></div>
						<div id="stooltip" style="display:none; position:absolute; top: 0px; left: 0px; border: 1px solid #CCC; padding: 8px; background: #FFF; z-index:1000;"></div>
					</div>					
					<div class="table-responsive mt-3">
						<table id="manage_plugin_theme" class="table soft-table-list">
							<thead  class="sai-sub-type mt-4">
								<tr>
									<td class="text-center"><input type="checkbox" id="check_allsets"></td>
									<td class="text-center">'.$l['set_name'].'</td>
									<td></td>
									<td class="text-center">'.$l['set_plugins'].'</td>
									<td></td>
									<td class="text-center">'.$l['set_themes'].'</td>
									<td></td>
									<td></td>
									<td class="text-center">
										<font class="bboxtxt mb-0" onmouseover="showtip(\''.$l['default_exp'].'\', this);" >'.$l['default_value'].'</font>
									</td>
								</tr>
							</thead>';
							
							//r_print($sets);
							foreach($sets as $sk => $sv){
								
								load_wp_sets_count($sv, $plugins_count, $themes_count);
								
								//echo '<li><a href="#">'.$av['name'].'</a></li>';
								echo '
								<tr>
									<td class="text-center align-middle">
										<input id="'.$sk.'" type="checkbox" name="sets[]" class="check_allsets">
									</td>
									<td class="class_valign text-center align-middle">'.preg_replace('/_admin$/', '', $sk).'</td>
									<td class="class_valign text-center align-middle">
										<span id="'.$sk.'_plugin_count">'.(!empty($plugins_count) ? $plugins_count.$l['total_plugin_theme'] : '').'</span>
									</td>
									<td id="'.$sk.'" class="text-center align-middle">
										<input name="'.$sk.'" class="flat-butt" id="add_plugins" value="'.$l['add_plugins'].'" type="button" data-toggle="modal" data-target="#search_modal" onclick="add_plugins_themes(this.name, this.value)">
									</td>
									<td class="class_valign text-center align-middle">
										<span id="'.$sk.'_theme_count">'.(!empty($themes_count) ? $themes_count.$l['total_plugin_theme'] : '').'</span>
									</td>
									<td id="'.$sk.'" class="text-center align-middle">
										<input name="'.$sk.'" class="flat-butt" id="add_themes" value="'.$l['add_themes'].'" type="button" data-toggle="modal" data-target="#search_modal" onclick="add_plugins_themes(this.name, this.value)">
									</td>
									<td class="class_valign text-center align-middle">
										<span class="someclass" title="'.$l['view_items'].'" style="cursor:pointer;" data-toggle="modal" data-target="#list_set_items_modal" onclick="list_set_items(\''.$sk.'\')"><i class="fas fa-list fa-2x" style="color:#676a6c;margin:3px;"></i></span>
									</td>
									<td id="'.$sk.'" class="text-center align-middle">
										<div class="dropdown">
											<button class="flat-butt dropdown-toggle" type="button" data-toggle="dropdown">'.$l['action'].'
												<span class="caret"></span>
											</button>
											<span id="rem_plth_'.$sk.'"></span>
											<ul class="dropdown-menu p-2">
												<li class="p-1" id="'.implode(",", (array) $sets[$sk]['plugins']).'" data-toggle="modal" data-target="#remove_plugin_theme_modal" onclick="remove_wp_plugins_themes(\''.$sk.'\', \'plugins\')">
													<a style="text-decoration:none; cursor:pointer;">'.$l['remove_plugins'].'</a>
												</li>
												<li class="p-1" id="'.implode(",", (array) $sets[$sk]['themes']).'" data-toggle="modal" data-target="#remove_plugin_theme_modal" onclick="remove_wp_plugins_themes(\''.$sk.'\', \'themes\')">
													<a style="text-decoration:none; cursor:pointer;">'.$l['remove_themes'].'</a>
												</li>
											</ul>
										</div>
									</td>
									<td class="text-center align-middle">'.
										(!empty($sv['themes']) || !empty($sv['custom_themes']) || !empty($sv['plugins']) || !empty($sv['custom_plugins']) ? '<input id="default_value_'.$sk.'" type="checkbox" name="default_value" class="default_value" '.POSTchecked("default_value", $sets[$sk]['default_value']).'>' : "")
									.'</td>
								</tr>';
							}
							
					echo '</table>
					
					<!-- remove plugins Modal -->
						<div class="modal fade soft-modal" id="remove_plugin_theme_modal" role="dialog">
							<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title"></h5>
									<button type="button" class="close" data-dismiss="modal">&times;</button>								
								</div>
								<div class="modal-body">
									<input type="hidden" name="plugin_or_theme" id="plugin_or_theme" value=""><br />
									<input type="hidden" name="plugin_theme_set" id="plugin_theme_set" value=""><br />
									<table id="remove_plugins_themes" class="table table-hover">		
									</table><br />
								</div>
								<div class="modal-footer">
									'.csrf_display().'
								<button type="button" class="btn btn-default flat-butt" data-dismiss="modal" id="remove_plugin_submit" onclick="remove_plugin_submit()">'.$l['remove'].'</button>
								</div>
							</div>
							</div>
						</div>
				
						<!-- List Set Items Modal -->
						<div class="modal fade soft-modal" id="list_set_items_modal" role="dialog">
							<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">								
									<h5 class="modal-title"></h5>
									<button type="button" class="close" data-dismiss="modal">&times;</button>
								</div>
								<div class="modal-body" id="list_plugins_themes">
								</div>
								<div class="modal-footer">
								<button type="button" class="btn btn-default flat-butt" data-dismiss="modal">'.$l['ok'].'</button>
								</div>
							</div>
							</div>
						</div>	
						
						<!--search plugins Modal -->
						<div class="modal fade soft-modal" id="search_modal" role="dialog">
							<div class="modal-dialog" style="max-width:700px;">
							<div class="modal-content">
								<div class="modal-header">								
									<h5 class="modal-title"></h5>
									<button type="button" class="close" data-dismiss="modal">&times;</button>
								</div>
								<div class="modal-body">

									<nav>
										<div class="nav nav-tabs" id="nav-tab" role="tablist">
										<a class="nav-item nav-link nav-link active" id="pot_add_tab" data-toggle="tab" href="#add_plugins_themes" role="tab" aria-controls="add_plugins_themes" aria-selected="true" style="width:50%; text-align:center;">Add</a>
										<a class="nav-item nav-link" id="pot_upload_tab" data-toggle="tab" href="#upload_plugins_themes" role="tab" aria-controls="upload_plugins_themes" aria-selected="false" style="width:50%; text-align:center;">Upload</a>
										</div>
									</nav>
									<br />

									<!-- Tab panes -->
									<div class="tab-content">
										<!-- Success Div -->
										<div id="add_success" class="alert alert-success" style="display:none;"></div>

										<!-- Error Div -->
										<div id="add_failed" class="alert alert-danger" style="display:none;"></div>

										<div class="tab-pane fade show active" id="add_plugins_themes" role="tabpanel" aria-labelledby="pot_add_tab">
											<input type="text" name="search_input" class="form-control mt-3" id="search_input" size="30" placeholder="'.$l['search_wp_sets'].'"/><br />
											<input type="hidden" name="set_post" id="set_post" value=""><br />
											<input type="hidden" name="plugin_or_theme" id="plugin_or_theme" value=""><br />
											<div id="plugin_theme_results"></div>

											'.csrf_display().'
												<button type="button" class="flat-butt" id="submit_plugins_themes" name="submit_plugins_themes" onclick="submit_addition();">Add</button>
										</div>

										<div class="tab-pane fade" id="upload_plugins_themes" role="tabpanel" aria-labelledby="pot_upload_tab">
										
											<div id="add_custom_form" class="my-3">
												<div class="row">
													<div class="col-12">
														<label for="custom_name" class="sai-label d-block mb-1">'.$l['custom_name'].'</label>
														<span class="sai_exp2 d-block mb-1">'.$l['custom_name_exp'].'</span>
														<input type="text" name="custom_name" class="form-control mb-2" id="custom_name" size="30" value="'.POSTval('custom_name', '').'">

														<label for="custom_plugin_file" class="sai-label d-block mb-1">'.$l['custom_file'].'</label>
														<span class="sai_exp2 d-block mb-1">'.$l['custom_file_exp'].'</span>
														<form action="" class="dropzone my-2 p-2" id="upload_form">
															<div class="dz-message row m-0" data-dz-message >
																<div class="col-12 text-center">
																	<i class="fas fa-file-upload fa-3x d-block"></i>
																	<label class="sai-label">Drag and Drop files here or click to pick manually</label>
																</div>
															</div>
															<div class="fallback">
																<input name="custom_plugin_file" type="file" multiple />
															</div>
															<input type="hidden" name="upload_type" id="upload_type" value="">
															'.csrf_display().'
															<br />
														</form>
														<div id="add_plth" class="wpc_inline"></div>
														'.csrf_display().'
														<button type="button" class="mt-2 flat-butt" id="submit_custom" name="submit_custom">Add</button>
													</div>
												</div>										
											</div>
										</div>
									</div>
								
								</div>
								<div class="modal-footer">
									<div id="add_plth" class="wpc_inline"></div>
										'.csrf_display().'
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
									</div>
								</div>
							</div>
						</div>	
					</div>
					</div>
				</div>
			</div>			
		</div>		
	</div>

<script>
	Dropzone.autoDiscover = false;

	$("#upload_form").dropzone({ url: "'.$globals['index'].'act=manage_sets&upload_chunk=1&api=json", 
		autoDiscover : false, 
		paramName: "custom_plugin_file",
		createImageThumbnails: false,
		acceptedFiles: ".zip",
		maxFiles: 1,
		chunking: true,
		chunkSize: 500000,
		retryChunks: true,
		retryChunksLimit: 3,
		autoProcessQueue: false,
		chunksUploaded: function(file, done) {
				done();
			},
		init: function () {
			
			var myDropzone = this;
			
			document.querySelector("#submit_custom").addEventListener("click", function(e) {
				// Make sure that the form isn\'t actually being sent.
				e.preventDefault();
				e.stopPropagation();
				myDropzone.processQueue();
			});
			
			document.querySelector("#add_plugins").addEventListener("click", function(e) {
				// Clear any existing uploads
				myDropzone.removeAllFiles();
			});
			
			document.querySelector("#add_themes").addEventListener("click", function(e) {
				// Clear any existing uploads
				myDropzone.removeAllFiles();
			});
			
			this.on(
				"sending", function(file, xhr, formData){
				
				var upload_type_val = $("#upload_type").val();
				formData.append("upload_type", upload_type_val);
				
				var csrf_token = $("#csrf_token").val();
				if(csrf_token && csrf_token.length > 0){
					formData.append("csrf_token", csrf_token);
				}
			});
			
			this.on("complete", function(files, response) {
				var resp = JSON.parse(files.xhr.response.trim());
				if(resp.error){
					$("#add_failed").text(resp.error);
					$("#add_failed").show();
					return false;
				}else{
					var slug = resp.done["slug"];
					var filename = resp.done["filename"];
					submit_custom(slug, filename);
					myDropzone.removeAllFiles();
				}
				
			});
		},
	  });
</script>
';

softfooter();

}

?>