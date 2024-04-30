
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="http://localhost/proj/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/proj/fontawesome-free-5.15.4-web/css/all.min.css">
    <title>Tourism management</title>
</head>
<body>
<script src="http://localhost/proj/js/bjquery.js"></script>
<script src="http://localhost/proj/js/bootstrapm.js"></script>
<?php
session_start();
if (!isset($_SESSION['username'])) {
  header("Location:index.html");
  exit();
}
else{
    $usname=$_SESSION['username'];
}
?>
<nav class="navbar navbar-expand-lg pabg">
  
  <div class="container">
    <img src="./img/prlogo5.png" alt="lo" height=60 width=130>
    <h5 class="text-dark">Welcome...<?php echo $usname; ?> <i class="fas fa-smile text-success"></i></h5>
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
      <li class="nav-item dropdown" id="hover-dropdown">
        <a class="nav-link dropdown-toggle navli drop-left"  role="button" aria-haspopup="true" aria-expanded="false" href="#"
         id="dropdownMenuLink" data-toggle="dropdown">packages</a> 
          <div class="dropdown-menu dropdown-menu-left" aria-labelledby="#dropdownMenuLink">
             <a href="popularpackages.php" class="dropdown-item">popular packages</a>
             <a href="adventure.php" class="dropdown-item">Adventure packages</a>
             <a href="#" class="dropdown-item">Local packages</a>
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
  <div id="carouselExampleControls" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleControls" data-slide-to="1"></li>
      <li data-target="#carouselExampleControls" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
     <div class="carousel-item active">
         <img src="./img/bga1.jpg" alt="train" class="d-block w-100 h-75 img-fluid">
     </div>
     <div class="carousel-item">
      <img src="./img/bga10.jpg" alt="train" class="d-block w-100 h-75 img-fluid">
  </div>
  <div class="carousel-item">
    <img src="./img/bga2.jpg" alt="train" class="d-block w-100 h-75 img-fluid">
</div></div>
<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="sr-only">Next</span>
</a>
  </div>
   <div class="bg">
<div class="container text-center">
      <div class="row justify-content-center">
        <h2 class="text-danger my-1 mt-2"> LOCAL PACKAGES </h2> <br>
      </div>
      <h6><a href="lpackageamount.php">Click Here  <i class="fas fa-arrow-right"></i></a>    view package amount details</h6>
      
    
    </div>

<?php
include 'db.php';
$sqls = "select *from packages";
if ($re = $con->query($sqls)) {
    if ($re->num_rows > 0) {
        $card_count = 0;
?>
        
<div class="container">
<div class="row justify-content-center">
<?php
        while ($rows = $re->fetch_array()) 
        {
            $card_count++;
?>
            <div class="col-lg-4">
                <div class="card w-100 mt-sm-5 pacard" style="background:none;border:none;width:700px;">
                    <!-- <div class="pacim">
                        <img src="./image/" alt="leaning" class="card-img-top pacima">
                    </div> -->
                    
                    
                    
                    <a href="http://hohogoa.com/goa-tourism/sightseeing-places-to-visit-goa.aspx" class="text-light ab">
                <div class="pacim">  <div class="card-body pacbg" style="background-image:url('./image/<?php echo $rows[4]; ?>');
                    background-size:cover;border-radius:20px;">
                                        
                        <br><br>
                        
                        <h2 class="text-center text-white" style="font-weight:bold;"><?php echo $rows[0]; ?></h2>
                        
                       <h5 class="text-center"> <a href="localbook.php" style="font-weight:bold;" class="bg-waring text-light text-center"> 
                        <button class="btn btn-warning text-center">BOOK NOW</button></a></h5>
                        <br>
                        
                    </div></div></a>
                   
                </div>
            </div>
<?php
            // Close the row and start a new one after displaying two cards
            if ($card_count % 3 == 0) {
                echo '</div><br><div class="row justify-content-center">';
            }
        }
?>
        
        </div>
        </div>
    
<?php
    }
}
?>
<footer class="bg-dark">
  <div class="container">
    <div class="row mt-5">
      <div class="col-lg-3 col-6 text-white mt-5">
        <h4 class="text-white"><i class="fas fa-building"></i> Head Office</h4>
        <p>Sadakathullah Appa College,
          Rahmath Nagar,
          Tirunelveli-627011,
          TamilNadu,India
        </p>
      </div>
       <div class="col-lg-3 col-4 ml-5 mt-5">
        <h4 class="text-white"><i class="fas fa-building"></i> Branches</h4>
        <div class="list1 text-white">
        <ul style="list-style-type:none;">
        <li>Tirunelveli</li>
        <li>Chennai</li>
        <li>Thoothukudi</li>
        <li>Coimbatore</li>
        <li>Tirichy</li>
        <li>Kanchipuram</li></ul>
       </div>
    </div>
     <div class="col-lg-2 col-6 mt-5">
      <h4 class="text-white"><i class="fas fa-phone"></i> Call us</h4>
      <p><a class="text-white" href="tel:6369890125">6369890125</a></p>
      <p><a  class="text-white" href="tel:9629832654">9629832654</a></p>
     </div>
     <div class="col-lg-2 col-6 mt-5 text-white">
      <h4 clsss="text-white"><i class="fas fa-envelope"></i> Email us</h4>
      <p><a class="text-white" href="mailto:21acs48@sadakath.ac.in">21acs48@sadakath.ac.in</a></p>
      <br>
      <h4 class="text-white ml-2" style="text-decoration:underline;">Follow Us </h4>
      <ul style="display:inline-flex;list-style-type:none;" class="text-white">
      <li><a href="#" class="text-danger"><i class="fab fa-instagram"></i></a></li>
      <li class="ml-2"><a href="#" class="text-primary"><i class="fab fa-facebook"></i></a></li>
      <li class="ml-2"><a href="#" class="text-primary"><i class="fab fa-twitter"></a></i></li>
      <li class="ml-2"><a href="#" class="text-success"><i class="fab fa-whatsapp"></i></a></li>
    </ul>
     </div>
  </div><br>
  <div class="row justify-content-center">
      <div class="col-4">
        <h6 class="text-white">copyright <i class="fas fa-copyright"></i> 2024 by Friendly Tourism</h6>
      </div>
    </div>
   
</footer>
</div>
</body>
</html>