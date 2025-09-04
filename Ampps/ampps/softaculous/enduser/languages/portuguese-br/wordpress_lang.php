<?php

//////////////////////////////////////////////////////////////
//===========================================================
// wordpress_lang.php
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

$l['wrong_ins'] = 'O ID de instalação fornecido não existe';
$l['no_wp_functions'] = 'WORDPRESS PACKAGE está ausente! Informe isto ao suporte.';

//Theme Strings
$l['<title>'] = APP.' - WordPress Management';
$l['wordpress_management'] = 'WordPress Management';
$l['install'] = 'Instalar';
$l['upgrade'] = 'Atualizar';
$l['manage_sets'] = 'Gerenciar Conjuntos';
$l['scan'] = 'Scanear';
$l['check_updates'] = 'Verificar Atualizações';
$l['remove'] = 'Remover';
$l['security_measures'] = 'Medidas de Segurança';
$l['uninstall'] = 'Desinstalar';
$l['save'] = 'Salvar';
$l['save_settings'] = 'Salvar Configurações';
$l['save_info'] = 'Salvar Informações do Site';
$l['backup'] = 'Backup';
$l['restore'] = 'Restaurar';
$l['create_template'] = 'Criar Template';
$l['clone'] = 'Clonar';
$l['staging'] = 'Criando Ambiente';
$l['pushtolive'] = 'Enviar para Produção';
$l['save_all'] = 'Salvar todas as alterações';
$l['up_to_date'] = 'Atualizado';
$l['updates_available'] = 'Atualização Disponível';
$l['upd_to'] = 'Atualizar para';
$l['upgrade_now'] = 'Atualizar Agora';
$l['remote_import'] = 'Importação Remota';
$l['backups'] = 'Backups';
$l['featured_plugins'] = 'Plugins em Destaque';

$l['install_exp'] = 'Fazer uma instalação limpa do WordPress';
$l['scan_exp'] = 'Procurar por instalações de WordPress em sua conta';
$l['check_updates_exp'] = 'Verificar por atualizações do WordPress, Temas e Plugins';
$l['remove_exp'] = 'Remover do registro '.APP.' as instalações selecionadas';
$l['uninstall_exp'] = 'Excluir arquivos/pastas e banco de dados das instalações selecionadas';
$l['security_measures_exp'] = 'Aplicar em massa e reverter as medidas de segurança para os WordPress selecionados';
$l['manage_exp'] = 'Gerenciar Conjuntos WordPress para as instalações de plugin e temas selecionados';
$l['remote_import_exp'] = 'Importar a instalação existente de um servidor remoto';
$l['backups_exp'] = 'Listar todos os backups';
$l['featured_plugins_exp'] = 'Instalação em massa de plugins em destaque nos WordPress selecionados';

$l['installations'] = 'Instalações';
$l['siteurl'] = 'Website URL';
$l['site_name'] = 'Nome do Site';
$l['blog_public'] = 'Visibidade dos Buscadores';
$l['wp_cron'] = 'WordPress Cron (wp-cron.php)';
$l['wp_debug'] = 'Modo de Depuração';
$l['enabled'] = 'Ativo';
$l['disabled'] = 'Desativado';
$l['version'] = 'Versão';
$l['updated'] = 'Atualizado';
$l['update_now'] = 'Atualizar Agora';
$l['change'] = 'Alterar';
$l['info'] = 'Detalhes do Site';
$l['updates'] = 'Atualizações';
$l['configuration'] = 'Configurações';
$l['manage_plugins'] = 'Gerenciar Plugins';
$l['manage_plugins_exp'] = 'Instale, ative, desative e exclua Plugins para esta instalação';
$l['manage_themes'] = 'Gerenciar Temas';
$l['manage_themes_exp'] = 'Instale, ative, desative e exclua Temas para esta instalação';
$l['options'] = 'Opções';
$l['auto_upgrade_core'] = 'Atualização Automática do WordPress Core';
$l['auto_upgrade_plugins'] = 'Atualização Automática dos Plugins';
$l['auto_upgrade_themes'] = 'Atualização Automática dos Temas';
$l['dont_auto_upgrade'] = 'Desativar Atualização Automática';
$l['minor_auto_upgrade'] = 'Atualizar somente para versões de mesma raiz (versão menor)';
$l['major_auto_upgrade'] = 'Atualizar sempre para a versão mais recente (versão maior e menor)';
$l['exp_eu_auto_upgrade'] = 'Selecione a preferência de atualização automática para esta instalação quando uma nova versão estiver disponível';
$l['exp_auto_upgrade_plugins'] = 'Se marcado, os plugins desta instalação serão automaticamente atualizados para a última versão. (a cada 24h)';
$l['exp_auto_upgrade_themes'] = 'Se marcado, os temas desta instalação serão automaticamente atualizados para a última versão. (a cada 24h)';
$l['login_admin'] = 'Entrar';
$l['login_exp'] = 'Entrar no WordPress como usuário administrador';
$l['create_template_exp'] = 'Crie um Template desta instância que você pode restaurar posteriormente em qualquer domínio';
$l['clone_exp'] = 'Clone esta instância em uma instalação separada';
$l['staging_exp'] = 'Crie uma cópia em Ambiente de Testes da sua instalação ativa para experimentar atualizações ou alterações';
$l['pushtolive_exp'] = 'Envie as alterações do Ambiente de Testes para sua instalação ativa';
$l['backup_exp'] = 'Gere backup da sua instalação';
$l['restore_exp'] = 'Restaure um backup da sua instalação para reverter as alterações';
$l['remove_ins_exp'] = 'Remove esta instalação dos registros '.APP;
$l['uninstall_ins_exp'] = 'Exclui arquivos/pastas e banco de dados desta instalação';
$l['change_password'] = 'Alterar Senha';
$l['username'] = 'Usuário';
$l['password'] = 'Senha';
$l['db_details_title'] = 'Detalhes do Banco de Dados';
$l['db_details_name'] = 'Nome do Banco de Dados';
$l['db_details_user'] = 'Usuário do Banco de Dados';
$l['db_details_host'] = 'Hostname do Banco de Dados';
$l['db_view'] = 'Visualizar Banco de Dados';
$l['exp_blog_public'] = 'Se habilitado, seu site será indexado por mecanismos de busca. Se seu site estiver em construção, você pode desabilitar isso e habilitar quando seu site estiver finalizado. Padrão: Habilitado';
$l['exp_wp_cron'] = 'Se desabilitado, o cron do WordPress será desativado e um cron job será adicionado no seu painel de controle para ser executado duas vezes por hora. Padrão: Habilitado';
$l['exp_wp_debug'] = 'Se habilitado, o modo de depuração do WordPress será ativado, o que ajudará você a encontrar a causa de um erro em caso de erro crítico. <br />Importante: Não deixe isso habilitado em um site de produção. Padrão: Desabilitado';
$l['files_not_found'] = 'Arquivos de instalação ausente';
$l['db_not_found'] = 'Falha ao conectar no banco de dados';
$l['return_to_wpm'] = 'Voltar ao WordPress Management';
$l['track_on_tasklist'] = 'Você pode acompanhar o progresso na menu Lista de Tarefas';
$l['no_wp_ins'] = 'Não há instalações WordPress.';
$l['install_new_wp'] = 'Instalar uma nova cópia';
$l['or'] = 'ou';
$l['scan_wp'] = 'Procurar por instalações de WordPress';

$l['installed'] = 'Instalado';
$l['add_themes'] = 'Adicionar Temas';
$l['add_plugins'] = 'Adicionar Plugins';
$l['upload'] = 'Enviar';
$l['upload_themes'] = 'Enviar Tema';
$l['upload_plugins'] = 'Enviar Plugin';
$l['activate_themes'] = 'Ativar Tema após o envio';
$l['activate_plugins'] = 'Ativar Plugin após o envio';
$l['installing'] = 'Instalando';
$l['installed'] = 'Instalado';
$l['search_wp'] = 'Pesquisar em wordpress.org';
$l['upload_drag_exp'] = 'Arraste e Solte o arquivo aqui';
$l['upload_manual_exp'] = 'ou clique para escolher manualmente';
$l['plugins_themes_delete'] = 'Excluir';
$l['plugins_themes_list_name'] = 'Nome';
$l['plugins_themes_list_link'] = 'Link';
$l['plugins_themes_list_status'] = 'Status';
$l['plugins_themes_list_rating'] = 'Avaliação';
$l['plugins_themes_list_author'] = 'Autor';
$l['plugins_themes_list_version'] = 'Versão';
$l['plugin_list_no_ratings'] = 'Sem avaliação';
$l['add_custom_plugin'] = 'Adicionar Plugin Personalizado';
$l['add_custom_theme'] = 'Adicionar Tema Personalizado';
$l['custom_slug'] = 'URL Amigável';
$l['custom_slug_exp'] = 'Somente caracteres alfanuméricos, underline e hífens são permitidos';
$l['custom_name'] = 'Nome';
$l['custom_name_exp'] = 'Escolha um nome para o seu plugin/tema';
$l['custom_file'] = 'Arquivo';
$l['custom_file_exp'] = 'Envie o arquivo ZIP do seu plugin/tema';
$l['none'] = 'Vazio';

// Error Strings
$l['off_wordpress_manager'] = 'WordPress Management foi desativado pelo administrador';
$l['no_insid'] = 'Forneça o ID de instalação para salvar as alterações';
$l['no_softurl'] = 'URL é obrigatório';
$l['invalid_softurl'] = 'URL inválido';
$l['no_site_name'] = 'Nome do Site é obrigatório';
$l['some_error_occurred'] = 'Ocorreu algum erro';
$l['domain_not_in_list'] = 'O URL informada não pertence a sua lista de domínios';
$l['no_username'] = 'Usuário é obrigatório';
$l['no_password'] = 'Senha é obrigatória';

$l['fail_fetch_list'] = 'Falha ao buscar lista';
$l['plugin_deletion_failed'] = 'Falha ao excluir plugin';
$l['plugin_not_found'] = 'A pasta de plugin não foi encontrada';
$l['plugin_activation_failed'] = 'Falha ao ativar plugin';
$l['plugin_deletion_success'] = 'Plugin excluído com sucesso';
$l['plugin_deactivation_failed'] = 'Falha ao desativar plugin';
$l['plugin_upgrade_success'] = 'Plugin atualizado com sucesso';
$l['plugin_upgrade_failed'] = 'Falha ao atualizar plugin';
$l['no_plugins_upgrade'] = 'Não há atualização para os plugins selecionados';
$l['no_themes_upgrade'] = 'Não há atualização para os temas selecionados';
$l['active_plugin_del_error'] = 'Não é possível excluir um plugin ativo';
$l['install_plugin'] = 'Clique para instalar o plugin';
$l['installed_plugin'] = 'Plugin já está instaldo';
$l['incompatible_plugin'] = 'Plugin incompatível com a versão do seu WordPress';

$l['theme_deletion_failed'] = 'Falha ao excluir tema';
$l['theme_not_found'] = 'A pasta de tema não foi encontrada';
$l['theme_activation_failed'] = 'Falha ao ativar tema';
$l['theme_deletion_success'] = 'Tema excluído com sucesso';
$l['theme_deactivation_failed'] = 'Falha ao desativar tema';
$l['theme_upgrade_success'] = 'Tema atualizado com sucesso';
$l['theme_upgrade_failed'] = 'Falha ao atualizar tema';
$l['active_theme_del_error'] = 'Não é possível excluir um tema ativo';
$l['install_theme'] = 'Clique para instalar o tema';
$l['installed_theme'] = 'Tema já está instalado';
$l['incompatible_theme'] = 'Tema incompatível com a versão do seu WordPress';

$l['err_custom_fields'] = 'Todos os campos são obrigatórios. Por favor, preencha todos.';
$l['err_custom_upload'] = 'Ocorreu algum erro ao adicionar seu plugin/tema personalizado';
$l['no_file'] = 'Envie um arquivo de plugin/tema';
$l['invalid_file'] = 'Envie um arquivo válido';
$l['err_move_file'] = 'Falha ao mover o arquivo enviado';
$l['plugin_exists'] = 'O Plugin já existe';
$l['theme_exists'] = 'O Tema já existe';
$l['no_file_posted'] = 'Nenhum arquivo postado';
$l['only_zip_files'] = 'São permitidos apenas arquivos ZIP';
$l['err_write_chunk'] = 'Falha ao gravar partes do arquivo';
$l['invalid_file_posted'] = 'O arquivo de plugin/tema enviado é inválido, porque o arquivo zip deveria ter uma pasta amigável';
$l['invalid_plugin_file'] = 'O arquivo de plugin enviado é inválido, porque o arquivo zip deveria ter uma pasta amigável';
$l['invalid_theme_file'] = 'O arquivo de tema enviado é inválido, porque o arquivo zip deveria ter uma pasta amigável';

$l['invalid_command'] = 'Comando inválido';
$l['invalid_slug'] = 'A URL Amigável é inválido';
$l['no_plugins'] = 'Plugins não encontrados';
$l['no_themes'] = 'Temas não encontrados';
$l['no_active_theme'] = 'É necessário ao menos um tema ativo';
$l['no_zip_archive'] = 'A extensão ZIP é necessária no PHP para usar o recurso de envio';

// Success strings
$l['save_info_success'] = 'Informações salvas com sucesso!';

$l['plugin_activated'] = 'Plugin ativado com sucesso';
$l['plugin_deactivated'] = 'Plugin desativado com sucesso';
$l['plugin_upload_success'] = 'Plugin instalado com sucesso';
$l['plugin_upload_activate_success'] = 'Plugin instalado e ativado com sucesso';
$l['install_plugins'] = 'Plugin instalado com sucesso';

$l['install_themes'] = 'Tema instalado com sucesso';
$l['theme_activated'] = 'Tema ativado com sucesso';
$l['theme_deactivated'] = 'Tema desativado com sucesso';
$l['theme_upload_success'] = 'Tema instalado com sucesso';
$l['theme_upload_activate_success'] = 'Tema instalado e ativado com sucesso';

$l['manage_users'] = 'Gerenciar Usuários';
$l['select_user'] = 'Selecionar Usuário';
$l['add_user'] = 'Adicionar Usuário';
$l['close'] = 'Fechar';
$l['role'] = 'Função';
$l['required'] = 'Requerido';
$l['email'] = 'Email';
$l['first_name'] = 'Nome';
$l['last_name'] = 'Sobrenome';
$l['website'] = 'Website';
$l['randpass'] = 'Gerar Senha Aleatória';

$l['empty_username'] = 'Usuário é obrigatório';
$l['empty_email'] = 'Email é obrigatório';
$l['empty_password'] = 'Senha é obrigatória';
$l['empty_role'] = 'Função é obrigatória';
$l['email_invalid'] = 'Email inválido';
$l['role_invalid'] = 'Função inválida';
$l['username_exists'] = 'Usuário já existente';
$l['email_exists'] = 'Email já está em uso';
$l['fail_add_user'] = 'Falha ao adicionar usuário';

$l['success_add_user'] = 'Usuário adicionado com sucesso!';
$l['password_changed'] = 'Senha alterada com sucesso';

// Data Table Strings
$l['dt_last'] = 'Último';
$l['dt_next'] = 'Próximo';
$l['dt_first'] = 'Primeiro';
$l['dt_search'] = 'Localizar:';
$l['dt_previous'] = 'Anterior';
$l['dt_processing'] = 'Processando...';
$l['dt_loadingRecords'] = 'Carregando...';
$l['dt_lengthMenu'] = 'Exibir _MENU_ registro';
$l['dt_infoEmpty'] = 'Exibindo 0 a 0 de 0 registros';
$l['dt_emptyTable'] = 'Não há dados disponíveis na tabela';
$l['dt_zeroRecords'] = 'Nenhum registro correspondente encontrado';
$l['dt_info'] = 'Exibindo _START_ a _END_ de _TOTAL_ registros';
$l['dt_infoFiltered'] = '(classificado de um total de _MAX_ registros)';
$l['dt_sortAscending'] = 'ativar para classificar a coluna em ordem crescente';
$l['dt_sortDescending'] = 'ativar para classificar a coluna em ordem decrescente';

// Security Measures
$l['secure_wp_all'] = 'Todos (Críticos e Recomendados)';
$l['secure_wp_cri'] = 'Somente Críticos';
$l['secure_wp_cus'] = 'Escolher Manualmente';
$l['change_admin_username'] = 'Alterar o nome padrão do usuário administrador';
$l['change_admin_username_exp'] = 'O WordPress cria um usuário administrador com o nome \'admin\'. O WordPress não permite alterar o nome de usuário e seu site pode estar em risco se alguém tentar força bruta com o nome de usuário admin. Esta opção de segurança altera o nome de usuário de admin para um nome de usuário gerado aleatoriamente.';
$l['no_file_dir_access'] = 'Restringir acesso a arquivos e diretórios';
$l['no_file_dir_access_exp'] = 'Permissões inseguras em arquivos e diretórios podem levar a acessos não autorizados por hackers, comprometendo seu site. Esta opção de segurança define as permissões para o arquivo wp-config.php para 0600, outros arquivos 0644 e para diretórios 0755.';
$l['disable_xml_rpc'] = 'Bloquear acesso ao xmlrpc.php';
$l['disable_xml_rpc_exp'] = 'Esta opção de segurança impede acesso não autorizado ao arquivo xmlrpc.php. Importante: Diretivas personalizadas nos arquivos .htaccess podem sobrescrever isso.';
$l['block_htaccess'] = 'Bloquear acesso ao .htaccess e .htpasswd';
$l['block_htaccess_exp'] = 'Obter acesso aos arquivos .htaccess e .htpasswd permite que que seu site fique sujeito a explorações e violações de segurança. Esta opção de segurança garante que os arquivos .htaccess e .htpasswd não possam ser acessados ​​por hackers.';
$l['disable_pingbacks'] = 'Desativar pingbacks';
$l['disable_pingbacks_exp'] = 'Pingbacks permitem que outros sites WordPress deixem comentários automaticamente sob suas postagens quando esses sites linkam para essas postagens. Pingbacks podem ser abusados ​​para utilizar seu site como fonte de ataques DDoS a outros sites. Esta opção de segurança desativa pingbacks XML-RPC para todo o seu site e também desabilita pingbacks para postagens criadas anteriormente com pingbacks habilitados.';
$l['no_file_editing'] = 'Desativar edição de arquivos pelo painel WordPress';
$l['no_file_editing_exp'] = 'Desativar a edição de arquivos no WordPress remove a capacidade de editar diretamente os arquivos de plugins e temas na interface do WordPress. Esta opção adiciona uma camada extra de proteção caso uma das contas de administrador seja comprometida. Em particular, impede que contas comprometidas adicionem facilmente código malicioso a plugins ou temas.';
$l['block_author_scan'] = 'Bloquear escaneamento de autores';
$l['block_author_scan_exp'] = 'O escaneamento de autores tenta encontrar nomes de usuários registrados (especialmente administradores do WordPress) e atacar por força bruta a página de login do seu site para obter acesso. Esta opção de segurança impede que tais varreduras exponham esses nomes de usuário. Importante: dependendo da configuração de links permanentes no seu site, esta opção pode impedir que visitantes acessem páginas que listam todos os artigos escritos por um determinado autor.';
$l['block_dir_browsing'] = 'Bloquear navegação de diretório';
$l['block_dir_browsing_exp'] = 'Se a navegação de diretório estiver ativada, os hackers podem obter várias informações sobre seu site que podem comprometer a segurança. A navegação de diretório geralmente está desativada por padrão, mas se estiver ativada, esta opção de segurança pode bloqueá-la.';
$l['no_php_exec_wpinc'] = 'Bloquear execução PHP no diretório wp-includes';
$l['no_php_exec_wpinc_exp'] = 'Arquivos PHP no diretório wp-includes podem ser executados para assumir e explorar seu site. Esta opção de segurança impede a execução de arquivos PHP no diretório wp-includes. Importante: Diretivas personalizadas nos arquivos .htaccess podem substituir isso.';
$l['no_php_exec_wpuploads'] = 'Bloquear execução PHP no diretório wp-content/uploads';
$l['no_php_exec_wpuploads_exp'] = 'Arquivos PHP no diretório wp-content/uploads podem ser executados para assumir e explorar seu site. Esta opção de segurança impede a execução de arquivos PHP no diretório wp-content/uploads. Importante: Diretivas personalizadas nos arquivos .htaccess podem substituir isso.';
$l['no_script_concat'] = 'Desativar concatenação de scripts no painel do WordPress';
$l['no_script_concat_exp'] = 'Esta opção de segurança desativa a concatenação de scripts em execução no painel de administração do WordPress, evitando que seu site seja afetado por certos ataques DoS. Desativar a concatenação de scripts pode afetar levemente o desempenho do painel de administração do WordPress, mas não deve afetar a experiência dos visitantes em seu site WordPress.';
$l['block_sensitive_files'] = 'Bloquear acesso a arquivos sensíveis';
$l['block_sensitive_files_exp'] = 'Esta opção de segurança impede o acesso público a determinados arquivos que podem conter informações confidenciais, como credenciais de conexão ou várias informações que podem ser usadas para determinar quais explorações conhecidas são aplicáveis ​​ao seu site WordPress.';
$l['enable_bot_protection'] = 'Proteção de bots';
$l['enable_bot_protection_exp'] = 'Esta opção protege seu site de bots inúteis, maliciosos ou prejudiciais. Ela bloqueia bots que escaneiam seu site em busca de vulnerabilidades e causam sobrecarga com solicitações indesejadas. Importante: Você pode querer desabilitar temporariamente esta medida se estiver planejando usar um serviço online para escanear seu site em busca de vulnerabilidades, já que esses serviços também podem usar tais bots.';
$l['security_measure_disabled'] = 'O recurso Medidas de Segurança foi desativado pelo administrador';
$l['apply_wp_security_msg'] = 'Aplicando medidas de segurança ao WordPress';
$l['security_measure_applied'] = 'Medidas de segurança foram aplicadas com sucesso';
$l['revert_wp_security_msg'] = 'Desfazendo medidas de segurança aplicadas ao Wordpress';
$l['security_measure_reverted'] = 'As medidas de segurança do WordPress foram revertidas.';
$l['apply_wp_security_error'] = 'Falha ao aplicar <b>&soft-1;</b> configurações ao Wordpress <br><b>&soft-2;</b></br>';
$l['revert_wp_security_error'] = 'Falha ao aplicar <b>&soft-1;</b> configurações ao Wordpress <br><b>&soft-2;</b></br>';

$l['security_measures_desc'] = 'Selecione quais medidas de segurança você deseja aplicar nos sites escolhidos';
$l['revert_wp_security'] = 'Desfazer Medidas de Segurança';
$l['revert_wp_security_exp'] = 'Selecione quais medidas de segurança você deseja desfazer nos sites escolhidos';
$l['file_manager'] = 'Gerenciador de Arquivos';
$l['sitepath'] = 'Caminho do Website';

$l['featured_plugins_info_free'] = 'Os plugins selecionados serão instalados e ativados no seu site';
$l['featured_plugins_info_pro'] = 'A versão <b style="color:green;">PRO</b> dos plugins selecionados serão instalados e ativados no seu site';

$l['show_installed_plugins'] = 'Exibir Plugins Instalados';

$l['bulk_featured_plugins_info_free'] = 'Os plugins serão instalados e ativados nos sites que você escolheu anteriormente';
$l['bulk_featured_plugins_info_pro'] = 'A versão <b style="color:green;">PRO</b> dos plugins serão instalados e ativados no site escolhido anteriormente';

$l['bulk_featured_plugins_skip'] = 'Se o plugin já estiver instalado no site selecionado, ele será ignorado';
$l['no_ins_selected'] = 'Selecione pelo menos uma instalação do WordPress para instalar os plugins em destaque!';

$l['feature_restricted'] = 'Este recurso é restrito';

$l['license_key'] = 'Licença';
$l['softaculous_pro_license_issued'] = 'Licença gerada com sucesso';
$l['with_selected'] = 'Executar em Selecionados';
$l['softwp_issue_license'] = 'Gerar Licença';
$l['softwp_select_ins'] = 'Selecione as instalações para as quais deseja gerar a Licença SoftWP';
$l['featured'] = 'Destaque';
$l['manage_licenses'] = 'Gerenciar Licença(s)';
$l['manage'] = 'Gerenciar';
$l['add'] = 'Adicionar';

//for multiple delete
$l['with_selected'] = 'Executar em selecionados';
$l['remove_complete'] = 'Remover completamente';
$l['remove_info'] = 'Remover de '.APP;
$l['go'] = 'Prosseguir';
$l['no_sel_inst'] = 'Nenhuma instalação foi selecionada para remoção.';
$l['del_insid'] = 'Tem certeza de que deseja remover as instalações selecionadas? A ação é irreversível. \nNenhuma outra confirmação será solicitada.';
$l['rem_inst_id'] = 'Removendo Instalação - ';
$l['inst_remvd'] = 'A instalação selecionada foi removida. A página será recarregada agora!';