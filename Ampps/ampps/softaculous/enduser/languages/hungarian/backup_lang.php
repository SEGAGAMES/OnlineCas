<?php

//////////////////////////////////////////////////////////////
//===========================================================
// backup_lang.php
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

$l['no_ins'] = 'Nincs telepítés kiválasztva';
$l['wrong_ins_title'] = 'Hibás telepítési azonosító';
$l['wrong_ins'] = 'A telepítési azonosító nem létezik';
$l['backup_ftp_error'] = 'Nem sikerült létrehozni a Backup Könyvtárat <b>&soft-1;</b>. Kérjük, hozza létre kézzel és próbálja meg újra.';
$l['err_backup'] = 'Nem sikerült létrehozni a Backupot.';
$l['no_space_backup'] = 'Nincs elegendő hely a backup telepítéséhez!';
$l['err_notelength'] = 'Biztonsági mentés megjegyzésnek rövidebbnek kell lennie, mint 255 karakter';
$l['off_backup_restore'] = 'Az adminisztrátor letiltotta a mentés/visszaállítás funkciót';

$l['cant_backup_dir'] = 'A mentés nem tudja a fájlokat elmenteni.';
$l['could_not_read'] = 'Upsz, a Softaculus nem tudta beolvasni a következő fájlt file/directory <b>&soft-1;</b> . Kérjük tegye olvashatóvá, hogy továbbra is használható legyen a backup segédprogram.';
$l['cant_datadir_dir'] = 'Hiba történt az adatkönyvtár mentésekor.';
$l['cant_wwwdir'] = 'Hibák léptek fel a web könyvtár hozzáadása során.';
$l['cant_backup_db'] = 'Hiba történt az adatbázis mentésekor.';
$l['err_perm_file'] = 'Hiba történt a jogosultságok mentésekor';
$l['err_wwwperm_file'] = 'There were errors while trying to make a file of permissions of the WEB directory';
$l['err_dataperm_file'] = 'Hiba történt az adatkönyvtár jogosultságainak mentésekor';
$l['save_dir_perms'] = 'A jogosultságokat nem lehetett elmenteni';
$l['save_datadir_perms'] = 'Az adatkönyvtár jogosultságait nem lehetett elmenteni';
$l['save_www_perms'] = 'Nem lehetett elmenteni a web könyvtár engedélyeket';
$l['cant_connect_mysql'] = 'Nem lehetett csatlakozni az adatbázishoz, kérjük ellenőrizze az adatbázis Felhasználónevét/Jelszavát. Ha megváltozott, kérjük frissítse az adatokra a Softaculus telepítőjén belül az Adatok szerkesztését használva.';

//Theme Strings
$l['<title>'] = APP.' - Mentés';
$l['info'] = 'Infó';
$l['ins_softname'] = 'Szoftver';
$l['ins_num'] = 'Telepítési azonosító';
$l['ins_ver'] = 'Verzió';
$l['ins_time'] = 'Telepítés ideje';
$l['ins_path'] = 'Útvonal';
$l['ins_wwwdir'] = 'Web Könyvtár útvonal';
$l['ins_url'] = 'URL';
$l['ins_db'] = 'Adatbázisnév';
$l['ins_dbuser'] = 'Adatbázis felhasználó';
$l['ins_dbpass'] = 'Adatbázis jelszó';
$l['ins_dbhost'] = 'Adatbázis szerver';
$l['backup_ins'] = 'Telepítés mentése';
$l['backup_dir'] = 'Könyvtár mentése';
$l['backup_dir_exp'] = 'Ha bejelöli, akkor a teljes könyvtár mentésre kerül';
$l['backup_db'] = 'Adatbázis mentése';
$l['backup_db_exp'] = 'Ha bejelöli, akkor az adatbázis is mentésre kerül';
$l['backup_conf'] = 'A mentés az adatmennyiségtől függően akár több időt is igénybe vehet. Kérjük NE zárja be a böngésző ablakát és maradjon az oldalon.';
$l['backedup'] = 'A mentés sikeresen elkészült. A <a href="'.$globals['index'].'act=backups">Mentés</a> oldalról le is töltheti.';
$l['backup_ins'] = 'Telepítés mentése';
$l['backup_datadir'] = 'Adatkönyvtár mentése';
$l['backup_datadir_exp'] = 'Ha bejelöli, akkor az adatkönyvtár mentésre kerül.';
$l['ins_datadir'] = 'Adatkönyvtár';
$l['return'] = 'Vissza az áttekintéshez';
$l['return_to_wpm'] = 'Return to WordPress Management';
$l['ins_cron_command'] = 'Cron Parancs';
$l['backup_wwwdir'] = 'Backup Web Könyvtár';
$l['backup_wwwdir_exp'] = 'Ha ellenőrizte, a web könyvtár mentésre kerül.';
$l['checking_data'] = 'A megadott adatok ellenőrzése';
$l['backingup_db'] = 'Adatbázis mentése';
$l['backingup_dir'] = 'Könyvtár mentése';
$l['backingup_datadir'] = 'Adat könyvtár mentése';
$l['finishing_process'] = 'Mentés befejezése';
$l['wait_note'] = '<b>MEGJEGYZÉS</b> Ez eltarthat 3-4 percig. Bármikor elhagyhatja ezt az oldalt amikor szeretné!';
$l['backingup'] = 'A mentés a háttérben folyik. Emailben értesítjük, amikor elkészült. Miután a mentés befejeződött, elérheti azt a <a href="'.$globals['index'].'act=backups">Mentések</a> oldalon.';
$l['check_email'] = 'Kérjük ellenőrizze e-mailjeit a mentés állapota miatt';
$l['prog_backingup'] = 'Mentés '; // Dont remove the trailing space
$l['prog_backup_complete'] = 'Mentés teljesítve.';
$l['backup_note'] = 'Mentés megjegyzés';
$l['backup_note_exp'] = 'Egy megjegyzést el tud menteni hivatkozásul';
$l['backup_operation'] = 'Válassza ki a Backup művelete(ke)t';
$l['backups_expire'] = 'Biztonsági mentései automatikusan kiürülnek a mentés létrehozása után  <b>&soft-1;</b> nappal.';
$l['err_max_backups'] = 'Elérte a megengedett mentések maximális számát (<b>&soft-1;</b>). Kérjük, töröljön nem használt mentéseket, hogy újat tudjon készíteni.';
$l['err_max_local_backups'] = 'You have reached the maximum number of (<b>&soft-1;</b>) local backups allowed. Please delete unwanted backups on the local server to be able to take a new backup.';
$l['err_max_insid_backups'] = 'You have reached the maximum number of (<b>&soft-1;</b>) backups allowed for this installation. Please delete unwanted backups for this installation to be able to take a new backup.';
$l['err_max_local_insid_backups'] = 'You have reached the maximum number of (<b>&soft-1;</b>) local backups allowed for this installation. Please delete unwanted backups for this installation on the local server to be able to take a new backup.';
$l['backup_notes'] = 'A biztonsági mentést a  '.APP.' automatikus biztonsági mentése készítette';
$l['max_backups'] = 'Jelenleg <b>&soft-1;</b> mentés van a fiókjában. A maximális mentés szám <b>&soft-2;</b>.';

$l['no_backup_functions'] = 'A BACKUP FUNCTIONS fájl nem található! Kérjük, jelentse a szerver adminisztrátorának!';
$l['no_dir_exists'] = 'A telepítési könyvtár nem létezik.';
$l['backup_location_name'] = 'Mentési hely';
$l['backup_file_empty'] = 'Incorrect backup file size : 0';
$l['err_mysql_db'] = 'A MySQL adatbázis neve helytelen, mivel az adatbázist nem lehetett kiválasztani.';
$l['backup_loc'] = 'Mentési hely'; 
$l['exp_backup_loc'] = 'Válassza ki a mentési helyet, ahol a biztonsági mentést szeretné tárolni'; 
$l['default'] = 'Alapértelmezett'; 
$l['invalid_backup_location'] = 'A megadott mentési hely nem létezik'; 
$l['local_folder'] = 'Helyi mappa'; 
$l['err_default_backup_loc'] = 'Default backup location is empty, please select a default backup location in order to backup on the default location.';

$l['invalid_access_token'] = 'Érvénytelen hitelesítő kód. Kérjük, végezze el a Dropbox újrahitelesítését a Mentési hely szerkesztés részen';
$l['insufficient_space'] = 'A Dropbox fiókja megtelt. Kérjük, szabadítson fel némi helyet és kísérelje meg a mentést később';
$l['incorrect_offset'] = 'Incorrect Offset';

$l['gdrive_err_init'] = 'Hiba történt a mentés Google Drive-on történő elindításakor!!';
$l['gdrive_err_end'] = 'Hiba történt a mentés Google Drive-ra történő átvitele során!!';

$l['error_max_backup_script'] = 'Elérte a szkriptenként megengedett maximális (<b>&soft-1;</b>) mentés számot.';
$l['error_max_backup_insid'] = 'You have reached the maximum number of (<b>&soft-1;</b>) Backups allowed per installation';

$l['ftp_access'] = 'A PHP nem tud fájlokat írni a kiszolgálóra. Kérjük, konfigurálja az FTP hozzáférést a folytatáshoz.';
$l['configure_domain'] = 'Beállítások konfigurálása';

$l['wpc_return'] = 'Return to Backups';

$l['ampps_notify_premium'] = 'Ez a szolgáltatás az AMPPS prémium verziójában érhető el. Kérjük, vásárolja meg az <b><a href="https://ampps.com/clients">AMPPS Premium</a></b> verziót';
$l['backing_up'] = 'A biztonsági mentés a háttérben készül. Amint elkészült, e-mailben értesítjük. A mentési folyamatot a <a href="'.$globals['index'].'act=eu_tasklist">Feladatok listája</a> oldalon követheti nyomon.<br /> Telepítési URL: <a href="&soft-1;" target="_ blank">&soft-1;</a>';

$l['rbackup_disabled'] = 'Az adminisztrátor letiltotta a távoli helyre történő mentést';
$l['rbackup_protocol_disabled'] = 'Az adminisztrátor letiltotta a(z) <b>&soft-1;</b> helyre történő mentést';

$l['onedrive_err_end'] = 'There were some errors while uploading backup to your OneDrive account!';
$l['onedrive_err_upload_url'] = 'Failed to generate OneDrive Upload URL';

$l['dropbox_refresh_token_err'] = 'Failed to generate Dropbox access token. Please re-authorize Dropbox location from Settings -> Edit Backup Location page.';