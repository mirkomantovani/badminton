<?php
/*
	define('server','localhost');
	define('username', 'badmintonclubs');
  	define('password', '');
  	define('dbName', 'my_badmintonclubs');
	$server = 'localhost';
    $user = 'badmintonclubs';
    $password = '';
    $dbname = '';
    $connection = mysqli_connect(server, username, password);
    if (!$connection){
        die("Database Connection Failed" . mysqli_error($connection));
    }else{
    echo 'connected';
    }
    $select_db = mysqli_select_db($connection, dbName);
    if (!$select_db){
        die("Database Selection Failed" . mysqli_error($connection));
    }else{
    echo 'selected';
    }
    */
    $connection = mysqli_connect('localhost', 'badmintonclubs');
    if (!$connection){
        die("Connessione al Database fallita" . mysqli_error($connection));
    }
    $select_db = mysqli_select_db($connection, 'my_badmintonclubs');
    if (!$select_db){
        die("Selezione al database errata" . mysqli_error($connection));
    }

?>
