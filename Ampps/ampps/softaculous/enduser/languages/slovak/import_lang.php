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

$l['no_info_file'] = 'Súbor INFO.XML nebol nájdený! Prosím, oznámte to správcovi servera.';
$l['incompatible'] = 'Softvér požaduje vyššiu verziu '.APP.'! Prosím, oznámte to správcovi servera.';
$l['no_functions'] = 'Súbor IMPORT FUNCTIONS nebol nájdený! Prosím, oznámte to správcovi servera.';
$l['no_softdomain'] = 'Nevybrali ste doménu pre importovanie softvéru.';
$l['disable_import'] = 'Možnosť importu je zakázaná správcom';
$l['invalid_script'] = 'Neplatné Script ID';

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['import_soft'] = 'Importovať softvér';
$l['choose_domain'] = 'Vybrať doménu';
$l['choose_domain_exp'] = 'Prosím vyberte doménu, kde je softvér už nainštalovaný.';
$l['in_directory'] = 'V priečinku';
$l['in_directory_exp'] = 'Priečinok je relatívny k vašej doméne. napr. Pre importovanie softvéru z http://mojadomena/dir napíšte len <b>dir</b>. Pre importovanie softvéru inštalovaného v http://mojadomena/ nechajte toto prázdne.';
$l['softsubmit'] = 'Import';
$l['congrats'] = 'Gratulujeme, softvér bol úspešne importovaný';
$l['succesful'] = 'bol úspešne importovaný do';
$l['admin_url'] = 'URL správcu';
$l['enjoy'] = 'Dúfame, že proces importu bol jednoduchý.';
$l['import_notes'] = 'Nasledujú dôležité poznámky. Výrazne odporúčame prečítať si toto:';
$l['please_note'] = '<b>UPOZORNENIE</b>: '.APP.' je iba auto inštalátor a neposkytuje žiadnu podporu pre softvérové balíčky. Prosím, navštívte stránky skriptu alebo softvéru pre akúkoľvek podporu!';
$l['regards'] = 'S pozdravom';
$l['softinstaller'] = APP.' Auto inštalátor';
$l['return'] = 'Spať na prehľad';
$l['return_to_wpm'] = 'Return to WordPress Management';

$l['choose_protocol'] = 'Vybrať protokol';
$l['choose_protocol_exp'] = 'Ak vaša stránka má SSL, tak, prosím, vyberte HTTPS protokol.';
$l['no_https'] = 'Dôveryhodný SSL certifikát nebol nájdený';
$l['wrong_softdomain'] = 'Cesta k doméne, ktorú ste označili nebola nájdená.';

//remote import
$l['server_host'] = 'Server host (voliteľné)';
$l['server_host_exp'] = '<b>POKIAĽ</b> nie je doména zhodná so server host, zadajte názov server host, napr. ftp.mojedomena.com';
$l['protocol'] = 'Protokol';
$l['protocol_exp'] = 'Zvoľte protokol, ktorý bude Softaculous používať pre komunikáciu';
$l['port'] = 'Port';
$l['port_exp'] = 'Zvoľte port pre pripojenie';
$l['domain'] = 'Doména';
$l['domain_exp'] = 'Zadajte názov platnej domény, napr. mojedomena.com';
$l['ftp_user'] = 'Užívateľské meno';
$l['ftp_user_exp'] = 'Užívateľské meno FTP účtu';
$l['ftp_pass'] = 'Heslo';
$l['ftp_pass_exp'] = 'Heslo FTP účtu';
$l['ftp_path'] = 'Cesta';
$l['ftp_path_exp'] = 'Relatívna cesta k webovému adresáru užívateľa, napr. /public_html';
$l['Installed_path'] = 'Inštalačný adresár (voliteľné)';
$l['Installed_path_exp'] = 'Inštalačný adresár, napr. blog, ak ste inštalovali script v /public_html/blog';
$l['wrong_ftp_path'] = 'Zadaná cesta k FTP neexistuje';
$l['ftp_error-1'] = 'Doména sa nenašla';
$l['ftp_error-2'] = 'Prihlasovacie údaje k FTP sú nesprávne';
$l['ftp_error-3'] = 'Zadaná cesta k FTP neexistuje';
$l['imp_err'] = 'Pri importe softwaru nainštalovaného v &soft-1; došlo k chybám';
$l['remote_import'] = 'Proces importovania vašej inštalácie bol zahájený na pozadí. Po dokončení budete informovaní e-mailom.';
$l['db_err'] = 'Pripojenie k databáze nebolo možné ';
$l['remote_dir_err'] = 'Vzdialený adresár inštalácie neexistuje';
$l['err_db_create'] = 'Pri vytváraní databáze došlo k chybe';
$l['dest_dir_err'] = 'Cieľový adresár už existuje';
$l['source'] = 'Zdroj';
$l['destination'] = 'Cieľ';
$l['auth_password'] = 'Autorizačná metóda'; 
$l['auth_password_exp'] = 'Zvoľte autorizačnú metódu'; 
$l['private_key'] = 'Privátny kľúč';
$l['private_key_exp'] = 'Vložte privátny kľúč tu';
$l['passphrase'] = 'Prístupová fráza';
$l['passphrase_exp'] = 'Prístupová fráza pre šifrovaný privátny kľúč (voliteľné)';
$l['database_name'] = 'Názov databáze';
$l['database_name_exp'] = 'Zadajte názov databáze, ktorá bude vytvorená pre inštaláciu';
$l['database_exists'] = 'Tato databáza už existuje. Zvoľte iný názov.';
$l['databaseuser_exists'] = 'Tento užívateľ už existuje';
$l['db_limit_crossed'] = 'Import sa nedá vykonať. Bol vytvorený maximálny počet databáz.';
$l['empty_db'] = 'Políčko s názvom databáza je prázdne. Zadajte názov databáze';
$l['adv_option'] = 'Pokročilé možnosti';
$l['database_name'] = 'Názov databáze';
$l['database_name_exp'] = 'Zadajte názov databáze, ktorá bude vytvorená pre inštaláciu';
$l['db_name_long'] = 'Názov databáze nesmie byť dlhší ako 7 znakov. Zvoľte prosím kratší názov databáze';
$l['db_alpha_num'] = 'Názov databáze sa môže skladať iba z alfanumerických znakov';
$l['remote_btn'] = 'Zo vzdialeného serveru';
$l['local_btn'] = 'Z tohoto serveru';
$l['checking_data'] = 'Kontrolujem nahrané súbory';
$l['fetching_remote_db'] = 'Získavam detaily databáze na vzdialenom serveri';
$l['create_db'] = 'Vytváram databázu';
$l['fetching_remote_files'] = 'Importujem súbory zo vzdialeného severu';
$l['import_complete'] = 'Import dokončený';
$l['import_script'] = 'Import';
$l['no_remote_import'] = 'Vzdialený import nie je týmto skriptom podporovaný';
$l['overwrite'] = 'Prepísať súbory';
$l['some_files_exist'] = 'Inštalácia nemôže pokračovať, pretože nasledujúce súbory už existujú v cieľovom adresári:';
$l['delete_files'] = 'Prosím odstráňte tieto súbory, alebo vyberte iný adresár.';
$l['overwrite_exist'] = '<b>ALEBO</b> <br /><input type="checkbox" name="overwrite_existing" id="overwrite_existing" />&nbsp;&nbsp;<b><span style="color:#000;">Zaškrtnite toto pole pre prepis všetkých súborov a pokračovanie</span></b>';
$l['sftp_path'] = 'SFTP cesta';
$l['sftp_path_exp'] = 'Absolútna cesta k webovému adresáru užívateľa, napr. /home/UZIVATELSKE_MENO/public_html';
$l['ftp_error'] = 'Nepodarilo sa pripojiť k FTP serveru';
$l['err_upload_remote'] = 'Nepodarilo sa nahrať súbor na FTP';
$l['err_fetch_file'] = 'Zlyhal prístup k súboru na doméne';
$l['err_fetch_path'] = 'Nepodarilo sa získať cestu z prijatých súborov';
$l['dbusername'] = 'Užívateľské meno databáze';
$l['dbusername_exp'] = 'Užívateľské meno MySQL';
$l['dbuserpass'] = 'Heslo databáze';
$l['dbuserpass_exp'] = 'Heslo MySQL';
$l['database_name_exp_aefer'] = 'Zadajte názov databáze, ktorá bude použitá pre inštaláciu';
$l['hostname'] = 'Hostname databáze';
$l['hostname_exp'] = 'Hostname MySQL (typicky <b>localhost</b>)';
$l['no_hostname'] = 'Zadajte Hostname databáze';
$l['no_dbusername'] = 'Zadajte užívateľské meno databáze';
$l['no_dbuserpass'] = 'Zadajte heslo databáze';
$l['no_db'] = 'Zadajte názov databáze';
$l['auth_method_pass'] = 'Heslo';
$l['auth_method_key'] = 'SSH klíč';
$l['no_pass_pri'] = 'Zadajte heslo alebo privátny kľúč';
$l['finishing_process'] = 'Dokončovanie importu';
$l['wait_note'] = '<b>NOTE:</b> This may take 3-4 minutes. You can leave this page if you wish !';

$l['import_push_bg'] = 'Import začal na pozadí';
$l['local_import'] = 'Automaticky zistiť všetky inštalácie';
$l['choose_domain_import_exp'] = 'Please choose the domain to import the software.';
$l['enter_domain_exp'] = 'Please enter the domain where the software is already installed.';