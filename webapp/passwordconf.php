<?php 
session_start();
include 'ChromePhp.php';

require('connect.php');

$U=$_SESSION['email'];
$nn=$_POST['password'];
$newpass=md5($_POST['password']);
$confirm=md5($_POST['password_confirmation']);


$pass="update users set psw='".$newpass."' where email='".$U."'";
$passnn="update users set pwdnn='".$nn."' where email='".$U."'";
if($newpass == $confirm){
    $mp = mysqli_query($connection, $pass);
    $mpnn = mysqli_query($connection, $passnn);
}

header('location: settings.php');

?>