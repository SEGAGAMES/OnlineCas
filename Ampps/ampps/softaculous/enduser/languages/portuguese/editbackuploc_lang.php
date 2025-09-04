<?php

//////////////////////////////////////////////////////////////
//===========================================================
// editbackuploc_lang.php
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
$l['ftp_error-1'] = 'Não foi possível acessar o seu domínio';
$l['ftp_error-2'] = 'Não foi possível fazer o login com as informações de FTP';
$l['ftp_error-3'] = 'O caminho FTP informado não existe';
$l['ftp_error'] = 'Não foi possível conectar ao servidor FTP';
$l['no_ftp_user'] = 'Nenhum usuário FTP foi especificado';
$l['no_backup_loc'] = 'Nenhum local de backup foi informado';
$l['no_backup_loc_name'] = 'Nenhum nome do local de backup foi informado';
$l['no_protocol'] = 'Protocolo inválido';
$l['no_server_host'] = 'Nenhum host do servidor foi especificado';
$l['record_exists'] = 'O local de backup com o mesmo caminho já existe';

//Theme Strings
$l['<title>'] = 'Editar local do backup';
$l['edit_backup'] = 'Editar local do backup';
$l['location_name'] = 'Nome do local';
$l['location_name_exp'] = 'Escolha um nome para o local do backup para sua referência';
$l['protocol'] = 'Protocolo';
$l['protocol_exp'] = 'Selecione o protocolo pelo qual '.APP.' irá se comunicar';
$l['server_host'] = 'Host do servidor (obrigatório)';
$l['server_host_exp'] = 'Digite o host do servidor, por exemplo: ftp.mydomain.com';
$l['port'] = 'Porta';
$l['port_exp'] = 'Digite a porta para conectar (a porta FTP padrão é <b>2</b>)';
$l['ftp_user'] = 'Usuário';
$l['ftp_user_exp'] = 'O usuário da sua conta FTP';
$l['ftp_pass'] = 'Senha';
$l['ftp_pass_exp'] = 'A senha da sua conta FTP';
$l['backup_loc'] = 'Local do backup';
$l['rel_backup_loc_exp'] = 'Caminho do diretório do usuário do FTP. EX: /backups';
$l['abs_backup_loc_exp'] = 'Caminho absoluto para o diretório do backup. EX: /home/USUÁRIO/backups';
$l['dropbox_backup_loc_exp'] = 'Diretório de backup. EX: /backups ou você pode deixar em branco para permitir '.APP.' gerenciar o diretório de backup';
$l['edit_backup_loc'] = 'Salvar alterações';
$l['backup_loc_saved'] = 'Detalhes do local do backup salvos com sucesso';
$l['ftp'] = 'FTP';
$l['return_settings'] = 'Voltar';
$l['invalid_backup_loc'] = 'O caminho do backup não é absoluto. Forneça um caminho absoluto'; 
$l['no_pass_pri'] = 'Forneça uma senha ou chave privada'; 
$l['off_rbackup'] = 'O backup no local remoto está desativado pelo administrador';
$l['no_backup_loc_id'] = 'O ID do local de backup não foi publicado';
$l['invalid_backup_loc_id'] = 'O ID do local de backup é inválido';

$l['dropbox'] = 'Dropbox';
$l['dropbox_authorization'] = 'Autorização';
$l['dropbox_authorize'] = 'Re-autorizar';
$l['dropbox_authorization_exp'] = 'Clique para autorizar novamente '.APP.' Acesso à APP para criar backups em sua conta do Dropbox. Clique no botão <b>Re-autorizar</b> e siga as etapas. Anote o código gerado e digite o mesmo na caixa de texto <b>Código de autenticação</b> abaixo';
$l['dropbox_code'] = 'Código de autorização';
$l['dropbox_code_exp'] = 'Digite o código gerado depois de permitir o acesso através do botão <b>Re-autorizar</b> acima';
$l['dropbox_auth_tooltip'] = 'Clique neste botão para autorizar o Dropbox Access';
$l['no_dropbox_access'] = 'Autorize '.APP.' no ​​seu Dropbox';
$l['token_gen_failed'] = 'Falha ao gerar o token de acesso do Dropbox';
$l['dropbox_backup_loc'] = 'Local do backup (opcional)';

$l['ftps'] = 'FTPS';
$l['sftp'] = 'SFTP';
$l['auth_password'] = 'Método de autenticação';
$l['auth_password_exp'] = 'Selecione o método de autenticação';
$l['private_key'] = 'Chave privada';
$l['private_key_exp'] = 'Cole a chave privada aqui';
$l['passphrase'] = 'Frase de acesso';
$l['passphrase_exp'] = 'Senha para a chave privada (opcional)';
$l['auth_method_pass'] = 'Senha';
$l['auth_method_key'] = 'Chave SSH';

$l['gdrive'] = 'Google Drive';
$l['rbackup_protocol_disabled'] = 'Backup on <b>&soft-1;</b> is disabled by Admin';

$l['webdav'] = 'WebDAV';
$l['webdav_port_exp'] = 'Enter the port to connect (default WebDAV port is <b>80</b> for insecure and <b>443</b> for secure)';
$l['webdav_ftp_user_exp'] = 'The username of your WebDAV Account';
$l['webdav_ftp_pass_exp'] = 'The Password of your WebDAV account';
$l['webdav_backup_loc_exp'] = 'Relative path from WebDAV user\'s directory e.g. /backups';
$l['webdav_server_host_exp'] = 'Enter the server host e.g. webdav.mydomain.com';
$l['no_webdav_connect'] = 'Failed to connect to the WebDAV server';

$l['onedrive'] = 'Microsoft OneDrive';
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