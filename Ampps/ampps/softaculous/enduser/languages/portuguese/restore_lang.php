<?php

//////////////////////////////////////////////////////////////
//===========================================================
// restore_lang.php
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

$l['restoreerror'] = 'Ocorreu um erro ao descompactar os arquivos de backup';
$l['restoredatadir'] = 'Não foi possível restaurar o diretório de dados';
$l['restorewww'] = 'Não foi possível restaurar o diretório da Web';
$l['res_err_selectmy'] = 'Não foi possível selecionar o banco de dados para restaurar';
$l['err_myconn'] = 'Não pôde conectar com a base de dados';
$l['err_db_create'] = 'Ocorreu um erro ao criar o banco de dados';
$l['off_backup_restore'] = 'O recurso de backup/restauração foi desativado pelo administrador';
$l['no_backupinfo_file'] = 'Arquivo de informações de backup não encontrado';
$l['no_backup_time'] = 'Tempo de backup não encontrado';
$l['instime_higher_than_btime'] = 'O tempo de instalação é superior ao tempo de backup';

//Theme Strings
$l['<title>'] = APP.' - Restaurar';
$l['restorefile'] = 'Restaurar do backup';
$l['restore_dir'] = 'Restaurar diretório';
$l['restore_dir_exp'] = 'Se você marcar isso, a pasta inteira será restaurada';
$l['restore_datadir'] = 'Restaurar diretório de dados';
$l['restore_datadir_exp'] = 'Se marcado, o diretório Data será restaurado';
$l['restore_db'] = 'Restaurar banco de dados';
$l['restore_db_exp'] = 'Se marcado, o banco de dados também será restaurado';
$l['restore_ins'] = 'Restaurar instalação';
$l['restore'] = 'Seu backup foi restaurado com sucesso';
$l['confirm_restore'] = 'Tem certeza de que deseja restaurar a instalação?';
$l['return'] = 'Voltar';
$l['return_to_wpm'] = 'Return to WordPress Management';
$l['restore_wwwdir'] = 'Restaurar diretório web';
$l['restore_wwwdir_exp'] = 'Se marcado, o diretório web será restaurado';
$l['checking_data'] = 'Verificando os dados enviados';
$l['res_db'] = 'Restaurando o banco de dados';
$l['res_dir'] = 'Restaurando o diretório';
$l['res_datadir'] = 'Restaurando o diretório de dados';
$l['finishing_process'] = 'Backup restaurado';
$l['wait_note'] = '<b>Importante:</b> Isso pode levar de 3 a 4 minutos. Não saia desta página até que a barra de progresso atinja 100%';
$l['restoring'] = 'Seu backup está sendo restaurado no segundo plano. Você será notificado por e-mail assim que estiver concluído. Você pode acompanhar o processo de restauração na página <a href="'.$globals['index'].'act=eu_tasklist"> Lista de tarefas </a>.';
$l['prog_restoring'] = 'Restaurando '; // Dont remove the trailing space
$l['prog_restore_complete'] = 'Restauração completa.';
$l['no_restore_functions'] = 'Não foi possível encontrar o arquivo RESTORE FUNCTIONS! Por favor, reporte isso ao administrador do servidor.';
$l['backup_file_empty'] = 'O arquivo de backup está vazio';
$l['db_not_exist'] = 'O arquivo de banco de dados não existe';
$l['db_empty'] = 'O arquivo do banco de dados está vazio';

$l['read_archive'] = 'Lendo o arquivo';

$l['no_backup_file'] = 'Arquivo de backup ausente';

$l['wpc_return'] = 'Voltar';

$l['ampps_notify_premium'] = 'Esse recurso está disponível na versão premium do AMPPS. Por favor compre <b><a href="https://ampps.com/clients">AMPPS Premium</a></b>';

$l['restore_delete_files'] = 'Delete existing files/folders'; 
$l['restore_delete_files_exp'] = 'If checked existing files/folders will be deleted and then the backup files will be restored. <br /><b>Note</b>: Please make sure that you chose Full Backup while creating this backup.';
$l['no_restore_file_param'] = 'Backup file name was not passed. It is required to start the restore process.';