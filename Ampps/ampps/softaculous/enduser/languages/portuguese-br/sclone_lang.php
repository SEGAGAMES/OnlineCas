<?php

//////////////////////////////////////////////////////////////
//===========================================================
// sclone_lang.php
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
$l['wrong_ins_title'] = 'ID de Instalação Incorreta';
$l['wrong_ins'] = 'O ID de instalação fornecido não existe';
$l['no_info_file'] = 'O arquivo INFO.XML está ausente! Verifique com o suporte.';
$l['incompatible'] = 'O software requer uma versão mais recente do '.APP.' ! Por favor, informe isso ao administrador do servidor.';
$l['no_install'] = 'O arquivo INSTALL.XML está ausente! Verifique com o suporte.';
$l['no_functions'] = 'Não foi possível encontrar o arquivo CLONE FUNCTIONS! Por favor, reporte isso ao administrador do servidor.';
$l['no_clone'] = 'No Clone';
$l['no_softdomain'] = 'Você não escolheu um domínio para instalar o software.';
$l['wrong_softdomain'] = 'O caminho do domínio selecionado não pôde ser encontrado.';
$l['softdirectory_exists'] = 'O diretório que você digitou já existe! Por favor, digite outro diretório.';
$l['no_space'] = 'Você não possui espaço suficiente para instalar este software!';
$l['no_softdb'] = 'O banco de dados não foi publicado.';
$l['database_exists'] = 'O banco de dados já existe. Por favor, escolha um nome diferente.';
$l['databaseuser_exists'] = 'O usuário do banco de dados já existe. Por favor, escolha um nome diferente.';
$l['db_name_long'] = 'O nome do banco de dados não pode ultrapassar o tamanho máximo de 7 letras. Insira um nome mais curto.';
$l['db_limit_crossed'] = 'O número máximo de bancos de dados que você pode criar foi atingido, então a instalação não pode prosseguir.';
$l['cloning'] = 'Clonando Instalação';
$l['downloading'] = 'Baixando Pacote';
$l['cant_clone_db'] = 'Não foi possível clonar o banco de dados';
$l['fail_create'] = 'Falha ao criar Diretório';
$l['fail_create_datadir'] = 'Falha ao criar Diretório de Dados';
$l['cant_clone_dir'] = 'O diretório não pode ser clonado, pois é o diretório home.';
$l['cant_connect_mysql'] = 'Não foi possível conectar ao banco de dados, verifique o nome de usuário/senha do seu banco de dados. Se alterado, atualize os detalhes em '.APP.' >> Instalações >> "Editar detalhes".';
$l['same_ins'] = 'Não é possível clonar uma instalação dentro do mesmo diretório';
$l['ins_exists'] = 'Você já tem o <b>&soft-1;</b> instalado no local escolhido';
$l['ins_recursive'] = 'Você não pode clonar a instalação em um subdiretório da instalação original';
$l['no_clone_support'] = 'A clonagem não é suportada por este software';
$l['invalid_script'] = 'ID de script inválido';
$l['no_domain_found'] = 'Domínio não encontrado. Adicione um Domínio para instalar este script.';

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
$l['no_datadir'] = 'Diretório Data não informado';
$l['datadir_exists'] = 'O diretório de dados que você informou já existe. Por favor, especifique outro.';
$l['no_decompress_data'] = 'Ocorreram alguns erros ao descompactar os arquivos.';
$l['some_files_exist'] = 'A instalação não pode prosseguir porque os seguintes arquivos já existem na pasta de destino: ';
$l['delete_files'] = 'Exclua esses arquivos ou escolha outra pasta.';
$l['overwrite_exist'] = '<b>Ou</b> <br /><input type="checkbox" name="overwrite_existing" id="overwrite_existing" />&nbsp;&nbsp;<b><span style="color:#000;">Marque a caixa de seleção para substituir todos os arquivos e continuar</span></b>';
$l['prog_cloning'] = 'Clonando '; // Dont remove trailing space
$l['prog_cloning_complete'] = 'Clonagem Concluída.';
$l['checking_data'] = 'Verificando os dados enviados';
$l['unzipping_files'] = 'Copiando arquivos e pastas';
$l['unzipping_datadir'] = 'Descompactando arquivo de dados';
$l['prop_db'] = 'Propagando o banco de dados';
$l['finishing_process'] = 'Finalizando Clonagem';
$l['wait_note'] = '<b>Importante:</b> Isso pode levar de 3 a 4 minutos. Não saia desta página até que a barra de progresso atinja 100%';
$l['no_hostname'] = 'Informe o Hostname do Banco de Dados';
$l['no_dbusername'] = 'Informe o Usuário do Banco de Dados';
$l['no_dbuserpass'] = 'Informe a Senha do Banco de Dados';
$l['softdirectory_invalid'] = 'O diretório que você digitou é inválido.';
$l['softdatadir_invalid'] = 'O diretório data informado é inválido.';
$l['err_domain'] = 'Nenhum Domínio';
$l['err_domain_admin'] = 'Este usuário não possui qualquer Domínio. Verifique com o Administrador.';
$l['no_https'] = 'Nenhum certificado SSL válido foi encontrado';
$l['no_php_install'] = 'PHP não está instalado. Para instalá-lo, clique <a href="'.$globals['index'].'act=apps&app=1">aqui</a>';
$l['no_mysql_install'] = 'O MySQL não está instalado. Para instalá-lo, clique <a href="'.$globals['index'].'act=apps&app=16">aqui</a>';
$l['no_field'] = 'O campo <b>&soft-1;</b> é obrigatório e deve ser preenchido.';
$l['error_adddb'] = 'O banco de dados não pôde ser criado';
$l['error_adduser'] = 'Ocorreu um erro ao adicionar um usuário ao novo banco de dados';
$l['no_package'] = 'Não foi possível encontrar o pacote de instalação!';
$l['no_decompress'] = 'Ocorreram alguns erros na descompactação dos arquivos do pacote.';

//Theme Strings
$l['<title>'] = APP.' - Clone de Instalação';
$l['info'] = 'Detalhes';
$l['ins_softname'] = 'Software';
$l['ins_num'] = 'Número da Instalação';
$l['ins_ver'] = 'Versão';
$l['ins_time'] = 'Data da Instalação';
$l['ins_path'] = 'Caminho';
$l['ins_url'] = 'URL';
$l['ins_admin_url'] = 'URL do Administrador';
$l['ins_db'] = 'Nome do banco de dados';
$l['ins_dbuser'] = 'Usuário do banco de dados';
$l['ins_dbpass'] = 'Senha do banco de dados';
$l['ins_dbhost'] = 'Host do banco de dados';
$l['ins_datadir'] = 'Diretório Data';
$l['ins_wwwdir'] = 'Diretório Web';
$l['ins_wwwurl'] = 'URL do Diretório Web';
$l['ins_cron_command'] = 'Comando CRON';
$l['cloned'] = 'A instalação foi clonada com sucesso';
$l['clone_ins'] = 'Detalhes do clone desta instalação';
$l['cloneins'] = 'Clonar Instalação';
$l['choose_protocol'] = 'Escolher Protocolo';
$l['choose_protocol_exp'] = 'Se o site possui SSL, então escolha o protocolo HTTPS (Recomendado).';
$l['cron_job'] = 'Tarefas Agendadas';
$l['cron_job_exp'] = 'Para um correto funcionamento, este software necessita de uma tarefa agendada. Especifique os parâmetros da mesma, caso os desconheça deixe este campo em branco!';
$l['cron_min'] = 'Minutos';
$l['cron_hour'] = 'Horas';
$l['cron_day'] = 'Dia';
$l['cron_month'] = 'Mês';
$l['cron_weekday'] = 'Dia da Semana';
$l['datadir'] = 'Diretório Data';
$l['datadir_exp'] = 'Este script requer que seus dados sejam armazenados em uma pasta não acessível via web. Ele será criado em sua pasta home. Exemplo: Se você especificar <b>data</b> será criado o seguinte - /home/usuario/<b>data</b>';
$l['db_name_long'] = 'O nome do banco de dados não pode ultrapassar o tamanho máximo de 7 letras. Insira um nome mais curto.';
$l['db_alpha_num'] = 'Apenas caracteres alfanuméricos são permitidos para o nome do banco de dados.';
$l['overwrite'] = 'Sobrescrever Arquivos';
$l['database_exists'] = 'O banco de dados já existe. Por favor, escolha um nome diferente.';
$l['no_softdomain'] = 'Você não escolheu um domínio para instalar o software.';
$l['wrong_softdomain'] = 'O caminho do domínio selecionado não pôde ser encontrado.';
$l['no_space'] = 'Você não possui espaço suficiente para instalar este software!';
$l['no_softdb'] = 'O banco de dados não foi publicado.';
$l['choose_domain'] = 'Selecione o Domínio';
$l['choose_domain_exp'] = 'Selecione o domínio onde deseja instalar o software.';
$l['in_directory'] = 'no Diretório';
$l['in_directory_exp'] = 'O diretório é relativo ao seu domínio e <b>não deve existir</b>. Exemplo. Para instalar em https://dominio.com.br/site/ digite apenas <b>site</b>. Para instalar em https://dominio.com.br/ deixe em branco.';
$l['database_name'] = 'Nome do Banco de Dados';
$l['database_name_exp'] = 'Insira o nome para o banco de dados que será criado no processo de instalação.';
$l['softcopy_note'] = '<b>Importante</b>: Este software requer que seja instalado usando o próprio utilitário de instalação. Visite a URL que será exibida depois que os arquivos forem copiados para concluir o processo de instalação.';
$l['softsubmit'] = 'Clonar';
$l['congrats'] = 'Parabéns, a instalação foi clonada com sucesso';
$l['succesful'] = 'foi clonado com sucesso em';
$l['admin_url'] = 'Endereço de Administração';
$l['setup_continue'] = 'A configuração será concluída através do próprio software. Visite a seguinte URL';
$l['enjoy'] = 'Esperamos que o processo de instalação tenha sido fácil.';
$l['install_notes'] = 'Abaixo estão algumas observações importantes. É recomendável que você as leia ';
$l['please_note'] = '<b>Importante</b>: O '.APP.' é apenas um script de instalação automatizada não dando suporte aos softwares e scripts instalados. Visite o site do fornecedor do software para obter suporte!';
$l['regards'] = 'Obrigado';
$l['softinstaller'] = APP.' Instalador';
$l['return'] = 'Voltar para Visão Geral';
$l['return_to_wpm'] = 'Voltar ao WordPress Management';

// These strings are for Softaculous Remote
$l['hostname'] = 'Hostname do Banco de Dados';
$l['hostname_exp'] = 'Host do MySQL (geralmente <b>localhost</b>)';
$l['dbusername'] = 'Usuário do Banco de Dados';
$l['dbusername_exp'] = 'Usuário do banco de dados MySQL';
$l['dbuserpass'] = 'Senha do Banco de Dados';
$l['dbuserpass_exp'] = 'A senha do usuário do banco de dados MySQL';
$l['database_name_exp_aefer'] = 'Digite o nome do banco de dados a ser usado para a instalação';

$l['clone_tweet_sub'] = 'Conte aos seu amigos';

$l['soft_ins_exists'] = 'Já existe uma instalação em &soft-1; conforme nossos registros. Para clonar o aplicativo neste local, desinstale o aplicativo existente!';

$l['no_sclone'] = 'O arquivo CLONE.XML está ausente! Verifique com o suporte.';
$l['no_functions'] = 'Não foi possível encontrar o arquivo CLONE FUNCTIONS! Por favor, reporte isso ao administrador do servidor.';

$l['clone_push_bg'] = 'O processo de clonagem está sendo executado em segundo plan'; 
$l['err_mysql_db'] = 'O nome do banco de dados MySQL está incorreto, pois o banco de dados não pôde ser selecionado.';

$l['error_max_clone_script'] = 'Você atingiu o número máximo de (<b>&soft-1;</b>) clones permitidos';

$l['choose_url'] = 'URL para Instalação';
$l['choose_url_exp'] = 'Escolha a URL para instalar o software';

$l['ampps_notify_premium'] = 'Este recurso está disponível apenas na versão Premium do AMPPS. Adquira o <b><a href="https://ampps.com/clients">AMPPS Premium</a></b>';

$l['failed_rsync'] = 'Falha ao sincronizar arquivos de instalação';
$l['failed_rsync_datadir'] = 'Falha ao sincronizar arquivos do diretório data';
$l['wp_cli_replace_fail'] = 'Falha ao substituir dados na instalação de destino (utilizando wp-cli)';

$l['error_table_exists'] = 'A tabela <b>&soft-1;</b> já existe no banco de dados';
$l['db_details_mismatch'] = 'Os detalhes do banco de dados no arquivo de configuração não correspondem aos detalhes registrados no Softaculous';
$l['fetch_db_details'] = 'Permitir que o Softaculous obtenha os detalhes do banco de dados da sua instalação durante a clonagem?';