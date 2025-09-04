<?php

//////////////////////////////////////////////////////////////
//===========================================================
// restore_template_lang.php
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

$l['restoreerror'] = 'Une erreur s\'est produite lors de la décompression des fichiers de modèle';
$l['restoredatadir'] = 'Impossible de restaurer le répertoire de données';
$l['restorewww'] = 'Impossible de restaurer le répertoire Web';
$l['res_err_selectmy'] = 'Impossible de sélectionner la base de données à restaurer';
$l['err_myconn'] = 'Impossible de se connecter à la base de données';
$l['err_db_create'] = 'Une erreur s\'est produite lors de la création de la base de données';
$l['off_template'] = 'La fonction de modèles a été désactivée par l\'administrateur';
$l['no_backupinfo_file'] = 'Fichier d\'informations sur le modèle introuvable';
$l['no_backup_time'] = 'Heure du modèle introuvable';
$l['instime_higher_than_btime'] = 'L\'heure d\'installation est supérieure à l\'heure du modèle';

$l['no_template_file'] = 'Le fichier de modèle n\'existe pas';
$l['no_template_info'] = 'Le fichier d\'informations sur le modèle n\'existe pas';

// Chaînes de thème
$l['<title>'] = APP.' - Restaurer';
$l['restorefile'] = 'Restaurer à partir du modèle';
$l['restore_dir'] = 'Restaurer le répertoire';
$l['restore_dir_exp'] = 'Si vous cochez cette case, l\'ensemble du dossier sera restauré';
$l['restore_datadir'] = 'Restaurer le répertoire de données';
$l['restore_datadir_exp'] = 'Si vous cochez cette case, le répertoire de données sera restauré';
$l['restore_db'] = 'Restaurer la base de données';
$l['restore_db_exp'] = 'Si vous cochez cette case, la base de données sera également restaurée';
$l['restore_ins'] = 'Restaurer le modèle';
$l['restore'] = 'Votre modèle a été restauré avec succès';
$l['confirm_restore'] = 'Êtes-vous sûr de vouloir restaurer l\'installation ?';
$l['return'] = 'Retour à l\'aperçu';
$l['return_to_wpm'] = 'Retour à la gestion de WordPress';
$l['restore_wwwdir'] = 'Restaurer le répertoire Web';
$l['restore_wwwdir_exp'] = 'Si vous cochez cette case, le répertoire Web sera restauré';
$l['checking_data'] = 'Vérification des données soumises';
$l['res_db'] = 'Restauration de la base de données';
$l['res_dir'] = 'Restauration du répertoire';
$l['res_datadir'] = 'Restauration du répertoire de données';
$l['finishing_process'] = 'Modèle restauré';
$l['wait_note'] = '<b>NOTE :</b> Cela peut prendre 3 à 4 minutes. Veuillez ne pas quitter cette page avant que la barre de progression n\'atteigne 100%';
$l['restoring'] = 'Votre modèle est en cours de restauration en arrière-plan. Vous serez averti par e-mail une fois que cela sera terminé. Vous pouvez suivre le processus de restauration à partir de la page <a href="'.$globals['index'].'act=eu_tasklist"> Liste des tâches </a>.';
$l['prog_restoring'] = 'Restauration du modèle'; // Ne pas supprimer l'espace final
$l['prog_restore_complete'] = 'Restauration terminée.';
$l['no_restore_functions'] = 'Le fichier de FONCTIONS DE RESTAURATION n\'a pas pu être trouvé! Veuillez en informer l\'administrateur du serveur.';
$l['backup_file_empty'] = 'Le fichier de modèle est vide';
$l['db_not_exist'] = 'Le fichier de base de données n\'existe pas';
$l['db_empty'] = 'Le fichier de base de données est vide';
$l['ampps_notify_premium'] = 'Cette fonctionnalité est disponible dans la version premium d\'AMPPS. Veuillez acheter <b><a href="https://ampps.com/clients">AMPPS Premium</a></b>';

$l['read_archive'] = 'Lecture de l\'archive';

$l['wpc_return'] = 'Retour aux modèles';

$l['restore_delete_files'] = 'Supprimer les fichiers/dossiers existants';
$l['restore_delete_files_exp'] = 'Si coché, les fichiers/dossiers existants seront supprimés, puis les fichiers de modèle seront restaurés. <br /><b>Note</b>: Veuillez vous assurer d\'avoir choisi le modèle complet lors de la création de ce modèle.';

$l['no_restore_file_param'] = 'Le nom du fichier de modèle n\'a pas été transmis. Il est nécessaire de démarrer le processus de restauration.';
$l['no_space'] = 'Vous n\'avez pas suffisamment d\'espace pour installer ce logiciel !';
$l['no_softdomain'] = 'Vous n\'avez pas choisi de domaine pour installer le logiciel.';
$l['wrong_softdomain'] = 'Le chemin du domaine que vous avez sélectionné n\'a pas pu être trouvé.';

//Temp

$l['no_ins'] = 'Aucune installation n\'a été soumise';
$l['wrong_ins_title'] = 'ID d\'installation incorrect';
$l['wrong_ins'] = 'L\'ID d\'installation que vous avez soumis n\'existe pas';
$l['no_info_file'] = 'Le fichier INFO.XML n\'a pas pu être trouvé ! Veuillez en informer l\'administrateur du serveur.';
$l['incompatible'] = 'Le logiciel nécessite une version supérieure de '.APP.' ! Veuillez en informer l\'administrateur du serveur.';
$l['no_install'] = 'Le fichier INSTALL.XML n\'a pas pu être trouvé ! Veuillez en informer l\'administrateur du serveur.';
$l['no_functions'] = 'Le fichier de FONCTIONS DE CLONAGE n\'a pas pu être trouvé !';
$l['no_clone'] = 'Aucun Clone';
$l['no_softdomain'] = 'Vous n\'avez pas choisi de domaine pour installer le logiciel.';
$l['wrong_softdomain'] = 'Le chemin du domaine que vous avez sélectionné n\'a pas pu être trouvé.';
$l['softdirectory_exists'] = 'Le répertoire que vous avez tapé existe déjà ! Veuillez taper un autre nom de répertoire.';
$l['no_space'] = 'Vous n\'avez pas suffisamment d\'espace pour installer ce logiciel !';
$l['no_softdb'] = 'La base de données n\'a pas été envoyée.';
$l['database_exists'] = 'La base de données existe déjà. Veuillez choisir un autre nom.';
$l['databaseuser_exists'] = 'L\'utilisateur de la base de données existe déjà. Veuillez choisir un autre nom de base de données.';
$l['db_name_long'] = 'Le nom de la base de données ne peut pas dépasser 7 lettres. Veuillez choisir un nom de base de données plus court.';
$l['db_limit_crossed'] = 'Le nombre maximum de bases de données que vous pouvez créer a été atteint, donc l\'installation ne peut pas continuer.';
$l['restoring_template'] = 'Restauration du modèle';
$l['restore_template'] = 'Restaurer le modèle';
$l['downloading'] = 'Téléchargement du package';
$l['cant_restore_db'] = 'Impossible d\'importer la base de données';
$l['fail_create'] = 'Échec de la création du répertoire';
$l['fail_create_datadir'] = 'Échec de la création du répertoire de données';
$l['cant_clone_dir'] = 'Le répertoire ne peut pas être restauré car c\'est le répertoire de base.';
$l['cant_connect_mysql'] = 'Impossible de se connecter à la base de données, veuillez vérifier le nom d\'utilisateur/mot de passe de votre base de données. Si cela a été modifié, veuillez mettre à jour les détails dans les installations Softaculous en utilisant Modifier les détails.';
$l['same_ins'] = 'Il n\'est pas possible de cloner une installation au même emplacement';
$l['ins_exists'] = 'Il semble que vous avez déjà <b>&soft-1;</b> installé à l\'emplacement choisi';
$l['ins_recursive'] = 'Vous ne pouvez pas restaurer le modèle dans un sous-répertoire de l\'installation d\'origine';
$l['no_restore_template_support'] = 'La fonctionnalité de modèle n\'est pas prise en charge pour ce script';
$l['invalid_script'] = 'ID de script invalide';
$l['no_domain_found'] = 'Aucun domaine trouvé. Veuillez ajouter un domaine pour restaurer un modèle';

$l['no_cron_min'] = 'Aucune minute Cron n\'a été spécifiée';
$l['no_cron_hour'] = 'Aucune heure Cron n\'a été spécifiée';
$l['no_cron_day'] = 'Aucun jour Cron n\'a été spécifié';
$l['no_cron_month'] = 'Aucun mois Cron n\'a été spécifié';
$l['no_cron_weekday'] = 'Aucun jour de la semaine Cron n\'a été spécifié';
$l['wrong_cron_min'] = 'La minute Cron est incorrecte. Les valeurs valides sont de 0 à 59 ou un <b>*</b>';
$l['wrong_cron_hour'] = 'L\'heure Cron est incorrecte. Les valeurs valides sont de 0 à 23 ou un <b>*</b>';
$l['wrong_cron_day'] = 'Le jour Cron est incorrect. Les valeurs valides sont de 1 à 31 ou un <b>*</b>';
$l['wrong_cron_month'] = 'Le mois Cron est incorrect. Les valeurs valides sont de 1 à 12 ou un <b>*</b>';
$l['wrong_cron_weekday'] = 'Le jour de la semaine Cron est incorrect. Les valeurs valides sont de 0 à 7 ou un <b>*</b>';
$l['no_datadir'] = 'Aucun répertoire de données n\'a été spécifié';
$l['datadir_exists'] = 'Le répertoire de données que vous avez soumis existe déjà. Veuillez en spécifier un autre.';
$l['no_decompress_data'] = 'Il y a eu des erreurs lors de la décompression des fichiers de données.';
$l['some_files_exist'] = 'L\'installation ne peut pas se poursuivre car les fichiers suivants existent déjà dans le dossier cible : ';
$l['delete_files'] = 'Veuillez supprimer ces fichiers ou choisir un autre dossier.';
$l['overwrite_exist'] = '<b>OU</b> <br /><input type="checkbox" name="overwrite_existing" id="overwrite_existing" />&nbsp;&nbsp;<b><span style="color:#000;">Sélectionnez la case pour écraser tous les fichiers et continuer</span></b>';
$l['prog_cloning'] = 'Restauration du modèle'; // Ne pas supprimer l'espace de fin
$l['prog_cloning_complete'] = 'Restauration du modèle terminée.';
$l['checking_data'] = 'Vérification des données soumises';
$l['unzipping_files'] = 'Copie des fichiers et dossiers';
$l['unzipping_datadir'] = 'Décompression des fichiers de données';
$l['prop_db'] = 'Propagation de la base de données';
$l['finishing_process'] = 'Finalisation de la restauration du modèle';
$l['wait_note'] = '<b>REMARQUE :</b> Cela peut prendre 3 à 4 minutes. Veuillez ne pas quitter cette page tant que la barre de progression n\'a pas atteint 100%';
$l['no_hostname'] = 'Veuillez entrer le nom de votre hôte de base de données';
$l['no_dbusername'] = 'Veuillez entrer votre nom d\'utilisateur de base de données';
$l['no_dbuserpass'] = 'Veuillez entrer le mot de passe de votre base de données';
$l['softdirectory_invalid'] = 'Le répertoire que vous avez saisi est invalide.';
$l['softdatadir_invalid'] = 'Le répertoire de données que vous avez saisi est invalide.';
$l['err_domain'] = 'Pas de domaine';
$l['err_domain_admin'] = 'Cet utilisateur n\'a aucun domaine. Veuillez contacter l\'administrateur.';
$l['no_https'] = 'Un certificat SSL de confiance n\'a pas été trouvé';
$l['no_php_install'] = 'PHP n\'est pas installé. Pour l\'installer, veuillez cliquer <a href="'.$globals['index'].'act=apps&app=1">ici</a>';
$l['no_mysql_install'] = 'MySQL n\'est pas installé. Pour l\'installer, veuillez cliquer <a href="'.$globals['index'].'act=apps&app=16">ici</a>';
$l['no_field'] = 'Le champ <b>&soft-1;</b> est requis et doit être rempli.';
$l['error_adddb'] = 'La base de données n\'a pas pu être créée';
$l['error_adduser'] = 'Une erreur est survenue lors de l\'ajout d\'un utilisateur à la nouvelle base de données';
$l['no_package'] = 'Le package d\'installation n\'a pas pu être trouvé !';
$l['no_decompress'] = 'Il y a eu des erreurs lors de la décompression des fichiers du package.';

$l['<title>'] = APP.' - Restaurer le modèle';
$l['info'] = 'Informations sur le modèle';
$l['ins_softname'] = 'Logiciel';
$l['template_name'] = 'Nom du modèle';
$l['ins_num'] = 'Numéro d\'installation';
$l['ins_ver'] = 'Version';
$l['ins_time'] = 'Heure de création du modèle';
$l['ins_path'] = 'Chemin';
$l['ins_url'] = 'URL d\'origine du modèle';
$l['ins_admin_url'] = 'URL d\'administration';
$l['ins_db'] = 'Nom de la base de données';
$l['ins_dbuser'] = 'Utilisateur de la base de données';
$l['ins_dbpass'] = 'Mot de passe de la base de données';
$l['ins_dbhost'] = 'Hôte de la base de données';
$l['ins_datadir'] = 'Répertoire de données';
$l['ins_wwwdir'] = 'Répertoire Web';
$l['ins_wwwurl'] = 'URL du répertoire Web';
$l['ins_cron_command'] = 'Commande CRON';
$l['cloned'] = 'Le modèle a été restauré avec succès';
$l['restored'] = 'Le modèle a été restauré avec succès';
$l['clone_ins'] = 'Restaurer les détails de l\'installation';
$l['cloneins'] = 'Restaurer le modèle';
$l['choose_protocol'] = 'Choisir le protocole';
$l['choose_protocol_exp'] = 'Si votre site dispose du SSL, veuillez choisir le protocole HTTPS.';
$l['cron_job'] = 'Tâche CRON';
$l['cron_job_exp'] = 'Ce script nécessite un CRON pour fonctionner. Veuillez spécifier les horaires du CRON. Si vous ne le connaissez pas, laissez-le tel quel !';
$l['cron_min'] = 'Min';
$l['cron_hour'] = 'Heure';
$l['cron_day'] = 'Jour';
$l['cron_month'] = 'Mois';
$l['cron_weekday'] = 'Jour de la semaine';
$l['datadir'] = 'Répertoire de données';
$l['datadir_exp'] = 'Ce script nécessite de stocker ses données dans un dossier non accessible via le Web. Il sera créé dans votre dossier personnel. Par exemple, si vous spécifiez <b>datadir</b>, le dossier suivant sera créé - /home/nomutilisateur/<b>datadir</b>';
$l['db_name_long'] = 'Le nom de la base de données ne peut pas dépasser 7 lettres. Veuillez choisir un nom de base de données plus court.';
$l['db_alpha_num'] = 'Seuls les caractères alphanumériques sont autorisés pour le nom de la base de données.';
$l['overwrite'] = 'Écraser les fichiers';
$l['database_exists'] = 'La base de données existe déjà. Veuillez choisir un autre nom.';
$l['no_softdomain'] = 'Vous n\'avez pas choisi de domaine pour restaurer le modèle.';
$l['wrong_softdomain'] = 'Le chemin du domaine que vous avez sélectionné n\'a pas pu être trouvé.';
$l['no_space'] = 'Vous n\'avez pas suffisamment d\'espace pour restaurer ce modèle !';
$l['no_softdb'] = 'La base de données n\'a pas été envoyée.';
$l['choose_domain'] = 'Choisir le domaine';
$l['choose_domain_exp'] = 'Veuillez choisir le domaine pour restaurer le modèle.';
$l['in_directory'] = 'Dans le répertoire';
$l['in_directory_exp'] = 'Le répertoire est relatif à votre domaine et <b>ne doit pas exister</b>. Par exemple, pour installer à http://mondomaine/rep/ saisissez simplement <b>rep</b>. Pour installer uniquement à http://mondomaine/ laissez-le vide.';
$l['database_name'] = 'Nom de la base de données';
$l['database_name_exp'] = 'Saisissez le nom de la base de données à créer pour l\'installation';
$l['softcopy_note'] = '<b>REMARQUE</b> : Ce logiciel nécessite qu\'il soit installé à l\'aide de son propre utilitaire d\'installation. Veuillez visiter l\'URL qui sera affichée une fois que les fichiers auront été copiés pour terminer le processus d\'installation.';
$l['softsubmit'] = 'Restaurer le modèle';
$l['congrats'] = 'Félicitations, le modèle a été restauré avec succès';
$l['succesful'] = 'le modèle a été restauré avec succès à';
$l['admin_url'] = 'URL d\'administration';
$l['setup_continue'] = 'Cependant, la configuration sera terminée par le logiciel lui-même. Pour terminer la configuration, veuillez visiter l\'URL suivante';
$l['enjoy'] = 'Nous espérons que le processus de restauration a été facile.';
$l['install_notes'] = 'Voici quelques notes importantes. Il est fortement recommandé de les lire ';
$l['please_note'] = '<b>REMARQUE</b> : '.APP.' est juste un installeur automatique de logiciels et ne fournit aucun support pour les packages logiciels individuels. Veuillez visiter le site Web du fournisseur de logiciels pour obtenir du support !';
$l['regards'] = 'Cordialement';
$l['softinstaller'] = 'Installateur automatique '.APP.'';
$l['return'] = 'Retour à l\'aperçu';
$l['return_to_wpm'] = 'Retour à la gestion de WordPress';

$l['hostname'] = 'Nom d\'hôte de la base de données';
$l['hostname_exp'] = 'Le nom d\'hôte MySQL (principalement <b>localhost</b>)';
$l['dbusername'] = 'Nom d\'utilisateur de la base de données';
$l['dbusername_exp'] = 'Le nom d\'utilisateur MySQL';
$l['dbuserpass'] = 'Mot de passe de la base de données';
$l['dbuserpass_exp'] = 'Le mot de passe de l\'utilisateur MySQL';
$l['database_name_exp_aefer'] = 'Saisissez le nom de la base de données à utiliser pour l\'installation';

$l['restore_template_tweet_sub'] = 'Dites-le à vos amis';

$l['soft_ins_exists'] = 'Une installation existe déjà à l\'emplacement &soft-1; selon nos enregistrements. Pour restaurer le modèle à cet emplacement, veuillez désinstaller l\'installation existante !';

$l['no_sclone'] = 'Le fichier CLONE.XML n\'a pas pu être trouvé ! Veuillez en informer l\'administrateur du serveur.';
$l['no_functions'] = 'Le fichier de FONCTIONS DE CLONAGE n\'a pas pu être trouvé ! Veuillez en informer l\'administrateur du serveur.';

$l['restore_template_push_bg'] = 'Le processus de restauration du modèle a été lancé en arrière-plan';
$l['err_mysql_db'] = 'Le nom de la base de données MySQL est incorrect car la base de données n\'a pas pu être sélectionnée.';
$l['ampps_notify_premium'] = 'Cette fonctionnalité est disponible dans la version premium de AMPPS. Veuillez acheter <b><a href="https://ampps.com/clients">AMPPS Premium</a></b>';

$l['error_max_clone_script'] = 'Vous avez atteint le nombre maximum de modèles (<b>&soft-1;</b>) autorisés par script';

$l['choose_url'] = 'Choisir l\'URL de l\'installation';
$l['choose_url_exp'] = 'Veuillez choisir l\'URL pour installer le logiciel';

$l['failed_rsync'] = 'Échec de la synchronisation des fichiers d\'installation';
$l['failed_rsync_datadir'] = 'Échec de la synchronisation des fichiers du répertoire de données';
$l['wp_cli_replace_fail'] = 'Échec du remplacement des données dans le site de destination (en utilisant wp-cli)';

$l['error_table_exists'] = 'La table <b>&soft-1;</b> existe déjà dans la base de données de destination';
$l['fetch_db_details'] = 'Autoriser Softaculous à récupérer les détails de la base de données lors de la restauration ?';
$l['db_details_mismatch'] = 'Les détails de la base de données dans le fichier de configuration ne correspondent pas aux détails dans '.APP.'.';
