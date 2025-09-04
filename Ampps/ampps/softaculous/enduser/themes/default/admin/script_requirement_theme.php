<?php

//////////////////////////////////////////////////////////////
//===========================================================
// softwares_theme.php
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

function script_requirement_theme(){

global $theme, $globals, $user, $l, $langs, $skins, $error, $saved, $iscripts, $scripts, $catscripts, $allcatwise, $_iscripts, $cscripts, $sreq;

softheader($l['<title>']);

if(!empty($sreq)){
	
	echo '<div id="stooltip" style="display:none; position:absolute; top: 0px; left: 0px; border: 1px solid #CCC; padding: 8px; background: #FFF; z-index:1000;"></div>
<form accept-charset="'.$globals['charset'].'" name="updatesoft" method="post" action="">
	<link href="'.$globals['mirror_images'].'sprites/20.css" rel="stylesheet" type="text/css" />
		<div class="container-fluid my-5">
			<div class="container">
				<div class="row">
					<div class="col-12 col-lg-10 mx-auto">
						<div class="sai_form">
							<div class="sai-card p-4">
								<h2 class="sai-heading mb-3">'.$l['list_of_scripts'].'</h2>
								<p class="sai-alert-details">'.$l['note'].'</p>';
					
								error_handle($error);		
						echo '<table class="table mb-0">
							<thead class="tables-cols">
								<th width="30%">'.$l['script_name'].'</th>
								<th width="70%">'.$l['req'].'</th>
							</thead>';
							foreach($sreq as $k => $v){
								if($k > 10000){
									continue;
								}
						
								echo '<tr>
									<td class="sai_bboxtxt align-middle">
										<div class="sp20_'.$iscripts[$k]['softname'].' mr-1 d-inline-block soft-icon"></div>
										<label class="soft-label">'.$v['name'].'</label>
									</td>
									<td class="sai_bboxtxt align-middle">';
									
									if(!empty($v['version'])){
										// Start Here make table content
										foreach($v['version'] as $vk => $vv){
											echo '<p class="mb-0"><label class="soft-label mr-2">'.strtoupper($vk).' '.$l['req_version'].':</label><span>'.ucfirst($l[$vv['operator']]).' '.$vv['version'].'</span></p>';
										}
									}
									
									if(!empty($v['extension'])){
										foreach($v['extension'] as $vk => $vv){
											echo '<p class="mb-0"><label class="soft-label mr-2">'.strtoupper($vk).' '.$l['req_extensions'].' :</label><span>'.implode(', ',$vv).'</span></p>';
										}
									}
									
									if(!empty($v['function_exists'])){
										foreach($v['function_exists'] as $vk => $vv){
											echo '<p class="mb-0"><label class="soft-label mr-2">'.strtoupper($vk).' '.$l['req_functions'].' :</label><span>'.implode(', ',$vv).'</span></p>';
										}
									}						
								echo '</td>
								</tr>';
							}
						echo '</table>
						</div>
					<div>
				</div>
			</div>
		</div>			
	</div>
</form>';
	
}else{
	echo '<div class="container-fluid">
	<div class="container mt-4 mb-3">
		<div class="sai-page-title text-center">
			<h2>'.$l['no_results'].'</h2>
		</div>
	</div>
</div>';
}

softfooter();

}
?>