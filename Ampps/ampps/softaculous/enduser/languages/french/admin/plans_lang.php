<?php

//////////////////////////////////////////////////////////////
//===========================================================
// plans_lang.php
//===========================================================
// SOFTACULOUS VIRTUALIZOR
// Version : 1.0
// Inspired by the DESIRE to be the BEST OF ALL
// ----------------------------------------------------------
// Started by: Alons
// Date:       8th Mar 2010
// Time:       23:00 hrs
// Site:       http://www.virtualizor.com/ (SOFTACULOUS VIRTUALIZOR)
// ----------------------------------------------------------
// Please Read the Terms of use at http://www.virtualizor.com
// ----------------------------------------------------------
//===========================================================
// (c)Softaculous Ltd.
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

$l['done'] = 'Le plan a été supprimé avec succès. Actualisez cette <a href="'.$globals['index'].'act=plans">page</a>';
$l['no_plan'] = 'Il n\'y a pas de plans. <a href="'.$globals['index'].'act=addplans">Ajoutez un plan maintenant</a>';
$l['plan_save_fail'] = 'Impossible de supprimer le plan';
$l['del_conf'] = 'Êtes-vous sûr de vouloir supprimer ce plan ?';
$l['no_plan_support'] = 'La fonctionnalité des plans n\'est pas supportée sur ce panneau';

// Paramètres du thème
$l['<title>'] = 'Plans';
$l['title'] = 'Plans';
$l['planname'] = 'Plans';
$l['options'] = 'Options';
$l['addplan'] = 'Ajouter un plan';
$l['edit_plan'] = 'Modifier le plan';
$l['del_plan'] = 'Supprimer le(s) plan(s)';
$l['res_note'] = '<b>Remarque </b> : Les noms de plan commençant par "reseller_" appartiennent aux <b>REVENDEURS</b>.';
$l['go'] = 'Aller';
$l['del_insid'] = 'Êtes-vous sûr de vouloir supprimer le(s) plan(s) sélectionné(s) ? L\'action sera irréversible. \nAucune autre confirmation ne sera demandée !';
$l['inst_remvd'] = 'Le(s) plan(s) sélectionné(s) ont été supprimé(s). La page va maintenant être rechargée !';
$l['no_sel_inst'] = 'Aucun plan sélectionné pour suppression.';
$l['with_selected'] = 'Avec la sélection';