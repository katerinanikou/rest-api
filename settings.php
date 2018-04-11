<?php 

    $dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "root";
	$dbname = "todo11";

	$dsn = "mysql:host=$dbhost;dbname=$dbname;charset=utf8";
	$opt = [
	    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
	    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
	    PDO::ATTR_EMULATE_PREPARES   => false,
	];
	$pdo = new PDO($dsn, $dbuser, $dbpass, $opt);