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

$l['no_info_file'] = 'O arquivo INFO.XML está ausente! Verifique com o suporte.';
$l['incompatible'] = 'O software requer uma versão mais recente do '.APP.' ! Por favor, informe isso ao administrador do servidor.';
$l['no_upgrade'] = 'Não foi possivel encontrar o arquivo UPGRADE.XML ! Informe o administrador.';
$l['no_functions'] = 'Não foi possível encontrar o arquivo UPGRADE FUNCTIONS! Por favor, reporte isso ao administrador do servidor.';
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
$l['softcopy_note'] = '<b>Importante</b>: Este software executará uma atualização usando seu próprio utilitário de atualização. Para concluir a atualização, visite o URL que será mostrado depois que os arquivos forem copiados.';
$l['softsubmit'] = 'Atualizar';
$l['congrats'] = 'Parabéns, o software foi atualizado com sucesso';
$l['succesful'] = 'Atualizado com sucesso em';
$l['admin_url'] = 'Endereço de Administração';
$l['setup_continue'] = 'A configuração será concluída através do próprio software. Visite a seguinte URL';
$l['enjoy'] = 'Esperemos que o processo de actualização tenha sido fácil.';
$l['upgrade_notes'] = 'Seguem algumas informações importantes. Recomendamos que leia com atenção. ';
$l['please_note'] = '<b>Importante</b>: O '.APP.' é apenas um script de instalação automatizada não dando suporte aos softwares e scripts instalados. Visite o site do fornecedor do software para obter suporte!';
$l['regards'] = 'Obrigado';
$l['softinstaller'] = APP;
$l['return'] = 'Voltar';
$l['return_to_wpm'] = 'Voltar ao WordPress Management';
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

$l['err_default_backup_loc'] = 'O local padrão para backup está vazio. Selecione um local padrão para fazer o backup.';