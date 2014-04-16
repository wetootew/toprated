<?php include('db.php'); ?>
<!DOCTYPE html> 
<title>TopRated</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script>
function fitResize(t) {
  t.style.height = 'auto';
  t.style.height = (t.scrollHeight  + t.offsetHeight - t.clientHeight ) + 'px';    
}
   // t.addEventListener && t.addEventListener('input', function(event) { resize(t); });
   // t['attachEvent']  && t.attachEvent('onkeyup', function() { resize(t); });
function toggle(obj) {
        var el = document.getElementById(obj);
        el.style.display = (el.style.display == 'none' ? '' : 'none' );
}
</script>

<div class=bar>
  <img src=https://cloud.githubusercontent.com/assets/789446/2718078/af4b14de-c549-11e3-89ad-00339c03e7fa.png>
  <?php include('php/fb-login.php'); ?>
  <?php include('php/g-login.php'); ?>
  <menu>
    <li>Profilo
    <li>Messaggi
    <li>Cronologia
    <li>Amici
    <li>proponi un sito
    <li>proponi una sezione
    <li>segnala un problema
</div>
<div class=category>
  <header><h1>Sport</h1></header>
  <ol>
  <li>sito 1: ***** <input type=button value=vota!>
  <li>sito 2: ***** <input type=button value=vota!>
  <li>sito 3: ***** <input type=button value=vota!>
</div>
<div class=category>
  <header><h1>Sport</h1></header>
  <ol>
  <li>sito 1: ***** <input type=button value=vota!>
  <li>sito 2: ***** <input type=button value=vota!>
  <li>sito 3: ***** <input type=button value=vota!>
</div>
<div class=category>
  <header><h1>Sport</h1></header>
  <ol>
  <li>sito 1: ***** <input type=button value=vota!>
  <li>sito 2: ***** <input type=button value=vota!>
  <li>sito 3: ***** <input type=button value=vota!>
</div>
