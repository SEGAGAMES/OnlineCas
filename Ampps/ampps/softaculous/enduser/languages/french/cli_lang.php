<?php

//////////////////////////////////////////////////////////////
//===========================================================
// cli_lang.php
//===========================================================
// SOFTACULOUS 
// Version : 4.1.7
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

$l['auto_upgrade_parameter'] = "Veuillez fournir un paramètre pour utiliser cette fonctionnalité comme (--core ou --plugins ou --themes) pour la mise à niveau automatique";
$l['err_cannot_autoupgrade'] = "La mise à niveau automatique ne peut pas être effectuée pour ce panneau de contrôle.\n";
$l['err_invalid_param'] = "Paramètre invalide &soft-1;\nVeuillez lire la documentation pour plus de détails :\nhttp://www.softaculous.com/docs/Upgrade_Script_from_CLI\n";
$l['err_no_input'] = "Veuillez fournir des entrées.\n";
$l['err_no_insid'] = "ID d'installation non fourni.\n";
$l['err_no_username'] = "Nom d'utilisateur non fourni.\n";
$l['err_no_such_user'] = "Aucun utilisateur trouvé.\n";
$l['err_dont_provide_username'] = "Le nom d'utilisateur n'est pas requis.\n";
$l['err_no_softdir'] = "Répertoire Softaculous non trouvé pour l'utilisateur &soft-1;\n";
$l['err_no_installation'] = "Aucune installation trouvée pour l'ID d'installation : &soft-1;\n";
$l['err_cant_upgrade'] = "Cette installation est déjà à jour OU ce script ne peut pas être mis à niveau automatiquement.\n";
$l['err_backup_fail'] = 'La sauvegarde n\'a pas réussi, le processus de mise à niveau est donc annulé. Les détails sont les suivants :';
$l['err_upgrade_restore_failed'] = 'Échec de la mise à niveau de l\'installation ET également échec de la restauration à partir de la sauvegarde créée. Les détails sont les suivants :';
$l['err_upgrade_restore_success'] = 'Échec de la mise à niveau de l\'installation MAIS restauration réussie à partir de la sauvegarde créée. Les détails sont les suivants :';
$l['err_upgrade'] = 'Échec de la mise à niveau de l\'installation. Les détails sont les suivants :';
$l['err_upgrade_req'] = 'Cette installation ne répond pas aux exigences de mise à niveau. Elle ne peut donc pas être mise à niveau automatiquement. Les détails sont les suivants :';
$l['err_could_not_posix'] = 'Impossible de passer à l\'utilisateur, processus abandonné...';
$l['err_cant_upgrade_for_this_server'] = "Les vérifications préalables à la mise à niveau ONT ÉCHOUÉ car les URL(s) externes n'ont pas pu être accessibles.\n Cela peut être dû à allow_url_fopen() désactivé sur votre serveur ou à l'échec de CURL pour accéder à l'URL. Par conséquent, la mise à niveau automatique ne peut pas être effectuée.";
$l['err_auto_upgrade_req_fail'] = 'Cette installation ne répond pas aux exigences de mise à niveau automatique. Elle ne peut donc pas être mise à niveau automatiquement. Les détails sont les suivants :';
$l['help'] = "Bienvenue dans l'interface en ligne de commande de Softaculous.
Commandes disponibles : \n\t
--install\t Pour installer une application.
--upgrade\t Pour mettre à niveau une application installée.
--import\t Pour importer une application installée dans Softaculous.\n
Pour toute assistance, veuillez nous contacter à : support@softaculous.com
";
$l['err_no_script'] = "Nom du script non fourni.\n";
$l['err_no_url'] = "Veuillez fournir l'URL où une installation a été effectuée par exemple --url=DOMAIN.COM/testdir\n";
$l['err_no_such_script'] = "Oups! Aucun script de ce type trouvé - &soft-1;\n";
$l['import_success'] = "Importé avec succès!\n";
$l['import_error'] = "L'erreur suivante s'est produite : \n";
$l['err_no_path'] = "Veuillez fournir le chemin. par exemple --path=/home/USER/public_html/test\n";
$l['err_no_import'] = "L'utilitaire d'importation n'est pas disponible pour ce script\n";
$l['err_user_not_allowed'] = "L'utilitaire d'importation n'est pas disponible pour l'utilisateur final\n";
$l['err_cant_load_docroots'] = "Impossible de charger le chemin vers le(s) domaine(s)\n";
$l['ins_available_for'] = " installation(s) disponible(s) pour le répertoire suivant :\n";// Gardez l'espace au début
$l['ins_found_at_path'] = " installation trouvée au chemin spécifié.\n Exécutez la commande précédente avec --r pour l'importer.\n";
$l['imp_ins_exists'] = "Cette installation est déjà importée pour - &soft-1; à &soft-2;\n";
$l['upgraded_manually'] = "L'installation est déjà à jour. Enregistrements ".APP." mis à jour\n";
$l['upgraded_successfully'] = "La mise à niveau a été réussie \n";
$l['shellexec_disabled'] = 'shell_exec() est désactivé';
$l['list_scripts'] = "\nVoici la liste des exigences des scripts";
$l['err_cannot_autobackup'] = "Les sauvegardes automatiques ne peuvent pas être effectuées pour ce panneau de contrôle.\n";
$l['err_no_auto_backup'] = "Les sauvegardes automatiques ont été désactivées par l'administrateur.\n";
$l['err_update_record'] = 'Une erreur s\'est produite lors de la mise à jour de la version dans les enregistrements de '.APP."\n";
$l['suc_update_record'] = "Enregistrements de ".APP." mis à jour avec succès de &soft-1; à &soft-2; pour &soft-3;\n";
$l['show_real_version'] = "Version réelle : &soft-1; -- Version selon les enregistrements de ".APP." : &soft-2; \n";
$l['no_outdated_ins'] = "Aucune installation obsolète trouvée.\n";
$l['edit_detail_options'] = "\n--show_outdated_version=1 Pour afficher les installations obsolètes de l'utilisateur spécifié
--user=USER_NAME dont vous souhaitez mettre à jour les enregistrements
--sid=SCRIPT_ID ID du script pour lequel vous souhaitez mettre à jour les enregistrements
--update_records=1 Cela mettra à jour les enregistrements de ".APP."\n";
$l['only_au_ins_note'] = "Remarque : Seules les installations pouvant être mises à niveau automatiquement seront listées ici\n";
$l['err_restore_cli'] = "La restauration via CLI ne peut pas être effectuée pour ce panneau de contrôle.\n";
$l['err_no_backupfile'] = "Le fichier de sauvegarde n'existe pas.\n";
$l['err_wrongins'] = "Le fichier de sauvegarde n'est pas pour cette installation.\n";
$l['err_no_file'] = "Nom de fichier de sauvegarde non spécifié.\n";
$l['err_no_backupinfo'] = "Fichier d'information de sauvegarde non trouvé.\n";
$l['err_no_backup_file'] = "Fichier de sauvegarde non trouvé.\n";

$l['soft_license'] = "Licence ".APP;
$l['lic_type'] = "Type";
$l['num_users'] = "Nombre d'utilisateurs";
$l['licexpires'] = "Expire";
$l['primary_ip'] = "IP de la licence";
$l['free'] = "Gratuit";
$l['premium'] = "Premium";
$l['expired'] = "Expiré";
$l['never'] = "Jamais";

// Suppression d'installation
$l['no_panels'] = "La suppression de scripts via CLI est possible uniquement sur cPanel ou Webuzo.\n";
$l['no_input'] = "Veuillez fournir les entrées requises.\n";
$l['invalid_par'] = 'Paramètre invalide ';
$l['no_scripts'] = 'Les scripts n\'ont pas été chargés.';
$l['remove'] = 'Supprimé';
$l['heading'] = "Nom du script \t ID de l'installation du script \n";
$l['no_installation'] = "Aucune installation trouvée sur votre serveur.\n";
$l['err_remove'] = "Échec de la suppression de l'installation.\n";

// Remove installation
$l['no_panels'] = "Removing scripts from CLI is possible only on cPanel or Webuzo.\n";
$l['no_input'] = "Please provide required input.\n";
$l['invalid_par'] = 'Invalid parameter ';
$l['no_scripts'] = 'Scripts were not loaded.';
$l['remove'] = 'Removed';
$l['heading'] = "Script Name \t Script Installation ID \n";
$l['no_installation'] = "No installations were found on your server.\n";
$l['err_remove'] = "Remove installation Failed.\n";
// Remove installation
$l['no_panels'] = "Removing scripts from CLI is possible only on cPanel or Webuzo.\n";
$l['no_input'] = "Please provide required input.\n";
$l['invalid_par'] = 'Invalid parameter ';
$l['no_scripts'] = 'Scripts were not loaded.';
$l['remove'] = 'Removed';
$l['heading'] = "Script Name \t Script Installation ID \n";
$l['no_installation'] = "No installations were found on your server.\n";
$l['err_remove'] = "Remove installation Failed.\n";
$l['note_by_automated_backup'] = 'Sauvegarde créée par des sauvegardes automatiques';
$l['note_by_automated_upgrade'] = 'Sauvegarde créée par une mise à niveau automatique';
$l['sql_db'] = 'Impossible de trouver le fichier de base de données';
$l['err_query'] = 'Impossible d\'exécuter la requête';
$l['sqlfile_err'] = 'Impossible de créer le fichier sql';
$l['fetching_remote_files'] = 'Importation des fichiers depuis le serveur distant';
$l['import_complete'] = 'Importation terminée';
$l['import_script'] = 'Importation';
$l['export_db'] = 'Exportation de la base de données depuis le serveur distant';
$l['fetch_datadir'] = 'Récupération du répertoire de données depuis le serveur distant';
$l['import_db'] = 'Propagation de la base de données';
$l['insid_missing'] = 'Veuillez fournir l\'ID d\'installation';
$l['insid_incorrect'] = 'ID d\'installation incorrect';
$l['read_file'] = 'Impossible de lire le fichier de données d\'importation';
$l['no_remote_import'] = 'L\'importation à distance n\'est pas prise en charge pour ce script';
$l['wrong_ftp_path'] = 'Le chemin FTP spécifié est incorrect';

// Sauvegardes et restauration Webuzo
$l['not_permitted'] = 'Cet utilisateur n\'est pas autorisé à exécuter le script';
$l['no_option'] = 'Rien à faire';
$l['no_backup_dir'] = 'Le répertoire de sauvegarde n\'est pas présent';
$l['backup_filename'] = 'Nom du fichier de sauvegarde';
$l['create_tar'] = 'Création du fichier tar';
$l['tar_error'] = 'Des erreurs se sont produites lors de la création du fichier tar';
$l['tar_created'] = 'Fichier tar créé';
$l['create_db'] = 'Création de la sauvegarde de la base de données';
$l['no_dbback_func'] = 'La fonction de sauvegarde n\'est pas disponible';
$l['db_back_fail'] = 'L\'utilitaire n\'a pas pu sauvegarder la base de données';
$l['compress_sql'] = 'Compression du fichier SQL';
$l['db_backup_filename'] = 'Le nom du fichier de sauvegarde de la base de données est';
$l['no_mysql'] = 'MySQL n\'est pas installé';
$l['skip_db_files'] = 'Processus de sauvegarde de la base de données ignoré';
$l['tar_extract'] = 'Extraction du fichier tar';
$l['err_tar_xtrct'] = 'Des erreurs se sont produites lors de l\'extraction du fichier tar';
$l['db_restore_file'] = 'Restauration du fichier de la base de données';
$l['db_restore_err'] = 'L\'utilitaire n\'a pas pu restaurer la base de données';
$l['db_restore_done'] = 'Base de données restaurée avec succès';
$l['skip_db_restore'] = 'Processus de restauration de la base de données ignoré';
$l['no_exim'] = 'Exim n\'est pas installé';
$l['skip_exim_files'] = 'Fichiers Exim ignorés';
$l['no_bind'] = 'BIND n\'est pas installé';
$l['skip_bind_files'] = 'Fichiers BIND ignorés';
$l['no_backup_type'] = 'Type de sauvegarde non spécifié';
$l['wrng_backup_type'] = 'Type de sauvegarde incorrect spécifié';
$l['wrng_back_file'] = 'Le fichier spécifié n\'est pas un fichier de sauvegarde';
$l['strt_backup'] = 'Démarrage du processus de sauvegarde';
$l['success_backup'] = 'Processus de sauvegarde terminé';
$l['error_backup'] = 'Processus de sauvegarde terminé avec des erreurs';
$l['exit_cli'] = 'Sortie de la CLI';
$l['no_file2restore'] = 'Aucun fichier spécifié pour la restauration';
$l['no_db_backup'] = 'Fichier de sauvegarde de la base de données non trouvé';
$l['chck_backup_exits'] = 'Vérification de l\'existence du fichier de sauvegarde';
$l['strt_restore'] = 'Démarrage du processus de restauration';
$l['success_restore'] = 'Processus de restauration terminé';
$l['error_restore'] = 'Processus de restauration terminé avec des erreurs';
$l['send_email'] = 'Envoi de l\'email à l\'utilisateur';
$l['only_for_premium'] = 'Cette fonctionnalité est disponible uniquement pour les utilisateurs ayant une licence Premium';
$l['err_no_owner'] = "Propriétaire non fourni.\n";
$l['err_invalid_file'] = "Nom de fichier invalide\n";
$l['acl_saved'] = 'Paramètre enregistré avec succès';
$l['acl_errr'] = 'Impossible d\'enregistrer le paramètre';
$l['err_unzipping'] = 'Erreur lors de la décompression des fichiers';
$l['invalid_import_file'] = 'Veuillez fournir un fichier valide pour importer les paramètres';
$l['no_access_url'] = 'Impossible d\'accéder au fichier de paramètres source';
$l['no_write_tmpfile'] = 'Impossible d\'écrire le fichier temporaire';
$l['file_not_exist'] = 'Le fichier n\'existe pas, veuillez fournir le chemin correct';
$l['no_root_user'] = 'Seul l\'utilisateur root peut importer les paramètres administratifs';
$l['successfully_imported'] = 'Paramètres importés avec succès';
$l['no_ins_found'] = 'Aucune installation trouvée';

$l['cli_ftp_error'] = 'Erreur de connexion au serveur FTP';
$l['err_fetch_file'] = 'Impossible d\'accéder au fichier téléchargé sur le domaine';
$l['err_fetch_path'] = 'Impossible de récupérer le chemin des données reçues';
$l['cli_no_remote_import'] = 'L\'importation à distance via CLI n\'est pas prise en charge pour ce script';
$l['cli_wrong_ftp_path'] = 'Le chemin FTP est incorrect';
$l['cli_ftp_error-1'] = 'Impossible de résoudre le nom de domaine';
$l['cli_ftp_error-2'] = 'Impossible de se connecter avec les détails FTP spécifiés';
$l['cli_ftp_error-3'] = 'Le chemin FTP n\'existe pas';
$l['invalid_backup_location'] = 'Le lieu de sauvegarde soumis n\'existe pas';
$l['invalid_access_token'] = 'Jeton d\'accès invalide. Veuillez réautoriser l\'application '.APP.' Dropbox depuis la page Modifier l\'emplacement de sauvegarde dans le panneau utilisateur de '.APP;
$l['insufficient_space'] = 'Votre compte Dropbox est plein. Veuillez libérer de l\'espace et réessayer la sauvegarde plus tard';

$l['err_default_backup_loc'] = 'L\'emplacement de sauvegarde par défaut est vide, veuillez sélectionner un emplacement de sauvegarde par défaut pour sauvegarder sur l\'emplacement par défaut.';

$l['err_local_backup_disabled'] = 'L\'emplacement de sauvegarde que vous avez sélectionné "Sauvegardes locales" est désactivé par l\'administrateur. Veuillez modifier votre installation et choisir un autre emplacement de sauvegarde.';

$l['gdrive_err_init'] = 'Des erreurs se sont produites lors de l\'initialisation de la sauvegarde sur Google Drive!!';
$l['gdrive_err_end'] = 'Des erreurs se sont produites lors de la validation de la sauvegarde sur votre compte Google Drive!!';
$l['pass_decrpyt_fail'] = 'Échec du décryptage du mot de passe.';
$l['ssh_conn_fail'] = 'La connexion SSH au serveur distant a échoué';
$l['delete_temp_file'] = 'Suppression du fichier de sauvegarde temporaire';
$l['ssh_conn_success'] = 'Connexion SSH réussie';
$l['bckp_dir_notfound'] = 'Répertoire de sauvegarde non trouvé, création en cours';
$l['fail_bckp_dir'] = 'Échec de la création du répertoire de sauvegarde distant';
$l['ssh_upload_start'] = 'Début du téléchargement SSH du fichier de sauvegarde';
$l['ssh_upload_fail'] = 'Échec du téléchargement SSH';
$l['ssh_upload_success'] = 'Téléchargement SSH réussi';
$l['ssh_conn_close'] = 'Fermeture de la connexion SSH';
$l['ftp_conn_fail'] = 'Échec de la connexion FTP';
$l['ftp_conn_success'] = 'Connexion FTP réussie';
$l['ftp_change_dir'] = 'Changement de répertoire FTP';
$l['ftp_upload_fail'] = 'Échec du téléchargement FTP';
$l['ftp_upload_success'] = 'Téléchargement FTP réussi';
$l['ftp_conn_close'] = 'Fermeture de la connexion FTP';
$l['empty_server_list'] = 'Impossible d\'obtenir la liste des serveurs de sauvegarde';
$l['ftp_upload_start'] = 'Début du téléchargement FTP du fichier de sauvegarde';
$l['dwnlod_restore_fail'] = 'Impossible de télécharger le fichier pour la restauration';
$l['remote_del_fail'] = 'Impossible de supprimer le fichier sur le serveur distant';
$l['remote_del_success'] = 'Fichier de sauvegarde distant supprimé avec succès';
$l['no_server_id_filename'] = 'ID du serveur de sauvegarde et nom du fichier non fournis !';
$l['cd_backup_location_fail'] = 'Impossible de changer de répertoire vers l\'emplacement spécifié';

$l['err_no_openssl'] = "L'extension Openssl est nécessaire pour crypter le(s) mot(s) de passe avec le nouvel algorithme de cryptage\n";
$l['err_no_mcrypt'] = "L'extension Mcrypt est nécessaire pour décrypter le(s) mot(s) de passe crypté(s) avec l'ancien algorithme de cryptage\n";
$l['add_backup_file'] = 'Fichier de sauvegarde ajouté'; 
$l['err_include_extend'] = "\nÉchec de l'inclusion des fonctions pour la mise à jour des plugins/thèmes";
$l['err_access_ins'] = "\nErreur d'accès à l'installation &soft-1;\n Mise à niveau des plugins/thèmes ignorée pour cette installation";
$l['note_partial_backup'] = 'Sauvegarde partielle prise lors de la mise à niveau des plugins/thèmes';
$l['err_partial_backup_fail'] = 'La sauvegarde partielle n\'a pas réussi, le processus de mise à niveau des plugins/thèmes est donc annulé. Les détails sont les suivants :';
$l['err_upgrade_extras'] = "\nDes erreurs se sont produites lors de la mise à niveau des thèmes et plugins";
$l['upgraded_successfully_extras'] = "\nPlugins/Thèmes mis à niveau avec succès pour : ";
$l['err_upgrade_restore_failed_extras'] = 'Échec de la mise à niveau des plugins/thèmes ET également échec de la restauration à partir de la sauvegarde créée. Les détails sont les suivants :';
$l['err_upgrade_restore_success_extras'] = 'Échec de la mise à niveau des plugins/thèmes MAIS restauration réussie à partir de la sauvegarde créée. Les détails sont les suivants :';
$l['err_cannot_autoupgrade_extras'] = "La mise à niveau automatique des plugins/thèmes ne peut pas être effectuée pour ce panneau de contrôle.\n";
$l['err_failed_attempt'] = "La mise à niveau automatique des plugins/thèmes a échoué la dernière fois, donc aucune tentative de mise à niveau ne peut être effectuée.\n";
$l['cant_create_dir'] = "Impossible de créer le répertoire ";
$l['err_cannot_install_plugin'] = "L'installation de plugins ne peut pas être effectuée pour ce panneau de contrôle.\n";
$l['err_invalid_sid'] = "L'ID du script est invalide.\n";
$l['err_no_plugin_support'] = "La gestion des plugins n'est pas prise en charge dans ce script.\n";
$l['err_empty_slug'] = "Le slug est manquant.\n";
$l['err_fail_install_plugin'] = "Échec de l'installation du plugin. Les erreurs suivantes se sont produites :\n";
$l['install_plugin_success'] = "Plugin installé avec succès\n";

// import_webuzo.php
$l['no_server_ip'] = 'IP du serveur non fournie.';
$l['no_server_pass'] = 'Mot de passe root du serveur non fourni.';
$l['no_server_port'] = 'Port du serveur non fourni';
$l['no_server_mysql_pass'] = 'Mot de passe MySQL du serveur non fourni.';
$l['no_migrate_type'] = 'Type de migration non fourni.';
$l['invalid_migrate_type'] = 'Type de migration invalide.';
$l['migrate_finish'] = 'Migration de Webuzo terminée.';
$l['migrate_conf_finish'] = 'Migration des configurations de Webuzo terminée.';
$l['migrate_user_account_finish'] = 'Migration des comptes utilisateurs terminée.';
$l['migrate_databases_finish'] = 'Migration des bases de données terminée.';
$l['migrate_emails_finish'] = 'Migration des comptes email et des données email terminée.';
$l['migrate_ftp_finish'] = 'Migration de FTP terminée.';
$l['mysql_not_same'] = 'Les versions de MySQL sur les deux serveurs Webuzo ne sont pas les mêmes.';
$l['webuzo_user_not_same'] = 'Le nom d\'utilisateur Webuzo sur les deux serveurs Webuzo n\'est pas le même.';
$l['sshpass_installed'] = 'sshpass est déjà installé sur votre serveur.';
$l['remote_command_exec_fail'] = 'Échec de l\'exécution de la commande distante.';
$l['migrate_command_failed'] = 'Une erreur s\'est produite lors de l\'exécution de la commande';
$l['conn_fail'] = 'Connexion au serveur Webuzo échouée.';

$l['cloning'] = 'Clonage ';
$l['staging'] = 'Mise en scène ';
$l['pushtolive'] = 'Pousser en direct ';
$l['cloning_complete'] = 'Clonage terminé.';
$l['staging_complete'] = 'Mise en scène terminée.';
$l['pushtolive_complete'] = 'Pousser en direct terminé.';
$l['unzipping_files'] = 'Copie des fichiers et dossiers';
$l['prog_backingup'] = 'Sauvegarde en cours ';
$l['panel_not_support'] = 'Ce panneau ne prend pas en charge cet utilitaire.';

$l['checking_data'] = 'Vérification des données soumises';
$l['prog_restoring'] = 'Restauration '; // Ne supprimez pas l'espace final
$l['res_dir'] = 'Restauration du répertoire';
$l['res_db'] = 'Restauration de la base de données';
$l['res_datadir'] = 'Restauration du répertoire de données';
$l['prog_restore_complete'] = 'Restauration terminée.';
$l['read_archive'] = 'Lecture de l\'archive';
$l['pushtolive_backup_note'] = 'Sauvegarde créée avant de mettre le site en direct';

$l['license_refreshed'] = 'Votre licence a été rafraîchie !'; 
$l['updated_license'] = 'Les détails de la licence mise à jour sont les suivants :';

$l['err_no_universal'] = 'Impossible de trouver universal.php';

$l['rbackup_disabled'] = 'La sauvegarde sur des emplacements distants est désactivée par l\'administrateur';
$l['rbackup_protocol_disabled'] = 'La sauvegarde sur <b>&soft-1;</b> est désactivée par l\'administrateur';

// Chaînes d'utilitaire CLI pour afficher la version réelle
$l['show_real_version_no_outdated'] = 'Toutes les installations ont une version mise à jour dans les enregistrements de '.APP.' !';
$l['show_real_version_updates_list'] = 'Les installations suivantes ont des versions non mises à jour dans les enregistrements de '.APP;
$l['show_real_version_user_ins'] = 'Installations pour l\'utilisateur';
$l['installation_id'] = 'ID d\'installation';
$l['script_name'] = 'Nom du script';
$l['version'] = 'Version';
$l['real_version'] = 'Version réelle';
$l['installation_url'] = 'URL d\'installation';
$l['update_real_version_notice'] = 'Utilisez le paramètre --update_real_version pour mettre à jour les enregistrements de '.APP;

$l['update_real_version_no_outdated'] = 'Aucune installation trouvée avec une version obsolète dans les enregistrements de '.APP.' !';
$l['update_real_version_fail'] = 'Échec de la mise à jour de la version dans les enregistrements de '.APP;
$l['update_real_version_list'] = 'Les versions des installations suivantes ont été mises à jour dans les enregistrements de '.APP;

$l['fail_ftp_reconnect'] = 'Le délai de connexion FTP de destination a expiré. Échec de la reconnexion.';