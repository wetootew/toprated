<?php 
if (session_status() == PHP_SESSION_NONE) {
      session_start(); 
      error_reporting(E_ALL);
      ini_set('display_errors', 1);
      require_once __DIR__ . '/vendor/autoload.php';
      
  $code = $request->getContent();
  $gPlusId = $request->get['gplus_id'];
  // Scambia il codice di autorizzazione OAuth 2.0 per le credenziali utente.
  $client->authenticate($code);

  $token = json_decode($client->getAccessToken());
  // Verifica il token
  $reqUrl = 'https://www.googleapis.com/oauth2/v1/tokeninfo?access_token=' .
          $token->access_token;
  $req = new Google_HttpRequest($reqUrl);

  $tokenInfo = json_decode(
      $client::getIo()->authenticatedRequest($req)->getResponseBody());

  // In caso di errore nei dati del token, termina l'operazione.
  if ($tokenInfo->error) {
    return new Response($tokenInfo->error, 500);
  }
  // Accertati che il token ricevuto sia rivolto all'utente previsto.
  if ($tokenInfo->userid != $gPlusId) {
    return new Response(
        "Token's user ID doesn't match given user ID", 401);
  }
  // Accertati che il token ricevuto sia rivolto alla tua app.
  if ($tokenInfo->audience != CLIENT_ID) {
    return new Response(
        "Token's client ID does not match app's.", 401);
  }

  // Memorizza il token nella sessione per utilizzarlo successivamente.
  $app['session']->set('token', json_encode($token));
  $response = 'Succesfully connected with token: ' . print_r($token, true);
  
 echo $response;
} 
else
?>
<script type="text/javascript">
(function () {
var po = document.createElement('script');
po.type = 'text/javascript';
po.async = true;
po.src = 'https://plus.google.com/js/client:plusone.js?onload=start';
var s = document.getElementsByTagName('script')[0];
s.parentNode.insertBefore(po, s);
})();

 function signInCallback(authResult) {
  if (authResult['code']) {

    // Nascondi il pulsante di accesso ora che l'utente è autorizzato. Ad esempio: 
    $('#signinButton').attr('style', 'display: none');

    // Invia il codice al server
    $.ajax({
      type: 'POST',
      url: 'php/g-login.php?storeToken',
      contentType: 'application/octet-stream; charset=utf-8',
      success: function(result) {
        // Gestisci o verifica la risposta del server, se necessario.

        // Stampa l'elenco di persone che l'utente permette all'app di conoscere 
        // nella Console.
        console.log(result);
        if (result['profile'] && result['people']){
          $('#results').html('Hello ' + result['profile']['displayName'] + '. You successfully made a server side call to people.get and people.list');
        } else {
          $('#results').html('Failed to make a server-side call. Check your configuration and console.');
        }
      },
      processData: false,
      data: authResult['code']
    });
  } else if (authResult['error']) {
    // Si è verificato un errore.
    // Possibili codici di errore:
    //   "access_denied" - L'utente ha negato l'accesso alla tua app
    //   "immediate_failed" - Impossibile eseguire l'accesso automatico dell'utente
    // console.log('There was an error: ' + authResult['error']);
  }
}

</script>
<div id="signinButton">
  <span class="g-signin"
    data-scope="https://www.googleapis.com/auth/plus.login"
    data-clientid="YOUR_CLIENT_ID"
    data-redirecturi="postmessage"
    data-accesstype="offline"
    data-cookiepolicy="single_host_origin"
    data-callback="signInCallback">
  </span>
</div>
<div id="result"></div>


