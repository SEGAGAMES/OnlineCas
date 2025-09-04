<?php

//////////////////////////////////////////////////////////////
//===========================================================
// software_lang.php
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

$l['no_info_file'] = 'Não foi possivel encontrar arquivo INFO.XML! Informe o administrador.';
$l['incompatible'] = 'O software necessita que uma versão mais recente do '.APP.' esteja instalada! Informe o administrador.';
$l['no_install'] = 'Não foi possivel encontrar o arquivo INSTALL.XML! Informe o administrador.';
$l['no_functions'] = 'Não foi possivel encontrar o arquivo INSTALL FUNCTIONS! Informe o administrador.';
$l['no_remove_functions'] = 'Não foi possível encontrar o arquivo REMOVE FUNCTIONS! Por favor, reporte isso ao administrador do servidor.';
$l['no_softdomain'] = 'Não é específico ou domínio para instalação do software.';
$l['wrong_softdomain'] = 'O caminho para o dominio especificado não foi encontrado.';
$l['softdirectory_exists'] = 'O diretório selecionado já existe! Insira outro nome de diretório.';
$l['no_space'] = 'Não possui espaço suficiente para instalação do software!';
$l['no_softdb'] = 'O banco de dados não foi públicado.';
$l['database_exists'] = 'Banco de dados já existente. Selecione um nome diferente.';
$l['databaseuser_exists'] = 'Usuário já existente. Selecione um nome de utilizador diferente.';
$l['db_name_long'] = 'O nome do banco de dados não pode ultrapassar o tamanho máximo de 7 letras. Insira um nome mais curto.';
$l['db_limit_crossed'] = 'Atingiu o numero máximo de banco de dados que pode criar, não é possivel continuar a instalação.';
$l['no_field'] = 'O campo <b>&soft-1;</b> é um campo obrigatório e deverá ser preenchido.';
$l['error_adddb'] = 'Impossível criar o banco de dados';
$l['error_add_dbuser'] = 'The database user could not be created';
$l['error_adduser'] = 'Erro ao adicionar usuário no banco de dados';
$l['no_package'] = 'O arquivo de instalação não foi encontrado!';
$l['no_decompress'] = 'Ocorreram alguns erros ao descompactar o arquivo de instalação.';
$l['mail_new_ins'] = 'Uma nova instalação do &soft-1; foi concluida. Detalhes abaixo:';
$l['mail_path'] = 'Diretório';
$l['mail_url'] = 'Endereço';
$l['mail_admin_url'] = 'URL do administrador'; 
$l['mail_admin'] = 'Usuário do administrador';
$l['mail_pass'] = 'Senha do administrador';
$l['mail_db'] = 'Banco de dados';
$l['mail_dbuser'] = 'Usuário do banco de dados';
$l['mail_dbhost'] = 'Host do banco de dados';
$l['mail_dbpass'] = 'Senha do banco de dados';
$l['mail_time'] = 'Data';
$l['mail_subject'] = 'Nova instalação do &soft-1;';
$l['no_cron_min'] = 'Não foram especificados minutos';
$l['no_cron_hour'] = 'Não foram especificadas horas';
$l['no_cron_day'] = 'Não foi especificado dia';
$l['no_cron_month'] = 'Não foi especificado mês';
$l['no_cron_weekday'] = 'Não foi especificado dia da semana';
$l['wrong_cron_min'] = 'Valor de minuto incorreto. Valores válidos 0-59 ou <b>*</b>';
$l['wrong_cron_hour'] = 'Hora incorreta. Valores válidos 0-23 ou <b>*</b>';
$l['wrong_cron_day'] = 'Dia incorreto. Valores válidos 1-31 ou <b>*</b>';
$l['wrong_cron_month'] = 'Mês incorreto. Valores válidos 1-12 ou <b>*</b>';
$l['wrong_cron_weekday'] = 'Dia da semana incorreto. Valores válidos 0-7 ou <b>*</b>';
$l['mail_cron'] = 'Tarefa';
$l['no_datadir'] = 'Não foi especificado diretório de dados';
$l['datadir_exists'] = 'O diretório de dados especificado já existe. Especifique um nome de diretório diferente.';
$l['no_decompress_data'] = 'Ocorreram alguns erros ao descompactar os arquivos.';
$l['mail_datadir'] = 'Diretório';
$l['some_files_exist'] = 'A instalação não pode prosseguir porque os seguintes arquivos já existem na pasta de destino: ';
$l['delete_files'] = 'Exclua esses arquivos ou escolha outra pasta.';
$l['overwrite_exist'] = '<b>OU</b> <br /><input type="checkbox" name="overwrite_existing" id="overwrite_existing" />&nbsp;&nbsp;<b><span style="color:#000;">Marque a caixa de seleção para substituir todos os arquivos e continuar</span></b>';
$l['checking_data'] = 'Verificando os dados enviados';
$l['unzipping_files'] = 'Copiando arquivos e pastas';
$l['unzipping_datadir'] = 'Descompactando arquivos de dados';
$l['prop_db'] = 'Propagando o banco de dados';
$l['finishing_process'] = 'Finalizando instalação';
$l['wait_note'] = '<b>Importante:</b> Isso pode levar de 3 a 4 minutos. Não saia desta página até que a barra de progresso atinja 100%';
$l['no_hostname'] = 'Digite o host do banco de dados';
$l['no_dbusername'] = 'Digite o usuário do banco de dados';
$l['no_dbuserpass'] = 'Digite a senha do banco de dados';
$l['softdirectory_invalid'] = 'O diretório digitado é inválido.';
$l['softdatadir_invalid'] = 'O diretório de dados digitado é inválido.';
$l['err_domain'] = 'Sem domínios';
$l['err_domain_admin'] = 'Este usuário não possui nenhum domínio. Entre em contato com o administrador.';
$l['err_pass_strength'] = 'A força da senha deve ser maior que ';
$l['no_https'] = 'Um certificado SSL confiável não foi encontrado';
$l['err_dbprefix'] = 'O prefixo da tabela é inválido. Os valores válidos são a-z ou A-Z ou 0-9 ou _';
$l['no_php_install'] = 'PHP não está instalado. Para instalá-lo, clique <a href="'.$globals['index'].'act=apps&app=1">aqui</a>';
$l['no_mysql_install'] = 'O MySQL não está instalado. Para instalá-lo, clique <a href="'.$globals['index'].'act=apps&app=16">aqui</a>';
$l['no_domain_verify'] = 'Não foi possível acessar seu domínio. Verifique se o seu domínio está apontando para este servidor e se não há nenhum arquivo .htaccess que restrinja o acesso ao seu domínio';
$l['auto_backup_not_allowed'] = 'A frequência de backup automático que você escolheu é inválida';
$l['invalid_script'] = 'ID de script inválido';
$l['no_domain_found'] = 'Nenhum domínio encontrado. Por favor, adicione um domínio para instalar o script';
$l['not_php_script'] = 'Este script não está em PHP';

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['install'] = 'Instalar';
$l['overview'] = 'Resumo';
$l['features'] = 'Características';
$l['demo'] = 'Demonstração';
$l['ratings'] = 'Avaliação';
$l['import'] = 'Importar';
$l['software_ver'] = 'Versão';
$l['space_req'] = 'Espaço necessário';
$l['available_space'] = 'Espaço disponivel';
$l['req_space'] = 'Espaço necessário';
$l['mb'] = 'MB';
$l['software_support'] = 'Suporte';
$l['support_link'] = 'Visitar site do Suporte';
$l['support_note'] = 'Importante: O Softaculous não dá suporte a nenhum dos softwares listados.';
$l['setup'] = 'Configuração';
$l['choose_domain'] = 'Selecione o dominio';
$l['choose_domain_exp'] = 'Selecione o dominio onde pretende instalar a ferramenta.';
$l['choose_url'] = 'Escolha a URL de instalação';
$l['choose_url_exp'] = 'Por favor, escolha o URL para instalar a ferramenta';
$l['in_directory'] = 'Diretório';
$l['in_directory_exp'] = 'O diretório é relativo ao seu dominio <b>e não deverá existir</b>. EX: Para instalar em http://dominio/directorio/ insira apenas <b>directorio</b>. Para instalar na raiz do dominio http://dominio/ deixe este campo em branco.';
$l['database_name'] = 'Banco de dados';
$l['database_name_exp'] = 'Insira o nome para o banco de dados que será criado no processo de instalação';
$l['softcopy_note'] = '<b>Importante</b>: Este software necessita de ser instalado usando os seus próprios meios. Deverá visitar o endereço mostrado assim que os ficheiros sejam copiados para o directório de instalação.';
$l['softsubmit'] = 'Instalar';
$l['congrats'] = 'Ferramenta instalado com sucesso';
$l['succesful'] = 'foi instalado com sucesso e pode ser acessado pelo domínio';
$l['admin_url'] = 'Acesso ao painel da ferramenta';
$l['setup_continue'] = 'Contudo, a configuração será concluida pelo próprio software. Para concluir a instalação, visite o seguinte endereço';
$l['enjoy'] = 'Esperemos que o processo de instalação tenha sido facil.';
$l['install_notes'] = 'Abaixo encontram-se algumas notas importantes. Recomenda-mos que as leia cuidadosamente ';
$l['please_note'] = '<b>Importante</b>: O '.APP.' é apenas um instalador automático da ferramenta, caso necessite de suporte, você deverá obter junto a empresa da respectiva ferramenta!';
$l['regards'] = 'Obrigado';
$l['softinstaller'] = APP;
$l['return'] = 'Voltar';
$l['current_ins'] = 'Instalações atuais';
$l['link'] = 'Link';
$l['ins_time'] = 'Data';
$l['version'] = 'Versão';
$l['upd_to'] = 'Atualizar para';
$l['remove'] = 'Remover';
$l['no_info'] = 'Sem detalhes';
$l['randpass'] = 'Gerar senha aleatória';
$l['ratesoft'] = 'Votar nesta ferramenta';
$l['reviews'] = 'Comentários';
$l['reviewsoft'] = 'Escrever uma avaliação';
$l['readreviews'] = 'Ler comentários';
$l['reviews_exp'] = 'Ler comentários públicadas por outros utilizadores e';
$l['cron_job'] = 'Tarefas agendadas';
$l['cron_job_exp'] = 'Para um correto funcionamento, esta ferramenta necessita de uma tarefa agendada. Especifique os parâmetros da mesma, caso os desconheça deixe este campo em branco!';
$l['cron_min'] = 'Minutos';
$l['cron_hour'] = 'Horas';
$l['cron_day'] = 'Dias';
$l['cron_month'] = 'Mêses';
$l['cron_weekday'] = 'Dias da semana';
$l['datadir'] = 'Diretório de dados';
$l['datadir_exp'] = 'Este script necessita guardar os seus dados em um diretório não acessível na internet. Será criado no seu diretório atual. EX: se especificou <b>diretorio</b> o mesmo será criado em - /home/USUARIO/<b>diretorio</b>';
$l['db_alpha_num'] = 'Apenas caracteres alfanuméricos são permitidos para o nome do banco de dados.';
$l['overwrite'] = 'Sobrescrever arquivos';
$l['ins_emailto'] = 'Enviar detalhes da instalação por e-mail para';
$l['choose_protocol'] = 'Escolher protocolo';
$l['choose_protocol_exp'] = 'Se o seu site possui SSL, escolha o protocolo HTTPS.';
$l['ins_url'] = 'Your installation URL';
$l['create_template'] = 'Create Template';
$l['clone'] = 'Clonar';
$l['backup'] = 'Backup';
$l['options'] = 'Opções';
$l['admin'] = 'Administração';
$l['more_versions'] = 'More versions';
$l['notify_ver'] = 'Notificar '.$globals['sn'].' sobre nova versão';
$l['notifyversion'] = 'Obrigado por informar sobre a nova versão. Vamos analisar o mais rápido possível';
$l['del_insid'] = 'Tem certeza de que deseja remover as instalações selecionadas? A ação será irreversível. \n Não serão necessárias mais confirmações.';
$l['rem_inst_id'] = 'Removendo a instalação - ';
$l['no_sel_inst'] = 'Nenhuma instalação selecionada para remover.';
$l['inst_remvd'] = 'As instalações selecionadas foram removidas. A página agora será recarregada!';
$l['remove'] = 'Remover';
$l['go'] = 'Ir';
$l['screenshots'] = 'Imagens';
$l['downloading'] = 'Fazendo download';
$l['installing'] = 'Instalando ferramenta';
$l['editdetail'] = 'Editar detalhes';
$l['publish'] = 'Publicando na internet';
$l['hostname'] = 'Hostname do banco de dados';
$l['hostname_exp'] = 'Hostname do banco de dados (principalmente <b>localhost</b>)';
$l['dbusername'] = 'Usuário do banco de dados';
$l['dbusername_exp'] = 'O usuário do banco de dados';
$l['dbuserpass'] = 'Senha do banco de dados';
$l['dbuserpass_exp'] = 'A senha do banco de dados';
$l['database_name_exp_aefer'] = 'Digite o nome do banco de dados a ser usado para a instalação';
$l['sel_version'] = 'Selecionar versão';
$l['choose_version_exp'] = 'Por favor, selecione a versão para instalar.';
$l['choose_version'] = 'Escolha a versão que você deseja instalar';
$l['select'] = 'Selecione';
$l['release_date'] = 'Data de lançamento';
$l['adv_option'] = 'Opções avançadas';
$l['disable_notify_update'] = 'Desativar e-mails de notificação de atualização';
$l['exp_disable_notify_update'] = 'Se marcado, você não receberá uma notificação por email das atualizações disponíveis para esta instalação.';
$l['prog_installing'] = 'Instalando '; // Dont remove trailing space
$l['prog_install_complete'] = 'Instalação completa.';
$l['eu_auto_upgrade'] = 'Atualização automática da ferramenta';
$l['exp_eu_auto_upgrade'] = 'Selecione a preferência de atualização automática para esta instalação quando uma nova versão estiver disponível';
$l['auto_upgrade_plugins'] = 'Atualização automática de plugins';
$l['exp_auto_upgrade_plugins'] = 'Se marcado, os plugins instalados para esta ferramenta serão atualizados automaticamente para a versão mais recente quando a instalação da ferramenta for atualizada.';
$l['auto_upgrade_themes'] = 'Atualização automática de temas';
$l['exp_auto_upgrade_themes'] = 'Se marcado, os plugins instalados para esta ferramenta serão atualizados automaticamente para a versão mais recente quando a instalação da ferramenta for atualizada.';
$l['auto_upgrade_enabled'] = 'Atualização automática habilitada';
$l['bad'] = 'Ruim';
$l['good'] = 'Bom';
$l['strong'] = 'Forte';
$l['short'] = 'Curta';
$l['strength_indicator'] = 'Indicador de força';
$l['auto_backup'] = 'Backups automatizados';
$l['exp_auto_backup'] = APP.' fará backups automatizados via CRON de acordo com a frequência que você selecionar';
$l['auto_backup_rotation'] = 'Rotação de backup';
$l['exp_auto_backup_rotation'] = 'Se o limite de rotação do backup for atingido '.APP.' excluirá o backup mais antigo desta instalação e criará um novo backup. Os backups utilizarão seu espaço, portanto escolha a rotação de backup de acordo com o espaço disponível em seu servidor';
$l['no_backup'] = 'Não fazer backup';
$l['daily'] = 'Uma vez por dia';
$l['weekly'] = 'Uma vez por semana';
$l['monthly'] = 'Uma vez por mês';
$l['unlimited'] = 'Ilimitado';
$l['changelog'] = 'Atualizações';
$l['act_upgrade'] = 'Atualizado recentemente';
$l['act_clone'] = 'Recentemente Clonado';
$l['act_backup'] = 'Backup recente';
$l['act_install'] = 'Instalado recentemente';
$l['act_edit'] = 'Editado recentemente';
$l['act_import'] = 'Importado recentemente';
$l['act_restore'] = 'Restaurado recentemente';
$l['act_template_restored'] = 'Restored from Template';
$l['act_staging'] = 'Recently Staged';
$l['act_pushtolive'] = 'Recently Pushed to Live';
$l['ampps_download'] = 'Você pode utilizar a ferramenta <b>&soft-1;</b> no seu <b>computador local</b> usando nossa ferramenta gratuita, o Softaculous AMPPS. Clique <a href="https://www.ampps.com/downloads" target="_blank"><b>aqui</b></a> para download <a href="https://www.ampps.com/downloads" target="_blank"><img src="https://images.softaculous.com/ampps.gif" height="25" /></a>';

$l['install_tweet_sub'] = 'Informe seus amigos sobre seu novo site';

$l['choose_theme'] = 'Selecionar Tema';
$l['clear_theme'] = 'Limpar seleção';
$l['installing_theme'] = 'Instalando tema';
$l['cant_download_theme'] = 'Não foi possível baixar os arquivos do tema';
$l['no_theme_package'] = 'Não foi possível encontrar o pacote de instalação do tema!';
$l['unzipping_theme_files'] = 'Copiando arquivos e pastas de temas';
$l['use_this_theme'] = 'Selecione este';
$l['err_auto_backup_limit'] = 'A rotação de backup automático não pode ser superior a <b>&soft-1;</b>';
$l['select_domain'] = 'Selecione um domínio';
$l['refresh'] = 'Atualizar';
$l['purchase'] = 'Comprar';
$l['your_purchased'] = 'Contratado ';//trailing space is required
$l['your_purchased_times'] = ' vezes';
$l['err_theme_not_bought'] = 'Você não comprou o tema, portanto não pôde instalá-lo!';
$l['err_theme_reached_limit'] = 'Por favor, compre este tema e tente instalá-lo novamente. Você atingiu o limite de instalação deste tema.';
$l['payment_heading'] = 'Comprar tema';
$l['payment_redirect'] = 'Você será redirecionado para o pagamento ';//trailing space is required
$l['close'] = 'Fechar';
$l['free'] = 'Gratuito';
$l['select'] = 'Selecionar';
$l['theme_is_optional'] = '<b>Importante</b>: A escolha do tema agora é opcional. Se não selecionado, o tema padrão será instalado';
$l['with_selected'] = 'Executar em selecionados';
$l['related_scripts'] = 'Ferramentas relacionadas';

$l['date_added'] = 'Data adicionada';
$l['downloaded'] = 'Transferido';

$l['soft_ins_exists'] = 'Já existe uma instalação no &soft-1; conforme nossos registros. Para reinstalar o aplicativo, desinstale a instalação existente!';
$l['install_now'] = 'Instale agora';
$l['my_apps'] = 'Meus aplicativos';

$l['backup_location'] = 'Local do backup';
$l['backup_location_exp'] = 'Escolha o local de backup a ser usado durante o backup desta instalação';
$l['default'] = 'Padrão';
$l['invalid_backup_location'] = 'O local de backup enviado não existe';
$l['local_folder'] = 'Local da pasta';

$l['custom_autobackup'] = 'Personalizado';
$l['custom_autobackup_cron'] = 'Backups automatizados por Cron';
$l['custom_autobackup_cron_exp'] = 'Especifique os horários da cron para backups automatizados';

//Errors for autobcakup cron settings
$l['wrong_autobackup_cron_min'] = 'A cron em minutos do backup automatizado está errado. Os valores válidos são 0-59 ou *';
$l['wrong_autobackup_cron_hour'] = 'A cron em horas do backup automatizado está errado. Os valores válidos são 0-23 ou *';
$l['wrong_autobackup_cron_day'] = 'A cron em dias do backup automatizado está errado. Os valores válidos são 1-31 ou *';
$l['wrong_autobackup_cron_month'] = 'A cron em meses do backup automatizado está errado. Os valores válidos são 1-12 ou *';
$l['wrong_autobackup_cron_weekday'] = 'A cron em dias da semana do backup automatizado está errado. Os valores válidos são 0-7 ou *';

$l['quick_install'] = 'Instalação rápida';
$l['custom_install'] = 'Instalação personalizada';

$l['outdated_script'] = '<b>&soft-1;</b> não foi atualizado por mais de dois anos e não pode mais ser mantido ou suportado pelo fornecedor do script';

$l['pushtolive'] = 'Publicar';
$l['staging'] = 'Criar ambiente';

$l['dont_auto_upgrade'] = 'Não atualizar automaticamente'; 
$l['minor_auto_upgrade'] = 'Atualizar para versão superior mais próxima'; 
$l['major_auto_upgrade'] = 'Atualizar para última versão superior (indicado)'; 
$l['auto_upgrade_major'] = '(Maior e menor)'; 
$l['auto_upgrade_minor'] = '(Menor)'; 

$l['err_fetch_key'] = 'Não foi possível buscar a chave da API PFX no momento';
$l['ampps_notify_premium'] = 'Esse recurso está disponível na versão premium do AMPPS. Por favor, contrate o <b><a href="https://ampps.com/clients">AMPPS Premium</a></b>';

$l['view_items'] = 'Listar itens no pacote';
$l['ok'] = 'OK';
$l['plugins'] = 'Plugins';
$l['themes'] = 'Temas';
$l['empty_set'] = 'Atualmente não há itens no pacote!';

$l['error_max_ins_script'] = 'Você atingiu o número máximo de (<b>&soft-1;</b>) instalações permitidas pela ferramenta';
$l['error_max_backup_script'] = 'Você atingiu o número máximo de (<b>&soft-1;</b>) backups permitidas pela ferramenta';
$l['error_max_clone_script'] = 'Você atingiu o número máximo de (<b>&soft-1;</b>) clones permitidas pela ferramenta';
$l['error_max_staging_script'] = 'Você atingiu o número máximo de (<b>&soft-1;</b>) ambientes permitidas pela ferramenta';

$l['remove_complete'] = 'Remover completamente';
$l['remove_info'] = 'Remover de '.APP;
$l['manage_sets'] = 'Gerenciar pacotes de plugins/temas';
$l['manage_plugin_sets'] = 'Gerenciar pacotes de plugins';
$l['manage_theme_sets'] = 'Gerenciar pacotes de temas';

$l['rbackup_disabled'] = 'Backup on remote locations is disabled by Admin';
$l['rbackup_protocol_disabled'] = 'Backup on <b>&soft-1;</b> is disabled by Admin';

$l['wordpress_manager'] = 'Manage your installation with WordPress Manager';
$l['login_exp'] = 'Login as admin';

$l['return_to_wpm'] = 'Return to WordPress Management';

$l['featured_plugins_pro'] = '<b style="color:green;">PRO</b> version of the marked Plugins will be installed for Free';
$l['plugin_not_found'] = 'Unable to find plugin folder';
$l['theme_not_found'] = 'Unable to find theme folder';