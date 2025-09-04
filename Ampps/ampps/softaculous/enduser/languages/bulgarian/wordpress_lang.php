<?php

//////////////////////////////////////////////////////////////
//===========================================================
// wordpress_lang.php
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

$l['wrong_ins'] = 'The installation ID you submitted does not exist';
$l['no_wp_functions'] = 'The WORDPRESS PACKAGE could not be found! Please report this to the server administrator.';

//Theme Strings
$l['<title>'] = APP.' - WordPress Management';
$l['wordpress_management'] = 'WordPress Management';
$l['install'] = 'Install';
$l['upgrade'] = 'Upgrade';
$l['manage_sets'] = 'Manage Sets';
$l['scan'] = 'Scan';
$l['check_updates'] = 'Check for Updates';
$l['remove'] = 'Remove';
$l['security_measures'] = 'Security Measures';
$l['uninstall'] = 'Uninstall';
$l['save'] = 'Save';
$l['save_settings'] = 'Save Settings';
$l['save_info'] = 'Save Site Info';
$l['backup'] = 'Backup';
$l['restore'] = 'Restore';
$l['create_template'] = 'Create Template';
$l['clone'] = 'Clone';
$l['staging'] = 'Staging';
$l['pushtolive'] = 'Push to Live';
$l['save_all'] = 'Save all changes';
$l['up_to_date'] = 'Up to date';
$l['updates_available'] = 'Updates available';
$l['upd_to'] = 'Upgrade to Version';
$l['upgrade_now'] = 'Upgrade Now';
$l['remote_import'] = 'Remote Import';
$l['backups'] = 'Backups';
$l['featured_plugins'] = 'Featured Plugins';

$l['install_exp'] = 'Install a fresh copy of WordPress';
$l['scan_exp'] = 'Find all existing WordPress installations in your account';
$l['check_updates_exp'] = 'Check for Updates for WordPress Core, Themes and Plugins';
$l['remove_exp'] = 'Remove selected installations from '.APP.' records';
$l['security_measures_exp'] = 'Bulk apply and revert security measures to selected WordPress websites';
$l['uninstall_exp'] = 'Delete files/folders and database for selected installations';
$l['manage_exp'] = 'Manage WordPress Sets for installing selected plugins and themes';
$l['remote_import_exp'] = 'Import an existing installation from remote server';
$l['backups_exp'] = 'List all backups';
$l['featured_plugins_exp'] = 'Bulk install Featured Plugins to selected WordPress websites';

$l['installations'] = 'Installations';
$l['siteurl'] = 'Website URL';
$l['site_name'] = 'Site Name';
$l['blog_public'] = 'Search Engine Visiblity';
$l['wp_cron'] = 'WordPress Cron (wp-cron.php)';
$l['wp_debug'] = 'Debug Mode';
$l['enabled'] = 'Enabled';
$l['disabled'] = 'Disabled';
$l['version'] = 'Version';
$l['updated'] = 'Updated';
$l['update_now'] = 'Update Now';
$l['change'] = 'Change';
$l['info'] = 'Site Info';
$l['updates'] = 'Updates';
$l['configuration'] = 'Configuration';
$l['manage_plugins'] = 'Manage Plugins';
$l['manage_plugins_exp'] = 'Install, Enable, Disable and Delete Plugins for this installation';
$l['manage_themes'] = 'Manage Themes';
$l['manage_themes_exp'] = 'Install, Enable, Disable and Delete Themes for this installation';
$l['options'] = 'Options';
$l['auto_upgrade_core'] = 'Auto Upgrade WordPress Core';
$l['auto_upgrade_plugins'] = 'Auto Upgrade WordPress Plugins';
$l['auto_upgrade_themes'] = 'Auto Upgrade WordPress Themes';
$l['dont_auto_upgrade'] = 'Do not Auto Upgrade';
$l['minor_auto_upgrade'] = 'Upgrade to Minor versions only';
$l['major_auto_upgrade'] = 'Upgrade to latest version available (Major as well as Minor)';
$l['exp_eu_auto_upgrade'] = 'Select the automatic upgrade preference for WordPress core';
$l['exp_auto_upgrade_plugins'] = 'If enabled, all WordPress plugins installed for this installation will be automatically upgraded to the latest version (every 24 hours)';
$l['exp_auto_upgrade_themes'] = 'If enabled, all WordPress themes for this installation will be automatically upgraded to the latest version (every 24 hours)';
$l['login_admin'] = 'Login';
$l['login_exp'] = 'Login as admin user in WordPress';
$l['create_template_exp'] = 'Create a Template of this instance which you can restore later to any domain';
$l['clone_exp'] = 'Clone this instance into a separate installation';
$l['staging_exp'] = 'Create a staging copy of your live installation to test upgrades or changes';
$l['pushtolive_exp'] = 'Push the changes in Staging instance to your live installation';
$l['backup_exp'] = 'Create a backup of your installation';
$l['restore_exp'] = 'Restore a backup of your installation to roll back changes';
$l['remove_ins_exp'] = 'Remove this installation from '.APP.' records';
$l['uninstall_ins_exp'] = 'Delete files/folders and database of this installation';
$l['change_password'] = 'Change Password';
$l['username'] = 'Username';
$l['password'] = 'Password';
$l['db_details_title'] = 'Database Details';
$l['db_details_name'] = 'Database Name';
$l['db_details_user'] = 'Database User';
$l['db_details_host'] = 'Database Host';
$l['db_view'] = 'View Database';
$l['exp_blog_public'] = 'If enabled, your website will be crawled by search engines. If your site is under construction you can disable this and enable it when your site is live. Default: Enabled';
$l['exp_wp_cron'] = 'If disabled, WordPress cron will be disabled and a cron job will be added in your control panel to be executed twice an hour. Default: Enabled';
$l['exp_wp_debug'] = 'If enabled, WordPress debugging mode will be enabled which will help you find the cause of an error in case of critical error. <br />Note: Do not leave this enabled on a production site. Default: Disabled';
$l['files_not_found'] = 'Installation files not found';
$l['db_not_found'] = 'Database connection failed';
$l['return_to_wpm'] = 'Return to WordPress Management';
$l['track_on_tasklist'] = 'You can track pogress on the Task List page';
$l['no_wp_ins'] = 'No WordPress Installations found.';
$l['install_new_wp'] = 'Install a new copy';
$l['or'] = 'or';
$l['scan_wp'] = 'Scan for existing installations';

$l['installed'] = 'Installed';
$l['add_themes'] = 'Add Themes';
$l['add_plugins'] = 'Add Plugins';
$l['upload'] = 'Upload';
$l['upload_themes'] = 'Upload Theme';
$l['upload_plugins'] = 'Upload Plugin';
$l['activate_themes'] = 'Activate the theme after upload';
$l['activate_plugins'] = 'Activate the plugin after upload';
$l['installing'] = 'Installing';
$l['installed'] = 'Installed';
$l['search_wp'] = 'Search from wordpress.org';
$l['upload_drag_exp'] = 'Drag and Drop file here';
$l['upload_manual_exp'] = 'or click to pick manually';
$l['plugins_themes_delete'] = 'Delete';
$l['plugins_themes_list_name'] = 'Name';
$l['plugins_themes_list_link'] = 'Link';
$l['plugins_themes_list_status'] = 'Status';
$l['plugins_themes_list_rating'] = 'Rating';
$l['plugins_themes_list_author'] = 'Author';
$l['plugins_themes_list_version'] = 'Version';
$l['plugin_list_no_ratings'] = 'No Ratings';
$l['add_custom_plugin'] = 'Add Custom Plugin';
$l['add_custom_theme'] = 'Add Custom Theme';
$l['custom_slug'] = 'Slug';
$l['custom_slug_exp'] = 'Only Alphanumeric characters, underscore and hyphen are allowed';
$l['custom_name'] = 'Name';
$l['custom_name_exp'] = 'Choose a name for your plugin/theme';
$l['custom_file'] = 'File';
$l['custom_file_exp'] = 'Upload your plugin/theme ZIP file';
$l['none'] = 'None';

// Error Strings
$l['off_wordpress_manager'] = 'WordPress Management feature has been disabled by admin';
$l['no_insid'] = 'Please provide the installation id to save the changes';
$l['no_softurl'] = 'Site URL is required';
$l['invalid_softurl'] = 'Site URL is invalid';
$l['no_site_name'] = 'Site Name is required';
$l['some_error_occurred'] = 'Some error occurred';
$l['domain_not_in_list'] = 'The URL posted is not in your domain(s) list';
$l['no_username'] = 'Username cannot be blank';
$l['no_password'] = 'Password cannot be blank';

$l['fail_fetch_list'] = 'Failed to fetch the list';
$l['plugin_deletion_failed'] = 'Unable to delete the plugin';
$l['plugin_not_found'] = 'Unable to find plugin folder';
$l['plugin_activation_failed'] = 'Failed to activate the plugin';
$l['plugin_deletion_success'] = 'Plugin deleted successfully';
$l['plugin_deactivation_failed'] = 'Failed to deactivate the plugin';
$l['plugin_upgrade_success'] = 'Plugin upgraded successfully';
$l['plugin_upgrade_failed'] = 'Failed to upgrade the plugin';
$l['no_plugins_upgrade'] = 'No update available for selected plugins';
$l['no_themes_upgrade'] = 'No update available for selected themes';
$l['active_plugin_del_error'] = 'Cannot delete an active plugin';
$l['install_plugin'] = 'Click to install the plugin';
$l['installed_plugin'] = 'Plugin already installed';
$l['incompatible_plugin'] = 'Plugin is not compatible with your version of WordPress';

$l['theme_deletion_failed'] = 'Unable to delete the theme';
$l['theme_not_found'] = 'Unable to find theme folder';
$l['theme_activation_failed'] = 'Failed to activate the theme';
$l['theme_deletion_success'] = 'Theme deleted successfully';
$l['theme_deactivation_failed'] = 'Failed to deactivate the theme';
$l['theme_upgrade_success'] = 'Theme upgraded successfully';
$l['theme_upgrade_failed'] = 'Failed to upgrade the theme';
$l['active_theme_del_error'] = 'Cannot delete an active theme';
$l['install_theme'] = 'Click to install the theme';
$l['installed_theme'] = 'Theme already installed';
$l['incompatible_theme'] = 'Theme is not compatible with your version of WordPress';

$l['err_custom_fields'] = 'All fields are compulsory. Please fill all the fields.';
$l['err_custom_upload'] = 'Some error occurred while adding your custom plugin/theme';
$l['no_file'] = 'Please upload a plugin/theme file';
$l['invalid_file'] = 'Please upload a valid file';
$l['err_move_file'] = 'Failed to move the uploaded file';
$l['plugin_exists'] = 'Plugin already exists';
$l['theme_exists'] = 'Theme already exists';
$l['no_file_posted'] = 'No file posted';
$l['only_zip_files'] = 'Only ZIP files are allowed';
$l['err_write_chunk'] = 'Failed to write chunk bytes';
$l['invalid_file_posted'] = 'The plugin/theme file uploaded is invalid because the zip file should have the slug folder';
$l['invalid_plugin_file'] = 'The plugin file uploaded is invalid because the zip file should have the plugin slug folder';
$l['invalid_theme_file'] = 'The theme file uploaded is invalid because the zip file should have the theme slug folder';

$l['invalid_command'] = 'Invalid command';
$l['invalid_slug'] = 'Invalid slug';
$l['no_plugins'] = 'Plugins not found';
$l['no_themes'] = 'Themes not found';
$l['no_active_theme'] = 'Atleast one active theme is required';
$l['no_zip_archive'] = 'ZIP extension is required in PHP to use the upload feature';

// Success strings
$l['save_info_success'] = 'Info saved successfully!';

$l['plugin_activated'] = 'Plugin activated successfully';
$l['plugin_deactivated'] = 'Plugin deactivated successfully';
$l['plugin_upload_success'] = 'Plugin installed successfully';
$l['plugin_upload_activate_success'] = 'Plugin installed and activated successfully';
$l['install_plugins'] = 'Plugin successfully installed and activated';

$l['install_themes'] = 'Theme installed successfully';
$l['theme_activated'] = 'Theme activated successfully';
$l['theme_deactivated'] = 'Theme deactivated successfully';
$l['theme_upload_success'] = 'Theme installed successfully';
$l['theme_upload_activate_success'] = 'Theme installed and activated successfully';

$l['manage_users'] = 'Manage Users';
$l['select_user'] = 'Select User';
$l['add_user'] = 'Add User';
$l['close'] = 'Close';
$l['role'] = 'Role';
$l['required'] = 'Required';
$l['email'] = 'Email';
$l['first_name'] = 'First Name';
$l['last_name'] = 'Last Name';
$l['website'] = 'Website';
$l['randpass'] = 'Generate a Random Password';

$l['empty_username'] = 'Username is required';
$l['empty_email'] = 'Email address is required';
$l['empty_password'] = 'Password is required';
$l['empty_role'] = 'Role is required';
$l['email_invalid'] = 'Email address is not valid';
$l['role_invalid'] = 'Role submitted is not valid';
$l['username_exists'] = 'Username is already in use';
$l['email_exists'] = 'Email address is already in use';
$l['fail_add_user'] = 'Failed to add the user';

$l['success_add_user'] = 'User added successfully!';
$l['password_changed'] = 'Password changed successfully';

// Data Table Strings
$l['dt_last'] = 'Last';
$l['dt_next'] = 'Next';
$l['dt_first'] = 'First';
$l['dt_search'] = 'Search:';
$l['dt_previous'] = 'Previous';
$l['dt_processing'] = 'Processing...';
$l['dt_loadingRecords'] = 'Loading...';
$l['dt_lengthMenu'] = 'Show _MENU_ entries';
$l['dt_infoEmpty'] = 'Showing 0 to 0 of 0 entries';
$l['dt_emptyTable'] = 'No data available in table';
$l['dt_zeroRecords'] = 'No matching records found';
$l['dt_info'] = 'Showing _START_ to _END_ of _TOTAL_ entries';
$l['dt_infoFiltered'] = '(filtered from _MAX_ total entries)';
$l['dt_sortAscending'] = 'activate to sort column ascending';
$l['dt_sortDescending'] = 'activate to sort column descending';

// Security Measures
$l['secure_wp_all'] = 'All (Critical and Recommended)';
$l['secure_wp_cri'] = 'Critical only';
$l['secure_wp_cus'] = 'Choose manually';
$l['change_admin_username'] = 'Change default administrator\'s username';
$l['change_admin_username_exp'] = 'WordPress creates administrator user with username \'admin\'. WordPress does not allow to change the username and your site can be at a risk if someone tries to bruteforce with the username admin. This security option changes the username from admin to randomly generated username.';
$l['no_file_dir_access'] = 'Restrict access to files and directories';
$l['no_file_dir_access_exp'] = 'Insecure permissions for files and directories can lead to unauthorized accessed by hackers and used to compromise your website. This security option sets the permissions for the wp-config.php file to 0600, for other files to 0644, and for directories to 0755.';
$l['disable_xml_rpc'] = 'Block unauthorized access to xmlrpc.php';
$l['disable_xml_rpc_exp'] = 'This security option prevents unauthorized access to the xmlrpc.php file. Note: Custom directives in the .htaccess files might override this.';
$l['block_htaccess'] = 'Block access to .htaccess and .htpasswd';
$l['block_htaccess_exp'] = 'Gaining access to .htaccess and .htpasswd files allows attackers to subject your website to a variety of exploits and security breaches. This security option ensures that .htaccess and .htpasswd files cannot be accessed by abusers.';
$l['disable_pingbacks'] = 'Turn off pingbacks';
$l['disable_pingbacks_exp'] = 'Pingbacks allow other WordPress websites to automatically leave comments under your posts when these websites link to these posts. Pingbacks can be abused to use your website for DDoS attacks on other sites. This security option turns off XML-RPC pingbacks for your whole website and also disables pingbacks for previously created posts with pingbacks enabled.';
$l['no_file_editing'] = 'Disable file editing in WordPress Dashboard';
$l['no_file_editing_exp'] = 'Disabling file editing in WordPress removes the ability to directly edit the plugin and theme file sources in the WordPress interface. This option adds an additional layer of protection for the WordPress website in case one of WordPress admin accounts is compromised. In particular, it prevents compromised accounts from easily adding malicious executable code to plugins or themes.';
$l['block_author_scan'] = 'Block author scans';
$l['block_author_scan_exp'] = 'Author scans are looking to find usernames of registered users (especially WordPress admin) and brute-force attack the login page of your website to gain access. This security option prevents such scans from exposing these usernames. Note: depending on the permalink configuration on your website this option might prevent visitors from accessing pages that list all articles written by a particular author.';
$l['block_dir_browsing'] = 'Block directory browsing';
$l['block_dir_browsing_exp'] = 'If directory browsing is turned on, hackers can obtain various information about your website that can potentially compromise its security. Directory browsing is usually turned off by default, but if it is turned on, this security option can block it.';
$l['no_php_exec_wpinc'] = 'Forbid execution of PHP scripts in the wp-includes directory';
$l['no_php_exec_wpinc_exp'] = 'The wp-includes directory may contain insecure PHP files that can be executed to take over and exploit your website. This security option prevents the execution of PHP files in the wp-includes directory. Note: Custom directives in the .htaccess files might override this.';
$l['no_php_exec_wpuploads'] = 'Forbid execution of PHP scripts in the wp-content/uploads directory';
$l['no_php_exec_wpuploads_exp'] = 'The wp-content/uploads directory may contain insecure PHP files that can be executed to take over and exploit your website. This security option prevents the execution of PHP files in the wp-content/uploads directory. Note: Custom directives in the .htaccess files might override this.';
$l['no_script_concat'] = 'Disable scripts concatenation for WordPress admin panel';
$l['no_script_concat_exp'] = 'This security option turns off concatenation of scripts running in the WordPress admin panel, preventing your website from being affected by certain DoS attacks. Turning off concatenation of scripts might slightly affect the performance of WordPress admin panel, but it should not affect visitors\' experience on your WordPress website.';
$l['block_sensitive_files'] = 'Block access to sensitive files';
$l['block_sensitive_files_exp'] = 'This security option prevents public access to certain files that can contain sensitive information like connection credentials or various information that can be used to determine which known exploits are applicable to your WordPress website.';
$l['enable_bot_protection'] = 'Enable bot protection';
$l['enable_bot_protection_exp'] = 'This option protects your website from useless, malicious or otherwise harmful bots. It blocks bots that scan your website for vulnerabilities and overload your website with unwanted requests, causing resource overuse. Note: You might want to temporarily disable this measure if you\'re planning to use an online service to scan your website for vulnerabilities, since these services might also use such bots.';
$l['security_measure_disabled'] = 'Security Measures feature has been disabled by admin';
$l['apply_wp_security_msg'] = 'Applying security measures to WordPress installation';
$l['security_measure_applied'] = 'Security measures were applied successfully';
$l['revert_wp_security_msg'] = 'Reverting security measures applied to WordPress installation';
$l['security_measure_reverted'] = 'Security measures applied to WordPress installation were reverted.';
$l['apply_wp_security_error'] = 'Failed to apply <b>&soft-1;</b> setting to WordPress installation <br><b>&soft-2;</b></br>';
$l['revert_wp_security_error'] = 'Failed to apply <b>&soft-1;</b> setting to WordPress installation <br><b>&soft-2;</b></br>';

$l['security_measures_desc'] = 'Select which security measures you want to apply to the selected websites';
$l['revert_wp_security'] = 'Revert Security Measures';
$l['revert_wp_security_exp'] = 'Select which security measures you want to revert on the selected websites';
$l['file_manager'] = 'File Manager';
$l['sitepath'] = 'Website Path';

$l['featured_plugins_info_free'] = 'Selected Plugin(s) will be installed and activated on your site';
$l['featured_plugins_info_pro'] = '<b style="color:green;">PRO</b> version of the Selected Plugin(s) will be installed and activated on your site';

$l['show_installed_plugins'] = 'Show Installed Plugins';

$l['bulk_featured_plugins_info_free'] = 'Plugin(s) will be installed and activated on the sites you selected in the previous step';
$l['bulk_featured_plugins_info_pro'] = '<b style="color:green;">PRO</b> version of the Plugin(s) will be installed and activated on the sites you selected in the previous step';

$l['bulk_featured_plugins_skip'] = 'If the plugin is already installed on selected site it will be skipped';
$l['no_ins_selected'] = 'Please select atleast one WordPress installation to install featured plugins!';

$l['feature_restricted'] = 'This feature is restricted';

$l['license_key'] = 'License';
$l['softaculous_pro_license_issued'] = 'License(s) generated successfully';
$l['with_selected'] = 'With Selected';
$l['softwp_issue_license'] = 'Generate License';
$l['softwp_select_ins'] = 'Select the installations you want to generate the SoftWP License for';
$l['featured'] = 'Featured';
$l['manage_licenses'] = 'Manage License(s)';
$l['manage'] = 'Manage';
$l['add'] = 'Add';

//for multiple delete
$l['with_selected'] = 'With Selected';
$l['remove_complete'] = 'Remove Completely';
$l['remove_info'] = 'Remove from '.APP;
$l['go'] = 'Отиди';
$l['no_sel_inst'] = 'Няма избрани инсталации за изтриване';
$l['del_insid'] = 'Сигурен ли сте, че искате да премахнете избраните инсталации? Действието ще бъдат необратими.';
$l['rem_inst_id'] = 'Изтриване на инсталация - ';
$l['inst_remvd'] = 'Избраните инсталации са изтрити. Страницата ще се презареди!';