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
 
FacebookSession::setDefaultApplication('1439231382984557','0a6b44656cebac45c3c6f4fd62aabbca');
?>
<html>
<head>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script>
$(document).ready(function() {
  var FBobject = {
    loaded: false,
    id: "",
    email: "",
    name: ""
  };
 
  $.ajaxSetup({ cache: true });
  $.getScript(‘/connect.facebook.net/zh_TW/sdk.js’, function(){
    FB.init({
      appId      : ‘1439231382984557‘,
      status     : true,
      cookie     : true,
      xfbml      : true,
      version    : ‘v2.0′
    });
 
    FB.getLoginStatus(statusChangeCallback);
    FB.Event.subscribe(‘auth.login’, statusChangeCallback);
  });
 
  function statusChangeCallback(response) {
    if (response.status === ‘connected’) {
      userLogin();
    } else if (response.status === ‘not_authorized’) {
      console.log(‘Please log into this app.’);
    } else {
      console.log(‘Please log into Facebook.’);
   }
  }
 
  function userLogin() {
    console.log(‘Welcome!Fetching your information…. ‘);
    FB.api(‘/me’, function(response) {
      FBobject.loaded = true;
      FBobject.id = response.id;
      FBobject.email = response.email;
      FBobject.name = response.name;
      console.log(FBobject);
    });
  }
 
  $("#fb_login").bind("click", function (e) {
    e.preventDefault();
    if(FBobject.loaded==false){
      FB.login(function(response) {
        if (response.authResponse) {
        }else{
          alert("login");
        }
      }, {scope: ‘email,publish_actions’});
    }else{
      alert("no login");
    }
  });
});
</script>
</head>
<body>
<?php
$helper = new FacebookJavaScriptLoginHelper();
try {
  $session = $helper->getSession();
} catch( FacebookRequestException $ex ) {
  echo 'fbex';
} catch( Exception $ex ) {
  echo 'ex';
}
 
?>
<button id="fb_login">Fb Login</button>

<div id="fb-root"></div>
</body>
</html>
