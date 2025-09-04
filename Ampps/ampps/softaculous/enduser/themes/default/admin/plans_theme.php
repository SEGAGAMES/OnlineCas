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

function plans_theme(){

global $user, $globals, $l, $theme, $softpanel, $iscripts, $catwise, $error, $emailtemps, $plans, $done, $_users;

softheader($l['<title>']);

echo '<div class="container-fluid py-4">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="sai-card p-4">
					<div class="sai_main_head">
						<i class="far fa-edit sai-icon d-inline-block mr-1"></i>
						<h2 class="sai-heading d-inline-block mb-2 position-relative" style="top:-5px;">'.$l['title'].'</h2>
						<hr class = "sai_main_head_hr"/>
					</div>
				
		<div class="sai_form">';

		error_handle($error);

		echo '<script language="javascript" type="text/javascript"><!-- // --><![CDATA[

				function delconf(){
					return confirm("'.$l['del_conf'].'");
				};

				function add_plan(){
					window.location.href = "'.$globals['ind'].'act=addplans";
				}

	// ]]></script>';

		if(!empty($done)){
			echo '<div class="alert alert-success text-center">
			<i class="fas fa-check sai_icons mr-2"></i>
			'.$l['done'].'
			</div>';
		}

		if(empty($plans)){
			echo '<div class="row my-2 text-center">
				<div class="col-12 col-lg-10 alert alert-warning p-3 mx-auto">
					<i class="fas fa-exclamation-triangle fa-2x mr-2"></i>'.$l['no_plan'].'
				</div>
			</div>';
		}else{

			echo '<table border="0" cellpadding="5" cellspacing="1" class="soft-table-list table" align="center">
			<tr>
				<thead class="sai-sub-type">
					<td>'.$l['planname'].'</td>
					<td colspan="2">'.$l['options'].'</td>
					<td><input type="checkbox" onclick="check(document.getElementsByName(\'insids[]\'), this);" /></td>
				</thead>
			</tr>';
			$i=1;

			// Sort the plans alphabetically
			ksort($plans);

			foreach($plans as $k => $v){
				
				// Show name
				$v['show_name'] = get_filename($v['name']);
				
				echo '<tr class="'.($i % 2 == 0 ? "sai_evenrowcolor" : "sai_oddrowcolor").'">		
					<td width="80%">'.$v['show_name'].'</td>
					<td width="25">
						<a href="'.$globals['ind'].'act=editplans&plan='.$v['show_name'].'" class="text-decoration-none">
							<i class="fas fa-pencil-alt px-1 sai_icons" style="color:#FF5D00;" title="'.$l['edit_plan'].'"></i>
						</a>
					</td>
				<form accept-charset="'.$globals['charset'].'" method="post" action="'.$globals['ind'].'act=plans&delete='.$v['show_name'].'" class="form-horizontal">
					<td width="25" >'.csrf_display().'
						<button type="submit" onclick="return delconf();" title="'.$l['del_plan'].'"  class="text-decoration-none remove-btn">
							<i class="fas fa-trash-alt sai_icons" style="color:red;"></i>
						</button>
					</td>
				</form>
				<td>
					<input type="checkbox" name="insids[]" id="'.$v['show_name'].'" value="'.$v['show_name'].'">
				</td>
			</tr>';
			$i++;
		}

echo '</table>

		<center>
			<a href="'.$globals['ind'].'act=addplans" class="text-decoration-none">
				<input type="submit" class="flat-butt" value="'.$l['addplan'].'">
			</a>
		</center>
		'.(empty($globals['lictype']) ? '<div class="sai_exp2 p-3 text-center">'.$l['feature_not_available'].'</div>' : '').'
			<div class="row">
				<div class="col-12 col-lg-6 ml-auto mt-4 text-right">
					<span class="sai-label">
						'.$l['with_selected'].': 
						<select name="multi_options" id="multi_options" class="form-control d-inline-block w-50">
							<option name="todo" id="todo" value="0">---</option>
							<option name="todo" id="todo" value="mult_rem">'.$l['del_plan'].'</option>
						</select>
						'.csrf_display().'
						<input type="button" value="'.$l['go'].'" onclick="show_confirm()" class="flat-butt">
						
					</span>
				</div>
				
			</div>
			<div id="rem_div"></div>';
		}

		echo '<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
		insids = new Array();
		removed = new Object();

		function show_confirm(){
			
			insids = new Array();
			removed = new Object();
			
			if($_("multi_options").value != "mult_rem"){
				return false;
			}

			// Build the list of Installations to remove
			var field = document.getElementsByName(\'insids[]\');
				insids = new Array();
				var c = 0;
				for(i = 0; i < field.length; i++){
					if(field[i].checked == true){
						insids[c] = field[i].value;
						c++;
					}
				
			}
			//alert(insids);
			
			if(c == 0){
				alert("'.$l['no_sel_inst'].'");
				return false;
			}
			
			var r = confirm("'.$l['del_insid'].'");
			if(r != true){
				return false;
			}

			remove_by_id(insids[0], "", 0);
		}

		function remove_by_id(insid, re, oldinsid){

			removed[insid] = false;
			
			if(re.length > 0 && oldinsid > 0){
				if(re == "removed"){
					removed[insid] = true;
				}
			}
			
			nextinsid = 0;
			
			// Find the next INSTALLATION to remove
			for(i = 0; i < insids.length; i++){
				if(typeof(removed[insids[i]]) != "undefined"){
					continue;
				}
				nextinsid = insids[i];
				break;
			}

			// If there is something left to be removed
			if(insid != 0){
				
				var csrf_token = $("#csrf_token").val(); 
				
				try{
					$.ajax({
						type: "POST",
						data: "csrf_token="+csrf_token,
						url: "'.$globals['index'].'act=plans&delete="+insid+"&ajax=1&random="+Math.random(),
						// Checking for error
						success: function(data){
							remove_by_id(nextinsid, data, insid);	
						}
					});
					
					$_("rem_div").innerHTML = "<br /><br /><p align=\"center\"><img src=\"' . $theme['images'] . 'ajax_remove.gif\"> <br />'.$l['rem_backup_id']. ' File: " +insid+ "<br /></p>";
					return true;
				}catch(e){
					return false;
				}
			}
			$_("rem_div").innerHTML = "";
			alert("'.$l['inst_remvd'].'");
			location.reload(true);
			return true;
		}


		$(document).ready(function(){
			
			$(".sai_altrowstable tr").mouseover(function(){
				var old_class = $(this).attr("class");
				//alert(old_class);
				$(this).attr("class", "sai_tr_bgcolor");
				
				$(this).mouseout(function(){
					$(this).attr("class", old_class);
				});
			});
			
		});

		// ]]></script>';

		echo'</div>
		</div>
	</div>
</div>
</div>
</div>';

softfooter();

}

?>