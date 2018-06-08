<?php

function updatesession($user) {
require('connect.php');
$qu = "select * from users where email='".$user."'";
$risul = mysqli_query($connection, $qu);

    echo "dfgd".mysqli_num_rows($risul);
if (mysqli_num_rows($risul) == 1) {  
        echo "sdfs";
        $_SESSION['row'] = $risul->fetch_assoc();
    }
        
}
?>
