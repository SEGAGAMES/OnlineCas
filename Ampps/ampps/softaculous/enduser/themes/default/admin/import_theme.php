<?php

//////////////////////////////////////////////////////////////
//===========================================================
// import_theme.php
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

function import_theme(){

global $theme, $globals, $user, $l, $error, $updated, $info, $report, $allusers;

softheader($l['<title>']);

//The necessary JavaScripts
echo '<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
ids = new Array("'.implode('", "', array_keys($allusers)).'");
updatedids = new Object();

for(x in ids){
	updatedids["soft_"+ids[x]] = false;
}

function import_user(user, resp){
	
	if(ids.length < 1 || ids[0].length < 1){
		alert("'.$l['no_users'].'");
		return false;
	}
	
	// Do we need to import manual installations as well ? 
	var manual_ins = $("#manual_ins").is(":checked");
	var fantastico_ins = $("#fantastico_ins").is(":checked");
	var installatron_ins = $("#installatron_ins").is(":checked");
	var wptoolkit_ins = $("#wptoolkit_ins").is(":checked");
	var cpaddons_ins = $("#cpaddons_ins").is(":checked");
	
	//Update the Status with Response
	if(user.length > 0){
		$_("responses").innerHTML = $_("responses").innerHTML + resp;
		updatedids["soft_"+user] = true;
	}else{
		$_("responses").innerHTML = $_("responses").innerHTML + \'<div class="container-fluid width80"><div class="sai_heading text-center"> <img src="'.$theme['images'].'admin_progress.gif" id="loading-gif" /> '.$l['importing_scripts'].'</div><div class="sai_hr"></div></div>\';
		$_("start_import").disabled = true;
	}
	
	var csrf_token = $("#csrf_token").val(); 

	for(x in ids){
		if(updatedids["soft_"+ids[x]] == false){
			// Add the loading div so admin can know the progress
			loading_div(ids[x]);
			$.ajax({
				type: "POST",
				data: "csrf_token="+csrf_token,
				url: "'.$globals['index'].'act=import&username="+ids[x]+"&manual_ins="+manual_ins+"&fantastico_ins="+fantastico_ins+"&installatron_ins="+installatron_ins+"&cpaddons_ins="+cpaddons_ins+"&wptoolkit_ins="+wptoolkit_ins,
				// Checking for error
				success: function(data){
					// Remove the loading div as we will add new div again
					$_("loading-div-"+ids[x]+"").remove();
					import_user(ids[x], data);
				}
			});
			
			return true;
		}
	}
	
	// Remove the Loading GIF as the process is now completed
	$_("loading-gif").remove();
	
	$_("responses").innerHTML = $_("responses").innerHTML + "<div class=\"sai_heading text-center\">'.$l['import_completed'].'</div>";
	
};

// Adds a loading div so the admin knows which user is currently being processed
function loading_div(username){
	var loading = \'<div class="container-fluid" id="loading-div-\'+username+\'"><br /><div class="text-center"> <img src="'.$theme['images'].'admin_progress.gif" id="loading-gif" /> &nbsp; '.$l['import_progress'].' <b> \'+username+\'</b></div></div><br />\';
	$_("responses").innerHTML = $_("responses").innerHTML + loading;
}

// ]]></script>

<div class="container-fluid">
	<div class="container">
		<div class="row my-5">
			<div class="col-12 col-lg-10 mx-auto">
				<div class="sai-card p-4">
					<div class="sai_main_head">
						<h2 class="sai-heading mb-2">'.$l['import_head'].'</h2>
						<hr class = "sai_main_head_hr" style="margin: 10px 0px 15px;" />
						<p class="sai-details mb-3">'.$l['import_exp'].'</p>
					</div>
					<div class="sai_form">';
					error_handle($error);
					echo '
						<div class="form-group">
							<input type="checkbox" name="manual_ins" class="mr-2"  id="manual_ins"/>
							<label for="manual_ins" class="sai-label">'.$l['manual_ins'].'</label>
						</div>
						<div class="form-group">
							<input type="checkbox" name="wptoolkit_ins" class="mr-2" id="wptoolkit_ins" checked="checked" />
							<label for="wptoolkit_ins" class="sai-label">'.$l['wptoolkit_ins'].'</label>
						</div>
						<div class="form-group">
							<input type="checkbox" name="fantastico_ins" class="mr-2" id="fantastico_ins" checked="checked" />
							<label for="fantastico_ins" class="sai-label">'.$l['fantastico_ins'].'</label>
						</div>
						<div class="form-group">
							<input type="checkbox" name="installatron_ins" class="mr-2" id="installatron_ins" checked="checked" />
							<label for="installatron_ins" class="sai-label">'.$l['installatron_ins'].'</label>
						</div>
						<div class="form-group">
							<input type="checkbox" name="cpaddons_ins_ins" class="mr-2" id="cpaddons_ins" checked="checked" />
							<label for="cpaddons_ins" class="sai-label">'.$l['cpaddons_ins'].'</label>
						</div>
						'.csrf_display().'
						<input type="button" name="start_import" id="start_import" onclick="import_user(\'\', \'\');" value="'.$l['start_import'].'" class="flat-butt" />
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="responses">
</div><br />';

softfooter();

}

function import_list_theme(){

global $user, $globals, $scripts, $iscripts, $l, $theme, $error, $saved, $report, $list, $username;

	echo '
<div class="container-fluid">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-10 mx-auto">
				<div class="sai-card p-4 table-responsive">
					<table class="table table-hover">
					<thead class="tables-cols">
					<tr>
						<th colspan="3">'.$l['importing_of'].' : '.$username.'</th>
					</tr>
					</thead>
					<tbody>';
					
					if(!empty($list)){	
						foreach($list as $k => $v){		
						echo '<tr>
								<td>'.$iscripts[$v['sid']]['name'].'</td>
								<td><a href="'.$v['softurl'].'" target="_blank">'.$v['softurl'].'</a></td>
								<td>'.$v['ver'].'</td>
							</tr>';
						}	
					}else{
						echo '<tr>
							<td colspan="3">'.$l['no_import'].'</td>
						</tr>';
					}
						
					echo '
					</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>';

}

?>