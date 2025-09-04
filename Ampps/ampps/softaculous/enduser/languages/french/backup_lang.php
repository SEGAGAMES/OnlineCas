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
// ----------------------------------------------------------
// Edited by:  Philippe Raimundo
// Date:       24 April 2024
// Time:       15:00 hrs
// Site:       https://polisystems.ch/
//////////////////////////////////////////////////////////////

if(!defined('SOFTACULOUS')){

	die('Tentative de piratage');

}

$l['no_ins'] = 'Aucune installation n\'a été soumise';
$l['wrong_ins_title'] = 'ID d\'installation erroné';
$l['wrong_ins'] = 'L\'ID d\'installation que vous avez soumis n\'existe pas';
$l['backup_ftp_error'] = 'Impossible de créer le répertoire de sauvegarde <b>&soft-1;</b>. Veuillez le créer manuellement et réessayer.';
$l['err_backup'] = 'Impossible de créer la sauvegarde.';
$l['no_space_backup'] = 'Vous n\'avez pas suffisamment d\'espace pour sauvegarder cette installation!';
$l['err_notelength'] = 'La note de sauvegarde doit comporter moins de 255 caractères';
$l['off_backup_restore'] = 'La fonctionnalité de sauvegarde/restauration a été désactivée par l\'administrateur';

$l['cant_backup_dir'] = 'L\'utilitaire de sauvegarde n\'a pas pu sauvegarder les fichiers.';
$l['could_not_read'] = 'Oops, Softaculous n\'a pas pu lire le fichier / répertoire suivant <b>&soft-1;</b>. Veuillez le rendre lisible pour continuer à utiliser l\'utilitaire de sauvegarde.';
$l['cant_datadir_dir'] = 'Il y a eu des erreurs lors de l\'ajout du répertoire de données.';
$l['cant_wwwdir'] = 'Il y a eu des erreurs lors de l\'ajout du répertoire Web.';
$l['cant_backup_db'] = 'Il y a eu des erreurs lors de l\'ajout de la base de données à la sauvegarde.';
$l['err_perm_file'] = 'Il y a eu des erreurs lors de la création d\'un fichier des permissions';
$l['err_dataperm_file'] = 'Il y a eu des erreurs lors de la création d\'un fichier des permissions du répertoire de données';
$l['err_wwwperm_file'] = 'Il y a eu des erreurs lors de la création d\'un fichier des permissions du répertoire Web';
$l['save_dir_perms'] = 'Impossible d\'enregistrer les permissions des fichiers';
$l['save_datadir_perms'] = 'Impossible d\'enregistrer les permissions du répertoire de données';
$l['save_www_perms'] = 'Impossible d\'enregistrer les permissions du répertoire Web';
$l['cant_connect_mysql'] = 'Impossible de se connecter à la base de données, veuillez vérifier le nom d\'utilisateur/mot de passe de votre base de données. Si modifié, veuillez mettre à jour les détails dans les installations Softaculous en utilisant Modifier les détails.';

// Chaînes de thème
$l['<title>'] = APP.' - Sauvegarde';
$l['info'] = 'Info';
$l['ins_softname'] = 'Logiciel';
$l['ins_num'] = 'Numéro d\'installation';
$l['ins_ver'] = 'Version';
$l['ins_time'] = 'Temps de l\'installation';
$l['ins_path'] = 'Chemin';
$l['ins_wwwdir'] = 'Chemin du répertoire Web';
$l['ins_url'] = 'URL';
$l['ins_db'] = 'Nom de la base de données';
$l['ins_dbuser'] = 'Nom d\'utilisateur de la base de données';
$l['ins_dbpass'] = 'Mot de passe de la base de données';
$l['ins_dbhost'] = 'Hôte de la base de données';
$l['backup_ins'] = 'Sauvegarder une installation';
$l['backup_dir'] = 'Sauvegarde du répertoire';
$l['backup_dir_exp'] = 'Si vous cochez cette case, le dossier entier sera sauvegardé';
$l['backup_db'] = 'Sauvegarde de la base de données';
$l['backup_db_exp'] = 'Si cette case est cochée, la base de données sera également sauvegardée';
$l['backup_conf'] = 'La sauvegarde peut prendre du temps en fonction des données. Veuillez ne pas fermer la page Web ni naviguer vers une autre page.';
$l['backedup'] = 'La sauvegarde a été créée avec succès. Vous pouvez y accéder à partir de la <a href="'.$globals['index'].'act=backups">page Sauvegardes</a>.';
$l['backup_ins'] = 'Sauvegarder l\'installation';
$l['backup_datadir'] = 'Sauvegarde du répertoire de données';
$l['backup_datadir_exp'] = 'Si cette case est cochée, le répertoire de données sera sauvegardé.';
$l['ins_datadir'] = 'Répertoire des données';
$l['return'] = 'Retour au sommaire';
$l['return_to_wpm'] = 'Retour à la gestion de WordPress';
$l['ins_cron_command'] = 'Commande Cron';
$l['backup_wwwdir'] = 'Sauvegarde du répertoire Web';
$l['backup_wwwdir_exp'] = 'Si cette case est cochée, le répertoire Web sera sauvegardé.';
$l['checking_data'] = 'Vérification des données soumises';
$l['backingup_db'] = 'Sauvegarde de la base de données';
$l['backingup_dir'] = 'Sauvegarde du répertoire';
$l['backingup_datadir'] = 'Sauvegarde du répertoire de données';
$l['finishing_process'] = 'Finalisation de la sauvegarde';
$l['wait_note'] = '<b>NOTE:</b> Cela peut prendre 3-4 minutes. Vous pouvez quitter cette page si vous le souhaitez!';
$l['backingup'] = 'La sauvegarde est en cours de création en arrière-plan. Vous serez avisé par courriel une fois terminée. Vous pouvez y accéder à partir de la <a href="'.$globals['index'].'act=backups">page Sauvegardes</a>.';
$l['check_email'] = 'Veuillez vérifier votre email pour connaître l\'état de la sauvegarde';
$l['prog_backingup'] = 'Sauvegarde en cours '; // Ne pas enlever l'espace à la fin
$l['prog_backup_complete'] = 'Sauvegarde terminée.';
$l['backup_note'] = 'Note';
$l['backup_note_exp'] = 'Vous pouvez enregistrer une note à titre de référence';
$l['backup_operation'] = 'Opération de sauvegarde';
$l['backups_expire'] = 'Vos sauvegardes seront automatiquement purgées après <b>&soft-1;</b> jours de création de la sauvegarde.';
$l['err_max_backups'] = 'Vous avez atteint le nombre maximum de (<b>&soft-1;</b>) sauvegardes autorisées. Veuillez supprimer les sauvegardes indésirables pour pouvoir créer une nouvelle sauvegarde.';
$l['err_max_local_backups'] = 'Vous avez atteint le nombre maximum de (<b>&soft-1;</b>) sauvegardes locales autorisées. Veuillez supprimer les sauvegardes indésirables sur le serveur local pour pouvoir créer une nouvelle sauvegarde.';
$l['err_max_insid_backups'] = 'Vous avez atteint le nombre maximum de (<b>&soft-1;</b>) sauvegardes autorisées pour cette installation. Veuillez supprimer les sauvegardes indésirables pour cette installation afin de pouvoir créer une nouvelle sauvegarde.';
$l['err_max_local_insid_backups'] = 'Vous avez atteint le nombre maximum de (<b>&soft-1;</b>) sauvegardes locales autorisées pour cette installation. Veuillez supprimer les sauvegardes indésirables pour cette installation sur le serveur local pour pouvoir créer une nouvelle sauvegarde.';
$l['backup_notes'] = 'Sauvegarde créée par '.APP.' auto backup';
$l['max_backups'] = 'Vous disposez actuellement de <b>&soft-1;</b> sauvegarde(s) dans votre compte. La limite maximale de vos sauvegardes est de <b>&soft-2;</b>.';

$l['no_backup_functions'] = 'Impossible de trouver le fichier FONCTIONS DE SAUVEGARDE! Veuillez en informer l\'administrateur du serveur.';
$l['no_dir_exists'] = 'Le répertoire d\'installation n\'existe pas.';
$l['backup_location_name'] = 'Lieu de sauvegarde';
$l['backup_file_empty'] = 'Taille du fichier de sauvegarde incorrecte : 0';
$l['err_mysql_db'] = 'Le nom de la base de données MySQL est incorrect car la base de données n\'a pas pu être sélectionnée.';
$l['backup_loc'] = 'Lieu de sauvegarde'; 
$l['exp_backup_loc'] = 'Choisissez l\'emplacement de sauvegarde à utiliser lors de la sauvegarde de cette installation'; 
$l['default'] = 'Par défaut'; 
$l['invalid_backup_location'] = 'L\'emplacement de sauvegarde soumis n\'existe pas'; 
$l['local_folder'] = 'Dossier local'; 
$l['err_default_backup_loc'] = 'L\'emplacement de sauvegarde par défaut est vide, veuillez sélectionner un emplacement de sauvegarde par défaut pour sauvegarder sur l\'emplacement par défaut.';

$l['invalid_access_token'] = 'Jeton d\'accès invalide. Veuillez réautoriser l\'application '.APP.' Dropbox depuis la page Modifier l\'emplacement de sauvegarde dans le panneau utilisateur '.APP.'.';
$l['insufficient_space'] = 'Votre compte Dropbox est plein. Veuillez libérer de l\'espace et réessayer la sauvegarde après un certain temps';
$l['incorrect_offset'] = 'Décalage incorrect';

$l['gdrive_err_init'] = 'Il y a eu des erreurs lors de l\'initialisation de la sauvegarde sur Google Drive!';
$l['gdrive_err_end'] = 'Il y a eu des erreurs lors de l\'envoi de la sauvegarde sur votre compte Google Drive!';

$l['error_max_backup_script'] = 'Vous avez atteint le nombre maximum de (<b>&soft-1;</b>) sauvegardes autorisées par script';
$l['error_max_backup_insid'] = 'Vous avez atteint le nombre maximum de (<b>&soft-1;</b>) sauvegardes autorisées par installation';

$l['ftp_access'] = 'Le processus PHP ne peut pas écrire des fichiers sur votre serveur. Veuillez configurer l\'accès FTP pour continuer.';
$l['configure_domain'] = 'Configurer les paramètres';

$l['wpc_return'] = 'Retour aux sauvegardes';

$l['ampps_notify_premium'] = 'Cette fonctionnalité est disponible dans la version premium d\'AMPPS. Veuillez acheter <b><a href="https://ampps.com/clients">AMPPS Premium</a></b>';
$l['backing_up'] = 'Votre sauvegarde est en cours de création en arrière-plan. Vous serez notifié par email une fois terminée. Vous pouvez suivre le processus de sauvegarde depuis la page <a href="'.$globals['index'].'act=eu_tasklist">Liste des tâches</a>.<br /> L\'URL de votre installation : <a href="&soft-1;" target="_blank">&soft-1;</a>';

$l['rbackup_disabled'] = 'La sauvegarde sur les emplacements distants est désactivée par l\'administrateur';
$l['rbackup_protocol_disabled'] = 'La sauvegarde sur <b>&soft-1;</b> est désactivée par l\'administrateur';

$l['onedrive_err_end'] = 'Il y a eu des erreurs lors de l\'envoi de la sauvegarde sur votre compte OneDrive!';
$l['onedrive_err_upload_url'] = 'Échec de la génération de l\'URL de téléchargement OneDrive';

$l['dropbox_refresh_token_err'] = 'Échec de la génération du jeton d\'accès Dropbox. Veuillez réautoriser l\'emplacement Dropbox depuis Paramètres -> Modifier l\'emplacement de sauvegarde.';