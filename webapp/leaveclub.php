<?php 
session_start();
include 'ChromePhp.php';



require('connect.php');

$U=$_GET['user'];

$row = $_SESSION['row'];   
$myemail=$row['email'];



$query = "DELETE from clubmember where idmember='".$myemail."'";

if(isset($_GET['esci'])){
$result = mysqli_query($connection, $query);
}



header('location: '.$_SERVER['HTTP_REFERER']);

?>