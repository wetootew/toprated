<div id="fb-root"></div>
<script>
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/it_IT/sdk.js#xfbml=1&cookie=1&satus=1&appId=1439231382984557&version=v2.1";
  fjs.parentNode.insertBefore(js, fjs);
  
  window.fbAsyncInit = function() {
  FB.init({
    appId      : '1439231382984557',
    cookie     : true,  // enable cookies to allow the server to access the session
    xfbml      : true,  // parse social plugins on this page
    version    : 'v2.0' // use version 2.1
  });

  FB.Event.subscribe('auth.login', function(response) {
  alert('we')
    FB._oauth = false;
    FB.Cookie.setEnabled(true);
    FB.Auth.setSession(response.authResponse, response.status);
    FB._oauth = true;
    window.location.reload();
});
}(document, 'script', 'facebook-jssdk'));


function statusChangeCallback(response) {
  if (response.status === 'connected'){
      FB.api('/me', function(user) {
    alert(user.name+ ', ' + user.email);
    });
  }
}

function checkLoginState() {FB.getLoginStatus(function(response) {statusChangeCallback(response);});};


</script>
<?php
use Facebook\HttpClients\FacebookHttpable;
use Facebook\HttpClients\FacebookCurl;
use Facebook\HttpClients\FacebookCurlHttpClient;
use Facebook\Entities\AccessToken;
use Facebook\Entities\SignedRequest;
use Facebook\FacebookSession;
use Facebook\FacebookRequest;
use Facebook\FacebookResponse;
use Facebook\FacebookSDKException;
use Facebook\FacebookRequestException;
use Facebook\FacebookOtherException;
use Facebook\FacebookAuthorizationException;
use Facebook\GraphObject;
use Facebook\GraphSessionInfo;
use Facebook\FacebookSignedRequestFromInputHelper; // added in v4.0.9
use Facebook\FacebookJavaScriptLoginHelper;
 
FacebookSession::setDefaultApplication('1439231382984557', '0a6b44656cebac45c3c6f4fd62aabbca');
$helper = new FacebookJavaScriptLoginHelper('1439231382984557');
try {
    $session = $helper->getSession();
} catch(FacebookRequestException $ex) {
    echo 'facebook error';
    // When Facebook returns an error
} catch(\Exception $ex) {
    // When validation fails or other local issues
    echo 'login error';
}
if ($session) echo "logged in!";
?>
<fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
</fb:login-button>
<div class="fb-login-button" onlogin="checkLoginState()" scope="public_profile,email" data-max-rows="1" data-size="icon" data-show-faces="false" data-auto-logout-link="true"></div>
