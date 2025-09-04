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

$l['no_info_file'] = 'Nenhuma classe para o ID especificado';
$l['incompatible'] = 'O software requer uma versão mais recente do '.APP.' ! Por favor, informe isso ao administrador do servidor.';
$l['no_install'] = 'O arquivo INSTALL.XML está ausente! Verifique com o suporte.';
$l['no_functions'] = 'Não foi possível encontrar o arquivo INSTALL FUNCTIONS! Por favor, reporte isso ao administrador do servidor.';
$l['no_softdomain'] = 'Você não escolheu um domínio para instalar o software.';
$l['wrong_softdomain'] = 'O caminho do domínio selecionado não pôde ser encontrado.';
$l['no_space'] = 'Você não possui espaço suficiente para instalar este software!';
$l['no_field'] = 'O campo <b>&soft-1;</b> é obrigatório e deve ser preenchido.';
$l['no_package'] = 'Não foi possível encontrar o pacote de instalação!';
$l['no_decompress'] = 'Ocorreram alguns erros na descompactação dos arquivos do pacote.';
$l['mail_new_ins'] = 'A instalação do &soft-1; foi concluída. Os detalhes estão abaixo:';
$l['mail_path'] = 'Caminho';
$l['mail_url'] = 'URL';
$l['mail_time'] = 'Data da instalação';
$l['mail_subject'] = 'Nova instalação do &soft-1;';
$l['some_files_exist'] = 'A instalação não pode prosseguir porque os seguintes arquivos já existem na pasta de destino: ';
$l['delete_files'] = 'Exclua esses arquivos ou escolha outra pasta.';
$l['checking_data'] = 'Verificando os dados enviados';
$l['unzipping_files'] = 'Copiando arquivos e pastas';
$l['unzipping_datadir'] = 'Descompactando arquivos';
$l['prop_db'] = 'Propagando o Banco de Dados';
$l['finishing_process'] = 'Finalizando instalação';
$l['wait_note'] = '<b>Importante:</b> Isso pode levar de 3 a 4 minutos. Não saia desta página até que a barra de progresso atinja 100%';
$l['cant_download'] = 'Não é possível baixar o arquivo ZIP.';
$l['softdirectory_invalid'] = 'O diretório que você digitou é inválido.';
$l['softdirectory_exists'] = 'O diretório que você digitou já existe! Digite outro nome de diretório.';
$l['ins_emailto'] = 'Envie os detalhes da instalação para o seguinte email ';
$l['disable_classes'] = 'As classes PHP são desativadas pelo administrador ou você está usando '.APP.' Versão gratuita';
$l['invalid_class_id'] = 'ID de classe inválido';

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['install'] = 'Instalar';
$l['overview'] = 'Visão Geral';
$l['features'] = 'Recursos';
$l['demo'] = 'Demonstração';
$l['file'] = 'Arquivos';
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
$l['aef_in_directory_exp'] = 'O diretório é em relação a sua raiz, se não existir, <b>o diretório será criado</b>. Exemplo. Para instalar em <span id="aef_span_lang">&soft-1;</span>/site então digite <b>site</b>. Para instalar em <span id="aef_span_lang_a">&soft-1;</span>/ então deixe vazio.';
$l['softsubmit'] = 'Instalar';
$l['congrats'] = 'Parabéns, o software foi instalado com sucesso';
$l['succesful'] = 'foi instalado com sucesso em';
$l['enjoy'] = 'Esperamos que o processo de instalação tenha sido fácil.';
$l['install_notes'] = 'Abaixo estão algumas observações importantes. É recomendável que você as leia ';
$l['please_note'] = '<b>Importante</b>: O '.APP.' é apenas um script de instalação automatizada não dando suporte aos softwares e scripts instalados. Visite o site do fornecedor do software para obter suporte!';
$l['regards'] = 'Obrigado';
$l['softinstaller'] = APP.' Instalador';
$l['return'] = 'Voltar para Visão Geral';
$l['current_ins'] = 'Instalações Existentes';
$l['link'] = 'Link';
$l['ins_time'] = 'Tempo da Instalação';
$l['version'] = 'Versão';
$l['upd_to'] = 'Atualizar para';
$l['remove'] = 'Remover';
$l['no_info'] = 'Sem informações';
$l['ratesoft'] = 'Avalie este script';
$l['reviews'] = 'Avaliações';
$l['reviewsoft'] = 'Escrever um Comentário';
$l['readreviews'] = 'Ler Comentários';
$l['reviews_exp'] = 'Ler comentários de outros usuários e ';
$l['ins_type'] = 'Tipo de Instalação';
$l['ins_type_exp'] = '<b>Pacote original</b> - Pacote disponível no site Scripts. <br /> <b>Apenas arquivos de biblioteca</b> - Apenas os arquivos da biblioteca Javascript.';
$l['ori_pack'] = 'Pacote Original';
$l['just_lib'] = 'Apenas arquivos de biblioteca';
$l['overwrite_exist'] = '<b>OU</b> <br /><input type="checkbox" name="overwrite_existing" id="overwrite_existing" />&nbsp;&nbsp;<b><span style="color:#000;">Selecione a caixa de seleção para substituir todos os arquivos e continuar</span></b>';
$l['overwrite'] = 'Sobrescrever Arquivos';
$l['choose_protocol'] = 'Escolher Protocolo';
$l['choose_protocol_exp'] = 'Se o site possui SSL, então escolha o protocolo HTTPS (Recomendado).';
$l['downloading'] = 'Baixando Pacote';
$l['installing'] = 'Instalando Script';
$l['files'] = 'Arquivos & Pastas';
$l['modified_time'] = 'Data de modificação';
$l['size'] = 'Tamanho';
$l['classes_ins_error'] = 'Ocorreu um erro ao salvar a instalação.';
$l['del_insid'] = 'Tem certeza de que deseja remover as instalações selecionadas? A ação é irreversível. \nNenhuma outra confirmação será solicitada.';
$l['rem_inst_id'] = 'Removendo Instalação - ';
$l['no_sel_inst'] = 'Nenhuma instalação foi selecionada para remoção.';
$l['inst_remvd'] = 'A instalação selecionada foi removida. A página será recarregada agora!';
$l['go'] = 'Prosseguir';
$l['download_zip'] = 'Baixar todos os arquivos ';
$l['software_category'] = 'Categoria';
$l['adv_option'] = 'Opções Avançadas';
$l['disable_notify_update'] = 'Desativar notificações de atualização por email';
$l['exp_disable_notify_update'] = 'Se marcado, você não receberá uma notificação por email das atualizações disponíveis para esta instalação.';
$l['prog_installing'] = 'Instalando ';// Dont remove the trailing space
$l['prog_install_complete'] = 'Instalação Concluída.';

$l['install_tweet_sub'] = 'Conte aos seus amigos';
$l['select_domain'] = 'Selecione o Domínio';
$l['with_selected'] = 'Executar em Selecionados';
$l['download'] = 'Baixar';

