<?php 
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
if ( session_status() == PHP_SESSION_NONE ) {
 session_start();
 require_once __DIR__ . '/../vendor/autoload.php';
 error_reporting(E_ALL); ini_set('display_errors', 1);
 
 FacebookSession::setDefaultApplication('1439231382984557','0a6b44656cebac45c3c6f4fd62aabbca');
 $helper = new FacebookJavaScriptLoginHelper();
 try { $session = $helper->getSession();}
 catch (Exception $e) { echo 'ex: ' . $e->getCode().' '. $e->getMessage();}
 if (isset($session) && $session) {
     $user_profile = (new FacebookRequest($session, 'GET', '/me'
     ))->execute()->getGraphObject(GraphUser::className());
     //save to db $user_profile->getProperty('email'); print_r( $user_profile, 1 )
     exit("Ciao: " . $user_profile->getName());
 }
 die "login error";
}
?>
 <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<div id="fb-root"></div>
<div id="fb-login">
<script>
 window.fbAsyncInit = function(){FB.init({appId:'1439231382984557', status:1, cookie:1, xfbml:1, oauth:1})};

 (function() {
  var e = document.createElement('script'); e.async = true;
  e.src = '//connect.facebook.net/it_IT/all.js';
  document.getElementById('fb-root').appendChild(e);
 }());

 function fbLoginCheck(response){
  if(response.status != 'unknown')
   jQuery.ajax('/php/fb-login.php').done(function(data){alert(data + ' ' $('#fb-login').html()); $('#fb-login').html(data);});
 }
 
 function checkLoginState() { FB.getLoginStatus(function(response) { fbLoginCheck(response); }); }
</script>
<div class="fb-login-button" onlogin="checkLoginState()" scope="public_profile,user_about_me,user_location,email" data-size="medium"></div>
</div>
