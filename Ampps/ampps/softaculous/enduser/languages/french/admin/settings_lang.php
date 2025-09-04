<?php

//////////////////////////////////////////////////////////////
//===========================================================
// admin/settings_lang.php
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

$l['no_path'] = 'Aucun chemin n\'a été indiqué';
$l['wrong_path'] = 'Impossible de localiser le fichier universal.php à l\'emplacement que vous avez spécifié';
$l['no_softscripts'] = 'Aucun chemin pour le script/logiciel n\'a été donné';
$l['wrong_softscripts'] = 'Le chemin pour le script/logiciel n\'est pas correct car aucun logiciel n\'a été trouvé';
$l['no_sn'] = 'Aucun nom de site n\'a été spécifié.';
$l['no_cookie_name'] = 'Aucun nom de cookie spécifié';
$l['no_soft_email'] = 'Aucune adresse e-mail fournie';
$l['wrong_soft_email'] = 'L\'adresse e-mail que vous avez indiquée est incorrecte';
$l['wrong_from_email'] = 'L\'adresse e-mail d\'expéditeur que vous avez soumise est invalide';
$l['no_license'] = 'Aucune clé de licence soumise';
$l['no_lang'] = 'Aucune langue n\'a été choisie';
$l['wrong_lang'] = 'La langue sélectionnée n\'est pas valide';
$l['no_theme_folder'] = 'Aucun thème n\'a été choisi';
$l['wrong_theme_folder'] = 'Le thème choisi est invalide';
$l['no_timezone'] = 'Aucun fuseau horaire n\'a été choisi';
$l['wrong_timezone'] = 'Le fuseau horaire sélectionné est incorrect';
$l['no_cron_time'] = 'Aucune tâche Cron n\'a été spécifiée';
$l['no_off_message'] = 'Aucune raison pour la désactivation n\'a été spécifiée';
$l['no_off_subject'] = 'Aucun titre n\'a été spécifié au message de désactivation';
$l['saving_error'] = 'Il y a eu des erreurs lors de l\'enregistrement de la configuration';
$l['no_update'] = 'Aucune préférence de mise à jour n\'a été soumise';
$l['invalid_update'] = 'Une préférence de mise à jour invalide a été soumise';
$l['no_protocol'] = 'Aucun protocole n\'a été sélectionné';
$l['wrong_protocol'] = 'Le protocole sélectionné est invalide';
$l['wrong_network_interface'] = 'L\'interface réseau que vous avez spécifiée n\'est pas valide';
$l['pass_strength_error'] = 'La force du mot de passe doit être un entier compris entre 0 et 100';
$l['err_binary_path'] = 'Il semble que le binaire n\'existe pas au chemin défini. Veuillez vérifier et réessayer.';
$l['err_invalid_soa'] = 'SOA invalide !!! Veuillez entrer un nombre positif valide';

// Chaînes de thème
$l['<title>'] = APP.' - Paramètres';
$l['settings_saved'] = 'Les réglages ont été sauvegardés avec succès';
$l['pathhead'] = 'Chemins des logiciels';
$l['softpath'] = 'Chemin de '.APP;
$l['softpath_exp'] = 'C\'est le chemin où tous les fichiers des différents scripts sont situés';
$l['softscripts'] = 'Chemin des Scripts';
$l['softscripts_exp'] = 'C\'est le chemin où tous les logiciels / scripts sont situés';
$l['gen_set'] = 'Paramètres généraux';
$l['sitename'] = 'Nom du site';
$l['sitename_exp'] = 'Le nom du serveur ou de la compagnie utilisant '.APP.'. Il apparaît dans de nombreuses pages de '.APP.' Installer';
$l['cook_name'] = 'Nom du Cookie';
$l['cook_name_exp'] = 'Le nom du cookie qui sera stocké sur les navigateurs.';
$l['comp_output'] = 'Compresser la sortie';
$l['comp_output_exp'] = 'Cela permettra de compresser la sortie et cela fait gagner beaucoup de bande passante.';
$l['soft_email'] = 'Adresse e-mail de l\'administrateur';
$l['soft_email_exp'] = 'L\'adresse e-mail à laquelle les activités CRON et autres e-mails liés à l\'administration sont envoyés.';
$l['from_email'] = 'Adresse e-mail de l\'expéditeur';
$l['from_email_exp'] = 'L\'adresse e-mail pour les en-têtes FROM.';
$l['license'] = 'Clé de licence';
$l['license_exp'] = 'Veuillez mettre la bonne clé de licence délivrée par '.APP;
$l['choose_lang'] = 'Choisir la langue';
$l['choose_lang_exp'] = 'Choisissez votre langue préférée';
$l['choose_theme'] = 'Choisir le thème';
$l['choose_theme_exp'] = 'Le thème choisi sera le thème par défaut tout au long de '.APP;
$l['timezone'] = 'Fuseau horaire';
$l['update_settings'] = 'Mettre à jour les paramètres';
$l['auto_upd_softac'] = 'Mise à jour automatique de '.APP;
$l['auto_upd_softac_exp'] = 'Si activé, '.APP.' se mettra automatiquement à jour vers la dernière version. <br />La branche <b>Stable</b> est lancée après que le candidat à la publication ait été rigoureusement testé. <br />La branche <b>Release Candidate</b> contient la dernière version et les nouvelles fonctionnalités.';
$l['never_update'] = 'Ne jamais mettre à jour';
$l['stable'] = 'Stable (Recommandé)';
$l['release_cand'] = 'Release Candidate (Expérimental !)';
$l['auto_upd_soft'] = 'Mise à jour automatique des scripts';
$l['auto_upd_soft_exp'] = 'Si activé, les divers scripts / logiciels seront mis à jour vers leurs dernières versions';
$l['auto_add_soft'] = 'Ajouter automatiquement les nouveaux logiciels';
$l['auto_add_soft_exp'] = 'Si activé, de nouveaux scripts / logiciels seront ajoutés au cours de la tâche Cron. (RECOMMANDÉ)';
$l['email_upd_soft'] = 'Souscription aux notifications des mises à jour';
$l['email_upd_soft_exp'] = 'Envoyer des emails lorsque des mises à jour de '.APP.' sont disponibles ou des mise à jour automatique sont effectuées';
$l['email_upd_softs'] = 'Notifier les mises à jour de scripts par e-mail';
$l['email_upd_softs_exp'] = 'Envoyer des emails lorsque des mises à jour de scripts / logiciels sont disponibles ou effectuées';
$l['cron_time'] = 'Mises à jour des tâches Cron';
$l['cron_time_exp'] = 'La fréquence des tâches Cron pour vérifier les mises à jour disponibles. Ne pas changer si vous n\'êtes pas au courant des taches CRON';
$l['disable_soft'] = 'Désactiver '.APP;
$l['soft_off'] = 'Désactiver '.APP;
$l['soft_off_exp'] = 'Cela désactivera '.APP.' et les utilisateurs ne seront plus capables de l\'utiliser !';
$l['off_sub'] = 'Titre du message de désactivation';
$l['off_message'] = 'Message de désactivation';
$l['edit_settings'] = 'Modifier les paramètres';
$l['chmod_files'] = 'CHMOD Fichiers';
$l['chmod_files_exp'] = 'Ceci est utile si vous avez installé suPHP et '.APP.' est incapable de le détecter. Laissez en blanc si incertain.';
$l['chmod_dir'] = 'CHMOD Répertoires';
$l['chmod_dir_exp'] = 'Ceci est utile si vous avez installé suPHP et '.APP.' est incapable de le détecter. Laissez en blanc si incertain.';
$l['is_vps'] = 'Le serveur est-il un VPS ?';
$l['is_vps_exp'] = 'Si ce serveur est un VPS, veuillez cocher cette case.';
$l['eu_news_off'] = 'Désactiver les fils d\'actualités pour l\'utilisateur final';
$l['eu_news_off_exp'] = 'Si vous choisissez cette option, les fils d\'actualités pour les utilisateurs finaux seront désactivés. Ces nouvelles informent les utilisateurs des derniers développements des scripts, de leur mise à jour, etc.';
$l['logo_url'] = 'URL du logo';
$l['logo_url_exp'] = 'Si vide, le logo de '.APP.' sera affiché.';
$l['php_bin'] = 'Binaire PHP';
$l['php_bin_exp'] = 'Ceci est le binaire qui sera utilisé pour la tâche CRON et aussi pour d\'autres fins. Si vide, alors <b>/usr/bin/php</b> sera utilisé. Veuillez noter que le <b>binaire PHP doit être un binaire CLI</b>.';
$l['end_user_set'] = 'Paramètres du panneau utilisateur final';
$l['off_sync_link'] = 'Désactiver le lien de synchronisation';
$l['off_sync_link_exp'] = 'Cela désactivera le lien de synchronisation pour les utilisateurs finaux.';
$l['off_panel_link'] = 'Désactiver le lien du panneau de contrôle';
$l['off_panel_link_exp'] = 'Cela désactivera le lien du panneau de contrôle dans le Dock pour les utilisateurs finaux.';
$l['off_enduser_suggestions'] = 'Désactiver les suggestions de fonctionnalités pour les utilisateurs finaux';
$l['off_enduser_suggestions_exp'] = 'Cela désactivera les suggestions de fonctionnalités de Softaculous pour les utilisateurs finaux';
$l['chmod_conf_file'] = 'CHMOD Fichiers de configuration';
$l['chmod_conf_file_exp'] = 'Les fichiers de configuration des scripts seront CHMOD à cette valeur. La valeur par défaut est 0644. (Ne modifiez pas / laissez en blanc si vous ne savez pas !)';

$l['suphp_detected'] = 'suPHP détecté';
$l['no_prefill'] = 'Ne pas pré-remplir le nom du répertoire';
$l['no_prefill_exp'] = 'Ne pas pré-remplir le nom du répertoire avec le nom des scripts par défaut.';
$l['footer_link'] = 'Lien de pied de page';
$l['footer_link_exp'] = 'Lorsqu\'une personne installe un script, ce lien / texte sera inséré dans le pied de page de cette installation';
$l['eu_email_off'] = 'Désactiver les e-mails de mise à jour des utilisateurs finaux';
$l['eu_email_off_exp'] = 'Si coché, aucun e-mail ne sera envoyé à l\'utilisateur final lorsqu\'une mise à jour est disponible.';
$l['random_pass'] = 'Générer un mot de passe aléatoire pour les utilisateurs';
$l['random_pass_exp'] = 'Si coché, des mots de passe administratifs générés aléatoirement seront créés lors d\'une installation.';
$l['off_demo_link'] = 'Désactiver les démos des scripts';
$l['off_demo_link_exp'] = 'Cela désactivera les démos pour les utilisateurs finaux.';
$l['off_rating_link'] = 'Désactiver les évaluations des scripts';
$l['off_rating_link_exp'] = 'Cela désactivera les évaluations pour les utilisateurs finaux.';
$l['off_review_link'] = 'Désactiver les avis sur les scripts';
$l['off_review_link_exp'] = 'Cela désactivera les avis pour les utilisateurs finaux.';
$l['off_screenshot_link'] = 'Désactiver les captures d\'écran des scripts';
$l['off_screenshot_link_exp'] = 'Cela désactivera les captures d\'écran pour les utilisateurs finaux.';
$l['random_dbprefix'] = 'Générer un préfixe de base de données aléatoire pour les utilisateurs';
$l['random_dbprefix_exp'] = 'Si coché, un préfixe de base de données généré aléatoirement sera créé lors d\'une installation.';
$l['remote_mysql'] = 'Nom d\'hôte MySQL distant';
$l['remote_mysql_exp'] = 'Si vous souhaitez utiliser MySQL distant, spécifiez le nom d\'hôte ou l\'IP MySQL distant';
$l['perl_scripts'] = 'Désactiver les scripts PERL';
$l['perl_scripts_exp'] = 'Cela désactivera les scripts PERL pour les utilisateurs finaux';
$l['show_top_scripts'] = 'Afficher le groupe des meilleurs scripts';
$l['show_top_scripts_exp'] = 'Cela affichera le groupe des meilleurs scripts aux utilisateurs finaux pour un accès facile aux pages d\'installation des scripts. Pour désactiver cette fonctionnalité, laissez ce champ <b>vide</b>.';
$l['err_change_app_name'] = 'Une erreur est survenue lors du changement du nom du groupe';
$l['hide_dbprefix'] = 'Masquer le préfixe de la base de données pour le script';
$l['hide_dbprefix_exp'] = 'Si coché, aucun préfixe de base de données ne sera disponible pour le script.';
$l['user_mod_dir'] = 'Utiliser USER MOD DIR';
$l['user_mod_dir_exp'] = 'Les utilisateurs peuvent installer des scripts sur http://IP/~user';
$l['off_email_link'] = 'Désactiver tous les e-mails envoyés aux utilisateurs finaux';
$l['off_email_link_exp'] = 'Cela désactivera le lien d\'e-mail pour les utilisateurs finaux et DÉSACTIVERA également les e-mails envoyés lors de l\'installation, de la suppression, etc.';
$l['disable_classes'] = 'Désactiver les classes PHP';
$l['disable_classes_exp'] = 'Cela désactivera les classes PHP pour les utilisateurs finaux.';
$l['panel_hf'] = 'Afficher Softaculous dans l\'interface native du panneau de contrôle';
$l['panel_hf_exp'] = 'Si activé, Softaculous sera affiché dans l\'interface native du panneau de contrôle.';
$l['disable_backup_restore'] = 'Désactiver la fonction de sauvegarde / restauration pour les utilisateurs finaux';
$l['disable_backup_restore_exp'] = 'Cela désactivera la fonction de sauvegarde et de restauration pour les utilisateurs finaux.';
$l['nolabels'] = 'Désactiver TOUTES les catégories de scripts';
$l['nolabels_exp'] = 'Si activé, aucune catégorie ne sera affichée dans l\'en-tête du panneau utilisateur final, c\'est-à-dire PHP, Javascripts, PERL, Classes, toutes ces catégories seront désactivées';
$l['settings'] = 'Paramètres de '.APP;
$l['disable_reseller_panel'] = 'Désactiver le panneau de revente';
$l['disable_reseller_panel_exp'] = 'Si activé, les revendeurs ne pourront pas accéder au panneau de revente.';
$l['choose_protocol'] = 'Choisir le protocole';
$l['choose_protocol_exp'] = 'Choisissez votre protocole préféré. Il sera sélectionné par défaut pour l\'utilisateur final.';
$l['random_username'] = 'Générer un nom d\'utilisateur aléatoire pour les utilisateurs';
$l['random_username_exp'] = 'Si coché, des noms d\'utilisateurs administratifs générés aléatoirement seront créés lors d\'une installation.';
$l['network_interface'] = 'Interface réseau';
$l['network_interface_exp'] = 'L\'interface réseau publique du serveur. Laissez vide si vous ne savez pas';
$l['default_domain_path'] = 'Chemin du domaine par défaut';
$l['default_domain_path_exp'] = 'Lors de l\'ajout de domaine, vous pouvez définir le chemin du domaine par défaut.';
$l['empty_username'] = 'Nom d\'utilisateur vide';
$l['empty_username_exp'] = 'Si coché, le champ NOM D\'UTILISATEUR ADMIN sera laissé vide.';
$l['empty_pass'] = 'Mot de passe vide';
$l['empty_pass_exp'] = 'Si coché, le champ MOT DE PASSE sera laissé vide.';
$l['empty_email'] = 'Email vide';
$l['empty_email_exp'] = 'Si coché, le champ EMAIL sur le formulaire d\'installation du script sera laissé vide.';
$l['show_cscript_in_top'] = 'Afficher le logo des scripts personnalisés dans les scripts TOP.';
$l['show_cscript_in_top_exp'] = 'Si activé, le logo de vos scripts personnalisés sera affiché dans les scripts TOP.';
$l['pass_strength'] = 'Définir la force minimale du mot de passe';
$l['pass_strength_exp'] = 'Si défini, la force du mot de passe doit être supérieure à la valeur définie';
$l['off_remove_mail'] = 'Désactiver les e-mails de suppression d\'installation';
$l['off_remove_mail_exp'] = 'Cela désactivera l\'e-mail envoyé aux utilisateurs finaux lors de la suppression des installations.';
$l['off_backup_mail'] = 'Désactiver les e-mails de sauvegarde d\'installation';
$l['off_backup_mail_exp'] = 'Cela désactivera l\'e-mail envoyé aux utilisateurs finaux lors de la sauvegarde des installations.';
$l['off_install_mail'] = 'Désactiver les e-mails de nouvelle installation';
$l['off_install_mail_exp'] = 'Cela désactivera l\'e-mail envoyé aux utilisateurs finaux lors de l\'installation d\'une application.';
$l['off_edit_mail'] = 'Désactiver les e-mails de modification d\'installation';
$l['off_edit_mail_exp'] = 'Cela désactivera l\'e-mail envoyé aux utilisateurs finaux lorsque les détails de l\'installation sont modifiés.';
$l['off_clone_mail'] = 'Désactiver les e-mails de clonage d\'installation';
$l['off_clone_mail_exp'] = 'Cela désactivera l\'e-mail envoyé aux utilisateurs finaux lorsqu\'une installation est clonée.';
$l['off_restore_mail'] = 'Désactiver les e-mails de restauration d\'installation';
$l['off_restore_mail_exp'] = 'Cela désactivera l\'e-mail envoyé aux utilisateurs finaux lorsqu\'une installation est restaurée.';
$l['off_template_mail'] = 'Désactiver les e-mails de création de modèle';
$l['off_template_mail_exp'] = 'Cela désactivera l\'e-mail envoyé aux utilisateurs finaux lors de la création d\'un modèle d\'installation.';
$l['off_restore_template_mail'] = 'Désactiver les e-mails de restauration de modèle';
$l['off_restore_template_mail_exp'] = 'Cela désactivera l\'e-mail envoyé aux utilisateurs finaux lors de la restauration d\'un modèle.';
$l['admin_prefix'] = 'Préfixe pour le nom d\'utilisateur administrateur';
$l['admin_prefix_exp'] = 'L\'option sélectionnée sera définie comme préfixe pour le nom d\'utilisateur administrateur sur le formulaire d\'installation du script<br/> Veuillez ne pas utiliser de tiret \'-\' car il sera utilisé comme séparateur';
$l['ap_none'] = 'Aucun';
$l['ap_username'] = 'Nom d\'utilisateur';
$l['ap_domain'] = 'Domaine';
$l['ap_admin_defined'] = 'Défini par l\'administrateur';
$l['disable_auto_backup'] = 'Désactiver les sauvegardes automatiques pour l\'utilisateur final';
$l['disable_auto_backup_exp'] = 'Si coché, l\'option de sauvegardes automatiques sera désactivée pour les utilisateurs finaux.';
$l['webuzo_disable_username'] = 'Pré-remplir le nom d\'utilisateur Webuzo';
$l['webuzo_disable_username_exp'] = 'Si coché, le champ Nom d\'utilisateur Webuzo sur la page de connexion sera pré-rempli.';
$l['disable_clone'] = 'Désactiver la fonction de clonage pour les utilisateurs finaux';
$l['disable_clone_exp'] = 'Cela désactivera l\'option de clonage d\'installation pour les utilisateurs finaux';
$l['disable_remote_import'] = 'Désactiver la fonction d\'importation à distance pour les utilisateurs finaux';
$l['disable_remote_import_exp'] = 'Cela désactivera l\'option d\'importation à distance pour les utilisateurs finaux';
$l['disable_backup_upgrade'] = 'Désactiver l\'option de sauvegarde lors des mises à jour';
$l['disable_backup_upgrade_exp'] = 'Cela désactivera l\'option de sauvegarde sur la page de mise à niveau de l\'installation pour les utilisateurs finaux';
$l['ephp_bin'] = 'Binaire PHP utilisateur final';
$l['ephp_bin_exp'] = 'Définir le chemin binaire PHP qui sera utilisé par les sites Web des utilisateurs finaux. '.APP.' utilisera ce binaire pour vérifier les exigences d\'un script. Si non défini '.APP.' utilisera le binaire par défaut comme : ';
$l['no_ampps_download'] = 'Désactiver le lien de téléchargement d\'AMPPS';
$l['no_ampps_download_exp'] = 'Cela désactivera le lien de téléchargement d\'AMPPS dans le panneau utilisateur de '.APP;
$l['no_strong_mysql_pass'] = 'Ne pas générer de mot de passe fort pour l\'utilisateur de la base de données MySQL';
$l['no_strong_mysql_pass_exp'] = 'Cela générera un mot de passe utilisateur de base de données MySQL sans caractères spéciaux';

$l['remove_options'] = 'Options de suppression pour l\'utilisateur final';
$l['remove_dir'] = 'Masquer l\'option de suppression du répertoire';
$l['remove_dir_exp'] = 'Si sélectionné, le répertoire d\'installation sera toujours supprimé lorsqu\'une installation est supprimée';
$l['remove_db'] = 'Masquer l\'option de suppression de la base de données et de l\'utilisateur de la base de données';
$l['remove_db_exp'] = 'Si sélectionné, la base de données et l\'utilisateur de la base de données seront toujours supprimés lorsqu\'une installation est supprimée';
$l['remove_datadir'] = 'Masquer l\'option de suppression du répertoire de données';
$l['remove_datadir_exp'] = 'Si sélectionné, le répertoire de données sera toujours supprimé lorsqu\'une installation est supprimée';
$l['remove_wwwdir'] = 'Masquer l\'option de suppression du répertoire WWW';
$l['remove_wwwdir_exp'] = 'Si sélectionné, le répertoire WWW sera toujours supprimé lorsqu\'une installation est supprimée';

$l['privacy_settings'] = 'Privacy Settings';
$l['off_ins_stats'] = 'Disable Installation Statistics';
$l['off_ins_stats_exp'] = 'This will disable sending anonymous installation statistics to Softaculous. We collect only the count of installations. We do not collect or store any other information related to the installation (url, path, etc)';
$l['off_os_stats'] = 'Disable OS Info';
$l['off_os_stats_exp'] = 'This will disable sending OS details to Softaculous. This is used to deliver updates based on compatibility with your OS';

$l['social_media'] = 'Paramètres des médias sociaux';
$l['install_tweet_off'] = 'Désactiver le tweet pour les nouvelles installations';
$l['install_tweet_off_exp'] = 'Si coché, l\'option de tweet ne sera pas affichée après une nouvelle installation';
$l['install_tweet_msg'] = 'Message de tweet pour les nouvelles installations';
$l['install_tweet_msg_exp'] = 'Message de tweet personnalisé pour les nouvelles installations';

$l['upgrade_tweet_off'] = 'Désactiver le tweet pour la mise à niveau de l\'installation';
$l['upgrade_tweet_off_exp'] = 'Si coché, l\'option de tweet ne sera pas affichée après la mise à niveau d\'une installation';
$l['upgrade_tweet_msg'] = 'Message de tweet pour la mise à niveau de l\'installation';
$l['upgrade_tweet_msg_exp'] = 'Message de tweet personnalisé pour la mise à niveau de l\'installation';

$l['clone_tweet_off'] = 'Désactiver le tweet pour le clonage de l\'installation';
$l['clone_tweet_off_exp'] = 'Si coché, l\'option de tweet ne sera pas affichée après le clonage d\'une installation';
$l['clone_tweet_msg'] = 'Message de tweet pour le clonage de l\'installation';
$l['clone_tweet_msg_exp'] = 'Message de tweet personnalisé pour le clonage de l\'installation';
$l['staging_tweet_off'] = 'Désactiver le tweet pour la mise en scène de l\'installation';
$l['staging_tweet_off_exp'] = 'Si coché, l\'option de tweet ne sera pas affichée après la mise en scène d\'une installation';
$l['staging_tweet_msg'] = 'Message de tweet pour la mise en scène de l\'installation';
$l['staging_tweet_msg_exp'] = 'Message de tweet personnalisé pour la mise en scène de l\'installation';
$l['pushtolive_tweet_off'] = 'Désactiver le tweet pour la mise en ligne de l\'installation';
$l['pushtolive_tweet_off_exp'] = 'Si coché, l\'option de tweet ne sera pas affichée après la mise en ligne d\'une installation';
$l['pushtolive_tweet_msg'] = 'Message de tweet pour la mise en ligne de l\'installation';
$l['pushtolive_tweet_msg_exp'] = 'Message de tweet personnalisé pour la mise en ligne de l\'installation';

$l['restore_template_tweet_off'] = 'Désactiver le tweet pour le modèle restauré';
$l['restore_template_tweet_off_exp'] = 'Si coché, l\'option de tweet ne sera pas affichée après la restauration d\'un modèle';
$l['restore_template_tweet_msg'] = 'Message de tweet pour la restauration du modèle';
$l['restore_template_tweet_msg_exp'] = 'Message de tweet personnalisé pour la restauration du modèle';

$l['no_ftp_encrypted'] = 'Ne pas chiffrer le mot de passe FTP';
$l['no_ftp_encrypted_exp'] = 'Cela stockera les mots de passe FTP du domaine dans la base de données sans chiffrement';
$l['pre_download_all'] = 'Activer le pré-téléchargement pour tous les scripts';
$l['pre_download_all_exp'] = 'Cela activera le pré-téléchargement pour tous les scripts, y compris les nouveaux scripts ajoutés';

$l['tweet_vars_link'] = 'Liste des variables pour le message Tweet';
$l['tweet_vars'] = '[[SCRIPTNAME]] - Utilisez ceci pour le nom du script <br />[[TYPE]] - Utilisez ceci pour le type de script Ex : PHP, PERL, etc. <br />[[softurl]] - Utilisez ceci pour l\'URL de l\'installation <br />[[cat]] - Utilisez ceci pour la catégorie du script Ex : Blog, CMS, etc. <br />[[ver]] - Utilisez ceci pour la version du script installé <br />';

$l['session_timeout'] = 'Délai d\'expiration de session';
$l['session_timeout_exp'] = 'La session Softaculous restera active pendant le temps spécifié.<br />Le temps doit être en minutes. Par défaut : 15';

$l['auto_backup_limit'] = 'Limite de rotation des sauvegardes automatiques';
$l['auto_backup_limit_exp'] = 'Choisissez la limite maximale de rotation des sauvegardes automatiques pour les utilisateurs finaux';
$l['auto_backup_unlimited'] = 'Illimité';
$l['auto_backup_all'] = 'Tous';
$l['auto_backup_daily'] = 'Désactiver les sauvegardes automatiques quotidiennes';
$l['auto_backup_weekly'] = 'Désactiver les sauvegardes automatiques hebdomadaires';
$l['auto_backup_monthly'] = 'Désactiver les sauvegardes automatiques mensuelles';

$l['off_upgrade_plugins'] = 'Désactiver la mise à niveau automatique des plugins pour l\'utilisateur final';
$l['off_upgrade_plugins_exp'] = 'Si coché, l\'option de mise à niveau automatique des plugins pour les installations des utilisateurs sera désactivée pour les utilisateurs finaux.';
$l['off_upgrade_themes'] = 'Désactiver la mise à niveau automatique des thèmes pour l\'utilisateur final';
$l['off_upgrade_themes_exp'] = 'Si coché, l\'option de mise à niveau automatique des thèmes pour les installations des utilisateurs sera désactivée pour les utilisateurs finaux.';

$l['pfx_settings'] = 'Paramètres PopularFX';
$l['eu_enable_themes'] = 'Activer les thèmes gratuits';
$l['eu_enable_themes_exp'] = 'Si coché, les utilisateurs finaux auront la possibilité de sélectionner et d\'installer des thèmes gratuits lors de l\'installation de scripts comme WordPress';
$l['eu_themes_premium'] = 'Activer les thèmes Premium';
$l['eu_themes_premium_exp'] = 'Si coché, les utilisateurs finaux auront la possibilité d\'acheter et d\'installer des thèmes Premium pour des scripts comme WordPress.<br /> Vous pouvez trouver plus d\'infos <a href="http://www.softaculous.com/docs/Premium_Themes" target="_blank">ici</a>';

$l['backups_expire'] = 'Delete Backup Frequency (Local)';
$l['backups_expire_exp'] = 'If you would like to delete your users\' backups created on local server after certain days since backup creation. By default the backups are never deleted.';

$l['default_hf_bg'] = 'Couleur par défaut pour l\'en-tête et le pied de page';
$l['default_hf_bg_exp'] = 'Ce sera la couleur par défaut pour l\'en-tête, le pied de page et le panneau de gauche';
$l['default_cat_hover'] = 'Couleur par défaut pour le survol des catégories';
$l['default_cat_hover_exp'] = 'Ce sera la couleur par défaut lorsque l\'utilisateur survole les catégories dans le panneau de gauche';
$l['default_hf_text'] = 'Couleur par défaut pour le texte de l\'en-tête et du pied de page';
$l['default_hf_text_exp'] = 'Ce sera la couleur par défaut pour le texte de l\'en-tête, du pied de page et du panneau de gauche';
$l['default_scriptname_text'] = 'Couleur par défaut pour le texte du nom du script dans le panneau de gauche';
$l['default_scriptname_text_exp'] = 'Ce sera la couleur par défaut pour le texte du nom du script dans le panneau de gauche';

$l['max_backups'] = 'Nombre maximum de sauvegardes par utilisateur (locales et distantes)';
$l['max_backups_exp'] = 'Cela limitera le nombre maximum de sauvegardes qu\'un utilisateur peut effectuer sur des emplacements locaux et distants.';
$l['max_backups_unlimited'] = 'Illimité';

$l['max_backups_local'] = 'Nombre maximum de sauvegardes par utilisateur (local)';
$l['max_backups_local_exp'] = 'Cela limitera le nombre maximum de sauvegardes qu\'un utilisateur peut effectuer sur le serveur local (emplacements distants non inclus)';

$l['max_insid_backups'] = 'Nombre maximum de sauvegardes par installation (locales et distantes)';
$l['max_insid_backups_exp'] = 'Cela limitera le nombre maximum de sauvegardes qu\'un utilisateur peut effectuer par installation sur des emplacements locaux et distants.';

$l['max_insid_backups_local'] = 'Nombre maximum de sauvegardes par installation (local)';
$l['max_insid_backups_local_exp'] = 'Cela limitera le nombre maximum de sauvegardes qu\'un utilisateur peut effectuer par installation sur le serveur local (emplacements distants non inclus)';

$l['default_landing'] = 'Page par défaut pour le panneau utilisateur final';
$l['default_landing_exp'] = 'Ce sera la page par défaut pour le panneau utilisateur final de '.APP;
$l['top_scripts'] = 'Scripts populaires (par défaut)';
$l['wp_manager'] = 'Gestionnaire WordPress';
$l['all_ins'] = 'Toutes les installations';
$l['outdated_ins'] = 'Installations obsolètes';

$l['no_add_domain'] = 'Désactiver l\'ajout de domaines par les utilisateurs finaux';
$l['no_add_domain_exp'] = 'Cela empêchera les utilisateurs finaux d\'ajouter des domaines';

$l['force_auto_upgrade'] = 'Forcer la préférence de mise à niveau automatique pour les installations des utilisateurs';
$l['force_auto_upgrade_exp'] = 'La préférence de mise à niveau automatique choisie sera sélectionnée et désactivée dans le panneau utilisateur final. Les utilisateurs finaux ne pourront <b>pas</b> la modifier. (Applicable pour les nouvelles installations ainsi que les installations existantes)';
$l['enable_auto_upgrade'] = 'Prédéfinir la préférence de mise à niveau automatique pour les installations des utilisateurs';
$l['enable_auto_upgrade_exp'] = 'La préférence de mise à niveau automatique choisie sera sélectionnée par défaut dans le panneau utilisateur final. Les utilisateurs finaux pourront la modifier.';
$l['dont_auto_upgrade'] = 'Ne pas effectuer de mise à niveau automatique (par défaut)';
$l['minor_auto_upgrade'] = 'Mettre à niveau uniquement vers les versions <b>mineures</b>';
$l['major_auto_upgrade'] = 'Mettre à niveau vers toute version disponible (<b>majeure</b> et <b>mineure</b>)';

$l['set_backup_dir'] = 'Définir le répertoire de sauvegarde';
$l['set_backup_dir_exp'] = 'Choisissez le chemin pour stocker les sauvegardes des installations des utilisateurs finaux. <br /> Ce sera un chemin absolu, c\'est-à-dire que si vous entrez /backups, les sauvegardes seront créées dans le répertoire /backups/NOM_UTILISATEUR sur votre serveur. Ce répertoire doit exister et être accessible en écriture pour tous les utilisateurs.';

$l['off_customize_theme'] = 'Désactiver la personnalisation du thème';
$l['off_customize_exp'] = 'Si sélectionné, les utilisateurs finaux ne pourront pas accéder à l\'option de personnalisation du thème';

$l['enc_db_pass'] = 'Stocker le mot de passe de la base de données sous forme chiffrée';
$l['enc_db_pass_exp'] = 'Si sélectionné, le mot de passe de la base de données des installations des utilisateurs sera stocké sous forme chiffrée';

$l['time_format'] = 'Format de l\'heure par défaut';
$l['time_format_exp'] = 'Choisissez le format de l\'heure par défaut. Par défaut : <b>F j, Y, g:i a</b>';

$l['no_prefill_db'] = 'Ne pas pré-remplir les détails de la base de données';
$l['no_prefill_db_exp'] = 'Ne pas pré-remplir les détails de la base de données par défaut.';

$l['off_protocol'] = 'Désactiver le protocole';
$l['off_protocol_exp'] = 'Si sélectionné, le protocole ne sera pas affiché à l\'utilisateur final';

$l['disable_branches'] = 'Désactiver les branches de scripts';
$l['disable_branches_exp'] = 'Si coché, toutes les branches d\'un script seront désactivées sauf la branche principale';
$l['db_prefix'] = 'Activer le préfixe de la base de données';
$l['db_prefix_exp'] = 'Si sélectionné, toutes les bases de données et les utilisateurs seront créés avec un préfixe.';

$l['disable_cronupdate_email'] = 'Désactiver l\'email de mise à jour des tâches Cron';
$l['disable_cronupdate_email_exp'] = 'Si coché, les notifications de tâche cron ne seront pas envoyées à l\'adresse e-mail donnée';

$l['set_soa_expire_val'] = 'Définir la valeur d\'expiration SOA';
$l['set_soa_expire_val_exp'] = 'Définissez une valeur d\'expiration SOA numérique pour tous les domaines. Valeur minimale : 86400';

$l['nat_config'] = 'Configuration NAT';
$l['nat_config_exp'] = 'Sélectionnez cette option si vous utilisez une configuration NAT sur votre serveur';

$l['logs_level'] = 'Niveau des journaux '.APP;
$l['logs_level_exp'] = 'Le niveau des journaux sélectionné sera utilisé pour les journaux d\'erreurs/de débogage. <br />Les journaux de niveau 4 peuvent contenir des mots de passe';
$l['off'] = 'Désactivé';
$l['logs_level-4'] = 'Journaux détaillés';

$l['wp_featured_plugins'] = 'Softaculous Featured Plugins';
$l['wp_featured_plugins_exp'] = 'Choose the default state of Featured Plugins';
$l['wp_featured_plugins_recommended'] = 'Softaculous Recommended (Default)';
$l['wp_featured_plugins_unchecked'] = 'Unchecked';
$l['wp_featured_plugins_disabled'] = 'Hide';

$l['backup_set'] = 'Paramètres de sauvegarde';
$l['email_set'] = 'Paramètres de messagerie';
$l['hide_feature_set'] = 'Désactiver les fonctionnalités pour les utilisateurs finaux';
$l['auto_upgrade_set'] = 'Paramètres de mise à niveau automatique';

$l['no_prefill_pass'] = 'Ne pas pré-remplir les champs de mot de passe';
$l['no_prefill_pass_exp'] = 'Lors de l\'édition d\'une installation ou d\'un domaine, le mot de passe ne sera pas affiché';
$l['enc_user_pass'] = 'Chiffrer le mot de passe API';
$l['enc_user_pass_exp'] = 'Si sélectionné, le mot de passe API pour les utilisateurs sera chiffré et stocké';

$l['sync_domains'] = 'Activer la synchronisation des domaines';
$l['sync_domains_exp_remote'] = 'Cela activera la synchronisation des domaines dans les enregistrements de '.APP.' avec la liste des domaines passée via $PRE_LOGIN dans session.php, cliquez <a href="http://www.softaculous.com/docs/Softaculous_Remote#sync-domains" target="_blank">ici</a> pour le guide';
$l['sync_domains_exp_ent'] = 'Cela activera la synchronisation des domaines dans les enregistrements de '.APP.' avec la liste des domaines passée via $PRE_LOGIN dans session.php, cliquez <a href="http://www.softaculous.com/docs/Softaculous_Enterprise_Integration#sync-domains" target="_blank">ici</a> pour le guide';

$l['email_password'] = 'Envoyer le mot de passe en texte brut';
$l['email_password_exp'] = 'Si cette case est cochée, les mots de passe seront envoyés en texte brut par courriel aux utilisateurs pour une installation, clonage, etc.';

$l['disable_sign_on'] = 'Désactiver la connexion automatique';
$l['disable_sign_on_exp'] = 'Sélectionnez cette option pour désactiver la connexion automatique au panneau d\'administration du script depuis '.APP;

$l['demo_logo'] = 'URL du logo pour les démos de scripts';
$l['demo_logo_exp'] = 'Si vide, le logo de '.APP.' sera affiché, les dimensions recommandées pour le logo sont Largeur : 150, Hauteur : 45';

$l['email_update_apps'] = 'Notifier les mises à jour des applications';
$l['email_update_apps_exp'] = 'Si activé, des courriels seront envoyés lorsque des mises à jour pour les applications installées sont disponibles';

$l['demo_logo_url'] = 'Lien personnalisé pour le logo de démo des scripts';
$l['demo_logo_url_exp'] = 'Si vide, l\'URL de '.APP.' sera utilisée';

$l['favicon_logo'] = 'URL du logo Favicon';
$l['favicon_logo_exp'] = 'Si vide, le favicon de '.APP.' sera affiché dans le panneau utilisateur final';

$l['rebranding_settings'] = 'Paramètres de rebranding';

$l['use_eu_username'] = 'Prédéfinir le nom d\'utilisateur du panneau de contrôle comme nom d\'utilisateur administrateur';
$l['use_eu_username_exp'] = 'Si défini, le nom d\'utilisateur administrateur sur le formulaire d\'installation du script sera pré-rempli avec le nom d\'utilisateur du panneau de contrôle';
$l['use_eu_email'] = 'Prédéfinir l\'email de l\'utilisateur final comme email administrateur';
$l['use_eu_email_exp'] = 'Si défini, l\'email administrateur sur le formulaire d\'installation du script sera pré-rempli avec l\'email défini dans les paramètres de l\'email de l\'utilisateur final';

$l['dbpass_len'] = 'Longueur du mot de passe utilisateur MySQL généré aléatoirement';
$l['dbpass_len_exp'] = 'Choisissez la longueur du mot de passe utilisateur de base de données généré aléatoirement. Si laissé vide, '.APP.' utilisera la valeur par défaut : 10';
$l['off_available_space'] = 'Ne pas afficher l\'espace disponible';
$l['off_available_space_exp'] = 'Si coché, l\'espace disponible ne sera pas affiché sur la page d\'aperçu du script';
$l['disable_import'] = 'Désactiver la fonctionnalité d\'importation pour les utilisateurs finaux';
$l['disable_import_exp'] = 'Cela désactivera l\'importation locale ainsi que l\'option d\'importation distante pour les utilisateurs finaux';
$l['update_system'] = 'Mettre à jour le système d\'exploitation';
$l['update_system_exp'] = 'Cela mettra à jour le système d\'exploitation en utilisant yum ou apt-get';
$l['off_rbackup'] = 'Toutes les emplacements distants';
$l['off_rbackup_exp'] = 'Si coché, les sauvegardes de '.APP.' sur un serveur distant seront désactivées pour tous les utilisateurs finaux';

$l['sync_ins_list'] = 'Synchroniser la liste des installations avec les enregistrements de '.APP;
$l['sync_ins_list_exp'] = 'Vérifiez si le répertoire d\'installation existe dans le répertoire web de l\'utilisateur et supprimez les installations des enregistrements de '.APP.' pour lesquelles le répertoire n\'existe pas';

$l['sync_ins_real_ver'] = 'Détecter et mettre à jour la version réelle des installations';
$l['sync_ins_real_ver_exp'] = 'Détectez si l\'utilisateur a mis à jour manuellement son installation et mettez à jour la version dans les enregistrements de '.APP.' en cas de discordance de version';
$l['update_system'] = 'Mettre à jour le système d\'exploitation';
$l['update_system_exp'] = 'Si activé, le système d\'exploitation sera mis à jour en utilisant Yum ou Apt-get';

$l['auto_backup_custom'] = 'Désactiver l\'heure personnalisée pour les sauvegardes automatiques';

$l['sitepad_settings'] = 'Paramètres SitePad';
$l['off_sitepad'] = 'Désactiver le constructeur de site web SitePad';
$l['off_sitepad_exp'] = 'Cela désactivera SitePad pour tous vos utilisateurs<br /><b>Note:</b> SitePad est basé sur un modèle Freemium et si vos utilisateurs passent au plan premium, vous obtenez des commissions récurrentes de SitePad. <a href="mailto:sales@sitepad.com">Plus de détails</a>';
$l['off_sitepad_conf'] = 'Êtes-vous sûr de vouloir désactiver le constructeur de site web SitePad ? Vous pouvez obtenir des revenus de SitePad via des commissions lorsque vos utilisateurs passent au plan premium de SitePad. Contactez-nous pour plus de détails sur SitePad à sales@sitepad.com';
$l['auto_backup_default'] = 'Par défaut';
$l['auto_backup'] = 'Fréquence de sauvegarde automatique par défaut';
$l['auto_backup_exp'] = 'Choisissez la fréquence de sauvegarde automatique par défaut. La valeur choisie sera présélectionnée pour les utilisateurs finaux';
$l['no_backup'] = 'Ne pas sauvegarder';
$l['daily'] = 'Une fois par jour';
$l['weekly'] = 'Une fois par semaine';
$l['monthly'] = 'Une fois par mois';
$l['backup_rotation'] = 'Rotation de sauvegarde automatique par défaut';
$l['backup_rotation_exp'] = 'Choisissez la rotation de sauvegarde automatique par défaut. La valeur choisie sera présélectionnée pour les utilisateurs finaux';

$l['hc_api_url'] = 'URL de l\'API Hosting Controller';
$l['hc_api_url_exp'] = 'Les appels d\'API pour diverses tâches telles que la récupération de la liste des utilisateurs, etc. au niveau de l\'administration ou en CLI seront effectués en utilisant cette URL de l\'API HC. Cette URL doit être une URL d\'API valide accessible depuis votre serveur et du format <b>http(s)://IP:PORT</b>';

$l['force_softaculous_on_ssl'] = 'Forcer '.APP.' à fonctionner en SSL (HTTPS)';
$l['force_softaculous_on_ssl_exp'] = 'Si activé, '.APP.' redirigera les demandes de page non-SSL vers HTTPS';

$l['off_import_mail'] = 'Désactiver les emails d\'importation d\'installation';
$l['off_import_mail_exp'] = 'Cela désactivera l\'email envoyé aux utilisateurs finaux lors de l\'importation d\'une installation.';

$l['off_checkhttps'] = 'Désactiver la vérification du certificat SSL sur le formulaire d\'installation du script';
$l['off_checkhttps_exp'] = 'Cela désactivera la vérification du certificat SSL pour les domaines lorsque l\'utilisateur choisit d\'installer un script sur le protocole https et ne verra aucune erreur si le certificat SSL n\'est pas installé';
$l['hide_sitepad'] = 'Masquer le constructeur de site web SitePad';
$l['hide_sitepad_exp'] = 'Cela désactivera SitePad pour les utilisateurs qui n\'ont pas utilisé SitePad mais laissera SitePad activé pour les utilisateurs qui ont utilisé SitePad';
$l['off_backup_au'] = 'Désactiver les sauvegardes avant la mise à niveau automatique';
$l['off_backup_au_exp'] = 'Si sélectionné, les sauvegardes ne seront pas effectuées avant de mettre à niveau les installations ou les plugins et thèmes. Note : Assurez-vous d\'avoir des sauvegardes que vous pouvez utiliser en cas d\'échec de la mise à niveau.';

// Chaînes de langue des paramètres SitePad
$l['sm_saving_error'] = 'Il y a eu des erreurs lors de l\'enregistrement des paramètres de SitePad';
$l['sm_brand'] = 'Nom de la marque';
$l['sm_brand_exp'] = 'Un seul mot pour le nom de la marque. Si vide, la valeur par défaut sera : SitePad';
$l['sm_sitename'] = 'Nom du site';
$l['sm_sitename_exp'] = 'Le nom du serveur ou de l\'entreprise utilisant SitePad. Il apparaîtra sur de nombreuses pages de l\'éditeur de site web SitePad';
$l['sm_brand_editor'] = 'Nom de l\'éditeur';
$l['sm_brand_editor_exp'] = 'Le nom de l\'éditeur à afficher. Si vide, la valeur par défaut sera : SitePad Editor';
$l['sm_logo_url'] = 'URL du logo';
$l['sm_logo_url_exp'] = 'Il doit s\'agir d\'une image PNG transparente de 100 x 100 pixels. Si vide, le logo SitePad sera affiché';
$l['sm_brand_url'] = 'URL du site web';
$l['sm_brand_url_exp'] = 'L\'URL à afficher aux utilisateurs pour cet éditeur de site web. Si vide, la valeur par défaut sera : https://sitepad.com';
$l['host_sm'] = 'Hôte de serveur personnalisé';
$l['host_sm_exp'] = 'Vous pouvez créer un enregistrement CNAME pour pointer vers <a href="https://sitepad.com/docs/admin-old/servers/" target="_blank">nos serveurs</a>. Ou vous pouvez simplement utiliser le nom d\'hôte de nos serveurs. Si vide, SitePad utilisera l\'hôte de serveur par défaut pour l\'utilisateur';
$l['sm_brand_demos'] = 'URL des démos de thèmes';
$l['sm_brand_demos_exp'] = 'Vous pouvez créer un enregistrement CNAME pour pointer vers <b>demos.sitepad.com</b> <br />Si vide, SitePad utilisera le serveur de démos par défaut pour afficher les démos de thèmes';
$l['sm_no_demos'] = 'Désactiver les démos de thèmes';
$l['sm_no_demos_exp'] = 'Cochez cette case si vous souhaitez désactiver les démos de thèmes pour l\'utilisateur';
$l['sm_no_recent_themes'] = 'Désactiver les thèmes récents';
$l['sm_no_recent_themes_exp'] = 'Cochez cette case si vous souhaitez désactiver la section des thèmes récemment ajoutés sur le tableau de bord de l\'utilisateur final';
$l['sm_ftp_host'] = 'Hôte FTP';
$l['sm_ftp_host_exp'] = 'Vous pouvez spécifier l\'hôte FTP/IP que SitePad doit utiliser pour se connecter lors de la publication des fichiers sur votre serveur. Par défaut, l\'IP du serveur sera utilisée';
$l['sm_ftp_port'] = 'Port FTP';
$l['sm_ftp_port_exp'] = 'Vous pouvez spécifier le port FTP que SitePad doit utiliser pour se connecter lors de la publication des fichiers sur votre serveur. Par défaut, le port 21 sera utilisé';

// FIN des chaînes de langue des paramètres SitePad

$l['err_no_dir'] = 'Le répertoire de sauvegarde n\'existe pas sur votre serveur';

$l['quick_install_default'] = 'Définir l\'installation rapide comme option d\'installation par défaut';
$l['quick_install_default_exp'] = 'Si sélectionné, le formulaire d\'installation par défaut affichera des options minimales (uniquement les champs obligatoires)';

$l['off_custom_install'] = 'Set Quick Install as the default and disable Custom Install';
$l['off_custom_install_exp'] = 'If selected, the install form will show minimal options (only required fields) and custom install form will be disabled';

$l['off_staging_mail'] = 'Désactiver les emails d\'installation de mise en scène';
$l['off_staging_mail_exp'] = 'Cela désactivera l\'email envoyé aux utilisateurs finaux lors de la mise en scène d\'une installation';
$l['max_bg_process'] = 'Nombre maximum de processus en arrière-plan';
$l['max_bg_process_exp'] = 'Définissez le nombre maximum de processus à exécuter simultanément en arrière-plan. Cela sera utilisé pour des tâches telles que la mise à niveau automatique. Valeur par défaut : 10';
$l['au_extra_retry'] = 'Réessayer la mise à niveau automatique des plugins et thèmes du script';
$l['au_extra_retry_exp'] = 'En cas d\'échec de la mise à niveau automatique pour un plugin ou un thème, '.APP.' réessayera après le temps donné. Valeur par défaut : 48 heures';

$l['upgrade_backup_on'] = 'Définir la case à cocher Sauvegarde pré-sélectionnée lors de la mise à niveau';
$l['upgrade_backup_on_exp'] = 'Si sélectionné, la case à cocher Créer une sauvegarde sur la page de mise à niveau du script sera par défaut cochée';

$l['off_staging'] = 'Désactiver la mise en scène';
$l['off_staging_exp'] = 'Cela désactivera la fonctionnalité de mise en scène pour les utilisateurs finaux';
$l['err_openssl'] = 'L\'extension Openssl est requise pour chiffrer le mot de passe';

$l['no_indir'] = 'Masquer le champ <b>Dans le répertoire</b>';
$l['no_indir_exp'] = 'Si sélectionné, le champ Dans le répertoire sera masqué sur le formulaire d\'installation et les utilisateurs pourront installer des scripts uniquement à la racine du domaine et non dans un sous-répertoire.';

$l['max_staging'] = 'Limite maximale des installations de mise en scène par utilisateur';
$l['max_staging_exp'] = 'Cela limitera le nombre maximum d\'installations de mise en scène qu\'un utilisateur peut créer. Par défaut : Illimité';

$l['preselect_autoupgrade_plugins'] = 'Pré-sélectionner la mise à niveau automatique des plugins';
$l['preselect_autoupgrade_plugins_exp'] = 'Si coché, l\'option de mise à niveau automatique des plugins sera pré-cochée sur la page d\'installation';

$l['preselect_autoupgrade_themes'] = 'Pré-sélectionner la mise à niveau automatique des thèmes';
$l['preselect_autoupgrade_themes_exp'] = 'Si coché, l\'option de mise à niveau automatique des thèmes sera pré-cochée sur la page d\'installation';

$l['force_upgrade_plugins'] = 'Forcer la mise à niveau des plugins';
$l['force_upgrade_plugins_exp'] = 'Si coché, l\'option de mise à niveau automatique des plugins pour les installations des utilisateurs sera activée pour les utilisateurs finaux même si ces derniers n\'ont pas coché l\'option "mise à niveau automatique des plugins" sur la page d\'édition d\'une installation particulière.';

$l['force_upgrade_themes'] = 'Forcer la mise à niveau des thèmes';
$l['force_upgrade_themes_exp'] = 'Si coché, l\'option de mise à niveau automatique des thèmes pour les installations des utilisateurs sera activée pour les utilisateurs finaux même si ces derniers n\'ont pas coché l\'option "mise à niveau automatique des thèmes" sur la page d\'édition d\'une installation particulière.';

$l['all_scripts'] = 'Tous les scripts';

$l['disable_csrf'] = 'Désactiver le CSRF';
$l['disable_csrf_exp'] = 'Cela désactivera la vérification de sécurité CSRF dans Softaculous';

$l['cookie_name_invalid'] = 'Le nom de cookie que vous avez soumis est invalide.';
$l['disable_manage_sets'] = 'Désactiver la fonctionnalité de gestion des ensembles WordPress pour les utilisateurs finaux';
$l['disable_manage_sets_exp'] = 'Cela désactivera la fonctionnalité des ensembles de plugins/thèmes WordPress pour les utilisateurs finaux. Ils pourront installer des ensembles créés par l\'administrateur';

$l['disable_backup'] = 'Désactiver les emplacements de sauvegarde pour les utilisateurs finaux';
$l['disable_backup_exp'] = 'Sélectionnez les emplacements de sauvegarde que vous souhaitez désactiver pour les utilisateurs finaux';

$l['disable_local_backup'] = 'Sauvegardes locales';
$l['remote_backup_ftp'] = 'FTP';
$l['remote_backup_ftps'] = 'FTPS';
$l['remote_backup_sftp'] = 'SFTP';
$l['remote_backup_dropbox'] = 'Dropbox';
$l['remote_backup_gdrive'] = 'Google Drive';
$l['remote_backup_webdav'] = 'WebDAV';
$l['remote_backup_aws'] = 'Amazon S3';
$l['remote_backup_onedrive'] = 'Microsoft OneDrive';

$l['default_timezone'] = 'Fuseau horaire par défaut du serveur';
$l['timezone_invalid'] = 'Le fuseau horaire que vous avez sélectionné est invalide';

$l['user_homedir'] = 'Répertoire de base pour les utilisateurs';
$l['user_homedir_exp'] = 'Entrez le répertoire de base, si votre répertoire de base est un chemin personnalisé, par exemple /home2';

$l['eu_default_email_settings'] = 'Paramètres de messagerie par défaut pour les utilisateurs finaux';
$l['eu_default_email_settings_exp'] = 'Choisissez les paramètres de messagerie par défaut pour les utilisateurs finaux. Les utilisateurs peuvent modifier les paramètres selon leurs préférences.';
$l['eu_off_default_install_notify'] = 'Emails d\'installation';
$l['eu_off_default_remove_notify'] = 'Emails de suppression d\'installation';
$l['eu_off_default_edit_notify'] = 'Emails de modification d\'installation';
$l['eu_off_default_backup_notify'] = 'Emails de sauvegarde';
$l['eu_off_default_restore_notify'] = 'Emails de restauration';
$l['eu_off_default_template_notify'] = 'Emails de création de modèle';
$l['eu_off_default_restore_template_notify'] = 'Emails de restauration de modèle';
$l['eu_off_default_clone_notify'] = 'Emails de clonage';
$l['eu_off_default_staging_notify'] = 'Emails de mise en scène';
$l['eu_off_default_import_notify'] = 'Emails d\'importation';
$l['eu_off_default_update_notify'] = 'Emails de notification de mise à jour';
$l['eu_default_plainpass_notify'] = 'Envoyer les mots de passe en texte brut';

$l['disable_wp_icon_jupiter'] = 'Désactiver l\'icône de gestion WordPress dans le thème jupiter de cPanel';
$l['disable_wp_icon_jupiter_exp'] = 'Cela désactivera l\'icône de gestion WordPress dans le menu de gauche dans le thème jupiter de cPanel';

$l['disable_security_measures'] = 'Désactiver les mesures de sécurité dans le gestionnaire WordPress';
$l['disable_security_measures_exp'] = 'Cela désactivera la fonctionnalité des mesures de sécurité pour les utilisateurs finaux dans le gestionnaire WordPress';

$l['disable_wordpress_manager'] = 'Désactiver le gestionnaire WordPress';
$l['disable_wordpress_manager_exp'] = 'Cela désactivera la fonctionnalité du gestionnaire WordPress pour les utilisateurs finaux';
$l['screenshot_frequency'] = 'Fréquence de capture d\'écran d\'installation';
$l['screenshot_frequency_exp'] = 'Définissez la fréquence (en heures) de mise à jour des captures d\'écran pour les installations des utilisateurs finaux. Valeur par défaut : 1 heure';
$l['err_screenshot_frequency'] = 'La fréquence minimale des <b>captures d\'écran d\'installation</b> est de 1 heure';
$l['off_push_to_live_backup'] = 'Désactiver les sauvegardes avant le passage en production';
$l['off_push_to_live_backup_exp'] = 'Si sélectionné, les sauvegardes ne seront pas effectuées avant de pousser le site de mise en scène en production. Note : Assurez-vous d\'avoir des sauvegardes que vous pouvez utiliser en cas d\'échec du passage en production.';
$l['wordpress_manager_title'] = 'Définir le titre de l\'icône du gestionnaire WordPress';
$l['wordpress_manager_title_exp'] = 'Cela définira un nom souhaité pour votre icône de gestionnaire WordPress dans le panneau de contrôle';
$l['auto_import_manual_ins'] = 'Importer automatiquement les installations manuelles';
$l['auto_import_manual_ins_exp'] = 'Si activé, les installations manuelles effectuées par les utilisateurs seront automatiquement importées dans Softaculous (toutes les 24 heures).';

$l['auto_import_wptoolkit'] = 'Importer automatiquement les installations de WP Toolkit';
$l['auto_import_wptoolkit_exp'] = 'Si activé, les installations effectuées par les utilisateurs via WP Toolkit seront automatiquement importées dans '.APP.' (toutes les 24 heures).';

$l['disable_softaculous_pro_plugin'] = 'Disable SoftWP / Softaculous Pro Plugin';
$l['disable_softaculous_pro_plugin_exp'] = 'This will disable installing SoftWP plugin while installing WordPress';
$l['disable_softaculous_pro_conf'] = 'Are you sure you want to disable Softaculous Pro Plugin ? <br /><br /> You can instead <b>re-brand</b> the plugin with your brand name and logo. <br /><br />The Pro plugin is included in your license cost and it includes features like <b>AI, Onboarding and Assistant</b> for your users. The Softaculous Pro plugin also includes <b>pro version</b> of several plugins like <b><a href="https://loginizer.com" target="_blank">Loginizer</a>, <a href="https://pagelayer.com" target="_blank">Pagelayer</a>, <a href="https://backuply.com" target="_blank">Backuply</a>, <a href="https://speedycache.com" target="_blank">Speedycache</a>, <a href="https://gosmtp.net" target="_blank">GoSMTP</a>, <a href="https://fileorganizer.net" target="_blank">FileOrganizer</a> and more</b> which are included in your license cost. <br /><br />Contact us for more details about Softaculous Pro Plugin at <a href="mailto:sales@softaculous.com">sales@softaculous.com</a>';
$l['ok'] = 'Ok';
$l['cancel'] = 'Cancel';