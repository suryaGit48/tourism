<?php
include 'db.php';

$der=$_POST["delete_rows"];
$em=$_POST["email"];
if($em=="surya2148@gmail.com")
{
    $sqld="DELETE FROM admin where name='".$der."'";
    if($re=$con->query($sqld))
    {
        echo '<script>window.alert("Remove successfully");history.go(-1);
         location.reload();</script>';
    }
    else
    {
        echo '<script>window.alert("can\'t remove");history.go(-1);</script>';
    }
}
else{
    echo '<script>window.alert("You are not a manager"); history.go(-1); </script>';
}


?>
