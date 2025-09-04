<?php

add_action('plugins_loaded', 'pfx_softwp_load_plugin');

// The function that will be called when the plugin is loaded
function pfx_softwp_load_plugin(){

	$pfx_templates_softwp_upgrade = get_option('pfx_templates_softwp_upgrade', 0);

	if(empty($pfx_templates_softwp_upgrade)){
		pfx_templates_check_softaculous();
	}
	
}

// Checks if softaculous is installed on the server.
function pfx_templates_check_softaculous(){
	
	$pfx_templates_softwp_upgrade = -1;
	
	$softwp_lic = get_option('softaculous_pro_license', []);
	
	if(empty($softwp_lic['license']) || !preg_match('/^softwp/is', $softwp_lic['license'])){
		update_option('pfx_templates_softwp_upgrade', $pfx_templates_softwp_upgrade);
		return false;
	}
	
	/* $spaths = array(
				'/usr/local',
				'/usr/local/cpanel/whostmgr/docroot/cgi',
				'/usr/local/directadmin/plugins',
				'/usr/local/vesta'
			);
	
	// Checking if users has changed the branding of Softaculous
	$universal_file = '';
	foreach($spaths as $spath){
		if(file_exists($spath.'/softaculous/enduser/universal.php')){
			$universal_file = $spath.'/softaculous/enduser/universal.php';
		}
	}
	
	if(!empty($universal_file)){
		$universal = file_get_contents($universal_file);
	}

	if(!empty($universal)){
		// Checking if Softaculous is being whitelabeled
		preg_match('/\$globals\[["\']sn["\']\]\s.?=\s.?["\'](.*?)["\']/is', $universal, $matches);
		if(!empty($matches[1]) && preg_match('/softaculous/is', $matches[1])){
			$pfx_templates_softwp_upgrade = time();
		}
	} */
	
	$pfx_templates_softwp_upgrade = time();
	update_option('pfx_templates_softwp_upgrade', $pfx_templates_softwp_upgrade);
	
	return false;
}

add_action('admin_notices', 'pfx_templates_softwp_upgrader_notice');
add_action('wp_ajax_pfx_templates_dismiss_softwp_alert', 'pfx_templates_dismiss_softwp_alert');

function pfx_templates_softwp_upgrader_notice(){
	
	// We want to show this error to user which has sufficient privilage
	if(!current_user_can('activate_plugins')){
		return;
	}

	/*$notice_end_time = strtotime('31 March 2025');
	if(!empty($notice_end_time) && time() > $notice_end_time){
		return;
	}*/

	$softwp_upgrade = get_option('pfx_templates_softwp_upgrade', 0);

	if(empty($softwp_upgrade) || $softwp_upgrade < 0){
		return;
	}
	
	echo '<style>.pfx_templates_promo-close{float:right;text-decoration:none;margin: 5px 10px 0px 0px;}.pfx_templates_promo-close:hover{color: red;}</style>
	<div class="notice notice-warning" id="pfx_templates_softwp_notice">
		<a class="pfx_templates_promo-close" id="pfx_templates-softwp-promo-close" href="javascript:" aria-label="Dismiss Forever">
			<span class="dashicons dashicons-dismiss"></span> '.esc_html__('Dismiss Forever', 'popularfx_templates').'
		</a>
		<p>' . esc_html__('Hey, you are eligible for a Free Upgrade to Pagelayer Pro!', 'popularfx_templates').' 
		<a href="javascript:" id="pfx_templates-softwp-install-pro">' . esc_html__('Install Pagelayer Pro Now', 'popularfx_templates') . '</a>. '.esc_html__('Pagelayer Free plugin will also be updated to the latest version. For any queries contact us at', 'popularfx_templates').' <a href="mailto:support@pagelayer.com">support@pagelayer.com</a></p>
		</div>';

	wp_register_script('pfx_templates_softwp_alert', '', ['jquery'], PFX_VERSION, true);
	wp_enqueue_script('pfx_templates_softwp_alert');
	wp_add_inline_script('pfx_templates_softwp_alert', '
		jQuery("#pfx_templates-softwp-promo-close").on("click", function(){
			jQuery(this).closest("#pfx_templates_softwp_notice").slideToggle();

			var data = new Object();
			data["action"] = "pfx_templates_dismiss_softwp_alert";
			data["security"] = "'.wp_create_nonce('pfx_templates_softwp_notice').'";
			
			var admin_url = "'.admin_url().'"+"admin-ajax.php";
			jQuery.post(admin_url, data, function(response){
			});
		});');
		
	wp_add_inline_script('pfx_templates_softwp_alert', '
		jQuery("#pfx_templates-softwp-install-pro").on("click", function(){
			var pfx_progress = \'<img src="'.PFX_URL.'/images/progress.svg" width="17" style="vertical-align:middle;" />  \';
			jQuery(this).closest("#pfx_templates_softwp_notice").find("p").html(pfx_progress+"Installing Pagelayer Pro. Please do not leave this page.");
			
			var data = new Object();
			data["action"] = "pfx_templates_dismiss_softwp_alert";
			data["install-pro"] = "1";
			data["security"] = "'.wp_create_nonce('pfx_templates_softwp_notice').'";
			var pfx_softwp_notice = jQuery(this);
			var admin_url = "'.admin_url().'"+"admin-ajax.php";
			jQuery.post(admin_url, data, function(response){
				jQuery("#pfx_templates_softwp_notice").find("p").text("Pagelayer Pro has been installed and activated successfully!");
				jQuery("#pfx_templates_softwp_notice").removeClass("notice-warning").addClass("notice-success");
			});
		});');
}

function pfx_templates_dismiss_softwp_alert(){
	// Some AJAX security
	check_ajax_referer('pfx_templates_softwp_notice', 'security');

	if(!current_user_can('activate_plugins')){
		wp_die(__('Sorry, but you do not have permissions to change settings.', 'popularfx_templates'));
	}
	
	if(!empty($_REQUEST['install-pro'])){
		$softwp_lic = get_option('softaculous_pro_license', []);
		
		if(!empty($softwp_lic['license']) && preg_match('/^softwp/is', $softwp_lic['license'])){
			pfx_softwp_install_pagelayer_pro($softwp_lic['license']);
		}
	}

	update_option('pfx_templates_softwp_upgrade', (0 - time()), false);
	die('DONE');
}


// Install Pagelayer Pro	
function pfx_softwp_install_pagelayer_pro($license){
	
	global $pagelayer;
	
	// Include the necessary stuff
	include_once( ABSPATH . 'wp-admin/includes/plugin-install.php' );

	// Includes necessary for Plugin_Upgrader and Plugin_Installer_Skin
	include_once( ABSPATH . 'wp-admin/includes/file.php' );
	include_once( ABSPATH . 'wp-admin/includes/misc.php' );
	include_once( ABSPATH . 'wp-admin/includes/class-wp-upgrader.php' );
	include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

	// Filter to prevent the activate text
	add_filter('install_plugin_complete_actions', 'pfx_install_pagelayer_complete_actions', 10, 3);
	
	echo '<h2>Install Pagelayer Pro</h2>';

	$installer = new Plugin_Upgrader( new Plugin_Installer_Skin(  ) );
	$installed = $installer->install(PFX_PAGELAYER_API.'download.php?version=latest&license='.$license.'&url='.rawurlencode(site_url()));
	
	if(is_wp_error( $installed ) || empty($installed)){
		return $installed;
	}
	
	if ( !is_wp_error( $installed ) && $installed ) {
		
		wp_update_plugins();
		
		// Check if update is available
		$updates = get_site_transient('update_plugins');

		if (isset($updates->response['pagelayer/pagelayer.php'])) {
		
			// Update free plugin if necessary
			$upgrader = new Plugin_Upgrader();
			$upgraded = $upgrader->upgrade('pagelayer/pagelayer.php');
			echo 'Updating Pagelayer Free';
		
			if(!is_wp_error( $upgraded ) && $upgraded && !is_plugin_active('pagelayer/pagelayer.php')){
				echo 'Activating Pagelayer Free !';
				$installed_free = activate_plugin('pagelayer/pagelayer.php');
			}
			
		}
		
		if(!is_wp_error( $installed ) && $installed){
			echo 'Activating Pagelayer Pro !';
			$installed = activate_plugin('pagelayer-pro/pagelayer-pro.php');
		}
		
		if ( is_null($installed)) {
			$installed = true;
			echo '<div id="message" class="updated"><p>'. __('Done! Pagelayer Pro is now installed and activated.', 'popularfx_templates'). '</p></div><br />';
			echo '<br><br><b>Done! Pagelayer Pro is now installed and activated.</b>';
		}
	}
	
	return $installed;
	
}