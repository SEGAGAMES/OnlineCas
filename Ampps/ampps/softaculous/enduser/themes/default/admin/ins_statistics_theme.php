<?php

//////////////////////////////////////////////////////////////
//===========================================================
// sync_settings_email_theme.php
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

function ins_statistics_theme(){

global $theme, $globals, $user, $l, $langs, $skins, $error, $saved, $ins_stats, $scriptwise, $iscripts, $scriptwise_count;

softheader($l['<title>']);

	echo '
	<link rel="stylesheet" type="text/css" media="all" href="'.$theme['url'].'/css/daterangepicker.css" />
	<script type="text/javascript" src="'.$theme['url'].'/js/moment.min.js"></script>
	<script type="text/javascript" src="'.$theme['url'].'/js/daterangepicker.js"></script>

	<div class="container-fluid">
		<div class="container mt-4">
			<div class="sai_form">
				<div class="row">
					<div class="col-12 col-md-10 mx-auto">
						<div class="sai-card p-4">
							<div class="sai_main_head">
								<h2 class="sai-heading mb-2">'.$l['ins_statistics_head'].'</h2>
								<hr class = "sai_main_head_hr"/>
							</div>
							<div id="reportrange" class="d-inline-block mr-4 report-range">
								<i class="far fa-calendar-alt fa-lg"></i>
								<span id="daterange"></span>
							</div>
							<input name="filter_stats" value="'.$l['filter'].'" class="flat-butt" type="submit" onClick="submit_date();return false;">
							<script type="text/javascript">
							$(function() {
								
								var start_date = "'.optREQ('start_date').'";
								
								if(start_date){
									// If the date is in our format i.e. posted via our UI
									if(start_date.match(/,/)){
										var start = moment(start_date, "MMMM DD, YYYY");
									}else if(Number.isInteger(Number(start_date))){
										// If the date is a unix timestamp
										var start = moment.unix(start_date);
									}else{
										// Any other format let the JS handle
										var start = moment(start_date);
									}
								}else{
									var start = moment(0);
								}
								
								var end_date = "'.optREQ('end_date').'";
								
								if(end_date){
									// If the date is in our format i.e. posted via our UI
									if(end_date.match(/,/)){
										var end = moment(end_date, "MMMM DD, YYYY");
									}else if(Number.isInteger(Number(end_date))){
										// If the date is a unix timestamp
										var end = moment.unix(end_date);
									}else{
										// Any other format let the JS handle
										var end = moment(end_date);
									}
								}else{
									var end = moment();
								}

								function cb(start, end) {
									$("#reportrange span").html(start.format("MMMM D, YYYY") + " - " + end.format("MMMM D, YYYY"));
								}

								$("#reportrange").daterangepicker({
									startDate: start,
									endDate: end,
									showDropdowns: true,
									ranges: {
									"Today": [moment(), moment()],
									"Yesterday": [moment().subtract(1, "days"), moment().subtract(1, "days")],
									"Last 7 Days": [moment().subtract(6, "days"), moment()],
									"Last 30 Days": [moment().subtract(29, "days"), moment()],
									"This Month": [moment().startOf("month"), moment().endOf("month")],
									"Last Month": [moment().subtract(1, "month").startOf("month"), moment().subtract(1, "month").endOf("month")]
									}
								}, cb);

								cb(start, end);

							});
							
							function submit_date(){
								var daterange = $("#daterange").text();
								var split_range = daterange.split(" - ");
								var ind = "'.$globals['ind'].'";
								ind = ind.replace("&amp;", "&");
								window.location = ind + "act=ins_statistics&start_date="+split_range[0]+"&end_date="+split_range[1];
							}
							</script>';
							error_handle($error);

						echo'<div class="sai-heading-block tables-cols mt-4 p-2">'.$l['overview'].'</div>
						<div class="row sai_form_adj py-3">';
	
						$j = 0;
						foreach($ins_stats as $ik => $iv){
							echo '<div class="col-12">
									<div class="row">
										<div class="col-3">
											<label class="soft-label">'.$l[$ik].'</label>
										</div>
										<div class="col-9">
											<span class="soft-label">'.$iv.'</span>
										</div>
									</div>
								</div>';
							$j++;
						}
						echo'</div>';
						if(!empty($scriptwise_count)){
							echo '<div class="sai-heading-block tables-cols mt-4 p-2">'.$l['scriptwise'].'</div><br />';
							
							$i = 0;
							
							foreach($scriptwise_count as $sk => $sv){
								
								//Skip if script is disabled 
								if(empty($iscripts[$sk])) continue;
								
								echo '<div class="row sai_form_adj">
										<div class="col-12">
											<div class="row">
												<div class="col-3">
													<label class="soft-label">'.$iscripts[$sk]['name'].' ('.$l['cat_'.$iscripts[$sk]['type'].'_'.$iscripts[$sk]['cat']].')</label>
												</div>
												<div class="col-9">
													<span class="soft-label">'.$sv.'</span>
												</div>
											</div>
										</div>
									</div>';
								$i++;
							}
						}
						echo'</div>
					</div>
				</div>
			</div>
		</div>';
	echo '
	</div><br />';

softfooter();

}

?>