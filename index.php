<!DOCTYPE html> 
<!--<?php 
session_start(); 
include('db.php'); 
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once __DIR__ . '/vendor/autoload.php';
?>-->
<title>Boh</title>
<link rel="stylesheet" type="text/css" href="style.css">
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="script.js" type="text/javascript"></script>
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
	
	$("div").click(function(event) {
	  event.stopPropagation();
		$(".FlyOut li").removeClass('click');
  });
		
  sortabledir = 1;
  $(".sortable").each(function (i,e) {$(e).find('th').click(function() {
     var b = $(e).find('tbody')[0], l = b.rows.length, c = this.cellIndex, a = [], f, t;
     for (i = 0; i < l; i++) // .v makes comparisons faster
        a[i]={o: b.rows[i], v: isNaN(f = parseFloat((t = b.rows[i].cells[c].textContent).replace(/(\$|\,)/g,''))) ? t:f};
     a.sort(function(a,b) { return sortabledir * (a.v > b.v ? 1 : -1) });
     for (i = 0; i < l; i++) b.appendChild(a[i].o);
     sortabledir*=-1;
  })});		
	
	$("#contatti .comandi li:not(:first-child):not(:last-child)").click(function(e) {
		gruppoFiltra(this);
  });
		
	$("#contatti .comandi li:first-child").click(function(e) {
	  e.stopPropagation();
		$("#contatti tbody tr").show();
  });
	
	function gruppoFiltra(g) {
		$("#contatti tbody tr").hide();		
		$("#contatti tbody ." + g.innerHTML.toLowerCase()).show();
  }
	
	function gruppoEditabile(g) {
	  g.keypress(function(e){if(e.keyCode==13) g.blur()});
		g.blur(function(e){g.attr('contenteditable','false')});
		g.dblclick(function(e) { g.attr('contenteditable','true');g.focus();})
		g.click(function(e) {gruppoFiltra(this)});
	}
	
	$("#contatti .comandi .gruppo").each(function(){gruppoEditabile($(this))})
	$("#contatti .comandi li:last-child").click(function(e) {
		var newgroup = $('<li class=gruppo contenteditable=true>nome gruppo</li>');
		gruppoEditabile(newgroup);
		newgroup.insertBefore($(this));
  });
		
		
	/*$( ".slider-range" ).after(document.createElement('div').slider({
		range: true, min: 0, max: 5, values: [ 0, 5],
    slide: function( event, ui ) {
      $( ui.prev() ).val(ui.values[ 0 ] + " - " + ui.values[ 1 ] );
    }
  }));<!-- funzionalità da implementare -->*/ 
	

});
</script>


<div id=topbar>
 <img alt="" width=200 height=80 id=logo src="logo.jpg">
 <div class="registered center">
 <ul class="FlyOut DropDown">
  <li><a href="#"> <img alt="" class=bottone src="Bottoni/prof1stat.png" onmouseover="src='Bottoni/prof1mouse.png'" onmousedown="src='Bottoni/prof1stat.png'" onmouseout="src='Bottoni/prof1stat.png'">  </a>
	 <ul class=scheda id=profilo>
		<li><ol id=dati contenteditable="true">
	   <li><img class=foto style=margin:auto; src=barba.jpg  width=280 height=280>
	   <li> Mario Rossi
	   <li> Camaiore
	   <li> idraulico
	   <li> licenza media
		 <li> interessi
		 <li> gruppi
		</ol>
		<ol id=log>
	   <li> 12/12/2112: ha partecipato a sdfg sdfs
	   <li> 12/12/2112: ha partecipato a sdfg sdfs
	   <li> 12/12/2112: ha partecipato a sdfg sdfs
	   <li> 12/12/2112: ha partecipato a sdfg sdfs
	   <li> 12/12/2112: ha partecipato a sdfg sdfs
	   <li> 12/12/2112: ha partecipato a sdfg sdfs
		</ol>
		<ol class=center>
		  <li><img src="" width=40 height=40>
				<p class=progresslbl style="left:50px;">500</p>
				<progress title=825 value=.75></progress>
				<p class=progresslbl style="right:50px;">1000</p>
				<img src="" width=40 height=40><br>
				<img src="" width=40 height=25>
				<img src="" width=40 height=25>
				<img src="" width=40 height=25>
				<img src="" width=40 height=25>
				<img src="" width=40 height=25>
				<img src="" width=40 height=25>
				<h2 id=descrProf> Descrizione </h2>
				<textarea placeholder="Fai sapere qualcosa di te..."></textarea>
		 </ol>
	</ul> 
	
  <li><a href="#"> <img alt="" class=bottone src="Bottoni/contatti1stat.png" onmouseover="src='Bottoni/contatti1mouse.png'" onmousedown="src='Bottoni/contatti1stat.png'" onmouseout="src='Bottoni/contatti1stat.png'">  </a>
   <ul class=scheda id=contatti> 
		<li> <table class=sortable>
		 <caption>
			<ol class=comandi><li>Tutti<li>Amici<li>Associazioni<li class=gruppo>Associazioni<li>+</ol>
		 <tbody>
<tr class="amici ass2">
	<td><img class=fotoCont width=60 height=60 src=foto.jpg>
	<td class=nick>Mario Rossi
	<td class=location>Camayork
<tr class=amici>
	<td><img class=fotoCont width=60 height=60 src=foto.jpg>
	<td class=nick>Mario Verdi
	<td class=location>Camayork	
<tr class="amici ass1">
	<td><img class=fotoCont width=60 height=60 src=foto.jpg>
	<td class=nick>Mario Bianchi
	<td class=location>Camayork	
<tr class=associazioni>
	<td><img class=fotoCont width=60 height=60 src=foto.jpg>
	<td class=nick>Ass. Mario Bianchi
	<td class=location>Camayork	
<tr class="amici ass2">
	<td><img class=fotoCont width=60 height=60 src=foto.jpg>
	<td class=nick>Mario Bianchi
	<td class=location>Camayork
</table></ul> 
	<li><a href="#"> <img alt="" class=bottone src="Bottoni/mess1stat.png" onmouseover="src='Bottoni/mess1mouse.png'" onmousedown="src='Bottoni/mess1stat.png'" onmouseout="src='Bottoni/mess1stat.png'">  </a>
  <ul class=scheda id=messaggi> <li>21212121212122121</ul> 
	<li><a href="#"> <img alt="" class=bottone src="Bottoni/evento1stat.png" onmouseover="src='Bottoni/evento1mouse.png'" onmousedown="src='Bottoni/evento1stat.png'" onmouseout="src='Bottoni/evento1stat.png'">  </a>
  <ul class=scheda id=eventi> <li>21212121212122121</ul> 
	<li><a href="#"> <img alt="" class=bottone src="Bottoni/associaz1disatt.png">  </a>
  <li><a href="#"> <img alt="" class=bottone src="Bottoni/sponsor1disatt.png">  </a>
 </ul>
 </div>
 <img alt="" width=200 height=80 class=registered id=spaziodx src="logo.jpg">
 
 <div class="login unregistered">
  <p> Sei registrato? </p>
  <input type=text name=usr placeholder=Username><br>
  <input type=password name=pwd placeholder=Password ><br>
  <img alt="" src="login.png">
 </div>
 <ul id=titoletto class="center unregistered FlyOut DropDown">
  <li><img alt="" src="Registrati.png"><br>Scopri tutti i vantaggi per utenti ed associazioni! 
   <ul><li><?php include('php/fb-login.php'); ?> <?php include('php/g-login.php'); ?></li></ul>
 </ul>
</div>

<div id=page>
 <aside id=sponsor>
  <h2> Sponsor </h2>
 </aside>
 
 <table id=bacheca class="sortable center">
  <caption class="center comandi">
	  <h1>Bacheca Eventi</h1>
		<img alt="" class=rigadimensione src=rigasolaB.png><br>
		<ul class="center FlyOut DropDown">
		 <li><a href=#> Ordina </a>
			<ul class="bubble bachecaul">
				<li><table><thead><tr>
					<th><a href=#>Per nome</a><a class=freccia> </a>
					<th><a href=#>Per data</a><a class=freccia> </a>
					<th><a href=#>Visite</a><a class=freccia> </a>
					<th><a href=#>Voti</a><a class=freccia> </a>
				</table>
			</ul>
			
		 <li><a href=#> Filtra </a>
			<ul class="bubble bachecaul">
				<li><a href=#>Nessun filtro</a>
				<li><a href=#>Per voto</a><ul><li><input type=text class=slider-range></ul>
				<li><a href=#>Per data</a>
			</ul>
		</ul><br>
		<img alt="" class=rigadimensione src=rigasolaB.png>	
	<tbody>
<tr><td class="argomento salutepost">Salute
	<td class=titolopost><a>Titolo del post</a>
	<td class=periodo> 01/01/01 - 02/02/02
	<td><img class=fotopost width=180 height=90 src=foto.jpg>
	<td class=descrizione>Prime righe della descrizione dell'evento o breve sintesi dell'evento
	<td class=visite>235 <img alt="" width=20 height=13 src=visualverde.png>
	<td class=voto><img alt="" width=16 height=13 src=stellavoto.png><img alt="" width=16 height=13 src=stellavoto.png><img alt="" width=16 height=13 src=stellavoto.png>
	<td class=nomedata>Organizzatore - 12/12/12

<tr><td class="argomento ambientepost">Ambiente
	<td class=titolopost><a>Titolo del post</a>
	<td class=periodo> 01/01/01 - 02/02/02
	<td><img class=fotopost width=180 height=90 src=foto.jpg>
	<td class=descrizione>Prime righe della descrizione dell'evento o breve sintesi dell'evento
	<td class=visite>235 <img alt="" width=20 height=13 src=visualverde.png>
	<td class=voto><img alt="" width=16 height=13 src=stellavoto.png><img alt="" width=16 height=13 src=stellavoto.png><img alt="" width=16 height=13 src=stellavoto.png>
	<td class=nomedata>Organizzatore - 12/12/12

<tr><td class="argomento culturapost">Cultura
	<td class=titolopost><a>Titolo del post</a>
	<td class=periodo> 01/01/01 - 02/02/02
	<td><img class=fotopost width=180 height=90 src=foto.jpg>
	<td class=descrizione>Prime righe della descrizione dell'evento o breve sintesi dell'evento
	<td class=visite>235 <img alt="" width=20 height=13 src=visualverde.png>
	<td class=voto><img alt="" width=16 height=13 src=stellavoto.png><img alt="" width=16 height=13 src=stellavoto.png><img alt="" width=16 height=13 src=stellavoto.png>
	<td class=nomedata>Organizzatore - 12/12/12

<tr><td class="argomento sportpost">Sport
	<td class=titolopost><a>Titolo del post</a>
	<td class=periodo> 01/01/01 - 02/02/02
	<td><img class=fotopost width=180 height=90 src=foto.jpg>
	<td class=descrizione>Prime righe della descrizione dell'evento o breve sintesi dell'evento
	<td class=visite>235 <img alt="" width=20 height=13 src=visualverde.png>
	<td class=voto><img alt="" width=16 height=13 src=stellavoto.png><img alt="" width=16 height=13 src=stellavoto.png><img alt="" width=16 height=13 src=stellavoto.png>
	<td class=nomedata>Organizzatore - 12/12/12
	
<tr><td class="argomento donnapost">Donna
	<td class=titolopost><a>Titolo del post</a>
	<td class=periodo> 01/01/01 - 02/02/02
	<td><img class=fotopost width=180 height=90 src=foto.jpg>
	<td class=descrizione>Prime righe della descrizione dell'evento o breve sintesi dell'evento
	<td class=visite>235 <img alt="" width=20 height=13 src=visualverde.png>
	<td class=voto><img alt="" width=16 height=13 src=stellavoto.png><img alt="" width=16 height=13 src=stellavoto.png><img alt="" width=16 height=13 src=stellavoto.png>
	<td class=nomedata>Organizzatore - 12/12/12

<tr><td class="argomento intrattenimentopost">Intrattenimento
	<td class=titolopost><a>Titolo del post</a>
	<td class=periodo> 01/01/01 - 02/02/02
	<td><img class=fotopost width=180 height=90 src=foto.jpg>
	<td class=descrizione>Prime righe della descrizione dell'evento o breve sintesi dell'evento
	<td class=visite>235 <img alt="" width=20 height=13 src=visualverde.png>
	<td class=voto><img alt="" width=16 height=13 src=stellavoto.png><img alt="" width=16 height=13 src=stellavoto.png><img alt="" width=16 height=13 src=stellavoto.png>
	<td class=nomedata>Organizzatore - 12/12/12

<tr><td class="argomento gastronomiapost">Gastronomia
	<td class=titolopost><a>Titolo del post</a>
	<td class=periodo> 01/01/01 - 02/02/02
	<td><img class=fotopost width=180 height=90 src=foto.jpg>
	<td class=descrizione>Prime righe della descrizione dell'evento o breve sintesi dell'evento
	<td class=visite>235 <img alt="" width=20 height=13 src=visualverde.png>
	<td class=voto><img alt="" width=16 height=13 src=stellavoto.png><img alt="" width=16 height=13 src=stellavoto.png><img alt="" width=16 height=13 src=stellavoto.png>
	<td class=nomedata>Organizzatore - 12/12/12
	
<tr><td class="argomento socialepost">Sociale
	<td class=titolopost><a>Titolo del post</a>
	<td class=periodo> 01/01/01 - 02/02/02
	<td><img class=fotopost width=180 height=90 src=foto.jpg>
	<td class=descrizione>Prime righe della descrizione dell'evento o breve sintesi dell'evento
	<td class=visite>235 <img alt="" width=20 height=13 src=visualverde.png>
	<td class=voto><img alt="" width=16 height=13 src=stellavoto.png><img alt="" width=16 height=13 src=stellavoto.png><img alt="" width=16 height=13 src=stellavoto.png>
	<td class=nomedata>Organizzatore - 12/12/12
<tr><td class="argomento socialepost">Sociale
	<td class=titolopost><a>Titolo del post</a>
	<td class=periodo> 01/01/01 - 02/02/02
	<td><img class=fotopost width=180 height=90 src=foto.jpg>
	<td class=descrizione>Prime righe della descrizione dell'evento o breve sintesi dell'evento
	<td class=visite>235 <img alt="" width=20 height=13 src=visualverde.png>
	<td class=voto><img alt="" width=16 height=13 src=stellavoto.png><img alt="" width=16 height=13 src=stellavoto.png><img alt="" width=16 height=13 src=stellavoto.png>
	<td class=nomedata>Organizzatore - 12/12/12
<tr><td class="argomento socialepost">Sociale
	<td class=titolopost><a>Titolo del post</a>
	<td class=periodo> 01/01/01 - 02/02/02
	<td><img class=fotopost width=180 height=90 src=foto.jpg>
	<td class=descrizione>Prime righe della descrizione dell'evento o breve sintesi dell'evento
	<td class=visite>235 <img alt="" width=20 height=13 src=visualverde.png>
	<td class=voto><img alt="" width=16 height=13 src=stellavoto.png><img alt="" width=16 height=13 src=stellavoto.png><img alt="" width=16 height=13 src=stellavoto.png>
	<td class=nomedata>Organizzatore - 12/12/12
<tr><td class="argomento socialepost">Sociale
	<td class=titolopost><a>Titolo del post</a>
	<td class=periodo> 01/01/01 - 02/02/02
	<td><img class=fotopost width=180 height=90 src=foto.jpg>
	<td class=descrizione>Prime righe della descrizione dell'evento o breve sintesi dell'evento
	<td class=visite>235 <img alt="" width=20 height=13 src=visualverde.png>
	<td class=voto><img alt="" width=16 height=13 src=stellavoto.png><img alt="" width=16 height=13 src=stellavoto.png><img alt="" width=16 height=13 src=stellavoto.png>
	<td class=nomedata>Organizzatore - 12/12/12
<tr><td class="argomento socialepost">Sociale
	<td class=titolopost><a>Titolo del post</a>
	<td class=periodo> 01/01/01 - 02/02/02
	<td><img class=fotopost width=180 height=90 src=foto.jpg>
	<td class=descrizione>Prime righe della descrizione dell'evento o breve sintesi dell'evento
	<td class=visite>235 <img alt="" width=20 height=13 src=visualverde.png>
	<td class=voto><img alt="" width=16 height=13 src=stellavoto.png><img alt="" width=16 height=13 src=stellavoto.png><img alt="" width=16 height=13 src=stellavoto.png>
	<td class=nomedata>Organizzatore - 12/12/12
</table>

 <aside id=board>
  <h2> Community Board </h2>
	<div class="center comandi">
	<img alt="" class=rigadimensione src=rigasolaCB.png><br>
	<ul class="center FlyOut DropDown">
	 <li><a href=#> Ordina </a>
	  <ul class=bubble>
		  <li><a href=#>Per data</a><a class=freccia> </a>
			<li><a href=#>Per nome</a><a class=freccia> </a>
		  <li><a href=#>Per visite</a><a class=freccia> </a>
		  <li><a href=#>Per voto</a><a class=freccia> </a>
		</ul>
		
	 <li><a href=#> Filtra </a>
	  <ul class=bubble>
			<li><a href=#>Nessun filtro</a>
		  <li><a href=#>Per voto</a>
		  <li><a href=#>Per data</a>
		</ul>
	</ul><br>
  <img alt="" class=rigadimensione src=rigasolaCB.png>
	</div>
 </aside>

  <p>credits</p>
</div>
