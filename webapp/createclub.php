
<?php
session_start();
require("connect.php");

$e =$_SESSION['email'];
$n=$_GET['name'];
$d=$_GET['desc'];
$c=$_GET['color'];


$query="INSERT INTO club (creator, name, description,color) values ('$e','$n','$d','$c')";
//echo $query;
$result=mysqli_query($connection,$query);

$idc=0;

$getidclub="SELECT * from club where creator='".$e."'";

$re=mysqli_query($connection,$getidclub);
  while($row = mysqli_fetch_assoc($re)) {
    $idc=$row['id'];
    }




$addid="INSERT into clubmember (idclub, idmember) values('$idc','$e')";

$r=mysqli_query($connection,$addid);

$userclub="UPDATE users set club='".$idc."' where email='".$e."'";
$uc=mysqli_query($connection,$userclub);

header("location: myprofile.php")




?>