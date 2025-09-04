<?php

//////////////////////////////////////////////////////////////
//===========================================================
// addbackuploc_lang.php
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

// Chaînes d'erreurs
$l['ftp_error-1'] = 'Impossible de résoudre le nom de domaine';
$l['ftp_error-2'] = 'Impossible de se connecter avec les détails FTP spécifiés';
$l['ftp_error-3'] = 'Le chemin FTP spécifié n\'existe pas';
$l['ftp_error'] = 'Impossible de se connecter au serveur FTP';
$l['no_ftp_user'] = 'Aucun utilisateur FTP spécifié';
$l['no_backup_loc'] = 'Aucun emplacement de sauvegarde spécifié';
$l['no_backup_loc_name'] = 'Aucun nom d\'emplacement de sauvegarde spécifié';
$l['no_protocol'] = 'Protocole invalide';
$l['no_server_host'] = 'Aucun hôte serveur spécifié';
$l['record_exists'] = 'Un emplacement de sauvegarde avec le même chemin existe déjà';

// Chaînes de thème
$l['<title>'] = 'Ajouter un emplacement de sauvegarde';
$l['location_name'] = 'Nom de l\'emplacement';
$l['location_name_exp'] = 'Choisissez un nom pour votre emplacement de sauvegarde à des fins de référence';
$l['protocol'] = 'Service';
$l['protocol_exp'] = 'Sélectionnez le protocole par lequel nous communiquerons';
$l['server_host'] = 'Hôte du serveur (obligatoire)';
$l['server_host_exp'] = 'Entrez l\'hôte du serveur, par exemple ftp.mondomaine.com ou une adresse IP';
$l['port'] = 'Port';
$l['port_exp'] = 'Entrez le port pour vous connecter (Le port FTP par défaut est <b>21</b>)';
$l['ftp_user'] = 'Nom d\'utilisateur';
$l['ftp_user_exp'] = 'Le nom d\'utilisateur de votre compte FTP';
$l['ftp_pass'] = 'Mot de passe';
$l['ftp_pass_exp'] = 'Le mot de passe de votre compte FTP';
$l['backup_loc'] = 'Emplacement de la sauvegarde';
$l['rel_backup_loc_exp'] = 'Chemin relatif depuis le répertoire de l\'utilisateur FTP, par exemple /backups'; 
$l['abs_backup_loc_exp'] = 'Chemin absolu vers le répertoire de sauvegarde, par exemple /home/NOMUTILISATEUR/backups'; 
$l['dropbox_backup_loc_exp'] = 'Répertoire de sauvegarde par exemple /backups ou vous pouvez laisser vide pour permettre à '.APP.' de gérer le répertoire de sauvegarde';
$l['add_backup_loc'] = 'Ajouter un emplacement de sauvegarde';
$l['backup_loc_saved'] = 'Emplacement de sauvegarde ajouté avec succès';
$l['ftp'] = 'FTP';
$l['return_settings'] = 'Retour aux paramètres';
$l['invalid_backup_loc'] = 'Le chemin de sauvegarde n\'est pas un chemin absolu. Veuillez fournir un chemin absolu'; 
$l['no_pass_pri'] = 'Veuillez fournir un mot de passe ou une clé privée'; 
$l['off_rbackup'] = 'La sauvegarde sur emplacement distant est désactivée par l\'administrateur';
$l['dropbox'] = 'Dropbox';
$l['dropbox_authorization'] = 'Autorisation';
$l['dropbox_authorize'] = 'Autoriser';
$l['dropbox_authorization_exp'] = 'Accordez l\'accès à l\'application pour créer des sauvegardes dans votre compte Dropbox. Cliquez sur le bouton <strong style="color:#000">Autoriser</strong> et suivez les étapes. Notez le code généré et entrez le même dans la zone de texte <strong style="color:#000">"Code d\'autorisation"</strong> ci-dessous';
$l['dropbox_code'] = 'Code d\'authentification';
$l['dropbox_code_exp'] = 'Entrez le code généré après avoir autorisé l\'accès via le bouton <strong style="color:#000">Autoriser</strong> ci-dessus';
$l['dropbox_auth_tooltip'] = 'Cliquez sur ce bouton pour autoriser l\'accès à Dropbox';
$l['no_dropbox_access'] = 'Veuillez autoriser l\'application '.APP.' dans votre Dropbox';
$l['token_gen_failed'] = 'Échec de la génération du jeton d\'accès à Dropbox';
$l['dropbox_backup_loc'] = 'Lieu de sauvegarde (facultatif)';

$l['ftps'] = 'FTPS';
$l['sftp'] = 'SFTP';
$l['auth_password'] = 'Méthode d\'authentification';
$l['auth_password_exp'] = 'Sélectionnez la méthode d\'authentification';
$l['private_key'] = 'Clé privée';
$l['private_key_exp'] = 'Collez la clé privée ici';
$l['passphrase'] = 'Phrase de passe';
$l['passphrase_exp'] = 'Phrase de passe pour la clé privée (optionnelle)';
$l['auth_method_pass'] = 'Mot de passe';
$l['auth_method_key'] = 'Clé SSH';

$l['gdrive'] = 'Google Drive';
$l['gdrive_auth_message'] = 'Vous serez invité à autoriser '.APP.' à accéder à votre Google Drive lors de la soumission du formulaire';
$l['gdrive_token_gen_failed'] = 'Échec de la génération du jeton d\'accès à Google Drive';
$l['gdrive_err_access_denied'] = 'Il semble que vous ayez annulé la procédure d\'autorisation';
$l['ampps_notify_premium'] = 'Cette fonctionnalité est disponible dans la version premium d\'AMPPS. Veuillez acheter <b><a href="https://ampps.com/pricing/">AMPPS Premium</a></b>';

$l['rbackup_protocol_disabled'] = 'La sauvegarde sur <b>&soft-1;</b> est désactivée par l\'administrateur'; 

$l['webdav'] = 'WebDAV';
$l['webdav_port_exp'] = 'Entrez le port pour vous connecter (le port WebDAV par défaut est <b>80</b> pour non sécurisé et <b>443</b> pour sécurisé)';
$l['webdav_ftp_user_exp'] = 'Le nom d\'utilisateur de votre compte WebDAV';
$l['webdav_ftp_pass_exp'] = 'Le mot de passe de votre compte WebDAV';
$l['webdav_backup_loc_exp'] = 'Chemin relatif depuis le répertoire de l\'utilisateur WebDAV, par exemple /backups';
$l['webdav_server_host_exp'] = 'Entrez l\'hôte du serveur, par exemple webdav.mondomaine.com';
$l['no_webdav_connect'] = 'Échec de la connexion au serveur WebDAV';

$l['onedrive'] = 'Microsoft OneDrive';
$l['onedrive_auth_message'] = 'Vous serez invité à autoriser '.APP.' à accéder à votre OneDrive lors de la soumission du formulaire';
$l['onedrive_err_access_denied'] = 'Il semble que vous ayez annulé la procédure d\'autorisation';
$l['onedrive_token_gen_failed'] = 'Échec de la génération du jeton d\'accès OneDrive';
$l['aws_s3bucket'] = 'Amazon S3';
$l['aws_endpoint'] = 'Point de terminaison AWS S3';
$l['aws_endpoint_exp'] = 'Entrez votre point de terminaison AWS S3, par exemple "s3.amazonaws.com"<br /> Pour plus d\'informations <a href="https://docs.aws.amazon.com/general/latest/gr/s3.html" target="_blank">Cliquez ici</a>';
$l['aws_region'] = 'Région AWS S3';
$l['aws_region_exp'] = 'Entrez votre région AWS S3, par exemple "us-east-1"<br /> Pour plus d\'informations <a href="https://docs.aws.amazon.com/general/latest/gr/s3.html" target="_blank">Cliquez ici</a>';
$l['aws_bucketname'] = 'Nom du seau AWS S3';
$l['aws_accessKey'] = 'Clé d\'accès AWS S3';
$l['aws_secretKey'] = 'Clé secrète AWS S3';
$l['aws_backup_loc'] = 'Emplacement de sauvegarde AWS S3 (facultatif)';
$l['aws_backup_loc_exp'] = 'Répertoire de sauvegarde, par exemple /backups ou vous pouvez laisser vide pour permettre à '.APP.' de gérer le répertoire de sauvegarde';
$l['aws_bucketname_exp'] = 'Entrez le nom du seau AWS S3 où vous souhaitez créer des sauvegardes Softaculous. Si le seau n\'est pas présent, il sera créé automatiquement<br /> Pour les règles de nommage des seaux <a href="https://docs.aws.amazon.com/AmazonS3/latest/userguide/bucketnamingrules.html" target="_blank">Cliquez ici</a>';
$l['no_accessKey'] = 'Veuillez fournir la clé d\'accès AWS S3';
$l['no_secretKey'] = 'Veuillez fournir la clé secrète AWS S3';
$l['no_endpoint'] = 'Veuillez fournir le point de terminaison AWS S3';
$l['no_region'] = 'Veuillez fournir la région AWS S3';
$l['no_bucket'] = 'Veuillez fournir le nom du seau AWS S3';
$l['create_bucket_failed'] = 'Échec de la création du seau \'&soft-1;\'';