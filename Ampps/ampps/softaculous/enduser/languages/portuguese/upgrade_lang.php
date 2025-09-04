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

$l['no_info_file'] = 'Não foi possivel encontrar o arquivo INFO.XML! Informe o administrador.';
$l['incompatible'] = 'Este software necessita que uma versão mais recente do '.APP.' esteja instalada! Informe o administrador.';
$l['no_upgrade'] = 'Não foi possivel encontrar o arquivo UPGRADE.XML ! Informe o administrador.';
$l['no_functions'] = 'O arquivo UPGRADE FUNCTIONS não foi encontrado! Informe o administrador.';
$l['no_field'] = 'O campo <b>&soft-1;</b> é obrigatório e deverá ser preenchido.';
$l['no_package'] = 'Não foi possivel encontrar o arquivo de atualização!';
$l['no_decompress'] = 'Ocorreram alguns erros ao descomprimir o arquivo de atualização.';
$l['checking_data'] = 'Verificando os dados enviados';
$l['unzipping_files'] = 'Copiando arquivos e pastas';
$l['unzipping_datadir'] = 'Descompactando arquivos de dados';
$l['prop_db'] = 'Atualizando o banco de dados';
$l['finishing_process'] = 'Atualização final';
$l['wait_note'] = '<b>Importante:</b> Isso pode levar de 3 a 4 minutos. Por favor, não saia desta página até que a barra de progresso atinja 100% ';
$l['cver_greater'] = 'A versão atual é maior ou igual à versão para a qual você está atualizando. Isso é possível se você atualizou manualmente a instalação. Se não for esse o caso, marque a caixa de seleção a seguir';
$l['force_upgrade'] = 'Atualização forçada';
$l['backup_finish'] = 'Backup concluído';
$l['backup_fail_proceed'] = 'Ocorreu um erro durante o processo de backup. Continuar com a atualização?';
$l['backing_up'] = 'Fazendo backup da instalação';
$l['no_space'] = 'Você não possui espaço suficiente para atualizar esta instalação!';
$l['invalid_insid'] = 'ID de instalação inválido';
$l['invalid_script'] = 'ID de script inválido';
$l['no_upgrade_support'] = 'A atualização não é suportada para este script';

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['upgrade'] = 'Atualização da Ferramenta';
$l['softins_url'] = 'Endereço';
$l['softins_path'] = 'Diretório';
$l['softcopy_note'] = '<b>Importante</b>: Este software irá executar uma atualização usando as suas próprias ferramentas. Para completar o processo de atualização deverá visitar o endereço que será mostrado assim que a descompressão de arquivos for concluída.';
$l['softsubmit'] = 'Atualizar';
$l['congrats'] = 'Ferramenta atualizada com sucesso';
$l['succesful'] = 'Atualizado com sucesso em';
$l['admin_url'] = 'Endereço de Administração';
$l['setup_continue'] = 'Contúdo, a actualização será executada pelo próprio software, para tal deverá visitar o seguinte endereço';
$l['enjoy'] = 'Esperemos que o processo de actualização tenha sido fácil.';
$l['upgrade_notes'] = 'Seguem algumas informações importantes. Recomendamos que leia com atenção. ';
$l['please_note'] = '<b>Importante</b>:O '.APP.' é apenas um auto-instalador de scripts e não dá suporte aos scripts. Para tal, deverá visitar a página do fabricante do respectivo software!';
$l['regards'] = 'Obrigado';
$l['softinstaller'] = APP;
$l['return'] = 'Voltar';
$l['return_to_wpm'] = 'Return to WordPress Management';
$l['note_backup'] = 'É recomendável que você faça um <a href="'.$globals['index'].'act=backup&insid=&soft-1;">backup</a> da instalação antes de atualizar.';
$l['alreadyupdated'] = 'Parece que a versão atual da instalação é <b>&soft-1;</b> e não <b>&soft-2;</b>. <br />Clique aqui para atualizar o '.APP.'.';
$l['no_update_required'] = 'Parece que você não precisa atualizar sua instalação, pois ela já está atualizada';
$l['auto_backup'] = 'Deseja fazer um backup antes de atualizar?';
$l['select_version'] = 'Selecione uma versão para a qual atualizar';
$l['upgrading'] = 'Fazendo atualização...';
$l['setup_partial'] = 'Você está a mais um passo de concluir o processo de atualização';
$l['finish_update'] = 'Por favor, visite o link abaixo para concluir o processo de atualização.';
$l['finish_up_sucess'] = 'Após concluir o processo de atualização, você pode acessar o &soft-1;';
$l['upgrading_to'] = 'Você estará atualizando para: ';
$l['version'] = 'Versão ';
$l['create_backup'] = 'Criar backup';
$l['create_backup_exp'] = 'Crie um backup antes de atualizar';
$l['prog_upgrading'] = 'Atualizando ';// Dont remove the trailing space
$l['prog_upgrade_complete'] = 'Atualização completa.';

$l['upgrade_tweet_sub'] = 'Conte aos seus amigos';

$l['backup_type'] = 'Opções de backup';
$l['backup_type_exp'] = 'Escolha backup completo ou opções avançadas';
$l['standard_backup'] = 'Backup completo (Padrão)';
$l['advanced_backup'] = 'Opções avançadas';

$l['backup_dir'] = 'Diretório de backup';
$l['backup_db'] = 'Backup do banco de dados';
$l['backup_wwwdir'] = 'Backup do diretório web';
$l['backup_datadir'] = 'Backup do diretório de arquivos';
$l['no_dir'] = 'Os arquivos de instalação estão ausentes, portanto, não é possível prosseguir com a atualização';
$l['wpc_return'] = 'Voltar';

$l['err_default_backup_loc'] = 'Default backup location is empty, please select a default backup location in order to backup on the default location.';