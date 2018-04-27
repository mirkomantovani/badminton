
<?php
session_start();
require("connect.php");

$e =$_SESSION['email'];
$n=$_GET['name'];
$d=$_GET['desc'];
$c=$_GET['color'];

echo $e;
echo $n;

$query="INSERT INTO club (creator, name, description,color) values ('$e','$n','$d','$c')";
echo $query;
$result=mysqli_query($connection,$query);

//header("location: ")




?>