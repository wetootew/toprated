<?php

require_once('Oauth.php');

session_start();

$app_id = 'APP_ID';
$app_secret = 'APP_SECRET';
$callback = 'CALLBACK_URL'; // [DOMAIN]/auth/facebook.php in this example

$facebook = new Facebook($app_id, $app_secret, $callback);
if($facebook->validateAccessToken()){
        $response = $facebook->makeRequest('https://graph.facebook.com/me');
        print_r($response);
}
