<?php 
session_start();
include 'ChromePhp.php';

require('connect.php');
require('updatesessionvariables.php');


$U=$_SESSION['email'];
$nm=$_GET['nome'];
$cgn=$_GET['cognome'];
$bir=$_GET['anni'];
$sex=$_GET['sesso'];
$nation=$_GET['paese'];
$biogra=$_GET['biog'];


$changepr="update users set name='".$nm."', surname='".$cgn."', birth='".$bir."', gender='".$sex."', user_country='".$nation."', user_shortbio='".$biogra."' where email='".$U."'";

 $qu = "select * from users where email='".$U."'";
if(isset($_GET['submit'])){
    $update = mysqli_query($connection, $changepr);
    updatesession($U);

        
}

     
header('location: settings.php');

?>