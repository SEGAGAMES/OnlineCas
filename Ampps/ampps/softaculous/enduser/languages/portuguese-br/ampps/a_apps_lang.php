<?php

//////////////////////////////////////////////////////////////
//===========================================================
// apps_lang.php
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
$l['mail_cron'] = 'Cron Job';
$l['no_datadir'] = 'Diretório Data não informado';
$l['datadir_exists'] = 'O diretório de dados que você informou já existe. Por favor, especifique outro.';
$l['no_decompress_data'] = 'Ocorreram alguns erros ao descompactar os arquivos.';
$l['mail_datadir'] = 'Diretório de dados';
$l['some_files_exist'] = 'A instalação não pode prosseguir porque os seguintes arquivos já existem na pasta de destino: ';
$l['delete_files'] = 'Exclua esses arquivos ou escolha outra pasta.';
$l['overwrite_exist'] = '<b>OR</b> <br />Select the checkbox to overwrite all files and continue';
$l['checking_data'] = 'Installing Application';
$l['checking_dependencies'] = 'Computing the dependencies to be installed';
$l['installing_dependencies'] = 'Installing the dependencies';
$l['installing_package'] = 'Installing the application';
$l['unzipping_files'] = 'Copiando arquivos e pastas';
$l['wait_note'] = '<b>Importante:</b> Isso pode levar de 3 a 4 minutos. Não saia desta página até que a barra de progresso atinja 100%';
$l['no_hostname'] = 'Informe o Hostname do Banco de Dados';
$l['no_dbusername'] = 'Informe o Usuário do Banco de Dados';
$l['no_dbuserpass'] = 'Informe a Senha do Banco de Dados';
$l['softdirectory_invalid'] = 'O diretório que você digitou é inválido.';
$l['softdatadir_invalid'] = 'O diretório data informado é inválido.';
$l['no_installation'] = 'No installation found';
$l['no_dep_found'] = 'Could not find dependency <b>&soft-1;</b> for <b>&soft-2;</b>';
$l['err_dep_install'] = 'There was an error installing dependency <b>&soft-1;</b> for <b>&soft-2;</b>';
$l['err_extract'] = 'There was an error extracting the package -';
$l['err_dep_remove'] = '<b>&soft-1;</b> is required by <b>&soft-2;</b>. Select the <b>Remove Dependent Application(s)</b> check box to continue.';
$l['no_app_info'] = 'Could not find the applications information';
$l['ins_finishing_process'] = 'Finishing Installation';
$l['rem_finishing_process'] = 'Removed Successfully';

$l['prog_removing'] = 'Removing ';// Dont remove the trailing space
$l['prog_remove_complete'] = 'Installation Removed.';
$l['disable_sysapps'] = 'This functionality has been disabled from the Webuzo Admin Panel';
$l['no_cli_force'] = 'Please use --force to install this application. Since conflicting app is already installed.';
$l['conflict_check_box'] = 'Please tick the checkbox to install ';

//Theme Strings
$l['win'] = 'Windows';
$l['lin'] = 'Linux';
$l['mac'] = 'Mac OS';
$l['title'] = 'App';
$l['<title>'] = $globals['sn'];
$l['install'] = 'Instalar';
$l['overview'] = 'Visão Geral';
$l['features'] = 'Recursos';
$l['demo'] = 'Demonstração';
$l['ratings'] = 'Avaliações';
$l['import'] = 'Importar';
$l['desc'] = 'Desc';
$l['c_path'] = 'Path';
$l['binary'] = 'Server Binary';
$l['conf'] = 'Conf';
$l['software_ver'] = 'Versão';
$l['space_req'] = 'Espaço Necessário';
$l['available_space'] = 'Espaço Disponível';
$l['req_space'] = 'Espaço Necessário';
$l['mb'] = 'MB';
$l['filezill'] = 'FileZilla';
$l['software_support'] = 'Suporte ao Software';
$l['note'] = 'Note:';
$l['restart_ampps'] = 'Please turn off Ampps and start again for changes to take effect';
$l['software_note'] = 'You can not remove Default Application';
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
$l['succesful'] = 'foi instalado com sucesso.';
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
$l['installing'] = 'Instalando Aplicativo';

$l['removing'] = 'Removing Application';
$l['editdetail'] = 'Editar Detalhes';
$l['publish'] = 'Publicar na Web';
$l['hostname'] = 'Hostname do Banco de Dados';
$l['hostname_exp'] = 'Host do MySQL (geralmente <b>localhost</b>)';
$l['dbusername'] = 'Usuário do Banco de Dados';
$l['dbusername_exp'] = 'Usuário do banco de dados MySQL';
$l['dbuserpass'] = 'Senha do Banco de Dados';
$l['dbuserpass_exp'] = 'A senha do usuário do banco de dados MySQL';
$l['database_name_exp_aefer'] = 'Digite o nome do banco de dados a ser usado para a instalação';
$l['sel_version'] = 'Select Version';
$l['choose_version_exp'] = 'Please select the version to install.';
$l['choose_version'] = 'Choose the version you want to install';
$l['select'] = 'Select';
$l['release_date'] = 'Data do Lançamento';
$l['adv_option'] = 'Opções Avançadas';
$l['disable_notify_update'] = 'Desativar Notificações de Atualização';
$l['exp_disable_notify_update'] = 'Se marcado, você não receberá uma notificação por email das atualizações disponíveis para esta instalação.';
$l['prog_installing'] = 'Instalando '; // Dont remove trailing space
$l['prog_install_complete'] = 'Instalação Concluída.';
$l['iagree'] = 'I agree to the Terms and Conditions of &soft-1; License';
$l['notes'] = 'Notes';
$l['uninstalled'] = 'The Application was removed successfully';
$l['install_tweet_sub'] = 'Conte aos seus amigos sobre seu novo site';
$l['not_in_free'] = '<b>&soft-1;</b> cannot be installed in the Free version of Webuzo. Please upgrade to the premium version of Webuzo!';

?>