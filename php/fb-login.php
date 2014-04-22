<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/it_IT/all.js#xfbml=1&appId=1439231382984557";
  fjs.parentNode.insertBefore(js, fjs);
FB.api('/me', function (response) {
alert('Welcome, ' + response.name + "!");
alert('Your email id is : '+ response.email);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-login-button" data-max-rows="1" data-size="icon" data-show-faces="false" data-auto-logout-link="true"></div>

