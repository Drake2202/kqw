        <meta http-equiv="content-Type" content="text/html; charset=iso-8859-1" />
        <?php
       
        DEFINE("MYSQL_HOST", "localhost"); DEFINE("MYSQL_USER", "root"); DEFINE("MYSQL_PASS", "u6g9Ys072Xs_sOC"); DEFINE("MYSQL_DB", "kqw");
        mysql_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASS) or die ("Y CANNOT CONNECT NUGGUR");
        mysql_select_db(MYSQL_DB) or die ("Can't connect you bastard");
	    $sql = "SELECT * FROM meh_users_logs ORDER BY date DESC LIMIT 5";
        $result = mysql_query($sql)or die(mysql_error());
        while($row = mysql_fetch_array($result)){ $Staff = $row['Staff']; $Info = $row['Info']; $Date = $row['Date'];
		$variavel = utf8_encode($text);
        echo "                                        <li class='media'>
                                                <a class='pull-left' href='#'>
                                                        <img class='media-object' src='images/users/$Staff.png'>
                                                </a>
                                                <div class='media-body'>
                                                        <div class='clearfix'>
                                                                <a href='#' class='media-heading'>$Staff</a>
                                                                <span class='media-notice'>$Date</span>
                                                        </div>
                                                        $Info
                                                </div>
                                        </li>"; }
        ?>
