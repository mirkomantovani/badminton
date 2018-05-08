<?php

 session_start();
    include 'ChromePhp.php';
    
            require('connect.php');
    
    if(empty($_SESSION['email'])){
        header('location: ../login/login.php');
    }
        
        $id=$_GET['id'];


$q="SELECT max(position) as position from participant where id='".$id."'";
$re = mysqli_query($connection, $q);

if($re->num_rows == 0){
    $pos=0;
} else{
$row=$re->fetch_assoc();
$pos=$row['position'];
}
        
$pos++;

$query = "INSERT INTO participant (id,player,position) VALUES ('".$id."','".$_SESSION['email']."','".$pos."')";
$result = mysqli_query($connection, $query);

header("location: tournament.php?id=".$id);
?>