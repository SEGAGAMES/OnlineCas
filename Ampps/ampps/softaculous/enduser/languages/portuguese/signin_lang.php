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

$l['user_data_missing'] = 'O campo API KEY ou API PASSWORD estava vazio';
$l['invalid_username'] = 'O nome de usuário ou senha que você digitou está incorreto';
$l['invalid_password'] = 'O nome de usuário ou senha que você digitou está incorreto'; 
$l['no_username'] = 'O campo Nome de usuário estava vazio';
$l['no_password'] = 'O campo Senha estava vazio';

$l['<title>'] = 'Login';
$l['sign_in'] = 'Login';
$l['log_user'] = 'Chave API';
$l['log_pass'] = 'Senha API';
$l['sub_but'] = 'Login';

$l['<title_fpass>'] = 'Esqueci minha senha';
$l['pass_nomatch'] = 'O nome de usuário ou senha que você digitou está incorreto.';
$l['forgotpass'] = 'Esqueci minha senha';
$l['emailuser'] = 'Endereço de e-mail';
$l['enteremail'] = 'Insira o seu endereço de email';
$l['sub_email'] = 'Enviar';
$l['no_email'] = 'Você não enviou seu endereço de email';
$l['invalidemail'] = 'O endereço de email que você enviou é inválido';
$l['mail_sub'] = 'Resetar senha';
$l['mail_body'] = 'Olá,
						
Uma solicitação para redefinir sua senha foi feita.
Se você não solicitou a redefinição de senha, ignore este e-mail.

Se você deseja redefinir sua senha, clique no URL abaixo:
http://'.(($globals['softpanel'] == 'webuzo') ? $softpanel->getConf('WU_PRIMARY_DOMAIN').':2002' : '127.0.0.1').'/index.php?act=login&sa=resetpass&key=&soft-1;

Obrigado,
'.$globals['sn'];
$l['mail_done'] = 'Um email foi enviado com os detalhes para redefinir sua senha';
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
$l['passchanged'] = 'Senha alterada com sucesso. Por favor prossiga para <a href="'.$globals['index'].'act=login">Login</a>';
$l['forgot_pass'] = 'Esqueci minha senha';

