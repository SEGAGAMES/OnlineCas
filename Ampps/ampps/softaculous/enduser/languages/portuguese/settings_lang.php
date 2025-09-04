<?php

//////////////////////////////////////////////////////////////
//===========================================================
// settings_lang.php
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

$l['no_lang'] = 'Não foi seleccionado nenhum idioma';
$l['wrong_lang'] = 'O idioma selecionado não existe';
$l['no_timezone'] = 'Não selecionou o fuso horário';
$l['timezone_invalid'] = 'O fuso horário selecionado é inválido';
$l['backuploc_deleted'] = 'O local do backup foi excluído com sucesso';
$l['no_backup_loc_name'] = 'Nenhum local de backup encontrado';

// Theme Strings
$l['<title>'] = APP.' - Opções do utilizador';
$l['choose_lang'] = 'Selecione o idioma';
$l['exp_lang'] = 'Selecione o idioma pré-defenido';
$l['menu_options'] = 'Opções de menu';
$l['menu_exp'] = 'Pode expandir ou ocultar as sub-opções dos menus laterais!';
$l['timezone'] = 'Fuso horário';
$l['default_timezone'] = 'Pré-defenido';
$l['expand'] = 'Expandir';
$l['collapse'] = 'Ocultar';
$l['edit_settings'] = 'Salvar configurações gerais';
$l['settings'] = 'Configurações Gerais';
$l['settings_saved'] = 'Opções gravadas com sucesso';
$l['left_panel_bg'] = 'Escolha a cor do painel esquerdo';
$l['left_panel_bg_exp'] = 'Isso mudará a cor de fundo do painel esquerdo e da barra superior';
$l['text_color'] = 'Escolha a cor do texto do painel esquerdo';
$l['text_color_exp'] = 'Isso mudará a cor do texto do painel esquerdo e da barra superior';
$l['use_custom_color'] = 'Personalizar tema';
$l['exp_use_custom_color'] = 'Se marcado, '.APP.' usará as cores do tema selecionadas. Se você deseja redefinir o tema para o padrão, desmarque a caixa de seleção e salve as configurações';
$l['disable_suggestions'] = 'Disable '.APP.' Features suggestion';
$l['exp_disable_suggestions'] = 'This will disable '.APP.' features suggestion messages';
$l['reset'] = 'Resetar';
$l['arrange_domain'] = 'Classificar domínios em ordem alfabética';
$l['exp_arrange_domain'] = 'Se selecionada, a lista de domínios no menu suspenso <b>Escolher domínio</b> no formulário de instalação será classificada em ordem alfabética';
$l['your_setting'] = 'Suas configurações';
$l['list_backup_locs'] = 'Locais de backup';
$l['default'] = 'Padrão';
$l['backuploc_name'] = 'Nome';
$l['backuploc'] = 'Locais de backup';
$l['backuploc_edit'] = 'Editar';
$l['backuploc_del'] = 'Deletar';
$l['conf_del'] = 'Tem certeza de que deseja excluir este local de backup?';
$l['add_backup_loc'] = 'Adicionar local de backup';
$l['local_folder'] = 'Pasta local';
$l['manage_sets'] = 'Pacote de temas/plugins WordPress';
$l['exp_manage_sets'] = 'Instale e crie pacotes de plugins/temas';
$l['off_backup_au'] = 'Disable Backups before Auto Upgrade';
$l['exp_off_backup_au'] = 'If selected, backups will not be performed before upgrading installations or plugins and themes. Note: Make sure you have backups which you can use in case the upgrade fails.';

$l['backup_proto'] = 'Protocol';
$l['backup_ftp'] = 'FTP';
$l['backup_softftpes'] = 'FTPS';
$l['backup_softsftp'] = 'SFTP';
$l['backup_webdav'] = 'WebDAV';
$l['backup_dropbox'] = 'Dropbox';
$l['backup_gdrive'] = 'Google Drive';
$l['backup_onedrive'] = 'Microsoft OneDrive';
$l['backup_softaws'] = 'Amazon S3';