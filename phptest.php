<?php
 $host = "127.0.0.1";
 $user = "alejandro0melo"
 $pass = "";
 $db = "sample_db";
 $port = 3306;
 $connection = mysqli_connect($host, $user, $pass, $db, $port)or die(mysql_error());
 $query = "SELECT * FROM users";
 $result = mysqli_query($connection, $query);
 while ($row = msqli_fetch_assoc($result)) {
	echo "The ID is: " . $row['id'] . " and the Username is: " . $row['username'];
 }
?>
