<?php

//////////////////////////////////////////////////////////////
//===========================================================
// installations_theme.php
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

function installations_theme(){

global $theme, $globals, $user, $l, $langs, $skins, $error, $list, $scripts, $_scriptwise, $emailed, $iscripts, $autoupgrade, $ins_to_be_upgrade, $records_updated, $real_version, $_domainwise, $_timewise;

if(optGET('api')){
	_api($list, optGET('api'));
	return;
}

softheader($l['<title>']);

//The necessary JavaScripts
echo '<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
var ids = [];
function show_image(){
	
	goto_top();
	$("#prog_img").fadeIn(500);
	$("#list_ins").hide();
	$("#autoupgrade_process").css("display","");
	$("#prog_img").show();

	$("#list_ins input[type=checkbox]:checked").each(function() {
		ids.push($(this).val());
	});
	
	//alert(aArray);return;
		
	updatedids = new Object();
	for(x in ids){
		if(ids[x] != "on"){
			//alert(ids[x]);
			updatedids[ids[x]] = false;
		}
	}
	//alert(ids);
	
	$("#upgrade_ins_div1").css("display","none");
	$("#upgrade_ins_div2").css("display","none");
	
	autoupgradeins(0, \'\');
	return false;
};

function autoupgradeins(id, resp){
	//alert(resp);
	//alert(id);
	
	
	//Update the Status with Response
	if(id != 0){
		$("<div>"+resp+"</div>").appendTo("#autoupgrade_process");
		updatedids[id] = true;
	}
	
	var csrf_token = $("#csrf_token").val(); 
	
	for(x in ids){
		//alert(ids[x]);
		if(updatedids[ids[x]] == false){
			var tmp_id = ids[x].split("-");
			
			$.ajax({
				type: "POST",
				data: "csrf_token="+csrf_token,
				url: "'.$globals['index'].'act=installations&show=upgrade&sact=autoupgradeins&user="+tmp_id[0]+"&insid="+tmp_id[1],
				// Checking for error
				success: function(data){
					autoupgradeins(ids[x], data);
				}
			});
			
			return true;
		}
	}

	$("#prog_img").fadeOut(50);
	$("#succ_upgrad_msg").fadeIn(100);
	$("#goto_list_link").fadeIn(100);
	
};

// ]]></script>';

echo '<script language="JavaScript" src="'.$theme['url'].'/js/osuggest.js" type="text/javascript"></script>
<form accept-charset="'.$globals['charset'].'" name="serchinstallations" method="post" action="" class="form-horizontal">
<div class="container-fluid mt-5">
	
<div class="sai_form">';
error_handle($error);

echo '<div class="sai-card p-4">
<div class="sai_main_head">
	<h2 class="sai-heading mb-2">'.$l['searchinstallations'].'</h2>
	<hr class = "sai_main_head_hr"/>
</div>
	<div class="row">
		<div class="col-12 col-lg-6">
			<div class="form-group">
				<label for="scripts" class="sai-label d-block">'.$l['search_scripts'].'</label>
				<span class="sai_exp2 mb-1 d-block">'.$l['search_scripts_exp'].'</span>
				<input type="text" name="scripts" class="form-control" id="scripts" size="30" value="'.POSTval('scripts').'" onkeyup="handlesuggest(event, \'scripts\')" onkeydown="handlekeys(event)" autocomplete=off  onblur="setTimeout(hidesuggest, 1000);" suggesturl="'.$globals['ind'].'act=suggest&sact=scripts" />
			</div>
		</div>
		
		<div class="col-12 col-lg-6">
			<div class="form-group">
				<input type="checkbox" id="only_outdated" name="only_outdated" '.POSTchecked('only_outdated').' />
				<label class="sai-label" for="only_outdated">'.$l['only_outdated'].'</label>
				<span class="sai_exp2 mb-1 d-block">'.$l['only_outdated_exp'].'</span>
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="col-12 col-lg-6">
			<div class="form-group">
				<label for="users" class="sai-label">'.$l['search_users'].'</label>
				<span class="sai_exp2 mb-1 d-block">'.$l['search_users_exp'].'</span>
				<input type="text" name="users" class="form-control" id="users" size="30" value="'.POSTval('users').'" onkeyup="handlesuggest(event, \'users\')" onkeydown="handlekeys(event)" autocomplete=off  onblur="setTimeout(hidesuggest, 1000);" suggesturl="'.$globals['ind'].'act=suggest&sact=users" />
			</div>
		</div>
		
		<div class="col-12 col-lg-6">
			<div class="form-group">
				<input type="checkbox" id="only_realversion" name="only_realversion" '.POSTchecked('only_realversion').' />
				<label class="sai-label" for="only_realversion">'.$l['only_realversion'].'</label>
				<span class="sai_exp2 mb-1 d-block">'.$l['only_realversion_exp'].'</span>
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="col-12 col-lg-6">
			<div class="form-group">
				<label for="domains" class="sai-label">'.$l['search_domains'].'</label>
				<span class="sai_exp2 mb-1 d-block">'.$l['search_domains_exp'].'</span>
				<input type="text" class="form-control" name="domains" id="domains" size="30" value="'.POSTval('domains').'" />
			</div>
		</div>
	</div>
	
	<p class="mt-4 text-center">
	'.csrf_display().'
	<input type="submit" name="listinstallations" value="'.$l['search_ins'].'" class="flat-butt" />
	</p>
</div>		
	
</div>
</div>
</form>';

if(isset($_REQUEST['listinstallations'])){
	echo '<div class="container-fluid">
	<div class="sai_form">';
	$upgrade_ins_button = '<div class="text-right py-2">
					<p class="sai-label mb-0">'.$l['with_selected'].' : '.csrf_display().'
					<input type="submit" name="upgrade_ins" id="upgrade_ins" value="'.$l['sub_upgrade_ins'].'" class="flat-butt" onclick="return show_image();" /></p>
				</div>';
	
	// In case there is any error than just dont show the button	
	if(!empty($error)){
		$upgrade_ins_button = '';
	}
	
	$email_button = '<div class="text-right py-3">
		<p class="sai-label mb-0">'.$l['with_selected'].' : ';
	if(!empty($real_version)){
		$email_button .= '<input type="submit" name="update_records" id="update_records" value="'.$l['update_records'].'" class="flat-butt"/>';
	}else{
		$email_button .=  '<input type="submit" name="send_email" id="send_email" value="'.$l['sub_email_users'].'" class="flat-butt"/>';
	}
	
	echo '</p>
	</div>';

	if(!empty($records_updated)){
		echo '<div class="container-fluid">
				<div class="alert alert-success text-center"><i class="fas fa-check sai_icons mr-2"></i>
				'.$l['succ_update_record'].'</div>
			</div>';
	}
	
	if(empty($list)){
		echo '<div class="container-fluid">
		<div class="container mt-4 mb-3">
			<div class="sai-page-title text-center">
				<h2>'.$l['no_results'].'</h2>
			</div>
		</div>
	</div>';
	}else{
		
		if(!empty($emailed)){
			echo '<div class="container-fluid">
					<div class="alert alert-success"><i class="fas fa-check sai_icons mr-2"></i>
					'.$l['emailed_users'].'</div>
				</div>';
		}
		
		echo '<div class="container-fluid">
				<div class="row my-2 text-center">
					<div class="col-12 col-lg-10 alert alert-warning p-3 mx-auto" id="succ_upgrad_msg" style="display:none">
						'.$l['upgraded_ins'].'
					</div>
				</div>
			</div>
			
			<form accept-charset="'.$globals['charset'].'" name="email_users" method="post" action="" id="email_users">
			<link href="'.$globals['mirror_images'].'sprites/20.css" rel="stylesheet" type="text/css" />';
		
		if(!empty($real_version)){
			echo '<div class="notebox" style="width:95%;" id="beta_notice1">
				<table width="100%" cellpadding="5" cellspacing="1" border="0">
					<tr>
						<td width="25px">
							<div class="lirealver" style="height:16px;width:16px"></div>
						</td>
						<td><font class="bboxtxt">'.$l['real_ver_notice'].'</font></td>
					</tr>
					<tr>
						<td width="25px">
							<div class="lioutdated" style="height:16px;width:16px"></div>
						</td>
						<td><font class="bboxtxt">'.$l['latest_ver_notice'].'</font></td>
					</tr>
				</table>
				</div><br />';
		}

		echo '
		<div class="row">
			<div class="col-12 p-4 text-right">
				<div class="sortby">
					<div style="display:none;" id="sortby_wait"><img src="'.$theme['images'].'progress.gif" alt="please wait.."></div>
					<label class="soft-label mr-1">'.$l['sort_by'].':</label>
					<select name="sortby" onchange="sort_by(this.value);">
						<option value="users">'.$l['sort_users'].'</option>
						<option '.(!empty($_REQUEST['group_by_scripts']) ? 'selected="selected"' : '').' value="scripts">'.$l['sort_script'].'</option>
						<option '.(!empty($_REQUEST['group_by_domains']) ? 'selected="selected"' : '').' value="domains">'.$l['sort_domain'].'</option>
						<option '.(!empty($_REQUEST['group_by_time']) ? 'selected="selected"' : '').' value="time">'.$l['ins_time'].'</option>
					</select>
				</div>
			</div>
		</div>
		
		<div id="list_ins">
			<div class="sai-card p-4">
				<div class="table-responsive">
					<table cellpadding="0" cellspacing="0" width="100%" border="0">
					<tr>
					<td align="right">';
						
					if(!isset($_REQUEST['upgrade_installation']) || !empty($real_version)){
						echo $email_button;
					}else{
						// We are ending the table because we are not ending this in the variable.
						echo '<div id="upgrade_ins_div1">'.$upgrade_ins_button.'</div>';
					}
					
					echo '</td></tr>
					</table>
					
					<table cellpadding="5" cellspacing="1" class="soft-table-list table table-hover">
						<tr class="sai-sub-type">
							<th class="align-middle" width="'.(!empty($_domainwise) ? '200' : '100').'">'.(empty($_scriptwise) ? (empty($_domainwise) ? $l['li_user'] : $l['li_domains']) : $l['li_scripts']).'</th>
							<th class="align-middle">'.(empty($_scriptwise) ? $l['li_scripts'] : $l['li_user']).'</th>'.
							(!empty($_domainwise) ? '<th class="align-middle">'.$l['li_user'].'</th>' : '').'
							<th class="align-middle">'.$l['li_url'].'</th>
							<th class="">'.$l['ins_time'].'</th>
							<th class="text-center align-middle">'.$l['li_insver'].'</th>'.
							(!empty($real_version) ? '<th class="text-center align-middle">'.$l['li_realver'].'</th>' : '').
							'<th class="text-center align-middle">'.$l['li_ver'].'</th>
							<th class="text-center align-middle">
								<i class="fas fa-sync-alt" style="cursor:pointer;" title="'.$l['auto_upgrade_enabled'].'"></i>
							</th>
							<th class="text-center align-middle"><input type="checkbox" onclick="check(document.getElementsByName(\'list[]\'), this);" '.(!empty($error) ? 'disabled=true' : '').'/></th>
						</tr>';
			
					foreach($list as $lk => $lv){
						
						$i = 1;
						
						foreach($lv as $llk => $llv){
						
							foreach($llv as $ik => $iv){
								
								$outdated_class = '';
								
								$isCustom = (is_customscript($iv['sid']) ? 1 : 0);
								
								if(!empty($isCustom)){
									if($iscripts[$iv['sid']]['ver'] != $iv['ver']){
										$outdated_class = 'lioutdated';
									}
								}else{
									if($iscripts[$iv['sid']]['ver'] != $iv['ver'] && file_exists($globals['softscripts'].'/'.$iscripts[$iv['sid']]['softname'].'/upgrade.xml')){
										$outdated_class = 'lioutdated';
									}
								}
								
								echo '<tr>
								<td class="sai_bboxtxt">';
								
								if($i == 1){
									echo (empty($_scriptwise) ? (empty($_timewise) ? $lk : $llk) : (!empty($scripts[$iv['sid']]) && !empty($iscripts[$iv['sid']]) ? $scripts[$iv['sid']]['name'] : (!empty($isCustom) ? $iscripts[$iv['sid']]['name'] : $l['no_info'])));
								}else{
									echo '';
								}
								
								$real_class = 'lirealver';
								
								$__user = (empty($_scriptwise) ? $lk : $llk);
								
								if(!empty($_domainwise)){
									$__user = $iv['user'];
								}
								
								if(!empty($_timewise)){
									$__user = $llk;
								}
								
								echo '</td>
								<td class="sai_bboxtxt">'.(empty($_scriptwise) ? (!empty($scripts[$iv['sid']]) && !empty($iscripts[$iv['sid']]) ? $scripts[$iv['sid']]['name'] : (!empty($isCustom) ? $iscripts[$iv['sid']]['name'] : $l['no_info'])) : $llk).'</td>'.
								(!empty($_domainwise) ? '<td class="sai_bboxtxt">'.$__user.'</td>' : '').
								'
								<td class="sai_bboxtxt"><a class="text-decoration-none" href="'.$iv['softurl'].'" target="_blank">'.$iv['softurl'].'</a></td>
								<td class="sai_bboxtxt">'.datify($iv['itime']).'</td>
								<td class="sai_bboxtxt text-center '.$outdated_class.'">'.$iv['ver'].'</td>'.
								(!empty($iv['real_ver']) && !empty($real_version) ? '<td class="'.$real_class.' sai_bboxtxt text-center">'.$iv['real_ver'].'</td>' : '').
								'<td class="sai_bboxtxt text-center">'.(empty($isCustom) ? $scripts[$iv['sid']]['ver'] : $iscripts[$iv['sid']]['ver']).'</td>
								<td class="sai_bboxtxt text-center">'.(!empty($iv['eu_auto_upgrade']) ? '
								<i class="fas fa-check sai_icons" title="'.$l['auto_upgrade_enabled'].' '.($iv['eu_auto_upgrade'] == 1 ? $l['auto_upgrade_major'] : $l['auto_upgrade_minor']).'" style="cursor:pointer; color: green;"></i>' : '').'
								<td class="sai_bboxtxt text-center">'.((empty($isCustom) ? ($scripts[$iv['sid']]['ver'] != $iv['ver'] && file_exists($globals['softscripts'].'/'.$scripts[$iv['sid']]['softname'].'/upgrade.xml')) : ($iscripts[$iv['sid']]['ver'] != $iv['ver'] && file_exists($globals['softscripts'].'/'.$iscripts[$iv['sid']]['softname'].'/upgrade.xml'))) ? '<input type="checkbox" name="list[]" value="'.$__user.'-'.$ik.'" '.(!empty($error) ? 'disabled=true' : '').'/>' : '').'</td>
								</tr>';
									
								$i++;
								
							}				
						}			
					}
				
				echo '</table>';
				
				if(!isset($_REQUEST['upgrade_installation']) || !empty($real_version)){
					echo $email_button;
				}else{
					echo '<div id="upgrade_ins_div2">'.$upgrade_ins_button.'</div>';
				}
		
				echo '</div>
			</div>		
		</div>
		<div id="autoupgrade_process" style="display:none">
			<div style="display:none;float:left" id="prog_img"><img src="'.$theme['images'].'admin_progress.gif" />&nbsp;&nbsp;'.$l['upgrading_ins'].'</div>
		</div>
		<div id="goto_list_link" style="display:none" class="sai_heading">
			<center>'.$l['upgrading_completed'].'&nbsp;&nbsp;<a href="'.$globals['ind'].'act=installations&show=upgrade'.'">'.$l['go_to_autoupgrade'].'</a><center>
		</div>';
		
		if(!empty($real_version)){
			echo '<div class="notebox" style="width:95%;" id="beta_notice1">
					<table width="100%" cellpadding="5" cellspacing="1" border="0">
						<tr>
							<td width="25px">
								<div class="lirealver" style="height:16px;width:16px"></div>
							</td>
							<td><font class="bboxtxt">'.$l['real_ver_notice'].'</font></td>
						</tr>
						<tr>
							<td width="25px">
								<div class="lioutdated" style="height:16px;width:16px"></div>
							</td>
							<td><font class="bboxtxt">'.$l['latest_ver_notice'].'</font></td>
						</tr>
					</table>
				</div>';
		}
		
		echo csrf_display().'
		</form>';
		
	}

}

echo '</div>

</div><br />';

echo '<script language="javascript" type="text/javascript">

function sort_by(sb){
	
	$("#sortby_wait").css("display", "inline");
	
	// For Search Installations page result - Arrange Userwise, Sort by Installation Time
	var show = "'.(!empty($_REQUEST['show']) ? $_REQUEST['show'] : '').'";
	var post_params = "'.http_build_query($_POST).'";

	$.ajax({
		type: "POST",
		url: "'.$globals['index'].'act=installations&sortby="+sb+"&show="+show+"&jsnohf=1",
		data: post_params,
		// Checking for error
		success: function(data){
			$("#sortby_wait").css("display", "none");
			var $response = $(data);
			//query the jq object for the values
			var output = $response.find(".soft-table-list").html();
			$(".soft-table-list").html(output);
		},
		error: function(data) {
			return false;
		}
	});
}


</script>';

softfooter();

}

function autoupgrade_ins_theme(){

global $user, $globals, $scripts, $iscripts, $l, $theme, $error, $saved, $report, $softid;

	echo '<div class="sai_smbox mb-4" style="text-align:left;padding:10px;">
		<table width="97%" cellpadding="6" cellspacing="0" border="0">
			<tr>
				<td rowspan="2" width="5%">
					'.(empty($report['status']) ? '<i class="fas fa-times fa-2x mr-2 pull-right" style="color:red;"></i>' : '<i class="fas fa-check fa-2x mr-2 pull-right" style="color:green;"></i>').'
				</td>
			</tr>
			<tr>
				<td valign="top" class="">'.$report['log'].'</td>
			</tr>
		</table>
	</div>';

}

?>