<?php

//////////////////////////////////////////////////////////////
//===========================================================
// restore_lang.php
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
//////////////////////////////////////////////////////////////

if(!defined('SOFTACULOUS')){

	die('Hacking Attempt');

}

$l['restoreerror'] = 'Vyskytla sa chyba pri rozbaľovaní súborov zálohy';
$l['restoredatadir'] = 'Nebolo možné obnoviť priečinok dát';
$l['restorewww'] = 'Nebolo možné obnoviť priečinok Web';
$l['res_err_selectmy'] = 'Nebolo možné vybrať databázu pre obnovanie';
$l['err_myconn'] = 'Nebolo možné spojiť sa s databázou';
$l['err_db_create'] = 'Vyskytla sa chyba pri vytváraní databázy';
$l['off_backup_restore'] = 'Zálohy/Obnovenie sú zakázané správcom';
$l['no_backupinfo_file'] = 'Súbor s informáciami o zálohe sa nenašiel ';
$l['no_backup_time'] = 'Čas zálohy sa nenašiel ';
$l['instime_higher_than_btime'] = 'Čas inštalácie je vyšší než čas zálohy';

//Theme Strings
$l['<title>'] = APP.' - Restore';
$l['restorefile'] = 'Obnoviť zo zálohy';
$l['restore_dir'] = 'Obnoviť priečinok';
$l['restore_dir_exp'] = 'Ak zaškrtnete toto, celý priečinok bude obnovený';
$l['restore_datadir'] = 'Obnoviť priečinok dát';
$l['restore_datadir_exp'] = 'Ak zaškrtnuté, priečinok dát bude obnovený';
$l['restore_db'] = 'Obnoviť databázu';
$l['restore_db_exp'] = 'Ak zaškrtnuté, bude obnovená aj databáza';
$l['restore_ins'] = 'Obnoviť inštaláciu';
$l['restore'] = 'Vaša záloha bola úspešne obnovená';
$l['confirm_restore'] = 'Ste si istý, že chcete obnoviť inštaláciu ?';
$l['return'] = 'Spať na prehľad';
$l['return_to_wpm'] = 'Return to WordPress Management';
$l['restore_wwwdir'] = 'Obnoviť priečinok Web';
$l['restore_wwwdir_exp'] = 'Ak zaškrtnuté, priečinok web bude obnovený';
$l['checking_data'] = 'Kontrola zadaných údajov';
$l['res_db'] = 'Obnovovanie databázy';
$l['res_dir'] = 'Obnovovanie priečinka';
$l['res_datadir'] = 'Obnovovanie priečinka dát';
$l['finishing_process'] = 'Záloha obnovená';
$l['wait_note'] = '<b>UPOZORNENIE:</b> Toto môže trvať 3-4 minúty. Prosím, neopúšťajte stránku, pokým ukazovateľ nedosiahne 100%';
$l['restoring'] = 'Záloha sa obnovuje na pozadí. Po jeho dokončení vám bude oznámené e-mailom. Proces obnovenia môžete sledovať na stránke <a href="'.$globals['index'].'act=eu_tasklist"> Zoznam úloh </a>.';
$l['prog_restoring'] = 'Obnovovanie'; // Dont remove the trailing space
$l['prog_restore_complete'] = 'Obnova dokončená.';
$l['no_restore_functions'] = 'Súbor RESTORE FUNCTIONS nebol nájdený! Prosím, oznámte to správcovi servera.';
$l['backup_file_empty'] = 'Zálohový súbor je prázdny';
$l['db_not_exist'] = 'Databázový súbor neexistuje';
$l['db_empty'] = 'Databázový súbor je prázdny';

$l['read_archive'] = 'Čítam archív';

$l['no_backup_file'] = 'Súbor zálohy sa nenašiel ';

$l['wpc_return'] = 'Return to Backups';

$l['ampps_notify_premium'] = 'Táto funkcia je prístupná iba v prémiových verziách AMPPS. Zakúpiť ich môžete tu <b><a href="https://ampps.com/clients">AMPPS Premium</a></b>';

$l['restore_delete_files'] = 'Delete existing files/folders'; 
$l['restore_delete_files_exp'] = 'If checked existing files/folders will be deleted and then the backup files will be restored. <br /><b>Note</b>: Please make sure that you chose Full Backup while creating this backup.';
$l['no_restore_file_param'] = 'Backup file name was not passed. It is required to start the restore process.';