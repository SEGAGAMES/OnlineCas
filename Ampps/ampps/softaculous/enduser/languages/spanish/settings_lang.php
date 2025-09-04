<?php

//////////////////////////////////////////////////////////////
//===========================================================
// installations_lang.php
//===========================================================
// SOFTACULOUS 
// Version : 1.0
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

$l['no_lang'] = 'No se ha seleccionado un idioma';
$l['wrong_lang'] = 'El idioma seleccionado no existe';
$l['no_timezone'] = 'No se ha seleccionado la zona horaria';
$l['timezone_invalid'] = 'Zona horaria incorrecta';
$l['backuploc_deleted'] = 'Backup location was deleted successfully';
$l['no_backup_loc_name'] = 'No such backup location found';

//Theme Strings
$l['<title>'] = APP.' - Preferencias de usuario';
$l['choose_lang'] = 'Idioma';
$l['exp_lang'] = 'Elegir idioma preferido';
$l['menu_options'] = 'Opciones de Menú';
$l['menu_exp'] = 'Colapsar ó expandir todos los menús laterales';
$l['timezone'] = 'Zona horaria';
$l['default_timezone'] = 'Predefinida';
$l['expand'] = 'Expandir';
$l['collapse'] = 'Colapsar';
$l['edit_settings'] = 'Editar Preferencias';
$l['settings'] = 'Preferencias de Usuario';
$l['settings_saved'] = 'Las preferencias han sido guardadas correctamente';
$l['left_panel_bg'] = 'Choose Left Panel color';
$l['left_panel_bg_exp'] = 'This will change the background color of the Left Panel and Top Bar';
$l['text_color'] = 'Choose Left Panel Text color';
$l['text_color_exp'] = 'This will change the text color of the Left Panel and Top Bar';
$l['use_custom_color'] = 'Customize theme';
$l['exp_use_custom_color'] = 'If checked then '.APP.' will use the theme colors selected. If you want to reset the theme to default just uncheck the checkbox and save the settings';
$l['disable_suggestions'] = 'Disable '.APP.' Features suggestion';
$l['exp_disable_suggestions'] = 'This will disable '.APP.' features suggestion messages';
$l['reset'] = 'Reset';
$l['arrange_domain'] = 'Sort domains alphabetically';
$l['exp_arrange_domain'] = 'Ordenar los dominios en orden alfabético Si está seleccionado, la lista de dominios que contiene el menú desplegable <b>Seleccionar Dominio</b> en el formulario de instalación, se mostrará en orden albafético';
$l['your_setting'] = 'Your Settings';
$l['list_backup_locs'] = 'Backup Locations';
$l['default'] = 'Default';
$l['backuploc_name'] = 'Name';
$l['backuploc'] = 'Backup Location';
$l['backuploc_edit'] = 'Edit';
$l['backuploc_del'] = 'Delete';
$l['conf_del'] = 'Are you sure you want to delete this backup location ?';
$l['add_backup_loc'] = 'Add Backup Location';
$l['local_folder'] = 'Local Folder';
$l['manage_sets'] = 'WordPress Plugin / Theme Sets';
$l['exp_manage_sets'] = 'Install and create sets of plugins/themes';
$l['off_backup_au'] = 'Disable Backups before Auto Upgrade';
$l['exp_off_backup_au'] = 'Deshabilitar los backups antes de la actualización automática Si está seleccionado, no se realizarán backups antes de actualizar instalaciones o plugins y temas. Nota: asegúrate de disponer de backups que puedas utilizar en caso de que falle la actualización.';

$l['backup_proto'] = 'Protocol';
$l['backup_ftp'] = 'FTP';
$l['backup_softftpes'] = 'FTPS';
$l['backup_softsftp'] = 'SFTP';
$l['backup_webdav'] = 'WebDAV';
$l['backup_dropbox'] = 'Dropbox';
$l['backup_gdrive'] = 'Google Drive';
$l['backup_onedrive'] = 'Microsoft OneDrive';
$l['backup_softaws'] = 'Amazon S3';