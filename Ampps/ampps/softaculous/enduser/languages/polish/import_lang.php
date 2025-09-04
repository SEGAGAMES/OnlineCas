<?php

//////////////////////////////////////////////////////////////
//===========================================================
// import_lang.php
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

$l['no_info_file'] = 'Plik INSTALL.XML nie został odnaleziony! Prosimy wysłać zgłoszenie do administratora serwera.';
$l['incompatible'] = 'Oprogramowanie wymaga wyższej wersji '. APP.'! Prosimy o wysłanie zgłoszenia do administratora serwera.';
$l['no_functions'] = 'Plik INSTALL FUNCTIONS nie został odnaleziony! Prosimy wysłać zgłoszenie do administratora serwera.';
$l['no_softdomain'] = 'Nie wybrałeś domeny aby zaimportować oprogramowanie.';
$l['disable_import'] = 'Opcja importu została wyłączona przez Admina';
$l['invalid_script'] = 'Nieprawidłowy ID skryptu';

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['import_soft'] = 'Import oprogramowania';
$l['choose_domain'] = 'Wybierz domenę';
$l['choose_domain_exp'] = 'Proszę wybrać domenę, gdzie jest już zainstalowane oprogramowanie.';
$l['in_directory'] = 'W katalogu';
$l['in_directory_exp'] = 'Katalog jest powiązany z Twoją domeną. Np.: aby importować oprogramowanie zainstalowane w http://mydomain/dir/ wpisz tylko <b>dir</b>. Aby zaimportować oprogramowanie zainstalowane tylko w http://mydomain/ zostawić to pole puste.';
$l['softsubmit'] = 'Importuj';
$l['congrats'] = 'Gratulacje, oprogramowanie został pomyślnie zaimportowane';
$l['succesful'] = 'zostało pomyślnie zaimportowane do';
$l['admin_url'] = 'Admin URL';
$l['enjoy'] = 'Mamy nadzieję, że proces importowania było łatwy.';
$l['import_notes'] = 'Oto kilka ważnych uwag. Sugerujemy aby się z nimi zapoznać:';
$l['please_note'] = '<b>Uwaga</b>: '.APP.' jest automatycznym instalatorem i  i nie dostarcza żadnego wsparcia dla pakietów oprogramowania. Zapraszamy do odwiedzenia stron internetowych wybranego pakietu oprogramowania celem uzyskania wsparcia!';
$l['regards'] = 'Podziękowania';
$l['softinstaller'] = 'Autoinstalator '.APP.'';
$l['return'] = 'Powrót do przegladu';
$l['return_to_wpm'] = 'Return to WordPress Management';

$l['choose_protocol'] = 'Wybierz protokół';
$l['choose_protocol_exp'] = 'Jeśli twoja strona posiada certyfikat SSL to wtedy prosimy o wybranie protokołu HTTPS.';
$l['no_https'] = 'Zaufany certyfikat SSL nie został odnaleziony';
$l['wrong_softdomain'] = 'Ścieżka domeny, którą wybrałeś nie została odnaleziona.';

//remote import
$l['server_host'] = 'Host serwera (opcjonalnie)';
$l['server_host_exp'] = '<b>JEŚLI</b> nazwa domeny i host serwera nie są takie same, wprowadź hosta np. ftp.mojadomena.pl';
$l['protocol'] = 'Protokół';
$l['protocol_exp'] = 'Wybierz protokół do komunikacji z Softaculous';
$l['port'] = 'Port';
$l['port_exp'] = 'Wprowadź port do połączenia';
$l['domain'] = 'Nazwa Domeny';
$l['domain_exp'] = 'Wprowadź prawidłową nazwę domeny, np. mojadomena.pl';
$l['ftp_user'] = 'Użytkownik';
$l['ftp_user_exp'] = 'Nazwa użytkownika konta FTP';
$l['ftp_pass'] = 'Hasło';
$l['ftp_pass_exp'] = 'Hasło do konta FTP';
$l['ftp_path'] = 'Ścieżka';
$l['ftp_path_exp'] = 'Ścieżka względna do lokalizacji web dostępnej dla użytkownika, np. /public_html/blog';
$l['Installed_path'] = 'Ścieżka do instalacji (opcjonalnie)';
$l['Installed_path_exp'] = 'Ścieżka do instalacji np. bloga w przypadku instalacji skryptu w /public_html/blog';
$l['wrong_ftp_path'] = 'Podana ścieżka FTP nie istnieje';
$l['ftp_error-1'] = 'Nie można rozwiązać nazwy domeny';
$l['ftp_error-2'] = 'Logowanie niemożliwe za pomocą podanych danych';
$l['ftp_error-3'] = 'Podana ścieżka FTP nie istnieje';
$l['imp_err'] = 'Wystąpiły błędy w czasie importu oprogramowania zainstalowanego w &sofr-1;';
$l['remote_import'] = 'Proces importu instalacji został rozpoczęty w tle. Otrzymasz powiadomienie e-mail o statusie po zakończeniu instalacji.';
$l['db_err'] = 'Połączenie z bazą danych nie powiodło się';
$l['remote_dir_err'] = 'Ścieżka instalacji zdalnej nie istnieje';
$l['err_db_create'] = 'Wystąpił błąd w czasie tworzenia bazy danych';
$l['dest_dir_err'] = 'Ścieżka docelowa już istnieje';
$l['source'] = 'Źródło';
$l['destination'] = 'Miejsce docelowe';
$l['auth_password'] = 'Metoda autentykacji'; 
$l['auth_password_exp'] = 'Wybierz metodę autentykacji'; 
$l['private_key'] = 'Klucz Prywatny';
$l['private_key_exp'] = 'Wklej Prywatny Klucz tutaj';
$l['passphrase'] = 'Fraza klucz';
$l['passphrase_exp'] = 'Fraza klucz dla zaszyfrowanego klucza prywatnego (opcjonalna)';
$l['database_name'] = 'Nazwa Bazy Danych';
$l['database_name_exp'] = 'Wprowadź nazwę bazy danych do utworzenia w czasie instalacji';
$l['database_exists'] = 'Baza danych już istnieje. Wprowadź inną nazwę';
$l['databaseuser_exists'] = 'Użytkownik bazy danych już istnieje';
$l['db_limit_crossed'] = 'Została osiągnięta maksymalna liczba baz danych, więc import nie może zostać wykonany';
$l['empty_db'] = 'Pole na nazwę bazy danych jest puste. Wprowadź nazwę bazy danych';
$l['adv_option'] = 'Opcje Zaawansowane';
$l['database_name'] = 'Nazwa Bazy Danych';
$l['database_name_exp'] = 'Wprowadź nazwę bazy danych do utworzenia w czasie instalacji';
$l['db_name_long'] = 'Nazwa bazy danych nie może być dłuższa niż 7 liter. Wybierz krótszą nazwę';
$l['db_alpha_num'] = 'Nazwa bazy danych może zawierać jedynie znaki alfanumeryczne';
$l['remote_btn'] = 'Z Serwera Zdalnego';
$l['local_btn'] = 'Z tego serwera';
$l['checking_data'] = 'Sprawdzanie wprowadzonych danych';
$l['fetching_remote_db'] = 'Pobieranie szczegółów bazy danych z serwera zdalnego';
$l['create_db'] = 'Tworzenie bazy danych';
$l['fetching_remote_files'] = 'Importowanie plików z serwera zdalnego';
$l['import_complete'] = 'Import zakończony';
$l['import_script'] = 'Importowanie';
$l['no_remote_import'] = 'Zdalny import nie jest wspierany przez ten skrypt';
$l['overwrite'] = 'Nadpisz pliki';
$l['some_files_exist'] = 'Instalacja nie może być kontynuowana, gdyż następujące pliki już istnieją w folderze docelowym:';
$l['delete_files'] = 'Usuń pliki lub wybierz inny folder';
$l['overwrite_exist'] = '<b>LUB</b> <br /><input type="checkbox" name="overwrite_existing" id="overwrite_existing" />&nbsp;&nbsp;<b><span style="color:#000;">Zaznacz okienko, aby nadpisać wszystkie pliki i kontynuować</span></b>';
$l['sftp_path'] = 'Ścieżka SFTP';
$l['sftp_path_exp'] = 'Ścieżka bezwzględna do lokalizacji web użytkownika, np. /home/USERNAME/public_html';
$l['ftp_error'] = 'Połączenie z FTP nie było możliwe';
$l['err_upload_remote'] = 'Wgranie plików do ścieżki FTP nie jest możliwe';
$l['err_fetch_file'] = 'Dostęp do plików wgranych na domenę nie jest możliwy';
$l['err_fetch_path'] = 'Nie można pobrać ścieżki z odebranych danych';
$l['dbusername'] = 'Użytkownik bazy danych';
$l['dbusername_exp'] = 'Użytkownik MySQL';
$l['dbuserpass'] = 'Hasło do bazy danych';
$l['dbuserpass_exp'] = 'Hasło użytkownika MySQL';
$l['database_name_exp_aefer'] = 'Wprowadź nazwę bazy danych, która będzie wykorzystana przy instalacji';
$l['hostname'] = 'Nazwa hosta bazy danych';
$l['hostname_exp'] = 'Nazwa hosta MySQL (<b>localhost</b>';
$l['no_hostname'] = 'Wprowadź nazwę hosta bazy danych';
$l['no_dbusername'] = 'Wprowadź nazwę użytkownika bazy danych';
$l['no_dbuserpass'] = 'Wprowadź hasło bazy danych';
$l['no_db'] = 'Wprowadź nazwę bazy danych';
$l['auth_method_pass'] = 'Hasło';
$l['auth_method_key'] = 'Klucz SSH';
$l['no_pass_pri'] = 'Wprowadź hasło lub klucz prywatny';
$l['finishing_process'] = 'Zakończenie importu';
$l['wait_note'] = '<b>NOTE:</b> This may take 3-4 minutes. You can leave this page if you wish !';

$l['import_push_bg'] = 'Import został przesunięty w tło';
$l['local_import'] = 'Automatycznie wykryj wszystkie instalacje';
$l['choose_domain_import_exp'] = 'Please choose the domain to import the software.';
$l['enter_domain_exp'] = 'Please enter the domain where the software is already installed.';