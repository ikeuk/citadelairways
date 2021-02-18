<?php
	$host = 'localhost';
	$user = 'root';
	// $password = '';
	$dbname = 'airways';
  
	//set dsn
	$dsn = 'mysql:host='.$host.';dbname='.$dbname;
	//create a pdo instance
	$pdo = new PDO($dsn, $user);

	$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
	$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);