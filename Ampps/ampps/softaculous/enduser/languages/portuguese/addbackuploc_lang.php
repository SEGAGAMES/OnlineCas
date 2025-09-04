<?php

//////////////////////////////////////////////////////////////
//===========================================================
// addbackuploc_lang.php
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

//Error Strings
$l['ftp_error-1'] = 'Domínio informado não responde';
$l['ftp_error-2'] = 'Não é possível conectar via FTP com os dados informados';
$l['ftp_error-3'] = 'Caminho informado não existe';
$l['ftp_error'] = 'Não foi possível conectar via FTP';
$l['no_ftp_user'] = 'Usuário FTP não foi informado';
$l['no_backup_loc'] = 'Local do backup não foi informado';
$l['no_backup_loc_name'] = 'No backup location name was specified';
$l['no_protocol'] = 'Protocolo inválido';
$l['no_server_host'] = 'Host não foi informado';
$l['record_exists'] = 'Já existe um local de backup com mesmo caminho';

//Theme Strings
$l['<title>'] = 'Adicionar Local do Backup';
$l['location_name'] = 'Nome do local';
$l['location_name_exp'] = 'Escolha um nome para o local de backup para sua referência';
$l['protocol'] = 'Protocolo';
$l['protocol_exp'] = 'Selecione o protocolo pelo qual '.APP.' irá se comunicar';
$l['server_host'] = 'Host do Servidor (Obrigatório)';
$l['server_host_exp'] = 'Preencha com o Host do Servidor. EX: ftp.dominio.com.br';
$l['port'] = 'Porta';
$l['port_exp'] = 'Preencha a porta para conexão (porta padrão de FTP é <b>21</b>)';
$l['ftp_user'] = 'Usuário';
$l['ftp_user_exp'] = 'O usuário da sua conta FTP';
$l['ftp_pass'] = 'Senha';
$l['ftp_pass_exp'] = 'A senha da sua conta FTP';
$l['backup_loc'] = 'Local do Backup';
$l['rel_backup_loc_exp'] = 'Caminho do diretório do FTP. EX: /backups'; 
$l['abs_backup_loc_exp'] = 'Caminho completo para backup. EX: /home/USUARIO/backups'; 
$l['dropbox_backup_loc_exp'] = 'Diretório de backup. EX: /backups ou você pode deixar em branco para permitir '.APP.' gerenciar o diretório de backup';
$l['add_backup_loc'] = 'Adicionar local do Backup';
$l['backup_loc_saved'] = 'Local do Backup adicional com sucesso';
$l['ftp'] = 'FTP';
$l['return_settings'] = 'Voltar para Configurações';
$l['invalid_backup_loc'] = 'O caminho do backup não está completo. EX: /home/USUARIO/backups'; 
$l['no_pass_pri'] = 'Forneça uma senha ou chave privada'; 
$l['off_rbackup'] = 'O backup remoto está desativado pelo administrador';
$l['dropbox'] = 'Dropbox';
$l['dropbox_authorization'] = 'Autorização';
$l['dropbox_authorize'] = 'Autorizar';
$l['dropbox_authorization_exp'] = 'Conceda ao '.APP.' acesso à APP para criar backups em sua conta do Dropbox. Clique no botão <b>Autorizar</b> e siga as etapas. Anote o código gerado e digite o mesmo na caixa de texto <b>Código de autenticação</b> abaixo';
$l['dropbox_code'] = 'Código de autenticação';
$l['dropbox_code_exp'] = 'Digite o código gerado após permitir o acesso através do botão <b>Autorizar</b> acima';
$l['dropbox_auth_tooltip'] = 'Clique neste botão para autorizar o acesso ao Dropbox';
$l['no_dropbox_access'] = 'Por favor, autorize o acesso do '.APP.' ao seu Dropbox';
$l['token_gen_failed'] = 'Ocorreu uma falha ao gerar o Token de acesso ao Dropbox';
$l['dropbox_backup_loc'] = 'Local do backup (opcional)';

$l['ftps'] = 'FTPS';
$l['sftp'] = 'SFTP';
$l['auth_password'] = 'Método de autenticação';
$l['auth_password_exp'] = 'Selecione o método de autenticação';
$l['private_key'] = 'Chave privada';
$l['private_key_exp'] = 'Preencha com sua chave privada aqui';
$l['passphrase'] = 'Palavra chave';
$l['passphrase_exp'] = 'Palavra chave para sua chave privada (Opcional)';
$l['auth_method_pass'] = 'Senha';
$l['auth_method_key'] = 'Chave SSH';

$l['gdrive'] = 'Google Drive';
$l['gdrive_auth_message'] = 'Você será solicitado a autorizar o '.APP.' para acessar seu Google Drive ao enviar o formulário';
$l['gdrive_token_gen_failed'] = 'Falha ao gerar o token de acesso do Google Drive';
$l['gdrive_err_access_denied'] = 'Parece que você cancelou o processo de autorização';
$l['ampps_notify_premium'] = 'Esse recurso está disponível na versão premium do AMPPS. Adquira o <b><a href="https://ampps.com/pricing/">AMPPS Premium</a></b>';

$l['rbackup_protocol_disabled'] = 'Backup on <b>&soft-1;</b> is disabled by Admin'; 

$l['webdav'] = 'WebDAV';
$l['webdav_port_exp'] = 'Enter the port to connect (default WebDAV port is <b>80</b> for insecure and <b>443</b> for secure)';
$l['webdav_ftp_user_exp'] = 'The username of your WebDAV Account';
$l['webdav_ftp_pass_exp'] = 'The Password of your WebDAV account';
$l['webdav_backup_loc_exp'] = 'Relative path from WebDAV user\'s directory e.g. /backups';
$l['webdav_server_host_exp'] = 'Enter the server host e.g. webdav.mydomain.com';
$l['no_webdav_connect'] = 'Failed to connect to the WebDAV server';

$l['onedrive'] = 'Microsoft OneDrive';
$l['onedrive_auth_message'] = 'You will be prompted to authorize '.APP.' to access your OneDrive on submitting the form';
$l['onedrive_err_access_denied'] = 'It seems you cancelled the authorization process';
$l['onedrive_token_gen_failed'] = 'Failed to generate OneDrive Access Token';
$l['aws_s3bucket'] = 'Amazon S3';
$l['aws_endpoint'] = 'AWS S3 Endpoint';
$l['aws_endpoint_exp'] = 'Enter your AWS S3 Endpoint e.g. "s3.amazonaws.com"<br /> For more Information <a href="https://docs.aws.amazon.com/general/latest/gr/s3.html" target="_blank">Click here</a>';
$l['aws_region'] = 'AWS S3 Region';
$l['aws_region_exp'] = 'Enter your AWS S3 Region e.g. "us-east-1"<br />  For more Information <a href="https://docs.aws.amazon.com/general/latest/gr/s3.html" target="_blank">Click here</a>';
$l['aws_bucketname'] = 'AWS S3 Bucket Name';
$l['aws_accessKey'] = 'AWS S3 Access Key';
$l['aws_secretKey'] = 'AWS S3 Secret Key';
$l['aws_backup_loc'] = 'AWS S3 Backup Location (Optional)';
$l['aws_backup_loc_exp'] = 'Backup Directory e.g. /backups  or you can leave empty to allow '.APP.' to manage the backup directory';
$l['aws_bucketname_exp'] = 'Enter the AWS S3 bucket name where you wish to create softaculous backups. If the bucket is not present, it will be created automatically<br /> For Bucket Naming Rules <a href="https://docs.aws.amazon.com/AmazonS3/latest/userguide/bucketnamingrules.html" target="_blank">Click here</a>';
$l['no_accessKey'] = 'Please provide the AWS S3 access key';
$l['no_secretKey'] = 'Please provide the AWS S3 secret key';
$l['no_endpoint'] = 'Please provide the AWS S3 endpoint';
$l['no_region'] = 'Please provide the AWS S3 region';
$l['no_bucket'] = 'Please provide the AWS S3 bucket name';
$l['create_bucket_failed'] = 'Failed to create bucket \'&soft-1;\'';
