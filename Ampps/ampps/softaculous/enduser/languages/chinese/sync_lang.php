<?php

//////////////////////////////////////////////////////////////
//===========================================================
// sync_lang.php
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

$l['no_data'] = '喔 ... 看起來沒有自動安裝機的資料可於您的帳戶被找到';

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - Import';
$l['import_soft'] = 'Import Installations';
$l['script_name'] = '語法名稱';
$l['script_url'] = '連結';
$l['softsubmit'] = 'Save Installations';
$l['nothing_checked'] = '您沒有選擇任何語法來 同步/匯入 進入您的記錄裡面.';
$l['congrats'] = '恭喜, 語法已經成功得被 同步/匯入 了';
$l['succesful'] = '他們已經成功的 同步/匯入 於';
$l['admin_url'] = '管理員連結';
$l['enjoy'] = '我們希望 同步/匯入 的程序是簡單的';
$l['import_notes'] = '以下為一些重要的事項. 我們高度建議您閱讀他們 ';
$l['please_note'] = '<b>注意</b>: '.APP.' 只是一個自動安裝機並且不具備任何支援的義務. 請前往語法開發者網頁尋求支援!';
$l['regards'] = '誠摯的';
$l['softinstaller'] = APP.' 自動安裝機';
$l['return'] = '回到主選單';
$l['manual_import'] = 'Start scanning for installations';
$l['importing_ins'] = 'Scanning directories to import installations';
$l['wait_note'] = '<b>NOTE:</b> Please wait this may take 3-4 minutes.';
$l['sync_notes'] = 'You can select the installations below and click <b>Save Installations</b> button to import the installations into '.APP.', if you want to import all installations then click on <b>Manual Installations</b> button.';
$l['no_ins'] = 'No installations found !';
$l['other_installers_btn'] = 'From other Auto Installers';
$l['manual_ins_btn'] = 'Manual Installations';
$l['no_installer_data'] = 'No installations found from other auto installers. You can import installations done manually by clicking on <b>Manual Installations</b> tab above.';
$l['manual_notes'] = 'Click on the button below to start scanning manual installations and import them into '.APP.'.';
$l['free_lic_alert'] = 'With your <b>Free</b> license, only <a href="https://www.softaculous.com/scripts_in_free" target="_blank">free scripts</a> will be imported into '.APP.'.';
$l['success_msg'] = 'Congratulations, the installations listed below have been successfully imported into '.APP.'. You can now manage the installations via '.APP.'.';

$l['disable_sync'] = 'Sync feature has been disabled by admin';

$l['return_to_wpm'] = 'Return to WordPress Management';
$l['wordpress_manager'] = 'Manage your installation with WordPress Manager';
