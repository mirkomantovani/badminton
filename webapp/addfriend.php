<?php 
session_start();
require('connect.php');

$U=$_GET['user'];

$row = $_SESSION['row'];   
$requester=$row['email'];

$query = "INSERT INTO friendrequest (id, date,id1,id2) VALUES (NULL,'".date("Y-m-d")."','".$requester."','".$U."')";
echo $query;
$result = mysqli_query($connection, $query);

header('Location: profile.php?user='.$U);

?>
