<html>
<head>
    <title>Tourism Management</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="http://localhost/proj/css/bootstrap.min.css">
<link rel="stylesheet" href="http://localhost/proj/fontawesome-free-5.15.4-web/css/all.min.css">

</head>
<body class="ind">
    <script src="http://localhost/proj/js/bjquery.js"></script>
    <script src="http://localhost/proj/js/bootstrapm.js"></script>
    <script src="http://localhost/proj/js/bootstrap.min.js"></script>
    <script src="http://localhost/proj/js/jquery.min.js"></script>
    <script src="http://localhost/proj/js/bootstrap.bundle.min.js"></script>


    <div class="indbg">
    <div class="container my-5 text-center">
        <div class="row justify-content-center">
            <div class="col-md-3 col-lg-4 col-12">
                <div class="card rounded my-5" style="background:none;">
                   
                     <div class="card-body text-left">
                      <h4 class="text-center text-white">REGISTER NOW</h4>
                        <form class="needs-validation" action="sign.php" method="post" novalidate>
                               <label for="siname" class="text-white"><i class="fas fa-user text-danger"></i> NAME</label>
                            <input type="text" name="siname"  id="unas" class="form-control inun" required="">
                            

                            <label for="siemail"  class="text-white mt-2"><i class="fas fa-envelope text-danger"></i > E-MAIL</label>
                            <input type="email" id="em" oninput="emails()" name="siemail"  class="form-control inun" required="">
                            <div class="valid-feedback" id="sev">valid</div>
                            <div class="invalid-feedback" id="seiv">Invalid</div>

                            <label for="phone"  class="text-white mt-2"><i class="fas fa-envelope text-danger"></i > PHONE NO </label>
                              <input type="number" id="phone" oninput="phone()" name="siphone"  class="form-control inun" required="">
                              <div class="valid-feedback">valid</div>
                              <div class="invalid-feedback" id="phoneError">Invalid</div>

                            <label for="sipass"  class="text-white mt-2"><i class="fas fa-lock text-danger"></i> PASSWORD</label>
                            <input type="password" id="pas" oninput="passwords()" name="sipass" class="form-control inun" required="">
                            <div class="valid-feedback" id="spv">Nice</div>
                            <div class="invalid-feedback" id="spiv">Too small</div>

                            <input type="submit" id="usubmit" value="SUBMIT" class="btn btn-primary mt-2 btn-block logsu"> 
                    </form>
                     </div>
                     <div class="card-footer text-center">
                        <div class="siup text-white">
                        Already have an account <a href="index.html" class="sig">Login</a></div>
                     </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
<script>

  function emails()
      {
        let emv=document.getElementById("em");
        let eva=document.getElementById("sev");
        let eiva=document.getElementById("seiv");
        if(emv.value.length>0 && emv.value.includes('@'))
        {
          emv.classList.add("is-valid");
          emv.classList.remove("is-invalid");
          eva.style.display="block";
          eiva.style.display="none";
        }
        else{
          emv.classList.add("is-invalid");
          emv.classList.remove("is-valid");
          eiva.style.display="block";
          eva.style.display="none";
        }
      }
      function phone()
     {
          let phoneNumberInput=document.getElementById("phone");
          let errorDiv=document.getElementById("phoneError");
      
          if (phoneNumberInput.value.length === 10) {
              phoneNumberInput.classList.add("is-valid");
              phoneNumberInput.classList.remove("is-invalid");
              errorDiv.style.display="none";
          } else {
              phoneNumberInput.classList.add("is-invalid");
              phoneNumberInput.classList.remove("is-valid");
              errorDiv.style.display="block";
          }
      }
  function passwords()
      {
                  let sn=document.getElementById("pas");
                  let sva=document.getElementById("spv")
                  let siva=document.getElementById("spiv");
                  let usub=document.getElementById("usubmit");
                  if(un.value.length>0)
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
</body>
</html>