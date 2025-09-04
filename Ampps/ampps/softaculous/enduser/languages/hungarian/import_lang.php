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

$l['no_info_file'] = 'Az INFO.XML fájl nem található! Kérjük tájékoztassa a szerver adminisztrátorát.';
$l['incompatible'] = 'A szoftver újabb '.APP.' verziót igényel! Kérjük tájékoztassa a szerver adminisztrátorát.';
$l['no_functions'] = 'Az IMPORT FUNCTIONS fájl nem található! Kérjük tájékoztassa a szerver adminisztrátorát.';
$l['no_softdomain'] = 'Nem választott ki domain nevet az alkalmazás importjához.';
$l['disable_import'] = 'Az adminisztrátor letiltotta az importálás funkciót';
$l['invalid_script'] = 'Érvénytelen szkript azonosító';

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['import_soft'] = 'Meglévő telepítés importálása';
$l['choose_domain'] = 'Domain név kiválasztása';
$l['choose_domain_exp'] = 'Válassza ki, hogy melyik domain név alatt van a telepítés.';
$l['in_directory'] = 'Telepítési könyvtár';
$l['in_directory_exp'] = 'A telepítési könyvtár relatív a választott domain név könyvtárához képest. Pl.: A http://www.domainnevem.hu/xyz/ alatti telepítés esetén <b>xyz</b> a telepítési könyvtár. Ha az alkalmazás a http://www.domainnevem.hu/ alatt érhető el, akkor hagyja üresen.';
$l['softsubmit'] = 'Importálás';
$l['congrats'] = 'Gratulálunk, az alkalmazás importálása sikeres volt.';
$l['succesful'] = ' sikeresen importálva ide';
$l['admin_url'] = 'Adminisztratív URL';
$l['enjoy'] = 'Reméljük, hogy az importálás egyszerű volt.';
$l['import_notes'] = 'Fontos információk. Ajánlott, hogy olvassa el: ';
$l['please_note'] = '<b>Figyelem</b>: '.APP.' csak egy alkalmazás-telepítő és nem szolgál semmilyen támogatással a telepíthető programokkal kapcsolatban. Segítséghez keresse fel az alkalmazás weboldalát!';
$l['regards'] = 'Üdvözlettel';
$l['softinstaller'] = APP.' alkalmazás-telepítő';
$l['return'] = 'Vissza az áttekintéshez';
$l['return_to_wpm'] = 'Return to WordPress Management';

$l['choose_protocol'] = 'Válasszon Protokollt';
$l['choose_protocol_exp'] = 'Ha oldala rendelkezik SSL-el, kérjük, válassza a HTTPS protokollt.';
$l['no_https'] = 'Nem található megbízható SSL Tanúsítvány';
$l['wrong_softdomain'] = 'Nem található a kiválasztott domain útvonal.';

//remote import
$l['server_host'] = 'Kiszolgáló (opcionális)';
$l['server_host_exp'] = '<b>Ha</b> a domain neve éa a kiszolgáló nem ugyanaz, akkor adja meg a kiszolgálót pl. ftp.mydomain.com';
$l['protocol'] = 'Protokoll';
$l['protocol_exp'] = 'Válassza ki a protokollt, amelyen keresztül a Softaculous kommunikálni fog';
$l['port'] = 'Port';
$l['port_exp'] = 'Írja be a portot a csatlakozáshoz';
$l['domain'] = 'Domain név';
$l['domain_exp'] = 'Írjon be egy érvényes domain nevet, pl. mydomain.com';
$l['ftp_user'] = 'Felhasználónév';
$l['ftp_user_exp'] = 'Az FTP fiókja felhasználóneve';
$l['ftp_pass'] = 'Jelszó';
$l['ftp_pass_exp'] = 'Az FTP fiókja jelszava';
$l['ftp_path'] = 'Útvonal';
$l['ftp_path_exp'] = 'Relatív útvonal a felhasználó weben elérhető könyvtárához pl. /public_html';
$l['Installed_path'] = 'Telepítési könyvtár (opcionális)';
$l['Installed_path_exp'] = 'A telepítési könyvtár lehet például a blog, ha a szkriptet a /public_html/blog mappába telepítette.';
$l['wrong_ftp_path'] = 'A megadott FTP útvonal nem létezik';
$l['ftp_error-1'] = 'Nem lehet feloldani a domain nevet';
$l['ftp_error-2'] = 'Nem lehet belépni a megadott FTP adatokkal';
$l['ftp_error-3'] = 'A megadott FTP útvonal nem létezik';
$l['imp_err'] = 'Hiba történt a(z) &soft-1; címen telepített szoftver importálásakor';
$l['remote_import'] = 'A háttérben elindult a telepítés importálási folyamata. Az importálási folyamat befejezése után e-mailben értesítést kap az állapotról.';
$l['db_err'] = 'Nem sikerült csatlakozni az adatbázishoz';
$l['remote_dir_err'] = 'A távoli telepítési könyvtár nem létezik';
$l['err_db_create'] = 'Hiba történt az adatbázis létrehozásakor';
$l['dest_dir_err'] = 'A cél könyvtár már létezik';
$l['source'] = 'Forrás';
$l['destination'] = 'Cél';
$l['auth_password'] = 'Hitelesítési módszer'; 
$l['auth_password_exp'] = 'Válassza ki a hitelesítési módszert'; 
$l['private_key'] = 'Privát kulcs';
$l['private_key_exp'] = 'Illessze be ide a privát kulcsot';
$l['passphrase'] = 'Jelszó';
$l['passphrase_exp'] = 'Jelszó a titkosított privát kulcshoz (opcionális)';
$l['database_name'] = 'Adatbázis név';
$l['database_name_exp'] = 'Írja be a telepítéshez létrehozandó adatbázis nevét';
$l['database_exists'] = 'Az adatbázis már létezik. Kérjük, válasszon egy másik nevet';
$l['databaseuser_exists'] = 'Az adatbázis felhasználó már létezik';
$l['db_limit_crossed'] = 'Elérte a maximálisan létrehozható adatbázis számot, ezért az importálás nem hajtható végre';
$l['empty_db'] = 'Az adatbázis név mező üres. Kérjük, írja be az adatbázis nevet';
$l['adv_option'] = 'Haladó beállítások';
$l['database_name'] = 'Adatbázis név';
$l['database_name_exp'] = 'Írja be a telepítéshez létrehozandó adatbázis nevét';
$l['db_name_long'] = 'Az adatbázis név nem lehet hosszabb 7 karakternél. Kérjük, válasszon egy rövidebb adatbázis nevet';
$l['db_alpha_num'] = 'Csak alfanumerikus karakter megengedett az adatbázis névben';
$l['remote_btn'] = 'Távoli szerverről';
$l['local_btn'] = 'Erről a szerverről';
$l['checking_data'] = 'A benyújtott adatok ellenőrzése';
$l['fetching_remote_db'] = 'Az adatbázis részleteinek lekérése a távoli szerverről';
$l['create_db'] = 'Az adatbázis létrehozása';
$l['fetching_remote_files'] = 'Fájlok importálása a távoli szerverről';
$l['import_complete'] = 'Az importálás elkészült';
$l['import_script'] = 'Importálás';
$l['no_remote_import'] = 'A távoli importálás nem támogatott ennél a szkriptnél';
$l['overwrite'] = 'Felülírja a fájlokat';
$l['some_files_exist'] = 'A telepítés nem folytatható, mert a következő fájlok már léteznek a cél mappában :';
$l['delete_files'] = 'Kérjük, törölje ezeket a fájlokat vagy válasszon másik mappát.';
$l['overwrite_exist'] = '<b>VAGY</b> <br /><input type="checkbox" name="overwrite_existing" id="overwrite_existing" />&nbsp;&nbsp;<b><span style="color:#000;">Jelölje be a jelölőnégyzetet az összes fájl felülírásához és a folytatáshoz</span></b>';
$l['sftp_path'] = 'SFTP útvonal';
$l['sftp_path_exp'] = 'Abszolút útvonal a felhasználó weben elérhető könyvtárához pl. /home/USERNAME/public_html';
$l['ftp_error'] = 'Nem lehet csatlakozni az FTP kiszolgálóhoz';
$l['err_upload_remote'] = 'Nem lehet feltölteni a fájlt az FTP útvonalon';
$l['err_fetch_file'] = 'Nem lehet elérni a domain névhez feltöltött fájlt';
$l['err_fetch_path'] = 'Nem lehet lekérni az útvonalat a kapott adatokból';
$l['dbusername'] = 'Adatbázis felhasználónév';
$l['dbusername_exp'] = 'A MySQL felhasználónév';
$l['dbuserpass'] = 'Adatbázis jelszó';
$l['dbuserpass_exp'] = 'A MySQL felhasználó jelszava';
$l['database_name_exp_aefer'] = 'Írja be a telepítéshez használandó adatbázis nevét';
$l['hostname'] = 'Adatbázis kiszolgáló';
$l['hostname_exp'] = 'A Mysql kiszolgáló neve (általában <b>localhost</b>)';
$l['no_hostname'] = 'Kérjük, adja meg az adatbázis kiszolgáló nevét';
$l['no_dbusername'] = 'Kérjük, adja meg az adatbázis felhasználónevet';
$l['no_dbuserpass'] = 'Kérjük, adja meg az adatbázis jelszót';
$l['no_db'] = 'Kérjük, adja meg az adatbázis nevét';
$l['auth_method_pass'] = 'Jelszó';
$l['auth_method_key'] = 'SSH kulcs';
$l['no_pass_pri'] = 'Kérjük, adjon meg egy jelszót vagy a privát kulcsot';
$l['finishing_process'] = 'Az importálás befejezése';
$l['wait_note'] = '<b>NOTE:</b> This may take 3-4 minutes. You can leave this page if you wish !';

$l['import_push_bg'] = 'Az importálás a háttérben zajlik';
$l['local_import'] = 'Az összes telepítés automatikus észlelése';
$l['choose_domain_import_exp'] = 'Please choose the domain to import the software.';
$l['enter_domain_exp'] = 'Please enter the domain where the software is already installed.';