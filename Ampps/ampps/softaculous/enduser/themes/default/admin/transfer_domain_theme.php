<?php

//////////////////////////////////////////////////////////////
//===========================================================
// adddomain.php
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
//////////////////////////////////////////////////////////////

if(!defined('SOFTACULOUS')){

	die('Hacking Attempt');

}


function transfer_domain_theme(){
	
	global $theme, $globals, $user, $l, $langs, $error, $done, $softpanel, $listdomains, $listusers;
	
	softheader($l['<title>']);

	echo '<form accept-charset="'.$globals['charset'].'" name="transfer_domain" method="post" action="">
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
							
							if(!empty($done)){
								echo '
								<div class="alert alert-success my-4 text-center">
									'.$l['transfer_done'].'
								</div>';
							}
							
							echo '
	<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
	
	function fetch_domains(){
		
		$("#domain").prop("disabled", true);
		var user = $("#from_user").val();
		
		if(!user || user === ""){
			return true;
		}
		
		$.ajax({
			type: "GET",
			url: "'.$globals['index'].'act=transfer_domain&listdomains=1&username="+user+"&api=json",
			success: function(resp){
				resp = JSON.parse(resp);
				let listdomains = resp["domains"];
				$("#domain").empty();
				$("#domain").append(new Option("'.$l['select_domain'].'", ""));
				if(typeof listdomains === \'object\'){
					listdomains.forEach(function(domain){
						$("#domain").append(new Option(domain , domain));
						
					});
					$("#domain").prop("disabled", false);
				}
				
			}
			
		});
	}

	$(document).ready(function(){
		$("#from_user").on("change", function(){
			fetch_domains();
		});
		fetch_domains();
	});
		
	// ]]></script>';

	echo '<div class="sai_form mt-4">
			
			<div class="row mb-3">
				<div class="col-12 mb-3 col-lg-6" style="border-right: 2px solid #EFEFEF;">
					<h5 class="py-2">'.$l['from'].'</h5>
					<label for="from_user" class="sai-label d-block">'.$l['username'].'</label>
					
					<select id="from_user" name="from_user" class="form-control d-inline-block w-50 mr-1"/>
					
						<option value="">'.$l['select_username'].'</option>';

						foreach($listusers as $key => $info){
							echo '<option value="'.$info['username'].'">'.$info['username'].'</option>';
						}
						
					echo '</select>
					<span class="sai_exp2 d-block mb-1">'.$l['exp_username_from'].'</span>
					'.csrf_display().'
					
				<div class="pt-4" id="selectdomdiv">
					<label for="domain" class="sai-label d-block">'.$l['domain'].'</label>
					
					<select id="domain" name="domain" class="form-control d-inline-block w-50 mr-1"/ disabled>
					</select>
					<span class="sai_exp2 d-block mb-1">'.$l['exp_domain_from'].'</span>
				</div>
		   </div>
			
				<div class="col-12 mb-3 col-lg-6">
					<h5 class="py-2">'.$l['to'].'</h5>
					<label for="to_user" class="sai-label d-block">'.$l['username'].'</label>
					
					<select id="to_user" name="to_user" class="form-control d-inline-block w-50 mr-1"/>
						
						<option value="">'.$l['select_username'].'</option>';
						
						foreach($listusers as $key => $info){
							echo '<option value="'.$info['username'].'">'.$info['username'].'</option>';
						}
						
					echo '</select>
					<span class="sai_exp2 d-block mb-1">'.$l['exp_username_to'].'</span>
					'.csrf_display().'
				</div>
			</div>
		</div>';

	echo '<div>
	<p align="center">
		<input type="submit" id="transfer_domain" name="transfer_domain" class="flat-butt" value="'.$l['start_transfer'].'">
	</p>
		</div></div>
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