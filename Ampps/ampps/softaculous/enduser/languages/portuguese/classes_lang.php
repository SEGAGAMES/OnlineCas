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

$l['no_info_file'] = 'Nenhuma classe para o ID especificado';
$l['incompatible'] = 'O software requer uma versão superior do '.APP.'! Por favor, reporte isso ao administrador do servidor.';
$l['no_install'] = 'Não foi possível encontrar o arquivo INSTALL.XML! Por favor, reporte isso ao administrador do servidor.';
$l['no_functions'] = 'Não foi possível encontrar o arquivo INSTALL FUNCTIONS! Por favor, reporte isso ao administrador do servidor.';
$l['no_softdomain'] = 'Você não escolheu o domínio para instalar o software.';
$l['wrong_softdomain'] = 'Não foi possível encontrar o caminho do domínio que você selecionou.';
$l['no_space'] = 'Você não possui espaço suficiente para instalar este software!';
$l['no_field'] = 'O campo <b>&soft-1;</b> é obrigatório e deve ser preenchido.';
$l['no_package'] = 'Não foi possível encontrar o pacote de instalação!';
$l['no_decompress'] = 'Ocorreram alguns erros na descompactação dos arquivos do pacote.';
$l['mail_new_ins'] = 'Uma nova instalação do &soft-1; foi completado. Os detalhes da instalação são mostrados abaixo:';
$l['mail_path'] = 'Caminho';
$l['mail_url'] = 'URL';
$l['mail_time'] = 'Data da instalação';
$l['mail_subject'] = 'Nova instalação do &soft-1;';
$l['some_files_exist'] = 'A instalação não pode prosseguir porque os seguintes arquivos já existem na pasta de destino: ';
$l['delete_files'] = 'Exclua esses arquivos ou escolha outra pasta.';
$l['checking_data'] = 'Verificando os dados enviados';
$l['unzipping_files'] = 'Copiando arquivos e pastas';
$l['unzipping_datadir'] = 'Descompactando arquivos';
$l['prop_db'] = 'Propagando o banco de dDados';
$l['finishing_process'] = 'Finalizando instalação';
$l['wait_note'] = '<b>Importante:</b> Isso pode levar de 3 a 4 minutos. Não saia desta página até que a barra de progresso atinja 100%';
$l['cant_download'] = 'Não é possível baixar o arquivo ZIP.';
$l['softdirectory_invalid'] = 'O diretório que você digitou é inválido.';
$l['softdirectory_exists'] = 'O diretório que você digitou já existe! Digite outro nome de diretório.';
$l['ins_emailto'] = 'Enviar detalhes da instalação por e-mail para';
$l['disable_classes'] = 'As classes PHP são desativadas pelo administrador ou você está usando '.APP.' Versão gratuita';
$l['invalid_class_id'] = 'ID de classe inválido';

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['install'] = 'Instalar';
$l['overview'] = 'Leia-me';
$l['features'] = 'Funcionalidades';
$l['demo'] = 'Demonstração';
$l['file'] = 'Arquivos';
$l['ratings'] = 'Avaliações';
$l['import'] = 'Importar';
$l['software_ver'] = 'Versão';
$l['space_req'] = 'Espaço necessário';
$l['available_space'] = 'Espaço disponível';
$l['req_space'] = 'Espaço necessário';
$l['mb'] = 'MB';
$l['software_support'] = 'Suporte da ferramenta';
$l['support_link'] = 'Visitar página do suporte';
$l['support_note'] = 'Importante: Softaculous não fornece suporte para nenhuma ferramenta.';
$l['setup'] = 'Instalação da ferramenta';
$l['choose_domain'] = 'Choose Domain';
$l['choose_domain_exp'] = 'Please choose the domain to install the software.';
$l['in_directory'] = 'In Directory';
$l['in_directory_exp'] = 'The directory is relative to your home path and will be <b>created if it does not exist</b>. e.g. To install at &soft-1;/dir just type <b>dir</b>. To install only in &soft-1;/ leave this empty.';
$l['aef_in_directory_exp'] = 'The directory is relative to your home path and will be <b>created if it does not exist</b>. e.g. To install at <span id="aef_span_lang">&soft-1;</span>/dir just type <b>dir</b>. To install only in <span id="aef_span_lang_a">&soft-1;</span>/ leave this empty.';
$l['softsubmit'] = 'Install';
$l['congrats'] = 'Congratulations, the software was installed successfully';
$l['succesful'] = 'has been successfully installed at';
$l['enjoy'] = 'We hope the installation process was easy.';
$l['install_notes'] = 'The following are some important notes. It is highly recommended that you read them ';
$l['please_note'] = '<b>NOTE</b>: '.APP.' is just an automatic software installer and does not provide any support for the individual software packages. Please visit the software vendor\'s web site for support!';
$l['regards'] = 'Regards';
$l['softinstaller'] = APP.' Auto Installer';
$l['return'] = 'Return to Overview';
$l['current_ins'] = 'Current Installations';
$l['link'] = 'Link';
$l['ins_time'] = 'Installation Time';
$l['version'] = 'Version';
$l['upd_to'] = 'Upgrade to Version';
$l['remove'] = 'Remove';
$l['no_info'] = 'No Info';
$l['ratesoft'] = 'Rate this Script';
$l['reviews'] = 'Reviews';
$l['reviewsoft'] = 'Write a Review';
$l['readreviews'] = 'Read Reviews';
$l['reviews_exp'] = 'Read reviews written by other users and';
$l['ins_type'] = 'Type of Install';
$l['ins_type_exp'] = '<b>Original Package</b> - Package as available from the Scripts Website. <br /> <b>Just Library Files</b> - Just the Javascript Library files.';
$l['ori_pack'] = 'Original Package';
$l['just_lib'] = 'Just Library Files';
$l['overwrite_exist'] = '<b>OR</b> <br /><input type="checkbox" name="overwrite_existing" id="overwrite_existing" />&nbsp;&nbsp;<b><span style="color:#000;">Select the checkbox to overwrite all files and continue</span></b>';
$l['overwrite'] = 'Overwrite Files';
$l['choose_protocol'] = 'Choose Protocol';
$l['choose_protocol_exp'] = 'If your site has SSL, then please choose the HTTPS protocol.';
$l['downloading'] = 'Downloading Package';
$l['installing'] = 'Installing Script';
$l['files'] = 'Files & Folders';
$l['modified_time'] = 'Last Modified';
$l['size'] = 'Size';
$l['classes_ins_error'] = 'Error occured while saving the Installation.';
$l['del_insid'] = 'Are you sure you wish to remove the selected installations ? The action will be irreversible. \nNo further confirmations will be asked.';
$l['rem_inst_id'] = 'Removing Installation - ';
$l['no_sel_inst'] = 'No installation(s) selected to remove.';
$l['inst_remvd'] = 'The selected installation(s) have been removed. The page will now be reloaded !';
$l['go'] = 'Go';
$l['download_zip'] = 'Download All Files ';
$l['software_category'] = 'Category';
$l['adv_option'] = 'Advanced Options';
$l['disable_notify_update'] = 'Disable Update Notifications Emails';
$l['exp_disable_notify_update'] = 'If checked you will not receive an email notification for updates available for this installation.';
$l['prog_installing'] = 'Installing ';// Dont remove the trailing space
$l['prog_install_complete'] = 'Installation Completed.';

$l['install_tweet_sub'] = 'Tell your friends';
$l['select_domain'] = 'Select Domain';
$l['with_selected'] = 'With Selected';
$l['download'] = 'Download';

