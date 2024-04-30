<html>
<head>
<title>Tourism Management</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="http://localhost/proj/css/bootstrap.min.css">
<link rel="stylesheet" href="http://localhost/proj/fontawesome-free-5.15.4-web/css/all.min.css">
</head>
<body class="home">  
<script src="http://localhost/proj/js/bjquery.js"></script>
    <script src="http://localhost/proj/js/bootstrapm.js"></script>
<?php 
session_start();

$uname=$_POST["uname"];
$pass=$_POST["pass"];
$count=0;
include 'db.php';

$sta="select *from user";

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
		 }
		 
		}
		$res->close();
	}
	else{
		echo "no records found";
		
	}
}
if($count>0)
{
	$_SESSION['username']=$uname;
	header("Location:dash.php");
	exit();
?>
	<div class="homebg">
	<nav class="navbar navbar-expand-lg">

	<div class="container">
	<img src="./img/prlogo5.png" alt="lo" height=100 width=200>
	<h5 class="text-white">Welcome...<?php echo $usname; ?></h5>
	  <button class="navbar-toggler text-light" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	  <div class="nba"></div>
	  <div class="nba"></div>
	  <div class="nba"></div>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNav">
		<ul class="navbar-nav ml-auto nbr">
		  <li class="nav-item">
			<a class="nav-link active text-light navli" href="#">Home</a>
		  </li>
		  <li class="nav-item dropdown" id="hover-dropdown">
                <a class="nav-link dropdown-toggle text-light navli drop-left"  role="button" aria-haspopup="true" aria-expanded="false" href="#"
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
			<a class="nav-link active text-light navli" href="mybook.php">mybookings</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link active text-light navli" href="contact.php">contact</a>
		  </li>
		  <li class="nav-item">
		<a class="nav-link text-light navli"  href="profile.php">My profile</a>
	  </li>
		  <li class="nav-item">
		  <a class="nav-link active text-light navli" href="index.html">Logout</a>
		</li>
		</ul>
	  </div>
	</div>
  </nav>
	
  <script>
      $(document).ready(function() {
          // Show dropdown menu on hover
          $('#hover-dropdown').hover(function() {
              $(this).find('.dropdown-menu').stop(true, true).fadeIn(200);
          }, function() {
              $(this).find('.dropdown-menu').stop(true, true).fadeOut(200);
          });
      });
  </script>
  <div class="container mt-2">
    <div class="row mt-2">
      <div class="col-lg-4 col-12 mt-2">
        <h1 class="hoh">EXPLORE</h1>
        
      </div>
    </div>
    <div class="row ml-5">
      <h2 class="hos">THE WORLD</h2>
	</div>
	<div class="row">
      <div class="col-lg-6 col-md-10 col-12">
        <h2 class="text-light hoss">Travel Deep, Live Large: Crafting Your Personalized Tapestry of Memories</h2>
      </div>
    </div>
    <div class="row ml-5 mt-4">
      <div class="col-lg-4 col-7">
   <div class="ml-5"><a href="popularpackages.php" class="btn btn-success ml-5">DISCOVER NOW</a></div></div>
    </div>
    
  </div></div>
<?php
} 
else
{
 echo '<script>
  window.alert("Login failed"); </script>';
  echo '<script>history.go(-1)</script>';
}

$con->close();
?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
