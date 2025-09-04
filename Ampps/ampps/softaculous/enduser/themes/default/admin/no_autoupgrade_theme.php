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

function no_autoupgrade_theme(){

global $theme, $globals, $user, $l, $langs, $skins, $error, $saved, $categories, $iscripts, $scripts, $top, $no_autoupgrade, $noautoupgrade_catwise, $noautoupgrade_scripts;

softheader($l['<title>']);

echo '<div class="container-fluid">
	<div class="container my-4">
		<div class="sai-page-title text-center">
			<h2>'.$l['show_top_scripts'].'</h2>
		</div>
	</div>
</div>';

error_handle($error);

if(!empty($saved)){
	echo '<div class="container-fluid">
	<div class="alert alert-success text-center"><i class="fas fa-check sai_icons mr-2"></i>
	'.$l['settings_saved'].'</div>';
}

echo '<form accept-charset="'.$globals['charset'].'" name="reordercat" method="post" action="" class="form-horizontal">

<script language="javascript" type="text/javascript"><!-- // --><![CDATA[

ids1 = new Array('.implode(', ', array_keys($noautoupgrade_scripts)).');

function checkallsoftware(checker){	
	for(x in ids1){
		
		$_("scripts_"+ids1[x]).checked = checker.checked;
		
		//change td background color
		changebg(ids1[x],"scripts_");
	}	
};

function selectchkbox(id,type){
	if($_(type+id).checked){
		$_(type+id).checked = false;
	}else{
		$_(type+id).checked = true;
	}
	
	//change td background color
	changebg(id,type);
}

function changebg(id,type){
	try{
		if($_(type+id).checked){
			$("#td_"+id).addClass("script_selected");			
		}else{
			$("#td_"+id).removeClass("script_selected");
		}
	}catch(e){}
};

function checkall(){
	
	// for scripts
	for(x in ids1){	
		changebg(ids1[x],"scripts_");
	}
	
};

addonload("checkall();");

// ]]></script>';

/*  $reseller $user*/
echo '<div class="container-fluid">
	<link href="'.$globals['mirror_images'].'sprites/20.css" rel="stylesheet" type="text/css" />
	<div class="row">
		<div class="col-12">
			<div class="sai-card p-3 mb-3">
				<div class="sai_main_head">
					<h2 class="sai-heading mb-2">'.$l['planhead'].'</h2>
					<hr class = "sai_main_head_hr"/>
				</div>

				<div class="sai_form">
					<div class="row">
						<div class="col-8">
							<div class="form-group">
								<input type="checkbox" id="softpath" name="disable_autoupgrade" size="30" '.POSTchecked('disable_autoupgrade', @$no_autoupgrade['disable_autoupgrade']).' />
								<label for="softpath" class="sai-label">'.$l['disable_autoupgrade'].'</label>
								<span class="sai_exp2 mb-3 d-block">'.$l['disable_autoupgrade_exp'].'</span>
								<label for="uptime" class="sai-label d-block">'.$l['uptime'].'</label>
								<span class="sai_exp2 mb-1 d-block">'.$l['exp_uptime'].'</span>
								<input type="text" name="uptime" class="form-control mb-3" id="uptime" size="40" value="'.POSTval('uptime', $no_autoupgrade['uptime']).'">						
								<label class="sai-label d-block">'.$l['script_note'].': </label>
								<p class="sai_exp2">'.$l['script_note_exp'].'</p>
							</div>
						</div>
					</div>									
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-12">
			<div class="sai-card p-3 mb-3">
				<div class="sai_main_head">
					<h2 class="sai-heading mb-2">'.$l['scriptselect'].'</h2>
					<hr class = "sai_main_head_hr"/>
				</div>
				<div class="form-group">
					<label class="sai-label d-block">'.$l['exp_scriptselect'].'</label>
					<input type="checkbox" id="checkallsoftwares" class="mr-1" onclick="checkallsoftware(this)"/>
					<span class="sai_exp2"><label class="sai-label" for="checkallsoftwares">'.$l['select_all'].'</label></span>
				</div>
				<div class="sai_form">';
					foreach($noautoupgrade_catwise as $ak => $av){
						
						echo '<div class="sai_main_head mt-5">
							<h2 class="sai-heading mb-2">'.strtoupper($ak).' Apps</h2>
						</div>';
						foreach($av as $kk => $vv){
							
							if(empty($av[$kk])) continue;
							echo '<h3 class="sai-heading script_cat mt-4 mb-3">'.$l['cat_'.$ak.'_'.$kk].'</h3>
							<hr class = "sai_main_head_hr"/>';
								$i = 0;
								$j = count($vv);
								foreach($vv as $k => $v){
									
									//var_dump($k);
									//var_dump($v);
									if(is_int($i/$j)){
										echo '<div class="row mb-2">';
									}
						
									echo '<div class="col-6 col-lg-3 mb-3" id="td_'.$k.'">
										<input type="checkbox" id="scripts_'.$k.'" name="scripts_'.$k.'" '.POSTchecked('scripts_'.$k, $no_autoupgrade['scripts'][$k]).' class="d-inine-block mr-1" onclick="changebg(\''.$k.'\',\'scripts_\');"/>
									
										<div class="sp20_'.$v['softname'].' d-inline-block align-middle"></div>
										<a href="javascript:void(0)" style="text-decoration: none; " onclick="selectchkbox(\''.$k.'\',\'scripts_\');">
										<label class="sai-label">'.$v['name'].'</label></a>
									</div>';															
								$i++;		
																
									if(is_int($i/$j)){	
										echo '</div>';					
									}																								
								}
							}
						}					
					echo '<p align="center"><input type="submit" name="save" value="'.$l['save'].'" class="flat-butt"></p>
				</div>
			</div>
		</div>
	</div>	
</div>';
softfooter();

}

?>