<?php

//////////////////////////////////////////////////////////////
//===========================================================
// settings_lang.php
//===========================================================
// SOFTACULOUS FRENCH PACK
// Version 4
// Inspired by the DESIRE to be the BEST OF ALL
// ----------------------------------------------------------
// Started by: Alons
// Date:       10th Jan 2009
// Time:       21:00 hrs
// Site:       http://www.softaculous.com/ (SOFTACULOUS)
// ----------------------------------------------------------
// Edited by:  Romain Fluttaz
// Date:       1 July 2009
// Time:       15:00 hrs
// Site:       http://botux.fr/
// ----------------------------------------------------------
// Edited by:  Michel LAURENT
// Date:       25th Augustus 2009
// Time:       18:00 hrs
// Site:       http://www.equipc.net
// ----------------------------------------------------------
// Edited by:  Philippe Raimundo
// Date:       24 April 2024
// Time:       15:00 hrs
// Site:       https://polisystems.ch/
// ----------------------------------------------------------
// Please Read the Terms of use at http://www.softaculous.com
// ----------------------------------------------------------
//===========================================================
// (c)Softaculous Inc.
//===========================================================
//////////////////////////////////////////////////////////////

if(!defined('SOFTACULOUS')){

	die('Tentative de piratage');

}

$l['no_lang'] = 'Aucune langue n\'a été choisie';
$l['wrong_lang'] = 'La langue que vous avez sélectionnée n\'existe pas';
$l['no_timezone'] = 'Vous n\'avez pas sélectionné le fuseau horaire';
$l['timezone_invalid'] = 'Le fuseau horaire que vous avez sélectionné n\'est pas valide';
$l['backuploc_deleted'] = 'L\'emplacement de sauvegarde a été supprimé avec succès';
$l['no_backup_loc_name'] = 'Aucun emplacement de sauvegarde trouvé';

//Theme Strings
$l['<title>'] = APP.' - Paramètres utilisateur';
$l['choose_lang'] = 'Choisir la langue';
$l['exp_lang'] = 'Choisissez votre langue préférée';
$l['menu_options'] = 'Options de menu';
$l['menu_exp'] = 'Vous pouvez réduire et développer tous les menus latéraux !';
$l['timezone'] = 'Fuseau horaire';
$l['default_timezone'] = 'Défaut';
$l['expand'] = 'Développer';
$l['collapse'] = 'Réduire';
$l['edit_settings'] = 'Modifier les paramètres';
$l['settings'] = 'Paramètres utilisateur';
$l['settings_saved'] = 'Vos paramètres ont été sauvegardés avec succès';
$l['left_panel_bg'] = 'Choisir la couleur du panneau de gauche';
$l['left_panel_bg_exp'] = 'Cela changera la couleur de fond du panneau de gauche et de la barre supérieure';
$l['text_color'] = 'Choisir la couleur du texte du panneau de gauche';
$l['text_color_exp'] = 'Cela changera la couleur du texte du panneau de gauche et de la barre supérieure';
$l['use_custom_color'] = 'Personnaliser le thème';
$l['exp_use_custom_color'] = 'Si coché, '.APP.' utilisera les couleurs du thème sélectionné. Si vous souhaitez réinitialiser le thème par défaut, décochez simplement la case et enregistrez les paramètres';
$l['disable_suggestions'] = 'Désactiver les suggestions de fonctionnalités de '.APP;
$l['exp_disable_suggestions'] = 'Cela désactivera les messages de suggestion de fonctionnalités de '.APP;
$l['reset'] = 'Réinitialiser';
$l['arrange_domain'] = 'Trier les domaines alphabétiquement';
$l['exp_arrange_domain'] = 'Si cette option est sélectionnée, la liste des domaines sous le menu déroulant <b>Choisir un domaine</b> dans le formulaire d\'installation sera triée par ordre alphabétique';
$l['your_setting'] = 'Vos paramètres';
$l['list_backup_locs'] = 'Lieux de sauvegarde';
$l['default'] = 'Par défaut';
$l['backuploc_name'] = 'Nom';
$l['backuploc'] = 'Lieu de sauvegarde';
$l['backuploc_edit'] = 'Éditer';
$l['backuploc_del'] = 'Effacer';
$l['conf_del'] = 'Êtes-vous sûr de vouloir supprimer cet emplacement de sauvegarde ?';
$l['add_backup_loc'] = 'Ajouter un emplacement de sauvegarde';
$l['local_folder'] = 'Dossier local';
$l['manage_sets'] = 'Plugin et ensemble de thèmes WordPress';
$l['exp_manage_sets'] = 'Installer et créer des ensembles de plugins/thèmes';
$l['off_backup_au'] = 'Désactiver les sauvegardes avant la mise à jour automatique';
$l['exp_off_backup_au'] = 'Si sélectionné, les sauvegardes ne seront pas effectuées avant de mettre à jour les installations ou les plugins et thèmes. Remarque : Assurez-vous d\'avoir des sauvegardes que vous pouvez utiliser en cas d\'échec de la mise à jour.';

$l['backup_proto'] = 'Protocole';
$l['backup_ftp'] = 'FTP';
$l['backup_softftpes'] = 'FTPS';
$l['backup_softsftp'] = 'SFTP';
$l['backup_webdav'] = 'WebDAV';
$l['backup_dropbox'] = 'Dropbox';
$l['backup_gdrive'] = 'Google Drive';
$l['backup_onedrive'] = 'Microsoft OneDrive';
$l['backup_softaws'] = 'Amazon S3';