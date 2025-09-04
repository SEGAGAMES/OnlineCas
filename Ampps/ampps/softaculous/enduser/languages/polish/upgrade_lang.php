<?php

//////////////////////////////////////////////////////////////
//===========================================================
// upgrade_lang.php
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
$l['no_upgrade'] = 'Plik UPGRADE.XML nie został odnaleziony! Prosimy wysłać zgłoszenie do administratora serwera.';
$l['no_functions'] = 'Plik UPGRADE FUNCTIONS nie został odnaleziony! Prosimy wysłać zgłoszenie do administratora serwera.';
$l['no_field'] = 'Pole <b>&soft-1;</b> jest wymagana i musi być wypełnione.';
$l['no_package'] = 'Nie można odnaleźć pakiet aktualizującego!';
$l['no_decompress'] = 'Było kilka błędów podczas dekompresji plików pakietu.';
$l['checking_data'] = 'Sprawdzenia zatwierdzonych danych';
$l['unzipping_files'] = 'Kopiowanie plików i katalogów';
$l['unzipping_datadir'] = 'Rozpakowaniu plików danych';
$l['prop_db'] = 'Aktualizacja bazy danych';
$l['finishing_process'] = 'Kończenie aktualizacji';
$l['wait_note'] = '<b>Uwaga:</b> To może zająć 3-4 minuty. Prosimy nie zamykać tej strony do momentu, aż pasek postępu zapełni się w 100%';
$l['cver_greater'] = 'Obecna wersja jest większa lub równa wersji, do której chcesz wykonać aktualizację. Jest to możliwe w przypadku ręcznej aktualizacji. Jeśli nie jest to ta sprawa zaznacz poniższe pole';
$l['force_upgrade'] = 'Wymuszone aktualizacje';
$l['backup_finish'] = 'Zakończone backupy';
$l['backup_fail_proceed'] = 'Wystąpił błąd podczas procesu wykonywania backupu. Kontynuować aktualizację?';
$l['backing_up'] = 'Tworzenie backupu instalacji';
$l['no_space'] = 'Nie masz wystarczająco dużo miejsca aby dokonać aktualizacji tej instalacji!';
$l['invalid_insid'] = 'Nieprawidłowy ID instalacji';
$l['invalid_script'] = 'Nieprawidłowy ID skryptu';
$l['no_upgrade_support'] = 'Aktualizacja nie jest w spierana przez ten skrypt';

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['upgrade'] = 'Aktualizacja oprogramowania';
$l['softins_url'] = 'URL';
$l['softins_path'] = 'Ścieżka';
$l['softcopy_note'] = '<b>Uwaga</b>: to oprogramowanie używa własnych narzędzi do aktualizacji. Aby zakończyć aktualizację, prosimy przejść pod adres URL, który pojawi się po tym jak pliki zostaną skopiowane.';
$l['softsubmit'] = 'Aktualizacja';
$l['congrats'] = 'Gratulacje, oprogramowanie został pomyślnie zaktualizowane';
$l['succesful'] = 'został pomyślnie zaktualizowany w';
$l['admin_url'] = 'Admin URL';
$l['setup_continue'] = 'Jednakże, aktualizacja zostanie wykonana przez oprogramowanie, prosimy kliknąć w poniższy adres URL';
$l['enjoy'] = 'Mamy nadzieję, że proces aktualizacji był łatwy.';
$l['upgrade_notes'] = 'Oto kilka ważnych uwag. Sugerujemy aby się z nimi zapoznać';
$l['please_note'] = '<b>Uwaga</b>: '.APP.' jest automatycznym instalatorem i nie dostarcza żadnego wsparcia dla oprogramowania. Odwiedź witrynę sieci web w celu uzyskania wsparcia!';
$l['regards'] = 'Podziękowania';
$l['softinstaller'] = 'Autoinstalator '.APP.'';
$l['return'] = 'Powrót do przegladu';
$l['return_to_wpm'] = 'Return to WordPress Management';
$l['note_backup'] = 'Sugerujemy abyś wykonał <a href="'.$globals['index'].'act=backup&insid=&soft-1;">backup</a> instalacji przed aktualizacją.';
$l['alreadyupdated'] = 'Hmm... wygląda na to, że rzeczywisty wersja instalacyjna jest <b>&soft-1;</b> i nie <b>&soft-2;</b>. < br / > kliknij tutaj, aby uaktualnić rekordy '. APP.'.';
$l['no_update_required'] = 'Wygląda na to, że nie musisz wykonywać aktualizacji ponieważ instalacja jest w najnowszej wersji';
$l['auto_backup'] = 'Czy chcesz wykonać backup przed aktualizacją?';
$l['select_version'] = 'Wybierz wersję, do której chcesz wykonać aktualizację';
$l['upgrading'] = 'Aktualizowanie...';
$l['setup_partial'] = 'Jesteś jeden krok przed zakończeniem procesu aktualizacji';
$l['finish_update'] = 'Proszę odwiedź poniższy link, aby zakończyć proces aktualizacji.';
$l['finish_up_sucess'] = 'Po zakończeniu procesu aktualizacji, można uzyskać dostęp do instalacji &soft-1; tutaj';
$l['upgrading_to'] = 'Wykonujesz aktualizację do:';
$l['version'] = 'Wersja';
$l['create_backup'] = 'Wykonaj backup';
$l['create_backup_exp'] = 'Wykonaj backup przed aktualizacją';
$l['prog_upgrading'] = 'Aktualizacja';// Dont remove the trailing space
$l['prog_upgrade_complete'] = 'Aktualizacja zakończona.';

$l['upgrade_tweet_sub'] = 'Powiedz znajomym';

$l['backup_type'] = 'Opcje Backup';
$l['backup_type_exp'] = 'Wybierz pełny backup lub opcje zaawansowane';
$l['standard_backup'] = 'Pełny backup (standardowy)';
$l['advanced_backup'] = 'Opcje Zaawansowane';

$l['backup_dir'] = 'Lokalizacja Backup';
$l['backup_db'] = 'Backup Bazy Danych';
$l['backup_wwwdir'] = 'Backup Ścieżki Web';
$l['backup_datadir'] = 'Backup Ścieżki Danych';
$l['no_dir'] = 'Brak niektórych plików instalacyjnych, aktualizacja nie może zostać przeprowadzona';
$l['wpc_return'] = 'Powrót do Instalacji';

$l['err_default_backup_loc'] = 'Default backup location is empty, please select a default backup location in order to backup on the default location.';