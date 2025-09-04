<?php

//////////////////////////////////////////////////////////////
//===========================================================
// import_lang.php
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

$l['no_info_file'] = 'Le fichier INFO.XML n\'a pu être trouvé ! Merci de signaler cette erreur à l\'administrateur du serveur.';
$l['incompatible'] = 'Ce logiciel nécessite une version supérieure de '.APP.'. Merci de le signaler à l\'administrateur du serveur.';
$l['no_functions'] = 'Le fichier comprenant les fonctions d\'importation n\'a pas été trouvé ! Merci d\'en informer l\'administrateur du serveur.';
$l['no_softdomain'] = 'Vous n\'avez pas choisi le domaine du logiciel à importer.';
$l['disable_import'] = 'La fonction d\'importation a été désactivée par l\'administrateur';
$l['invalid_script'] = 'ID de script invalide';

// Chaînes de thème
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['import_soft'] = 'Importer un logiciel';
$l['choose_domain'] = 'Choisir le domaine';
$l['choose_domain_exp'] = 'Merci de choisir le domaine où le logiciel est déjà installé.';
$l['in_directory'] = 'Dans le dossier';
$l['in_directory_exp'] = 'Ce dossier est relatif à votre domaine. Par exemple, pour importer un logiciel installé à l\'adresse http://mondomaine/dir/, tapez simplement <b>dir</b>. Pour importer un script installé sur http://mydomain/, laissez ce champ vide.';
$l['softsubmit'] = 'Importer';
$l['congrats'] = 'Félicitations, le script/logiciel a été correctement importé.';
$l['succesful'] = 'a été correctement importé à';
$l['admin_url'] = 'URL du panneau d\'administration';
$l['enjoy'] = 'Nous espérons que ce processus d\'importation fut facile.';
$l['import_notes'] = 'Ce qui suit contient des notes importantes et nous vous recommandons très fortement de les lire.';
$l['please_note'] = '<b>NOTE</b> : '.APP.' est simplement un outil d\'installation automatique et ne fournit aucun support pour les scripts / logiciels importés. Merci de visiter le site de son développeur pour tout type de support.';
$l['regards'] = 'Cordialement';
$l['softinstaller'] = APP.' Auto Installer';
$l['return'] = 'Retourner à l\'aperçu';
$l['return_to_wpm'] = 'Retour à la gestion de WordPress';

$l['choose_protocol'] = 'Choisissez un protocole';
$l['choose_protocol_exp'] = 'Si vous avez un certificat SSL, optez pour HTTPS.';
$l['no_https'] = 'Un certificat SSL de confiance n\'a pas été trouvé';
$l['wrong_softdomain'] = 'Le chemin du domaine que vous avez sélectionné est introuvable.';

// Importation à distance
$l['server_host'] = 'Hôte du serveur (Optionnel)';
$l['server_host_exp'] = '<b>SI</b> votre nom de domaine et l\'hôte du serveur ne sont pas les mêmes, entrez l\'hôte du serveur, par exemple ftp.mondomaine.com';
$l['protocol'] = 'Protocole';
$l['protocol_exp'] = 'Sélectionnez le protocole par lequel Softaculous communiquera';
$l['port'] = 'Port';
$l['port_exp'] = 'Entrez le port pour vous connecter';
$l['domain'] = 'Nom de domaine';
$l['domain_exp'] = 'Entrez un nom de domaine valide, par exemple mondomaine.com';
$l['ftp_user'] = 'Nom d\'utilisateur';
$l['ftp_user_exp'] = 'Le nom d\'utilisateur de votre compte FTP';
$l['ftp_pass'] = 'Mot de passe';
$l['ftp_pass_exp'] = 'Le mot de passe de votre compte FTP';
$l['ftp_path'] = 'Chemin';
$l['ftp_path_exp'] = 'Chemin relatif au répertoire accessible par le web de l\'utilisateur, par exemple /public_html';
$l['Installed_path'] = 'Répertoire d\'installation (Optionnel)';
$l['Installed_path_exp'] = 'Répertoire d\'installation, par exemple blog si vous avez installé le script dans /public_html/blog';
$l['wrong_ftp_path'] = 'Le chemin FTP spécifié n\'existe pas';
$l['ftp_error-1'] = 'Impossible de résoudre le nom de domaine';
$l['ftp_error-2'] = 'Impossible de se connecter avec les détails FTP spécifiés';
$l['ftp_error-3'] = 'Le chemin FTP spécifié n\'existe pas';
$l['imp_err'] = 'Il y a eu des erreurs lors de l\'importation du logiciel installé à &soft-1;';
$l['remote_import'] = 'Le processus d\'importation de votre installation a commencé en arrière-plan. Vous recevrez une notification par courriel sur l\'état une fois le processus d\'importation terminé.';
$l['db_err'] = 'Impossible de se connecter à la base de données';
$l['remote_dir_err'] = 'Le répertoire d\'installation distant n\'existe pas';
$l['err_db_create'] = 'Une erreur est survenue lors de la création de la base de données';
$l['dest_dir_err'] = 'Le répertoire de destination existe déjà';
$l['source'] = 'Source';
$l['destination'] = 'Destination';
$l['auth_password'] = 'Méthode d\'authentification'; 
$l['auth_password_exp'] = 'Sélectionnez la méthode d\'authentification'; 
$l['private_key'] = 'Clé privée';
$l['private_key_exp'] = 'Collez la clé privée ici';
$l['passphrase'] = 'Phrase secrète';
$l['passphrase_exp'] = 'Phrase secrète pour la clé privée chiffrée (optionnel)';
$l['database_name'] = 'Nom de la base de données';
$l['database_name_exp'] = 'Tapez le nom de la base de données à créer pour l\'installation';
$l['database_exists'] = 'La base de données existe déjà. Veuillez choisir un autre nom';
$l['databaseuser_exists'] = 'L\'utilisateur de la base de données existe déjà';
$l['db_limit_crossed'] = 'Le nombre maximum de bases de données que vous pouvez créer a été atteint, donc l\'importation ne peut pas continuer';
$l['empty_db'] = 'Le champ du nom de la base de données est vide. Veuillez entrer un nom de base de données';
$l['adv_option'] = 'Options avancées';
$l['database_name'] = 'Nom de la base de données';
$l['database_name_exp'] = 'Tapez le nom de la base de données à créer pour l\'installation';
$l['db_name_long'] = 'Le nom de la base de données ne peut pas dépasser 7 caractères. Veuillez choisir un nom de base de données plus court';
$l['db_alpha_num'] = 'Seuls les caractères alphanumériques sont autorisés pour le nom de la base de données';
$l['remote_btn'] = 'Importer depuis un serveur distant';
$l['local_btn'] = 'Importer une installation existante de ce serveur';
$l['checking_data'] = 'Vérification des données soumises';
$l['fetching_remote_db'] = 'Récupération des détails de la base de données depuis le serveur distant';
$l['create_db'] = 'Création de la base de données';
$l['fetching_remote_files'] = 'Importation des fichiers depuis le serveur distant';
$l['import_complete'] = 'Importation terminée';
$l['import_script'] = 'Importation';
$l['no_remote_import'] = 'L\'importation à distance n\'est pas prise en charge pour ce script';
$l['overwrite'] = 'Écraser les fichiers';
$l['some_files_exist'] = 'L\'installation ne peut pas continuer car les fichiers suivants existent déjà dans le dossier cible : ';
$l['delete_files'] = 'Veuillez supprimer ces fichiers ou choisir un autre dossier.';
$l['overwrite_exist'] = '<b>OU</b> <br /><input type="checkbox" name="overwrite_existing" id="overwrite_existing" />&nbsp;&nbsp;<b><span style="color:#000;">Cochez la case pour écraser tous les fichiers et continuer</span></b>';
$l['sftp_path'] = 'Chemin SFTP';
$l['sftp_path_exp'] = 'Chemin absolu vers le répertoire web de l\'utilisateur, par exemple /home/NOMUTILISATEUR/public_html';
$l['ftp_error'] = 'Impossible de se connecter au serveur FTP';
$l['err_upload_remote'] = 'Impossible de téléverser le fichier vers le chemin FTP';
$l['err_fetch_file'] = 'Impossible d\'accéder au fichier téléversé sur le domaine';
$l['err_fetch_path'] = 'Impossible de récupérer le chemin à partir des données reçues';
$l['dbusername'] = 'Nom d\'utilisateur de la base de données';
$l['dbusername_exp'] = 'Le nom d\'utilisateur MySQL';
$l['dbuserpass'] = 'Mot de passe de la base de données';
$l['dbuserpass_exp'] = 'Le mot de passe de l\'utilisateur MySQL';
$l['database_name_exp_aefer'] = 'Tapez le nom de la base de données à utiliser pour l\'installation';
$l['hostname'] = 'Nom d\'hôte de la base de données';
$l['hostname_exp'] = 'Le nom d\'hôte MySQL (principalement <b>localhost</b>)';
$l['no_hostname'] = 'Veuillez entrer votre nom d\'hôte de la base de données';
$l['no_dbusername'] = 'Veuillez entrer votre nom d\'utilisateur de la base de données';
$l['no_dbuserpass'] = 'Veuillez entrer votre mot de passe de la base de données';
$l['no_db'] = 'Veuillez entrer votre nom de base de données';
$l['auth_method_pass'] = 'Mot de passe';
$l['auth_method_key'] = 'Clé SSH';
$l['no_pass_pri'] = 'Veuillez fournir soit un mot de passe, soit une clé privée';
$l['finishing_process'] = 'Finalisation de l\'importation';
$l['wait_note'] = '<b>NOTE :</b> Cela peut prendre 3-4 minutes. Vous pouvez quitter cette page si vous le souhaitez !';

$l['import_push_bg'] = 'L\'importation a été lancée en arrière-plan';
$l['local_import'] = 'Détection automatique de toutes les installations';
$l['choose_domain_import_exp'] = 'Please choose the domain to import the software.';
$l['enter_domain_exp'] = 'Please enter the domain where the software is already installed.';