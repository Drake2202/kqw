<?php 
$a = $mysql->query('SELECT sum(Count) as ser FROM meh_servers')->fetch_object(); 
echo $a->ser;
?>