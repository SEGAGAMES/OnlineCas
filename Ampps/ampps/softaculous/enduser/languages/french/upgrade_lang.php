<?php

//////////////////////////////////////////////////////////////
//===========================================================
// upgrade_lang.php
//===========================================================
// SOFTACULOUS FRENCH PACK
// Version 3
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
// Date:       22nd Augustus 2009
// Time:       12:00 hrs
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

$l['no_info_file'] = 'Le fichier INFO.XML ... n\'a pas pu être trouvé ! Veuillez le signaler à l\'administrateur du serveur.';
$l['incompatible'] = 'Le logiciel requiert une version supérieure de '.APP.' ! Veuillez le signaler à l\'administrateur du serveur.';
$l['no_upgrade'] = 'Le fichier UPGRADE.XML n\'a pas pu être trouvé! Veuillez le signaler à l\'administrateur du serveur.';
$l['no_functions'] = 'Le fichier contenant les fonctions de mise à jour n\'a pas pu être trouvé ! Veuillez le signaler à l\'administrateur du serveur.';
$l['no_field'] = 'Le champ <b> &soft-1;</b> est obligatoire et doit être rempli.';
$l['no_package'] = 'Le fichier de mise à niveau n\'a pas pu être trouvé!';
$l['no_decompress'] = 'Il y a eu quelques erreurs dans la décompression des fichiers de mise à jour.';
$l['checking_data'] = 'Vérification des données soumises';
$l['unzipping_files'] = 'Copie des fichiers et des dossiers';
$l['unzipping_datadir'] = 'Décompression des fichiers de données';
$l['prop_db'] = 'Mise à jour de la base de données';
$l['finishing_process'] = 'Finalisation de la mise à niveau';
$l['wait_note'] = '<b>NOTE:</b> Cela peut prendre 3-4 minutes. Veuillez ne pas quitter cette page avant que la barre de progression n\'atteigne 100%';
$l['cver_greater'] = 'La version actuelle est supérieure ou égale à la version vers laquelle vous effectuez la mise à niveau. Cela est possible si vous avez mis à jour manuellement l\'installation. Si ce n\'est pas le cas, veuillez cocher la case suivante';
$l['force_upgrade'] = 'Forcer la mise à niveau';
$l['backup_finish'] = 'Sauvegarde terminée';
$l['backup_fail_proceed'] = 'Une erreur est survenue lors du processus de sauvegarde. Continuer la mise à niveau ?';
$l['backing_up'] = 'Sauvegarde de l\'installation';
$l['no_space'] = 'Vous ne disposez pas de suffisamment d\'espace pour mettre à niveau cette installation!';
$l['invalid_insid'] = 'ID d\'installation invalide';
$l['invalid_script'] = 'ID de script invalide';
$l['no_upgrade_support'] = 'La mise à niveau n\'est pas prise en charge pour ce script';

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['upgrade'] = 'Mise à niveau du logiciel';
$l['softins_url'] = 'URL';
$l['softins_path'] = 'Chemin';
$l['softcopy_note'] = '<b> NOTE </b>: Ce logiciel nécessite une mise à jour en utilisant son propre script de mise à niveau. Veuillez donc visiter la page web qui sera affichée une fois que les fichiers auront été copiés pour terminer le processus de mise à niveau.';
$l['softsubmit'] = 'Mise à niveau';
$l['congrats'] = 'Félicitations, le logiciel a été mis à jour avec succès';
$l['succesful'] = 'a été mis à niveau à';
$l['admin_url'] = 'URL Admin';
$l['setup_continue'] = 'Toutefois, la mise à jour doit être complétée par le logiciel lui-même. Veuillez donc vous rendre sur la page suivante';
$l['enjoy'] = 'Nous espérons que le processus de mise à jour a été facile.';
$l['upgrade_notes'] = 'Les notes suivantes sont importantes. Il est fortement recommandé de les lire ';
$l['please_note'] = '<b> NOTE </b>: '.APP.' est juste un installateur automatique et ne fournit pas de support pour le logiciel. Veuillez visiter le site du logiciel pour tout type de support !';
$l['regards'] = 'Cordialement';
$l['softinstaller'] = 'Installateur Automatique '.APP.'';
$l['return'] = 'Retour à la vue d\'ensemble';
$l['return_to_wpm'] = 'Retour à la gestion de WordPress';
$l['note_backup'] = 'Il est recommandé de faire une <a href="'.$globals['index'].'act=backup&insid=&soft-1;">sauvegarde</a> de l\'installation avant la mise à niveau.';
$l['alreadyupdated'] = 'Hmm ... il semble que la version actuelle de l\'installation soit <b>&soft-1;</b> et non <b>&soft-2;</b>. <br />Cliquez ici pour mettre à jour les enregistrements de '.APP.'.';
$l['no_update_required'] = 'Il semble que vous n\'ayez pas besoin de mettre à jour votre installation car elle est déjà à jour';
$l['auto_backup'] = 'Souhaitez-vous faire une sauvegarde avant la mise à niveau ?';
$l['select_version'] = 'Sélectionnez une version à mettre à niveau';
$l['upgrading'] = 'Mise à niveau...';
$l['setup_partial'] = 'Vous êtes à un pas de terminer le processus de mise à niveau';
$l['finish_update'] = 'Veuillez visiter le lien ci-dessous pour terminer le processus de mise à niveau.';
$l['finish_up_sucess'] = 'Après avoir terminé le processus de mise à niveau, vous pouvez accéder à l\'installation de &soft-1; ici';
$l['upgrading_to'] = 'Vous allez faire la mise à niveau vers : ';
$l['version'] = 'Version ';
$l['create_backup'] = 'Créer une sauvegarde';
$l['create_backup_exp'] = 'Créer une sauvegarde avant la mise à niveau';
$l['prog_upgrading'] = 'Mise à niveau ';// Ne supprimez pas l'espace après
$l['prog_upgrade_complete'] = 'Mise à niveau terminée.';

$l['upgrade_tweet_sub'] = 'Informez vos amis';

$l['backup_type'] = 'Options de sauvegarde';
$l['backup_type_exp'] = 'Choisissez une sauvegarde complète ou des options avancées';
$l['standard_backup'] = 'Sauvegarde complète (par défaut)';
$l['advanced_backup'] = 'Options avancées';

$l['backup_dir'] = 'Répertoire de sauvegarde';
$l['backup_db'] = 'Sauvegarde de la base de données';
$l['backup_wwwdir'] = 'Sauvegarde du répertoire Web';
$l['backup_datadir'] = 'Sauvegarde du répertoire de données';
$l['no_dir'] = 'Les fichiers d\'installation sont manquants, donc impossible de procéder à la mise à niveau';
$l['wpc_return'] = 'Retour aux installations';

$l['err_default_backup_loc'] = 'L\'emplacement de sauvegarde par défaut est vide, veuillez sélectionner un emplacement de sauvegarde par défaut afin de sauvegarder à l\'emplacement par défaut.';