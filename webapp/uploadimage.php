<?php
session_start();
require("connect.php");

$previous = $_SERVER['HTTP_REFERER'];
$imgnumber=$_POST['imgnumber'];
$target_dir = "uploads/".$_SESSION['email'];
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 8000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo " Sorry, your file was not uploaded. Change the name of the image.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        
        
        
        $query="UPDATE userimages set img".$imgnumber."='".$target_file."' where user='".$_SESSION['email']."'";
        echo $query;
        $result=mysqli_query($connection,$query);
        
        
         //inserting into user_avatar variable in session imgname
        $_SESSION['userimage']['img'.$imgnumber]=$target_file;
      //  header("Location: ".$_SERVER['PHP_SELF']);
        
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>