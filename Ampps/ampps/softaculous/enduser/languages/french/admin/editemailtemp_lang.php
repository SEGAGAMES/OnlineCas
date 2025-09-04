<?php

//////////////////////////////////////////////////////////////
//===========================================================
// editemailtemp_lang.php
//===========================================================
// SOFTACULOUS 
// Version : 4.0
// Inspired by the DESIRE to be the BEST OF ALL
// ----------------------------------------------------------
// Started by: Alons
// Date:       8th Mar 2010
// Time:       23:00 hrs
// Site:       http://www.softaculous.com/ (SOFTACULOUS)
// ----------------------------------------------------------
// Edited by:  Philippe Raimundo
// Date:       24 April 2024
// Time:       15:00 hrs
// Site:       https://polisystems.ch/
// ----------------------------------------------------------
// Please Read the Terms of use at http://www.softaculous.com
// ----------------------------------------------------------
//===========================================================
// (c)Softaculous Ltd.
//===========================================================
//////////////////////////////////////////////////////////////

if(!defined('SOFTACULOUS')){

	die('Tentative de piratage');

}

$l['tempsub'] = 'Veuillez mentionner le sujet';
$l['tempcontent'] = 'Veuillez mentionner le contenu pour les modèles';
$l['no_email_template'] = 'Aucun modèle d\'e-mail publié';
$l['invalid_email_template'] = 'Modèle d\'e-mail invalide';

$l['<title>'] = 'Modifier le modèle d\'e-mail';
$l['heading'] = 'Modifier le modèle d\'e-mail';
$l['edittemp'] = 'Modifier le modèle d\'e-mail';
$l['done'] = 'Le modèle d\'e-mail a été enregistré avec succès';
$l['savetemp'] = 'Enregistrer le modèle d\'e-mail';
$l['subject'] = 'Sujet';
$l['content'] = 'Contenu';
$l['reset_confirm'] = 'Êtes-vous sûr de vouloir réinitialiser le modèle d\'e-mail ?';
$l['reset_template'] = 'Réinitialiser le modèle';
$l['temp_overview'] = 'Aperçu des modèles';
$l['language'] = 'Langue';
$l['ishtml'] = 'Envoyer en HTML';

$l['if_note'] = '<strong>Note</strong> : Vous pouvez utiliser un IF pour une variable optionnelle de la manière suivante :<br /><strong>&lt;if $VARIABLE_NAME&gt;$VARIABLE_NAME&lt;/if&gt;</strong>';

// Informations sur les variables d'installation
$l['mail_install_php_info'] = 'Vous pouvez utiliser les variables suivantes :<br />
<strong>$scriptname</strong> : Nom du script<br />
<strong>$path</strong> : Chemin d\'installation<br />
<strong>$version</strong> : Version<br />
<strong>$url</strong> : URL<br />
<strong>$admin_url</strong> : URL Admin<br />
<strong>$datadirectory</strong> : Répertoire des données<br />
<strong>$admin_username</strong> : Nom d\'utilisateur Admin<br />
<strong>$admin_pass</strong> : Mot de passe Admin<br />
<strong>$dbname</strong> : Base de données MySQL<br />
<strong>$dbuser</strong> : Utilisateur MySQL<br />
<strong>$dbhost</strong> : Hôte MySQL<br />
<strong>$dbpass</strong> : Mot de passe MySQL<br />
<strong>$cron</strong> : Tâches CRON<br />
<strong>$disable_notify_update</strong> : Notification de mise à jour<br />
<strong>$eu_auto_upgrade</strong> : Mise à niveau automatique<br />
<strong>$auto_backup</strong> : Sauvegardes automatiques<br />
<strong>$auto_backup_rotation</strong> : Rotation des sauvegardes<br />
<strong>$time</strong> : Temps d\'installation<br />
<strong>$sn</strong> : Nom du site (Peut être modifié depuis le panneau d\'administration de '.APP.')<br />
<strong>$user_name</strong> : Nom de l\'utilisateur<br />
<strong>$user_email</strong> : E-mail de l\'utilisateur';

// Informations sur les variables de clonage
$l['mail_clone_info'] = 'Vous pouvez utiliser les variables suivantes :<br />
<strong>$scriptname</strong> : Nom du script<br />
<strong>$old_path</strong> : Chemin de l\'installation originale<br />
<strong>$old_url</strong> : URL de l\'installation originale<br />
<strong>$path</strong> : Chemin de l\'installation clonée<br />
<strong>$version</strong> : Version<br />
<strong>$url</strong> : URL de l\'installation clonée<br />
<strong>$admin_url</strong> : URL Admin<br />
<strong>$datadirectory</strong> : Répertoire des données<br />
<strong>$dbname</strong> : Base de données MySQL<br />
<strong>$dbuser</strong> : Utilisateur MySQL<br />
<strong>$dbhost</strong> : Hôte MySQL<br />
<strong>$dbpass</strong> : Mot de passe MySQL<br />
<strong>$cron</strong> : Commande Cron<br />
<strong>$time</strong> : Temps d\'installation<br />
<strong>$sn</strong> : Nom du site (Peut être modifié depuis le panneau d\'administration de '.APP.')';

// Informations sur les variables d'installation JavaScript
$l['mail_install_js_info'] = 'Vous pouvez utiliser les variables suivantes :<br />
<strong>$scriptname</strong> : Nom du script<br />
<strong>$path</strong> : Chemin d\'installation<br />
<strong>$version</strong> : Version<br />
<strong>$url</strong> : URL<br />
<strong>$disable_notify_update</strong> : Notification de mise à jour<br />
<strong>$auto_backup</strong> : Sauvegardes automatiques<br />
<strong>$auto_backup_rotation</strong> : Rotation des sauvegardes<br />
<strong>$time</strong> : Temps d\'installation<br />
<strong>$sn</strong> : Nom du site (Peut être modifié depuis le panneau d\'administration de '.APP.')<br />
<strong>$user_name</strong> : Nom de l\'utilisateur<br />
<strong>$user_email</strong> : E-mail de l\'utilisateur';

// Informations sur les variables d'installation Perl
$l['mail_install_perl_info'] = 'Vous pouvez utiliser les variables suivantes :<br />
<strong>$scriptname</strong> : Nom du script<br />
<strong>$path</strong> : Chemin d\'installation<br />
<strong>$version</strong> : Version<br />
<strong>$url</strong> : URL<br />
<strong>$admin_url</strong> : URL Admin<br />
<strong>$datadirectory</strong> : Répertoire des données<br />
<strong>$wwwdir</strong> : Répertoire Web<br />
<strong>$admin_username</strong> : Nom d\'utilisateur Admin<br />
<strong>$admin_pass</strong> : Mot de passe Admin<br />
<strong>$dbname</strong> : Base de données MySQL<br />
<strong>$dbuser</strong> : Utilisateur MySQL<br />
<strong>$dbhost</strong> : Hôte MySQL<br />
<strong>$dbpass</strong> : Mot de passe MySQL<br />
<strong>$cron</strong> : Tâches CRON<br />
<strong>$disable_notify_update</strong> : Notification de mise à jour<br />
<strong>$auto_backup</strong> : Sauvegardes automatiques<br />
<strong>$auto_backup_rotation</strong> : Rotation des sauvegardes<br />
<strong>$time</strong> : Temps d\'installation<br />
<strong>$sn</strong> : Nom du site (Peut être modifié depuis le panneau d\'administration de '.APP.')<br />
<strong>$user_name</strong> : Nom de l\'utilisateur<br />
<strong>$user_email</strong> : E-mail de l\'utilisateur';

// Informations sur les variables de suppression
$l['mail_remove_info'] = 'Vous pouvez utiliser les variables suivantes :<br />
<strong>$scriptname</strong> : Nom du script<br />
<strong>$path</strong> : Chemin d\'installation<br />
<strong>$version</strong> : Version<br />
<strong>$url</strong> : URL<br />
<strong>$datadirectory</strong> : Répertoire des données<br />
<strong>$wwwdir</strong> : Répertoire Web<br />
<strong>$dbname</strong> : Base de données MySQL<br />
<strong>$dbuser</strong> : Utilisateur MySQL<br />
<strong>$dbhost</strong> : Hôte MySQL<br />
<strong>$dbpass</strong> : Mot de passe MySQL<br />
<strong>$cron</strong> : Tâches CRON<br />
<strong>$time</strong> : Temps d\'installation<br />
<strong>$rem_time</strong> : Temps de suppression<br />
<strong>$sn</strong> : Nom du site (Peut être modifié depuis le panneau d\'administration de '.APP.')<br />
<strong>$user_name</strong> : Nom de l\'utilisateur<br />
<strong>$user_email</strong> : E-mail de l\'utilisateur';

// Variables d'installation obsolètes (de l'ADMIN)
$l['mail_update_info'] = 'Vous pouvez utiliser les variables suivantes :<br />
<strong>$serverip</strong> : IP du serveur<br />
<strong>$installation</strong> : Liste des installations<br />
<strong>$time</strong> : Temps<br />
<strong>$sn</strong> : Nom du site (Peut être modifié depuis le panneau d\'administration de '.APP.')';

// Variables d'installation obsolètes (de CRON)
$l['mail_cron_info'] = 'Vous pouvez utiliser les variables suivantes :<br />
<strong>$serverip</strong> : IP du serveur<br />
<strong>$installation</strong> : Liste des installations pouvant maintenant être mises à jour<br />
<strong>$time</strong> : Temps<br />
<strong>$sn</strong> : Nom du site (Peut être modifié depuis le panneau d\'administration de '.APP.')';

// Variables de modification des détails
$l['mail_editdetail_info'] = 'Vous pouvez utiliser les variables suivantes :<br />
<strong>$path</strong> : Chemin d\'installation<br />
<strong>$url</strong> : URL<br />
<strong>$datadirectory</strong> : Répertoire des données<br />
<strong>$wwwdir</strong> : Répertoire Web<br />
<strong>$wwwurl</strong> : URL Web<br />
<strong>$dbname</strong> : Base de données MySQL<br />
<strong>$dbuser</strong> : Utilisateur MySQL<br />
<strong>$dbhost</strong> : Hôte MySQL<br />
<strong>$dbpass</strong> : Mot de passe MySQL<br />
<strong>$auto_backup</strong> : Sauvegardes automatiques<br />
<strong>$auto_backup_rotation</strong> : Rotation des sauvegardes<br />
<strong>$time</strong> : Temps d\'installation<br />
<strong>$edit_time</strong> : Temps de modification<br />
<strong>$sn</strong> : Nom du site (Peut être modifié depuis le panneau d\'administration de '.APP.')<br />
<strong>$user_name</strong> : Nom de l\'utilisateur<br />
<strong>$user_email</strong> : E-mail de l\'utilisateur';

// Variables de l'email de sauvegarde en arrière-plan
$l['mail_backup_bg_info'] = 'Vous pouvez utiliser les variables suivantes :<br />
<strong>$path</strong> : Chemin d\'installation<br />
<strong>$url</strong> : URL<br />
<strong>$scriptname</strong> : Nom du script<br />
<strong>$backup_file</strong> : Répertoire Web<br />
<strong>$error</strong> : URL Web<br />
<strong>$backup_note</strong> : Note de sauvegarde<br />
<strong>$sn</strong> : Nom du site (Peut être modifié depuis le panneau d\'administration de '.APP.')<br />
<strong>$user_name</strong> : Nom de l\'utilisateur<br />
<strong>$user_email</strong> : E-mail de l\'utilisateur';

// Variables de l'email de sauvegarde
$l['mail_backup_info'] = 'Vous pouvez utiliser les variables suivantes :<br />
<strong>$path</strong> : Chemin d\'installation<br />
<strong>$url</strong> : URL<br />
<strong>$scriptname</strong> : Nom du script<br />
<strong>$backup_file</strong> : Répertoire Web<br />
<strong>$error</strong> : URL Web<br />
<strong>$backup_note</strong> : Note de sauvegarde<br />
<strong>$sn</strong> : Nom du site (Peut être modifié depuis le panneau d\'administration de '.APP.')<br />
<strong>$user_name</strong> : Nom de l\'utilisateur<br />
<strong>$user_email</strong> : E-mail de l\'utilisateur';

// Variables de l'email de sauvegarde échouée
$l['mail_backup_fail_info'] = 'Vous pouvez utiliser les variables suivantes :<br />
<strong>$path</strong> : Chemin d\'installation<br />
<strong>$url</strong> : URL<br />
<strong>$scriptname</strong> : Nom du script<br />
<strong>$backup_file</strong> : Répertoire Web<br />
<strong>$error</strong> : URL Web<br />
<strong>$sn</strong> : Nom du site (Peut être modifié depuis le panneau d\'administration de '.APP.')<br />
<strong>$user_name</strong> : Nom de l\'utilisateur<br />
<strong>$user_email</strong> : E-mail de l\'utilisateur';

// Variables de mise à niveau réussie par l'admin
$l['mail_adminupgrade_success_admin_info'] = 'Vous pouvez utiliser les variables suivantes :<br />
<strong>$scriptname</strong> : Nom du script<br />
<strong>$url</strong> : URL<br />
<strong>$oldversion</strong> : Version actuelle<br />
<strong>$version</strong> : Dernière version<br />
<strong>$user</strong> : Nom d\'utilisateur<br />
<strong>$backup_path</strong> : Chemin de sauvegarde<br />
<strong>$path</strong> : Chemin d\'installation<br />
<strong>$dbname</strong> : Base de données MySQL<br />
<strong>$dbuser</strong> : Utilisateur MySQL<br />
<strong>$dbhost</strong> : Hôte MySQL<br />
<strong>$dbpass</strong> : Mot de passe MySQL<br />
<strong>$error</strong> : Liste des erreurs de restauration<br />
<strong>$upgrade_error</strong> : Liste des erreurs de mise à niveau<br />
<strong>$sn</strong> : Nom du site (Peut être modifié depuis le panneau d\'administration de '.APP.')
';

$l['mail_adminupgrade_success_admin_info'] = $l['mail_adminupgrade_success_admin_info'];
$l['mail_adminupgrade_fail_admin_info'] = $l['mail_adminupgrade_success_admin_info'];
$l['mail_adminupgrade_restore_fail_admin_info'] = $l['mail_adminupgrade_success_admin_info'];

$l['mail_adminupgrade_success_user_info'] = $l['mail_adminupgrade_success_admin_info'];
$l['mail_adminupgrade_fail_user_info'] = $l['mail_adminupgrade_success_admin_info'];
$l['mail_adminupgrade_restore_fail_user_info'] = $l['mail_adminupgrade_success_admin_info'];

$l['mail_autoupgrade_success_user_info'] = $l['mail_adminupgrade_success_admin_info'];
$l['mail_autoupgrade_fail_user_info'] = $l['mail_adminupgrade_success_admin_info'];
$l['mail_autoupgrade_restore_fail_user_info'] = $l['mail_adminupgrade_success_admin_info'];

$l['mail_userupgrade_success_user_info'] = $l['mail_adminupgrade_success_admin_info'];
$l['mail_userupgrade_fail_user_info'] = $l['mail_adminupgrade_success_admin_info'];
$l['mail_userupgrade_restore_fail_user_info'] = $l['mail_adminupgrade_success_admin_info'];

$l['mail_autoupgrade_backup_fail_info'] = 'Vous pouvez utiliser les variables suivantes :<br />
<strong>$scriptname</strong> : Nom du script<br />
<strong>$url</strong> : URL<br />
<strong>$oldversion</strong> : Version actuelle<br />
<strong>$version</strong> : Dernière version<br />
<strong>$user</strong> : Nom d\'utilisateur<br />
<strong>$error</strong> : Liste des erreurs<br />
<strong>$sn</strong> : Nom du site (Peut être modifié depuis le panneau d\'administration de '.APP.')
';

$l['mail_autoupgrade_precheck_fail_info'] = $l['mail_autoupgrade_backup_fail_info'];

// Variables de sauvegarde automatique réussie
$l['mail_auto_backup_info'] = 'Vous pouvez utiliser les variables suivantes :<br />
<strong>$scriptname</strong> : Nom du script<br />
<strong>$path</strong> : Chemin d\'installation<br />
<strong>$url</strong> : URL d\'installation<br />
<strong>$backup_file</strong> : Chemin de sauvegarde<br />
<strong>$sn</strong> : Nom du site (Peut être modifié depuis le panneau d\'administration de '.APP.')
';

// Variables de sauvegarde automatique échouée
$l['mail_auto_backup_fail_info'] = 'Vous pouvez utiliser les variables suivantes :<br />
<strong>$scriptname</strong> : Nom du script<br />
<strong>$path</strong> : Chemin d\'installation<br />
<strong>$url</strong> : URL d\'installation<br />
<strong>$backup_file</strong> : Chemin de sauvegarde<br />
<strong>$error</strong> : Liste des erreurs<br />
<strong>$sn</strong> : Nom du site (Peut être modifié depuis le panneau d\'administration de '.APP.')
';

$l['mail_install_classes_info'] = 'Vous pouvez utiliser les variables suivantes :<br />
<strong>$path</strong> : Chemin d\'installation<br />
<strong>$user_name</strong> : Nom de l\'utilisateur<br />
<strong>$user_email</strong> : E-mail de l\'utilisateur';

$l['mail_restore_info'] = 'Vous pouvez utiliser les variables suivantes :<br />
<strong>$path</strong> : Chemin d\'installation<br />
<strong>$url</strong> : URL d\'installation<br />
<strong>$user_name</strong> : Nom de l\'utilisateur<br />
<strong>$user_email</strong> : E-mail de l\'utilisateur';

$l['mail_restore_fail_info'] = 'Vous pouvez utiliser les variables suivantes :<br />
<strong>$path</strong> : Chemin d\'installation<br />
<strong>$url</strong> : URL d\'installation<br />
<strong>$user_name</strong> : Nom de l\'utilisateur<br />
<strong>$user_email</strong> : E-mail de l\'utilisateur';

$l['mail_restore_bg_info'] = 'Vous pouvez utiliser les variables suivantes :<br />
<strong>$path</strong> : Chemin d\'installation<br />
<strong>$url</strong> : URL d\'installation<br />
<strong>$user_name</strong> : Nom de l\'utilisateur<br />
<strong>$user_email</strong> : E-mail de l\'utilisateur';

$l['mail_import_info'] = 'Vous pouvez utiliser les variables suivantes :<br />
<strong>$path</strong> : Chemin d\'installation<br />
<strong>$url</strong> : URL d\'installation<br />
<strong>$user_name</strong> : Nom de l\'utilisateur<br />
<strong>$user_email</strong> : E-mail de l\'utilisateur';

$l['mail_import_fail_info'] = 'Vous pouvez utiliser les variables suivantes :<br />
<strong>$path</strong> : Chemin d\'installation<br />
<strong>$url</strong> : URL d\'installation<br />
<strong>$user_name</strong> : Nom de l\'utilisateur<br />
<strong>$user_email</strong> : E-mail de l\'utilisateur';

$l['mail_import_bg_info'] = 'Vous pouvez utiliser les variables suivantes :<br />
<strong>$path</strong> : Chemin d\'installation<br />
<strong>$url</strong> : URL d\'installation<br />
<strong>$user_name</strong> : Nom de l\'utilisateur<br />
<strong>$user_email</strong> : E-mail de l\'utilisateur';

// Informations sur les variables de staging
$l['mail_staging_info'] = 'Vous pouvez utiliser les variables suivantes :<br />
<strong>$scriptname</strong> : Nom du script<br />
<strong>$live_path</strong> : Chemin de l\'installation originale<br />
<strong>$live_url</strong> : URL de l\'installation originale<br />
<strong>$path</strong> : Chemin de l\'installation de staging<br />
<strong>$version</strong> : Version<br />
<strong>$url</strong> : URL de l\'installation de staging<br />
<strong>$admin_url</strong> : URL Admin<br />
<strong>$datadirectory</strong> : Répertoire des données<br />
<strong>$dbname</strong> : Base de données MySQL<br />
<strong>$dbuser</strong> : Utilisateur MySQL<br />
<strong>$dbhost</strong> : Hôte MySQL<br />
<strong>$dbpass</strong> : Mot de passe MySQL<br />
<strong>$cron</strong> : Commande Cron<br />
<strong>$time</strong> : Temps d\'installation<br />
<strong>$sn</strong> : Nom du site (Peut être modifié depuis le panneau d\'administration de '.APP.')<br />
<strong>$user_name</strong> : Nom de l\'utilisateur<br />
<strong>$user_email</strong> : E-mail de l\'utilisateur';

// Informations sur les variables de push to live
$l['mail_pushtolive_info'] = 'Vous pouvez utiliser les variables suivantes :<br />
<strong>$scriptname</strong> : Nom du script<br />
<strong>$live_path</strong> : Chemin de l\'installation originale<br />
<strong>$live_url</strong> : URL de l\'installation originale<br />
<strong>$path</strong> : Chemin de l\'installation poussée<br />
<strong>$version</strong> : Version<br />
<strong>$url</strong> : URL de l\'installation poussée<br />
<strong>$admin_url</strong> : URL Admin<br />
<strong>$datadirectory</strong> : Répertoire des données<br />
<strong>$dbname</strong> : Base de données MySQL<br />
<strong>$dbuser</strong> : Utilisateur MySQL<br />
<strong>$dbhost</strong> : Hôte MySQL<br />
<strong>$dbpass</strong> : Mot de passe MySQL<br />
<strong>$cron</strong> : Commande Cron<br />
<strong>$time</strong> : Temps d\'installation<br />
<strong>$sn</strong> : Nom du site (Peut être modifié depuis le panneau d\'administration de '.APP.')<br />
<strong>$user_name</strong> : Nom de l\'utilisateur<br />
<strong>$user_email</strong> : E-mail de l\'utilisateur';