<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tourism management</title>
	   <link rel="stylesheet" href="style3.css">
	  <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="http://localhost/proj/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/proj/fontawesome-free-5.15.4-web/css/all.min.css">
</head>
<body class="prof">
  
	  <script src="http://localhost/proj/js/bjquery.js"></script>
    <script src="http://localhost/proj/js/bootstrapm.js"></script>
    <!-- <script src="http://localhost/proj/js/bootstrap.min.js"></script>
    <script src="http://localhost/proj/js/jquery.min.js"></script>
    <script src="http://localhost/proj/js/bootstrap.bundle.min.js"></script> -->

    <?php
session_start();
if (!isset($_SESSION['username'])) {
  header("Location:index.html");
  exit();
}
else{
    $name=$_SESSION['username'];
}

include 'db.php';
?>

    <nav class="navbar navbar-expand-lg">

        <div class="container">
          <img src="./img/prlogo5.png" alt="lo" height=100 width=200>
          <h5 class="text-dark">Welcome...<?php echo $name; ?> <i class="fas fa-smile text-warning"></i></h5>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <div class="nba"></div>
          <div class="nba"></div>
          <div class="nba"></div>
          </button>
          <div class="collapse navbar-collapse lin" id="navbarNav">
            <ul class="navbar-nav ml-auto nbr">
              <li class="nav-item">
                <a class="nav-link active text-light navli" href="Homes.php">Home</a>
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
                <a class="nav-link text-light navli"  href="mybook.php">mybookings</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light navli"  href="contact.php">contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light navli"  href="profile.php">Myprofile</a>
                </li>
              <li class="nav-item">
              <a class="nav-link text-light navli" href="index.html">logout</a>
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
      <?php

$counts=0;
$en="no enquiries";
$sta="select *from feedback";

if($rest=$con->query($sta))
{
if($rest->num_rows>0)
{
while($rowe=$rest->fetch_array())
{
  
$y=strcmp($rowe[0],$name);
echo '<script>console.log('.$y.'); </script>';
echo '<script>console.log(" name : "+'.$rowe[0].'); </script>';
if($y==0)
{
  $counts++;
  $en=$rowe[4];
  echo '<script>console.log(" name : "'.$en.'); </script>';

}
}
}
}
?>

<?php
$count=0;
$sta="select *from user";

if($res=$con->query($sta))
{
	if($res->num_rows>0)
	{
		while($row=$res->fetch_array())
		{
			
		 $x=strcmp($row[0],$name);
		
		 if($x==0)
		 {
			 $count++;
?>
<div class="row justify-content-center mt-5">
	<div class="col-lg-6">
	<div class="card">
	    <div class="card-header text-center text-primary prpro"><h3>MY PROFILE <i class="fas fa-smile text-danger"></i></h3></div>
		<div class="card-body prbo">
		<form action="upprofile.php" method="post" class="needs-validation" novalidate>
		<div class="table-responsive">
        <table class="table table-sm table-hover text-center prtab">                                        
			<tbody><tr> <td><h6>USER NAME <td>
			 <input type="text" name="prname" value="<?php echo $name; ?>" class="form-control" required=" "></h6></tr>
             
             <tr><td><h6>EMAIL ID <td>
			 <input type="email" name="premail" value="<?php echo  $row[2]; ?>"class="form-control" readonly></h6></tr>
			 <tr><td><h6>PHONE NO  <td>
			 <input type="number" name="prphone" oninput="phone()" id="pho" value="<?php echo $row[3]; ?>"class="form-control" required=" ">
			 <div class="valid-feedback" id="vap">valid</div>
			 <div class="invalid-feedback" id="ivap">Invalid</div>
			 </h6></tr><?php $enq=$row[4]; ?>
			<tr><td><h6>PASSWORD 
      <td><input type="text" name="prpass" id="pas" value="<?php echo $row[1]; ?>" oninput="passwords()" onchange="passwords()" class="form-control" required=" "> 
      <div class="valid-feedback" id="spv">valid</div>
			 <div class="invalid-feedback" id="spiv">Invalid</div>
                        
		</h6></tr>
			<?php } } } }  ?>
      
    

			<tr><td><h6>MY ENQUIRI  <td>  
			<textarea name="enq" readonly placeholder="<?php echo $en; ?>" class="form-control" ></textarea></h6></tr>
		  
			
			<tr><td><h6>RECEIVED MESSAGE  <td>
			<textarea name="enq" readonly placeholder="<?php echo $enq; ?>" class="form-control" ></textarea></h6></tr>
			</tbody>
		
		</table>
	
							</div>
		  <div class="row justify-content-center">
			<div class="col-lg-2 col-5">
			<input type="submit" id="prsub" class="btn btn-primary" value="update">
			</div>
		  </div>
		 
		 </form>
	    </div>
	</div>
	</div>
</div>
<script>
	function phone()
	{
  let ph=document.getElementById("pho");
  let phv=document.getElementById("vap");
  let phiv=document.getElementById("ivap");
  let su=document.getElementById("prsub");
  if(ph.value.length>0 && ph.value.length===10)
  {
	ph.classList.add("is-valid");
	ph.classList.remove("is-invalid");
	phv.style.display="block";
	phiv.style.display="none";
	su.disabled=false;
  }
  else{
	ph.classList.add("is-invalid");
	ph.classList.remove("is-valid");
	phiv.style.display="block";
	phv.style.display="none";
	su.disabled=true;
  }
	}
  function passwords()
          {
                      let sn=document.getElementById("pas");
                      let sva=document.getElementById("spv")
                      let siva=document.getElementById("spiv");
                      let usub=document.getElementById("prsub");
                      if(sn.value.length>=8)
                      {
                          sn.classList.add("is-valid");
                          sn.classList.remove("is-invalid");
                          sva.style.display="block";
                          siva.style.display="none";
                          usub.disabled=false;
                      }
                      else{
                          sn.classList.add("is-invalid");
                          sn.classList.remove("is-valid");
                          siva.style.display="block";
                          sva.style.display="none";
                          usub.disabled=true;
                      }  
          }
</script>
<script>
            // Example starter JavaScript for disabling form submissions if there are invalid fields
            (function() {
              'use strict';
              window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                  form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                      event.preventDefault();
                      event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                  }, false);
                });
              }, false);
            })();
</script>
</body>
</html>