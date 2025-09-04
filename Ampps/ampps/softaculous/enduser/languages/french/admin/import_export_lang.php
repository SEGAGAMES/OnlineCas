<?php

//////////////////////////////////////////////////////////////
//===========================================================
// import_export_lang.php
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

// Chaînes d'erreur
$l['no_imp_exp_support'] = 'L\'importation / exportation n\'est pas prise en charge sur ce panneau';

// Chaînes de thème
$l['<title>'] = APP.' - Paramètres d\'importation et d\'exportation';
$l['import_export'] = 'Paramètres d\'importation / exportation';
$l['import_setting'] = 'Paramètres d\'importation';
$l['import_setting_exp'] = 'Importez les paramètres de '.APP.' en utilisant le fichier exporté précédemment. <br /> (<b>Note</b> : Cela remplacera vos paramètres actuels)';
$l['export_setting'] = 'Paramètres d\'exportation';
$l['export_setting_exp'] = 'Exportez les paramètres de '.APP.' que vous pouvez utiliser pour importer à l\'avenir ou reproduire sur plusieurs serveurs.';
$l['settings_imported'] = 'Paramètres importés avec succès';
$l['no_import_file'] = 'Veuillez fournir un fichier pour importer les paramètres';
$l['invalid_import_file'] = 'Veuillez fournir un fichier valide pour importer les paramètres';
$l['err_compress'] = 'Une erreur s\'est produite lors de l\'archivage des fichiers';
$l['err_unzipping'] = 'Une erreur s\'est produite lors de la décompression des fichiers';
$l['err_no_universal'] = 'Impossible de trouver universal.php';