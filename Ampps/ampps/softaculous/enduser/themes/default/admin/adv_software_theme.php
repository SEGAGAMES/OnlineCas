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

function adv_software_theme(){

global $theme, $globals, $user, $l, $langs, $skins, $error, $saved, $admintag, $admintag_catwise, $adv_software, $iscripts, $reset, $scripts;

softheader($l['<title>']);

echo '
<div class="container-fluid mt-4 mb-3">
	<div class="container mb-3">
		<div class="sai-page-title text-center">
			<h2>'.$l['adv_software_head'].'</h2>
		</div>
	</div>';

if(!empty($admintag_catwise)){

	echo '<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
	function reset_field(input, field){	
		var this_page = "'.$globals['index'].'act=adv_software";
		window.location = this_page+"&soft="+input;	
		if(field){
			window.location = this_page+"&soft="+input+"&field="+field;	
		}	
	};
	
	function reset_all(){	
		var this_page = "'.$globals['index'].'act=adv_software";
		window.location = this_page+"&reset_all="+1;
	};
	
	function showtip(txt, el){	
		
		$_("stooltip").innerHTML = txt;
		
		var pos = findelpos(el);
		$_("stooltip").style.display = "";
		var tipheight = parseInt($_("stooltip").offsetHeight);
		var tipwidth = parseInt($_("stooltip").offsetWidth);
		//alert(tipheight+" "+tipwidth);
		
		var abody = findelpos($_("abody"));
		var bodyWidth = abody[0] + $_("abody").offsetWidth
		
		if((pos[0] + tipwidth) > bodyWidth){
			pos[0] = pos[0] - (pos[0] + tipwidth - bodyWidth) + 15;
		}
		
		$_("stooltip").style.left = pos[0]+"px";
		$_("stooltip").style.top = (pos[1]-5-tipheight)+"px";
		
		el.onmouseout = function(){
			hidetip();
		};
	
	};
	
	function hidetip(){
		$_("stooltip").style.display = "none";
	};
	
	// ]]></script>
	
	<div id="stooltip" style="display:none; position:absolute; top: 0px; left: 0px; border: 1px solid #CCC; padding: 8px; background: #FFF; z-index:1000;"></div>
	<form accept-charset="'.$globals['charset'].'" name="adv_software" method="post" action="">
	<link href="'.$globals['mirror_images'].'sprites/20.css" rel="stylesheet" type="text/css" />
	
	<div class="sai_form">';
	
	error_handle($error);
	
	if(!empty($saved)){
		echo '<div class="alert alert-success text-center"><i class="fas fa-check sai_icons mr-2"></i>
		'.$l['settings_saved'].'</div>';
	}

	if(!empty($reset)){
		echo '<div class="alert alert-success text-center"><i class="fas fa-check sai_icons mr-2"></i>
		'.$l['settings_reset'].'</div>';
	}

		//r_print($adv_software);
		//r_print($admintag_catwise);
		//Showing All scripts Category wise
		foreach($admintag_catwise as $ak => $av){		
			
			echo '<div class="sai-card p-4 mt-2">
				<div class="text-center">
					<label class=sai-title>'.strtoupper($ak).' Apps</label>
				</div>';

			echo '<div class="table-responsive">
				<table class="table mt-3">
					<thead class="tables-cols">
						<th width="40%">'.$l['cat_'.$ak.'_'.$kk].'</th>
						<th width="15%" class="text-center" id="enable" onmouseover="showtip(\''.$l['enable_exp'].'\', this);" >'.$l['enable'].'</th>
						<th width="15%" class="text-center" onmouseover="showtip(\''.$l['default_exp'].'\', this);">'.$l['default'].'</th>
						<th width="15%" class="text-center" onmouseover="showtip(\''.$l['editable_exp'].'\', this);">'.$l['editable'].'</th>
						<th></th>
					</thead>
				</table>';

				foreach($av as $kk => $vv){
				
					if(empty($av[$kk])) continue;
					
					foreach($vv as $k => $v){
						$branches = list_branches($k);
						// r_print($v);
						echo '<table id="td_'.$k.'" class="table mb-2" '.(!empty($adv_software[$scripts[$k]['parent']]['sub_branches']) ? 'hidden' : '').'>
							<thead class="soft-adv-thead">
								<tr>
									<td colspan="4" class="sai_bboxtxt">
										<div class="sp20_'.$iscripts[$k]['softname'].' d-inline-block soft-icon mr-1"></div>
										<label class="sai-label mb-0">'.$iscripts[$k]['name'].'</label>
										'.((empty($scripts[$k]['parent']) && !empty($branches) && count($branches) > 1) ? 
										'<span style="margin-left: 5px;">
											<input type="checkbox" name="'.$k.'_sub_branches" id="'.$k.'_sub_branches" 
											'.((!empty($adv_software[$k]['sub_branches'])) ? 'checked="checked"' : '').'
											value="1"> 
											<label for="'.$k.'_sub_branches" style="margin-bottom:0px; cursor:pointer;">'.$l['apply_settings_all_branches'].'</label>
										</span>' : '').'
									</td>
									<td class="align-middle text-center">
										<i class="fas fa-undo sai_icons" onclick="reset_field('.$k.')" onmouseover="showtip(\''.lang_vars($l['reset_soft'], array($iscripts[$k]['name'])).'\', this);" style="cursor:pointer;"></i>
									</td>
								</tr>
							</thead>';
						
						foreach($v as $dk => $dv){
							//r_print($dv);
							$tmp = array();
							
							echo '<tr>
								<td width="40%" class="sai_bboxtxt">'.$dv['head'].'</td>
								<td width="15%" align="center" width="10%" class="sai_bboxtxt">
									<input type="checkbox" name="'.$k.'_'.$dk.'_enabled" id="'.$k.'_'.$dk.'_enabled" '.POSTchecked($k.'_'.$dk.'_enabled', $dv['enabled']).'>
								</td>
								<td width="15%" align="center" class="sai_bboxtxt">';
								
									// Is it a checkbox or textbox or textarea ?
									if(preg_match('/^<textarea/is', $dv['tag'])){
										$tmp['type'] = 'textarea';
									}else{
										soft_preg_replace('/^<input(.*?)type="(.*?)"/is', $dv['tag'], $tmp['type'], 2);
									}
								
									// Is it checkbox ?	
									if($tmp['type'] == 'checkbox'){
									
										$tmp['default'] = (isset($adv_software[$k][$dk]['default']) ? ($adv_software[$k][$dk]['default'] == 'checked="checked"' ? 'checked="checked"' : '' ) : (preg_match('/checked="checked"/is', $dv['tag']) ? 'checked="checked"' : ''));	
																
										echo '<center><input type="checkbox" name="'.$k.'_'.$dk.'_default" id="'.$k.'_'.$dk.'_default" '.POSTchecked($k.'_'.$dk.'_default', $tmp['default']).'></center>';
									}
								
									// Is it a textbox ? 
									if($tmp['type'] == 'text'){
									
										soft_preg_replace('/^<input(.*?)value="(.*?)"/is', $dv['tag'], $tmp['value'], 2);
										
										if(isset($adv_software[$k][$dk]['default']) && !empty($adv_software[$k][$dk]['default'])){
											$value = $adv_software[$k][$dk]['default'];
										}else{
											$value = $tmp['value'];
										}
										
										echo '<input type="text" name="'.$k.'_'.$dk.'_default" id="'.$k.'_'.$dk.'_default" value="'.POSTval($k.'_'.$dk.'_default', $value).'" />';
									}
								
									// Is it a textarea ?
									if($tmp['type'] == 'textarea'){
									
										soft_preg_replace('/^<textarea(.*?)>(.*?)<\/textarea>/is', $dv['tag'], $tmp['value'], 2);		
															
										soft_preg_replace('/^<textarea(.*?)cols="(.*?)"(.*?)>(.*?)<\/textarea>/is', $dv['tag'], $tmp['cols'], 2);
										
										soft_preg_replace('/^<textarea(.*?)rows="(.*?)"(.*?)>(.*?)<\/textarea>/is', $dv['tag'], $tmp['rows'], 2);
										
										if(isset($adv_software[$k][$dk]['default']) && !empty($adv_software[$k][$dk]['default'])){
											$value = $adv_software[$k][$dk]['default'];
										}else{
											$value = $tmp['value'];
										}
										
										echo '<textarea name="'.$k.'_'.$dk.'_default" id="'.$k.'_'.$dk.'_default"'.(!empty($tmp['cols']) ? ' cols="'.$tmp['cols'].'"' : '').(!empty($tmp['rows']) ? ' rows="'.$tmp['rows'].'"' : '').' >'.POSTval($k.'_'.$dk.'_default', $value).'</textarea>';
									}			
								
								echo '</td>
									<td width="15%" align="center">
										<input type="checkbox" name="'.$k.'_'.$dk.'_editable" id="'.$k.'_'.$dk.'_editable" '.POSTchecked($k.'_'.$dk.'_editable', $dv['editable']).' >
									</td>
									
									<td align="center">
										<i class="fas fa-undo sai_icons" onclick="reset_field('.$k.', \''.$dk.'\');" onmouseover="showtip(\''.$l['reset'].'\', this);" style="cursor:pointer"></i>
									</td>
							</tr>';
						}
					echo '</table>
';
					}
				}
			echo'<p align="center" class="mt-4 mb-0">'.csrf_display().'
				<input type="submit" name="save" value="'.$l['save'].'" class="flat-butt">
				<input type="button" onclick="reset_all()" value="'.$l['reset_all'].'" class="flat-butt">
			</p>
			</div>
		</div>';
			
			
		}	
		
	echo '
	</div>
	</form>';
}else{
	echo '
	<div class="container mt-4 mb-3">
		<div class="sai-page-title text-center">
			<h2>'.$l['no_results'].'</h2>
		</div>
	</div>';
}

echo '</div>';

softfooter();

}

?>