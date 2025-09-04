<?php

//////////////////////////////////////////////////////////////
//===========================================================
// cli_lang.php
//===========================================================
// SOFTACULOUS 
// Version : 4.1.7
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

$l['auto_upgrade_parameter'] = "Informe os parâmetros deste recurso (--core ou --plugins ou --themes) para atualização automática";
$l['err_cannot_autoupgrade'] = "A atualização automática não pode ser realizada para este painel de controle.\n";
$l['err_invalid_param'] = "Parâmetro inválido &soft-1; \nLeia a documentação para obter mais detalhes:\nhttp://www.softaculous.com/docs/Upgrade_Script_from_CLI\n";
$l['err_no_input'] = "Por favor, forneça algumas entradas.\n";
$l['err_no_insid'] = "O ID da instalação não é fornecido.\n";
$l['err_no_username'] = "O nome de usuário não é fornecido.\n";
$l['err_no_such_user'] = "Nenhum usuário encontrado.\n";
$l['err_dont_provide_username'] = "Nome de usuário não é obrigatório.\n";
$l['err_no_softdir'] = "Softdir não encontrado para o usuário &soft-1;\n";
$l['err_no_installation'] = "Nenhuma instalação encontrada para o ID da instalação: &soft-1;\n";
$l['err_cant_upgrade'] = "Esta instalação já está na versão mais recente OU Este script não pode ser atualizado automaticamente.\n";
$l['err_backup_fail'] = 'O backup não foi bem-sucedido, portanto, abortando o processo de atualização. A seguir estão os detalhes:';
$l['err_upgrade_restore_failed'] = 'Falha ao atualizar a instalação E também falhou ao restaurar a partir do backup criado. A seguir estão os detalhes:';
$l['err_upgrade_restore_success'] = 'Falha ao atualizar a instalação, mas restaurada com sucesso a partir do backup criado. A seguir estão os detalhes:';
$l['err_upgrade'] = 'Falha ao atualizar a instalação. A seguir estão os detalhes:';
$l['err_upgrade_req'] = 'Esta instalação não atende aos requisitos de atualização. Portanto, não pode ser atualizado automaticamente. A seguir estão os detalhes:';
$l['err_could_not_posix'] = 'Não foi possível alternar para o processo de abortar do usuário...';
$l['err_cant_upgrade_for_this_server'] = "A pré-atualização verifica FAILED, pois URLs externos não puderam ser acessados. \n Isso pode ser devido ao allow_url_fopen() desativado no servidor ou ao CURL não ter acessado o URL. Portanto, a atualização automática não pode ser executada.";
$l['err_auto_upgrade_req_fail'] = 'Esta instalação não atende aos requisitos de atualização automática. Portanto, não pode ser atualizado automaticamente. A seguir estão os detalhes:';
$l['help'] = "Bem-vindo à Interface da Linha de Comandos Softaculous.
Available Commands : \n\t
--install\t Para instalar um aplicativo.
--upgrade\t Para atualizar um aplicativo instalado.
--import\t Para Importar um aplicativo instalado no Softaculous.\n
For Support Entre em contato conosco: support@softaculous.com
";
$l['err_no_script'] = "O nome do script não é fornecido.\n";
$l['err_no_url'] = "Forneça o URL em que uma instalação foi feita. EX: --url = DOMINIO.com.br /testdir \n";
$l['err_no_such_script'] = "Nenhum script encontrado - &soft-1;\n";
$l['import_success'] = "Importado com sucesso!\n";
$l['import_error'] = "Ocorreu um erro: \n";
$l['err_no_path'] = "Por favor, forneça o caminho. EX: --path=/home/USUARIO/public_html/test\n";
$l['err_no_import'] = "O utilitário de importação não está disponível para este script\n";
$l['err_user_not_allowed'] = "O utilitário de importação não está disponível para o usuário final\n";
$l['err_cant_load_docroots'] = "Não foi possível carregar o caminho para o domínio(s)\n";
$l['ins_available_for'] = " instalações disponíveis para o seguinte diretório:\n";// Keep the space at the beginning
$l['ins_found_at_path'] = " instalação encontrada no caminho especificado. \n Execute o comando anterior com --r para importá-lo.\n";
$l['imp_ins_exists'] = "Esta instalação já está importada para - &soft-1; às &soft-2;\n";
$l['upgraded_manually'] = "A instalação já está atualizada. Atualizada ".APP." registros\n";
$l['upgraded_successfully'] = "A atualização foi bem-sucedida \n";
$l['shellexec_disabled'] = 'shell_exec() está desativado';
$l['list_scripts'] = "\nA seguir, é apresentada a lista de scripts que podem não funcionar no servidor. \n Por não atender aos requisitos mínimos do (s) script (s)";
$l['req_pass'] = "A verificação de todos os scripts foi aprovada.";
$l['err_cannot_autobackup'] = "Os backups automáticos não podem ser executados para este painel de controle.\n";
$l['err_no_auto_backup'] = "Os backups automáticos foram desativados pelo administrador.\n";
$l['err_update_record'] = 'Ocorreu um erro ao atualizar a versão nos registros '.APP."\n";
$l['suc_update_record'] = "Atualizado ".APP . "registros com sucesso de &soft-1; para &soft-2; para &soft-3;\n";
$l['show_real_version'] = "Versão real: &soft-1; -- Versão conforme ".APP." registros: &soft-2; \n";
$l['no_outdated_ins'] = "Nenhuma instância desatualizada encontrada.\n";
$l['edit_detail_options'] = "\n--show_outdated_version=1 Para mostrar as instalações desatualizadas do usuário especificado
--user=USER_NAME cujos registros você deseja atualizar
--sid=SCRIPT_ID ID do script para o qual você deseja atualizar os registros
--update_records=1 Isso atualizará ".APP." registros\n";
$l['only_au_ins_note'] = "Importante: Apenas as instalações que podem ser atualizadas automaticamente serão listadas aqui\n";
$l['err_restore_cli'] = "A restauração via CLI não pode ser executada para este painel de controle.\n";
$l['err_no_backupfile'] = "O arquivo de backup não existe.\n";
$l['err_wrongins'] = "O arquivo de backup não é para esta instalação.\n";
$l['err_no_file'] = "Nome do arquivo de backup não especificado.\n";
$l['err_no_backupinfo'] = "Arquivo de informações de backup não encontrado.\n";
$l['err_no_backup_file'] = "Arquivo de backup não encontrado.\n";

$l['soft_license'] = APP." Licença";
$l['lic_type'] = "Tipo";
$l['num_users'] = "Número de usuários";
$l['licexpires'] = "Expira";
$l['primary_ip'] = "IP da licença";
$l['free'] = "Gratuito";
$l['premium'] = "Premium";
$l['expired'] = "Expirado";
$l['never'] = "Nunca";

// Remove installation
$l['no_panels'] = "A remoção de scripts da CLI é possível apenas no cPanel ou Webuzo.\n";
$l['no_input'] = "Forneça a entrada necessária.\n";
$l['invalid_par'] = 'Parâmetro inválido';
$l['no_scripts'] = 'Os scripts não foram carregados.';
$l['remove'] = 'Removido';
$l['heading'] = "Nome do script \t ID de instalação do script \n";
$l['no_installation'] = "Nenhuma instalação foi encontrada no seu servidor.\n";
$l['err_remove'] = "Falha na remoção da instalação.\n";
$l['note_by_automated_backup'] = 'Backup criado por backups automatizados';
$l['note_by_automated_upgrade'] = 'Backup criado por atualização automatizada';
$l['sql_db'] = 'Não foi possível encontrar o arquivo do banco de dados';
$l['err_query'] = 'Não foi possível executar a consulta';
$l['sqlfile_err'] = 'Não foi possível criar o arquivo sql';
$l['fetching_remote_files'] = 'Importando arquivos do servidor remoto';
$l['import_complete'] = 'Importação concluída';
$l['import_script'] = 'Importando';
$l['export_db'] = 'Exportando banco de dados do servidor remoto';
$l['fetch_datadir'] = 'Buscando diretório de dados do servidor remoto';
$l['import_db'] = 'Propagando o Banco de Dados';
$l['insid_missing'] = 'Forneça o ID da instalação';
$l['insid_incorrect'] = 'O ID da instalação está incorreto';
$l['read_file'] = 'Não foi possível ler o arquivo de dados de importação';
$l['no_remote_import'] = 'A importação remota não é suportada para este script';
$l['wrong_ftp_path'] = 'O caminho especificado do FTP está incorreto';

//Webuzo Backups and Restore
$l['not_permitted'] = 'Este usuário não tem permissão para executar o script';
$l['no_option'] = 'Nada a ser feito';
$l['no_backup_dir'] = 'Diretório de backup não presente';
$l['backup_filename'] = 'Nome do arquivo de backup';
$l['create_tar'] = 'Criando o arquivo .tar';
$l['tar_error'] = 'Ocorreram alguns erros ao criar o arquivo .tar';
$l['tar_created'] = 'arquivo tar criado';
$l['create_db'] = 'Criando backup do banco de dados';
$l['no_dbback_func'] = 'A função de backup não está disponível';
$l['db_back_fail'] = 'O utilitário não pôde fazer backup do banco de dados';
$l['compress_sql'] = 'Compactando o arquivo SQL';
$l['db_backup_filename'] = 'O nome do arquivo de backup do banco de dados é';
$l['no_mysql'] = 'MySQL não está instalado';
$l['skip_db_files'] = 'Ignorando o processo de backup do banco de dados';
$l['tar_extract'] = 'Extraindo o arquivo .tar';
$l['err_tar_xtrct'] = 'Ocorreram alguns erros ao extrair o arquivo .tar';
$l['db_restore_file'] = 'Restaurando arquivo de banco de dados';
$l['db_restore_err'] = 'O utilitário não pôde restaurar o banco de dados';
$l['db_restore_done'] = 'Banco de dados restaurado com sucesso';
$l['skip_db_restore'] = 'Ignorando o processo de restauração do banco de dados';
$l['no_exim'] = 'Exim não está instalado';
$l['skip_exim_files'] = 'Ignorando arquivos Exim';
$l['no_bind'] = 'BIND não está instalado';
$l['skip_bind_files'] = 'Ignorando arquivos BIND';
$l['no_backup_type'] = 'Tipo de backup não especificado';
$l['wrng_backup_type'] = 'Tipo de backup incorreto especificado';
$l['wrng_back_file'] = 'O arquivo especificado não é um arquivo de backup';
$l['strt_backup'] = 'Iniciando o processo de backup';
$l['success_backup'] = 'Processo de backup concluído';
$l['error_backup'] = 'Processo de backup concluído com erros';
$l['exit_cli'] = 'Saindo da CLI';
$l['no_file2restore'] = 'Nenhum arquivo especificado para restaurar';
$l['no_db_backup'] = 'Arquivo de backup do banco de dados não encontrado';
$l['chck_backup_exits'] = 'Verificando se o arquivo de backup existe';
$l['strt_restore'] = 'Iniciando o processo de restauração';
$l['success_restore'] = 'Processo de restauração concluído';
$l['error_restore'] = 'Processo de restauração concluído com erros';
$l['send_email'] = 'Enviando email para o usuário';
$l['only_for_premium'] = 'Esse recurso está disponível apenas para usuários com licença Premium';
$l['err_no_owner'] = "Proprietário não é fornecido.\n";
$l['err_invalid_file'] = "Nome de arquivo inválido\n";
$l['acl_saved'] = 'Configuração salva com sucesso';
$l['acl_errr'] = 'Não foi possível salvar a configuração';
$l['err_unzipping'] = 'Ocorreu um erro ao descompactar os arquivos';
$l['invalid_import_file'] = 'Forneça um arquivo válido para importar configurações';
$l['no_access_url'] = 'Não foi possível acessar o arquivo de configurações de origem';
$l['no_write_tmpfile'] = 'Não foi possível gravar o arquivo temporário';
$l['file_not_exist'] = 'O arquivo não existe, forneça o caminho correto';
$l['no_root_user'] = 'Somente o usuário root pode importar as configurações de administrador';
$l['successfully_imported'] = 'Configurações importadas com sucesso';
$l['no_ins_found'] = 'Nenhuma instalação encontrada';

$l['cli_ftp_error'] = 'Erro ao conectar ao servidor FTP';
$l['err_fetch_file'] = 'Não foi possível acessar o arquivo carregado no domínio';
$l['err_fetch_path'] = 'Não foi possível buscar o caminho dos dados recebidos';
$l['cli_no_remote_import'] = 'A importação remota da CLI não é suportada para este script';
$l['cli_wrong_ftp_path'] = 'O caminho do FTP está incorreto';
$l['cli_ftp_error-1'] = 'Não foi possível resolver o nome de domínio';
$l['cli_ftp_error-2'] = 'Não foi possível fazer login com detalhes de FTP especificados';
$l['cli_ftp_error-3'] = 'Caminho do FTP não existe';
$l['invalid_backup_location'] = 'O local para backup é inexistente';
$l['invalid_access_token'] = 'Chave eletrônica de acesso inválida. Autorize novamente '.APP.' Dropbox APP na página Editar local de backup em '.APP.' painel de usuário final';
$l['insufficient_space'] = 'Sua conta do Dropbox está cheia. Libere algum espaço e tente o backup após algum tempo';

$l['err_default_backup_loc'] = 'O local padrão para backup está vazio. Selecione um local padrão para fazer o backup.';

$l['err_local_backup_disabled'] = 'O local de backup que você selecionou "Backups locais" foi desabilitado pelo administrador. Edite sua instalação e escolha outro local de backup.';

$l['gdrive_err_init'] = 'Ocorreram alguns erros ao iniciar o backup no Google Drive !!';
$l['gdrive_err_end'] = 'Ocorreram alguns erros ao confirmar o backup da sua conta do Google Drive!';
$l['pass_decrpyt_fail'] = 'Falha na descriptografia da senha.';
$l['ssh_conn_fail'] = 'Falha na conexão SSH com o servidor remoto';
$l['delete_temp_file'] = 'Excluindo arquivo de backup temporário';
$l['ssh_conn_success'] = 'Conexão SSH bem sucedida';
$l['bckp_dir_notfound'] = 'Diretório de backup não encontrado, criando';
$l['fail_bckp_dir'] = 'Falha ao criar o diretório de backup remoto';
$l['ssh_upload_start'] = 'Iniciando o upload SSH do arquivo de backup';
$l['ssh_upload_fail'] = 'Falha no upload do SSH';
$l['ssh_upload_success'] = 'Upload de SSH bem-sucedido';
$l['ssh_conn_close'] = 'Fechando a conexão SSH';
$l['ftp_conn_fail'] = 'Falha na conexão FTP';
$l['ftp_conn_success'] = 'Conexão FTP bem-sucedida';
$l['ftp_change_dir'] = 'Mudando para o diretório FTP';
$l['ftp_upload_fail'] = 'Falha no upload do FTP';
$l['ftp_upload_success'] = 'Upload de FTP bem-sucedido';
$l['ftp_conn_close'] = 'Fechando a conexão FTP';
$l['empty_server_list'] = 'Não foi possível obter a lista de servidores de backup';
$l['ftp_upload_start'] = 'Iniciando o upload por FTP do arquivo de backup';
$l['dwnlod_restore_fail'] = 'Não foi possível baixar o arquivo para Restauração';
$l['remote_del_fail'] = 'Não foi possível excluir o arquivo no servidor remoto';
$l['remote_del_success'] = 'Arquivo de backup remoto excluído com sucesso';
$l['no_server_id_filename'] = 'ID do servidor de backup e nome do arquivo não fornecidos!';
$l['cd_backup_location_fail'] = 'Não foi possível alterar o diretório para o local especificado';

$l['err_no_openssl'] = "A extensão Openssl é necessária para criptografar as senhas com o novo algoritmo de criptografia\n";
$l['err_no_mcrypt'] = "A extensão Mcrypt é necessária para descriptografar as senhas criptografadas com o antigo algoritmo de criptografia\n";
$l['add_backup_file'] = 'Arquivo de backup adicionado'; 
$l['err_include_extend'] = "\nFalha ao incluir funções para atualização de plugins/temas";
$l['err_access_ins'] = "\nErro ao acessar a instalação &soft-1; \n Ignorando a atualização de plug-ins/tema para esta instalação";
$l['note_partial_backup'] = 'Backup parcial realizado durante a atualização de plugins/tema';
$l['err_partial_backup_fail'] = 'O backup parcial não foi bem-sucedido, portanto, o cancelamento do processo de atualização de plugins/temas foi cancelado. A seguir estão os detalhes:';
$l['err_upgrade_extras'] = "\nOcorreram alguns erros ao atualizar o Tema e Plugins";
$l['upgraded_successfully_extras'] = "\nOs plug-ins/temas foram atualizados com sucesso para: ";
$l['err_upgrade_restore_failed_extras'] = 'Falha ao atualizar os plugins/tema E também falhou ao restaurar a partir do backup criado. A seguir estão os detalhes:';
$l['err_upgrade_restore_success_extras'] = 'Falha ao atualizar os plug-ins/tema, mas restaurados com êxito a partir do backup criado. A seguir estão os detalhes:';
$l['err_cannot_autoupgrade_extras'] = "A atualização automática de plugins/tema não pode ser executada neste painel de controle.\n";
$l['err_failed_attempt'] = "O plug-in/tema de atualização automática falhou da última vez, portanto, não é possível tentar a atualização.\n";
$l['cant_create_dir'] = "Não é possível criar o diretório ";
$l['err_cannot_install_plugin'] = "A instalação do plugin não pode ser realizada para este painel de controle.\n";
$l['err_invalid_sid'] = "O Script ID é inválido.\n";
$l['err_no_plugin_support'] = "O gerenciamento de plugins não é suportado neste script.\n";
$l['err_empty_slug'] = "Slug está ausente.\n";
$l['err_fail_install_plugin'] = "Falha ao instalar o plugin. Ocorreram os seguintes erros:\n";
$l['install_plugin_success'] = "Plugin instalado com sucesso\n";
// import_webuzo.php
$l['no_server_ip'] = 'IP do servidor não fornecido.';
$l['no_server_pass'] = 'Senha root do servidor não fornecida.';
$l['no_server_port'] = 'Porta do servidor não fornecida';
$l['no_server_mysql_pass'] = 'Senha do servidor mysql não fornecida.';
$l['no_migrate_type'] = 'Tipo de migração não fornecido.';
$l['invalid_migrate_type'] = 'Tipo de migração inválido.';
$l['migrate_finish'] = 'Webuzo de migração concluído.';
$l['migrate_conf_finish'] = 'Configurações de webuzo de migração concluídas.';
$l['migrate_user_account_finish'] = 'Migração de contas de usuário concluída.';
$l['migrate_databases_finish'] = 'Migração do bancos de dados concluído.';
$l['migrate_emails_finish'] = 'Terminou a migração de contas e dados de email.';
$l['migrate_ftp_finish'] = 'FTP de migração concluído.';
$l['mysql_not_same'] = 'A versão do MySQL nos dois servidores Webuzo não é a mesma.';
$l['webuzo_user_not_same'] = 'O nome de usuário Webuzo nos dois servidores Webuzo não é o mesmo.';
$l['sshpass_installed'] = 'O sshpass já está instalado no seu servidor.';
$l['remote_command_exec_fail'] = 'A execução do comando remoto falhou.';
$l['migrate_command_failed'] = 'Ocorreu um erro ao executar o comando';
$l['conn_fail'] = 'Falha na conexão com o servidor Webuzo.';

$l['cloning'] = 'Clonando ';
$l['staging'] = 'Criando ambiente ';
$l['pushtolive'] = 'Disponibilizar online ';
$l['cloning_complete'] = 'Clonagem concluída.';
$l['staging_complete'] = 'Ambiente concluído.';
$l['pushtolive_complete'] = 'Disponibilização online concluída.';
$l['unzipping_files'] = 'Copiando arquivos e pastas';
$l['prog_backingup'] = 'Fazendo backup ';
$l['panel_not_support'] = 'Este painel não suporta este utilitário.';

$l['checking_data'] = 'Verificando os dados enviados';
$l['prog_restoring'] = 'Restaurando '; // Dont remove the trailing space
$l['res_dir'] = 'Restaurando o diretório';
$l['res_db'] = 'Restaurando o banco de dados';
$l['res_datadir'] = 'Restaurando o diretório de dados';
$l['prog_restore_complete'] = 'Restauração completa';
$l['read_archive'] = 'Lendo o arquivo';
$l['pushtolive_backup_note'] = 'Backup criado antes de colocar o site em operação';

$l['license_refreshed'] = 'Sua licença foi atualizada!'; 
$l['updated_license'] = 'Os detalhes da licença atualizados são os seguintes:';

$l['err_no_universal'] = 'Não foi possível encontrar o universal.php';

$l['rbackup_disabled'] = 'Backup remoto está desativado pelo Administrador';
$l['rbackup_protocol_disabled'] = 'Backup em <b>&soft-1;</b> está desativado pelo Administrador';

// Show real version CLI utility strings
$l['show_real_version_no_outdated'] = 'Todas as instalações possuem a versão atualizado do '.APP.' no registro !';
$l['show_real_version_updates_list'] = 'A seguintes instalações não possuem uma versão atualizada do '.APP.' no registro ';
$l['show_real_version_user_ins'] = 'Instalações do usuário';
$l['installation_id'] = 'ID de Instalação';
$l['script_name'] = 'Nome do Script';
$l['version'] = 'Versão';
$l['real_version'] = 'Versão Real';
$l['installation_url'] = 'URL da Instalação';
$l['update_real_version_notice'] = 'Use o parâmetro --update_real_version para atualizar o '.APP.' no registro ';

$l['update_real_version_no_outdated'] = 'Nenhuma instalação encontrada com versão desatualizada em '.APP.' nos registros !';
$l['update_real_version_fail'] = 'Falha ao atualizar a versão em '.APP.' nos registros';
$l['update_real_version_list'] = 'As seguintes versões de instalações foram atualizadas em '.APP.' nos registros';

$l['fail_ftp_reconnect'] = 'Erro de timeout na conexão com o FTP. Falha ao tentar reconectar.';

