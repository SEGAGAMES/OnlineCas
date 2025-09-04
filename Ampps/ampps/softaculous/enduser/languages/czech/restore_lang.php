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

$l['restoreerror'] = 'Při rozbalování souborů zálohy došlo k chybám';
$l['restoredatadir'] = 'Nepodařilo se obnovit adresář pro data';
$l['restorewww'] = 'Nepodařilo se obnovit adresář webu';
$l['res_err_selectmy'] = 'Nelze vybrat databázi pro obnovení';
$l['err_myconn'] = 'Nelze se připojit k databázi';
$l['err_db_create'] = 'Došlo k chybě při vytváření databáze';
$l['off_backup_restore'] = 'Zálohy/Obnovení jsou zakázány správcem';
$l['no_backupinfo_file'] = 'Soubor s informacemi o záloze nebyl nalezen';
$l['no_backup_time'] = 'Čas zálohy nebyl nalezen';
$l['instime_higher_than_btime'] = 'Čas instalace je vyšší než čas zálohy';

//Theme Strings
$l['<title>'] = APP.' - Restore';
$l['restorefile'] = 'Obnovit ze zálohy';
$l['restore_dir'] = 'Obnovit adresář';
$l['restore_dir_exp'] = 'Zaškrtnete-li toto, celá složka bude obnovena';
$l['restore_datadir'] = 'Obnovit adresář pro data';
$l['restore_datadir_exp'] = 'Pokud je zaškrtnuto, adresář pro data bude obnoven';
$l['restore_db'] = 'Obnovit databázi';
$l['restore_db_exp'] = 'Pokud je zaškrtnuto, databáze bude také obnovena';
$l['restore_ins'] = 'Obnovit instalaci';
$l['restore'] = 'Vaše záloha byla úspěšně obnovena';
$l['confirm_restore'] = 'Opravdu chcete obnovit instalaci?';
$l['return'] = 'Zpět na Přehled';
$l['return_to_wpm'] = 'Return to WordPress Management';
$l['restore_wwwdir'] = 'Obnovit adresář webu';
$l['restore_wwwdir_exp'] = 'Zaškrtnete-li tuto volbu, adresář webu bude obnoven';
$l['checking_data'] = 'Kontrola zadaných dat';
$l['res_db'] = 'Obnovování databáze';
$l['res_dir'] = 'Obnovování adresáře';
$l['res_datadir'] = 'Obnovování adresáře pro data';
$l['finishing_process'] = 'Záloha obnovena';
$l['wait_note'] = '<b>POZNÁMKA</b>: Toto může trvat 3-4 minuty. Prosím neopouštějte tuto stránku, dokud nebude dosaženo 100 %.';
$l['restoring'] = 'Vaše záloha se obnovuje v pozadí. Po dokončení budete upozorněni e-mailem. Proces obnovení můžete sledovat na stránce <a href="'.$globals['index'].'act=eu_tasklist"> Seznam úkolů </a>.';
$l['prog_restoring'] = 'Obnovování'; // Dont remove the trailing space
$l['prog_restore_complete'] = 'Obnova dokončena.';
$l['no_restore_functions'] = 'Soubor RESTORE FUNCTIONS nebyl nalezen! Oznamte to prosím správci serveru.';
$l['backup_file_empty'] = 'Zálohový soubor je prázdný';
$l['db_not_exist'] = 'Databázový soubor neexistuje';
$l['db_empty'] = 'Databázový soubor je prázdný';

$l['read_archive'] = 'Čtu archiv';

$l['no_backup_file'] = 'Soubor zálohy nenalezen';

$l['wpc_return'] = 'Return to Backups';

$l['ampps_notify_premium'] = 'Tato funkce je přístupná pouze v prémiových verzích AMPPS. Zakoupit je můžete zde <b><a href="https://ampps.com/clients">AMPPS Premium</a></b>';

$l['restore_delete_files'] = 'Delete existing files/folders'; 
$l['restore_delete_files_exp'] = 'If checked existing files/folders will be deleted and then the backup files will be restored. <br /><b>Note</b>: Please make sure that you chose Full Backup while creating this backup.';
$l['no_restore_file_param'] = 'Backup file name was not passed. It is required to start the restore process.';