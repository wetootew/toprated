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
$appId = '1439231382984557';
if ( session_status() == PHP_SESSION_NONE ) {
 session_start();
 require_once __DIR__ . '/vendor/autoload.php';
 error_reporting(E_ALL);
 ini_set('display_errors', 1);
 FacebookSession::setDefaultApplication($appId,'0a6b44656cebac45c3c6f4fd62aabbca');
 $helper = new FacebookJavaScriptLoginHelper();
 try { $session = $helper->getSession();}
 catch (Exception $e) { echo 'ex: ' . $e->getCode().' '. $e->getMessage();}
 if (isset($session) && $session) {
     $user_profile = (new FacebookRequest($session, 'GET', '/me'
     ))->execute()->getGraphObject(GraphUser::className());
     //save to db $user_profile->getProperty('email'); print_r( $user_profile, 1 )
     die "Name: " . $user_profile->getName();
 }
 die "error";
}
?>
<!DOCTYPE html> 
<title>Boh</title>
 <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
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
   alert('ajax call <?php echo basename(__FILE__); ?>')
  if(response.status != 'unknown')
   jQuery.ajax().done(function(data){alert(data);});
   alert('ajax called')
 }
 
  function checkLoginState() { FB.getLoginStatus(function(response) { fbLoginCheck(response); }); }
 </script>
<div class="fb-login-button" onlogin="checkLoginState()" scope="public_profile,user_about_me,user_location,email" data-size="icon"></div>
