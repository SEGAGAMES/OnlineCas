<?php

//////////////////////////////////////////////////////////////
//===========================================================
// softwares_theme.php
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

function choosesoftwares_theme(){

global $theme, $globals, $user, $l, $langs, $skins, $error, $saved, $iscripts, $scripts, $catscripts, $allcatwise, $_iscripts, $cscripts;

softheader($l['<title>']);

echo '<div class="container-fluid  mt-4 mb-3">
		<div class="sai_form">';

error_handle($error);

if(!empty($saved)){
	//r_print($_iscripts);
	echo '<div class="container-fluid">
		<div class="alert alert-success text-center">
			<a href="#close" class="close" data-dismiss="alert">&times;</a>
				<i class="fas fa-check sai_icons mr-2"></i>
			  '.$l['settings_saved'].'
		</div>
	</div>
	<table width="100%" style="margin:0px auto;">
	<tr>
		<td>
			<div id="responses" class="sai-card p-4">
				<h2 class="sai_heading">'.$l['updating_files'].'
				&nbsp;&nbsp;&nbsp;
				<img src="'.$theme['images'].'admin_progress.gif" id="admin_progress"></h2>
				<hr class = "sai_main_head_hr">
				</div>
			</div>
		</td>
	</tr>
	</table>';

	//The necessary JavaScripts
	echo '<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
ids = ['.implode(', ', array_keys($_iscripts)).'];
//alert(ids);
updatedids = new Object();

for(x in ids){
	updatedids["soft_"+ids[x]] = false;
}

function updatesoftware(id, resp){
	
	//Update the Status with Response
	if(id > 0){
		$_("responses").innerHTML = $_("responses").innerHTML + resp;
		updatedids["soft_"+id] = true;
	}
		
	var csrf_token = $("#csrf_token").val(); 
	
	for(x in ids){
		if(updatedids["soft_"+ids[x]] == false){
			
			$.ajax({
				type: "POST",
				data: "csrf_token="+csrf_token,
				url: "'.$globals['index'].'act=softwares&sact=updatesoft&softid="+ids[x],
				// Checking for error
				success: function(data){
					updatesoftware(ids[x], data);	
				}
			});
			
			return true;
		}
	}
	
	$_("responses").innerHTML = $_("responses").innerHTML + "<div class=\"sai_heading\">'.$l['updating_completed'].'<a href=\"'.$globals['ind'].'act=softwares'.'\">'.$l['go_to_soft'].'</a></div>";
	$("#admin_progress").hide();
	
};

addonload("updatesoftware(0, \'\');");

// ]]></script>';

	softfooter();

	return true;
}

//The necessary JavaScripts
echo '<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
ids = new Array('.implode(', ', array_keys($scripts)).');
function checkallsoftware(checker){	
	try{
		for(x in ids){
			$_("soft_"+ids[x]).checked = checker.checked;
		}
	}catch(e){
		// Dont do anything
	}
		
};

function checkallpre(checker){	
	try{
		for(x in ids){
			$_("soft_pre_"+ids[x]).checked = checker.checked;
		}
	}catch(e){
		// Dont do anything
	}
		
};

$(document).ready(function(){
	shift_check_all("shift_select_installed");
	shift_check_all("shift_select_pre_download");
	$("#updatesoft_but").attr("disabled", false);
});

function checkalloutdated(checker){	
	try{
		for(x in ids){
			// select only outdated scripts
			if($("#soft_outdated_"+ids[x]).length > 0){
				$_("soft_"+ids[x]).checked = checker.checked;
			}
		}
	}catch(e){
		// Dont do anything
	}
		
};

function checkcatsoftware(checker, arr){
		
	$_(checker.id).checked = checker.checked;
	try{
		for(x in arr){
			$_("soft_"+arr[x]).checked = checker.checked;
		}	
	}catch(e){	
		//$_("soft_"+arr.length).checked = checker.checked;	
		// Dont do anything
	}
};

function checkcatpre(checker, arr){
	$_(checker.id).checked = checker.checked;
	//alert(arr);return;	
	try{
		for(x in arr){
			$_("soft_pre_"+arr[x]).checked = checker.checked;
		}	
	}catch(e){
		// Dont do anything
	}
};

function checkcatoutdated(checker, arr){
	$_(checker.id).checked = checker.checked;
	//alert(arr);return;	
	try{
		for(x in arr){
			// select only outdated scripts
			if($("#soft_outdated_"+arr[x]).length > 0){
				$_("soft_"+arr[x]).checked = checker.checked;
			}
		}	
	}catch(e){
		// Dont do anything
	}
};

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

// ]]></script>';



echo '<div id="stooltip" style="display:none; position:absolute; top: 0px; left: 0px; border: 1px solid #CCC; padding: 8px; background: #FFF; z-index:1000;"></div>
<form accept-charset="'.$globals['charset'].'" name="updatesoft" method="post" action="">
<link href="'.$globals['mirror_images'].'sprites/20.css" rel="stylesheet" type="text/css" />
<div class="sai-card p-4">';
	if(empty($globals['lictype'])){
		echo '<div class="px-4 my-2 text-center">
			<span class="sai_bboxtxt">'.$l['soft_free_note'].'</span>
		</div>';
	}
	echo '<div class="table-responsive">
		<h2 class="sai-heading">'.$l['gen_scripts'].'</h2>
		<hr class = "sai_main_head_hr">
		<table class="soft-table-list table table-borderless scripts-head">
			<tbody>
				<tr>
				<td class="sai_bboxtxt" width="46%;" style="vertical-align:middle; text-align:center;">
					<span class="script-count d-inline-block mr-1">'.(count($iscripts) - count($cscripts)).'/'.count($scripts).'</span>
					<span class="d-inline-block"> '.$l['scripts_are_ins'].'</span> 
				</td>';
				if(!empty($globals['lictype'])){
						echo '<td width="25%;" style="vertical-align:middle;">
							<input type="submit" name="updatesoft" value="'.$l['updatesoft'].'" class="flat-butt" id="updatesoft_but" disabled="true" />
						</td>';
					}
					echo '<td width="10%" style="vertical-align:middle;text-align:center;">
						<input type="checkbox" onclick="checkallsoftware(this);" />
					</td>
					'.(empty($globals['pre_download_all']) ? '<td width="10%" style="vertical-align:middle;text-align:center;">
						<input type="checkbox" onclick="checkallpre(this);" />
					</td>' : '').'
					<td width="10%" style="vertical-align:middle;text-align:center;">
						<input type="checkbox" onclick="checkalloutdated(this);" />
					</td>         
				</tr>        
			</tbody>
		</table>
	</div>
	<div class="table-responsive">
		<table class="table mb-0">
			<thead class="tables-cols">
				<th width="13%">'.$l['soft_name'].'</th>
				<th width="30%">'.$l['soft_desc'].'</th>
				<th width="7%" class="text-center">'.$l['soft_ver'].'</th>
				<th width="7%" class="text-center">'.$l['latest_ver'].'</th>
				<th width="7%" class="text-center">'.$l['soft_ins'].'</th>
				'.(empty($globals['pre_download_all']) ? '<th width="7%" class="text-center">'.$l['pre_down'].'</th>' : '').'
				<th width="7%" class="text-center">'.$l['soft_outdated'].'</th>
			</thead>
		</table>
	</div>
	<div class="table-responsive">';
	
		foreach($allcatwise as $cattype => $catscripts){
	
			if(empty($catscripts)){
				continue;
			}
	
				echo '<table class="table mb-0">
					<tr>
						<td colspan="7" class="sai-script-type pb-0">
							<h4 class="mt-1 mb-0">'.$l['type_'.$cattype].'</h4>
						</td>
					</tr>
				</table>';

			foreach($catscripts as $cat => $cv){
				
				if(empty($cv)) continue;
			
				echo '<table class="soft-table-list table">
					<tr class="sai-sub-type mt-4">
						<td valign="middle" colspan="4">
							'.$l['cat_'.$cattype.'_'.$cat].'
						</td>
						<td width="'.(empty($globals['pre_download_all']) ? '8%' : '10%').'" class="text-center"> 
							<input type="checkbox" id="soft_'.$cat.'" name="soft_'.$cat.'" onclick="checkcatsoftware(this, ['.implode(',', array_keys($cv)).']);" />
						</td>';
						if(empty($globals['pre_download_all'])){
							echo '<td width="8%" class="text-center"> 
								<input type="checkbox" id="soft_pre_'.$cat.'" name="soft_pre_'.$cat.'" onclick="checkcatpre(this, ['.implode(',', array_keys($cv)).']);" />
							</td>';
						}
					echo '<td width="8%" class="text-center"> 
							<input type="checkbox" id="soft_outdated_'.$cat.'" name="soft_outdated_'.$cat.'" onclick="checkcatoutdated(this, ['.implode(',', array_keys($cv)).']);" />
						</td>
				</tr>';
				
				$i=0;
				
				foreach($cv as $k => $v){
				
					if($k > 10000){
						continue;
					}
				
					echo '<tr>
						<td class="sai_bboxtxt" width="14%">
							<div class="sp20_'.$v['softname'].' d-inline-block mr-1 soft-icon mb-1"></div>
							<label class="soft-label">'.$v['name'].'</label>
						</td>							
						<td class="sai_bboxtxt" width="35%">'.$v['desc'].'</td>
						<td '.(trim($v['cur_ver']) == trim($v['ver']) ? '' : 'style="background:#FF8946; color:#ffffff;"').' class="sai_bboxtxt text-center" width="7%">'.$v['cur_ver'].'</td>
						<td class="sai_bboxtxt text-center" width="7%">'.$v['ver'].'</td>
						<td class="sai_bboxtxt text-center" width="7%">
							<input type="checkbox" class="shift_select_installed" id="soft_'.$k.'" name="soft_'.$k.'" '.POSTchecked('soft_'.$k, !empty($iscripts[$k])).' onmouseover="showtip(\''.$l['soft_enable'].' '.$scripts[$k]['name'].'\', this)" />
						</td>
						'.(empty($globals['pre_download_all']) ? '<td class="sai_bboxtxt text-center" width="7%">
							<input type="checkbox" class="shift_select_pre_download" id="soft_pre_'.$k.'" name="soft_pre_'.$k.'" '.POSTchecked('soft_pre_'.$k, !empty($iscripts[$k]['pre_down'])).' onmouseover="showtip(\''.$l['pre_down'].' '.$scripts[$k]['name'].'\', this)" />
						</td>' : '').'
						<td class="sai_bboxtxt text-center" width="7%">
							<label for="soft_'.$k.'">'.(is_outdated_script($k) ? '
								<i class="fas fa-circle" style="color:#f44336;" onmouseover="showtip(\''.$l['outdated_notification'].'\', this)" id="soft_outdated_'.$k.'"></i>' : '').'
							</label>
						</td>
					</tr>';
					$i++;		
				}
				echo '
				</table>';	
			}	
		}

			if(empty($globals['lictype'])){
				echo '<div style="width:700px; margin:0px auto;" class="sai_notebox"><font class="sai_bboxtxt">'.$l['soft_free_note'].'<br /></div>';
			}else{
				echo '<p align="center"><input type="submit" name="updatesoft" value="'.$l['updatesoft'].'" class="flat-butt" /></p>';
			}
		echo '</div>
		</div>
	</div>
'.csrf_display().'
</form>';

softfooter();

}

function updatesoft_theme(){

global $user, $globals, $scripts, $iscripts, $l, $theme, $error, $saved, $report, $softid;
	echo '<link href="'.$globals['mirror_images'].'sprites/32.css" rel="stylesheet" type="text/css" />
	<div class="sai_form" style="text-align:left;">
		<div class="row">
			<div style="padding-left:25px">
				<table>
					<tr>
						<td><div class="sp32_'.$scripts[$softid]['softname'].'"></div></td>
						<td><div><h4>&nbsp;&nbsp;'.$report['name'].'</h4></div></td>
					</tr>
				</table>
			</div>
		</div><br />
		<div class="row">
			<div class="col-sm-6 col-md-6 col-xs-6" style="padding-left:25px"><span class="sai_exp2">'.implode('<br />', $report['log']).'</span></div>
			<div class="col-sm-5 col-md-5 col-xs-6" style="padding-right:30px">
				'.(empty($report['status']) ? '<i class="fas fa-times fa-3x mr-2 pull-right" style="color:red;"></i>' : '<i class="fas fa-check fa-3x mr-2 pull-right" style="color:green;"></i>').'
			</div>
			<div class="col-sm-offset1"></div>
		</div>
	</div>
	<hr />';

}

?>