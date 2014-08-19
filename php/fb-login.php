<div id="fb-root"></div>
<script>
window.fbAsyncInit = function() {FB.init({appId: '1439231382984557', xfbml: true, version: 'v2.0' });};
function checkLoginState() {FB.getLoginStatus(function(response) {statusChangeCallback(response);});}

function statusChangeCallback(response) {
    if (response.status === 'connected') 
      FB.api('/me', function(response) {
        $(".login").innerHTML = 'Benvenuto ' + response.name + ',<br>' +  response.email);
      });
    else  $(".login").innerHTML += response.status;
  }
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/it_IT/sdk.js#xfbml=1&appId=1439231382984557&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<?php
use Facebook\FacebookJavaScriptLoginHelper;
use Facebook\FacebookSession;
use Facebook\FacebookRequest;
use Facebook\FacebookResponse;
use Facebook\FacebookSDKException;
use Facebook\FacebookRequestException;
use Facebook\FacebookAuthorizationException;
use Facebook\GraphObject;
FacebookSession::setDefaultApplication('1439231382984557', '0a6b44656cebac45c3c6f4fd62aabbca');
$helper = new FacebookJavaScriptLoginHelper();
try {
    echo 'getsession';
    $session = $helper->getSession();
} catch(FacebookRequestException $ex) {
    echo 'facebook error';
    // When Facebook returns an error
} catch(\Exception $ex) {
    // When validation fails or other local issues
    echo 'login error';
}
if ($session) {
  echo "logged in!";
} else
  echo "not logged in!";
?>
