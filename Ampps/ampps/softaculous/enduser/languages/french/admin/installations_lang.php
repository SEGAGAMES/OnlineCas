<?php

//////////////////////////////////////////////////////////////
//===========================================================
// installations_lang.php
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

$l['no_submit'] = 'Aucune installation n\'a été sélectionnée pour l\'envoi d\'e-mail.';
$l['no_ins_selected'] = 'Aucune installation sélectionnée pour la mise à niveau.';
$l['posix_error'] = 'Les fonctions POSIX sont désactivées. Veuillez activer les fonctions POSIX pour effectuer la mise à niveau automatique des installations.';
$l['shellexec_error'] = 'La fonction exec est désactivée. Veuillez activer la fonction exec pour effectuer la mise à niveau automatique des installations.';
$l['user_soft_upd_sub'] = 'Mises à jour des scripts disponibles';
$l['user_soft_upd'] = 'Cet e-mail concerne l\'installation obsolète de certains scripts PHP que vous avez installés. Pour des raisons de sécurité, vous devez mettre à jour ces installations obsolètes dès que possible.
Les mises à jour des scripts suivantes sont disponibles :

&soft-1;
Pour mettre à jour ces scripts, allez dans votre Panneau de contrôle -> '.APP.' -> Installations.
Là, vous pourrez mettre à jour les scripts.

De l\'administrateur système';
$l['no_reseller_upgrade_ins'] = 'Les revendeurs ne sont pas autorisés à effectuer des mises à niveau automatiques des installations';
$l['ins_time'] = 'Temps d\'installation';
$l['sort_by'] = 'Trier par';
$l['sort_users'] = 'Utilisateurs';
$l['sort_script'] = 'Script';
$l['sort_domain'] = 'Domaine';

// Chaînes de thème
$l['<title>'] = APP.' - Liste des installations';
$l['searchinstallations'] = 'Rechercher des installations';
$l['search_scripts'] = 'Scripts';
$l['search_scripts_exp'] = 'Laissez vide pour tout. Pour plusieurs scripts, séparez-les avec \'<b>;</b>\'';
$l['search_users'] = 'Utilisateurs';
$l['search_users_exp'] = 'Laissez vide pour tout. Pour plusieurs utilisateurs, séparez-les avec \'<b>;</b>\'';
$l['group_by_scripts'] = 'Regrouper par scripts';
$l['group_by_scripts_exp'] = 'Par défaut, il est regroupé par utilisateurs';
$l['only_outdated'] = 'Afficher uniquement les installations obsolètes';
$l['only_outdated_exp'] = 'Par défaut, il affichera toutes les installations';
$l['li_user'] = 'Utilisateur';
$l['li_scripts'] = 'Scripts';
$l['li_domains'] = 'Domaines';
$l['li_url'] = 'URL';
$l['li_insver'] = 'Version installée';
$l['li_ver'] = 'Version';
$l['li_realver'] = 'Version réelle';
$l['no_results'] = 'Aucun résultat trouvé';
$l['search_ins'] = 'Rechercher';
$l['with_selected'] = 'Avec sélectionné';
$l['sub_email_users'] = 'Envoyer un e-mail aux utilisateurs des nouvelles versions';
$l['emailed_users'] = 'Les utilisateurs des installations sélectionnées ont été informés des mises à jour disponibles.';
$l['sub_upgrade_ins'] = 'Mettre à niveau';
$l['upgrading_ins'] = 'Mise à niveau des installations...';
$l['upgraded_ins'] = 'Le processus de mise à niveau automatique est terminé et les détails ont été envoyés par e-mail.';
$l['upgraded'] = 'Mis à niveau';
$l['failed'] = 'Échec';
$l['go_to_autoupgrade'] = 'Aller à la liste';
$l['upgrading_completed'] = 'Mise à niveau terminée';
$l['beta_note'] = '<b>Remarque</b> : Cette fonctionnalité est en <b>VERSION BÊTA</b>. <a href="https://www.softaculous.com/docs/admin/admin-upgrade-installations/#auto-upgrade" target="_blank">En savoir plus..</a>';
$l['wait_note'] = '<b>Remarque</b> : Veuillez ne pas quitter cette page tant que toutes les installations ne sont pas mises à niveau.';
$l['tasklist_button'] = 'Liste de tâches';
$l['auto_upgrade_enabled'] = 'Mise à niveau automatique activée';
$l['real_ver_notice'] = 'La version réelle ne correspond pas aux enregistrements de '.APP.'. Il semble que l\'utilisateur ait mis à niveau les installations manuellement.';
$l['latest_ver_notice'] = 'La dernière version est disponible pour les installations.';
$l['update_records'] = 'Mettre à jour les enregistrements de '.APP;
$l['no_submit_rec'] = 'Aucune installation n\'a été sélectionnée pour la mise à jour des enregistrements de '.APP;
$l['err_update_record'] = 'Erreur lors de la mise à jour de la version dans les enregistrements de '.APP;
$l['succ_update_record'] = 'Version mise à jour avec succès pour les installations sélectionnées dans les enregistrements de '.APP;
$l['only_realversion'] = 'Afficher la version réelle';
$l['only_realversion_exp'] = 'Si coché, '.APP.' essaiera de détecter la version réelle des installations.<br /><b>Remarque</b> : Cela peut prendre du temps car il trouvera la version réelle en scannant les fichiers des installations';
$l['no_info'] = 'Aucune info';
$l['search_domains'] = 'Domaines';
$l['search_domains_exp'] = 'Laissez vide pour tout. Pour plusieurs domaines, séparez-les avec \'<b>;</b>\'';

$l['auto_upgrade_major'] = '(Majeure et Mineure)';
$l['auto_upgrade_minor'] = '(Mineure)';