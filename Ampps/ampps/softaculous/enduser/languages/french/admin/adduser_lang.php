<?php

//////////////////////////////////////////////////////////////
//===========================================================
// adduser_lang.php
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

$l['no_username'] = 'Veuillez entrer le nom d\'utilisateur à créer';
$l['no_number_of_users'] = 'Veuillez entrer le nombre d\'utilisateurs';
$l['user_exists'] = 'L\'utilisateur existe déjà. Essayez un nom d\'utilisateur différent';
$l['err_valid_email'] = 'Veuillez entrer une adresse e-mail valide';
$l['no_user_email'] = 'Veuillez entrer une adresse e-mail de l\'utilisateur';
$l['err_user_not_added'] = 'L\'utilisateur n\'a pas été ajouté';
$l['err_no_reseller'] = 'Vous n\'avez pas la permission de créer des utilisateurs';
$l['err_crossed_limit'] = 'Vous avez atteint la limite de création d\'utilisateurs';
$l['more_than_one'] = 'Le nombre d\'utilisateurs doit être supérieur à 1';
$l['err_user_exists'] = 'Le nom d\'utilisateur est déjà utilisé';
$l['err_no_uid'] = 'Le UID et l\'utilisateur ne correspondent pas. Veuillez vérifier que cet utilisateur existe.';
$l['err_int_uid'] = 'UID et GID doivent être des entiers.';

//Chaînes de thème
$l['<title>'] = 'Softaculous - Ajouter un utilisateur';
$l['title'] = 'Ajouter un utilisateur';
$l['user_details'] = 'Détails de l\'utilisateur';
$l['username'] = 'Nom d\'utilisateur';
$l['exp_username'] = 'N\'utilisez pas d\'espaces';
$l['user_email'] = 'E-mail';
$l['exp_user_email'] = 'Veuillez entrer une adresse e-mail valide';
$l['number_of_users'] = 'Nombre d\'utilisateurs';
$l['exp_number_of_users'] = 'Nombre de sous-utilisateurs autorisés pour l\'utilisateur';
$l['is_reseller'] = 'Cet utilisateur est-il un revendeur ?';
$l['exp_is_reseller'] = 'Le revendeur peut ajouter des utilisateurs';
$l['saveuser'] = 'Enregistrer l\'utilisateur';
$l['uid'] = 'UID';
$l['gid'] = 'GID';
$l['exp_uid'] = 'ID utilisateur Linux';
$l['exp_gid'] = 'ID de groupe Linux';
$l['done'] = 'Le nouvel utilisateur a été ajouté';