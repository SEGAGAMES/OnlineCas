<?php

//////////////////////////////////////////////////////////////
//===========================================================
// emailtemp_theme.php
//===========================================================
// SOFTACULOUS VIRTUALIZOR
// Version : 1.0
// Inspired by the DESIRE to be the BEST OF ALL
// ----------------------------------------------------------
// Started by: Alons
// Date:       8th Mar 2010
// Time:       23:00 hrs
// Site:       http://www.virtualizor.com/ (SOFTACULOUS VIRTUALIZOR)
// ----------------------------------------------------------
// Please Read the Terms of use at http://www.virtualizor.com
// ----------------------------------------------------------
//===========================================================
// (c)Softaculous Ltd.
//===========================================================
//////////////////////////////////////////////////////////////

if(!defined('SOFTACULOUS')){

	die('Hacking Attempt');

}

function editemailtemp_theme(){

global $theme, $globals, $kernel, $user, $l, $error, $emailtemp, $done, $notice, $tempname, $ll, $langs;

softheader($l['<title>']);

echo '<form accept-charset="'.$globals['charset'].'" name="editemailtemp" method="post" action="" class="form-horizontal">
<div class="container-fluid">
	<div class="container">
		<div class="row my-5">
			<div class="col-12 col-lg-10 mx-auto">
				<div class="sai-card p-4">
					<div class="sai_main_head">
						<i class="far fa-envelope sai-icon d-inline-block mr-1"></i>
						<h2 class="sai-heading d-inline-block mb-2 position-relative" style="top:-4px;">'.$l['edittemp'].'</h2>
						<hr class = "sai_main_head_hr">						
					</div>
					<div class="sai_form">';
					error_handle($error);

					if(!empty($done)){
						echo '<div class="alert alert-success text-center">
						<i class="fas fa-check sai_icons mr-2"></i>
						'.$l['done'].'
						</div>
						<br />';
					}	
					
					echo '
					<script>
					$(document).ready( function() {
						$("#changelang").change( function() {
							location.href = "'.$globals['index'].'act=editemailtemp&temp='.$tempname.'&editlang="+$(this).val();
						});
					});
					</script>
					
					<div>
						<div class="row">
							<div class="col-12 col-lg-6 mb-3">
								<label for="changelang" class="sai-label d-block">'.$l['language'].'</label>	
								<select name="changelang" class="form-control" id="changelang">';
								foreach($langs as $k => $v){
									echo '<option value="'.$v.'" '.(empty($_REQUEST['editlang']) && $globals['language'] == $v ? 'selected="selected"' : (@trim($_REQUEST['editlang']) == $v ? 'selected="selected"' : '') ).'>'._ucfirst($v).'</option>';
								}
								echo '</select>
							</div>
						</div>
						
						<div class="row">
							<div class="col-12 col-lg-6 mb-3">
								<label for="tempsub" class="sai-label d-block">'.$l['subject'].'</label>							
								<input type="text" class="form-control" name="tempsub" id="tempsub" value="'.htmlizer($ll['title']).'" size="73">
							</div>
						</div>
					
						<div class="row">
							<div class="col-12 mb-2">
								<input type="checkbox" class="mr-2" name="ishtml" id="ishtml" '.POSTchecked('ishtml', $ll['ishtml']).'></input>
								<label for="ishtml" class="sai-label d-inline-block">'.$l['ishtml'].'</label>							
							</div>
						</div>
					
						<div class="row">
							<div class="col-12 mb-3">
								<label for="tempcontent" class="sai-label d-block">'.$l['content'].'</label>
								<textarea  class="form-control" cols="70" name="tempcontent" id="tempcontent" rows="16">'.htmlizer($ll['body']).'</textarea>
							</div>
						</div>
					
						<div class="row">
							<div class="col-12">
								<div class="sai_head">
									<label class="email-temp-data">'.$l['mail_'.$tempname.'_info'].'</label>
								</div>
								<div class="sai_head">
									<label class="email-temp-data">'.$l['if_note'].'</label>
								</div>
							</div>
						</div>
						<p class="text-center my-3">
							'.csrf_display().'
							<input type="submit" name="savetemplate" value="'.$l['savetemp'].'" class="flat-butt">&nbsp;&nbsp;
							<input type="button" name="savetemplate" value="'.$l['reset_template'].'" class="flat-butt" onClick="confirm_reset();">
						</p>
						</div>
					</div>
					
					<a href="'.$globals['index'].'act=emailtemp" class="d-block text-center">
						<span class="sai_bboxtxt">'.$l['temp_overview'].'</span>
					</a>
					</div>
					</form>
					
					<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
					function confirm_reset(){
						var r = confirm("'.$l['reset_confirm'].'");
						if(r != true){
							return false;
						}else{
							window.location = window.location+"&reset='.$tempname.'";
						}
					}
					
					// ]]></script>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>';

softfooter();

}

?>