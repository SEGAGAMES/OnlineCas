<?php

//////////////////////////////////////////////////////////////
//===========================================================
// staging_lang.php
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
$l['no_info_file'] = 'Le fichier INFO.XML n\'a pas pu être trouvé! Veuillez le signaler à l\'administrateur du serveur.';
$l['incompatible'] = 'Le logiciel requiert une version supérieure de '.APP.'! Veuillez le signaler à l\'administrateur du serveur.';
$l['no_install'] = 'Le fichier INSTALL.XML n\'a pas pu être trouvé! Veuillez le signaler à l\'administrateur du serveur.';
$l['no_functions'] = 'Le fichier CLONE FUNCTIONS n\'a pas pu être trouvé!';
$l['no_clone'] = 'Aucun clonage';
$l['no_softdomain'] = 'Vous n\'avez pas choisi de domaine pour installer le logiciel.';
$l['wrong_softdomain'] = 'Le chemin du domaine que vous avez sélectionné n\'a pas pu être trouvé.';
$l['softdirectory_exists'] = 'Le répertoire que vous avez indiqué existe déjà! Veuillez entrer un autre nom de répertoire.';
$l['no_space'] = 'Vous ne disposez pas de suffisamment d\'espace pour installer ce logiciel!';
$l['no_softdb'] = 'La base de données n\'a pas été envoyée.';
$l['database_exists'] = 'La base de données existe déjà. Veuillez choisir un autre nom.';
$l['databaseuser_exists'] = 'L\'utilisateur de la base de données existe déjà. Veuillez choisir un autre nom d\'utilisateur.';
$l['db_name_long'] = 'Le nom de la base de données ne peut pas dépasser 7 caractères. Veuillez choisir un nom de base de données plus court.';
$l['db_limit_crossed'] = 'Le nombre maximal de bases de données que vous pouvez créer a été atteint, donc l\'installation ne peut pas se poursuivre.';
$l['cloning'] = 'Clonage de l\'installation';
$l['staging'] = 'Mise en scène';
$l['downloading'] = 'Téléchargement du package';
$l['cant_clone_db'] = 'Impossible de cloner la base de données';
$l['fail_create'] = 'Échec de la création du répertoire';
$l['fail_create_datadir'] = 'Échec de la création du répertoire de données';
$l['cant_clone_dir'] = 'Le répertoire ne peut pas être cloné car il s\'agit du répertoire principal.';
$l['cant_connect_mysql'] = 'Impossible de se connecter à la base de données, veuillez vérifier le nom d\'utilisateur/mot de passe de votre base de données. Si modifié, veuillez mettre à jour les détails dans les installations Softaculous en utilisant Modifier les détails.';
$l['same_ins'] = 'Il n\'est pas possible de cloner une installation à la même adresse';
$l['ins_exists'] = 'Il semble que vous avez déjà <b>&soft-1;</b> installé à l\'emplacement choisi';
$l['ins_recursive'] = 'Vous ne pouvez pas créer une mise en scène dans un sous-répertoire de l\'installation originale';
$l['no_staging_support'] = 'La mise en scène n\'est pas supportée pour ce script';
$l['invalid_script'] = 'ID de script invalide';
$l['no_domain_found'] = 'Aucun domaine trouvé. Veuillez ajouter un domaine pour installer le script';

$l['no_cron_min'] = 'Aucune minute Cron n\'a été spécifiée';
$l['no_cron_hour'] = 'Aucune heure Cron n\'a été spécifiée';
$l['no_cron_day'] = 'Aucun jour Cron n\'a été spécifié';
$l['no_cron_month'] = 'Aucun mois Cron n\'a été spécifié';
$l['no_cron_weekday'] = 'Aucun jour de la semaine Cron n\'a été spécifié';
$l['wrong_cron_min'] = 'Minute Cron incorrecte. Les valeurs valides sont 0-59 ou <b>*</b>';
$l['wrong_cron_hour'] = 'Heure Cron incorrecte. Les valeurs valides sont 0-23 ou <b>*</b>';
$l['wrong_cron_day'] = 'Jour Cron incorrect. Les valeurs valides sont 1-31 ou <b>*</b>';
$l['wrong_cron_month'] = 'Mois Cron incorrect. Les valeurs valides sont 1-12 ou <b>*</b>';
$l['wrong_cron_weekday'] = 'Jour de la semaine Cron incorrect. Les valeurs valides sont 0-7 ou <b>*</b>';
$l['no_datadir'] = 'Aucun répertoire de données n\'a été spécifié';
$l['datadir_exists'] = 'Le répertoire de données que vous avez soumis existe. Veuillez en spécifier un autre.';
$l['no_decompress_data'] = 'Il y a eu des erreurs lors de la décompression des fichiers de données.';
$l['some_files_exist'] = 'L\'installation ne peut pas se poursuivre car les fichiers suivants existent déjà dans le dossier cible : ';
$l['delete_files'] = 'Veuillez supprimer ces fichiers ou choisir un autre dossier.';
$l['overwrite_exist'] = '<b>OU</b> <br /><input type="checkbox" name="overwrite_existing" id="overwrite_existing" />&nbsp;&nbsp;<b><span style="color:#000;">Cochez la case pour écraser tous les fichiers et continuer</span></b>';
$l['prog_staging'] = 'Mise en scène '; // Ne supprimez pas l'espace après
$l['prog_staging_complete'] = 'Mise en scène complétée.';
$l['checking_data'] = 'Vérification des données soumises';
$l['unzipping_files'] = 'Copie des fichiers et des dossiers';
$l['unzipping_datadir'] = 'Décompression des fichiers de données';
$l['prop_db'] = 'Propagation de la base de données';
$l['finishing_process'] = 'Processus en cours';
$l['wait_note'] = '<b>NOTE:</b> Cela peut prendre 3 à 4 minutes. Veuillez ne pas quitter cette page avant que la barre de progression n\'atteigne 100%.';
$l['no_hostname'] = 'Veuillez entrer votre nom d\'hôte de base de données';
$l['no_dbusername'] = 'Veuillez entrer votre nom d\'utilisateur de base de données';
$l['no_dbuserpass'] = 'Veuillez entrer votre mot de passe de base de données';
$l['softdirectory_invalid'] = 'Le répertoire que vous avez saisi est invalide.';
$l['softdatadir_invalid'] = 'Le répertoire de données que vous avez saisi est invalide.';
$l['err_domain'] = 'Aucun domaine';
$l['err_domain_admin'] = 'Cet utilisateur n\'a aucun domaine. Veuillez contacter l\'administrateur.';
$l['no_https'] = 'Aucun certificat SSL de confiance n\'a été trouvé';
$l['no_php_install'] = 'PHP n\'est pas installé. Pour l\'installer, veuillez cliquer <a href="'.$globals['index'].'act=apps&app=1">ici</a>';
$l['no_mysql_install'] = 'MySQL n\'est pas installé. Pour l\'installer, veuillez cliquer <a href="'.$globals['index'].'act=apps&app=16">ici</a>';
$l['no_field'] = 'Le champ <b>&soft-1;</b> est requis et doit être rempli.';
$l['error_adddb'] = 'La base de données n\'a pas pu être créée';
$l['error_adduser'] = 'Il y a eu une erreur lors de l\'ajout d\'un utilisateur à la nouvelle base de données';
$l['no_package'] = 'Le package d\'installation n\'a pas pu être trouvé!';
$l['no_decompress'] = 'Il y a eu des erreurs lors de la décompression des fichiers du package.';

//Theme Strings
$l['<title>'] = APP.' - Mise en scène de l\'installation';
$l['info'] = 'Info';
$l['ins_softname'] = 'Logiciel';
$l['ins_num'] = 'Numéro d\'installation';
$l['ins_ver'] = 'Version';
$l['ins_time'] = 'Heure d\'installation';
$l['ins_path'] = 'Chemin';
$l['ins_url'] = 'URL';
$l['ins_admin_url'] = 'URL Admin';
$l['ins_db'] = 'Nom de la base de données';
$l['ins_dbuser'] = 'Utilisateur de la base de données';
$l['ins_dbpass'] = 'Mot de passe de la base de données';
$l['ins_dbhost'] = 'Hôte de la base de données';
$l['ins_datadir'] = 'Répertoire de données';
$l['ins_wwwdir'] = 'Répertoire Web';
$l['ins_wwwurl'] = 'URL du Répertoire Web';
$l['ins_cron_command'] = 'Commande Cron';
$l['cloned'] = 'L\'installation a été clonée avec succès';
$l['staging_ins'] = 'Détails de l\'installation de la mise en scène';
$l['create_staging'] = 'Créer le site de développement';
$l['choose_protocol'] = 'Choisissez un protocole';
$l['choose_protocol_exp'] = 'Si vous avez un certificat SSL, optez pour HTTPS.';
$l['cron_job'] = 'Tâche CRON';
$l['cron_job_exp'] = 'Ce script nécessite une tâche CRON pour fonctionner. Veuillez spécifier les horaires CRON. Si vous n\'en avez pas connaissance, laissez tel quel!';
$l['cron_min'] = 'Min';
$l['cron_hour'] = 'Heure';
$l['cron_day'] = 'Jour';
$l['cron_month'] = 'Mois';
$l['cron_weekday'] = 'Jour de la semaine';
$l['datadir'] = 'Répertoire de données';
$l['datadir_exp'] = 'Ce script nécessite de stocker ses données dans un dossier non accessible via le web. Il sera créé dans votre dossier personnel. Par exemple, si vous spécifiez <b>datadir</b>, le suivant sera créé - /home/username/<b>datadir</b>';
$l['db_name_long'] = 'Le nom de la base de données ne peut pas dépasser 7 caractères. Veuillez choisir un nom de base de données plus court.';
$l['db_alpha_num'] = 'Seuls les caractères alphanumériques sont autorisés pour le nom de la base de données.';
$l['overwrite'] = 'Écraser les fichiers';
$l['database_exists'] = 'La base de données existe déjà. Veuillez choisir un autre nom.';
$l['no_softdomain'] = 'Vous n\'avez pas choisi de domaine pour installer le logiciel.';
$l['wrong_softdomain'] = 'Le chemin du domaine que vous avez sélectionné n\'a pas pu être trouvé.';
$l['no_space'] = 'Vous ne disposez pas de suffisamment d\'espace pour installer ce logiciel!';
$l['no_softdb'] = 'La base de données n\'a pas été envoyée.';
$l['choose_domain'] = 'Choisissez un Domaine';
$l['choose_domain_exp'] = 'Veuillez choisir le domaine où installer le logiciel.';
$l['in_directory'] = 'Dans le dossier';
$l['in_directory_exp'] = 'Le répertoire est relatif à votre domaine et <b>ne devrait pas exister</b>. Par exemple, Pour installer le script à l\'adresse http://mondomaine/dossier/ tapez simplement <b>dossier</b>. Pour l\'installer dans http://mondomaine/ laissez ce champ vide.';
$l['database_name'] = 'Nom de la base de données';
$l['database_name_exp'] = 'Indiquez le nom de la base de données qui sera créée pour l\'installation';
$l['softcopy_note'] = '<b>NOTE</b>: Ce logiciel nécessite qu\'il soit installé en utilisant son propre utilitaire d\'installation. Veuillez visiter l\'URL qui sera affichée une fois les fichiers copiés pour terminer le processus d\'installation.';
$l['softsubmit'] = 'Cloner';
$l['congrats'] = 'Félicitations, le site de développement a été créé avec succès';
$l['succesful'] = 'a été créé avec succès à cette adresse';
$l['admin_url'] = 'URL d\'administration';
$l['setup_continue'] = 'Cependant, l\'installation sera complétée par le logiciel lui-même. Pour terminer l\'installation, veuillez visiter l\'URL suivante';
$l['enjoy'] = 'Nous espérons que le processus d\'installation vous a grandement facilité la vie.';
$l['install_notes'] = 'Les notes suivantes sont importantes. Il est fortement recommandé de les lire';
$l['please_note'] = '<b>NOTE</b>: '.APP.' est simplement un installateur automatique et ne fournit pas de support pour les logiciels. Veuillez visiter le site du développeur pour obtenir de l\'aide!';
$l['regards'] = 'Cordialement';
$l['softinstaller'] = APP.' Installateur Automatique';
$l['return'] = 'Retour au sommaire';
$l['return_to_wpm'] = 'Retour à la gestion de WordPress';
$l['live_ins_url'] = 'URL du site en production';
$l['live_ins_url_exp'] = 'Ceci est l\'adresse de la source pour l\'installation';

// These strings are for Softaculous Remote
$l['hostname'] = 'Nom d\'hôte de la base de données';
$l['hostname_exp'] = 'Le nom d\'hôte MySQL (principalement <b>localhost</b>)';
$l['dbusername'] = 'Nom d\'utilisateur de la base de données';
$l['dbusername_exp'] = 'Le nom d\'utilisateur MySQL';
$l['dbuserpass'] = 'Mot de passe de la base de données';
$l['dbuserpass_exp'] = 'Le mot de passe de l\'utilisateur MySQL';
$l['database_name_exp_aefer'] = 'Tapez le nom de la base de données à utiliser pour l\'installation';

$l['staging_tweet_sub'] = 'Informez vos amis';

$l['soft_ins_exists'] = 'Une installation existe déjà à &soft-1; selon nos dossiers. Pour cloner l\'application à cet emplacement, veuillez désinstaller l\'installation existante!';

$l['no_sclone'] = 'Le fichier CLONE.XML n\'a pas pu être trouvé! Veuillez le signaler à l\'administrateur du serveur.';
$l['no_functions'] = 'Le fichier CLONE FUNCTIONS n\'a pas pu être trouvé! Veuillez le signaler à l\'administrateur du serveur.';

$l['staging_push_bg'] = 'La mise en scène a été poussée en arrière-plan';
$l['err_mysql_db'] = 'Le nom de la base de données MySQL est incorrect car la base de données n\'a pas pu être sélectionnée.';

$l['max_staging_error'] = 'Vous avez atteint le nombre maximum de (<b>&soft-1;</b>) mises en scène autorisées. Veuillez supprimer les mises en scène indésirables pour pouvoir créer une nouvelle copie de mise en scène';
$l['error_max_staging_script'] = 'Vous avez atteint le nombre maximum de (<b>&soft-1;</b>) mises en scène autorisées par script';

$l['choose_url'] = 'Choisissez l\'URL d\'installation';
$l['choose_url_exp'] = 'Veuillez choisir l\'adresse pour installer le logiciel';

$l['ampps_notify_premium'] = 'Cette fonctionnalité est disponible dans la version premium de AMPPS. Veuillez acheter <b><a href="https://ampps.com/clients">AMPPS Premium</a></b>';

$l['failed_rsync'] = 'Échec de la synchronisation des fichiers d\'installation';
$l['failed_rsync_datadir'] = 'Échec de la synchronisation des fichiers du répertoire de données';
$l['wp_cli_replace_fail'] = 'Échec du remplacement des données sur le site de destination (en utilisant wp-cli)';

$l['error_table_exists'] = 'La table <b>&soft-1;</b> existe déjà dans la base de données de destination';
$l['db_details_mismatch'] = 'Database details in your configuration file do not match with details in Softaculous records';
$l['fetch_db_details'] = 'Fetch the database details automatically from your installation\'s configuration file while staging ?';