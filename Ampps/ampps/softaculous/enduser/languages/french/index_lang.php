<?php

//////////////////////////////////////////////////////////////
//===========================================================
// index_lang.php
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

$l['user_data_error_t'] = 'Erreur des données de l\'utilisateur';
$l['user_data_error'] = APP.' n\'a pas été en mesure de charger les informations de votre compte. Veuillez le signaler à l\'administrateur de votre serveur!';

$l['remote_licence_t'] = 'Licence invalide';
$l['remote_licence'] = 'Vous n\'utilisez pas une licence valide. Veuillez le signaler à l\'administrateur du serveur!';

$l['enterprise_licence_t'] = 'Licence invalide';
$l['enterprise_licence'] = 'Vous n\'utilisez pas une licence valide. Veuillez le signaler à l\'administrateur du serveur!';

$l['no_license'] = 'Le fichier de licence n\'a pas pu être trouvé ! Veuillez le signaler à l\'administrateur du serveur.';

$l['today'] = 'Aujourd\'hui <b> </b> à';

$l['init_theme_error_t'] = 'Erreur de Thème';
$l['init_theme_error'] = 'Impossible de charger le fichier de thème - &soft-1;.';

$l['init_theme_func_error_t'] = 'Erreur de la fonction du thème';
$l['init_theme_func_error'] = 'Impossible de charger la/les fonctions du thème de &soft-1;.';

$l['disable_softaculous_t'] = 'Softaculous désactivé';
$l['disable_softaculous'] = 'Softaculous est désactivé pour cet utilisateur. Veuillez contacter l\'administrateur système.';

$l['load_theme_settings_error'] = 'Impossible de charger les paramètres des thèmes.';

$l['view_guide'] = 'Voir le guide';
$l['max_db_length'] = 'Le nom de la base de données ne peut pas dépasser &soft-1; caractères. Veuillez choisir un nom plus court.';

//Error Handle Function
$l['following_errors_occured'] = 'Les erreurs suivantes ont été trouvées';

//Success Message Function
$l['following_message'] = 'Le message suivant a été renvoyé';

//Major Error Function
$l['fatal_error'] = 'Erreur fatale';
$l['following_fatal_error'] = 'L\'erreur suivante s\'est produite';

//Message Function
$l['soft_message'] = 'Message '.APP;
$l['following_soft_message'] = 'Le message suivant a été renvoyé';

//Update Softwares
$l['no_soft_found'] = 'Logiciel introuvable ... Mise à jour requise';
$l['ver_not_match'] = 'Les versions ne correspondent pas ... Mise à jour requise';
$l['ver_match'] = 'Votre version est à jour ... ...';
$l['del_prev_files'] = 'Suppression des anciens fichiers ......Terminé';
$l['fetch_latest'] = 'Récupération des dernières mises à jour......';
$l['error_fetch_latest'] = 'Impossible de récupérer les dernières mises à jour ... ...';
$l['error_save_latest'] = 'Impossible d\'enregistrer les dernières mises à jour ... ...';
$l['got_latest'] = 'Enregistre les dernières mises à jour';
$l['unzip_latest'] = 'Dézipper les mises à jour ... ...';
$l['error_unzip_latest'] = 'Erreur de décompression ... ...';
$l['unzipped_latest'] = 'Décompression réussie';

//Update Softaculous
$l['getting_info'] = 'Demande d\'information ... ...';
$l['error_getting_latest'] = 'Impossible d\'obtenir les informations requises ... ... Abandon';
$l['got_info'] = 'Les informations requises ont été récupérées';
$l['manual_mode'] = 'La nouvelle version de '.APP.' exige une opération manuelle ... ... Abandon';
$l['no_updates'] = 'La version actuelle est à jour ... ...';
$l['fetch_upgrade'] = 'Récupération des mises à niveau ... ...';
$l['error_fetch_upgrade'] = 'Impossible de récupérer le fichier de mise à niveau ... ... Abandon';
$l['error_save_upgrade'] = 'Impossible d\'enregistrer le fichier de mise à niveau ... ... Abandon';
$l['got_upgrade'] = 'Enregistre le fichier de mise à niveau';
$l['unzip_upgrade'] = 'Dézippe les fichiers ... ...';
$l['error_unzip_upgrade'] = 'Erreur de décompression ... ... Abandon';
$l['unzipped_upgrade'] = 'Décompression réussie';
$l['md5_check'] = 'Vérification MD5 réussie';
$l['err_md5_check'] = 'La vérification MD5 de ces fichiers n\'a pas été réussie';
$l['err_md5_file'] = ' n\'existe pas';

//MySQL Errors
$l['err_selectmy'] = 'La base de données MySQL n\'a pas pu être sélectionnée.';
$l['err_myconn'] = 'La connexion MySQL n\'a pas pu être établie.';
$l['err_makequery'] = 'La requête n\'a pas pu être réalisée';
$l['err_mynum'] = 'Erreur MySQL No';
$l['err_myerr'] = 'Erreur MySQL';
$l['err_no_db_file'] = 'Le fichier d\'importation de la base de données n\'existe pas';
$l['err_no_open_db_file'] = 'Impossible d\'ouvrir le fichier d\'importation de la base de données';

//Importing Errors
$l['imp_wrong_softdomain'] = 'Le répertoire du domaine &soft-1; n\'a pas pu être trouvé.';
$l['imp_softpath_wrong'] = 'Le répertoire de &soft-1; est incorrect et n\'existe pas.';
$l['imp_ins_exists'] = '&soft-1; est déjà installé sur &soft-2; d\'après nos informations et il sera maintenu par '.APP.'.!';
$l['imp_no_func'] = 'La fonction d\'importation de &soft-1; n\'a pu être chargée.';
$l['imp_err'] = 'Il y a eu des erreurs lors de l\'importation du logiciel installé sur &soft-1;';
$l['err_query'] = 'Impossible d\'exécuter la requête';

$l['invalid_search_input'] = 'Caractère de recherche de thème invalide. Seuls les caractères alphanumériques, le tiret bas et le trait d\'union sont autorisés.';

//hf_theme.php
$l['root_login'] = 'Connecté en tant que ROOT';
$l['welcome'] = 'Bienvenue';
$l['logout'] = 'Déconnexion';
$l['page_time'] = 'Page créée en';
$l['times_are'] = 'Toutes les heures sont au format';
$l['time_is'] = 'Il est';
$l['no_script_found'] = 'Aucun programme trouvé!';
$l['webuzo_sysapps_disabled'] = 'Cette fonctionnalité a été désactivée depuis le panneau d\'administration Webuzo';
$l['webuzo_install_utility'] = 'Cet utilitaire n\'est pas installé. Veuillez l\'installer d\'abord';

//The Category Language Variables
$l['forums'] = 'Forums';
$l['blogs'] = 'Blogs';
$l['cms'] = 'Portails / CMS';
$l['galleries'] = 'Galeries d\'images';
$l['wikis'] = 'Wikis';
$l['admanager'] = 'Gestion de publicités';
$l['calendars'] = 'Calendriers';
$l['games'] = 'Jeux';
$l['mail'] = 'E-Mails';
$l['polls'] = 'Enquêtes et sondages';
$l['projectman'] = 'Gestion de projet';
$l['ecommerce'] = 'E-Commerce';
$l['guestbooks'] = 'Livre d\'or';
$l['customersupport'] = 'Aide et Support ';
$l['others'] = 'Autres';
$l['music'] = 'Musique';
$l['video'] = 'Vidéo';
$l['files'] = 'Gestion des fichiers';
$l['go_cpanel'] = 'Retourner au cPanel';
$l['go_home'] = 'Accueil';
$l['go_demos'] = 'Démos';
$l['go_ratings'] = 'Évaluations des scripts';
$l['go_settings'] = 'Modifier les paramètres';
$l['go_email_settings'] = 'Configurations des e-mails';
$l['go_installations'] = 'Toutes les installations';
$l['go_support'] = 'Aide et Support';
$l['go_sync'] = 'Importer les installations';
$l['go_backups'] = 'Sauvegardes et restaurations';
$l['go_templates'] = 'Tous les modèles';
$l['go_tasklist'] = 'Liste de tâches';
$l['go_apps_installations'] = 'Toutes les applications installées';
$l['go_my_themes'] = 'Mes thèmes';
$l['go_logout'] = 'Déconnexion';
$l['ins_stats'] = 'Installations';
$l['outdated_stats'] = 'Installations obsolètes';
$l['backups_stats'] = 'Sauvegardes';

$l['type_php'] = 'PHP';
$l['type_perl'] = 'Perl';
$l['type_js'] = 'JavaScript';
$l['type_java'] = 'Java';
$l['type_python'] = 'Python';
$l['search'] = 'Recherche';
$l['back_to_top'] = 'Retour en haut';

$l['show'] = 'Afficher';
$l['hide'] = 'Masquer';

// Categories
$l['cat_php_forums'] = 'Forums';
$l['cat_php_blogs'] = 'Blogs';
$l['cat_php_cms'] = 'Portails / CMS';
$l['cat_php_galleries'] = 'Galeries d\'images';
$l['cat_php_wikis'] = 'Wikis';
$l['cat_php_admanager'] = 'Gestion de publicités';
$l['cat_php_calendars'] = 'Calendriers';
$l['cat_php_games'] = 'Jeux';
$l['cat_php_mail'] = 'E-Mails';
$l['cat_php_polls'] = 'Sondages et analyses';
$l['cat_php_projectman'] = 'Gestion de projet';
$l['cat_php_ecommerce'] = 'E-Commerce';
$l['cat_php_guestbooks'] = 'Livre d\'or';
$l['cat_php_customersupport'] = 'Support client';
$l['cat_php_others'] = 'Autres';
$l['cat_php_music'] = 'Musique';
$l['cat_php_video'] = 'Vidéo';
$l['cat_php_rss'] = 'RSS';
$l['cat_php_socialnetworking'] = 'Réseaux sociaux';
$l['cat_php_microblogs'] = 'Micro Blogs';
$l['cat_php_frameworks'] = 'Cadres de travail';
$l['cat_php_educational'] = 'Éducation';
$l['cat_php_erp'] = 'ERP';
$l['cat_php_dbtools'] = 'Outils de base de données';
$l['cat_php_files'] = 'Gestion des fichiers';
$l['cat_js_libraries'] = 'Bibliothèques';
$l['cat_js_widgets'] = 'Widgets';
$l['cat_perl_blogs'] = 'Blogs';
$l['cat_perl_wikis'] = 'Wikis';
$l['cat_perl_forums'] = 'Forums';
$l['cat_perl_ecommerce'] = 'E-Commerce';
$l['cat_perl_mail'] = 'E-Mails';
$l['cat_java_cms'] = 'CMS';
$l['cat_java_forums'] = 'Forums';
$l['cat_java_projectman'] = 'Gestion de projet';
$l['cat_java_erp'] = 'ERP';
$l['cat_java_blogs'] = 'Blogs';
$l['cat_java_wikis'] = 'Wikis';
$l['cat_python_wikis'] = 'Wikis';
$l['cat_python_projectman'] = 'Gestion de projet';
$l['cat_apps_server_side_scripting'] = 'Scripts côté serveur';
$l['cat_apps_web_servers'] = 'Serveurs web';
$l['cat_apps_utilities'] = 'Utilitaires';
$l['cat_apps_libraries'] = 'Bibliothèques';
$l['cat_apps_databases'] = 'Bases de données';
$l['cat_apps_stacks'] = 'Stacks';
$l['cat_apps_security'] = 'Sécurité';
$l['cat_apps_statistics'] = 'Statistiques';
$l['cat_apps_java_tools'] = 'Outils Java';
$l['cat_apps_java_containers'] = 'Conteneurs Java';
$l['cat_apps_version_control'] = 'Contrôle de version';
$l['cat_apps_modules'] = 'Modules';
$l['cat_apps_message_queue'] ='File d\'attente de messages';

// Classes Categories
$l['classes_ajax'] = 'Ajax';
$l['classes_cryptography'] = 'Cryptographie';
$l['classes_algorithms'] = 'Algorithmes';
$l['classes_artificialintelligence'] = 'Intelligence Artificielle';
$l['classes_email'] = 'Email';
$l['classes_finances'] = 'Finances';
$l['classes_searching'] = 'Recherche';
$l['classes_user_management'] = 'Gestion des utilisateurs';
$l['classes_utilitiesandtools'] = 'Utilitaires et outils';
$l['classes_validation'] = 'Validation';
$l['classes_security'] = 'Sécurité';
$l['classes_console'] = 'Console';
$l['classes_codegeneration'] = 'Génération de code';
$l['classes_chat'] = 'Chat';
$l['classes_astrology'] = 'Astrologie';
$l['classes_audio'] = 'Audio';
$l['classes_biology'] = 'Biologie';
$l['classes_blogs'] = 'Blogs';
$l['classes_cache'] = 'Cache';
$l['classes_compression'] = 'Compression';
$l['classes_configuration'] = 'Configuration';
$l['classes_contentmanagement'] = 'Gestion de contenu';
$l['classes_conversion'] = 'Conversion';
$l['classes_datatypes'] = 'Types de données';
$l['classes_databases'] = 'Bases de données';
$l['classes_debug'] = 'Débogage';
$l['classes_designpatterns'] = 'Patrons de conception';
$l['classes_ecommerce'] = 'E-Commerce';
$l['classes_elearning'] = 'E-Learning';
$l['classes_emulators'] = 'Émulateurs';
$l['classes_filesandfolders'] = 'Fichiers et dossiers';
$l['classes_flash'] = 'Flash';
$l['classes_forums'] = 'Forums';
$l['classes_games'] = 'Jeux';
$l['classes_geography'] = 'Géographie';
$l['classes_graphics'] = 'Graphismes';
$l['classes_gui'] = 'GUI';
$l['classes_hosting'] = 'Hébergement';
$l['classes_html'] = 'HTML';
$l['classes_http'] = 'HTTP';
$l['classes_language'] = 'Langage';
$l['classes_projectmanagement'] = 'Gestion de projet';

// Softaculous Remote Domain Strings
$l['no_domain_data'] = 'Données de domaine non trouvées!!';
$l['no_aefer_resp'] = 'Impossible d\'accéder au fichier de travail via le web. Veuillez vérifier si votre domaine pointe vers le bon serveur.';

// Webuzo Strings
$l['webuzo'] = 'Webuzo';
$l['go_domain'] = 'Gérer les domaines';
$l['webuzo_license_exp'] = 'Votre licence n\'est pas active ou a expiré. Si votre licence a expiré, veuillez la renouveler pour continuer à utiliser Webuzo';
$l['webuzo_license_exp_t'] = 'Licence inactive';
$l['err_no_access'] = 'Vous n\'avez pas la permission d\'accéder à cette page';

// Ampps Strings
$l['ampps'] = 'AMPPS';
$l['go_domain'] = 'Gérer les domaines';
$l['ampps_license_exp'] = 'Votre licence n\'est pas active ou a expiré. Si votre licence a expiré, veuillez la renouveler pour continuer à utiliser Ampps';
$l['ampps_license_exp_t'] = 'Licence inactive';

/////////////////////////////////////////////////////////////
/////  Les variables suivantes sont utilisées pour les modèles d'e-mail /////
/////////////////////////////////////////////////////////////

$l['notify_enable'] = 'Activé';
$l['notify_disable'] = 'Désactivé';

$l['autoupgrade_enable'] = 'Activé';
$l['autoupgrade_disable'] = 'Désactivé';

// Chaînes de sauvegarde automatique
$l['auto_backup_enable'] = 'Activé';
$l['auto_backup_disable'] = 'Désactivé';

// Variables du modèle d'installation
$l['mail_install_php_sub'] = 'Nouvelle installation de $scriptname';
$l['mail_install_php'] = 'Une nouvelle installation de $scriptname $version a été réalisée. Voici les détails de l\'installation :
Chemin : $path
URL : $url
URL Admin : $admin_url
<if $datadirectory>Répertoire des données : $datadirectory</if>
<if $admin_username>Nom d\'utilisateur Admin : $admin_username</if>
<if $admin_pass>Mot de passe Admin : $admin_pass</if>
<if $admin_email>Email Admin : $admin_email</if>
<if $dbname>Base de données MySQL : $dbname</if>
<if $dbuser>Utilisateur MySQL : $dbuser</if>
<if $dbhost>Hôte MySQL : $dbhost</if>
<if $dbpass>Mot de passe MySQL : $dbpass</if>
<if $cron>Tâches CRON : $cron</if>
<if $disable_notify_update>Notification de mise à jour : $disable_notify_update</if>
<if $eu_auto_upgrade>Mise à jour automatique : $eu_auto_upgrade</if>
<if $auto_backup>Sauvegardes automatiques : $auto_backup</if>
<if $auto_backup_rotation>Rotation des sauvegardes : $auto_backup_rotation</if>
<if $backup_location>Emplacement des sauvegardes : $backup_location</if>
<if $time>Temps d\'installation : $time</if>

Si vous souhaitez vous désabonner de ces e-mails, allez dans votre panneau de contrôle -> '.APP.' -> Paramètres des e-mails
';

// Variable du modèle de clonage
$l['mail_clone_sub'] = 'Clonage de l\'installation de $scriptname';
$l['mail_clone'] = 'Votre installation de $scriptname $version a été clonée avec succès.

Détails de votre installation d\'origine :
Chemin d\'origine : $old_path
URL d\'origine : $old_url

Détails de votre installation clonée :
Chemin : $path
URL : $url
URL Admin : $admin_url
<if $datadirectory>Répertoire des données : $datadirectory</if>
<if $dbname>Base de données MySQL : $dbname</if>
<if $dbuser>Utilisateur MySQL : $dbuser</if>
<if $dbhost>Hôte MySQL : $dbhost</if>
<if $dbpass>Mot de passe MySQL : $dbpass</if>
<if $cron>Tâches CRON : $cron</if>
<if $time>Temps d\'installation : $time</if>

Si vous souhaitez vous désabonner de ces e-mails, allez dans votre panneau de contrôle -> '.APP.' -> Paramètres des e-mails
';

// Modèle de restauration - Variable du modèle
$l['mail_restore_template_sub'] = 'Restauration de votre modèle $scriptname';
$l['mail_restore_template'] = 'Votre modèle de $scriptname $version a été restauré avec succès.

Détails de votre nouvelle installation :
Chemin : $path
URL : $url
URL Admin : $admin_url
<if $datadirectory>Répertoire des données : $datadirectory</if>
<if $dbname>Base de données MySQL : $dbname</if>
<if $dbuser>Utilisateur MySQL : $dbuser</if>
<if $dbhost>Hôte MySQL : $dbhost</if>
<if $dbpass>Mot de passe MySQL : $dbpass</if>
<if $cron>Tâches CRON : $cron</if>
<if $time>Temps d\'installation : $time</if>

Si vous souhaitez vous désabonner de ces e-mails, allez dans votre panneau de contrôle -> '.APP.' -> Paramètres des e-mails
';

// Variables du modèle d'installation
$l['mail_install_js_sub'] = 'Nouvelle installation de $scriptname';
$l['mail_install_js'] = 'Une nouvelle installation de $scriptname $version a été réalisée. Les détails de l\'installation sont indiqués ci-dessous :
Chemin : $path
URL : $url
<if $disable_notify_update>Notification de mise à jour : $disable_notify_update</if>
<if $auto_backup>Sauvegardes automatiques : $auto_backup</if>
<if $auto_backup_rotation>Rotation des sauvegardes : $auto_backup_rotation</if>
<if $backup_location>Emplacement des sauvegardes : $backup_location</if>
<if $time>Temps d\'installation : $time</if>

Si vous souhaitez vous désabonner de ces e-mails, allez dans votre panneau de contrôle -> '.APP.' -> Paramètres des e-mails
';

// Variables du modèle d'installation
$l['mail_install_perl_sub'] = 'Nouvelle installation de $scriptname';
$l['mail_install_perl'] = 'Une nouvelle installation de $scriptname $version a été réalisée. Les détails de l\'installation sont indiqués ci-dessous :
Chemin : $path
URL : $url
URL Admin : $admin_url
<if $datadirectory>Répertoire des données : $datadirectory</if>
<if $wwwdir>Répertoire Web : $wwwdir</if>
<if $admin_username>Nom d\'utilisateur Admin : $admin_username</if>
<if $admin_pass>Mot de passe Admin : $admin_pass</if>
<if $admin_email>Email Admin : $admin_email</if>
<if $dbname>Base de données MySQL : $dbname</if>
<if $dbuser>Utilisateur MySQL : $dbuser</if>
<if $dbhost>Hôte MySQL : $dbhost</if>
<if $dbpass>Mot de passe MySQL : $dbpass</if>
<if $cron>Tâches CRON : $cron</if>
<if $disable_notify_update>Notification de mise à jour : $disable_notify_update</if>
<if $auto_backup>Sauvegardes automatiques : $auto_backup</if>
<if $auto_backup_rotation>Rotation des sauvegardes : $auto_backup_rotation</if>
<if $backup_location>Emplacement des sauvegardes : $backup_location</if>
<if $time>Temps d\'installation : $time</if>Si vous souhaitez vous désabonner de ces e-mails, allez dans votre Panneau de configuration -> '.APP.' -> Paramètres de messagerie
';

// Variable de modèle d'installation
$l['mail_install_java_sub'] = 'Nouvelle installation de $scriptname';
$l['mail_install_java'] = 'Une nouvelle installation de $scriptname $version a été complétée. Les détails de l\'installation sont indiqués ci-dessous :
Chemin : $path
URL : $url
URL Admin : $admin_url
<if $datadirectory>Répertoire des données : $datadirectory</if>
<if $wwwdir>Répertoire Web : $wwwdir</if>
<if $admin_username>Nom d\'utilisateur Admin : $admin_username</if>
<if $admin_pass>Mot de passe Admin : $admin_pass</if>
<if $admin_email>Email Admin : $admin_email</if>
<if $dbname>Base de données MySQL : $dbname</if>
<if $dbuser>Utilisateur MySQL : $dbuser</if>
<if $dbhost>Hôte MySQL : $dbhost</if>
<if $dbpass>Mot de passe MySQL : $dbpass</if>
<if $cron>Tâches CRON : $cron</if>
<if $disable_notify_update>Notification de mise à jour : $disable_notify_update</if>
<if $auto_backup>Backups automatisés : $auto_backup</if>
<if $auto_backup_rotation>Rotation des backups : $auto_backup_rotation</if>
<if $backup_location>Emplacement des backups : $backup_location</if>
<if $time>Temps d\'installation : $time</if>

Si vous souhaitez vous désabonner de ces e-mails, allez dans votre Panneau de configuration -> '.APP.' -> Paramètres de messagerie
';

$l['mail_install_python_sub'] = 'Nouvelle installation de $scriptname';
$l['mail_install_python'] = 'Une nouvelle installation de $scriptname $version a été complétée. Les détails de l\'installation sont indiqués ci-dessous :
Chemin : $path
URL : $url
URL Admin : $admin_url
<if $datadirectory>Répertoire des données : $datadirectory</if>
<if $wwwdir>Répertoire Web : $wwwdir</if>
<if $admin_username>Nom d\'utilisateur Admin : $admin_username</if>
<if $admin_pass>Mot de passe Admin : $admin_pass</if>
<if $admin_email>Email Admin : $admin_email</if>
<if $dbname>Base de données MySQL : $dbname</if>
<if $dbuser>Utilisateur MySQL : $dbuser</if>
<if $dbhost>Hôte MySQL : $dbhost</if>
<if $dbpass>Mot de passe MySQL : $dbpass</if>
<if $cron>Tâches CRON : $cron</if>
<if $disable_notify_update>Notification de mise à jour : $disable_notify_update</if>
<if $auto_backup>Backups automatisés : $auto_backup</if>
<if $auto_backup_rotation>Rotation des backups : $auto_backup_rotation</if>
<if $backup_location>Emplacement des backups : $backup_location</if>
<if $time>Temps d\'installation : $time</if>

Si vous souhaitez vous désabonner de ces e-mails, allez dans votre Panneau de configuration -> '.APP.' -> Paramètres de messagerie
';

// Variable de modèle de mise à jour (de l'ADMIN)
$l['mail_update_sub'] = 'Mises à jour des scripts disponibles';
$l['mail_update'] = 'Cet e-mail concerne l\'installation obsolète de certains scripts PHP que vous avez installés. Pour des raisons de sécurité, vous devez mettre à jour ces installations obsolètes dès que possible.
Les mises à jour de scripts suivantes sont disponibles :

$installation

Pour mettre à niveau ces scripts, allez dans votre Panneau de configuration -> '.APP.' -> Installations.
Là, vous pourrez mettre à jour les scripts.

De l\'administrateur système $serverip
';

// Variable de modèle de suppression
$l['mail_remove_sub'] = 'Supprimer l\'installation de $scriptname';
$l['mail_remove'] = 'Une installation de $scriptname a été supprimée. \n Détails :
Chemin : $path
<if $url>URL : $url</if>
<if $datadirectory>Répertoire des données : $datadirectory</if>
<if $wwwdir>Répertoire Web : $wwwdir</if>
<if $dbname>Base de données MySQL : $dbname</if>
<if $dbuser>Utilisateur MySQL : $dbuser</if>
<if $dbhost>Hôte MySQL : $dbhost</if>
<if $dbpass>Mot de passe MySQL : $dbpass</if>
<if $cron>Tâches CRON : $cron</if>
Temps d\'installation : $time
Temps de la suppression : $rem_time

Si vous souhaitez vous désabonner de ces e-mails, allez dans votre Panneau de configuration -> '.APP.' -> Paramètres de messagerie
';


// Variable de modèle de Cron
$l['mail_cron_sub'] = 'Mises à jour des scripts disponibles';
$l['changelog'] = '== Journal des modifications pour';
$l['mail_cron'] = 'Les mises à jour des scripts suivantes sont disponibles :

$installation

Pour mettre à niveau ces scripts, allez dans votre Panneau de configuration -> '.APP.' -> Installations.
Là, vous pourrez mettre à jour les scripts.

$changelog

De '.APP.' Tâches Cron $serverip

Si vous souhaitez vous désabonner de ces e-mails, allez dans votre Panneau de configuration -> '.APP.' -> Paramètres de messagerie
';

// Variable de modèle de modification des détails
$l['mail_editdetail_sub'] = 'Détails de l\'installation modifiés de $scriptname';
$l['mail_editdetail'] = 'Les détails de l\'installation de $scriptname ont été modifiés. Voici les détails modifiés de l\'installation :
Chemin : $path
URL : $url
<if $datadirectory>Répertoire des données : $datadirectory</if>
<if $wwwdir>Répertoire Web : $wwwdir</if>
<if $wwwdir>URL Web : $wwwurl</if>
<if $dbname>Base de données MySQL : $dbname</if>
<if $dbuser>Utilisateur MySQL : $dbuser</if>
<if $dbhost>Hôte MySQL : $dbhost</if>
<if $dbpass>Mot de passe MySQL : $dbpass</if>
<if $cron>Tâche CRON : $cron</if>
<if $disable_notify_update>Notification de mise à jour : $disable_notify_update</if>
<if $eu_auto_upgrade>Mise à niveau automatique : $eu_auto_upgrade</if>
<if $auto_backup>Backups automatisés : $auto_backup</if>
<if $auto_backup_rotation>Rotation des backups : $auto_backup_rotation</if>
<if $backup_location>Emplacement des backups : $backup_location</if>
Temps d\'installation : $time
Temps de modification : $edit_time

Si vous souhaitez vous désabonner de ces e-mails, allez dans votre Panneau de configuration -> '.APP.' -> Paramètres de messagerie
';

// Chaînes de langue pour les backups
$l['mail_backup_sub'] = 'Backup de votre installation $scriptname';
$l['mail_backup'] = 'Le backup de votre installation $scriptname a été complété avec succès.
Les détails sont les suivants :
Chemin de l\'installation : $path
URL de l\'installation : $url
<if $backup_location>Emplacement du backup : $backup_location</if>
Chemin du backup : $backup_file
<if $backup_note>Note du backup : $backup_note</if>

Vous pouvez accéder au backup depuis la section Backups dans '.APP.'.

Si vous souhaitez vous désabonner de ces e-mails, allez dans votre Panneau de configuration -> '.APP.' -> Paramètres de messagerie
';

$l['mail_backup_fail_sub'] = 'Échec : Backup de votre installation $scriptname';
$l['mail_backup_fail'] = 'Le backup de votre installation $scriptname n\'a pas été complété avec succès.
Les détails sont les suivants :
Chemin de l\'installation : $path
URL de l\'installation : $url
Chemin du backup : $backup_file

L\'erreur suivante s\'est produite :
$error

Veuillez essayer de créer un backup à nouveau après quelque temps.

Si vous souhaitez vous désabonner de ces e-mails, allez dans votre Panneau de configuration -> '.APP.' -> Paramètres de messagerie
';

// Chaînes de langue pour les modèles
$l['mail_template_sub'] = 'Modèle de votre installation $scriptname';
$l['mail_template'] = 'Le modèle de votre installation $scriptname a été créé avec succès.
Les détails sont les suivants :
Chemin de l\'installation : $path
URL de l\'installation : $url
<if $backup_location>Emplacement du modèle : $backup_location</if>
Chemin du modèle : $backup_file
<if $template_name>Nom du modèle : $template_name</if>

Vous pouvez accéder au modèle depuis la section Modèles dans '.APP.'.

Si vous souhaitez vous désabonner de ces e-mails, allez dans votre Panneau de configuration -> '.APP.' -> Paramètres de messagerie
';

$l['mail_template_fail_sub'] = 'Échec : Modèle de votre installation $scriptname';
$l['mail_template_fail'] = 'Le modèle de votre installation $scriptname n\'a pas été créé avec succès.
Les détails sont les suivants :
Chemin de l\'installation : $path
URL de l\'installation : $url
Chemin du modèle : $backup_file

L\'erreur suivante s\'est produite :
$error

Veuillez essayer de créer un modèle à nouveau après quelque temps.

Si vous souhaitez vous désabonner de ces e-mails, allez dans votre Panneau de configuration -> '.APP.' -> Paramètres de messagerie
';

// Chaînes de langue pour la restauration
$l['mail_restore_sub'] = 'Restauration de votre $scriptname';
$l['mail_restore'] = 'La restauration de votre sauvegarde $scriptname a été complétée avec succès.
Les détails sont les suivants :
Chemin de l\'installation : $path
URL de l\'installation : $url

Si vous souhaitez vous désabonner de ces e-mails, allez dans votre Panneau de configuration -> '.APP.' -> Paramètres de messagerie
';

$l['mail_restore_fail_sub'] = 'Échec : Restauration de votre $scriptname';
$l['mail_restore_fail'] = 'La restauration de votre $scriptname n\'a pas été complétée avec succès.
Les détails sont les suivants :
Chemin de l\'installation : $path
URL de l\'installation : $url

L\'erreur suivante s\'est produite :
$error

Veuillez essayer de restaurer la sauvegarde à nouveau après quelque temps.

Si vous souhaitez vous désabonner de ces e-mails, allez dans votre Panneau de configuration -> '.APP.' -> Paramètres de messagerie
';

// Chaînes de langue pour la restauration en arrière-plan
$l['mail_restore_bg_sub'] = 'Restauration de votre sauvegarde $scriptname démarrée en arrière-plan';
$l['mail_restore_bg'] = 'La restauration de votre sauvegarde $scriptname a démarré en arrière-plan. Vous recevrez une notification par e-mail sur l\'état une fois le processus de restauration terminé.
Les détails sont les suivants :
Chemin de l\'installation : $path
URL de l\'installation : $url

Si vous souhaitez vous désabonner de ces e-mails, allez dans votre Panneau de configuration -> '.APP.' -> Paramètres de messagerie
';

// Chaînes de langue pour le backup en arrière-plan
$l['mail_backup_bg_sub'] = 'Backup de votre installation $scriptname démarré en arrière-plan';
$l['mail_backup_bg'] = 'Le backup de votre $scriptname a démarré en arrière-plan. Vous recevrez une notification par e-mail sur l\'état une fois le processus de backup terminé.
Les détails sont les suivants :
Chemin de l\'installation : $path
URL de l\'installation : $url

Si vous souhaitez vous désabonner de ces e-mails, allez dans votre Panneau de configuration -> '.APP.' -> Paramètres de messagerie
';

// Chaînes de langue pour la création de modèle en arrière-plan
$l['mail_template_bg_sub'] = 'Création du modèle de votre installation $scriptname démarrée en arrière-plan';
$l['mail_template_bg'] = 'La création du modèle de votre $scriptname a démarré en arrière-plan. Vous recevrez une notification par e-mail sur l\'état une fois le processus de création du modèle terminé.
Les détails sont les suivants :
Chemin de l\'installation : $path
URL de l\'installation : $url

Si vous souhaitez vous désabonner de ces e-mails, allez dans votre Panneau de configuration -> '.APP.' -> Paramètres de messagerie
';

// Chaînes de langue pour la restauration du modèle en arrière-plan
$l['mail_restore_template_bg_sub'] = 'Restauration de votre modèle $scriptname démarrée en arrière-plan';
$l['mail_restore_template_bg'] = 'La restauration de votre modèle $scriptname a démarré en arrière-plan. Vous recevrez une notification par e-mail sur l\'état une fois le processus de restauration terminé.
Les détails sont les suivants :
Chemin de l\'installation : $path
URL de l\'installation : $url

Si vous souhaitez vous désabonner de ces e-mails, allez dans votre Panneau de configuration -> '.APP.' -> Paramètres de messagerie
';

// Chaînes de langue pour l'importation
$l['mail_import_sub'] = 'Importation de votre installation $scriptname';
$l['mail_import'] = 'L\'importation de votre installation $scriptname a été complétée avec succès.
Les détails sont les suivants :
Chemin de l\'installation : $path
URL de l\'installation : $url

Si vous souhaitez vous désabonner de ces e-mails, allez dans votre Panneau de configuration -> '.APP.' -> Paramètres de messagerie
';

// Chaînes de langue pour l'échec de l'importation
$l['mail_import_fail_sub'] = 'Échec : Importation de votre installation $scriptname';
$l['mail_import_fail'] = 'L\'importation de votre installation $scriptname n\'a pas été complétée avec succès.
Les détails sont les suivants :
Chemin de l\'installation : $path
URL de l\'installation : $url

L\'erreur suivante s\'est produite :
$error

Veuillez essayer d\'importer l\'installation à nouveau après quelque temps.

Si vous souhaitez vous désabonner de ces e-mails, allez dans votre Panneau de configuration -> '.APP.' -> Paramètres de messagerie
';

// Chaînes de langue pour l'importation en arrière-plan
$l['mail_import_bg_sub'] = 'Importation de votre installation $scriptname';
$l['mail_import_bg'] = 'L\'importation de votre installation $scriptname a commencé en arrière-plan. Vous recevrez une notification par e-mail sur l\'état une fois le processus d\'importation terminé.
Les détails sont les suivants :
Chemin de l\'installation : $path
URL de l\'installation : $url

Si vous souhaitez vous désabonner de ces e-mails, allez dans votre Panneau de configuration -> '.APP.' -> Paramètres de messagerie
';

// Installation de modèles pour les CLASSES
$l['mail_install_classes_sub'] = 'Nouvelle installation de $classesname';
$l['mail_install_classes'] = 'Une nouvelle installation de $classesname $version a été complétée. Les détails de l\'installation sont indiqués ci-dessous :
Chemin : $path
<if $time>Temps d\'installation : $time</if>

Si vous souhaitez vous désabonner de ces e-mails, allez dans votre Panneau de configuration -> '.APP.' -> Paramètres de messagerie
';

////////////////////////
// MISE À NIVEAU ADMIN - 6
////////////////////////

// E-mail de mise à niveau automatique pour l'administrateur (réussie)
$l['mail_adminupgrade_success_admin_sub'] = 'L\'installation de $scriptname de l\'utilisateur $user a été mise à niveau avec succès';
$l['mail_adminupgrade_success_admin'] = 'L\'installation de $scriptname de l\'utilisateur $user a été mise à niveau avec succès vers la dernière version.
Les détails sont les suivants :
URL de l\'installation : $url
Dernière version : $version
Ancienne version : $oldversion
';

// E-mail de mise à niveau automatique pour l'administrateur (échec) mais restauré avec succès
$l['mail_adminupgrade_fail_admin_sub'] = 'Le processus de mise à niveau pour l\'installation de $scriptname a échoué et a été restauré à partir de la sauvegarde';
$l['mail_adminupgrade_fail_admin'] = 'Le processus de mise à niveau de l\'installation de $scriptname pour l\'utilisateur $user a échoué.
'.APP.' avait créé une sauvegarde avant la mise à niveau, et la sauvegarde a été restaurée avec succès.
URL de l\'installation : $url
Version actuelle : $oldversion
Dernière version : $version
Les détails de l\'erreur de mise à niveau sont les suivants :
Erreur : $upgrade_error
';

// E-mail de mise à niveau automatique pour l'utilisateur (réussi)
$l['mail_adminupgrade_success_user_sub'] = 'Votre installation de $scriptname a été mise à niveau avec succès par l\'administrateur système';
$l['mail_adminupgrade_success_user'] = 'Votre installation de $scriptname a été mise à niveau avec succès vers la dernière version par l\'administrateur système.
Les détails sont les suivants :
URL de l\'installation : $url
Dernière version : $version
Ancienne version : $oldversion

Si vous souhaitez vous désabonner de ces e-mails, allez dans votre Panneau de configuration -> '.APP.' -> Paramètres de messagerie
';

// E-mail de mise à niveau automatique pour l'utilisateur (échec) mais restauré avec succès
$l['mail_adminupgrade_fail_user_sub'] = 'La mise à niveau de votre installation $scriptname par l\'administrateur système a échoué';
$l['mail_adminupgrade_fail_user'] = 'L\'administrateur système a tenté de mettre à niveau votre installation $scriptname, mais le processus de mise à niveau a échoué.
Une sauvegarde avait été créée avant la mise à niveau de votre installation, et votre installation a été restaurée avec succès à partir de cette sauvegarde.
URL de l\'installation : $url
Version actuelle : $oldversion
Dernière version : $version
Les détails de l\'erreur de mise à niveau sont les suivants :
Erreur : $upgrade_error

Si vous souhaitez vous désabonner de ces e-mails, allez dans votre Panneau de configuration -> '.APP.' -> Paramètres de messagerie
';

// TOUT A ÉCHOUÉ (mise à niveau et RESTAURATION aussi) (POUR ADMIN)
$l['mail_adminupgrade_restore_fail_admin_sub'] = 'Le processus de mise à niveau de l\'installation $scriptname de l\'utilisateur $user a échoué';
$l['mail_adminupgrade_restore_fail_admin'] = 'Le processus de mise à niveau de l\'installation $scriptname de l\'utilisateur $user a échoué.
Une sauvegarde avait été créée avant la mise à niveau, mais le processus de restauration a également échoué !

Une restauration manuelle sera nécessaire. Le guide pour la restauration manuelle est disponible ici :
https://www.softaculous.com/docs/enduser/manual-restore/

Voici les détails de l\'installation et de la sauvegarde que vous pourriez avoir besoin pour restaurer votre installation $scriptname :
CHEMIN_VERS_VOTRE_FICHIER_DE_SAUVEGARDE : $backup_path
CHEMIN_DE_L\'INSTALLATION : $softpath
<if $dbname>NOM_DE_LA_BASE_DE_DONNÉES : $dbname</if>
<if $dbuser>UTILISATEUR_DE_LA_BASE_DE_DONNÉES : $dbuser</if>
<if $dbpass>MOT_DE_PASSE_DE_LA_BASE_DE_DONNÉES : $dbpass</if>
<if $dbhost>HÔTE_DE_LA_BASE_DE_DONNÉES : $dbhost</if>

URL de l\'installation : $url
Version actuelle : $oldversion
Dernière version : $version
<if $upgrade_error>
Les détails de l\'erreur de mise à niveau sont les suivants :
Erreur : $upgrade_error
</if>
<if $error>
Les détails de l\'erreur de restauration sont les suivants :
Erreur : $error
</if>

L\'équipe '.APP.' est également disponible pour vous aider. Vous pouvez contacter l\'équipe '.APP.' (support@'.strtolower(APP).'.com) si vous rencontrez des problèmes.
';

// TOUT A ÉCHOUÉ (mise à niveau et RESTAURATION aussi) (POUR UTILISATEUR)
$l['mail_adminupgrade_restore_fail_user_sub'] = 'La mise à niveau de votre installation $scriptname par l\'administrateur système a échoué';
$l['mail_adminupgrade_restore_fail_user'] = 'L\'administrateur système a tenté de mettre à niveau votre installation $scriptname, mais la mise à niveau a échoué.
Une sauvegarde avait été créée avant la mise à niveau, mais le processus de restauration a également échoué !

Une restauration manuelle sera nécessaire. Le guide pour la restauration manuelle est disponible ici :
https://www.softaculous.com/docs/enduser/manual-restore/

Voici les détails de l\'installation et de la sauvegarde que vous pourriez avoir besoin pour restaurer votre installation $scriptname :
CHEMIN_VERS_VOTRE_FICHIER_DE_SAUVEGARDE : $backup_path
CHEMIN_DE_L\'INSTALLATION : $softpath
<if $dbname>NOM_DE_LA_BASE_DE_DONNÉES : $dbname</if>
<if $dbuser>UTILISATEUR_DE_LA_BASE_DE_DONNÉES : $dbuser</if>
<if $dbpass>MOT_DE_PASSE_DE_LA_BASE_DE_DONNÉES : $dbpass</if>
<if $dbhost>HÔTE_DE_LA_BASE_DE_DONNÉES : $dbhost</if>

URL de l\'installation : $url
Version actuelle : $oldversion
Dernière version : $version
<if $upgrade_error>
Les détails de l\'erreur de mise à niveau sont les suivants :
Erreur : $upgrade_error
</if>
<if $error>
Les détails de l\'erreur de restauration sont les suivants :
Erreur : $error
</if>

L\'équipe '.APP.' est également disponible pour vous aider. Vous pouvez contacter l\'équipe '.APP.' (support@'.strtolower(APP).'.com) si vous rencontrez des problèmes.

Si vous souhaitez vous désabonner de ces e-mails, allez dans votre Panneau de configuration -> '.APP.' -> Paramètres de messagerie
';


////////////////////////
// MISE À NIVEAU PAR L'UTILISATEUR - 3
////////////////////////

// Lorsqu'il est mis à niveau avec succès par l'utilisateur (par l'utilisateur)
$l['mail_userupgrade_success_user_sub'] = 'Installation de $scriptname mise à niveau avec succès';
$l['mail_userupgrade_success_user'] = 'Votre installation de $scriptname a été mise à niveau avec succès vers la dernière version.
Les détails sont les suivants :
URL de l\'installation : $url
Dernière version : $version
Ancienne version : $oldversion

Si vous souhaitez vous désabonner de ces e-mails, allez dans votre Panneau de configuration -> '.APP.' -> Paramètres de messagerie
';

// Si une erreur survient lors de la mise à niveau (par l'utilisateur)
$l['mail_userupgrade_fail_user_sub'] = 'La mise à niveau de votre installation $scriptname a échoué';
$l['mail_userupgrade_fail_user'] = 'La mise à niveau de votre installation $scriptname a échoué.
Les détails sont les suivants :
URL de l\'installation : $url
Version actuelle : $oldversion
Dernière version : $version
Erreur : $upgrade_error

Si vous souhaitez vous désabonner de ces e-mails, allez dans votre Panneau de configuration -> '.APP.' -> Paramètres de messagerie
';

// Si la MISE À NIVEAU et la RESTAURATION échouent lors de la mise à niveau (par l'utilisateur)
$l['mail_userupgrade_restore_fail_user_sub'] = 'La mise à niveau de votre installation $scriptname a échoué';
$l['mail_userupgrade_restore_fail_user'] = 'La mise à niveau de votre installation $scriptname a échoué.
Une sauvegarde avait été créée avant la mise à niveau, mais le processus de restauration a également échoué !

Une restauration manuelle sera nécessaire. Le guide pour la restauration manuelle est disponible ici :
https://www.softaculous.com/docs/enduser/manual-restore/

Les détails sont les suivants :
URL de l\'installation : $url
Version actuelle : $oldversion
Dernière version : $version
<if $upgrade_error>
Les détails de l\'erreur de mise à niveau sont les suivants :
Erreur : $upgrade_error
</if>
<if $error>
Les détails de l\'erreur de restauration sont les suivants :
Erreur : $error
</if>

L\'équipe '.APP.' est également disponible pour vous aider. Vous pouvez contacter l\'équipe '.APP.' (support@'.strtolower(APP).'.com) si vous rencontrez des problèmes.

Si vous souhaitez vous désabonner de ces e-mails, allez dans votre Panneau de configuration -> '.APP.' -> Paramètres de messagerie
';

////////////////////////
// MISE À NIVEAU AUTOMATIQUE - 3
////////////////////////

// Lorsqu'il est automatiquement mis à niveau avec succès
$l['mail_autoupgrade_success_user_sub'] = 'Installation de $scriptname mise à niveau automatiquement avec succès';
$l['mail_autoupgrade_success_user'] = 'Votre installation de $scriptname a été mise à niveau automatiquement avec succès vers la dernière version.
Les détails sont les suivants :
URL de l\'installation : $url
Dernière version : $version
Ancienne version : $oldversion

Si vous souhaitez vous désabonner de ces e-mails, allez dans votre Panneau de configuration -> '.APP.' -> Paramètres de messagerie
';

// Lorsque la MISE À NIVEAU AUTOMATIQUE échoue
$l['mail_autoupgrade_fail_user_sub'] = 'La mise à niveau automatique de votre installation $scriptname a échoué';
$l['mail_autoupgrade_fail_user'] = 'La mise à niveau automatique de votre installation $scriptname a échoué.
Les détails sont les suivants :
URL de l\'installation : $url
Version actuelle : $oldversion
Dernière version : $version
Erreur : $upgrade_error

Si vous souhaitez vous désabonner de ces e-mails, allez dans votre Panneau de configuration -> '.APP.' -> Paramètres de messagerie
';

// Si la MISE À NIVEAU et la RESTAURATION échouent lors de la MISE À NIVEAU AUTOMATIQUE
$l['mail_autoupgrade_restore_fail_user_sub'] = 'La mise à niveau automatique de votre installation $scriptname a échoué';
$l['mail_autoupgrade_restore_fail_user'] = 'La mise à niveau automatique de votre installation $scriptname a échoué.
Une sauvegarde avait été créée avant la mise à niveau, mais le processus de restauration a également échoué !

Une restauration manuelle sera nécessaire. Le guide pour la restauration manuelle est disponible ici :
https://www.softaculous.com/docs/enduser/manual-restore/

Les détails sont les suivants :
URL de l\'installation : $url
Version actuelle : $oldversion
Dernière version : $version
<if $upgrade_error>
Les détails de l\'erreur de mise à niveau sont les suivants :
Erreur : $upgrade_error
</if>
<if $error>
Les détails de l\'erreur de restauration sont les suivants :
Erreur : $error
</if>

L\'équipe '.APP.' est également disponible pour vous aider. Vous pouvez contacter l\'équipe '.APP.' (support@'.strtolower(APP).'.com) si vous rencontrez des problèmes.

Si vous souhaitez vous désabonner de ces e-mails, allez dans votre Panneau de configuration -> '.APP.' -> Paramètres de messagerie
';

////////////////////////
// VÉRIFICATION AVANT LA MISE À NIVEAU 
////////////////////////

// Si la vérification avant la mise à niveau échoue lors de la MISE À NIVEAU AUTOMATIQUE (POUR UTILISATEUR)
$l['mail_autoupgrade_precheck_fail_sub'] = 'Échec de la vérification avant la mise à niveau';
$l['mail_autoupgrade_precheck_fail'] = 'Le processus de mise à niveau automatique pour l\'installation suivante ne peut pas être complété car il ne répond pas aux exigences de mise à niveau :
URL de l\'installation : $url
Version actuelle : $oldversion
Dernière version : $version
<if $upgrade_error>
Erreur : $upgrade_error
</if>
<if $error>
Erreur : $error
</if>

Si vous souhaitez vous désabonner de ces e-mails, allez dans votre Panneau de configuration -> '.APP.' -> Paramètres de messagerie
';

/////////////////////////////////
// Échec de la sauvegarde lors de la mise à niveau CLI
/////////////////////////////////

// Si une sauvegarde échoue avant la MISE À NIVEAU AUTOMATIQUE d'une installation (POUR UTILISATEUR)
$l['mail_autoupgrade_backup_fail_sub'] = 'Échec du processus de sauvegarde avant la mise à niveau automatique de l\'installation $scriptname';
$l['mail_autoupgrade_backup_fail'] = 'La sauvegarde de l\'installation $scriptname a échoué. Le processus de mise à niveau automatique a donc été annulé.
Les détails sont les suivants :
URL de l\'installation : $url
Version actuelle : $oldversion
Dernière version : $version
Erreur : $error

Si vous souhaitez vous désabonner de ces e-mails, allez dans votre Panneau de configuration -> '.APP.' -> Paramètres de messagerie
';

$l['err_openconfig'] = 'Impossible d\'ouvrir le fichier de configuration';
$l['err_writeconfig'] = 'Impossible d\'écrire dans le fichier de configuration';

$l['classes_con_failed'] = 'Erreur : Échec de la connexion au serveur.';
$l['cl_ratings'] = 'Évaluations';
$l['cl_author'] = 'Auteur';
$l['cl_license'] = 'Licence';
$l['cl_version'] = 'Version';
$l['cl_show_files'] = 'Afficher les fichiers';
$l['cl_install_but'] = 'Installer';
$l['expand_view'] = 'Cliquez ici pour voir en plein écran';
$l['collapse_view'] = 'Cliquez ici pour voir en mode intégré';
$l['email_off_notice'] = '<b>REMARQUE : Les notifications par e-mail sont désactivées, vous ne recevrez donc aucun e-mail.</b>';

// Ajouter des chaînes de langue utilisateur
$l['mail_add_user_sub'] = 'Bienvenue sur Softaculous Remote Installer';
$l['mail_add_user'] = 'Vous pouvez maintenant vous connecter avec succès à Softaculous Remote Installer.
Les détails sont les suivants :
Utilisateur : $username
Clé API : $api_key
Mot de passe API : $api_pass
Nombre d\'utilisateurs autorisés : $number_of_users';

// Langages du parseur de conditions
$l['req_ver_nf'] = 'Version requise de &soft-1; &soft-2; &soft-3; ET la version trouvée est : ';
$l['req_ext_nf'] = 'Extension requise &soft-1; non trouvée :';
$l['req_func_nf'] = 'Fonction requise &soft-1; non trouvée';
$l['req_ext_ver'] = 'Version de l\'extension requise &soft-1; &soft-2; &soft-3; &soft-4; MAIS trouvée &soft-5;';
$l['gt'] = 'supérieur à';
$l['lt'] = 'inférieur à';
$l['ge'] = 'supérieur ou égal à';
$l['le'] = 'inférieur ou égal à';
$l['eq'] = 'est';
$l['ne'] = 'ne doit pas être égal à';
$l['req_version'] = 'Version';
$l['req_extensions'] = 'Extensions';
$l['req_functions'] = 'Fonctions';

// Chaînes de langue pour les sauvegardes automatiques
$l['mail_auto_backup_sub'] = 'Sauvegarde automatique de votre installation $scriptname';
$l['mail_auto_backup'] = 'La sauvegarde automatique de votre installation $scriptname a été complétée avec succès.
Les détails sont les suivants :
Chemin de l\'installation : $path
URL de l\'installation : $url
Chemin de la sauvegarde : $backup_file
<if $backup_location>Emplacement de la sauvegarde : $backup_location</if>

Vous pouvez accéder à la sauvegarde depuis la section Backups dans '.APP.'.

Si vous souhaitez vous désabonner de ces e-mails, allez dans votre Panneau de configuration -> '.APP.' -> Paramètres de messagerie
';

$l['mail_auto_backup_fail_sub'] = 'Échec : Sauvegarde automatique de votre installation $scriptname';
$l['mail_auto_backup_fail'] = 'La sauvegarde automatique de votre installation $scriptname n\'a pas été complétée avec succès.
Les détails sont les suivants :
Chemin de l\'installation : $path
URL de l\'installation : $url
Chemin de la sauvegarde : $backup_file
<if $backup_location>Emplacement de la sauvegarde : $backup_location</if>

L\'erreur suivante s\'est produite :
$error

Si vous souhaitez vous désabonner de ces e-mails, allez dans votre Panneau de configuration -> '.APP.' -> Paramètres de messagerie
';

// E-mail pour envoyer la liste des scripts qui ne répondent pas aux exigences.
$l['mail_script_requirement_sub'] = 'Journal des exigences des scripts non satisfaites';
$l['mail_script_requirement'] = 'La liste suivante des scripts ne répond pas aux exigences minimales de votre serveur et pourrait ne pas fonctionner.
Les détails sont les suivants :

$failed_req

Remarque : Si vous modifiez la version de PHP à l\'exécution (c.-à-d. en utilisant CageFS, hive, .htaccess, etc.), vous pouvez ignorer les avertissements de version PHP ci-dessus.
';

// Chaînes de langue du panneau Softaculous
$l['no_www_domain'] = 'Veuillez fermer toutes les pages '.$globals['sn'].' et vous déconnecter du panneau de contrôle en utilisant le bouton de déconnexion.
Ensuite, vous pouvez vous reconnecter et utiliser '.$globals['sn'].'.';

$l['install_tweet'] = 'Je viens d\'installer #[[SCRIPTNAME]] sur [[softurl]] via #[[APP]] #[[TYPE]]';
$l['install_tweet_classes'] = 'Je viens d\'installer #[[SCRIPTNAME]] via #[[APP]] #[[TYPE]]';
$l['upgrade_tweet'] = 'Je viens de mettre à niveau #[[SCRIPTNAME]] sur [[softurl]] via #[[APP]] #[[TYPE]]';
$l['clone_tweet'] = 'Je viens de cloner #[[SCRIPTNAME]] sur [[softurl]] via #[[APP]] #[[TYPE]]';
$l['staging_tweet'] = 'Je viens de créer une installation de test de #[[SCRIPTNAME]] sur [[softurl]] via #[[APP]] #[[TYPE]]';
$l['pushtolive_tweet'] = 'Je viens de passer ma mise en scène #[[SCRIPTNAME]] en production sur [[softurl]] via #[[APP]] #[[TYPE]]';
$l['restore_template_tweet'] = 'Je viens de restaurer un modèle #[[SCRIPTNAME]] sur [[softurl]] via #[[APP]] #[[TYPE]]';
// mois
$l['January'] = 'Janvier';
$l['February'] = 'Février';
$l['March'] = 'Mars';
$l['April'] = 'Avril';
$l['May'] = 'Mai';
$l['June'] = 'Juin';
$l['July'] = 'Juillet';
$l['August'] = 'Août';
$l['September'] = 'Septembre';
$l['October'] = 'Octobre';
$l['November'] = 'Novembre';
$l['December'] = 'Décembre';

// Modèles de courriel pour la sauvegarde Webuzo
$l['mail_webuzo_backup_sub'] = 'La sauvegarde $type a été complétée avec succès';
$l['mail_webuzo_backup'] = 'Le processus de sauvegarde a été complété avec succès.
Le fichier de sauvegarde a été créé avec le nom de fichier :
$filename

Cordialement,
L\'équipe Webuzo';
$l['mail_webuzo_backup_fail_sub'] = 'La sauvegarde $type a échoué';
$l['mail_webuzo_backup_fail'] = 'Le processus de sauvegarde n\'a pas été complété avec succès.
Les erreurs suivantes sont survenues :
$error

Cordialement,
L\'équipe Webuzo';
$l['mail_webuzo_restore_sub'] = 'La restauration $type a été complétée avec succès';
$l['mail_webuzo_restore'] = 'La restauration a été complétée avec succès.

Le fichier restauré était :
$filename

Cordialement,
L\'équipe Webuzo';
$l['mail_webuzo_restore_fail_sub'] = 'La restauration $type a échoué';
$l['mail_webuzo_restore_fail'] = 'Le processus de restauration a rencontré des erreurs et n\'a pas pu être complété.
Les erreurs suivantes sont survenues :
$error

Cordialement,
L\'équipe Webuzo';

// Variable de modèle de mise en scène
$l['mail_staging_sub'] = 'Votre site de développement $scriptname';
$l['mail_staging'] = 'Votre site de développement $scriptname $version a été réalisé avec succès.

Pour référence, les informations de votre site en production (la source):
Chemin d\'origine : $live_path
Adresse d\'origine : $live_url

Les détails de votre site de développement :

Chemin : $path
URL : $url
URL d\'administration: $admin_url

<if $datadirectory>Répertoire des données : $datadirectory</if>
<if $dbname>Base de données MySQL : $dbname</if>
<if $dbuser>Utilisateur MySQL : $dbuser</if>
<if $dbhost>Hôte MySQL : $dbhost</if>
<if $dbpass>Mot de passe MySQL : $dbpass</if>
<if $cron>Tâche Cron : $cron</if>
<if $time>Moment de l\'installation : $time</if>

Si vous souhaitez vous désabonner de ces courriels, rendez-vous sur votre panneau de contrôle -> Paramètres de messagerie';

// Variable de modèle de mise en ligne
$l['mail_pushtolive_sub'] = 'Mise en ligne de $scriptname';
$l['mail_pushtolive'] = 'La mise en ligne de votre site $scriptname $version a été complétée avec succès.

Les détails de votre installation en production :
Chemin d\'origine : $live_path
URL d\'origine : $live_url

Les détails de votre installation de mise en scène :
Chemin : $path
URL : $url
URL d\'administration : $admin_url
<if $datadirectory>Répertoire des données : $datadirectory</if>
<if $dbname>Base de données MySQL : $dbname</if>
<if $dbuser>Utilisateur MySQL : $dbuser</if>
<if $dbhost>Hôte MySQL : $dbhost</if>
<if $dbpass>Mot de passe MySQL : $dbpass</if>
<if $cron>Tâche Cron : $cron</if>

Si vous souhaitez vous désabonner de ces e-mails, allez dans votre Panneau de configuration -> '.APP.' -> Paramètres de messagerie';

// Échec de la sauvegarde avant la mise à niveau CLI des plugins/thèmes
$l['mail_autoupgrade_extras_backup_fail_sub'] = 'Échec du processus de sauvegarde avant la mise à niveau automatique des plugins/thèmes de votre installation $scriptname';
$l['mail_autoupgrade_extras_backup_fail'] = 'Le processus de sauvegarde des plugins/thèmes de votre installation $scriptname a échoué. Le processus de mise à niveau automatique des plugins/thèmes n\'a donc pas été effectué.
Les détails sont les suivants :
URL de l\'installation : $url
Erreur : $error

Si vous souhaitez vous désabonner de ces e-mails, allez dans votre Panneau de configuration -> '.APP.' -> Paramètres de messagerie
';

/////////////////////////////////
// Mise à niveau des plugins/thèmes par l'utilisateur
/////////////////////////////////

// Plugins/Thèmes mis à niveau avec succès par l'utilisateur (par l'utilisateur)
$l['mail_userupgrade_extras_success_user_sub'] = 'Les plugins/thèmes de l\'installation $scriptname ont été mis à niveau avec succès';
$l['mail_userupgrade_extras_success_user'] = 'Les plugins/thèmes de votre installation $scriptname ont été mis à niveau avec succès vers la dernière version.
Les détails sont les suivants :
URL de l\'installation : $url

Si vous souhaitez vous désabonner de ces e-mails, allez dans votre Panneau de configuration -> '.APP.' -> Paramètres de messagerie
';

// Si la MISE À NIVEAU et la RESTAURATION des plugins/thèmes échouent lors de la mise à niveau (par l'utilisateur)
$l['mail_userupgrade_extras_restore_fail_user_sub'] = 'La mise à niveau des plugins/thèmes de votre installation $scriptname a échoué';
$l['mail_userupgrade_extras_restore_fail_user'] = 'La mise à niveau des plugins/thèmes de votre installation $scriptname a échoué.
Une sauvegarde avait été créée avant la mise à niveau, mais le processus de restauration a également échoué !

Une restauration manuelle sera nécessaire. Le guide pour la restauration manuelle est disponible ici :
https://www.softaculous.com/docs/enduser/manual-restore/

Les détails sont les suivants :
URL de l\'installation : $url
<if $upgrade_error>
Les détails de l\'erreur de mise à niveau sont les suivants :
Erreur : $upgrade_error
</if>
<if $error>
Les détails de l\'erreur de restauration sont les suivants :
Erreur : $error
</if>

L\'équipe '.APP.' est également disponible pour vous aider. Vous pouvez contacter l\'équipe '.APP.' (support@'.strtolower(APP).'.com) si vous rencontrez des problèmes.

Si vous souhaitez vous désabonner de ces e-mails, allez dans votre Panneau de configuration -> '.APP.' -> Paramètres de messagerie
';

// Si une erreur survient lors de la mise à niveau des plugins/thèmes (par l'utilisateur)
$l['mail_userupgrade_extras_fail_user_sub'] = 'La mise à niveau des plugins/thèmes de votre installation $scriptname a échoué';
$l['mail_userupgrade_extras_fail_user'] = 'La mise à niveau des plugins/thèmes de votre installation $scriptname a échoué.
Les détails sont les suivants :
URL de l\'installation : $url
Erreur : $upgrade_error

Si vous souhaitez vous désabonner de ces e-mails, allez dans votre Panneau de configuration -> '.APP.' -> Paramètres de messagerie
';

/////////////////////////////////
// Mise à niveau automatique des plugins/thèmes
/////////////////////////////////

// Lorsque les plugins/thèmes sont automatiquement mis à niveau avec succès
$l['mail_autoupgrade_extras_success_user_sub'] = 'Les plugins/thèmes de l\'installation $scriptname ont été automatiquement mis à niveau avec succès';
$l['mail_autoupgrade_extras_success_user'] = 'Les plugins/thèmes de votre installation $scriptname ont été automatiquement mis à niveau avec succès vers la dernière version.
Les détails sont les suivants :
URL de l\'installation : $url
<if $plugins_updated>
Les plugins actifs suivants ont été mis à niveau :
$plugins_updated
</if>
<if $theme_updated>
Le thème actif suivant a été mis à niveau :
$theme_updated
</if>

Si vous souhaitez vous désabonner de ces e-mails, allez dans votre Panneau de configuration -> '.APP.' -> Paramètres de messagerie
';

// Si la MISE À NIVEAU et la RESTAURATION des plugins/thèmes échouent lors de la mise à niveau automatique
$l['mail_autoupgrade_extras_restore_fail_user_sub'] = 'La mise à niveau automatique des plugins/thèmes de votre installation $scriptname a échoué';
$l['mail_autoupgrade_extras_restore_fail_user'] = 'La mise à niveau automatique des plugins/thèmes de votre installation $scriptname a échoué.
Une sauvegarde avait été créée avant la mise à niveau, mais le processus de restauration a également échoué !

Une restauration manuelle sera nécessaire. Le guide pour la restauration manuelle est disponible ici :
https://www.softaculous.com/docs/enduser/manual-restore/

Les détails sont les suivants :
URL de l\'installation : $url
<if $upgrade_error>
Les détails de l\'erreur de mise à niveau sont les suivants :
Erreur : $upgrade_error
</if>
<if $error>
Les détails de l\'erreur de restauration sont les suivants :
Erreur : $error
</if>

L\'équipe '.APP.' est également disponible pour vous aider. Vous pouvez contacter l\'équipe '.APP.' (support@'.strtolower(APP).'.com) si vous rencontrez des problèmes.

Si vous souhaitez vous désabonner de ces e-mails, allez dans votre Panneau de configuration -> '.APP.' -> Paramètres de messagerie
';

// Lorsque la MISE À NIVEAU AUTOMATIQUE des plugins/thèmes échoue
$l['mail_autoupgrade_extras_fail_user_sub'] = 'La mise à niveau automatique des plugins/thèmes de votre installation $scriptname a échoué';
$l['mail_autoupgrade_extras_fail_user'] = 'La mise à niveau automatique des plugins/thèmes de votre installation $scriptname a échoué.
Les détails sont les suivants :
URL de l\'installation : $url
Erreur : $upgrade_error

Si vous souhaitez vous désabonner de ces e-mails, allez dans votre Panneau de configuration -> '.APP.' -> Paramètres de messagerie
';

// Chaînes de langue pour l'échec du clonage
$l['mail_clone_fail_sub'] = 'Échec : Clonage de votre installation $scriptname';
$l['mail_clone_fail'] = 'Le clonage de votre installation $scriptname n\'a pas été complété avec succès.
Les détails sont les suivants :
Chemin de l\'installation : $path
URL de l\'installation : $url

L\'erreur suivante s\'est produite :
$error

Veuillez essayer d\'importer l\'installation à nouveau après quelque temps.

Si vous souhaitez vous désabonner de ces e-mails, allez dans votre Panneau de configuration -> '.APP.' -> Paramètres de messagerie
';

// Chaînes de langue pour l'échec de la restauration du modèle
$l['mail_restore_template_fail_sub'] = 'Échec : Restauration de votre modèle $scriptname';
$l['mail_restore_template_fail'] = 'La restauration de votre modèle $scriptname n\'a pas été complétée avec succès.
Les détails sont les suivants :
Chemin de l\'installation : $path
URL de l\'installation : $url

L\'erreur suivante s\'est produite :
$error

Si vous souhaitez vous désabonner de ces e-mails, allez dans votre Panneau de configuration -> '.APP.' -> Paramètres de messagerie
';

// Chaînes de langue pour l'échec de la mise en scène
$l['mail_staging_fail_sub'] = 'Échec : Mise en scène de votre installation $scriptname';
$l['mail_staging_fail'] = 'La mise en scène de votre installation $scriptname n\'a pas été complétée avec succès.
Les détails sont les suivants :
Chemin de l\'installation : $path
URL de l\'installation : $url

L\'erreur suivante s\'est produite :
$error

Veuillez essayer d\'importer l\'installation à nouveau après quelque temps.

Si vous souhaitez vous désabonner de ces e-mails, allez dans votre Panneau de configuration -> '.APP.' -> Paramètres de messagerie
';

// Chaînes de langue pour l'échec de la mise à niveau
$l['mail_upgrade_fail_sub'] = 'Échec : Mise à niveau de votre installation $scriptname';
$l['mail_upgrade_fail'] = 'La mise à niveau de votre installation $scriptname n\'a pas été complétée avec succès.
Les détails sont les suivants :
Chemin de l\'installation : $path
URL de l\'installation : $url

L\'erreur suivante s\'est produite :
$error

Veuillez essayer de mettre à niveau à nouveau après quelque temps.

Si vous souhaitez vous désabonner de ces e-mails, allez dans votre Panneau de configuration -> '.APP.' -> Paramètres de messagerie
';

$l['invalid_resp'] = 'Réponse invalide reçue';

$l['api_no_resp'] = 'Aucune réponse reçue';
$l['api_invalid_resp'] = 'Réponse invalide reçue';

$l['go_plans'] = 'Plans';
$l['go_wp_manager'] = 'Gestionnaire de WordPress';
$l['not_in_free'] = '<b>&soft-1;</b> ne peut pas être installé dans la version gratuite de '.APP.'.';
$l['upgrade_to_pro'] = '<b><a href="'.$globals['index'].'act=plans" target="_blank" style="text-decoration:none;color:green;">Débloquer les fonctionnalités Premium</a></b>';

$l['upgrade_to_ampps_pro'] = '<b><a href="https://ampps.com/pricing" target="_blank" style="text-decoration:none;color:green;">Débloquer les fonctionnalités Premium</a></b>';

$l['not_in_expired'] = '<b>&soft-1;</b> ne peut pas être installé car votre licence '.APP.' a expiré.';
$l['renew_pro'] = '<b><a href="'.$globals['index'].'act=plans" target="_blank" style="text-decoration:none;color:green;">Renouveler la licence pour utiliser les fonctionnalités Premium</a></b>';

$l['renew_ampps_pro'] = '<b><a href="https://www.softaculous.com/clients?ca=ampps_buy&renew=&soft-1;&plan=&soft-2;" target="_blank" style="text-decoration:none;color:green;">Renouveler la licence pour utiliser les fonctionnalités Premium</a></b>';

$l['invalid_license_enduser_server'] = 'Cette licence ne peut pas être utilisée sur ce serveur';
$l['invalid_license_enduser_account'] = 'Cette licence ne peut pas être utilisée sur ce compte';

$l['package_error'] = 'Il y a eu des erreurs lors de l\'installation du package.';

$l['empty_mail_q'] = 'La file d\'attente des mails est vide.';

$l['admin_panel'] = 'Panneau d\'administration';
$l['reseller_panel'] = 'Panneau de revendeur';
$l['learn_more'] = 'En savoir plus';
$l['dismiss_forever'] = 'Ignorer pour toujours';
$l['install_script_title'] = 'Installer une application';
$l['install_script_description'] = 'Vous pouvez installer une application après l\'avoir sélectionnée dans le menu de gauche';

$l['outdated_installations_title'] = 'Installations obsolètes';
$l['outdated_installations_description'] = 'Vous avez quelques installations obsolètes. Vous pouvez les mettre à niveau en cliquant sur le bouton rouge ci-dessous';

$l['demos_title'] = 'Démos';
$l['demos_description'] = 'Vous pouvez consulter les démos des applications avant de les installer pour voir si l\'application répond à vos besoins';

$l['search_scripts_title'] = 'Rechercher des scripts';
$l['search_scripts_description'] = 'Vous pouvez rechercher des applications par leur nom dans la boîte de recherche du menu de gauche';

$l['bulk_import_title'] = 'Importer';
$l['bulk_import_description'] = 'Vous pouvez importer toutes vos installations existantes dans '.APP.' en utilisant l\'option d\'importation dans le menu supérieur';

$l['wordpress_manager_title'] = 'Gestionnaire de WordPress';
$l['wordpress_manager_description'] = 'Vous pouvez gérer vos installations WordPress à partir d\'un seul endroit en utilisant la fonctionnalité Gestionnaire de WordPress';

$l['backup_title'] = 'Sauvegarde';
$l['backup_description'] = 'Vous pouvez créer une sauvegarde de votre(vos) installation(s) afin de pouvoir restaurer votre site en cas de besoin';

$l['restore_title'] = 'Restaurer';
$l['restore_description'] = 'Vous pouvez restaurer votre site à partir des sauvegardes disponibles';

$l['delete_backups_title'] = 'Supprimer les sauvegardes';
$l['delete_backups_description'] = 'Vous pouvez supprimer les anciennes sauvegardes ou les sauvegardes non désirées si vous n\'en avez plus besoin';

$l['auto_upgrade_title'] = 'Mise à niveau automatique';
$l['auto_upgrade_description'] = 'Vous pouvez choisir de mettre à niveau automatiquement votre installation lorsqu\'une nouvelle version d\'une application est publiée';

$l['auto_backup_title'] = 'Sauvegarde automatique';
$l['auto_backup_description'] = 'Vous pouvez programmer des sauvegardes automatiques pour sauvegarder votre installation à intervalles réguliers';

$l['wordpress_sets_title'] = 'Ensembles de plugins et thèmes WordPress';
$l['wordpress_sets_description'] = 'Vous pouvez créer des ensembles et installer directement vos plugins et thèmes les plus utilisés sur toutes vos installations WordPress';

$l['remote_backups_title'] = 'Emplacements de sauvegarde distants';
$l['remote_backups_description'] = 'Vous pouvez sauvegarder vos sites sur des serveurs distants comme Dropbox, AWS S3, Google Drive, OneDrive, FTP/FTPS/SFTP';

$l['email_notifications_title'] = 'Notifications par e-mail';
$l['email_notifications_description'] = 'Vous pouvez choisir les notifications par e-mail que vous souhaitez recevoir';

$l['remote_import_title'] = 'Importer depuis un serveur distant';
$l['remote_import_description'] = 'Vous pouvez importer vos installations depuis un serveur distant vers '.APP.' en utilisant l\'onglet "Depuis un serveur distant"';

$l['clone_title'] = 'Cloner';
$l['clone_description'] = 'Vous pouvez cloner et créer une nouvelle copie de votre installation';

$l['edit_installation_title'] = 'Modifier une installation';
$l['edit_installation_description'] = 'Vous pouvez modifier les détails comme activer la mise à niveau automatique, les sauvegardes, etc. de votre installation existante';

$l['sign_on_title'] = 'Connexion en un clic';
$l['sign_on_description'] = 'Vous pouvez vous connecter au compte administrateur de votre installation WordPress en utilisant le bouton de connexion';

$l['reset_password_title'] = 'Réinitialiser le mot de passe admin';
$l['reset_password_description'] = 'Vous pouvez réinitialiser le mot de passe du compte administrateur de votre installation';

$l['staging_title'] = 'Instance de test';
$l['staging_description'] = 'Vous pouvez créer une instance de test de votre site en direct pour tester des plugins ou des mises à niveau avant de les appliquer sur le site de production';

$l['pushtolive_title'] = 'Publier en ligne';
$l['pushtolive_description'] = 'Vous pouvez publier les modifications de votre site de test sur votre site en direct';

$l['softwp_title'] = 'Softaculous Pro Plugins';
$l['softwp_description'] = 'You can use Pro WordPress plugins for Free: Backuply, SpeedyCache, SiteSEO, Loginizer, Pagelayer, GoSMTP, FileOrganizer & more. Click here';

$l['softwp_ai_title'] = 'Enhance Content Writing with AI Assistant';
$l['softwp_ai_description'] = 'You can use cutting-edge AI to write content for your WordPress posts or pages. Create a table, write a paragraph, translate, change tone, & much more';