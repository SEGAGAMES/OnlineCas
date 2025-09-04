<?php

//////////////////////////////////////////////////////////////
//===========================================================
// sclone_lang.php
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
$l['database_exists'] = 'Tato databáza už existuje. Zvoľte iný názov.';
$l['databaseuser_exists'] = 'The database user already exists. Please choose a different database name.';
$l['db_name_long'] = 'Názov databáze nesmie byť dlhší ako 7 znakov. Zvoľte prosím kratší názov databáze';
$l['db_limit_crossed'] = 'The maximum number of databases you can create has been reached, so installation cannot proceed.';
$l['cloning'] = 'Cloning Installation';
$l['staging'] = 'Staging';
$l['downloading'] = 'Downloading Package';
$l['cant_clone_db'] = 'Could not clone the database';
$l['fail_create'] = 'Failed to create the Directory';
$l['fail_create_datadir'] = 'Failed to create the Data Directory';
$l['cant_clone_dir'] = 'The directory cannot be cloned as it is the home directory.';
$l['cant_connect_mysql'] = 'Could not connect to database, please check the Username/Password of your database. If changed, please update the details in Softaculous installations using Edit Details.';
$l['same_ins'] = 'It is not possible to clone an installation to the same location';
$l['ins_exists'] = 'It seems that you already have <b>&soft-1;</b> installed at the chosen location';
$l['ins_recursive'] = 'You cannot create staging in a subdirectory of the original installation';
$l['no_staging_support'] = 'Staging is not supported for this script';
$l['invalid_script'] = 'Neplatné Script ID';
$l['no_domain_found'] = 'Doména sa nenašla. Pre inštaláciu skriptu je nutné vyplniť doménu';

$l['no_cron_min'] = 'Nebola špecifikovaná hodnota minút pre Cron';
$l['no_cron_hour'] = 'Nebola špecifikovaná hodnota hodín pre Cron';
$l['no_cron_day'] = 'Nebola špecifikovaná hodnota dní pre Cron';
$l['no_cron_month'] = 'Nebola špecifikovaná hodnota mesiacov pre Cron';
$l['no_cron_weekday'] = 'Nebola špecifikovaná hodnota dňa v týždni pre Cron';
$l['wrong_cron_min'] = 'Cron minute is wrong. Valid values are 0-59 or a <b>*</b>';
$l['wrong_cron_hour'] = 'Cron hour is wrong. Valid values are 0-23 or a <b>*</b>';
$l['wrong_cron_day'] = 'Cron day is wrong. Valid values are 1-31 or a <b>*</b>';
$l['wrong_cron_month'] = 'Cron month is wrong. Valid values are 1-12 or a <b>*</b>';
$l['wrong_cron_weekday'] = 'Cron weekday is wrong. Valid values are 0-7 or a <b>*</b>';
$l['no_datadir'] = 'No Data directory was specified';
$l['datadir_exists'] = 'The data directory you submitted exists. Please specify another one.';
$l['no_decompress_data'] = 'There were some errors in decompressing the DATA files.';
$l['some_files_exist'] = 'Inštalácia nemôže pokračovať, pretože nasledujúce súbory už existujú v cieľovom adresári:';
$l['delete_files'] = 'Prosím odstráňte tieto súbory, alebo vyberte iný adresár.';
$l['overwrite_exist'] = '<b>ALEBO</b> <br /><input type="checkbox" name="overwrite_existing" id="overwrite_existing" />&nbsp;&nbsp;<b><span style="color:#000;">Zaškrtnite toto pole pre prepis všetkých súborov a pokračovanie</span></b>';
$l['prog_staging'] = 'Staging '; // Dont remove trailing space
$l['prog_staging_complete'] = 'Staging Completed.';
$l['checking_data'] = 'Kontrolujem nahrané súbory';
$l['unzipping_files'] = 'Copying files and folders';
$l['unzipping_datadir'] = 'Unzipping data files';
$l['prop_db'] = 'Propagating the database';
$l['finishing_process'] = 'Finishing Staging';
$l['wait_note'] = '<b>NOTE:</b> This may take 3-4 minutes. Please do not leave this page until the progress bar reaches 100%';
$l['no_hostname'] = 'Zadajte Hostname databáze';
$l['no_dbusername'] = 'Zadajte užívateľské meno databáze';
$l['no_dbuserpass'] = 'Zadajte heslo databáze';
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
$l['<title>'] = APP.' - Staging Installation';
$l['info'] = 'Info';
$l['ins_softname'] = 'Software';
$l['ins_num'] = 'Installation Number';
$l['ins_ver'] = 'Version';
$l['ins_time'] = 'Installation Time';
$l['ins_path'] = 'Cesta';
$l['ins_url'] = 'URL';
$l['ins_admin_url'] = 'Admin URL';
$l['ins_db'] = 'Názov databáze';
$l['ins_dbuser'] = 'Database User';
$l['ins_dbpass'] = 'Heslo databáze';
$l['ins_dbhost'] = 'Database Host';
$l['ins_datadir'] = 'Data Directory';
$l['ins_wwwdir'] = 'Web Directory';
$l['ins_wwwurl'] = 'Web Directory URL';
$l['ins_cron_command'] = 'Cron Command';
$l['cloned'] = 'The installation has been cloned successfully';
$l['staging_ins'] = 'Staging Installation Details';
$l['create_staging'] = 'Vytvoriť Stag';
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
$l['db_name_long'] = 'Názov databáze nesmie byť dlhší ako 7 znakov. Zvoľte prosím kratší názov databáze';
$l['db_alpha_num'] = 'Názov databáze sa môže skladať iba z alfanumerických znakov';
$l['overwrite'] = 'Prepísať súbory';
$l['database_exists'] = 'Tato databáza už existuje. Zvoľte iný názov.';
$l['no_softdomain'] = 'You did not choose the domain to install the software.';
$l['wrong_softdomain'] = 'The path of the domain you selected could not be found.';
$l['no_space'] = 'You do not have sufficient space to install this software!';
$l['no_softdb'] = 'The database was not posted.';
$l['choose_domain'] = 'Choose Domain';
$l['choose_domain_exp'] = 'Please choose the domain to install the software.';
$l['in_directory'] = 'In Directory';
$l['in_directory_exp'] = 'The directory is relative to your domain and <b>should not exist</b>. e.g. To install at http://mydomain/dir/ just type <b>dir</b>. To install only in http://mydomain/ leave this empty.';
$l['database_name'] = 'Názov databáze';
$l['database_name_exp'] = 'Zadajte názov databáze, ktorá bude vytvorená pre inštaláciu';
$l['softcopy_note'] = '<b>NOTE</b>: This software requires that it be installed using its own installation utility. Please visit the URL that will be shown once the files have been copied to complete the installation process.';
$l['softsubmit'] = 'Clone';
$l['congrats'] = 'Congratulations, the staging was created successfully';
$l['succesful'] = 'Staging has been successfully created at';
$l['admin_url'] = 'Administrative URL';
$l['setup_continue'] = 'However, setup will be completed by the software itself. To complete setup, please visit the following URL';
$l['enjoy'] = 'We hope the installation process was easy.';
$l['install_notes'] = 'The following are some important notes. It is highly recommended that you read them ';
$l['please_note'] = '<b>NOTE</b>: '.APP.' is just an automatic software installer and does not provide any support for the individual software packages. Please visit the software vendor\'s web site for support!';
$l['regards'] = 'Regards';
$l['softinstaller'] = APP.' Auto Installer';
$l['return'] = 'Return to Overview';
$l['return_to_wpm'] = 'Return to WordPress Management';
$l['live_ins_url'] = 'Live Installation URL';
$l['live_ins_url_exp'] = 'This is the source installation URL';

// These strings are for Softaculous Remote
$l['hostname'] = 'Hostname databáze';
$l['hostname_exp'] = 'Hostname MySQL (typicky <b>localhost</b>)';
$l['dbusername'] = 'Užívateľské meno databáze';
$l['dbusername_exp'] = 'Užívateľské meno MySQL';
$l['dbuserpass'] = 'Heslo databáze';
$l['dbuserpass_exp'] = 'Heslo MySQL';
$l['database_name_exp_aefer'] = 'Zadajte názov databáze, ktorá bude použitá pre inštaláciu';

$l['staging_tweet_sub'] = 'Dát vedieť priateľom';

$l['soft_ins_exists'] = 'An installation already exists at &soft-1; as per our records. To clone the application at this location please uninstall the existing installation!';

$l['no_sclone'] = 'The CLONE.XML file could not be found! Please report this to the server administrator.';
$l['no_functions'] = 'The CLONE FUNCTIONS file could not be found! Please report this to the server administrator.';

$l['staging_push_bg'] = 'Staging has been pushed in background';
$l['err_mysql_db'] = 'Databáza MySQL nemohla byť vybraná, názov databáze je nesprávny.';

$l['max_staging_error'] = 'You have reached the maximum number of (<b>&soft-1;</b>) staging installation(s) allowed. Please delete unwanted staging installation(s) to be able to create a new staging copy';

$l['error_max_staging_script'] = 'Dosiahli ste maximálny počet Stagov (<b>&soft-1;</b>) pre jeden skript.';

$l['choose_url'] = 'Zvoľte inštalačnú URL';
$l['choose_url_exp'] = 'Zvoľte URL pre inštaláciu softwaru';

$l['ampps_notify_premium'] = 'Táto funkcia je prístupná iba v prémiových verziách AMPPS. Zakúpiť ich môžete tu <b><a href="https://ampps.com/clients">AMPPS Premium</a></b>';

$l['failed_rsync'] = 'Failed to rsync the installation files';
$l['failed_rsync_datadir'] = 'Failed to rsync the data directory files';
$l['wp_cli_replace_fail'] = 'Failed to replace data in destination site (using wp-cli)';

$l['error_table_exists'] = 'The table <b>&soft-1;</b> already exists in the destination database';
$l['db_details_mismatch'] = 'Database details in your configuration file do not match with details in Softaculous records';
$l['fetch_db_details'] = 'Fetch the database details automatically from your installation\'s configuration file while staging ?';