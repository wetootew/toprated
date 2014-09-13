
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
  $.getScript(‘/connect.facebook.net/en_US/sdk.js’, function(){
    FB.init({
      appId      : ‘1439231382984557‘,
      status     : true,
      cookie     : true,
      xfbml      : true,
      version    : ‘v2.1′
    });
 
    FB.getLoginStatus(statusChangeCallback);
    FB.Event.subscribe(‘auth.login’, statusChangeCallback);
  });
 
  function statusChangeCallback(response) {
  alert('asd');
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
  alert('assadd');
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
<div id="fb-root"></div>
<?php
$helper = new FacebookJavaScriptLoginHelper();
try {
  $session = $helper->getSession();
} catch( FacebookRequestException $ex ) {
  echo 'fbex';
} catch( Exception $ex ) {
  echo 'ex';
}
 
// see if we have a session
if ( isset( $session ) ) {
  //$request = new FacebookRequest( $session, ‘GET’, ‘/me’ );
  //$response = $request->execute();
  //$graphObject = $response->getGraphObject();
  //echo $graphObject->getProperty(‘id’). ‘<br/>’;
  //echo $graphObject->getProperty(‘name’). ‘<br/>’;
  //echo $graphObject->getProperty(‘email’). ‘<br/>’;
  echo 'logged in';
}else echo '<button id="fb_login">Fb Login</button>';

?>
<fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
</fb:login-button>
<div class="fb-login-button" onlogin="checkLoginState()" scope="public_profile,email" data-max-rows="1" data-size="icon" data-show-faces="false" data-auto-logout-link="true"></div>


</body>
</html>
