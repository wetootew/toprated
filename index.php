<?php 
include('db.php'); 
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once __DIR__ . '/vendor/autoload.php';
?>
<!DOCTYPE html> 
<title>Boh</title>
<link rel="stylesheet" type="text/css" href="style.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

<div id=topbar>
 <img width=200px height=80px id=logo src="logo.jpg">
 <div class="registered center">
  <a href="#"> <img class=bottone src="Bottoni/prof1stat.png" onmouseover=src="Bottoni/prof1mouse.png" onmousedown=src="Bottoni/prof1stat.png" onmouseout=src="Bottoni/prof1stat.png">  </a> 
  <a href="#"> <img class=bottone src="Bottoni/contatti1stat.png" onmouseover=src="Bottoni/contatti1mouse.png" onmousedown=src="Bottoni/contatti1stat.png" onmouseout=src="Bottoni/contatti1stat.png">  </a>
  <a href="#"> <img class=bottone src="Bottoni/mess1stat.png" onmouseover=src="Bottoni/mess1mouse.png" onmousedown=src="Bottoni/mess1stat.png" onmouseout=src="Bottoni/mess1stat.png">  </a>
  <a href="#"> <img class=bottone src="Bottoni/evento1stat.png" onmouseover=src="Bottoni/evento1mouse.png" onmousedown=src="Bottoni/evento1stat.png" onmouseout=src="Bottoni/evento1stat.png">  </a>
  <a href="#"> <img class=bottone src="Bottoni/associaz1disatt.png">  </a>
  <a href="#"> <img class=bottone src="Bottoni/sponsor1disatt.png">  </a>
 </div>
 
 <div class="login unregistered">
  <p> Sei registrato? </p>
  <input type=text name=usr value=Username><br>
  <input type=text name=pwd value=Password><br> <!--da asterischizzare quando l'utente digita-->
	<img src="login.png">
 </div>
 <ul id=titoletto class="center unregistered FlyOut DropDown">
  <li><img src="Registrati.png"><br>Scopri tutti i vantaggi per utenti ed associazioni! 
   <ul><li><?php include('php/fb-login.php'); ?> <?php include('php/g-login.php'); ?></li></ul>
 </ul>
</div>
<div id=page>
 <div class=sidebar id=sponsor>
  <h2> Sponsor </h2>
 </div>
 
 <div class=sidebar id=board>
  <h2> Community Board </h2>
	<div class="center comandi">
	<img src=rigasolaCB.png><br>
	<ul class="center FlyOut DropDown">
	 <li><a href=#> Ordina </a>
	  <ul><li class=bubble><a href=#>per data</a></li></ul>
	 <li><a href=#> Filtra </a>
	  <ul><li class=bubble><a href=#>per data</a></li></ul>
	</ul>
	<br>
  <img src=rigasolaCB.png>	
	</div>
 </div>

 <div id=bacheca> 
  <h1>Bacheca Eventi</h1>
	<div class="center comandi">
	<img src=rigasolaB.png><br>
	<ul class="center FlyOut DropDown">
	 <li><a href=#> Ordina </a>
	  <ul><li class=bubble><a href=#>per data</a></li></ul>
	 <li><a href=#> Filtra </a>
	  <ul><li class=bubble><a href=#>per data</a></li></ul>
	</ul>
	<br>
  <img src=rigasolaB.png>	
	</div>
 </div>

</div>
