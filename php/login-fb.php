
<!DOCTYPE html> 
<title>Boh</title>
 <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<div id="fb-root"></div>
<script>
 window.fbAsyncInit = function(){FB.init({appId:'1439231382984557', status:1, cookie:1, xfbml:1, oauth:1})};

 (function() {
  var e = document.createElement('script'); e.async = true;
  e.src = '//connect.facebook.net/en_US/all.js';
  document.getElementById('fb-root').appendChild(e);
 }());

 function fbLoginCheck(response){
  if(response.status != 'unknown')
   jQuery.ajax('<?php echo basename(__FILE__); ?>').done(function(data){alert(data);});
 }
 
 function checkLoginState() { FB.getLoginStatus(function(response) { fbLoginCheck(response); }); }
</script>
<div class="fb-login-button" onlogin="checkLoginState()" scope="public_profile,user_about_me,user_location,email" data-size="icon"></div>
