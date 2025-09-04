<?php

//////////////////////////////////////////////////////////////
//===========================================================
// restore_lang.php
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

$l['restoreerror'] = 'There was some error while unzipping the template files';
$l['restoredatadir'] = 'Unable to restore data directory';
$l['restorewww'] = 'Unable to restore Web directory';
$l['res_err_selectmy'] = 'Could not select the database to restore';
$l['err_myconn'] = 'Could not connect to the database';
$l['err_db_create'] = 'Error occured while creating Database';
$l['off_template'] = 'Templates feature has been disabled by admin';
$l['no_backupinfo_file'] = 'Template info file not found';
$l['no_backup_time'] = 'Template time not found';
$l['instime_higher_than_btime'] = 'Installation time is higher than the Template time';

$l['no_template_file'] = 'Template file does not exist';
$l['no_template_info'] = 'Template Info file does not exist';

//Theme Strings
$l['<title>'] = APP.' - Restore';
$l['restorefile'] = 'Restore from Template';
$l['restore_dir'] = 'Restore Directory';
$l['restore_dir_exp'] = 'If you check this the entire folder will be restored';
$l['restore_datadir'] = 'Restore Data Directory';
$l['restore_datadir_exp'] = 'If checked the Data directory will be restored';
$l['restore_db'] = 'Restore Database';
$l['restore_db_exp'] = 'If checked the database will also be restored';
$l['restore_ins'] = 'Restore Template';
$l['restore'] = 'Your Template has been restored successfully';
$l['confirm_restore'] = 'Are you sure you want to restore the installation ?';
$l['return'] = 'Return to Overview';
$l['return_to_wpm'] = 'Return to WordPress Management';
$l['restore_wwwdir'] = 'Restore Web Directory';
$l['restore_wwwdir_exp'] = 'If checked the Web directory will be restored';
$l['checking_data'] = 'Checking the submitted data';
$l['res_db'] = 'Restoring the Database';
$l['res_dir'] = 'Restoring the Directory';
$l['res_datadir'] = 'Restoring the Data Directory';
$l['finishing_process'] = 'Template Restored';
$l['wait_note'] = '<b>NOTE:</b> This may take 3-4 minutes. Please do not leave this page until the progress bar reaches 100%';
$l['restoring'] = 'Your template is being restored in background. You will be notified by email once its completed. You can track the restore process from the <a href="'.$globals['index'].'act=eu_tasklist">Task List</a> page.';
$l['prog_restoring'] = 'Restoring Template';
$l['prog_restore_complete'] = 'Restore Completed.';
$l['no_restore_functions'] = 'The RESTORE FUNCTIONS file could not be found! Please report this to the server administrator.';
$l['backup_file_empty'] = 'Template file is empty';
$l['db_not_exist'] = 'Database file does not exist';
$l['db_empty'] = 'The database file is empty';
$l['ampps_notify_premium'] = 'This feature is available in the premium version of AMPPS. Please purchase <b><a href="https://ampps.com/clients">AMPPS Premium</a></b>';

$l['read_archive'] = 'Reading the archive';

$l['wpc_return'] = 'Return to Templates';

$l['restore_delete_files'] = 'Delete existing files/folders';
$l['restore_delete_files_exp'] = 'If checked existing files/folders will be deleted and then the template files will be restored. <br /><b>Note</b>: Please make sure that you chose Full Template while creating this Template.';

$l['no_restore_file_param'] = 'Template file name was not passed. It is required to start the restore process.';
$l['no_space'] = 'You do not have sufficient space to install this software!';
$l['no_softdomain'] = 'You did not choose the domain to install the software.';
$l['wrong_softdomain'] = 'The path of the domain you selected could not be found.';

//Temp

$l['no_ins'] = 'No installation was submitted';
$l['wrong_ins_title'] = 'Wrong Installation ID';
$l['wrong_ins'] = 'The installation ID you submitted does not exist';
$l['no_info_file'] = 'The INFO.XML file could not be found! Please report this to the server administrator.';
$l['incompatible'] = 'The software requires a higher version of '.APP.'! Please report this to the server administrator.';
$l['no_install'] = 'The INSTALL.XML file could not be found! Please report this to the server administrator.';
$l['no_functions'] = 'The CLONE FUNCTIONS file could not be found!';
$l['no_clone'] = 'No Clone';
$l['no_softdomain'] = 'You did not choose the domain to install the software.';
$l['wrong_softdomain'] = 'The path of the domain you selected could not be found.';
$l['softdirectory_exists'] = 'The directory you typed already exists! Please type in another directory name.';
$l['no_space'] = 'You do not have sufficient space to install this software!';
$l['no_softdb'] = 'The database was not posted.';
$l['database_exists'] = 'The database already exists. Please choose a different name.';
$l['databaseuser_exists'] = 'The database user already exists. Please choose a different database name.';
$l['db_name_long'] = 'The database name cannot be greater than 7 letters. Please choose a shorter database name.';
$l['db_limit_crossed'] = 'The maximum number of databases you can create has been reached, so installation cannot proceed.';
$l['restoring_template'] = 'Restoring Template';
$l['restore_template'] = 'Restore Template';
$l['downloading'] = 'Downloading Package';
$l['cant_restore_db'] = 'Could not import the database';
$l['fail_create'] = 'Failed to create the Directory';
$l['fail_create_datadir'] = 'Failed to create the Data Directory';
$l['cant_clone_dir'] = 'The directory cannot be restored as it is the home directory.';
$l['cant_connect_mysql'] = 'Could not connect to database, please check the Username/Password of your database. If changed, please update the details in Softaculous installations using Edit Details.';
$l['same_ins'] = 'It is not possible to clone an installation to the same location';
$l['ins_exists'] = 'It seems that you already have <b>&soft-1;</b> installed at the chosen location';
$l['ins_recursive'] = 'You cannot restore the template in a subdirectory of the original installation';
$l['no_restore_template_support'] = 'Template feature is not supported for this script';
$l['invalid_script'] = 'Invalid Script ID';
$l['no_domain_found'] = 'No domain found. Please add a domain to restore a template';

$l['no_cron_min'] = 'No Cron minute was specified';
$l['no_cron_hour'] = 'No Cron hour was specified';
$l['no_cron_day'] = 'No Cron day was specified';
$l['no_cron_month'] = 'No Cron month was specified';
$l['no_cron_weekday'] = 'No Cron weekday was specified';
$l['wrong_cron_min'] = 'Cron minute is wrong. Valid values are 0-59 or a <b>*</b>';
$l['wrong_cron_hour'] = 'Cron hour is wrong. Valid values are 0-23 or a <b>*</b>';
$l['wrong_cron_day'] = 'Cron day is wrong. Valid values are 1-31 or a <b>*</b>';
$l['wrong_cron_month'] = 'Cron month is wrong. Valid values are 1-12 or a <b>*</b>';
$l['wrong_cron_weekday'] = 'Cron weekday is wrong. Valid values are 0-7 or a <b>*</b>';
$l['no_datadir'] = 'No Data directory was specified';
$l['datadir_exists'] = 'The data directory you submitted exists. Please specify another one.';
$l['no_decompress_data'] = 'There were some errors in decompressing the DATA files.';
$l['some_files_exist'] = 'Installation cannot proceed because the following files already exist in the target folder : ';
$l['delete_files'] = 'Please delete these files or choose another folder.';
$l['overwrite_exist'] = '<b>OR</b> <br /><input type="checkbox" name="overwrite_existing" id="overwrite_existing" />&nbsp;&nbsp;<b><span style="color:#000;">Select the checkbox to overwrite all files and continue</span></b>';
$l['prog_cloning'] = 'Restoring Template'; // Dont remove trailing space
$l['prog_cloning_complete'] = 'Restore Template Completed.';
$l['checking_data'] = 'Checking the submitted data';
$l['unzipping_files'] = 'Copying files and folders';
$l['unzipping_datadir'] = 'Unzipping data files';
$l['prop_db'] = 'Propagating the database';
$l['finishing_process'] = 'Finishing Restore Template';
$l['wait_note'] = '<b>NOTE:</b> This may take 3-4 minutes. Please do not leave this page until the progress bar reaches 100%';
$l['no_hostname'] = 'Please enter your Database Hostname';
$l['no_dbusername'] = 'Please enter your Database Username';
$l['no_dbuserpass'] = 'Please enter your Database Password';
$l['softdirectory_invalid'] = 'The directory you typed is invalid.';
$l['softdatadir_invalid'] = 'The data directory you typed is invalid.';
$l['err_domain'] = 'No Domain';
$l['err_domain_admin'] = 'This User does not have any Domain. Please contact Administrator.';
$l['no_https'] = 'A trusted SSL Certificate was not found';
$l['no_php_install'] = 'PHP is not installed. To install it, please click <a href="'.$globals['index'].'act=apps&app=1">here</a>';
$l['no_mysql_install'] = 'MySQL is not installed. To install it, please click <a href="'.$globals['index'].'act=apps&app=16">here</a>';
$l['no_field'] = 'The field <b>&soft-1;</b> is required and must be filled out.';
$l['error_adddb'] = 'The database could not be created';
$l['error_adduser'] = 'There was an error in adding a user to the new database';
$l['no_package'] = 'The installation package could not be found!';
$l['no_decompress'] = 'There were some errors in decompressing the package files.';

//Theme Strings
$l['<title>'] = APP.' - Restore Template';
$l['info'] = 'Template Info';
$l['ins_softname'] = 'Software';
$l['template_name'] = 'Template Name';
$l['ins_num'] = 'Installation Number';
$l['ins_ver'] = 'Version';
$l['ins_time'] = 'Template Creation Time';
$l['ins_path'] = 'Path';
$l['ins_url'] = 'Original URL of Template';
$l['ins_admin_url'] = 'Admin URL';
$l['ins_db'] = 'Database Name';
$l['ins_dbuser'] = 'Database User';
$l['ins_dbpass'] = 'Database Password';
$l['ins_dbhost'] = 'Database Host';
$l['ins_datadir'] = 'Data Directory';
$l['ins_wwwdir'] = 'Web Directory';
$l['ins_wwwurl'] = 'Web Directory URL';
$l['ins_cron_command'] = 'Cron Command';
$l['cloned'] = 'The template has been restored successfully';
$l['restored'] = 'The template has been restored successfully';
$l['clone_ins'] = 'Restore Installation Details';
$l['cloneins'] = 'Restore Template';
$l['choose_protocol'] = 'Choose Protocol';
$l['choose_protocol_exp'] = 'If your site has SSL, then please choose the HTTPS protocol.';
$l['cron_job'] = 'CRON Job';
$l['cron_job_exp'] = 'This script requires a CRON to work. Please specify the CRON timings. If you are unaware of it, leave it as it is!';
$l['cron_min'] = 'Min';
$l['cron_hour'] = 'Hour';
$l['cron_day'] = 'Day';
$l['cron_month'] = 'Month';
$l['cron_weekday'] = 'Weekday';
$l['datadir'] = 'Data Directory';
$l['datadir_exp'] = 'This script requires to store its data in a folder not accessible via the web. It will be created in your home folder. i.e. if you specify <b>datadir</b> the following will be created - /home/username/<b>datadir</b>';
$l['db_name_long'] = 'The database name cannot be greater than 7 letters. Please choose a shorter database name.';
$l['db_alpha_num'] = 'Only alpha numeric characters are allowed for the Database name.';
$l['overwrite'] = 'Overwrite Files';
$l['database_exists'] = 'The database already exists. Please choose a different name.';
$l['no_softdomain'] = 'You did not choose the domain to restore the template.';
$l['wrong_softdomain'] = 'The path of the domain you selected could not be found.';
$l['no_space'] = 'You do not have sufficient space to restore this template!';
$l['no_softdb'] = 'The database was not posted.';
$l['choose_domain'] = 'Choose Domain';
$l['choose_domain_exp'] = 'Please choose the domain to restore the template.';
$l['in_directory'] = 'In Directory';
$l['in_directory_exp'] = 'The directory is relative to your domain and <b>should not exist</b>. e.g. To install at http://mydomain/dir/ just type <b>dir</b>. To install only in http://mydomain/ leave this empty.';
$l['database_name'] = 'Database Name';
$l['database_name_exp'] = 'Type the name of the database to be created for the installation';
$l['softcopy_note'] = '<b>NOTE</b>: This software requires that it be installed using its own installation utility. Please visit the URL that will be shown once the files have been copied to complete the installation process.';
$l['softsubmit'] = 'Restore Template';
$l['congrats'] = 'Congratulations, the template was restored successfully';
$l['succesful'] = 'template has been successfully restored at';
$l['admin_url'] = 'Administrative URL';
$l['setup_continue'] = 'However, setup will be completed by the software itself. To complete setup, please visit the following URL';
$l['enjoy'] = 'We hope the restore process was easy.';
$l['install_notes'] = 'The following are some important notes. It is highly recommended that you read them ';
$l['please_note'] = '<b>NOTE</b>: '.APP.' is just an automatic software installer and does not provide any support for the individual software packages. Please visit the software vendor\'s web site for support!';
$l['regards'] = 'Regards';
$l['softinstaller'] = APP.' Auto Installer';
$l['return'] = 'Return to Overview';
$l['return_to_wpm'] = 'Return to WordPress Management';

// These strings are for Softaculous Remote
$l['hostname'] = 'Database Hostname';
$l['hostname_exp'] = 'The MySQL hostname (mainly <b>localhost</b>)';
$l['dbusername'] = 'Database Username';
$l['dbusername_exp'] = 'The MySQL username';
$l['dbuserpass'] = 'Database Password';
$l['dbuserpass_exp'] = 'The password of the MySQL user';
$l['database_name_exp_aefer'] = 'Type the name of the database to be used for the installation';

$l['restore_template_tweet_sub'] = 'Tell your friends';

$l['soft_ins_exists'] = 'An installation already exists at &soft-1; as per our records. To restore the template at this location please uninstall the existing installation!';

$l['no_sclone'] = 'The CLONE.XML file could not be found! Please report this to the server administrator.';
$l['no_functions'] = 'The CLONE FUNCTIONS file could not be found! Please report this to the server administrator.';

$l['restore_template_push_bg'] = 'Template Restore process has been pushed in background';
$l['err_mysql_db'] = 'The MySQL database name is incorrect as the database could not be selected.';
$l['ampps_notify_premium'] = 'This feature is available in the premium version of AMPPS. Please purchase <b><a href="https://ampps.com/clients">AMPPS Premium</a></b>';

$l['error_max_clone_script'] = 'You have reached the maximum number of (<b>&soft-1;</b>) Templates allowed per script';

$l['choose_url'] = 'Choose Installation URL';
$l['choose_url_exp'] = 'Please choose the URL to install the software';

$l['failed_rsync'] = 'Failed to rsync the installation files';
$l['failed_rsync_datadir'] = 'Failed to rsync the data directory files';
$l['wp_cli_replace_fail'] = 'Failed to replace data in destination site (using wp-cli)';

$l['error_table_exists'] = 'The table <b>&soft-1;</b> already exists in the destination database';
$l['fetch_db_details'] = 'Allow Softaculous to fetch the database details while restoring ?';
$l['db_details_mismatch'] = 'Database details in the configuration file does not match with details in '.APP.'.';

