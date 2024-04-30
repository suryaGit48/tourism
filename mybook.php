<html>
<head>
  <title>Tourism Management</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="http://localhost/proj/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/proj/fontawesome-free-5.15.4-web/css/all.min.css">
</head>
<body class="mybg">
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


  <nav class="navbar navbar-expand-lg myb">
  
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
        <a class="nav-link active navli" href="#">mybookings</a>
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
  <div class="mybg">
    <div class="container" style="margin-top:15%;">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col-12">
                <div class="card camybo" style="background:none;border:none;">
                    <div class="card-header text-center text-dark caheat"
                    style="border-top-right-radius:30px;border-top-left-radius:30px;"><h4>TO CHECK YOUR BOOKINGS</h4></div>
                    <div class="card-body mybcb">
                        <form action="mybo.php" method="post">
                    
                    <i class="fas fa-book"></i>   Booking ID :  <input type="text" name="boname" required="" placeholder="Booking ID*" class="form-control">
                    <i class="fas fa-envelope"></i>     E-mail : <input type="email" name="boema" required=""  class="form-control" placeholder="Booking Mail ID *">
                        </div>
                        <div class="card-footer caheat">
                          <div class="row">
                            <div class="col-6">
                             
                              <button type="submit" value="submit" class="btn btn-primary btn-block"
                              style="font-weight:bold;">
                                <i class="fas fa-check-circle" style="color:blueviolet;background-color:white;
                                border-radius:100%;"></i> SUBMIT</button>
                            </div></form>
                            <div class="col-6">
                              <a href="Homes.php"><button class="btn btn-secondary btn-block" style="font-weight:bold;">
                                <i class="fas fa-arrow-left text-dark"style="background-color:lightblue;height:20px;width:20px;
                                border-radius:100%;padding-top:5px;padding-bottom:20px;
                                        padding-right:20px;padding-left:5px;"> </i>  BACK</button></a>
                            </div>
                          
                           </div>
                        </div> 
                </div>
            </div>
        </div>
    </div>
  </div><br><br><br><br><br><br><br>
<footer class="bg-dark mt-5">
  <div class="container mt-5">
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
<style>
  @media only screen and (max-width: 560px)
  {
     div.camybo{
      margin-top:60px;
     }
  }
</style>
</body>
</html> 