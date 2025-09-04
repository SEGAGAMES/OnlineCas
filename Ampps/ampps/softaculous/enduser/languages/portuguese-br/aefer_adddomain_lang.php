<?php

//////////////////////////////////////////////////////////////
//===========================================================
// adddomain_lang.php
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

$l['no_domain'] = 'Nenhum domínio preenchido';
$l['alreay_exists'] = 'O domínio informado já está sendo utilizado em sua conta.';
$l['no_ftp_user'] = 'Usuário FTP não foi preenchido';
$l['no_ftp_pass'] = 'Senha FTP não foi preenchida';
$l['no_ftp_path'] = 'Caminho FTP não foi preenchido';
$l['no_backup_path'] = 'Caminho do backup não foi preenchido';
$l['no_data_dir'] = 'Diretório dos arquivos não foi preenchido';
$l['wrong_ftp_path'] = 'O caminho do FTP informado está incorreto e não aponta para o seu domínio.';
$l['ftp_error-1'] = 'Não houve resposta do seu domínio';
$l['ftp_error-2'] = 'Não é possível conectar via FTP com os dados informados';
$l['ftp_error-3'] = 'Caminho FTP informado não existe';
$l['no_port'] = 'Porta não foi preenchida';
$l['no_pub_allowed'] = 'Chave pública não é necessária durante a autenticação usando senha';
$l['no_public_key'] = 'O caminho para a chave pública não foi encontrada';
$l['no_private_key'] = 'O caminho para a chave privada não foi encontrada';
$l['err_sftp_only'] = 'Somente SFTP permite autenticação através de chaves';
$l['no_pub_pri'] = 'Chave pública ou privada não encontrada';
$l['no_protocol'] = 'Protocolo inválido';
$l['not_allowed'] = 'Você não tem permissão para adicionar novos domínios';
$l['ftp_error'] = 'Não foi possível conectar ao servidor FTP';
$l['err_upload_remote'] = 'Não foi possível fazer o upload do arquivo para o caminho do FTP';
$l['err_fetch_file'] = 'Não foi possível acessar o arquivo no domínio';
$l['err_fetch_path'] = 'Não foi possível buscar o caminho dos dados recebidos';

//Theme Strings
$l['<title>'] = 'Adicionar domínio';
$l['add_domain'] = 'Adicionar domínio';
$l['domain'] = 'Domínio';
$l['domain_exp'] = 'Preencha seu domínio (não utilize http://). EX: meudominio.com.br';
$l['ftp_user'] = 'Usuário';
$l['ftp_user_exp'] = 'O nome de usuário da sua conta FTP';
$l['ftp_pass'] = 'Senha';
$l['ftp_pass_exp'] = 'A senha da sua conta FTP';
$l['ftp_path'] = 'Caminho';
$l['ftp_path_exp'] = 'O caminho do FTP para seu domínio. EX: /public_html';
$l['backup_path'] = 'Caminho do backup';
$l['backup_path_exp'] = 'O caminho para armazenar seus backups feitos pela Softaculous. EX: /backups';
$l['data_dir'] = 'Diretório de dados';
$l['data_dir_exp'] = 'Caminho completo para o diretório de dados. EX: /home/USUARIO/datadir<br/>Alguns scripts como Elgg, Moodle, etc precisam de uma pasta não acessível pela web.<br/>.';
$l['ins_email_exp'] = 'Envie um email com detalhes de configuração ao instalar um novo software';
$l['submit_add'] = 'Teste e salve o domínio';
$l['settings_saved'] = 'Seu domínio foi salvo com sucesso';
$l['show_all_dom'] = 'Mostrar todos os domínios';
$l['port'] = 'Porta';
$l['port_exp'] = 'Preencha com a porta para conexão. EX: 21';
$l['protocol'] = 'Protocolo';
$l['protocol_exp'] = 'Selecione o protocolo pelo qual a Softaculous se comunicará';
$l['auth_password'] = 'Método de autenticação'; 
$l['auth_password_exp'] = 'Selecione o método de autenticação'; 
$l['private_key'] = 'Chave privada'; 
$l['private_key_exp'] = 'Preencha com sua chave privada'; 
$l['passphrase'] = 'Frase de acesso';
$l['passphrase_exp'] = 'Senha para chave privada criptografada (opcional)';
$l['sftp_path'] = 'Diretório da Web';
$l['sftp_path_exp'] = 'Caminho para o diretório web do usuário. EX: /home/USUARIO/public_html';
$l['sbackup_path_exp'] = 'Caminho para o diretório de backup. EX: /home/USUARIO/backups';
$l['server_host'] = 'Host do servidor (opcional)';
$l['server_host_exp2'] = 'Enter your server host name';
$l['server_host_exp'] = '<b>SE</b> seu domínio e host do servidor não são os mesmos, digite o host do servidor. EX: ftp.meudominio.com';
$l['auth_method_pass'] = 'Senha'; 
$l['auth_method_key'] = 'Chave SSH'; 
$l['no_pass_pri'] = 'Forneça uma senha ou chave privada'; 
$l['err_reconnect'] = 'Não foi possível reconectar ao banco de dados';
