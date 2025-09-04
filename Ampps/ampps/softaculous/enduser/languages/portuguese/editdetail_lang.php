<?php

//////////////////////////////////////////////////////////////
//===========================================================
// editdetail_lang.php
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
$l['wrong_ins'] = 'O ID da instalação que você enviou não existe';
$l['cant_remove_dir'] = 'O diretório não pode ser removido, pois é o diretório inicial. Desmarque a opção <b>Remover diretório</b> para continuar sem remover o diretório.';
$l['no_dir'] = 'The installation directory does not exists !';
$l['no_datadir'] = 'The data directory does not exists !';
$l['empty_datadir'] = 'The data directory cannot be empty';
$l['no_wwwdir'] = 'The Web directory does not exists !';
$l['wrong_url'] = 'The URL and DIRECTORY name do not match';
$l['wrong_wwwurl'] = 'The WEB URL and WEB DIRECTORY name do not match';
$l['err_mysql_user'] = 'The MySQL Username or Password or Database host is wrong as a connection could not be established.';
$l['err_mysql_db'] = 'The MySQL database name is incorrect as the database could not be selected.';
$l['mail_path'] = 'Path';
$l['mail_url'] = 'URL';
$l['mail_db'] = 'Banco de dados MySQL';
$l['mail_dbuser'] = 'Usuário do banco de dados MySQL';
$l['mail_dbhost'] = 'Host do banco de dados MySQL';
$l['mail_dbpass'] = 'Senha do banco de dados MySQL';
$l['mail_time'] = 'Data da instalação';
$l['mail_editdetail_time'] = 'Tempo de modificações';
$l['mail_subject'] = 'Detalhes de instalação modificados de &soft-1;';
$l['mail_cron_command'] = 'Cron';
$l['mail_datadir'] = 'Diretório de dados';
$l['mail_wwwdir'] = 'Diretório web';
$l['mail_wwwurl'] = 'URL do diretório web';

//Theme Strings
$l['<title>'] = APP.' - Editar detalhes';
$l['ins_details'] = 'Detalhes da instalação';
$l['info'] = 'Informações';
$l['ins_softname'] = 'Ferramenta';
$l['ins_num'] = 'Número da instalação';
$l['ins_ver'] = 'Versão';
$l['ins_time'] = 'Data da instalação';
$l['ins_path'] = 'Caminho';
$l['ins_url'] = 'URL';
$l['ins_admin_url'] = 'URL do administrador';
$l['ins_db'] = 'Nome do banco de dados';
$l['ins_dbuser'] = 'Usuário do banco de dados';
$l['ins_dbpass'] = 'Senha do banco de dados';
$l['ins_dbhost'] = 'Host do banco de dados';
$l['ins_datadir'] = 'Diretório de dados';
$l['ins_wwwdir'] = 'Diretório web';
$l['ins_wwwurl'] = 'URL do diretório web';
$l['ins_cron_command'] = 'Comando Cron';
$l['details_edited'] = 'Os detalhes da instalação foram editados com sucesso';
$l['version_edited'] = 'A versão foi atualizada em nossos registros.';
$l['return'] = 'Voltar';
$l['return_to_wpm'] = 'Return to WordPress Management';

$l['edit_ins'] = 'Editar detalhes da instalação';
$l['edit_dir'] = 'Diretório';
$l['edit_datadir'] = 'Diretório de dados';
$l['edit_db'] = 'Nome do banco de dados';
$l['edit_dbuser'] = 'Usuário do banco de dados';
$l['edit_dbpass'] = 'Senha do banco de dados';
$l['edit_dbhost'] = 'Host do banco de dados';
$l['edit_url'] = 'URL';
$l['editins'] = 'Salvar detalhes da instalação';
$l['mail_editdetail_ins'] = 'Os detalhes da instalação do &soft-1; foi modificado. A seguir estão os detalhes modificados da instalação: ';
$l['edit_wwwdir'] = 'Diretório web';
$l['edit_wwwurl'] = 'URL do diretório web';
$l['disable_notify_update'] = 'Desativar e-mails de notificação de atualização';
$l['exp_disable_notify_update'] = 'Se marcado, você não receberá uma notificação por email das atualizações disponíveis para esta instalação.';
$l['alreadyupdated'] = 'Hmm ... parece que a versão atual da instalação é <b>&soft-1;</b> e não <b>&soft-2;</b>. Clique aqui para atualizar '.APP.' registros.';
$l['edit_acc_detail'] = 'Editar detalhes da conta de administrador';
$l['eu_auto_upgrade'] = 'Atualização automática';
$l['exp_eu_auto_upgrade'] = 'Selecione a preferência de atualização automática para esta instalação quando uma nova versão estiver disponível';
$l['auto_upgrade_plugins'] = 'Atualização automática &soft-1; Plugins';
$l['exp_auto_upgrade_plugins'] = 'Se marcado, todo o ativo &soft-1; Os plug-ins instalados para esta instalação serão atualizados automaticamente para a versão mais recente quando a instalação do script for atualizada.';
$l['auto_upgrade_themes'] = 'Atualização automática &soft-1; Temas';
$l['exp_auto_upgrade_themes'] = 'Se marcado, o ativo &soft-1; O tema desta instalação será atualizado automaticamente para a versão mais recente quando a instalação do script for atualizada.';
$l['auto_backup'] = 'Backups automáticos';
$l['exp_auto_backup'] = APP.' fará backups automatizados via CRON de acordo com a frequência que você selecionar';
$l['auto_backup_rotation'] = 'Rotação de backup';
$l['exp_auto_backup_rotation'] = 'Se o limite de rotação do backup for atingido '.APP.' excluirá o backup mais antigo desta instalação e criará um novo backup. Os backups utilizarão seu espaço, portanto escolha a rotação de backup de acordo com o espaço disponível em seu servidor';
$l['no_backup'] = 'Não fazer backup';
$l['daily'] = 'Uma vez por dia';
$l['weekly'] = 'Uma vez por semana';
$l['monthly'] = 'Uma vez por mês';
$l['unlimited'] = 'Ilimitado';
$l['auto_backup_not_allowed'] = 'A frequência de backup automático que você escolheu é inválida';

$l['no_edit'] = 'Não foi possível encontrar o arquivo EDIT.XML! Por favor, reporte isso ao administrador do servidor.';
$l['no_functions'] = 'Não foi possível encontrar o arquivo EDIT FUNCTIONS! Por favor, reporte isso ao administrador do servidor.';
$l['no_field'] = 'O campo <b>&soft-1;</b> é obrigatório e deve ser preenchido.';
$l['err_auto_backup_limit'] = 'A rotação de backup automático não pode ser maior que <b>&soft-1;</b>';
$l['select_files'] = 'Selecione arquivos/pastas adicionais';
$l['select_files_exp'] = 'Por favor, selecione os arquivos/pastas adicionais associados a esta instalação. <br/> Esta lista será usada para operações como Clone, Backup e Remoção desta instalação';
$l['invalid_files_in_post_list'] = 'Alguns arquivos/pastas inválidos foram selecionados';
$l['select_files_list'] = 'Selecione arquivos/pastas adicionais na lista a seguir';

$l['select_files_backup'] = 'Use os arquivos / pastas selecionados acima para Backup';
$l['select_files_backup_exp'] = 'Se selecionado, apenas será feito o backup dos arquivos/pastas relacionados a esta instalação. <br/> Por padrão, o backup incluirá todos os arquivos/pastas nesse caminho';
$l['no'] = 'Não (faça backup de todos os arquivos e pastas no diretório de instalação, excluindo subdomínios)';
$l['yes'] = 'Sim (faça backup de arquivos/pastas de aplicativos padrão, juntamente com os arquivos/pastas selecionados acima)';
$l['check_all_edit'] = 'Verificar tudo';

$l['choose_theme'] = 'Instalação do tema';
$l['clear_theme'] = 'Limpar seleção';
$l['installing_theme'] = 'Instalando tema';
$l['cant_download_theme'] = 'Não é possível fazer o download dos arquivos do tema';
$l['no_theme_package'] = 'Não foi possível encontrar o pacote de instalação do tema!';
$l['unzipping_theme_files'] = 'Copiando arquivos e pastas de temas';
$l['use_this_theme'] = 'Selecione';
$l['demo'] = 'Demonstração';
$l['refresh'] = 'Atualizar';
$l['purchase'] = 'Comprar';
$l['close'] = 'Fechar';
$l['free'] = 'Gratuito';
$l['select'] = 'Selecionar';
$l['theme_is_optional'] = '<b>Importante</b>: Isso é opcional. Selecione apenas se você deseja alterar seu tema atual.';
$l['your_purchased'] = 'Comprado ';//trailing space is required
$l['your_purchased_times'] = ' Vez(es)';
$l['err_theme_not_bought'] = 'Você não comprou o tema, portanto não pôde instalá-lo!';
$l['err_theme_reached_limit'] = 'Por favor, compre este tema e tente instalá-lo novamente. Você atingiu o limite de instalação deste tema.';
$l['payment_heading'] = 'Comprar tema';
$l['payment_redirect'] = 'Você será redirecionado ao pagamento ';//trailing space is required
$l['date_added'] = 'Data adicionada';
$l['downloaded'] = 'Download';
$l['edit_dbpass_exp'] = 'Nova senha do banco de dados. <br/> Deixe em branco se não desejar atualizar a senha';
$l['select_tables'] = 'Selecionar tabelas adicionais do banco de dados';
$l['select_tables_exp'] = 'As tabelas selecionadas serão incluídas no backup do banco de dados';

$l['backup_loc'] = 'Local do backup';
$l['exp_backup_loc'] = 'Escolha o local de backup a ser usado durante o backup desta instalação';
$l['default'] = 'Padrão';
$l['invalid_backup_location'] = 'O local de backup enviado não existe';
$l['local_folder'] = 'Local da pasta';

$l['cron_min'] = 'Minuto';
$l['cron_hour'] = 'Hora';
$l['cron_day'] = 'Dia';
$l['cron_month'] = 'Mês';
$l['cron_weekday'] = 'Dias da semana';

$l['no_cron_min'] = 'Os minutos para execução da cron não foram informados';
$l['no_cron_hour'] = 'As horas para execução da cron não foram informadas';
$l['no_cron_day'] = 'Os dias para execução da cron não foram informados';
$l['no_cron_month'] = 'Os meses para execução da cron não foram informados';
$l['no_cron_weekday'] = 'Os dias da semana para execução da cron não foram informados';

$l['custom_autobackup'] = 'Personalizado';
$l['custom'] = 'Tempo personalizado para execução da cron';
$l['custom_autobackup_cron'] = 'Backups automatizados Cron';
$l['custom_autobackup_cron_exp'] = 'Especifique os horários da cron para backups automatizados';

//Errors for autobcakup cron settings
$l['wrong_autobackup_cron_min'] = 'A cron em minutos do backup automatizado está errado. Os valores válidos são de 0 a 59 ou um *';
$l['wrong_autobackup_cron_hour'] = 'A cron em horas do backup automatizado está errado. Os valores válidos são de 0-23 or a *';
$l['wrong_autobackup_cron_day'] = 'A cron em dias do backup automatizado está errado. Os valores válidos são de 1-31 or a *';
$l['wrong_autobackup_cron_month'] = 'A cron em mêses do backup automatizado está errado. Os valores válidos são de 1-12 or a *';
$l['wrong_autobackup_cron_weekday'] = 'A cron em dias da semana do backup automatizado está errado. Os valores válidos são de 0-7 or a *';

$l['done'] = 'Concluído';
$l['error'] = 'Erro';
$l['plugins_upgrade_now'] = 'Atualizar plug-in(s) agora';
$l['theme_upgrade_now'] = 'Atualizar tema agora';
$l['plugins_upgrade_success'] = 'Plugin(s) atualizado(s) com sucesso!';
$l['theme_upgrade_success'] = 'Tema atualizado com sucesso!';
$l['fetch_db_details'] = 'Permitir que o Softaculous busque os detalhes do banco de dados?';

$l['edit_notes'] = 'A seguir, algumas notas importantes. É altamente recomendável que você os leia ';
$l['domain_not_in_list'] = 'A URL publicado não está na sua lista de domínios'; 

$l['dont_auto_upgrade'] = 'Não atualizar automaticamente'; 
$l['minor_auto_upgrade'] = 'Atualize para <b>versões secundárias</b> apenas'; 
$l['major_auto_upgrade'] = 'Atualize para qualquer versão mais recente disponível (<b>Principal</b> e também <b>Menor</b>)'; 
$l['auto_upgrade_major'] = '(Maior e menor)'; 
$l['auto_upgrade_minor'] = '(Menor)';

$l['wpc_return'] = 'Voltar';

$l['rbackup_disabled'] = 'Backup on remote locations is disabled by Admin';
$l['rbackup_protocol_disabled'] = 'Backup on <b>&soft-1;</b> is disabled by Admin';
$l['no_files'] = 'installation files missing!!';

$l['softwp_license'] = 'SoftWP License';
$l['softwp_gen_license'] = 'Generate SoftWP License';
$l['softwp_re_gen_license'] = 'Regenerate SoftWP License';
$l['only_wp'] = 'Only Wordpress Installations are allowed';