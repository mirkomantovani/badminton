
<?php
session_start();
require("connect.php");
require ('updatesessionvariables.php');

$e=$_SESSION['email'];
$id=$_GET['id'];



$query="INSERT INTO clubmember (idclub, idmember) values ('$id','$e')";
$userclub="UPDATE users set club='".$id."' where email='".$e."'";

if(isset($_GET['entra'])){
$result = mysqli_query($connection, $query);
$uc=mysqli_query($connection,$userclub);
}
updatesession($e);

header('location: '.$_SERVER['HTTP_REFERER']);




?>