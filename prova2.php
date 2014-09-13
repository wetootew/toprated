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


$helper = new FacebookRedirectLoginHelper();
try {
  $session = $helper->getSessionFromRedirect();
} catch(FacebookRequestException $ex) {
  // When Facebook returns an error
} catch(\Exception $ex) {
  // When validation fails or other local issues
}
if ($session) {
  echo 'logged in';
}
?>
<?php echo $appId; ?>
<!DOCTYPE html> 
<title>Boh</title>


<div id="fb-root"></div>
 <script>
     window.fbAsyncInit = function() {

     // Initialize Facebook Connect
    FB.init({
       appId  : <?php echo $appId; ?>,
       status : false, // Check login status
       cookie : true, // Enable cookies to allow the server to access the session
       xfbml  : true,  // Parse XFBML
       oauth  : true
    });

     };

   // Get Facebook Connect JS and append it to the DOM
   (function() {
   var e = document.createElement('script'); 
    e.async = true;
    e.src = document.location.protocol+'//connect.facebook.net/en_US/all.js#xfbml=1';
    document.getElementById('fb-root').appendChild(e);
   }());

  function fbLoginCheck(response){
     if(response.status != 'unknown'){
       //reload or redirect once logged in...
       window.location.reload();
    }
   }
 </script>

   <a class="fb_button fb_button_medium"  
    onclick='FB.login(fbLoginCheck,{ scope: "user_about_me,user_location,user_birthday,email,publish_stream"})'>
   <span class="fb_button_text">Join with Facebook</span></a>




