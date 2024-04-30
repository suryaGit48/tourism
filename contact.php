<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="http://localhost/proj/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/proj/fontawesome-free-5.15.4-web/css/all.min.css">

    <title>Tourism Management</title>

    <style>
      a:hover{text-decoration:none; color:red;}

    </style>
</head>
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
?>
<body class="cbg">
  <script src="http://localhost/proj/js/bjquery.js"></script>
  <script src="http://localhost/proj/js/bootstrapm.js"></script>

    <nav class="navbar navbar-expand-lg pabg">

        <div class="container">
          <img src="./img/prlogo5.png" alt="lo" height=60 width=150>
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
                <a class="nav-link active text-dark navli" href="mybook.php">mybookings</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active navli" href="#">contact</a>
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
<!--contact -->
 <div class="container mt-75 mt-sm-100  conai">
        <div class="row justify-content-center mt-sm-75">
            <div class="col-lg-5 col-12 col-md-6">
                <div class="card" style="background:none;border:none;">
                    <div class="card-header text-center text-dark cahea"
                    style="border-top-right-radius:100px;
                border-top-left-radius:100px;">
                   <h3 class="text-white"><i class="fas fa-phone text-warning"></i> ENQUIRY </h3>
                    </div>
                    <div class="card-body caheat">
                        <form action="enquiry.php" method="post">
                        <?php 
                      
$count=0;
$sta="select *from user";

if($res=$con->query($sta))
{
	if($res->num_rows>0)
	{
		while($row=$res->fetch_array())
		{
		 $x=strcmp($row[0],$usname);
	
		 if($x==0)
		 {
			 $count++;   
?>                            
                        <label for="name">Full Name *</label>
                        <input type="text" name="name" class="form-control" value="<?php echo $usname;?>" readonly>
                         <label for="email">E-mail *</label>
                         <input type="email" name="email" class="form-control" value="<?php echo $row[2];?>" readonly>
                         <label for="ph">Phone NO</label>
                         <input type="number" name="phone" id="ph" placeholder="phonenumber" value="<?php echo $row[3];?>" readonly class="form-control">

                     
    <label for="message">Message*</label>
 
    <textarea name="message" class="form-control" required="" ></textarea>
           
<br>
<?php 
     }
    }
  }
}
  ?> 
                  </div>
                         <div class="card-footer cahea text-center"style="border-bottom-left-radius:50px;
                         border-bottom-right-radius:50px;">
                         <div class="row justify-content-center">
                          <div class="col-6">
                          <button type="submit" class="btn btn-light btn-block" style="font-weight:bold;">
                            <i class="fas fa-check-circle" style="color:blueviolet;background-color:white;
                            border-radius:100%;"></i> SUBMIT</button></div>
                        </div>
                        </div>
                        </form>
                    
                </div>
            </div>
            <div class="col-lg-5 col-md-6 col-12">
              <div class="card cafed"style="background:none;border:none;">
                <div class="card-header text-center text-dark cahea"
                style="border-top-right-radius:100px;
                border-top-left-radius:100px;"><h2 class="text-white"><i class="fas fa-comment text-warning"></i> FEEDBACK</h2></div>
                <div class="card-body caheat">
                  <form action="feedback.php" method="post">
<?php
                        $counts=0;
      $staf="select *from user";

      if($resfe=$con->query($staf))
      {
        if($resfe->num_rows>0)
        {
          while($rowf=$resfe->fetch_array())
          {
          $y=strcmp($rowf[0],$usname);
        
          if($y==0)
          {
            $counts++;  
    ?> 
                    <label for="na">Name</label>
                    <input type="text" name="name" id="na"  readonly value ="<?php echo $usname; ?>" class="form-control">
                    <label for="ema">E-mail</label>
                    <input type="email" name="email" id="ema"   readonly value="<?php echo $rowf[2]; ?>"  class="form-control">
                    <label for="ph">Phone NO</label>
                    <input type="number" name="phone" id="ph"  readonly value="<?php echo $rowf[3]; ?>" required class="form-control">
                    <label for="feed">Feedback</label>
                    <textarea name="feed" id="feed" placeholder="Feedback"  required class="form-control"> </textarea>
                    <br>
                    
<?php 
                  }
                 }
               }
             }
               ?> 
                    
                    </div>
                    <div class="card-footer cahea text-center"style="border-bottom-left-radius:50px;
                         border-bottom-right-radius:50px;">
                         <div class="row justify-content-center">
                          <div class="col-6">
                          <button type="submit" class="btn btn-light btn-block" style="font-weight:bold;">
                            <i class="fas fa-check-circle" style="color:blueviolet;background-color:white;
                            border-radius:100%;"></i> SUBMIT</button></div>
                        </div>
                        </div>
                  </form>
                </div>
              
            </div>
        </div>
    </div>
<!--tourism heads-->
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6 col-lg-3 col-12 mt-5">
      <div class="card" style="background:none;border:none;">
        <div class="card-header text-center text-dark cahea"
        style="border-top-right-radius:40px;border-top-left-radius:40px;"><h5 class="text-white">TOURISM MANAGER</h5> </div>
        <div class="conimg">
             <img src="./img/suryam.jpg" height=230 class="card-img pacima">
      
        </div>
      
        <div class="card-body caheat">
          <h4 class="text-center text-success">SURYA</h4>
          
           <h6 class="text-danger mt-2"><i class="fas fa-phone"></i>
            <a href="tel:636990125">6369890125</a></h6>
            <h6 class="text-danger mt-2"><i class="fas fa-envelope"></i>
              <a href="mailto:suryasantha71@gmail.com">suryasantha7@gmail.com</a></h6>
           <h6 class="text-danger mt-2"><i class="fab fa-instagram"></i><a href="https://www.instagram.com/the__mr_cool/?next=%2F&hl=en"> the__mr_cool</a></h6>
        </div>
        <div class="card-footer  cahea"style="border-bottom-right-radius:20px;border-bottom-left-radius:20px;">
          <div class="row justify-content-center">
          <button class="btn btn-light bg-primary text-light" style="font-weight:bold;border:none;">
            <i class="fas fa-comment text-dark"></i> SEND MESSAGE</button>
        </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-3 col-12 mt-5">
      <div class="card" style="background:none;border:none;">
        <div class="card-header text-center text-dark cahea"
        style="border-top-right-radius:40px;border-top-left-radius:40px;"><h5 class="text-white">TRAVEL CONSULTANT</h5> </div>
        <div class="conimg">
        <img src="./img/essa.jpg" class="card-img h-50 pacima">
      
      </div>
        <div class="card-body caheat">
  
          <h4 class="text-center text-success">ESSAM</h4>
          
           <h6 class="text-danger mt-2"><i class="fas fa-phone"></i>
            <a href="tel:9629832654">9629832654</a></h6>
            <h6 class="text-danger mt-2"><i class="fas fa-envelope"></i>
              <a href="mailto:suryasantha71@gmail.com">essam19@gmail.com</a></h6>
           <h6 class="text-danger mt-2"><i class="fab fa-instagram"></i><a href="https://www.instagram.com/mhd_essam_786/?hl=en">mhd_essam_786</a></h6>
           
        </div>
        <div class="card-footer  cahea"style="border-bottom-right-radius:20px;border-bottom-left-radius:20px;">
          <div class="row justify-content-center">
          <button class="btn btn-light bg-primary text-light" style="font-weight:bold;border:none;">
            <i class="fas fa-comment text-dark"></i> SEND MESSAGE</button>
        </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-12 mt-5">
      <div class="card" style="background:none;border:none;">
        <div class="card-header text-center text-dark cahea"
        style="border-top-right-radius:40px;border-top-left-radius:40px;"><h5 class="text-white">TOUR GUIDE</h5> </div>
        <div class="conimg">   <img src="./img/mah4.jpg" class="card-img pacima">
        
          </div>
        <div class="card-body caheat">
          <h4 class="text-center text-success">MAHESH</h4>
           
           <h6 class="text-danger mt-2"><i class="fas fa-phone"></i>
            <a href="tel:8072405788">8072405788</a></h6>
            <h6 class="text-danger mt-2"><i class="fas fa-envelope"></i>
              <a href="mailto:suryasantha71@gmail.com">mahesh31@gmail.com</a></h6>
           <h6 class="text-danger mt-2"><i class="fab fa-instagram"></i><a href="https://www.instagram.com/mahesh__.official_/?hl=en ">mahesh__.official_</a></h6>
        </div>
        <div class="card-footer  cahea"style="border-bottom-right-radius:20px;border-bottom-left-radius:20px;">
          <div class="row justify-content-center">
          <button class="btn btn-light bg-primary text-light" style="font-weight:bold;border:none;">
            <i class="fas fa-comment text-dark"></i> SEND MESSAGE</button>
        </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row justify-content-center">
  <div class="col-lg-3 col-md-6 col-12 mt-5">
    <div class="card" style="background:none;border:none;">
      <div class="card-header text-center text-dark cahea"
      style="border-top-right-radius:40px;border-top-left-radius:40px;"><h5 class="text-white">EVENT MANAGER</h5> </div>
      <div class="conimg">  <img src="./img/sakthi.jpg" class="card-img h-50 pacima">
    
      </div>
      <div class="card-body caheat">
        <h4 class="text-center text-success">SAKTHIVEL</h4>
         
         <h6 class="text-danger mt-2"><i class="fas fa-phone"></i>
          <a href="tel:8220390721">8220390721</a></h6>
          <h6 class="text-danger mt-2"><i class="fas fa-envelope"></i>
            <a href="mailto:suryasantha71@gmail.com">sakthivel44@gmail.com</a></h6>
         <h6 class="text-danger mt-2"><i class="fab fa-instagram"></i><a href="https://www.instagram.com/sakthi__.vel_/?hl=en">sakthi__.vel_</a></h6>
      </div>
      <div class="card-footer  cahea"style="border-bottom-right-radius:20px;border-bottom-left-radius:20px;">
        <div class="row justify-content-center">
        <button class="btn btn-light bg-primary text-light" style="font-weight:bold;border:none;">
          <i class="fas fa-comment text-dark"></i> SEND MESSAGE</button>
      </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6 col-12 mt-5">
    <div class="card" style="background:none;border:none;">
      <div class="card-header text-center text-dark cahea"
      style="border-top-right-radius:40px;border-top-left-radius:40px;"><h5 class="text-white">TRAVEL GUIDE</h5> </div>
      <div class="conimg">    <img src="./img/bala.jpg" class="card-img h-25 pacima">
     
      </div>
      <div class="card-body caheat">
        <h4 class="text-center text-success">BALA</h4>
         
         <h6 class="text-danger mt-2"><i class="fas fa-phone"></i>
          <a href="tel:9344379343">9344379343</a></h6>
          <h6 class="text-danger mt-2"><i class="fas fa-envelope"></i>
            <a href="mailto:suryasantha71@gmail.com">balaesakki31@gmail.com</a></h6>
         <h6 class="text-danger mt-2"><i class="fab fa-instagram"></i><a href="https://www.instagram.com/udaiyar_bala?utm_source=ig_web_button_share_sheet&igsh=OGQ5ZDc2ODk2ZA==">udaiyar_bala</a></h6>
      </div>
      <div class="card-footer  cahea"style="border-bottom-right-radius:20px;border-bottom-left-radius:20px;">
        <div class="row justify-content-center">
        <button class="btn btn-light bg-primary text-light" style="font-weight:bold;border:none;">
          <i class="fas fa-comment text-dark"></i> SEND MESSAGE</button>
      </div>
      </div>
    </div>
  </div>
</div>
</div>

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
      <div class="col-lg-4 col-12">
        <h6 class="text-white">copyright <i class="fas fa-copyright"></i> 2024 by Friendly Tourism</h6>
      </div>
    </div>
   
</footer>
</body>
</html>