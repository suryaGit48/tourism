<?php
include 'db.php';

$usn=$_POST["uname"];
$enq=$_POST["msg"];

$up="update user set enquiry='$enq' where uname='$usn'";
$upe="update enquiry set replay='$enq' where uname='$usn'";
if($con->query($up) AND $con->query($upe))
{
   $delen="delete from enquiry where uname='$usn'";
   $con->query($delen);
  echo '<script>window.alert("Successfully send"); history.go(-1);</script>';
}
else{
    echo '<script>window.alert("cannot send"); history.go(-1);</script>';
}
?>