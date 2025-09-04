<?php

//////////////////////////////////////////////////////////////
//===========================================================
// backup_lang.php
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

$l['no_ins'] = 'Instalace nebyla zadána';
$l['wrong_ins_title'] = 'Špatné instalační ID';
$l['wrong_ins'] = 'Instalační ID, které bylo zadáno, neexistuje';
$l['backup_ftp_error'] = 'Nelze vytvořit adresář zálohy <b>&soft-1;</b>. Vytvořte jej ručně a zkuste to znovu.';
$l['err_backup'] = 'Nelze vytvořit zálohu.';
$l['no_space_backup'] = 'Nemáte dostatek místa pro zálohování této instalace!';
$l['err_notelength'] = 'Poznámka k záloze musí mít méně než 255 znaků';
$l['off_backup_restore'] = 'Zálohy/Obnovení jsou zakázány správcem';

$l['cant_backup_dir'] = 'Nástroj zálohy nemohl zazálohovat soubory.';
$l['could_not_read'] = 'Jejda, Softaculous nemohl přečíst následující soubor/adresář <b>&soft-1;</b>. Povolte ho pro "čtení", aby bylo možné dále používat nástroj zálohy.';
$l['cant_datadir_dir'] = 'Došlo k chybám při přidávání adresáře pro data.';
$l['cant_wwwdir'] = 'Došlo k chybám při přidávání adresáře webu.';
$l['cant_backup_db'] = 'Došlo k chybám při přidávání databáze do zálohy.';
$l['err_perm_file'] = 'Došlo k chybám při vytváření souboru práv';
$l['err_dataperm_file'] = 'Došlo k chybám při vytváření souboru práv adresáře pro data';
$l['err_wwwperm_file'] = 'Došlo k chybám při vytváření souboru práv adresáře webu';
$l['save_dir_perms'] = 'Nelze uložit oprávnění souboru.';
$l['save_datadir_perms'] = 'Nelze uložit oprávnění adresáře pro data';
$l['save_www_perms'] = 'Nelze uložit oprávnění adresáře webu.';
$l['cant_connect_mysql'] = 'Nelze se připojit k databázi, prosím ověřte uživatelské jméno/heslo vaší databáze. Došlo-li ke změně, prosím aktualizujte detaily v instalaci Softaculous pomocí sekce Upravit detaily.';

//Theme Strings
$l['<title>'] = APP.' - Backup';
$l['info'] = 'Informace';
$l['ins_softname'] = 'Software';
$l['ins_num'] = 'Číslo instalace';
$l['ins_ver'] = 'Verze';
$l['ins_time'] = 'Čas instalace';
$l['ins_path'] = 'Cesta';
$l['ins_wwwdir'] = 'Cesta adresáře webu';
$l['ins_url'] = 'URL';
$l['ins_db'] = 'Jméno databáze';
$l['ins_dbuser'] = 'Uživatel databáze';
$l['ins_dbpass'] = 'Heslo databáze';
$l['ins_dbhost'] = 'Databázový server';
$l['backup_ins'] = 'Záloha instalace';
$l['backup_dir'] = 'Adresář zálohy';
$l['backup_dir_exp'] = 'Pokud zaškrtnete toto, celá složka bude zálohovaná';
$l['backup_db'] = 'Záloha databáze';
$l['backup_db_exp'] = 'Je-li zaškrtnuto, bude zálohovaná také databáze';
$l['backup_conf'] = 'Zálohování může trvat delší dobu v závislosti na datech. Prosím nezavírejte webovou stránku ani nepřecházejte na jinou stránku.';
$l['backedup'] = 'Záloha byla úspěšně vytvořena. Můžete ji stáhnout ze stránky <a href="'.$globals['index'].'act=backups">zálohy</a> .<br /> URL vaší instalace:  <a href="&soft-1;" target="_blank">&soft-1;</a>';
$l['backup_ins'] = 'Záloha instalace';
$l['backup_datadir'] = 'Záloha adresáře pro data';
$l['backup_datadir_exp'] = 'Je-li zaškrtnuto, adresář pro data bude uložen.';
$l['ins_datadir'] = 'Adresář pro data';
$l['return'] = 'Zpět na Přehled';
$l['return_to_wpm'] = 'Return to WordPress Management';
$l['ins_cron_command'] = 'Cron příkaz';
$l['backup_wwwdir'] = 'Záloha adresáře webu';
$l['backup_wwwdir_exp'] = 'Je-li zaškrtnuto, adresář webu bude uložen.';
$l['checking_data'] = 'Kontrola zadaných dat';
$l['backingup_db'] = 'Zálohování databáze';
$l['backingup_dir'] = 'Zálohování adresáře';
$l['backingup_datadir'] = 'Zálohování adresáře pro data';
$l['finishing_process'] = 'Dokončení zálohy';
$l['wait_note'] = '<b>POZNÁMKA:</b> Toto může trvat 3-4 minuty. Tuto stránku můžete opustit, pokud chcete!';
$l['backingup'] = 'Záloha je vytvářena na pozadí. O jejím dokončení budete informováni emailem.<br/> Po dokončení zálohy ji můžete stáhnout ze stránky <a href="'.$globals['index'].'act=backups">Zálohy</a>.<br /> URL vaší instalace: <a href="&soft-1;" target="_blank">&soft-1;</a>';
$l['check_email'] = 'Prosím zkontrolujte váš email pro stav zálohy';
$l['prog_backingup'] = 'Zálohování '; // Dont remove the trailing space
$l['prog_backup_complete'] = 'Záloha dokončena.';
$l['backup_note'] = 'Poznámka k záloze';
$l['backup_note_exp'] = 'Můžete si uložit poznámku pro vaši referenci';
$l['backup_operation'] = 'Vyberte operaci(e ) zálohování';
$l['backups_expire'] = 'Vaše zálohy budou automaticky odstraněny po <b>&soft-1;</b> dnech od vytvoření zálohy.';
$l['err_max_backups'] = 'Dosáhli jste maximálního počtu povolených záloh (<b>&soft-1;</b>). Prosím odstraňte nepotřebné zálohy, aby bylo možné provést novou zálohu.';
$l['err_max_local_backups'] = 'You have reached the maximum number of (<b>&soft-1;</b>) local backups allowed. Please delete unwanted backups on the local server to be able to take a new backup.';
$l['err_max_insid_backups'] = 'You have reached the maximum number of (<b>&soft-1;</b>) backups allowed for this installation. Please delete unwanted backups for this installation to be able to take a new backup.';
$l['err_max_local_insid_backups'] = 'You have reached the maximum number of (<b>&soft-1;</b>) local backups allowed for this installation. Please delete unwanted backups for this installation on the local server to be able to take a new backup.';
$l['backup_notes'] = 'Záloha vytvořena '.APP.' automatickou zálohou';
$l['max_backups'] = 'Ve vašem účtu se momentálně nachází <b>&soft-1;</b> záloh. Maximální limit záloh je <b>&soft-2;</b>.';

$l['no_backup_functions'] = 'Soubor ZÁLOHOVÝCH FUNKCÍ nebyl nalezen! Kontaktujte správce serveru.';
$l['no_dir_exists'] = 'Instalační složka nebyla nalezena.';
$l['backup_location_name'] = 'Umístění záloh';
$l['backup_file_empty'] = 'Incorrect backup file size : 0';
$l['err_mysql_db'] = 'Databáze MySQL nemohla být vybrána, název databáze je nesprávný.';
$l['backup_loc'] = 'Umístění záloh'; 
$l['exp_backup_loc'] = 'Vyberte umístění, do kterého mají být ukládány zálohy.'; 
$l['default'] = 'Výchozí'; 
$l['invalid_backup_location'] = 'Zadané umístění neexistuje'; 
$l['local_folder'] = 'Lokální adresář'; 
$l['err_default_backup_loc'] = 'Default backup location is empty, please select a default backup location in order to backup on the default location.';

$l['invalid_access_token'] = 'Neplatný Access Token. Proveďte novou autorizaci '.APP.' Dropboxu na stránce Upravit umístění záloh';
$l['insufficient_space'] = 'Váš Dropbox účet je plný. Uvolněte místo a zkuste to znovu.';
$l['incorrect_offset'] = 'Incorrect Offset';

$l['gdrive_err_init'] = 'Při záloze na Google Disk došlo k chybám.';
$l['gdrive_err_end'] = 'Při záloze na Google Disk došlo k chybám.';

$l['error_max_backup_script'] = 'Dosáhli jste maximálního počtu (<b>&soft-1;</b>) záloh pro jeden skript.';
$l['error_max_backup_insid'] = 'You have reached the maximum number of (<b>&soft-1;</b>) Backups allowed per installation';

$l['ftp_access'] = 'PHP proces nedokázal zapsat soubory na váš server. Pro pokračování je nutné nakonfigurovat FTP přístup.';
$l['configure_domain'] = 'Nastavení';

$l['wpc_return'] = 'Return to Backups';

$l['ampps_notify_premium'] = 'Tato funkce je přístupná pouze v prémiových verzích AMPPS. Zakoupit je můžete zde <b><a href="https://ampps.com/clients">AMPPS Premium</a></b>';
$l['backing_up'] = 'Vaše záloha je vytvářena na pozadí. Po dokončení budete informováni e-mailem.  Proces můžete sledovat <a href="'.$globals['index'].'act=eu_tasklist">ZDE</a>.<br /> Vaše instalační URL : <a href="&soft-1;" target="_blank">&soft-1;</a>';

$l['rbackup_disabled'] = 'Zálohy na vzdáleném úložišti jsou zakázány správcem';
$l['rbackup_protocol_disabled'] = 'Zálohy na <b>&soft-1;</b> jsou zakázány správcem';

$l['onedrive_err_end'] = 'There were some errors while uploading backup to your OneDrive account!';
$l['onedrive_err_upload_url'] = 'Failed to generate OneDrive Upload URL';

$l['dropbox_refresh_token_err'] = 'Failed to generate Dropbox access token. Please re-authorize Dropbox location from Settings -> Edit Backup Location page.';