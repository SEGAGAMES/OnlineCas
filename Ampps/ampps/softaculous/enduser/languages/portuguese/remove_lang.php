<?php

//////////////////////////////////////////////////////////////
//===========================================================
// remove_lang.php
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

$l['no_ins'] = 'Não foram realizadas instalações';
$l['wrong_ins_title'] = 'ID de instalação incorrecto';
$l['wrong_ins'] = 'O ID de instalação informado não existe';
$l['cant_remove_dir'] = 'Não é possivel remover o diretório uma vez que o mesmo é o diretório base do site. Desmarque a opção <b>Remover Diretório</b> para que possa continuar.';
$l['cant_remove_wwwdir'] = 'O diretório WEB não pode ser removido, pois é o diretório inicial. Desmarque a opção <b>Remover diretório da web</b> para continuar sem remover o diretório da web.';
$l['mail_rem_ins'] = 'Uma instalação do software &soft-1; foi removido. Abaixo estão os detalhes da instalação: ';
$l['mail_path'] = 'Diretório';
$l['mail_url'] = 'URL';
$l['mail_db'] = 'Banco de dados';
$l['mail_dbuser'] = 'Usuário';
$l['mail_dbhost'] = 'Host';
$l['mail_dbpass'] = 'Senha';
$l['mail_time'] = 'Data de instalação';
$l['mail_rem_time'] = 'Data de remoção';
$l['mail_subject'] = 'Removida a instalação de &soft-1;';
$l['mail_cron_command'] = 'Tarefa agendada';
$l['mail_datadir'] = 'Diretório de dados';
$l['mail_wwwdir'] = 'Diretório web';
$l['checking_data'] = 'Verificando os dados enviados';
$l['rem_db'] = 'Removendo o Usuário/Banco de dados';
$l['rem_dir'] = 'Removendo o diretório';
$l['rem_datadir'] = 'Removendo o diretório de dados';
$l['rem_cron'] = 'Removendo crons';
$l['finishing_process'] = 'A remoção foi bem sucedida';
$l['wait_note'] = '<b>Importante:</b> Isso pode levar de 3 a 4 minutos. Não saia desta página até que a barra de progresso atinja 100%';

//Theme Strings
$l['<title>'] = APP.' - Remover';
$l['info'] = 'Detalhes';
$l['ins_softname'] = 'Software';
$l['ins_num'] = 'Número da instalação';
$l['ins_ver'] = 'Versão';
$l['ins_time'] = 'Data';
$l['ins_path'] = 'Diretório';
$l['ins_url'] = 'URL';
$l['ins_db'] = 'Banco de dados';
$l['ins_dbuser'] = 'Usuário';
$l['ins_dbpass'] = 'Password';
$l['ins_dbhost'] = 'Host';
$l['remove_ins'] = 'Remover instalação';
$l['remove_dir'] = 'Remover diretório';
$l['remove_dir_exp'] = 'Caso marque esta opção todo o diretório será apagado';
$l['remove_db'] = 'Remover banco de dados';
$l['remove_db_exp'] = 'Caso marque esta opção o banco de dados será apagado';
$l['remove_dbuser'] = 'Remover usuário';
$l['remove_dbuser_exp'] = 'Caso marque esta opção o usuário do banco de dados será removido';
$l['remove_conf'] = 'Estas ações são irreversiveis! \n Tem certeza que pretende continuar?';
$l['uninstalled'] = 'Instalação removida com sucesso';
$l['removeins'] = 'Remover Instalação';
$l['ins_cron_command'] = 'Comando a executar';
$l['remove_datadir'] = 'Remover diretório de dados';
$l['remove_datadir_exp'] = 'Caso marque esta opção o diretório de dados será removido.';
$l['ins_datadir'] = 'Diretório de dados';
$l['remove_wwwdir'] = 'Remover diretório web';
$l['remove_wwwdir_exp'] = 'Se marcado, o diretório da web será removido.';
$l['ins_wwwdir'] = 'Diretório web';
$l['return'] = 'Voltar';
$l['return_to_wpm'] = 'Return to WordPress Management';
$l['prog_removing'] = 'Removendo ';// Dont remove the trailing space
$l['prog_remove_complete'] = 'Instalação removida.';
$l['disabled_script_info'] = 'Nenhuma informação disponível, pois este script foi desativado.';

$l['wpc_return'] = 'Voltar';