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

$l['no_info_file'] = 'Não foi possível encontrar o arquivo INFO.XML! Por favor, reporte isso ao administrador do servidor.';
$l['incompatible'] = 'O software requer uma versão superior do '.APP.'! Por favor, reporte isso ao administrador do servidor.';
$l['no_upgrade'] = 'Não foi possível encontrar o arquivo UPGRADE.XML! Por favor, reporte isso ao administrador do servidor.';
$l['no_functions'] = 'Não foi possível encontrar o arquivo UPGRADE FUNCTIONS! Por favor, reporte isso ao administrador do servidor.';
$l['no_field'] = 'O campo <b>&soft-1;</b> é obrigatório e deve ser preenchido.';
$l['no_package'] = 'Não foi possível encontrar o pacote de atualização!';
$l['no_decompress'] = 'Ocorreram alguns erros na descompactação dos arquivos do pacote.';
$l['no_decompress_www'] = 'Ocorreram alguns erros na descompactação dos arquivos da Web.';
$l['no_config_perl_path'] = 'Ocorreu um erro ao configurar arquivos CGI.';
$l['checking_data'] = 'Verificando os dados enviados';
$l['unzipping_files'] = 'Copiando arquivos e pastas';
$l['unzipping_datadir'] = 'Descompactando arquivos de dados';
$l['prop_db'] = 'Atualizando o banco de dados';
$l['finishing_process'] = 'Atualização final';
$l['wait_note'] = '<b>Importante:</b> Isso pode levar de 3 a 4 minutos. Não saia desta página até que a barra de progresso atinja 100%';
$l['no_space'] = 'Você não possui espaço suficiente para atualizar esta instalação!';
$l['invalid_insid'] = 'ID de instalação inválido';
$l['invalid_script'] = 'ID de script inválido';
$l['not_perl_script'] = 'Este script não está em PERL';
$l['no_perl_upgrade'] = 'A atualização não é suportada para este script';

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['upgrade'] = 'Atualização de software';
$l['softins_url'] = 'URL';
$l['softins_path'] = 'Caminho';
$l['softcopy_note'] = '<b>Importante</b>: Este software executará uma atualização usando seu próprio utilitário de atualização. Para concluir a atualização, visite o URL que será mostrado depois que os arquivos forem copiados.';
$l['softsubmit'] = 'Atualizar';
$l['congrats'] = 'Parabéns, o software foi atualizado com sucesso';
$l['succesful'] = 'foi atualizado com sucesso em';
$l['admin_url'] = 'URL do administrador';
$l['setup_continue'] = 'No entanto, a atualização será concluída pelo próprio software, portanto, visite o seguinte URL';
$l['enjoy'] = 'Esperamos que o processo de atualização tenha sido fácil.';
$l['upgrade_notes'] = 'A seguir, algumas notas importantes. É altamente recomendável que você os leia';
$l['please_note'] = '<b>Importante</b>: '.APP.' é apenas um instalador automático e não oferece suporte ao software. Por favor, visite o site do fornecedor do software para obter suporte!';
$l['regards'] = 'Obrigado';
$l['softinstaller'] = APP.' Instalador automático';
$l['return'] = 'Voltar';
$l['note_backup'] = 'É recomendável que você faça um <a href="'.$globals['index'].'act=backup&insid=&soft-1;">backup</a> da instalação antes de atualizar.';
$l['create_backup'] = 'Criar backup';
$l['create_backup_exp'] = 'Crie um backup antes de atualizar';
$l['prog_upgrading'] = 'Atualizando ';// Dont remove the trailing space
$l['prog_upgrade_complete'] = 'Atualização concluída.';

$l['upgrade_tweet_sub'] = 'Conte aos seus amigos';

