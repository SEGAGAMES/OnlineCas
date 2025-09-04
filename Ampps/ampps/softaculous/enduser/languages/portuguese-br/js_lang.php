<?php

//////////////////////////////////////////////////////////////
//===========================================================
// js_lang.php
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
$l['no_space'] = 'Você não tem espaço suficiente para instalar este software!';
$l['no_field'] = 'O campo <b>&soft-1;</b> deve ser preenchido.';
$l['no_package'] = 'O pacote de instalação não pôde ser encontrado!';
$l['no_decompress'] = 'Ocorreram alguns erros na descompactação dos arquivos do pacote.';
$l['mail_new_ins'] = 'A instalação do &soft-1; foi concluída. Os detalhes estão abaixo:';
$l['mail_path'] = 'Caminho';
$l['mail_url'] = 'URL';
$l['mail_time'] = 'Data da Instalação';
$l['mail_subject'] = 'Nova Instalação dof &soft-1;';
$l['some_files_exist'] = 'A instalação não pode prosseguir porque os seguintes arquivos já existem na pasta de destino: ';
$l['delete_files'] = 'Exclua esses arquivos ou escolha outra pasta.';
$l['checking_data'] = 'Verificando dados submetidos';
$l['unzipping_files'] = 'Copiando arquivos e pastas';
$l['unzipping_datadir'] = 'Descompactando arquivo de dados';
$l['prop_db'] = 'Propagando o banco de dados';
$l['finishing_process'] = 'Finalizando instalação';
$l['wait_note'] = '<b>NOTE:</b> Isso pode levar de 3 a 4 minutos. Não saia desta página até que a barra de progresso atinja 100%';
$l['softdirectory_invalid'] = 'O diretório informado é inválido';
$l['err_domain'] = 'Nenhum Domínio';
$l['err_domain_admin'] = 'Este usuário não possui qualquer Domínio. Verifique com o Administrador.';
$l['err_pass_strength'] = 'A força da senha deve ser maior que ';
$l['no_sel_inst'] = 'Nenhum instalação foi selecionada.';
$l['del_insid'] = 'Tem certeza de que deseja remover as instalações selecionadas?';
$l['ins_emailto'] = 'Envie os detalhes da instalação para o seguinte email';
$l['no_https'] = 'Nenhum certificado SSL válido foi encontrado';
$l['err_dbprefix'] = 'O prefixo da tabela é inválido. Os valores válidos são a-z ou A-Z ou 0-9 ou _';
$l['auto_backup_not_allowed'] = 'A frequência do auto backup escolhido é inválido';
$l['invalid_script'] = 'ID de script inválido';
$l['not_js_script'] = 'Este script não é um JavaScript';
$l['no_domain_found'] = 'Domínio não encontrado. Adicione um Domínio para instalar este script.';

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
$l['softcopy_note'] = '<b>Importante</b>: Este software requer que seja instalado usando o próprio utilitário de instalação. Visite a URL que será exibida depois que os arquivos forem copiados para concluir o processo de instalação.';
$l['softsubmit'] = 'Instalar';
$l['congrats'] = 'Parabéns, o software foi instalado com sucesso';
$l['succesful'] = 'foi instalado com sucesso em ';
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
$l['ratesoft'] = 'Avalie este Script';
$l['reviews'] = 'Comentários';
$l['reviewsoft'] = 'Escrever um Comentário';
$l['readreviews'] = 'Ler Comentários';
$l['reviews_exp'] = 'Ler comentários de outros usuários e ';
$l['ins_type'] = 'Tipo de Instalação';
$l['ins_type_exp2'] = 'Selecione o tipo de instalação';
$l['ins_type_exp'] = '<b>Pacote original</b> - Pacote disponível no site do Scripts. <br /> <b>Apenas arquivos de biblioteca</b> - Apenas os arquivos de biblioteca Javascript.';
$l['ori_pack'] = 'Pacote Original';
$l['just_lib'] = 'Apenas arquivos de biblioteca';
$l['overwrite_exist'] = '<b>OU</b> <br /><input type="checkbox" name="overwrite_existing" id="overwrite_existing" />&nbsp;&nbsp;<b><span style="color:#000;">Selecione a caixa para sobrescrever TODOS os arquivos e continuar</span></b>';
$l['overwrite'] = 'Sobrescrever Arquivos';
$l['choose_protocol'] = 'Escolher Protocolo';
$l['choose_protocol_exp'] = 'Se o site possui SSL, então escolha o protocolo HTTPS (Recomendado).';
$l['clone'] = 'Clonar';
$l['options'] = 'Opções';
$l['downloading'] = 'Baixando Pacote';
$l['installing'] = 'Instalando Script';
$l['go'] = 'Prosseguir';
$l['rem_inst_id'] = 'Removendo Instalação - ';
$l['inst_remvd'] = 'A instalação selecionada foi removida. A página será recarregada agora!';
$l['release_date'] = 'Data do Lançamento';
$l['adv_option'] = 'Opções Avançadas';
$l['disable_notify_update'] = 'Desativar notificações de atualização por email';
$l['exp_disable_notify_update'] = 'Se marcado, você não receberá uma notificação por email das atualizações disponíveis para esta instalação.';
$l['prog_installing'] = 'Instalando '; // Dont remove trailing space
$l['prog_install_complete'] = 'Instalação Concluída.';

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
$l['backup'] = 'Backup';
$l['editdetail'] = 'Editar Detalhes';
$l['install_now'] = 'instale agora';
$l['my_apps'] = 'Meus aplicativos';

$l['bad'] = 'Ruim';
$l['good'] = 'Bom';
$l['strong'] = 'Forte';
$l['short'] = 'Curta';
$l['strength_indicator'] = 'Indicador de Força';
$l['show'] = 'Exibir';
$l['hide'] = 'Ocultar';

$l['backup_location'] = 'Local do Backup';
$l['backup_location_exp'] = 'Escolha o local onde será realzado o backup da sua instalação.';
$l['default'] = 'Padrão';
$l['invalid_backup_location'] = 'O local para backup é inexistente';
$l['local_folder'] = 'Local da Pasta';

$l['no_cron_min'] = 'Os minutos para execução da cron não foram informados';
$l['no_cron_hour'] = 'As horas para execução da cron não foram informadas';
$l['no_cron_day'] = 'Os dias para execução da cron não foram informados';
$l['no_cron_month'] = 'Os meses para execução da cron não foram informados';
$l['no_cron_weekday'] = 'Os dias da semana para execução da cron não foram informados';

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
$l['notify_ver'] = 'Notifique '.$globals['sn'].' sobre uma nova versão';
$l['notifyversion'] = 'Obrigado por informar sobre a nova versão. Vamos analisar o mais rápido possível';

$l['rbackup_disabled'] = 'Backup remoto está desativado pelo Administrador';
$l['rbackup_protocol_disabled'] = 'Backup em <b>&soft-1;</b> está desativado pelo Administrador';
$l['randpass'] = 'Gerar Senha Aleatória';
$l['cron_min'] = 'Minutos';
$l['cron_hour'] = 'Horas';
$l['cron_day'] = 'Dia';
$l['cron_month'] = 'Mês';
$l['cron_weekday'] = 'Dia da Semana';
$l['remove_complete'] = 'Remover completamente';
$l['remove_info'] = 'Remover de '.APP;