<?php

//////////////////////////////////////////////////////////////
//===========================================================
// email_theme.php
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

function addplans_theme(){

global $theme, $globals, $user, $l, $langs, $error, $reseller, $iscripts, $plans, $done, $_cpplan, $_users, $allcatwise, $_resellers, $loaded_scripts, $softpanel;

$all_sets = load_wp_sets();

softheader($l['<title>']);

echo '<br /><form accept-charset="'.$globals['charset'].'" name="addplan" method="post" action="">
<div class="container-fluid">
	<div class="container my-4">
		<div class="sai-page-title text-center">
			<h2>
				<i class="fas sai-projectman fa-1x"></i>
				<span class="position-relative" style="top:-8px;">'.$l['title'].'</span>
			</h2>
		</div>
	</div>
	
'.(empty($globals['lictype']) ? '<div class="row my-2 text-center">
				<div class="col-12 col-lg-10 alert alert-warning p-3 mx-auto">
					'.$l['feature_not_available'].'
					</div>
			</div>' : '');

echo '<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
ids = new Array("'.implode('", "', is_array($_users) ? array_keys($_users) : array()).'");

function checkalluser(checker){
	for(x in ids){
		$_("users_"+ids[x]).checked = checker.checked;
		changebg(ids[x], "users_");
	}
};

ids1 = new Array('.implode(', ', is_array($iscripts) ? array_keys($iscripts) : array()).');
function checkallsoftware(checker){	
	for(x in ids1){
		$_("scripts_"+ids1[x]).checked = checker.checked;
		
		//change td background color
		changebg(ids1[x],"scripts_");
	}	
};

ids2 = new Array("'.implode('", "', is_array($_resellers) ? array_keys($_resellers) : array()).'");
function checkallreseller(checker){	
	for(x in ids2){
		$_("resellers_"+ids2[x]).checked = checker.checked;
		changebg(ids2[x], "resellers_");
	}
};

ids3 = new Array("'.implode('", "', is_array($_cpplan) ? array_keys($_cpplan) : array()).'");
function checkallcpplan(checker){	
	for(x in ids3){
		$_("cpplan_"+ids3[x]).checked = checker.checked;
		changebg(ids3[x], "cpplan_");
	}	
};

//since ids4 is already in use
ids5 = new Array("'.implode('", "', is_array($all_sets) ? array_keys($all_sets) : array()).'")
function checkallsets(checker){	
	for(x in ids5){
		$_("sets_"+ids5[x]).checked = checker.checked;
		changebg(ids5[x], "sets_");
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
	
	// for users
	for(x in ids){	
		changebg(ids[x],"users_");
	}
	
	// for scripts
	for(x in ids1){	
		changebg(ids1[x],"scripts_");
	}
	
	// for resellers_
	for(x in ids2){	
		changebg(ids2[x],"resellers_");
	}
	// for cpplan_
	for(x in ids3){	
		changebg(ids3[x],"cpplan_");
	}

	//for sets
	for(x in ids5){
		changebg(ids5[x], "sets_");
	}	
};

function list_set_items(setname){

	var sets_list = '.json_encode($all_sets).';
	var set_plugins;
	var set_themes;
	var plugins_data;
	var themes_data;
	
	$(".modal-title").text(setname.replace("_admin", ""));
	
	$("#list_plugins_themes").empty();
	
	var set_plugins = new Array();
	var set_themes = new Array();
	
	if(sets_list[setname]["plugins"]){
		set_plugins = sets_list[setname]["plugins"];
	}
	
	if(sets_list[setname]["themes"]){
		set_themes = sets_list[setname]["themes"];
	}
	
	if(sets_list[setname]["custom_plugins"]){
		for(var x in sets_list[setname]["custom_plugins"]){
			set_plugins[sets_list[setname]["custom_plugins"][x].slug] = sets_list[setname]["custom_plugins"][x].name;
		}
	}
	
	if(sets_list[setname]["custom_themes"]){
		for(var x in sets_list[setname]["custom_themes"]){
			set_themes[sets_list[setname]["custom_themes"][x].slug] = sets_list[setname]["custom_themes"][x].name;
		}
	}
	
	if((set_plugins === undefined || (set_plugins.length <= 0 && Object.keys(set_plugins) <= 0)) && (set_themes === undefined || (set_themes.length <= 0 && Object.keys(set_themes) <= 0))){
		$("#list_plugins_themes").append("'.$l['empty_set'].'");
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

addonload("checkall();");
// ]]></script>';

/*  $reseller $user*/
echo '<link href="'.$globals['mirror_images'].'sprites/20.css" rel="stylesheet" type="text/css" />';

error_handle($error);

if(!empty($done)){
	echo '<div class="conatiner">
			<div class="alert alert-success text-center"><i class="fas fa-check sai_icons mr-2"></i> '.$l['done'].'</div>
		</div>';
}

echo '<div class="row">
	<div class="col-12 col-lg-6 mb-4">
		<div class="sai-card p-3">
			<div class="sai_main_head">
				<h2 class="sai-heading mb-2">'.$l['planhead'].'</h2>
				<hr class="sai_main_head_hr"/>
			</div>
			<div class="sai_form">
				<div class="form-group">
					<label for="planname" class="sai-label d-block">'.$l['planname'].'</label>
					<span class="sai_exp2 mb-1 d-block">'.$l['exp_plan'].'</span>
					'.(defined('SOFTRESELLER') ? 'reseller_'.SOFTRESELLER.'_' : '').'
					<input type="text" class="form-control" name="planname" id="planname" size="40" value="'.POSTval('planname', '').'">';

					if(!defined('SOFTRESELLER')){
						echo'<span class="sai_exp2 mb-1 d-block mt-1">'.$l['default_plan_note'].'</span>';
					}
			// Show the disable auto upgrade option only if we have userdata_cli() function in softpanel as we will need it to load it
		if(method_exists($softpanel, 'userdata_cli')){
			echo '<div class="row">
				<div class="col-sm-5">
					<label for="disable_autoupgrade" class="sai-label d-block">'.$l['disable_autoupgrade'].'</label><br />
					<span class="sai_exp2 mb-1 d-block">'.$l['exp_disable_autoupgrade'].'</span>
				</div>
				<div class="col-sm-5">
					<input type="checkbox" name="disable_autoupgrade" id="disable_autoupgrade" '.POSTchecked('disable_autoupgrade', '').'/>
				</div>
			</div><br />';
		}					
			echo'</div>
			</div>			
		</div>
	</div>';

// Are there control panel plans
if(!empty($_cpplan)){
	echo'<div class="col-12 col-lg-6 mb-4">
		<div class="sai-card p-3">
			<div class="sai_main_head">
				<h2 class="sai-heading mb-2">'.$l['cpanelplan'].'</h2>
				<hr class="sai_main_head_hr"/>
			</div>
			<div class="sai_form">
				<div class="form-group">
					<label class="sai_exp2 d-block mb-2">'.$l['cpplanselect'].'</label>
					<span class="sai-label d-block ">
						<input type="checkbox" id="checkalls" onclick="checkallcpplan(this);" class="mr-1"/><label class="sai-label" for="checkalls">'.$l['select_all'].'</label>
					</span>
					<span class="sai-label d-block">
						<input type="checkbox" id="cpplansetting" name="cpplansetting" class="mr-1"/><label class="sai-label" for="cpplansetting">'.$l['overwrite_settings'].'</label>
					</span>';

					foreach($_cpplan as $k => $v){
						echo '<div class="script_choose" id="td_'.$k.'">
							<input type="checkbox" id="cpplan_'.$k.'" name="cpplan_'.$k.'" '.POSTchecked('cpplan_'.$k, '').' onclick="changebg(\''.$k.'\',\'cpplan_\');" />
							<a href="javascript:void(0)" style="text-decoration: none; " onclick="selectchkbox(\''.$k.'\',\'cpplan_\');">
								<span class="sai-label">'.$v['original_key'].'</span></a>
						</div>';
					}
				echo'</div>
			</div>			
		</div>
	</div>';
}


if(!defined('SOFTRESELLER') && method_exists('softpanel', 'listresellers')){
	echo '<div class="col-12 col-lg-6 mb-4">
		<div class="sai-card p-3">
			<div class="sai_main_head">
				<h2 class="sai-heading mb-2">'.$l['resellerselect'].'</h2>
				<hr class="sai_main_head_hr"/>
			</div>
			<div class="sai_form">
				<div class="form-group">
					<label class="sai_exp2 d-block mb-2 d-block">'.$l['exp_resellerselect'].'</label>
					<span class="sai-label d-block">
						<input type="checkbox" id="checkallreseller" onclick="checkallreseller(this);" class="mr-1"/><label class="sai-label" for="checkallreseller">'.$l['select_all'].'</label>
					</span>
					<span class="sai-label d-block">
						<input type="checkbox" id="resellersetting" name="resellersetting"/ class="mr-1"><label class="sai-label" for="resellersetting">'.$l['overwrite_settings'].'</label>
					</span>';
					foreach($_resellers as $k => $v){
						echo'<div class="script_choose" id="td_'.$k.'">
							<input type="checkbox" id="resellers_'.$k.'" name="resellers_'.$k.'" '.POSTchecked('resellers_'.$k, '').' onclick="changebg(\''.$k.'\',\'resellers_\');"/>
							<img src="'.$theme['images'].'reseller15.png" style="margin-bottom:4px;">
							<a href="javascript:void(0)" onclick="selectchkbox(\''.$k.'\',\'resellers_\');" class="text-decoration-none">
								<span class="sai-label">'.$v['original_key'].'</span>
							</a>
						</div>';
					}
				echo'</div>
			</div>
		</div>
	</div>';
}
echo'<div class="col-12 col-lg-6 mb-4">
	<div class="sai-card p-3">
		<div class="sai_main_head">
			<h2 class="sai-heading mb-2">'.$l['userselect'].'</h2>
			<hr class="sai_main_head_hr"/>
		</div>
		<div class="sai_form">
			<div class="form-group">
				<label class="sai_exp2 d-block mb-2 d-block">'.$l['exp_userselect'].'</label>
				<span class="sai-label d-block">
					<input type="checkbox" id="checkallusers_2" onclick="checkalluser(this);" class="mr-1"/><label class="sai-label" for="checkallusers_2">'.$l['select_all'].'</label>
				</span>
				<span class="sai-label d-block">
					<input type="checkbox" id="usersetting_2" name="usersetting" class="mr-1"/><label class="sai-label" for="usersetting_2">'.$l['overwrite_settings'].'</label>
				</span>';

				foreach($_users as $k=>$v){
			
				echo '<div class="script_choose" id="td_'.$k.'">
						<input type="checkbox" id="users_'.$k.'" name="users_'.$k.'" '.POSTchecked('users_'.$k, '').' onclick="changebg(\''.$k.'\',\'users_\');" />
						<img src="'.$theme['images'].'user15.png" style="margin-bottom:4px;">
						<a href="javascript:void(0)" onclick="selectchkbox(\''.$k.'\',\'users_\');" class="text-decoration-none">
							<span class="sai-label">'.$v['original_key'].'</span>
						</a>
					</div>';	
				}
		echo '</div>			
		</div>
	</div>
</div>
<div class="col-12 mb-4">
	<div class="sai-card p-3">
		<div class="sai_main_head">
			<h2 class="sai-heading mb-2">'.$l['limit_features'].'</h2>
			<hr class="sai_main_head_hr"/>
		</div>
		<div class="sai_form">
			<div class="form-group">
				<div class="row">
					<div class="col-12 col-lg-6 mb-3">
						<label for="max_ins_script" class="sai-label d-block">'.$l['max_ins_script'].'</label>
						<span class="sai_exp2 mb-1 d-block">'.$l['exp_max_ins_script'].' '.$l['default_note'].'</span>
						<input type="text" class="form-control" name="max_ins_script" id="max_ins_script" size="40" value="'.POSTval('max_ins_script', '').'">
					</div>
					<div class="col-12 col-lg-6 mb-3">
						<label for="max_backup_script" class="sai-label d-block">'.$l['max_backup_script'].'</label>
						<span class="sai_exp2 mb-1 d-block">'.$l['exp_max_backup_script'].' '.$l['default_note'].'</span>
						<input type="text" class="form-control" name="max_backup_script" id="max_backup_script" size="40" value="'.POSTval('max_backup_script', '').'">
					</div>
					<div class="col-12 col-lg-6">
						<label for="max_clone_script" class="sai-label d-block">'.$l['max_clone_script'].'</label>
						<span class="sai_exp2 mb-1 d-block">'.$l['exp_max_clone_script'].' '.$l['default_note'].'</span>
						<input type="text" class="form-control" name="max_clone_script" id="max_clone_script" size="40" value="'.POSTval('max_clone_script', '').'">
					</div>
					<div class="col-12 col-lg-6">
						<label for="max_staging_script" class="sai-label d-block">'.$l['max_staging_script'].'</label>
						<span class="sai_exp2 mb-1 d-block">'.$l['exp_max_staging_script'].' '.$l['default_note'].'</span>
						<input type="text" class="form-control" name="max_staging_script" id="max_staging_script" size="40" value="'.POSTval('max_staging_script', '').'">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="col-12 col-lg-6 mb-4">
	<div class="sai-card p-3">
		<div class="sai_main_head">
			<h2 class="sai-heading mb-2">'.$l['setselect'].'</h2>
			<hr class="sai_main_head_hr"/>
		</div>
		<div class="sai_form">
			<div class="form-group">
				<p class="sai_exp2 mb-1 d-block">'.$l['exp_setselect'].'</p>
				<span class="sai-label d-block mb-2">
					<input type="checkbox" onclick="checkallsets(this);" class="mr-1"/>'.$l['select_all'].'
				</span>';
				foreach($all_sets as $sk=> $av){
					if(!empty($av['plugins']) || !empty($av['custom_plugins']) || !empty($av['themes']) || !empty($av['custom_themes'])){
		
					echo '<div class="script_choose" id="td_'.$sk.'">
							<input type="checkbox" name="sets_name[]" id="sets_'.$sk.'" '.POSTchecked_Array('sets_name', $sk, (!empty($av['default_value']) ? true : false)).' value="'.$sk.'" onclick="changebg(\''.$sk.'_admin\', \'sets_\');"/>
							<a href="javascript:void(0)" onclick="selectchkbox(\''.$sk.'\', \'sets_\');" class="text-decoration-none">
								<span class="sai-label d-inline-block mb-2">'.str_replace('_admin', '', $sk).'</span>
							</a>
							
							<span class="someclass sai-label d-inline-block mb-2" title="'.$l['view_items'].'" style="cursor:pointer;" data-toggle="modal" data-target="#list_set_items_modal" onclick="list_set_items(\''.$sk.'\');">
								<i class="fas fa-info-circle"></i>
							</span>
					  </div>';
					}
				}
				echo '<div class="modal fade soft-modal" id="list_set_items_modal" role="dialog">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header text-left">
								<h4 class="modal-title"></h4>
								<button type="button" class="close" data-dismiss="modal">&times;</button>								
							</div>
							<div class="modal-body" id="list_plugins_themes">
							</div>
							<div class="modal-footer">
								<button type="button" class="flat-butt" data-dismiss="modal">'.$l['ok'].'</button>
							</div>
						</div>
					</div>
				</div>
			</div>			
		</div>
	</div>		
</div>
<div class="col-12 mb-4">
	<div class="sai-card p-3">
		<div class="sai_main_head">
			<h2 class="sai-heading mb-2">'.$l['scriptselect'].'</h2>
			<hr class="sai_main_head_hr"/>
		</div>
		<div class="sai_form">
			<div class="form-group">
				<p class="sai_exp2 mb-1 d-block">'.$l['exp_scriptselect'].'</p>
				<span class="sai-label d-block mb-2">
					<input type="checkbox" id="checkallsoftware_3" onclick="checkallsoftware(this);" class="mr-2"/><label class = "sai-label" for="checkallsoftware_3">'.$l['select_all'].'</label>
				</span>';
			//r_print($allcatwise);
			//Showing All scripts Category wise
			foreach($allcatwise as $ak => $av){
				
				if(empty($allcatwise[$ak])) continue;
				
				echo '<div class="sai_main_head mt-5">
					<h2 class="sai-heading mb-2">'.strtoupper($ak).' Apps</h2>
				</div>';
				
				foreach($av as $kk => $vv){
					
					if(empty($av[$kk])) continue;

					echo '<h3 class="sai-heading script_cat mt-4 mb-3">'.$l['cat_'.$ak.'_'.$kk].'</h3>
					<hr />';
					$i = 0;
					$j = count($vv);
					foreach($vv as $k => $v){
					
						if(is_int($i/$j)){
							echo '<div class="row mb-2">';
						}
			
						echo '<div class="col-6 col-lg-3 mb-3 script_choose" id="td_'.$k.'">
							
								<input type="checkbox" id="scripts_'.$k.'" name="scripts_'.$k.'" '.POSTchecked('scripts_'.$k, '').'  onclick="changebg(\''.$k.'\',\'scripts_\');"/ class="d-inine-block mr-1">

								<div class="sp20_'.$v['softname'].' d-inline-block align-middle"></div>
								<a href="javascript:void(0)" class="text-decoration-none" onclick="selectchkbox(\''.$k.'\',\'scripts_\');" >
									<label class="sai-label">'.$v['name'].'</label>
								</a>							
						</div>';
						$i++;		
													
						if(is_int($i/$j)){	
							echo '</div>';					
						}																								
					}
				}
			}			
			
			echo '</div>
			</div>
		</div>
	</div>
</div>';
	
	
echo '<p class="text-center">'.csrf_display().'
		<input type="submit" name="saveplan" value="'.$l['saveplan'].'" class="flat-butt">
</p>
'.(empty($globals['lictype']) ? '<div class="px-4 my-2 text-center"><span class="sai_bboxtxt">'.$l['feature_not_available'].'</span></div>' : '').'
</div>	
</div>
</form><br />';

softfooter();

}

?>