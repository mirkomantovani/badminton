<?php 
session_start();
include 'ChromePhp.php';



require('connect.php');

$U=$_GET['user'];

$row = $_SESSION['row'];   
$myemail=$row['email'];

$query = "INSERT INTO friendship (id, date,id1,id2) VALUES (NULL,'".date("Y-m-d")."','".$U."','".$myemail."')";
$result = mysqli_query($connection, $query);
$q = "DELETE from friendrequest where id1='".$U."' and id2='".$myemail."'";
Ch::log("INSERT INTO friendship (id, date,id1,id2) VALUES (NULL,'".date("Y-m-d")."','".$U."','".$myemail."')");
$res = mysqli_query($connection, $q);


header('Location: profile.php?user='.$U);

?>