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

$l['no_lang'] = 'Nebol vybraný žiadny jazyk';
$l['wrong_lang'] = 'Jazyk, ktorý ste vybrali neexistuje';
$l['no_timezone'] = 'Nevybrali ste časové pásmo';
$l['timezone_invalid'] = 'Časové pásme, ktoré ste vybrali je neplatné';
$l['backuploc_deleted'] = 'Umiestnenie záloh bolo úspešne odstránené';
$l['no_backup_loc_name'] = 'Umiestnenie záloh sa nenašlo';

// Theme Strings
$l['<title>'] = APP.' - User Settings';
$l['choose_lang'] = 'Zvoliť jazyk';
$l['exp_lang'] = 'Vyberte preferovaný jazyk';
$l['menu_options'] = 'Možnosti menu';
$l['menu_exp'] = 'Môžete rozbaliť alebo zbaliť všetky bočné menu!';
$l['timezone'] = 'Časové pásmo';
$l['default_timezone'] = 'Prednastvené na servery';
$l['expand'] = 'Viac';
$l['collapse'] = 'Menej';
$l['edit_settings'] = 'Upraviť nastavenia';
$l['settings'] = 'Nastavenia používateľa';
$l['settings_saved'] = 'Vaše nastavenia boli úspešne uložené';
$l['left_panel_bg'] = 'Vyberte farbu ľavého panelu';
$l['left_panel_bg_exp'] = 'Toto zmení farbu pozadia ľavého a horného panelu';
$l['text_color'] = 'Vyberte farbu textu ľavého panelu';
$l['text_color_exp'] = 'Toto zmení farbu textu ľavého a horného panelu';
$l['use_custom_color'] = 'Prispôsobiť motív';
$l['exp_use_custom_color'] = 'Ak zaškrtnuté, tak '.APP.' použije zvolené farby motívu. Ak chcete vrátiť motív do prednastaveného stavu, jednoducho odznačte toto políčko a uložte nastavenia';
$l['disable_suggestions'] = 'Disable '.APP.' Features suggestion';
$l['exp_disable_suggestions'] = 'This will disable '.APP.' features suggestion messages';
$l['reset'] = 'Reset';
$l['arrange_domain'] = 'Abecedne zoradiť domény';
$l['exp_arrange_domain'] = 'Ak označené, tak bude zoznam domén v rozbaľovacom menu <b>Vyberte doménu</b> zoradený abecedne';
$l['your_setting'] = 'Vaše nastavenia';
$l['list_backup_locs'] = 'Umiestnenie záloh';
$l['default'] = 'Prednastavené ';
$l['backuploc_name'] = 'Názov';
$l['backuploc'] = 'Umiestnenie záloh';
$l['backuploc_edit'] = 'Upraviť';
$l['backuploc_del'] = 'Zmazať';
$l['conf_del'] = 'Naozaj chcete zmazať toto umiestnenie záloh?';
$l['add_backup_loc'] = 'Pridať umiestnenie záloh';
$l['local_folder'] = 'Lokálny adresár';
$l['manage_sets'] = 'WordPress plugin/theme sets';
$l['exp_manage_sets'] = 'Inštalovať a pridať sety pluginov/vzhľadov';
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