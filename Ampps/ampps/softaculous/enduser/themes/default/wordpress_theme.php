<?php

//////////////////////////////////////////////////////////////
//===========================================================
// wordpress_theme.php
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


function wordpress_theme(){

	global $user, $globals, $l, $theme, $softpanel, $iscripts, $catwise, $error, $edit, $settings;
	global $insid, $edited, $software, $soft, $scripts, $version_updated, $account_details_editable, $no_autoupgrade, $add_to_fileindex, $__settings, $default_fileindex, $pfx_error, $owned_themes, $full_tables, $default_tables, $no_autoupgrade_acl, $notes, $act, $wp_ins, $featured_plugins_list, $adv_software;
	
	softheader($l['<title>']);
	
	echo '
	<style>
		.badge{
			padding:4px 7px;
			font-size:11px;
			border-radius: 4px;
			color:#FFFFFF;
		}
		.badge-success{
			background-color:#28A745;
		}
		.badge-primary{
			background-color:#007BFF;
		}
		.badge-danger{
			background-color:#DC3545;
		}
		.badge-warning{
			background-color:#FFC107;
		}
		.badge-info{
			background-color:#17A2B8;
		}
		label{
			font-size:13px;
		}
		
		.page-title{
			font-family: Poppins;
			font-weight: 400;
			background-color: #263544;
			color: #ffffff;
			padding: 10px;
			font-size: 14px !important;
		}
		
		.wp-info{
			padding:10px 10px;
			/* box-shadow:0 1px 5px #0000002e;	 */
			margin:0px 1px;
		}
		
		.wp-info .title{
			color:#121212;
			font-size: 14px;
			font-weight:400;
			margin:10px 0px 0px 0px;
		}

		.manage-btns{
			margin:20px 0px;
		}
			
		.wp-info-section{
			border: 1px solid #eee;
		}
		
		.form-section{
			margin: 0px 0px 20px 0px;
			border-radius: 1px;
			padding:15px 10px 15px;
		}
		
		.form-section .title{
			color:#333333;
			font-size:16px;
			font-weight:500;
			margin-bottom:15px;
		}
		
		.form-section .title hr{
			margin-top: 5px;
			width: 100px;
			margin-left: 0px;
			text-align: left;
			border-radius: 4px;
		}
		.form-section a{
			text-decoration:none;
		}
		
		.section .form-label{
			display:block;
			color:#212529;
			font-size:14px;
			font-weight:400;
			margin:10px 0px;
		}
		
		.section .radio-label{
			color:#212529;
			font-size:13px;
			font-weight:400;
			margin-right:10px;
		}
		
		input[type=text], textarea, select, input[type=password]{
			border:1px solid #dee2e6;
			border-radius:0px;		
		}
		
		/*Button css*/
		.form-btn{		
			color:#ffffff;			
			font-family:Poppins;		
			font-size:14px !important;
			background-color:#119768;
			border-color: #119768;
			border:none;
			border-radius:3px;
			padding:5px 18px;
			transition:0.6s;
		}
		
		.form-btn:hover{
			background-color:#15b67d;
			border-color:#15b67d;
		}
		
		.form-btn-info{
			background-color:#1565c0;		
		} 
		
		.form-btn-info:hover{
			background-color:#4383cc;
		}
		
		.form-btn-success{
			background-color#19D895;
		}
		
		.form-btn-success:hover{
			background-color#15b67d;
		}
		
		.form-btn-danger{
			background-color:#ff3e32;
		}
		
		.form-btn-danger:hover{
			background-color:#ff5252;
		}
		
		.form-btn-secondary{
			background-color:#6C757D;		
		} 
		
		.form-btn-secondary:hover{
			background-color:#5A6268;
		}
		
		.form-btn-action{
			color: #0d47a1;
			border:1px solid #0d47a1;
			background-color:transparent;
		}
		
		.form-btn-action:hover,
		.form-btn-action.active{
			color:#ffffff;
			background-color:#0d47a1;
		}
		
		.form-save{
			margin:10px 0px;
		}
		
		input[type="button"]{
			outline:none;
		}
		
		.section .form-select{
			width:100%;
			margin:0px 0px 10px 0px;
		}
		
		.section .form-control{
			display:block;
			width:auto;
			margin: 0px 0px 10px 0px;
		}
		
		.success-badge{
			color:#ffffff;
			background-color: #119768;
			padding: 5px 10px;
			border-radius: 3px;
		}
		
		.warning-badge{
			color:#ffffff;
			background-color: #FF5D00;
			padding: 5px 10px;
			border-radius: 3px;
		}
		
		.error-badge{
			color:#ffffff;
			background-color: #ff3e32;
			padding: 5px 10px;
			border-radius: 3px;
		}

		.info-badge{
			color:#ffffff;
			background-color: #3f51b5;
			padding: 5px 10px;
			border-radius: 3px;
		}
		
		.save-all{
			margin-top:30px;
		}
		
		.form-img{
			display:block;
			width:100%;
			max-width:400px;
			height:auto;
			margin:10px 0px 20px;
			border:1px solid #9d9898;
			border-radius:2px;
		}
		
		.form-img-loading{
			display:block;
			width:auto !important;
			height:auto;
			margin:70px 0px 70px;
			margin-left: auto !important;
			margin-right: auto !important;
			border: none !important;
			border-radius: 0px !important;
		}
		
		.icon-shape{
			background-color: #030aac !important;
			text-decoration: none;
			padding: 6px 7px;
			border-radius: 50%;
			text-align: center;
		}
		
		.icon-shape i{
			color:#ffffff !important;
		}
		
		.wp-action{
			padding: 0px 20px;
			margin-top:25px;
		}
		.wp-action a{
			text-decoration:none;
		}
		
		.alert-success-dark{
			color: #ffffff;
			background-color: #119768;
			border-color: #d6e9c6;
		}
		
		.alert-danger-dark{
			color: #ffffff;
			background-color: #FF3E32;
			border-color: #FF9580;
		}

		.disabled{
			opacity : 0.8;
		}

		div{
			word-wrap : break-word;
		}
		.loader{
			background-image : url("'.$theme['images'].'/load.gif");
			background-repeat : no-repeat;
			background-size : 10% 15%;
			background-position: center;
			height : 600px;
			overflow-y: auto;
			padding:0px;
		}
		.potloader{
			background-image : url("'.$theme['images'].'admin_progress.gif");
			background-repeat : no-repeat;
			background-position: center;
			height : 120px;
			overflow-y: auto;
			padding:0px;
		}
		.close_iframe{
			top: 10px;
			right: 35px;
			height: 5%;
			cursor: pointer;
		}
		.switch {
			position: relative;
			display: inline-block;
			width: 30px;
			height: 17px;
		}
		.switch input { 
			opacity: 0;
			width: 0;
			height: 0;
		}
		.slider {
			position: absolute;
			cursor: pointer;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			background-color: #ccc;
			-webkit-transition: .4s;
			transition: .4s;
		}
		.slider:before {
			position: absolute;
			content: "";
			height: 13px;
			width: 13px;
			left: 2px;
			bottom: 2px;
			background-color: white;
			-webkit-transition: .4s;
			transition: .4s;
		}
		input:checked + .slider {
		  	background-color: #2196F3;
		}
		input:focus + .slider {
		  	box-shadow: 0 0 1px #2196F3;
		}
		input:checked + .slider:before {
			-webkit-transform: translateX(13px);
			-ms-transform: translateX(13px);
			transform: translateX(13px);
		}
		
		.no-sorting{
			background-image: none !important;
		}
		/* Rounded sliders */
		.slider.round {
		  	border-radius: 17px;
		}
		.slider.round:before {
		  	border-radius: 50%;
		}
		.bootstrap-growl{
			border-style : none;
		}
		.col-md-12 .section .row{
			justify-content : center;
		}
		.dz-preview, .dz-image{
			min-height:50px !important;
			height:50px !important;
			padding: 0px !important;
		}
		.dz-details{
			padding: 0px !important;
		}
		
		.dropzone{
			border: 2px dashed rgba(0,0,0,0.3) !important;
		}

		.pull-right-field{
			float: right;
			text-align: right;
		}

		.form-check {
			padding-top: 8px;
			padding-left: 2.25rem;
		}

		@media screen and (max-width: 850px){
			.modal-content.modal-resize-120 {
				width: 120%;
				margin-left: -10%;
			}
		}
	</style>
	<link rel="stylesheet" href="'.$theme['url'].'/css/dropzone.min.css">
	<link rel="stylesheet" type="text/css" href="'.$theme['url'].'/css/datatables.min.css" />
	';
	
	echo '
		<div class="bg">
			<div class="row sai_main_head text-center">
				<div class="col-12 mt-2">
					<i class="fa sai-wp fa-2x mr-2"></i>
					<span class="form-title">'.$l['wordpress_management'].'</span>
				</div>
			</div>
			<hr/>';
			
			error_handle($error, '100%');
			
			$wpmanager_buttons = array();
			echo '
			<div class="wp-action mt-4 px-0 px-md-2">
				<div class="mb-4 text-center">';
				$wpmanager_buttons['install']='
					<a href="'.$globals['ind'].'act=software&soft='.$soft.'&tab=install"  data-toggle="tooltip" data-html="true" title="'.$l['install_exp'].'">
						<input type="button" name="install_button" class="form-btn form-btn-action active" id="install_button" value="'.$l['install'].'" />
					</a>';
					
					if(empty($globals['off_sync_link']) && !aefer() && !ent()){
						$wpmanager_buttons['sync']='
						<a href="'.$globals['ind'].'act=sync&manual=1" data-toggle="tooltip" data-html="true" title="'.$l['scan_exp'].'">
							<input type="button" name="scan_button" class="form-btn form-btn-action" id="scan_button" value="'.$l['scan'].'" /> 
						</a>';
					}
					
					
					if(empty($globals['disable_import']) && can_remote_import(26)){
						$wpmanager_buttons['import']='
						<a href="'.$globals['ind'].'act=import&soft=26&show_remote=1" data-toggle="tooltip" data-html="true" title="'.$l['remote_import_exp'].'">
							<input type="button" name="remote_import_button" class="form-btn form-btn-action" id="scan_button" value="'.$l['remote_import'].'" /> 
						</a>';
					}
					
					if(empty($globals['disable_manage_sets'])){
						$wpmanager_buttons['manage_sets']='
						<a href="'.$globals['ind'].'act=manage_sets" data-toggle="tooltip" data-html="true" title="'.$l['manage_exp'].'">
							<input type="button" name="manage_button" class="form-btn form-btn-action" id="manage_button" value="'.$l['manage_sets'].'" />
						</a>';
					}
					
					if(empty($globals['disable_backup_restore']) && is_billing_request()){
						$wpmanager_buttons['backups']='
						<a href="'.$globals['ind'].'act=backups" data-toggle="tooltip" data-html="true" title="'.$l['backups_exp'].'">
							<input type="button" name="backups_button" class="form-btn form-btn-action" id="backups_button" value="'.$l['backups'].'" />
						</a>';
					}
					
					if(empty($globals['disable_security_measures'])){
						$wpmanager_buttons['security_measures']='
							<a data-toggle="tooltip" data-html="true" title="'.$l['security_measures_exp'].'">
								<input type="button" name="secure_btn" value="'.$l['security_measures'].'" class="form-btn form-btn-action secure_wp" />
							</a>';
					}
					
					if(!empty($featured_plugins_list)){
						$wpmanager_buttons['featured_plugins']='
							<a data-toggle="tooltip" data-html="true" title="'.$l['featured_plugins_exp'].'">
								<input type="button" name="fp_btn" value="'.$l['featured_plugins'].'" class="form-btn form-btn-action featured_plugins" />
							</a>';
					}
					
					if(ampps()){
						$wpmanager_buttons['sandbox']='
						<a href="https://www.softaculous.com/launch-wordpress" data-toggle="tooltip" data-html="true" title="Launch WordPress Sandbox Sites with One Click" target="_blank">
							<input type="button" name="sandbox_button" class="form-btn form-btn-action" id="sandbox_button" value="WordPress Sandbox" />
						</a>';
					}
					
					$wpmanager_buttons = apply_filters('post_wpmanager_button_theme', $wpmanager_buttons);
					
					foreach($wpmanager_buttons as $k => $y){
						echo $y;
					}
				
				echo'
				</div>
				
				<div class="sai_sub_head page-title">
					<span>'.$l['installations'].'</span>
					<input type="checkbox" id="check_all_ins" class="pull-right" onchange="multiple_check()" />
				</div>
				';
				
			if(!empty($wp_ins)){
				// r_print($wp_ins);
				$ins_tr = array();
				
				foreach($wp_ins as $_insid => $_ins){
				
					$is_cloneable = is_cloneable($_ins['sid']);
					$can_staging = can_staging($_ins['sid']);
					$is_upgradable = is_upgradable($_insid);
					$can_template = can_template_ins($_ins['sid']);
					
					$wpmanager_ins_buttons = array();
					
					$disabled = !empty($_ins['no_ins']) || !empty($_ins['no_db']) ? 'disabled':'';
					
					$changePassword = '<a href="javascript:void(0);"'.(empty($disabled) ? 'onclick="change_password_modal(\''.$_insid.'\')"' : '').'> '.$l['manage_users'].' </a>';
					
					$class = 'success';
					
					if(!empty($is_upgradable)){
						$class = 'warning';
					}
					
					if(!empty($_ins['no_ins']) || !empty($_ins['no_db'])){
						$class = 'error';
					}
					
					$status = $l['up_to_date'];
					
					if(!empty($is_upgradable)){
						$status = $l['updates_available'];
					}
					
					if(!empty($_ins['no_ins'])){
						$status = $l['files_not_found'];
					}
					
					if(!empty($_ins['no_db'])){
						$status = $l['db_not_found'];
					}
					
					/* if(!is_wordpress($_ins['sid'])){
						continue;
					} */
									
					if(!empty($globals['force_auto_upgrade'])){
						$_ins['eu_auto_upgrade'] = $globals['force_auto_upgrade'];
					}
					
					$phpmyadmin_link = $phpmyadmin_html = '';
					
					if(!empty($softpanel->phpmyadmin)){
						
						$phpmyadmin_link = $softpanel->phpmyadmin.'db='.$_ins['softdb'];
						
						if(!empty($_ins['no_db'])){
							$phpmyadmin_html = '<a href="javascript:void(0);" class="pull-right"><div class="form-btn form-btn-info disabled">'.$l['db_view'].'</div></a>';
						}else{
							$phpmyadmin_html = '<a href="'.$phpmyadmin_link.'" target="_blank" class="pull-right"><div class="form-btn form-btn-info">'.$l['db_view'].'</div></a>';
						}
					}
					
					$filemanager_link = $filemanager_html = '';
					
					if(method_exists('softpanel', 'filemanager_link')){
						
						$filemanager_link = $softpanel->filemanager_link($_ins['softpath']);
						
						if(!empty($filemanager_link)){
							
							$filemanager_html = '
							<label class="form-label" for="softpath_'.$_insid.'">'.$l['sitepath'].'</label>
							
							 <div class="input-group mb-2">
								<input type="text" class="form-control" aria-describedby="basic-addon2" value="'.$_ins['softpath'].'" id="softpath_'.$_insid.'" name="softpath_'.$_insid.'" readonly>
							  <div style="height: 35px; cursor:pointer;" class="input-group-append">
								<span class="input-group-text" id="basic-addon2" style="background-color:#ffffff;">'.(!empty($_ins['no_ins']) ? '<i class="far fa-folder-open fa-1x" title="'.$l['file_manager'].'"></i>' : '<a href="'.$filemanager_link.'" target="_blank" style="color:#007bff;"><i class="far fa-folder-open fa-1x" title="'.$l['file_manager'].'"></i></a>').'</span>
							  </div>
							</div>';
						}
					}
					
					$disable_wp_cron = (!empty($_ins['disable_wp_cron']) ? ($_ins['disable_wp_cron'] == 'true' ? 1 : 0) : 0);
					$wp_debug = (!empty($_ins['wp_debug']) ? ($_ins['wp_debug'] == 'true' ? 1 : 0) : 0);
					
					$allow_softurl = apply_filters('can_edit_softurl', true, $_ins);
					
					$ins_row = '';
					$ins_row .= '
					<form accept-charset="'.$globals['charset'].'" name="details_'.$_insid.'" method="post" action="" id="details_'.$_insid.'" class="form-horizontal">
						<div class="wp-info-section card mt-2">
						<div class="wp-info" id="ins_'.$_insid.'" >	
							<div class="row">
								<div class="col-12 col-md-4">
									<a href="'.$_ins['softurl'].'" class="title d-block" target="_blank" id="url_'.$_insid.'" style="text-decoration:none;">'.$_ins['softurl'].'</a>
								</div>
								<div class="col-12 col-md-2">
									<span class="title d-block">'.(!empty($_ins['site_name']) ? $_ins['site_name'] : '').'</span>
								</div>
								<div class="col-12 col-md-6">
									<div class="row mt-2 mt-md-0">
										<div class="col-6 col-md-6">
											<a class="mr-1" href="'.$globals['ind'].'act=sign_on&insid='.$_insid.'&autoid='.srandstr(32).'" target="_blank" data-toggle="tooltip" data-html="true" title="'.$l['login_exp'].'">
												<input type="button" name="login_button" class="form-btn form-btn-action active '.$disabled.'" id="login_button" value="'.$l['login_admin'].'" style="cursor:pointer;" '.$disabled.'/>
											</a>'.$changePassword.'</div>
										
										<div class="col-5 col-md-4">
											<span class="'.$class.'-badge heading-badge d-block" id="toggle_'.$_insid.'" onclick="toggle_ins_form($(this))" style="cursor:pointer; text-align:center;">'.$status.'</span>
										</div>
										<div class="col-1 col-md-2 pull-right-field">
											<i class="fas fa-chevron-right" id="toggle_'.$_insid.'" style="vertical-align:middle; font-size:1.4em; transform:rotate(90deg); cursor:pointer; padding:7px 11px;" onclick="toggle_ins_form($(this))"></i>
											<input type="checkbox" class="shift_select_ins check_all_ins '.$iscripts[$_ins['sid']]['softname'].'_check_ins" name="insids[]" id="'.$_ins["softurl"].'" value="'.(empty($disabled) ? $_insid : '').'" '.$disabled.'/>
										</div>
									</div>
								</div>
							</div>							
						</div>
						<hr style="margin:0px;" />
						<div class="row form-section" id="ins_form_'.$_insid.'">
						
							<!-- Error Div -->
							<div id="error_handler_'.$_insid.'" class="alert alert-danger response_container" style="display:none;"><a href="#close" class="close" data-dismiss="alert">&times;</a>
								<p style="margin-top:4px; font-size:14px;">&nbsp;&nbsp;'.$l['following_errors_occured'].' :</p>
								<ul type="square" class="error_div" style="padding-left:20px;">
								</ul>
							</div>
							<!--Site Info-->
							<div class="col-12 col-md-6">
								<div class="section">
									<div class="title">
										<span>'.$l['info'].'</span>
										<hr class="sai_main_head_hr d-block my-2">
									</div>
									
									'.(!can_render_screenshot() ? '' : '
									<img src="'.$theme['images'].'/admin_progress.gif" class="form-img form-img-loading img-fluid" name="site-screenshot" id="screenshot_'.$_insid.'"/>
									').'
									
									<label class="form-label" for="softurl_'.$_insid.'">'.$l['siteurl'].'</label>
									<input type="text" class="form-control" size="25" value="'.$_ins['softurl'].'" id="softurl_'.$_insid.'" name="softurl" '.(empty($allow_softurl) ? 'disabled' : '').' '.$disabled.' style="width:100%"/>
									
									'.$filemanager_html.'
									
									<label class="form-label" for="site_name_'.$_insid.'">'.$l['site_name'].'</label>
									<input type="text" class="form-control" size="25" value="'.$_ins['site_name'].'" id="site_name_'.$_insid.'" name="site_name" '.$disabled.'/>
									<input type="button" class="form-btn form-btn-info form-save" name="save_site_info" style="display:none;" insid="'.$_insid.'" value="'.$l['save_info'].'" '.$disabled.'/>	
									
									<div class="wp_db row">
										<div class="col-sm-10 col-xs-10">
										<div id="advoptions_toggle_'.$_insid.'" onclick="toggle_advoptions(\'advoptions'.$_insid.'\');" style="cursor:pointer;" class="form-label">
											<label class="form-label">
											<i id="advoptions'.$_insid.'_toggle_plus" class="fas fa-plus-square"></i>
											&nbsp&nbsp'.$l['db_details_title'].$phpmyadmin_html.'
											</label>
										</div>
										</div>
									</div>
											
									<div id="advoptions'.$_insid.'" style="display:none;">
										<table style="margin-top:5px; margin-left:5px; border-spacing: 10px; border-collapse: separate;">
											<tr>
												<td><b>'.$l['db_details_name'].'</b></td>
												<td>'.$_ins['softdb'].'</td>
											</tr>
											<tr>
												<td><b>'.$l['db_details_user'].'</b></td>
												<td>'.$_ins['softdbuser'].'</td>
											</tr>
											<tr>
												<td><b>'.$l['db_details_host'].'</b></td>
												<td>'.$_ins['softdbhost'].'</td>
											</tr>
										</table>
									</div>
									
								</div>
							</div>	
							
							<!--Updates-->
							<div class="col-12 col-md-6">
								<div class="section">
									<div class="title">								
										<span class="d-block d-xl-inline-block">'.$l['configuration'].'
										<hr class="sai_main_head_hr d-block my-2">
										</span>
										<input type="button" name="manage_themes_button" class="form-btn form-btn-success mx-1 mb-1 pull-right manage_themes '.$disabled.'" id="themes_'.$_insid.'" value="'.$l['manage_themes'].'" data-toggle="tooltip" data-html="true" title="" data-original-title="'.$l['manage_themes_exp'].'" '.$disabled.'/>
										&nbsp;
										<input type="button" name="manage_plugins_button" class="form-btn form-btn-success mx-1 mb-1 pull-right manage_plugins '.$disabled.'" id="plugins_'.$_insid.'" value="'.$l['manage_plugins'].'" data-toggle="tooltip" data-html="true" title="" data-original-title="'.$l['manage_plugins_exp'].'" '.$disabled.'/>
									</div>
								
									<label class="form-label">'.$l['version'].'</label>&nbsp; 
									<span style="font-size:14px;">'.$_ins['ver'].'</span> &nbsp;&nbsp;';
									
									if(empty($is_upgradable)){
										$ins_row .= '<span class="success-badge">'.$l['up_to_date'].'</span>';
									}else{
										$ins_row .= '<a href="'.$globals['ind'].'act=upgrade&insid='.$_insid.'"  data-toggle="tooltip" data-html="true" title="'.$l['upd_to'].' '.implode(' or ', $is_upgradable).'">
										<input type="button" name="upgrade_button" class="form-btn form-btn-info '.$disabled.'" id="upgrade_button" value="'.$l['upgrade_now'].'" '.$disabled.'/></a>';
									}
									
									$ins_row .= '<br/>';
									
									if($globals['softpanel'] != 'ampps' && !empty($scripts[$soft]['auto_upgrade']) && empty($no_autoupgrade['disable_autoupgrade']) && empty($no_autoupgrade['scripts'][$soft]) && empty($no_autoupgrade_acl)){
										
										$ins_row .= '<label class="form-label" for="auto_upgrade_core_'.$_insid.'">'.$l['auto_upgrade_core'].'
										<span class="sai_exp">'.$l['exp_eu_auto_upgrade'].'</span>
										</label>						
										<select class="form-select" name="auto_upgrade_core" id="auto_upgrade_core_'.$_insid.'" '.$disabled.'>
											<option value="" '.POSTselect('auto_upgrade_core', 0).(!empty($globals['force_auto_upgrade']) ? 'disabled' : '').'>'.$l['dont_auto_upgrade'].'</option>
											<option value="2" '.POSTselect('auto_upgrade_core', 2, (!empty($_ins['eu_auto_upgrade']) && $_ins['eu_auto_upgrade'] == 2 ? true : false)).(!empty($globals['force_auto_upgrade']) ? 'disabled' : '').'>'.$l['minor_auto_upgrade'].'</option>
											<option value="1" '.POSTselect('auto_upgrade_core', 1, (!empty($_ins['eu_auto_upgrade']) && $_ins['eu_auto_upgrade'] == 1 ? true : false)).(!empty($globals['force_auto_upgrade']) ? 'disabled' : '').'>'.$l['major_auto_upgrade'].'</option>
										</select>';
										
									}
									
									$ins_row .= '<div class="row">
										<div class="col-12 col-lg-6">
											<label class="form-label '.$disabled.'">'.$l['auto_upgrade_plugins'].'
											<span class="sai_exp">'.lang_vars($l['exp_auto_upgrade_plugins'], array($software['name'])).'</span>
											</label>
											<input type="radio" value="1" id="auto_upgrade_plugins_enabled_'.$_insid.'" name="auto_upgrade_plugins" '.POSTradio('auto_upgrade_plugins', 1, (!empty($globals['force_upgrade_plugins']) ? $globals['force_upgrade_plugins'] : $_ins['auto_upgrade_plugins'])).(!empty($globals['force_upgrade_plugins']) ? 'disabled' : '').' '.$disabled.'/>
											<label class="radio-label" for="auto_upgrade_plugins_enabled_'.$_insid.'">'.$l['enabled'].'</label>
											<input type="radio" value="" id="auto_upgrade_plugins_disabled_'.$_insid.'" name="auto_upgrade_plugins" '.POSTradio('auto_upgrade_plugins', 0, (!empty($globals['force_upgrade_plugins']) ? $globals['force_upgrade_plugins'] : (int) $_ins['auto_upgrade_plugins'])).(!empty($globals['force_upgrade_plugins']) ? 'disabled' : '').' '.$disabled.'/>
											<label class="radio-label" for="auto_upgrade_plugins_disabled_'.$_insid.'">'.$l['disabled'].'</label>
										</div>
										<div class="col-12 col-lg-6">
											<label class="form-label '.$disabled.'">'.$l['auto_upgrade_themes'].'
											<span class="sai_exp">'.lang_vars($l['exp_auto_upgrade_themes'], array($software['name'])).'</span>
											</label>
											
											<input type="radio" value="1" id="auto_upgrade_themes_enabled_'.$_insid.'" name="auto_upgrade_themes" '.POSTradio('auto_upgrade_themes', 1, (!empty($globals['force_upgrade_themes']) ? $globals['force_upgrade_themes'] : $_ins['auto_upgrade_themes'])).(!empty($globals['force_upgrade_themes']) ? 'disabled' : '').' '.$disabled.'/>
											<label class="radio-label" for="auto_upgrade_themes_enabled_'.$_insid.'">'.$l['enabled'].'</label>
											<input type="radio" value="" id="auto_upgrade_themes_disabled_'.$_insid.'" name="auto_upgrade_themes" '.POSTradio('auto_upgrade_themes', 0, (!empty($globals['force_upgrade_themes']) ? $globals['force_upgrade_themes'] : (int) $_ins['auto_upgrade_themes'])).(!empty($globals['force_upgrade_themes']) ? 'disabled' : '').' '.$disabled.'/>
											<label class="radio-label" for="auto_upgrade_themes_disabled_'.$_insid.'">'.$l['disabled'].'</label>
										</div>
									</div>
									
									
									<label class="form-label '.$disabled.'" for="blog_public_'.$_insid.'">'.$l['blog_public'].'
									<span class="sai_exp">'.$l['exp_blog_public'].'</span>
									</label>
									
									<input type="radio" value="1" id="blog_public_enabled_'.$_insid.'" name="blog_public" '.POSTradio('blog_public', 1, (int) $_ins['blog_public']).' '.$disabled.'/>
									<label class="radio-label" for="blog_public_enabled_'.$_insid.'">'.$l['enabled'].'</label>
									<input type="radio" value="" id="blog_public_disabled_'.$_insid.'" name="blog_public" '.POSTradio('blog_public', 0, (int) $_ins['blog_public']).' '.$disabled.'/>
									<label class="radio-label" for="blog_public_disabled_'.$_insid.'">'.$l['disabled'].'</label>
										
									<label class="form-label '.$disabled.'" for="disable_wp_cron_'.$_insid.'">'.$l['wp_cron'].'
									<span class="sai_exp">'.$l['exp_wp_cron'].'</span>
									</label>
									<input type="radio" value="0" id="disable_wp_cron_enabled_'.$_insid.'" name="disable_wp_cron" '.POSTradio('disable_wp_cron', 0, $disable_wp_cron).' '.$disabled.' />
									<label class="radio-label" for="disable_wp_cron_enabled_'.$_insid.'">'.$l['enabled'].'</label>
									<input type="radio" value="1" id="disable_wp_cron_disabled_'.$_insid.'" name="disable_wp_cron" '.POSTradio('disable_wp_cron', 1, $disable_wp_cron).' '.$disabled.' />
									<label class="radio-label" for="disable_wp_cron_disabled_'.$_insid.'">'.$l['disabled'].'</label>
										
									<label class="form-label '.$disabled.'" for="wp_debug_'.$_insid.'">'.$l['wp_debug'].'
									<span class="sai_exp">'.$l['exp_wp_debug'].'</span>
									</label>
									<input type="radio"  value="1" id="wp_debug_enabled_'.$_insid.'" name="wp_debug" '.POSTradio('wp_debug', 1, $wp_debug).' '.$disabled.' />
									<label class="radio-label" for="wp_debug_enabled_'.$_insid.'">'.$l['enabled'].'</label>
									<input type="radio"  value="" id="wp_debug_disabled_'.$_insid.'" name="wp_debug" '.POSTradio('wp_debug', 0, $wp_debug).' '.$disabled.' />
									<label class="radio-label" for="wp_debug_disabled_'.$_insid.'">'.$l['disabled'].'</label>
								</div>
							</div>
							<div class="col-md-12">
								<div class="section" style="margin-top:20px;">
									
									<div class="row justify-content-sm-center">';
									
									if(empty($globals['disable_security_measures'])){
										$ins_row .=  '
										<a data-toggle="tooltip" data-html="true" title="'.$l['security_measures_exp'].'">
											<input type="button" name="secure_btn" value="'.$l['security_measures'].'" class="form-btn form-btn-action secure_wp" />
										</a>';
									}
									
									if(!empty($can_template)){
										$wpmanager_ins_buttons['create_template'] = '
										<a href="'.$globals['ind'].'act=create_template&insid='.$_insid.'"  data-toggle="tooltip" data-html="true" title="'.$l['create_template_exp'].'">
											<input type="button" name="create_template_button" class="form-btn form-btn-info mx-1 mb-1 '.$disabled.'" id="create_template_button" value="'.$l['create_template'].'" '.$disabled.' />
										</a>';
									}
									
									if(!empty($is_cloneable)){
										$wpmanager_ins_buttons['clone'] = '
										<a href="'.$globals['ind'].'act=sclone&insid='.$_insid.'"  data-toggle="tooltip" data-html="true" title="'.$l['clone_exp'].'">
											<input type="button" name="clone_button" class="form-btn form-btn-info mx-1 mb-1 '.$disabled.'" id="clone_button" value="'.$l['clone'].'" '.$disabled.' />
										</a>';
									}
									
									if(!empty($can_staging)){
										$wpmanager_ins_buttons['stage'] = '
										<a href="'.$globals['ind'].'act=staging&insid='.$_insid.'"  data-toggle="tooltip" data-html="true" title="'.$l['staging_exp'].'">
											<input type="button" name="staging_button" class="form-btn form-btn-info mx-1 mb-1 '.$disabled.'" id="staging_button" value="'.$l['staging'].'" '.$disabled.' />
										</a>';
									
										if(!empty($_ins['is_staging'])){
											$wpmanager_ins_buttons['pushtolive'] = '
											<a href="'.$globals['ind'].'act=pushtolive&insid='.$_insid.'"  data-toggle="tooltip" data-html="true" title="'.$l['pushtolive_exp'].'">
												<input type="button" name="pushtolive_button" class="form-btn form-btn-info mx-1 mb-1 '.$disabled.'" id="pushtolive_button" value="'.$l['pushtolive'].'" '.$disabled.' />
											</a>';
										}
									}
									
									if(empty($globals['disable_backup_restore'])){
										$wpmanager_ins_buttons['backup'] = '
										<a href="'.$globals['ind'].'act=backup&insid='.$_insid.'"  data-toggle="tooltip" data-html="true" title="'.$l['backup_exp'].'">
											<input type="button" name="backup_button" class="form-btn form-btn-success mx-1 mb-1 '.$disabled.'" id="backup_button" value="'.$l['backup'].'"  '.$disabled.' />
										</a>';
										$wpmanager_ins_buttons['restore'] = '
										<a href="'.$globals['ind'].'act=backups&insid='.$_insid.'"  data-toggle="tooltip" data-html="true" title="'.$l['restore_exp'].'">
											<input type="button" name="restore_button" class="form-btn form-btn-success mx-1 mb-1 '.$disabled.'" id="restore_button" value="'.$l['restore'].'" '.$disabled.' />
										</a>';
									}
									
									$wpmanager_ins_buttons['remove'] = '
									<a href="'.$globals['ind'].'act=remove&insid='.$_insid.'&info_only=1"  data-toggle="tooltip" data-html="true" title="'.$l['remove_ins_exp'].'">
										<input type="button" name="remove_button" class="form-btn form-btn-danger mx-1 mb-1" id="remove_button" value="'.$l['remove'].'"  />
									</a>';
									$wpmanager_ins_buttons['uninstall'] = '
									<a href="'.$globals['ind'].'act=remove&insid='.$_insid.'" data-toggle="tooltip" data-html="true" title="'.$l['uninstall_ins_exp'].'">
										<input type="button" name="uninstall_button" class="form-btn form-btn-danger mx-1 mb-1" id="uninstall_button" value="'.$l['uninstall'].'" />
									</a>';
									
									$wpmanager_ins_buttons = apply_filters('post_wpmanager_ins_button_theme', $wpmanager_ins_buttons, $_insid);
									
									foreach($wpmanager_ins_buttons as $k => $y){
										$ins_row .= $y;
									}
									
									$ins_row .='
									</div>
								</div>
							</div>
						</div>
						
						<div class="row">				
						</div>
						</div>
						'.csrf_display().'
					</form>';
				
					if(array_key_exists('is_staging', $_ins)){
						$ins_tr[$_ins['is_staging']] .= $ins_row;
					}else{
						if(!empty($ins_tr[$_insid])){
							$ins_tr[$_insid] = $ins_row.$ins_tr[$_insid];
						}else{
							$ins_tr[$_insid] .= $ins_row;
						}	
					}
				}
				
				echo '
<!--Featured Plugins Start-->
<div class="modal fade" id="featured_plugins_modal" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content modal-resize-120">
			<div class="modal-header">
				<input type="hidden" id="store_revert_insid">
				<h5 class="modal-title"><span id="featured_plugins_modal_title">'.$l['featured_plugins'].'</span></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<!-- Success Div -->
				<div class="nav nav-tabs mb-4" id="nav-tab" role="tablist">
					'.(!empty($featured_plugins_list) ? '<a class="nav-item nav-link active" id="pot_featured_tab" data-toggle="tab" href="#featured_plugins_themes" role="tab" aria-controls="featured_plugins_themes" aria-selected="true" style="width:50%; text-align:center; display:block">'.$l['featured'].'</a>' : '').'
					<a class="nav-item nav-link '.(empty($featured_plugins_list) ? 'active' : '').'" id="pot_manage_license_tab" data-toggle="tab" href="#manage_license" role="tab" aria-controls="manage_license" aria-selected="true" style="width:50%; text-align:center;">'.$l['manage_licenses'].'</a>
				</div>
				
				<!-- Tab panes -->
				<div class="tab-content">									
					<div id="success" class="alert alert-success" style="display:none;"></div>

					<div class="tab-pane fade show '.(!empty($featured_plugins_list) ? 'active' : '').'" id="featured_plugins_themes" role="tabpanel" aria-labelledby="pot_featured_tab">
					<div id="fp_info" class="alert alert-info">'.(softaculous_is_pro() ? $l['bulk_featured_plugins_info_pro'] : $l['bulk_featured_plugins_info_free']).'<br />'.$l['bulk_featured_plugins_skip'].'</div>

					<table class="table">
						<thead class="sai_head2">
							<tr>
								<th width="5%"></th>
								<th width="65%">'.$l['plugins_themes_list_name'].'</th>
								<th width="10%">'.$l['plugins_themes_list_link'].'</th>
								<th width="20%">'.$l['options'].'</th>								
							</tr>
						</thead>
						<tbody>';
							
							foreach($featured_plugins_list as $fk => $fv){
								
								if(!empty($fv['plugin_url'])){
									$fv['author_url'] = $fv['plugin_url'];
								}
								
								echo '<tr>
								<td>'.(!empty($fv['plugin_img']) ? '<img src="'.$fv['plugin_img'].'" style="height:30px;width:30px"/>' : '').'</td>
								<td>'.$fv['plugin_name'].(softaculous_is_pro() ? ' - <span style="color:green;">Pro</span>' : '').'<span class="sai_exp">'.$fv['exp'].'</span></td>
								<td>'.(!empty($fv['author_url']) ? '<a href="'.$fv['author_url'].'" target="_blank"><i class="fas fa-external-link-alt px-2" style="font-size:1em;"></i></a>' : '').'</td>
								
								<td>							
									<button class="btn featured_plugins fa-x" id="'.strtolower($fv['slug']).'" style="float:none;border:1px solid #B5B9BD;padding: 0.1em 0.5em;" onclick="install_featured_plugins(this);"><i class="fas fa-download" style="color:#0d47a1;display:inline;font-size:0.8em;" title="'.$l['install_plugin'].'"></i>&nbsp;<span style="font-size:13px;">'.$l['install'].'</span></button>
								</td>
								</tr>';
								
							}
							
							echo '
						</tbody>
					</table>
					</div>

					<div class="tab-pane fade my-3 '.(empty($featured_plugins_list) ? 'active' : '').'" id="manage_license" role="tabpanel" aria-labelledby="pot_manage_license_tab">
						<div id="installations_list">
							<p>'.$l['softwp_select_ins'].'</p>
							<table class="table table-hover">
							<thead class="sai_head2">
									<tr>
										<th width="5%"><input type="checkbox" id="check_all_ins2" onchange="multiple_check2()"></th>
										<th width="50%">' . $l['siteurl'] . '</th>
										<th width="45%">' . $l['license_key'] . '</th>					   
									</tr>
								</thead>
								<tbody>';
								foreach ($wp_ins as $_insid => $_ins) {
									echo '
										<tr>
											<td>
												<input type="checkbox" class="check_websites shift_select_ins check_all_ins2" name="license_insids[]" id="' . $_insid . '" value="' . $_insid . '">
											</td>

											<td>
												<a href="' . $_ins['softurl'] . '" class="title d-block" target="_blank" id="url_' . $_insid . '" style="text-decoration:none;">' . $_ins['softurl'] . '</a>
											</td>

											<td class="license_check" data-insid="'.$_insid.'">';
												if (!empty($_ins['softaculous_pro_license'])) {
													echo '<strong>'.$_ins['softaculous_pro_license'].'</strong>';
												} else {
													echo '
													<button type="button" class="btn btn-default sai-button text-center" id="issue_softwp_license" name="issue_softwp_license" onclick="issue_softwp_license(\'' . $_insid . '\');" style="padding: 5px 15px;">'.$l['softwp_issue_license'].'</button>';
												}
												
										echo '
											</td>
										</tr>';
								}
								echo '
								</tbody>
							</table>
						</div>	
						<div class="install_div"></div>
						' . csrf_display() . '
						'.$l['with_selected'].': <button type="button" class="btn btn-default sai-button" id="issue_license_selected" name="issue_softwp_license" onclick="issue_softwp_license();">'.$l['softwp_issue_license'].'</button>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<!--Featured Plugins end-->

<!-- Manage Users Modal -->
<div class="modal fade" id="newModal" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
<div class="modal-dialog modal-dialog-password mw-100 w-80" role="document">
<div class="modal-content">
	<div class="modal-header">
		<h4 class="modal-title" id="change_password_title">'.$l['manage_users'].'
		</h4>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button>
	</div>
	<div class="modal-body">					
		<!-- Nav tabs -->
		<nav>
			<div class="nav nav-tabs" role="tablist">
				<a class="nav-item nav-link active" id="pot_change_password" data-toggle="tab" href="#change_password" role="tab" aria-controls="change_password" aria-selected="true" style="width:50%; text-align:center;" onclick="load_users_list(\''.$_insid.'\')" >'.$l['change_password'].'</a>
				<a class="nav-item nav-link" id="pot_add_wordpress_users" data-toggle="tab" href="#add_wordpress_users" role="tab" aria-controls="add_wordpress_users" aria-selected="false" style="width:50%; text-align:center;" onclick="load_user_roles(\''.$_insid.'\')" >'.$l['add_user'].'</a>
			</div>
		</nav>
		<br />

		<!-- Tab panes -->
		<div class="tab-content">
			<!-- Error Div -->
			<div id="modal_error_handler" class="alert alert-danger response_container" style="display:none;">
				<p style="margin-top:4px; font-size:14px;">&nbsp;&nbsp;'.$l['following_errors_occured'].' :</p>
				<ul type="square" class="error_div" style="padding-left:20px;" id="modal_ul_error_handler">
				</ul>
			</div>

			<!-- Success Div -->
			<div id="add_users_success" class="alert alert-success" style="display:none;"></div>

			<div class="tab-pane fade show active" id="change_password" role="tabpanel" aria-labelledby="pot_change_password">
				<div id="wordpress_change_password_content">
				<form accept-charset="'.$globals['charset'].'" name="adminDetails" method="post" action="" id="adminDetails" class="form-horizontal">
					<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12" style="margin-top:5px;">
					<label class="form-label" for="admin_username">'.$l['username'].'</label>
					<div id="admin_username_field"></div>
					<br />
					<label class="form-label" for="admin_password">'.$l['password'].'</label>
					<div class="input-group">
						<input type="password"  name="admin_password" id="admin_password"  class="form-control border-right-0" >
						<span class="input-group-append bg-white border-left-0" onclick="toggle_pass(\'toggle_admin_password\', \'admin_password\');" style=" cursor: pointer;">
						<span class="input-group-text bg-transparent" id="toggle_admin_password" >'.$l['show'].'</span>
						</span>&nbsp
						<a class="generate-password" href="javascript: void(0);" onclick="$_(\'admin_password\').value=randstr(10, 1, 0);return false;" title="'.$l['randpass'].'" style="margin-top:5px;"><i class="fas fa-key"></i></a>
					</div>

					</div>
					</div>
					<hr />
					<div style="float:right;">
					<input type="button" class="form-btn form-btn-info form-save" name="save_admin_info" insid="" id="save_admin_info" value="'.$l['save'].'"/>
					<div id="manage_users_loader" class="manage_users_loader" style="display:inline;"></div>
					<button type="button" class="form-btn form-btn-secondary" data-dismiss="modal">'.$l['close'].'</button>
					</div>
				</form>
				</div>
				<div class="manage_users_potLoader"></div>
			</div> <!-- change password tab pane end -->

			<div class="tab-pane fade" id="add_wordpress_users" role="tabpanel" aria-labelledby="pot_add_wordpress_users">
				<div id="add_wordpress_users_content">
				<form accept-charset="'.$globals['charset'].'" method="post" class="form-horizontal" id="add_user_form">
					
					<div class="form-group" id="user_roles">
					</div>
				
					<div class="form-group">
						<label for="user_login">'.$l['username'].' ('.$l['required'].') :</label>
						<input type="text" class="form-control" name="user_login" id="user_login">
					</div>
					
					<div class="form-group">
						<label for="user_email">'.$l['email'].' ('.$l['required'].') :</label>
						<input type="text" class="form-control" name="user_email" id="user_email">
					</div>
					
					<div class="form-group">
						<label for="user_pass">'.$l['password'].' ('.$l['required'].') :</label>
						<div class="input-group">
							<input type="password" name="user_pass" id="user_pass" class="form-control border-right-0">
							<span class="input-group-append bg-white border-left-0" onclick="toggle_pass(\'toggle_add_users_password\', \'user_pass\');" style=" cursor: pointer;">
							<span class="input-group-text bg-transparent" id="toggle_add_users_password" >'.$l['show'].'</span>
							</span>&nbsp
							<a class="generate-password" href="javascript: void(0);" onclick="$_(\'user_pass\').value=randstr(10, 1, 0);return false;" title="'.$l['randpass'].'" style="margin-top:5px;"><i class="fas fa-key"></i></a>
						</div>
					</div>
					
					<div class="form-group">
						<label for="first_name">'.$l['first_name'].' :</label>
						<input type="text" class="form-control" name="first_name" id="first_name">
					</div>
					
					<div class="form-group">
						<label for="last_name">'.$l['last_name'].' :</label>
						<input type="text" class="form-control" name="last_name" id="last_name">
					</div>
					
					<div class="form-group">
						<label for="user_url">'.$l['website'].' :</label>
						<input type="text" class="form-control" name="user_url" id="user_url">
					</div>
					<hr />
					<div style="float:right;">
						<div id="manage_users_loader" class="manage_users_loader" style="display:inline;"></div>
						<input type="button" class="form-btn form-btn-info form-save" name="add_user" insid="" id="add_user" value="'.$l['add_user'].'"/>
						<button type="button" class="form-btn form-btn-secondary" data-dismiss="modal">'.$l['close'].'</button>
					</div>
				</form>
				</div>	
				<div class="manage_users_potLoader"></div>
			</div> <!-- add user tab pane end -->
		</div> <!-- Tab content end -->
	</div> <!-- modal body end -->
</div> <!-- modal content end -->
</div> <!-- modal dialog end -->
</div> <!-- modal end -->
					
<!-- Security Measure Modal -->
<div class="modal fade" id="secure_wp_modal" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content modal-resize-120">
			<div class="modal-header">
				<input type="hidden" id="store_insid">
				<h5 class="modal-title"><span id="secure_wp_modal_title">'.$l['security_measures'].'</span></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="sai_head mb-3">
					'.$l['security_measures_desc'].'
				</div>
				<div class="secure_radio_list">
					<input type="radio" value="1" id="secure_wp_all" name="secure_wp_radio" class="me-1 filter_radio"/>
					<label class="radio-label" for="secure_wp_all">'.$l['secure_wp_all'].'</label>
					<br>
					<input type="radio" value="1" id="secure_wp_cri" name="secure_wp_radio" class="me-1 filter_radio"/>
					<label class="radio-label" for="secure_wp_cri">'.$l['secure_wp_cri'].'</label>
					<br>
					<input type="radio" value="1" id="secure_wp_cus" name="secure_wp_radio" class="me-1 filter_radio"/>
					<label class="radio-label" for="secure_wp_cus">'.$l['secure_wp_cus'].'</label>
				</div>
				<div id="security_measure_alert"></div>
				<div class="secure_wp_form">
					<form>
						<div class="form-check">
						    <input type="checkbox" class="form-check-input wp_secure_option" id="change_admin_username" value="change_admin_username" name="wp_secure_options[]">
						    <label class="form-label" for="change_admin_username">
						    	'.$l['change_admin_username'].'
						    	<span class="sai_exp">'.$l['change_admin_username_exp'].'</span>
						    </label>
						    <span class="info_change_admin_username"></span>
						</div>
						<div class="form-check">
						    <input type="checkbox" class="form-check-input wp_secure_option" id="no_file_dir_access" value="no_file_dir_access" name="wp_secure_options[]">
						    <label class="form-label" for="no_file_dir_access">
						    	'.$l['no_file_dir_access'].'
						    	<span class="sai_exp">'.$l['no_file_dir_access_exp'].'</span>
						    </label>
						    <span class="info_no_file_dir_access"></span>
						</div>
						<div class="form-check">
						    <input type="checkbox" class="form-check-input wp_secure_option" id="disable_xml_rpc" value="disable_xml_rpc" name="wp_secure_options[]">
						    <label class="form-label" for="disable_xml_rpc">
						    	'.$l['disable_xml_rpc'].'
						    	<span class="sai_exp">'.$l['disable_xml_rpc_exp'].'</span>
						    </label>
						    <span class="info_disable_xml_rpc"></span>
						</div>
						<div class="form-check">
						    <input type="checkbox" class="form-check-input wp_secure_option" id="block_htaccess" value="block_htaccess" name="wp_secure_options[]">
						    <label class="form-label" for="block_htaccess">
						    	'.$l['block_htaccess'].'
						    	<span class="sai_exp">'.$l['block_htaccess_exp'].'</span>
						    </label>
						    <span class="info_block_htaccess"></span>
						</div>
						<div class="form-check">
						    <input type="checkbox" class="form-check-input wp_secure_option" id="disable_pingbacks" value="disable_pingbacks" name="wp_secure_options[]">
						    <label class="form-label" for="disable_pingbacks">
						    	'.$l['disable_pingbacks'].'
						    	<span class="sai_exp">'.$l['disable_pingbacks_exp'].'</span>
						    </label>
						    <span class="info_disable_pingbacks"></span>
						</div>
						<div class="form-check">
						    <input type="checkbox" class="form-check-input wp_secure_option" id="no_file_editing" value="no_file_editing" name="wp_secure_options[]">
						    <label class="form-label" for="no_file_editing">
						    	'.$l['no_file_editing'].'
						    	<span class="sai_exp">'.$l['no_file_editing_exp'].'</span>
						    </label>
						    <span class="info_no_file_editing"></span>
						</div>
						<div class="form-check">
						    <input type="checkbox" class="form-check-input wp_secure_option" id="block_author_scan" value="block_author_scan" name="wp_secure_options[]">
						    <label class="form-label" for="block_author_scan">
						    	'.$l['block_author_scan'].'
						    	<span class="sai_exp">'.$l['block_author_scan_exp'].'</span>
						    </label>
						    <span class="info_block_author_scan"></span>
						</div>
						<div class="form-check">
						    <input type="checkbox" class="form-check-input wp_secure_option" id="block_dir_browsing" value="block_dir_browsing" name="wp_secure_options[]">
						    <label class="form-label" for="block_dir_browsing">
						    	'.$l['block_dir_browsing'].'
						    	<span class="sai_exp">'.$l['block_dir_browsing_exp'].'</span>
						    </label>
						    <span class="info_block_dir_browsing"></span>
						</div>
						<div class="form-check">
						    <input type="checkbox" class="form-check-input wp_secure_option" id="no_php_exec_wpinc" value="no_php_exec_wpinc" name="wp_secure_options[]">
						    <label class="form-label" for="no_php_exec_wpinc">
						    	'.$l['no_php_exec_wpinc'].'
						    	<span class="sai_exp">'.$l['no_php_exec_wpinc_exp'].'</span>
						    </label>
						    <span class="info_no_php_exec_wpinc"></span>
						</div>
						<div class="form-check">
						    <input type="checkbox" class="form-check-input wp_secure_option" id="no_php_exec_wpuploads" value="no_php_exec_wpuploads" name="wp_secure_options[]">
						    <label class="form-label" for="no_php_exec_wpuploads">
						    	'.$l['no_php_exec_wpuploads'].'
						    	<span class="sai_exp">'.$l['no_php_exec_wpuploads_exp'].'</span>
						    </label>
						    <span class="info_no_php_exec_wpuploads"></span>
						</div>
						<div class="form-check">
						    <input type="checkbox" class="form-check-input wp_secure_option" id="no_script_concat" value="no_script_concat" name="wp_secure_options[]">
						    <label class="form-label" for="no_script_concat">
						    	'.$l['no_script_concat'].'
						    	<span class="sai_exp">'.$l['no_script_concat_exp'].'</span>
						    </label>
						    <span class="info_no_script_concat"></span>
						</div>
						<div class="form-check">
						    <input type="checkbox" class="form-check-input wp_secure_option" id="block_sensitive_files" value="block_sensitive_files" name="wp_secure_options[]">
						    <label class="form-label" for="block_sensitive_files">
						    	'.$l['block_sensitive_files'].'
						    	<span class="sai_exp">'.$l['block_sensitive_files_exp'].'</span>
						    </label>
						    <span class="info_block_sensitive_files"></span>
						</div>
						<div class="form-check">
						    <input type="checkbox" class="form-check-input wp_secure_option" id="enable_bot_protection" value="enable_bot_protection" name="wp_secure_options[]">
						    <label class="form-label" for="enable_bot_protection">
						    	'.$l['enable_bot_protection'].'
						    	<span class="sai_exp">'.$l['enable_bot_protection_exp'].'</span>
						    </label>
						    <span class="info_enable_bot_protection"></span>
						</div>
					</form>
				</div>
			</div>	
			<div class="modal-footer">
				<img src="'.$theme['images'].'progress.gif" alt="loading" id="loading" style="display:none;"/>
				<button type="button" class="btn btn-primary submit_secure_wp">Apply</button>
			</div>
		</div>
	</div>
</div>

<!-- Revert Security Measure Modal -->
<div class="modal fade" id="revert_wp_security_modal" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content modal-resize-120">
			<div class="modal-header">
				<input type="hidden" id="store_revert_insid">
				<h5 class="modal-title"><span id="revert_wp_security_modal_title">'.$l['revert_wp_security'].'</span></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<!-- Success Div -->
				<div id="success" class="alert alert-success" style="display:none;"></div>
				
				<div class="sai_head mb-3">
					'.$l['revert_wp_security_exp'].'
				</div>

				<div class="revert_wp_security_div">
					<form class="revert_wp_security_form">
						
					</form>
				</div>
			</div>	
			<div class="modal-footer">
				<img src="'.$theme['images'].'progress.gif" alt="loading" id="loading" style="display:none;"/>
				<button type="button" class="btn btn-primary submit_revert_wp">Revert</button>
			</div>
		</div>
	</div>
</div>

<!-- Manage Plugins and Themes Modal -->
<div class="modal fade" id="pot_modal" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content modal-resize-120">
			<div class="modal-header">
				<h5 class="modal-title"><span id="pot_modal_title">'.$l['manage'].'</span></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
			
				<nav>
					<div class="nav nav-tabs" id="nav-tab" role="tablist">
						
						'.(!empty($featured_plugins_list) ? '<a class="nav-item nav-link active" id="ins_pot_featured_tab" data-toggle="tab" href="#ins_featured_plugins_themes" role="tab" aria-controls="ins_featured_plugins_themes" aria-selected="true" style="width:25%; text-align:center; display:block">'.$l['featured'].'</a>' : '').'
						<a class="nav-item nav-link '.(empty($featured_plugins_list) ? 'active' : '').'" id="pot_installed_tab" data-toggle="tab" href="#installed_plugins_themes" role="tab" aria-controls="installed_plugins_themes" aria-selected="true" style="width:'.(!empty($featured_plugins_list) ? '25%' : '33.33%').'; text-align:center;">'.$l['installed'].'</a>
						<a class="nav-item nav-link" id="pot_add_tab" data-toggle="tab" href="#add_plugins_themes" role="tab" aria-controls="add_plugins_themes" aria-selected="false" style="width:'.(!empty($featured_plugins_list) ? '25%' : '33.33%').'; text-align:center;">'.$l['add'].'</a>
						<a class="nav-item nav-link" id="pot_upload_tab" data-toggle="tab" href="#upload_plugins_themes" role="tab" aria-controls="upload_plugins_themes" aria-selected="false" style="width:'.(!empty($featured_plugins_list) ? '25%' : '33.33%').'; text-align:center;">'.$l['upload'].'</a>
					</div>
				</nav>
				<br />
				<div class="tab-content" id="nav-tabContent">
					<!-- Error Div -->
					<div id="error_handler" class="alert alert-danger response_container" style="display:none;">
						<p style="margin-top:4px; font-size:14px;">&nbsp;&nbsp;'.$l['following_errors_occured'].' :</p>
						<ul type="square" class="error_div" style="padding-left:20px;" id="ul_error_handler"></ul>
					</div>
					
					<!-- Success Div -->
					<div id="success" class="alert alert-success" style="display:none;"></div>
					
					'.(!empty($featured_plugins_list) ? '<div class="tab-pane fade show active" id="ins_featured_plugins_themes" role="tabpanel" aria-labelledby="ins_pot_featured_tab"></div>' : '').'
					
					<div class="tab-pane fade show '.(empty($featured_plugins_list) ? 'active' : '').'" id="installed_plugins_themes" role="tabpanel" aria-labelledby="pot_installed_tab"></div>
					
					<div class="tab-pane fade" id="add_plugins_themes" role="tabpanel" aria-labelledby="pot_add_tab">
						<input type="text" name="search_pots" class="form-control" id="search_pots" size="25" placeholder="'.$l['search_wp'].'">
						<div id="pots_result"></div>
					</div>
					
					<div class="tab-pane fade" id="upload_plugins_themes" role="tabpanel" aria-labelledby="pot_upload_tab">
						<form action="" class="dropzone my-2 p-2" id="upload_form" style="display:block;">
							<div class="dz-message row m-4" data-dz-message >
								<div class="col-12 text-center">
									<i class="fas fa-file-upload fa-3x d-block mb-3"></i>
									<label class="sai-label">'.$l['upload_drag_exp'].' '.$l['upload_manual_exp'].'</label>
								</div>
							</div>
							<div class="fallback">
								<input name="custom_file" type="file" />
							</div>
							'.csrf_display().'
						</form>
						<div class="row">
							<div class="col-sm-12">
								<input type="checkbox" name="activate_pot" id="activate_pot" '.POSTchecked('activate_pot').' />
								<label class="sai_head mb-2" class="form-label ml-1" for="activate_pot" id="activate_pot_label">'.$l['activate_plugins'].'</label>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div id="add_plth" class="wpc_inline"></div>
								<button type="button" class="mt-2 flat-butt" id="upload_pot" name="upload_pot">'.$l['upload'].'</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<img src="'.$theme['images'].'progress.gif" alt="loading" id="loading" style="display:none;"/>
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<input type="hidden" value="" id="plugin_or_theme">';
					
				if(!empty($ins_tr)){
					echo implode('', $ins_tr);
				}
				
			}else{
				echo '<div class="row mt-4" align="center">
				<div class="col-sm-12">
					<p style="font-size:14px;">'.$l['no_wp_ins'].' <a href="'.$globals['ind'].'act=software&soft='.$soft.'&tab=install" style="text-decoration:underline;">'.$l['install_new_wp'].'</a> '.$l['or'].' <a href="'.$globals['ind'].'act=sync&manual=1" style="text-decoration:underline;">'.$l['scan_wp'].'</a>.</p><br />
				</div>
			</div>';
			}
			
		echo '</div>';
	echo '</div>
	<!-- Iframe Modal -->
	<div class="modal fade bd-example-modal-lg" id="site_modal" tabindex="-1" role="dialog" aria-labelledby="btnmodal" aria-hidden="true">
		<div class="modal-dialog modal-dialog-iframe mw-100 w-80" role="document">
			<div class="modal-content">
				<div class="modal-header">
				<h4 class="modal-title" id="site_modal_title">
					<span id="site_modal_title_span"></span>
				</h4>
				<button type="button" class="close close_iframe" data-dismiss="modal" aria-label="Close" id="close_iframe">
					<span aria-hidden="true">&times;</span>
				</button>
				</div>
				<div class="modal-body loader">
					<iframe id="site_iframe" style="border:none;" height="100%" width="100%" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-12 my-4 text-right">
			<label class="soft-label mr-1">'.$l['with_selected'].':</label>
			<select name="multi_options" id="multi_options">
				<option name="todo" id="todo" value="0">---</option>
				<option name="todo" id="todo" value="mult_rem">'.$l['remove_complete'].'</option>
				<option name="todo" id="todo" value="mult_rem_info">'.$l['remove_info'].'</option>
			</select>'.csrf_display().'
			<input type="button" value="'.$l['go'].'" onclick="show_confirm()" class="sai_graybluebut">
		</div>
	</div>
	<div id="rem_div"></div>
	<script src="'.$theme['url'].'/js/dropzone.min.js"></script>
	<script language="javascript" src="'.$theme['url'].'/js/datatables.min.js" type="text/javascript"></script>
	<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
	
	function show_confirm(){
	
		insids = new Array();
		removed = new Object();
		
		$sel_opt = $_("multi_options").value;
		
		if($sel_opt != "mult_rem" && $sel_opt != "mult_rem_info"){
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
		
		if($sel_opt == "mult_rem_info"){
			remove_by_id(insids[0], "", 0, 1);
		}else{
			remove_by_id(insids[0], "", 0);
		}
		
	}
	function remove_by_id(insid, re, oldinsid, info_only){

		removed[insid] = false;
		info_only = info_only || 0;
		
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
		
		
		var csrf_token = $("#csrf_token").val(); 
		
		// If there is something left to be removed
		if(insid != 0){
			
			try{

				$.ajax({
					type: "POST",
					data: "csrf_token="+csrf_token,
					url: "'.$globals['index'].'act=remove&insid="+insid+"&ajax=1&ssk="+randomstring(32)+"&random="+Math.random()+"&info_only="+info_only,
					// Checking for error
					success: function(data){
						remove_by_id(nextinsid, data, insid, info_only);
						
					}
				});
				
				$_("rem_div").innerHTML = "<br /><br /><p align=\"center\"><img src=\"' . $theme['images'] . 'admin_progress.gif\"> <br />'.$l['rem_inst_id']. ' ID: " +insid+ ", URL: " + $_("url_"+insid)+"<br /></p>";
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
	
	var show_text = "'.$l['show'].'";
	var hide_text = "'.$l['hide'].'";
	var softaculous_is_pro = "'.(softaculous_is_pro() ? '1' : '0').'";
	var softaculous_is_pro_text = "'.(softaculous_is_pro() ? ' - <span style=\"color:green;\">Pro</span>' : '').'";
	var has_featured_plugins_list = "'.(!empty($featured_plugins_list) ? 1 : '').'";
	
	function toggle_ins_form(e){
		var toggle_insid = e.attr("id").replace("toggle_", "");
		$("#ins_form_"+toggle_insid+"").toggle();
		show_screenshot(toggle_insid);
	}
	
	function save_site_info(e){
		
		var csrf_token = $("#csrf_token").val();
		
		var current_insid = e.attr("insid");
		var softurl = $("#details_"+current_insid).find(\'input[name="softurl"]\').val();
		var site_name = $("#details_"+current_insid).find(\'input[name="site_name"]\').val();
		var error_div = $("#details_"+current_insid).find(".error_div");
		error_div.parent().hide();
		$("#details_"+current_insid).find(\'input[name="save_site_info"]\').hide();
		
		$.ajax({
			type: "POST",
			data: {
				"csrf_token": csrf_token,
				"insid": current_insid,
				"softurl": encodeURI(softurl),
				"site_name": site_name,
				"save_info": "1",
			},
			url: "'.$globals['index'].'act=wordpress&api=json",
			success: function(data){
				var resp = JSON.parse(data.trim());
				
				if(!resp.done){
					error_div.empty();
					if(resp.error){
						for (x in resp.error) {
							error_div.append("<li>"+resp.error[x]+"</li>");
						}
					}
					error_div.parent().show();
					document.getElementById("error_handler_"+current_insid).scrollIntoView({ behavior: "smooth" });
					//console.log(resp.error);
				}else{
				
					bootstrapgrowl("'.$l['save_info_success'].'", "success");
				}
				//alert(resp.done);
			}
		});
	}

	function get_users_list(insid){
		var csrf_token = $("#csrf_token").val();
		var current_insid = insid;

		$.ajax({
			type: "POST",
			data: {
				"csrf_token": csrf_token,
				"insid": current_insid,
				"get_users_list": "1",
			},
			url: "'.$globals['index'].'act=wordpress&api=json",
			beforeSend: function(){
				//Hide the form contents and add the loader
				$("#wordpress_change_password_content").hide();
				$(".manage_users_potLoader").addClass("potloader");
			},
			success: function(data){
				
				var resp = JSON.parse(data.trim());

				// If user list not empty then show dropdown else textbox
				if(resp.users_list == null || resp.users_list.length === 0){
					admin_username_field = \'<input type="text" class="form-control" size="50" id="admin_username" name="admin_username"/>\';
				}else{
					admin_username_field = \'<select class="form-control" id="admin_username"><option value="">'.$l['select_user'].'</option>\';
					
					for(let user_name in resp.users_list){
						admin_username_field += \'<option value="\'+user_name+\'">\'+user_name+\' - \'+resp.users_list[user_name]["email"]+\'</option>\';
					}
					
					admin_username_field += "<select>";
				}
				
				//Add the contents to the "admin_username_field" div
				$("#admin_username_field").html(admin_username_field);
				
				//Remove the loader and display the form contents
				$(".manage_users_potLoader").removeClass("potloader");
				$("#wordpress_change_password_content").show();
			}
		});
	}
	
	function get_user_roles(insid){
		
		var csrf_token = $("#csrf_token").val();
		var current_insid = insid;
		
		$.ajax({
			type: "POST",
			data: {
				"csrf_token": csrf_token,
				"insid": current_insid,
				"get_user_roles": "1",
			},
			url: "'.$globals['index'].'act=wordpress&api=json",
			beforeSend: function(){
				//Hide the form contents and add the loader
				$("#add_wordpress_users_content").hide();	
				$(".manage_users_potLoader").addClass("potloader");
			},
			success: function(data){
				
				var resp = JSON.parse(data.trim());
				
				//Create a Select Box for the user roles
				var user_roles_field = "";
				user_roles_field += \'<label for="role">'.$l['role'].':</label><select class="form-control" id="role" name="role">\';
				
				for(let x in resp.user_roles){
					user_roles_field += \'<option value="\'+x+\'">\'+resp.user_roles[x].name+\'</option>\';
				}			
				
				user_roles_field += "</select>";
				
				//Add the select box html to the "user_roles" div
				$("#user_roles").html(user_roles_field);
				
				//Remove the loader and display the form contents
				$(".manage_users_potLoader").removeClass("potloader");
				$("#add_wordpress_users_content").show();
			}
		});
	}
	
	function change_password_modal(e){
		
		var newModal = $("#newModal");
		var error_div = $("#modal_ul_error_handler");
		$("#modal_error_handler").hide();
		error_div.parent().hide();
		newModal.find("#save_admin_info").attr("insid", e);
		newModal.find("#add_user").attr("insid", e);
		newModal.find("#pot_add_wordpress_users").attr("onclick", "load_user_roles(\'"+e+"\')");
		newModal.find("#pot_change_password").attr("onclick", "load_users_list(\'"+e+"\')");

		//Ensure that the modal loads the "Add Users" Tab when it opens
		newModal.find("#pot_change_password").addClass("active");
		newModal.find("#pot_change_password").attr("aria-selected", "true");
		newModal.find("#change_password").addClass("active show");
		newModal.find("#pot_add_wordpress_users").removeClass("active");
		newModal.find("#pot_add_wordpress_users").attr("aria-selected", "false");
		newModal.find("#add_wordpress_users").removeClass("active show");
		
		//Empty out the text and password fields
		newModal.find("input[type=\"text\"]").val("");
		newModal.find("input[type=\"password\"]").val("");
		
		//Show the modal and load the user roles
		newModal.modal("show");
		load_users_list(e);
	}
	
	function load_users_list(e){
		remove_error();
		get_users_list(e);
	}
	
	function load_user_roles(e){
		remove_error();
		get_user_roles(e);
	}
	
	function save_admin_info(e){
		remove_error();
		var csrf_token = $("#csrf_token").val();
		
		var current_insid = e.attr("insid");
		var admin_username = $("#newModal").find("#admin_username").val();
		var admin_password = $("#newModal").find("#admin_password").val();
		var success = $("#newModal").find("#add_users_success");
		
		var error_div = $("#modal_ul_error_handler");
		
		$("#modal_error_handler").hide();
		error_div.parent().hide();
		success.hide();
		
		$.ajax({
			type: "POST",
			data: {
				"csrf_token": csrf_token,
				"insid": current_insid,
				"admin_username": admin_username,
				"admin_password": admin_password,
				"save_admin_info": "1",
			},
			url: "'.$globals['index'].'act=wordpress&api=json",
			beforeSend: function(){
				$(".manage_users_loader").html(\'<img src="'.$theme['images'].'progress.gif" alt="loading" id="loading" />\');
			},
			success: function(data){
				$(".manage_users_loader").html("");
				var resp = JSON.parse(data.trim());
				
				if(!resp.done){
					error_div.empty();
					if(resp.error){
						for (x in resp.error) {
							error_div.append("<li>"+resp.error[x]+"</li>");
						}
					}
					error_div.show();
					$("#modal_error_handler").show();
					
				}else{
					success.show();
					success.text("'.$l['password_changed'].'");
				}
				//alert(resp.done);
			}
		});
	}
	
	function save_single_info_radio(e){
		
		var csrf_token = $("#csrf_token").val();
		var to_update = e.attr("name");
		var to_update_val = e.val();
		current_insid = e.attr("id").replace("enabled_", "").replace("disabled_", "").replace(to_update+"_", "");
		var error_div = $("#details_"+current_insid).find(".error_div");
		error_div.parent().hide();
		
		var post_data = { };
		if(csrf_token){
			post_data["csrf_token"] = csrf_token;
		}
		post_data["csrf_token"] = csrf_token;
		post_data["insid"] = current_insid;
		post_data["save"] = "1";
		post_data[to_update] = to_update_val;
		
		$.ajax({
			type: "POST",
			data: post_data,
			url: "'.$globals['index'].'act=wordpress&api=json",
			success: function(data){
				var resp = JSON.parse(data.trim());
				
				if(!resp.done){
					error_div.empty();
					if(resp.error){
						for (x in resp.error) {
							error_div.append("<li>"+resp.error[x]+"</li>");
						}
					}else{
							error_div.append("<li>'.$l['some_error_occurred'].'</li>");
					}
					error_div.parent().show();
					document.getElementById("error_handler_"+current_insid).scrollIntoView({ behavior: "smooth" });
					//console.log(resp.error);
				}else{
				
					bootstrapgrowl("'.$l['save_info_success'].'", "success");
				}
				//alert(resp.done);
			}
		});	
	}
	
	function show_iframe_modal(e){
		
		//get URL and insid from anchor tag
		action_name = e.attr("action");
		
		url = url = e.attr("href")+"&nohf=1";
		button_insid = url.match(/\d+_\d+/);
		
		//remove modal if exists
		$("#clone_site_modal").remove();
		var site_modal = $("#site_modal").clone();
		var iframe = site_modal.find("iframe");
		
		site_modal.attr("id", "clone_site_modal");
		site_modal.append("body");
		iframe.attr("src", url);
		site_modal.modal("show");
		site_modal.find("#site_modal_title_span").text(frame_headings[action_name]);
		
		site_modal.on("hidden.bs.modal", function () {
			if(close_message){
				alert("'.$l['track_on_tasklist'].'")
				close_message = false;
				clearInterval(start_process);
			}
		})
		
		//after page load
		iframe.on("load", function(){
			var iframe_height = (this.contentWindow.document.body.offsetHeight+5) + \'px\';
			site_modal.find(".modal-body").css({\'min-height\': iframe_height});
			
			//Return to WordPress Management Link
			var return_to_wp_link = iframe.contents().find("a.sai_head");
			
			return_to_wp_link.html(\''.$l['return_to_wpm'].'\');
			return_to_wp_link.on("click", function(e){
				e.preventDefault();
				$("#clone_site_modal").modal("toggle");
			})
			
			if(action_name == "upgrade"){
				iframe.contents().find("a").attr("target", "blank");
			}
			
			//On Soft Button Click
			var button = iframe.contents().find("form").on("submit", function(){
				start_process = setInterval(progress_bar, 1000);
				close_message = true;
			})
		})
	}
	
	function progress_bar(){
		var modal_iframe = $("#clone_site_modal iframe");
		var progress = modal_iframe.contents().find("#progress_percent").text().match(/\d+/);
		
		if(action_name == "backup"){
			modal_iframe.contents().find("a").attr("target", "blank");
		}
		
		if(progress >= 100 || progress == null){
			
			if((action_name == "clone") || (action_name == "staging") || (action_name == "install")){
				button_insid = modal_iframe.contents().find("#adminurl").attr("href").match(/\d+_\d+/);
			}
			
			$("#clone_site_modal iframe").contents().find("a.sai_head").text("'.$l['return_to_wpm'].'");
			
			$("#clone_site_modal iframe").contents().find("a.sai_head").on("click", function(){
				
				$("#clone_site_modal").modal("toggle");
				
				if(action_name == "remove" || action_name == "uninstall"){
					// html_entity_decode function added for WHMCS as the url contains& which is converted to &amp;
					setTimeout(function(){location.href="'.html_entity_decode($globals['ind']).'act=wordpress"}, 1000);
				}else{
					setTimeout(function(){location.href="'.html_entity_decode($globals['ind']).'act=wordpress&insid="+button_insid},1000);
				}
			})
			close_message = false;
			clearInterval(start_process);
		}
	}
	
	function show_screenshot(_insid){
		
		var can_screenshot = "'.(can_render_screenshot() ? '1' : '0').'";
		
		if(!can_screenshot){
			return false;
		}
		
		var update_screenshot_param = "";
		
		if(update_screenshot){
			$("#screenshot_"+_insid).attr({"src": "'.$theme['images'].'/admin_progress.gif", "class": "form-img form-img-loading img-fluid"});
			update_screenshot_param = "&force="+update_screenshot+"&ts="+(new Date()).getTime();
		}
		
		var loadimage = new Image();
		
		loadimage.onload = function(){
			var image_id = $("#screenshot_"+_insid);
			image_id.removeClass("form-img-loading");
			image_id.attr("src", this.src);
			image_id.fadeIn();
		}

		loadimage.onerror = function(){
			var screenshot_error = $("#screenshot_"+_insid);
			screenshot_error.attr("src", "'.$theme['images'].'/no_screenshot.png");
			screenshot_error.removeClass("form-img-loading");
			screenshot_error.fadeIn();
		}
		
		if($("#ins_"+_insid).find(".error-badge")[0]){
			loadimage.src = "'.$theme['images'].'/no_screenshot.png";
		}else{
			loadimage.src = "'.$globals['index'].'act=wordpress&render_image="+_insid+update_screenshot_param;
			update_screenshot = null;
			update_screenshot_param = "";
		}
	}
	
	function toggle_advoptions(ele){
		//alert("#"+ele);
		if ($("#"+ele).is(":hidden")){
			$("#"+ele).slideDown("slow");
			$("#"+ele+"_toggle_plus").attr("class", "fas fa-minus-square");
		}
		else{
			$("#"+ele).slideUp("slow");
			$("#"+ele+"_toggle_plus").attr("class", "fas fa-plus-square");
		}
	}
	function bootstrapgrowl(message, type){
		$.bootstrapGrowl(message, {
			ele: "body", // which element to append to
			type: type+"-dark", // (null, info, danger, success)
			offset: {from: "bottom", amount: 20}, // top or bottom
			align: "right", // (left, right, or center)
			width: "auto", // (integer, or auto)
			delay: 4000, // Time while the message will be displayed. It\'s not equivalent to the *demo* timeOut!
			allow_dismiss: true, // If true then will display a cross to close the popup.
			stackup_spacing: 10 // spacing between consecutively stacked growls.
		});
	}
	
	function show_secure_wp_modal(btn){

		var csrf_token = $("#csrf_token").val();

		// Build the list of Installations to apply security measures
		var field = document.getElementsByName("insids[]");
		
		insids = new Array();
		if(btn[0].form){
			insids[0] = btn[0].form.id;
			insids[0] = insids[0].replace("details_","");
		}
		else{ 
			
			var c = 0;
			for(i = 0; i < field.length; i++){
				if(field[i].checked == true){
					insids[c] = field[i].value;
					c++;
				}
			}
		}
		
		if(insids.length < 1){
			alert("Please select atleast one WordPress installation to apply security settings!");
			return false;
		}
		
		$.ajax({
			type: "POST",
			data: {
				"csrf_token": csrf_token,
				"insids":insids,
				"scan_security_measures":"1"
				},
			url: "'.$globals['index'].'act=wordpress&api=json",
			success: function(data){
				var resp = JSON.parse(data.trim());
				$.each(resp.security_info , function(key, val) {

					// Generate installation installaton_list
					var inst_list = "";
					$.each(val.list , function(key, val){
						inst_list+=val+"\n";
					});

					if(val.partial_count > 0){
						$(".info_"+key).html(\'<a style="cursor:pointer; font-style:italic; font-size: 12px;" data-toggle="tooltip" data-html="true" title="\'+inst_list+\'">(Applied on <b>\'+val.partial_count+\'</b> of your installations)</a>\');
						
					}

					if(val.all == 1){
						$("#"+key).prop("checked", true);
						$(".info_"+key).html("(Applied to all selected installations)").css({"font-style":"italic", "font-size": "12px"});
					}
				});
			}
		});
		
		//Display the modal
		$("#store_insid").val(JSON.stringify(insids));
		$(".wp_secure_option").prop("checked",false);
		$("#secure_wp_modal").modal("show");
		
	}
	
	function show_featured_plugins_modal(btn){
		
		var field = document.getElementsByName("insids[]");
		
		insids = new Array();
		if(btn[0].form){
			insids[0] = btn[0].form.id;
			insids[0] = insids[0].replace("details_","");
		}
		else{ 
			var c = 0;
			for(i = 0; i < field.length; i++){
				if(field[i].checked == true){
					insids[c] = field[i].value;
					c++;
				}
			}
		}
		
		if(insids.length < 1){
			alert("'.$l['no_ins_selected'].'");
			return false;
		}
		
		$("#featured_plugins_modal").modal("show");
		
	}

	function issue_softwp_license(insid){

		license_insids = new Array();

		if (typeof insid !== "undefined") {
			license_insids.push(insid);
		}
		else{
			// Build the list of Installations to issue License on 
			var field = document.getElementsByName("license_insids[]");
			
			var c = 0;
			for(i = 0; i < field.length; i++){
				if(field[i].checked == true){
					license_insids[c] = field[i].value;
					c++;
				}
			}
		}
		
		if(license_insids.length < 1){
			alert("'.$l['no_ins_selected'].'");
			return false;
		}

		document.querySelector(".install_div").innerHTML = "<a><img src=\'' . $theme['images'] . 'load.gif\' alt=\'' . $l['installing'] . '\' width=\'25\' ></a>";

		var csrf_token = $("#csrf_token").val();

		$.ajax({
			type: "POST",
			data: {
				"csrf_token": csrf_token,
				"insids":license_insids,
				"issue_prod_license":"1"
				},
			url: "' . $globals['index'] . 'act=wordpress&api=json",
			// Checking for success
			success: function(data){
				var resp = JSON.parse(data.trim());
				if(!resp.done){
					if(resp.error){
						for (x in resp.error) {
							bootstrapgrowl(resp.error[x], "danger");
						}
					}else{
						bootstrapgrowl("' . $l['some_error_occurred'] . '", "danger");
					}
					resp = false;
					//console.log(resp.error);
				}
				else{
					license_insids.forEach(function(insid) {
						if (resp.wordpressins[insid]) {
							var wordpressData = resp.wordpressins[insid];
							// Create the HTML with the <strong> tag
							if(wordpressData.softaculous_pro_license){
								var formattedLicense = "<strong>" + wordpressData.softaculous_pro_license + "</strong>";
								$("td.license_check[data-insid=" + insid + "]").html(formattedLicense);
							}
						}
					});
					// Hide and show the modal again (without reloading the page) 
					document.querySelector(".install_div").innerHTML = "";
					bootstrapgrowl("' . $l['softaculous_pro_license_issued'] . '", "success");
					resp = resp.done;
				}
			}
		});
	}

	$(".submit_secure_wp").on("click", function(){

		insids = new Array();
		removed = new Object();

		// Build the list of Installations to apply security measures
		var secure = document.getElementsByName("wp_secure_options[]");

		var secure_options = {};
		for(i = 0; i < secure.length; i++){
			var kv = {};
			kv.name = secure[i].value;
			if(secure[i].checked == true){
	        		kv.value = 1;
			}else{
				kv.value = 0;
			}
			secure_options[kv.name]= kv.value;
		}
		
		var insids = $("#store_insid").val();
		
		if(!insids || insids == ""){
			return false;
		}
		
		insids = JSON.parse(insids);
		
		var csrf_token = $("#csrf_token").val();
		
		$.ajax({
			type: "POST",
			data: {
				"csrf_token": csrf_token,
				"insids":insids,
				"secure_options":secure_options,
				"save_security_measures":"1"
				},
			url: "'.$globals['index'].'act=wordpress&api=json",
			success: function(data){
				var resp = JSON.parse(data.trim());

				if(!resp.done){
					//error_div.empty();
					if(resp.error){
						for (x in resp.error) {
							bootstrapgrowl(resp.error[x], "danger");
						}
					}else{
						bootstrapgrowl("'.$l['some_error_occurred'].'", "danger");
					}
					resp = false;
					//console.log(resp.error);
				}else{
					bootstrapgrowl("'.$l['security_measure_applied'].'", "success");
					resp = resp.done;
				}
				
			}
		});

		return true;
		
	});
		
	function show_pot_modal(btn){
		
		var lang = [];
		lang["add_themes"] = "'.$l['add_themes'].'";
		lang["add_plugins"] = "'.$l['add_plugins'].'";
		lang["upload_themes"] = "'.$l['upload_themes'].'";
		lang["upload_plugins"] = "'.$l['upload_plugins'].'";
		lang["activate_themes"] = "'.$l['activate_themes'].'";
		lang["activate_plugins"] = "'.$l['activate_plugins'].'";
		
		//is it plugin_or_theme(is_pot)
		var is_pot = (btn.hasClass("manage_plugins") ? "plugins" : "themes");
		
		//feature setting is not for themes
		if(is_pot == "themes"){
			$("#ins_pot_featured_tab").css("display", "none");
			$("#ins_pot_featured_tab").css("width", "0%");
			$("#pot_installed_tab").css("width", "33.33%");
			$("#pot_add_tab").css("width", "33.33%");
			$("#pot_upload_tab").css("width", "33.33%");
			$("#pot_installed_tab").addClass("active");
			$("#ins_pot_featured_tab").removeClass("active");
			$("#ins_featured_plugins_themes").removeClass("active");
			$("#installed_plugins_themes").addClass("active");
			
		}
		//current_insid
		current_insid = btn.attr("id").replace(is_pot+"_", "");
		
		//set Title
		$("#pot_modal #pot_modal_title").text(btn.val());
		
		if(is_pot == "plugins"){
			$("#pot_modal #pot_featured_tab").text(lang["featured_"+is_pot]);
		}
		
		$("#pot_modal #pot_installed_tab").text(lang["'.$l['installed'].'"]);
		$("#pot_modal #pot_upload_tab").text(lang["upload_"+is_pot]);
		$("#pot_modal #pot_add_tab").text(lang["add_"+is_pot]);
		$("#pot_modal #activate_pot_label").text(lang["activate_"+is_pot]);
		$("#plugin_or_theme").val(is_pot);
		
		//Display the modal
		$("#pot_modal").modal("show");
		
		if(is_pot == "plugins" && has_featured_plugins_list != ""){
			//Showing Featured plugins list now, will trigger when installed tab is clicked.
			featured_pot_modal(current_insid);
		}else{
			installed_pot_modal(current_insid);
		}
		
		// Prepare the dropzone
		$("#pot_modal #upload_form").dropzone({ url: "'.$globals['index'].'act=wordpress&upload=1&api=json", 
			autoDiscover : false, 
			paramName: "custom_file",
			createImageThumbnails: false,
			acceptedFiles: ".zip",
			maxFiles: 1,
			chunking: true,
			chunkSize: 500000,
			retryChunks: true,
			retryChunksLimit: 3,
			autoProcessQueue: false,
			chunksUploaded: function(file, done) {
					done();
				},
			init: function () {
				
				var myDropzone = this;
				
				document.querySelector("#upload_pot").addEventListener("click", function(e) {
					e.preventDefault();
					e.stopPropagation();
					myDropzone.processQueue();
				});
				
				this.on("sending", function(file, xhr, formData){
					var csrf_token = $("#csrf_token").val();
					
					formData.append("type", is_pot);
					formData.append("insid", current_insid);
					if(csrf_token && csrf_token.length > 0){
						formData.append("csrf_token", csrf_token);
					}
					if($("#activate_pot").is(":checked")){
						formData.append("activate", 1);
					}
				});
				
				this.on("complete", function(files, response) {
					myDropzone.removeAllFiles();
					submit_custom(files.xhr.response);
				});
			},
		});
	}
	
	// featured tab
	function featured_pot_modal(current_insid){
		
		var csrf_token = $("#csrf_token").val();
		var is_pot = $("#plugin_or_theme").val();
		var success = $("#pot_modal #success");
		
		var div_element = $("#pot_modal #ins_featured_plugins_themes");
		
		featured_table_body = "";
		
		$.ajax({
				type: "POST",
				data: {
					"csrf_token": csrf_token,
					"insid": current_insid,
					"type": is_pot,
					"list": 1,
				},
				url: "'.$globals['index'].'act=wordpress&api=json",
				beforeSend: function(){
					div_element.addClass("potloader");
				},
				success: function(data){
					
					var resp = JSON.parse(data.trim());
					
					if(is_pot == "plugins"){
						resp.plugins_themes_list = resp.featured_plugins_list;
						delete resp.plugins_list;
					}
					
					featured_table_body += "<div class=\"m-2\" style=\"font-size:1.2em;cursor:pointer;float:right;\" onclick=\"$(\'#pot_installed_tab\').trigger(\'click\');\">Show Installed Plugins <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 16 16\" fill=\"none\"><path d=\"M2.375 7.99996H13.625M13.625 7.99996L9.25 3.625M13.625 7.99996L9.25 12.375\" stroke=\"#00231F\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\"></path></svg></div><br /><br />";
					
					featured_table_body += \'<table class="table table-hover" id="table" style="font-size:13px;">\';
					featured_table_body += \'<thead class="sai_head2"><tr>\';
					featured_table_body += \'<th width="30px"></th>\';
					featured_table_body += \'<th width="65%">Name</th>\';
					featured_table_body += \'<th width="5%">Link</th>\';
					featured_table_body += \'<th width="20%" class="text-right">Options</th></tr></thead>\';
					featured_table_body += \'<tbody id="ins_featured_plugins_themes">\';
					
					for(var x in resp.plugins_themes_list){
						
						if(resp.plugins_themes_list[x]){
							var checked = (resp.plugins_themes_list[x]["activated"] == 1) ? "checked" : "";
						}else{
							checked = "";
						}
						
						if(resp.plugins_themes_list[x]["plugin_url"]){
							resp.plugins_themes_list[x]["author_url"] = resp.plugins_themes_list[x]["plugin_url"];
						}
						
						var install = resp.plugins_themes_list[x]["installed"] ? "install" : "";
						
						var desc = resp.plugins_themes_list[x]["Description"];
						
						var id = resp.plugins_themes_list[x]["slug"];
						
						featured_table_body += "<tr>";
						
						featured_table_body += "<td style=\"text-align:left; padding-left:15px;\"><img src="+resp.plugins_themes_list[x]["plugin_img"]+" width=\"30px\" height=\"30px\"/></td>";
						
						featured_table_body += "<td style=\"text-align:left; padding-left:15px;\">"+resp.plugins_themes_list[x]["Name"]+softaculous_is_pro_text+"<span class=\"sai_exp\" style=\"margin-left:4px;\">"+desc+"</span> <br>"+ (resp.plugins_themes_list[x]["slug"] == "softaculous-pro" && install ? (typeof resp.userins.softaculous_pro_license !== "undefined" && resp.userins.softaculous_pro_license !== null ? resp.userins.softaculous_pro_license : "") : "") +"</td>";

						featured_table_body += "<td style=\"text-align:center;\"><a href=\""+resp.plugins_themes_list[x]["author_url"]+"\" style=\"text-decoration:none;\" target=\"_blank\"><i class=\"fas fa-external-link-alt px-2\" aria-hidden=\"true\"></a></td>";
						
						var installed = install ? "<i class=\"fas fa-check fa-1x mr-3\" style=\"cursor:pointer;color:green;\" title=\"Installed\"></i>" : "<button class=\"btn install_fp fa-x mx-2\" id="+id+" style=\"float:none;border:1px solid #B5B9BD;padding: 0.1em 0.5em;\"><i class=\"fas fa-download\" style=\"color:#0d47a1;display:inline;font-size:0.8em;\" title=\"Click to Install\"></i>&nbsp;<span style=\"font-size:13px;\">'.$l['install'].'</span></button>";
						
						featured_table_body += "<td class=\"td text-right\">"+installed+"</td>";
						
						featured_table_body += "</tr>";
						
					}
					
					featured_table_body += "</tbody></table>";
					
					featured_table_body += "<div class=\"alert alert-info m-2\">'.(softaculous_is_pro() ? addslashes($l['featured_plugins_info_pro']) : $l['featured_plugins_info_free']).'</div>";
					
					div_element.removeClass("potloader");
					div_element.html(featured_table_body);
					
					new_theme_funcs_init();
					
				}
				
		});
	}
	
	function installed_pot_modal(current_insid){
		
		var themes_table_body = "";
		var csrf_token = $("#csrf_token").val();
		var is_pot = $("#plugin_or_theme").val();
		var success = $("#pot_modal #success");
		var error_div = $("#pot_modal #error_handler");
		var error_ul_div = $("#pot_modal #ul_error_handler");
		var div_element = $("#pot_modal #installed_plugins_themes");
		
		div_element.empty();
		//Show Plugins or themes
		if(is_pot == "themes" || is_pot == "plugins"){
			success.hide();
			error_div.hide();
			error_ul_div.empty();
			$.ajax({
				type: "POST",
				data: {
					"csrf_token": csrf_token,
					"insid": current_insid,
					"type": is_pot,
					"list": 1,
				},
				url: "'.$globals['index'].'act=wordpress&api=json",
				beforeSend: function(){
					div_element.addClass("potloader");
				},
				success: function(data){
					
					var resp = JSON.parse(data.trim());
					
					if(is_pot == "plugins"){
						resp.plugins_themes_list = resp.plugins_list;
						delete resp.plugins_list;
					}else{
						resp.plugins_themes_list = resp.themes_list;
						delete resp.themes_list;
					}
					
					if(!resp.plugins_themes_list){
						error_ul_div.empty();
						if(resp.error){
							for (x in resp.error) {
								error_ul_div.append("<li>"+resp.error[x]+"</li>");
							}
						}else{
							error_ul_div.append("<li>'.$l['fail_fetch_list'].'</li>");
						}
						error_ul_div.show();
						error_div.show();
					}else{
						// Table Header
						themes_table_body += \'<table class="table table-hover datatable" id="table" style="font-size:13px;">\';
						themes_table_body += \'<thead class="sai_head2"><tr>\';
						themes_table_body += \'<th class="no-sorting">'.$l['plugins_themes_list_name'].'</th>\';
						themes_table_body += \'<th width="10%" class="no-sorting">'.$l['plugins_themes_list_version'].'</th>\';
						themes_table_body += \'<th width="10%" class="no-sorting">'.$l['plugins_themes_list_status'].'</th>\';
						themes_table_body += \'<th width="10%" class="no-sorting">'.$l['plugins_themes_delete'].'</th></tr></thead>\';
						themes_table_body += \'<tbody id="installed_plugins_themes_list">\';
						for (x in resp.plugins_themes_list) {
							
							//check if plugins is undefined
							if(is_pot == "plugins" && resp.plugins_themes_list[x]["Plugin Name"] == undefined){
								themes_table_body += "";
								
							}else{
								var checked = "checked";
								if(!resp.plugins_themes_list[x]["activated"]){
									checked = "";
								}
								themes_table_body += "<tr>";
								
								var desc = resp.plugins_themes_list[x]["Description"] !== undefined ? resp.plugins_themes_list[x]["Description"] : "";
								
								if(desc.length > 220){
									desc = desc.substring(0, 220)+"...";
								}
								
								// Name
								var name = (is_pot == "plugins" ? resp.plugins_themes_list[x]["Plugin Name"] : resp.plugins_themes_list[x]["Theme Name"]);
								
								themes_table_body += "<td>"+name+" "+((!desc.trim()) ? "" : "<span class=\"sai_exp\" style=\"margin-left:4px;\">"+desc+"</span>")+"</td>";
								
								//upgrade
								var new_version = resp.plugins_themes_list[x]["new_version"] ? \'<i class="fas fa-sync-alt px-1 sai_icons upgrade_plugin_theme someclass" style="color:#1565C0; font-size:1em;cursor:pointer;" title="'.$l['upd_to'].' \'+resp.plugins_themes_list[x]["new_version"]+\'" new_version="\'+resp.plugins_themes_list[x]["new_version"]+\'" id="\'+x+\'"></i>\' : "";
								
								themes_table_body += "<td style=\"text-align:left; padding-left:15px;\">"+resp.plugins_themes_list[x]["Version"]+" "+new_version+"</td>";
								
								themes_table_body += "<td style=\"text-align:center;\"><label class=\"switch\"><input type=\"checkbox\" id="+current_insid+"_"+x+" name=\""+name+"\" class=\"toggle_plugin_theme\" "+checked+"><div class=\"slider round\"></div></label></td>";
								
								themes_table_body += "<td align=\"center\"><i class=\"fas fa-trash-alt sai_icons remove_plugin_theme\" id="+current_insid+"_"+x+" style=\"cursor:pointer;color:red;\"></i></td>";
								
								themes_table_body += "</tr>";
							}
						}
					}

					themes_table_body += "</tbody></table>";
					div_element.removeClass("potloader");
					div_element.html(themes_table_body);
					$(".datatable").DataTable({
						language: {
							"decimal":        "",
							"emptyTable":     "'.$l['dt_emptyTable'].'",
							"info":           "'.$l['dt_info'].'",
							"infoEmpty":      "'.$l['dt_infoEmpty'].'",
							"infoFiltered":   "'.$l['dt_infoFiltered'].'",
							"infoPostFix":    "",
							"thousands":      ",",
							"lengthMenu":     "'.$l['dt_lengthMenu'].'",
							"loadingRecords": "'.$l['dt_loadingRecords'].'",
							"processing":     "'.$l['dt_processing'].'",
							"search":         "'.$l['dt_search'].'",
							"zeroRecords":    "'.$l['dt_zeroRecords'].'",
							"paginate": {
								"first":      "'.$l['dt_first'].'",
								"last":       "'.$l['dt_last'].'",
								"next":       "'.$l['dt_next'].'",
								"previous":   "'.$l['dt_previous'].'"
							},
							"aria": {
								"sortAscending":  ": '.$l['dt_sortAscending'].'",
								"sortDescending": ": '.$l['dt_sortDescending'].'"
							}
						}
					});
					new_theme_funcs_init();
				}
			});
		}
	}
	
	function enable_disable_pot(e){
		
		var id = e.attr("id");
		var value = e.is(":checked");
		var csrf_token = $("#csrf_token").val();
		var is_pot = $("#plugin_or_theme").val();
		var current_insid = id.match(/\d+_\d+/)+"";
		var slug = id.replace(current_insid+"_", "");
		var success = $("#pot_modal #success");
		var error_div = $("#pot_modal #error_handler");
		var error_ul_div = $("#pot_modal #ul_error_handler");
		var loading_icon = $("#pot_modal #loading");
		success.hide();
		error_div.hide();
		error_ul_div.empty();
		
		var post_params = {
			"type": is_pot,
			"insid": current_insid,
			"slug": slug,
			"csrf_token": csrf_token
		};
		
		// Do we have to activate or deactivate ? 
		if(value == true){
			post_params["activate"] = 1;
		}else{
			post_params["deactivate"] = 1;
		}
		
		$.ajax({
			type: "POST",
			data: post_params,
			url: "'.$globals['index'].'act=wordpress&api=json",
			beforeSend: function(){
				loading_icon.show();
			},
			success: function(data){
				var resp = JSON.parse(data.trim());
					if(!resp.done){
						error_ul_div.empty();
						if(resp.error){
							for (x in resp.error) {
								error_ul_div.append("<li>"+resp.error[x]+"</li>");
							}
							//revert back the checkbox
							setTimeout(function(){
								e.prop("checked", !value);
								if(is_pot === "plugins"){
									if(value){
										bootstrapgrowl("'.$l['plugin_activation_failed'].'", "danger");
									}else{
										bootstrapgrowl("'.$l['plugin_deactivation_failed'].'", "danger");
									}
								}else if(is_pot === "themes"){
									if(value){
										bootstrapgrowl("'.$l['theme_activation_failed'].'", "danger");
									}else{
										bootstrapgrowl("'.$l['theme_deactivation_failed'].'", "danger");
									}	
								}
							}, 500);
						}
						error_ul_div.show();
						error_div.show();
					}else{
						var status = "";
						success.show();
						if(is_pot == "plugins"){
							status = "'.$l['plugin_activated'].'";
							if(!value){
								status = "'.$l['plugin_deactivated'].'";
							}
						}
						if(is_pot == "themes"){
						
							//update the screenshot
							update_screenshot = 1;
							
							$("#pot_modal .toggle_plugin_theme").not(e).prop("checked", false);
							status = "'.$l['theme_activated'].'";
						}
						success.text(status);
						bootstrapgrowl(status, "success");
					}
					loading_icon.hide();
			}
		});
	}
	
	function remove_pot(e){
		var id = e.attr("id");
		var csrf_token = $("#csrf_token").val();
		var is_pot = $("#plugin_or_theme").val();
		var current_insid = id.match(/\d+_\d+/)+"";
		var slug = id.replace(current_insid+"_", "");
		var success = $("#pot_modal #success");
		var error_div = $("#pot_modal #error_handler");
		var error_ul_div = $("#pot_modal #ul_error_handler");
		var loading_icon = $("#pot_modal #loading");
		
		//hide the errors
		success.hide();
		error_div.hide();
		error_ul_div.empty();
		
		if(confirm("Are you sure you wish to remove the "+is_pot.replace("s", ""))){
			$.ajax({
				url: "'.$globals['index'].'act=wordpress&api=json",
				type: "POST",
				data: {
					"delete": 1,
					"type": is_pot,
					"slug": slug,
					"csrf_token": csrf_token,
					"insid": current_insid
				},
				beforeSend: function(){
					loading_icon.show();
				},
				success: function(data){
					var resp = JSON.parse(data.trim());
					if(!resp.done){
						error_ul_div.empty();
						if(resp.error){
							for (x in resp.error) {
								error_ul_div.append("<li>"+resp.error[x]+"</li>");
							}
						}
						error_div.show();
						error_ul_div.show();
						if(is_pot === "plugins"){
							bootstrapgrowl("'.$l['plugin_deletion_failed'].'", "danger");
						}
						if(is_pot === "themes"){
							bootstrapgrowl("'.$l['theme_deletion_failed'].'", "danger");
						}
					}else{
						e.closest("tr").hide();
						success.show();
						if(is_pot === "plugins"){
							success.text("'.$l['plugin_deletion_success'].'");
							bootstrapgrowl("'.$l['plugin_deletion_success'].'", "success");
						}
						if(is_pot === "themes"){
							success.text("'.$l['theme_deletion_success'].'");
							bootstrapgrowl("'.$l['theme_deletion_success'].'", "success");
						}
					}
					loading_icon.hide();
				}
			});
		}
	}
	
	function search_pot_modal(userInput){
		var search_pots_table = "";
		var search_string = userInput.val();
		var csrf_token = $("#csrf_token").val();
		var is_pot = $("#plugin_or_theme").val();
		var success = $("#pot_modal #success");
		var error_div = $("#pot_modal #error_handler");
		var error_ul_div = $("#pot_modal #ul_error_handler");
		var div_element = $("#pot_modal #pots_result");
		
		var data_title = {
			"install_plugins" : "'.$l['install_plugin'].'",
			"installed_plugins" : "'.$l['installed_plugin'].'",
			"incompatible_plugins": "'.$l['incompatible_plugin'].'",
			"install_themes": "'.$l['install_theme'].'",
			"installed_themes": "'.$l['installed_theme'].'",
			"incompatible_themes": "'.$l['incompatible_theme'].'",
		}
		
		// check if search string is the same or not as previous request if it is the same do not make another request and return here
		if(last_searched_pot && last_searched_pot == search_string){
			return true;
		}
		
		// Set the last searched request
		last_searched_pot = search_string;
		
		//hide the errors
		success.hide();
		error_div.hide();
		div_element.empty();
		error_ul_div.empty();
		
		if(search_string.length > 0){
			
			$.ajax({
				type: "POST",
				data: {
					"search": 1,
					"type": is_pot,
					"insid": current_insid,
					"csrf_token": csrf_token,
					"q": encodeURIComponent(search_string)
				},
				url: "'.$globals['index'].'act=wordpress&api=json",
				beforeSend: function(){
					div_element.html("");
					div_element.addClass("potloader");
				},
				success: function(data){
					if(data.length > 0){
						var resp = JSON.parse(data.trim());
						if(resp.error){
							error_div.empty();
							if(resp.error){
								for (x in resp.error) {
									error_div.append("<li>"+resp.error[x]+"</li>");
								}
							}else{
									error_div.append("<li>'.$l['some_error_occurred'].'</li>");
							}
							error_div.show();
							error_ul_div.show();
						}
					
						if(is_pot == "plugins"){
							resp.plugins_themes_list = resp.plugins_list;
							delete resp.plugins_list;
						}else{
							resp.plugins_themes_list = resp.themes_list;
							delete resp.themes_list;
						}
						
						if(resp.plugins_themes_list){
							search_pots_table += \'<table class="table table-hover mt-4" id="table" style="font-size:13px;">\';
							search_pots_table += \'<thead class="sai_head2">\';
							search_pots_table += \'<tr><th></th>\';
							search_pots_table += \'<th>'.$l['plugins_themes_list_name'].'</th>\';
							search_pots_table += \'<th style="text-align:center;">'.$l['plugins_themes_list_version'].'</th>\';
							search_pots_table += \'<th style="text-align:center;">'.$l['plugins_themes_list_rating'].'</th>\';
							search_pots_table += \'<th style="text-align:center;">'.$l['plugins_themes_list_link'].'</th>\';
							search_pots_table += \'<th></th></tr></thead>\';
							search_pots_table += \'<tbody id="search_plugins_themes_result">\';
							for(x in resp.plugins_themes_list){
								search_pots_table += "<tr>";
								//icon
								if(resp.plugins_themes_list[x]["icons"] != undefined){
									search_pots_table += "<td><img src=\'"+resp.plugins_themes_list[x]["icons"]["1x"]+"\' alt=\"loading\" width=\"28\" height=\"28\"></td>";
								}else{
									search_pots_table += "<td></td>";
								}
								//name
								search_pots_table += "<td>"+resp.plugins_themes_list[x]["name"]+"<br />"+(resp.plugins_themes_list[x]["author"] !=undefined ? \'<i> '.$l['plugins_themes_list_author'].': \'+resp.plugins_themes_list[x]["author"]+\'</i>\' : "")+"</td>";
								//version
								search_pots_table += "<td style=\"text-align:center;\" >"+resp.plugins_themes_list[x]["version"]+"</td>";
								//Rating
								search_pots_table += "<td style=\"text-align:center;\">"+resp.plugins_themes_list[x]["rating"]+"</td>";
								//link
								search_pots_table += "<td style=\"text-align:center;\"><a href=\"https://wordpress.org/"+is_pot+"/"+resp.plugins_themes_list[x]["slug"]+"\" style=\"text-decoration:none;\" target=\"_blank\"><i class=\"fas fa-external-link-alt px-2\" aria-hidden=\"true\"></a></td>";
								
								//install button class
								var install = resp.plugins_themes_list[x]["installed"] ? "installed" : "install";
								
								var install_btn = resp.plugins_themes_list[x]["installed"] ? "'.$l['installed'].'" : "'.$l['install'].'";
								
								var install_btn_state = resp.plugins_themes_list[x]["incompatible"] ? "disabled" : "";
								
								var install_btn_exp = "";
								if(install == "installed"){
									install_btn_exp = data_title["installed_"+is_pot]
								}else if(install_btn_state == "disabled"){
									install_btn_exp = data_title["incompatible_"+is_pot]
								}else{
									install_btn_exp = data_title["install_"+is_pot]
								}
								
								search_pots_table += "<td style=\"text-align:center;\"><button class=\"form-btn form-btn-action mx-1 "+install_btn_state+" "+install+"\" name=\""+resp.plugins_themes_list[x]["slug"]+"\" data-toggle=\"tooltip\" data-html=\"true\" title data-original-title=\""+install_btn_exp+"\" id=\""+resp.plugins_themes_list[x]["slug"]+"\" "+install_btn_state+">"+install_btn+"</button></td>";
								
								search_pots_table += "</tr>";
							}

							search_pots_table += "</tbody></table>";

							div_element.removeClass("potloader");
							div_element.html(search_pots_table);
						}
					}
				}
			});
		}
	}
	
	function install_pot_on_button_click(btn){
		btn.html("'.$l['installing'].'...");
		btn.prop("disabled", false);

		var slug = btn.attr("id");
		var csrf_token = $("#csrf_token").val();
		var is_pot = $("#plugin_or_theme").val();
		var success = $("#pot_modal #success");
		var error_div = $("#pot_modal #error_handler");
		var error_ul_div = $("#pot_modal #ul_error_handler");
		var loading_icon = $("#pot_modal #loading");
		
		loading_icon.show();
		//hide the errors
		success.hide();
		error_div.hide();
		error_ul_div.empty();

		if(is_pot == "themes" || is_pot == "plugins"){
			$.ajax({
				type: "POST",
				data: {
					slug : slug,
					install : 1,
					type : is_pot,
					insid: current_insid,
					csrf_token : csrf_token,
				},
				timeout: 0,
				url: "'.$globals['index'].'act=wordpress&api=json",
				beforeSend: function(){
					loading_icon.show();
				},
				success: function(data){
					var resp = JSON.parse(data.trim());
					if(!resp.done){
						error_ul_div.empty();
						if(resp.error){
							for (x in resp.error) {
								error_ul_div.append("<li>"+resp.error[x]+"</li>");
							}
						}
						error_ul_div.show();
						error_div.show();
					}else{
						success.show();
						if(is_pot == "plugins"){
							success.text("'.$l['install_plugins'].'")
						}else{
							success.text("'.$l['install_themes'].'")
							
							//update the screenshot
							update_screenshot = 1;
						}
						btn.removeClass("install");
						btn.text("'.$l['installed'].'");
						bootstrapgrowl("'.$l['installed'].'", "success");
					}
					loading_icon.hide();
				}
			});
		}
	}
	
	//install feature plugins
	function install_fp_on_button_click(btn){
		
		//btn.html("'.$l['installing'].'...");
		btn.html("<img src=\"'.$theme['images'].'load.gif\" width=\"20\">");
		btn.prop("disabled", false);
		btn.css("border", "none");
	
		var slug_ = btn.attr("id");
		var slug = slug_.charAt(0).toLowerCase() + slug_.slice(1);
		
		var csrf_token = $("#csrf_token").val();
		var is_pot = $("#plugin_or_theme").val();
		var success = $("#pot_modal #success");
		var error_div = $("#pot_modal #error_handler");
		var error_ul_div = $("#pot_modal #ul_error_handler");
		var loading_icon = $("#pot_modal #loading");
		
		//loading_icon.show();
		//hide the errors
		success.hide();
		error_div.hide();
		error_ul_div.empty();
		
		if(is_pot == "themes" || is_pot == "plugins"){
			$.ajax({
				type: "POST",
				data: {
					slug : slug,
					install : 1,
					type : is_pot,
					insid: current_insid,
					featured: 1,
					csrf_token : csrf_token,
				},
				timeout: 0,
				url: "'.$globals['index'].'act=wordpress&api=json",
				beforeSend: function(){
					//loading_icon.show();
				},
				success: function(data){
					var resp = JSON.parse(data.trim());
					
					if(!resp.done){
						error_ul_div.empty();
						if(resp.error){
							for (x in resp.error) {
								error_ul_div.append("<li>"+resp.error[x]+"</li>");
							}
						}
						error_ul_div.show();
						error_div.show();
					}else{
						success.show();
						if(is_pot == "plugins"){
							success.text("'.$l['install_plugins'].'")
						}else{
							success.text("'.$l['install_themes'].'")
							
							//update the screenshot
							update_screenshot = 1;
						}
						btn.removeClass("install_fp");
						
						btn.html("<i class=\"fas fa-check fa-lg\" style=\"cursor:pointer;color:green;\" title=\"Installed\"></i>");
						bootstrapgrowl("'.$l['installed'].'", "success");
						
					}
					loading_icon.hide();
				}
			});
		}
	}
	
	//install feature plugins from softaculous wordPress manager
	function install_featured_plugins(btn){
		
		btn.innerHTML = "<i class=\"fas fa-spinner fa-spin fa-1x\"></i>";
		btn.style.border = "none";
		
		var field = document.getElementsByName("insids[]");
		var csrf_token = $("#csrf_token").val();
		var slug = btn.getAttribute("id");
		var is_pot = "plugins";
		insids = new Array();
		
		var c = 0;
		for(i = 0; i < field.length; i++){
			if(field[i].checked == true){
				insids[c] = field[i].value;
				c++;
			}
		}
		//console.log(insids);
		
		$.ajax({
			type: "POST",
			data: {
				slug : slug,
				install : 1,
				type : is_pot,
				insids: insids,
				featured: 1,
				csrf_token : csrf_token,
			},
			timeout: 0,
			url: "'.$globals['index'].'act=wordpress&api=json",
			beforeSend: function(){
				//loading_icon.show();
			},
			success: function(data){
				var resp = JSON.parse(data.trim());
				if(!resp.done){
					if(resp.error){
						for (x in resp.error) {
							alert(resp.error);
						}
					}
				}else{
					btn.onclick = "";
					btn.innerHTML = "<i class=\"fas fa-check fa-lg\" style=\"cursor:pointer;color:green;\" title=\"Installed\"></i>"; 
					bootstrapgrowl("'.$l['plugin_upload_activate_success'].'", "success");
				}
			}
		});
		
	}
	
	function add_user(btn){
		
		var csrf_token = $("#csrf_token").val();
		
		var current_insid = btn.attr("insid");
		var success = $("#newModal").find("#add_users_success");
		
		var error_div = $("#modal_ul_error_handler");
		$("#modal_error_handler").hide();
		error_div.parent().hide();
		success.hide();
		
		var values = {};
		values["insid"] = current_insid;
		values["csrf_token"] = csrf_token;
		var inputs = $("#add_user_form :input");
		
		inputs.each(function(){
			values[this.name] = $(this).val();
		})
		
		$.ajax({
			type: "POST",
			data: values,
			url: "'.$globals['index'].'act=wordpress&api=json",
			beforeSend: function(){
				$(".manage_users_loader").html(\'<img src="'.$theme['images'].'progress.gif" alt="loading" id="loading" />\');
			},
			success: function(data){
				$(".manage_users_loader").html("");
				var resp = JSON.parse(data.trim());
				
				//Scroll to Top
				$("#newModal").scrollTop(0); // For Safari
  
				if(resp.error){
					error_div.empty();
					for (x in resp.error) {
						error_div.append("<li>"+resp.error[x]+"</li>");
					}
					error_div.show();
					$("#modal_error_handler").show();
				}else{
					success.show();
					success.text("'.$l['success_add_user'].'");
				}
					
			},
			error: function(error){
				error_div.empty();
				$(".manage_users_loader").html("");
				//Scroll to Top
				$("#newModal").scrollTop(0); // For Safari
				error_div.append("<li>'.$l['some_error_occurred'].'</li>");
				error_div.show();
				$("#modal_error_handler").show();
			}
		});
	}
	
	function remove_error(){
		var error_div = $("#modal_ul_error_handler");
		$("#modal_error_handler").hide();
		error_div.parent().hide();
		var success = $("#newModal").find("#add_users_success");
		success.hide();
	}
	
	function upgrade_plugin_themes(e){
		e.addClass("fa-spin");
		
		var slugs = [e.attr("id")];
		var csrf_token = $("#csrf_token").val();
		var is_pot = $("#plugin_or_theme").val();
		var success = $("#pot_modal #success");
		var error_div = $("#pot_modal #error_handler");
		var error_ul_div = $("#pot_modal #ul_error_handler");
		var loading_icon = $("#pot_modal #loading");
		
		//hide the errors
		success.hide();
		error_div.hide();
		error_ul_div.empty();
		
		$.ajax({
			url: "'.$globals['index'].'act=wordpress&api=json",
			type: "POST",
			data: {
				"slugs": slugs,
				"upgrade": 1,
				"type": is_pot,
				"insid": current_insid,
				"csrf_token": csrf_token
			},
			beforeSend: function(){
				loading_icon.show();
			},
			success: function(data){
				var resp = JSON.parse(data.trim());
				if(!resp.done){
					error_ul_div.empty();
					if(resp.error){
						for (x in resp.error) {
							error_ul_div.append("<li>"+resp.error[x]+"</li>");
						}
					}
					error_div.show();
					error_ul_div.show();
					if(is_pot === "plugins"){
						bootstrapgrowl("'.$l['plugin_upgrade_failed'].'", "danger");
					}
					if(is_pot === "themes"){
						bootstrapgrowl("'.$l['theme_upgrade_failed'].'", "danger");
					}
					
					e.removeClass("fa-spin");
				}else{
					success.show();
					if(is_pot === "plugins"){
						success.text("'.$l['plugin_upgrade_success'].'");
						bootstrapgrowl("'.$l['plugin_upgrade_success'].'", "success");
					}
					if(is_pot === "themes"){
						success.text("'.$l['theme_upgrade_success'].'");
						bootstrapgrowl("'.$l['theme_upgrade_success'].'", "success");
					}
					e.hide(1000);
				}
				e.parent().html(e.attr("new_version"));
				loading_icon.hide();
			}
		});
	}
		
	function submit_custom(response){
		var is_pot = $("#plugin_or_theme").val();
		var success = $("#pot_modal #success");
		var error_div = $("#pot_modal #error_handler");
		var error_ul_div = $("#pot_modal #ul_error_handler");
		var resp = JSON.parse(response.trim());
		
		if(!resp.done){
			error_ul_div.empty();
			if(resp.error){
				for (x in resp.error) {
					error_ul_div.append("<li>"+resp.error[x]+"</li>");
				}
			}
			error_ul_div.show();
			error_div.show();
		}else{
			success.show("slow");
			
			if(is_pot == "plugins"){
				
				var success_txt = "'.$l['plugin_upload_success'].'";
				
				if($("#activate_pot").is(":checked")){
					var success_txt = "'.$l['plugin_upload_activate_success'].'";
				}
				
			}else{
				var success_txt = "'.$l['theme_upload_success'].'";
				
				if($("#activate_pot").is(":checked")){
					var success_txt = "'.$l['theme_upload_activate_success'].'";
					update_screenshot = 1;
				}
			}
			
			success.text(success_txt);
		}
	}
	
	Dropzone.autoDiscover = false;
	
	var current_insid = "";
	var show_insid = "'.(!empty($insid) ? $insid : '').'";
	
	var action_name = null;
	var button_insid = null;
	var start_process = null;
	var url = null;
	var close_message = false;
	var update_screenshot = null;
	
	var frame_headings = {
		"install": "'.$l['install'].'",
		"upgrade": "'.$l['upgrade'].'",
		"scan": "'.$l['scan'].'",
		"clone": "'.$l['clone'].'",
		"staging": "'.$l['staging'].'",
		"pushtolive": "'.$l['pushtolive'].'",
		"backup": "'.$l['backup'].'",
		"restore": "'.$l['restore'].'",
		"remove": "'.$l['remove'].'",
		"uninstall": "'.$l['uninstall'].'"
	}
	
	var pot_modal = $("#pot_modal").clone();
	var last_searched_pot = "";
	
	// To check as to whether the user is done typing
	var typingTimer; //timer identifier
	var doneTypingInterval = 1000;
	

	function multiple_check(){
		$("#check_all_ins").on("click", function(event){
			if(this.checked == true){
				$(".check_all_ins").prop("checked", true);
			}else{
				$(".check_all_ins").prop("checked", false);
			}
		});

		$("#check_all_disabled").on("click", function(event){
			if(this.checked == true){
				$(".check_all_disabled").prop("checked", true);
			}else{
				$(".check_all_disabled").prop("checked", false);
			}
		});
	}
	
	function multiple_check2(){
		$("#check_all_ins2").on("click", function(event){
			if(this.checked == true){
				$(".check_all_ins2").prop("checked", true);
			}else{
				$(".check_all_ins2").prop("checked", false);
			}
		});

		$("#check_all_disabled2").on("click", function(event){
			if(this.checked == true){
				$(".check_all_disabled2").prop("checked", true);
			}else{
				$(".check_all_disabled2").prop("checked", false);
			}
		});
	}

	$(document).ready(function(){
		multiple_check();
		multiple_check2();

		// All (critical and recommended) button action
		$("#secure_wp_all").on("click", function(event){
			$(".wp_secure_option").prop("checked", true);
		});

		// Critical only button action
		$("#secure_wp_cri").on("click", function(event){
			$(".wp_secure_option").prop("checked",false);   
			$("#change_admin_username").prop("checked", true);
			$("#no_file_dir_access").prop("checked", true);
			$("#block_sensitive_files").prop("checked", true);
			$("#block_dir_browsing").prop("checked", true);
		});

		'.(method_exists('softpanel','wordpress_theme_ready') ? $softpanel->wordpress_theme_ready() : "").'
		
		$(".modal").on("shown.bs.modal", function(event){
			// The functions in the try/catch statements are currently only used for WHMCS\'s WordPress Manager
			
			try{
				// Get the position of the WHMCS wordpress manager iframe body in pixels from the top of the WHMCS clientarea page i.e the distance between the beginning of the whmcs clientarea page to the wordpress manager iframe
				var iframe_body_content_box = parent.$("#wp_manager_body_content_box").offset().top;
				
				// Get the current scroll position of the user
				var outer_iframe_scrollY = window.top.scrollY;
				var modal_position = 0;
				
				//Only move the modal if the user passes the iframe body
				if(outer_iframe_scrollY > iframe_body_content_box){
					
					//Get the accurate padding pixels for the modal and add 10 extra pixels for styling
					var modal_position = outer_iframe_scrollY - iframe_body_content_box + 10;
					$("#"+this.id).css("padding-top", modal_position);
				}
				
				// Run the function outside the iframe in order to resize the iframe based on the modal\'s height 
				parent.modalOpenResizeIframe(this.id, modal_position);
				
			}catch(e){}
		});
		  
		$(".modal").on("hide.bs.modal", function(){
			try{
				//The functions in the try/catch statements are currently only used for WHMCS\'s WordPress Manager
				parent.modalCloseResizeIframe();
				$("#"+this.id).css("padding-top", 0);
			}catch(e){}
		});  
  
		$(".form-section").hide();
		
		if(show_insid){
			$("#ins_form_"+show_insid+"").show();
			show_screenshot(show_insid);
			try{
				document.getElementById("ins_"+show_insid).scrollIntoView({ behavior: "smooth" });
			}catch (error) {
				
			}
		}
		
		$(".tiptip").tipTip({delay:0});
		
		shift_check_all("shift_select_ins");
		
		$(\'input[name="softurl"]\').on("change textInput input", function(){
			var selected_ins = this.id.replace("softurl_", "");
			$("#details_"+selected_ins).find(\'input[name="save_site_info"]\').show();
		});
		
		$(\'input[name="site_name"]\').on("change textInput input", function(){
			var selected_ins = this.id.replace("site_name_", "");
			$("#details_"+selected_ins).find(\'input[name="save_site_info"]\').show();
		});
		
		$(\'input[name="save_site_info"]\').click(function(){
			save_site_info($(this));
		});
		
		$(\'input[name="blog_public"]\').click(function(){
			save_single_info_radio($(this));
		});
		
		$(\'input[name="auto_upgrade_plugins"]\').click(function(){
			save_single_info_radio($(this));
		});
		
		$(\'input[name="auto_upgrade_themes"]\').click(function(){
			save_single_info_radio($(this));
		});
		
		$(\'select[name="auto_upgrade_core"]\').change(function(){
			save_single_info_radio($(this));
		});
		
		$(\'input[name="disable_wp_cron"]\').click(function(){
			save_single_info_radio($(this));
		});
		
		$(\'input[name="wp_debug"]\').click(function(){
			save_single_info_radio($(this));
		});
		
		$(document)
		.on("click", "#save_admin_info", function(){
			save_admin_info($(this));
		})
		
		//open Plugin Theme Modal
		.on("click", ".manage_plugins, .manage_themes", function(){
			show_pot_modal($(this));
		})

		//open Security Measure Modal
		.on("click", ".secure_wp", function(){
			show_secure_wp_modal($(this));
		})
		
		//open Security Measure Modal
		.on("click", ".featured_plugins", function(){
			show_featured_plugins_modal($(this));
		})
		
		//to activate and deactivate plugins or themes
		.on("click", ".toggle_plugin_theme", function(){
			enable_disable_pot($(this));
		})
		
		//to remove plugins or themes
		.on("click", ".remove_plugin_theme", function(){
			remove_pot($(this));
		})
		
		//install plugin or theme
		.on("click", ".install", function(){
			install_pot_on_button_click($(this));
		})
		
		//install feature plugin
		.on("click", ".install_fp", function(){
			install_fp_on_button_click($(this));
		})
		
		//Add WordPress User
		.on("click", "#add_user", function(){
			add_user($(this));
		})
		
		// on user input 
		.on("keyup", "#search_pots", function(){
			if($(this).val().length >= 2){
				clearTimeout(typingTimer);
				typingTimer = setTimeout(function(){search_pot_modal($("#search_pots"))}, doneTypingInterval);
			}
		})
		
		.on("keydown", "#search_pots", function(){
			if($(this).val().length >= 2){
				clearTimeout(typingTimer);
			}
		})
		
		.on("hide.bs.modal", "#pot_modal", function(){
			try{
				//The functions in the try/catch statements are currently only used for WHMCS\'s WordPress Manager
				parent.modalCloseResizeIframe();
				$("#pot_modal").css("padding-top", 0);
			}catch(e){}
		})
		
		.on("hidden.bs.modal", "#pot_modal", function(){
			$("#pot_modal").remove();
			$(".wp-action").append(pot_modal.clone());
			
			//update the screenshot
			show_screenshot(current_insid);
		})
		
		// on click installed tab
		.on("click", "#pot_installed_tab", function(){
			installed_pot_modal(current_insid);
		})
		
		.on("show.bs.tab", "#pot_installed_tab, #pot_add_tab, #pot_upload_tab", function(){
			var success = $("#pot_modal #success");
			var error_div = $("#pot_modal #error_handler");
			var error_ul_div = $("#pot_modal #ul_error_handler");
			var loading_icon = $("#pot_modal #loading");

			//hide the errors
			success.hide("slow");
			error_div.hide("slow");
			error_ul_div.empty();
		})
		
		.on("shown.bs.modal", "#pot_modal", function(event){
			//The functions in the try/catch statements are currently only used for WHMCS\'s WordPress Manager
			try{
				//Get the position of the WHMCS wordpress manager iframe body in pixels from the top of the WHMCS clientarea page i.e the distance between the beginning of the whmcs clientarea page to the wordpress manager iframe
				var iframe_body_content_box = parent.$("#wp_manager_body_content_box").offset().top;
				
				//Get the current scroll position of the user
				var iframe_scrollY = window.top.scrollY;
				var modal_position = 0;
				
				//Only move the modal if the user passes the iframe body
				if(iframe_scrollY > iframe_body_content_box){
					
					//Get the accurate padding pixels for the modal and add 10 extra pixels for styling
					var modal_position = iframe_scrollY - iframe_body_content_box + 10;
					$("#pot_modal").css("padding-top", modal_position);
				}
				
				//Run the function outside the iframe in order to resize the iframe based on the modal\'s height 
				parent.modalOpenResizeIframe("pot_modal", modal_position);
			}catch(e){}
		})
		
		.on("click", ".upgrade_plugin_theme", function(){
			upgrade_plugin_themes($(this));
		})
		
		if(screen.width < 396){
			$(\'input[type="text"]\').attr("size", 20);
		}else if(screen.width < 1366){
			$(\'input[type="text"]\').attr("size", 30);
		}
		
		// Revert the size for search input as it messes up with the left panel on some browsers like Safari
		$("#inputString").attr("size", 12);
		
		// on anchor tag click open modal
		$(".open-in-frame").on("click", function(e){
			e.preventDefault();
			show_iframe_modal($(this));
		});
	});
	
	// ]]></script>
	';
	softfooter();

}

?>