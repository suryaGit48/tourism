<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tourism Management</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="http://localhost/proj/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/proj/fontawesome-free-5.15.4-web/css/all.min.css">
</head>
<body class="mybgh">
<script src="http://localhost/proj/js/bjquery.js"></script>
    <script src="http://localhost/proj/js/bootstrapm.js"></script>

  <nav class="navbar navbar-expand-lg bg-info myb">
  
  <div class="container">
  <img src="./img/prlogo5.png" alt="lo" height=60 width=130>
    <button class="navbar-toggler text-light" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <div class="nba"></div>
    <div class="nba"></div>
    <div class="nba"></div>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto nbr">
      <li class="nav-item">
      <a class="nav-link active text-dark navli" href="Homes.php">Home</a>
      </li>
      <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-dark navli drop-left"  role="button" aria-haspopup="true" aria-expanded="false" href="#"
                 id="dropdownMenuLink" data-toggle="dropdown">packages</a> 
                  <div class="dropdown-menu dropdown-menu-left" aria-labelledby="#dropdownMenuLink">
                  <a href="popularpackages.php" class="dropdown-item">popular packages</a>
             <a href="adventure.php" class="dropdown-item">Adventure packages</a>
             <a href="localpackage.php" class="dropdown-item">Local packages</a>
             <a href="islandpackages.php" class="dropdown-item">Island packages</a>
             <a href="beachpackages.php" class="dropdown-item">Beach packages</a>
             <a href="religionpackages.php" class="dropdown-item">Religion packages</a>
                   </div>
               
               </li>
      <li class="nav-item">
      <a class="nav-link active text-dark navli" href="mybook.php">mybookings</a>
      </li>
      <li class="nav-item">
      <a class="nav-link active text-dark navli" href="contact.php">contact</a>
      </li>
      <li class="nav-item">
		<a class="nav-link active text-dark navli"  href="profile.php">My profile</a>
	  </li>
      <li class="nav-item">
      <a class="nav-link active text-dark navli" href="index.html">Logout</a>
    </li>
    </ul>
    </div>
  </div>
  </nav>
<?php 
session_start();
$bona=$_POST["boname"];
$boem=$_POST["boema"];
$count=0;
$cou=0;
include 'db.php';
$sql2="select bookingid,email from book";

if($resu=$con->query($sql2))
{
    
    if($resu->num_rows>0)
    {
      while($rows=$resu->fetch_array())
      {
          $x=strcmp($rows[0],$bona);
          $y=strcmp($rows[1],$boem);
          if($x==0 && $y==0)
          {
              $count++;
          }
      }
      $resu->close();
      if($count>0)
   { 
    $sql3="select date,time,bookingid,name,email,phone,frloc,toloc,total from book where bookingid like '$bona'";
    echo '
    <div class="mybgh">
    <div class="container mt-100" style="margin-top:15%">
    <div class="row justify-content-center">
    <div class="col">
    <div class="card" style="background:none;border:none;">
    <div class="card-header text-center text-dark caheat"
    style="border-top-right-radius:14px;border-top-left-radius:14px;"><h3>MY BOOKINGS</h3> </div>
    <div class="card-body caheat">
    <div class="table-responsive">
     <table class="table table-bordered table-hover text-center">
     <thead class="bg-primary text-white">
    <tr><th>DATE<th>TIME<th>BOOKING ID<th>NAME<th>E-MAIL<th>PHONE.NO<th>FROM.LOCATION<th>TOLOCATION<th>TOTAL AMOUNT<th>PRINT<th>cancel your booking</tr> </thead>';
    if($re=$con->query($sql3))
    {
        if($re->num_rows>0)
        {
            while($rows=$re->fetch_array())
            {
                echo '
                <input type="hidden" id="tim" value="'.$rows[0].'">
                
                <tbody class="bg-light"><tr class="ml-2"><td>'.$rows[0].'<td id="time" value="'.$rows[1].'">'.$rows[1].'<td>'.$rows[2].'<td>'.$rows[3].'<td>'.$rows[4].'<td>'.$rows[5].'<td>'.$rows[6].'<td>'.$rows[7].'<td>'.
            $rows[8].'<td><form method="post" action="print.php">
            <input type="hidden" name="print" value="'. $rows[2].'">
                            <button type="submit" id="can" class="btn btn-primary cancel-button">print</button>
                </form>'.'<td><form id="fo" method="post" action="delete_row.php">
                <input type="hidden" name="delete_row" value="'. $rows[2].'">
                                <button type="submit" id="can" class="btn btn-danger cancel-button">Cancel</button>
                    </form>
               
                </tr></tbody>';
               
            }
        }
        else{
            echo '<script>window.alert("You are a new user") </script>';
        }
    }
    else 
        {
         echo "failure";
        }
    $re->close();
}
else 
{ 
    echo '<script>window.alert("Booking ID/E-mail not found"); history.go(-1);</script>';
}
    }
else{
        echo '<script>window.alert("No records found"); history.go(-1); </script>' ;
    }
}
else{
    echo "Erros in login";
    }
   echo '
   </table>
   </div>
   </div>
   <div class="card-footer caheat"><a href="Homes.php" class="btn btn-success btn-block text-center">OK</a> </div>
   </div>

   </div>
  </div></div></div>';

?> 

<script>


 var getdate=document.getElementById("tim").value;
 var pres=getdate.split(".");
 var pud = new Date(pres[2], pres[1] - 1, pres[0]); 

var cud = new Date();

var dir=cud.getTime()-pud.getTime();
var di=dir/(1000*3600*24);
var dif = cud - pud;
var difhou=dif/(1000*60*60);
// console.log("current date: "+cud);
// console.log("previous date: "+pud);
// console.log("difference in dates : "+di);
// console.log("difference in hours : "+difhou);

var fm=document.getElementById("fo");
let ca=document.getElementById("can");
fm.addEventListener('submit',function(event){
    if(difhou>24)
  {
    ca.disbled=true;
    window.alert("Booking is conformed");
    event.preventDefault();
    return false;
  }
  else{
    ca.disabled=false;
    return true; 
  }
  
});


</script>


</body>
</html>