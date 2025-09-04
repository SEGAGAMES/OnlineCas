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
// ----------------------------------------------------------
// Edited by:  Philippe Raimundo
// Date:       24 April 2024
// Time:       15:00 hrs
// Site:       https://polisystems.ch/
//////////////////////////////////////////////////////////////

if(!defined('SOFTACULOUS')){

	die('Tentative de piratage');

}

$l['restoreerror'] = 'Une erreur s\'est produite lors du dézippage des fichiers de sauvegarde';
$l['restoredatadir'] = 'Impossible de restaurer le répertoire de données';
$l['restorewww'] = 'Impossible de restaurer le répertoire Web';
$l['res_err_selectmy'] = 'Impossible de sélectionner la base de données à restaurer';
$l['err_myconn'] = 'Impossible de se connecter à la base de données';
$l['err_db_create'] = 'Une erreur s\'est produite lors de la création de la base de données';
$l['off_backup_restore'] = 'La fonction de sauvegarde/restauration a été désactivée par l\'administrateur';
$l['no_backupinfo_file'] = 'Fichier d\'informations sur la sauvegarde introuvable';
$l['no_backup_time'] = 'Heure de sauvegarde non trouvée';
$l['instime_higher_than_btime'] = 'L\'heure d\'installation est supérieure à l\'heure de sauvegarde';

// Chaînes de thème
$l['<title>'] = APP.' - Restaurer';
$l['restorefile'] = 'Restaurer à partir d\'une sauvegarde';
$l['restore_dir'] = 'Restaurer le répertoire';
$l['restore_dir_exp'] = 'Si vous cochez cette case, tout le dossier sera restauré';
$l['restore_datadir'] = 'Restaurer le répertoire de données';
$l['restore_datadir_exp'] = 'Si vous cochez cette case, le répertoire de données sera restauré';
$l['restore_db'] = 'Restaurer la base de données';
$l['restore_db_exp'] = 'Si cochée, la base de données sera également restaurée';
$l['restore_ins'] = 'Restaurer l\'installation';
$l['restore'] = 'Votre sauvegarde a été restaurée avec succès';
$l['confirm_restore'] = 'Voulez-vous vraiment restaurer l\'installation ?';
$l['return'] = 'Retour à l\'aperçu';
$l['return_to_wpm'] = 'Retour à la gestion de WordPress';
$l['restore_wwwdir'] = 'Restaurer le répertoire Web';
$l['restore_wwwdir_exp'] = 'Si vous cochez cette case, le répertoire Web sera restauré';
$l['checking_data'] = 'Vérification des données soumises';
$l['res_db'] = 'Restauration de la base de données';
$l['res_dir'] = 'Restauration du répertoire';
$l['res_datadir'] = 'Restauration du répertoire de données';
$l['finishing_process'] = 'Sauvegarde restaurée';
$l['wait_note'] = '<b>NOTE :</b> Cela peut prendre 3 à 4 minutes. Veuillez ne pas quitter cette page avant que la barre de progression n\'atteigne 100%';
$l['restoring'] = 'Votre sauvegarde est en cours de restauration en arrière-plan. Vous serez averti par email une fois que c\'est terminé. Vous pouvez suivre le processus de restauration à partir de la page <a href="'.$globals['index'].'act=eu_tasklist"> Liste des tâches </a>.';
$l['prog_restoring'] = 'Restauration '; // Ne pas supprimer l'espace final
$l['prog_restore_complete'] = 'Restauration terminée.';
$l['no_restore_functions'] = 'Le fichier RESTORE FUNCTIONS n\'a pas pu être trouvé ! Veuillez en informer l\'administrateur du serveur.';
$l['backup_file_empty'] = 'Le fichier de sauvegarde est vide';
$l['db_not_exist'] = 'Le fichier de base de données n\'existe pas';
$l['db_empty'] = 'Le fichier de base de données est vide';

$l['read_archive'] = 'Lecture de l\'archive';

$l['no_backup_file'] = 'Fichier de sauvegarde non présent';

$l['wpc_return'] = 'Retour aux sauvegardes';

$l['ampps_notify_premium'] = 'Cette fonctionnalité est disponible dans la version premium de AMPPS. Veuillez acheter <b><a href="https://ampps.com/clients">AMPPS Premium</a></b>';

$l['restore_delete_files'] = 'Supprimer les fichiers/répertoires existants';
$l['restore_delete_files_exp'] = 'Si vous cochez cette case, les fichiers/répertoires existants seront supprimés, puis les fichiers de sauvegarde seront restaurés. <br /><b>Remarque :</b> Assurez-vous d\'avoir choisi la sauvegarde complète lors de la création de cette sauvegarde.';
$l['no_restore_file_param'] = 'Le nom du fichier de sauvegarde n\'a pas été transmis. Il est nécessaire de démarrer le processus de restauration.';
