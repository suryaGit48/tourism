<?php
include 'db.php';

$em=$_POST["siemail"];
$np=$_POST["sipass"];

$up="update user set password='$np' where email='$em'";
if($con->query($up))
{
    echo '<script>window.alert("Successfully changed "); history.go(-2);</script>';
}
else{
    echo '<script>window.alert("cannot chage password "); history.go(-2);</script>';
}

?>