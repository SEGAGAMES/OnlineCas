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

function errorlog_theme(){

global $theme, $globals, $user, $l, $langs, $skins, $error, $saved, $list, $done, $filename, $softlog, $error_log_data, $error_softlog_data, $log_cleared;

softheader($l['<title>']);

echo '
<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
function confirm_reset(){
	var r = confirm("'.$l['reset_confirm'].'");
	if(r != true){
		return false;
	}else{
		//alert(window.location+"&reset='.basename($filename).'");
		//return false;
		
		if($("#errorLogType").val() == "soft_logfile"){
			window.location += "&clear_log='.basename($softlog).'";
		}else{
			window.location  += "&clear_log='.basename($filename).'";			
		}
		
	}
}

$( document ).ready(function() {
    $("#errorlog_data").text('.json_encode($error_log_data['error_data']).');
});

function changelogs(e){
	var optionVal = e.value;
	var eld = document.getElementById("errorlog_data");
	if(optionVal == "soft_logfile"){
		eld.textContent = '.json_encode($error_softlog_data['error_data']).';
	}
	if(optionVal == "error_logfile"){
		eld.textContent = '.json_encode($error_log_data['error_data']).';
	}
}

// ]]></script>';

if(!empty($log_cleared)){
	echo '<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
		alert("'.$l['refresh_after_clear'].'");
		window.location = "'.$globals['index'].'act=errorlog";
	// ]]></script>';
}else{
	echo '<form accept-charset="'.$globals['charset'].'" name="errorlogform" method="post" action="" id="errorlogform" class="form-horizontal">
	<div class="container-fluid">
		<div class="container mt-5">
			<div class="row">
				<div class="col-12 col-lg-8 mx-auto">
					<div class="sai-card p-4">
						<div class="sai_main_head">
							<h2 class="sai-heading mb-2">
								<i class="far fa-file-alt fa-1x mr-2"></i>
								<span class="position-relative" style="top:-5px;">'.$l['errorlog_head'].'</span>
							</h2>
							<hr class = "sai_main_head_hr"/>
						</div>
						<div class="sai_form">';
							error_handle($error);
							echo '
							<div class="mb-3">
								<select class="sai_head form-control" name="errorLogType" onChange="changelogs(this);" id="errorLogType">
									<option value="error_logfile">'.$filename.(!empty($error_log_data['file_size']) ? ' ('.$error_log_data['file_size'].')' : '').'</option>
									'.($globals['logs_level'] > 0 && (aefer() || ent()) ? '<option value="soft_logfile">'.$softlog.(!empty($error_softlog_data['file_size']) ? ' ('.$error_softlog_data['file_size'].')' : '').'</option>' : '').'
								</select>
							</div>
							<div class="sai-error-logs">
								<textarea name="errorlog_data" id="errorlog_data" class="errorlog w-100" rows="20" cols="250" class="w-100" readonly="readonly"></textarea>		
							</div>
							<div class="text-center mt-4">
								<input type="button" value="'.$l['clear_log'].'" name="clear_log" class="flat-butt" onClick="confirm_reset();"/>
							</div>
						</div>
					<div>
				</div>
			</div>
		</div>
	</div>
	</form><br />';
}

softfooter();

}

?>