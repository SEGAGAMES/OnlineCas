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

$l['restoreerror'] = 'Pojawił się błąd przy rozpakowaniu plików backupu';
$l['restoredatadir'] = 'Nie można przywrócić katalogu danych';
$l['restorewww'] = 'Nie można przywrócić katalogu Web';
$l['res_err_selectmy'] = 'Nie można wybrać bazy danych do przywrócenia';
$l['err_myconn'] = 'Nie można połączyć się z bazą danych';
$l['err_db_create'] = 'Wystąpił błąd podczas tworzenia bazy danych';
$l['off_backup_restore'] = 'Funkcja backup/przywrócenie została wyłączona przez admina';
$l['no_backupinfo_file'] = 'Nie znaleziono pliku backup info';
$l['no_backup_time'] = 'Nie znaleziono czasu backup';
$l['instime_higher_than_btime'] = 'Czas instalacji jest dłuższy niż czas trwania backupu';

//Theme Strings
$l['<title>'] = APP.' - Restore';
$l['restorefile'] = 'Przywróć z backupu';
$l['restore_dir'] = 'Przywróć katalog';
$l['restore_dir_exp'] = 'Jeśli zaznaczysz tą opcję zostanie usunięty cały katalog';
$l['restore_datadir'] = 'Przywróć katalog danych';
$l['restore_datadir_exp'] = 'Jeśli ta opcja będzie zaznaczona, katalog danych będzie przywrócony';
$l['restore_db'] = 'Przywróć bazę danych';
$l['restore_db_exp'] = 'Jeśli ta opcja będzie zaznaczona, baza danych będzie przywrócona';
$l['restore_ins'] = 'Przywróć instalację';
$l['restore'] = 'Backup został pomyślnie przywrócony';
$l['confirm_restore'] = 'Czy na pewno chcesz przywrócić instalację?';
$l['return'] = 'Powrót do przegladu';
$l['return_to_wpm'] = 'Return to WordPress Management';
$l['restore_wwwdir'] = 'Przywróć katalog Web';
$l['restore_wwwdir_exp'] = 'Jeśli opcja jest zaznaczona katalogu Web zostanie przywrócony';
$l['checking_data'] = 'Sprawdzenia zatwierdzonych danych';
$l['res_db'] = 'Przywracanie bazy danych';
$l['res_dir'] = 'Przywracanie katalogu';
$l['res_datadir'] = 'Przywracanie katalogu danych';
$l['finishing_process'] = 'Przywrócone backupy';
$l['wait_note'] = '<b>Uwaga:</b> To może zająć 3-4 minuty. Prosimy nie zamykać tej strony do momentu, aż pasek postępu zapełni się w 100%';
$l['restoring'] = 'Twoja kopia zapasowa jest przywracana w tle. Zostaniesz powiadomiony e-mailem po jego zakończeniu. Możesz śledzić proces przywracania na <a href="'.$globals['index'].'act=eu_tasklist"> stronie Lista zadań </a>.';
$l['prog_restoring'] = 'Przywracanie'; // Dont remove the trailing space
$l['prog_restore_complete'] = 'Przywracanie ukończone.';
$l['no_restore_functions'] = 'Plik FUNKCJE PRZYWRACANIA nie został odnaleziony! Prosimy zgłosić to do administratora serwera.';
$l['backup_file_empty'] = 'Plik backup jest posty';
$l['db_not_exist'] = 'Plik bazy danych nie istnieje';
$l['db_empty'] = 'Plik bazy danych jest pusty';

$l['read_archive'] = 'Odczytywanie archiwum';

$l['no_backup_file'] = 'Brak pliku backup';

$l['wpc_return'] = 'Return to Backups';

$l['ampps_notify_premium'] = 'Funkcja jest dostępna w wersji premium AMPPS. Zakup <b><a href="https://ampps.com/clients">AMPPS Premium</a></b>';

$l['restore_delete_files'] = 'Delete existing files/folders'; 
$l['restore_delete_files_exp'] = 'If checked existing files/folders will be deleted and then the backup files will be restored. <br /><b>Note</b>: Please make sure that you chose Full Backup while creating this backup.';
$l['no_restore_file_param'] = 'Backup file name was not passed. It is required to start the restore process.';