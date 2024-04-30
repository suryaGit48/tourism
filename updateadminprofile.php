<?php
session_start();
include 'db.php';
if (!isset($_SESSION['adminname'])) {
  header("Location:index.html");
  exit();
}
else{
    $name=$_SESSION['adminname'];
}
$prna=$_POST["prname"];
$prem=$_POST["premail"];
$prph=$_POST["prphone"];
$prpa=$_POST["prpass"];


$sqr="select *from admin";
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
$_SESSION['adminname']=$prna;
$upd="update admin set name='$prna',password='$prpa',email='$prem',phone='$prph' where email='$prem'";
if($con->query($upd))
{
    echo '<script>window.alert("profile updated successfully");history.go(-2);</script>'; 
}
}
$con->close();
?>
