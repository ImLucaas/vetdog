<?php
session_start();

// Define database
define('dbhost', 'localhost:3306');
define('dbuser', 'root');
define('dbpass', 'pelos2012');
define('dbname', 'vetdog');

// Connecting database
try {
	$connect = new PDO("mysql:host=".dbhost."; dbname=".dbname, dbuser, dbpass);
	$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
	echo $e->getMessage();
}

?>
