<?php

//////////////////////////////////////////////////////////////
//===========================================================
// no_autoupgrade_lang.php
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

$l['saving_error'] = 'Il y a eu des erreurs lors de l\'enregistrement des paramètres.';

// Chaînes de thème
$l['<title>'] = APP.' - Désactiver la mise à jour automatique pour les scripts';
$l['settings_saved'] = 'Les paramètres ont été enregistrés avec succès.';
$l['show_top_scripts'] = 'Désactiver la mise à jour automatique';
$l['show_top_scripts_exp'] = 'Le nom de la catégorie des meilleures applications.';
$l['soft_free_note'] = 'REMARQUE : Dans la version gratuite de '.APP.', la sélection des 14 meilleurs scripts est désactivée.';
$l['savescript'] = 'Enregistrer les scripts';
$l['select_top_scripts'] = 'Sélectionner les scripts';
$l['selected_top_scripts'] = 'Vos scripts sélectionnés';
$l['select_from_below'] = 'Sélectionnez vos scripts ci-dessous';
$l['script_note_exp'] = 'Si aucune valeur n\'est fournie, '.APP.' utilisera sa propre formule pour calculer le temps de charge et essayer de mettre à jour les installations.<br />La formule sera calculée comme suit : <strong>charge = Temps_de_fonctionnement_du_serveur / Nombre_de_cœurs;</strong> <br />Et si la charge est inférieure à 0,70, ALORS '.APP.' essaiera de mettre à jour les installations.';
$l['script_note'] = 'Remarque';

$l['planhead'] = 'Paramètre global pour tous les scripts pouvant être mis à jour automatiquement';
$l['uptime'] = 'Définir la limite de charge du serveur';
$l['exp_uptime'] = 'Par exemple, vous pouvez définir la valeur à 5. Maintenant, lorsque Softaculous essaiera de mettre à jour une installation, il vérifiera le temps de charge et s\'il est inférieur à la valeur, ALORS il mettra à jour.';
$l['save'] = 'Enregistrer';
$l['scriptselect'] = 'Scripts';
$l['disable_autoupgrade'] = 'Désactiver la mise à jour automatique';
$l['disable_autoupgrade_exp'] = 'Si activé, aucune installation ne sera mise à jour automatiquement et les utilisateurs n\'auront pas l\'option d\'activer la mise à jour automatique depuis le panneau utilisateur final.';
$l['exp_scriptselect'] = 'Sélectionnez les scripts pour désactiver la mise à jour automatique';
$l['done'] = 'Votre plan a été enregistré. Retournez à <a href="'.$globals['index'].'act=plans">Aperçu des plans</a>';
$l['select_all'] = 'Tout sélectionner : ';