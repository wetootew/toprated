<!DOCTYPE html> 
<title>Boh</title>
<link rel="stylesheet" type="text/css" href="style.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

<div id=topbar>
 <img width=200px height=80px id=logo src="logo.jpg">
 <div class="registered center">
  <a href="#"> <img class=bottone src="Bottoni/profilo/prof1stat.png" onmouseover=src="Bottoni/profilo/prof1mouse.png" onmousedown=src="Bottoni/profilo/prof1stat.png" onmouseout=src="Bottoni/profilo/prof1stat.png">  </a> 
	<a href="#"> <img class=bottone src="Bottoni/contatti/contatti1stat.png" onmouseover=src="Bottoni/contatti/contatti1mouse.png" onmousedown=src="Bottoni/contatti/contatti1stat.png" onmouseout=src="Bottoni/contatti/contatti1stat.png">  </a>
  <a href="#"> <img class=bottone src="Bottoni/messaggi/mess1stat.png" onmouseover=src="Bottoni/messaggi/mess1mouse.png" onmousedown=src="Bottoni/messaggi/mess1stat.png" onmouseout=src="Bottoni/messaggi/mess1stat.png">  </a>
	<a href="#"> <img class=bottone src="Bottoni/eventi/evento1stat.png" onmouseover=src="Bottoni/eventi/evento1mouse.png" onmousedown=src="Bottoni/eventi/evento1stat.png" onmouseout=src="Bottoni/eventi/evento1stat.png">  </a>
  <a href="#"> <img class=bottone src="Bottoni/associazioni/associaz1disatt.png">  </a>
  <a href="#"> <img class=bottone src="Bottoni/sponsor/sponsor1disatt.png">  </a>
 </div>
 
 <div class="login unregistered">
  <p> Sei registrato? </p>
  <input type=text name=usr value=Username><br>
  <input type=text name=pwd value=Password><br> <!--da asterischizzare quando l'utente digita-->
	<img src="login.png">
 </div>
 <div  id=titoletto class="center unregistered">
  <img src="Registrati.png"><br>
  <?php include('php/fb-login.php'); ?>
  <?php include('php/g-login.php'); ?>
  <p> Scopri tutti i vantaggi per utenti ed associazioni! </p>
 </div>
</div>
<div id=page>
 <div class=sidebar id=sponsor>
  <h2> Sponsor </h2>
 </div>
 
 <div class=sidebar id=board>
  <h2> Community Board </h2>
	<div class="center comandi">
	<img src=rigasolaCB.png><br>
	<a href=#> Ordina </a>
	<a href=#> Filtra </a>
	<br>
  <img src=rigasolaCB.png>	
	</div>
 </div>

 <div id=bacheca> 
  <h1>Bacheca Eventi</h1>
	<div class="center comandi">
	<img src=rigasolaB.png><br>
	<a href=#> Ordina </a>
	<a href=#> Filtra </a>
	<br>
  <img src=rigasolaB.png>	
	</div>
 </div>

</div>