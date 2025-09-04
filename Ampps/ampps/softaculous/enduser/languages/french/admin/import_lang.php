<?php

//////////////////////////////////////////////////////////////
//===========================================================
// import_lang.php
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

// Chaînes de thème
$l['<title>'] = APP.' - Importer des scripts';
$l['importing_scripts'] = 'Importation de scripts depuis d\'autres installateurs automatiques';
$l['no_import'] = 'Aucun script à importer!';
$l['importing_of'] = 'Nom d\'utilisateur';
$l['start_import'] = 'Démarrer l\'importation';
$l['import_exp'] = 'Cet utilitaire importera les scripts qui ont été installés en utilisant d\'autres installateurs automatiques. Pour commencer le processus, veuillez cliquer sur "'.$l['start_import'].'"';
$l['no_users'] = 'Aucun utilisateur trouvé sur le serveur';
$l['manual_ins'] = 'Importer les scripts installés manuellement par les utilisateurs ? (Cela consommera plus de ressources en fonction du nombre d\'utilisateurs)';
$l['import_head'] = 'Importer des scripts';
$l['fantastico_ins'] = 'Importer les scripts installés par <b>Fantastico</b>.';
$l['installatron_ins'] = 'Importer les scripts installés par <b>Installatron</b>.';
$l['wptoolkit_ins'] = 'Importer les scripts installés par <b>WP Toolkit</b>';
$l['cpaddons_ins'] = 'Importer les scripts installés par <b>cPAddons</b>.';
$l['import_completed'] = 'Importation terminée !';
$l['import_progress'] = 'Détection des installations pour l\'utilisateur :';