<?php

//////////////////////////////////////////////////////////////
//===========================================================
// email_lang.php
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

$l['no_email'] = 'Aucune adresse e-mail n\'a été spécifiée';
$l['wrong_email'] = 'L\'adresse e-mail fournie n\'est pas valide';
$l['off_email_link'] = 'Les paramètres des courriels ont été désactivés par l\'administrateur';

// Chaînes de thème
$l['<title>'] = APP.' - Configuration des courriels';
$l['emailsettings'] = 'Configuration des courriels';
$l['email_address'] = 'Adresse courriel';
$l['email_exp'] = 'L\'adresse courriel à laquelle les messages doivent être envoyés.';
$l['ins_email'] = 'Courriels lors d\'une installation';
$l['ins_email_exp'] = 'Envoyer un courriel contenant les détails de l\'installation lorsque vous installez un nouveau logiciel';
$l['rem_email'] = 'Courriels lors d\'une désinstallation';
$l['rem_email_exp'] = 'Envoyer un courriel lorsqu\'un logiciel est désinstallé';
$l['edit_settings'] = 'Enregistrer la configuration des courriels';
$l['settings_saved'] = 'Vos réglages ont été sauvegardés avec succès';
$l['editdetail_email'] = 'Éditer les installations';
$l['editdetail_email_exp'] = 'Envoyer un courriel lorsque les détails d\'un logiciel sont modifiés';
$l['disable_all_notify_update'] = 'Désactiver toutes les notifications de mise à jour';
$l['disable_all_notify_update_exp'] = 'Si vous cochez cette case, vous ne recevrez aucune notification par courriel pour les mises à jour disponibles pour <b>TOUTES</b> vos installations.';
$l['all_notify_update'] = 'Courriels de notifications de mise à jour';
$l['all_notify_update_exp'] = 'Envoyer une notification par courriel pour les mises à jour disponibles pour <b>TOUTES</b> vos installations.';
$l['backup_email'] = 'Courriels de sauvegarde';
$l['backup_email_exp'] = 'Envoyer un courriel contenant des informations de sauvegarde lors de la sauvegarde d\'une installation';
$l['clone_email'] = 'Courriels lors d\'un clonage';
$l['clone_email_exp'] = 'Envoyer un courriel contenant les informations d\'installation lors du clonage d\'une installation';
$l['restore_email'] = 'Courriel lors d\'une restauration';
$l['restore_email_exp'] = 'Envoyer un courriel contenant les détails de la restauration lorsque vous restaurez une installation';
$l['template_email'] = 'Courriels de modèle';
$l['template_email_exp'] = 'Envoyer un courriel contenant les détails du modèle lorsque vous créez un modèle d\'une installation';
$l['restore_template_email'] = 'Courriels de restauration de modèle';
$l['restore_template_email_exp'] = 'Envoyer un courriel contenant les détails de la restauration du modèle lorsque vous restaurez un modèle';
$l['done'] = 'Fait';
$l['email_password_user'] = 'Envoyer le mot de passe en texte brut';
$l['email_password_user_exp'] = 'Si cette case est cochée, les mots de passe seront envoyés en texte brut par courriel aux utilisateurs pour une installation, un clonage, etc.';
$l['import_email'] = 'Courriels d\'importation'; 
$l['import_email_exp'] = 'Envoyer un courriel contenant les détails de l\'installation que vous avez importée'; 

$l['staging_email'] = 'Courriel lors d\'un site de développement';
$l['staging_email_exp'] = 'Envoyer un courriel contenant les détails de l\'installation lorsque vous créez un environnement de mise en scène de toute installation';