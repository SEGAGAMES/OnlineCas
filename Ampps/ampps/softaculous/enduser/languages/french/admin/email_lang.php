<?php

//////////////////////////////////////////////////////////////
//===========================================================
// admin/email_lang.php
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

$l['no_mail'] = 'Aucune méthode pour l\'envoi d\'e-mail n\'a été sélectionnée';
$l['wrong_mail'] = 'La méthode que vous avez soumise pour l\'envoi d\'e-mail est invalide';
$l['no_mail_server'] = 'Aucun serveur SMTP n\'a été indiqué';
$l['no_mail_port'] = 'Aucun port SMTP n\'a été indiqué';
$l['no_mail_user'] = 'Aucun nom d\'utilisateur SMTP n\'a été indiqué';
$l['no_mail_pass'] = 'Aucun mot de passe SMTP n\'a été indiqué';
$l['saving_error'] = 'Il y a eu des erreurs lors de l\'enregistrement de la configuration';

// Chaînes de thème
$l['<title>'] = APP.' - Paramètres';
$l['settings_saved'] = 'La configuration des e-mails a été enregistrée';
$l['emailhead'] = 'Configuration E-mail';
$l['mailmethod'] = 'Méthode d\'envoi';
$l['mailmethod_exp'] = 'Envoyer des e-mails en utilisant PHP mail() ou votre serveur SMTP';
$l['smtp_server'] = 'Serveur SMTP';
$l['smtp_port'] = 'Port SMTP';
$l['smtp_user'] = 'Nom d\'utilisateur SMTP';
$l['smtp_pass'] = 'Mot de passe SMTP';
$l['edit_settings'] = 'Modifier les paramètres';
$l['mailauthtype'] = 'Type d\'authentification SMTP';
$l['mailauthtype_exp'] = 'Choisissez le type d\'authentification pour les e-mails envoyés via SMTP';

$l['mail_send'] = 'Envoyer un e-mail de test ?';
$l['mail_subject'] = 'Paramètres d\'e-mail - E-mail de test';
$l['mail_message'] = 'Ceci est un e-mail de test pour vérifier les paramètres d\'e-mail mis à jour dans le panneau d\'administration de '.APP.' -> E-mail. Vous pouvez supprimer cet e-mail.';
$l['enc_mail_pass'] = 'Enregistrer le mot de passe SMTP au format chiffré ?';
$l['err_mcrypt'] = 'L\'extension mcrypt est requise pour chiffrer le mot de passe';
$l['err_openssl'] = 'L\'extension Openssl est requise pour chiffrer le mot de passe';