<?php

//////////////////////////////////////////////////////////////
//===========================================================
// backup_lang.php
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

$l['no_ins'] = 'Nenhuma instalação foi enviada';
$l['wrong_ins_title'] = 'ID de instalação incorreta';
$l['wrong_ins'] = 'O ID de instalação fornecido não existe';
$l['backup_ftp_error'] = 'Não foi possível criar o backup no diretório <b>&soft-1;</b>. Por favor, crie manualmente e tente novamente.';
$l['err_backup'] = 'Não foi possível criar o backup.';
$l['no_space_backup'] = 'Você não possui espaço em disco o suficiente!';
$l['err_notelength'] = 'A nota de backup deve ter menos de 255 caracteres';
$l['off_backup_restore'] = 'O recurso de backup/restauração foi desativado pelo administrador';

$l['cant_backup_dir'] = 'O utilitário de backup não pôde fazer backup dos arquivos.';
$l['could_not_read'] = 'Ops... O Softaculous não pôde ler o seguinte arquivo/diretório <b>&soft-1;</b>. Favor verificar para continuar usando o utilitário de backup.';
$l['cant_datadir_dir'] = 'Ocorreram erros ao adicionar o diretório de dados.';
$l['cant_wwwdir'] = 'Ocorreram erros ao adicionar o diretório web.';
$l['cant_backup_db'] = 'Ocorreram erros ao adicionar o banco de dados ao backup.';
$l['err_perm_file'] = 'Ocorreram erros ao tentar criar um arquivo de permissões';
$l['err_dataperm_file'] = 'Ocorreram erros ao tentar criar um arquivo de permissões do diretório de dados';
$l['err_wwwperm_file'] = 'Ocorreram erros ao tentar criar um arquivo de permissões do diretório web';
$l['save_dir_perms'] = 'Não foi possível salvar as permissões do arquivo';
$l['save_datadir_perms'] = 'Não foi possível salvar as permissões do diretório de dados';
$l['save_www_perms'] = 'Não foi possível salvar as permissões do diretório da web';
$l['cant_connect_mysql'] = 'Não foi possível conectar ao banco de dados, verifique o nome de usuário/senha do seu banco de dados. Se alterado, atualize os detalhes em instalações Softaculous usando "Editar detalhes".';

//Theme Strings
$l['<title>'] = APP.' - Backup';
$l['info'] = 'Informações';
$l['ins_softname'] = 'Software';
$l['ins_num'] = 'Número da instalação';
$l['ins_ver'] = 'Versão';
$l['ins_time'] = 'Data da instalação';
$l['ins_path'] = 'Caminho';
$l['ins_wwwdir'] = 'Caminho do diretório web';
$l['ins_url'] = 'URL';
$l['ins_db'] = 'Nome do banco de dados';
$l['ins_dbuser'] = 'Usuário do banco de dados';
$l['ins_dbpass'] = 'Senha do banco de dados';
$l['ins_dbhost'] = 'Host do banco de dados';
$l['backup_ins'] = 'Fazer backup de uma instalação';
$l['backup_dir'] = 'Diretório do banco de dados';
$l['backup_dir_exp'] = 'Se você marcar esta opção, será feito backup de toda a pasta';
$l['backup_db'] = 'Backup do banco de dados';
$l['backup_db_exp'] = 'Se marcado, o banco de dados também será copiado';
$l['backup_conf'] = 'O backup pode levar algum tempo, dependendo dos dados. Por favor, não feche a página nem navegue para outra página.';
$l['backedup'] = 'O backup foi criado com sucesso. Você consegue acessa-lo em <a href="'.$globals['index'].'act=backups">Backups</a> page.';
$l['backup_ins'] = 'Instalação de backup';
$l['backup_datadir'] = 'Diretório de dados de backup';
$l['backup_datadir_exp'] = 'Se marcado, o diretório Data será salvo.';
$l['ins_datadir'] = 'Diretório Data';
$l['return'] = 'Voltar';
$l['return_to_wpm'] = 'Return to WordPress Management';
$l['ins_cron_command'] = 'Comando cron';
$l['backup_wwwdir'] = 'Backup do diretório web';
$l['backup_wwwdir_exp'] = 'Se marcado, o diretório da web será salvo.';
$l['checking_data'] = 'Verificando os dados enviados';
$l['backingup_db'] = 'Fazendo backup do banco de dados';
$l['backingup_dir'] = 'Fazendo backup do diretório';
$l['backingup_datadir'] = 'Fazendo backup do diretório DATA';
$l['finishing_process'] = 'Finalizando backup';
$l['wait_note'] = '<b>Importante:</b> Isso pode levar de 3 a 4 minutos. Você pode sair desta página, se desejar!';
$l['backingup'] = 'O backup está sendo criado em segundo plano. Você será notificado por e-mail após a conclusão. Após a conclusão do backup, você pode acessá-lo na página <a href="'.$globals['index'].'act=backups">Backups</a>.';
$l['check_email'] = 'Verifique seu e-mail para o status do backup';
$l['prog_backingup'] = 'Fazendo backup ';
$l['prog_backup_complete'] = 'Backup completo.';
$l['backup_note'] = 'Informações do backup';
$l['backup_note_exp'] = 'Você pode salvar uma nota para sua referência';
$l['backup_operation'] = 'Selecione as operações de backup';
$l['backups_expire'] = 'Seus backups serão limpos automaticamente após <b>&soft-1;</b> dias da criação do backup.';
$l['err_max_backups'] = 'Você atingiu o número máximo de backups (<b>&soft-1;</b>) permitidos. Exclua os backups indesejados para poder fazer um novo backup.';
$l['err_max_local_backups'] = 'Você atingiu o número máximo permitido de backups locais (<b>&soft-1;</b>). Exclua os backups indesejados no servidor local para poder fazer um novo backup.';
$l['err_max_insid_backups'] = 'You have reached the maximum number of (<b>&soft-1;</b>) backups allowed for this installation. Please delete unwanted backups for this installation to be able to take a new backup.';
$l['err_max_local_insid_backups'] = 'You have reached the maximum number of (<b>&soft-1;</b>) local backups allowed for this installation. Please delete unwanted backups for this installation on the local server to be able to take a new backup.';
$l['backup_notes'] = 'Backup criado';
$l['max_backups'] = 'No momento, você tem <b>&soft-1;</b> backups em sua conta. Seu limite máximo de backups é <b>&soft-2;</b>.';

$l['no_backup_functions'] = 'Não foi possível encontrar o arquivo "BACKUP FUNCTIONS"! Por favor, reporte isso ao administrador do servidor.';
$l['no_dir_exists'] = 'O diretório de instalação não existe.';
$l['backup_location_name'] = 'Local do backup';
$l['backup_file_empty'] = 'Tamanho incorreto do arquivo de backup: 0';
$l['err_mysql_db'] = 'O nome do banco de dados MySQL está incorreto, pois o banco de dados não pôde ser selecionado.';
$l['backup_loc'] = 'Local do backup'; 
$l['exp_backup_loc'] = 'Escolha o local do backup em que você deseja armazena-lo'; 
$l['default'] = 'Padrão'; 
$l['invalid_backup_location'] = 'O local informado não existe'; 
$l['local_folder'] = 'Pasta local'; 
$l['err_default_backup_loc'] = 'Default backup location is empty, please select a default backup location in order to backup on the default location.';

$l['invalid_access_token'] = 'Chave eletrônica de acesso inválida. Autorize novamente '.APP.' Dropbox APP na página Editar local de backup em '.APP.' painel de usuário final';
$l['insufficient_space'] = 'Sua conta do Dropbox está cheia. Libere algum espaço e tente o backup após algum tempo';
$l['incorrect_offset'] = 'Incorrect Offset';

$l['gdrive_err_init'] = 'Ocorreram alguns erros ao iniciar o backup no Google Drive!';
$l['gdrive_err_end'] = 'Ocorreram alguns erros ao confirmar o backup da sua conta do Google Drive!';

$l['error_max_backup_script'] = 'Você atingiu o número máximo de backups (<b>&soft-1;</b>) permitidos por script';
$l['error_max_backup_insid'] = 'You have reached the maximum number of (<b>&soft-1;</b>) Backups allowed per installation';

$l['ftp_access'] = 'O processo PHP não consegue gravar arquivos no seu servidor. Por favor, configure o acesso ao FTP para continuar.';
$l['configure_domain'] = 'Definir configurações';

$l['wpc_return'] = 'Voltar';

$l['ampps_notify_premium'] = 'Esse recurso está disponível na versão premium do AMPPS. Adquira o <b><a href="https://ampps.com/clients">AMPPS Premium</a></b>';
$l['backing_up'] = 'Seu backup está sendo criado em segundo plano. Você será notificado por e-mail após a conclusão. Você pode acompanhar o processo de backup na página <a href="'.$globals['index'].'act=eu_tasklist">Lista de tarefas</a>.<br /> A sua URL de instalação : <a href="&soft-1;" target="_blank">&soft-1;</a>';

$l['rbackup_disabled'] = 'Backup on remote locations is disabled by Admin';
$l['rbackup_protocol_disabled'] = 'Backup on <b>&soft-1;</b> is disabled by Admin';

$l['onedrive_err_end'] = 'There were some errors while uploading backup to your OneDrive account!';
$l['onedrive_err_upload_url'] = 'Failed to generate OneDrive Upload URL';

$l['dropbox_refresh_token_err'] = 'Failed to generate Dropbox access token. Please re-authorize Dropbox location from Settings -> Edit Backup Location page.';