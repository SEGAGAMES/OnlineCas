<?php

//////////////////////////////////////////////////////////////
//===========================================================
// perl_upgrade_lang.php
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

$l['no_info_file'] = 'Le fichier INFO.XML n\'a pas pu être trouvé ! Veuillez signaler cela à l\'administrateur du serveur.';
$l['incompatible'] = 'Le logiciel nécessite une version plus récente de '.APP.' ! Veuillez signaler cela à l\'administrateur du serveur.';
$l['no_upgrade'] = 'Le fichier UPGRADE.XML n\'a pas pu être trouvé ! Veuillez signaler cela à l\'administrateur du serveur.';
$l['no_functions'] = 'Le fichier UPGRADE FUNCTIONS n\'a pas pu être trouvé ! Veuillez signaler cela à l\'administrateur du serveur.';
$l['no_field'] = 'Le champ <b>&soft-1;</b> est requis et doit être rempli.';
$l['no_package'] = 'Le package de mise à niveau n\'a pas pu être trouvé !';
$l['no_decompress'] = 'Il y a eu quelques erreurs lors de la décompression des fichiers du package.';
$l['no_decompress_www'] = 'Il y a eu quelques erreurs lors de la décompression des fichiers Web.';
$l['no_config_perl_path'] = 'Une erreur s\'est produite lors de la configuration des fichiers CGI.';
$l['checking_data'] = 'Vérification des données soumises';
$l['unzipping_files'] = 'Copie des fichiers et dossiers';
$l['unzipping_datadir'] = 'Décompression des fichiers de données';
$l['prop_db'] = 'Mise à jour de la base de données';
$l['finishing_process'] = 'Fin de la mise à niveau';
$l['wait_note'] = '<b>NOTE :</b> Cela peut prendre 3 à 4 minutes. Veuillez ne pas quitter cette page avant que la barre de progression n\'atteigne 100 %.';
$l['no_space'] = 'Vous n\'avez pas suffisamment d\'espace pour mettre à niveau cette installation !';
$l['invalid_insid'] = 'ID d\'installation invalide';
$l['invalid_script'] = 'ID de script invalide';
$l['not_perl_script'] = 'Ce script n\'est pas en PERL';
$l['no_perl_upgrade'] = 'La mise à niveau n\'est pas prise en charge pour ce script';

// Chaînes de thème
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['upgrade'] = 'Mise à niveau du logiciel';
$l['softins_url'] = 'URL';
$l['softins_path'] = 'Chemin';
$l['softcopy_note'] = '<b>NOTE :</b> Ce logiciel effectuera une mise à niveau en utilisant son propre utilitaire de mise à niveau. Pour terminer la mise à niveau, veuillez visiter l\'URL qui sera affichée une fois les fichiers copiés.';
$l['softsubmit'] = 'Mise à niveau';
$l['congrats'] = 'Félicitations, le logiciel a été mis à niveau avec succès';
$l['succesful'] = 'a été mis à niveau avec succès à';
$l['admin_url'] = 'URL d\'administration';
$l['setup_continue'] = 'Cependant, la mise à niveau sera complétée par le logiciel lui-même, veuillez donc visiter l\'URL suivante';
$l['enjoy'] = 'Nous espérons que le processus de mise à niveau a été facile.';
$l['upgrade_notes'] = 'Voici quelques notes importantes. Il est fortement recommandé de les lire ';
$l['please_note'] = '<b>NOTE :</b> '.APP.' est juste un installateur automatique et ne fournit aucun support pour le logiciel. Veuillez visiter le site web du fournisseur de logiciels pour obtenir de l\'aide !';
$l['regards'] = 'Cordialement';
$l['softinstaller'] = APP.' Installateur automatique';
$l['return'] = 'Retour à l\'aperçu';
$l['note_backup'] = 'Il est recommandé de prendre une <a href="'.$globals['index'].'act=backup&insid=&soft-1;">sauvegarde</a> de l\'installation avant de procéder à la mise à niveau.';
$l['create_backup'] = 'Créer une sauvegarde';
$l['create_backup_exp'] = 'Créer une sauvegarde avant la mise à niveau';
$l['prog_upgrading'] = 'Mise à niveau de ';// Ne pas supprimer l'espace à la fin
$l['prog_upgrade_complete'] = 'Mise à niveau terminée.';

$l['upgrade_tweet_sub'] = 'Parlez-en à vos amis';