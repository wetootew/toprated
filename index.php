<?php include('db.php'); ?>
<!DOCTYPE html> 
<title>TopRated</title>
<link rel="stylesheet" type="text/css" href="trstyle.css">
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

<style>
.bar{position:fixed; width:10%; height:100%;}
.underBar{float:lefte; width:10%;height:100%;}
.bar > * {margin-left:auto; margin-right:auto;}
.category {border:2px solid blue; float:left;}
header {background-color: blue;}
</style>

<div class=bar>
  <img src=https://www.dropbox.com/s/we902iy3r6jz758/logocorona.png>
  <?php include('php/fb-login.php'); ?>
</div>        
<div class=desk>
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
</div>
