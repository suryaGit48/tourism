<?php
include 'db.php';

$pln=$_POST['plname'];
$pack=$_POST['pack'];
$paname = $_POST['plname'];
$locate=$_POST['location'];
$dura = $_POST["duration"];
$amount = $_POST["pamount"];
$about=$_POST["aboutus"];
$coun=$_POST["country"];
$img = $_FILES["image"]["name"];
$tempname = $_FILES['image']['tmp_name'];
$folder = 'image/' . $img;
$imgtype = strtolower(pathinfo($img, PATHINFO_EXTENSION));
if ($imgtype != "jpg" && $imgtype != "png" && $imgtype != "jpeg") {
    echo "<script>window.alert('File extension not allowed');history.go(-1);</script>";
} else {
    $sqli = "update $pack set placename='".$paname."',location='".$locate."',duration='".$dura."',amount='".$amount."',image='".$img."',about='".$about."',country='".$coun."' where placename='".$pln."'";
    if ($con->query($sqli)) {
        echo "<script>console.log('Inserted');</script>";
    } else {
        echo "<script>console.log('not Inserted');</script>";
    }

    if (move_uploaded_file($tempname, $folder)) {
        echo "<script>window.alert('packages succesfully updated');
        history.go(-2);</script>";
    } else {
        echo "<script>window.alert('updated failed');history.go(-1);</script>";
    }
}
?>