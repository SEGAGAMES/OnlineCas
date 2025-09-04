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

$l['no_ins'] = 'Nebola potvrdená žiadna inštalácia';
$l['wrong_ins_title'] = 'Zlé ID inštalácie';
$l['wrong_ins'] = 'ID inštalácie, ktoré ste zadali neexistuje';
$l['backup_ftp_error'] = 'Nebolo možné vytvoriť Backup priečinok <b>&soft-1;</b>. Prosím, vytvorte ho ručne a zopakujte pokus.';
$l['err_backup'] = 'Nebolo možné vytvoriť zálohu.';
$l['no_space_backup'] = 'Nemáte dostatočný úložný priestor pre zálohu tejto inštalácie !';
$l['err_notelength'] = 'Poznámka zálohy musí mať menej ako 255 znakov';
$l['off_backup_restore'] = 'Zálohy/Obnovenie sú zakázané správcom';

$l['cant_backup_dir'] = 'Nástroj zálohovania nemohol vytvoriť zálohu súborov.';
$l['could_not_read'] = 'Oops, Softaculous nemôže prečítať nasledujúci súbor/priečinok <b>&soft-1;</b> Prosím, urobte ho čitateľným pre pokračovanie využívania nástroja zálohy.';
$l['cant_datadir_dir'] = 'Počas pridávania priečinka dát sa vyskytli chyby.';
$l['cant_wwwdir'] = 'Počas pridávania priečinka web sa vyskytli chyby.';
$l['cant_backup_db'] = 'Počas pridávania databázy do zálohy sa vyskytli chyby.';
$l['err_perm_file'] = 'Počas vytvárania súboru oprávnení sa vyskytli chyby';
$l['err_dataperm_file'] = 'Počas vytvárania súboru oprávnení priečinka dát vznikli chyby';
$l['err_wwwperm_file'] = 'Počas vytvárania súboru oprávnení priečinka WEB vznikli chyby';
$l['save_dir_perms'] = 'Nebolo možné uložiť oprávnenia súboru';
$l['save_datadir_perms'] = 'Nebolo možné uložiť oprávnenia súboru dát';
$l['save_www_perms'] = 'Nebolo možné uložiť oprávnenia súboru web';
$l['cant_connect_mysql'] = 'Nebolo možné sa spojiť s databázou, prosím, skontrolujte Prihlasovacie_Meno/Heslo vašej databázy. V prípade zmeny, prosím, upravte údaje v Softaculous inštalácie pomocou Upraviť Detaily.';

//Theme Strings
$l['<title>'] = APP.' - Backup';
$l['info'] = 'Informácie';
$l['ins_softname'] = 'Softvér';
$l['ins_num'] = 'Číslo inštalácie';
$l['ins_ver'] = 'Verzia';
$l['ins_time'] = 'Čas inštalácie';
$l['ins_path'] = 'Cesta';
$l['ins_wwwdir'] = 'Cesta priečinka web';
$l['ins_url'] = 'URL';
$l['ins_db'] = 'Názov databázy';
$l['ins_dbuser'] = 'Používateľ databázy';
$l['ins_dbpass'] = 'Heslo databázy';
$l['ins_dbhost'] = 'Host databázy';
$l['backup_ins'] = 'Zálohovať inštaláciu';
$l['backup_dir'] = 'Zálohovať priečinok';
$l['backup_dir_exp'] = 'Ak zaškrtnete toto bude zálohovaný celý priečinok';
$l['backup_db'] = 'Zálohovať databázu';
$l['backup_db_exp'] = 'Ak zaškrtnete toto bude zálohovaná aj databáza';
$l['backup_conf'] = 'Záloha môže v závislosti na dátach trvať nejaký čas. Prosím, nezatvárajte stránku, ani neprechádzajte na inú stránku.';
$l['backedup'] = 'Záloha bola úspešne vytvorená. Môžete si ju stiahnuť zo stránky <a href="'.$globals['index'].'act=backups">Záloh</a>.<br /> Vaše inštalačné URL : <a href="&soft-1;" target="_blank">&soft-1;</a>';
$l['backup_ins'] = 'Zálohovať inštaláciu';
$l['backup_datadir'] = 'Zálohovať priečinok dát';
$l['backup_datadir_exp'] = 'Ak zaškrtnuté, priečinok dát bude uložený.';
$l['ins_datadir'] = 'Priečinok dát';
$l['return'] = 'Spať na prehľad';
$l['return_to_wpm'] = 'Return to WordPress Management';
$l['ins_cron_command'] = 'Cron príkaz';
$l['backup_wwwdir'] = 'Zálohovať priečinok web';
$l['backup_wwwdir_exp'] = 'Ak zaškrtnuté, priečinok web bude uložený.';
$l['checking_data'] = 'Kontrola zadaných údajov';
$l['backingup_db'] = 'Zálohovanie databázy';
$l['backingup_dir'] = 'Zálohovanie priečinka';
$l['backingup_datadir'] = 'Zálohovanie priečinka dát';
$l['finishing_process'] = 'Dokončovanie zálohy';
$l['wait_note'] = '<b>UPOZORNENIE:</b> Toto môže trvať 3-4 minúty. Môžete opustiť stránku, ak si to prajete !';
$l['backingup'] = 'Záloha je vytváraná na pozadí. Budete upozornení emailom po jej dokončení.<br /> Po dokončení zálohy si ju môžete stihnúť zo stránky <a href="'.$globals['index'].'act=backups">Záloh</a>.<br /> Vaše inštalačné URL : <a href="&soft-1;" target="_blank">&soft-1;</a>';
$l['check_email'] = 'Prosím, skontrolujte váš email pre stav zálohy';
$l['prog_backingup'] = 'Zálohujem '; // Dont remove the trailing space
$l['prog_backup_complete'] = 'Záloha hotová.';
$l['backup_note'] = 'Poznámka zálohy';
$l['backup_note_exp'] = 'Môžete uložiť poznámku pre vašu referenciu.';
$l['backup_operation'] = 'Vybrať operáciu(/-e) zálohy';
$l['backups_expire'] = 'Vaše zálohy budú automaticky premazané <b>&soft-1;</b> dní po ich vytvorení.';
$l['err_max_backups'] = 'Dosiahli ste maximálny počet (<b>&soft-1;</b>) povolených záloh. Prosím zmažte nepotrebné zálohy, aby ste mohli urobiť novú zálohu.';
$l['err_max_local_backups'] = 'You have reached the maximum number of (<b>&soft-1;</b>) local backups allowed. Please delete unwanted backups on the local server to be able to take a new backup.';
$l['err_max_insid_backups'] = 'You have reached the maximum number of (<b>&soft-1;</b>) backups allowed for this installation. Please delete unwanted backups for this installation to be able to take a new backup.';
$l['err_max_local_insid_backups'] = 'You have reached the maximum number of (<b>&soft-1;</b>) local backups allowed for this installation. Please delete unwanted backups for this installation on the local server to be able to take a new backup.';
$l['backup_notes'] = 'Záloha vytvorená automatickým zálohovaním '.APP.'';
$l['max_backups'] = 'Vo vašom účte sa momentálne nachádza <b>&soft-1;</b> záloh. Maximálny limit záloh je <b>&soft-2;</b>.';

$l['no_backup_functions'] = 'Súbor ZÁLOHOVÝCH FUNKCIÍ sa nenašiel! Kontaktujte správcu serveru.';
$l['no_dir_exists'] = 'Inštalačná zložka sa nenašla.';
$l['backup_location_name'] = 'Umiestnenie záloh';
$l['backup_file_empty'] = 'Incorrect backup file size : 0';
$l['err_mysql_db'] = 'Databáza MySQL nemohla byť vybraná, názov databáze je nesprávny.';
$l['backup_loc'] = 'Umiestnenie záloh'; 
$l['exp_backup_loc'] = 'Vyberte umiestnenie, do ktorého majú byť ukladané zálohy.'; 
$l['default'] = 'Prednastavené '; 
$l['invalid_backup_location'] = 'Zadané umiestnenie neexistuje'; 
$l['local_folder'] = 'Lokálny adresár'; 
$l['err_default_backup_loc'] = 'Default backup location is empty, please select a default backup location in order to backup on the default location.';

$l['invalid_access_token'] = 'Neplatný Access Token. Preveďte novú autorizáciu '.APP.' Dropboxu na stránke Upraviť umiestnenie záloh';
$l['insufficient_space'] = 'Váš Dropbox účet je plný. Uvoľnite miesto a skúste to znovu.';
$l['incorrect_offset'] = 'Incorrect Offset';

$l['gdrive_err_init'] = 'Pri zálohe na Google Disk došlo k chybám.';
$l['gdrive_err_end'] = 'Pri zálohe na Google Disk došlo k chybám.';

$l['error_max_backup_script'] = 'Dosiahli ste maximálneho počtu (<b>&soft-1;</b>) záloh pre jeden skript.';
$l['error_max_backup_insid'] = 'You have reached the maximum number of (<b>&soft-1;</b>) Backups allowed per installation';

$l['ftp_access'] = 'PHP proces nedokázal zapísať súbory na váš server. Pre pokračovanie je nutné nakonfigurovať FTP prístup.';
$l['configure_domain'] = 'Nastavenie';

$l['wpc_return'] = 'Return to Backups';

$l['ampps_notify_premium'] = 'Táto funkcia je prístupná iba v prémiových verziách AMPPS. Zakúpiť ich môžete tu <b><a href="https://ampps.com/clients">AMPPS Premium</a></b>';
$l['backing_up'] = 'Vaša záloha je vytváraná na pozadí. Po dokončení budete informovaní e-mailom. Proces môžete sledovať <a href="'.$globals['index'].'act=eu_tasklist">TU</a>.<br /> Vaša instalačná URL : <a href="&soft-1;" target="_blank">&soft-1;</a>';

$l['rbackup_disabled'] = 'Zálohy na vzdialenom úložisku sú zakázané správcom';
$l['rbackup_protocol_disabled'] = 'Zálohy na <b>&soft-1;</b> sú zakázané správcom';

$l['onedrive_err_end'] = 'There were some errors while uploading backup to your OneDrive account!';
$l['onedrive_err_upload_url'] = 'Failed to generate OneDrive Upload URL';

$l['dropbox_refresh_token_err'] = 'Failed to generate Dropbox access token. Please re-authorize Dropbox location from Settings -> Edit Backup Location page.';