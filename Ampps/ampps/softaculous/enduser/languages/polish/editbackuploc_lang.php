<?php

//////////////////////////////////////////////////////////////
//===========================================================
// editbackuploc_lang.php
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

//Error Strings
$l['ftp_error-1'] = 'Nie można rozwiązać nazwy domeny';
$l['ftp_error-2'] = 'Logowanie niemożliwe za pomocą podanych danych';
$l['ftp_error-3'] = 'Podana ścieżka FTP nie istnieje';
$l['ftp_error'] = 'Połączenie z FTP nie było możliwe';
$l['no_ftp_user'] = 'Nie sprecyzowano użytkownika FTP';
$l['no_backup_loc'] = 'Nie sprecyzowano lokalizacji Backup';
$l['no_backup_loc_name'] = 'No backup location name was specified';
$l['no_protocol'] = 'Nieprawidłowy Protokół';
$l['no_server_host'] = 'Nie sprecyzowano hosta serwera';
$l['record_exists'] = 'Lokalizacja backup o tej samej ścieżce już istnieje';

//Theme Strings
$l['<title>'] = 'Edytuj Lokalizację Backup';
$l['edit_backup'] = 'Edytuj Lokalizację Backup';
$l['location_name'] = 'Nazwa Lokalizacji';
$l['location_name_exp'] = 'Wybierz nazwę lokalizacji backup do własnego użytku';
$l['protocol'] = 'Protokół';
$l['protocol_exp'] = 'Select the protocol by which '.APP.' will communicate';
$l['server_host'] = 'Server Host (Required)';
$l['server_host_exp'] = 'Enter the server host e.g. ftp.mydomain.com';
$l['port'] = 'Port';
$l['port_exp'] = 'Enter the port to connect (default FTP port is <b>21</b>)';
$l['ftp_user'] = 'Użytkownik';
$l['ftp_user_exp'] = 'Nazwa użytkownika konta FTP';
$l['ftp_pass'] = 'Hasło';
$l['ftp_pass_exp'] = 'Hasło do konta FTP';
$l['backup_loc'] = 'Lokalizacja Backupu';
$l['rel_backup_loc_exp'] = 'Relative path from FTP user\'s directory e.g. /backups';
$l['abs_backup_loc_exp'] = 'Ścieżka bezwzględna do lokalizacji backup, np. /home/USERNAME/backups';
$l['dropbox_backup_loc_exp'] = 'Lokalizacja Backup, np. /backups. Możesz pozostawić pole puste, aby zezwolić APP na wybranie ścieżki.';
$l['edit_backup_loc'] = 'Zapisz zmiany';
$l['backup_loc_saved'] = 'Szczegóły lokalizacji backup zostały zapisane';
$l['ftp'] = 'FTP';
$l['return_settings'] = 'Powrót do Ustawień';
$l['invalid_backup_loc'] = 'Ścieżka backup nie jest ścieżką bezwzględną. Wprowadź ścieżkę bezwzględną'; 
$l['no_pass_pri'] = 'Please provide either a passoword or private key'; 
$l['off_rbackup'] = 'Backup w lokalizacji zdalnej jest wyłączony przez Admina';
$l['no_backup_loc_id'] = 'ID lokalizacji backup nie został upubliczniony';
$l['invalid_backup_loc_id'] = 'ID lokalizacji backup jest nieprawidłowy';

$l['dropbox'] = 'Dropbox';
$l['dropbox_authorization'] = 'Autoryzacja';
$l['dropbox_authorize'] = 'Ponowna autoryzacja';
$l['dropbox_authorization_exp'] = 'Kliknij, aby ponownie autoryzować dostęp APP do tworzenia backupów na koncie Dropbox. Kliknij na przycisk <b>Ponowna autoryzacja</b> i wykonaj podane kroki. Zapisz wygenerowany kod i wprowadź go w polu tekstowym <b>Auth Code</b> poniżej';
$l['dropbox_code'] = 'Auth Code';
$l['dropbox_code_exp'] = 'Wprowadź kod wygenerowany po zezwoleniu na dostęp poprzez przycisk <b>Re-Authorize</b>';
$l['dropbox_auth_tooltip'] = 'Wciśnij przycisk, aby autoryzować Dropbox Access';
$l['no_dropbox_access'] = 'Autoryzuj '.APP.' w swoim Dropbox';
$l['token_gen_failed'] = 'Generowanie żetonu dostępowego Dropbox nie powiodło się';
$l['dropbox_backup_loc'] = 'Lokalizacja Backup (opcjonalnie)';

$l['ftps'] = 'FTPS';
$l['sftp'] = 'SFTP';
$l['auth_password'] = 'Metoda autentykacji';
$l['auth_password_exp'] = 'Wybierz metodę autentykacji';
$l['private_key'] = 'Klucz Prywatny';
$l['private_key_exp'] = 'Wklej Prywatny Klucz tutaj';
$l['passphrase'] = 'Fraza klucz';
$l['passphrase_exp'] = 'Passphrase for the private key (Optional)';
$l['auth_method_pass'] = 'Hasło';
$l['auth_method_key'] = 'Klucz SSH';

$l['gdrive'] = 'Google Drive';
$l['rbackup_protocol_disabled'] = 'Backup w <b>&soft-1;</b> jest wyłączony przez Admina';

$l['webdav'] = 'WebDAV';
$l['webdav_port_exp'] = 'Wprowadź port do połączenia (standardowy port WebDAV to <b>80</> dla niezabezpieczonego i <b>443</b> na zabezpieczonego połączenia)';
$l['webdav_ftp_user_exp'] = 'Nazwa użytkownika konta WebDAV';
$l['webdav_ftp_pass_exp'] = 'Hasło do konta WebDAV';
$l['webdav_backup_loc_exp'] = 'Ścieżka z lokalizacji użytkownika WebDAV np. /backups';
$l['webdav_server_host_exp'] = 'Wprowadź host serwera np. webdav.mojadomena.pl';
$l['no_webdav_connect'] = 'Połączenie z serwerem WebDAV nie powiodło się';

$l['onedrive'] = 'Microsoft OneDrive';
$l['aws_s3bucket'] = 'Amazon S3';
$l['aws_endpoint'] = 'AWS S3 Endpoint';
$l['aws_endpoint_exp'] = 'Enter your AWS S3 Endpoint e.g. "s3.amazonaws.com"<br /> For more Information <a href="https://docs.aws.amazon.com/general/latest/gr/s3.html" target="_blank">Click here</a>';
$l['aws_region'] = 'AWS S3 Region';
$l['aws_region_exp'] = 'Enter your AWS S3 Region e.g. "us-east-1"<br />  For more Information <a href="https://docs.aws.amazon.com/general/latest/gr/s3.html" target="_blank">Click here</a>';
$l['aws_bucketname'] = 'AWS S3 Bucket Name';
$l['aws_accessKey'] = 'AWS S3 Access Key';
$l['aws_secretKey'] = 'AWS S3 Secret Key';
$l['aws_backup_loc'] = 'AWS S3 Backup Location (Optional)';
$l['aws_backup_loc_exp'] = 'Backup Directory e.g. /backups  or you can leave empty to allow '.APP.' to manage the backup directory';
$l['aws_bucketname_exp'] = 'Enter the AWS S3 bucket name where you wish to create softaculous backups. If the bucket is not present, it will be created automatically<br /> For Bucket Naming Rules <a href="https://docs.aws.amazon.com/AmazonS3/latest/userguide/bucketnamingrules.html" target="_blank">Click here</a>';
$l['no_accessKey'] = 'Please provide the AWS S3 access key';
$l['no_secretKey'] = 'Please provide the AWS S3 secret key';
$l['no_endpoint'] = 'Please provide the AWS S3 endpoint';
$l['no_region'] = 'Please provide the AWS S3 region';
$l['no_bucket'] = 'Please provide the AWS S3 bucket name';
$l['create_bucket_failed'] = 'Failed to create bucket \'&soft-1;\'';