<?php
if (!mysql_select_db('toprated', $link = mysql_connect('toprated.mysql.eu1.frbit.com', 'toprated', 'aTSRmyHGo0xqrzDV')))
    echo '<p> db error ' . mysql_errno() . ": " . mysql_error() . '</p>';
?>
