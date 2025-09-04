<?php

//////////////////////////////////////////////////////////////
//===========================================================
// userindex_lang.php
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

global $globals;

$l['err_invalid_alias'] = 'O Alias fornecido é inválido';
$l['err_invalid_alias_path'] = 'O Alias é válido';
$l['err_exists_alias'] = 'O nome alternativo fornecido já existe';
$l['err_dir_not_created'] = 'O caminho do Alias não foi criado';
$l['err_invalid_alias_sp'] = 'Caracteres especiais não são aceitos para Alias';
$l['err_alias_ampps'] = 'Este nome alternativo já está em uso';

//Theme Strings
$l['submitalias'] = 'Criar Alias';
$l['alias_label'] = 'Nome do Alias';
$l['alias_path'] = 'Caminho do Alias';

$l['<title>'] = APP.' - Configurações de Alias';
$l['alias_headling'] = 'Configurações de Alias';
$l['alias_name'] = 'Alias';
$l['alias_option'] = 'Opções';
$l['delete'] = 'O Alias foi excluído com sucesso';
$l['alias_del_conf'] = 'Você tem certeza que deseja excluir o Alias?';
$l['alias_path'] = 'Caminho';
$l['connect_error'] = 'Ups! Ocorreu um erro ao conectar ao <strong>servidor</strong>';
$l['alias_path_notice'] = '<b>Nota:</b> Verifique se o caminho está correto. Um novo diretório será criado em caso de novo caminho.';
$l['alias_name_notice'] = '<b>Nota:</b> Depois de adicionar isso, você poderá acessar http://localhost/seu_site.';
if($globals['os'] == 'windows'){
	$l['alias_path_eg'] = 'EX: C:/www/seu_site';
}else{
	$l['alias_path_eg'] = 'EX: /usr/local/www/seu_site';
}
$l['alias_name_eg'] = 'EX: seu_site';
$l['add_new_button'] = 'Adicionar novo';
$l['back_button'] = 'Voltar';
$l['no_alias'] = 'No Alias found';
