<?php
session_start();
if (!isset($_SESSION['username'])) {
  header("Location:index.html");
  exit();
}
else{
    $usname=$_SESSION['username'];
}
include 'db.php';

$na=$_POST["name"];
$ph=$_POST["phone"];
$em=$_POST["email"];
$msg=$_POST["message"];

      
            $count=0;
            $sta="select *from enquiry";

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
                        $in="update feedback set enquiry='$msg' where name='$na'";
                        $upe="update enquiry set enquiry='$msg' where uname='$na'";
                            if($con->query($in) AND $con->query($upe))
                            { 

                                $delm="update user set enquiry=' ' where uname='$na'";
                                $con->query($delm);
                                echo "<script>window.alert('Successfully updated'); history.go(-1);</script>";
                            }
                            else{
                                echo "<script>window.alert('cannot send'); history.go(-1);</script>";
                            }
                        }        
                    }
                    if($count==0)
                    {
                        $ins="insert into feedback(name,email,phone,enquiry) values('$na','$em','$ph','$msg')";
                        $inse="insert into enquiry(uname,email,phone,enquiry) values('$na','$em','$ph','$msg')";
                        if($con->query($ins) AND $con->query($inse))
                        {
                            $delm="update user set enquiry=' ' where uname='$na'";
                                $con->query($delm);
                            echo "<script>window.alert('Successfully send'); history.go(-1);</script>";
                        }
                        else{
                            echo "<script>window.alert('cannot send'); history.go(-1);</script>";
                        }
                    }
                }
            }
                
                              
           

$con->close();
?>