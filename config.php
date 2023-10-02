<?php

//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('1015812294096-v8c328jlg6a1bkn03457ckc4tn0b2vqf.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('RAiLdsb-aqtL2T2tTvsNywxX');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('https://khokangorain.com/login.php');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

?>