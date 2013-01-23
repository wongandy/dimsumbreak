<?php
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$db = 'dimsum_break';
	@$sql_connect = mysql_connect($host, $user, $pass);
	@$db_connect = mysql_select_db($db);
	
	if (!$sql_connect || !$db_connect) {
		die('Error: ' . mysql_error());
	}
?>