<?php

//////////////////////////////////////////////////////////////
//===========================================================
// create_template_lang.php
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

$l['no_ins'] = 'No installation was submitted';
$l['wrong_ins_title'] = 'Wrong Installation ID';
$l['wrong_ins'] = 'The installation ID you submitted does not exist';
$l['backup_ftp_error'] = 'Could not create Template Directory <b>&soft-1;</b>. Please create manually and try again.';
$l['err_backup'] = 'Could not create Template.';
$l['no_space_backup'] = 'You do not have sufficient space to create a template of this installation!';
$l['err_namelength'] = 'Template Name must be less than 255 characters';
$l['err_nameempty'] = 'Template name cannot be empty';
$l['off_template'] = 'Templating feature has been disabled by admin';

$l['cant_backup_dir'] = 'The Template utility could not copy the files.';
$l['could_not_read'] = 'Oops Softaculous could not read the following file/directory <b>&soft-1;</b> Please make it readable to continue using the template utility.';
$l['cant_datadir_dir'] = 'There were errors while adding the data directory.';
$l['cant_wwwdir'] = 'There were errors while adding the Web directory.';
$l['cant_backup_db'] = 'There were errors while adding the Database to the backup.';
$l['err_perm_file'] = 'There were errors while trying to make a file of permissions';
$l['err_dataperm_file'] = 'There were errors while trying to make a file of permissions of the data directory';
$l['err_wwwperm_file'] = 'There were errors while trying to make a file of permissions of the WEB directory';
$l['save_dir_perms'] = 'Could not save the file permissions';
$l['save_datadir_perms'] = 'Could not save the permissions of the data directory';
$l['save_www_perms'] = 'Could not save the permissions of the Web directory';
$l['cant_connect_mysql'] = 'Could not connect to database, please check the Username/Password of your database. If changed, please update the details in Softaculous installations using Edit Details.';
$l['template_exists'] = 'The template name already exists, please use a different template name.';

//Theme Strings
$l['<title>'] = APP.' - Create Template';
$l['info'] = 'Info';
$l['ins_softname'] = 'Software';
$l['ins_num'] = 'Installation Number';
$l['ins_ver'] = 'Version';
$l['ins_time'] = 'Installation Time';
$l['ins_path'] = 'Path';
$l['ins_wwwdir'] = 'Web Directory Path';
$l['ins_url'] = 'URL';
$l['ins_db'] = 'Database Name';
$l['ins_dbuser'] = 'Database User';
$l['ins_dbpass'] = 'Database Password';
$l['ins_dbhost'] = 'Database Host';
$l['backup_conf'] = 'The template creation may take some time depending on the data. Please do not close the webpage nor navigate to another page.';
$l['backedup'] = 'The template was created successfully. You can access it from the <a href="'.$globals['index'].'act=templates">List Templates</a> page.<br /> Installation URL : <a href="&soft-1;" target="_blank">&soft-1;</a>';
$l['create_template'] = 'Create Template';	
$l['return'] = 'Return to Overview';
$l['return_to_wpm'] = 'Return to WordPress Management';
$l['ins_cron_command'] = 'Cron Command';
$l['checking_data'] = 'Checking the submitted data';
$l['backingup_db'] = 'Adding the Database';
$l['backingup_dir'] = 'Adding the Directory';
$l['backingup_datadir'] = 'Adding the Data Directory';
$l['finishing_process'] = 'Finishing Create Template Process';
$l['wait_note'] = '<b>NOTE:</b> This may take 3-4 minutes. You can leave this page if you wish !';
$l['backingup'] = 'The template is being created in the background. You will be notified by email once its completed.<br /> After the process is completed, you can access it from the <a href="'.$globals['index'].'act=templates">List Templates</a> page.<br /> Installation URL : <a href="&soft-1;" target="_blank">&soft-1;</a>';
$l['check_email'] = 'Please check your email for the status of the template';
$l['prog_backingup'] = 'Creating Template of '; // Dont remove the trailing space
$l['prog_backup_complete'] = 'Template Created.';
$l['template_name'] = 'Template Name';
$l['template_name_exp'] = 'You can save a name for your reference';
$l['backup_operation'] = 'Template Options';
$l['no_backup_functions'] = 'The TEMPLATE FUNCTIONS file could not be found! Please report this to the server administrator.';
$l['no_dir_exists'] = 'The Installation Directory does not exist.';
$l['backup_location_name'] = 'Template Location';
$l['backup_file_empty'] = 'Incorrect template file size : 0';
$l['err_mysql_db'] = 'The MySQL database name is incorrect as the database could not be selected.';

$l['template_type'] = 'Template Type';
$l['exp_template_type'] = 'Choose the template type';
$l['upgrade'] = 'Upgrade Installation';
$l['exp_upgrade'] = 'Instance and its plugins will be upgraded upon installation';
$l['disallow_plugins'] = 'Don\'t allow Plugins & Themes';
$l['exp_disallow_plugins'] = 'Installing new plugins & themes will be disabled on the sites created with this template';
$l['private'] = 'Private (Only you can launch websites from your account using this template)';
$l['shared'] = 'Public (Anyone with your template access can launch website using this template)';
$l['monetize'] = 'Monetize (List your template on '.APP.' store and earn commission)';
$l['invalid_backup_location'] = 'Template location submitted does not exist';
$l['local_folder'] = 'Local Folder';
$l['err_default_backup_loc'] = 'Default template location is empty, please select a default template location in order to create the template on the default location.';

$l['invalid_access_token'] = 'Invalid Access Token. Please Re-Authorize '.APP.' Dropbox APP from the Edit Backup location page in '.APP.' enduser panel';
$l['insufficient_space'] = 'Your Dropbox account is full. Please free some space and attempt the backup after sometime';
$l['incorrect_offset'] = 'Incorrect Offset';

$l['gdrive_err_init'] = 'There were some errors while initiating the backup on Google Drive!!';
$l['gdrive_err_end'] = 'There were some errors while committing backup to your Google Drive account!!';
$l['ampps_notify_premium'] = 'This feature is available in the premium version of AMPPS. Please purchase <b><a href="https://ampps.com/clients">AMPPS Premium</a></b>';

$l['error_max_backup_script'] = 'You have reached the maximum number of (<b>&soft-1;</b>) Templates allowed per script';
$l['error_max_backup_insid'] = 'You have reached the maximum number of (<b>&soft-1;</b>) Templates allowed per installation';

$l['ftp_access'] = 'PHP process is unable to write files to your server. Please configure FTP access to continue.';
$l['configure_domain'] = 'Configure Settings';

$l['wpc_return'] = 'Return to Templates';

$l['backing_up'] = 'Your template is being created in background. You will be notified by email once its completed. You can track the process from the <a href="'.$globals['index'].'act=eu_tasklist">Task List</a> page.<br /> Your installation URL : <a href="&soft-1;" target="_blank">&soft-1;</a>';

$l['rbackup_disabled'] = 'Template on remote locations is disabled by Admin';
$l['rbackup_protocol_disabled'] = 'Template on <b>&soft-1;</b> is disabled by Admin';

$l['onedrive_err_end'] = 'There were some errors while uploading the template to your OneDrive account!';
$l['onedrive_err_upload_url'] = 'Failed to generate OneDrive Upload URL';

$l['dropbox_refresh_token_err'] = 'Failed to generate Dropbox access token. Please re-authorize Dropbox location from Settings -> Edit Backup Location page.';