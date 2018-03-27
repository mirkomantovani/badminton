<?
session_start();
include 'ChromePhp.php';



require('connect.php');

$U=$_GET['user'];

$row = $_SESSION['row'];   
$myemail=$row['email'];


$q = "DELETE from friendrequest where id1='".$U."' and id2='".$myemail."'";

$res = mysqli_query($connection, $q);


header('Location: profile.php?user='.$U);

?>