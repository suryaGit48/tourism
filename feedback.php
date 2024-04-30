<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tourism management</title>
    <link rel="stylesheet" href="style3.css">
    <link rel="stylesheet" href="http://localhost/proj/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/proj/fontawesome-free-5.15.4-web/css/all.min.css">
</head>
<body>
<script src="http://localhost/proj/js/bjquery.js"></script>
    <script src="http://localhost/proj/js/bootstrapm.js"></script>
<?php
include 'db.php';
$na=$_POST["name"];
$em=$_POST["email"];
$ph=$_POST["phone"];
$fb=$_POST["feed"];

$count=0;
$sta="select *from feedback";

if($res=$con->query($sta))
{
	if($res->num_rows>0)
	{
		while($row=$res->fetch_array())
		{
		 $x=strcmp($row[0],$na);
	
		 if($x==0)
		 {
			 $count++;
                $in="update feedback set feedback='$fb' where name='$na'";
                if($con->query($in))
                {
                    echo "<script>window.alert('Successfully updated'); history.go(-1);</script>";
                }
                else{
                    echo "<script>window.alert('cannot send'); history.go(-1);</script>";
                }
            }        
        }
        if($count==0)
        {
            $sqli="insert into feedback(name,email,phone,feedback) values('$na','$em','$ph','$fb')";
            if($con->query($sqli))
            {
                echo '<script>window.alert("successfully submitted");history.go(-1);</script>';
            }
            else{
                echo '<script>window.alert("Not submitted");history.go(-1);</script>';
            }
        }
    }
}



?>
</body>
</html>
