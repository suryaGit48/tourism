<?php
include 'db.php';

   $uname=$_POST["uname"];
   $pass=$_POST["pass"];
   $count=0;
   $cou=0;
   $sta="select name,password,email from admin";

   if($res=$con->query($sta))
   {
       if($res->num_rows>0)
       {
           while($row=$res->fetch_array())
           {
           $x=strcmp($row[0],$uname);
           $y=strcmp($row[1],$pass);
           if($x==0 && $y==0)
           {
               $count++;
               $usern=$uname;
               $ademail=$row[2];
               session_start();
           $_SESSION['adminname']=$usern;
           $_SESSION['adminemail']=$ademail;
            header("Location:dashboard.php");
            exit();

           }
           else{
             $coun++;
           }
           }
           $res->close();
       }
       else{
           echo '<script>window.alert("no records found");history.go(-1);  </script>';
           
       }
   }
   else{
    echo '<script>window.alert("no records found");history.go(-1);  </script>';
   }
if($coun>0)
{
    echo '<script>window.alert("no records found");history.go(-1);  </script>';
}
?>