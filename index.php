<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once __DIR__ . '/php/db.php'; 
require_once __DIR__ . '/vendor/autoload.php';
?>
<!DOCTYPE html> 
<title>Boh</title>
<link rel="stylesheet" type="text/css" href="style.css">
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script type="text/javascript">

jQuery(function($) {
    $("li").click(function(event ) {
				//event.stopPropagation();
        $(this).toggleClass("click");
		$("li").not(this).removeClass('click');
    });
		
		//$("div:(.sidebar)").click(function(event ) {
		//event.stopPropagation();
		//$("li").removeClass('click');
    //});
});
</script>


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
	<img src=rigasolaCB.png>
	<ul class="center FlyOut DropDown">
	 <li><a href=#> Ordina </a>
	  <ul><li class=bubble><a href=#>Per data</a><a href=#>Per nome</a><br>
		<a href=#>Pi&#249 visti</a><a href=#>Meno visti</a><br>
		<a href=#>Voti alti</a><a href=#>Voti bassi</a><br><br>
		<a href="#" class="bottonechiudi">Chiudi</a></li></ul>
		
	 <li><a href=#> Filtra </a>
	  <ul><li class=bubble><a href=#>Nessun filtro</a><br>
		<a href=#>Filtra per voto</a><br>
		<!-- <input type=text name=voto value=Min size="3"><input type=text name=voto value=Max size="3"><br> -->
		
		</li></ul>
	</ul>
  <img src=rigasolaCB.png>	
	</div>
 </div>

 <div id=bacheca> 
  <h1>Bacheca Eventi</h1>
	<div class="center comandi">
	<img src=rigasolaB.png>
	<ul class="center FlyOut DropDown">
	 <li><a href=#> Ordina </a>
	  <ul><li class=bubble><a href=#>Per data</a><a href=#>Per nome</a><br>
		<a href=#>Pi&#249 visti</a><a href=#>Meno visti</a><br>
		<a href=#>Voti alti</a><a href=#>Voti bassi</a><br><br>
		<a href="#" class="bottonechiudi">Chiudi</a></li></ul>
		
	 <li><a href=#> Filtra </a>
	  <ul><li class=bubble><a href=#>Nessun filtro</a><br>
		<a href=#>Per voto</a> <!-- <br>
		<input type=text name=voto value=Min size="3"><input type=text name=voto value=Max size="3"> --><br>
		<a href=#>Per data</a><br>
		
		</li></ul>
	</ul>
  <img src=rigasolaB.png>	
	</div>
 </div>

</div>
