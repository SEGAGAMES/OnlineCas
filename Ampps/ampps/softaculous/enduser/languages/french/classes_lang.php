<?php

//////////////////////////////////////////////////////////////
//===========================================================
// classes_lang.php
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

$l['no_info_file'] = 'Aucune classe pour l\'ID spécifié';
$l['incompatible'] = 'Le logiciel nécessite une version supérieure de '.APP.'! Veuillez le signaler à l\'administrateur du serveur.';
$l['no_install'] = 'Le fichier INSTALL.XML est introuvable! Veuillez le signaler à l\'administrateur du serveur.';
$l['no_functions'] = 'Le fichier INSTALL FUNCTIONS est introuvable! Veuillez le signaler à l\'administrateur du serveur.';
$l['no_softdomain'] = 'Vous n\'avez pas choisi le domaine pour installer le logiciel.';
$l['wrong_softdomain'] = 'Le chemin du domaine que vous avez sélectionné est introuvable.';
$l['no_space'] = 'Vous n\'avez pas suffisamment d\'espace pour installer ce logiciel!';
$l['no_field'] = 'Le champ <b>&soft-1;</b> est requis et doit être rempli.';
$l['no_package'] = 'Le paquet d\'installation est introuvable!';
$l['no_decompress'] = 'Il y a eu des erreurs lors de la décompression des fichiers du paquet.';
$l['mail_new_ins'] = 'Une nouvelle installation de &soft-1; a été complétée. Les détails de l\'installation sont les suivants :';
$l['mail_path'] = 'Chemin';
$l['mail_url'] = 'URL';
$l['mail_time'] = 'Heure de l\'installation';
$l['mail_subject'] = 'Nouvelle installation de &soft-1;';
$l['some_files_exist'] = 'L\'installation ne peut pas continuer parce que les fichiers suivants existent déjà dans le dossier cible : ';
$l['delete_files'] = 'Veuillez supprimer ces fichiers ou choisir un autre dossier.';
$l['checking_data'] = 'Vérification des données soumises';
$l['unzipping_files'] = 'Copie des fichiers et des dossiers';
$l['unzipping_datadir'] = 'Décompression des fichiers de données';
$l['prop_db'] = 'Propagation de la base de données';
$l['finishing_process'] = 'Finalisation de l\'installation';
$l['wait_note'] = '<b>NOTE :</b> Cela peut prendre 3-4 minutes. Veuillez ne pas quitter cette page tant que la barre de progression n\'a pas atteint 100%';
$l['cant_download'] = 'Impossible de télécharger le fichier ZIP.';
$l['softdirectory_invalid'] = 'Le répertoire que vous avez saisi est invalide.';
$l['softdirectory_exists'] = 'Le répertoire que vous avez saisi existe déjà! Veuillez saisir un autre nom de répertoire.';
$l['ins_emailto'] = 'Envoyer les détails de l\'installation par courriel à';
$l['disable_classes'] = 'Les classes PHP sont désactivées par l\'administrateur ou vous utilisez la version gratuite de '.APP;
$l['invalid_class_id'] = 'ID de classe invalide';

// Chaînes de thème
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['install'] = 'Installer';
$l['overview'] = 'Lire-moi';
$l['features'] = 'Fonctionnalités';
$l['demo'] = 'Démo';
$l['file'] = 'Fichiers';
$l['ratings'] = 'Notes';
$l['import'] = 'Importer';
$l['software_ver'] = 'Version';
$l['space_req'] = 'Espace requis';
$l['available_space'] = 'Espace disponible';
$l['req_space'] = 'Espace requis';
$l['mb'] = 'MB';
$l['software_support'] = 'Support du logiciel';
$l['support_link'] = 'Visiter le site de support';
$l['support_note'] = 'Note : Softaculous ne fournit aucun support pour les logiciels individuels.';
$l['setup'] = 'Installation du logiciel';
$l['choose_domain'] = 'Choisir le domaine';
$l['choose_domain_exp'] = 'Veuillez choisir le domaine pour installer le logiciel.';
$l['in_directory'] = 'Dans le répertoire';
$l['in_directory_exp'] = 'Le répertoire est relatif à votre chemin d\'accueil et sera <b>créé s\'il n\'existe pas</b>. par exemple, pour installer à &soft-1;/dir, tapez simplement <b>dir</b>. Pour installer uniquement à &soft-1;/ laissez ce champ vide.';
$l['aef_in_directory_exp'] = 'Le répertoire est relatif à votre chemin d\'accueil et sera <b>créé s\'il n\'existe pas</b>. par exemple, pour installer à <span id="aef_span_lang">&soft-1;</span>/dir, tapez simplement <b>dir</b>. Pour installer uniquement à <span id="aef_span_lang_a">&soft-1;</span>/ laissez ce champ vide.';
$l['softsubmit'] = 'Installer';
$l['congrats'] = 'Félicitations, le logiciel a été installé avec succès';
$l['succesful'] = 'a été installé avec succès à';
$l['enjoy'] = 'Nous espérons que le processus d\'installation a été facile.';
$l['install_notes'] = 'Les notes suivantes sont importantes. Il est fortement recommandé de les lire ';
$l['please_note'] = '<b>NOTE :</b> '.APP.' est juste un installateur de logiciels automatique et ne fournit aucun support pour les paquets de logiciels individuels. Veuillez visiter le site Web du fournisseur de logiciels pour obtenir du support!';
$l['regards'] = 'Cordialement';
$l['softinstaller'] = APP.' Auto Installer';
$l['return'] = 'Retour au sommaire';
$l['current_ins'] = 'Installations actuelles';
$l['link'] = 'Lien';
$l['ins_time'] = 'Heure d\'installation';
$l['version'] = 'Version';
$l['upd_to'] = 'Mettre à niveau vers la version';
$l['remove'] = 'Supprimer';
$l['no_info'] = 'Pas d\'information';
$l['ratesoft'] = 'Évaluer ce script';
$l['reviews'] = 'Commentaires';
$l['reviewsoft'] = 'Écrire un commentaire';
$l['readreviews'] = 'Lire les commentaires';
$l['reviews_exp'] = 'Lisez les commentaires écrits par d\'autres utilisateurs et';
$l['ins_type'] = 'Type d\'installation';
$l['ins_type_exp'] = '<b>Paquet original</b> - Paquet tel que disponible sur le site des scripts. <br /> <b>Juste les fichiers de la bibliothèque</b> - Juste les fichiers de la bibliothèque Javascript.';
$l['ori_pack'] = 'Paquet original';
$l['just_lib'] = 'Juste les fichiers de la bibliothèque';
$l['overwrite_exist'] = '<b>OU</b> <br /><input type="checkbox" name="overwrite_existing" id="overwrite_existing" />&nbsp;&nbsp;<b><span style="color:#000;">Cochez cette case pour écraser tous les fichiers et continuer</span></b>';
$l['overwrite'] = 'Écraser les fichiers';
$l['choose_protocol'] = 'Choisir le protocole';
$l['choose_protocol_exp'] = 'Si votre site a SSL, veuillez choisir le protocole HTTPS.';
$l['downloading'] = 'Téléchargement du paquet';
$l['installing'] = 'Installation du script';
$l['files'] = 'Fichiers & Dossiers';
$l['modified_time'] = 'Dernière modification';
$l['size'] = 'Taille';
$l['classes_ins_error'] = 'Erreur survenue lors de l\'enregistrement de l\'installation.';
$l['del_insid'] = 'Voulez-vous vraiment supprimer les installations sélectionnées? L\'action sera irréversible. \nAucune autre confirmation ne sera demandée!';
$l['rem_inst_id'] = 'Suppression de l\'installation - ';
$l['no_sel_inst'] = 'Aucune installation sélectionnée à supprimer.';
$l['inst_remvd'] = 'Les installations sélectionnées ont été supprimées. La page va maintenant être rechargée !';
$l['go'] = 'Go';
$l['download_zip'] = 'Télécharger tous les fichiers';
$l['software_category'] = 'Catégorie';
$l['adv_option'] = 'Options avancées';
$l['disable_notify_update'] = 'Désactiver les notifications de mise à jour par email';
$l['exp_disable_notify_update'] = 'Si coché, vous ne recevrez pas de notification par email pour les mises à jour disponibles pour cette installation.';
$l['prog_installing'] = 'Installation en cours ';// Ne pas enlever l'espace à la fin
$l['prog_install_complete'] = 'Installation complétée.';

$l['install_tweet_sub'] = 'Dites-le à vos amis';
$l['select_domain'] = 'Sélectionner le domaine';
$l['with_selected'] = 'Avec sélectionné';
$l['download'] = 'Télécharger';