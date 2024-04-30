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
	include 'db.php';
session_start();
if (!isset($_SESSION['adminname'])) {
  header("Location:index.html");
  exit();
}
else{
    $name=$_SESSION['adminname'];
}


?>


<?php
$count=0;
$sta="select *from admin";

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
	<div class="card mt-5">
	    <div class="card-header text-center text-primary prpro"><h3>ADMIN PROFILE <i class="fas fa-smile text-danger"></i></h3></div>
		<div class="card-body prbo">
		<form action="updateadminprofile.php" method="post" class="needs-validation" novalidate>
		<div class="table-responsive">
        <table class="table table-sm table-hover text-center prtab">                                        
			<tbody><tr> <td><h6>ADMIN NAME <td>
			 <input type="text" name="prname" value="<?php echo $row[0]; ?>" class="form-control" required=" "></h6></tr>

             <tr><td><h6>EMAIL ID <td>
			 <input type="email" name="premail" value="<?php echo  $row[2]; ?>"class="form-control" readonly></h6></tr>
			 <tr><td><h6>PHONE NO  <td>
			 <input type="number" name="prphone" oninput="phone()" id="pho" value="<?php echo $row[3]; ?>"class="form-control" required=" ">
			 <div class="valid-feedback" id="vap">valid</div>
			 <div class="invalid-feedback" id="ivap">Invalid</div>
			 </h6></tr>
			<tr><td><h6>PASSWORD 
      <td><input type="text" name="prpass" value="<?php echo $row[1]; ?>" class="form-control" required=" "> 
                        
		</h6></tr>
			<?php } } } }  ?>
    
			</tbody>
		
		</table>
	
							</div>
		  <div class="row justify-content-center">
			<div class="col-lg-2 col-5">
			<input type="submit" id="prsub" class="btn btn-primary" value="UPDATE">
			</div>
		 
		 
		 </form>
		 <div class="col-lg-2 col-5">
			<a href="dashboard.php" type="button" class="btn btn-secondary" value="BACK">BACK</a>
			</div> </div>
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