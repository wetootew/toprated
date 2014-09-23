
<!DOCTYPE html> 
<title>Boh</title>
<div id="fb-root"></div>
 <script>
  window.fbAsyncInit = function() {
   FB.init({appId:'1439231382984557', status:true,cookie:true,xfbml:true,oauth:true});
  };

 (function() {
  var e = document.createElement('script'); e.async = true;
  e.src = '//connect.facebook.net/en_US/all.js';
  document.getElementById('fb-root').appendChild(e);
 }());

 function fbLoginCheck(response){
  if(response.status != 'unknown') //reload or redirect once logged in...
   ajax('<?php echo __FILE__ ; ?>').done(function(data){alert(data)})
  alert('<?php echo __FILE__; ?>')
   //window.location.reload();
 }
 
  function checkLoginState() {
    FB.getLoginStatus(function(response) { fbLoginCheck(response); });
  }
 </script>


<div class="fb-login-button" onlogin="checkLoginState()" scope="public_profile,user_about_me,user_location,email" data-size="icon"></div>




