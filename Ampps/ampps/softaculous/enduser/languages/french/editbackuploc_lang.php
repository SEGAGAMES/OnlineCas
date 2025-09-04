<?php

//////////////////////////////////////////////////////////////
//===========================================================
// editbackuploc_lang.php
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
$l['ftp_error-1'] = 'Impossible de résoudre le nom de domaine';
$l['ftp_error-2'] = 'Impossible de se connecter avec les détails FTP spécifiés';
$l['ftp_error-3'] = 'Le chemin FTP spécifié n\'existe pas';
$l['ftp_error'] = 'Impossible de se connecter au serveur FTP';
$l['no_ftp_user'] = 'Aucun utilisateur FTP spécifié';
$l['no_backup_loc'] = 'Aucun emplacement de sauvegarde spécifié';
$l['no_backup_loc_name'] = 'Aucun nom d\'emplacement de sauvegarde spécifié';
$l['no_protocol'] = 'Protocole invalide';
$l['no_server_host'] = 'Aucun hôte de serveur spécifié';
$l['record_exists'] = 'Un emplacement de sauvegarde avec le même chemin existe déjà';

// Chaînes de thème
$l['<title>'] = 'Modifier l\'emplacement de sauvegarde';
$l['edit_backup'] = 'Modifier l\'emplacement de sauvegarde';
$l['location_name'] = 'Nom de l\'emplacement';
$l['location_name_exp'] = 'Choisissez un nom pour l\'emplacement de sauvegarde pour votre référence';
$l['protocol'] = 'Protocole';
$l['protocol_exp'] = 'Sélectionnez le protocole par lequel '.APP.' communiquera';
$l['server_host'] = 'Hôte du serveur (Requis)';
$l['server_host_exp'] = 'Entrez l\'hôte du serveur, par exemple ftp.mondomaine.com';
$l['port'] = 'Port';
$l['port_exp'] = 'Entrez le port pour vous connecter (le port FTP par défaut est <b>21</b>)';
$l['ftp_user'] = 'Nom d\'utilisateur';
$l['ftp_user_exp'] = 'Le nom d\'utilisateur de votre compte FTP';
$l['ftp_pass'] = 'Mot de passe';
$l['ftp_pass_exp'] = 'Le mot de passe de votre compte FTP';
$l['backup_loc'] = 'Emplacement de sauvegarde';
$l['rel_backup_loc_exp'] = 'Chemin relatif depuis le répertoire de l\'utilisateur FTP, par exemple /backups';
$l['abs_backup_loc_exp'] = 'Chemin absolu vers le répertoire de sauvegarde, par exemple /home/NOMUTILISATEUR/backups';
$l['dropbox_backup_loc_exp'] = 'Répertoire de sauvegarde, par exemple /backups, ou vous pouvez laisser vide pour permettre à '.APP.' de gérer le répertoire de sauvegarde';
$l['edit_backup_loc'] = 'Enregistrer les modifications';
$l['backup_loc_saved'] = 'Les détails de l\'emplacement de sauvegarde ont été enregistrés avec succès';
$l['ftp'] = 'FTP';
$l['return_settings'] = 'Retour aux paramètres';
$l['invalid_backup_loc'] = 'Le chemin de sauvegarde n\'est pas un chemin absolu. Veuillez fournir un chemin absolu'; 
$l['no_pass_pri'] = 'Veuillez fournir soit un mot de passe, soit une clé privée'; 
$l['off_rbackup'] = 'La sauvegarde sur emplacement distant est désactivée par l\'administrateur';
$l['no_backup_loc_id'] = 'L\'ID de l\'emplacement de sauvegarde n\'a pas été envoyé';
$l['invalid_backup_loc_id'] = 'L\'ID de l\'emplacement de sauvegarde est invalide';

$l['dropbox'] = 'Dropbox';
$l['dropbox_authorization'] = 'Autorisation';
$l['dropbox_authorize'] = 'Réautoriser';
$l['dropbox_authorization_exp'] = 'Cliquez pour réautoriser l\'accès de l\'application '.APP.' à Dropbox pour créer des sauvegardes dans votre compte. Cliquez sur le bouton <b>Réautoriser</b> et suivez les étapes. Notez le code généré et entrez-le dans la zone de texte <b>Code d\'authentification</b> ci-dessous';
$l['dropbox_code'] = 'Code d\'authentification';
$l['dropbox_code_exp'] = 'Entrez le code généré après avoir autorisé l\'accès via le bouton <b>Réautoriser</b> ci-dessus';
$l['dropbox_auth_tooltip'] = 'Cliquez sur ce bouton pour autoriser l\'accès à Dropbox';
$l['no_dropbox_access'] = 'Veuillez autoriser l\'application '.APP.' dans votre Dropbox';
$l['token_gen_failed'] = 'Échec de la génération du jeton d\'accès Dropbox';
$l['dropbox_backup_loc'] = 'Emplacement de sauvegarde (facultatif)';

$l['ftps'] = 'FTPS';
$l['sftp'] = 'SFTP';
$l['auth_password'] = 'Méthode d\'authentification';
$l['auth_password_exp'] = 'Sélectionnez la méthode d\'authentification';
$l['private_key'] = 'Clé privée';
$l['private_key_exp'] = 'Collez la clé privée ici';
$l['passphrase'] = 'Phrase secrète';
$l['passphrase_exp'] = 'Phrase secrète pour la clé privée (facultatif)';
$l['auth_method_pass'] = 'Mot de passe';
$l['auth_method_key'] = 'Clé SSH';

$l['gdrive'] = 'Google Drive';
$l['rbackup_protocol_disabled'] = 'La sauvegarde sur <b>&soft-1;</b> est désactivée par l\'administrateur';

$l['webdav'] = 'WebDAV';
$l['webdav_port_exp'] = 'Entrez le port pour vous connecter (le port WebDAV par défaut est <b>80</b> pour non sécurisé et <b>443</b> pour sécurisé)';
$l['webdav_ftp_user_exp'] = 'Le nom d\'utilisateur de votre compte WebDAV';
$l['webdav_ftp_pass_exp'] = 'Le mot de passe de votre compte WebDAV';
$l['webdav_backup_loc_exp'] = 'Chemin relatif depuis le répertoire de l\'utilisateur WebDAV, par exemple /backups';
$l['webdav_server_host_exp'] = 'Entrez l\'hôte du serveur, par exemple webdav.mondomaine.com';
$l['no_webdav_connect'] = 'Échec de la connexion au serveur WebDAV';

$l['onedrive'] = 'Microsoft OneDrive';
$l['aws_s3bucket'] = 'Amazon S3';
$l['aws_endpoint'] = 'Point de terminaison AWS S3';
$l['aws_endpoint_exp'] = 'Entrez votre point de terminaison AWS S3, par exemple "s3.amazonaws.com"<br /> Pour plus d\'informations <a href="https://docs.aws.amazon.com/general/latest/gr/s3.html" target="_blank">Cliquez ici</a>';
$l['aws_region'] = 'Région AWS S3';
$l['aws_region_exp'] = 'Entrez votre région AWS S3, par exemple "us-east-1"<br /> Pour plus d\'informations <a href="https://docs.aws.amazon.com/general/latest/gr/s3.html" target="_blank">Cliquez ici</a>';
$l['aws_bucketname'] = 'Nom du bucket AWS S3';
$l['aws_accessKey'] = 'Clé d\'accès AWS S3';
$l['aws_secretKey'] = 'Clé secrète AWS S3';
$l['aws_backup_loc'] = 'Emplacement de sauvegarde AWS S3 (facultatif)';
$l['aws_backup_loc_exp'] = 'Répertoire de sauvegarde, par exemple /backups, ou vous pouvez laisser vide pour permettre à '.APP.' de gérer le répertoire de sauvegarde';
$l['aws_bucketname_exp'] = 'Entrez le nom du bucket AWS S3 où vous souhaitez créer des sauvegardes Softaculous. Si le bucket n\'est pas présent, il sera créé automatiquement<br /> Pour les règles de nommage des buckets <a href="https://docs.aws.amazon.com/AmazonS3/latest/userguide/bucketnamingrules.html" target="_blank">Cliquez ici</a>';
$l['no_accessKey'] = 'Veuillez fournir la clé d\'accès AWS S3';
$l['no_secretKey'] = 'Veuillez fournir la clé secrète AWS S3';
$l['no_endpoint'] = 'Veuillez fournir le point de terminaison AWS S3';
$l['no_region'] = 'Veuillez fournir la région AWS S3';
$l['no_bucket'] = 'Veuillez fournir le nom du bucket AWS S3';
$l['create_bucket_failed'] = 'Échec de la création du bucket \'&soft-1;\'';