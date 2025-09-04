<?php

//////////////////////////////////////////////////////////////
//===========================================================
// create_template_lang.php
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
$l['wrong_ins_title'] = 'ID d\'installation incorrect';
$l['wrong_ins'] = 'L\'ID d\'installation que vous avez soumis n\'existe pas';
$l['backup_ftp_error'] = 'Impossible de créer le répertoire de modèle <b>&soft-1;</b>. Veuillez le créer manuellement et réessayer.';
$l['err_backup'] = 'Impossible de créer le modèle.';
$l['no_space_backup'] = 'Vous n\'avez pas suffisamment d\'espace pour créer un modèle de cette installation !';
$l['err_namelength'] = 'Le nom du modèle doit comporter moins de 255 caractères';
$l['err_nameempty'] = 'Le nom du modèle ne peut pas être vide';
$l['off_template'] = 'La fonctionnalité de création de modèles a été désactivée par l\'administrateur';

$l['cant_backup_dir'] = 'L\'utilitaire de modèle n\'a pas pu copier les fichiers.';
$l['could_not_read'] = 'Oups, Softaculous n\'a pas pu lire le fichier/répertoire suivant <b>&soft-1;</b>. Veuillez le rendre lisible pour continuer à utiliser l\'utilitaire de modèle.';
$l['cant_datadir_dir'] = 'Des erreurs sont survenues lors de l\'ajout du répertoire de données.';
$l['cant_wwwdir'] = 'Des erreurs sont survenues lors de l\'ajout du répertoire Web.';
$l['cant_backup_db'] = 'Des erreurs sont survenues lors de l\'ajout de la base de données à la sauvegarde.';
$l['err_perm_file'] = 'Des erreurs sont survenues lors de la création d\'un fichier de permissions';
$l['err_dataperm_file'] = 'Des erreurs sont survenues lors de la création d\'un fichier de permissions pour le répertoire de données';
$l['err_wwwperm_file'] = 'Des erreurs sont survenues lors de la création d\'un fichier de permissions pour le répertoire Web';
$l['save_dir_perms'] = 'Impossible d\'enregistrer les permissions des fichiers';
$l['save_datadir_perms'] = 'Impossible d\'enregistrer les permissions du répertoire de données';
$l['save_www_perms'] = 'Impossible d\'enregistrer les permissions du répertoire Web';
$l['cant_connect_mysql'] = 'Impossible de se connecter à la base de données, veuillez vérifier le nom d\'utilisateur/mot de passe de votre base de données. Si vous les avez modifiés, veuillez mettre à jour les détails dans les installations Softaculous via Modifier les Détails.';
$l['template_exists'] = 'Le nom du modèle existe déjà, veuillez utiliser un autre nom de modèle.';

// Chaînes de thème
$l['<title>'] = APP.' - Créer un Modèle';
$l['info'] = 'Info';
$l['ins_softname'] = 'Logiciel';
$l['ins_num'] = 'Numéro d\'installation';
$l['ins_ver'] = 'Version';
$l['ins_time'] = 'Heure d\'installation';
$l['ins_path'] = 'Chemin';
$l['ins_wwwdir'] = 'Chemin du Répertoire Web';
$l['ins_url'] = 'URL';
$l['ins_db'] = 'Nom de la Base de Données';
$l['ins_dbuser'] = 'Utilisateur de la Base de Données';
$l['ins_dbpass'] = 'Mot de Passe de la Base de Données';
$l['ins_dbhost'] = 'Hôte de la Base de Données';
$l['backup_conf'] = 'La création du modèle peut prendre un certain temps en fonction des données. Veuillez ne pas fermer la page web ni naviguer vers une autre page.';
$l['backedup'] = 'Le modèle a été créé avec succès. Vous pouvez y accéder depuis la page <a href="'.$globals['index'].'act=templates">Liste des Modèles</a>.<br /> URL de l\'installation : <a href="&soft-1;" target="_blank">&soft-1;</a>';
$l['create_template'] = 'Créer un Modèle';    
$l['return'] = 'Retour à l\'Aperçu';
$l['return_to_wpm'] = 'Retour à la Gestion de WordPress';
$l['ins_cron_command'] = 'Commande Cron';
$l['checking_data'] = 'Vérification des données soumises';
$l['backingup_db'] = 'Ajout de la Base de Données';
$l['backingup_dir'] = 'Ajout du Répertoire';
$l['backingup_datadir'] = 'Ajout du Répertoire de Données';
$l['finishing_process'] = 'Finalisation du Processus de Création de Modèle';
$l['wait_note'] = '<b>NOTE :</b> Cela peut prendre 3-4 minutes. Vous pouvez quitter cette page si vous le souhaitez !';
$l['backingup'] = 'Le modèle est en cours de création en arrière-plan. Vous serez notifié par email une fois terminé.<br /> Après le processus, vous pourrez y accéder depuis la page <a href="'.$globals['index'].'act=templates">Liste des Modèles</a>.<br /> URL de l\'installation : <a href="&soft-1;" target="_blank">&soft-1;</a>';
$l['check_email'] = 'Veuillez vérifier votre email pour connaître le statut du modèle';
$l['prog_backingup'] = 'Création du modèle de '; // Ne supprimez pas l'espace final
$l['prog_backup_complete'] = 'Modèle créé.';
$l['template_name'] = 'Nom du Modèle';
$l['template_name_exp'] = 'Vous pouvez enregistrer un nom pour votre référence';
$l['backup_operation'] = 'Options du Modèle';
$l['no_backup_functions'] = 'Le fichier de FONCTIONS DE MODÈLE n\'a pas pu être trouvé ! Veuillez signaler cela à l\'administrateur du serveur.';
$l['no_dir_exists'] = 'Le répertoire d\'installation n\'existe pas.';
$l['backup_location_name'] = 'Emplacement du Modèle';
$l['backup_file_empty'] = 'Taille du fichier de modèle incorrecte : 0';
$l['err_mysql_db'] = 'Le nom de la base de données MySQL est incorrect car la base de données n\'a pas pu être sélectionnée.';

$l['template_type'] = 'Type de Modèle';
$l['exp_template_type'] = 'Choisissez le type de modèle';
$l['upgrade'] = 'Mise à Niveau de l\'Installation';
$l['exp_upgrade'] = 'L\'instance et ses plugins seront mis à niveau lors de l\'installation';
$l['disallow_plugins'] = 'Ne pas autoriser les Plugins et Thèmes';
$l['exp_disallow_plugins'] = 'L\'installation de nouveaux plugins et thèmes sera désactivée sur les sites créés avec ce modèle';
$l['private'] = 'Privé (Seul vous pouvez lancer des sites web depuis votre compte en utilisant ce modèle)';
$l['shared'] = 'Public (Toute personne ayant accès à votre modèle peut lancer un site web en utilisant ce modèle)';
$l['monetize'] = 'Monétiser (Listez votre modèle sur la boutique '.APP.' et gagnez une commission)';
$l['invalid_backup_location'] = 'L\'emplacement du modèle soumis n\'existe pas';
$l['local_folder'] = 'Dossier Local';
$l['err_default_backup_loc'] = 'L\'emplacement par défaut du modèle est vide, veuillez sélectionner un emplacement par défaut pour créer le modèle à cet emplacement par défaut.';

$l['invalid_access_token'] = 'Jeton d\'accès invalide. Veuillez réautoriser l\'application '.APP.' Dropbox depuis la page Modifier l\'emplacement de sauvegarde dans le panneau utilisateur de '.APP;
$l['insufficient_space'] = 'Votre compte Dropbox est plein. Veuillez libérer de l\'espace et réessayer la sauvegarde plus tard';
$l['incorrect_offset'] = 'Décalage incorrect';

$l['gdrive_err_init'] = 'Des erreurs se sont produites lors de l\'initialisation de la sauvegarde sur Google Drive!!';
$l['gdrive_err_end'] = 'Des erreurs se sont produites lors de la validation de la sauvegarde sur votre compte Google Drive!!';
$l['ampps_notify_premium'] = 'Cette fonctionnalité est disponible dans la version premium d\'AMPPS. Veuillez acheter <b><a href="https://ampps.com/clients">AMPPS Premium</a></b>';

$l['error_max_backup_script'] = 'Vous avez atteint le nombre maximum de (<b>&soft-1;</b>) Modèles autorisés par script';
$l['error_max_backup_insid'] = 'Vous avez atteint le nombre maximum de (<b>&soft-1;</b>) Modèles autorisés par installation';

$l['ftp_access'] = 'Le processus PHP ne peut pas écrire des fichiers sur votre serveur. Veuillez configurer l\'accès FTP pour continuer.';
$l['configure_domain'] = 'Configurer les Paramètres';

$l['wpc_return'] = 'Retour aux Modèles';

$l['backing_up'] = 'Votre modèle est en cours de création en arrière-plan. Vous serez notifié par email une fois terminé. Vous pouvez suivre le processus depuis la page <a href="'.$globals['index'].'act=eu_tasklist">Liste des Tâches</a>.<br /> URL de votre installation : <a href="&soft-1;" target="_blank">&soft-1;</a>';

$l['rbackup_disabled'] = 'Les modèles sur des emplacements distants sont désactivés par l\'administrateur';
$l['rbackup_protocol_disabled'] = 'Le modèle sur <b>&soft-1;</b> est désactivé par l\'administrateur';

$l['onedrive_err_end'] = 'Des erreurs se sont produites lors du téléchargement du modèle sur votre compte OneDrive !';
$l['onedrive_err_upload_url'] = 'Échec de la génération de l\'URL de téléchargement OneDrive';

$l['dropbox_refresh_token_err'] = 'Échec de la génération du jeton d\'accès Dropbox. Veuillez réautoriser l\'emplacement Dropbox depuis Paramètres -> Page Modifier l\'Emplacement de Sauvegarde.';