<?php

//////////////////////////////////////////////////////////////
//===========================================================
// aefer_editdomain_lang.php
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

$l['no_domain'] = 'Aucun nom de domaine spécifié';
$l['alreay_exists'] = 'Le domaine soumis existe déjà dans votre compte.';
$l['no_ftp_user'] = 'Aucun utilisateur FTP spécifié';
$l['no_ftp_pass'] = 'Aucun mot de passe FTP spécifié';
$l['no_ftp_path'] = 'Aucun chemin FTP spécifié';
$l['no_data_dir'] = 'Aucun répertoire de données spécifié';
$l['wrong_ftp_path'] = 'Le chemin FTP soumis est incorrect et ne pointe pas vers le domaine donné.';
$l['no_id'] = 'Aucun ID trouvé !';
$l['no_backup_path'] = 'Aucun chemin de sauvegarde spécifié';
$l['ftp_error-1'] = 'Impossible de résoudre le nom de domaine';
$l['ftp_error-2'] = 'Impossible de se connecter avec les détails FTP spécifiés';
$l['ftp_error-3'] = 'Le chemin FTP spécifié n\'existe pas';
$l['no_port'] = 'Aucun port spécifié';
$l['no_pub_allowed'] = 'La clé publique n\'est pas requise lors de l\'authentification par mot de passe';
$l['no_public_key'] = 'Aucun chemin vers la clé publique trouvé';
$l['no_private_key'] = 'Aucun chemin vers la clé privée trouvé';
$l['err_sftp_only'] = 'Seul SFTP permet l\'authentification par clés';
$l['no_pub_pri'] = 'Clé publique ou privée non trouvée';
$l['no_domain_exist'] = 'Le domaine n\'existe pas';
$l['not_allowed'] = 'Vous n\'êtes pas autorisé à modifier ce domaine';
$l['ftp_error'] = 'Impossible de se connecter au serveur FTP';
$l['err_upload_remote'] = 'Impossible de télécharger le fichier vers le chemin FTP';
$l['err_fetch_file'] = 'Impossible d\'accéder au fichier téléchargé sur le domaine';
$l['err_fetch_path'] = 'Impossible de récupérer le chemin des données reçues';
$l['invalid_domain_id'] = 'ID de domaine invalide';

// Chaînes de thème
$l['<title>'] = 'Modifier un Domaine';
$l['edit_domain'] = 'Modifier le Domaine';
$l['domain'] = 'Nom du Domaine';
$l['domain_exp'] = 'Entrez un nom de domaine valide (sans http://) par exemple, mondomaine.com';
$l['ftp_user'] = 'Nom d\'utilisateur';
$l['ftp_user_exp'] = 'Le nom d\'utilisateur de votre compte FTP';
$l['ftp_pass'] = 'Mot de passe';
$l['ftp_pass_exp'] = 'Le mot de passe de votre compte FTP';
$l['ftp_path'] = 'Chemin';
$l['ftp_path_exp'] = 'Le chemin FTP vers votre domaine par exemple, /public_html';
$l['backup_path'] = 'Chemin de Sauvegarde';
$l['backup_path_exp'] = 'Le chemin de sauvegarde vers votre domaine par exemple, /backups';
$l['data_dir'] = 'Répertoire de Données';
$l['data_dir_exp'] = 'Chemin complet vers le répertoire de données par exemple, /home/UTILISATEUR/dossierdonnees<br/>Certains scripts comme Elgg, Moodle, etc nécessitent un dossier non accessible via le web.<br/>Ce dossier sera utilisé à cet effet.';
$l['ins_email_exp'] = 'Envoyer un email contenant les détails de l\'installation lorsque vous installez un nouveau logiciel';
$l['submit_edit'] = 'Enregistrer et Mettre à Jour';
$l['settings_saved'] = 'Votre domaine a été enregistré avec succès';
$l['show_all_dom'] = 'Afficher tous les domaines';
$l['port'] = 'Port';
$l['port_exp'] = 'Entrez le port de connexion';
$l['protocol'] = 'Protocole';
$l['protocol_exp'] = 'Sélectionnez le protocole par lequel Softaculous communiquera';
$l['auth_password'] = 'Méthode d\'authentification'; 
$l['auth_password_exp'] = 'Sélectionnez la méthode d\'authentification'; 
$l['private_key'] = 'Clé Privée'; 
$l['private_key_exp'] = 'Collez la clé privée ici'; 
$l['passphrase'] = 'Phrase secrète';
$l['passphrase_exp'] = 'Phrase secrète pour la clé privée cryptée (facultatif)';
$l['sftp_path'] = 'Répertoire Web';
$l['sftp_path_exp'] = 'Chemin absolu vers le répertoire web de l\'utilisateur par exemple, /home/UTILISATEUR/public_html';
$l['sbackup_path_exp'] = 'Chemin absolu vers le répertoire de sauvegarde par exemple, /home/UTILISATEUR/backups';
$l['server_host'] = 'Hôte du Serveur (Facultatif)';
$l['server_host_exp2'] = 'Entrez le nom de votre hôte de serveur';
$l['server_host_exp'] = '<b>SI</b> votre nom de domaine et votre hôte de serveur ne sont pas identiques, entrez l\'hôte du serveur par exemple, ftp.mondomaine.com';
$l['ftp_pass_opt'] = 'Laissez vide si vous ne souhaitez pas mettre à jour le mot de passe.';
$l['auth_method_pass'] = 'Mot de passe';
$l['auth_method_key'] = 'Clé SSH';
$l['no_pass_pri'] = 'Veuillez fournir soit un mot de passe, soit une clé privée';
$l['err_reconnect'] = 'Impossible de se reconnecter à la base de données';