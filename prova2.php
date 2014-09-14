<?php 
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
 $appId = '1439231382984557';
FacebookSession::setDefaultApplication($appId,'0a6b44656cebac45c3c6f4fd62aabbca');

$helper = new FacebookJavaScriptLoginHelper();
try {
    $session = $helper->getSession();
} catch(FacebookRequestException $e) {
  echo 'fbex: ' . $e->getCode().' '. $e->getMessage();
} catch(\Exception $e) {
  echo 'ex: ' . $e->getCode().' '. $e->getMessage();
}
if ($session) {
  echo 'logged in';
} else
  echo 'not logged in';
?>
<?php echo $appId; ?>
<!DOCTYPE html> 
<title>Boh</title>


<div id="fb-root"></div>
 <script>
  window.fbAsyncInit = function() {
   FB.init({appId:<?php echo $appId; ?>, status:false, cookie:true, xfbml:true, oauth:true});
  };

 (function() {
  var e = document.createElement('script'); e.async = true;
  e.src = '//connect.facebook.net/en_US/all.js';
  document.getElementById('fb-root').appendChild(e);
 }());

 function fbLoginCheck(response){
 alert('asd');
  if(response.status != 'unknown') //reload or redirect once logged in...
   window.location.reload();
 }
 
  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      fbLoginCheck(response);
    });
  }
 </script>

   <a class="fb-login-button" data-size="icon"
    onclick='FB.login(fbLoginCheck,{ scope: "user_about_me,user_location,user_birthday,email"})'>
   <span class="fb_button_text">Join with Facebook</span></a>

<div class="fb-login-button" onlogin="checkLoginState()" scope="public_profile,user_location,email" data-max-rows="1" data-size="icon" data-show-faces="true" data-auto-logout-link="true"></div>




