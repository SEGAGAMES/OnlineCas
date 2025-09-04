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

$l['no_lang'] = 'Nebyl vybrán jazyk';
$l['wrong_lang'] = 'Vybraný Jazyk neexistuje';
$l['no_timezone'] = 'Nevybrali jste časové pásmo';
$l['timezone_invalid'] = 'Časové pásmo, které jste zvolili,  je neplatné';
$l['backuploc_deleted'] = 'Umístění záloh bylo úspěšně odstraněno';
$l['no_backup_loc_name'] = 'Umístění záloh nebylo nalezeno';

// Theme Strings
$l['<title>'] = APP.' - User Settings';
$l['choose_lang'] = 'Zvolit jazyk';
$l['exp_lang'] = 'Vyberte váš preferovaný jazyk';
$l['menu_options'] = 'Nabídka Menu';
$l['menu_exp'] = 'Můžete sbalit a rozbalit všechny postranní nabídky!';
$l['timezone'] = 'Časové pásmo';
$l['default_timezone'] = 'Výchozí';
$l['expand'] = 'Rozbalit';
$l['collapse'] = 'Sbalit';
$l['edit_settings'] = 'Upravit nastavení';
$l['settings'] = 'Nastavení uživatele';
$l['settings_saved'] = 'Vaše nastavení bylo úspěšně uloženo';
$l['left_panel_bg'] = 'Vyberte barvu levého panelu';
$l['left_panel_bg_exp'] = 'Změna barvy pozadí levého panelu a horní lišty';
$l['text_color'] = 'Vyberte barvu textu levého panelu';
$l['text_color_exp'] = 'Změna barvy textu levého panelu a horní lišty';
$l['use_custom_color'] = 'Vlastní motiv';
$l['exp_use_custom_color'] = 'Pokud je zaškrtnuto, pak '.APP.' bude používat vybrané barvy motivu. Chcete-li resetovat motiv na výchozí, zrušte zaškrtnutí políčka a uložte nastavení';
$l['disable_suggestions'] = 'Disable '.APP.' Features suggestion';
$l['exp_disable_suggestions'] = 'This will disable '.APP.' features suggestion messages';
$l['reset'] = 'Resetovat';
$l['arrange_domain'] = 'Řadit domény abecedně';
$l['exp_arrange_domain'] = 'Je-li zvoleno, pak seznam domén pod <b>Zvolit doménu</b> v rozbalovacím menu instalačního formuláře bude řazen abecedně.';
$l['your_setting'] = 'Vaše nastavení';
$l['list_backup_locs'] = 'Umístění záloh';
$l['default'] = 'Výchozí';
$l['backuploc_name'] = 'Název';
$l['backuploc'] = 'Umístění záloh';
$l['backuploc_edit'] = 'Upravit';
$l['backuploc_del'] = 'Smazat';
$l['conf_del'] = 'Vážně chcete smazat toto umístění záloh?';
$l['add_backup_loc'] = 'Přidat umístění záloh';
$l['local_folder'] = 'Lokální adresář';
$l['manage_sets'] = 'WordPress sety pluginů / vzhledů';
$l['exp_manage_sets'] = 'Instalovat a přidat sety pluginů/vzhledů';
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