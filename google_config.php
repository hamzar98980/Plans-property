<?php 
//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('940389226441-6irhrukprm2mb0uign4rkbbtrmv9q7hb.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('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');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/agency/google_signup.php');

//
$google_client->addScope('email');

$google_client->addScope('profile');

//start session on web page
// session_start();


?>