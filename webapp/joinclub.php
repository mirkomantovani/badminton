
<?php
session_start();
require("connect.php");

$e =$_SESSION['email'];
$id=$_GET['id'];



$query="INSERT INTO clubmember (idclub, idmember) values ('$id','$e')";

if(isset($_GET['entra'])){
$result = mysqli_query($connection, $query);
}

header('location: '.$_SERVER['HTTP_REFERER']);




?>