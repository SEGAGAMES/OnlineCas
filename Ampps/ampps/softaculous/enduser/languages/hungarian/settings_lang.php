<?php

//////////////////////////////////////////////////////////////
//===========================================================
// settings_lang.php
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

$l['no_lang'] = 'Nincs nyelv kiválasztva';
$l['wrong_lang'] = 'A kiválasztott nyelv nem létezik';
$l['no_timezone'] = 'Nem választotta ki az időzónát';
$l['timezone_invalid'] = 'A kiválasztott időzóna érvénytelen';
$l['backuploc_deleted'] = 'A mentési hely sikeresen törlésre került';
$l['no_backup_loc_name'] = 'Nem található ilyen mentési hely';

// Theme Strings
$l['<title>'] = APP.' - Felhasználói beállítások';
$l['choose_lang'] = 'Válasszon nyelvet';
$l['exp_lang'] = 'Válassza ki a preferált nyelvet';
$l['menu_options'] = 'Menü opciók';
$l['menu_exp'] = 'Kinyithatja és összezárhatja az összes oldalsó menüt!';
$l['timezone'] = 'Időzóna';
$l['default_timezone'] = 'Alapértelmezett';
$l['expand'] = 'Kinyit';
$l['collapse'] = 'Bezár';
$l['edit_settings'] = 'Beállítások mentése';
$l['settings'] = 'Felhasználói beállítások';
$l['settings_saved'] = 'A beállításai sikeresen mentésre kerültek';
$l['left_panel_bg'] = 'Válassza ki a bal oldali panel színét';
$l['left_panel_bg_exp'] = 'Meg fogja változtatnia bal oldali panel háttér színét és felső sávját';
$l['text_color'] = 'Válassza ki a bal oldali panel betű színét';
$l['text_color_exp'] = 'Meg fogja változtatnia bal oldali panel betű színét és felső sávját';
$l['use_custom_color'] = 'Téma testre szabása';
$l['exp_use_custom_color'] = 'Ha be van jelölve, a '.APP.' a kiválasztott téma színt fogja használni. Ha vissza szeretné állítani a témát az alapértelmezettre, csak vegye le a jelölést a checkboxból és mentse el a beállításokat';
$l['disable_suggestions'] = 'Disable '.APP.' Features suggestion';
$l['exp_disable_suggestions'] = 'This will disable '.APP.' features suggestion messages';
$l['reset'] = 'Visszaállít';
$l['arrange_domain'] = 'Domain nevek betűrendben';
$l['exp_arrange_domain'] = 'Ha ki van jelölve, akkor a domain lista alatt <b>Válasszon Domaint</b> a legördülő menüből, betűrendben lesznek rendezve';
$l['your_setting'] = 'Beállításai';
$l['list_backup_locs'] = 'Mentési helyek';
$l['default'] = 'Alapértelmezett';
$l['backuploc_name'] = 'Név';
$l['backuploc'] = 'Mentési hely';
$l['backuploc_edit'] = 'Szerkesztés';
$l['backuploc_del'] = 'Törlés';
$l['conf_del'] = 'Biztos, hogy törölni akarja ezt a mentési helyet?';
$l['add_backup_loc'] = 'Mentési hely hozzáadása';
$l['local_folder'] = 'Helyi mappa';
$l['manage_sets'] = 'WordPress bővítmény / sablon készletek';
$l['exp_manage_sets'] = 'Bővítmény / sablon készletek létrehozása és telepítése';
$l['off_backup_au'] = 'Disable Backups before Auto Upgrade';
$l['exp_off_backup_au'] = 'If selected, backups will not be performed before upgrading installations or plugins and themes. Note: Make sure you have backups which you can use in case the upgrade fails.';

$l['backup_proto'] = 'Protocol';
$l['backup_ftp'] = 'FTP';
$l['backup_softftpes'] = 'FTPS';
$l['backup_softsftp'] = 'SFTP';
$l['backup_webdav'] = 'WebDAV';
$l['backup_dropbox'] = 'Dropbox';
$l['backup_gdrive'] = 'Google Drive';
$l['backup_onedrive'] = 'Microsoft OneDrive';
$l['backup_softaws'] = 'Amazon S3';