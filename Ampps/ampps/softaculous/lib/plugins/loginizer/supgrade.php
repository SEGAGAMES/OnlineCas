<?php

add_action('plugins_loaded', 'loginizer_softwp_load_plugin');
add_action('admin_menu', 'softwp_lognizer_pro_submenu', 11);

// The function that will be called when the plugin is loaded
function loginizer_softwp_load_plugin(){

	$loginizer_softwp_upgrade = get_option('loginizer_softwp_supgrade', array('timeout' => 7, 'next_check' => 0, 'softwp_lic' => 0, 'reverified' => 1));
	
	if(empty($loginizer_softwp_upgrade['reverified'])){
		
		// If the notice is not dismissed yet
		if($loginizer_softwp_upgrade['next_check'] != 9999999999){
			$loginizer_softwp_upgrade['timeout'] = 7;
		}
		
		$loginizer_softwp_upgrade['reverified'] = 1;
		
		update_option('loginizer_softwp_supgrade', $loginizer_softwp_upgrade);
	}

	if($loginizer_softwp_upgrade['next_check'] < time()){
		loginizer_softwp_check_softaculous($loginizer_softwp_upgrade);
	}
	
}

// Checks if softaculous is installed on the server.
function loginizer_softwp_check_softaculous($loginizer_softwp_upgrade){
	
	$softwp_lic = get_option('softaculous_pro_license', []);
	
	if($loginizer_softwp_upgrade['timeout'] < 1){
		return false;
	}
	
	if(!empty($softwp_lic['license']) && preg_match('/^softwp/is', $softwp_lic['license'])){
		$loginizer_softwp_upgrade['softwp_lic'] = $softwp_lic['license'];
		
		// Do not show duplicate notice
		update_option('loginizer_softwp_upgrade', (0 - time()), false);
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
			$loginizer_softwp_upgrade = time();
		}
	} */
	
	$loginizer_softwp_upgrade['timeout'] = $loginizer_softwp_upgrade['timeout'] - 1;
	$loginizer_softwp_upgrade['next_check'] = time() + 604800;
	update_option('loginizer_softwp_supgrade', $loginizer_softwp_upgrade);
	
	return false;
}

add_action('admin_notices', 'soft_core_loginizer_softwp_upgrader_notice');
add_action('wp_ajax_soft_core_loginizer_dismiss_softwp_alert', 'soft_core_loginizer_dismiss_softwp_alert');

function soft_core_loginizer_softwp_upgrader_notice(){
	
	// We want to show this error to user which has sufficient privilage
	if(!current_user_can('activate_plugins')){
		return;
	}

	/*$notice_end_time = strtotime('31 March 2025');
	if(!empty($notice_end_time) && time() > $notice_end_time){
		return;
	}*/

	$softwp_upgrade = get_option('loginizer_softwp_supgrade', 0);

	if(empty($softwp_upgrade) || empty($softwp_upgrade['softwp_lic']) || ($softwp_upgrade['timeout'] < 1)){
		return;
	}
	
	echo '<style>.loginizer_promo-close{float:right;text-decoration:none;margin: 5px 10px 0px 0px;}.loginizer_promo-close:hover{color: red;}</style>
	<div class="notice notice-warning" id="loginizer_softwp_notice">
		<a class="loginizer_promo-close" id="loginizer-softwp-promo-close" href="javascript:" aria-label="Dismiss Forever">
			<span class="dashicons dashicons-dismiss"></span> '.esc_html__('Dismiss Forever', 'loginizer').'
		</a>
		<p>' . esc_html__('Hey, you are eligible for a Free Upgrade to Loginizer Pro!', 'loginizer').' 
		<a href="javascript:" id="loginizer-softwp-install-pro">' . esc_html__('Install Loginizer Pro Now', 'loginizer') . '</a>. '.esc_html__('Loginizer Free plugin will also be updated to the latest version. For any queries contact us at', 'loginizer').' <a href="mailto:support@loginizer.com">support@loginizer.com</a></p>
		</div>';

	wp_register_script('loginizer_softwp_alert', '', ['jquery'], LOGINIZER_VERSION, true);
	wp_enqueue_script('loginizer_softwp_alert');
	wp_add_inline_script('loginizer_softwp_alert', '
		jQuery("#loginizer-softwp-promo-close").on("click", function(){
			jQuery(this).closest("#loginizer_softwp_notice").slideToggle();

			var data = new Object();
			data["action"] = "soft_core_loginizer_dismiss_softwp_alert";
			data["security"] = "'.wp_create_nonce('loginizer_softwp_notice').'";
			
			var admin_url = "'.admin_url().'"+"admin-ajax.php";
			jQuery.post(admin_url, data, function(response){
			});
		});');
		
	wp_add_inline_script('loginizer_softwp_alert', '
		jQuery("#loginizer-softwp-install-pro").on("click", function(){
			
			jQuery(this).closest("#loginizer_softwp_notice").find("p").html("Installing Loginizer Pro. Please do not leave this page.");
			
			var data = new Object();
			data["action"] = "soft_core_loginizer_dismiss_softwp_alert";
			data["install-pro"] = "1";
			data["security"] = "'.wp_create_nonce('loginizer_softwp_notice').'";
			var loginizer_softwp_notice = jQuery(this);
			var admin_url = "'.admin_url().'"+"admin-ajax.php";
			jQuery.post(admin_url, data, function(response){
				jQuery("#loginizer_softwp_notice").find("p").text("Loginizer Pro has been installed and activated successfully!");
				jQuery("#loginizer_softwp_notice").removeClass("notice-warning").addClass("notice-success");
			});
		});');
}

function soft_core_loginizer_dismiss_softwp_alert(){
	
	// Some AJAX security
	check_ajax_referer('loginizer_softwp_notice', 'security');
	
	if(!current_user_can('activate_plugins')){
		wp_die(__('Sorry, but you do not have permissions to change settings.', 'loginizer'));
	}
	
	if(!empty($_REQUEST['install-pro'])){
		$softwp_lic = get_option('softaculous_pro_license', []);
		
		if(!empty($softwp_lic['license']) && preg_match('/^softwp/is', $softwp_lic['license'])){
			loginizer_softwp_install_pro($softwp_lic['license']);
		}
	}
	
	$loginizer_softwp_upgrade['timeout'] = 0; 
	$loginizer_softwp_upgrade['next_check'] = 9999999999; 
	update_option('loginizer_softwp_supgrade', $loginizer_softwp_upgrade, false);
	die('DONE');
}


// Install Loginizer Pro	
function loginizer_softwp_install_pro($license){
	
	global $loginizer;
	
	// Include the necessary stuff
	include_once( ABSPATH . 'wp-admin/includes/plugin-install.php' );

	// Includes necessary for Plugin_Upgrader and Plugin_Installer_Skin
	include_once( ABSPATH . 'wp-admin/includes/file.php' );
	include_once( ABSPATH . 'wp-admin/includes/misc.php' );
	include_once( ABSPATH . 'wp-admin/includes/class-wp-upgrader.php' );
	include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

	// Filter to prevent the activate text
	// add_filter('install_plugin_complete_actions', function($install_actions, $api, $plugin_file){return true;}, 10, 3);
	
	echo '<h2>Install Loginizer Pro</h2>';

	$installer = new Plugin_Upgrader( new Plugin_Installer_Skin(  ) );
	$installed = $installer->install('https://api.loginizer.com/download.php?version=latest&license='.$license.'&url='.rawurlencode(site_url()));
	
	if(is_wp_error( $installed ) || empty($installed)){
		return $installed;
	}
	
	if ( !is_wp_error( $installed ) && $installed ) {
		
		wp_update_plugins();
		
		// Check if update is available
		$updates = get_site_transient('update_plugins');
		
		if (isset($updates->response['loginizer/loginizer.php'])) {
		
			// Update free plugin if necessary
			$upgrader = new Plugin_Upgrader();
			$upgraded = $upgrader->upgrade('loginizer/loginizer.php');
			echo 'Updating Loginizer Free';
		
			if(!is_wp_error( $upgraded ) && $upgraded && !is_plugin_active('loginizer/loginizer.php')){
				echo 'Activating Loginizer Free !';
				$installed_free = activate_plugin('loginizer/loginizer.php');
			}
			
		}
		
		if(!is_wp_error( $installed ) && $installed){
			echo 'Activating Loginizer Pro !';
			$installed = activate_plugin('loginizer-security/loginizer-security.php');
		}
		
		if ( is_null($installed)) {
			$installed = true;
			echo '<div id="message" class="updated"><p>'. __('Done! Loginizer Pro is now installed and activated.', 'loginizer'). '</p></div><br />';
			echo '<br><br><b>Done! Loginizer Free is Upgraded and activated.</b>';
		}
	}
	
	return $installed;
	
}

function softwp_lognizer_pro_submenu(){
	
	$loginizer_softwp_upgrade = get_option('loginizer_softwp_supgrade', array('timeout' => 7, 'next_check' => 0, 'softwp_lic' => 0));
	
	if(!empty($loginizer_softwp_upgrade['softwp_lic'])){
		$lic = $loginizer_softwp_upgrade['softwp_lic'];
	}
	
	if(($loginizer_softwp_upgrade['timeout'] < 1) && !empty($lic) && !file_exists(WP_PLUGIN_DIR.'/loginizer-security/loginizer-security.php')){

		add_submenu_page('loginizer', __('Install Loginizer Pro', 'loginizer'), '<span style="color:red">'.__('Install Loginizer Pro', 'loginizer').'</span>', 'activate_plugins', 'loginizer_softwp_page_install_pro', 'softwp_lognizer_pro_page');	
		
	}
}

function softwp_lognizer_pro_page(){
	
	// We want to show this error to user which has sufficient privilage
	if(!current_user_can('activate_plugins')){
		return;
	}
	
	echo '<div id="" class="postbox">
	
		<div class="postbox-header">
		<h2 class="hndle ui-sortable-handle">
			<span style="padding-left:12px;">'.__("Upgrade to Loginizer Pro", "loginizer").'</span>
		</h2>
		</div>
		
		<div class="inside">
		<table class="form-table">
			<tbody class="loginizer_softwp_install_body">
			<tr>
				<td scope="row" valign="top" style="width:400px !important;">
				<label for="loginizer_pro"><b>'.esc_html__("Hey, you are eligible for a Free Upgrade to Loginizer Pro!", "loginizer")
				.'<br>'.esc_html__("Loginizer Free plugin will be updated to the latest version.", "loginizer").'</label>
				</td>
				<td>
					<button id="loginizer-softwp-page-install-pro" style="background-color:green !important;background-color: green !important; padding: 10px !important; color: white  !important; border-radius: 7px !important; border-color: black !important;cursor: pointer !important;">' . esc_html__("Install Now", "loginizer") . '</button> <br>
				</td>
			</tr>
			</tbody>
			<tfoot>
			<tr>
				<td>'.esc_html__("For any queries contact us at ", "loginizer")
				.' <a href="mailto:support@loginizer.com">support@loginizer.com</a></b>
				</td>
			</tr>
			</tfoot> 
			</table>
		</div>
		';
		
		wp_register_script( 'loginizer-install-pro-js-footer', '', array("jquery"), '', true );
		wp_enqueue_script( 'loginizer-install-pro-js-footer'  );
		wp_add_inline_script('loginizer-install-pro-js-footer', '
		
			jQuery("#loginizer-softwp-page-install-pro").on("click", function(){
				
				jQuery("#loginizer-softwp-page-install-pro").hide();
				
				jQuery(".loginizer_softwp_install_body").html("</br>Installing Loginizer Pro. Please do not leave this page.");
				
				var data = new Object();
				data["action"] = "soft_core_loginizer_dismiss_softwp_alert";
				data["install-pro"] = "1";
				data["security"] = "'.wp_create_nonce('loginizer_softwp_notice').'";
				var loginizer_softwp_notice = jQuery(this);
				var admin_url = "'.admin_url().'"+"admin-ajax.php";
				jQuery.post(admin_url, data, function(response){
					jQuery(".loginizer_softwp_install_body").append("</br>Loginizer Pro has been installed and activated successfully!");
					setTimeout(function(){
						jQuery(".loginizer_softwp_install_body").append("</br>You are being redirect to the Loginizer dashboard....");
					}, 2000);
					setTimeout(function(){
						window.location.href = "'.admin_url().'admin.php?page=loginizer";
					}, 5000);
				});
			});');
		
}