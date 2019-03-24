<?php
include dirname(__FILE__)."/../../../config.php";
//database configuration
$db_host = $db_server;
$db_user = $db_user;
$db_pass = $db_pass;
$db_name = $db_client;
$db_search_name = $db_name;
$db_token = "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9" ;
$p_url = ltrim($server_url."extension/customize", '/');

$db = [$db_host, $db_user, $db_pass, $db_name];


//email configuration

$email_host = 'smtp.gmail.com';	
$email_port = '465';	
$email_username = "devtrcloud@gmail.com";
$email_password = "yahoo7889";
$email_SMTPSecure = 'ssl';


