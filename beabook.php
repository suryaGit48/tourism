<?php
include 'db.php';

$fn=$_POST["name"];
$ema=$_POST["email"];
$phn=$_POST["phones"];
$members=0;
$members=$_POST["members"];
$childs=0;
$childs=$_POST["childs"];
$day=$_POST["todays"];
$star=$_POST["hotel"];
$hoam=$_POST["hotamount"];
$trans=$_POST["tran"];
$flo=$_POST["fromLocation"];
$loc=$_POST["toLocation"];
$nonin=$_POST["country"];
$loca=preg_replace('/\d+/','',$loc);
$nonin=$_POST["country"];
$loc=str_replace($nonin," ",$loca);
$tram=$_POST["traamount"];
$toto=$_POST["total"];
$pamo=$_POST["pacamount"];
$date=date("d.m.Y");
$time=date("h.m.sa");
$ran=rand();
$tran=rand();
$count=0;
$mem=(int)$members+(int)$childs;

$sql="insert into booking(transactionid,bookingid,name,email,phone,members,days,hotel,frloc,toloc,pamo,total,date,time) values('$tran','$ran','$fn','$ema','$phn','$mem','$day','$star','$flo','$loc','$pamo','$toto','$date','$time')";
if($con->query($sql))
{
    echo '<script>window.location.href="booking.php";</script>';
}
else{
    echo '<script>window.alert("Failed to Registered"); window.history(-1); </script>';
}

?>