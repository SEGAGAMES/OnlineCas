<?php

//////////////////////////////////////////////////////////////
//===========================================================
// index_lang.php
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

$l['user_data_error_t'] = 'Erro em dados de usuário';
$l['user_data_error'] = 'Não foi possível o ' . APP . ' carregar os dados da sua conta. Informe esta mensagem ao administrador do sistema!';

$l['remote_licence_t'] = 'Licença inválida';
$l['remote_licence'] = 'Você não está usando uma licença válida. Por favor, reporte isso ao administrador do servidor!';

$l['enterprise_licence_t'] = 'Licença inválida';
$l['enterprise_licence'] = 'Você não está usando uma licença válida. Por favor, reporte isso ao administrador do servidor!';

$l['no_license'] = 'Não foi possivel econtrar o arquivo de LICENÇA! Informe o administrador do sistema.';

$l['today'] = '<b>Hoje</b> as ';//The today string for showing todays post time

$l['init_theme_error_t'] = 'Erro no tema';//Title
$l['init_theme_error'] = 'Não foi possivel carregar o arquivo do tema do &soft-1;.';

$l['init_theme_func_error_t'] = 'Erro de função do tema';//Title
$l['init_theme_func_error'] = 'Impossivel carregar a função do tema do &soft-1;.';

$l['disable_softaculous_t'] = 'Softaculous desabilitado';
$l['disable_softaculous'] = 'Softaculous está desativado para este usuário. Entre em contato com o administrador do sistema.';

$l['load_theme_settings_error'] = 'Não é possivel carregar o arquivo de configurações de tema.';

$l['view_guide'] = 'Ver guia';
$l['max_db_length'] = 'O nome do banco de dados não pode ser maior que o &soft-1;. Escolha um nome mais curto para o banco de dados.';


//Error Handle Function
$l['following_errors_occured'] = 'Foram encontrados os seguintes erros';

//Success Message Function
$l['following_message'] = 'Foi retornada a seguinte mensagem';

//Major Error Function
$l['fatal_error'] = 'Erro Fatal';
$l['following_fatal_error'] = 'Ocorreu o seguinte erro';

//Message Function
$l['soft_message'] = 'Mensagem do' . APP;
$l['following_soft_message'] = 'Foi retornada a seguinte mensagem';

//Update Softwares
$l['no_soft_found'] = 'Software não encontrado, necessária atualização';
$l['ver_not_match'] = 'As versões não correspondem, necessária atualização';
$l['ver_match'] = 'A versão atual é a mais recente';
$l['del_prev_files'] = 'Apagar arquivos anteriores, concluído';
$l['fetch_latest'] = 'Verificando último arquivo';
$l['error_fetch_latest'] = 'Não foi possível verificar o último arquivo';
$l['error_save_latest'] = 'Não foi possível salvar o último arquivo';
$l['got_latest'] = 'Último arquivo salvo';
$l['unzip_latest'] = 'Descompactando arquivos';
$l['error_unzip_latest'] = 'Ocorreu um erro ao descompactar os arquivos';
$l['unzipped_latest'] = 'Descompactação concluída';

//Update Softaculous
$l['getting_info'] = 'Solicitando informações';
$l['error_getting_latest'] = 'Não foi possível solicitar as informações necessárias';
$l['got_info'] = 'Informações obtidas com sucesso';
$l['manual_mode'] = 'A nova versão do ' . APP . ' requer intervenção manual';
$l['no_updates'] = 'A versão atual é a mais recente';
$l['fetch_upgrade'] = 'Baixando atualização';
$l['error_fetch_upgrade'] = 'Não foi possivel baixar a atualização';
$l['error_save_upgrade'] = 'Não foi possivel salvar o arquivo de atualização';
$l['got_upgrade'] = 'Arquivo de atualização salvo';
$l['unzip_upgrade'] = 'Descompactando arquivos';
$l['error_unzip_upgrade'] = 'Ocorreu um erro ao descompactar os arquivos';
$l['unzipped_upgrade'] = 'Descompactação concluída';
$l['md5_check'] = 'Verificação MD5 bem-sucedida';
$l['err_md5_check'] = 'MD5 A verificação desses arquivos não foi bem-sucedida';
$l['err_md5_file'] = ' não existe';

//MySQL Errors
$l['err_selectmy'] = 'Não foi possivel selecionar o banco de dados.';
$l['err_myconn'] = 'Não foi possivel estabelecer conecção ao banco de dados MySQL.';
$l['err_makequery'] = 'Não foi possivel efectuar a consulta';
$l['err_mynum'] = 'Erro "num" no banco de dados MySQL';
$l['err_myerr'] = 'Erro no banco de dados MySQL';
$l['err_no_db_file'] = 'O arquivo de importação do banco de dados não existe';
$l['err_no_open_db_file'] = 'Não foi possível abrir o arquivo de importação do banco de dados';

//Importing Errors
$l['imp_wrong_softdomain'] = 'Não foi possivel encontrar o dominio &soft-1;.';
$l['imp_softpath_wrong'] = 'O caminho &soft-1; está incorrecto ou não existe.';
$l['imp_ins_exists'] = '&soft-1; já se encontra instalado em &soft-2; segundo os nossos registos!';
$l['imp_no_func'] = 'Não foi possivel carregar a função de importação &soft-1;.';
$l['imp_err'] = 'Ocorreram erros ao importar o software instalado em &soft-1;';
$l['err_query'] = 'Não foi possível executar a consulta';

$l['invalid_search_input'] = 'Caractere de pesquisa de tema inválido. Apenas caracteres alfanuméricos, sublinhado e hífen são permitidos.';

//hf_theme.php
$l['root_login'] = 'Conectado como ROOT';
$l['welcome'] = 'Bem-vindo';
$l['logout'] = 'Sair';
$l['page_time'] = 'Página processada em';
$l['times_are'] = 'Fuso horário em GMT';
$l['time_is'] = 'Data e hora atuais: ';
$l['no_script_found'] = 'Nenhum script encontrado!';
$l['webuzo_sysapps_disabled'] = 'Esta funcionalidade foi desativada no painel de administração do Webuzo';
$l['webuzo_install_utility'] = 'Este utilitário não está instalado. Instale primeiro';

//The Category Language Variables
$l['forums'] = 'Fórums';
$l['blogs'] = 'Blogs';
$l['cms'] = 'Portais';
$l['galleries'] = 'Galerias de imagens';
$l['wikis'] = 'Wikis';
$l['admanager'] = 'Publicidades';
$l['calendars'] = 'Calendários';
$l['games'] = 'Jogos';
$l['mail'] = 'Serviços de e-mail';
$l['polls'] = 'Pesquisas';
$l['projectman'] = 'Gestão de projetos';
$l['ecommerce'] = 'Lojas';
$l['guestbooks'] = 'Visitantes';
$l['customersupport'] = 'Suporte a clientes';
$l['others'] = 'Outros';
$l['music'] = 'Música';
$l['video'] = 'Vídeo';
$l['files'] = 'Gerenciamento de arquivos';
$l['go_cpanel'] = 'Voltar ao cPanel';
$l['go_home'] = 'Início';
$l['go_demos'] = 'Demonstrações';
$l['go_ratings'] = 'Ranking das Ferramentas';
$l['go_settings'] = 'Configurações Gerais';
$l['go_email_settings'] = 'Opções de E-mail';
$l['go_installations'] = 'Todas as Instalações';
$l['go_support'] = 'Perguntas Frequentes';
$l['go_sync'] = 'Importar Instalações';
$l['cat_js_widgets'] = 'Widgets';
$l['go_backups'] = 'Backups e Restaurações';
$l['go_templates'] = 'All Templates';
$l['go_tasklist'] = 'Lista de Execuções';
$l['go_apps_installations'] = 'Todas as aplicações instaladas';
$l['go_my_themes'] = 'Meus temas';
$l['go_logout'] = 'Desconectar';
$l['ins_stats'] = 'Instalações';
$l['outdated_stats'] = 'Desatualizados';
$l['backups_stats'] = 'Backups';

$l['type_php'] = 'PHP';
$l['type_perl'] = 'Perl';
$l['type_js'] = 'JavaScript';
$l['type_java'] = 'Java';
$l['type_python'] = 'Python';
$l['search'] = 'Buscar';
$l['back_to_top'] = 'Ir para o topo';

$l['show'] = 'Mostrar';
$l['hide'] = 'Esconder';

// Categories
$l['cat_php_forums'] = 'Fórums';
$l['cat_php_blogs'] = 'Blogs';
$l['cat_php_cms'] = 'Portais';
$l['cat_php_galleries'] = 'Galeria de imagens';
$l['cat_php_wikis'] = 'Wikis';
$l['cat_php_admanager'] = 'Publicidade';
$l['cat_php_calendars'] = 'Calendários';
$l['cat_php_games'] = 'Jogos';
$l['cat_php_mail'] = 'Serviços de e-mail';
$l['cat_php_polls'] = 'Pesquisas';
$l['cat_php_projectman'] = 'Gestão de projetos';
$l['cat_php_ecommerce'] = 'Lojas';
$l['cat_php_guestbooks'] = 'Visitantes';
$l['cat_php_customersupport'] = 'Suporte a clientes';
$l['cat_php_others'] = 'Outros';
$l['cat_php_music'] = 'Música';
$l['cat_php_video'] = 'Vídeo';
$l['cat_php_rss'] = 'RSS';
$l['cat_php_socialnetworking'] = 'Redes sociais';
$l['cat_php_microblogs'] = 'Pequenos blogs';
$l['cat_php_frameworks'] = 'Frameworks';
$l['cat_php_educational'] = 'Educacional';
$l['cat_php_erp'] = 'ERP';
$l['cat_php_dbtools'] = 'Banco de dados';
$l['cat_php_files'] = 'Gerenciador arquivos';
$l['cat_js_libraries'] = 'Bibliotecas';
$l['cat_js_widgets'] = 'Widgets';
$l['cat_perl_blogs'] = 'Blogs';
$l['cat_perl_wikis'] = 'Wikis';
$l['cat_perl_forums'] = 'Fórums';
$l['cat_perl_ecommerce'] = 'Lojas';
$l['cat_perl_mail'] = 'Serviços de e-mail';
$l['cat_java_cms'] = 'CMS';
$l['cat_java_forums'] = 'Fórums';
$l['cat_java_projectman'] = 'Gestão de projetos';
$l['cat_java_erp'] = 'ERP';
$l['cat_java_blogs'] = 'Blogs';
$l['cat_java_wikis'] = 'Wikis';
$l['cat_python_wikis'] = 'Wikis';
$l['cat_python_projectman'] = 'Gestão de projetos';
$l['cat_apps_server_side_scripting'] = 'Scripts';
$l['cat_apps_web_servers'] = 'Serviços web';
$l['cat_apps_utilities'] = 'Utilidades';
$l['cat_apps_libraries'] = 'Bibliotecas';
$l['cat_apps_databases'] = 'Banco de dados';
$l['cat_apps_stacks'] = 'Aglomerados';
$l['cat_apps_security'] = 'Segurança';
$l['cat_apps_statistics'] = 'Estatísticas';
$l['cat_apps_java_tools'] = 'Ferramentas para Java';
$l['cat_apps_java_containers'] = 'Contêineres Java';
$l['cat_apps_version_control'] = 'Controle de versão';
$l['cat_apps_modules'] = 'Módulos';
$l['cat_apps_message_queue'] = 'Fila de mensagens';

// Classes Categories
$l['classes_ajax'] = 'Ajax';
$l['classes_cryptography'] = 'Criptografia';
$l['classes_algorithms'] = 'Algoritmos';
$l['classes_artificialintelligence'] = 'Inteligência artificial';
$l['classes_email'] = 'E-mail';
$l['classes_finances'] = 'Financeiro';
$l['classes_searching'] = 'Consultas';
$l['classes_user_management'] = 'Gerenciamento de usuários';
$l['classes_utilitiesandtools'] = 'Utilidades e ferramentas';
$l['classes_validation'] = 'Validação';
$l['classes_security'] = 'Segurança';
$l['classes_console'] = 'Console';
$l['classes_codegeneration'] = 'Geradores de código';
$l['classes_chat'] = 'Chat';
$l['classes_astrology'] = 'Astrologia';
$l['classes_audio'] = 'Áudio';
$l['classes_biology'] = 'Biologia';
$l['classes_blogs'] = 'Blogs';
$l['classes_cache'] = 'Cache';
$l['classes_compression'] = 'Compactação';
$l['classes_configuration'] = 'Configuração';
$l['classes_contentmanagement'] = 'Gerenciamento de conteúdo';
$l['classes_conversion'] = 'Conversão';
$l['classes_datatypes'] = 'Tipos de dados';
$l['classes_databases'] = 'Banco de dados';
$l['classes_debug'] = 'Debug';
$l['classes_designpatterns'] = 'Padrões de design';
$l['classes_ecommerce'] = 'Loja';
$l['classes_elearning'] = 'Aprendizado';
$l['classes_emulators'] = 'Emuladores';
$l['classes_filesandfolders'] = 'Pastas e arquivos';
$l['classes_flash'] = 'Flash';
$l['classes_forums'] = 'Fóruns';
$l['classes_games'] = 'Jogos';
$l['classes_geography'] = 'Geografia';
$l['classes_graphics'] = 'Gráficos';
$l['classes_gui'] = 'GUI';
$l['classes_hosting'] = 'Hospedagem';
$l['classes_html'] = 'HTML';
$l['classes_http'] = 'HTTP';
$l['classes_language'] = 'Idioma';
$l['classes_projectmanagement'] = 'Gerenciamento de projetos';

// Softaculous Remote Domain Strings
$l['no_domain_data'] = 'Domínio não encontrado!';
$l['no_aefer_resp'] = 'Não foi possível acessar o arquivo pela Web. Verifique se o seu domínio está apontando para o servidor correto.';

// Webuzo Strings
$l['webuzo'] = 'Webuzo';
$l['go_domain'] = 'Gerenciar domínios';
$l['webuzo_license_exp'] = 'Sua licença não está ativa ou expirou. Se sua licença expirou, renove-a para continuar usando o Webuzo';
$l['webuzo_license_exp_t'] = 'Licença inativa';
$l['err_no_access'] = 'Você não tem permissão para acessar esta página';

// Ampps Strings
$l['ampps'] = 'AMPPS';
$l['go_domain'] = 'Gerenciar domínios';
$l['ampps_license_exp'] = 'Sua licença não está ativa ou expirou. Se sua licença expirou, renove-a para continuar usando Ampps';
$l['ampps_license_exp_t'] = 'Licença inativa';


/////////////////////////////////////////////////////////////
/////  Following Variables are used for Email Templates /////
/////////////////////////////////////////////////////////////


$l['notify_enable'] = 'Ativada';
$l['notify_disable'] = 'Desativada';

$l['autoupgrade_enable'] = 'Ativada';
$l['autoupgrade_disable'] = 'Desativada';

// Auto backup strings
$l['auto_backup_enable'] = 'Ativada';
$l['auto_backup_disable'] = 'Desativada';

// Install Template Vaiable
$l['mail_install_php_sub'] = 'Nova instalação de $scriptname';
$l['mail_install_php'] = 'Uma nova instalação de $scriptname $version foi concluída. Detalhes abaixo:
Diretório : $path
Endereço : $url
URL do administrador: $admin_url
<if $datadirectory>Diretório de instalação: $datadirectory</if>
<if $admin_username>Usuário do administrador: $admin_username</if>
<if $admin_pass>Senha do administrador: $admin_pass</if>
<if $admin_email>Admin Email: $admin_email</if>
<if $dbname>Banco de dados: $dbname</if>
<if $dbuser>Usuário do banco de dados: $dbuser</if>
<if $dbhost>Host do banco de dados: $dbhost</if>
<if $dbpass>Senha do banco de dados: $dbpass</if>
<if $cron>Tarefa cron: $cron</if>
<if $disable_notify_update>Notificação de atualização: $disable_notify_update</if>
<if $eu_auto_upgrade>Atualização automática: $eu_auto_upgrade</if>
<if $auto_backup>Backup automatizado: $auto_backup</if>
<if $auto_backup_rotation>Rotação do backup: $auto_backup_rotation</if>
<if $backup_location>Local do backup: $backup_location</if>
<if $time>Data da instalação : $time</if>

Se você deseja cancelar a inscrição desses e-mails, vá ao seu Painel de Controle -> ' . APP . ' -> Configurações de e-mail
';

// Clone Template Vaiable
$l['mail_clone_sub'] = 'Clonar instalações do $scriptname';
$l['mail_clone'] = 'Sua instalação do $scriptname $version foi clonada com sucesso.

Seus detalhes de instalação originais:
Caminho original: $old_path
URL original: $old_url

Seus detalhes de instalação clonados:
Caminho: $path
URL: $url
URL de administração: $admin_url
<if $datadirectory>Diretório dos arquivos: $datadirectory</if>
<if $dbname>Nome do banco de dados: $dbname</if>
<if $dbuser>Usuário do banco de dados: $dbuser</if>
<if $dbhost>Host do banco de dados: $dbhost</if>
<if $dbpass>Senha do banco de dados: $dbpass</if>
<if $cron>Cron: $cron</if>
<if $time>Data da instalação: $time</if>

Se você deseja não receber estas notificações, vá ao seu Painel de Controle -> ' . APP . ' -> Configurações de e-mail
';

// Restore Template - Template Variable
$l['mail_restore_template_sub'] = 'Restauração de template do $scriptname';
$l['mail_restore_template'] = 'O template do $scriptname $version foi restaurado com sucesso.

Your new installation details :
Path : $path
URL : $url
Admin URL : $admin_url
<if $datadirectory>Diretório dos arquivos: $datadirectory</if>
<if $dbname>Nome do banco de dados: $dbname</if>
<if $dbuser>Usuário do banco de dados: $dbuser</if>
<if $dbhost>Host do banco de dados:: $dbhost</if>
<if $dbpass>Senha do banco de dados: $dbpass</if>
<if $cron>Cron: $cron</if>
<if $time>Data da instalação: $time</if>

Se você deseja não receber estas notificações, vá ao seu Painel de Controle -> ' . APP . ' -> Configurações de e-mail
';

// Install Template Vaiable
$l['mail_install_js_sub'] = 'Nova instalação do $scriptname';
$l['mail_install_js'] = 'Uma nova instalação do $scriptname $version foi concluída. Detalhes abaixo:
Diretório: $path
URL: $url
<if $disable_notify_update>Notificações de atualização: $disable_notify_update</if>
<if $auto_backup>Backup automatizado: $auto_backup</if>
<if $auto_backup_rotation>Rotação de backup: $auto_backup_rotation</if>
<if $backup_location>Local do backup: $backup_location</if>
<if $time>Data da instalação: $time</if>

Se você deseja não receber estas notificações, vá ao seu Painel de Controle -> ' . APP . ' -> Configurações de e-mail
';

// Install Template Vaiable
$l['mail_install_perl_sub'] = 'Nova instalação do $scriptname';
$l['mail_install_perl'] = 'Uma nova instalação de $scriptname $version foi concluida. Detalhes abaixo:
Diretório: $path
URL: $url
URL de administração: $admin_url
<if $datadirectory>Diretório dos arquivos: $datadirectory</if>
<if $wwwdir>Diretório web: $wwwdir</if>
<if $admin_username>Usuário de administração: $admin_username</if>
<if $admin_pass>Senha de administração: $admin_pass</if>
<if $admin_email>E-mail de administração: $admin_email</if>
<if $dbname>Banco de dados: $dbname</if>
<if $dbuser>Usuário do banco de dados: $dbuser</if>
<if $dbhost>Host do banco de dados: $dbhost</if>
<if $dbpass>Senha do banco de dados: $dbpass</if>
<if $cron>Cron: $cron</if>
<if $disable_notify_update>Notificação de atualização: $disable_notify_update</if>
<if $auto_backup>Backup automatizado: $auto_backup</if>
<if $auto_backup_rotation>Rotação do backup: $auto_backup_rotation</if>
<if $backup_location>Local do backup: $backup_location</if>
<if $time>Data da instalação: $time</if>

Se você deseja não receber estas notificações, vá ao seu Painel de Controle -> ' . APP . ' -> Configurações de e-mail
';

// Install Template Vaiable
$l['mail_install_java_sub'] = 'Nova instalação do $scriptname';
$l['mail_install_java'] = 'Uma nova instalação do $scriptname $version foi concluida. Detalhes abaixo:
Diretório : $path
Endereço : $url
Admin URL : $admin_url
<if $datadirectory>Diretório dos arquivos: $datadirectory</if>
<if $wwwdir>Diretório web: $wwwdir</if>
<if $admin_username>Usuário de administração: $admin_username</if>
<if $admin_pass>Senha de administração: $admin_pass</if>
<if $admin_email>E-mail de administração: $admin_email</if>
<if $dbname>Banco de dados: $dbname</if>
<if $dbuser>Usuário do banco de dados: $dbuser</if>
<if $dbhost>Host do banco de dados: $dbhost</if>
<if $dbpass>Senha do banco de dados: $dbpass</if>
<if $cron>Cron: $cron</if>
<if $disable_notify_update>Notificação de atualização: $disable_notify_update</if>
<if $auto_backup>Backup automatizado: $auto_backup</if>
<if $auto_backup_rotation>Rotação do backup: $auto_backup_rotation</if>
<if $backup_location>Local do backup: $backup_location</if>
<if $time>Data da instalação: $time</if>

Se você deseja cancelar a inscrição desses e-mails, vá ao seu Painel de Controle -> ' . APP . ' -> Configurações de e-mail
';

$l['mail_install_python_sub'] = 'Nova instalação do $scriptname';
$l['mail_install_python'] = 'Uma nova instalação do $scriptname $version foi concluída. Detalhes abaixo:
Diretório : $path
Endereço : $url
Admin URL : $admin_url
<if $datadirectory>Diretório dos arquivos: $datadirectory</if>
<if $wwwdir>Diretório web: $wwwdir</if>
<if $admin_username>Usuário de administração: $admin_username</if>
<if $admin_pass>Senha de administração: $admin_pass</if>
<if $admin_email>E-mail de administração: $admin_email</if>
<if $dbname>Banco de dados: $dbname</if>
<if $dbuser>Usuário do banco de dados: $dbuser</if>
<if $dbhost>Host do banco de dados: $dbhost</if>
<if $dbpass>Senha do banco de dados: $dbpass</if>
<if $cron>Cron: $cron</if>
<if $disable_notify_update>Notificação de atualização: $disable_notify_update</if>
<if $auto_backup>Backup automatizado: $auto_backup</if>
<if $auto_backup_rotation>Rotação do backup: $auto_backup_rotation</if>
<if $backup_location>Local do backup: $backup_location</if>
<if $time>Data de instalação: $time</if>

Se você deseja não receber estas notificações, vá ao seu Painel de Controle -> ' . APP . ' -> Configurações de e-mail
';

// Update template Variable (From ADMIN)
$l['mail_update_sub'] = 'Atualizações de scripts disponíveis';
$l['mail_update'] = 'Este email está relacionado à instalação desatualizada de certos scripts PHP que você instalou. Por motivos de segurança, você deve atualizar essas instalações desatualizadas o mais rápido possível.
As seguintes atualizações de script estão disponíveis:

$installation

Para atualizar esses scripts, vá ao seu Painel de Controle -> ' . APP . ' -> Instalações.
Lá você poderá atualizar os scripts.

Do administrador do sistema $serverip
';

// Remove Template Variable
$l['mail_remove_sub'] = 'Removida a instalação do $scriptname';
$l['mail_remove'] = 'A instalação do $scriptname foi removida. Abaixo estão os detalhes:
Diretório : $path
<if $url>URL: $url</if>
<if $datadirectory>Diretório de arquivos: $datadirectory</if>
<if $wwwdir>Diretório web: $wwwdir</if>
<if $dbname>Banco de dados: $dbname</if>
<if $dbuser>Usuário do banco de dados: $dbuser</if>
<if $dbhost>Host do banco de dados: $dbhost</if>
<if $dbpass>Senha do banco de dados: $dbpass</if>
<if $cron>Cron: $cron</if>
Data da instalação : $time
Data de remoção : $rem_time

Se você deseja não receber estas notificações, vá ao seu Painel de Controle -> ' . APP . ' -> Configurações de e-mail
';

// Cron Template Variable
$l['mail_cron_sub'] = 'Atualizações de script disponíveis';
$l['changelog'] = '== Atualizações para';
$l['mail_cron'] = 'As seguintes atualizações de script estão disponíveis:

$installation

Para atualizar esses scripts, vá ao seu Painel de Controle -> ' . APP . ' -> Instalações.
Lá você poderá atualizar os scripts.


$changelog

De ' . APP . ' Crons $serverip

Se você deseja não receber estas notificações, vá ao seu Painel de Controle -> ' . APP . ' -> Configurações de e-mail

';

// editdetail Template Variable
$l['mail_editdetail_sub'] = 'Detalhes de instalação modificados do $scriptname';
$l['mail_editdetail'] = 'Os detalhes da instalação de $scriptname foram modificados. A seguir estão os detalhes modificados da instalação:
Diretório: $path
Endereço: $url
<if $datadirectory>Diretório de arquivos: $datadirectory</if>
<if $wwwdir>Diretório web: $wwwdir</if>
<if $wwwurl>URL: $wwwurl</if>
<if $dbname>Banco de dados: $dbname</if>
<if $dbuser>Usuário do banco de dados: $dbuser</if>
<if $dbhost>Host do banco de dados: $dbhost</if>
<if $dbpass>Senha do banco de dados: $dbpass</if>
<if $cron>Cron: $cron</if>
<if $disable_notify_update>Notificação de atualização: $disable_notify_update</if>
<if $eu_auto_upgrade>Atualização automática: $eu_auto_upgrade</if>
<if $auto_backup>Backups automatizados: $auto_backup</if>
<if $auto_backup_rotation>Rotação de backup: $auto_backup_rotation</if>
<if $backup_location>Local de backup: $backup_location</if>
Data da instalação : $time
Data da modificação: $edit_time

Se você deseja não receber estas notificações, vá ao seu Painel de Controle -> ' . APP . ' -> Configurações de e-mail
';

// Backup Language Strings
$l['mail_backup_sub'] = 'Backup da instalação do $scriptname';
$l['mail_backup'] = 'O backup da sua instalação $scriptname foi concluído com sucesso.
Os detalhes são os seguintes:
Caminho da instalação: $path
URL: $url
<if $backup_location>Local de backup: $backup_location</if>
Caminho do backup: $backup_file
<if $backup_note>Informações do backup: $backup_note</if>

Você pode acessar o backup na seção Backups em ' . APP . '.

Se você deseja não receber estas notificações, vá ao seu Painel de Controle -> ' . APP . ' -> Configurações de e-mail
';

$l['mail_backup_fail_sub'] = 'Falha: Backup da instalação do $scriptname';
$l['mail_backup_fail'] = 'O backup da sua instalação $scriptname não foi concluído.
Os detalhes são os seguintes:
Caminho da instalação: $path
URL: $url
Caminho do backup: $backup_file

Ocorreu o seguinte erro:
$error

Tente criar um backup novamente depois de algum tempo.

Se você deseja não receber estas notificações, vá ao seu Painel de Controle -> ' . APP . ' -> Configurações de e-mail
';


// Template Language Strings
$l['mail_template_sub'] = 'Template da instalação do $scriptname';
$l['mail_template'] = 'O template de instalação do $scriptname foi criado com sucesso.
Os detalhes são os seguintes:
Caminho da instalação: $path
URL : $url
<if $backup_location>Local do Template: $backup_location</if>
Caminho do Template : $backup_file
<if $template_name>Nome do Template : $template_name</if>

Você pode acessar seu template na seção Templates em '.APP.'.

Se você deseja não receber estas notificações, vá ao seu Painel de Controle -> ' . APP . ' -> Configurações de e-mail
';

$l['mail_template_fail_sub'] = 'Falha na instalação do Template do $scriptname';
$l['mail_template_fail'] = 'O template de instalação do $scriptname não foi criada com sucesso.
Os detalhes são os seguintes:
Caminho da instalação:: $path
URL : $url
Caminho do Template: $backup_file

Aconteceu o seguinte erro:
$error

Por favor, tente criar um novo template mais tarde.

Se você deseja não receber estas notificações, vá ao seu Painel de Controle -> ' . APP . ' -> Configurações de e-mail
';


// Restore Language Strings
$l['mail_restore_sub'] = 'Restauração do seu $scriptname';
$l['mail_restore'] = 'A restauração do seu backup $scriptname foi concluída com êxito.
Os detalhes são os seguintes:
Caminho da instalação: $path
URL da instalação: $url

Se você deseja não receber estas notificações, vá ao seu Painel de Controle -> ' . APP . ' -> Configurações de e-mail
';

$l['mail_restore_fail_sub'] = 'Falha: restauração do seu $scriptname';
$l['mail_restore_fail'] = 'A restauração do seu $ scriptname não foi concluída.
Os detalhes são os seguintes:
Caminho da instalação: $path
URL da instalação: $url

Ocorreu o seguinte erro:
$error

Tente criar um backup novamente depois de algum tempo.

Se você deseja não receber estas notificações, vá ao seu Painel de Controle -> ' . APP . ' -> Configurações de e-mail
';

// Restore Background Language Strings
$l['mail_restore_bg_sub'] = 'Restauração do seu backup $scriptname iniciada em segundo plano';
$l['mail_restore_bg'] = 'A restauração do seu backup $scriptname foi iniciada em segundo plano. Você receberá uma notificação por email sobre o status assim que o processo de restauração for concluído.
Os detalhes são os seguintes:
Caminho da instalação: $path
URL da instalação: $url

Se você deseja não receber estas notificações, vá ao seu Painel de Controle -> ' . APP . ' -> Configurações de e-mail
';

// Backup Background Language Strings
$l['mail_backup_bg_sub'] = 'O backup da instalação do $scriptname foi iniciado em segundo plano';
$l['mail_backup_bg'] = 'O backup do seu $scriptname foi iniciado em segundo plano. Você receberá uma notificação por email sobre o status assim que o processo de backup for concluído.
Os detalhes são os seguintes:
Caminho da instalação: $path
URL da instalação: $url

Se você deseja não receber estas notificações, vá ao seu Painel de Controle -> ' . APP . ' -> Configurações de e-mail
';

// Template Background Language Strings
$l['mail_template_bg_sub'] = 'A criação de template de instalação do seu $scriptname foi iniciado em segundo plano';
$l['mail_template_bg'] = 'A criação de template de instalação do seu $scriptname hfoi iniciado em segundo plano. Você receberá um email assim que o processo for concluído.
Os detalhes são os seguintes:
Caminho da instalação: $path
URL da instalação:: $url

Se você deseja não receber estas notificações, vá ao seu Painel de Controle -> ' . APP . ' -> Configurações de e-mail
';

// Restore Template Background Language Strings
$l['mail_restore_template_bg_sub'] = 'A restauração do template do seu $scriptname foi iniciado em segundo plano';
$l['mail_restore_template_bg'] = 'A restauração do template do seu $scriptname foi iniciado em segundo plano. Você receberá um email assim que o processo for concluído.
The details are as follows :
Caminho da instalação: $path
URL da instalação: $url

Se você deseja não receber estas notificações, vá ao seu Painel de Controle -> ' . APP . ' -> Configurações de e-mail
';

// import Language Strings
$l['mail_import_sub'] = 'Importação da sua instalação $scriptname';
$l['mail_import'] = 'A importação da instalação do $scriptname foi concluída com êxito.
Os detalhes são os seguintes:
Caminho da instalação: $path
URL da instalação: $url

Se você deseja não receber estas notificações, vá ao seu Painel de Controle -> ' . APP . ' -> Configurações de e-mail
';

// import fail Language Strings
$l['mail_import_fail_sub'] = 'Falha: Importação da instalação do $scriptname';
$l['mail_import_fail'] = 'A importação da instalação do $scriptname não foi concluída.
Os detalhes são os seguintes:
Caminho da instalação: $path
URL da instalação: $url

Ocorreu o seguinte erro:
$error

Tente importar novamente depois de algum tempo.

Se você deseja não receber estas notificações, vá ao seu Painel de Controle -> ' . APP . ' -> Configurações de e-mail
';

// Import Background Language Strings
$l['mail_import_bg_sub'] = 'Importação da sua instalação $scriptname';
$l['mail_import_bg'] = 'A importação da instalação do $scriptname foi iniciada em segundo plano. Você receberá uma notificação por email sobre o status assim que o processo de importação for concluído.
Os detalhes são os seguintes:
Caminho da instalação: $path
URL da instalação: $url

Se você deseja não receber estas notificações, vá ao seu Painel de Controle -> ' . APP . ' -> Configurações de e-mail
';


// Install Template Vaiable CLASSES
$l['mail_install_classes_sub'] = 'Nova instalação do $classesname';
$l['mail_install_classes'] = 'Uma nova instalação da versão $classesname foi concluída. Os detalhes da instalação são mostrados abaixo:
Os detalhes são os seguintes:
Caminho da instalação: $path

<if $time>Data da instalação: $time</if>

Se você deseja não receber estas notificações, vá ao seu Painel de Controle -> ' . APP . ' -> Configurações de e-mail
';

////////////////////////
// ADMIN UPGRADE - 6
////////////////////////

// Auto Upgrade Email For Admin (successful)
$l['mail_adminupgrade_success_admin_sub'] = 'A instalação do $scriptname do usuário $user foi atualizada com sucesso';
$l['mail_adminupgrade_success_admin'] = 'A instalação do $scriptname do usuário $user foi atualizada com êxito para a versão mais recente.
Os detalhes são os seguintes:
URL: $url
Última versão: $version
Versão antiga: $oldversion
';

// Auto Upgrade Email For Admin (Failed) but restored successfully.
$l['mail_adminupgrade_fail_admin_sub'] = 'O processo de atualização para a instalação do $scriptname falhou e foi restaurado a partir do backup';
$l['mail_adminupgrade_fail_admin'] = 'O processo de atualização da instalação do $scriptname para o usuário $user falhou.
' . APP . ' havia criado um backup antes da atualização e o backup foi restaurado com sucesso.
URL: $url
Última versão: $version
Versão antiga: $oldversion
Os detalhes do erro de atualização são os seguintes:
Erros: $upgrade_error
';

// Auto Upgrade Email for user (successful)
$l['mail_adminupgrade_success_user_sub'] = 'A instalação do $scriptname foi atualizada com êxito pelo Administrador do Sistema';
$l['mail_adminupgrade_success_user'] = 'Sua instalação do $scriptname foi atualizada com êxito para a versão mais recente pelo administrador do sistema.
Os detalhes são os seguintes:
URL: $url
Última versão: $version
Versão antiga: $oldversion

Se você deseja cancelar a inscrição desses e-mails, vá ao seu Painel de Controle -> ' . APP . ' -> Configurações de e-mail
';

// Auto Upgrade Email for user (fail) but restored successfully
$l['mail_adminupgrade_fail_user_sub'] = 'A atualização da instalação do $scriptname pelo Administrador do Sistema não foi bem-sucedida';
$l['mail_adminupgrade_fail_user'] = 'O administrador do sistema tentou atualizar a instalação do $scriptname, mas o processo de atualização falhou.
Um backup foi criado antes de atualizar sua instalação e sua instalação foi restaurada com sucesso a partir deste backup.
URL: $url
Última versão: $version
Versão antiga: $oldversion
Os detalhes do erro de atualização são os seguintes:
Erros: $upgrade_error

Se você deseja cancelar a inscrição desses e-mails, vá ao seu Painel de Controle -> ' . APP . ' -> Configurações de e-mail
';

// ALL IS FAILED (Upgrade and RESTORE toooo) (FOR ADMIN)
$l['mail_adminupgrade_restore_fail_admin_sub'] = 'O processo de atualização da instalação do $scriptname do usuário $user falhou';
$l['mail_adminupgrade_restore_fail_admin'] = 'O processo de atualização da instalação do $scriptname do usuário $user falhou.
Um backup foi criado antes da atualização, mas o processo de restauração também falhou!

Isso exigirá uma restauração manual. Guia para a restauração manual está disponível aqui:
https://www.softaculous.com/docs/enduser/manual-restore/

A seguir, estão os detalhes da instalação e do backup que você pode precisar para restaurar a instalação do $scriptname:
Caminho do backup: $backup_path
Caminho da instalação: $softpath
<if $dbname>Nome do banco de dados: $dbname</if>
<if $dbuser>Usuário do banco de dados: $dbuser</if>
<if $dbpass>Senha do banco de dados: $dbpass</if>
<if $dbhost>Host do banco de dados: $dbhost</if>

URL da instalação: $url
Última versão: $version
Versão antiga: $oldversion
<if $upgrade_error>
Os detalhes do erro de atualização são os seguintes:
Erros : $upgrade_error
</if>
<if $error>
Os detalhes do erro Restaurar são os seguintes:
Erros : $error
</if>

Você pode entrar em contato com a equipe do ' . APP . ' se você enfrentar algum problema.
';

// ALL IS FAILED (Upgrade and RESTORE toooo) (FOR USER)
$l['mail_adminupgrade_restore_fail_user_sub'] = 'Falha na atualização da instalação do $scriptname pelo administrador do sistema';
$l['mail_adminupgrade_restore_fail_user'] = 'O administrador do sistema tentou atualizar a instalação do $scriptname, mas a atualização falhou.
Um backup foi criado antes da atualização, mas o processo de restauração também falhou!

Isso exigirá uma restauração manual. Guia para a restauração manual está disponível aqui:
https://www.softaculous.com/docs/enduser/manual-restore/

A seguir, estão os detalhes da instalação e do backup que você pode precisar para restaurar a instalação do $scriptname:
Caminho do backup: $backup_path
Caminho da instalação: $softpath
<if $dbname>Nome do banco de dados: $dbname</if>
<if $dbuser>Usuário do banco de dados: $dbuser</if>
<if $dbpass>Senha do banco de dados: $dbpass</if>
<if $dbhost>Host do banco de dados: $dbhost</if>

URL da instalação: $url
Última versão: $version
Versão antiga: $oldversion
<if $upgrade_error>
Os detalhes do erro de atualização são os seguintes:
Erros : $upgrade_error
</if>
<if $error>
Os detalhes do erro Restaurar são os seguintes:
Erros : $error
</if>

Você pode entrar em contato com a equipe do ' . APP . ' se você enfrentar algum problema.
';

////////////////////////
// USER UPGRADE - 3
////////////////////////

// When upgraded by user successfully (By user)
$l['mail_userupgrade_success_user_sub'] = 'Instalação do $scriptname atualizada com sucesso';
$l['mail_userupgrade_success_user'] = 'Sua instalação do $scriptname foi atualizada com sucesso para a versão mais recente.
Os detalhes são os seguintes:
URL de instalação: $url
Última versão: $version
Versão antiga: $oldversion

Se você deseja não receber estas notificações, vá ao seu Painel de Controle -> ' . APP . ' -> Configurações de e-mail
';

// If any error occured while upgrading, (By user)
$l['mail_userupgrade_fail_user_sub'] = 'Falha na atualização da instalação do $scriptname';
$l['mail_userupgrade_fail_user'] = 'A atualização da sua instalação $scriptname falhou.
Os detalhes são os seguintes:
URL de instalação: $url
Última versão: $version
Versão antiga: $oldversion
Erros : $upgrade_error

Se você deseja não receber estas notificações, vá ao seu Painel de Controle -> ' . APP . ' -> Configurações de e-mail
';

// If UPGRADE and RESTORE failed while upgrading, (By user)
$l['mail_userupgrade_restore_fail_user_sub'] = 'Falha na atualização da instalação do $scriptname';
$l['mail_userupgrade_restore_fail_user'] = 'A atualização da sua instalação $scriptname falhou.
Um backup foi criado antes da atualização, mas o processo de restauração também falhou!

Isso exigirá uma restauração manual. Guia para a restauração manual está disponível aqui:
https://www.softaculous.com/docs/enduser/manual-restore/

Os detalhes são os seguintes:
URL de instalação: $url
Última versão: $version
Versão antiga: $oldversion
<if $upgrade_error>
Os detalhes do erro de atualização são os seguintes:
Erros : $upgrade_error
</if>
<if $error>
Os detalhes do erro ao restaurar são os seguintes:
Erros : $error
</if>

Se você deseja não receber estas notificações, vá ao seu Painel de Controle -> ' . APP . ' -> Configurações de e-mail
';

////////////////////////
// AUTO UPGRADE - 3
////////////////////////

// When AUTOUPGRADED successfully
$l['mail_autoupgrade_success_user_sub'] = '$scriptname foi atualizado com sucesso';
$l['mail_autoupgrade_success_user'] = 'Seu $scriptname foi atualizado para a versão mais recente.
Os detalhes são os seguintes:
URL de instalação: $url
Última versão: $version
Versão antiga: $oldversion

Se você deseja não receber estas notificações, vá ao seu Painel de Controle -> ' . APP . ' -> Configurações de e-mail
';

// When AUTOUPGRADE FAILED
$l['mail_autoupgrade_fail_user_sub'] = 'Falha na atualização automática do $scriptname';
$l['mail_autoupgrade_fail_user'] = 'A atualização automática do $scriptname falhou.
Os detalhes são os seguintes:
URL de instalação: $url
Última versão: $version
Versão antiga: $oldversion
Erros : $upgrade_error

Se você deseja não receber estas notificações, vá ao seu Painel de Controle -> ' . APP . ' -> Configurações de e-mail
';

// If UPGRADE and RESTORE failed while AUTOUPGRADING
$l['mail_autoupgrade_restore_fail_user_sub'] = 'A atualização automática da instalação do $scriptname falhou ';
$l['mail_autoupgrade_restore_fail_user'] = 'A atualização automática da instalação do $scriptname falhou.
Um backup foi criado antes da atualização, mas o processo de restauração também falhou!

Isso exigirá uma restauração manual. Guia para a restauração manual está disponível aqui:
https://www.softaculous.com/docs/enduser/manual-restore/

Os detalhes são os seguintes:
URL de instalação: $url
Última versão: $version
Versão antiga: $oldversion
<if $upgrade_error>
Os detalhes do erro de atualização são os seguintes:
Erros : $upgrade_error
</if>
<if $error>
Os detalhes do erro ao restaurar são os seguintes:
Erros : $error
</if>

Se você deseja não receber estas notificações, vá ao seu Painel de Controle -> ' . APP . ' -> Configurações de e-mail
';

////////////////////////
// PRE UPGRADE CHECK 
////////////////////////

// If pre upgradation check fails while AUTOUPGRADE (FOR USER)
$l['mail_autoupgrade_precheck_fail_sub'] = 'Falha na verificação pré-atualização';
$l['mail_autoupgrade_precheck_fail'] = 'O processo de atualização automática para a seguinte instalação não pode ser concluído porque não atende aos requisitos de atualização:
URL de instalação: $url
Última versão: $oldversion
Versão antiga: $version
<if $upgrade_error>
Erros : $upgrade_error
</if>
<if $error>
Erros : $error
</if>

Se você deseja não receber estas notificações, vá ao seu Painel de Controle -> ' . APP . ' -> Configurações de e-mail
';

/////////////////////////////////
// Backup Failed CLI UPGRADE
/////////////////////////////////

// If a backup fails before AUTO UPGRADING an installation (FOR USER)
$l['mail_autoupgrade_backup_fail_sub'] = 'O processo de backup falhou antes do upgrade automático da instalação do $scriptname';
$l['mail_autoupgrade_backup_fail'] = 'O backup da instalação do $scriptname falhou. Portanto, o processo de atualização automática foi abortado.
URL de instalação: $url
Última versão: $oldversion
Versão antiga: $version
Erros : $error

Se você deseja não receber estas notificações, vá ao seu Painel de Controle -> ' . APP . ' -> Configurações de e-mail
';

$l['err_openconfig'] = 'Não foi possível abrir o arquivo de configuração';
$l['err_writeconfig'] = 'Não foi possível gravar o arquivo de configuração';

$l['classes_con_failed'] = 'Erro: falha ao conectar ao servidor.';
$l['cl_ratings'] = 'Avaliações';
$l['cl_author'] = 'Autor';
$l['cl_license'] = 'Liceça';
$l['cl_version'] = 'Versão';
$l['cl_show_files'] = 'Exibir arquivos';
$l['cl_install_but'] = 'Instalar';
$l['expand_view'] = 'Clique aqui para visualização completa';
$l['collapse_view'] = 'Clique aqui para visualização incorporada';
$l['email_off_notice'] = '<b>Importante: Os emails de notificação estão desativados para que você não receba nenhum email.</b>';

// Add User Language Strings
$l['mail_add_user_sub'] = 'Bem-vindo ao instalador Softaculous';
$l['mail_add_user'] = 'Agora você pode acessar o Softaculous.
Os detalhes são os seguintes:
Usuário					: $username
Chave API 				: $api_key
Senha API			: $api_pass
Número de usuários permitido	: $number_of_users';

// Requirement parser languages
$l['req_ver_nf'] = 'Requer &soft-1; versão &soft-2; &soft-3; E a versão encontrada é: ';
$l['req_ext_nf'] = 'Requer &soft-1; extensão não encontrada:';
$l['req_func_nf'] = 'Requer &soft-1; função não encontrada';
$l['req_ext_ver'] = 'Requer &soft-1; &soft-2; versão de extensão &soft-3; &soft-4; MAS foi encontrado &soft-5;';
$l['gt'] = 'Maior que';
$l['lt'] = 'Menor que';
$l['ge'] = 'Maior ou igual a';
$l['le'] = 'Menor ou igual a';
$l['eq'] = 'é';
$l['ne'] = 'não deve ser igual a';
$l['req_version'] = 'Versão';
$l['req_extensions'] = 'Extensões';
$l['req_functions'] = 'Funções';

// Automated Backup Language Strings
$l['mail_auto_backup_sub'] = 'Backup automático da sua instalação $scriptname';
$l['mail_auto_backup'] = 'O backup automático da sua instalação $scriptname foi concluído com sucesso.
Os detalhes são os seguintes:
Caminho da instalação: $path
URL da instalação: $url
Caminho do backup: $backup_file
<if $backup_location>Localização do backup: $backup_location</if>

Você pode acessar o backup na seção Backups no ' . APP . '.

Se você deseja não receber estas notificações, vá ao seu Painel de Controle -> ' . APP . ' -> Configurações de e-mail
';

$l['mail_auto_backup_fail_sub'] = 'Falha: Backup automático da instalação do $scriptname';
$l['mail_auto_backup_fail'] = 'O backup automático da instalação do $ scriptname não foi concluído.
Os detalhes são os seguintes:
Caminho da instalação: $path
URL da instalação: $url
Caminho do backup: $backup_file
<if $backup_location>Localização do backup: $backup_location</if>

Os seguintes erros ocorreram:
$error

Se você deseja não receber estas notificações, vá ao seu Painel de Controle -> ' . APP . ' -> Configurações de e-mail
';

// Email for sending the list of scripts which does not meet the requirements.
$l['mail_script_requirement_sub'] = 'Falha no registro de requisitos de scripts';
$l['mail_script_requirement'] = 'A lista de scripts a seguir não atende aos requisitos mínimos no servidor e pode não funcionar.
Os detalhes são os seguintes:

$failed_req

Importante: Se você estiver alterando a versão do PHP no tempo de execução (ou seja, usando CageFS, hive, .htaccess etc.), poderá ignorar os avisos de falha da versão do PHP acima.
';

// Softpanel Language Strings
$l['no_www_domain'] = 'Feche ' . $globals['sn'] . ' páginas e efetue logout no painel de controle usando o botão logout.
Depois, você poderá fazer login novamente e usar ' . $globals['sn'] . '.';

$l['install_tweet'] = 'Eu instalei #[[SCRIPTNAME]] em [[softurl]] via #[[APP]] #[[TYPE]]';
$l['install_tweet_classes'] = 'Eu instalei #[[SCRIPTNAME]] via #[[APP]] #[[TYPE]]';
$l['upgrade_tweet'] = 'Eu fiz o upgrade #[[SCRIPTNAME]] em [[softurl]] via #[[APP]] #[[TYPE]]';
$l['clone_tweet'] = 'Eu clonei #[[SCRIPTNAME]] em [[softurl]] via #[[APP]] #[[TYPE]]';
$l['staging_tweet'] = 'I just created a staging installation of #[[SCRIPTNAME]] on [[softurl]] via #[[APP]] #[[TYPE]]';
$l['pushtolive_tweet'] = 'I just pushed my staging #[[SCRIPTNAME]] to live on [[softurl]] via #[[APP]] #[[TYPE]]';
$l['restore_template_tweet'] = 'I just restored a #[[SCRIPTNAME]] template on [[softurl]] via #[[APP]] #[[TYPE]]';
// month strings
$l['January'] = 'Janeiro';
$l['February'] = 'Fevereiro';
$l['March'] = 'Março';
$l['April'] = 'Abril';
$l['May'] = 'Maio';
$l['June'] = 'Junho';
$l['July'] = 'Julho';
$l['August'] = 'Agosto';
$l['September'] = 'Setembro';
$l['October'] = 'Outubro';
$l['November'] = 'Novembro';
$l['December'] = 'Dezembro';

// Mail templates for webuzo backup
$l['mail_webuzo_backup_sub'] = '$type backup completo com sucesso';
$l['mail_webuzo_backup'] = 'O processo de backup foi concluído com sucesso.
Arquivos de backup criados:
$filename

Obrigado,
Softaculous';
$l['mail_webuzo_backup_fail_sub'] = '$type backup falhou';
$l['mail_webuzo_backup_fail'] = 'O processo de backup falhou.
Os seguintes erros ocorreram
$error

Obrigado,
Softaculous';
$l['mail_webuzo_restore_sub'] = '$type a restauração ocorreu com sucesso';
$l['mail_webuzo_restore'] = 'A restauração solicitada ocorreu com sucesso.

Arquivos restaurados:
$filename

Obrigado,
Softaculous';
$l['mail_webuzo_restore_fail_sub'] = '$type restauração falhou';
$l['mail_webuzo_restore_fail'] = 'Ocorreu uma falha durante o processos de restauração.
Os seguintes erros ocorreram:
$error

Obrigado,
Softaculous';

// Staging Template Vaiable
$l['mail_staging_sub'] = 'Ambiente de $scriptname';
$l['mail_staging'] = 'O ambiente do $scriptname $version foi concluído com sucesso.

Seus detalhes da instalação:
Caminho original: $live_path
URL original: $live_url

Os detalhes do seu ambiente
Caminho: $path
URL: $url
URL do administrador: $admin_url
<if $datadirectory>Diretório de arquivos: $datadirectory</if>
<if $dbname>Banco de dados: $dbname</if>
<if $dbuser>Usuário do banco de dados: $dbuser</if>
<if $dbhost>Host do banco de dados: $dbhost</if>
<if $dbpass>Senha do banco de dados: $dbpass</if>
<if $cron>Cron $cron</if>
<if $time>Data da instalação: $time</if>

Se você deseja não receber estas notificações, vá ao seu Painel de Controle -> ' . APP . ' -> Configurações de e-mail';

// Pushtolive Template Vaiable
$l['mail_pushtolive_sub'] = 'Colocando $scriptname online';
$l['mail_pushtolive'] = 'Colocando $scriptname site $version online .

Caminho original: $live_path
URL original: $live_url

Os detalhes do seu ambiente
Caminho: $path
URL: $url
URL do administrador: $admin_url
<if $datadirectory > Diretório de arquivos: $datadirectory </if>
<if $dbname > Banco de dados: $dbname </if>
<if $dbuser > Usuário do banco de dados: $dbuser </if>
<if $dbhost > Host do banco de dados: $dbhost </if>
<if $dbpass > Senha do banco de dados: $dbpass </if>
<if $cron > Cron $cron </if>

Se você deseja não receber estas notificações, vá ao seu Painel de Controle -> ' . APP . ' -> Configurações de e-mail';

/////////////////////////////////
// Backup Failed CLI UPGRADE of Plugins/Themes
/////////////////////////////////

// If a backup fails before AUTO UPGRADING Plugins/Themes of an installation (FOR USER)
$l['mail_autoupgrade_extras_backup_fail_sub'] = 'O processo de backup falhou antes da atualização automática dos plugins / tema da sua instalação do $scriptname ';
$l['mail_autoupgrade_extras_backup_fail'] = 'O processo de backup dos plugins / tema da instalação do $scriptname falhou . Portanto, o processo de plugins / tema de atualização automática não foi realizado .
Os detalhes são os seguintes:
URL de instalação: $url
Erros : $error

Se você deseja não receber estas notificações, vá ao seu Painel de Controle -> ' . APP . ' -> Configurações de e-mail
';

/////////////////////////////////
// Upgrade Plugins/Themes By USER
/////////////////////////////////

// Plugins/Theme when upgraded by user successfully (By user)
$l['mail_userupgrade_extras_success_user_sub'] = 'Plugins / Temas do $scriptname foram atualizados';
$l['mail_userupgrade_extras_success_user'] = 'Plugins / Temas do $scriptname foram atualizados com sucesso para a versão mais recente .
Os detalhes são os seguintes:
URL da Instalação : $url

Se você deseja não receber estas notificações, vá ao seu Painel de Controle -> ' . APP . ' -> Configurações de e-mail
';

// If UPGRADE and RESTORE Plugins/Theme failed while upgrading, (By user)
$l['mail_userupgrade_extras_restore_fail_user_sub'] = 'Falha na atualização dos plugins / tema da instalação do $ scriptname ';
$l['mail_userupgrade_extras_restore_fail_user'] = 'A atualização dos plugins / tema da instalação do $ scriptname falhou .
Um backup foi criado antes da atualização, mas o processo de restauração também falhou!

Os detalhes são os seguintes:
URL da Instalação: $url
<if $upgrade_error >
    Os detalhes do erro de upgrade são os seguintes:
Erros : $upgrade_error
</if>
<if $error >
    Os detalhes do erro de restaurar são os seguintes:
Erros : $error
</if>

Se você deseja não receber estas notificações, vá ao seu Painel de Controle -> ' . APP . ' -> Configurações de e-mail
';

// If any error occured while upgrading plugins/theme, (By user)
$l['mail_userupgrade_extras_fail_user_sub'] = 'Falha na atualização dos plugins / tema da instalação do $scriptname';
$l['mail_userupgrade_extras_fail_user'] = 'A atualização dos plugins / tema da instalação do $scriptname falhou .
Os detalhes são os seguintes:
URL da instalação: $url
Erros: $upgrade_error

Se você deseja não receber estas notificações, vá ao seu Painel de Controle -> ' . APP . ' -> Configurações de e-mail
';

/////////////////////////////////
// Auto Upgrade Plugins/Themes
/////////////////////////////////

// When AUTOUPGRADED Plugins/Theme successfully
$l['mail_autoupgrade_extras_success_user_sub'] = 'Plugins / Tema da instalação do $scriptname atualizado automaticamente com êxito';
$l['mail_autoupgrade_extras_success_user'] = 'Os plugins / temas da instalação do $scriptname foram atualizados com êxito automaticamente para a versão mais recente .
Os detalhes são os seguintes:
Installation URL : $url
<if $plugins_updated >
    Os seguintes plugins ativos foram atualizados:
$plugins_updated
</if>
<if $theme_updated >
    O tema ativo a seguir foi atualizado:
$theme_updated
</if>

Se você deseja não receber estas notificações, vá ao seu Painel de Controle -> ' . APP . ' -> Configurações de e-mail
';

// If UPGRADE and RESTORE of Plugins/Theme failed while AUTOUPGRADING
$l['mail_autoupgrade_extras_restore_fail_user_sub'] = 'Falha na atualização automática de plugins / tema da instalação do $ scriptname';
$l['mail_autoupgrade_extras_restore_fail_user'] = 'A atualização automática de plugins / tema da instalação do $scriptname falhou .
Um backup foi criado antes da atualização, mas o processo de restauração também falhou!

Isso exigirá uma restauração manual . Guia para a restauração manual está disponível aqui:
https://www.softaculous.com/docs/enduser/manual-restore/

Os detalhes são os seguintes:
URL de instalação: $url
<if $upgrade_error >
    Os detalhes do erro de atualização são os seguintes:
Erros : $upgrade_error
</if>
<if $error >
    Os detalhes do erro Restaurar são os seguintes:
Erros : $error
</if>

Se você deseja não receber estas notificações, vá ao seu Painel de Controle -> ' . APP . ' -> Configurações de e-mail
';

// When AUTOUPGRADE Plugins/Theme FAILED
$l['mail_autoupgrade_extras_fail_user_sub'] = 'Falha na atualização automática de plugins / tema da instalação do $scriptname';
$l['mail_autoupgrade_extras_fail_user'] = 'A atualização automática de plugins / tema da instalação do $scriptname falhou .
Os detalhes são os seguintes:
Caminho da instalação: $path
URL de instalação: $url

Ocorreu o seguinte erro:
$error

Por favor, tente novamente após algum tempo .

Se você deseja não receber estas notificações, vá ao seu Painel de Controle -> ' . APP . ' -> Configurações de e-mail
';

// clone fail Language Strings
$l['mail_clone_fail_sub'] = 'Falha: clone da instalação do $scriptname';
$l['mail_clone_fail'] = 'O clone da sua instalação $scriptname não foi concluído com êxito .
Os detalhes são os seguintes:
Caminho da instalação: $path
URL de instalação: $url

Ocorreu o seguinte erro:
$error

Por favor, tente novamente após algum tempo .

Se você deseja não receber estas notificações, vá ao seu Painel de Controle -> ' . APP . ' -> Configurações de e-mail
';

// restore_template fail Language Strings
$l['mail_restore_template_fail_sub'] = 'Falha ao restaurar o Template do $scriptname';
$l['mail_restore_template_fail'] = 'Não foi possível concluir a restauração de template do $scriptname.
Os detalhes são os seguintes:
Caminho da instalação: $path
URL de instalação:: $url

Ocorreu o seguinte erro:
$error

Se você deseja não receber estas notificações, vá ao seu Painel de Controle -> ' . APP . ' -> Configurações de e-mail
';

// clone fail Language Strings
$l['mail_staging_fail_sub'] = 'Falha: preparação da sua instalação $scriptname ';
$l['mail_staging_fail'] = 'O preparo da instalação do $scriptname não foi concluído .
Os detalhes são os seguintes:
Caminho da instalação: $path
URL de instalação: $url

Ocorreu o seguinte erro:
$error

Por favor, tente novamente após algum tempo .

Se você deseja não receber estas notificações, vá ao seu Painel de Controle -> ' . APP . ' -> Configurações de e-mail
';

$l['mail_upgrade_fail_sub'] = 'Falha: atualização da instalação do $scriptname';
$l['mail_upgrade_fail'] = 'A atualização da instalação do $scriptname não foi concluída com êxito .
Os detalhes são os seguintes:
Caminho da instalação: $path
URL de instalação: $url

Ocorreu o seguinte erro:
$error

Por favor, tente novamente após algum tempo .

Se você deseja não receber estas notificações, vá ao seu Painel de Controle -> ' . APP . ' -> Configurações de e-mail
';

$l['invalid_resp'] = 'Resposta inválida recebida';

$l['api_no_resp'] = 'Nenhuma resposta recebida';
$l['api_invalid_resp'] = 'Resposta inválida recebida';

$l['go_plans'] = 'Planos';
$l['go_wp_manager'] = 'WordPress Manager';
$l['not_in_free'] = '<b>&soft-1;</b> não pode ser instalado na versão gratuita do '.APP.'.';
$l['upgrade_to_pro'] = '<b><a href="'.$globals['index'].'act=plans" target="_blank" style="text-decoration:none;color:green;">Desbloquear recurso premium</a></b>';

$l['upgrade_to_ampps_pro'] = '<b><a href="https://ampps.com/pricing" target="_blank" style="text-decoration:none;color:green;">Desbloquear recurso premium</a></b>';

$l['not_in_expired'] = '<b>&soft-1;</b> não é possível instalar, pois a licença do '.APP.' está expirada.';
$l['renew_pro'] = '<b><a href="'.$globals['index'].'act=plans" target="_blank" style="text-decoration:none;color:green;">Renove a licença para obter os recursos premium</a></b>';

$l['renew_ampps_pro'] = '<b><a href="https://www.softaculous.com/clients?ca=ampps_buy&renew=&soft-1;&plan=&soft-2;" target="_blank" style="text-decoration:none;color:green;">Renove a licença para obter os recursos premium</a></b>';

$l['invalid_license_enduser_server'] = 'Esta licença não é válida para uso neste servidor';
$l['invalid_license_enduser_account'] = 'Esta licença não é valida para uso desta conta';

$l['package_error'] = 'Ocorreram alguns erros na instalação do pacote.';

$l['empty_mail_q'] = 'A fila de e-mails está vazia.';

$l['admin_panel'] = 'Painel Admin';
$l['reseller_panel'] = 'Painel Revendedor';
$l['learn_more'] = 'Saiba Mais';
$l['dismiss_forever'] = 'Dispensar';
$l['install_script_title'] = 'Instalar um aplicativo';
$l['install_script_description'] = 'Você pode instalar um aplicativo após selecioná-lo no menu à esquerda';

$l['outdated_installations_title'] = 'Instalações desatualizadas';
$l['outdated_installations_description'] = 'Você tem algumas instalações desatualizadas. Atualize clicando na caixa vermelha abaixo';

$l['demos_title'] = 'Demos';
$l['demos_description'] = 'Você pode conferir uma demonstrações dos aplicativos antes de instalá-los para descobrir se atende às suas necessidades';

$l['search_scripts_title'] = 'Procurar Scripts';
$l['search_scripts_description'] = 'Você pode pesquisar aplicativos pelo nome na caixa de pesquisa no menu à esquerda';

$l['bulk_import_title'] = 'Importar';
$l['bulk_import_description'] = 'Você pode importar todas as suas instalações existentes para '.APP.' usando a opção Importar no menu superior';

$l['wordpress_manager_title'] = 'WordPress Manager';
$l['wordpress_manager_description'] = 'Você pode gerenciar suas instalações do WordPress de um só lugar usando o recurso WordPress Manager';

$l['backup_title'] = 'Backup';
$l['backup_description'] = 'Você pode criar um backup de sua instalação para que possa restaurá-la quando precisar reverter seu site';

$l['restore_title'] = 'Restaurar';
$l['restore_description'] = 'Você pode restaurar seu site a partir dos backups disponíveis';

$l['delete_backups_title'] = 'Remover Backups';
$l['delete_backups_description'] = 'Você pode excluir os backups antigos/indesejados se não precisar deles';

$l['auto_upgrade_title'] = 'Auto Upgrade';
$l['auto_upgrade_description'] = 'Você pode escolher atualizar automaticamente sua instalação quando uma nova versão de um aplicativo for lançada';

$l['auto_backup_title'] = 'Auto Backup';
$l['auto_backup_description'] = 'Você pode agendar backups automáticos para fazer backup de sua instalação automaticamente em intervalos regulares';

$l['wordpress_sets_title'] = 'Conjuntos WordPress Plugin & Temas';
$l['wordpress_sets_description'] = 'Você pode criar conjuntos e instalar diretamente seus plugins e temas mais usados ​​em todas as suas instalações do WordPress';

$l['remote_backups_title'] = 'Backup Remoto';
$l['remote_backups_description'] = 'Você pode fazer backup de seus sites em servidores remotos como Dropbox, AWS S3, Google Drive, OneDrive, FTP/FTPS/SFTP';

$l['email_notifications_title'] = 'Notificações por Email';
$l['email_notifications_description'] = 'Você pode escolher as notificações que deseja receber por email';

$l['remote_import_title'] = 'Importação Remota';
$l['remote_import_description'] = 'Você pode importar suas instalações de um servidor remoto para '.APP.' usando a aba "Servidor Remoto"';

$l['clone_title'] = 'Clonar';
$l['clone_description'] = 'Você pode clonar e fazer uma nova cópia da sua instalação';

$l['edit_installation_title'] = 'Editar Instalação';
$l['edit_installation_description'] = 'Você pode editar detalhes como habilitar atualização automática, backups, etc. da sua instalação existente';

$l['sign_on_title'] = 'One Click Login';
$l['sign_on_description'] = 'Você pode fazer login na conta de administrador da sua instalação do WordPress usando o botão Login';

$l['reset_password_title'] = 'Resetar senha do Administrador';
$l['reset_password_description'] = 'Você pode redefinir a senha da conta de administrador da sua instalação';

$l['staging_title'] = 'Instância de Testes';
$l['staging_description'] = 'Você pode criar uma instância de testes do seu site ativo para experimentar plug-ins ou atualizações antes de aplicá-los no site de produção';

$l['pushtolive_title'] = 'Enviar para Produção';
$l['pushtolive_description'] = 'Você pode enviar as alterações da sua Instância de Testes para o seu site ativo';

$l['softwp_title'] = 'Softaculous Pro Plugins';
$l['softwp_description'] = 'Você pode usar plugins WordPress PRO gratuitamente: Backuply, SpeedyCache, SiteSEO, Loginizer, Pagelayer, GoSMTP, FileOrganizer & outros. Clique aqui';

$l['softwp_ai_title'] = 'IA para escrita de conteúdo';
$l['softwp_ai_description'] = 'Você pode usar IA de ponta para escrever conteúdo para suas postagens ou páginas do WordPress. Crie uma tabela, escreva um parágrafo, traduza, altere o tom e muito mais';