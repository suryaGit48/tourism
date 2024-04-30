<?php
include 'db.php';
$der=$_POST["delete_row"];
$sqld="DELETE FROM book where bookingid='".$der."'";
if($re=$con->query($sqld))
{
    echo '<script>window.alert("Remove successfully");history.go(-1);
     </script>';
}
else
{
    echo '<script>window.alert("can\'t remove");history.go(-1);</script>';
}

?>
