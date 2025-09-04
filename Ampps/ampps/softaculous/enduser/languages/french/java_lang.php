<?php

//////////////////////////////////////////////////////////////
//===========================================================
// java_lang.php
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

$l['java_message'] = 'Java n\'est pas installé. Pour l\'installer, veuillez cliquer <a href="'.$globals['index'].'act=apps&app=37">ici</a>';
$l['java_title'] = 'Java n\'est pas installé sur votre serveur';
$l['no_info_file'] = 'Le fichier INFO.XML est introuvable ! Veuillez le signaler à l\'administrateur du serveur.';
$l['incompatible'] = 'Le logiciel nécessite une version plus récente de '.APP.' ! Veuillez le signaler à l\'administrateur du serveur.';
$l['no_install'] = 'Le fichier INSTALL.XML est introuvable ! Veuillez le signaler à l\'administrateur du serveur.';
$l['no_functions'] = 'Le fichier des fonctions d\'installation est introuvable ! Veuillez le signaler à l\'administrateur du serveur.';
$l['no_softdomain'] = 'Vous n\'avez pas choisi le domaine pour installer le logiciel.';
$l['wrong_softdomain'] = 'Le chemin du domaine que vous avez sélectionné est introuvable.';
$l['softdirectory_exists'] = 'Le répertoire que vous avez saisi existe déjà ! Veuillez saisir un autre nom de répertoire.';
$l['no_space'] = 'Vous n\'avez pas suffisamment d\'espace pour installer ce logiciel !';
$l['no_softdb'] = 'La base de données n\'a pas été postée.';
$l['database_exists'] = 'La base de données existe déjà. Veuillez choisir un autre nom.';
$l['databaseuser_exists'] = 'L\'utilisateur de la base de données existe déjà. Veuillez choisir un autre nom de base de données.';
$l['db_name_long'] = 'Le nom de la base de données ne peut pas dépasser 7 lettres. Veuillez choisir un nom de base de données plus court.';
$l['db_limit_crossed'] = 'Le nombre maximum de bases de données que vous pouvez créer a été atteint, l\'installation ne peut donc pas se poursuivre.';
$l['no_field'] = 'Le champ <b>&soft-1;</b> est requis et doit être rempli.';
$l['error_adddb'] = 'La base de données n\'a pas pu être créée';
$l['error_adduser'] = 'Une erreur s\'est produite lors de l\'ajout d\'un utilisateur à la nouvelle base de données';
$l['no_package'] = 'Le package d\'installation est introuvable !';
$l['no_decompress'] = 'Des erreurs sont survenues lors de la décompression des fichiers du package.';
$l['mail_new_ins'] = 'Une nouvelle installation de &soft-1; a été complétée. Les détails de l\'installation sont indiqués ci-dessous :';
$l['mail_path'] = 'Chemin';
$l['mail_url'] = 'URL';
$l['mail_admin_url'] = 'URL d\'administration';
$l['mail_admin'] = 'Nom d\'utilisateur admin';
$l['mail_pass'] = 'Mot de passe admin';
$l['mail_db'] = 'Base de données MySQL';
$l['mail_dbuser'] = 'Utilisateur MySQL';
$l['mail_dbhost'] = 'Hôte MySQL';
$l['mail_dbpass'] = 'Mot de passe MySQL';
$l['mail_time'] = 'Heure de l\'installation';
$l['mail_subject'] = 'Nouvelle installation de &soft-1;';
$l['no_cron_min'] = 'Aucune minute Cron n\'a été spécifiée';
$l['no_cron_hour'] = 'Aucune heure Cron n\'a été spécifiée';
$l['no_cron_day'] = 'Aucun jour Cron n\'a été spécifié';
$l['no_cron_month'] = 'Aucun mois Cron n\'a été spécifié';
$l['no_cron_weekday'] = 'Aucun jour de la semaine Cron n\'a été spécifié';
$l['wrong_cron_min'] = 'La minute Cron est incorrecte. Les valeurs valides sont 0-59 ou un <b>*</b>';
$l['wrong_cron_hour'] = 'L\'heure Cron est incorrecte. Les valeurs valides sont 0-23 ou un <b>*</b>';
$l['wrong_cron_day'] = 'Le jour Cron est incorrect. Les valeurs valides sont 1-31 ou un <b>*</b>';
$l['wrong_cron_month'] = 'Le mois Cron est incorrect. Les valeurs valides sont 1-12 ou un <b>*</b>';
$l['wrong_cron_weekday'] = 'Le jour de la semaine Cron est incorrect. Les valeurs valides sont 0-7 ou un <b>*</b>';
$l['mail_cron'] = 'Tâche Cron';
$l['no_datadir'] = 'Aucun répertoire de données n\'a été spécifié';
$l['datadir_exists'] = 'Le répertoire de données que vous avez soumis existe déjà. Veuillez en spécifier un autre.';
$l['no_decompress_data'] = 'Des erreurs sont survenues lors de la décompression des fichiers de données.';
$l['mail_datadir'] = 'Répertoire de données';
$l['some_files_exist'] = 'L\'installation ne peut pas se poursuivre car les fichiers suivants existent déjà dans le dossier de destination : ';
$l['delete_files'] = 'Veuillez supprimer ces fichiers ou choisir un autre dossier.';
$l['overwrite_exist'] = '<b>OU</b> <br /><input type="checkbox" name="overwrite_existing" id="overwrite_existing" />&nbsp;&nbsp;<b><span style="color:#000;">Cochez cette case pour écraser tous les fichiers et continuer</span></b>';
$l['checking_data'] = 'Vérification des données soumises';
$l['unzipping_files'] = 'Copie des fichiers et des dossiers';
$l['unzipping_datadir'] = 'Décompression des fichiers de données';
$l['prop_db'] = 'Propagation de la base de données';
$l['finishing_process'] = 'Finalisation de l\'installation';
$l['wait_note'] = '<b>NOTE :</b> Cela peut prendre 3-4 minutes. Veuillez ne pas quitter cette page avant que la barre de progression n\'atteigne 100 %';
$l['no_hostname'] = 'Veuillez entrer le nom d\'hôte de votre base de données';
$l['no_dbusername'] = 'Veuillez entrer le nom d\'utilisateur de votre base de données';
$l['no_dbuserpass'] = 'Veuillez entrer le mot de passe de votre base de données';
$l['softdirectory_invalid'] = 'Le répertoire que vous avez saisi est invalide.';
$l['softdatadir_invalid'] = 'Le répertoire de données que vous avez saisi est invalide.';
$l['no_dir'] = 'Veuillez fournir un nom de répertoire.';
$l['err_pass_strength'] = 'La force du mot de passe doit être supérieure à ';
$l['no_https'] = 'Un certificat SSL de confiance n\'a pas été trouvé';
$l['err_dbprefix'] = 'Le préfixe de la table est invalide. Les valeurs valides sont a-z ou A-Z ou 0-9 ou _';
$l['no_mysql_install'] = 'MySQL n\'est pas installé. Pour l\'installer, veuillez cliquer <a href="'.$globals['index'].'act=apps&app=16">ici</a>';
$l['auto_backup_not_allowed'] = 'La fréquence de sauvegarde automatique que vous avez choisie est invalide';
$l['invalid_script'] = 'ID de script invalide';
$l['not_java_script'] = 'Ce script n\'est pas en Java';
$l['quick_install'] = 'Installation rapide';
$l['custom_install'] = 'Installation personnalisée';
$l['outdated_script'] = '<b>&soft-1;</b> n\'a pas été mis à jour depuis plus de deux ans et peut ne plus être maintenu ou pris en charge par le fournisseur de script';
//Chaînes de thème
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['install'] = 'Installer';
$l['overview'] = 'Aperçu';
$l['features'] = 'Fonctionnalités';
$l['demo'] = 'Démo';
$l['ratings'] = 'Évaluations';
$l['import'] = 'Importer';
$l['software_ver'] = 'Version';
$l['space_req'] = 'Espace requis';
$l['available_space'] = 'Espace disponible';
$l['req_space'] = 'Espace nécessaire';
$l['mb'] = 'MB';
$l['software_support'] = 'Support logiciel';
$l['support_link'] = 'Visitez le site de support';
$l['support_note'] = 'Note : Softaculous ne fournit pas de support pour les logiciels individuels.';
$l['setup'] = 'Configuration du logiciel';
$l['choose_domain'] = 'Choisir un domaine';
$l['choose_domain_exp'] = 'Veuillez choisir le domaine pour installer le logiciel.';
$l['in_directory'] = 'Dans le répertoire';
$l['in_directory_exp'] = 'Le répertoire est relatif à votre domaine et <b>ne doit pas exister</b>. par ex. Pour installer à http://mondomaine/dir/, tapez simplement <b>dir</b>.';
$l['database_name'] = 'Nom de la base de données';
$l['database_name_exp'] = 'Tapez le nom de la base de données à créer pour l\'installation';
$l['softcopy_note'] = '<b>NOTE</b> : Ce logiciel nécessite qu\'il soit installé en utilisant son propre utilitaire d\'installation. Veuillez visiter l\'URL qui sera affichée une fois les fichiers copiés pour terminer le processus d\'installation.';
$l['softsubmit'] = 'Installer';
$l['congrats'] = 'Félicitations, le logiciel a été installé avec succès';
$l['succesful'] = 'a été installé avec succès à';
$l['admin_url'] = 'URL administrative';
$l['setup_continue'] = 'Cependant, la configuration sera complétée par le logiciel lui-même. Pour terminer la configuration, veuillez visiter l\'URL suivante';
$l['enjoy'] = 'Nous espérons que le processus d\'installation a été facile.';
$l['install_notes'] = 'Voici quelques notes importantes. Il est fortement recommandé de les lire ';
$l['please_note'] = '<b>NOTE</b> : '.APP.' est un installateur automatique de logiciels et ne fournit aucun support pour les paquets de logiciels individuels. Veuillez visiter le site web du fournisseur de logiciels pour obtenir de l\'aide !';
$l['regards'] = 'Cordialement';
$l['softinstaller'] = APP.' Installateur automatique';
$l['return'] = 'Retourner au sommaire';
$l['current_ins'] = 'Installations actuelles';
$l['link'] = 'Lien';
$l['ins_time'] = 'Heure d\'installation';
$l['version'] = 'Version';
$l['upd_to'] = 'Mise à niveau vers la version';
$l['remove'] = 'Supprimer';
$l['no_info'] = 'Pas d\'info';
$l['randpass'] = 'Générer un mot de passe aléatoire';
$l['ratesoft'] = 'Évaluer ce script';
$l['reviews'] = 'Avis';
$l['reviewsoft'] = 'Écrire un avis';
$l['readreviews'] = 'Lire les avis';
$l['reviews_exp'] = 'Lisez les avis rédigés par d\'autres utilisateurs et';
$l['cron_job'] = 'Tâche CRON';
$l['cron_job_exp'] = 'Ce script nécessite une tâche CRON pour fonctionner. Veuillez spécifier les horaires de CRON. Si vous n\'en êtes pas sûr, laissez-le tel quel !';
$l['cron_min'] = 'Min';
$l['cron_hour'] = 'Heure';
$l['cron_day'] = 'Jour';
$l['cron_month'] = 'Mois';
$l['cron_weekday'] = 'Jour de la semaine';
$l['datadir'] = 'Répertoire de données';
$l['datadir_exp'] = 'Ce script nécessite de stocker ses données dans un dossier non accessible via le web. Il sera créé dans votre dossier personnel. par ex. si vous spécifiez <b>datadir</b> le suivant sera créé - /home/nomdutilisateur/<b>datadir</b>';
$l['db_alpha_num'] = 'Seuls les caractères alphanumériques sont autorisés pour le nom de la base de données.';
$l['overwrite'] = 'Écraser les fichiers';
$l['ins_emailto'] = 'Envoyer les détails de l\'installation par email à';
$l['choose_protocol'] = 'Choisir le protocole';
$l['choose_protocol_exp'] = 'Si votre site dispose de SSL, veuillez choisir le protocole HTTPS.';
$l['clone'] = 'Cloner';
$l['backup'] = 'Sauvegarder';
$l['options'] = 'Options';
$l['admin'] = 'Admin';
$l['notify_ver'] = 'Notifier '.$globals['sn'].' d\'une nouvelle version';
$l['notifyversion'] = 'Merci de nous avoir informés de la nouvelle version. Nous allons l\'examiner dès que possible';
$l['del_insid'] = 'Voulez-vous vraiment supprimer les installations sélectionnées ? L\'action sera irréversible. \n Aucune autre confirmation ne sera demandée.';
$l['rem_inst_id'] = 'Suppression de l\'installation - ';
$l['no_sel_inst'] = 'Aucune installation sélectionnée à supprimer.';
$l['inst_remvd'] = 'Les installations sélectionnées ont été supprimées. La page va maintenant être rechargée !';
$l['remove'] = 'Supprimer';
$l['go'] = 'Aller';
$l['screenshots'] = 'Captures d\'écran';
$l['downloading'] = 'Téléchargement du package';
$l['installing'] = 'Installation du script';
$l['editdetail'] = 'Modifier les détails';
$l['publish'] = 'Publier sur le web';
$l['hostname'] = 'Nom d\'hôte de la base de données';
$l['hostname_exp'] = 'Le nom d\'hôte MySQL (principalement <b>localhost</b>)';
$l['dbusername'] = 'Nom d\'utilisateur de la base de données';
$l['dbusername_exp'] = 'Le nom d\'utilisateur MySQL';
$l['dbuserpass'] = 'Mot de passe de la base de données';
$l['dbuserpass_exp'] = 'Le mot de passe de l\'utilisateur MySQL';
$l['database_name_exp_aefer'] = 'Tapez le nom de la base de données à utiliser pour l\'installation';
$l['sel_version'] = 'Sélectionnez la version';
$l['choose_version_exp'] = 'Veuillez sélectionner la version à installer.';
$l['choose_version'] = 'Choisissez la version que vous souhaitez installer';
$l['select'] = 'Sélectionner';
$l['release_date'] = 'Date de sortie';
$l['adv_option'] = 'Options avancées';
$l['disable_notify_update'] = 'Désactiver les notifications de mise à jour par email';
$l['exp_disable_notify_update'] = 'Si coché, vous ne recevrez pas de notification par email pour les mises à jour disponibles pour cette installation.';
$l['prog_installing'] = 'Installation en cours '; // Ne pas supprimer l'espace à la fin
$l['prog_install_complete'] = 'Installation complétée.';
$l['bad'] = 'Mauvais';
$l['good'] = 'Bon';
$l['strong'] = 'Fort';
$l['short'] = 'Court';
$l['strength_indicator'] = 'Indicateur de force';
$l['auto_backup'] = 'Sauvegardes automatiques';
$l['exp_auto_backup'] = APP.' effectuera des sauvegardes automatiques via CRON selon la fréquence que vous sélectionnez';
$l['auto_backup_rotation'] = 'Rotation des sauvegardes';
$l['exp_auto_backup_rotation'] = 'Si la limite de rotation des sauvegardes est atteinte, '.APP.' supprimera la sauvegarde la plus ancienne pour cette installation et créera une nouvelle sauvegarde. Les sauvegardes utiliseront votre espace, alors choisissez la rotation des sauvegardes en fonction de l\'espace disponible sur votre serveur';
$l['no_backup'] = 'Ne pas sauvegarder';
$l['daily'] = 'Une fois par jour';
$l['weekly'] = 'Une fois par semaine';
$l['monthly'] = 'Une fois par mois';
$l['unlimited'] = 'Illimité';
$l['changelog'] = 'Journal des modifications';
$l['act_upgrade'] = 'Récemment mis à jour';
$l['act_clone'] = 'Récemment cloné';
$l['act_backup'] = 'Récemment sauvegardé';
$l['act_install'] = 'Récemment installé';
$l['act_edit'] = 'Récemment modifié';
$l['act_import'] = 'Récemment importé';
$l['act_restore'] = 'Récemment restauré';

$l['custom_autobackup'] = 'Personnalisé';
$l['custom_autobackup_cron'] = 'Temps de sauvegardes automatiques Cron';
$l['custom_autobackup_cron_exp'] = 'Veuillez spécifier les horaires CRON pour les sauvegardes automatiques';

$l['install_tweet_sub'] = 'Parlez à vos amis de votre nouveau site';
$l['err_auto_backup_limit'] = 'La rotation des sauvegardes automatiques ne peut pas être supérieure à <b>&soft-1;</b>';
$l['select_domain'] = 'Sélectionnez un domaine';
$l['with_selected'] = 'Avec la sélection';
$l['related_scripts'] = 'Scripts associés';
$l['install_now'] = 'Installer maintenant';
$l['my_apps'] = 'Mes applications';

$l['soft_ins_exists'] = 'Une installation existe déjà à &soft-1; selon nos enregistrements. Pour réinstaller l\'application, veuillez désinstaller l\'installation existante !';
$l['no_java_support'] = 'L\'installation de scripts Java n\'est pas prise en charge sur ce panneau';

$l['choose_url'] = 'Choisir l\'URL d\'installation';
$l['choose_url_exp'] = 'Veuillez choisir l\'URL pour installer le logiciel';

$l['error_max_ins_script'] = 'Vous avez atteint le nombre maximum de (<b>&soft-1;</b>) installations autorisées par script';
$l['remove_complete'] = 'Supprimer complètement';
$l['remove_info'] = 'Supprimer de '.APP;
$l['ampps_notify_premium'] = 'Cette fonctionnalité est disponible dans la version premium de AMPPS. Veuillez acheter <b><a href="https://ampps.com/clients">AMPPS Premium</a></b>';
