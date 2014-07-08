<?php 
include('db.php'); 
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once __DIR__ . '/vendor/autoload.php';
?>
<!DOCTYPE html> 
<title>Boh</title>
<link rel="stylesheet" type="text/css" href="style.css">
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script type="text/javascript">

jQuery(function($) {
  $(".FlyOut li").click(function(event) {
	  event.stopPropagation();
    $(this).toggleClass("click");
		$(".FlyOut li").not(this).not($(this).parents()).removeClass('click');
  });
		
	$("div").click(function(event) {
	  event.stopPropagation();
		$(".FlyOut li").removeClass('click');
  });
			
		
		
	/*$( ".slider-range" ).after(document.createElement('div').slider({
		range: true, min: 0, max: 5, values: [ 0, 5],
    slide: function( event, ui ) {
      $( ui.prev() ).val(ui.values[ 0 ] + " - " + ui.values[ 1 ] );
    }
  }));*/
	

});
</script>


<div id=topbar>
 <img width=200px height=80px id=logo src="logo.jpg">
 <div class="registered center">
 <ul class="FlyOut DropDown">
  <li><a href="#"> <img class=bottone src="Bottoni/prof1stat.png" onmouseover=src="Bottoni/prof1mouse.png" onmousedown=src="Bottoni/prof1stat.png" onmouseout=src="Bottoni/prof1stat.png">  </a>
	<ul class=bubble> 21212121212122121</ul> 
  <li><a href="#"> <img class=bottone src="Bottoni/contatti1stat.png" onmouseover=src="Bottoni/contatti1mouse.png" onmousedown=src="Bottoni/contatti1stat.png" onmouseout=src="Bottoni/contatti1stat.png">  </a>
  <ul class=bubble> 21212121212122121</ul> 
	<li><a href="#"> <img class=bottone src="Bottoni/mess1stat.png" onmouseover=src="Bottoni/mess1mouse.png" onmousedown=src="Bottoni/mess1stat.png" onmouseout=src="Bottoni/mess1stat.png">  </a>
  <ul class=bubble> 21212121212122121</ul> 
	<li><a href="#"> <img class=bottone src="Bottoni/evento1stat.png" onmouseover=src="Bottoni/evento1mouse.png" onmousedown=src="Bottoni/evento1stat.png" onmouseout=src="Bottoni/evento1stat.png">  </a>
  <ul class=bubble> 21212121212122121</ul> 
	<li><a href="#"> <img class=bottone src="Bottoni/associaz1disatt.png">  </a>
  <li><a href="#"> <img class=bottone src="Bottoni/sponsor1disatt.png">  </a>
 </ul>
 </div>
 <img width=200px height=80px class=registered id=spaziodx src="logo.jpg">
 
 <div class="login unregistered">
  <p> Sei registrato? </p>
  <input type=text name=usr placeholder=Username><br>
  <input type=password name=pwd placeholder=Password ><br>
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
	<img class=rigadimensione src=rigasolaCB.png><br>
	<ul class="center FlyOut DropDown">
	 <li><a href=#> Ordina </a>
	  <ul class=bubble>
		  <li><a href=#>Per data</a><a href=#>Per nome</a>
		  <li><a href=#>Pi&#249 visti</a><a href=#>Meno visti</a>
		  <li><a href=#>Voti alti</a><a href=#>Voti bassi</a>
		</ul>
		
	 <li><a href=#> Filtra </a>
	  <ul class=bubble>
			<li><a href=#>Nessun filtro</a>
		  <li><a href=#>Per voto</a>
		  <li><a href=#>Per data</a>
		</ul>
	</ul><br>
  <img class=rigadimensione src=rigasolaCB.png>
	</div>
 </div>

 <div id=bacheca> 
  <h1>Bacheca Eventi</h1>
	<div class="center comandi">
	<img class=rigadimensione src=rigasolaB.png><br>
	<ul class="center FlyOut DropDown">
	 <li><a href=#> Ordina </a>
	  <ul id=bachecaul class=bubble>
		  <li><a href=#>Per data</a><a class=frecciasu> </a>
			<li><a href=#>Per nome</a><a class=frecciasu> </a>
		  <li><a href=#>Per visite</a><a class=frecciasu> </a>
		  <li><a href=#>Per voto</a><a class=frecciasu> </a>
		</ul>
		
	 <li><a href=#> Filtra </a>
	  <ul id=bachecaul class=bubble>
			<li><a href=#>Nessun filtro</a>
		  <li><a href=#>Per voto</a><ul><li><input type=text class=slider-range></ul>
		  <li><a href=#>Per data</a>
		</ul>
	</ul><br>
  <img class=rigadimensione src=rigasolaB.png>	
	</div>
 </div>

</div>
