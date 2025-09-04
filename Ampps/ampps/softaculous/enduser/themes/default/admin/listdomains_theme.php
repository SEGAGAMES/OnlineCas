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

function listdomains_theme(){

global $theme, $globals, $user, $l, $langs, $error, $done, $softpanel, $listdomains;
	
	if(optGET('ajaxdel')){
			
		if(!empty($error)){
			echo '0'.current($error);
			return false;
		}
		if(!empty($done)){
			echo '1'.$l['delete'];
			return true;
		}
	}
	
	// Ajax part for update privaliges
	if(optGET('ajaxedit')){
	
		if(!empty($error)){				
			echo '0 '.current($error);
			return false;
		}
		
		if(!empty($done)){
			echo '1'.$l['domain_edited'];	
			showdomains();
			return true;			
		}
	}
	
	
	// Privaliges page for popup		
	if(optGET('editdomain')){
	
		$eowner = POST('owner');
		$eusername = POST('username');
		$edomain = POST('domain');
		$epath = POST('path');
		$ereplace_path = POST('replace_path');
		$ebackup_dir = POST('backup_dir');
		$edata_dir = POST('data_dir');
		
		echo '<style type="text/css">
		.ui_titlebar {
			padding: 0.4em 1em;
			background-color: #F0F0F0;
			border: 0px solid #AAAAAA;
			color: #222222;
			font-weight: bold;
			border-radius: 4px;
		}
		
		.sai_popup_add {
			position:absolute;
			left:50%;
			margin:0 auto;
			display:none;
			background:#FFFFFF;
			padding:5px;
		}
		
		.close {
			float:right;
			position:relative;
			z-index:99999;
			margin:3px 6px 0;
		}
		#scroller-body {		
			width=100%;
			padding-bottom:30px;
			height: 100%;
		}
		</style>
		<script language="javascript" type="text/javascript" ><!-- // --><![CDATA[	
			$(document).ready(function(){
				
			$("#submitdomain").click(function(e) {
				
				e.preventDefault();
				
				var formData = {
					"feusername": $("#eusername").val(),
					"foldeusername": $("#oldeusername").val(),
					"fedomain": $("#edomain").val(),
					"foldedomain": $("#oldedomain").val(),
					"fepath": $("#epath").val(),
					"fereplace_path": $("#ereplace_path").val(),
					"febackup_dir": $("#ebackup_dir").val(),
					"fedata_dir": $("#edata_dir").val(),
					"csrf_token": $("#csrf_token").val()
				};
				
				$("#comsg").css("display", "none");
				$("#ermsg").css("display", "none");
				
				var w_l = window.location.toString();
				if(w_l.indexOf("#") > 0){
					w_l = w_l.substring(0, w_l.indexOf("#"));
				}
				$.ajax({
					type: "POST",
					url: w_l+"&submitdomain=1&ajaxedit=1",
					data: formData,
					
					// checking for error
					success: function(data){
						var result = data.substring(0,1);
						
						if(result == "1"){
						var msg = data.substring(1,data.indexOf("<table"));
						var output = data.substring(data.indexOf("<table"));
							$(".sai_popup_add")
								.css({"height" : "480px"});
							$("#comsg").css("display", "");
							$("#comsg").html(msg);
							$("#showdomaintab").html(output);
							$(".sai_altrowstable tr").mouseover(function(){
								var old_class = $(this).attr("class");		
								$(this).attr("class", "sai_tr_bgcolor");		
								$(this).mouseout(function(){
									$(this).attr("class", old_class);
								});
							});
						}
						if(result == "0"){
							var msg = data.substring(1);
							$("#ermsg").css("display", "");
							$("#ermsg").html(msg);
						}
					},
					error: function(ts,errorThrown) {
						message_box.show_message("Error",\''.$l['connect_error'].'\',1);
					}
				});
			});
			});
		// ]]></script>';
			
		echo '<div style="width:100%">
			<a title="Close" class="close"><i class="fas fa-times px-1" title="Close" style="cursor:pointer;" onclick="popup_close();"></i></a>
			
			<div class="sai-card p-4">
				<div class="sai_main_head">
					<i class="fas sai-www sai-icon d-inline-block mr-1"></i>
					<h2 class="sai-heading d-inline-block mb-2 position-relative" style="top:-5px;">Edit '.$edomain.'</h2>
				</div>
				<hr class="sai_main_head_hr"/>
				
				<div id="comsg" style="display:none" class="alert alert-success text-center"></div>
				<div id="ermsg" style="display:none" class="alert alert-danger text-center"></div>
				
				<div class="sai_form">
				<form accept-charset="'.$globals['charset'].'" name="importsoftware" method="post" action="" >
				
				
				<div class="row mb-2">
					<div class="col-12 mb-2">
						<label for="eusername" class="sai-label d-block">'.$l['eusername'].'</label>
						<span class="sai_exp2 mb-1 d-block">'.$l['exp_eusername'].'</span>
						<input type="text" name="eusername" class="form-control" id="eusername" size="30" value="'.$eusername.'" />
						<input type="hidden" id="oldeusername" name="oldeusername" value="'.$eusername.'">
					</div>
				</div>
				
				<div class="row mb-2">
					<div class="col-12 mb-2">
						<label for="edomain" class="sai-label d-block">'.$l['edomain'].'</label>
						<span class="sai_exp2 mb-1 d-block">'.$l['exp_edomain'].'</span>
						<input type="text" name="edomain" class="form-control" id="edomain" size="30" value="'.$edomain.'" />
						<input type="hidden" id="oldedomain" name="oldedomain" value="'.$edomain.'">
					</div>
				</div>
				
				<div class="row mb-2">
					<div class="col-12 mb-2">
						<label for="epath" class="sai-label d-block">'.$l['epath'].'</label>
						<span class="sai_exp2 mb-1 d-block">'.$l['exp_epath'].'</span>
						<input type="text" name="epath" class="form-control" id="epath" size="30" value="'.$epath.'" />
					</div>
				</div>
				
				<div class="row mb-2">
					<div class="col-12 mb-2">
						<label for="ebackup_dir" class="sai-label d-block">'.$l['ebackup_dir'].'</label>
						<span class="sai_exp2 mb-1 d-block">'.$l['exp_ebackup_dir'].'</span>
						<input type="text" name="ebackup_dir" class="form-control" id="ebackup_dir" size="30" value="'.$ebackup_dir.'" />
					</div>
				</div>
				
				<div class="row mb-2">
					<div class="col-12 mb-2">
						<label for="ereplace_path" class="sai-label d-block">'.$l['ereplace_path'].'</label>
						<span class="sai_exp2 mb-1 d-block">'.$l['exp_ereplace_path'].'</span>
						<input type="text" name="ereplace_path" class="form-control" id="ereplace_path" size="30" value="'.$ereplace_path.'" />
					</div>
				</div>
				
				<div class="row mb-2">
					<div class="col-12 mb-2">
						<label for="edata_dir" class="sai-label d-block">'.$l['edata_dir'].'</label>
						<span class="sai_exp2 mb-1 d-block">'.$l['exp_edata_dir'].'</span>
						<input type="text" name="edata_dir" class="form-control" id="edata_dir" size="30" value="'.$edata_dir.'" />
					</div>
				</div>
					
				<p class="mt-3 text-center">'.csrf_display().'
					<input type="submit" name="submitdomain" id="submitdomain" class="flat-butt" value="'.$l['submitdomain'].'"/>
				</p>
				
				</form>
				</div>
			</div>
		</div><br />';
		return true;
	}

softheader($l['<title>']);

echo '<form accept-charset="'.$globals['charset'].'" name="listuser" method="post" action="">
<div class="container-fluid" id="scroller-body">
	<div class="container">
			<div class="row my-5">
				<div class="col-12">
					<div class="sai-card p-4">
						<div class="sai_main_head">
							<i class="fas sai-www sai-icon d-inline-block mr-1"></i>
							<h2 class="sai-heading d-inline-block mb-2 position-relative" style="top:-5px;">'.$l['title'].'</h2>
						</div>
						<hr class="sai_main_head_hr"/>
						<div class="sai_form">';
						error_handle($error);
						echo '
<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
		
// Function for close popup
function popup_close(){
	$(".sai_popup_add").fadeOut(1000);
	$("#comsg").css("display", "none");
	$("#ermsg").css("display", "none");
};

// Function for show popup
function show_popup(domain){
	var obj = JSON.parse(domain);			 																
	var height = $("#scroller-body").height();
	var width = $("#scroller-body").width();
	var spanHeight = 50;
	var spanWidth = 50;	
	var w_l = window.location.toString();				
	var csrf_token = $("#csrf_token").val();			
	if(w_l.indexOf("#") > 0){
		w_l = w_l.substring(0, w_l.indexOf("#"));
	}					
	$.ajax({
		type: "POST",
		url: w_l+"&editdomain=1",					
		data: "owner="+obj.owner+"&username="+obj.username+"&domain="+obj.domain+"&path="+obj.path+"&replace_path="+obj.replace_path+"&backup_dir="+obj.backup_dir+"&data_dir="+obj.data_dir+"&username="+obj.username+"&csrf_token="+csrf_token,			
		success: function(data){
			$(".sai_popup_add").html(data);
		},
		error: function() {
			message_box.show_message("Error",\''.$l['connect_error'].'\',1);						
		}	
	});
	setTimeout(function() {
		display();
	},1000);
	
	return true;
};	

function display(){
	$(".sai_popup_add")
		.css({"margin-left" : "-250px"})
		.css({"margin-top" : "-150px"})
		.fadeIn(500);
};
	
// For msgbox
var message_box = function() {			
	return {
		show_message: function(title, body , image) {			
			var okbutton = \'<input  style="width:75px" class="flat-butt" type="button" onclick="message_box.close_message();" value="OK" />\';
			if(image == "1"){
				var img = \'<i class="fas fa-exclamation-triangle fa-4x" style="color:orange;"></i>\';
			}else{
				var img = \'<i class="fas fa-check fa-4x" style="color:green;"></i>\';			
			}					
			if(jQuery(\'.sai_message_box\').html() === null || $(\'.sai_message_box\').html() === undefined) {
				var message = \'<div class="sai_message_box"><table border="0" cellpadding="8" width="100%" height="100%"><tr ><td rowspan="2" width="40%" > \'+ img + \'</td><td width="60%" class ="msg_tr1">\' +  title + \'</td></tr><tr class ="msg_tr2"><td style="text-align:left">\' + body + \'</td></tr><tr ><td colspan="2" class ="msg_tr3">\' + okbutton + \'</td></tr></table></div>\';
				jQuery(document.body).append( message );
				jQuery(\'.sai_message_box\').css(\'top\', scrolledy() + 150);							
				jQuery(\'.sai_message_box\').show(\'slow\');
			}else{
				var message =\' <table border="0" width="100%" cellpadding="8" height="100%"><tr ><td rowspan="2" width="40%">\'+ img +  \'</td><td widt="60%" class ="msg_tr1">\' + title + \'</td></tr><tr class ="msg_tr2"><td style="text-align:left">\' + body + \'</td></tr><tr ><td colspan="2" class ="msg_tr3">\' + okbutton + \'</td></tr></table>\';
				jQuery(\'.sai_message_box\').css(\'top\', scrolledy() + 150);
				jQuery(\'.sai_message_box\').show(\'slow\');
				jQuery(\'.sai_message_box\').html( message );
			}
		},
		delete_message: function(title, body ,did) {
			var yesbutton = \'<input type="button" style="width:75px" onclick="message_box.yes_close_message(\\\'\'+did+\'\\\');" value="YES" class="btn btn-danger"/>\';
			var nobutton = \'<input type="button" style="width:75px" onclick="message_box.no_close_message();" value="NO" class="btn btn-primary" />\';
			var img = \'<i class="fas fa-trash-alt fa-3x" style="color:red;">\';
			if(jQuery(\'.sai_message_box\').html() === null || $(\'.sai_message_box\').html() === undefined) {
				var message = \'<div class="sai_message_box"><table border="0" cellpadding="8" width="100%" height="100%"><tr height="60%" ><td rowspan="2" width="40%" > \'+ img + \'</td><td width="60%" class ="msg_tr1" height="10%">\' +  title + \'</td></tr><tr ><td style="text-align:left" height="60%" cellpading="2" class ="msg_tr2">\' + body + \'</td></tr><tr ><td colspan="2" class ="msg_tr3" >\' + yesbutton + \'&nbsp; &nbsp; \' + nobutton + \'</td></tr></table></div>\';
				jQuery(document.body).append( message );
				jQuery(\'.sai_message_box\').css(\'top\', scrolledy() + 150);							
				jQuery(\'.sai_message_box\').show(\'slow\');
			}else{
				var message = \' <table  border="0" cellpadding="8" width="100%" height="100%"><tr height="60%" ><td rowspan="2" width="40%">\'+ img +  \'</td><td widt="60%" class ="msg_tr1" height="10%">\' + title + \'</td></tr><tr><td style="text-align:left" height="60%" cellpading="2" class ="msg_tr2">\' + body + \'</td></tr><tr ><td colspan="2" class ="msg_tr3" >\' + yesbutton + \'&nbsp; &nbsp; \' + nobutton + \'</td></tr></table>\';
				jQuery(\'.sai_message_box\').css(\'top\', scrolledy() + 150);
				jQuery(\'.sai_message_box\').show(\'slow\');
				jQuery(\'.sai_message_box\').html( message );
			}
		},
		close_message: function() {
			jQuery(\'.sai_message_box\').hide(\'fast\');
		},
		yes_close_message: function(did) {
			$(\'#did\'+did).removeClass("fa-trash-alt").addClass("fa-spinner");
			jQuery(\'.sai_message_box\').hide(\'fast\');
			var deltmp = did.split("--soft--");
			var csrf_token = $("#csrf_token").val();
			
			$.ajax({				
				type: "POST",				
				url: window.location+"&ajaxdel=1&deletedomain=1&deluser="+deltmp[1]+"&delowner="+deltmp[0]+"&deldomain="+deltmp[2],
				data: "csrf_token="+csrf_token,
				// checking for error
				success: function(data){
					var result = data.substring(0,1);					
					var msg = data.substring(1);
					if(result == "1"){
						message_box.show_message("Delete ", msg, 2);
						$_("tr"+did).style.display = "none";
					}
					if(result == "0"){
						message_box.show_message("Error ", msg, 1);
					}
				},				
				error: function(request,error) {
					message_box.show_message("Error",\''.$l['connect_error'].'\',1);					
				}
			});					
		},
		no_close_message: function() {
			jQuery(\'.sai_message_box\').hide(\'fast\');			
		}
	}
}();
	
$(document).ready(function(){
	$(".sai_altrowstable tr").mouseover(function(){
		var old_class = $(this).attr("class");
		$(this).attr("class", "sai_tr_bgcolor");
		$(this).mouseout(function(){
			$(this).attr("class", old_class);
		});
	});
	
	// For deleting record
	$(".delete").click(function() {
		var did = $(this).attr(\'id\');
		did = did.substr(3);
		var tmp_ress = did.split("--soft--");
		message_box.delete_message (\'Warning\',\''.$l['del_domain'].'\'+tmp_ress[2]+\' ?\', did);			
	});
	
	// Cancel
	$(".cancel").click(function() {
		var cid = $(this).attr(\'id\');
		cid = cid.substr(3);
		$("#cid"+cid).css("display", "none");
		$("#eid"+cid).removeClass("fa-save").addClass("fa-pencil-alt");
		$("#nof_entry"+cid).css("display", "none");
		$("#nof"+cid).css("display", "");
		if('.ent().'){
				$("#uid_entry"+cid).css("display", "none");
				$("#uid"+cid).css("display", "");
				$("#gid_entry"+cid).css("display", "none");
				$("#gid"+cid).css("display", "");
		}
	});
});
	
// ]]></script>';

echo '<div class="sai_form mt-4">
		<link href="https://www.softaculous.net/images/sprites/20.css" rel="stylesheet" type="text/css" />
		<form accept-charset="'.$globals['charset'].'" name="ussearch" method="GET" action="">
			<input type="text" name="domainsearch" id="domainsearch" placeholder="Enter domain to search..." value="'.POSTval('domainsearch', '').'" class="form-control d-inline-block w-50 mr-1"/>
			'.csrf_display().'
			<input type="submit" name="search" value="'.$l['submit'].'" class="flat-butt"/>
		</form>
		<div class="pagination d-block">';

page_links($globals['num_res'], $globals['cur_page'], $globals['reslen']);

echo '</div>';

if(!empty($listdomains)){
		echo '<div class="sai_popup_add"></div>
		<div id="showdomaintab" class="showdomaintab">';
		showdomains();
		echo '</div>
		<div class="pagination d-block">';
		page_links($globals['num_res'], $globals['cur_page'], $globals['reslen']);
		echo '</div>';
}else{
	echo '
	<div class="alert alert-warning my-4 text-center">
		'.$l['no_domains'].'
	</div>';
}

echo '<p align="center"><a href="'.$globals['ind'].'act=adddomain" style="text-decoration:none;"><span class="flat-butt">'.$l['adddomain'].'</span></a></p>
	</div>
				</div>
			</div>
		</div>
	</div>
</div>
	

</div>
'.csrf_display().'
</form><br />';

softfooter();

}

function showdomains(){

	global $theme, $globals, $user, $l, $langs, $error, $done, $softpanel, $listdomains;
	
	echo '<table border="0" cellpadding="8" cellspacing="1" width="95%" class="soft-table-list table list-user-table">
	<thead>
	<tr class="sai-sub-type">
		<td class="sai_head" width="15%">'.$l['username'].'</td>
		<td class="sai_head" width="20%">'.$l['domain'].'</td>
		<td class="sai_head" width="20%">'.$l['path'].'</td>
		<td class="sai_head text-center" width="15%">'.$l['options'].'</td>
	</tr>
	<thead>';
	$i=1;
	foreach($listdomains as $k => $v){
		echo '
		<tr class="'.($i % 2 == 0 ? "sai_evenrowcolor" : "sai_oddrowcolor").'" id="tr'.$v['owner'].'--soft--'.$v['username'].'--soft--'.$v['domain'].'">
	
			<td class="sai_bboxtxt">
				<span id="user'.$v['owner'].'--soft--'.$v['username'].'">'.$v['owner'].'_'.$v['username'].'</span>
			</td>
			
			<td class="sai_bboxtxt">
				<span id="dom'.$v['owner'].'--soft--'.$v['username'].'">'.(empty($v['domain']) ? '-' : $v['domain']).'</span>
				<input type="text" id="dom_entry'.$v['owner'].'--soft--'.$v['username'].'" style="display:none;width:35px;" >
			</td>
	
			<td class="sai_bboxtxt">
				<span id="path'.$v['owner'].'--soft--'.$v['username'].'">'.(empty($v['path']) ? '-' : $v['path']).'</span>
				<input type="text" id="path_entry'.$v['owner'].'--soft--'.$v['username'].'" style="display:none;width:35px;" >
			</td>
			
			<!--<td class="sai_bboxtxt">
				<span id="backup_dir'.$v['owner'].'--soft--'.$v['username'].'">'.(empty($v['backup_dir']) ? '-' : $v['backup_dir']).'</span>
				<input type="text" id="backup_dir_entry'.$v['owner'].'--soft--'.$v['username'].'" style="display:none;width:35px;" >
			</td>
			
			<td class="sai_bboxtxt">
				<span id="datadir'.$v['owner'].'--soft--'.$v['username'].'">'.(empty($v['data_dir']) ? '-' : $v['data_dir']).'</span>
				<input type="text" id="datadir_entry'.$v['owner'].'--soft--'.$v['username'].'" style="display:none;width:35px;" >
			</td>-->
			
			<td class="sai_bboxtxt" align="center">';
			
			echo '<a href="#" onclick=show_popup(\''.json_encode($v).'\');>
				<i class="fas fa-pencil-alt px-1 sai_icons edit" style="color:#FF5D00; cursor:pointer;" title="Edit"></i></a>
			
			<i class="fas fa-trash-alt px-1 sai_icons delete" style="color:red; cursor:pointer;" title="Delete" id="did'.$v['owner'].'--soft--'.$v['username'].'--soft--'.$v['domain'].'"></i>';
			
			echo '</td>
		</tr>';
		$i++;
	}
	
	echo '</table>';
	
}

?>