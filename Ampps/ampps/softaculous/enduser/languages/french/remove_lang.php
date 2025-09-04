<?php

//////////////////////////////////////////////////////////////
//===========================================================
// remove_lang.php
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

$l['no_ins'] = 'Aucune installation n\'a été lancée';
$l['wrong_ins_title'] = 'Mauvais ID d\'installation';
$l['wrong_ins'] = 'L\'ID d\'installation que vous avez soumis n\'existe pas';
$l['cant_remove_dir'] = 'Le répertoire ne peut pas être supprimé car il est le répertoire principal. Veuillez décocher l\'option <b>Supprimer le dossier </b> pour continuer sans supprimer le répertoire.';
$l['cant_remove_wwwdir'] = 'Le répertoire WEB ne peut pas être supprimé car il est le répertoire principal. Veuillez décocher l\'option <b>Supprimer le répertoire Web</b> pour continuer sans supprimer le répertoire Web.';
$l['mail_rem_ins'] = 'Une installation de &soft-1; a été supprimée. \n Détails :';
$l['mail_path'] = 'Chemin';
$l['mail_url'] = 'URL';
$l['mail_db'] = 'Base de données MySQL';
$l['mail_dbuser'] = 'Utilisateur de la base de données';
$l['mail_dbhost'] = 'Hôte de la base de données';
$l['mail_dbpass'] = 'Mot de passe de la base de données';
$l['mail_time'] = 'Heure d\'installation';
$l['mail_rem_time'] = 'Heure de suppression';
$l['mail_subject'] = 'Supprimer l\'installation de &soft-1;';
$l['mail_cron_command'] = 'Commande CRON';
$l['mail_datadir'] = 'Répertoire de données';
$l['mail_wwwdir'] = 'Répertoire Web';
$l['checking_data'] = 'Vérification des données soumises';
$l['rem_db'] = 'Suppression de la base de données/utilisateur de la base de données';
$l['rem_dir'] = 'Suppression du répertoire';
$l['rem_datadir'] = 'Suppression du répertoire de données';
$l['rem_cron'] = 'Suppression des tâches CRON';
$l['finishing_process'] = 'Terminé avec succès';
$l['wait_note'] = '<b>REMARQUE :</b> Cela peut prendre de 3 à 4 minutes. Veuillez ne pas quitter cette page avant que la barre de progression n\'atteigne 100%.';

// Chaînes de thème
$l['<title>'] = APP.' - Supprimer';
$l['info'] = 'Info';
$l['ins_softname'] = 'Logiciel';
$l['ins_num'] = 'Nombre d\'installations';
$l['ins_ver'] = 'Version';
$l['ins_time'] = 'Heure d\'installation';
$l['ins_path'] = 'Chemin';
$l['ins_url'] = 'URL';
$l['ins_db'] = 'Nom de la base de données';
$l['ins_dbuser'] = 'Utilisateur de la base de données';
$l['ins_dbpass'] = 'Mot de passe de la base de données';
$l['ins_dbhost'] = 'Hôte de la base de données';
$l['remove_ins'] = 'Suppression d\'une installation';
$l['remove_dir'] = 'Suppression du répertoire';
$l['remove_dir_exp'] = 'Si vous cochez cette option, tout le dossier sera supprimé';
$l['remove_db'] = 'Suppression de la base de données';
$l['remove_db_exp'] = 'Si coché, la base de données sera supprimée';
$l['remove_dbuser'] = 'Suppression de l\'utilisateur de la base de données';
$l['remove_dbuser_exp'] = 'Si coché, l\'utilisateur de la base de données sera également supprimé';
$l['remove_conf'] = 'Ces actions sont irréversibles ! \n Voulez-vous vraiment supprimer cette installation ?';
$l['uninstalled'] = 'L\'installation a été supprimée avec succès';
$l['removeins'] = 'Suppression de l\'installation';
$l['ins_cron_command'] = 'Commande CRON';
$l['remove_datadir'] = 'Supprimer le répertoire de données';
$l['remove_datadir_exp'] = 'Si cette option est sélectionnée, le répertoire de données sera supprimé.';
$l['ins_datadir'] = 'Répertoire de données';
$l['remove_wwwdir'] = 'Supprimer le répertoire Web';
$l['remove_wwwdir_exp'] = 'Si cette option est cochée, le répertoire Web sera supprimé.';
$l['ins_wwwdir'] = 'Répertoire Web';
$l['return'] = 'Retour à l\'aperçu';
$l['return_to_wpm'] = 'Retour à la gestion de WordPress';
$l['prog_removing'] = 'Suppression ';// Ne pas supprimer l'espace final
$l['prog_remove_complete'] = 'Suppression terminée.';
$l['disabled_script_info'] = 'Aucune information disponible car ce script a été désactivé.';

$l['wpc_return'] = 'Retour aux installations';
