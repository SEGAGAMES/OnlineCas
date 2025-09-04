<?php

//////////////////////////////////////////////////////////////
//===========================================================
// backups_lang.php
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
// ----------------------------------------------------------
// Edited by:  Philippe Raimundo
// Date:       24 April 2024
// Time:       15:00 hrs
// Site:       https://polisystems.ch/
//////////////////////////////////////////////////////////////

if(!defined('SOFTACULOUS')){

	die('Tentative de piratage');

}

// Chaînes d'erreur
$l['off_backup_restore'] = 'La fonctionnalité de sauvegarde/restauration a été désactivée par l\'administrateur';

// Chaînes de thème
$l['<title>'] = APP.' - Sauvegardes';
$l['backups_head'] = 'Sauvegardes et restauration';
$l['file'] = 'Nom du fichier';
$l['bac_time'] = 'Sauvegarde de';
$l['size'] = 'Taille';
$l['remove'] = 'Supprimer la sauvegarde';
$l['download'] = 'Télécharger la sauvegarde';
$l['size_mb'] = 'MB';
$l['options'] = 'Options';
$l['no_info'] = 'Pas d\'information';
$l['no_ins'] = 'Vous n\'avez aucune sauvegarde';
$l['upd_to'] = 'Mettre à niveau vers la version';
$l['backup_deleted'] = 'La sauvegarde a été supprimée avec succès.';
$l['confirm_del'] = 'Voulez-vous vraiment supprimer le fichier de sauvegarde?';
$l['restore'] = 'Restaurer';
$l['del_insid'] = 'Voulez-vous vraiment supprimer les sauvegardes sélectionnées? L\'action sera irréversible. \nAucune autre confirmation ne sera demandée!';
$l['rem_backup_id'] = 'Suppression de la sauvegarde - ';
$l['no_sel_inst'] = 'Pas de sauvegarde sélectionnée à supprimer.';
$l['inst_remvd'] = 'Les sauvegardes sélectionnées ont été supprimées. La page sera maintenant rechargée!';
$l['editdetail'] = 'Modifier les détails';
$l['go'] = 'Go';
$l['version'] = 'Version';
$l['installation_removed'] = 'L\'installation a été retirée et n\'existe plus. Elle était sur l\'URL suivante : <b>&soft-1;</b>. Vous pouvez la restaurer en utilisant la sauvegarde.';
$l['invalid_downloadfile'] = 'Le fichier de sauvegarde est invalide';
$l['note'] = 'Notes';
$l['with_selected'] = 'Action';
$l['backups_expire'] = 'Your Local backups will be automatically purged after <b>&soft-1;</b> days of the backup creation.';
$l['max_backups'] = 'Vous disposez actuellement de <b>&soft-1;</b> sauvegarde(s) dans votre compte. La limite maximale de vos sauvegardes est de <b>&soft-2;</b>.';

$l['backup_locations'] = 'Gérer les lieux de sauvegarde';
$l['remote_location'] = 'Sauvegarde sur ';