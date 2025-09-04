<?php

//////////////////////////////////////////////////////////////
//===========================================================
// listuser_lang.php
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

$l['<title>'] = 'Softaculous - Liste des utilisateurs';
$l['title'] = 'Liste des utilisateurs';
$l['user_name'] = 'Nom d\'utilisateur';
$l['owner'] = 'Propriétaire';
$l['login'] = 'Connexion';
$l['api_key'] = 'Clé API';
$l['api_pass'] = 'Mot de passe API';
$l['number_of_users'] = 'Nombre d\'utilisateurs';
$l['option'] = 'Option';
$l['no_users'] = 'Aucun utilisateur à afficher';
$l['adduser'] = 'Ajouter un utilisateur';
$l['del_user'] = 'Supprimer l\'utilisateur ?';
$l['del_res_user'] = 'Supprimer le revendeur ?<br/> <b>Tous les sous-utilisateurs créés par ce revendeur seront également supprimés.</b>';
$l['delete'] = 'L\'utilisateur a été supprimé avec succès.';
$l['edit'] = 'L\'utilisateur a été modifié avec succès';

$l['no_username'] = 'Veuillez entrer le nom d\'utilisateur à créer.';
$l['no_number_of_users'] = 'Veuillez entrer le nombre d\'utilisateurs.';
$l['user_exists'] = 'L\'utilisateur existe déjà. Essayez un autre nom d\'utilisateur.';
$l['err_domain'] = 'Impossible de supprimer le domaine : ';

$l['no_planname'] = 'Veuillez spécifier le nom du plan';
$l['invalidfilename'] = 'Veuillez spécifier un nom de plan valide. Les caractères spéciaux ne sont pas autorisés.';
$l['no_cpplan'] = 'Veuillez choisir un plan de panneau de contrôle valide';
$l['plan_exist'] = 'Un plan avec le même nom existe déjà';
$l['error_plans'] = 'Veuillez choisir au moins un utilisateur ou un plan de panneau de contrôle';
$l['user_plan_exist'] = 'Utilisateur(s) - <b>&soft-1;</b> - déjà assigné(s) à un autre plan. Pour écraser, veuillez sélectionner l\'option de remplacement';
$l['reseller_plan_exist'] = 'Revendeur(s) - <b>&soft-1;</b> - déjà assigné(s) à un autre plan. Pour écraser, veuillez sélectionner l\'option de remplacement';
$l['error_cpplan'] = 'Veuillez sélectionner un plan de panneau de contrôle valide';
$l['error_scriptselect'] = 'Veuillez sélectionner au moins un script';
$l['error_disable'] = 'Veuillez cocher la case si vous souhaitez <b>désactiver</b> '.APP.' pour les utilisateur(s) sélectionné(s)';
$l['error_userselect'] = 'Veuillez sélectionner au moins un utilisateur';
$l['error_resellerselect'] = 'Veuillez sélectionner au moins un revendeur';
$l['cpplan_plan_exist'] = 'Plan(s) de panneau de contrôle - <b>&soft-1;</b> - déjà assigné(s) à un autre plan. Pour écraser, veuillez sélectionner l\'option de remplacement';
$l['err_prefix'] = 'Vous ne pouvez pas donner \'reseller_\' comme préfixe pour votre nom de plan.';
$l['connect_error'] = 'Erreur de connexion';
$l['err_user_nof'] = 'Seuls les revendeurs peuvent avoir un nombre d\'utilisateurs';

// Chaînes de thème
$l['user_details'] = 'Détails de l\'utilisateur';
$l['username'] = 'Nom d\'utilisateur';
$l['exp_username'] = 'Tous les caractères seront en minuscules. N\'utilisez pas d\'espaces.';
$l['number_of_users'] = 'Nombre d\'utilisateurs';
$l['exp_number_of_users'] = 'Nombre de sous-utilisateurs autorisés pour l\'utilisateur';
$l['cplanname'] = 'Plans de panneau de contrôle';
$l['exp_cplan'] = 'Plans de panneau de contrôle';
$l['no_cpplans'] = 'Veuillez sélectionner un plan de panneau de contrôle';
$l['saveplan'] = 'Enregistrer le plan';
$l['userselect'] = 'Assignation des utilisateurs';
$l['resellerselect'] = 'Assignation des revendeurs';
$l['exp_userselect'] = 'Sélectionnez les utilisateurs individuels affectés par ce groupe d\'accès.';
$l['exp_resellerselect'] = 'Sélectionnez les revendeurs affectés par ce groupe d\'accès.';
$l['scriptselect'] = 'Assignation des scripts';
$l['exp_scriptselect'] = 'Sélectionnez les scripts pour ce plan particulier';
$l['done'] = 'L\'utilisateur a été supprimé avec succès.';
$l['plan_save_fail'] = 'Impossible d\'enregistrer les détails du plan';
$l['cpanelplan'] = 'Assignation de plan de panneau de contrôle';
$l['cpplanselect'] = 'Sélectionnez les plans de panneau de contrôle auxquels cette ACL s\'appliquera. Tous les utilisateurs sous ce plan ne pourront utiliser que les scripts assignés ici';
$l['default_plan_note'] = 'REMARQUE : Veuillez spécifier le nom du plan comme \'<b>softaculous_default</b>\' pour créer un plan par défaut pour tout utilisateur qui n\'est affecté à aucun autre plan Softaculous.';
$l['select_all'] = 'Tout sélectionner : ';
$l['overwrite_settings'] = 'Paramètres de remplacement :';
$l['uid'] = 'UID';
$l['gid'] = 'GID';
$l['err_no_user'] = 'L\'utilisateur n\'existe pas !';
$l['err_no_root_del'] = 'L\'utilisateur root ne peut pas être supprimé !';
$l['err_invalid_email'] = 'Veuillez fournir un e-mail valide';