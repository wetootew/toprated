<?php 
include('db.php'); 
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once __DIR__ . '/vendor/autoload.php';

?>

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
 <div id=sottologo>
  <img id=logo src=https://cloud.githubusercontent.com/assets/7316633/2724800/9fc4af64-c5a5-11e3-9b49-1abf4bd28ccb.png>
 </div>
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
