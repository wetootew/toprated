<?php 
$appId = '1439231382984557';
session_start(); 
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once __DIR__ . '/vendor/autoload.php';

use Facebook\FacebookSession;
use Facebook\FacebookRedirectLoginHelper;
use Facebook\FacebookJavaScriptLoginHelper;
use Facebook\FacebookRequest;
use Facebook\FacebookResponse;
use Facebook\FacebookSDKException;
use Facebook\FacebookRequestException;
use Facebook\FacebookAuthorizationException;
use Facebook\GraphObject;
use Facebook\GraphUser;
FacebookSession::setDefaultApplication($appId,'0a6b44656cebac45c3c6f4fd62aabbca');

$helper = new FacebookJavaScriptLoginHelper();
try { $session = $helper->getSession();}
catch (Exception $e) { echo 'ex: ' . $e->getCode().' '. $e->getMessage();}
if ($session){
 
    $user_profile = (new FacebookRequest($session, 'GET', '/me'
    ))->execute()->getGraphObject(GraphUser::className());

    echo "Name: " . $user_profile->getName();
    echo "email: " . $user_profile->getProperty('email');
  echo '<pre>' . print_r( $user_profile, 1 ) . '</pre>';
  
}
else
  echo 'not logged in';
?>
<!DOCTYPE html> 
<title>Boh</title>
<div id="fb-root"></div>
<script>
 window.fbAsyncInit = function() {
  FB.init({appId:<?php echo $appId; ?>, status:true, cookie:true, xfbml:true, oauth:true});
 };

 (function() {
  var e = document.createElement('script'); e.async = true;
  e.src = '//connect.facebook.net/en_US/all.js';
  document.getElementById('fb-root').appendChild(e);
 }());

 function fbLoginCheck(response){
  if(response.status != 'unknown')
   window.location.reload();
 }
 
  function checkLoginState() { FB.getLoginStatus(function(response) { fbLoginCheck(response); }); }
 </script>
<div class="fb-login-button" onlogin="checkLoginState()" scope="public_profile,user_about_me,user_location,email" data-size="icon"></div>
