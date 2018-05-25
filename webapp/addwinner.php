<?php



session_start();
    include 'ChromePhp.php';
    
    require('connect.php');
    
    if(empty($_SESSION['email'])){
        header('location: ../login/login.php');
    }
$id=$_GET['id'];
$winner=$_GET['winner'];

$trn=mysqli_query($connection, 'select * from tournament where id="'.$id.'"');
$t = $trn->fetch_assoc();
$maxpl=$t['maxplayers'];



$sommaround="SELECT sum(round2) as sr2,sum(round3) as sr3,sum(round4) as sr4,sum(round5) as sr5,sum(round6) as sr6 from participant where id=".$id."";
$riss = mysqli_query($connection, $sommaround);

$pl="SELECT player from participant where position='".$winner."'";
$ri = mysqli_query($connection, $pl);
$py = $ri->fetch_assoc();
$play=$py['player'];


$s = $riss->fetch_assoc();



$s2=$s['sr2'];
$s3=$s['sr3'];
$s4=$s['sr4'];
$s5=$s['sr5'];
$s6=$s['sr6'];



//mm=max matches in a round
$mm2=$maxpl/2;
$mm3=$maxpl/4;
$mm4=$maxpl/8;
$mm5=$maxpl/16;
$mm6=$maxpl/32;



if($mm2 == $s2){
    if($mm3 == $s3){
        if($mm4 == $s4){
            if($mm5 == $s5){
                if($mm6 == $s6){
                    $noquery=1;
                }else { //we are at round 6
                    $insertquery = "update participant set round6=1 where id='".$id."' and position='".$winner."'";  
                    $givepoints = "update users set score=5+score where email='".$play."'";
                }
    
            }else { //we are at round 5
                $insertquery = "update participant set round5=1 where id='".$id."' and position='".$winner."'";
                $givepoints = "update users set score=4+score where email='".$play."'";
            }
        }else { //we are at round 4
            $insertquery = "update participant set round4=1 where id='".$id."' and position='".$winner."'";
            $givepoints = "update users set score=3+score where email='".$play."'";
        }
        
    }else { //we are at round 3
        $insertquery = "update participant set round3=1 where id='".$id."' and position='".$winner."'";
        $givepoints = "update users set score=2+score where email='".$play."'";
    }
    
}else { //we are at round 2
    $insertquery = "update participant set round2=1 where id='".$id."' and position='".$winner."'";
    $givepoints = "update users set score=1+score where email='".$play."'";
}

if($noquery != 1){
    //echo $givepoints;
    $r = mysqli_query($connection, $insertquery);
    $rs = mysqli_query($connection, $givepoints);
}

header('location: tournament.php?id='.$id);


?>
