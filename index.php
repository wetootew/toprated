<?php
include('db.php');
?>
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
#login {float:right;}
#logo {float:left;}
h1 {margin:0;padding:0;}
body > header{position:fixed;width:100%;}
.topBar {height:36px;margin:2px;padding:2px;}
.category {border:2px solid yellow; float:left;}
header {background-color: orange;}
</style>

<header class=topBar>
  <h1 id=logo><a href=index.php>TopRated</a></h1>

  <div id=login>
    <form action=# method=post>
      <input type=text name=usr value="user"><br>
      <input type=password name=pw value="password">
    </form>
  </div>
</header>        
  <div class=topBar></div>
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

