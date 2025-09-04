<?php

//////////////////////////////////////////////////////////////
//===========================================================
// editplans_lang.php
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
$l['no_plan_support'] = 'La fonctionnalité des plans n\'est pas supportée sur ce panneau';
$l['invalid_plan_name'] = 'Nom de plan invalide';

// Chaînes de thème
$l['<title>'] = 'Softaculous - Contrôle d\'accès';
$l['title'] = 'Modifier les plans de contrôle d\'accès';
$l['planhead'] = 'Paramètres de contrôle d\'accès';
$l['planname'] = 'Nom du plan';
$l['exp_plan'] = 'Nom du plan de contrôle d\'accès';
$l['cplanname'] = 'Plans de panneau de contrôle';
$l['exp_cplan'] = 'Plans de panneau de contrôle';
$l['no_cpplans'] = 'Veuillez sélectionner un plan de panneau de contrôle';
$l['editplan'] = 'Enregistrer le plan';
$l['userselect'] = 'Assignation des utilisateurs';
$l['resellerselect'] = 'Assignation des revendeurs';
$l['exp_userselect'] = 'Sélectionnez les utilisateurs individuels affectés par ce groupe d\'accès.';
$l['exp_resellerselect'] = 'Sélectionnez les revendeurs affectés par ce groupe d\'accès.';
$l['scriptselect'] = 'Assignation des scripts';
$l['exp_scriptselect'] = 'Sélectionnez les scripts pour ce plan particulier';
$l['done'] = 'Votre plan a été enregistré. Retour à <a href="'.$globals['index'].'act=plans">Aperçu des plans</a>';
$l['plan_save_fail'] = 'Impossible d\'enregistrer les détails du plan';
$l['cpanelplan'] = 'Assignation de plan de panneau de contrôle';
$l['cpplanselect'] = 'Sélectionnez les plans de panneau de contrôle auxquels cette ACL s\'appliquera. Tous les utilisateurs sous ce plan ne pourront utiliser que les scripts assignés ici';
$l['select_all'] = 'Tout sélectionner : ';
$l['overwrite_settings'] = 'Paramètres de remplacement :';

$l['disable_autoupgrade'] = 'Désactiver la mise à jour automatique';
$l['exp_disable_autoupgrade'] = 'Désactiver les mises à jour automatiques des installations de scripts pour les utilisateurs relevant de ce plan';

$l['limit_features'] = 'Restrictions des fonctionnalités';

$l['default_note'] = 'Par défaut : Illimité';

$l['max_ins_script'] = 'Nombre maximum d\'installations par script';
$l['max_backup_script'] = 'Nombre maximum de sauvegardes par script';
$l['max_clone_script'] = 'Nombre maximum de clones par script';
$l['max_staging_script'] = 'Nombre maximum de mises en scène par script';

$l['exp_max_ins_script'] = 'Cela limitera le nombre maximum d\'installations qu\'un utilisateur peut créer pour un script particulier';
$l['exp_max_backup_script'] = 'Cela limitera le nombre maximum de sauvegardes qu\'un utilisateur peut créer pour un script particulier';
$l['exp_max_clone_script'] = 'Cela limitera le nombre maximum de clones qu\'un utilisateur peut créer pour un script particulier';
$l['exp_max_staging_script'] = 'Cela limitera le nombre maximum de mises en scène qu\'un utilisateur peut créer pour un script particulier';

$l['setselect'] = 'Assignation des ensembles WordPress';
$l['exp_setselect'] = 'Sélectionnez les ensembles WordPress accessibles par ce groupe d\'accès';
$l['view_items'] = 'Lister les éléments de cet ensemble';
$l['ok'] = 'Ok';
$l['plugins'] = 'Plugins';
$l['themes'] = 'Thèmes';
$l['empty_set'] = 'Il n\'y a actuellement aucun élément dans l\'ensemble !';