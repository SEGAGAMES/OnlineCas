<?php

//////////////////////////////////////////////////////////////
//===========================================================
// signin_lang.php
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
	global $softpanel;

$l['user_data_missing'] = 'Le champ API KEY ou API PASSWORD était vide';
$l['invalid_username'] = 'Le nom d\'utilisateur ou le mot de passe que vous avez entré est incorrect';
$l['invalid_password'] = 'Le nom d\'utilisateur ou le mot de passe que vous avez entré est incorrect'; 
$l['no_username'] = 'Le champ Nom d\'utilisateur était vide';
$l['no_password'] = 'Le champ Mot de passe était vide';

$l['<title>'] = 'Connexion';
$l['sign_in'] = 'Se connecter';
$l['log_user'] = 'API KEY';
$l['log_pass'] = 'API PASSWORD';
$l['sub_but'] = 'Connexion';

$l['<title_fpass>'] = 'Mot de passe oublié';
$l['pass_nomatch'] = 'Le nom d\'utilisateur ou le mot de passe que vous avez entré est incorrect.';
$l['forgotpass'] = 'Mot de passe oublié';
$l['emailuser'] = 'Adresse e-mail';
$l['enteremail'] = 'Entrez votre adresse e-mail';
$l['sub_email'] = 'Soumettre';
$l['no_email'] = 'Vous n\'avez pas soumis votre adresse e-mail';
$l['invalidemail'] = 'L\'adresse e-mail que vous avez soumise est invalide';
$l['mail_sub'] = 'Réinitialiser le mot de passe';
$l['mail_body'] = 'Bonjour,
						
Une demande de réinitialisation de votre mot de passe a été effectuée.
Si vous n\'avez pas demandé la réinitialisation du mot de passe, veuillez ignorer cet e-mail.

Si vous souhaitez réinitialiser votre mot de passe, veuillez cliquer sur l\'URL ci-dessous :
http://'.(($globals['softpanel'] == 'webuzo') ? $softpanel->getConf('WU_PRIMARY_DOMAIN').':2002' : '127.0.0.1').'/index.php?act=login&sa=resetpass&key=&soft-1;

Cordialement,
'.$globals['sn'];
$l['mail_done'] = 'Un e-mail a été envoyé avec les détails pour réinitialiser votre mot de passe';
$l['back_to_login'] = 'Retour à la connexion';

$l['<title_reset>'] = 'Réinitialiser le mot de passe';
$l['resetpass'] = 'Réinitialiser le mot de passe';
$l['log_new_pass'] = 'Nouveau mot de passe'; 
$l['log_reppass'] = 'Confirmer le mot de passe';
$l['changepass'] = 'Changer le mot de passe';
$l['no_key'] = 'Aucune clé de réinitialisation n\'a été soumise';
$l['invalidkey'] = 'Vous avez spécifié une clé invalide';
$l['no_new'] = 'Veuillez entrer un mot de passe valide';
$l['no_reppass'] = 'Veuillez entrer la confirmation du mot de passe';
$l['no_match'] = 'Les mots de passe que vous avez entrés ne correspondent pas';
$l['keyexpire'] = 'La clé n\'est plus valide';
$l['passchanged'] = 'Mot de passe changé avec succès. Veuillez procéder à la <a href="'.$globals['index'].'act=login">connexion</a>';
$l['forgot_pass'] = 'Mot de passe oublié';