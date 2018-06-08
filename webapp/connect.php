<?php

	/*define('server','localhost');
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
    
    $connection = mysqli_connect('localhost', 'badmintonclubs');
    if (!$connection){
        die("Connessione al Database fallita" . mysqli_error($connection));
    }
    $select_db = mysqli_select_db($connection, 'badminton');
    $select_db = mysqli_select_db($connection, 'badminton');
    if (!$select_db){
        die("Selezione al database errata" . mysqli_error($connection));
    }
*/
?>
<?php
DEFINE('DB_USERNAME', 'root');
  DEFINE('DB_PASSWORD', 'root');
  DEFINE('DB_HOST', 'localhost');
  DEFINE('DB_DATABASE', 'badminton');

  $connection = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

  if (mysqli_connect_error()) {
    die('Connect Error ('.mysqli_connect_errno().') '.mysqli_connect_error());
  }






?>

<?php 
/*//new PHP Data Object 
//This allows PHP to interact with a database 
$dsn = "mysql:host=localhost;dbname=badminton;port=3306"; $username = "root"; $password = "root"; 
//(For local use, PHPMyAdmin doesn't use a password.) 
$db = new PDO($dsn, $username, $password); 
//if this dumps an object we are connected 
var_dump($db);
*/?>