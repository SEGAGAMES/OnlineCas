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

function listuser_theme(){

global $theme, $globals, $user, $l, $langs, $error, $reseller, $iscripts, $plans, $done, $_cpplan, $_users, $allcatwise, $_resellers, $loaded_scripts, $softpanel, $listusers, $SESS;
	
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

if(optGET('ajaxedit')){
	
	if(!empty($error)){
		echo '0'.current($error);
		return false;
	}
	if(!empty($done)){
		echo '1'.$l['edit'];
		return true;			
	}
}

softheader($l['<title>']);

echo '<form accept-charset="'.$globals['charset'].'" name="listuser" method="post" action="">
<div class="container-fluid">
	<div class="container">
			<div class="row my-5">
				<div class="col-12">
					<div class="sai-card p-4">
						<div class="sai_main_head">
							<i class="fas fa-th-list sai-icon d-inline-block mr-1"></i>
							<h2 class="sai-heading d-inline-block mb-2 position-relative" style="top:-5px;">'.$l['title'].'</h2>
						</div>
						<hr class="sai_main_head_hr"/>
						<div class="sai_form">';
						error_handle($error);
						echo '<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
	
								// For msgbox
								var message_box = function() {			
									return {
										show_message: function(title, body , image) {			
											var okbutton = \'<input  style="width:75px; margin-top:5px; background:#00A0D2; color:#FFF;" class="sai_submit" type="button" onclick="message_box.close_message();" value="OK" />\';
											if(image == "1"){
												var img = \'<i class="fas fa-exclamation-triangle fa-4x" style="color:orange;"></i>\';
											}else{
												var img = \'<i class="fas fa-check fa-4x" style="color:green;"></i>\';			
											}					
											if($(".sai_message_box").html() === null || $(".sai_message_box").html() === undefined) {
												var message = \'<div class="sai_message_box"><table border="0" cellpadding="8" width="100%" height="100%"><tr ><td rowspan="2" width="40%" > \'+ img + \'</td><td width="60%" class="msg_tr1">\' +  title + \'</td></tr><tr class ="msg_tr2"><td style="text-align:left">\' + body + \'</td></tr><tr ><td colspan="2" class="msg_tr3">\' + okbutton + \'</td></tr></table></div>\';
												$(document.body).append( message );
												$(".sai_message_box").css("top", scrolledy() + 150);							
												$(".sai_message_box").show("slow");
											}else{
												var message =\'<table border="0" width="100%" cellpadding="8" height="100%"><tr ><td rowspan="2" width="40%">\'+ img +  \'</td><td width="60%" class="msg_tr1">\' + title + \'</td></tr><tr class ="msg_tr2"><td style="text-align:left">\' + body + \'</td></tr><tr ><td colspan="2" class="msg_tr3">\' + okbutton + \'</td></tr></table>\';
												$(".sai_message_box").css("top", scrolledy() + 150);
												$(".sai_message_box").show("slow");
												$(".sai_message_box").html( message );
											}
										},
										delete_message: function(title, body ,did) {
											
											var yesbutton = \'<input type="button" style="width:75px; margin-top:5px; background:#00A0D2; color:#FFF;" onclick="message_box.yes_close_message(\\\'\'+did+\'\\\');" value="YES" class="sai_submit"/>\';
											var nobutton = \'<input type="button" style="width:75px; margin-top:5px; background:#00A0D2; color:#FFF;" onclick="message_box.no_close_message();" value="NO"  class="sai_submit" />\';
											var img = \'<i class="fas fa-trash-alt fa-3x" style="color:red;">\';
											
											if($(".sai_message_box").html() === null || $(".sai_message_box").html() === undefined) {
												var message = \'<div class="sai_message_box"><table border="0" cellpadding="8" width="100%" height="100%"><tr height="60%" ><td rowspan="2" width="40%" > \'+ img + \'</td><td width="60%" class ="msg_tr1" height="10%">\' +  title + \'</td></tr><tr ><td style="text-align:left" height="60%" cellpading="2" class ="msg_tr2">\' + body + \'</td></tr><tr ><td colspan="2" class ="msg_tr3" >\' + yesbutton + \'&nbsp; &nbsp; \' + nobutton + \'</td></tr></table></div>\';
												$(document.body).append( message );
												$(".sai_message_box").css("top", scrolledy() + 150);							
												$(".sai_message_box").show("slow");
											}else{
												var message = \'<table border="0" cellpadding="8" width="100%" height="100%"><tr height="60%" ><td rowspan="2" width="40%">\'+ img +  \'</td><td width="60%" class ="msg_tr1" height="10%">\' + title + \'</td></tr><tr><td style="text-align:left" height="60%" cellpading="2" class ="msg_tr2">\' + body + \'</td></tr><tr ><td colspan="2" class ="msg_tr3" >\' + yesbutton + \'&nbsp; &nbsp; \' + nobutton + \'</td></tr></table>\';
												
												$(".sai_message_box").css("top", scrolledy() + 150);
												$(".sai_message_box").show("slow");
												$(".sai_message_box").html( message );
											}
										},
										close_message: function() {
											$(".sai_message_box").hide("fast");
										},
										yes_close_message: function(did) {				
											$("[id=\'did" + did + "\']").removeClass("fa-trash-alt");
											$("[id=\'did" + did + "\']").addClass("fa-spinner");
											$(".sai_message_box").hide("fast");
											var deltmp = did.split("--soft--");
											var csrf_token = $("#csrf_token").val();
											$.ajax({				
												type: "POST",				
												url: window.location+"&ajaxdel=1&deluser="+deltmp[1]+"&delowner="+deltmp[0],
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
											$(".sai_message_box").hide("fast");			
										}
									}
								}();
	
								$(document).ready(function(){
									
									// For deleting record
									$(".delete").click(function() {
										var did = $(this).attr(\'id\');
										did = did.substr(3);
										var tmp_ress = did.split("--soft--");
										message_box.delete_message (\'Warning\',(tmp_ress[0] == tmp_ress[1] ? "'.$l['del_res_user'].'" : "'.$l['del_user'].'"), did);
									});
									
									// Cancel
									$(".cancel").click(function() {
										var cid = $(this).attr(\'id\');
										cid = cid.substr(3);
										$("[id=\'cid" + cid + "\']").css("display", "none");
										$("[id=\'eid" + cid + "\']").removeClass("fa-save");
										$("[id=\'eid" + cid + "\']").addClass("fa-pencil-alt");
										$("[id=\'nof_entry" + cid + "\']").css("display", "none");
										$("[id=\'updateuser_entry" + cid + "\']").css("display", "none");
										$("[id=\'nof" + cid + "\']").css("display", "");
										$("[id=\'updateuser" + cid + "\']").css("display", "");
										if('.(ent() ? 1 : 0).'){
												$("[id=\'uid_entry" + cid + "\']").css("display", "none");
												$("[id=\'uid" + cid + "\']").css("display", "");
												$("[id=\'gid_entry" + cid + "\']").css("display", "none");
												$("[id=\'gid" + cid + "\']").css("display", "");
										}
									});

									// For editing record
									$(".edit").click(function() {
										var id = $(this).attr(\'id\');
										id = id.substr(3);
										edittmp = id.split("--soft--");
										$("[id=\'cid" + id + "\']").css("display", "");
										
										if($(this).hasClass("fa-save")){
											var nof = $("[id=\'nof_entry" + id + "\']").val();
											var updateuser = $("[id=\'updateuser_entry" + id + "\']").val();
											if('.(ent() ? 1 : 0).'){
												var uid = $("[id=\'uid_entry" + id + "\']").val();
												var gid = $("[id=\'gid_entry" + id + "\']").val();
											}
											
											var csrf_token = $("#csrf_token").val();
											
											$.ajax({
												type: "POST",
												url: window.location+"&ajaxedit=1&moduser="+edittmp[1]+"&updateuser="+updateuser+"&nof="+nof+"&modowner="+edittmp[0]'.(ent() ? '+"&uid="+uid+"&gid="+gid' : '').',
												data: "csrf_token="+csrf_token,				
												// checking for error
												success: function(data){
													//alert(data);
													var result = data.substring(0,1);
													var msg = data.substring(1);
													if(result == "0"){
														message_box.show_message( "Error ",msg,1);
													}
													if(result == "1"){
														message_box.show_message( "Done ",msg,2);
														$("[id=\'nof" + id + "\']").html($("[id=\'nof_entry" + id + "\']").val());
														var new_user = $("[id=\'updateuser" + id + "\']").text();
														
														if(edittmp[0]!=edittmp[1]){
															var new_user = $("[id=\'updateuser_entry" + id + "\']").val();
															var ahref_val = $("[id=\'ah" + id + "\']").attr("href");
															var ahref_val = ahref_val.replace(edittmp[1], new_user);
															$("[id=\'ah" + id + "\']").attr("href", ahref_val);
															
															$("[id=\'updateuser" + id + "\']").html(new_user);
															
															$("[id=\'tr" + edittmp[0] + "--soft--" + edittmp[1] + "\']").attr("id", \'tr\'+edittmp[0]+\'--soft--\'+new_user);
															
															$("[id=\'updateuser" + edittmp[0] + "--soft--" + edittmp[1] + "\']").attr("id", \'updateuser\'+edittmp[0]+\'--soft--\'+new_user);
															
															$("[id=\'updateuser_entry" + edittmp[0] + "--soft--" + edittmp[1] + "\']").attr("id", \'updateuser_entry\'+edittmp[0]+\'--soft--\'+new_user);
															
															$("[id=\'nof" + edittmp[0] + "--soft--" + edittmp[1] + "\']").attr("id", \'nof\'+edittmp[0]+\'--soft--\'+new_user);
															
															$("[id=\'nof_entry" + edittmp[0] + "--soft--" + edittmp[1] + "\']").attr("id", \'nof_entry\'+edittmp[0]+\'--soft--\'+new_user);
															
															$("[id=\'eid" + edittmp[0] + "--soft--" + edittmp[1] + "\']").attr("id", \'eid\'+edittmp[0]+\'--soft--\'+new_user);
															
															$("[id=\'did" + edittmp[0] + "--soft--" + edittmp[1] + "\']").attr("id", \'did\'+edittmp[0]+\'--soft--\'+new_user);
															
															$("[id=\'cid" + edittmp[0] + "--soft--" + edittmp[1] + "\']").attr("id", \'cid\'+edittmp[0]+\'--soft--\'+new_user);
															
															$("[id=\'ah" + edittmp[0] + "--soft--" + edittmp[1] + "\']").attr("id", \'ah\'+edittmp[0]+\'--soft--\'+new_user);
														}
														
														if('.(ent() ? 1 : 0).'){
															$("[id=\'uid" + id + "\']").html($("[id=\'uid_entry" + id + "\']").val());
															$("[id=\'gid" + id + "\']").html($("[id=\'gid_entry" + id + "\']").val());
														}
													}
													$("[id=\'eid" + edittmp[0] + "--soft--" + new_user + "\']").removeClass("fa-spinner").addClass("fa-pencil-alt");
												},
												error: function() {
													message_box.show_message("Error",\''.$l['connect_error'].'\',1);
												}
											});
											$(this).removeClass("fa-save");
											$(this).addClass("fa-spinner");
											$("[id=\'cid" + id + "\']").css("display", "none");
											$("[id=\'nof_entry" + id + "\']").css("display", "none");
											$("[id=\'nof" + id + "\']").css("display", "");
											$("[id=\'updateuser_entry" + id + "\']").css("display", "none");
											$("[id=\'updateuser" + id + "\']").css("display", "");
											if('.(ent() ? 1 : 0).'){
												$("[id=\'uid_entry" + id + "\']").css("display", "none");
												$("[id=\'uid" + id + "\']").css("display", "");
												$("[id=\'gid_entry" + id + "\']").css("display", "none");
												$("[id=\'gid" + id + "\']").css("display", "");
											}
										}else{
											$(this).removeClass("fa-pencil-alt");
											$(this).addClass("fa-save");
											if(edittmp[0]==edittmp[1]){
												$("[id=\'nof" + id + "\']").css("display", "none");
												$("[id=\'nof_entry" + id + "\']")
													.val($("[id=\'nof" + id + "\']").text())
													.css("display", "")
													.focus();
											}
											
											if(edittmp[0]!=edittmp[1]){
												$("[id=\'updateuser" + id + "\']").css("display", "none");
												$("[id=\'updateuser_entry" + id + "\']")
													.val($("[id=\'updateuser" + id + "\']").text())
													.css("display", "")
													.focus();
											}
											
											if('.(ent() ? 1 : 0).'){
												$("[id=\'uid" + id + "\']").css("display", "none");
												$("[id=\'uid_entry" + id + "\']")
													.val($("[id=\'uid" + id + "\']").text())
													.css("display", "")
													.focus();
												$("[id=\'gid" + id + "\']").css("display", "none");
												$("[id=\'gid_entry" + id + "\']")
													.val($("[id=\'gid" + id + "\']").text())
													.css("display", "")
													.focus();
											}
										}
									});
								});
									
								// ]]>
							</script>';
							echo'<div class="sai_form mt-4">
							<link href="https://www.softaculous.net/images/sprites/20.css" rel="stylesheet" type="text/css" />
								<form accept-charset="'.$globals['charset'].'" name="ussearch" method="GET" action="">
									<input type="text" name="usersearch" id="usersearch" placeholder="Enter user name to search..." value="'.POSTval('usersearch', '').'" class="form-control d-inline-block w-50 mr-1"/>
									'.csrf_display().'
									<input type="submit" name="search" value="'.$l['submit'].'" class="flat-butt"/>
								</form>
								<div class="pagination d-block">';
								page_links($globals['num_res'], $globals['cur_page'], $globals['reslen']);
								echo '</div>';
			
							if(!empty($listusers)){
			
					echo '<table border="0" cellpadding="8" cellspacing="1" width="95%" class="soft-table-list table list-user-table">
							<thead>
								<tr class="sai-sub-type">
									<td class="sai_head" width="15%">'.$l['owner'].'</td>
									<td class="sai_head" width="15%">'.$l['user_name'].'</td>
									<td class="sai_head text-center" width="10%">'.$l['login'].'</td>
									<td class="sai_head text-center" width="14%">'.$l['number_of_users'].'</td>';
									if(ent()){
										echo '<td class="sai_head text-center" width="10%">'.$l['uid'].'</td>
										<td class="sai_head text-center" width="10%">'.$l['gid'].'</td>';
									}
									echo '<td class="sai_head text-center" width="10%">'.$l['option'].'</td>
								</tr>
							</thead>';
				$i=1;
				foreach($listusers as $k => $v){
					$_k = str_replace($v['owner'].'_', '', $k);
					echo '<tr class="'.($i % 2 == 0 ? "sai_evenrowcolor" : "sai_oddrowcolor").'" id="tr'.$v['owner'].'--soft--'.$v['username'].'">

							<td class="sai_bboxtxt">
								<span>'.$v['owner'].'</span>
							</td>
							<td class="sai_bboxtxt">
								<span id="updateuser'.$v['owner'].'--soft--'.$v['username'].'">'.$v['username'].'</span>
								<input type="text" id="updateuser_entry'.$v['owner'].'--soft--'.$v['username'].'" style="display:none;">
							</td>
							
							<td class="sai_bboxtxt text-center">'.(($k != $softpanel->user['owner'].'_'.$softpanel->user['username']) ? '
								<a href="https://'.$globals['HTTP_HOST'].(!empty($globals['cp_port']) ? ':'.$globals['cp_port'] : '').'/index.php?api_key='.$softpanel->user['api_key'].'&api_pass='.$softpanel->user['api_pass'].'&createSession='.$_k.'&owner='.$v['owner'].'" target="_blank" id="ah'.$v['owner'].'--soft--'.$v['username'].'">
									<i class="fas fa-chevron-right py-1 px-2" style="cursor:pointer;"></i>
								</a>' : '').'
							</td>
					
							<td class="sai_bboxtxt text-center">
								<span id="nof'.$v['owner'].'--soft--'.$v['username'].'">'.(empty($v['num_users']) ? '-' : $v['num_users']).'</span>
								<input type="text" id="nof_entry'.$v['owner'].'--soft--'.$v['username'].'" style="display:none;width:45px;" >
							</td>';
							if(ent()){
								echo '<td class="sai_bboxtxt text-center">
									<span id="uid'.$v['owner'].'--soft--'.$v['username'].'" style="margin-left:10%">'.(empty($v['_uid']) ? '-' : $v['_uid']).'</span>
									<input type="text" id="uid_entry'.$v['owner'].'--soft--'.$v['username'].'" style="display:none;width:40px;" >
								</td>						
								<td class="sai_bboxtxt text-center">
									<span id="gid'.$v['owner'].'--soft--'.$v['username'].'" style="margin-left:10%">'.(empty($v['_gid']) ? '-' : $v['_gid']).'</span>
									<input type="text" id="gid_entry'.$v['owner'].'--soft--'.$v['username'].'" style="display:none;width:40px;" >
								</td>';
							}
							
							if(ent()){
								if((defined('SOFTRESELLER') ? !($v['owner'] == $v['username']) : !($v['owner'] == $v['username'] && $v['owner'] == 'root'))){
										echo '<td width="13%" class="sai_bboxtxt text-center">
											<i class="fas fa-pencil-alt px-1 sai_icons edit" style="color:#FF5D00; cursor:pointer;" title="Edit" id="eid'.$v['owner'].'--soft--'.$v['username'].'"></i>
											<i class="fas fa-trash-alt px-1 sai_icons delete" style="color:red; cursor:pointer;" title="Delete" id="did'.$v['owner'].'--soft--'.$v['username'].'"></i>
											<i class="fas fa-times px-1 sai_icons cancel" title="Cancel" id="cid'.$v['owner'].'--soft--'.$v['username'].'" style="display:none; cursor:pointer;"></i>
										</td>';
									}else{
										echo '<td class="sai_bboxtxt text-center"><span style="margin-left:15%;">-</span></td>';
									}
								}
							
							if(aefer()){
								
								// Do not allow to edit the user himself
								if($k != $softpanel->user['owner'].'_'.$softpanel->user['username']){
						
									echo '<td width="13%" class="sai_bboxtxt text-center">
											<i class="fas fa-pencil-alt px-1 sai_icons edit" style="color:#FF5D00; cursor:pointer;" title="Edit" id="eid'.$v['owner'].'--soft--'.$v['username'].'"></i>
											<i class="fas fa-trash-alt px-1 sai_icons delete" style="color:red; cursor:pointer;" title="Delete" id="did'.$v['owner'].'--soft--'.$v['username'].'"></i>
											<i class="fas fa-times px-1 sai_icons cancel" title="Cancel" id="cid'.$v['owner'].'--soft--'.$v['username'].'" style="display:none; cursor:pointer;"></i>
										
									</td>';
								}else{
									echo '<td class="sai_bboxtxt text-center"><span style="margin-left:15%;">-</span></td>';
								}
							}
							echo '</tr>';
					$i++;
				}
				
				echo '</table>
				<div class="pagination d-block">';			
				page_links($globals['num_res'], $globals['cur_page'], $globals['reslen']);
				echo '</div>';
			}else{
				echo '<div class="sai_notice">'.$l['no_users'].'</div>';
			}
			
		echo'
	<p align="center"><a href="'.$globals['ind'].'act=adduser" style="text-decoration:none;"><span class="flat-butt">'.$l['adduser'].'</span></a></p>
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
?>