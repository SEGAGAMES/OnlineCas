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

$globals['path'] = '';
$globals['softscripts'] = '';
$globals['sn'] = '';
$globals['cookie_name'] = '';
$globals['gzip'] = '';
$globals['language'] = '';
$globals['soft_email'] = '';
$globals['from_email'] = '';
$globals['theme_folder'] = '';
$globals['timezone'] = '';
$globals['mail'] = '';
$globals['off'] = '';
$globals['off_subject'] = '';
$globals['off_message'] = '';
$globals['update'] = '';
$globals['update_softs'] = '';
$globals['add_softs'] = '';
$globals['email_update'] = '';
$globals['email_update_softs'] = '';
$globals['cron_time'] = '';
$globals['chmod_files'] = '';
$globals['chmod_dir'] = '';
$globals['is_vps'] = '';
$globals['eu_news_off'] = '';
$globals['eu_email_off'] = '';
$globals['random_username'] = '';
$globals['random_pass'] = '';
$globals['random_dbprefix'] = '';
$globals['off_demo_link'] = '';
$globals['off_screenshot_link'] = '';
$globals['off_rating_link'] = '';
$globals['off_review_link'] = '';
$globals['off_email_link'] = '';
$globals['email_password'] = '';
$globals['logo_url'] = '';
$globals['php_bin'] = '';
$globals['chmod_conf_file'] = '';
$globals['off_sync_link'] = '';
$globals['off_panel_link'] = '';
$globals['off_enduser_suggestions'] = '';
$globals['no_prefill'] = '';
$globals['footer_link'] = '';
$globals['remote_mysql'] = '';
$globals['perl_scripts'] = '';
$globals['show_top_scripts'] = '';
$globals['append_apps'] = '';
$globals['user_mod_dir'] = '';
$globals['nat_config'] = '';
$globals['show_in_notice'] = '';
$globals['disable_classes'] = '';
$globals['panel_hf'] = '';
$globals['disable_backup_restore'] = '';
$globals['disable_template'] = '';
$globals['nolabels'] = '';
$globals['group_order'] = '';
$globals['disable_reseller_panel'] = '';
$globals['default_protocol'] = '';
$globals['off_proto_1'] = '';
$globals['off_proto_2'] = '';
$globals['off_proto_3'] = '';
$globals['off_proto_4'] = '';
$globals['network_interface'] = '';
$globals['proxy_ip'] = '';
$globals['proxy_port'] = '';
$globals['proxy_user'] = '';
$globals['proxy_pass'] = '';
$globals['proxy_check'] = '';
$globals['bandwidth_limit'] = '';
$globals['adomain_path'] = '';
$globals['empty_pass'] = '';
$globals['empty_username'] = '';
$globals['empty_email'] = '';
$globals['show_cscript_in_top'] = '';
$globals['pass_strength'] = '';
$globals['admin_prefix'] = '';
$globals['off_remove_mail'] = '';
$globals['off_backup_mail'] = '';
$globals['off_install_mail'] = '';
$globals['off_edit_mail'] = '';
$globals['disable_auto_backup'] = '';
$globals['bandwidth_up_limit'] = '';
$globals['webuzo_disable_username'] = '';
$globals['off_clone_mail'] = '';
$globals['disable_clone'] = '';
$globals['disable_remote_import'] = '';
$globals['disable_manage_sets'] = '';
$globals['disable_import'] = '';
$globals['disable_backup_upgrade'] = '';
$globals['ephp_bin'] = '';
$globals['no_ampps'] = '';
$globals['no_strong_mysql_pass'] = '';
$globals['install_tweet_off'] = '';
$globals['install_tweet'] = '';
$globals['upgrade_tweet_off'] = '';
$globals['upgrade_tweet'] = '';
$globals['clone_tweet_off'] = '';
$globals['clone_tweet'] = '';
$globals['staging_tweet_off'] = '';
$globals['staging_tweet'] = '';
$globals['pushtolive_tweet_off'] = '';
$globals['pushtolive_tweet'] = '';
$globals['restore_template_tweet_off'] = '';
$globals['restore_template_tweet'] = '';
$globals['no_ftp_encrypted'] = '';
$globals['salt'] = '';
$globals['pre_download_all'] = '';
$globals['session_timeout'] = '';
$globals['eu_enable_themes'] = '';
$globals['auto_backup_limit'] = '';
$globals['disable_cats'] = '';
$globals['remove_dir'] = '';
$globals['remove_db'] = '';
$globals['remove_datadir'] = '';
$globals['remove_wwwdir'] = '';
$globals['custom_handler'] = '';
$globals['custom_protocol'] = '';
$globals['blank_domain'] = '';
$globals['ent_dbhost'] = '';
$globals['ent_db'] = '';
$globals['ent_dbuser'] = '';
$globals['ent_dbuserpass'] = '';
$globals['off_upgrade_plugins'] = '';
$globals['off_upgrade_themes'] = '';
$globals['preselect_autoupgrade_plugins'] = '';
$globals['preselect_autoupgrade_themes'] = '';
$globals['force_upgrade_plugins'] = '';
$globals['force_upgrade_themes'] = '';
$globals['amp_path'] = '';
$globals['amp_php'] = '';
$globals['amp_private'] = '';
$globals['amp_htdocs'] = '';
$globals['disable_auto_backup_daily'] = '';
$globals['disable_auto_backup_weekly'] = '';
$globals['disable_auto_backup_monthly'] = '';
$globals['disable_auto_backup_custom'] = '';
$globals['backups_expire'] = '';
$globals['max_backups'] = '';
$globals['max_backups_local'] = '';
$globals['max_insid_backups'] = '';
$globals['max_insid_backups_local'] = '';
$globals['default_hf_bg'] = '';
$globals['default_cat_hover'] = '';
$globals['default_hf_text'] = '';
$globals['default_scriptname_text'] = '';
$globals['enable_myins'] = '';
$globals['default_landing'] = '';
$globals['curl_timeout'] = '';
$globals['no_add_domain'] = '';
$globals['enable_auto_upgrade'] = '';
$globals['force_auto_upgrade'] = '';
$globals['set_backup_dir'] = '';
$globals['off_restore_mail'] = '';
$globals['off_customize_theme'] = '';
$globals['enc_db_pass'] = '';
$globals['hide_api_pass'] = '';
$globals['time_format'] = '';
$globals['off_backup_au'] = '';
$globals['pref_cron_minute'] = '';
$globals['pref_cron_hour'] = '';
$globals['pref_cron_day'] = '';
$globals['pref_cron_weekday'] = '';
$globals['no_prefill_db'] = '';
$globals['override_fast_mirror'] = '';
$globals['cp_port'] = '';
$globals['disable_branches'] = '';
$globals['enable_dbprefix'] = '';
$globals['curl_call_timeout'] = '';
$globals['disable_cronupdate_email'] = '';
$globals['soa_expire_val'] = '';
$globals['logs_level'] = '';
$globals['override_mirror_images'] = '';
$globals['no_prefill_pass'] = '';
$globals['enc_user_pass'] = '';
$globals['sync_domains'] = '';
$globals['disable_sign_on'] = '';
$globals['demo_logo'] = '';
$globals['email_update_apps'] = '';
$globals['demo_logo_url'] = '';
$globals['favicon_logo'] = '';
$globals['use_eu_username'] = '';
$globals['use_eu_email'] = '';
$globals['dbpass_len'] = '';
$globals['off_available_space'] = '';
$globals['update_system'] = '';
$globals['off_rbackup'] = '';
$globals['sync_ins_list'] = '';
$globals['sync_ins_real_ver'] = '';
$globals['off_sitepad'] = '';
$globals['auto_backup'] = '';
$globals['auto_backup_rotation'] = '';
$globals['force_softaculous_on_ssl'] = '';
$globals['off_import_mail'] = '';
$globals['hide_sitepad'] = '';
$globals['off_checkhttps'] = '';
$globals['dbhost'] = '';
$globals['quick_install_default'] = '';
$globals['off_custom_install'] = '';
$globals['cp_host'] = '';
$globals['encryption_key'] = '';
$globals['off_staging_mail'] = '';
$globals['max_bg_process'] = '';
$globals['au_extra_retry'] = '';
$globals['upgrade_backup_on'] = '';
$globals['off_staging'] = '';
$globals['no_indir'] = '';
$globals['max_staging'] = '';
$globals['disable_current_ins'] = '';
$globals['disable_related_scripts'] = '';
$globals['disable_csrf'] = '';
$globals['skip_pass_req'] = '';
$globals['off_push_to_live_backup'] = '';
$globals['preserve_rsid'] = '';
$globals['allow_iframe'] = '';
$globals['disable_backup_ftp'] = '';
$globals['disable_backup_softftpes'] = '';
$globals['disable_backup_softsftp'] = '';
$globals['disable_backup_dropbox'] = '';
$globals['disable_backup_gdrive'] = '';
$globals['disable_backup_webdav'] = '';
$globals['disable_backup_aws'] = '';
$globals['disable_backup_onedrive'] = '';
$globals['sitepad_editor_path'] = '';
$globals['user_homedir'] = '';
$globals['eu_off_default_install_notify'] = '';
$globals['eu_off_default_remove_notify'] = '';
$globals['eu_off_default_edit_notify'] = '';
$globals['eu_off_default_backup_notify'] = '';
$globals['eu_off_default_restore_notify'] = '';
$globals['eu_off_default_template_notify'] = '';
$globals['eu_off_default_restore_template_notify'] = '';
$globals['eu_off_default_clone_notify'] = '';
$globals['eu_off_default_staging_notify'] = '';
$globals['eu_off_default_import_notify'] = '';
$globals['eu_off_default_update_notify'] = '';
$globals['eu_default_plainpass_notify'] = '';
$globals['wp_manager_cname'] = '';
$globals['disable_wordpress_manager'] = '';
$globals['disable_wp_icon_jupiter'] = '';
$globals['disable_security_measures'] = '';
$globals['webdav_timeout'] = '';
$globals['screenshot_frequency'] = '';
$globals['off_wordpress_manager_icon'] = '';
$globals['wordpress_manager_title'] = '';
$globals['disable_local_backup'] = '';
$globals['db_export_chunk_size'] = '';
$globals['auto_import_manual_ins'] = '';
$globals['off_auto_import_wptoolkit'] = '';
$globals['off_ins_stats'] = '';
$globals['off_os_stats'] = '';
$globals['mirrors_by_speed'] = '';
$globals['off_template_mail'] = '';
$globals['off_restore_template_mail'] = '';
$globals['cp_logo_url'] = '';
$globals['backup_apps_files_only'] = '';
$globals['disable_softaculous_pro_plugin'] = '';
$globals['wp_fp_pref'] = '';
$globals['disable_cp_starting_point'] = '';

$globals['ampps_path'] = dirname(dirname(dirname(dirname(__FILE__)))); 
$globals['apps_path'] = $globals['ampps_path'].'/ampps/apps';
$globals['enduser'] = $globals['path'].(substr_count($globals['path'], 'directadmin') > 0 ? '/images' : '/enduser');
$globals['mainfiles'] = $globals['enduser'].'/main';
$globals['adminfiles'] = $globals['mainfiles'].'/admin';
$globals['euthemes'] = $globals['enduser'].'/themes';

if(file_exists(dirname(__FILE__).'/universal.custom.php')){
	include_once(dirname(__FILE__).'/universal.custom.php');
}
