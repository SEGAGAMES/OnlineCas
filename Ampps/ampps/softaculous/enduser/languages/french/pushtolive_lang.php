<?php

//////////////////////////////////////////////////////////////
//===========================================================
// pushtolive_lang.php
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
$l['no_info_file'] = 'Le fichier INFO.XML n\'a pas pu être trouvé! Veuillez signaler ceci à l\'administrateur du serveur.';
$l['incompatible'] = 'Le logiciel nécessite une version supérieure de '.APP.'! Veuillez signaler ceci à l\'administrateur du serveur.';
$l['no_install'] = 'Le fichier INSTALL.XML n\'a pas pu être trouvé! Veuillez signaler ceci à l\'administrateur du serveur.';
$l['no_functions'] = 'Le fichier FONCTIONS DE CLONAGE n\'a pas pu être trouvé!';
$l['no_space'] = 'Vous n\'avez pas suffisamment d\'espace pour installer ce logiciel!';
$l['pushing'] = 'Pousser l\'installation en direct';
$l['staging'] = 'Staging';
$l['downloading'] = 'Téléchargement du package';
$l['cant_push_db'] = 'Impossible de pousser la base de données';
$l['fail_create'] = 'Échec de la création du répertoire';
$l['fail_create_datadir'] = 'Échec de la création du répertoire de données';
$l['cant_copy_dir'] = 'Le répertoire ne peut pas être copié car c\'est le répertoire principal';
$l['cant_connect_mysql'] = 'Impossible de se connecter à la base de données du site en direct, veuillez vérifier le nom d\'utilisateur/mot de passe de votre base de données. Si vous avez changé, veuillez mettre à jour les détails dans les installations de '.APP.' en utilisant Modifier les détails';
$l['failed_backup'] = 'Impossible de créer une sauvegarde avant de pousser l\'installation en direct';

$l['no_cron_min'] = 'Aucune minute Cron n\'a été spécifiée';
$l['no_cron_hour'] = 'Aucune heure Cron n\'a été spécifiée';
$l['no_cron_day'] = 'Aucun jour Cron n\'a été spécifié';
$l['no_cron_month'] = 'Aucun mois Cron n\'a été spécifié';
$l['no_cron_weekday'] = 'Aucun jour de la semaine Cron n\'a été spécifié';
$l['wrong_cron_min'] = 'Minute Cron incorrecte. Les valeurs valides sont 0-59 ou un <b>*</b>';
$l['wrong_cron_hour'] = 'Heure Cron incorrecte. Les valeurs valides sont 0-23 ou un <b>*</b>';
$l['wrong_cron_day'] = 'Jour Cron incorrect. Les valeurs valides sont 1-31 ou un <b>*</b>';
$l['wrong_cron_month'] = 'Mois Cron incorrect. Les valeurs valides sont 1-12 ou un <b>*</b>';
$l['wrong_cron_weekday'] = 'Jour de la semaine Cron incorrect. Les valeurs valides sont 0-7 ou un <b>*</b>';
$l['no_datadir'] = 'Aucun répertoire de données n\'a été spécifié';
$l['datadir_exists'] = 'Le répertoire de données que vous avez soumis existe déjà. Veuillez en spécifier un autre.';
$l['no_decompress_data'] = 'Il y a eu des erreurs lors de la décompression des fichiers de données.';
$l['some_files_exist'] = 'L\'installation ne peut pas continuer car les fichiers suivants existent déjà dans le dossier cible : ';
$l['delete_files'] = 'Veuillez supprimer ces fichiers ou choisir un autre dossier.';
$l['overwrite_exist'] = '<b>OU</b> <br /><input type="checkbox" name="overwrite_existing" id="overwrite_existing" />&nbsp;&nbsp;<b><span style="color:#000;">Sélectionnez la case pour écraser tous les fichiers et continuer</span></b>';
$l['prog_pushtolive'] = 'Pousser en direct';
$l['prog_push_complete'] = 'Pousser en direct terminé';
$l['checking_data'] = 'Vérification des données soumises';
$l['unzipping_files'] = 'Copie des fichiers et dossiers';
$l['unzipping_datadir'] = 'Décompression des fichiers de données';
$l['prop_db'] = 'Propagation de la base de données';
$l['finishing_process'] = 'Fin du processus de poussée en direct';
$l['wait_note'] = '<b>REMARQUE :</b> Cela peut prendre 3 à 4 minutes. Veuillez ne pas quitter cette page tant que la barre de progression n\'a pas atteint 100%';

$l['no_php_install'] = 'PHP n\'est pas installé. Pour l\'installer, veuillez cliquer <a href="'.$globals['index'].'act=apps&app=1">ici</a>';
$l['no_mysql_install'] = 'MySQL n\'est pas installé. Pour l\'installer, veuillez cliquer <a href="'.$globals['index'].'act=apps&app=16">ici</a>';
$l['no_field'] = 'Le champ <b>&soft-1;</b> est requis et doit être rempli.';
$l['error_adddb'] = 'La base de données n\'a pas pu être créée';
$l['error_adduser'] = 'Une erreur s\'est produite lors de l\'ajout d\'un utilisateur à la nouvelle base de données';
$l['no_package'] = 'Le package d\'installation n\'a pas pu être trouvé!';
$l['no_decompress'] = 'Il y a eu des erreurs lors de la décompression des fichiers du package.';
$l['no_pushtolive_support'] = 'La poussée en direct n\'est pas prise en charge pour ce script';
$l['invalid_script'] = 'ID de script invalide';
$l['no_domain_found'] = 'Aucun domaine trouvé. Veuillez ajouter un domaine pour installer le script';
$l['no_staging_ins'] = 'Cette installation n\'est pas une installation de staging';
$l['pushtolive_backup_note'] = 'Sauvegarde créée avant de pousser le site en direct';
$l['pushtolive_partial_backup_note'] = 'Sauvegarde créée avant de pousser le site en direct (Peut être une sauvegarde partielle)';

//Theme Strings
$l['<title>'] = APP.' - Pousser l\'installation en direct';
$l['info'] = 'Info';
$l['ins_softname'] = 'Logiciel';
$l['ins_num'] = 'Numéro d\'installation';
$l['ins_ver'] = 'Version';
$l['ins_time'] = 'Heure d\'installation';
$l['ins_path'] = 'Chemin';
$l['ins_url'] = 'URL';
$l['ins_admin_url'] = 'URL d\'administration';
$l['ins_db'] = 'Nom de la base de données';
$l['ins_dbuser'] = 'Nom d\'utilisateur de la base de données';
$l['ins_dbpass'] = 'Mot de passe de la base de données';
$l['ins_dbhost'] = 'Hôte de la base de données';
$l['ins_datadir'] = 'Répertoire de données';
$l['ins_wwwdir'] = 'Répertoire Web';
$l['ins_wwwurl'] = 'URL du répertoire Web';
$l['ins_cron_command'] = 'Commande Cron';
$l['cloned'] = 'L\'installation a été clonée avec succès';
$l['clone_ins'] = 'Détails de clonage de l\'installation';
$l['default_push'] = 'Poussée par défaut';
$l['custom_push'] = 'Personnaliser la poussée';
$l['current_to_live'] = 'Dissocier cette installation de la mise en direct';

$l['overwrite'] = 'Écraser les fichiers';
$l['database_exists'] = 'La base de données existe déjà. Veuillez choisir un nom différent.';
$l['no_softdomain'] = 'Vous n\'avez pas choisi le domaine pour installer le logiciel.';
$l['wrong_softdomain'] = 'Le chemin du domaine que vous avez sélectionné n\'a pas pu être trouvé.';
$l['no_space'] = 'Vous n\'avez pas suffisamment d\'espace pour installer ce logiciel!';
$l['no_softdb'] = 'La base de données n\'a pas été envoyée.';

$l['softcopy_note'] = '<b>REMARQUE</b> : Ce logiciel exige qu\'il soit installé en utilisant son propre utilitaire d\'installation. Veuillez visiter l\'URL qui sera affichée une fois que les fichiers auront été copiés pour terminer le processus d\'installation.';
$l['softsubmit'] = 'Pousser en direct';
$l['congrats'] = 'Félicitations, le site a été poussé avec succès en direct';
$l['succesful'] = 'Le site a été poussé avec succès en direct à';
$l['admin_url'] = 'URL d\'administration';
$l['setup_continue'] = 'Cependant, la configuration sera complétée par le logiciel lui-même. Pour terminer la configuration, veuillez visiter l\'URL suivante';
$l['enjoy'] = 'Nous espérons que le processus a été facile.';
$l['install_notes'] = 'Voici quelques notes importantes. Il est fortement recommandé de les lire ';
$l['please_note'] = '<b>REMARQUE</b> : '.APP.' est juste un installateur automatique de logiciels et ne fournit aucun support pour les packages logiciels individuels. Veuillez visiter le site web du fournisseur de logiciels pour obtenir de l\'aide!';
$l['regards'] = 'Cordialement';
$l['softinstaller'] = 'Installeur automatique '.APP.'';
$l['return'] = 'Retour à l\'aperçu';
$l['return_to_wpm'] = 'Retour à la gestion de WordPress';

// Ces chaînes sont pour Softaculous Remote
$l['hostname'] = 'Nom d\'hôte de la base de données';
$l['hostname_exp'] = 'Le nom d\'hôte MySQL (principalement <b>localhost</b>)';
$l['dbusername'] = 'Nom d\'utilisateur de la base de données';
$l['dbusername_exp'] = 'Le nom d\'utilisateur MySQL';
$l['dbuserpass'] = 'Mot de passe de la base de données';
$l['dbuserpass_exp'] = 'Le mot de passe de l\'utilisateur MySQL';
$l['database_name_exp_aefer'] = 'Tapez le nom de la base de données à utiliser pour l\'installation';

$l['pushtolive_tweet_sub'] = 'Dites-le à vos amis';

$l['soft_ins_exists'] = 'Une installation existe déjà à &soft-1; selon nos enregistrements. Pour cloner l\'application à cet emplacement, veuillez désinstaller l\'installation existante !';

$l['no_sclone'] = 'Le fichier CLONE.XML n\'a pas pu être trouvé! Veuillez signaler ceci à l\'administrateur du serveur.';
$l['no_functions'] = 'Le fichier FONCTIONS DE CLONAGE n\'a pas pu être trouvé! Veuillez signaler ceci à l\'administrateur du serveur.';

$l['pushtolive_bg'] = 'La poussée en direct a commencé en arrière-plan';
$l['err_mysql_db'] = 'Le nom de la base de données MySQL est incorrect car la base de données n\'a pas pu être sélectionnée';
$l['err_mysql_db_live'] = 'Le nom de la base de données MySQL de l\'installation en direct est incorrect car la base de données n\'a pas pu être sélectionnée';

$l['push_btn'] = 'Options par défaut';
$l['custom_push_btn'] = 'Personnaliser';
$l['push'] = 'Pousser en direct';
$l['prog_pushing'] = 'Poussée en direct';
$l['overwrite_files'] = 'Écraser les fichiers/dossiers';
$l['overwrite_files_exp'] = 'Si cochée, les fichiers/dossiers du site en direct seront écrasés';
$l['structural_change'] = 'Changements de structure de la base de données';
$l['table_data_change'] = 'Changements de données dans les tables';
$l['no_structural_change'] = 'Il n\'y a aucun changement de structure';
$l['no_table_data_change'] = 'Il n\'y a aucun changement de données';
$l['select_tables'] = 'Choisir les changements de la base de données';
$l['select_tables_exp'] = 'Sélectionnez les changements de structure/données de la base de données que vous souhaitez pousser sur le site en direct';
$l['check_all_edit'] = 'Tout cocher';
$l['push_db'] = 'Pousser la base de données complète';
$l['push_db_exp'] = 'Si cochée, la base de données complète sera effacée de l\'installation en direct et la base de données actuelle sera importée sur le site en direct';
$l['backing_up'] = 'Sauvegarde de l\'installation en direct';
$l['push_views'] = 'Pousser les vues de la base de données';
$l['push_views_exp'] = 'Si cochée, les vues de la base de données seront poussées sur le site en direct';
$l['live_site_desc'] = 'Le site de staging actuel sera poussé sur votre site en direct :';
$l['default_push_desc'] = 'Cela remplacera tous les fichiers de votre installation en direct par ceux de l\'installation de staging et effacera la base de données en direct et importera la base de données de votre installation de staging';
$l['corfirm_live'] = 'Êtes-vous sûr de vouloir dissocier cette installation du site en direct ? Vous ne pourrez plus pousser le contenu de ce site en direct. Cette installation sera définie comme une installation indépendante sans lien avec votre site en direct.';

$l['failed_rsync'] = 'Échec de la synchronisation des fichiers d\'installation';
$l['failed_rsync_datadir'] = 'Échec de la synchronisation des fichiers du répertoire de données';
$l['wp_cli_replace_fail'] = 'Échec du remplacement des données sur le site de destination (à l\'aide de wp-cli)';