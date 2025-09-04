<?php

//////////////////////////////////////////////////////////////
//===========================================================
// software_lang.php
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
// Time:       17:00 hrs
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

$l['no_info_file'] = "Le fichier INFO.XML n'a pas pu être trouvé ! Veuillez le signaler à l'administrateur du serveur.";
$l['incompatible'] = "Le logiciel nécessite une version supérieure de ".APP." ! Veuillez le signaler à l'administrateur du serveur.";
$l['no_install'] = "Le fichier INSTALL.XML n'a pas pu être trouvé ! Veuillez le signaler à l'administrateur du serveur.";
$l['no_functions'] = "Le fichier des FONCTIONS D'INSTALLATION n'a pas pu être trouvé ! Veuillez le signaler à l'administrateur du serveur.";
$l['no_remove_functions'] = "Le fichier des FONCTIONS DE SUPPRESSION n'a pas pu être trouvé ! Veuillez le signaler à l'administrateur du serveur.";
$l['no_softdomain'] = "Vous n'avez pas choisi le domaine pour installer le logiciel.";
$l['wrong_softdomain'] = "Le chemin du domaine que vous avez sélectionné n'a pas pu être trouvé.";
$l['softdirectory_exists'] = "Le répertoire que vous avez tapé existe déjà ! Veuillez saisir un autre nom de répertoire.";
$l['no_space'] = "Vous n'avez pas assez d'espace pour installer ce logiciel !";
$l['no_softdb'] = "La base de données n'a pas été postée.";
$l['database_exists'] = "La base de données existe déjà. Veuillez choisir un autre nom.";
$l['databaseuser_exists'] = "L'utilisateur de la base de données existe déjà. Veuillez choisir un autre nom de base de données.";
$l['db_name_long'] = "Le nom de la base de données ne peut pas dépasser 7 lettres. Veuillez choisir un nom de base de données plus court.";
$l['db_limit_crossed'] = "Le nombre maximum de bases de données que vous pouvez créer a été atteint, donc l'installation ne peut pas se poursuivre.";
$l['no_field'] = "Le champ <b>&soft-1;</b> est requis et doit être rempli.";
$l['error_adddb'] = "La base de données n'a pas pu être créée";
$l['error_add_dbuser'] = "L'utilisateur de la base de données n'a pas pu être créé";
$l['error_adduser'] = "Il y a eu une erreur lors de l'ajout d'un utilisateur à la nouvelle base de données";
$l['no_package'] = "Le package d'installation n'a pas pu être trouvé !";
$l['no_decompress'] = "Il y a eu des erreurs lors de la décompression des fichiers du package.";
$l['mail_new_ins'] = "Une nouvelle installation de &soft-1; a été complétée. Les détails de l'installation sont ci-dessous :";
$l['mail_path'] = "Chemin";
$l['mail_url'] = "URL";
$l['mail_admin_url'] = "URL Admin";
$l['mail_admin'] = "Nom d'utilisateur Admin";
$l['mail_pass'] = "Mot de passe Admin";
$l['mail_db'] = "Base de données MySQL";
$l['mail_dbuser'] = "Utilisateur DB MySQL";
$l['mail_dbhost'] = "Hôte DB MySQL";
$l['mail_dbpass'] = "Mot de passe DB MySQL";
$l['mail_time'] = "Heure d'installation";
$l['mail_subject'] = "Nouvelle Installation de &soft-1;";
$l['no_cron_min'] = "Aucune minute Cron spécifiée";
$l['no_cron_hour'] = "Aucune heure Cron spécifiée";
$l['no_cron_day'] = "Aucun jour Cron spécifié";
$l['no_cron_month'] = "Aucun mois Cron spécifié";
$l['no_cron_weekday'] = "Aucun jour de la semaine Cron spécifié";
$l['wrong_cron_min'] = "Minute Cron incorrecte. Les valeurs valides sont 0-59 ou un <b>*</b>";
$l['wrong_cron_hour'] = "Heure Cron incorrecte. Les valeurs valides sont 0-23 ou un <b>*</b>";
$l['wrong_cron_day'] = "Jour Cron incorrect. Les valeurs valides sont 1-31 ou un <b>*</b>";
$l['wrong_cron_month'] = "Mois Cron incorrect. Les valeurs valides sont 1-12 ou un <b>*</b>";
$l['wrong_cron_weekday'] = "Jour de la semaine Cron incorrect. Les valeurs valides sont 0-7 ou un <b>*</b>";
$l['mail_cron'] = "Tâche Cron";
$l['no_datadir'] = "Aucun répertoire de données spécifié";
$l['datadir_exists'] = "Le répertoire de données que vous avez soumis existe. Veuillez en spécifier un autre.";
$l['no_decompress_data'] = "Il y a eu des erreurs lors de la décompression des fichiers de données.";
$l['mail_datadir'] = "Répertoire de données";
$l['some_files_exist'] = "L'installation ne peut pas se poursuivre car les fichiers suivants existent déjà dans le dossier cible : ";
$l['delete_files'] = "Veuillez supprimer ces fichiers ou choisir un autre dossier.";
$l['overwrite_exist'] = "<b>OU</b> <br /><input type=\"checkbox\" name=\"overwrite_existing\" id=\"overwrite_existing\" />&nbsp;&nbsp;<b><span style=\"color:#000;\">Sélectionnez la case pour écraser tous les fichiers et continuer</span></b>";
$l['checking_data'] = "Vérification des données soumises";
$l['unzipping_files'] = "Copie des fichiers et dossiers";
$l['unzipping_datadir'] = "Décompression des fichiers de données";
$l['prop_db'] = "Propagation de la base de données";
$l['finishing_process'] = "Finalisation de l'installation";
$l['wait_note'] = "<b>NOTE :</b> Cela peut prendre 3-4 minutes. Veuillez ne pas quitter cette page jusqu'à ce que la barre de progression atteigne 100%";
$l['no_hostname'] = "Veuillez entrer le nom d'hôte de votre base de données";
$l['no_dbusername'] = "Veuillez entrer le nom d'utilisateur de votre base de données";
$l['no_dbuserpass'] = "Veuillez entrer le mot de passe de votre base de données";
$l['softdirectory_invalid'] = "Le répertoire que vous avez tapé est invalide.";
$l['softdatadir_invalid'] = "Le répertoire de données que vous avez tapé est invalide.";
$l['err_domain'] = "Pas de domaine";
$l['err_domain_admin'] = "Cet utilisateur n'a pas de domaine. Veuillez contacter l'administrateur.";
$l['err_pass_strength'] = "La force du mot de passe doit être supérieure à ";
$l['no_https'] = "Aucun certificat SSL de confiance trouvé";
$l['err_dbprefix'] = "Le préfixe de la table est invalide. Les valeurs valides sont a-z ou A-Z ou 0-9 ou _";
$l['no_php_install'] = "PHP n'est pas installé. Pour l'installer, cliquez <a href=\"".$globals['index']."act=apps&app=1\">ici</a>";
$l['no_mysql_install'] = "MySQL n'est pas installé. Pour l'installer, cliquez <a href=\"".$globals['index']."act=apps&app=16\">ici</a>";
$l['no_domain_verify'] = "Impossible d'accéder à votre domaine. Veuillez vous assurer que votre domaine pointe vers ce serveur et qu'il n'y a pas de fichier .htaccess restreignant l'accès à votre domaine";
$l['auto_backup_not_allowed'] = "La fréquence de sauvegarde automatique que vous avez choisie est invalide";
$l['invalid_script'] = "ID de script invalide";
$l['no_domain_found'] = "Aucun domaine trouvé. Veuillez ajouter un domaine pour installer le script";
$l['not_php_script'] = "Ce script n'est pas en PHP";


// Chaînes de thème
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
$l['mb'] = 'Mo';
$l['software_support'] = 'Support logiciel';
$l['support_link'] = 'Visitez le site de support';
$l['support_note'] = 'Note : Softaculous ne fournit pas de support pour les logiciels individuels.';
$l['setup'] = 'Configuration du logiciel';
$l['choose_domain'] = 'Choisir un domaine';
$l['choose_domain_exp'] = 'Veuillez choisir le domaine pour installer le logiciel.';
$l['choose_url'] = 'Choisir l\'URL d\'installation';
$l['choose_url_exp'] = 'Veuillez choisir l\'URL pour installer le logiciel';
$l['in_directory'] = 'Dans le répertoire';
$l['in_directory_exp'] = 'Le répertoire est relatif à votre domaine et <b>ne doit pas exister</b>. Par exemple, pour installer à http://mondomaine/dir/ tapez simplement <b>dir</b>. Pour installer seulement à http://mondomaine/ laissez ce champ vide.';
$l['database_name'] = 'Nom de la base de données';
$l['database_name_exp'] = 'Tapez le nom de la base de données à créer pour l\'installation';
$l['softcopy_note'] = '<b>NOTE</b> : Ce logiciel nécessite d\'être installé en utilisant son propre utilitaire d\'installation. Veuillez visiter l\'URL qui sera affichée une fois les fichiers copiés pour compléter le processus d\'installation.';
$l['softsubmit'] = 'Installer';
$l['congrats'] = 'Félicitations, le logiciel a été installé avec succès';
$l['succesful'] = 'a été installé avec succès à';
$l['admin_url'] = 'URL Administrative';
$l['setup_continue'] = 'Cependant, la configuration sera complétée par le logiciel lui-même. Pour terminer la configuration, veuillez visiter l\'URL suivante';
$l['enjoy'] = 'Nous espérons que le processus d\'installation a été facile.';
$l['install_notes'] = 'Voici quelques notes importantes. Il est fortement recommandé de les lire';
$l['please_note'] = '<b>NOTE</b> : '.APP.' est juste un installateur automatique de logiciels et ne fournit aucun support pour les paquets logiciels individuels. Veuillez visiter le site du fournisseur de logiciels pour obtenir du support !';
$l['regards'] = 'Cordialement';
$l['softinstaller'] = APP.' Auto Installer';
$l['return'] = 'Retourner à l\'Aperçu';
$l['current_ins'] = 'Installations actuelles';
$l['link'] = 'Lien';
$l['ins_time'] = 'Heure d\'installation';
$l['version'] = 'Version';
$l['upd_to'] = 'Mettre à jour vers la version';
$l['remove'] = 'Supprimer';
$l['no_info'] = 'Aucune information';
$l['randpass'] = 'Générer un mot de passe aléatoire';
$l['ratesoft'] = 'Évaluer ce script';
$l['reviews'] = 'Avis';
$l['reviewsoft'] = 'Écrire un avis';
$l['readreviews'] = 'Lire les avis';
$l['reviews_exp'] = 'Lisez les avis écrits par d\'autres utilisateurs et';
$l['cron_job'] = 'Tâche CRON';
$l['cron_job_exp'] = 'Ce script nécessite un CRON pour fonctionner. Veuillez spécifier les horaires du CRON. Si vous ne le savez pas, laissez tel quel !';
$l['cron_min'] = 'Min';
$l['cron_hour'] = 'Heure';
$l['cron_day'] = 'Jour';
$l['cron_month'] = 'Mois';
$l['cron_weekday'] = 'Jour de la semaine';
$l['datadir'] = 'Répertoire de données';
$l['datadir_exp'] = 'Ce script nécessite de stocker ses données dans un dossier non accessible via le web. Il sera créé dans votre dossier personnel. Par exemple, si vous spécifiez <b>datadir</b>, le suivant sera créé - /home/nomutilisateur/<b>datadir</b>';
$l['db_alpha_num'] = 'Seuls les caractères alphanumériques sont autorisés pour le nom de la base de données.';
$l['overwrite'] = 'Écraser les fichiers';
$l['ins_emailto'] = 'Envoyer les détails de l\'installation par email à';
$l['choose_protocol'] = 'Choisir le protocole';
$l['choose_protocol_exp'] = 'Si votre site a SSL, veuillez choisir le protocole HTTPS.';
$l['ins_url'] = 'Votre URL d\'installation';
$l['create_template'] = 'Créer un modèle';
$l['clone'] = 'Cloner';
$l['backup'] = 'Sauvegarde';
$l['options'] = 'Options';
$l['admin'] = 'Admin';
$l['more_versions'] = 'More versions';
$l['notify_ver'] = 'Notifier '.$globals['sn'].' d\'une nouvelle version';
$l['notifyversion'] = 'Merci de nous avoir informé de la nouvelle version. Nous examinerons cela dès que possible';
$l['del_insid'] = 'Êtes-vous sûr de vouloir supprimer les installations sélectionnées ? L\'action sera irréversible. \nAucune autre confirmation ne sera demandée.';
$l['rem_inst_id'] = 'Suppression de l\'installation - ';
$l['no_sel_inst'] = 'Aucune installation sélectionnée à supprimer.';
$l['inst_remvd'] = 'Les installations sélectionnées ont été supprimées. La page va maintenant être rechargée !';
$l['remove'] = 'Supprimer';
$l['go'] = 'Aller';
$l['screenshots'] = 'Captures d\'écran';
$l['downloading'] = 'Téléchargement du package';
$l['installing'] = 'Installation du script';
$l['editdetail'] = 'Modifier les détails';
$l['publish'] = 'Publier sur le Web';
$l['hostname'] = 'Nom d\'hôte de la base de données';
$l['hostname_exp'] = 'Le nom d\'hôte MySQL (principalement <b>localhost</b>)';
$l['dbusername'] = 'Nom d\'utilisateur de la base de données';
$l['dbusername_exp'] = 'Le nom d\'utilisateur MySQL';
$l['dbuserpass'] = 'Mot de passe de la base de données';
$l['dbuserpass_exp'] = 'Le mot de passe de l\'utilisateur MySQL';
$l['database_name_exp_aefer'] = 'Tapez le nom de la base de données à utiliser pour l\'installation';
$l['sel_version'] = 'Sélectionner la version';
$l['choose_version_exp'] = 'Veuillez sélectionner la version à installer.';
$l['choose_version'] = 'Choisissez la version que vous souhaitez installer';
$l['select'] = 'Sélectionner';
$l['release_date'] = 'Date de sortie';
$l['adv_option'] = 'Options avancées';
$l['disable_notify_update'] = 'Désactiver les notifications de mise à jour par email';
$l['exp_disable_notify_update'] = 'Si coché, vous ne recevrez pas de notification par email pour les mises à jour disponibles pour cette installation.';
$l['prog_installing'] = 'Installation en cours'; // Ne pas enlever l'espace à la fin
$l['prog_install_complete'] = 'Installation terminée.';
$l['eu_auto_upgrade'] = 'Mise à niveau automatique';
$l['exp_eu_auto_upgrade'] = 'Sélectionnez la préférence de mise à jour automatique pour cette installation lorsqu\'une nouvelle version est disponible';
$l['auto_upgrade_plugins'] = 'Mise à niveau automatique des plugins &soft-1;';
$l['exp_auto_upgrade_plugins'] = 'Si coché, tous les plugins &soft-1; installés pour cette installation seront automatiquement mis à jour vers la dernière version (toutes les 24 heures).';
$l['auto_upgrade_themes'] = 'Mise à niveau automatique des thèmes &soft-1;';
$l['exp_auto_upgrade_themes'] = 'Si coché, tous les thèmes &soft-1; pour cette installation seront automatiquement mis à jour vers la dernière version (toutes les 24 heures).';
$l['auto_upgrade_enabled'] = 'Mise à niveau automatique activée';
$l['bad'] = 'Faible';
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
$l['act_template_restored'] = 'Restauré à partir d\'un modèle';
$l['act_staging'] = 'Récemment mis en scène';
$l['act_pushtolive'] = 'Récemment mis en ligne';
$l['ampps_download'] = 'Vous pouvez développer <b>&soft-1;</b> sur votre <b>bureau</b> en utilisant notre outil de développement gratuit Softaculous AMPPS. Cliquez <a href="https://www.ampps.com/downloads" target="_blank"><b>ici</b></a> pour télécharger <a href="https://www.ampps.com/downloads" target="_blank"><img src="https://images.softaculous.com/ampps.gif" height="25" /></a>';

$l['install_tweet_sub'] = 'Dites à vos amis à propos de votre nouveau site';


// Chaînes de thème
$l['choose_theme'] = 'Sélectionner un thème';
$l['clear_theme'] = 'Effacer la sélection';
$l['installing_theme'] = 'Installation du thème';
$l['cant_download_theme'] = 'Impossible de télécharger les fichiers du thème';
$l['no_theme_package'] = 'Le package d\'installation du thème n\'a pas pu être trouvé !';
$l['unzipping_theme_files'] = 'Copie des fichiers et dossiers du thème';
$l['use_this_theme'] = 'Sélectionner celui-ci';
$l['err_auto_backup_limit'] = 'La rotation des sauvegardes automatiques ne peut pas dépasser <b>&soft-1;</b>';
$l['select_domain'] = 'Sélectionner un domaine';
$l['refresh'] = 'Rafraîchir';
$l['purchase'] = 'Acheter';
$l['your_purchased'] = 'Acheté ';//espace final nécessaire
$l['your_purchased_times'] = ' fois(s)';
$l['err_theme_not_bought'] = 'Vous n\'avez pas acheté le thème, donc il ne peut pas être installé !';
$l['err_theme_reached_limit'] = 'Veuillez acheter ce thème et essayer de l\'installer à nouveau. Vous avez atteint la limite d\'installation de ce thème.';
$l['payment_heading'] = 'Acheter un thème';
$l['payment_redirect'] = 'Vous serez redirigé pour payer ';//espace final nécessaire
$l['close'] = 'Fermer';
$l['free'] = 'Gratuit';
$l['select'] = 'Sélectionner';
$l['theme_is_optional'] = '<b>Note</b> : Ceci est facultatif. Si non sélectionné, le thème par défaut sera installé';
$l['with_selected'] = 'Avec la sélection';
$l['related_scripts'] = 'Scripts liés';

$l['date_added'] = 'Date d\'ajout';
$l['downloaded'] = 'Téléchargé';

$l['soft_ins_exists'] = 'Une installation existe déjà à &soft-1; selon nos enregistrements. Pour réinstaller l\'application, veuillez désinstaller l\'installation existante !';
$l['install_now'] = 'Installer maintenant';
$l['my_apps'] = 'Mes applications';
$l['backup_location'] = 'Emplacement de sauvegarde';
$l['backup_location_exp'] = 'Choisissez l\'emplacement de sauvegarde à utiliser pour sauvegarder cette installation';
$l['default'] = 'Par défaut';
$l['invalid_backup_location'] = 'L\'emplacement de sauvegarde soumis n\'existe pas';
$l['local_folder'] = 'Dossier local';

$l['custom_autobackup'] = 'Personnalisé';
$l['custom_autobackup_cron'] = 'Heure du CRON des sauvegardes automatiques';
$l['custom_autobackup_cron_exp'] = 'Veuillez spécifier les horaires du CRON pour les sauvegardes automatiques';

// Erreurs pour les paramètres de cron des sauvegardes automatiques
$l['wrong_autobackup_cron_min'] = 'La minute du CRON de sauvegarde automatique est incorrecte. Les valeurs valides sont 0-59 ou un *';
$l['wrong_autobackup_cron_hour'] = 'L\'heure du CRON de sauvegarde automatique est incorrecte. Les valeurs valides sont 0-23 ou un *';
$l['wrong_autobackup_cron_day'] = 'Le jour du CRON de sauvegarde automatique est incorrect. Les valeurs valides sont 1-31 ou un *';
$l['wrong_autobackup_cron_month'] = 'Le mois du CRON de sauvegarde automatique est incorrect. Les valeurs valides sont 1-12 ou un *';
$l['wrong_autobackup_cron_weekday'] = 'Le jour de la semaine du CRON de sauvegarde automatique est incorrect. Les valeurs valides sont 0-7 ou un *';

$l['quick_install'] = 'Installation rapide';
$l['custom_install'] = 'Installation personnalisée';

$l['outdated_script'] = '<b>&soft-1;</b> n\'a pas été mis à jour depuis plus de deux ans et peut ne plus être maintenu ou supporté par le fournisseur de script';

$l['pushtolive'] = 'Publier en ligne';
$l['staging'] = 'Créer une mise en scène';

$l['dont_auto_upgrade'] = 'Ne pas mettre à jour automatiquement';
$l['minor_auto_upgrade'] = 'Mise à niveau vers les versions <b>mineures</b> uniquement';
$l['major_auto_upgrade'] = 'Mise à niveau vers toutes les dernières versions disponibles (<b>majeures</b> et <b>mineures</b>)';
$l['auto_upgrade_major'] = '(Majeur et Mineur)';
$l['auto_upgrade_minor'] = '(Mineur)';

$l['err_fetch_key'] = 'Impossible de récupérer la clé API PFX pour le moment';
$l['ampps_notify_premium'] = 'Cette fonctionnalité est disponible dans la version premium de AMPPS. Veuillez acheter <b><a href="https://ampps.com/clients">AMPPS Premium</a></b>';

$l['view_items'] = 'Lister les éléments dans l\'ensemble';
$l['ok'] = 'OK';
$l['plugins'] = 'Plugins';
$l['themes'] = 'Thèmes';
$l['empty_set'] = 'Il n\'y a actuellement aucun élément dans l\'ensemble !!';

$l['error_max_ins_script'] = 'Vous avez atteint le nombre maximum de (<b>&soft-1;</b>) installations autorisées par script';
$l['error_max_backup_script'] = 'Vous avez atteint le nombre maximum de (<b>&soft-1;</b>) sauvegardes autorisées par script';
$l['error_max_clone_script'] = 'Vous avez atteint le nombre maximum de (<b>&soft-1;</b>) clonages autorisés par script';
$l['error_max_staging_script'] = 'Vous avez atteint le nombre maximum de (<b>&soft-1;</b>) mises en scène autorisées par script';

$l['remove_complete'] = 'Supprimer complètement';
$l['remove_info'] = 'Supprimer de '.APP;
$l['manage_sets'] = 'Gérer les ensembles de plugins / thèmes';
$l['manage_plugin_sets'] = 'Gérer les ensembles de plugins';
$l['manage_theme_sets'] = 'Gérer les ensembles de thèmes';

$l['rbackup_disabled'] = 'Les sauvegardes sur des emplacements distants sont désactivées par l\'administrateur';
$l['rbackup_protocol_disabled'] = 'Les sauvegardes sur <b>&soft-1;</b> sont désactivées par l\'administrateur';

$l['wordpress_manager'] = 'Gérez votre installation avec WordPress Manager';
$l['login_exp'] = 'Se connecter en tant qu\'administrateur';

$l['return_to_wpm'] = 'Retourner à la gestion de WordPress';

$l['featured_plugins_pro'] = '<b style="color:green;">PRO</b> version of the marked Plugins will be installed for Free';
$l['plugin_not_found'] = 'Unable to find plugin folder';
$l['theme_not_found'] = 'Unable to find theme folder';