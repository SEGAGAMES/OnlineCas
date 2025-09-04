<?php

//////////////////////////////////////////////////////////////
//===========================================================
// editdetail_lang.php
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
$l['wrong_ins_title'] = 'Mauvais ID d\'installation';
$l['wrong_ins'] = 'L\'identifiant d\'installation que vous avez soumis n\'existe pas';
$l['cant_remove_dir'] = 'Le répertoire ne peut pas être supprimé car il s\'agit du répertoire d\'origine. Veuillez décocher l\'option <b>Supprimer le répertoire</b> pour continuer sans supprimer le répertoire.';
$l['no_dir'] = 'Le répertoire d\'installation n\'existe pas !';
$l['no_datadir'] = 'Le répertoire de données n\'existe pas !';
$l['empty_datadir'] = 'Le répertoire de données ne peut pas être vide';
$l['no_wwwdir'] = 'Le répertoire Web n\'existe pas !';
$l['wrong_url'] = 'L\'URL et le nom du REPERTOIRE ne correspondent pas';
$l['wrong_wwwurl'] = 'L\'URL WEB et le nom du REPERTOIRE WEB ne correspondent pas';
$l['err_mysql_user'] = 'Le nom d\'utilisateur ou le mot de passe MySQL ou l\'hôte de la base de données est incorrect car une connexion n\'a pas pu être établie.';
$l['err_mysql_db'] = 'Le nom de la base de données MySQL est incorrect car la base de données n\'a pas pu être sélectionnée.';
$l['mail_path'] = 'Chemin';
$l['mail_url'] = 'URL';
$l['mail_db'] = 'Base de données MySQL';
$l['mail_dbuser'] = 'Utilisateur de la BD MySQL';
$l['mail_dbhost'] = 'Hôte de la BD MySQL';
$l['mail_dbpass'] = 'Mot de passe de la BD MySQL';
$l['mail_time'] = 'Moment de l\'Installation';
$l['mail_editdetail_time'] = 'Moment de la Modification';
$l['mail_subject'] = 'Détails des éléments modifiés de &soft-1;';
$l['mail_cron_command'] = 'CRON Job';
$l['mail_datadir'] = 'Répertoire des données';
$l['mail_wwwdir'] = 'Répertoire Web';
$l['mail_wwwurl'] = 'URL du répertoire Web';

// Chaînes de thème
$l['<title>'] = APP.' - Modifier';
$l['ins_details'] = 'Détails de l\'installation';
$l['info'] = 'Info';
$l['ins_softname'] = 'Logiciel';
$l['ins_num'] = 'Numéro de l\'installation';
$l['ins_ver'] = 'Version';
$l['ins_time'] = 'Date de l\'installation';
$l['ins_path'] = 'Chemin';
$l['ins_url'] = 'URL';
$l['ins_admin_url'] = 'URL d\'administration';
$l['ins_db'] = 'Nom de la base de données';
$l['ins_dbuser'] = 'Utilisateur de la base de données';
$l['ins_dbpass'] = 'Mot de passe de la base de données';
$l['ins_dbhost'] = 'Hôte de la base de données';
$l['ins_datadir'] = 'Répertoire des données';
$l['ins_wwwdir'] = 'Répertoire Web';
$l['ins_wwwurl'] = 'URL du répertoire Web';
$l['ins_cron_command'] = 'Commande Cron';
$l['details_edited'] = 'Les détails de l\'installation ont été édités avec succès';
$l['version_edited'] = 'La version a été mise à jour dans nos archives.';
$l['return'] = 'Retour au sommaire';
$l['return_to_wpm'] = 'Retour à la gestion de WordPress';

$l['edit_ins'] = 'Modifier les détails de l\'installation';
$l['edit_dir'] = 'Répertoire';
$l['edit_datadir'] = 'Répertoire de données';
$l['edit_db'] = 'Nom de la base de données';
$l['edit_dbuser'] = 'Utilisateur de la base de données';
$l['edit_dbpass'] = 'Mot de passe de la base de données';
$l['edit_dbhost'] = 'Hôte de la base de données';
$l['edit_url'] = 'URL';
$l['editins'] = 'Enregistrer les détails de l\'installation';
$l['mail_editdetail_ins'] = 'Les détails de l\'installation de &soft-1; ont été modifiés. Voici les détails modifiés : ';
$l['edit_wwwdir'] = 'Répertoire Web';
$l['edit_wwwurl'] = 'URL du répertoire Web';
$l['disable_notify_update'] = 'Désactiver les e-mails de notification de mise à jour';
$l['exp_disable_notify_update'] = 'Si cette case est cochée, vous ne recevrez pas de notification par e-mail pour les mises à jour disponibles pour cette installation.';
$l['alreadyupdated'] = 'Hmm... il semble que la version actuelle de l\'installation soit <b>&soft-1;</b> et non <b>&soft-2;</b>. <br />Cliquez ici pour mettre à jour les enregistrements '.APP.'.';
$l['edit_acc_detail'] = 'Modifier les détails du compte administratif';
$l['eu_auto_upgrade'] = 'Mise à jour automatique';
$l['exp_eu_auto_upgrade'] = 'Sélectionnez la préférence de mise à niveau automatique pour cette installation lorsqu\'une nouvelle version est disponible';
$l['auto_upgrade_plugins'] = 'Mise à jour automatique des plugins &soft-1;';
$l['exp_auto_upgrade_plugins'] = 'Si coché, tous les plugins &soft-1; présents pour cette installation seront automatiquement mis à niveau vers la dernière version (toutes les 24 heures).';
$l['auto_upgrade_themes'] = 'Mise à jour automatique des thèmes &soft-1;';
$l['exp_auto_upgrade_themes'] = 'Si coché, tous les thèmes &soft-1; présents pour cette installation seront automatiquement mis à niveau vers la dernière version (toutes les 24 heures).';
$l['auto_backup'] = 'Sauvegardes automatisées';
$l['exp_auto_backup'] = APP.' effectuera des sauvegardes automatiques via CRON selon la fréquence que vous aurez choisie';
$l['auto_backup_rotation'] = 'Rotation des sauvegardes';
$l['exp_auto_backup_rotation'] = 'Si la limite de rotation des sauvegardes est atteinte, '.APP.' supprimera la sauvegarde la plus ancienne pour cette installation et en créera une nouvelle. Les sauvegardes utiliseront votre espace, choisissez donc la rotation des sauvegardes en fonction de l\'espace disponible sur votre serveur';
$l['no_backup'] = 'Ne pas sauvegarder';
$l['daily'] = 'Une fois par jour';
$l['weekly'] = 'Une fois par semaine';
$l['monthly'] = 'Une fois par mois';
$l['unlimited'] = 'Illimité';
$l['auto_backup_not_allowed'] = 'La fréquence de sauvegarde automatique que vous avez choisie n\'est pas valable';

$l['no_edit'] = 'Le fichier EDIT.XML est introuvable ! Veuillez le signaler à l\'administrateur du serveur.';
$l['no_functions'] = 'Le fichier des FONCTIONS D\'ÉDITION est introuvable ! Veuillez le signaler à l\'administrateur du serveur.';
$l['no_field'] = 'Le champ <b>&soft-1;</b> est requis et doit être rempli.';
$l['err_auto_backup_limit'] = 'La rotation des sauvegardes automatiques ne peut pas être supérieure à <b>&soft-1;</b>';
$l['select_files'] = 'Fichiers/Dossiers supplémentaires associés à votre installation';
$l['select_files_exp'] = 'Veuillez sélectionner les fichiers/dossiers supplémentaires associés à cette installation. <br />Cette liste sera utilisée pour des opérations comme le clonage, la sauvegarde et la suppression de cette installation';
$l['invalid_files_in_post_list'] = 'Il y avait des fichiers/dossiers invalides sélectionnés';
$l['select_files_list'] = 'Sélectionner des fichiers/dossiers supplémentaires';

$l['select_files_backup'] = 'Utiliser les fichiers/dossiers supplémentaires sélectionnés pour la sauvegarde';
$l['select_files_backup_exp'] = 'Si sélectionné, seuls les fichiers/dossiers liés à cette installation seront sauvegardés. <br />Par défaut, la sauvegarde inclura tous les fichiers/dossiers sous ce chemin';
$l['no'] = 'Non (Sauvegarder tous les fichiers et dossiers dans le répertoire d\'installation à l\'exclusion des sous-domaines)';
$l['yes'] = 'Oui (Sauvegarder les fichiers/dossiers de l\'application standard ainsi que les fichiers/dossiers sélectionnés ci-dessus)';
$l['check_all_edit'] = 'Tout cocher';

$l['choose_theme'] = 'Installer le thème';
$l['clear_theme'] = 'Effacer la sélection';
$l['installing_theme'] = 'Installation du thème';
$l['cant_download_theme'] = 'Impossible de télécharger les fichiers du thème';
$l['no_theme_package'] = 'Le paquet d\'installation du thème est introuvable!';
$l['unzipping_theme_files'] = 'Copie des fichiers et dossiers de thèmes';
$l['use_this_theme'] = 'Sélectionnez ceci';
$l['demo'] = 'Démo';
$l['refresh'] = 'Rafraîchir';
$l['purchase'] = 'Acheter';
$l['close'] = 'Fermer';
$l['free'] = 'Gratuit';
$l['select'] = 'Sélectionner';
$l['theme_is_optional'] = '<b>Note</b>: Ceci est facultatif. Sélectionnez uniquement si vous souhaitez changer de thème.';
$l['your_purchased'] = 'Acheté ';//trailing space is required
$l['your_purchased_times'] = ' fois';
$l['err_theme_not_bought'] = 'Vous n\'avez pas acheté le thème, vous ne pouvez donc pas l\'installer !';
$l['err_theme_reached_limit'] = 'Veuillez acheter ce thème et réessayer de l\'installer. Vous avez atteint la limite d\'installation de ce thème.';
$l['payment_heading'] = 'Acheter le thème';
$l['payment_redirect'] = 'Vous serez redirigé pour payer ';//trailing space is required
$l['date_added'] = 'Date d\'ajout';
$l['downloaded'] = 'Téléchargé';
$l['edit_dbpass_exp'] = 'Nouveau mot de passe de la base de données. <br/>Laissez vide si vous ne souhaitez pas mettre à jour le mot de passe';
$l['select_tables'] = 'Tables de base de données supplémentaires associées à votre installation';
$l['select_tables_exp'] = 'Les tables sélectionnées seront incluses dans la sauvegarde de la base de données';

$l['backup_loc'] = 'Lieu de sauvegarde';
$l['exp_backup_loc'] = 'Choisissez l\'emplacement de sauvegarde à utiliser lors de la sauvegarde de cette installation';
$l['default'] = 'Par défaut';
$l['invalid_backup_location'] = 'Le lieu de sauvegarde soumis n\'existe pas';
$l['local_folder'] = 'Dossier local';

$l['cron_min'] = 'Min';
$l['cron_hour'] = 'Heure';
$l['cron_day'] = 'Jour';
$l['cron_month'] = 'Mois';
$l['cron_weekday'] = 'Jour de la semaine';

$l['no_cron_min'] = 'Aucune minute Cron n\'a été spécifiée';
$l['no_cron_hour'] = 'Aucune heure Cron n\'a été spécifiée';
$l['no_cron_day'] = 'Aucun jour Cron n\'a été spécifié';
$l['no_cron_month'] = 'Aucun mois Cron n\'a été spécifié';
$l['no_cron_weekday'] = 'Aucun jour de la semaine Cron n\'a été spécifié';

$l['custom_autobackup'] = 'Personnalisé';
$l['custom'] = 'Temps de Cron personnalisé';
$l['custom_autobackup_cron'] = 'Temps de Cron pour les sauvegardes automatisées';
$l['custom_autobackup_cron_exp'] = 'Veuillez préciser les horaires de CRON pour les sauvegardes automatisées';

// Erreurs pour les paramètres de sauvegarde automatique cron
$l['wrong_autobackup_cron_min'] = 'La minute de sauvegarde automatique cron est incorrecte. Les valeurs valides sont 0-59 ou *';
$l['wrong_autobackup_cron_hour'] = 'L\'heure de sauvegarde automatique cron est incorrecte. Les valeurs valides sont 0-23 ou *';
$l['wrong_autobackup_cron_day'] = 'Le jour de sauvegarde automatique cron est incorrect. Les valeurs valides sont 1-31 ou *';
$l['wrong_autobackup_cron_month'] = 'Le mois de sauvegarde automatique cron est incorrect. Les valeurs valides sont 1-12 ou *';
$l['wrong_autobackup_cron_weekday'] = 'Le jour de la semaine de sauvegarde automatique cron est incorrect. Les valeurs valides sont 0-7 ou *';

$l['done'] = 'Fait';
$l['error'] = 'Erreur';
$l['plugins_upgrade_now'] = 'Mettre à jour le(s) plugin(s) maintenant';
$l['theme_upgrade_now'] = 'Mettre à jour le thème maintenant';
$l['plugins_upgrade_success'] = 'Mise à jour réussie du/des plugin(s) !';
$l['theme_upgrade_success'] = 'Thème mis à jour avec succès !';
$l['fetch_db_details'] = 'Permettre à Softaculous de récupérer les détails de la base de données ?';

$l['edit_notes'] = 'Voici quelques notes importantes. Il est fortement recommandé de les lire';
$l['domain_not_in_list'] = 'L\'URL affichée ne figure pas dans la liste de votre/vos domaine(s)';

$l['dont_auto_upgrade'] = 'Ne pas mettre à niveau automatiquement'; 
$l['minor_auto_upgrade'] = 'Mettre à jour uniquement les versions <b>mineures</b>'; 
$l['major_auto_upgrade'] = 'Mettre à jour vers la dernière version disponible (versions <b>majeures</b> et <b>mineures</b>)'; 
$l['auto_upgrade_major'] = '(majeures et mineures)'; 
$l['auto_upgrade_minor'] = '(mineures)';

$l['wpc_return'] = 'Retour à la page des installations';

$l['rbackup_disabled'] = 'La sauvegarde sur les sites distants est désactivée par l\'administrateur';
$l['rbackup_protocol_disabled'] = 'La sauvegarde sur <b>&soft-1;</b> est désactivée par l\'administrateur';
$l['no_files'] = 'Fichiers d\'installation manquants!';

$l['softwp_license'] = 'SoftWP License';
$l['softwp_gen_license'] = 'Generate SoftWP License';
$l['softwp_re_gen_license'] = 'Regenerate SoftWP License';
$l['only_wp'] = 'Only Wordpress Installations are allowed';