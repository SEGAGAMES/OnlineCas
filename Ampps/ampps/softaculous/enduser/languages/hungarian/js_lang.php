<?php

//////////////////////////////////////////////////////////////
//===========================================================
// js_lang.php
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

$l['no_info_file'] = 'Az INFO.XML fájl nem található! Kérjük tájékoztassa a szerver adminisztrátorát.';
$l['incompatible'] = 'A szoftver újabb '.APP.' verziót igényel! Kérjük tájékoztassa a szerver adminisztrátorát.';
$l['no_install'] = 'Az INSTALL.XML fájl nem található! Kérjük tájékoztassa a szerver adminisztrátorát.';
$l['no_functions'] = 'Az INSTALL FUNCTIONS fájl nem található! Kérjük tájékoztassa a szerver adminisztrátorát.';
$l['no_softdomain'] = 'Nem választott domain nevet a telepítéshez.';
$l['wrong_softdomain'] = 'A domain könyvtára nem található.';
$l['no_space'] = 'Nincs elegendő hely a telepítéshez!';
$l['no_field'] = 'A következő mezőt ki kell tölteni: <b>&soft-1;</b> ';
$l['no_package'] = 'A telepítő-csomag nem található!';
$l['no_decompress'] = 'Hibák történtek a telepítő-csomag kicsomagolásakor.';
$l['mail_new_ins'] = '&soft-1; új telepítése befejeződött. A telepítés részletei:';
$l['mail_path'] = 'Útvonal';
$l['mail_url'] = 'URL';
$l['mail_time'] = 'Telepítés időpontja';
$l['mail_subject'] = 'Új telepítés &soft-1;';
$l['some_files_exist'] = 'A telepítés nem tud folytatódni, mert a kiválasztott telepítési könyvtárban a következő fájlok vannak: ';
$l['delete_files'] = 'Kérjük törölje a fájlokat, vagy válasszon másik telepítési könyvtárat.';
$l['checking_data'] = 'A megadott adatok ellenőrzése';
$l['unzipping_files'] = 'Fájlok és mappák másolása';
$l['unzipping_datadir'] = 'Adat fájlok kicsomagolása';
$l['prop_db'] = 'Adatbázis terjesztése';
$l['finishing_process'] = 'Telepítés befejezése';
$l['wait_note'] = '<b>MEGJEGYZÉS:</b> Eltarthat 3-4 percig. Kérjük, ne hagyja el az oldalt, amíg a folyamatjelző el nem éri a 100 %-ot';
$l['softdirectory_invalid'] = 'A megadott könyvtárnév érvénytelen.';
$l['err_domain'] = 'No Domain';
$l['err_domain_admin'] = 'This User does not have any Domain. Please contact Administrator.';
$l['err_pass_strength'] = 'Password strength must be greater than ';
$l['no_sel_inst'] = 'Nincs telepítés kiválasztva';
$l['del_insid'] = 'Biztos benne, hogy törölni szeretné a kiválasztott telepítéseket?';
$l['ins_emailto'] = 'E-mail telepítés részletei ';
$l['no_https'] = 'Nem található megbízható SSL Tanúsítvány';
$l['err_dbprefix'] = 'A táblázat előtagja érvénytelen. A következőnek kell lennie: a-z vagy A-Z vagy 0-9 vagy _';
$l['auto_backup_not_allowed'] = 'Az automatikus biztonsági mentés gyakoriság kiválasztása érvénytelen';
$l['invalid_script'] = 'Érvénytelen szkript azonosító';
$l['not_js_script'] = 'Ez a szkript nem JavaScript';
$l['no_domain_found'] = 'Nem található domain. A szkript telepítéséhez kérjük, adjon hozzá egy domain nevet ';

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['install'] = 'Telepítés';
$l['overview'] = 'Áttekintés';
$l['features'] = 'Jellemzők';
$l['demo'] = 'Bemutató';
$l['ratings'] = 'Osztályzás';
$l['import'] = 'Importál';
$l['software_ver'] = 'Verzió';
$l['space_req'] = 'Szükséges lemezterület';
$l['available_space'] = 'Rendelkezésre álló lemezterület';
$l['req_space'] = 'Szükséges lemezterület';
$l['mb'] = 'MB';
$l['software_support'] = 'Szoftver támogatás';
$l['support_link'] = 'Támogatási weboldal';
$l['support_note'] = 'Megjegyzés: Softaculous nem illetékes az alkalmazások támogatásáért.';
$l['setup'] = 'Telepítés';
$l['choose_domain'] = 'Válasszon domain nevet';
$l['choose_domain_exp'] = 'Válassza ki a domain nevet a telepítéshez.';
$l['in_directory'] = 'Könyvtár';
$l['in_directory_exp'] = 'A telepítési könyvtár relatív a választott domain név könyvtárához képest és <b>nem lehet létező könyvtár</b>.<br />Pl.: Ha úgy akarja elérni a telepített alkalmazást, hogy http://www.domainnevem.hu/xyz/, akkor a telepítési könyvtár az <b>xyz</b>.<br />Ha üresen hagyja, akkor a telepített szoftvert a http://www.domainnevem.hu/ alatt éri el.';
$l['softcopy_note'] = '<b>NOTE</b>: This software requires that it be installed using its own installation utility. Please visit the URL that will be shown once the files have been copied to complete the installation process.';
$l['softsubmit'] = 'Telepítés';
$l['congrats'] = 'Gratulálunk! A szoftver sikeresen telepítve.';
$l['succesful'] = 'sikeresen telepítve';
$l['enjoy'] = 'Reméljük, hogy a telepítési folyamat egyszerű volt.';
$l['install_notes'] = 'Fontos információk! Ajánlatos elolvasni ';
$l['please_note'] = '<b>Figyelem</b>: '.APP.' csak egy alkalmazás-telepítő és nem szolgál semmilyen támogatással a telepíthető programokkal kapcsolatban. Segítséghez keresse fel az alkalmazás weboldalát!';
$l['regards'] = 'Üdvözlettel';
$l['softinstaller'] = APP.' Alkalmazás-telepítő';
$l['return'] = 'Vissza az áttekintéshez';
$l['current_ins'] = 'Jelenlegi telepítések';
$l['link'] = 'Link';
$l['ins_time'] = 'Telepítés ideje';
$l['version'] = 'Verzió';
$l['upd_to'] = 'Verziófrissítés';
$l['remove'] = 'Eltávolítás';
$l['no_info'] = 'Nincs Infó';
$l['ratesoft'] = 'Értékelje';
$l['reviews'] = 'Vélemények';
$l['reviewsoft'] = 'Írja meg véleményét';
$l['readreviews'] = 'Olvassa el a véleményeket';
$l['reviews_exp'] = 'Olvassa el a többi felhasználó véleményét és';
$l['ins_type'] = 'Telepítés típusa';
$l['ins_type_exp2'] = 'Please select the installation type';
$l['ins_type_exp'] = '<b>Eredeti csomag</b> - amit a script hivatalos oldaláról is letölthet.<br /> <b>Csak könyvtárak</b> - Csak a Javascript könyvtárak.';
$l['ori_pack'] = 'Eredeti csomag';
$l['just_lib'] = 'Csak a könyvtárak';
$l['overwrite_exist'] = '<b>VAGY</b><br /><input type="checkbox" name="overwrite_existing" id="overwrite_existing" />&nbsp;&nbsp;<b><span style="color:#000;">Jelölje be az összes fájl felülírásához és a folytatáshoz</span></b>';
$l['overwrite'] = 'Fájlok felülírása';
$l['choose_protocol'] = 'Válasszon protokollt';
$l['choose_protocol_exp'] = 'Ha az oldala SSL-t használ, válassza a HTTPS protokollt.';
$l['clone'] = 'Clone';
$l['options'] = 'Beállítások';
$l['downloading'] = 'Csomag letöltése';
$l['installing'] = 'Szkript telepítése';
$l['go'] = 'Mehet';
$l['rem_inst_id'] = 'Telepítés Eltávolítása - ';
$l['inst_remvd'] = 'A kijelölt telepítés(ek) eltávolításra került(ek).  Az oldal most frissülni fog!';
$l['release_date'] = 'Kiadás dátuma';
$l['adv_option'] = 'Haladó beállítások';
$l['disable_notify_update'] = 'Frissítési értesítések tiltása';
$l['exp_disable_notify_update'] = 'Ha ki van jelölve, akkor nem fog e-mailt kapni az elérhető frissítésekről.';
$l['prog_installing'] = 'Telepítés'; // Dont remove trailing space
$l['prog_install_complete'] = 'Telepítés sikeres volt.';

$l['auto_backup'] = 'Automatikus biztonsági mentések';
$l['exp_auto_backup'] = APP.' will take automated backups via CRON as per the frequency you select';
$l['auto_backup_rotation'] = 'Biztonsági mentés Forgás';
$l['exp_auto_backup_rotation'] = 'Ha a biztonsági mentés forgás korlát eléri a '.APP.', törölve lesz a legrégebbi biztonsági mentés ami a telepítéshez van, és biztonsági mentés készül. A biztonsági mentés kihasználja helyet, így ki tudja választani a biztonsági mentés forgás helyét a rendelkezésre álló helyek közül a szerverén';
$l['no_backup'] = 'Nincs biztonsági mentés';
$l['daily'] = 'Egyszer egy nap';
$l['weekly'] = 'Egyszer egy héten';
$l['monthly'] = 'Egyszer egy hónapban';
$l['unlimited'] = 'Korlátlan';
$l['changelog'] = 'Módosítási napló';
$l['act_upgrade'] = 'Mostanában frissített';
$l['act_clone'] = 'Mostanában klónozott';
$l['act_backup'] = 'Mostanában készítve a biztonsági mentés';
$l['act_install'] = 'Mostanában telepítve';
$l['act_edit'] = 'Mostanában szerkesztve';
$l['act_import'] = 'Mostanában importálva';
$l['act_restore'] = 'Mostanában visszaállítva';
$l['ampps_download'] = 'Fejlesztheti a <b>&soft-1;</b>  az <b>asztalon</b> az Ingyenes fejlesztő eszköz, a Softaculus AMPPS használatával. Kattintson <a href="https://www.ampps.com/downloads" target="_blank"><b>ide</b></a> a letöltéshez <a href="https://www.ampps.com/downloads" target="_blank"><img src="https://images.softaculous.com/ampps.gif" height="25" /></a>';

$l['install_tweet_sub'] = 'Mutassa meg barátainak az új oldalát';
$l['err_auto_backup_limit'] = 'Az automatikus biztonsági mentés forgatás nem lehet több, mint <b>&soft-1;</b>';
$l['select_domain'] = 'Domain kiválasztása';
$l['with_selected'] = 'Kiválasztottal';
$l['related_scripts'] = 'Kapcsolódó Szkriptek';
$l['backup'] = 'Backup';
$l['editdetail'] = 'Edit Details';
$l['install_now'] = 'Telepítés most';
$l['my_apps'] = 'Alkalmazásaim';

$l['bad'] = 'Rossz';
$l['good'] = 'Jó';
$l['strong'] = 'Erős';
$l['short'] = 'Rövid';
$l['strength_indicator'] = 'Erősség jelző';
$l['show'] = 'Show';
$l['hide'] = 'Hide';

$l['backup_location'] = 'Mentési hely';
$l['backup_location_exp'] = 'Válassza ki a telepítés mentése során használni kívánt mentési helyet';
$l['default'] = 'Alapértelmezett';
$l['invalid_backup_location'] = 'A megadott mentési hely nem létezik';
$l['local_folder'] = 'Helyi mappa';

$l['no_cron_min'] = 'Cron perc nincs megadva';
$l['no_cron_hour'] = 'Cron óra nincs megadva';
$l['no_cron_day'] = 'Cron nap nincs megadva';
$l['no_cron_month'] = 'Cron hónap nincs megadva';
$l['no_cron_weekday'] = 'Cron hét napjai nincsenek megadva';

$l['custom_autobackup'] = 'Egyéni';
$l['custom_autobackup_cron'] = 'Automatikus mentések cron időzítése';
$l['custom_autobackup_cron_exp'] = 'Kérjük, adja meg az automatikus mentések CRON időzítését';

//Errors for autobcakup cron settings
$l['wrong_autobackup_cron_min'] = 'Az automatikus mentés cron perce hibás. Érvényes érték: 0-59 vagy a *';
$l['wrong_autobackup_cron_hour'] = 'Az automatikus mentés cron órája hibás. Érvényes érték: 0-23 vagy a *';
$l['wrong_autobackup_cron_day'] = 'Az automatikus mentés cron napja hibás. Érvényes érték: 0-31 vagy a *';
$l['wrong_autobackup_cron_month'] = 'Az automatikus mentés cron hónapja hibás. Érvényes érték: 0-12 vagy a *';
$l['wrong_autobackup_cron_weekday'] = 'Az automatikus mentés cron hét napjai hibásak. Érvényes érték: 0-7 vagy a *';

$l['quick_install'] = 'Gyors telepítés';
$l['custom_install'] = 'Egyéni telepítés';

$l['outdated_script'] = 'A(z) <b>&soft-1;</b> több mint két éve nem került frissítésre, hogy a szkript gyártója már nem támogatja';
$l['ampps_notify_premium'] = 'Ez a szolgáltatás az AMPPS prémium verziójában érhető el. Kérjük, vásárolja meg az <b><a href="https://ampps.com/clients">AMPPS Premium</a></b> verziót';

$l['choose_url'] = 'Válasszon telepítési URL-t';
$l['choose_url_exp'] = 'Kérjük, a szoftver telepítéséhez válassza ki az URL címet';

$l['error_max_ins_script'] = 'Elérte a szkriptenként megengedett maximális (<b>&soft-1;</b>) mentés számot.';
$l['notify_ver'] = 'Notify '.$globals['sn'].' of a new Version';
$l['notifyversion'] = 'Köszönjük, hogy tájékoztatott az új verzióról. A lehető leghamarabb megvizsgáljuk';

$l['rbackup_disabled'] = 'Az adminisztrátor letiltotta a távoli helyre történő mentést';
$l['rbackup_protocol_disabled'] = 'Az adminisztrátor letiltotta a(z) <b>&soft-1;</b> helyre történő mentést';
$l['randpass'] = 'Generate a Random Password';
$l['cron_min'] = 'Min';
$l['cron_hour'] = 'Hour';
$l['cron_day'] = 'Day';
$l['cron_month'] = 'Month';
$l['cron_weekday'] = 'Weekday';
$l['remove_complete'] = 'Remove Completely';
$l['remove_info'] = 'Remove from '.APP;