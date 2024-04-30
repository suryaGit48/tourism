<html>
<head>
	<link rel="stylesheet" href="style.css">
	<title>Tourism Management</title>
<style>
body{
background-image:url("https://cdn.pixabay.com/photo/2020/01/22/18/24/venice-4785972_960_720.jpg"); background-size:cover;
background-repeat:no-repeat; 
}
</style>
</head>
<body>

<?php
include 'db.php';

$siname=$_POST["siname"];
$siemail=$_POST["siemail"];
$sipass=$_POST["sipass"];
$phone=$_POST["siphone"];
$count=0;
$coun=0;

$sqr="select *from admin";
if($res=$con->query($sqr))
{
	if($res->num_rows>0)
	{
	 while($row=$res->fetch_array())
	 {
		 if($row[0]==$siname)
		 {
			 $count++;
		 }
		 else if($row[2]==$siemail)
		 {
			 $coun++;
		 }
	 }
	}
	else{
		echo "No records found";
	}
}
else { echo "Error";}
if($count>0)
{
	echo '<script>window.alert("Username already found")</script>';
	 echo '<script>history.go(-1)</script>';
}
else if($coun>0)
{
	echo '<script>window.alert("E-mail already found")</script>';
	echo '<script>history.go(-1)</script>';

}
else{
$sql="insert into admin(name,password,email,phone) values('$siname','$sipass','$siemail','$phone')";
if($con->query($sql)==True)
{
	echo '<script>window.alert("Succesfully submitted")</script>';
	echo '<script>history.go(-1); location.reload();</script>';
}				
else{
	echo "error";
}
}
$con->close();
?>
</body>
</html>