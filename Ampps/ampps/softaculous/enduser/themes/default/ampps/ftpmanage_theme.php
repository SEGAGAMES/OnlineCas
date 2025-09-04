<?php

// This page manages the ftp user for @webuzo.
//Allowed  soft user to delete ftp user and change theire password.
//////////////////////////////////////////////////////////////
//===========================================================
// ftp_theme.php
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


function ftpmanage_theme(){

global $user, $globals, $l, $theme, $softpanel, $iscripts, $catwise, $error, $scripts, $ftp_list, $done, $tuser;
	
	// for delete
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
	
	$__tmp = explode(':', (!empty($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'localhost'));
	$__ip = $__tmp[0];
	
	softheader($l['<title>']);
	
	echo '<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
			// For msgbox
			var message_box = function() {			
				return {
					show_message: function(title, body , image) {			
						var okbutton = \'<input  style="width:75px; background:#00a0d2; border-radius:4px; color:#fff;" class="sai_submit" type="button" onclick="message_box.close_message();" value="OK" />\';
						if(image == "1"){
							var img = \'<i class="fas fa-exclamation-triangle fa-4x" style="color:orange;"></i>\';
						}else{
							var img = \'<i class="fas fa-check fa-4x" style="color:green;"></i>\';
						}					
						if(jQuery(\'.sai_message_box\').html() === null || jQuery(\'.sai_message_box\').html() === undefined) {
							var message = \'<div class="sai_message_box"><table border="0" cellpadding="8" width="100%" height="100%"><tr ><td rowspan="2" width="40%" > \'+ img + \'</td><td width="60%" class ="msg_tr1">\' +  title + \'</td></tr><tr class ="msg_tr2"><td style="text-align:left">\' + body + \'</td></tr><tr ><td colspan="2">\' + okbutton + \'</td></tr></table></div>\';
							jQuery(document.body).append( message );								
							jQuery(\'.sai_message_box\').css(\'top\', jQuery(\'html, body\').scrollTop() + 150);
							jQuery(\'.sai_message_box\').show(\'slow\');
						}else{
							var message =\' <table border="0" width="100%" cellpadding="8" height="100%"><tr ><td rowspan="2" width="40%">\'+ img +  \'</td><td widt="60%" class ="msg_tr1">\' + title + \'</td></tr><tr class ="msg_tr2"><td style="text-align:left">\' + body + \'</td></tr><tr ><td colspan="2">\' + okbutton + \'</td></tr></table>\';				
							jQuery(\'.sai_message_box\').css(\'top\', jQuery(\'html, body\').scrollTop() + 150);
							jQuery(\'.sai_message_box\').show(\'slow\');
							jQuery(\'.sai_message_box\').html( message );
						}
					},
					delete_message: function(title, body ,did) {								
						var yesbutton = \'<input type="button" style="width:75px; background:#00a0d2; border-radius:4px; color:#fff;" onclick="message_box.yes_close_message(\\\'\'+did+\'\\\');" value="YES" class="sai_submit"/>\';
						var nobutton = \'<input type="button" style="width:75px; background:#00a0d2; border-radius:4px; color:#fff;" onclick="message_box.no_close_message();" value="NO" class="sai_submit" />\';
						var img = \'<i class="fas fa-trash-alt fa-4x" style="color:red;"></i>\';
						if(jQuery(\'.sai_message_box\').html() === null || jQuery(\'.sai_message_box\').html() === undefined) {
							var message = \'<div class="sai_message_box"><table border="0" cellpadding="8" width="100%" height="100%"><tr height="60%" ><td rowspan="2" width="40%" > \'+ img + \'</td><td width="60%" class ="msg_tr1" height="10%">\' +  title + \'</td></tr><tr ><td style="text-align:left" height="60%" cellpading="2">\' + body + \'</td></tr><tr ><td colspan="2">\' + yesbutton + \'&nbsp; &nbsp; \' + nobutton + \'</td></tr></table></div>\';				
							jQuery(document.body).append( message );								
							jQuery(\'.sai_message_box\').css(\'top\', jQuery(\'html, body\').scrollTop() + 150);
							jQuery(\'.sai_message_box\').show(\'slow\');
						}else{
							var message = \' <table  border="0" cellpadding="8" width="100%" height="100%"><tr height="60%" ><td rowspan="2" width="40%">\'+ img +  \'</td><td widt="60%" class ="msg_tr1" height="10%">\' + title + \'</td></tr><tr><td style="text-align:left" height="60%" cellpading="2" class ="msg_tr2">\' + body + \'</td></tr><tr ><td colspan="2">\' + yesbutton + \'&nbsp; &nbsp; \' + nobutton + \'</td></tr></table>\'
							jQuery(\'.sai_message_box\').css(\'top\', jQuery(\'html, body\').scrollTop() + 150);
							jQuery(\'.sai_message_box\').show(\'slow\');
							jQuery(\'.sai_message_box\').html( message );
						}
					},
					close_message: function() {
						jQuery(\'.sai_message_box\').hide(\'fast\');
					},
					yes_close_message: function(did) {						
						$(\'#did\'+did).attr("src","'.$theme['images'].'progress.gif");						
						jQuery(\'.sai_message_box\').hide(\'fast\');
						$.ajax({				
							type: "POST",				
							url: window.location+"&ajaxdel=1&delete_fuser_id="+did,				
							// checking for error
							success: function(data){								
								var result = data.substring(0,1);					
								var msg = data.substring(1);
								if(result == "1"){
									message_box.show_message( "Delete ",msg,2);
									$("#tr"+did).fadeOut(2000);																														
								}
								if(result == "0"){
									message_box.show_message( "Error ",msg,1);																																			
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
				
				// fro deleting record
				$(".delete").click(function() {	
					var did = $(this).attr(\'id\');
					did = did.substr(3);			
					message_box.delete_message (\'Warning\',\''.$l['record_del_conf'].'\',did);			
				});
			});	
		// ]]></script>
<div class="bg">
	<div class="row sai_main_head mt-4" style="width:100%;" align="center">
		<div class="col-12 text-center">
			<span class="form-title"><img height="48" width="48" src="'.$theme['a_images'].'ftp.png" />&nbsp;'.$l['ftp_head'].'</span>
		</div>
	</div><hr />
	<table border="0" cellpadding="5" cellspacing="0" width="100%" class="table table-hover mb-2 borderless">
		<tr>
			<thead class="sai_head2">
				<th width="60">'.$l['ftp_name'].'</th>
				<th width="30">'.$l['ftp_path'].'</th>
				<th width="10">'.$l['ftp_option'].'</th>
			</thead>
		</tr>';
			$i=1;	
		
			foreach ($ftp_list as $key => $value){	
				echo '<tr id="tr'.$key.'"><td>'.$key.'</td>';
				echo '<td>'.$value['dir'].'</td>';
				
				if ($key != 'soft'){
					echo '<td>
							<a href="'.$globals['ind'].'act=ftpchangepass&fuser='.$key.'" title="'.$l['editdetail'].'" class="text-decoration-none">
								<i class="fas fa-key px-2 sai_icons" title="Change Password"></i>
							</a><i class="delete fas fa-trash-alt px-2 sai_icons" title="Delete" style="cursor:pointer;color:red;" id="did'.$key.'"></i></td>';
				}else{
					echo '<td>-</td>';
				}
				echo '</tr>';
				$i++;	
			}
	echo '
	</table><br />
	
	<div class="row my-5">
		<div class="col-12 px-4 text-center">
			<p class="btn sai-button"><a href="'.$globals['ind'].'act=ftpadd" style="text-decoration:none; color:#fff;">'.$l['add_new'].'</a></p>
		</div>
	</div>
</div>';
	
	softfooter();

}

