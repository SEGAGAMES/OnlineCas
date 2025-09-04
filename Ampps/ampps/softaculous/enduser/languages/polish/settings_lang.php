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

$l['no_lang'] = 'Nie wybrano języka';
$l['wrong_lang'] = 'Wybrany język nie istnieje';
$l['no_timezone'] = 'Nie wybrano strefy czasowej';
$l['timezone_invalid'] = 'Wybrana strefa czasowa jest nieprawidłowa';
$l['backuploc_deleted'] = 'Lokalizacja backup została pomyślnie usunięta';
$l['no_backup_loc_name'] = 'Nie znaleziono lokalizacji backup';

// Theme Strings
$l['<title>'] = APP.' - ustawienia';
$l['choose_lang'] = 'Wybierz język';
$l['exp_lang'] = 'Wybierz preferowany język';
$l['menu_options'] = 'Opcje menu';
$l['menu_exp'] = 'Można zwinąć i rozwinąć wszystkie boczne menu!';
$l['timezone'] = 'Strefa czasowa';
$l['default_timezone'] = 'Domyślny';
$l['expand'] = 'Rozwiń';
$l['collapse'] = 'Zwiń';
$l['edit_settings'] = 'Edytuj ustawienia';
$l['settings'] = 'Ustawienia użytkownika';
$l['settings_saved'] = 'Ustawienia zostały pomyślnie zapisane';
$l['left_panel_bg'] = 'Wybierz kolor lewego panela';
$l['left_panel_bg_exp'] = 'To zmieni kolor tła lewego panelu i górnego paska';
$l['text_color'] = 'Wybierz kolor tekstu lewego panelu';
$l['text_color_exp'] = 'To zmieni kolor tekstu lewego panelu i górnego paska';
$l['use_custom_color'] = 'Dostosuj motyw';
$l['exp_use_custom_color'] = 'Jeśli wtedy zaznaczysz '. APP.' będą używane kolory motywu. Jeśli chcesz zresetować motyw do domyślnych ustawień po prostu odznacz tą opcję i zapisz ustawienia';
$l['disable_suggestions'] = 'Disable '.APP.' Features suggestion';
$l['exp_disable_suggestions'] = 'This will disable '.APP.' features suggestion messages';
$l['reset'] = 'Reset';
$l['arrange_domain'] = 'Sortuj domeny alfabetycznie';
$l['exp_arrange_domain'] = 'Jeśli opcja jest zaznaczona lista domen dostępna w postaci rozwijanego menu pod <b>Wybierz domenę</b> będzie sortowana alfabetycznie';
$l['your_setting'] = 'Ustawienia';
$l['list_backup_locs'] = 'Lokalizacje backup';
$l['default'] = 'Domyślna';
$l['backuploc_name'] = 'Nazwa';
$l['backuploc'] = 'Lokalizacja Backupu';
$l['backuploc_edit'] = 'Edytuj';
$l['backuploc_del'] = 'Usuń';
$l['conf_del'] = 'Czy na pewno chcesz usunąć wybraną lokalizację backup?';
$l['add_backup_loc'] = 'Dodaj Lokalizację Backup';
$l['local_folder'] = 'Folder Lokalny';
$l['manage_sets'] = 'Wtyczka WordPress / Zestawy Motywów';
$l['exp_manage_sets'] = 'Zainstaluj i stwórz zestawy wtyczek/motywów';
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