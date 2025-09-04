<?php

//////////////////////////////////////////////////////////////
//===========================================================
// login_lang.php
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
	global $softpanel;

$l['user_data_missing'] = 'O campo senha ou usuário está em branco';
$l['invalid_username'] = 'O usuário ou senha estão incorretos';
$l['invalid_password'] = 'O usuário ou senha estão incorretos'; 
$l['invalid_user'] = 'O usuário ou senha estão incorretos'; 
$l['no_username'] = 'O campo usuário está em branco';
$l['no_password'] = 'O campo senha está em branco';
$l['disable_user'] = 'O login foi desabilitado pelo administrador.';

$l['<title>'] = 'Login';
$l['sign_in'] = 'Login';
$l['log_user'] = 'Usuário';
$l['log_pass'] = 'Senha';
$l['sub_but'] = 'Login';

$l['<title_fpass>'] = 'Esqueci minha senha';
$l['pass_nomatch'] = 'O usuário ou senha estão incorretos.';
$l['forgotpass'] = 'Esqueci minha senha';
$l['emailuser'] = 'E-mail';
$l['enteremail'] = 'Digite seu e-mail';
$l['sub_email'] = 'Enviar';
$l['no_email'] = 'Você não enviou seu e-mail';
$l['invalidemail'] = 'O e-mail digitado é inválido';
$l['mail_sub'] = 'Resetar senha';
$l['mail_body'] = 'Olá,
						
Uma solicitação para redefinir sua senha foi feita.
Se você não solicitou a redefinição de senha, ignore este e-mail.

Se você deseja redefinir sua senha, clique no URL abaixo:
http://'.(($globals['softpanel'] == 'webuzo') ? $softpanel->getConf('WU_PRIMARY_DOMAIN').':2002' : '127.0.0.1').'/index.php?act=login&sa=resetpass&key=&soft-1;

Até mais,
'.$globals['sn'];
$l['mail_done'] = 'Um email foi enviado com os detalhes para redefinir sua senha';
$l['fuser_mail_sub'] = 'Usuário do Webuzo';
$l['fuser_mail_body'] = 'Olá,
						
Foi feita uma solicitação para buscar o nome de usuário do Webuzo.
Se você não solicitou o nome de usuário do Webuzo, ignore este email.

Entre na URL abaixo:
http://'.(($globals['softpanel'] == 'webuzo') ? $softpanel->getConf('WU_PRIMARY_DOMAIN').':2002' : '127.0.0.1').'/index.php?act=login

Usuário: &soft-1;

Até mais,
'.$globals['sn'];
$l['fuser_mail_done'] = 'Um email foi enviado com o nome de usuário Webuzo';
$l['forgotuser'] = 'Esqueci meu usuário';
$l['back_to_login'] = 'Voltar';

$l['<title_reset>'] = 'Resetar senha';
$l['resetpass'] = 'Resetar senha';
$l['log_new_pass'] = 'Nova senha'; 
$l['log_reppass'] = 'Confirmar senha';
$l['changepass'] = 'Mudar senha';
$l['no_key'] = 'Nenhuma chave de redefinição foi enviada';
$l['invalidkey'] = 'Você especificou uma chave inválida';
$l['no_new'] = 'Digite uma senha válida';
$l['no_reppass'] = 'Digite a senha de confirmação';
$l['no_match'] = 'As senhas que você forneceu não correspondem';
$l['keyexpire'] = 'A chave não é mais válida';
$l['passchanged'] = 'Senha alterada com sucesso. Por favor prossiga para o <a href="'.$globals['index'].'act=login">Login</a>';
$l['forgot_pass'] = 'Esqueci minha senha';

