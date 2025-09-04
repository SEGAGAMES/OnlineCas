<?php

//////////////////////////////////////////////////////////////
//===========================================================
// universal.php
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

$globals['path'] = dirname(dirname(__FILE__));
$globals['softscripts'] = dirname(dirname(dirname(__FILE__))).'/scripts';
$globals['sn'] = 'AMPPS';
$globals['cookie_name'] = 'SOFTCookies2985';
$globals['gzip'] = 1;
$globals['language'] = 'english';
$globals['soft_email'] = 'admin@example.com';
$globals['from_email'] = NULL;
$globals['theme_folder'] = 'default';
$globals['timezone'] = 0;
$globals['mail'] = 1;
$globals['off'] = 0;
$globals['off_subject'] = '';
$globals['off_message'] = '';
$globals['update'] = 1;
$globals['update_softs'] = 1;
$globals['add_softs'] = 1;
$globals['email_update'] = 1;
$globals['email_update_softs'] = 1;
$globals['cron_time'] = ' 1 12 * * *';
$globals['chmod_files'] = '';
$globals['chmod_dir'] = '';
$globals['is_vps'] = 0;
$globals['eu_news_off'] = 0;
$globals['eu_email_off'] = NULL;
$globals['random_username'] = NULL;
$globals['random_pass'] = NULL;
$globals['random_dbprefix'] = NULL;
$globals['off_demo_link'] = NULL;
$globals['off_screenshot_link'] = NULL;
$globals['off_rating_link'] = NULL;
$globals['off_review_link'] = NULL;
$globals['off_email_link'] = NULL;
$globals['email_password'] = NULL;
$globals['logo_url'] = '';
$globals['php_bin'] = '"D:\\repos\\OnlineCas\\Ampps/soft_php/php.exe" -c "D:\\repos\\OnlineCas\\Ampps/soft_php/php.ini"';
$globals['chmod_conf_file'] = '';
$globals['off_sync_link'] = '';
$globals['off_panel_link'] = true;
$globals['off_enduser_suggestions'] = NULL;
$globals['no_prefill'] = NULL;
$globals['footer_link'] = NULL;
$globals['remote_mysql'] = NULL;
$globals['perl_scripts'] = NULL;
$globals['show_top_scripts'] = NULL;
$globals['append_apps'] = NULL;
$globals['user_mod_dir'] = NULL;
$globals['nat_config'] = NULL;
$globals['show_in_notice'] = NULL;
$globals['disable_classes'] = 1;
$globals['panel_hf'] = NULL;
$globals['disable_backup_restore'] = NULL;
$globals['disable_template'] = NULL;
$globals['nolabels'] = NULL;
$globals['group_order'] = NULL;
$globals['disable_reseller_panel'] = NULL;
$globals['default_protocol'] = NULL;
$globals['off_proto_1'] = NULL;
$globals['off_proto_2'] = NULL;
$globals['off_proto_3'] = NULL;
$globals['off_proto_4'] = NULL;
$globals['network_interface'] = NULL;
$globals['proxy_ip'] = NULL;
$globals['proxy_port'] = NULL;
$globals['proxy_user'] = NULL;
$globals['proxy_pass'] = NULL;
$globals['proxy_check'] = NULL;
$globals['bandwidth_limit'] = NULL;
$globals['adomain_path'] = NULL;
$globals['empty_pass'] = NULL;
$globals['empty_username'] = NULL;
$globals['empty_email'] = NULL;
$globals['show_cscript_in_top'] = NULL;
$globals['pass_strength'] = NULL;
$globals['admin_prefix'] = NULL;
$globals['off_remove_mail'] = NULL;
$globals['off_backup_mail'] = NULL;
$globals['off_install_mail'] = NULL;
$globals['off_edit_mail'] = NULL;
$globals['disable_auto_backup'] = NULL;
$globals['bandwidth_up_limit'] = NULL;
$globals['webuzo_disable_username'] = NULL;
$globals['off_clone_mail'] = NULL;
$globals['disable_clone'] = NULL;
$globals['disable_remote_import'] = NULL;
$globals['disable_manage_sets'] = NULL;
$globals['disable_import'] = NULL;
$globals['disable_backup_upgrade'] = NULL;
$globals['ephp_bin'] = NULL;
$globals['no_ampps'] = '';
$globals['no_strong_mysql_pass'] = NULL;
$globals['install_tweet_off'] = NULL;
$globals['install_tweet'] = NULL;
$globals['upgrade_tweet_off'] = NULL;
$globals['upgrade_tweet'] = NULL;
$globals['clone_tweet_off'] = NULL;
$globals['clone_tweet'] = NULL;
$globals['staging_tweet_off'] = NULL;
$globals['staging_tweet'] = NULL;
$globals['pushtolive_tweet_off'] = NULL;
$globals['pushtolive_tweet'] = NULL;
$globals['restore_template_tweet_off'] = NULL;
$globals['restore_template_tweet'] = NULL;
$globals['no_ftp_encrypted'] = NULL;
$globals['salt'] = NULL;
$globals['pre_download_all'] = NULL;
$globals['session_timeout'] = NULL;
$globals['eu_enable_themes'] = 1;
$globals['auto_backup_limit'] = NULL;
$globals['disable_cats'] = NULL;
$globals['remove_dir'] = NULL;
$globals['remove_db'] = NULL;
$globals['remove_datadir'] = NULL;
$globals['remove_wwwdir'] = NULL;
$globals['custom_handler'] = NULL;
$globals['custom_protocol'] = NULL;
$globals['blank_domain'] = NULL;
$globals['ent_dbhost'] = NULL;
$globals['ent_db'] = NULL;
$globals['ent_dbuser'] = NULL;
$globals['ent_dbuserpass'] = NULL;
$globals['off_upgrade_plugins'] = NULL;
$globals['off_upgrade_themes'] = NULL;
$globals['preselect_autoupgrade_plugins'] = NULL;
$globals['preselect_autoupgrade_themes'] = NULL;
$globals['force_upgrade_plugins'] = NULL;
$globals['force_upgrade_themes'] = NULL;
$globals['amp_path'] = NULL;
$globals['amp_php'] = NULL;
$globals['amp_private'] = NULL;
$globals['amp_htdocs'] = NULL;
$globals['disable_auto_backup_daily'] = NULL;
$globals['disable_auto_backup_weekly'] = NULL;
$globals['disable_auto_backup_monthly'] = NULL;
$globals['disable_auto_backup_custom'] = NULL;
$globals['backups_expire'] = NULL;
$globals['max_backups'] = NULL;
$globals['max_backups_local'] = NULL;
$globals['max_insid_backups'] = NULL;
$globals['max_insid_backups_local'] = NULL;
$globals['default_hf_bg'] = NULL;
$globals['default_cat_hover'] = NULL;
$globals['default_hf_text'] = NULL;
$globals['default_scriptname_text'] = NULL;
$globals['enable_myins'] = NULL;
$globals['default_landing'] = NULL;
$globals['curl_timeout'] = NULL;
$globals['no_add_domain'] = NULL;
$globals['enable_auto_upgrade'] = NULL;
$globals['force_auto_upgrade'] = NULL;
$globals['set_backup_dir'] = NULL;
$globals['off_restore_mail'] = NULL;
$globals['off_customize_theme'] = NULL;
$globals['enc_db_pass'] = NULL;
$globals['hide_api_pass'] = NULL;
$globals['time_format'] = NULL;
$globals['off_backup_au'] = NULL;
$globals['pref_cron_minute'] = NULL;
$globals['pref_cron_hour'] = NULL;
$globals['pref_cron_day'] = NULL;
$globals['pref_cron_weekday'] = NULL;
$globals['no_prefill_db'] = NULL;
$globals['override_fast_mirror'] = NULL;
$globals['cp_port'] = NULL;
$globals['disable_branches'] = NULL;
$globals['enable_dbprefix'] = NULL;
$globals['curl_call_timeout'] = NULL;
$globals['disable_cronupdate_email'] = NULL;
$globals['soa_expire_val'] = NULL;
$globals['logs_level'] = NULL;
$globals['override_mirror_images'] = '';
$globals['no_prefill_pass'] = NULL;
$globals['enc_user_pass'] = NULL;
$globals['sync_domains'] = NULL;
$globals['disable_sign_on'] = NULL;
$globals['demo_logo'] = NULL;
$globals['email_update_apps'] = NULL;
$globals['demo_logo_url'] = NULL;
$globals['favicon_logo'] = NULL;
$globals['use_eu_username'] = NULL;
$globals['use_eu_email'] = NULL;
$globals['dbpass_len'] = NULL;
$globals['off_available_space'] = NULL;
$globals['update_system'] = NULL;
$globals['off_rbackup'] = NULL;
$globals['sync_ins_list'] = NULL;
$globals['sync_ins_real_ver'] = NULL;
$globals['off_sitepad'] = NULL;
$globals['auto_backup'] = NULL;
$globals['auto_backup_rotation'] = NULL;
$globals['force_softaculous_on_ssl'] = NULL;
$globals['off_import_mail'] = NULL;
$globals['hide_sitepad'] = NULL;
$globals['off_checkhttps'] = NULL;
$globals['dbhost'] = NULL;
$globals['quick_install_default'] = NULL;
$globals['off_custom_install'] = NULL;
$globals['cp_host'] = NULL;
$globals['encryption_key'] = NULL;
$globals['off_staging_mail'] = NULL;
$globals['max_bg_process'] = NULL;
$globals['au_extra_retry'] = NULL;
$globals['upgrade_backup_on'] = NULL;
$globals['off_staging'] = NULL;
$globals['no_indir'] = NULL;
$globals['max_staging'] = NULL;
$globals['disable_current_ins'] = NULL;
$globals['disable_related_scripts'] = NULL;
$globals['disable_csrf'] = NULL;
$globals['skip_pass_req'] = NULL;
$globals['off_push_to_live_backup'] = NULL;
$globals['preserve_rsid'] = NULL;
$globals['allow_iframe'] = NULL;
$globals['disable_backup_ftp'] = NULL;
$globals['disable_backup_softftpes'] = NULL;
$globals['disable_backup_softsftp'] = NULL;
$globals['disable_backup_dropbox'] = NULL;
$globals['disable_backup_gdrive'] = NULL;
$globals['disable_backup_webdav'] = NULL;
$globals['disable_backup_aws'] = NULL;
$globals['disable_backup_onedrive'] = NULL;
$globals['sitepad_editor_path'] = 'D:\\repos\\OnlineCas\\Ampps\\ampps/scripts/sitepad/editor';
$globals['user_homedir'] = NULL;
$globals['eu_off_default_install_notify'] = NULL;
$globals['eu_off_default_remove_notify'] = NULL;
$globals['eu_off_default_edit_notify'] = NULL;
$globals['eu_off_default_backup_notify'] = NULL;
$globals['eu_off_default_restore_notify'] = NULL;
$globals['eu_off_default_template_notify'] = NULL;
$globals['eu_off_default_restore_template_notify'] = NULL;
$globals['eu_off_default_clone_notify'] = NULL;
$globals['eu_off_default_staging_notify'] = NULL;
$globals['eu_off_default_import_notify'] = NULL;
$globals['eu_off_default_update_notify'] = NULL;
$globals['eu_default_plainpass_notify'] = NULL;
$globals['wp_manager_cname'] = NULL;
$globals['disable_wordpress_manager'] = NULL;
$globals['disable_wp_icon_jupiter'] = NULL;
$globals['disable_security_measures'] = NULL;
$globals['webdav_timeout'] = NULL;
$globals['screenshot_frequency'] = NULL;
$globals['off_wordpress_manager_icon'] = NULL;
$globals['wordpress_manager_title'] = NULL;
$globals['disable_local_backup'] = NULL;
$globals['db_export_chunk_size'] = NULL;
$globals['auto_import_manual_ins'] = NULL;
$globals['off_auto_import_wptoolkit'] = NULL;
$globals['off_ins_stats'] = NULL;
$globals['off_os_stats'] = NULL;
$globals['mirrors_by_speed'] = NULL;
$globals['off_template_mail'] = NULL;
$globals['off_restore_template_mail'] = NULL;
$globals['cp_logo_url'] = NULL;
$globals['backup_apps_files_only'] = NULL;
$globals['disable_softaculous_pro_plugin'] = NULL;
$globals['wp_fp_pref'] = NULL;
$globals['disable_cp_starting_point'] = NULL;

$globals['ampps_path'] = dirname(dirname(dirname(dirname(__FILE__)))); 
$globals['apps_path'] = $globals['ampps_path'].'/ampps/apps';
$globals['enduser'] = $globals['path'].(substr_count($globals['path'], 'directadmin') > 0 ? '/images' : '/enduser');
$globals['mainfiles'] = $globals['enduser'].'/main';
$globals['adminfiles'] = $globals['mainfiles'].'/admin';
$globals['euthemes'] = $globals['enduser'].'/themes';

if(file_exists(dirname(__FILE__).'/universal.custom.php')){
	include_once(dirname(__FILE__).'/universal.custom.php');
}
