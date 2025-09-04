<?php

//////////////////////////////////////////////////////////////
//===========================================================
// import_lang.php
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

$l['no_info_file'] = 'Soubor INFO.XML nenalezen! Prosím oznamte to správci serveru.';
$l['incompatible'] = 'Software vyžaduje vyšší verzi ".APP."! Prosím oznamte to správci serveru.';
$l['no_functions'] = 'Soubor IMPORT FUNCTIONS nenalezen! Prosím oznamte to správci serveru.';
$l['no_softdomain'] = 'Nevybrali jste doménu pro importování softwaru.';
$l['disable_import'] = 'Možnost importu je zakázána správcem';
$l['invalid_script'] = 'Neplatné Script ID';

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['import_soft'] = 'Importovat software';
$l['choose_domain'] = 'Zvolit doménu';
$l['choose_domain_exp'] = 'Prosím vyberte doménu, kde je software již instalovaný.';
$l['in_directory'] = 'V adresáři';
$l['in_directory_exp'] = 'Adresář je relativní k vaší doméně. Např. chcete-li importovat software instalovaný na adrese http://mydomain/dir/, stačí zadat <b>dir</b>. Chcete-li importovat software nainstalovaný pouze v http://mydomain/, ponechte toto prázdné.';
$l['softsubmit'] = 'Importovat';
$l['congrats'] = 'Gratulujeme, software byl úspěšně importován.';
$l['succesful'] = 'byl úspěšně importován na';
$l['admin_url'] = 'Admin URL';
$l['enjoy'] = 'Doufáme, že proces importu byl snadný.';
$l['import_notes'] = 'Níže jsou uvedeny některé důležité poznámky. Doporučujeme si je přečíst.';
$l['please_note'] = '<b>POZNÁMKA</b>: '.APP.' je pouze automatický instalátor softwaru a neposkytuje žádnou podporu pro jednotlivé softwarové balíčky. Kvůli podpoře navštivte prosím skript nebo stránky prodejce softwaru.';
$l['regards'] = 'S pozdravem';
$l['softinstaller'] = APP.' auto instalátor';
$l['return'] = 'Zpět na Přehled';
$l['return_to_wpm'] = 'Return to WordPress Management';

$l['choose_protocol'] = 'Vybrat protokol';
$l['choose_protocol_exp'] = 'Pokud vaše stránky mají SSL, pak prosím zvolte HTTPS protokol.';
$l['no_https'] = 'Nebyl nalezen důvěryhodný SSL certifikát';
$l['wrong_softdomain'] = 'Nepodařilo se nalézt cestu ke zvolené doméně.';

//remote import
$l['server_host'] = 'Server host (volitelné)';
$l['server_host_exp'] = '<b>POKUD</b> není doména shodná se server host, zadejte název server host, např. ftp.mojedomena.com';
$l['protocol'] = 'Protokol';
$l['protocol_exp'] = 'Zvolte protokol, který bude Softaculous používat pro komunikaci';
$l['port'] = 'Port';
$l['port_exp'] = 'Zvolte port pro připojení';
$l['domain'] = 'Doména';
$l['domain_exp'] = 'Zadejte platnou doménu, např. mojedomena.com';
$l['ftp_user'] = 'Uživatelské jméno';
$l['ftp_user_exp'] = 'Uživatelské jméno FTP účtu';
$l['ftp_pass'] = 'Heslo';
$l['ftp_pass_exp'] = 'Heslo FTP účtu';
$l['ftp_path'] = 'Cesta';
$l['ftp_path_exp'] = 'Relativní cesta k webovému adrešáři uživatele, např. /public_html';
$l['Installed_path'] = 'Instalační adresář (volitelné)';
$l['Installed_path_exp'] = 'Instalační adresář, např. blog, pokud jste instalovali script v /public_html/blog';
$l['wrong_ftp_path'] = 'Zadaná cesta k FTP neexistuje';
$l['ftp_error-1'] = 'Doména nebyla nalezena';
$l['ftp_error-2'] = 'Přihlašovací údaje k FTP jsou nesprávné';
$l['ftp_error-3'] = 'Zadaná cesta k FTP neexistuje';
$l['imp_err'] = 'Při importu softwaru nainstalovaného v &soft-1; došlo k chybám';
$l['remote_import'] = 'Proces importování vaší instalace byl zahájen na pozadí. Po dokončení budete informováni e-mailem.';
$l['db_err'] = 'Nebylo možné připojit se k databázi';
$l['remote_dir_err'] = 'Vzdálený adresář instalace neexistuje';
$l['err_db_create'] = 'Při vytváření databáze došlo k chybě';
$l['dest_dir_err'] = 'Cílový adresář již existuje';
$l['source'] = 'Zdroj';
$l['destination'] = 'Cíl';
$l['auth_password'] = 'Autorizační metoda'; 
$l['auth_password_exp'] = 'Zvolte autorizační metodu'; 
$l['private_key'] = 'Privátní klíč';
$l['private_key_exp'] = 'Vložte privátní klíč zde';
$l['passphrase'] = 'Přístupová fráze';
$l['passphrase_exp'] = 'Přístupová fráze pro šifrovaný privátní klíč (volitelné)';
$l['database_name'] = 'Název databáze';
$l['database_name_exp'] = 'Zadejte název databáze, která bude vytvořena pro instalaci';
$l['database_exists'] = 'Tato databáze již existuje. Zvolte jiný název.';
$l['databaseuser_exists'] = 'Tento uživatel již existuje';
$l['db_limit_crossed'] = 'Import nemůže být proveden. Byl dosažen maximální počet databází.';
$l['empty_db'] = 'Políčko s názvem databáze je prázdné. Zadejte název databáze';
$l['adv_option'] = 'Pokročilé možnosti';
$l['database_name'] = 'Název databáze';
$l['database_name_exp'] = 'Zadejte název databáze, která bude vytvořena pro instalaci';
$l['db_name_long'] = 'Název databáze nesmí být delší než 7 znaků. Zvolte prosím kratší název databáze';
$l['db_alpha_num'] = 'Název databáze se může skládat pouze z alfanumerických znaků';
$l['remote_btn'] = 'Ze vzdáleného serveru';
$l['local_btn'] = 'Z tohoto serveru';
$l['checking_data'] = 'Kontroluje nahrané soubory';
$l['fetching_remote_db'] = 'Získávám detaily databáze na vzdáleném serveru';
$l['create_db'] = 'Vytvářím databázi';
$l['fetching_remote_files'] = 'Importuji soubory ze vzdáleného severu';
$l['import_complete'] = 'Import dokončen';
$l['import_script'] = 'Import';
$l['no_remote_import'] = 'Vzdálený import není tímto skriptem podporován';
$l['overwrite'] = 'Přepsat soubory';
$l['some_files_exist'] = 'Instalace nemůže pokračovat, protože následující soubory již existují v cílovém adresáři:';
$l['delete_files'] = 'Prosím odstraňte tyto soubory, nebo vyberte jiný adresář.';
$l['overwrite_exist'] = '<b>NEBO</b> <br /><input type="checkbox" name="overwrite_existing" id="overwrite_existing" />&nbsp;&nbsp;<b><span style="color:#000;">Zaškrtněte toto pole pro přepsání všech souborů a pokračování</span></b>';
$l['sftp_path'] = 'SFTP cesta';
$l['sftp_path_exp'] = 'Absolutní cesta k webovému adresáři uživatele, např. /home/UZIVATELSKE_JMENO/public_html';
$l['ftp_error'] = 'Nebylo možné připojit se k FTP serveru';
$l['err_upload_remote'] = 'Nepodařilo se nahrát soubor na FTP';
$l['err_fetch_file'] = 'Nezdařený přístup k souboru na doméně';
$l['err_fetch_path'] = 'Nepodařilo se získat cestu z přijatých souborů';
$l['dbusername'] = 'Uživatelské jméno databáze';
$l['dbusername_exp'] = 'Uživatelské jméno MySQL';
$l['dbuserpass'] = 'Heslo databáze';
$l['dbuserpass_exp'] = 'Heslo MySQL';
$l['database_name_exp_aefer'] = 'Zadejte název databáze, která bude použita pro instalaci';
$l['hostname'] = 'Hostname databáze';
$l['hostname_exp'] = 'Hostname MySQL (typicky <b>localhost</b>)';
$l['no_hostname'] = 'Zadejte Hostname databáze';
$l['no_dbusername'] = 'Zadejte uživatelské jméno databáze';
$l['no_dbuserpass'] = 'Zadejte heslo databáze';
$l['no_db'] = 'Zadejte název databáze';
$l['auth_method_pass'] = 'Heslo';
$l['auth_method_key'] = 'SSH klíč';
$l['no_pass_pri'] = 'Zadejte heslo nebo privátní klíč';
$l['finishing_process'] = 'Dokončování importu';
$l['wait_note'] = '<b>NOTE:</b> This may take 3-4 minutes. You can leave this page if you wish !';

$l['import_push_bg'] = 'Import započal na pozadí';
$l['local_import'] = 'Automaticky detekovat všechny instalace';
$l['choose_domain_import_exp'] = 'Please choose the domain to import the software.';
$l['enter_domain_exp'] = 'Please enter the domain where the software is already installed.';