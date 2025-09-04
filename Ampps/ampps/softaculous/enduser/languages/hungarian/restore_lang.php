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

$l['restoreerror'] = 'Hiba történt a mentés kicsomagolásakor';
$l['restoredatadir'] = 'Nem tudom az adatkönyvtárat visszaállítani';
$l['restorewww'] = 'Nem sikerült helyreállítani a Web könyvtárat';
$l['res_err_selectmy'] = 'Nem lehet az adatbázis kiválasztani a helyreállításhoz';
$l['err_myconn'] = 'Nem lehet kapcsolódni az adatbázishoz';
$l['err_db_create'] = 'Hiba történt az Adatbázis létrehozásakor';
$l['off_backup_restore'] = 'Az adminisztrátor letiltotta a mentés/visszaállítás funkciót';
$l['no_backupinfo_file'] = 'Mentés info fájl nem található';
$l['no_backup_time'] = 'Mentés idő nem található';
$l['instime_higher_than_btime'] = 'A telepítési idő magasabb, mint a mentés idő';

//Theme Strings
$l['<title>'] = APP.' - Helyreállítás';
$l['restorefile'] = 'Helyreállítás mentésből';
$l['restore_dir'] = 'Könyvtár helyreállítása';
$l['restore_dir_exp'] = 'Ha bejelöli, akkor a teljes könyvtár helyreállításra kerül';
$l['restore_datadir'] = 'Adatkönyvtár helyreállítása';
$l['restore_datadir_exp'] = 'Ha bejelöli, az adatkönyvtár is helyreállításra kerül';
$l['restore_db'] = 'Adatbázis helyreállítása';
$l['restore_db_exp'] = 'Ha bejelöli, az adatbázis is helyreállításra kerül';
$l['restore_ins'] = 'Telepítés helyreállítása';
$l['restore'] = 'A mentés sikeresen helyreállítva';
$l['confirm_restore'] = 'Biztos benne, hogy helyreállítja a telepítést?';
$l['return'] = 'Vissza az áttekintéshez';
$l['return_to_wpm'] = 'Return to WordPress Management';
$l['restore_wwwdir'] = 'Web könyvtár visszaállítása';
$l['restore_wwwdir_exp'] = 'Ha bejelöli, a web könyvtár visszaállításra kerül';
$l['checking_data'] = 'A megadott adatok ellenőrzése';
$l['res_db'] = 'Adatbázis visszaállítása';
$l['res_dir'] = 'Könyvtár visszaállítása';
$l['res_datadir'] = 'Adat könyvtár visszaállítása';
$l['finishing_process'] = 'Biztonsági mentés visszaállítva';
$l['wait_note'] = '<b>MEGJEGYZÉS:</b> Eltarthat 3-4 percig. Kérjük, ne hagyja el az oldalt, amíg a folyamatjelző el nem éri a 100 %-ot';
$l['restoring'] = 'A biztonsági másolat a háttérben visszaáll. A befejezés után e-mailben értesítést kap. A visszaállítási folyamatot a <a href="'.$globals['index'].'act=eu_tasklist"> Feladatlista </a> oldalon követheti.';
$l['prog_restoring'] = 'Visszaállítása '; // Dont remove the trailing space
$l['prog_restore_complete'] = 'Visszaállítás kész.';
$l['no_restore_functions'] = 'A RESTORE FUNCTIONS fájl nem található! Kérjük, ezt jelentse a szerver rendszergazdának.';
$l['backup_file_empty'] = 'A mentés fájl üres';
$l['db_not_exist'] = 'Adatbázis fájl nem létezik';
$l['db_empty'] = 'Az adatbázis fájl üres';

$l['read_archive'] = 'Archívum olvasása';

$l['no_backup_file'] = 'Mentés fájl nincs jelen';

$l['wpc_return'] = 'Return to Backups';

$l['ampps_notify_premium'] = 'Ez a szolgáltatás az AMPPS prémium verziójában érhető el. Kérjük, vásárolja meg az <b><a href="https://ampps.com/clients">AMPPS Premium</a></b> verziót';

$l['restore_delete_files'] = 'Delete existing files/folders'; 
$l['restore_delete_files_exp'] = 'If checked existing files/folders will be deleted and then the backup files will be restored. <br /><b>Note</b>: Please make sure that you chose Full Backup while creating this backup.';
$l['no_restore_file_param'] = 'Backup file name was not passed. It is required to start the restore process.';