<div id="fb-root"></div>
<script>
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/it_IT/sdk.js#xfbml=1&cookie=&satus=1&appId=1439231382984557&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));


function statusChangeCallback(response) {
  if (response.status === 'connected'){
      FB.api('/me', function(user) {
    alert(user.name);
    alert(user.first_name);
    alert(user.last_name);
    alert(user.email);
    alert(response.name + ', ' +  response.email)
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
$helper = new FacebookJavaScriptLoginHelper();
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
<div class="fb-login-button" onlogin="checkLoginState()" scope="public_profile,email" data-max-rows="1" data-size="icon" data-show-faces="false" data-auto-logout-link="true"></div>
