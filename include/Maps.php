 <?php 
                $mapQuery = $mysql->query('SELECT * FROM meh_maps WHERE staffOnly = 0');
                while($map = $mapQuery->fetch_object()) {
                    echo "<tr><td>".$map->Name."</td><td>".$map->PlayersMax."</td>"; 
                }
?>