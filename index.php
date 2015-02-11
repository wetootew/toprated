<!DOCTYPE html> 
<!--<?php 
session_start(); 
include('php/db.php'); 
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once __DIR__ . '/vendor/autoload.php';
?>-->
<title>Boh</title>
<link rel="stylesheet" type="text/css" href="style.css">
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="script.js" type="text/javascript"></script>

<div id=topbar>
 <img alt="" width=190 height=85 id=logo src="logo.png">
 <ul class="registered center FlyOut DropDown bottoni stillWithClick">
  <li><img alt="" name=prof1 src="Bottoni/prof1stat.png">
	 <ul class="scheda profilo">
		<li><ol class=dati contenteditable="true">
	   <li><img class=foto style=margin:auto; src=barba.jpg  width=280 height=280>
	   <li class=nome> Mario Rossi
	   <li> Camaiore
	   <li> idraulico
	   <li> licenza media
		 <li> interessi
		 <li> gruppi
		</ol>
		<ol class=log>
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
				<h2 class=descrProf> Descrizione </h2>
				<textarea placeholder="Fai sapere qualcosa di te..."></textarea>
		 </ol>
	</ul> 
	
  <li><img alt="" name=contatti1 src="Bottoni/contatti1stat.png">
   <ul class=scheda id=contatti> 
		<li> <table class=tab>
		 <caption>
			<ol class=comandi><li>Tutti<li>Amici<li>Associazioni<li>Gruppi<li>+</ol>		 
     <tbody>
			<tr class="amici ass2">
				<td><img class=fotoCont width=60 height=60 src=foto.jpg>
				<td class=nick>Mario Rossi
				<td class=location>Camayork
				<td class=asd>
				 <ol class="FlyOut DropDown bottoni">
					<li><img alt="" title=profilo name=prof1 src="Bottoni/prof1stat.png">
					<li><img alt="" name=mess1 src="Bottoni/mess1stat.png">
					<li><img alt="" name=evento1 src="Bottoni/evento1stat.png"> 
				</ol>		
			<tr class=amici>
				<td><img class=fotoCont width=60 height=60 src=foto.jpg>
				<td class=nick>Mario Verdi
				<td class=location>Camayork
				<td class=asd>
				 <ol class="FlyOut DropDown bottoni">
					<li><img alt="" name=prof1 src="Bottoni/prof1stat.png">
					<li><img alt="" name=mess1 src="Bottoni/mess1stat.png">
					<li><img alt="" name=evento1 src="Bottoni/evento1stat.png"> 
				</ol>			
			<tr class="amici ass1">
				<td><img class=fotoCont width=60 height=60 src=foto.jpg>
				<td class=nick>Mario Bianchi
				<td class=location>Camayork	
				<td class=asd>
				 <ol class="FlyOut DropDown bottoni">
					<li><img alt="" name=prof1 src="Bottoni/prof1stat.png">
					<li><img alt="" name=mess1 src="Bottoni/mess1stat.png">
					<li><img alt="" name=evento1 src="Bottoni/evento1stat.png"> 
				</ol>		
			<tr class=associazioni>
				<td><img class=fotoCont width=60 height=60 src=foto.jpg>
				<td class=nick>Ass. Mario Bianchi
				<td class=location>Camayork	
				<td class=asd>
				 <ol class="FlyOut DropDown bottoni">
					<li><img alt="" name=prof1 src="Bottoni/prof1stat.png">
					<li><img alt="" name=mess1 src="Bottoni/mess1stat.png">
					<li><img alt="" name=evento1 src="Bottoni/evento1stat.png"> 
				</ol>		
			<tr class="amici ass2">
				<td><img class=fotoCont width=60 height=60 src=foto.jpg>
				<td class=nick>Mario Bianchi
				<td class=location>Camayork
				<td class=asd>
				 <ol class="FlyOut DropDown bottoni">
					<li><img alt="" name=prof1 src="Bottoni/prof1stat.png">
					<li><img alt="" name=mess1 src="Bottoni/mess1stat.png">
					<li><img alt="" name=evento1 src="Bottoni/evento1stat.png"> 
				</ol>		
		</table>
	 </ul> 
	<li><img alt="" name=mess1 src="Bottoni/mess1stat.png">
      <ul class=scheda id=messaggi> <li><ol class=stillWithClick>
	    <li> peppino
		<ul class=bubble><li> chat con peppino</ul> 
	    <li> peppina
		<ul class=bubble><li> chat con peppina</ul> 
	    <li> peppine
		<ul class=bubble><li> chat con peppine</ul> 
	    <li> peppini
		<ul class=bubble><li> chat con peppini</ul> 
	    <li> peppinu
		<ul class=bubble><li> chat con peppini</ul>   
	  
	  </ol>
	  </ul> 
	<li><img alt="" name=evento1 src="Bottoni/evento1stat.png"> 
   <ul class=scheda id=eventi> <li>21212121212122121</ul> 
	 
	<li><img alt="" src="Bottoni/associaz1disatt.png">	
   <ul class=scheda id=gruppi> 
		<li> <table class=tab>
		 <caption>
			<ol class=comandi><li>Inizio</ol>		 
     <tbody>	
			<tr class=inizio>
				<td class=bottoni>
				<img alt="" name=ricerca src="Bottoni/ricercastat.png">
				<img alt="" name=creagruppoass src="Bottoni/creagruppoassstat.png">
				<img alt="" name=Registraassociazione src="Bottoni/Registraassociazionestat.png">			
			<tr class=associazione><td class=profilo>
				<ol class=dati>
			   <li><img class=foto style=margin:auto; src=barba.jpg  width=280 height=280>
			   <li class=nome>adsi
			   <li> Camaiore
			   <li> qwe
			   <li> licdssdfenza 
				</ol>
				<ol class=log>
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
						<h2 class=descrProf> Descrizione </h2>
						<textarea placeholder="Fai sapere qualcosa di te..."></textarea>
				 </ol>
			<tr class=gruppo><td class=profilo>
				<ol class=dati>
			   <li><img class=foto style=margin:auto; src=barba.jpg  width=280 height=280>
			   <li class=nome>dfdsfdsf
			   <li> Camaiore
			   <li> qwe
			   <li> licdssdfenza 
				</ol>
				<ol class=log>
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
						<h2 class=descrProf> Descrizione </h2>
						<textarea placeholder="Fai sapere qualcosa di te..."></textarea>
				 </ol>
			<tr class=ricerca><td><form action="javascript:void(0);">
			  <input type=search value=bananaricerca list=previousResearches><input type=submit value=cerca></form>
			

<datalist id=previousResearches>
  <option value="Internet Explorer">
  <option value="Firefox">
  <option value="Google Chrome">
  <option value="Opera">
  <option value="Safari">
</datalist><!--TODO: schede ricerca multiple-->
		
		</table>
	 </ul> 
  <li><img alt="" src="Bottoni/sponsor1disatt.png">
 </ul>
 <img alt="" width=200 height=80 class=registered id=spaziodx src="logo.jpg">
 
 <div class="login unregistered">
  <p> Sei registrato? </p>
  <?php include('php/fb-login.php'); ?> <?php include('php/g-login.php'); ?>
 </div>
 <ul id=titoletto class="center unregistered FlyOut DropDown OnlyClick bottoni">
  <li><img alt="" name=Registrati src="Bottoni/Registratistat.png" height="82" width="215"><br>Scopri tutti i vantaggi per utenti ed associazioni! 
   <ul>
		<li id=registrazione class="scheda oscuramento chiudi"> 
			<span><h2>Registrazione sicura con:</h2>
				<img width=100 height=100 src="Bottoni/Facebook1.png">
				<span class=regOption>o con</span> 
				<img width=100 height=100 src="Bottoni/gplus1.png">
				<br>
				<?php 
				foreach(glob('comuni/*.png') as $file)  
					echo '<img src="'.$file.'">';  
				?>

				<h3>Registrandoti, accetti le seguenti condizioni d&rsquouso:</h3>
				<textarea disabled cols=42 rows=4>
TITOLO
bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla 
				</textarea>
			</span>
			<span><ol id=features>
			  <li>Tieniti aggiornato sugli eventi delle associazioni nelle zone che ti interessano!
			  <li>Hai un'associazione? Crea contatti con i cittadini e con le altre associazioni per organizzare eventi di qualità!
			  <li>Conosci nuove persone con i tuoi stessi interessi!
			  <li>Avvia e unisciti a gruppi associativi in modo libero e veloce!
			  <li>Trova nuovi stimoli per la tua vita sociale!
</ol></span>
   </ul>
 </ul>
</div>
<?php include('page.php'); ?>
