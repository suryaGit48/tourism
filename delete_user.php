<?php
include 'db.php';
$der=$_POST["delete_rows"];
$sqld="DELETE FROM user where uname='".$der."'";
if($re=$con->query($sqld))
{
    echo '<script>window.alert("Remove successfully");history.go(-1);
    location.reload();;
     </script>';
}
else
{
    echo '<script>window.alert("can\'t remove");history.go(-1);</script>';
}

?>
