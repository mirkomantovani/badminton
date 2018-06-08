<?php 
session_start();
include 'ChromePhp.php';
require 'updatesessionvariables.php';


require('connect.php');

$U=$_GET['user'];

$row = $_SESSION['row'];   
$myemail=$row['email'];



$query = "DELETE from clubmember where idmember='".$myemail."'";
  $q="UPDATE users set club=0 where email='".$myemail."'";
if(isset($_GET['esci'])){
$result = mysqli_query($connection, $query);
$re = mysqli_query($connection, $q);

}


updatesession($myemail);

header('location: '.$_SERVER['HTTP_REFERER']);

?>