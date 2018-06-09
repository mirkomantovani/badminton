<?php
session_start();
require('connect.php');

$U=$_SESSION['email'];

$row = $_SESSION['row'];   
$requester=$row['email'];
$p=$_GET['participants'];
$mf=$_GET['sex'];
$m= ($mf == "Male" || $mf == "Mixed" ? 1 : 0);
$f= ($mf == "Female" || $mf == "Mixed"  ? 1 : 0);
$s=$_GET['sd'];
$n=$_GET['name'];
$d=$_GET['desc'];
$creation=date("Y-m-d");

$query = "INSERT INTO tournament (name,description,maxplayers,creator,male,female,single,creationdate) VALUES ('".$n."','".$d."','".$p."','".$U."','".$m."','".$f."','".$s."','".$creation."')";

$result = mysqli_query($connection, $query);

$i="select id from tournament where name='".$n."' and description='".$d."'";
$res = mysqli_query($connection, $i);
 $t = $res->fetch_assoc();
 $idt=$t['id'];

header('location: tournament.php?id='.$idt);

?>
