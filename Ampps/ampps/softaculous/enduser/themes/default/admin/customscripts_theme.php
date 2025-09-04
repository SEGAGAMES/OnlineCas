<?php

//////////////////////////////////////////////////////////////
//===========================================================
// customscripts_theme.php
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

function customscripts_theme(){

global $theme, $globals, $user, $l, $langs, $skins, $error, $saved, $iscripts, $scripts, $allcatwise, $custom_catwise, $cscripts, $removed;

softheader($l['<title>']);

echo '<div class="container-fluid  mt-4 mb-3">
		<div class="sai_form">';

error_handle($error);

if(!empty($removed)){
	echo '<div class="alert alert-success text-center"><i class="fas fa-check sai_icons mr-2"></i>
	'.$l['cs_removed'].'</div>';	
}

//The necessary JavaScripts
echo '<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
	ids = new Array('.implode(', ', array_keys($cscripts)).');
	function confirm_remove(sid){	
		return confirm("'.$l['confirm_remove'].'");
	};
// ]]></script>';

echo '<form accept-charset="'.$globals['charset'].'" name="updatesoft" method="post" action="">
	<div class="sai-card p-4 mt-2">
		<h2 class="sai-heading">'.$l['cust_scr'].'</h2>
		<hr class = "sai_main_head_hr">
		<div class="table-responsive">
			<table class="table mb-0">
				<thead class="tables-cols">
					<th width="10%">'.$l['soft_name'].'</th>
					<th width="35%" class="text-center">'.$l['soft_desc'].'</th>
					<th width="15%" class="text-center">'.$l['soft_ver'].'</th>
					<th width="4%" class="text-center">'.$l['soft_action'].'</th>
				</thead>
			</table>';
			foreach($custom_catwise as $cattype => $catscripts){

				if(empty($catscripts)){
					continue;
				}
				
				echo '<table class="table mb-0">
					<tr>
						<td colspan="7" class="sai-script-type text-center">
							<h4>'.$l['type_'.$cattype].'</h4>
						</td>
					</tr>
				</table>';
				
				foreach($catscripts as $cat => $cv){
				
				echo '<table class="soft-table-list table">
						<thead class="sai-sub-type mt-4">
							<td colspan="6">
								'.$l['cat_'.$cattype.'_'.$cat].'
							</td>
						</thead>';
						$i=0;
						foreach($cv as $k => $v){
						
							echo '<tr class="'.($i%2 == 0 ? "altrow" : "naltrow").'">
								<td class="sai_bboxtxt align-middle" width="15%">'.$v['name'].'</td>
								<td class="sai_bboxtxt align-middle" width="55%">'.$v['desc'].'</td>
								<td class="sai_bboxtxt text-center align-middle" width="10%">'.$v['ver'].'</td>
								<td class="sai_bboxtxt text-center align-middle" width="10%">
									<a class="text-decoration-none mr-2" href="'.$globals['ind'].'act=customscripts&sact=edit&sid='.$k.'" title="'.$l['edit_cs'].'">
										<i class="fas fa-pencil-alt px-1 sai_icons" style="color:#FF5D00;"></i>
									</a>
									<a href="'.$globals['ind'].'act=customscripts&remid='.$k.'" title="'.$l['remove_cs'].'" class="text-decoration-none mr-2">
										<i class="fas fa-trash-alt sai_icons" style="color:red;" onclick="return confirm_remove('.$k.');"></i>
									</a>
								</td>
							</tr>';
							$i++;		
						}
					echo '</table>';
				}
				
			}
			echo '</div>
			<div class="text-center py-2">
				<input type="button" name="add" onclick="window.location=\''.$globals['ind'].'act=customscripts&sact=add\'" value="'.$l['add_cs'].'" class="flat-butt" />
				<a href="http://www.softaculous.com/docs/Making_Custom_Package" target="_blank" class="mt-3 d-block">
					<span class="sai_bboxtxt">'.$l['guide_cs'].'</span>
				</a>
			</div>
		</div>
	</div>
	</div>
	'.csrf_display().'
	</form><br />';

softfooter();

}

function edit_cs_theme(){

global $user, $globals, $scripts, $iscripts, $l, $theme, $error, $saved, $report, $softid, $cs, $categories, $edited, $cscripts, $sid;

softheader($l['<title>']);

echo '<form accept-charset="'.$globals['charset'].'" name="editcs" method="post" action="" class="form-horizontal">

<div class="container-fluid">
	<div class="container">
		<div class="row my-5">
			<div class="col-12 col-lg-10 mx-auto">
				<div class="sai-card p-4">
					<div class="sai_main_head">
						<i class="fas sai-apps sai-icon d-inline-block mr-1"></i>
						<h2 class="sai-heading d-inline-block mb-2 position-relative" style="top:-4px;">'.$l['edit_cust_scr'].'</h2>
					</div>
					<hr class="sai_main_head_hr"/>
					<div class="sai_form">';
		
					error_handle($error);
					
					if(!empty($edited)){
						echo '<div class="alert alert-success text-center"><a href="#close" class="close" data-dismiss="alert">&times;</a>
						<i class="fas fa-check sai_icons mr-2"></i>
						'.$l['cs_edited'].'</div>';
					}
					
					echo '
					<div class="row mb-3">
						<div class="col-12 mb-3 col-lg-6">
							<label for="csname" class="sai-label d-block">'.$l['csname'].'</label>
							<span class="sai_exp2 d-block mb-1">'.$l['csname_exp'].'</span>
							<input type="text" name="csname" class="form-control" id="csname" size="30" value="'.aPOSTval('csname', $cs['name']).'" />
						</div>
						<div class="col-12 mb-3 col-lg-6">
							<label for="softname" class="sai-label d-block">'.$l['softname'].'</label>
							<span class="sai_exp2 d-block mb-1">'.$l['softname_exp'].'</span>
							<input type="text" name="softname" class="form-control" id="softname" size="30" value="'.aPOSTval('softname', $cs['softname']).'" />
						</div>
					</div>
					
					<div class="row mb-3">
						<div class="col-12 mb-3 col-lg-6">
							<label for="desc" class="sai-label d-block">'.$l['desc'].'</label>
							<span class="sai_exp2 d-block mb-1">'.$l['desc_exp'].'</span>
							<input type="text" name="desc" class="form-control" id="desc" size="30" value="'.aPOSTval('desc', $cs['desc']).'" />
						</div>
						<div class="col-12 mb-3 col-lg-6">
							<label for="ver" class="sai-label d-block">'.$l['ver'].'</label>
							<span class="sai_exp2 d-block mb-1">'.$l['ver_exp'].'</span>
							<input type="text" name="ver" class="form-control" id="ver" size="30" value="'.aPOSTval('ver', $cs['ver']).'" />
						</div>
					</div>
					
					<div class="row mb-3">
						<div class="col-12 mb-3 col-lg-6">
							<label for="cat" class="sai-label d-block">'.$l['cat'].'</label>
							<span class="sai_exp2 d-block mb-1">'.$l['cat_exp'].'</span>
							<select name="cat" id="cat" class="form-control">';
							foreach($categories as $k => $v){
								echo '<option value="'.$k.'" '.($cs['cat'] == $k ? 'selected="selected"' : '').'>'.$l['cat_php_'.$k].'</option>';
							}
						echo '</select>
						</div>';
		
						if(!empty($cscripts)){
							echo '
							<div class="col-12 mb-3 col-lg-6">
								<label for="parent" class="sai-label d-block">'.$l['parent'].'</label>
								<span class="sai_exp2 d-block mb-1">'.$l['parent_exp'].'</span>
								<select name="parent" id="parent" class="form-control">
									<option value="">'.$l['no_parent'].'</option>';
									foreach($cscripts as $ck => $cv){
										
										// Cannot be a parent of self
										if($sid == $ck){
											continue;
										}
										
										// If it is already a child it cannot be a parent
										if(!empty($cv['parent'])){
											continue;
										}
										
										echo '<option value="'.$ck.'" '.(POSTval('parent', @$cscripts[$sid]['parent']) == $ck ? 'selected="selected"' : '').'>'.$cv['name'].'</option>';
									}
								echo '</select>
							</div>';
						}
				echo '</div>
					<p class="mt-3 text-center">
						'.csrf_display().'
						<input type="submit" name="edit_submit" class="flat-butt" value="'.$l['edit_submit'].'"/>
					</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</form>';

softfooter();

}


function add_cs_theme(){

global $user, $globals, $scripts, $iscripts, $l, $theme, $error, $saved, $report, $softid, $cs, $categories, $added, $cscripts;

softheader($l['<title>']);

echo '<form accept-charset="'.$globals['charset'].'" name="addcs" method="post" action="" class="form-horizontal">

<div class="container-fluid">
	<div class="container">
		<div class="row my-5">
			<div class="col-12 col-lg-10 mx-auto">
				<div class="sai-card p-4">
					<div class="sai_main_head">
						<i class="fas sai-apps sai-icon d-inline-block mr-1"></i>
						<h2 class="sai-heading d-inline-block mb-2 position-relative" style="top:-4px;">'.$l['add_cust_scr'].'</h2>
					</div>
					<hr class="sai_main_head_hr"/>
					<div class="sai_form">';
		
					error_handle($error);
					
					if(!empty($added)){
						echo '<div class="alert alert-success text-center"><a href="#close" class="close" data-dismiss="alert">&times;</a>
						<i class="fas fa-check sai_icons mr-2"></i>
						'.$l['cs_added'].'</div>';
					}
					
					if(!empty($edited)){
						echo '<div class="alert alert-success text-center"><a href="#close" class="close" data-dismiss="alert">&times;</a>
						<i class="fas fa-check sai_icons mr-2"></i>
						'.$l['cs_edited'].'</div>';
					}
					
					echo '
					<div class="row mb-3">
						<div class="col-12 mb-3 col-lg-6">
							<label for="csname" class="sai-label d-block">'.$l['csname'].'</label>
							<span class="sai_exp2 d-block mb-1">'.$l['csname_exp'].'</span>
							<input type="text" name="csname" class="form-control" id="csname" size="30" value="'.aPOSTval('csname', '').'" />
						</div>
						<div class="col-12 mb-3 col-lg-6">
							<label for="softname" class="sai-label d-block">'.$l['softname'].'</label>
							<span class="sai_exp2 d-block mb-1">'.$l['softname_exp'].'</span>
							<input type="text" name="softname" class="form-control" id="softname" size="30" value="'.aPOSTval('softname', '').'" />
						</div>
					</div>
					
					<div class="row mb-3">
						<div class="col-12 mb-3 col-lg-6">
							<label for="desc" class="sai-label d-block">'.$l['desc'].'</label>
							<span class="sai_exp2 d-block mb-1">'.$l['desc_exp'].'</span>
							<input type="text" name="desc" class="form-control" id="desc" size="30" value="'.aPOSTval('desc', '').'" />
						</div>
						<div class="col-12 mb-3 col-lg-6">
							<label for="ver" class="sai-label d-block">'.$l['ver'].'</label>
							<span class="sai_exp2 d-block mb-1">'.$l['ver_exp'].'</span>
							<input type="text" name="ver" class="form-control" id="ver" size="30" value="'.aPOSTval('ver', '').'" />
						</div>
					</div>
					
					<div class="row mb-3">
						<div class="col-12 mb-3 col-lg-6">
							<label for="cat" class="sai-label d-block">'.$l['cat'].'</label>
							<span class="sai_exp2 d-block mb-1">'.$l['cat_exp'].'</span>
							<select name="cat" id="cat" class="form-control">';
							foreach($categories as $k => $v){
								echo '<option value="'.$k.'" '.(optPOST('cat') == $k ? 'selected="selected"' : '').'>'.$l['cat_php_'.$k].'</option>';
							}
						echo '</select>
						</div>';
		
						if(!empty($cscripts)){
							echo '
							<div class="col-12 mb-3 col-lg-6">
								<label for="parent" class="sai-label d-block">'.$l['parent'].'</label>
								<span class="sai_exp2 d-block mb-1">'.$l['parent_exp'].'</span>
								<select name="parent" id="parent" class="form-control">
									<option value="" '.(empty($_POST['parent']) ? 'selected="selected"' : '').'>'.$l['no_parent'].'</option>';
									foreach($cscripts as $ck => $cv){
										
										// If it is already a child it cannot be a parent
										if(!empty($cv['parent'])){
											continue;
										}
										
										echo '<option value="'.$ck.'" '.(optPOST('parent') == $ck ? 'selected="selected"' : '').'>'.$cv['name'].'</option>';
									}
								echo '</select>
							</div>';
						}
				echo '</div>
					<p class="mt-3 text-center">
						'.csrf_display().'
						<input type="submit" name="add_submit" class="flat-butt" value="'.$l['add_submit'].'"/>
					</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</form>';

softfooter();

}

?>