<?php

//////////////////////////////////////////////////////////////
//===========================================================
// index_lang.php
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

$l['user_data_error_t'] = 'Felhasználói adathiba';
$l['user_data_error'] = APP.' nem tudja az előfizetési adatait betölteni. Kérjük jelezze a szerver adminisztrátorának.';

$l['remote_licence_t'] = 'Érvénytelen License';
$l['remote_licence'] = 'Nem érvényes licenset használt. Kérjük, ezt jelentse a szerver rendszergazdának!';

$l['enterprise_licence_t'] = 'Érvénytelen License';
$l['enterprise_licence'] = 'Nem érvényes licenset használt. Kérjük, ezt jelentse a szerver rendszergazdának!';

$l['no_license'] = 'A LICENSE fájl nem található! Kérjük jelezze a szerver adminisztrátorának.';

$l['today'] = '<b>Ma</b> at ';//The today string for showing todays post time

$l['init_theme_error_t'] = 'Téma hiba';//Title
$l['init_theme_error'] = 'Nem lehet a téma-fájlt betölteni- &soft-1;.';

$l['init_theme_func_error_t'] = 'Téma funkció hiba';//Title
$l['init_theme_func_error'] = 'Nem lehet a téma funkcióit betölteni - &soft-1;.';

$l['disable_softaculous_t'] = 'Softaculus letiltva';
$l['disable_softaculous'] = 'Softaculus le van tiltva a Felhasználó számára. Kérjük, lépjen kapcsolatba a rendszergazdával.';

$l['load_theme_settings_error'] = 'Nem lehet a téma beállításait betölteni.';

$l['view_guide'] = 'View Guide';
$l['max_db_length'] = 'The database name cannot be greater than &soft-1; characters. Please choose a shorter database name.';


//Error Handle Function
$l['following_errors_occured'] = 'A hibák a következők';

//Success Message Function
$l['following_message'] = 'A következő üzenet jött vissza';

//Major Error Function
$l['fatal_error'] = 'Fatális hiba';
$l['following_fatal_error'] = 'A következő hiba történt';

//Message Function
$l['soft_message'] = APP.' üzenet';
$l['following_soft_message'] = 'A következő üzenet jött vissza';

//Update Softwares
$l['no_soft_found'] = 'Az alkalmazás nem található.....Frissítés szükséges';
$l['ver_not_match'] = 'A verziók nem egyeznek.....Frissítés szükséges';
$l['ver_match'] = 'Jelenlegi a legfrissebb......Folytatás';
$l['del_prev_files'] = 'Előző fájlok törlése......Done';
$l['fetch_latest'] = 'Legfrissebb letöltése......';
$l['error_fetch_latest'] = 'Nem tudom a legfrissebbet letölteni......Folytatás';
$l['error_save_latest'] = 'Nem tudom a legfrissebbet menteni......Folytatás';
$l['got_latest'] = 'Legfrissebb elmentve';
$l['unzip_latest'] = 'Fájlok kicsomagolása......';
$l['error_unzip_latest'] = 'Kicsomagolás sikertelen......Folytatás';
$l['unzipped_latest'] = 'Sikeresen kicsomagolva';

//Update Softaculous
$l['getting_info'] = 'Információ lekérése......';
$l['error_getting_latest'] = 'Információ lekérése sikertelen......Vége';
$l['got_info'] = 'Információk begyűjtve';
$l['manual_mode'] = APP.' új verziója manuális beavatkozást igényel......Megszakítva';
$l['no_updates'] = 'A jelenlegi verzió a legrissebb......Folytatom';
$l['fetch_upgrade'] = 'Frissítés letöltése......';
$l['error_fetch_upgrade'] = 'Nem tudom a frissítést letölteni......Vége';
$l['error_save_upgrade'] = 'Nem tudom a frissítést menteni......Vége';
$l['got_upgrade'] = 'A frissítő-fájl mentve';
$l['unzip_upgrade'] = 'Fájlok kicsomagolása......';
$l['error_unzip_upgrade'] = 'Kicsomagolás sikertelen......Vége';
$l['unzipped_upgrade'] = 'Kicsomagolás sikeres';
$l['md5_check'] = 'MD5 ellenőrzés sikeres';
$l['err_md5_check'] = 'MD5 ellenőrzés ezekhez a fájlokhoz sikeres volt';
$l['err_md5_file'] = 'nem létezik';

//MySQL Errors
$l['err_selectmy'] = 'A MySQL adatbázis nem választható.';
$l['err_myconn'] = 'A kapcsolat a MySQL nem sikerül.';
$l['err_makequery'] = 'Nem tudom a lekérdezést végrehajtani';
$l['err_mynum'] = 'MySQL hiba szám';
$l['err_myerr'] = 'MySQL hiba';
$l['err_no_db_file'] = 'The database import file does not exist';
$l['err_no_open_db_file'] = 'Could not open the database import file';

//Importing Errors
$l['imp_wrong_softdomain'] = 'A domain név könyvtára &soft-1; nem található.';
$l['imp_softpath_wrong'] = '&soft-1; útvonala hibás vagy nem létezik.';
$l['imp_ins_exists'] = '&soft-1; már telepítve van ide: &soft-2;, ahogy a mi nyilvántartásunkból kiderül!';
$l['imp_no_func'] = '&soft-1; import funkcióját nem lehet betölteni.';
$l['imp_err'] = 'Hibák történtek az alkalmazás importálásánál itt: &soft-1;';
$l['err_query'] = 'Could not execute the query';

$l['invalid_search_input'] = 'Invalid Theme Search character. Only alphanumeric characters, underscore and hyphen are allowed.';

//hf_theme.php
$l['root_login'] = 'Belépés ROOT-ként';
$l['welcome'] = 'Üdvözöljük';
$l['logout'] = 'Kijelentkezés';
$l['page_time'] = 'Az oldal létrehozásához szükséges idő';
$l['times_are'] = 'Időzóna:';
$l['time_is'] = 'Pillanatnyi idő';
$l['no_script_found'] = 'Nem található ilyen Szkript!';
$l['webuzo_sysapps_disabled'] = 'This functionality has been disabled from the Webuzo Admin Panel';
$l['webuzo_install_utility'] = 'This utility is not installed. Please install it first';

//The Category Language Variables
$l['forums'] = 'Forumok';
$l['blogs'] = 'Blogok';
$l['cms'] = 'Portálok/CMS';
$l['galleries'] = 'Galériák';
$l['wikis'] = 'Wiki-k';
$l['admanager'] = 'Hirdetők';
$l['calendars'] = 'Naptárak';
$l['games'] = 'Játékok';
$l['mail'] = 'Levelezés';
$l['polls'] = 'Kérdőív/Statisztika';
$l['projectman'] = 'Projekt kezelés';
$l['ecommerce'] = 'E-kereskedelem';
$l['guestbooks'] = 'Vendégkönyvek';
$l['customersupport'] = 'Támogatás';
$l['others'] = 'Egyéb';
$l['music'] = 'Zene';
$l['video'] = 'Videó';
$l['files'] = 'Fájlkezelés';
$l['go_cpanel'] = 'Vissza a kezelőfelületre';
$l['go_home'] = APP.' honlap';
$l['go_demos'] = 'Script Bemutatók';
$l['go_ratings'] = 'Script osztályzás';
$l['go_settings'] = 'Beállítások szerkesztése';
$l['go_email_settings'] = 'Email beállítások';
$l['go_installations'] = 'Összes telepítés';
$l['go_support'] = 'Súgó és támogatás';
$l['go_sync'] = 'Telepítések importálása';
$l['go_backups'] = 'Mentések';
$l['go_templates'] = 'All Templates';
$l['go_tasklist'] = 'Feladatok listája';
$l['go_apps_installations'] = 'Minden telepített Alkalmazás';
$l['go_my_themes'] = 'Témáim';
$l['go_logout'] = 'Kilépés';
$l['ins_stats'] = 'Telepítések';
$l['outdated_stats'] = 'Elavult telepítések';
$l['backups_stats'] = 'Mentések';

$l['type_php'] = 'PHP';
$l['type_perl'] = 'Perl';
$l['type_js'] = 'JavaScript';
$l['type_java'] = 'Java';
$l['type_python'] = 'Python';
$l['search'] = 'Keresés';
$l['back_to_top'] = 'Fel';

$l['show'] = 'Mutat';
$l['hide'] = 'Elrejt';

// Categories
$l['cat_php_forums'] = 'Fórumok';
$l['cat_php_blogs'] = 'Blogok';
$l['cat_php_cms'] = 'Portálok/CMS';
$l['cat_php_galleries'] = 'Galériák';
$l['cat_php_wikis'] = 'Wiki-k';
$l['cat_php_admanager'] = 'Hirdetés-kezelés';
$l['cat_php_calendars'] = 'Naptárak';
$l['cat_php_games'] = 'Játék';
$l['cat_php_mail'] = 'Levelezés';
$l['cat_php_polls'] = 'Szavazások és elemzések';
$l['cat_php_projectman'] = 'Projekt kezelés';
$l['cat_php_ecommerce'] = 'E-kereskedelem';
$l['cat_php_guestbooks'] = 'Vendégkönyvek';
$l['cat_php_customersupport'] = 'Támogatás';
$l['cat_php_others'] = 'Egyebek';
$l['cat_php_music'] = 'Zene';
$l['cat_php_video'] = 'Videó';
$l['cat_php_rss'] = 'RSS';
$l['cat_php_socialnetworking'] = 'Közösségi hálózatok';
$l['cat_php_microblogs'] = 'Micro Blogok';
$l['cat_php_frameworks'] = 'Keretrendszerek';
$l['cat_php_educational'] = 'Oktatás';
$l['cat_php_erp'] = 'ERP';
$l['cat_php_dbtools'] = 'DB Eszközök';
$l['cat_php_files'] = 'Fájlkezelés';
$l['cat_js_libraries'] = 'Könyvtárak';
$l['cat_js_widgets'] = 'Kütyük';
$l['cat_perl_blogs'] = 'Blogok';
$l['cat_perl_wikis'] = 'Wikis';
$l['cat_perl_forums'] = 'Forums';
$l['cat_perl_ecommerce'] = 'E-Commerce';
$l['cat_perl_mail'] = 'Üzenetek';
$l['cat_java_cms'] = 'CMS';
$l['cat_java_forums'] = 'Fórumok';
$l['cat_java_projectman'] = 'Projektkezelés';
$l['cat_java_erp'] = 'ERP';
$l['cat_java_blogs'] = 'Blogok';
$l['cat_java_wikis'] = 'Wikik';
$l['cat_python_wikis'] = 'Wikik';
$l['cat_python_projectman'] = 'Projektkezelés';
$l['cat_apps_server_side_scripting'] = 'Szerver oldali programozás';
$l['cat_apps_web_servers'] = 'Web Szerverek';
$l['cat_apps_utilities'] = 'Segédprogramok';
$l['cat_apps_libraries'] = 'Könyvtárak';
$l['cat_apps_databases'] = 'Adatbázisok';
$l['cat_apps_stacks'] = '? Zsák';
$l['cat_apps_security'] = 'Biztonság';
$l['cat_apps_statistics'] = 'Statisztikák';
$l['cat_apps_java_tools'] = 'Java Eszközök';
$l['cat_apps_java_containers'] = 'Java Containers';
$l['cat_apps_version_control'] = 'Verziókövető';
$l['cat_apps_modules'] = 'Modulok';
$l['cat_apps_message_queue'] = 'Üzenet Sor';

// Classes Categories
$l['classes_ajax'] = 'Ajax';
$l['classes_cryptography'] = 'Kriptográfia';
$l['classes_algorithms'] = 'Algoritmusok';
$l['classes_artificialintelligence'] = 'Mesterséges Intelligencia';
$l['classes_email'] = 'E-mail';
$l['classes_finances'] = 'Pénzügyek';
$l['classes_searching'] = 'Keresés';
$l['classes_user_management'] = 'Felhasználó Kezelés';
$l['classes_utilitiesandtools'] = 'Segédprogramok és Eszközök';
$l['classes_validation'] = 'Érvényesítés';
$l['classes_security'] = 'Biztonság';
$l['classes_console'] = 'Konzol';
$l['classes_codegeneration'] = 'Kód generátor';
$l['classes_chat'] = 'Chat';
$l['classes_astrology'] = 'Asztrológia';
$l['classes_audio'] = 'Audio';
$l['classes_biology'] = 'Biológia';
$l['classes_blogs'] = 'Blogok';
$l['classes_cache'] = 'Gyorsító tár';
$l['classes_compression'] = 'Tömörítés';
$l['classes_configuration'] = 'Konfiguráció';
$l['classes_contentmanagement'] = 'Tartalom kezelés';
$l['classes_conversion'] = 'Átalakítás';
$l['classes_datatypes'] = 'Adattípusok';
$l['classes_databases'] = 'Adatbázisok';
$l['classes_debug'] = 'Debug';
$l['classes_designpatterns'] = 'Tervezési Minták';
$l['classes_ecommerce'] = 'E-Kereskedelem';
$l['classes_elearning'] = 'E-Oktatás';
$l['classes_emulators'] = 'Emulátorok';
$l['classes_filesandfolders'] = 'Fájlok és Mappák';
$l['classes_flash'] = 'Flash';
$l['classes_forums'] = 'Fórumok';
$l['classes_games'] = 'Játékok';
$l['classes_geography'] = 'Földrajz';
$l['classes_graphics'] = 'Grafika';
$l['classes_gui'] = 'GUI';
$l['classes_hosting'] = 'Tárhely';
$l['classes_html'] = 'HTML';
$l['classes_http'] = 'HTTP';
$l['classes_language'] = 'Nyelv';
$l['classes_projectmanagement'] = 'Projektkezelés';

// Softaculous Remote Domain Strings
$l['no_domain_data'] = 'Domain Data Not Found!!';
$l['no_aefer_resp'] = 'Could not access the worker file over web. Please check if your domain is pointing to the correct server.'; 

// Webuzo Strings
$l['webuzo'] = 'Webuzo';
$l['go_domain'] = 'Domainek kezelése';
$l['webuzo_license_exp'] = 'Az Ön license nem aktív vagy lejárt. Ha lejárt, kérjük újítsa meg, hogy használni tudja a Webuzo programot';
$l['webuzo_license_exp_t'] = 'License inaktív';
$l['err_no_access'] = 'You do not have permission to access this page';

// Ampps Strings
$l['ampps'] = 'AMPPS';
$l['go_domain'] = 'Domainek kezelése';
$l['ampps_license_exp'] = 'Az Ön license nem aktív vagy lejárt. Ha lejárt, kérjük újítsa meg, hogy használni tudja az Ampps programot';
$l['ampps_license_exp_t'] = 'License inaktív';


/////////////////////////////////////////////////////////////
/////  Following Variables are used for Email Templates /////
/////////////////////////////////////////////////////////////

$l['notify_enable'] = 'Engedélyezett';
$l['notify_disable'] = 'Letiltott';

$l['autoupgrade_enable'] = 'Engedélyezett';
$l['autoupgrade_disable'] = 'Letiltott';

// Auto backup strings
$l['auto_backup_enable'] = 'Engedélyezett';
$l['auto_backup_disable'] = 'Letiltott';

// Install Template Vaiable
$l['mail_install_php_sub'] = 'Új telepítés - $scriptname';
$l['mail_install_php'] = '$scriptname új telepítése befejeződött. A részletek:
Útvonal : $path
URL : $url
Admin URL : $admin_url
<if $datadirectory>Adat Könyvtár : $datadirectory</if>
<if $admin_username>Adminisztrátor neve : $admin_username</if>
<if $admin_pass>Adminisztrátor jelszava : $admin_pass</if>
<if $admin_email>Admin Email: $admin_email</if>
<if $dbname>MySQL adatbázis : $dbname</if>
<if $dbuser>MySQL felhasználó : $dbuser</if>
<if $dbhost>MySQL szerver : $dbhost</if>
<if $dbpass>MySQL jelszó : $dbpass</if>
<if $cron>Cron időzítő : $cron</if>
<if $disable_notify_update>Frissítés Értesítő : $disable_notify_update</if>
<if $eu_auto_upgrade>Automatikus Frissítés : $eu_auto_upgrade</if>
<if $auto_backup>Automatizált Biztonsági mentések : $auto_backup</if>
<if $auto_backup_rotation>Biztonsági mentés Rotáció : $auto_backup_rotation</if>
<if $backup_location>Backup Location : $backup_location</if>
<if $time>Telepítés időpontja : $time</if>

Ha szeretne leiratkozni ezekrők az emailekről, menjen a Control Panel -> '.APP.' -> Email Beállítások részre
';

// Clone Template Vaiable
$l['mail_clone_sub'] = '$scriptname Clone telepítés';
$l['mail_clone'] = 'A(z) $scriptname $version telepítése sikeresen knónozva.

Eredeti telepítésének részletei :
Eredeti Útvonal : $old_path
Eredeti URL : $old_url

Klónozott telepítésének részletei :
Útvonal : $path
URL : $url
Admin URL : $admin_url
<if $datadirectory>Adat Könyvtár : $datadirectory</if>
<if $dbname>MySQL Adatbázis : $dbname</if>
<if $dbuser>MySQL DB Felhasználó : $dbuser</if>
<if $dbhost>MySQL DB Szerver : $dbhost</if>
<if $dbpass>MySQL DB Jelszó : $dbpass</if>
<if $cron>Cron időzítő : $cron</if>
<if $time>Telepítés ideje : $time</if>

Ha szeretne leiratkozni ezekrők az emailekről, menjen a Control Panel -> '.APP.' -> Email Beállítások részre
';

// Restore Template - Template Variable
$l['mail_restore_template_sub'] = 'Restore of your $scriptname Template';
$l['mail_restore_template'] = 'Your template of $scriptname $version has been restored successfully.

Your new installation details :
Path : $path
URL : $url
Admin URL : $admin_url
<if $datadirectory>Data Directory : $datadirectory</if>
<if $dbname>MySQL Database : $dbname</if>
<if $dbuser>MySQL DB User : $dbuser</if>
<if $dbhost>MySQL DB Host : $dbhost</if>
<if $dbpass>MySQL DB Password : $dbpass</if>
<if $cron>Cron Job : $cron</if>
<if $time>Time of Installation : $time</if>

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// Install Template Vaiable
$l['mail_install_js_sub'] = 'Új telepítés - $scriptname';
$l['mail_install_js'] = '$scriptname új telepítése befejeződött. A részletek:
Útvonal : $path
URL : $url
<if $disable_notify_update>Frissítés Értesítő : $disable_notify_update</if>
<if $auto_backup>Automatizált Biztonsági mentések : $auto_backup</if>
<if $auto_backup_rotation>Biztonsági mentés Rotáció : $auto_backup_rotation</if>
<if $backup_location>Backup Location : $backup_location</if>
<if $time>Telepítés időpontja : $time</if>

Ha szeretne leiratkozni ezekrők az emailekről, menjen a Control Panel -> '.APP.' -> Email Beállítások részre
';

// Install Template Vaiable
$l['mail_install_perl_sub'] = 'Új telepítés - $scriptname';
$l['mail_install_perl'] = '$scriptname új telepítése befejeződött. A részletek:
Útvonal : $path
URL : $url
Admin URL : $admin_url
<if $datadirectory>Adat Könyvtár : $datadirectory</if>
<if $wwwdir>Web Könyvtár : $wwwdir</if>
<if $admin_username>Adminisztrátor neve : $admin_username</if>
<if $admin_pass>Adminisztrátor jelszava : $admin_pass</if>
<if $admin_email>Admin Email: $admin_email</if>
<if $dbname>MySQL adatbázis : $dbname</if>
<if $dbuser>MySQL felhasználó : $dbuser</if>
<if $dbhost>MySQL szerver : $dbhost</if>
<if $dbpass>MySQL jelszó : $dbpass</if>
<if $cron>Cron időzítő : $cron</if>
<if $disable_notify_update>Frissítés Értesítő : $disable_notify_update</if>
<if $auto_backup>Automatizált Biztonsági mentések : $auto_backup</if>
<if $auto_backup_rotation>Biztonsági mentés Rotáció : $auto_backup_rotation</if>
<if $backup_location>Backup Location : $backup_location</if>
<if $time>Telepítés időpontja : $time</if>

Ha szeretne leiratkozni ezekrők az emailekről, menjen a Control Panel -> '.APP.' -> Email Beállítások részre
';

// Install Template Vaiable
$l['mail_install_java_sub'] = 'Új telepítés - $scriptname';
$l['mail_install_java'] = '$scriptname új telepítése befejeződött. A részletek:
Útvonal : $path
URL : $url
Admin URL : $admin_url
<if $datadirectory>Data Directory : $datadirectory</if>
<if $wwwdir>Web Directory : $wwwdir</if>
<if $admin_username>Adminisztrátor neve : $admin_username</if>
<if $admin_pass>Adminisztrátor jelszava : $admin_pass</if>
<if $admin_email>Admin Email: $admin_email</if>
<if $dbname>MySQL adatbázis : $dbname</if>
<if $dbuser>MySQL felhasználó : $dbuser</if>
<if $dbhost>MySQL szerver : $dbhost</if>
<if $dbpass>MySQL jelszó : $dbpass</if>
<if $cron>Cron időzítő : $cron</if>
<if $disable_notify_update>Update Notification : $disable_notify_update</if>
<if $auto_backup>Automated Backups : $auto_backup</if>
<if $auto_backup_rotation>Backup Rotation : $auto_backup_rotation</if>
<if $backup_location>Backup Location : $backup_location</if>
<if $time>Telepítés időpontja : $time</if>

Ha le szeretne iratkozni az ilyen e-mailekről, menjen a Control Panel -> '.APP.' -> E-mail beállítások részre
';

$l['mail_install_python_sub'] = '$scriptname új telepítés';
$l['mail_install_python'] = 'A new installation of $scriptname $version has been completed. The details of the installation are shown below:
Path : $path
URL : $url
Admin URL : $admin_url
<if $datadirectory>Data Directory : $datadirectory</if>
<if $wwwdir>Web Directory : $wwwdir</if>
<if $admin_username>Admin Username : $admin_username</if>
<if $admin_pass>Admin Password : $admin_pass</if>
<if $admin_email>Admin Email: $admin_email</if>
<if $dbname>MySQL Database : $dbname</if>
<if $dbuser>MySQL DB User : $dbuser</if>
<if $dbhost>MySQL DB Host : $dbhost</if>
<if $dbpass>MySQL DB Password : $dbpass</if>
<if $cron>Cron Job : $cron</if>
<if $disable_notify_update>Update Notification : $disable_notify_update</if>
<if $auto_backup>Automated Backups : $auto_backup</if>
<if $auto_backup_rotation>Backup Rotation : $auto_backup_rotation</if>
<if $backup_location>Backup Location : $backup_location</if>
<if $time>Time of Installation : $time</if>

Ha le szeretne iratkozni az ilyen e-mailekről, menjen a Control Panel -> '.APP.' -> E-mail beállítások részre
';
// Update template Variable (From ADMIN)
$l['mail_update_sub'] = 'Alkalmazás-frissítések elérhetők';
$l['mail_update'] = 'Ez a levél az elavult alkalmazásokra figyelmeztet, amik telepítésre kerültek. Biztonsági okokból frissítse az elavult alkalmazásokat minél hamarabb.
A következő alkalmazásokhoz érhető el új frissítés:

$installation

Az alkalmazások frissítését itt végezheti el: Vezérlőpult -> '.APP.' -> Telepítések.
Itt lesz lehetősége az alkalmazások frissítésére.  

A rendszer adminisztrátora $serverip
';

// Remove Template Variable
$l['mail_remove_sub'] = 'A(z) $scriptname telepítés eltávolítva';
$l['mail_remove'] = 'A(z) $scriptname telepítés eltávolításra került. A telepítés részletei a következők voltak :
Útvonal : $path
<if $url>URL : $url</if>
<if $datadirectory>Adat Könyvtár : $datadirectory</if>
<if $wwwdir>Web Könyvtár : $wwwdir</if>
<if $dbname>MySQL adatbázis : $dbname</if>
<if $dbuser>MySQL felhasználó : $dbuser</if>
<if $dbhost>MySQL szerver : $dbhost</if>
<if $dbpass>MySQL jelszó : $dbpass</if>
<if $cron>Cron időzítő : $cron</if>
Telepítés időpontja : $time
Eltávolítás időpontja : $rem_time

Ha szeretne leiratkozni ezekrők az emailekről, menjen a Control Panel -> '.APP.' -> Email Beállítások részre
';

// Cron Template Variable
$l['mail_cron_sub'] = 'Script frissítések elérhetőek';
$l['changelog'] = '== Változások a következőnél';
$l['mail_cron'] = 'A következő script frissítések érhetők el:

$installation

A scriptek frissítését itt végezheti el: Vezérlőpult -> '.APP.' -> Telepítések.
Itt lehetősége lesz a scriptek frissítésére.


$changelog

'.APP.' időzített feladat-végrehajtás $serverip

Ha le szeretne iratkozni az ilyen e-mailekről, menjen a Control Panel -> '.APP.' -> E-mail beállítások részre

';

// Editdetail Template Variable
$l['mail_editdetail_sub'] = 'A(z) $scriptname telepítés részletei módosultak';
$l['mail_editdetail'] = 'A(z) $scriptname telepítés részletei módosításra kerültek. A telepítés módosított részletei a következők :
Útvonal : $path
URL : $url
<if $datadirectory>Adat Könyvtár : $datadirectory</if>
<if $wwwdir>Web Directory : $wwwdir</if>
<if $wwwdir>Web Könyvtár : $wwwdir</if>
<if $dbname>MySQL adatbázis : $dbname</if>
<if $dbuser>MySQL felhasználó : $dbuser</if>
<if $dbhost>MySQL szerver : $dbhost</if>
<if $dbpass>MySQL jelszó : $dbpass</if>
<if $cron>Cron időzítő : $cron</if>
<if $disable_notify_update>Frissítés Értesítő : $disable_notify_update</if>
<if $eu_auto_upgrade>Automatikus Frissítés : $eu_auto_upgrade</if>
<if $auto_backup>Automatizált Biztonsági mentések : $auto_backup</if>
<if $auto_backup_rotation>Biztonsági mentés Rotáció : $auto_backup_rotation</if>
<if $backup_location>Backup Location : $backup_location</if>
Telepítés időpontja : $time
Módosítás időpontja : $edit_time

Ha szeretne leiratkozni ezekrők az emailekről, menjen a Control Panel -> '.APP.' -> Email Beállítások részre
';

// Backup Language Strings
$l['mail_backup_sub'] = 'A(z) $scriptname telepítés biztonsági mentése';
$l['mail_backup'] = 'A(z) $scriptname telepítés biztonsági mentése sikeresen befejeződött.
A részletek a következők :
Telepítés Útvonal : $path
Telepítés URL : $url
<if $backup_location>Backup Location : $backup_location</if>
Biztonsági mentés Útvonal : $backup_file
<if $backup_note>Biztonsági mentés Megjegyzés : $backup_note</if>

A biztonsági mentéshez az '.APP.' -> Biztonsági mentések Részben férhet hozzá.

Ha szeretne leiratkozni ezekrők az emailekről, menjen a Control Panel -> '.APP.' -> Email Beállítások részre
';

$l['mail_backup_fail_sub'] = 'A(z) $scriptname telepítés biztonsági mentése nem sikerült
';
$l['mail_backup_fail'] = 'A(z) $scriptname telepítés biztonsági mentése nem sikerült.
A részletek a következők :
Telepítés Útvonal : $path
Telepítés URL : $url
Biztonsági mentés Útvonal : $backup_file

A következő hiba történt :
$error

Kérjük, próbálja meg létrehozni a biztonsági mentést egy kis idő múlva újra.

Ha szeretne leiratkozni ezekrők az emailekről, menjen a Control Panel -> '.APP.' -> Email Beállítások részre
';


// Template Language Strings
$l['mail_template_sub'] = 'Template of your $scriptname installation';
$l['mail_template'] = 'The template of your $scriptname installation was created successfully.
The details are as follows :
Installation Path : $path
Installation URL : $url
<if $backup_location>Template Location : $backup_location</if>
Template Path : $backup_file
<if $template_name>Template Name : $template_name</if>

You can access the template from the Templates Section in '.APP.'.

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

$l['mail_template_fail_sub'] = 'Failed : Template of your $scriptname installation';
$l['mail_template_fail'] = 'The template of your $scriptname installation did not create successfully.
The details are as follows :
Installation Path : $path
Installation URL : $url
Template Path : $backup_file

The following error occured :
$error

Please try to create a template again after some time.

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';


// Restore Language Strings
$l['mail_restore_sub'] = 'A(z) $scriptname visszaállítása
';
$l['mail_restore'] = 'A(z) $scriptname biztonsági mentés visszaállítása sikeresen befejeződött.
A részletek a következők :
Telepítés Útvonal : $path
Telepítés URL : $url

Ha szeretne leiratkozni ezekrők az emailekről, menjen a Control Panel -> '.APP.' -> Email Beállítások részre
';

$l['mail_restore_fail_sub'] = 'A(z) $scriptname visszaállítása nem sikerült';
$l['mail_restore_fail'] = 'A(z) $scriptname visszaállítása nem sikerült.
A részletek a következők :
Telepítés Útvonal : $path
Telepítés URL : $url

A következő hiba történt :
$error

Kérjük, próbálja meg visszaállítani a biztonsági mentést egy kis idő múlva újra.

Ha szeretne leiratkozni ezekrők az emailekről, menjen a Control Panel -> '.APP.' -> Email Beállítások részre
';

// Restore Background Language Strings
$l['mail_restore_bg_sub'] = 'A háttérben megkezdődött a(z) $scriptname mentés visszaállítása';
$l['mail_restore_bg'] = 'A háttérben megkezdődött a(z) $scriptname mentés visszaállítása. A visszaállítási folyamat befejezése után e-mailben értesítést kap az állapotról.
A részletek a következők :
Telepítési útvonal : $path
Telepítési URL : $url

Ha le szeretne iratkozni az ilyen e-mailekről, menjen a Control Panel -> '.APP.' -> E-mail beállítások részre
';

// Backup Background Language Strings
$l['mail_backup_bg_sub'] = 'A háttérben megkezdődött a(z) $scriptname telepítés mentése';
$l['mail_backup_bg'] = 'A háttérben megkezdődött a(z) $scriptname telepítés mentése. A mentési folyamat befejezése után e-mailben értesítést kap az állapotról.
A részletek a következők :
Telepítési útvonal : $path
Telepítési URL : $url

Ha le szeretne iratkozni az ilyen e-mailekről, menjen a Control Panel -> '.APP.' -> E-mail beállítások részre
';

// Template Background Language Strings
$l['mail_template_bg_sub'] = 'Template creation of your $scriptname installation started in background';
$l['mail_template_bg'] = 'The template creation of your $scriptname has started in background. You will receive an email notification about the status once the template process is completed.
The details are as follows :
Installation Path : $path
Installation URL : $url

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// Restore Template Background Language Strings
$l['mail_restore_template_bg_sub'] = 'Restore of your $scriptname template started in background';
$l['mail_restore_template_bg'] = 'The restore of your $scriptname template has started in the background. You will receive an email notification about the status once the restore process is completed.
The details are as follows :
Installation Path : $path
Installation URL : $url

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// import Language Strings
$l['mail_import_sub'] = 'A(z) $scriptname telepítés importálása';
$l['mail_import'] = 'A(z) $scriptname telepítés importálása sikeres volt.
A részletek a következők :
Telepítési útvonal : $path
Telepítési URL : $url

Ha le szeretne iratkozni az ilyen e-mailekről, menjen a Control Panel -> '.APP.' -> E-mail beállítások részre
';

// import fail Language Strings
$l['mail_import_fail_sub'] = 'Sikertelen: A(z) $scriptname telepítés importálása';
$l['mail_import_fail'] = 'A(z) $scriptname telepítés importálása sikertelen volt.
A részletek a következők :
Telepítési útvonal : $path
Telepítési URL : $url

The following error occured :
$error

Kérjük, próbálja meg egy kicsit később újra importálni a telepítést.

Ha le szeretne iratkozni az ilyen e-mailekről, menjen a Control Panel -> '.APP.' -> E-mail beállítások részre
';

// Import Background Language Strings
$l['mail_import_bg_sub'] = 'A(z) $scriptname telepítés importálása';
$l['mail_import_bg'] = 'A háttérben megkezdődött a(z) $scriptname telepítés mentése. A mentési folyamat befejezése után e-mailben értesítést kap az állapotról.
A részletek a következők :
Telepítési útvonal : $path
Telepítési URL : $url

Ha le szeretne iratkozni az ilyen e-mailekről, menjen a Control Panel -> '.APP.' -> E-mail beállítások részre
';


// Install Template Vaiable CLASSES
$l['mail_install_classes_sub'] = 'Új $classesname telepítés';
$l['mail_install_classes'] = 'Egy új $classesname $version telepítése sikeresen megtörtént. A telepítés részletei alább láthatók:
Útvonal : $path
<if $time>Telepítés időpontja : $time</if>

Ha szeretne leiratkozni ezekrők az emailekről, menjen a Control Panel -> '.APP.' -> Email Beállítások részre
';

////////////////////////
// ADMIN UPGRADE - 6
////////////////////////

// Auto Upgrade Email For Admin (successful)
$l['mail_adminupgrade_success_admin_sub'] = 'A(z) $user felhasználó $scriptname telepítése sikeresen frissítésre került';
$l['mail_adminupgrade_success_admin'] = 'A(z) $user felhasználó $scriptname telepítése sikeresen frissítésre került a legfrissebb verzióra.
A részletek a következők :
Telepítés URL : $url
Legfrissebb verzió : $version
Régi verzió : $oldversion
';

// Auto Upgrade Email For Admin (Failed) but restored successfully.
$l['mail_adminupgrade_fail_admin_sub'] = 'A(z) $scriptname telepítés frissítési folyamata sikertelen és visszaállításra került a biztonsági mentésből';
$l['mail_adminupgrade_fail_admin'] = 'A(z) $user felhasználó $scriptname telepítésének frissítési folyamata sikertelen.'
.APP.' létrehozott egy biztonsági mentést a frissítés előtt és a mentés sikeresen visszaállításra került.
Telepítés URL : $url
Jelenlegi verzió : $oldversion
Legfrissebb verzió : $version
A frissítési hiba részletei a következők :
Hiba : $upgrade_error
';

// Auto Upgrade Email for user (successful)
$l['mail_adminupgrade_success_user_sub'] = 'A(z) $scriptname telepítést sikeresen frissítette a Rendszer admin';
$l['mail_adminupgrade_success_user'] = 'A(z) $scriptname telepítést sikeresen frissítette a Rendszer admin a legutolsó verzióra.
A részletek a következők :
Telepítés URL : $url
Legfrissebb verzió : $version
Régi verzió : $oldversion

Ha szeretne leiratkozni ezekrők az emailekről, menjen a Control Panel -> '.APP.' -> Email Beállítások részre
';

// Auto Upgrade Email for user (fail) but restored successfully
$l['mail_adminupgrade_fail_user_sub'] = 'A(z) $scriptname telepítést sikertelenül frissítette a Rendszer admin';
$l['mail_adminupgrade_fail_user'] = 'A Rendszer Admin megpróbálta frissíteni a(z) $scriptname telepítést, de a frissítési művelet nem sikerült.
Készült egy biztonsági mentés a frissítés előtt és a telepítés sikeresen visszaállításra került a mentésből.
Telepítés URL : $url
Jelenlegi verzió : $oldversion
Legfrissebb verzió : $version
A frissítési hiba részletei a következők :
Hiba : $upgrade_error

Ha szeretne leiratkozni ezekrők az emailekről, menjen a Control Panel -> '.APP.' -> Email Beállítások részre
';

// ALL IS FAILED (Upgrade and RESTORE toooo) (FOR ADMIN)
$l['mail_adminupgrade_restore_fail_admin_sub'] = 'A(z) $user felhasználó $scriptname telepítésének frissítési folyamata sikertelen';
$l['mail_adminupgrade_restore_fail_admin'] = 'A(z) $user felhasználó $scriptname telepítésének frissítési folyamata sikertelen.
Készült egy biztonsági mentés a frissítés előtt, de a visszaállítási folyamat szintén sikertelen volt !

Kézi visszaállításra lesz szükség. A kézi visszaállítás leírása itt található :
https://www.softaculous.com/docs/enduser/manual-restore/

A(z) $scriptname telepítés visszaállításához szükséges telepítési és biztonsági mentés részletek a következők :
BIZTONSÁGI_MENTÉS_ÚTVONALA : $backup_path
TELEPÍTÉS_ÚTVONALA : $softpath
<if $dbname>ADATABÁZIS_NÉV : $dbname</if>
<if $dbuser>ADATBÁZIS_FELHASZNÁLÓ : $dbuser</if>
<if $dbpass>ADATBÁZIS_JELSZÓ : $dbpass</if>
<if $dbhost>ADATBÁZIS_SZERVER : $dbhost</if>

Telepítés URL : $url
Jelenlegi verzió : $oldversion
Legfrissebb verzió : $version
<if $upgrade_error>
A frissítési hiba részletei a következők :
Hiba : $upgrade_error
</if>
<if $error>
A visszaállítási hiba részletei a következők :
Hiba : $error
</if>

Az '.APP.' csapat segítségért is elérhető. Felveheti a kapcsolatot az '.APP.' Csapattal (support@'.strtolower(APP).'.com) , ha bármilyen problémával szembesül.
';

// ALL IS FAILED (Upgrade and RESTORE toooo) (FOR USER)
$l['mail_adminupgrade_restore_fail_user_sub'] = 'A(z) $scriptname telepítést sikertelenül frissítette a Rendszer admin';
$l['mail_adminupgrade_restore_fail_user'] = 'A Rendszer Admin megpróbálta frissíteni a(z) $scriptname telepítést, de a frissítési művelet nem sikerült.
Készült egy biztonsági mentés a frissítés előtt, de a visszaállítási folyamat szintén sikertelen volt !

Kézi visszaállításra lesz szükség. A kézi visszaállítás leírása itt található :
https://www.softaculous.com/docs/enduser/manual-restore/

A(z) $scriptname telepítés visszaállításához szükséges telepítési és biztonsági mentés részletek a következők :
BIZTONSÁGI_MENTÉS_ÚTVONALA : $backup_path
TELEPÍTÉS_ÚTVONALA : $softpath
<if $dbname>ADATABÁZIS_NÉV : $dbname</if>
<if $dbuser>ADATBÁZIS_FELHASZNÁLÓ : $dbuser</if>
<if $dbpass>ADATBÁZIS_JELSZÓ : $dbpass</if>
<if $dbhost>ADATBÁZIS_SZERVER : $dbhost</if>

Telepítés URL : $url
Jelenlegi verzió : $oldversion
Legfrissebb verzió : $version
<if $upgrade_error>
A frissítési hiba részletei a következők :
Hiba : $upgrade_error
</if>
<if $error>
A visszaállítási hiba részletei a következők :
Hiba : $error
</if>

Az '.APP.' csapat segítségért is elérhető. Felveheti a kapcsolatot az '.APP.' Csapattal (support@'.strtolower(APP).'.com) , ha bármilyen problémával szembesül.

Ha szeretne leiratkozni ezekrők az emailekről, menjen a Control Panel -> '.APP.' -> Email Beállítások részre
';

////////////////////////
// USER UPGRADE - 3
////////////////////////

// When upgraded by user successfully (By user)
$l['mail_userupgrade_success_user_sub'] = 'A(z) $scriptname telepítés sikeresen frissítve';
$l['mail_userupgrade_success_user'] = 'A(z) $scriptname telepítés sikeresen frissítve a legfrissebb verzióra.
A részletek a következők :
Telepítés URL : $url
Legfrissebb verzió : $version
Old Version : $oldversion

Ha szeretne leiratkozni ezekrők az emailekről, menjen a Control Panel -> '.APP.' -> Email Beállítások részre
';

// If any error occured while upgrading, (By user)
$l['mail_userupgrade_fail_user_sub'] = 'A(z) $scriptname telepítés frissítése sikertelen';
$l['mail_userupgrade_fail_user'] = 'A(z) $scriptname telepítés frissítése sikertelen.
A részletek a következők :
Telepítés URL : $url
Jelenlegi verzió : $oldversion
Legfrissebb verzió : $version
Hiba : $upgrade_error

Ha szeretne leiratkozni ezekrők az emailekről, menjen a Control Panel -> '.APP.' -> Email Beállítások részre
';

// If UPGRADE and RESTORE failed while upgrading, (By user)
$l['mail_userupgrade_restore_fail_user_sub'] = 'A(z) $scriptname telepítés frissítése sikertelen';
$l['mail_userupgrade_restore_fail_user'] = 'A(z) $scriptname telepítés frissítése sikertelen.
Készült egy biztonsági mentés a frissítés előtt, de a visszaállítási folyamat szintén sikertelen volt !

Kézi visszaállításra lesz szükség. A kézi visszaállítás leírása itt található :
https://www.softaculous.com/docs/enduser/manual-restore/

A részletek a következők :
Telepítés URL : $url
Jelenlegi verzió : $oldversion
Legfrissebb verzió : $version
<if $upgrade_error>
A frissítési hiba részletei a következők :
Hiba : $upgrade_error
</if>
<if $error>
A visszaállítási hiba részletei a következők :
Hiba : $error
</if>

Az '.APP.' csapat segítségért is elérhető. Felveheti a kapcsolatot az '.APP.' Csapattal (support@'.strtolower(APP).'.com) , ha bármilyen problémával szembesül.

Ha szeretne leiratkozni ezekrők az emailekről, menjen a Control Panel -> '.APP.' -> Email Beállítások részre
';

////////////////////////
// AUTO UPGRADE - 3
////////////////////////

// When AUTOUPGRADED successfully
$l['mail_autoupgrade_success_user_sub'] = 'A(z) $scriptname telepítés Automatikus frissítése sikeres';
$l['mail_autoupgrade_success_user'] = 'A(z) $scriptname telepítés Automatikus frissítése a legfrissebb verzióra sikeres.
A részletek a következők :
Telepítés URL : $url
Legfrissebb verzió : $version
Régi verzió : $oldversion

Ha szeretne leiratkozni ezekrők az emailekről, menjen a Control Panel -> '.APP.' -> Email Beállítások részre
';

// When AUTOUPGRADE FAILED
$l['mail_autoupgrade_fail_user_sub'] = 'A(z) $scriptname telepítés Automatikus frissítése sikertelen';
$l['mail_autoupgrade_fail_user'] = 'A(z) $scriptname telepítés Automatikus frissítése sikertelen.
A részletek a következők :
Telepítés URL : $url
Jelenlegi verzió : $oldversion
Legfrissebb verzió : $version
Hiba : $upgrade_error

Ha szeretne leiratkozni ezekrők az emailekről, menjen a Control Panel -> '.APP.' -> Email Beállítások részre
';

// If UPGRADE and RESTORE failed while AUTOUPGRADING
$l['mail_autoupgrade_restore_fail_user_sub'] = 'A(z) $scriptname telepítés Automatikus frissítése sikertelen';
$l['mail_autoupgrade_restore_fail_user'] = 'A(z) $scriptname telepítés Automatikus frissítése sikertelen.
Készült egy biztonsági mentés a frissítés előtt, de a visszaállítási folyamat szintén sikertelen volt !

Kézi visszaállításra lesz szükség. A kézi visszaállítás leírása itt található :
https://www.softaculous.com/docs/enduser/manual-restore/

A részletek a következők :
Telepítés URL : $url
Jelenlegi verzió : $oldversion
Legfrissebb verzió : $version
<if $upgrade_error>
A frissítési hiba részletei a következők :
Hiba : $upgrade_error
</if>
<if $error>
A visszaállítási hiba részletei a következők :
Hiba : $error
</if>

Az '.APP.' csapat segítségért is elérhető. Felveheti a kapcsolatot az '.APP.' Csapattal (support@'.strtolower(APP).'.com) , ha bármilyen problémával szembesül.

Ha szeretne leiratkozni ezekrők az emailekről, menjen a Control Panel -> '.APP.' -> Email Beállítások részre
';

////////////////////////
// PRE UPGRADE CHECK 
////////////////////////

// If pre upgradation check fails while AUTOUPGRADE (FOR USER)
$l['mail_autoupgrade_precheck_fail_sub'] = 'Előzetes frissítés ellenőrzés sikertelen';
$l['mail_autoupgrade_precheck_fail'] = 'A következő telepítés automatikus frissítés műveletét nem lehetett befejezni, mert nem felel meg a frissítési követelményeknek :
Telepítés URL : $url
Jelenlegi verzió : $oldversion
Legfrissebb verzió : $version
<if $upgrade_error>
Hiba : $upgrade_error
</if>
<if $error>
Hiba : $error
</if>

Ha szeretne leiratkozni ezekrők az emailekről, menjen a Control Panel -> '.APP.' -> Email Beállítások részre
';

/////////////////////////////////
// Backup Failed CLI UPGRADE
/////////////////////////////////

// If a backup fails before AUTO UPGRADING an installation (FOR USER)
$l['mail_autoupgrade_backup_fail_sub'] = 'A biztonsági mentés művelet nem sikerült a(z) $scriptname telepítés automatikus frissítése előtt';
$l['mail_autoupgrade_backup_fail'] = 'A(z) $scriptname telepítés mentése nem sikerült, ezért az automatikus frissítés művelet megszakadt.
A részletek a következők :
Telepítés URL : $url
Jelenlegi verzió : $oldversion
Legfrissebb verzió : $version
Hiba : $error

Ha szeretne leiratkozni ezekrők az emailekről, menjen a Control Panel -> '.APP.' -> Email Beállítások részre
';

$l['err_openconfig'] = 'Nem nyitható meg a Konfigurációs fájl';
$l['err_writeconfig'] = 'Nem írható a Konfigurációs fájl';

$l['classes_con_failed'] = 'Error : Failed to Connect to Server .';
$l['cl_ratings'] = 'Értékelés';
$l['cl_author'] = 'Szerző';
$l['cl_license'] = 'Licenc';
$l['cl_version'] = 'Verzió';
$l['cl_show_files'] = 'Fájlok';
$l['cl_install_but'] = 'Telepítés';
$l['expand_view'] = 'Click here for full view';
$l['collapse_view'] = 'Click here for embedded view';
$l['email_off_notice'] = '<b>NOTE : Notification emails are disabled so you will not receive any email.</b>';

// Add User Language Strings
$l['mail_add_user_sub'] = 'Welcome to Softaculous Remote Installer';
$l['mail_add_user'] = 'You can now successfully login into Softaculous Remote Installer.
A részletek a következők :
User 					: $username
API Key 				: $api_key
API Password 			: $api_pass
Number of Users allowed	: $number_of_users';

// Requirement parser languages
$l['req_ver_nf'] = 'Required &soft-1; version &soft-2; &soft-3; AND found version is : ';
$l['req_ext_nf'] = 'Required &soft-1; extension not found :';
$l['req_func_nf'] = 'Required &soft-1; function not found';
$l['req_ext_ver'] = 'Required &soft-1; &soft-2; extension version &soft-3; &soft-4; BUT found &soft-5;';
$l['gt'] = 'greater than';
$l['lt'] = 'less than';
$l['ge'] = 'greater than equal to';
$l['le'] = 'less than equal to';
$l['eq'] = 'is';
$l['ne'] = 'should not be equal to';
$l['req_version'] = 'Version';
$l['req_extensions'] = 'Extensions';
$l['req_functions'] = 'Functions';

// Automated Backup Language Strings
$l['mail_auto_backup_sub'] = 'A(z) $scriptname telepítés automatikus biztonsági mentése';
$l['mail_auto_backup'] = 'A(z) $scriptname telepítés automatikus biztonsági mentése sikeresen elkészült.
A részletek a következők :
Telepítés Útvonal : $path
Telepítés URL : $url
Biztonsági mentés Útvonal : $backup_file
<if $backup_location>Backup Location : $backup_location</if>
A mentést az '.APP.' Biztonsági mentés részében érheti el.

Ha szeretne leiratkozni ezekrők az emailekről, menjen a Control Panel -> '.APP.' -> Email Beállítások részre
';

$l['mail_auto_backup_fail_sub'] = 'A(z) $scriptname telepítés automatikus biztonsági mentése sikertelen';
$l['mail_auto_backup_fail'] = 'A(z) $scriptname telepítés automatikus biztonsági mentése nem sikerült.
A részletek a következők :
Telepítés Útvonal : $path
Telepítés URL : $url
Biztonsági mentés Útvonal : $backup_file
<if $backup_location>Backup Location : $backup_location</if>
A következő hiba jelentkezett:
$error

Ha szeretne leiratkozni ezekrők az emailekről, menjen a Control Panel -> '.APP.' -> Email Beállítások részre
';

// Email for sending the list of scripts which does not meet the requirements.
$l['mail_script_requirement_sub'] = 'Szkript követelmény hiba';
$l['mail_script_requirement'] = 'A következő szkriptek nem felelnek meg a minimum követelményeknek a szerverén és lehet, hogy nem működnek.
A részletek a következők :

$failed_req

Megjegyzés: Ha megváltoztatja a PHP verziót a futtatás során (pl. CageFS, hive, .htaccess, stb. használatával), akkor figyelmen kívül hagyhatja a fenti PHP verzió hiba figyelmeztetéseket.';

// Softpanel Language Strings
$l['no_www_domain'] = 'Please close all '.$globals['sn'].' pages and log out from the control panel using the log out button.
Afterwards you can log in again and use '.$globals['sn'].'.';

$l['install_tweet'] = 'I just installed #[[SCRIPTNAME]] on [[softurl]] via #[[APP]] #[[TYPE]]';
$l['install_tweet_classes'] = 'I just installed #[[SCRIPTNAME]] via #[[APP]] #[[TYPE]]';
$l['upgrade_tweet'] = 'I just upgraded #[[SCRIPTNAME]] on [[softurl]] via #[[APP]] #[[TYPE]]';
$l['clone_tweet'] = 'I just cloned #[[SCRIPTNAME]] on [[softurl]] via #[[APP]] #[[TYPE]]';
$l['staging_tweet'] = 'I just created a staging installation of #[[SCRIPTNAME]] on [[softurl]] via #[[APP]] #[[TYPE]]';
$l['pushtolive_tweet'] = 'I just pushed my staging #[[SCRIPTNAME]] to live on [[softurl]] via #[[APP]] #[[TYPE]]';
$l['restore_template_tweet'] = 'I just restored a #[[SCRIPTNAME]] template on [[softurl]] via #[[APP]] #[[TYPE]]';
// month strings
$l['January'] = 'Január';
$l['February'] = 'Február';
$l['March'] = 'Március';
$l['April'] = 'Aprilis';
$l['May'] = 'Május';
$l['June'] = 'Június';
$l['July'] = 'Július';
$l['August'] = 'Augusztus';
$l['September'] = 'Szeptember';
$l['October'] = 'Október';
$l['November'] = 'November';
$l['December'] = 'December';

// Mail templates for webuzo backup
$l['mail_webuzo_backup_sub'] = '$type backup completed successfully';
$l['mail_webuzo_backup'] = 'The backup process was completed successfully.
Backup file is created with the file name:
$filename

Regards,
Webuzo Team';
$l['mail_webuzo_backup_fail_sub'] = '$type backup failed';
$l['mail_webuzo_backup_fail'] = 'The backup process did not complete successfully.
The following error(s) occured:
$error

Regards,
Webuzo Team';
$l['mail_webuzo_restore_sub'] = '$type restore completed successfully';
$l['mail_webuzo_restore'] = 'The restoration was completed successfully.

The file restored was:
$filename

Regards,
Webuzo Team';
$l['mail_webuzo_restore_fail_sub'] = '$type restore failed';
$l['mail_webuzo_restore_fail'] = 'The restore process encountered errors and would not be completed.
The following error(s) occured:
$error

Regards,
Webuzo Team';

// Staging Template Vaiable
$l['mail_staging_sub'] = 'Staging of $scriptname';
$l['mail_staging'] = 'Your Staging of $scriptname $version has been completed successfully.

Your live installation details :
Original Path : $live_path
Original URL : $live_url

Your staging installation details :
Path : $path
URL : $url
Admin URL : $admin_url
<if $datadirectory>Data Directory : $datadirectory</if>
<if $dbname>MySQL Database : $dbname</if>
<if $dbuser>MySQL DB User : $dbuser</if>
<if $dbhost>MySQL DB Host : $dbhost</if>
<if $dbpass>MySQL DB Password : $dbpass</if>
<if $cron>Cron Job : $cron</if>
<if $time>Time of Installation : $time</if>

Ha le szeretne iratkozni az ilyen e-mailekről, menjen a Control Panel -> '.APP.' -> E-mail beállítások részre';

// Pushtolive Template Vaiable
$l['mail_pushtolive_sub'] = 'Pushing $scriptname to live';
$l['mail_pushtolive'] = 'Pushing your $scriptname site $version to live has been completed successfully.

Your live installation details :
Original Path : $live_path
Original URL : $live_url

Your staging installation details :
Path : $path
URL : $url
Admin URL : $admin_url
<if $datadirectory>Data Directory : $datadirectory</if>
<if $dbname>MySQL Database : $dbname</if>
<if $dbuser>MySQL DB User : $dbuser</if>
<if $dbhost>MySQL DB Host : $dbhost</if>
<if $dbpass>MySQL DB Password : $dbpass</if>
<if $cron>Cron Job : $cron</if>

Ha le szeretne iratkozni az ilyen e-mailekről, menjen a Control Panel -> '.APP.' -> E-mail beállítások részre';

/////////////////////////////////
// Backup Failed CLI UPGRADE of Plugins/Themes
/////////////////////////////////

// If a backup fails before AUTO UPGRADING Plugins/Themes of an installation (FOR USER)
$l['mail_autoupgrade_extras_backup_fail_sub'] = 'Backup process failed before auto upgrading plugins/theme of your $scriptname installation';
$l['mail_autoupgrade_extras_backup_fail'] = 'The backup process of plugins/theme of your $scriptname installation has failed. So the auto upgrade plugins/theme process was not performed.
A részletek a következők :
Telepítési URL : $url
Error : $error

Ha le szeretne iratkozni az ilyen e-mailekről, menjen a Control Panel -> '.APP.' -> E-mail beállítások részre
';

/////////////////////////////////
// Upgrade Plugins/Themes By USER
/////////////////////////////////

// Plugins/Theme when upgraded by user successfully (By user)
$l['mail_userupgrade_extras_success_user_sub'] = 'Plugins/Theme of $scriptname installation upgraded successfully';
$l['mail_userupgrade_extras_success_user'] = 'Plugins/Theme of your $scriptname installation have been successfully upgraded to the latest version.
A részletek a következők :
Telepítési URL : $url

Ha le szeretne iratkozni az ilyen e-mailekről, menjen a Control Panel -> '.APP.' -> E-mail beállítások részre
';

// If UPGRADE and RESTORE Plugins/Theme failed while upgrading, (By user)
$l['mail_userupgrade_extras_restore_fail_user_sub'] = 'Upgrade of Plugins/Theme of your $scriptname installation failed';
$l['mail_userupgrade_extras_restore_fail_user'] = 'The upgrade of plugins/theme of your $scriptname installation has failed.
A backup had been created before upgrading, but the restore process also failed !

It will require a manual restore. Guide for the manual restore is available here :
https://www.softaculous.com/docs/enduser/manual-restore/

A részletek a következők :
Telepítési URL : $url
<if $upgrade_error>
The Upgrade error details are as follows :
Error : $upgrade_error
</if>
<if $error>
The Restore error details are as follows :
Error : $error
</if>

The '.APP.' team is available for help as well. You can contact the '.APP.' Team (support@'.strtolower(APP).'.com) if you face any problems.

Ha le szeretne iratkozni az ilyen e-mailekről, menjen a Control Panel -> '.APP.' -> E-mail beállítások részre
';

// If any error occured while upgrading plugins/theme, (By user)
$l['mail_userupgrade_extras_fail_user_sub'] = 'Upgrade of plugins/theme of your $scriptname installation failed';
$l['mail_userupgrade_extras_fail_user'] = 'The upgrade of plugins/theme of your $scriptname installation has failed.
A részletek a következők :
Telepítési URL : $url
Error : $upgrade_error

Ha le szeretne iratkozni az ilyen e-mailekről, menjen a Control Panel -> '.APP.' -> E-mail beállítások részre
';

/////////////////////////////////
// Auto Upgrade Plugins/Themes
/////////////////////////////////

// When AUTOUPGRADED Plugins/Theme successfully
$l['mail_autoupgrade_extras_success_user_sub'] = 'Plugins/Theme of $scriptname Installation Auto Upgraded Successfully';
$l['mail_autoupgrade_extras_success_user'] = 'Plugins/Theme of your $scriptname installation have been successfully auto upgraded to the latest version.
A részletek a következők :
Telepítési URL : $url
<if $plugins_updated>
Following Active Plugins were upgraded :
$plugins_updated
</if>
<if $theme_updated>
Following Active Theme was upgraded :
$theme_updated
</if>

Ha le szeretne iratkozni az ilyen e-mailekről, menjen a Control Panel -> '.APP.' -> E-mail beállítások részre
';

// If UPGRADE and RESTORE of Plugins/Theme failed while AUTOUPGRADING
$l['mail_autoupgrade_extras_restore_fail_user_sub'] = 'A(z) $scriptname telepítés bővítményeinek és sablonjainak automatikus frissítése nem sikerült';
$l['mail_autoupgrade_extras_restore_fail_user'] = 'The auto upgrade  of plugins/theme of your $scriptname installation has failed.
A backup had been created before upgrading, but the restore process also failed !

It will require a manual restore. Guide for the manual restore is available here :
https://www.softaculous.com/docs/enduser/manual-restore/

A részletek a következők :
Telepítési URL : $url
<if $upgrade_error>
The Upgrade error details are as follows :
Error : $upgrade_error
</if>
<if $error>
The Restore error details are as follows :
Error : $error
</if>

The '.APP.' team is available for help as well. You can contact the '.APP.' Team (support@'.strtolower(APP).'.com) if you face any problems.

Ha le szeretne iratkozni az ilyen e-mailekről, menjen a Control Panel -> '.APP.' -> E-mail beállítások részre
';

// When AUTOUPGRADE Plugins/Theme FAILED
$l['mail_autoupgrade_extras_fail_user_sub'] = 'A(z) $scriptname telepítés bővítményeinek és sablonjainak automatikus frissítése nem sikerült';
$l['mail_autoupgrade_extras_fail_user'] = 'A(z) $scriptname telepítés bővítményeinek és sablonjainak automatikus frissítése nem sikerült
A részletek a következők :
Telepítési URL : $url
Error : $upgrade_error

Ha le szeretne iratkozni az ilyen e-mailekről, menjen a Control Panel -> '.APP.' -> E-mail beállítások részre
';

// clone fail Language Strings
$l['mail_clone_fail_sub'] = 'Sikertelen: A(z) $scriptname telepítés klónozása';
$l['mail_clone_fail'] = 'A(z) $scriptname telepítés klónozása sikertelen volt.
A részletek a következők :
Telepítési útvonal : $path
Telepítési URL : $url

The following error occured :
$error

Kérjük, próbálja meg egy kicsit később újra importálni a telepítést.

Ha le szeretne iratkozni az ilyen e-mailekről, menjen a Control Panel -> '.APP.' -> E-mail beállítások részre
';

// restore_template fail Language Strings
$l['mail_restore_template_fail_sub'] = 'Failed : Restore of your $scriptname Template';
$l['mail_restore_template_fail'] = 'The restore of your $scriptname template did not complete successfully.
The details are as follows :
Installation Path : $path
Installation URL : $url

The following error occured :
$error

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// clone fail Language Strings
$l['mail_staging_fail_sub'] = 'Sikertelen: A(z) $scriptname telepítés teszkörnyezet létrehozás';
$l['mail_staging_fail'] = 'A(z) $scriptname telepítés teszkörnyezetének létrehozása sikertelen volt.
A részletek a következők :
Telepítési útvonal : $path
Telepítési URL : $url

The following error occured :
$error

Kérjük, próbálja meg egy kicsit később újra importálni a telepítést.

Ha le szeretne iratkozni az ilyen e-mailekről, menjen a Control Panel -> '.APP.' -> E-mail beállítások részre
';

$l['mail_upgrade_fail_sub'] = 'Sikertelen: A(z) $scriptname telepítés frissítése';
$l['mail_upgrade_fail'] = 'A(z) $scriptname telepítés frissítése sikertelen volt.
A részletek a következők :
Telepítési útvonal : $path
Telepítési URL : $url

The following error occured :
$error

Kérjük, próbálja meg egy kicsit később újra frissíteni.

Ha le szeretne iratkozni az ilyen e-mailekről, menjen a Control Panel -> '.APP.' -> E-mail beállítások részre
';

$l['invalid_resp'] = 'Invalid response received ';

$l['api_no_resp'] = 'No response received';
$l['api_invalid_resp'] = 'Invalid response received';

$l['go_plans'] = 'Plans';
$l['go_wp_manager'] = 'WordPress Manager';
$l['not_in_free'] = '<b>&soft-1;</b> cannot be installed in the Free version of '.APP.'.';
$l['upgrade_to_pro'] = '<b><a href="'.$globals['index'].'act=plans" target="_blank" style="text-decoration:none;color:green;">Unlock Premium Features</a></b>';

$l['upgrade_to_ampps_pro'] = '<b><a href="https://ampps.com/pricing" target="_blank" style="text-decoration:none;color:green;">Unlock Premium Features</a></b>';

$l['not_in_expired'] = '<b>&soft-1;</b> cannot be installed because your '.APP.' license has expired.';
$l['renew_pro'] = '<b><a href="'.$globals['index'].'act=plans" target="_blank" style="text-decoration:none;color:green;">Renew the license to use premium features</a></b>';

$l['renew_ampps_pro'] = '<b><a href="https://www.softaculous.com/clients?ca=ampps_buy&renew=&soft-1;&plan=&soft-2;" target="_blank" style="text-decoration:none;color:green;">Renew the license to use premium features</a></b>';

$l['invalid_license_enduser_server'] = 'This license is not allowed to be used on this server';
$l['invalid_license_enduser_account'] = 'This license is not allowed to be used on this account';

$l['package_error'] = 'Hiba történt a csomag telepítésekor.';

$l['empty_mail_q'] = 'Mail queue is empty.';

$l['admin_panel'] = 'Admin Panel';
$l['reseller_panel'] = 'Reseller Panel';
$l['learn_more'] = 'Learn More';
$l['dismiss_forever'] = 'Dismiss Forever';
$l['install_script_title'] = 'Install an App';
$l['install_script_description'] = 'You can install an app after selecting it from the left menu';

$l['outdated_installations_title'] = 'Outdated Installations';
$l['outdated_installations_description'] = 'You have a few outdated installation(s). You can upgrade them by clicking on the red box below';

$l['demos_title'] = 'Demos';
$l['demos_description'] = 'You can check out the demos of apps before you install them to find if the app meets your needs';

$l['search_scripts_title'] = 'Search Scripts';
$l['search_scripts_description'] = 'You can search apps by their name from the Search box in the left menu';

$l['bulk_import_title'] = 'Import';
$l['bulk_import_description'] = 'You can import all your existing installations to '.APP.' using the Import option in the top menu';

$l['wordpress_manager_title'] = 'WordPress Manager';
$l['wordpress_manager_description'] = 'You can manage your WordPress installations from one place using the WordPress Manager feature';

$l['backup_title'] = 'Backup';
$l['backup_description'] = 'You can create a backup of your installation(s) so you can restore when you need to roll back your site';

$l['restore_title'] = 'Restore';
$l['restore_description'] = 'You can restore your site from the backups available';

$l['delete_backups_title'] = 'Delete Backups';
$l['delete_backups_description'] = 'You can delete the old/unwanted backups if you don\'t need them';

$l['auto_upgrade_title'] = 'Auto Upgrade';
$l['auto_upgrade_description'] = 'You can choose to auto upgrade your installation when a new version of an app is released';

$l['auto_backup_title'] = 'Auto Backup';
$l['auto_backup_description'] = 'You can schedule Auto Backups to backup your installation automatically at regular intervals';

$l['wordpress_sets_title'] = 'WordPress Plugin & Theme Sets';
$l['wordpress_sets_description'] = 'You can create sets and directly install your most used plugins and themes to all your WordPress installs';

$l['remote_backups_title'] = 'Remote Backup Locations';
$l['remote_backups_description'] = 'You can backup your sites to remote servers like Dropbox, AWS S3, Google Drive, OneDrive, FTP/FTPS/SFTP';

$l['email_notifications_title'] = 'Email Notifications';
$l['email_notifications_description'] = 'You can choose the email notifications you would like to receive';

$l['remote_import_title'] = 'Import from Remote Server';
$l['remote_import_description'] = 'You can import your installations from a remote server to '.APP.' using the "From Remote Server" tab';

$l['clone_title'] = 'Clone';
$l['clone_description'] = 'You can clone and make a new copy of your installation';

$l['edit_installation_title'] = 'Edit an Installation';
$l['edit_installation_description'] = 'You can edit the details like enable auto upgrade, backups, etc of your existing installation';

$l['sign_on_title'] = 'One Click Login';
$l['sign_on_description'] = 'You can login to the admin account of your WordPress installation using the Login button';

$l['reset_password_title'] = 'Reset Admin Password';
$l['reset_password_description'] = 'You can reset the password of the admin account of your installation';

$l['staging_title'] = 'Staging Instance';
$l['staging_description'] = 'You can create a Staging instance of your live site to test plugins or upgrades before applying them on the production site';

$l['pushtolive_title'] = 'Push to Live';
$l['pushtolive_description'] = 'You can Push the changes on your Staging site to your live site';

$l['softwp_title'] = 'Softaculous Pro Plugins';
$l['softwp_description'] = 'You can use Pro WordPress plugins for Free: Backuply, SpeedyCache, SiteSEO, Loginizer, Pagelayer, GoSMTP, FileOrganizer & more. Click here';

$l['softwp_ai_title'] = 'Enhance Content Writing with AI Assistant';
$l['softwp_ai_description'] = 'You can use cutting-edge AI to write content for your WordPress posts or pages. Create a table, write a paragraph, translate, change tone, & much more';