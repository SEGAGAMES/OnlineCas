<?php

//////////////////////////////////////////////////////////////
//===========================================================
// adddomain_lang.php
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

$l['no_domain'] = 'Nem lett megadva domain név';
$l['alreay_exists'] = 'A megadott domain már létezik a fiókjában.';
$l['no_ftp_user'] = 'Nem lett megadva FTP felhasználó';
$l['no_ftp_pass'] = 'Nem lett megadva FTP jelszó';
$l['no_ftp_path'] = 'Nem lett megadva FTP útvonal';
$l['no_backup_path'] = 'Nem lett megadva Backup útvonal';
$l['no_data_dir'] = 'Nem lett megadva Adat Könyvtár';
$l['wrong_ftp_path'] = 'A beírt FTP útvonal hibás és nem mutat a megadott domain névre.';
$l['ftp_error-1'] = 'Nem feloldható domain név';
$l['ftp_error-2'] = 'Nem tudott belépni a megadott FTP adatokkal';
$l['ftp_error-3'] = 'A megadott FTP útvonal nem létezik';
$l['no_port'] = 'Nem lett megadva Port';
$l['no_pub_allowed'] = 'Nyilvános Kulcs nem szükséges amíg a hitelesítő jelszót használja';
$l['no_public_key'] = 'Nincs útvonal a nyilvános kulcshoz';
$l['no_private_key'] = 'Nincs útvonal a privát kulcshoz';
$l['err_sftp_only'] = 'Csak az SFTP teszi lehetővé a kulcsokon keresztüli hitelesítést';
$l['no_pub_pri'] = 'Nyilvános vagy privát Kulcs nem található';
$l['no_protocol'] = 'Érvénytelen protokoll';
$l['not_allowed'] = 'Nem adhat hozzá domain nevet';
$l['ftp_error'] = 'Nem lehet csatlakozni az FTP kiszolgálóhoz';
$l['err_upload_remote'] = 'Nem lehet feltölteni a fájlt az FTP útvonalon';
$l['err_fetch_file'] = 'Nem lehet elérni a domain névhez feltöltött fájlt';
$l['err_fetch_path'] = 'Nem lehet lekérni az útvonalat a kapott adatokból';


//Theme Strings
$l['<title>'] = 'Add a Domain';
$l['add_domain'] = 'Add Domain';
$l['domain'] = 'Domain név';
$l['domain_exp'] = 'Enter a valid domain name (without http://) e.g. mydomain.com';
$l['ftp_user'] = 'Felhasználónév';
$l['ftp_user_exp'] = 'Az FTP fiókja felhasználóneve';
$l['ftp_pass'] = 'Jelszó';
$l['ftp_pass_exp'] = 'Az FTP fiókja jelszava';
$l['ftp_path'] = 'Útvonal';
$l['ftp_path_exp'] = 'The FTP Path to your domain e.g. /public_html';
$l['backup_path'] = 'Backup Path';
$l['backup_path_exp'] = 'The Backup Path for your Backups made by Softaculous e.g. /backups';
$l['data_dir'] = 'Data Directory';
$l['data_dir_exp'] = 'Full Path to Data Directory e.g. /home/USER/datadir<br/>Some scripts like Elgg, Moodle, etc need a non web accessible folder.<br/>This will be used for that purpose.';
$l['ins_email_exp'] = 'Send an email containing setup details when you install a new software';
$l['submit_add'] = 'Test and Save Domain';
$l['settings_saved'] = 'Your Domain was saved successfully';
$l['show_all_dom'] = 'Show all domains';
$l['port'] = 'Port';
$l['port_exp'] = 'Írja be a portot a csatlakozáshoz';
$l['protocol'] = 'Protokoll';
$l['protocol_exp'] = 'Válassza ki a protokollt, amelyen keresztül a Softaculous kommunikálni fog';
$l['auth_password'] = 'Hitelesítési módszer'; 
$l['auth_password_exp'] = 'Válassza ki a hitelesítési módszert'; 
$l['private_key'] = 'Privát kulcs'; 
$l['private_key_exp'] = 'Illessze be ide a privát kulcsot'; 
$l['passphrase'] = 'Jelszó';
$l['passphrase_exp'] = 'Jelszó a titkosított privát kulcshoz (opcionális)';
$l['sftp_path'] = 'Web Directory';
$l['sftp_path_exp'] = 'Abszolút útvonal a felhasználó weben elérhető könyvtárához pl. /home/USERNAME/public_html';
$l['sbackup_path_exp'] = 'Absolute path to Backup Directory e.g /home/USERNAME/backups';
$l['server_host'] = 'Kiszolgáló (opcionális)';
$l['server_host_exp2'] = 'Enter your server host name';
$l['server_host_exp'] = '<b>Ha</b> a domain neve éa a kiszolgáló nem ugyanaz, akkor adja meg a kiszolgálót pl. ftp.mydomain.com';
$l['auth_method_pass'] = 'Jelszó'; 
$l['auth_method_key'] = 'SSH kulcs'; 
$l['no_pass_pri'] = 'Kérjük, adjon meg egy jelszót vagy a privát kulcsot'; 
$l['err_reconnect'] = 'Could not reconnect to database';
