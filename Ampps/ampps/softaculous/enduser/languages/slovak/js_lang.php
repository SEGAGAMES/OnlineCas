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

$l['no_info_file'] = 'Súbor INFO.XML nebol nájdený! Prosím, oznámte to správcovi servera.';
$l['incompatible'] = 'Softvér požaduje vyššiu verziu '.APP.'! Prosím, oznámte to správcovi servera.';
$l['no_install'] = 'Súbor INSTALL.XML nebol nájdený! Prosím, oznámte to správcovi servera.';
$l['no_functions'] = 'Súbor INSTALL FUNCTIONS nebol nájdený ! Prosím, oznámte to správcovi servera.';
$l['no_softdomain'] = 'Nevybrali ste doménu pre inštaláciu softvéru.';
$l['wrong_softdomain'] = 'Cesta domény, ktorú ste vybrali, nebola nájdená.';
$l['no_space'] = 'Nemáte dostatočný priestor pre inštaláciu tohto softvéru.';
$l['no_field'] = 'Políčko <b>&soft-1;</b> je požadované a musí byť vyplnené.';
$l['no_package'] = 'Inštalačný balíček nebol nájdený !';
$l['no_decompress'] = 'Pri dekompresii súborov balíčka sa vyskytli chyby.';
$l['mail_new_ins'] = 'Nová inštalácia &soft-1; bola dokončená. Detaily inštalácie sú zobrazené nižšie:';
$l['mail_path'] = 'Cesta';
$l['mail_url'] = 'URL';
$l['mail_time'] = 'Čas inštalácie';
$l['mail_subject'] = 'Nová inštalácia &soft-1;';
$l['some_files_exist'] = 'Inštalácia nemôže pokračovať, pretože v cieľovom priečinku už existujú nasledujúce súbory:';
$l['delete_files'] = 'Prosím, odstráňte tieto súbory, alebo zvoľte iný priečinok.';
$l['checking_data'] = 'Kontrola zadaných údajov';
$l['unzipping_files'] = 'Kopírovanie súborov a priečinkov';
$l['unzipping_datadir'] = 'Rozbaľovanie súborov dát';
$l['prop_db'] = 'Propagovanie databázy';
$l['finishing_process'] = 'Dokončovanie inštalácie';
$l['wait_note'] = '<b>UPOZORNENIE:</b> Toto môže trvať 3-4 minúty. Prosím, neopúšťajte stránku, pokým ukazovateľ nedosiahne 100%';
$l['softdirectory_invalid'] = 'Priečinok , ktorý ste zadali, je neplatný.';
$l['err_domain'] = 'No Domain';
$l['err_domain_admin'] = 'This User does not have any Domain. Please contact Administrator.';
$l['err_pass_strength'] = 'Password strength must be greater than ';
$l['no_sel_inst'] = 'Žiadne vybrané inštalácie';
$l['del_insid'] = 'Ste si istý, že chcete odstrániť označené inštalácie ?';
$l['ins_emailto'] = 'Zaslať detaily inštalácie emailom na';
$l['no_https'] = 'Dôveryhodný SSL certifikát nebol nájdený';
$l['err_dbprefix'] = 'Prefix tabuľky je neplatný. Platné hodnoty sú a-z alebo A-Z alebo 0-9 alebo _';
$l['auto_backup_not_allowed'] = 'Zvolená frekvencia záloh je neplatná';
$l['invalid_script'] = 'Neplatné Script ID';
$l['not_js_script'] = 'Tento skript nie je JavaScript';
$l['no_domain_found'] = 'Doména sa nenašla. Pre inštaláciu skriptu je nutné vyplniť doménu';

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['install'] = 'Inštalovať';
$l['overview'] = 'Prehľad';
$l['features'] = 'Funkcionality';
$l['demo'] = 'Ukážka';
$l['ratings'] = 'Hodnotenia';
$l['import'] = 'Import';
$l['software_ver'] = 'Verzia';
$l['space_req'] = 'Požadované miesto';
$l['available_space'] = 'Dostupné miesto';
$l['req_space'] = 'Požadované miesto';
$l['mb'] = 'MB';
$l['software_support'] = 'Softvérová podpora';
$l['support_link'] = 'Navštíviť stránku podpory';
$l['support_note'] = 'Poznámky: Softaculous neposkytuje podporu pre žiadny softvér.';
$l['setup'] = 'Nastavenia softvéru';
$l['choose_domain'] = 'Vybrať doménu';
$l['choose_domain_exp'] = 'Prosím, vyberte doménu pre inštaláciu softvéru.';
$l['in_directory'] = 'V priečinku';
$l['in_directory_exp'] = 'Priečinok je relatívny k vašej doméne a bude <b>vytvorený, ak neexistuje</b>. napr. Pre inštaláciu na http://mojadomena/priecinok/ zadajte len <b>priecinok</b>. Pre inštaláciu do http://mojadomena/ nechajte toto prázdne.';
$l['softcopy_note'] = '<b>NOTE</b>: This software requires that it be installed using its own installation utility. Please visit the URL that will be shown once the files have been copied to complete the installation process.';
$l['softsubmit'] = 'Inštalovať';
$l['congrats'] = 'Gratulujeme, softvér bol úspešne nainštalovaný';
$l['succesful'] = 'bol úspešne nainštalovaný do';
$l['enjoy'] = 'Dúfame, že proces inštalácie bol jednoduchý.';
$l['install_notes'] = 'Nasledujú dôležité poznámky. Je dôrazne doporučované prečítať si ich';
$l['please_note'] = '<b>UPOZORNENIE</b>: '.APP.' je iba automatický inštalátor a neposkytuje žiadnu podporu pre individuálne softvérové balíčky. Prosím, navštívte stránku poskytovateľa softvéru pre podporu!';
$l['regards'] = 'S pozdravom';
$l['softinstaller'] = APP.' Auto inštalátor';
$l['return'] = 'Spať na prehľad';
$l['current_ins'] = 'Súčasné inštalácie';
$l['link'] = 'Spojenie';
$l['ins_time'] = 'Čas inštalácie';
$l['version'] = 'Verzia';
$l['upd_to'] = 'Aktualizovať na verziu';
$l['remove'] = 'Odstrániť';
$l['no_info'] = 'Žiadne info';
$l['ratesoft'] = 'Ohodnoťte tento skript';
$l['reviews'] = 'Hodnotenia';
$l['reviewsoft'] = 'Napísať hodnotenie';
$l['readreviews'] = 'Čítať hodnotenia';
$l['reviews_exp'] = 'Čítať hodnotenia od ostatných používateľov a';
$l['ins_type'] = 'Druh inštalácie';
$l['ins_type_exp2'] = 'Please select the installation type';
$l['ins_type_exp'] = '<b>Originálny Balíček</b> - Balíček je ako dostupný na stránke so skriptami. <br /><b>Iba súbory knižnice</b> - iba súbory Javascript knižnice.';
$l['ori_pack'] = 'Originálny balíček';
$l['just_lib'] = 'Iba súbory knižnice';
$l['overwrite_exist'] = '<b>ALEBO</b><br /><input type="checkbox" name="overwrite_existing" id="overwrite_existing" />&nbsp;&nbsp;<b><span style="color:#000;">Označte políčko pre prepísanie všetkých súborov a pokračovanie</span></b>';
$l['overwrite'] = 'Prepísať súbory';
$l['choose_protocol'] = 'Vybrať protokol';
$l['choose_protocol_exp'] = 'Ak vaša stránka používa SSL, tak, prosím, zvoľte protokol HTTPS.';
$l['clone'] = 'Klonovať';
$l['options'] = 'Možnosti';
$l['downloading'] = 'Sťahovanie balíčka';
$l['installing'] = 'Inštalovanie skriptu';
$l['go'] = 'Ísť';
$l['rem_inst_id'] = 'Odstraňovanie inštalácie -';
$l['inst_remvd'] = 'Označená inštalácia(/-e) bola(/-i) odstránená(/-é). Stránka bude obnovená !';
$l['release_date'] = 'Dátum vydania';
$l['adv_option'] = 'Rozšírené možnosti';
$l['disable_notify_update'] = 'Zakázať upozornenia na nové verzie.';
$l['exp_disable_notify_update'] = 'Ak zaškrtnuté, nebude dostávať upozornenia na nové verzie pre túto inštaláciu emailom.';
$l['prog_installing'] = 'Inštalácia'; // Dont remove trailing space
$l['prog_install_complete'] = 'Inštalácia dokončená.';

$l['auto_backup'] = 'Automatické zálohy';
$l['exp_auto_backup'] = APP.' will take automated backups via CRON as per the frequency you select';
$l['auto_backup_rotation'] = 'Rotácia záloh';
$l['exp_auto_backup_rotation'] = 'Ak bude dosiahnutý limit rotácie '.APP.' odstráni najstaršiu zálohu tejto inštalácie a vytvorí novú zálohu. Zálohy budú používať váš priestor, preto vyberte rotáciu záloh na základe dostupného priestoru na vašom serveri';
$l['no_backup'] = 'Nezálohovať';
$l['daily'] = 'Denne';
$l['weekly'] = 'Týždenne';
$l['monthly'] = 'Mesačne';
$l['unlimited'] = 'Neobmedzené';
$l['changelog'] = 'Log zmien';
$l['act_upgrade'] = 'Nedávno aktualizované';
$l['act_clone'] = 'Nedávno klonované';
$l['act_backup'] = 'Nedávno zálohované';
$l['act_install'] = 'Nedávno inštalované';
$l['act_edit'] = 'Nedávno upravené';
$l['act_import'] = 'Nedávno importované';
$l['act_restore'] = 'Nedávno obnovené';
$l['ampps_download'] = 'Môžete vyvíjať <b>&soft-1;</b> na vašom <b>desktope</b> pomocou nášho bezplatného nástroja pre vývojárov Softaculous AMPPS. Kliknite na <a href="https://www.ampps.com/downloads" target="_blank"><b>sem</b></a> pre stiahnutie <a href="https://www.ampps.com/downloads" target="_blank"><img src="https://images.softaculous.com/ampps.gif" height="25" /></a>';

$l['install_tweet_sub'] = 'Povedzte priateľom o vašej novej stránke';
$l['err_auto_backup_limit'] = 'Rotácia automatickej zálohy nemôže byť viac ako <b>&soft-1;</b>';
$l['select_domain'] = 'Vybrať doménu';
$l['with_selected'] = 'S označenými';
$l['related_scripts'] = 'Súvisiace skripty';
$l['backup'] = 'Backup';
$l['editdetail'] = 'Edit Details';
$l['install_now'] = 'Nainštalovať teraz';
$l['my_apps'] = 'Moje aplikácie';

$l['bad'] = 'Slabé';
$l['good'] = 'Dobré';
$l['strong'] = 'Silné';
$l['short'] = 'Krátke';
$l['strength_indicator'] = 'Miera bezpečnosti';
$l['show'] = 'Show';
$l['hide'] = 'Hide';

$l['backup_location'] = 'Umiestnenie záloh';
$l['backup_location_exp'] = 'Vyberte umiestnenie zálohy tejto inštalácie';
$l['default'] = 'Prednastavené ';
$l['invalid_backup_location'] = 'Zadané umiestnenie neexistuje';
$l['local_folder'] = 'Lokálny adresár';

$l['no_cron_min'] = 'Nebola špecifikovaná hodnota minút pre Cron';
$l['no_cron_hour'] = 'Nebola špecifikovaná hodnota hodín pre Cron';
$l['no_cron_day'] = 'Nebola špecifikovaná hodnota dní pre Cron';
$l['no_cron_month'] = 'Nebola špecifikovaná hodnota mesiacov pre Cron';
$l['no_cron_weekday'] = 'Nebola špecifikovaná hodnota dňa v týždni pre Cron';

$l['custom_autobackup'] = 'Vlastné';
$l['custom_autobackup_cron'] = 'Cron time pre automatické zálohy';
$l['custom_autobackup_cron_exp'] = 'Špecifikujte Cron pre automatické zálohovanie';

//Errors for autobcakup cron settings
$l['wrong_autobackup_cron_min'] = 'Nesprávna hodnota minút pre Cron. Hodnoty musia byť 0-59 alebo *';
$l['wrong_autobackup_cron_hour'] = 'Nesprávna hodnota hodín pre Cron. Hodnoty musia byť 0-23 alebo *';
$l['wrong_autobackup_cron_day'] = 'Nesprávna hodnota dní pre Cron. Hodnoty musia byť 1-31 alebo *';
$l['wrong_autobackup_cron_month'] = 'Nesprávna hodnota mesiacov pre Cron. Hodnoty musia byť 1-12 alebo *';
$l['wrong_autobackup_cron_weekday'] = 'Nesprávna hodnota dňa v týždni pro Cron. Hodnoty musia byť 0-7 alebo *';

$l['quick_install'] = 'Rýchla inštalácia';
$l['custom_install'] = 'Vlastná inštalácia';

$l['outdated_script'] = '<b>&soft-1;</b> nebol aktualizovaný po dobu viac ako 2 roky a už nemusí byť vydavateľom skriptu podporovaný';
$l['ampps_notify_premium'] = 'Táto funkcia je prístupná iba v prémiových verziách AMPPS. Zakúpiť ich môžete tu <b><a href="https://ampps.com/clients">AMPPS Premium</a></b>';

$l['choose_url'] = 'Zvoľte inštalačnú URL';
$l['choose_url_exp'] = 'Zvoľte URL pre inštaláciu softwaru';

$l['error_max_ins_script'] = 'Dosiahli ste maximálneho počtu inštalácií (<b>&soft-1;</b>) pre jeden skript';
$l['notify_ver'] = 'Notify '.$globals['sn'].' of a new Version';
$l['notifyversion'] = 'Ďakujeme za informáciu o novej verzii. ';

$l['rbackup_disabled'] = 'Zálohy na vzdialenom úložisku sú zakázané správcom';
$l['rbackup_protocol_disabled'] = 'Zálohy na <b>&soft-1;</b> sú zakázané správcom';
$l['randpass'] = 'Generate a Random Password';
$l['cron_min'] = 'Min';
$l['cron_hour'] = 'Hour';
$l['cron_day'] = 'Day';
$l['cron_month'] = 'Month';
$l['cron_weekday'] = 'Weekday';
$l['remove_complete'] = 'Remove Completely';
$l['remove_info'] = 'Remove from '.APP;