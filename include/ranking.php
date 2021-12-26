<?php 
DEFINE("MYSQL_HOST", "localhost"); DEFINE("MYSQL_USER", "root"); DEFINE("MYSQL_PASS", "u6g9Ys072Xs_sOC"); DEFINE("MYSQL_DB", "kqw");
mysql_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASS) or die ("Y CANNOT CONNECT NUGGUR"); 
mysql_select_db(MYSQL_DB) or die ("Can't connect you bastard"); 
$sql = "SELECT Username, Kills, Deaths, Level FROM `meh_users` ORDER BY `Kills` DESC LIMIT 20";
$result = mysql_query($sql)or die(mysql_error()); 
echo "<tr><th>Nick</th><th>Kills</th><th>Deaths</th><th>Level</th>"; 
while($row = mysql_fetch_array($result)){ $name = $row['Username']; $kills = $row['Kills']; $deaths = $row['Deaths']; $level = $row['Level']; echo "<tr><td style='width: 300px;'><a href='char.php?id=$name' target= _blank>$name</a></td><td style='width: 100px;'><center>".$kills."</center></td><td style='width: 100px;'><center>".$deaths."</center></td><td style='width: 100px;'><center>".$level."</center></td>"; } echo "</table>";
 ?>