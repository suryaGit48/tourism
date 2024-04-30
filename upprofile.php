<?php
session_start();
include 'db.php';

if (!isset($_SESSION['username'])) {
  header("Location:index.html");
  exit();
}
else{
    $name=$_SESSION['username'];
}
$prna=$_POST["prname"];
$prem=$_POST["premail"];
$prph=$_POST["prphone"];
$prpa=$_POST["prpass"];


$sqr="select *from user";
$count=0;
if($res=$con->query($sqr))
{
	if($res->num_rows>0)
	{
	 while($row=$res->fetch_array())
	 {
		 if($name!=$prna)
		 {
			if($row[0]==$prna)
            {
                $count++;
            }
            
		 }
    }
    }
}
if($count>0)
{
    echo '<script>window.alert("username already found");history.go(-1);</script>';
}
else{
$_SESSION['username']=$prna;
$upd="update user set uname='$prna',password='$prpa',email='$prem',phone='$prph' where email='$prem'";
if($con->query($upd))
{
    echo '<script>window.alert("profile updated successfully");history.go(-1);</script>'; 
}
}
$con->close();
?>
