<?php

require_once('Oauth.php');

session_start();

$app_id = '1439231382984557';
$app_secret = '0a6b44656cebac45c3c6f4fd62aabbca';
$callback = 'prova.php'; // [DOMAIN]/auth/facebook.php in this example

$facebook = new Facebook($app_id, $app_secret, $callback);
if($facebook->validateAccessToken()){
        $response = $facebook->makeRequest('https://graph.facebook.com/me');
        print_r($response);
}
