<?php

//////////////////////////////////////////////////////////////
//===========================================================
// pushtolive_lang.php
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
$l['no_space'] = 'Você não possui espaço suficiente para instalar este software!';
$l['pushing'] = 'Enviando Instalação para Produção';
$l['staging'] = 'Criando Ambiente';
$l['downloading'] = 'Baixando Pacote';
$l['cant_push_db'] = 'Não foi possível enviar banco de dados';
$l['fail_create'] = 'Falha ao criar Diretório';
$l['fail_create_datadir'] = 'Falha ao criar Diretório de Dados';
$l['cant_copy_dir'] = 'O diretório não pode ser copiado porque é o diretório home';
$l['cant_connect_mysql'] = 'Não foi possível conectar ao banco de dados, verifique o nome de usuário/senha do seu banco de dados. Se alterado, atualize os detalhes em '.APP.' >> Instalações >> "Editar detalhes".';
$l['failed_backup'] = 'Não foi possível criar o backup antes de enviar a instalação para produção';

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
$l['prog_pushtolive'] = 'Colocar em Produção';
$l['prog_push_complete'] = 'Envio para produção concluído';
$l['checking_data'] = 'Verificando os dados enviados';
$l['unzipping_files'] = 'Copiando arquivos e pastas';
$l['unzipping_datadir'] = 'Descompactando arquivo de dados';
$l['prop_db'] = 'Propagando o banco de dados';
$l['finishing_process'] = 'Finalizando o envio para produção';
$l['wait_note'] = '<b>Importante:</b> Isso pode levar de 3 a 4 minutos. Não saia desta página até que a barra de progresso atinja 100%';

$l['no_php_install'] = 'PHP não está instalado. Para instalá-lo, clique <a href="'.$globals['index'].'act=apps&app=1">aqui</a>';
$l['no_mysql_install'] = 'O MySQL não está instalado. Para instalá-lo, clique <a href="'.$globals['index'].'act=apps&app=16">aqui</a>';
$l['no_field'] = 'O campo <b>&soft-1;</b> é obrigatório e deve ser preenchido.';
$l['error_adddb'] = 'O banco de dados não pôde ser criado';
$l['error_adduser'] = 'Ocorreu um erro ao adicionar um usuário ao novo banco de dados';
$l['no_package'] = 'Não foi possível encontrar o pacote de instalação!';
$l['no_decompress'] = 'Ocorreram alguns erros na descompactação dos arquivos do pacote.';
$l['no_pushtolive_support'] = 'O Envio para Produção não é suportado por este Script';
$l['invalid_script'] = 'ID de script inválido';
$l['no_domain_found'] = 'Domínio não encontrado. Adicione um Domínio para instalar este script.';
$l['no_staging_ins'] = 'Esta instalação não é uma instalação de preparação';
$l['pushtolive_backup_note'] = 'Backup criado antes de colocar o site em produção';
$l['pushtolive_partial_backup_note'] = 'Backup criado antes de colocar o site em produção\' (Pode ser um backup parcial)';

//Theme Strings
$l['<title>'] = APP.' - Enviar Instalação para Produção';
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
$l['default_push'] = 'Push padrão';
$l['custom_push'] = 'Personalizar Push';
$l['current_to_live'] = 'Desvincular esta instalação da produção';

$l['overwrite'] = 'Sobrescrever Arquivos';
$l['database_exists'] = 'O banco de dados já existe. Por favor, escolha um nome diferente.';
$l['no_softdomain'] = 'Você não escolheu um domínio para instalar o software.';
$l['wrong_softdomain'] = 'O caminho do domínio selecionado não pôde ser encontrado.';
$l['no_space'] = 'Você não possui espaço suficiente para instalar este software!';
$l['no_softdb'] = 'O banco de dados não foi publicado.';

$l['softcopy_note'] = '<b>Importante</b>: Este software requer que seja instalado usando o próprio utilitário de instalação. Visite a URL que será exibida depois que os arquivos forem copiados para concluir o processo de instalação.';
$l['softsubmit'] = 'Enviar para Produção';
$l['congrats'] = 'Parabéns, o software foi enviado para produção com sucesso';
$l['succesful'] = 'O Site foi colocado em produção com sucesso em';
$l['admin_url'] = 'Endereço de Administração';
$l['setup_continue'] = 'A configuração será concluída através do próprio software. Visite a seguinte URL';
$l['enjoy'] = 'Esperamos que o processo tenha sido fácil.';
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

$l['pushtolive_tweet_sub'] = 'Conte aos seu amigos';

$l['soft_ins_exists'] = 'Já existe uma instalação em &soft-1; conforme nossos registros. Para clonar o aplicativo neste local, desinstale o aplicativo existente!';

$l['no_sclone'] = 'O arquivo CLONE.XML está ausente! Verifique com o suporte.';
$l['no_functions'] = 'Não foi possível encontrar o arquivo CLONE FUNCTIONS! Por favor, reporte isso ao administrador do servidor.';

$l['pushtolive_bg'] = 'Enviando para Produção em segundo plano';
$l['err_mysql_db'] = 'O nome do banco de dados MySQL está incorreto, pois o banco de dados não pôde ser selecionado.';
$l['err_mysql_db_live'] = 'O nome do banco de dados MySQL da instalação em produção está incorreto, pois o banco de dados não pôde ser selecionado.';

$l['push_btn'] = 'Configurações Padrão';
$l['custom_push_btn'] = 'Personalizar';
$l['push'] = 'Enviar para Produção';
$l['prog_pushing'] = 'Enviando para Produção';
$l['overwrite_files'] = 'Sobrescrever Arquivos e Pastas';
$l['overwrite_files_exp'] = 'Se marcado os arquivos e pastas do site em produção serão substituídos';
$l['structural_change'] = 'Houve alterações na estrutura do banco de dados';
$l['table_data_change'] = 'Houve alterações nos dados da tabela';
$l['no_structural_change'] = 'Não houve alterações na estrutura do banco de dados';
$l['no_table_data_change'] = 'Não houve alterações nos dados da tabela';
$l['select_tables'] = 'Selecione banco de dados alterado';
$l['select_tables_exp'] = 'Selecione a estrutura/dados alterados do banco de dados que você gostaria de enviar para o site em produção';
$l['check_all_edit'] = 'Verificar tudo';
$l['push_db'] = 'Enviar banco de dados completo';
$l['push_db_exp'] = 'Se marcado, o banco de dados do site em produção será removido e substituído pelo banco de dados que você selecionou';
$l['backing_up'] = 'Gerando backup do site em produção';
$l['push_views'] = 'Enviar visualizações do banco de dados';
$l['push_views_exp'] = 'Se marcado, as visualizações do banco de dados serão enviadas para o site em produção';
$l['live_site_desc'] = 'Ambiente de testes atual será enviado para o site em produção :';
$l['default_push_desc'] = 'Todos os arquivos, pastas e banco de dados do site em produção serão substituídos pelos do ambiente de testes';
$l['corfirm_live'] = 'Tem certeza de que deseja desvincular este ambiente do site em produção? Você não poderá mais enviar o conteúdo deste ambiente para o site em produção. Esta instalação será definida como um site independente, sem link para seu site em produção.';

$l['failed_rsync'] = 'Falha ao sincronizar arquivos de instalação';
$l['failed_rsync_datadir'] = 'Falha ao sincronizar arquivos do diretório data';
$l['wp_cli_replace_fail'] = 'Falha ao substituir dados na instalação de destino (utilizando wp-cli)';

