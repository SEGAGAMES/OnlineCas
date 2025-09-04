<?php

//////////////////////////////////////////////////////////////
//===========================================================
// ssl_cert_lang.php
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

//Error Strings
$l['no_key'] = 'La clé privée est requise';
$l['no_crt'] = 'Le certificat est requis';
$l['key_save_failed'] = 'Impossible d\'écrire la clé privée';
$l['cert_save_failed'] = 'Impossible d\'écrire le certificat';
$l['save_key'] = 'Certificat installé avec succès !';
$l['invalid_ssl_key'] = 'Le certificat SSL est invalide';
$l['no_ssl_support'] = 'La fonction de certificat SSL n\'est pas prise en charge sur ce panneau';

//Theme Strings
$l['<title>'] = APP.' - Certificat SSL';
$l['update_ssl_cert'] = 'Certificat SSL';
$l['paste_key'] = 'Collez votre clé ici';
$l['paste_crt'] = 'Collez votre certificat ici';
$l['update_button'] = 'Enregistrer';