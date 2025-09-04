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

$l['user_data_error_t'] = 'Błąd danych użytkownika';
$l['user_data_error'] = APP.' was unable to load your account information. Please report this to the server administrator!';

$l['remote_licence_t'] = 'Nieprawidłowa licencja';
$l['remote_licence'] = 'Używasz nieważnej licencji. Prosimy zgłosić to administratorowi serwera!';

$l['enterprise_licence_t'] = 'Nieprawidłowa licencja';
$l['enterprise_licence'] = 'Używasz nieważnej licencji. Prosimy zgłosić to administratorowi serwera!';

$l['no_license'] = 'Plik LICENSE nie został odnaleziony! Prosimy wysłać zgłoszenie do administratora serwera.';

$l['today'] = '<b>Dziś</b> w';//The today string for showing todays post time

$l['init_theme_error_t'] = 'Błąd motywu';//Title
$l['init_theme_error'] = 'Nie można załadować pliku motywu - &soft-1;.';

$l['init_theme_func_error_t'] = 'Błąd funkcji motywu';//Title
$l['init_theme_func_error'] = 'Nie można załadować funkcji motywu &soft-1;.';

$l['disable_softaculous_t'] = 'Wyłączony Softaculous';
$l['disable_softaculous'] = 'Softaculous jest wyłączony dla tego użytkownika. Prosimy o kontakt z administratorem systemu.';

$l['load_theme_settings_error'] = 'Nie można załadować pliku ustawień motywu.';

$l['view_guide'] = 'View Guide';
$l['max_db_length'] = 'The database name cannot be greater than &soft-1; characters. Please choose a shorter database name.';


//Error Handle Function
$l['following_errors_occured'] = 'Znaleziono następujące błędy';

//Success Message Function
$l['following_message'] = 'Został zwrócony następujący komunikat';

//Major Error Function
$l['fatal_error'] = 'Błąd krytyczny';
$l['following_fatal_error'] = 'Wystąpił następujący błąd';

//Message Function
$l['soft_message'] = APP.' Message';
$l['following_soft_message'] = 'Został zwrócony następujący komunikat';

//Update Softwares
$l['no_soft_found'] = 'Oprogramowanie nie zostało znalezione... Wymagana aktualizacja';
$l['ver_not_match'] = 'Wersje nie pasują do siebie... Wymagana aktualizacja';
$l['ver_match'] = 'Obecna wersja jest najnowszą wersją... Kontynuuj';
$l['del_prev_files'] = 'Usuwanie poprzednich plików... Wykonane';
$l['fetch_latest'] = 'Ściągam najnowszy plik...';
$l['error_fetch_latest'] = 'Nie można pobrać najnowszego plik... Kontynuuj';
$l['error_save_latest'] = 'Nie można zapisać ostatniego pliku... Kontynuuj';
$l['got_latest'] = 'Zapisany ostatni plik';
$l['unzip_latest'] = 'Rozpakowywanie plików...';
$l['error_unzip_latest'] = 'Błąd podczas rozpakowywania... Kontynuuje';
$l['unzipped_latest'] = 'Pomyślnie rozpakowano';

//Update Softaculous
$l['getting_info'] = 'Żądanie informacji...';
$l['error_getting_latest'] = 'Nie można uzyskać informacji... Anulowanie';
$l['got_info'] = 'Dostał informacje';
$l['manual_mode'] = 'Nowa wersja '. APP.' wymaga uwagi... Anulowanie';
$l['no_updates'] = 'Obecna wersja jest najnowszą wersją... Kontynuuj';
$l['fetch_upgrade'] = 'Pobieranie aktualizacji...';
$l['error_fetch_upgrade'] = 'Nie może pobrać pliku aktualizacji... Anulowanie';
$l['error_save_upgrade'] = 'Nie można zapisać pliku aktualizacji... Anulowanie';
$l['got_upgrade'] = 'Zapisany plik aktualizacji';
$l['unzip_upgrade'] = 'Rozpakowywanie plików...';
$l['error_unzip_upgrade'] = 'Błąd rozpakowywania... Anulowanie';
$l['unzipped_upgrade'] = 'Pomyślnie rozpakowano';
$l['md5_check'] = 'Poprawnie sprawdzono MD5';
$l['err_md5_check'] = 'Sprawdzenie MD5 dla tych plików nie powiodło się';
$l['err_md5_file'] = 'nie istnieje';

//MySQL Errors
$l['err_selectmy'] = 'Nie można wybrać bazy danych MySQL.';
$l['err_myconn'] = 'Nie można ustanowić połączenia z MySQL.';
$l['err_makequery'] = 'Nie można utworzyć kwerendy';
$l['err_mynum'] = 'MySQL błąd nr';
$l['err_myerr'] = 'MySQL błąd';
$l['err_no_db_file'] = 'The database import file does not exist';
$l['err_no_open_db_file'] = 'Could not open the database import file';

//Importing Errors
$l['imp_wrong_softdomain'] = 'Ścieżka do domeny &soft-1; nie może być odnaleziona.';
$l['imp_softpath_wrong'] = 'Ścieżki &soft-1; jest błędna lub nie istnieje.';
$l['imp_ins_exists'] = '&soft-1; jest już zainstalowany w &soft-2; według naszych danych i jest utrzymywana przez nas!';
$l['imp_no_func'] = 'Funkcja importu dla &soft-1; nie może być załadowana.';
$l['imp_err'] = 'Wystąpiły błędy podczas importowania oprogramowania zainstalowanego w &soft-1;';
$l['err_query'] = 'Could not execute the query';

$l['invalid_search_input'] = 'Invalid Theme Search character. Only alphanumeric characters, underscore and hyphen are allowed.';

//hf_theme.php
$l['root_login'] = 'Zalogowany jako ROOT';
$l['welcome'] = 'Witamy';
$l['logout'] = 'Wyloguj';
$l['page_time'] = 'Strona utworzona w';
$l['times_are'] = 'Cały czas są';
$l['time_is'] = 'Teraz jest';
$l['no_script_found'] = 'Nie znaleziono takiego skryptu!';
$l['webuzo_sysapps_disabled'] = 'This functionality has been disabled from the Webuzo Admin Panel';
$l['webuzo_install_utility'] = 'This utility is not installed. Please install it first';

//The Category Language Variables
$l['forums'] = 'Forum';
$l['blogs'] = 'Blogi';
$l['cms'] = 'Portale/CMS';
$l['galleries'] = 'Galerie zdjęć';
$l['wikis'] = 'Wiki';
$l['admanager'] = 'Zarządzanie reklamą';
$l['calendars'] = 'Kalendarze';
$l['games'] = 'Gry';
$l['mail'] = 'Maile';
$l['polls'] = 'Ankiety i badania';
$l['projectman'] = 'Zarządzanie projektami';
$l['ecommerce'] = 'E-Commerce';
$l['guestbooks'] = 'Księgi Gości';
$l['customersupport'] = 'Obsługa klienta';
$l['others'] = 'Inne';
$l['music'] = 'Muzyka';
$l['video'] = 'Wideo';
$l['files'] = 'Zarządzanie plikami';
$l['go_cpanel'] = 'Przejdź do panelu sterowania';
$l['go_home'] = APP.' Home';
$l['go_demos'] = 'Dema skryptu';
$l['go_ratings'] = 'Ocena skryptu';
$l['go_settings'] = 'Edytuj ustawienia';
$l['go_email_settings'] = 'Ustawienia E-mail';
$l['go_installations'] = 'Wszystkie instalacje';
$l['go_support'] = 'Pomoc i obsługa techniczna';
$l['go_sync'] = 'Import Instalacji';
$l['go_backups'] = 'Backup i przywracanie';
$l['go_templates'] = 'All Templates';
$l['go_tasklist'] = 'Lista zadań';
$l['go_apps_installations'] = 'Wszystkie zainstalowane aplikacje';
$l['go_my_themes'] = 'Moje motywy';
$l['go_logout'] = 'Wyloguj';
$l['ins_stats'] = 'Instalacje';
$l['outdated_stats'] = 'Przedawnione instalacje';
$l['backups_stats'] = 'Backupy';

$l['type_php'] = 'PHP';
$l['type_perl'] = 'Perl';
$l['type_js'] = 'JavaScript';
$l['type_java'] = 'Java';
$l['type_python'] = 'Python';
$l['search'] = 'Szukaj';
$l['back_to_top'] = 'Powrót do góry';

$l['show'] = 'Pokaż';
$l['hide'] = 'Ukryj';

// Categories
$l['cat_php_forums'] = 'Forum';
$l['cat_php_blogs'] = 'Blogi';
$l['cat_php_cms'] = 'Portale/CMS';
$l['cat_php_galleries'] = 'Galerie zdjęć';
$l['cat_php_wikis'] = 'Wiki';
$l['cat_php_admanager'] = 'Zarządzanie reklamą';
$l['cat_php_calendars'] = 'Kalendarze';
$l['cat_php_games'] = 'Gry';
$l['cat_php_mail'] = 'Maile';
$l['cat_php_polls'] = 'Ankiety i analizy';
$l['cat_php_projectman'] = 'Zarządzanie projektami';
$l['cat_php_ecommerce'] = 'E-Commerce';
$l['cat_php_guestbooks'] = 'Księgi Gości';
$l['cat_php_customersupport'] = 'Obsługa klienta';
$l['cat_php_others'] = 'Inne';
$l['cat_php_music'] = 'Muzyka';
$l['cat_php_video'] = 'Wideo';
$l['cat_php_rss'] = 'RSS';
$l['cat_php_socialnetworking'] = 'Sieci społecznościowe';
$l['cat_php_microblogs'] = 'Mikro blogi';
$l['cat_php_frameworks'] = 'Frameworki';
$l['cat_php_educational'] = 'Edukacyjne';
$l['cat_php_erp'] = 'ERP';
$l['cat_php_dbtools'] = 'Narzędzia baz danych';
$l['cat_php_files'] = 'Zarządzanie plikami';
$l['cat_js_libraries'] = 'Biblioteki';
$l['cat_js_widgets'] = 'Widgety';
$l['cat_perl_blogs'] = 'Blogi';
$l['cat_perl_ecommerce'] = 'E-Commerce';
$l['cat_perl_wikis'] = 'Wiki';
$l['cat_perl_forums'] = 'Forum';
$l['cat_perl_mail'] = 'Maile';
$l['cat_java_cms'] = 'CMS';
$l['cat_java_forums'] = 'Forum';
$l['cat_java_projectman'] = 'Zarządzanie projektami';
$l['cat_java_erp'] = 'ERP';
$l['cat_java_blogs'] = 'Blogi';
$l['cat_java_wikis'] = 'Wiki';
$l['cat_python_wikis'] = 'Wiki';
$l['cat_python_projectman'] = 'Zarządzanie projektami';
$l['cat_apps_server_side_scripting'] = 'Skrypty po stronie serwera';
$l['cat_apps_web_servers'] = 'Serwery www';
$l['cat_apps_utilities'] = 'Narzędzia';
$l['cat_apps_libraries'] = 'Biblioteki';
$l['cat_apps_databases'] = 'Bazy danych';
$l['cat_apps_stacks'] = 'Stosy';
$l['cat_apps_security'] = 'Bezpieczeństwo';
$l['cat_apps_statistics'] = 'Statystyki';
$l['cat_apps_java_tools'] = 'Narzędzia Java';
$l['cat_apps_java_containers'] = 'Kontenery Java';
$l['cat_apps_version_control'] = 'Kontrola wersji';
$l['cat_apps_modules'] = 'Moduły';
$l['cat_apps_message_queue'] = 'Kolejkowanie wiadomości';

// Classes Categories
$l['classes_ajax'] = 'AJAX';
$l['classes_cryptography'] = 'Kryptografia';
$l['classes_algorithms'] = 'Algorytmy';
$l['classes_artificialintelligence'] = 'Sztuczna inteligencja';
$l['classes_email'] = 'E-mail';
$l['classes_finances'] = 'Finanse';
$l['classes_searching'] = 'Wyszukiwanie';
$l['classes_user_management'] = 'Zarządzanie użytkownikami';
$l['classes_utilitiesandtools'] = 'Programy i narzędzia';
$l['classes_validation'] = 'Sprawdzanie poprawności';
$l['classes_security'] = 'Bezpieczeństwo';
$l['classes_console'] = 'Konsole';
$l['classes_codegeneration'] = 'Generowanie kodu';
$l['classes_chat'] = 'Czat';
$l['classes_astrology'] = 'Astrologia';
$l['classes_audio'] = 'Audio';
$l['classes_biology'] = 'Biologia';
$l['classes_blogs'] = 'Blogi';
$l['classes_cache'] = 'Cache';
$l['classes_compression'] = 'Kompresja';
$l['classes_configuration'] = 'Konfiguracja';
$l['classes_contentmanagement'] = 'Zarządzanie treścią';
$l['classes_conversion'] = 'Konwersja';
$l['classes_datatypes'] = 'Typy danych';
$l['classes_databases'] = 'Bazy danych';
$l['classes_debug'] = 'Debugowanie';
$l['classes_designpatterns'] = 'Wzorce projektowe';
$l['classes_ecommerce'] = 'E-Commerce';
$l['classes_elearning'] = 'E-Learning';
$l['classes_emulators'] = 'Emulatory';
$l['classes_filesandfolders'] = 'Pliki i katalogi';
$l['classes_flash'] = 'Flash';
$l['classes_forums'] = 'Forum';
$l['classes_games'] = 'Gry';
$l['classes_geography'] = 'Geografia';
$l['classes_graphics'] = 'Grafika';
$l['classes_gui'] = 'GUI';
$l['classes_hosting'] = 'Hosting';
$l['classes_html'] = 'HTML';
$l['classes_http'] = 'HTTP';
$l['classes_language'] = 'Język';
$l['classes_projectmanagement'] = 'Zarządzanie projektami';

// Softaculous Remote Domain Strings
$l['no_domain_data'] = 'Domain Data Not Found!!';
$l['no_aefer_resp'] = 'Could not access the worker file over web. Please check if your domain is pointing to the correct server.'; 

// Webuzo Strings
$l['webuzo'] = 'Webuzo';
$l['go_domain'] = 'Zarządzanie domenami';
$l['webuzo_license_exp'] = 'Licencja nie jest aktywna lub wygasła. Jeśli licencja wygasła, należy ją odnowić aby dalej móc korzystać z Webuzo';
$l['webuzo_license_exp_t'] = 'Nieaktywna licencja';
$l['err_no_access'] = 'You do not have permission to access this page';

// Ampps Strings
$l['ampps'] = 'AMPPS';
$l['go_domain'] = 'Zarządzanie domenami';
$l['ampps_license_exp'] = 'Licencja nie jest aktywna lub wygasła. Jeśli licencja wygasła, należy ją odnowić aby dalej móc korzystać z Ampps';
$l['ampps_license_exp_t'] = 'Nieaktywna licencja';


/////////////////////////////////////////////////////////////
/////  Following Variables are used for Email Templates /////
/////////////////////////////////////////////////////////////

$l['notify_enable'] = 'Włączone';
$l['notify_disable'] = 'Wyłączone';

$l['autoupgrade_enable'] = 'Włączone';
$l['autoupgrade_disable'] = 'Wyłączone';

// Auto backup strings
$l['auto_backup_enable'] = 'Włączone';
$l['auto_backup_disable'] = 'Wyłączone';

// Install Template Vaiable
$l['mail_install_php_sub'] = 'Nowa instalacja $scriptname';
$l['mail_install_php'] = 'Nowa instalacja $scriptname $version została ukończona. Szczegóły instalacji znajdują się poniżej:
Ścieżka : $path
URL : $url
Admin URL : $admin_url
<if $datadirectory>Katalog danych : $datadirectory</if>
<if $admin_username>Nazwa użytkownika Admin : $admin_username</if>
<if $admin_pass>Hasło użytkownika Admin : $admin_pass</if>
<if $admin_email>Adres e-mail użytkownika Admin: $admin_email</if>
<if $dbname>Baza danych MySQL : $dbname</if>
<if $dbuser>Użytkownik MySQL DB : $dbuser</if>
<if $dbhost>Nazwa hosta MySQL DB : $dbhost</if>
<if $dbpass>Hasło do bazy danych MySQL : $dbpass</if>
<if $cron>Zadanie cron : $cron</if>
<if $disable_notify_update>Powiadomienie o aktualizacji : $disable_notify_update</if>
<if $eu_auto_upgrade>Automatyczna aktualizacja : $eu_auto_upgrade</if>
<if $auto_backup>Automatyczny backup : $auto_backup</if>
<if $auto_backup_rotation>Rotacja backupu : $auto_backup_rotation</if>
<if $backup_location>Backup Location : $backup_location</if>
<if $time>Czas instalacji : $time</if>

Jeśli nie chcesz otrzymywać takich wiadomości e-mail, idź do Panel zarządzania -> '.APP.' -> Ustawienia E-mail
';

// Clone Template Vaiable
$l['mail_clone_sub'] = 'Klon instalacji $scriptname';
$l['mail_clone'] = 'Twoja instalacja $scriptname $version została pomyślnie sklonowana.

Szczegóły oryginalnej instalacji :
Oryginalna ścieżka : $old_path
Oryginalne URL : $old_url

Szczegóły sklonowanej instalacji :
Ścieżka : $path
URL : $url
Admin URL : $admin_url
<if $datadirectory>Katalog danych : $datadirectory</if>
<if $dbname>Baza danych MySQL : $dbname</if>
<if $dbuser>Użytkownik MySQL DB : $dbuser</if>
<if $dbhost>Nazwa hosta MySQL DB : $dbhost</if>
<if $dbpass>Hasło do bazy danych MySQL : $dbpass</if>
<if $cron>Zadanie cron : $cron</if>
<if $time>Czas instalacji : $time</if>

Jeśli nie chcesz otrzymywać takich wiadomości e-mail, idź do Panel zarządzania -> '.APP.' -> Ustawienia E-mail
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
$l['mail_install_js_sub'] = 'Nowa instalacja $scriptname';
$l['mail_install_js'] = 'Nowa instalacja $scriptname $version została ukończona. Szczegóły instalacji znajdują się poniżej:
Ścieżka : $path
URL : $url
<if $disable_notify_update>Powiadomienie o aktualizacji : $disable_notify_update</if>
<if $eu_auto_upgrade>Automatyczna aktualizacja : $eu_auto_upgrade</if>
<if $auto_backup>Automatyczny backup : $auto_backup</if>
<if $auto_backup_rotation>Rotacja backupu : $auto_backup_rotation</if>
<if $backup_location>Backup Location : $backup_location</if>
<if $time>Czas instalacji : $time</if>
Jeśli nie chcesz otrzymywać takich wiadomości e-mail, idź do Panel zarządzania -> '.APP.' -> Ustawienia E-mail
';

// Install Template Vaiable
$l['mail_install_perl_sub'] = 'Nowa instalacja $scriptname';
$l['mail_install_perl'] = 'Nowa instalacja $scriptname $version została ukończona. Szczegóły instalacji znajdują się ponieżej:
Ścieżka : $path
URL : $url
Admin URL : $admin_url
<if $datadirectory>Katalog danych : $datadirectory</if>
<if $wwwdir>Katalog web : $wwwdir</if>
<if $admin_username>Nazwa użytkownika Admin : $admin_username</if>
<if $admin_pass>Hasło użytkownika Admin : $admin_pass</if>
<if $admin_email>Adres e-mail użytkownika Admin: $admin_email</if>
<if $dbname>Baza danych MySQL : $dbname</if>
<if $dbuser>Użytkownik MySQL DB : $dbuser</if>
<if $dbhost>Nazwa hosta MySQL DB : $dbhost</if>
<if $dbpass>Hasło do bazy danych MySQL : $dbpass</if>
<if $cron>Zadanie cron : $cron</if>
<if $disable_notify_update>Powiadomienie o aktualizacji : $disable_notify_update</if>
<if $auto_backup>Automatyczny backup : $auto_backup</if>
<if $auto_backup_rotation>Rotacja backupu : $auto_backup_rotation</if>
<if $backup_location>Backup Location : $backup_location</if>
<if $time>Czas instalacji : $time</if>

Jeśli nie chcesz otrzymywać takich wiadomości e-mail, idź do Panel zarządzania -> '.APP.' -> Ustawienia E-mail
';

// Install Template Vaiable
$l['mail_install_java_sub'] = 'Nowa instalacja $scriptname';
$l['mail_install_java'] = 'A new installation of $scriptname $version has been completed. The details of the installation are shown below:
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

Jeśli chcesz usunąć swój adres z list mailingowych, przejdź do Panelu Kontrolnego -> '.APP.' -> Ustawienia E-mail
';

$l['mail_install_python_sub'] = 'Nowa instalacja $scriptname';
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

Jeśli chcesz usunąć swój adres z list mailingowych, przejdź do Panelu Kontrolnego -> '.APP.' -> Ustawienia E-mail
';

// Update template Variable (From ADMIN)
$l['mail_update_sub'] = 'Dostępne aktualizacje skryptów';
$l['mail_update'] = 'Ta wiadomość e-mail dotyczy pewnych skryptów PHP Twojej instalacji, które są nieaktualne. Ze względów bezpieczeństwa prosimy je zaktualizować w najkrótszym możliwym czasie.
Dostępne są następujące aktualizacje skryptów:

$installation

W celu aktualizacji skryptów idź do Panel zarządzania -> '.APP.' -> Instalacje.
Tutaj będziesz mógł zaktualizować skrypty.

Z systemu administratora $serverip
';

// Remove Template Variable
$l['mail_remove_sub'] = 'Usunięte instalacje $scriptname';
$l['mail_remove'] = 'Instalacja $scriptname została usunięta. Poniżej znajdują się szczegóły instalacji :
Ścieżka : $path
<if $url>URL : $url</if>
<if $datadirectory>Katalog danych : $datadirectory</if>
<if $wwwdir>Katalog web : $wwwdir</if>
<if $dbname>Baza danych MySQL : $dbname</if>
<if $dbuser>Użytkownik MySQL DB : $dbuser</if>
<if $dbhost>Nazwa hosta MySQL DB : $dbhost</if>
<if $dbpass>Hasło do bazy danych MySQL : $dbpass</if>
<if $cron>Zadanie cron : $cron</if>
Czas instalacji : $time
Czas usuwania : $rem_time

Jeśli nie chcesz otrzymywać takich wiadomości e-mail, idź do Panel zarządzania -> '.APP.' -> Ustawienia E-mail
';

// Cron Template Variable
$l['mail_cron_sub'] = 'Dostępne aktualizacje skryptów';
$l['changelog'] = '== Log zmian dla';
$l['mail_cron'] = 'Dostępne są następujące aktualizacje skryptów:

$installation

W celu aktualizacji skryptów idź do Panel zarządzania -> '.APP.' -> Instalacje.
Tutaj będziesz mógł zaktualizować skrypty.
$changelog

Z '.APP.' Zadań cron $serverip

Jeśli nie chcesz otrzymywać takich wiadomości e-mail, idź do Panel zarządzania -> '.APP.' -> Ustawienia E-mail
';

// Editdetail Template Variable
$l['mail_editdetail_sub'] = 'Szczegóły zmodyfikowanych instalacji $scriptname';
$l['mail_editdetail'] = 'Szczegóły instalacji $scriptname zostały zmodyfikowane. Poniżej znajdują się zmodyfikowane szczegóły instalacji :
Ścieżka : $path
URL : $url
<if $datadirectory>Katalog danych : $datadirectory</if>
<if $wwwdir>Katalog web : $wwwdir</if>
<if $wwwurl>Web URL : $wwwurl</if>
<if $dbname>Baza danych MySQL : $dbname</if>
<if $dbuser>Użytkownik MySQL DB : $dbuser</if>
<if $dbhost>Nazwa hosta MySQL DB : $dbhost</if>
<if $dbpass>Hasło do bazy danych MySQL : $dbpass</if>
<if $cron>Zadanie cron : $cron</if>
<if $disable_notify_update>Powiadomienie o aktualizacji : $disable_notify_update</if>
<if $eu_auto_upgrade>Automatyczna aktualizacja : $eu_auto_upgrade</if>
<if $auto_backup>Automatyczny backup : $auto_backup</if>
<if $auto_backup_rotation>Rotacja backupu : $auto_backup_rotation</if>
<if $backup_location>Backup Location : $backup_location</if>
Czas instalacji : $time
Czas usuwania : $edit_time

Jeśli nie chcesz otrzymywać takich wiadomości e-mail, idź do Panel zarządzania -> '.APP.' -> Ustawienia E-mail
';

// Backup Language Strings
$l['mail_backup_sub'] = 'Backup Twojej instalacji $scriptname';
$l['mail_backup'] = 'Backup Twojej instalacji $scriptname został pomyślnie ukończony.
Poniżej znajdują się szczegóły :
Ścieżka instalacji : $path
URL instalacji : $url
<if $backup_location>Backup Location : $backup_location</if>
Ścieżka backupu : $backup_file
<if $backup_note>Uwagi o backupie : $backup_note</if>

Dostęp do bakcupów jest możliwy z Sekcji Backupów w '.APP.'.

Jeśli nie chcesz otrzymywać takich wiadomości e-mail, idź do Panel zarządzania -> '.APP.' -> Ustawienia E-mail
';

$l['mail_backup_fail_sub'] = 'Błąd: Backupu Twojej instalacji $scriptname';
$l['mail_backup_fail'] = 'Backup Twojej instalacji $scriptname nie powiódł się.
Poniżej znajdują się szczegóły :
Ścieżka instalacji : $path
URL instalacji : $url
Ścieżka backupu : $backup_file

Poniżej znajduje się treść błędu :
$error

Prosimy spróbować wykonać backup po pewnym czasie.

Jeśli nie chcesz otrzymywać takich wiadomości e-mail, idź do Panel zarządzania -> '.APP.' -> Ustawienia E-mail
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
$l['mail_restore_sub'] = 'Przywróć $scriptname';
$l['mail_restore'] = 'Przywrócenie backupu $scriptname powiodło się.
Poniżej znajdują się szczegóły :
Ścieżka instalacji : $path
URL instalacji : $url

Jeśli nie chcesz otrzymywać takich wiadomości e-mail, idź do Panel zarządzania -> '.APP.' -> Ustawienia E-mail
';

$l['mail_restore_fail_sub'] = 'Błąd: Przywracania $scriptname';
$l['mail_restore_fail'] = 'Przywrócenie backupu $scriptname nie powiodło się.
Poniżej znajdują się szczegóły :
Ścieżka instalacji : $path
URL instalacji : $url

Poniżej znajduje się treść błędu :
$error

Prosimy spróbować przywrócić backup po pewnym czasie.

Jeśli nie chcesz otrzymywać takich wiadomości e-mail, idź do Panel zarządzania -> '.APP.' -> Ustawienia E-mail
';

// Restore Background Language Strings
$l['mail_restore_bg_sub'] = 'Przywrócenie backupu $scriptname rozpoczętego w tle';
$l['mail_restore_bg'] = 'Przywrócenie backupu $scriptname zostało rozpoczęte w tle. Otrzymasz wiadomość e-mail z informacją o zakończeniu procesu.
Szczegóły:
Ścieżka instalacji: $path
URL instalacji: $url

Jeśli chcesz usunąć swój adres z list mailingowych, przejdź do Panelu Kontrolnego -> '.APP.' -> Ustawienia E-mail
';

// Backup Background Language Strings
$l['mail_backup_bg_sub'] = 'Backup instalacji $scriptname został rozpoczęty w tle';
$l['mail_backup_bg'] = 'Backup instalacji $scriptname został rozpoczęty w tle. Otrzymasz wiadomość e-mail z informacją o zakończeniu procesu.
Szczegóły:
Ścieżka instalacji: $path
URL instalacji: $url

Jeśli chcesz usunąć swój adres z list mailingowych, przejdź do Panelu Kontrolnego -> '.APP.' -> Ustawienia E-mail';

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
$l['mail_import_sub'] = 'Import instalacji $scriptname';
$l['mail_import'] = 'Import instalacji $scriptname został pomyślnie zakończony.
Szczegóły:
Ścieżka instalacji: $path
URL instalacji: $url

Jeśli chcesz usunąć swój adres z list mailingowych, przejdź do Panelu Kontrolnego -> '.APP.' -> Ustawienia E-mail
';

// import fail Language Strings
$l['mail_import_fail_sub'] = 'Błąd importu instalacji $scriptname';
$l['mail_import_fail'] = 'Import instalacji $scriptname nie został pomyślnie zakończony.
Szczegóły:
Ścieżka instalacji: $path
URL instalacji: $url

Wystąpił następujący błąd :
$error

Spróbuj zaimportować instalację ponownie po jakimś czasie.

Jeśli chcesz usunąć swój adres z list mailingowych, przejdź do Panelu Kontrolnego -> '.APP.' -> Ustawienia E-mail
';

// Import Background Language Strings
$l['mail_import_bg_sub'] = 'Import instalacji $scriptname';
$l['mail_import_bg'] = 'Import instalacji $scriptname został rozpoczęty w tle. Otrzymasz wiadomość e-mail z informacją o zakończeniu procesu.
Szczegóły:
Ścieżka instalacji: $path
URL instalacji: $url

Jeśli chcesz usunąć swój adres z list mailingowych, przejdź do Panelu Kontrolnego -> '.APP.' -> Ustawienia E-mail
';


// Install Template Vaiable CLASSES
$l['mail_install_classes_sub'] = 'Nowa instalacja $classesname';
$l['mail_install_classes'] = 'Nowa instalacja $classesname $version została ukończona. Poniżej znajdują się szczegóły instalacji:
Ścieżka : $path
<if $time>Czas instalacji : $time</if>

Jeśli nie chcesz otrzymywać takich wiadomości e-mail, idź do Panel zarządzania -> '.APP.' -> Ustawienia E-mail
';

////////////////////////
// ADMIN UPGRADE - 6
////////////////////////

// Auto Upgrade Email For Admin (successful)
$l['mail_adminupgrade_success_admin_sub'] = 'Instalacja $scriptname użytkownika $user została pomyślnie zaktualizowana';
$l['mail_adminupgrade_success_admin'] = 'Instalacja $scriptname użytkownika $user została zaktualizowana do najnowszej wersji.
Poniżej znajdują się szczegóły :
URL instalacji : $url
Najnowsza wersja : $version
Stara wersja : $oldversion
';

// Auto Upgrade Email For Admin (Failed) but restored successfully.
$l['mail_adminupgrade_fail_admin_sub'] = 'Proces aktualizacji instalacji $scriptname nie powiódł i została ona przywrócona z backupu';
$l['mail_adminupgrade_fail_admin'] = 'Proces aktualizacji instalacji $scriptname użytkownika $user nie powiódł się.
'.APP.' utworzył backup przed wykonaniem aktualizacji i został on pomyślnie przywrócony.
URL instalacji : $url
Obecna wersja : $oldversion
Najnowsza wersja : $version
Poniżej znajdują się szczegóły błędu aktualizacji :
Błąd : $upgrade_error
';

// Auto Upgrade Email for user (successful)
$l['mail_adminupgrade_success_user_sub'] = 'Instalacja $scriptname została pomyślnie zaktualizowana przez administratora systemu';
$l['mail_adminupgrade_success_user'] = 'Twoja instalacja $scriptname została pomyślnie zaktualizowana do najnowszej wersji przez system Admin.
Poniżej znajdują się szczegóły :
URL instalacji : $url
Najnowsza wersja : $version
Stara wersja : $oldversion

Jeśli nie chcesz otrzymywać takich wiadomości e-mail, idź do Panel zarządzania -> '.APP.' -> Ustawienia E-mail
';

// Auto Upgrade Email for user (fail) but restored successfully
$l['mail_adminupgrade_fail_user_sub'] = 'Aktualizacja instalacji $scriptname wykonana przez administratora systemu nie udała się';
$l['mail_adminupgrade_fail_user'] = 'System Admin próbował zaktualizować Twoją instalację $scriptname jednak operacja nie powiodła się.
Przed wykonaniem aktualizacji instalacji został wykonany backup. Instalacja została z niego przywrócona.
URL instalacji : $url
Obecna wersja : $oldversion
Najnowsza wersja : $version
Poniżej znajdują się szczegóły błędu aktualizacji :
Błąd : $upgrade_error

Jeśli nie chcesz otrzymywać takich wiadomości e-mail, idź do Panel zarządzania -> '.APP.' -> Ustawienia E-mail
';

// ALL IS FAILED (Upgrade and RESTORE toooo) (FOR ADMIN)
$l['mail_adminupgrade_restore_fail_admin_sub'] = 'Proces aktualizacji instalacji $scriptname użytkownika $user nie powiódł się';
$l['mail_adminupgrade_restore_fail_admin'] = 'Proces aktualizacji instalacji $scriptname użytkownika $user nie powiódł się.
Przed aktualizacją został wykonany backup jednak jego przywrócenie nie powiodło się !

Wymagane jest manualne przywrócenie. Poradnik w jaki sposób je wykonać jest dostępny tutaj :
https://www.softaculous.com/docs/enduser/manual-restore/

Poniżej znajdują się szczegóły instalacji i backupu jakie będą potrzebne do przywrócenia instalacji $scriptname :
ŚCIEŻKA_DO_PLIKU_BACKUPU : $backup_path
ŚCIEŻKA_INSTALACJI : $softpath
<if $dbname>NAZWA_BAZY_DANYCH : $dbname</if>
<if $dbuser>UŻYTKOWNIK_BAZY_DANYCH : $dbuser</if>
<if $dbpass>HASŁO_BAZY_DANYCH : $dbpass</if>
<if $dbhost>HOST_BAZY_DANYCH : $dbhost</if>

URL instalacji : $url
Obecna wersja : $oldversion
Najnowsza wersja : $version
<if $upgrade_error>
Poniżej znajdują się szczegóły błędu aktualizacji :
Błąd : $upgrade_error
</if>
<if $error>
Poniżej znajdują się szczegóły błędu przywracania :
Błąd : $error
</if>

Pomoc '.APP.' jest dostępna by Ci pomóc. W przypadku problemów prosimy o kontakt z nami (support@'.strtolower(APP).'.com).
';

// ALL IS FAILED (Upgrade and RESTORE toooo) (FOR USER)
$l['mail_adminupgrade_restore_fail_user_sub'] = 'Aktualizacja instalacji $scriptname wykonana przez administratora systemu nie powiodła się';
$l['mail_adminupgrade_restore_fail_user'] = 'System Admin próbował zaktualizować Twoją instalację $scriptname jednak operacja nie powiodła się.
Przed aktualizacją został wykonany backup jednak jego przywrócenie nie powiodło się !

Wymagane jest manualne przywrócenie. Poradnik w jaki sposób je wykonać jest dostępny tutaj :
https://www.softaculous.com/docs/enduser/manual-restore/

Poniżej znajdują się szczegóły instalacji i backupu jakie będą potrzebne do przywrócenia instalacji $scriptname :
ŚCIEŻKA_DO_PLIKU_BACKUPU : $backup_path
ŚCIEŻKA_INSTALACJI : $softpath
<if $dbname>NAZWA_BAZY_DANYCH : $dbname</if>
<if $dbuser>UŻYTKOWNIK_BAZY_DANYCH : $dbuser</if>
<if $dbpass>HASŁO_BAZY_DANYCH : $dbpass</if>
<if $dbhost>HOST_BAZY_DANYCH : $dbhost</if>

URL instalacji : $url
Obecna wersja : $oldversion
Najnowsza wersja : $version
<if $upgrade_error>
Poniżej znajdują się szczegóły błędu aktualizacji :
Błąd : $upgrade_error
</if>
<if $error>
Poniżej znajdują się szczegóły błędu przywracania :
Błąd : $error
</if>

Pomoc '.APP.' jest dostępna by Ci pomóc. W przypadku problemów prosimy o kontakt z nami (support@'.strtolower(APP).'.com).

Jeśli nie chcesz otrzymywać takich wiadomości e-mail, idź do Panel zarządzania -> '.APP.' -> Ustawienia E-mail
';

////////////////////////
// USER UPGRADE - 3
////////////////////////

// When upgraded by user successfully (By user)
$l['mail_userupgrade_success_user_sub'] = 'Instalacja $scriptname została pomyślnie zaktualizowana';
$l['mail_userupgrade_success_user'] = 'Twoja instalacja $scriptname została pomyślnie zaktualizowana do najnowszej wersji.
Poniżej znajdują się szczegóły :
URL instalacji : $url
Najnowsza wersja : $version
Stara wersja : $oldversion

Jeśli nie chcesz otrzymywać takich wiadomości e-mail, idź do Panel zarządzania -> '.APP.' -> Ustawienia E-mail
';

// If any error occured while upgrading, (By user)
$l['mail_userupgrade_fail_user_sub'] = 'Aktualizacja instalacji $scriptname nie powiodła się';
$l['mail_userupgrade_fail_user'] = 'Aktualizacja Twojej instalacji $scriptname nie powiodła się.
Poniżej znajdują się szczegóły :
URL instalacji : $url
Obecna wersja : $oldversion
Najnowsza wersja : $version
Błąd : $upgrade_error

Jeśli nie chcesz otrzymywać takich wiadomości e-mail, idź do Panel zarządzania -> '.APP.' -> Ustawienia E-mail
';

// If UPGRADE and RESTORE failed while upgrading, (By user)
$l['mail_userupgrade_restore_fail_user_sub'] = 'Aktualizacja instalacji $scriptname nie powiodła się';
$l['mail_userupgrade_restore_fail_user'] = 'Aktualizacja Twojej instalacji $scriptname nie powiodła się.
Przed aktualizacją został wykonany backup jednak jego przywrócenie nie powiodło się !

Wymagane jest manualne przywrócenie. Poradnik w jaki sposób je wykonać jest dostępny tutaj :
https://www.softaculous.com/docs/enduser/manual-restore/

Poniżej znajdują się szczegóły :
URL instalacji : $url
Obecna wersja : $oldversion
Najnowsza wersja : $version
<if $upgrade_error>
Poniżej znajdują się szczegóły błędu aktualizacji :
Błąd : $upgrade_error
</if>
<if $error>
Poniżej znajdują się szczegóły błędu przywracania :
Błąd : $error
</if>

Pomoc '.APP.' jest dostępna by Ci pomóc. W przypadku problemów prosimy o kontakt z nami (support@'.strtolower(APP).'.com).

Jeśli nie chcesz otrzymywać takich wiadomości e-mail, idź do Panel zarządzania -> '.APP.' -> Ustawienia E-mail
';

////////////////////////
// AUTO UPGRADE - 3
////////////////////////

// When AUTOUPGRADED successfully
$l['mail_autoupgrade_success_user_sub'] = '$scriptname pomyślnie zainstalowano automatyczną aktualizację';
$l['mail_autoupgrade_success_user'] = 'Twoja instalacja $scriptname została pomyślnie automatycznie zaktualizowana do najnowszej wersji.
Poniżej znajdują się szczegóły :
URL instalacji : $url
Najnowsza wersja : $version
Stara wersja : $oldversion

Jeśli nie chcesz otrzymywać takich wiadomości e-mail, idź do Panel zarządzania -> '.APP.' -> Ustawienia E-mail
';

// When AUTOUPGRADE FAILED
$l['mail_autoupgrade_fail_user_sub'] = 'Automatyczne aktualizacja Twoje instalacji $scriptname nie powiodła się';
$l['mail_autoupgrade_fail_user'] = 'Automatyczna aktualizacja instalacji $scriptname nie powiodła się.
Poniżej znajdują się szczegóły :
URL instalacji : $url
Obecna wersja : $oldversion
Najnowsza wersja : $version
Błąd : $upgrade_error

Jeśli nie chcesz otrzymywać takich wiadomości e-mail, idź do Panel zarządzania -> '.APP.' -> Ustawienia E-mail
';

// If UPGRADE and RESTORE failed while AUTOUPGRADING
$l['mail_autoupgrade_restore_fail_user_sub'] = 'Automatyczne aktualizacja Twoje instalacji $scriptname nie powiodła się';
$l['mail_autoupgrade_restore_fail_user'] = 'Automatyczna aktualizacja Twojej instalacji $scriptname nie powiodła się.
Przed aktualizacją został wykonany backup jednak jego przywrócenie nie powiodło się !

Wymagane jest manualne przywrócenie. Poradnik w jaki sposób je wykonać jest dostępny tutaj :
https://www.softaculous.com/docs/enduser/manual-restore/

Poniżej znajdują się szczegóły :
URL instalacji : $url
Obecna wersja : $oldversion
Najnowsza wersja : $version
<if $upgrade_error>
Poniżej znajdują się szczegóły błędu aktualizacji :
Błąd : $upgrade_error
</if>
<if $error>
Poniżej znajdują się szczegóły błędu przywracania :
Błąd : $error
</if>

Pomoc '.APP.' jest dostępna by Ci pomóc. W przypadku problemów prosimy o kontakt z nami (support@'.strtolower(APP).'.com).

Jeśli nie chcesz otrzymywać takich wiadomości e-mail, idź do Panel zarządzania -> '.APP.' -> Ustawienia E-mail
';

////////////////////////
// PRE UPGRADE CHECK 
////////////////////////

// If pre upgradation check fails while AUTOUPGRADE (FOR USER)
$l['mail_autoupgrade_precheck_fail_sub'] = 'Sprawdzanie aktualizacji nie powiodło się';
$l['mail_autoupgrade_precheck_fail'] = 'Proces automatycznej aktualizacji nie może zostać ukończony dla poniższych instalacji z powodu niespełnienia wymagań aktualizacji :
URL instalacji : $url
Obecna wersja : $oldversion
Najnowsza wersja : $version
<if $upgrade_error>
Błąd : $upgrade_error
</if>
<if $error>
Błąd : $error
</if>

Jeśli nie chcesz otrzymywać takich wiadomości e-mail, idź do Panel zarządzania -> '.APP.' -> Ustawienia E-mail
';

/////////////////////////////////
// Backup Failed CLI UPGRADE
/////////////////////////////////

// If a backup fails before AUTO UPGRADING an installation (FOR USER)
$l['mail_autoupgrade_backup_fail_sub'] = 'Operacja backupu nie powiodła się przed automatyczną aktualizacją instalacji $scriptname';
$l['mail_autoupgrade_backup_fail'] = 'Backup instalacji $scriptname nie powiódł się więć proces aktualizacji został przerwany.
Poniżej znajdują się szczegóły :
URL instalacji : $url
Obecna wersja : $oldversion
Najnowsza wersja : $version
Błąd : $error

Jeśli nie chcesz otrzymywać takich wiadomości e-mail, idź do Panel zarządzania -> '.APP.' -> Ustawienia E-mail
';

$l['err_openconfig'] = 'Nie można otworzyć pliku konfiguracyjnego';
$l['err_writeconfig'] = 'Nie można zapisać pliku konfiguracyjnego';

$l['classes_con_failed'] = 'Błąd: Nie można połączyć się z serwerem.';
$l['cl_ratings'] = 'Oceny';
$l['cl_author'] = 'Autor';
$l['cl_license'] = 'Licencja';
$l['cl_version'] = 'Wersja';
$l['cl_show_files'] = 'Pokaż pliki';
$l['cl_install_but'] = 'Instaluj';
$l['expand_view'] = 'Kliknij tutaj by zobaczyć pełny widok';
$l['collapse_view'] = 'Kliknij tutaj, aby zobaczyć osadzony widok';

$l['email_off_notice'] = '<b>Uwaga: powiadomienia e-mail są wyłączone, więc nie otrzymasz żadnych wiadomości.</b>';

// Add User Language Strings
$l['mail_add_user_sub'] = 'Witamy w Softaculous Remote Installer';
$l['mail_add_user'] = 'You can now successfully login into Softaculous Remote Installer.
Szczegóły:
User 					: $username
API Key 				: $api_key
API Password 			: $api_pass
Number of Users allowed	: $number_of_users';

// Requirement parser languages
$l['req_ver_nf'] = 'Wymagane &soft-1; wersja &soft-2; &soft-3; a obecna wersja to:';
$l['req_ext_nf'] = 'Wymagane &soft-1; rozszerzenie nie zostało odnalezione:';
$l['req_func_nf'] = 'Wymagana &soft-1; funkcja nie została odnaleziona';
$l['req_ext_ver'] = 'Wymagana &soft-1; &soft-2; rozszerzona wersja &soft-3; &soft-4; a obecna &soft-5;';
$l['gt'] = 'większe niż';
$l['lt'] = 'mniej niż';
$l['ge'] = 'większe niż równe do';
$l['le'] = 'mniejsze niż równe do';
$l['eq'] = 'jest';
$l['ne'] = 'should not be equal to';
$l['req_version'] = 'Version';
$l['req_extensions'] = 'Extensions';
$l['req_functions'] = 'Functions';

// Automated Backup Language Strings
$l['mail_auto_backup_sub'] = 'Automatyczny backup Twojej instalacji $scriptname';
$l['mail_auto_backup'] = 'Automatyczny backup Twojej instalacji $scriptname został wykonany poprawniey.
Poniżej znajdują się szczegóły :
Ścieżka instalacji : $path
URL instalacji : $url
Ścieżka backupu : $backup_file
<if $backup_location>Backup Location : $backup_location</if>
Dostęp do bakcupów jest możliwy z Sekcji Backupów w '.APP.'.

Jeśli nie chcesz otrzymywać takich wiadomości e-mail, idź do Panel zarządzania -> '.APP.' -> Ustawienia E-mail
';

$l['mail_auto_backup_fail_sub'] = 'Błąd: Automatyczny backup Twojej instalacji $scriptname';
$l['mail_auto_backup_fail'] = 'Automatyczny backup Twojej instalacji $scriptname nie został ukończony.
Poniżej znajdują się szczegóły :
Ścieżka instalacji : $path
URL instalacji : $url
Ścieżka backupu : $backup_file
<if $backup_location>Backup Location : $backup_location</if>
Wystąpił poniższy błąd :
$error

Jeśli nie chcesz otrzymywać takich wiadomości e-mail, idź do Panel zarządzania -> '.APP.' -> Ustawienia E-mail
';

// Email for sending the list of scripts which does not meet the requirements.
$l['mail_script_requirement_sub'] = 'Log błędu wymagań skryptu';
$l['mail_script_requirement'] = 'Poniższe skrypty nie spełniają minimalnych wymagań i mogą nie działać na Twoim serwerze.
Poniżej znajdują się szczegóły :

$failed_req

Uwaga :Jeśli zmieniasz wersję PHP środowiska (używając np.: CageFS, hive, .htaccess i inne) wtedy możesz zignorować pojawiające się ostrzeżenia.';

// Softpanel Language Strings
$l['no_www_domain'] = 'Please close all '.$globals['sn'].' pages and log out from the control panel using the log out button.
Afterwards you can log in again and use '.$globals['sn'].'.';

$l['install_tweet'] = 'Właśnie zainstalowałem #[[SCRIPTNAME]] na [[softurl]] za pośrednictwem #[[APP]] #[[TYPE]]';
$l['install_tweet_classes'] = 'Właśnie zainstalowałem #[[SCRIPTNAME]] za pośrednictwem #[[APP]] #[[TYPE]]';
$l['upgrade_tweet'] = 'Właśnie zaktualizowałem #[[SCRIPTNAME]] na [[softurl]] za pośrednictwem #[[APP]] #[[TYPE]]';
$l['clone_tweet'] = 'Właśnie sklonowałem #[[SCRIPTNAME]] na [[softurl]] za pośrednictwem #[[APP]] #[[TYPE]]';
$l['staging_tweet'] = 'I just created a staging installation of #[[SCRIPTNAME]] on [[softurl]] via #[[APP]] #[[TYPE]]';
$l['pushtolive_tweet'] = 'I just pushed my staging #[[SCRIPTNAME]] to live on [[softurl]] via #[[APP]] #[[TYPE]]';
$l['restore_template_tweet'] = 'I just restored a #[[SCRIPTNAME]] template on [[softurl]] via #[[APP]] #[[TYPE]]';
// month strings
$l['January'] = 'styczeń';
$l['February'] = 'luty';
$l['March'] = 'Marsz';
$l['April'] = 'kwiecień';
$l['May'] = 'Może';
$l['June'] = 'czerwiec';
$l['July'] = 'lipiec';
$l['August'] = 'sierpień';
$l['September'] = 'wrzesień';
$l['October'] = 'październik';
$l['November'] = 'listopad';
$l['December'] = 'grudzień';

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

Jeśli chcesz usunąć swój adres z list mailingowych, przejdź do Panelu Kontrolnego -> '.APP.' -> Ustawienia E-mail';

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

Jeśli chcesz usunąć swój adres z list mailingowych, przejdź do Panelu Kontrolnego -> '.APP.' -> Ustawienia E-mail';

/////////////////////////////////
// Backup Failed CLI UPGRADE of Plugins/Themes
/////////////////////////////////

// If a backup fails before AUTO UPGRADING Plugins/Themes of an installation (FOR USER)
$l['mail_autoupgrade_extras_backup_fail_sub'] = 'Backup process failed before auto upgrading plugins/theme of your $scriptname installation';
$l['mail_autoupgrade_extras_backup_fail'] = 'The backup process of plugins/theme of your $scriptname installation has failed. So the auto upgrade plugins/theme process was not performed.
Szczegóły:
URL instalacji: $url
Error : $error

Jeśli chcesz usunąć swój adres z list mailingowych, przejdź do Panelu Kontrolnego -> '.APP.' -> Ustawienia E-mail
';

/////////////////////////////////
// Upgrade Plugins/Themes By USER
/////////////////////////////////

// Plugins/Theme when upgraded by user successfully (By user)
$l['mail_userupgrade_extras_success_user_sub'] = 'Plugins/Theme of $scriptname installation upgraded successfully';
$l['mail_userupgrade_extras_success_user'] = 'Plugins/Theme of your $scriptname installation have been successfully upgraded to the latest version.
Szczegóły:
URL instalacji: $url

Jeśli chcesz usunąć swój adres z list mailingowych, przejdź do Panelu Kontrolnego -> '.APP.' -> Ustawienia E-mail
';

// If UPGRADE and RESTORE Plugins/Theme failed while upgrading, (By user)
$l['mail_userupgrade_extras_restore_fail_user_sub'] = 'Upgrade of Plugins/Theme of your $scriptname installation failed';
$l['mail_userupgrade_extras_restore_fail_user'] = 'The upgrade of plugins/theme of your $scriptname installation has failed.
A backup had been created before upgrading, but the restore process also failed !

It will require a manual restore. Guide for the manual restore is available here :
https://www.softaculous.com/docs/enduser/manual-restore/

Szczegóły:
URL instalacji: $url
<if $upgrade_error>
The Upgrade error details are as follows :
Błąd : $upgrade_error
</if>
<if $error>
The Restore error details are as follows :
Error : $error
</if>

The '.APP.' team is available for help as well. You can contact the '.APP.' Team (support@'.strtolower(APP).'.com) if you face any problems.

Jeśli chcesz usunąć swój adres z list mailingowych, przejdź do Panelu Kontrolnego -> '.APP.' -> Ustawienia E-mail
';

// If any error occured while upgrading plugins/theme, (By user)
$l['mail_userupgrade_extras_fail_user_sub'] = 'Upgrade of plugins/theme of your $scriptname installation failed';
$l['mail_userupgrade_extras_fail_user'] = 'The upgrade of plugins/theme of your $scriptname installation has failed.
Szczegóły:
URL instalacji: $url
Błąd : $upgrade_error

Jeśli chcesz usunąć swój adres z list mailingowych, przejdź do Panelu Kontrolnego -> '.APP.' -> Ustawienia E-mail
';

/////////////////////////////////
// Auto Upgrade Plugins/Themes
/////////////////////////////////

// When AUTOUPGRADED Plugins/Theme successfully
$l['mail_autoupgrade_extras_success_user_sub'] = 'Plugins/Theme of $scriptname Installation Auto Upgraded Successfully';
$l['mail_autoupgrade_extras_success_user'] = 'Plugins/Theme of your $scriptname installation have been successfully auto upgraded to the latest version.
Szczegóły:
URL instalacji: $url
<if $plugins_updated>
Following Active Plugins were upgraded :
$plugins_updated
</if>
<if $theme_updated>
Following Active Theme was upgraded :
$theme_updated
</if>

Jeśli chcesz usunąć swój adres z list mailingowych, przejdź do Panelu Kontrolnego -> '.APP.' -> Ustawienia E-mail
';

// If UPGRADE and RESTORE of Plugins/Theme failed while AUTOUPGRADING
$l['mail_autoupgrade_extras_restore_fail_user_sub'] = 'Automatyczna aktualizacja wtyczek/motywów instalacji $scriptname nie powiodła się.';
$l['mail_autoupgrade_extras_restore_fail_user'] = 'The auto upgrade  of plugins/theme of your $scriptname installation has failed.
A backup had been created before upgrading, but the restore process also failed !

It will require a manual restore. Guide for the manual restore is available here :
https://www.softaculous.com/docs/enduser/manual-restore/

Szczegóły:
URL instalacji: $url
<if $upgrade_error>
The Upgrade error details are as follows :
Błąd : $upgrade_error
</if>
<if $error>
The Restore error details are as follows :
Error : $error
</if>

The '.APP.' team is available for help as well. You can contact the '.APP.' Team (support@'.strtolower(APP).'.com) if you face any problems.

Jeśli chcesz usunąć swój adres z list mailingowych, przejdź do Panelu Kontrolnego -> '.APP.' -> Ustawienia E-mail
';

// When AUTOUPGRADE Plugins/Theme FAILED
$l['mail_autoupgrade_extras_fail_user_sub'] = 'Automatyczna aktualizacja wtyczek/motywów instalacji $scriptname nie powiodła się.';
$l['mail_autoupgrade_extras_fail_user'] = 'Automatyczna aktualizacja wtyczek/motywów instalacji $scriptname nie powiodła się.
Szczegóły:
URL instalacji: $url
Błąd : $upgrade_error

Jeśli chcesz usunąć swój adres z list mailingowych, przejdź do Panelu Kontrolnego -> '.APP.' -> Ustawienia E-mail
';

// clone fail Language Strings
$l['mail_clone_fail_sub'] = 'Niepowodzenie: Klonowanie instalacji $scriptname';
$l['mail_clone_fail'] = 'Klonowanie instalacji $scriptname nie powiodło się.
Szczegóły:
Ścieżka instalacji: $path
URL instalacji: $url

Wystąpił następujący błąd :
$error

Spróbuj zaimportować instalację ponownie po jakimś czasie.

Jeśli chcesz usunąć swój adres z list mailingowych, przejdź do Panelu Kontrolnego -> '.APP.' -> Ustawienia E-mail
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
$l['mail_staging_fail_sub'] = 'Niepowodzenie: Ustawianie instalacji $scriptname';
$l['mail_staging_fail'] = 'Ustawianie instalacji $scriptname nie powiodło się.
Szczegóły:
Ścieżka instalacji: $path
URL instalacji: $url

Wystąpił następujący błąd :
$error

Spróbuj zaimportować instalację ponownie po jakimś czasie.

Jeśli chcesz usunąć swój adres z list mailingowych, przejdź do Panelu Kontrolnego -> '.APP.' -> Ustawienia E-mail
';

$l['mail_upgrade_fail_sub'] = 'Niepowodzenie: Aktualizacja instalacji $scriptname';
$l['mail_upgrade_fail'] = 'Niepowodzenie: Aktualizacja instalacji $scriptname
Szczegóły:
Ścieżka instalacji: $path
URL instalacji: $url

Wystąpił następujący błąd :
$error

Spróbuj zaktualizować ponownie za jakiś czas

Jeśli chcesz usunąć swój adres z list mailingowych, przejdź do Panelu Kontrolnego -> '.APP.' -> Ustawienia E-mail
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

$l['package_error'] = 'Wystąpiły błędy w czasie instalacji pakietu.';

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