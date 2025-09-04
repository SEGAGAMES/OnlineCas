<?php

//////////////////////////////////////////////////////////////
//===========================================================
// help_lang.php
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

// Error strings
$l['no_access_in_premium'] = 'This page cannot be accessed in the premium version of '.APP;

//Theme Strings
$l['<title>'] = APP.' - Plans';
$l['plans'] = 'Plans';
$l['plans_desc'] = 'Upgrade to the premium package of Softaculous and get access to over &soft-1; apps like WordPress, Joomla, Drupal, Magento, etc. <br /> Install, upgrade, backup, restore, clone your apps with the click of a button.';
$l['seu_plan_title'] = 'Plans';
$l['get_started_btn'] = 'Get Started';
$l['buy_btn'] = 'Purchase';
$l['renew_btn'] = 'Renew';
$l['free_btn'] = 'Free';
$l['current_plan'] = 'Current Plan';
$l['price'] = 'Price';
$l['no_cost'] = 'No Cost';
$l['plan_apps'] = 'Number of apps';
$l['plan_install'] = 'Install apps';
$l['plan_sets'] = 'WordPress Themes/Plugins Management';
$l['plan_install'] = 'Install apps';
$l['plan_upgrade'] = 'Upgrade apps';
$l['plan_auto_upgrade'] = 'Auto Upgrade apps';
$l['plan_backup'] = 'Manual and Auto Backup apps';
$l['plan_backup_remote'] = 'Backup on Google Drive and Dropbox';
$l['plan_import'] = 'Import apps';
$l['plan_remote_import'] = 'Remote Import apps';
$l['plan_clone'] = 'Clone apps';
$l['plan_staging'] = 'Staging apps';
$l['enter_license_heading'] = 'Enter Softaculous License Key';
$l['enter_license_desc'] = 'If you have already purchased the license you can enter the license key below and start using Softaculous Premium';
$l['submit'] = 'Submit';
$l['enter_license'] = 'Enter License';
$l['update_license_success'] = 'Successfully updated the license';
$l['refresh_license_success'] = 'Successfully refreshed the license';
$l['update_license_fail'] = 'Failed to update the license';
$l['license_details_heading'] = 'License Details';
$l['license_heading'] = 'License Key';
$l['plan_heading'] = 'Plan';
$l['expires_heading'] = 'Expires';
$l['refresh_license'] = 'Refresh License';
$l['view_invoices'] = 'View Invoices';
$l['license_note'] = '<b>Note :</b> This is a Single User license and will work only for this particular control panel account. If you wish to purchase Server license and use it for all users on this server <a href="https://www.softaculous.com/clients?ca=buy&licenses=&soft-1;&ips=&soft-1;" target="_blank">visit this page</a>.';
$l['license_alert_body'] = '<b>Single User license</b> will work only for this particular control panel account. <br /> <br /> <b>Server license</b> can be used for all users on this server.';
$l['license_alert_title'] = 'Confirm Purchase';
$l['license_alert_enduser_button'] = 'Purchase Single User License';
$l['license_alert_server_button'] = 'Purchase Server License';
$l['close'] = 'Close';
$l['err_server_license'] = 'This seems to be a server license. Please go to '.APP.' admin panel (by logging into your control panel as root/admin) and click on the Refresh License button.';
$l['wp_manager'] = 'WordPress Manager (Quickly manage your WordPress sites)';
$l['wp_auto_upgrade_extra'] = 'Auto Upgrade WordPress Themes & Plugins';

//First Slider
$l['slider1_title'] = 'Unlock &soft-1; Apps';
$l['slider1_desc'] = 'Softaculous offers one click installation for &soft-1; apps which include popular apps like WordPress, Joomla, Drupal, Magento, phpBB, PrestaShop and many more.';
$l['slider1_desc2'] = 'Apps library covers a wide range of categories which include Blogs, CMS, E-Commerce, ERP, Forums, Project Management, Image Galleries, Wikis, Social Networking, Ad Management, Calendars, Mails, Polls and Analytics, Guest Books, Customer Support, Educational, DB Tools, Micro Blogs, Gaming, Frameworks, Music, Video, RSS and File Management.';

//Second Slider
$l['slider2_title'] = 'Complete Lifecycle';
$l['slider2_desc'] = 'Softaculous is not just an auto installer, it help you to manage complete lifecycle of your website. From installing an app to upgrades to backups, we take care of everything.';
$l['slider2_desc2'] = 'Softaculous helps you manage your installation in every stage with features like install, upgrade, backup, restore, import, clone, staging, theme/plugin sets management.';

//Third Slider
$l['slider3_title'] = 'Up to Date Apps';
$l['slider3_desc'] = 'Our team checks for updates for each and every app on daily basis and releases the updated version at the earliest.';
$l['slider3_desc2'] = 'This ensures that you will always install the latest available version of any application and also update your existing installations as soon as the update is released by the vendor.';

$l['feature_title'] = 'Features';

$l['one_click_title'] = 'One Click Install';
$l['one_click_desc'] = 'Choose a script, fill in required details and click. That\'s it '.APP.' will do the magic !';

$l['num_scripts_title'] = 'Scripts';
$l['num_scripts_desc'] = 'Choose apps from a wide array of category like CMS, Blog, Forum and many more.';

$l['upgrade_title'] = 'Auto Upgrade Apps';
$l['upgrade_desc'] = 'Configure to upgrade your app manually or automatically. You can choose to upgrade only minor updates or major updates as well.';

$l['uptodate_title'] = 'Up to Date Apps';
$l['uptodate_desc'] = 'All the apps are updated on daily basis so you always get to install the latest version of any app.';

$l['wp_manager_title'] = 'WordPress Manager';
$l['wp_manager_desc'] = 'Quickly manage your WordPress installations from the same page. Install, Upgrade, Clone, Staging, Change Admin Password and much more..';

$l['sets_title'] = 'WordPress Plugins / Themes';
$l['sets_desc'] = 'Auto Upgrade WordPress Plugins/Themes. Create WordPress Plugins/Themes sets and install sets on multiple WordPress installs.';

$l['demos_title'] = 'Demos, Ratings & Reviews';
$l['demos_desc'] = 'Check demos, ratings and reviews of the apps so you can decide which app fits your needs perfectly.';

$l['backup_title'] = 'Backup and Restore';
$l['backup_desc'] = 'Backup your full site and restore with one click. You can also choose to auto backup the apps daily, weekly or monthly.';

$l['backup_remote_title'] = 'Backup on Remote Locations';
$l['backup_remote_desc'] = 'Backup your site on remote locations like Dropbox, Google Drive and restore with one click.';

$l['import_title'] = 'Import installations';
$l['import_desc'] = 'If you have installations done manually or with other auto installer you can import them to '.APP.' and manage them.';

$l['remote_import_title'] = 'Remote Import';
$l['remote_import_desc'] = 'One click Import installations from another server to your server and manage them via '.APP.'.';

$l['clone_title'] = 'Clone';
$l['clone_desc'] = 'Quickly Clone your installations and start with pre existing plugins/themes setup.';

$l['staging_title'] = 'Staging';
$l['staging_desc'] = 'Quickly spin a staging instance test the upgrades and then push the changes to live instance.';

