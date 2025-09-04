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

$l['no_info_file'] = 'O arquivo INFO.XML está ausente! Verifique com o suporte.';
$l['incompatible'] = 'O software requer uma versão mais recente do '.APP.' ! Por favor, informe isso ao administrador do servidor.';
$l['no_install'] = 'O arquivo INSTALL.XML está ausente! Verifique com o suporte.';
$l['no_functions'] = 'Não foi possível encontrar o arquivo INSTALL FUNCTIONS! Por favor, reporte isso ao administrador do servidor.';
$l['no_softdomain'] = 'Você não escolheu um domínio para instalar o software.';
$l['wrong_softdomain'] = 'O caminho do domínio selecionado não pôde ser encontrado.';
$l['softdirectory_exists'] = 'O diretório que você digitou já existe! Por favor, digite outro diretório.';
$l['no_space'] = 'Você não possui espaço suficiente para instalar este software!';
$l['no_softdb'] = 'O banco de dados não foi publicado.';
$l['database_exists'] = 'O banco de dados já existe. Por favor, escolha um nome diferente.';
$l['databaseuser_exists'] = 'O usuário do banco de dados já existe. Por favor, escolha um nome diferente.';
$l['db_name_long'] = 'O nome do banco de dados não pode ultrapassar o tamanho máximo de 7 letras. Insira um nome mais curto.';
$l['db_limit_crossed'] = 'O número máximo de bancos de dados que você pode criar foi atingido, então a instalação não pode prosseguir.';
$l['no_field'] = 'O campo <b>&soft-1;</b> é obrigatório e deve ser preenchido.';
$l['error_adddb'] = 'O banco de dados não pôde ser criado';
$l['error_adduser'] = 'Ocorreu um erro ao adicionar um usuário ao novo banco de dados';
$l['no_package'] = 'Não foi possível encontrar o pacote de instalação!';
$l['no_decompress'] = 'Ocorreram alguns erros na descompactação dos arquivos do pacote.';
$l['mail_new_ins'] = 'A instalação do &soft-1; foi concluída. Os detalhes estão abaixo:';
$l['mail_path'] = 'Caminho';
$l['mail_url'] = 'URL';
$l['mail_admin_url'] = 'Admin URL';
$l['mail_admin'] = 'Usuário Admin';
$l['mail_pass'] = 'Senha do administrador';
$l['mail_db'] = 'Banco de dados MySQL';
$l['mail_dbuser'] = 'Usuário MySQL';
$l['mail_dbhost'] = 'Host do MySQL';
$l['mail_dbpass'] = 'Senha do MySQL';
$l['mail_time'] = 'Data da instalação';
$l['mail_subject'] = 'Nova instalação do &soft-1;';
$l['no_cron_min'] = 'Os minutos para execução da cron não foram informados';
$l['no_cron_hour'] = 'As horas para execução da cron não foram informadas';
$l['no_cron_day'] = 'Os dias para execução da cron não foram informados';
$l['no_cron_month'] = 'Os meses para execução da cron não foram informados';
$l['no_cron_weekday'] = 'Os dias da semana para execução da cron não foram informados';
$l['wrong_cron_min'] = 'Cron por minuto está incorreto. Valores válidos são entre 0-59 ou <b>*</b>';
$l['wrong_cron_hour'] = 'Cron por hora está incorreto. Valores válidos são entre 0-23 ou <b>*</b>';
$l['wrong_cron_day'] = 'Cron diária está incorreto. Valores válidos são entre 1-31 ou <b>*</b>';
$l['wrong_cron_month'] = 'Cron mensal está incorreto. Valores válidos são entre 1-12 ou <b>*</b>';
$l['wrong_cron_weekday'] = 'Cron semanal está incorreto. Valores válidos são entre 0-7 ou <b>*</b>';
$l['mail_cron'] = 'Cron';
$l['no_datadir'] = 'Diretório Data não informado';
$l['datadir_exists'] = 'O diretório de dados que você informou já existe. Por favor, especifique outro.';
$l['no_decompress_data'] = 'Ocorreram alguns erros ao descompactar os arquivos.';
$l['mail_datadir'] = 'Diretório de dados';
$l['some_files_exist'] = 'A instalação não pode prosseguir porque os seguintes arquivos já existem na pasta de destino: ';
$l['delete_files'] = 'Exclua esses arquivos ou escolha outra pasta.';
$l['overwrite_exist'] = '<b>Ou</b> <br /><input type="checkbox" name="overwrite_existing" id="overwrite_existing" />&nbsp;&nbsp;<b><span style="color:#000;">Marque a caixa de seleção para substituir todos os arquivos e continuar</span></b>';
$l['www_files_exist'] = 'A instalação não pode prosseguir pois já existem arquivos no diretório Web';
$l['no_decompress_www'] = 'Ocorreram alguns erros na descompactação dos arquivos Web.';
$l['no_config_perl_path'] = 'Ocorreu um erro ao configurar arquivos CGI.';
$l['mail_wwwdir'] = 'Diretório web';
$l['checking_data'] = 'Verificando os dados enviados';
$l['unzipping_files'] = 'Copiando arquivos e pastas';
$l['unzipping_datadir'] = 'Descompactando arquivo de dados';
$l['prop_db'] = 'Propagando o banco de dados';
$l['finishing_process'] = 'Finalizando instalação';
$l['wait_note'] = '<b>Importante:</b> Isso pode levar de 3 a 4 minutos. Não saia desta página até que a barra de progresso atinja 100%';
$l['softdirectory_invalid'] = 'O diretório que você digitou é inválido.';
$l['softdatadir_invalid'] = 'O diretório data informado é inválido.';
$l['wwwdir_invalid'] = 'O diretório WWW informado é inválido.';
$l['err_pass_strength'] = 'A força da senha deve ser maior que ';
$l['no_https'] = 'Nenhum certificado SSL válido foi encontrado';
$l['err_dbprefix'] = 'O prefixo da tabela é inválido. Os valores válidos são a-z ou A-Z ou 0-9 ou _';
$l['no_perl_install'] = 'PERL não está instalado. Para instalar, clique <a href="'.$globals['index'].'act=apps&app=19">aqui</a>';
$l['no_mysql_install'] = 'MySQL não está instalado. Para instalar, clique <a href="'.$globals['index'].'act=apps&app=16">aqui</a>';
$l['auto_backup_not_allowed'] = 'A frequência do auto backup escolhido é inválido';
$l['invalid_script'] = 'ID de script inválido';
$l['not_perl_script'] = 'Este script não está em PERL';

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['install'] = 'Instalar';
$l['overview'] = 'Visão Geral';
$l['features'] = 'Recursos';
$l['demo'] = 'Demonstração';
$l['ratings'] = 'Avaliações';
$l['import'] = 'Importar';
$l['software_ver'] = 'Versão';
$l['space_req'] = 'Espaço Necessário';
$l['available_space'] = 'Espaço Disponível';
$l['req_space'] = 'Espaço Necessário';
$l['mb'] = 'MB';
$l['software_support'] = 'Suporte ao Software';
$l['support_link'] = 'Site do Suporte';
$l['support_note'] = 'Importante: O Softaculous não dá suporte a nenhum dos softwares listados.';
$l['setup'] = 'Configurar Software';
$l['choose_domain'] = 'Selecione o Domínio';
$l['choose_domain_exp'] = 'Selecione o domínio onde deseja instalar o software.';
$l['in_directory'] = 'no Diretório';
$l['in_directory_exp'] = 'O diretório é relativo ao seu domínio e <b>não deve existir</b>. Exemplo. Para instalar em https://dominio.com.br/site/ digite apenas <b>site</b>. Para instalar em https://dominio.com.br/ deixe em branco.';
$l['database_name'] = 'Nome do Banco de Dados';
$l['database_name_exp'] = 'Insira o nome para o banco de dados que será criado no processo de instalação.';
$l['softcopy_note'] = '<b>Importante</b>: Este software requer que seja instalado usando o próprio utilitário de instalação. Visite a URL que será exibida depois que os arquivos forem copiados para concluir o processo de instalação.';
$l['softsubmit'] = 'Instalar';
$l['congrats'] = 'Parabéns, o software foi instalado com sucesso';
$l['succesful'] = 'foi instalado com sucesso em';
$l['admin_url'] = 'Endereço de Administração';
$l['setup_continue'] = 'A configuração será concluída através do próprio software. Visite a seguinte URL';
$l['enjoy'] = 'Esperamos que o processo de instalação tenha sido fácil.';
$l['install_notes'] = 'Abaixo estão algumas observações importantes. É recomendável que você as leia ';
$l['please_note'] = '<b>Importante</b>: O '.APP.' é apenas um script de instalação automatizada não dando suporte aos softwares e scripts instalados. Visite o site do fornecedor do software para obter suporte!';
$l['regards'] = 'Obrigado';
$l['softinstaller'] = APP.' Instalador';
$l['return'] = 'Voltar para Visão Geral';
$l['current_ins'] = 'Instalações Existentes';
$l['link'] = 'Link';
$l['ins_time'] = 'Data da Instalação';
$l['version'] = 'Versão';
$l['upd_to'] = 'Atualizar para';
$l['remove'] = 'Remover';
$l['no_info'] = 'Sem Informações';
$l['randpass'] = 'Gerar Senha Aleatória';
$l['ratesoft'] = 'Avalie este Software';
$l['reviews'] = 'Comentários';
$l['reviewsoft'] = 'Escrever um Comentário';
$l['readreviews'] = 'Ler Comentários';
$l['reviews_exp'] = 'Ler comentários de outros usuários e ';
$l['cron_job'] = 'Tarefas Agendadas';
$l['cron_job_exp'] = 'Para um correto funcionamento, este software necessita de uma tarefa agendada. Especifique os parâmetros da mesma, caso os desconheça deixe este campo em branco!';
$l['cron_min'] = 'Minutos';
$l['cron_hour'] = 'Horas';
$l['cron_day'] = 'Dia';
$l['cron_month'] = 'Mês';
$l['cron_weekday'] = 'Dia da Semana';
$l['datadir'] = 'Diretório Data';
$l['datadir_exp'] = 'Este script requer que seus dados sejam armazenados em uma pasta não acessível via web. Ele será criado em sua pasta home. Exemplo: Se você especificar <b>data</b> será criado o seguinte - /home/usuario/<b>data</b>';
$l['db_alpha_num'] = 'Apenas caracteres alfanuméricos são permitidos para o nome do banco de dados.';
$l['overwrite'] = 'Sobrescrever Arquivos';
$l['ins_emailto'] = 'Envie os detalhes da instalação para o seguinte email ';
$l['choose_protocol'] = 'Escolher Protocolo';
$l['choose_protocol_exp'] = 'Se o site possui SSL, então escolha o protocolo HTTPS (Recomendado).';
$l['clone'] = 'Clonar';
$l['backup'] = 'Backup';
$l['options'] = 'Opções';
$l['admin'] = 'Administração';
$l['notify_ver'] = 'Notifique '.$globals['sn'].' sobre uma nova versão';
$l['notifyversion'] = 'Obrigado por informar sobre a nova versão. Vamos analisar o mais rápido possível';
$l['del_insid'] = 'Tem certeza de que deseja remover as instalações selecionadas? A ação é irreversível. \nNenhuma outra confirmação será solicitada.';
$l['rem_inst_id'] = 'Removendo Instalação - ';
$l['no_sel_inst'] = 'Nenhuma instalação foi selecionada para remoção.';
$l['inst_remvd'] = 'A instalação selecionada foi removida. A página será recarregada agora!';
$l['remove'] = 'Remover';
$l['go'] = 'Prosseguir';
$l['screenshots'] = 'Imagens';
$l['downloading'] = 'Baixando Pacote';
$l['installing'] = 'Instalando Script';
$l['editdetail'] = 'Editar Detalhes';
$l['wwwdir'] = 'Diretório Web';
$l['wwwdir_exp'] = 'Informe um diretório que seja acessível pela web';
$l['publish'] = 'Publicar na Web';
$l['release_date'] = 'Data do Lançamento';
$l['adv_option'] = 'Opções Avançadas';
$l['disable_notify_update'] = 'Desativar notificações de atualização por email';
$l['exp_disable_notify_update'] = 'Se marcado, você não receberá uma notificação por email das atualizações disponíveis para esta instalação.';
$l['prog_installing'] = 'Instalando '; // Dont remove trailing space
$l['prog_install_complete'] = 'Instalação Concluída.';
$l['bad'] = 'Ruim';
$l['good'] = 'Bom';
$l['strong'] = 'Forte';
$l['short'] = 'Curta';
$l['strength_indicator'] = 'Indicador de Força';
$l['auto_backup'] = 'Backups Automáticos';
$l['exp_auto_backup'] = APP.' fará backups automatizados via CRON de acordo com a frequência que você selecionar';
$l['auto_backup_rotation'] = 'Rotação de Backup';
$l['exp_auto_backup_rotation'] = 'Se o limite de rotação do backup for atingido '.APP.' excluirá o backup mais antigo desta instalação e criará um novo backup. Os backups utilizarão seu espaço, portanto escolha a rotação de backup de acordo com o espaço disponível em seu servidor';
$l['no_backup'] = 'Não Gerar Backup';
$l['daily'] = 'Diário';
$l['weekly'] = 'Semanal';
$l['monthly'] = 'Mensal';
$l['unlimited'] = 'Ilimitado';
$l['changelog'] = 'Atualizações';
$l['act_upgrade'] = 'Atualizado Recentemente';
$l['act_clone'] = 'Clonado Recentemente';
$l['act_backup'] = 'Backup Recente';
$l['act_install'] = 'Instalado Recentemente';
$l['act_edit'] = 'Editado Recentemente';
$l['act_import'] = 'Importado Recentemente';
$l['act_restore'] = 'Restaurado Recentemente';
$l['ampps_download'] = 'Você pode desenvolver/utilizar o <b>&soft-1;</b> diretamente no seu <b>computador</b> usando nossa ferramenta gratuita, o Softaculous AMPPS. Clique <a href="https://www.ampps.com/downloads" target="_blank"><b>aqui</b></a> para baixar <a href="https://www.ampps.com/downloads" target="_blank"><img src="https://images.softaculous.com/ampps.gif" height="25" /></a>';

$l['install_tweet_sub'] = 'Conte aos seus amigos sobre seu novo site';
$l['err_auto_backup_limit'] = 'A rotação de backup automático não pode ser superior a <b>&soft-1;</b>';
$l['select_domain'] = 'Selecione o Domínio';
$l['with_selected'] = 'Executar em Selecionados';
$l['related_scripts'] = 'Scripts Relacionados';

$l['soft_ins_exists'] = 'Já existe uma instalação em &soft-1; conforme nossos registros. Para reinstalar o aplicativo, desinstale o aplicativo existente!';
$l['install_now'] = 'instale agora';
$l['my_apps'] = 'Meus aplicativos';

$l['backup_location'] = 'Local do Backup';
$l['backup_location_exp'] = 'Escolha o local onde será realzado o backup da sua instalação.';
$l['default'] = 'Padrão';
$l['invalid_backup_location'] = 'O local para backup é inexistente';
$l['local_folder'] = 'Local da Pasta';

$l['custom_autobackup'] = 'Personalizado';
$l['custom_autobackup_cron'] = 'Backups Automatizados por CRON';
$l['custom_autobackup_cron_exp'] = 'Especifique os horários da CRON para backups automatizados';

//Errors for autobcakup cron settings
$l['wrong_autobackup_cron_min'] = 'Cron em minutos está incorreto. Valores aceitos entre 0-59 ou *';
$l['wrong_autobackup_cron_hour'] = 'Cron em horas está incorreto. Valores aceitos entre 0-23 ou *';
$l['wrong_autobackup_cron_day'] = 'Cron diária está incorreto. Valores aceitos entre 1-31 ou *';
$l['wrong_autobackup_cron_month'] = 'Cron mensal está incorreto. Valores aceitos entre 1-12 ou *';
$l['wrong_autobackup_cron_weekday'] = 'Cron semanal está incorreto. Valores aceitos entre 0-7 ou *';

$l['quick_install'] = 'Instalação Rápida';
$l['custom_install'] = 'Instalação Personalizada';

$l['outdated_script'] = '<b>&soft-1;</b> não foi atualizado por mais de dois anos e pode não ser mais mantido ou suportado pelo fornecedor do script';
$l['ampps_notify_premium'] = 'Este recurso está disponível apenas na versão Premium do AMPPS. Adquira o <b><a href="https://ampps.com/clients">AMPPS Premium</a></b>';

$l['choose_url'] = 'URL para Instalação';
$l['choose_url_exp'] = 'Escolha a URL para instalar o software';

$l['error_max_ins_script'] = 'Você atingiu o limite de (<b>&soft-1;</b>) instalações permitidas';

$l['rbackup_disabled'] = 'Backup remoto está desativado pelo Administrador';
$l['rbackup_protocol_disabled'] = 'Backup em <b>&soft-1;</b> está desativado pelo Administrador';
$l['database_name_exp_aefer'] = 'Digite o nome do banco de dados a ser usado para a instalação';
$l['remove_info'] = 'Remover de '.APP;