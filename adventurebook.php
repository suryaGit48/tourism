<?php
session_start();
include 'db.php';
if (!isset($_SESSION['username'])) {
  header("Location:index.html");
  exit();
}
else{
    $usname=$_SESSION['username'];

}
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="http://localhost/proj/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/proj/fontawesome-free-5.15.4-web/css/all.min.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>Tourism Management</title>
</head>
<body class="bo">
    <script src="http://localhost/proj/js/bjquery.js"></script>
    <script src="http://localhost/proj/js/bootstrapm.js"></script>

<div class="container mt-2">
    <div class="row justify-content-center">
        <div class="col-lg-7 col-12 col-md-8">
            <div class="card" style="background:none;border:none;margin-top:10%;">
                <div class="card-header text-center bg-primary text-dark cahea"
              style="border-top-left-radius:100px;border-top-right-radius:100px;"  >BOOK NOW</div>
                <div class="card-header text-center caheat" 
                >
                <div class="nav nav-pills" style="background:none;">
                 <a href="#personal-det" id="personal" style="background:none;font-size:20px;" data-toggle="tab" rol="tab" class="nav-link col-6 text-dark active">
                    <i class="fas fa-info-circle text-success"></i>    personal Details
                 </a>
                 <a href="#book-det" id="book" style="background:none;font-size:20px;" data-toggle="tab" data-bs-target="#book" rol="tab" class="nav-link text-dark col-6">
                    <i class="fas fa-info-circle text-success"></i>  Booking Details
                 </a>
                </div></div>
                <div class="tab-content"><div class="tab-pane show active" id="personal-det">
                            <div class="card-body justify-content-center bgbok"
                            style="
                         border:none;">
                    <form action="advbook.php" class="needs-validation" method="post" data-bs-spy="scroll" novalidate>
<!--Personal details-->                        
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
                                    <div class="row justify-content-center mt-2">
                                    <div class="col-4 text-center">
                                        <label for="Name">
                                        <i class="fas fa-user"></i> Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>
                                    </div>
                                    <div class="col-6">
                                        <input type="text" name="name" id="nav" readonly required="" class="form-control" value="<?php echo $usname; ?>" placeholder="<?php echo $usname; ?>">
                                        <div class="valid-feedback" id="vi"></div>
                                        <div class="invalid-feedback" id="ivi">Enter name</div>
                                    </div>
                                    
                                </div>
                           
                            
                                <br>
                                
                                <div class="row justify-content-center">
                                    <div class="col-4 text-center">
                                    <label for="phone">
                                        <i class="fas fa-phone"></i> Phone No &nbsp;&nbsp;&nbsp;:</label>
                                    </div>
                                    <div class="col-6">
                                    <input type="number" name="phones" id="Phone" class="form-control" readonly value="<?php echo $row[3]; ?>" placeholder="<?php echo $row[2]; ?>">
                                    <div class="valid-feedback" id="phv">valid</div>
                                    <div class="invalid-feedback" id="phoneError">Invalid</div>    
                                </div></div><br>
                                
                                
                               <div class="row justify-content-center">
                                <div class="col-4 text-center">
                                <label for="email" class="form-label"><i class="fas fa-envelope"></i>E-mail * :</label>
                               </div>
                                <div class="col-6">
                                    <input type="email" name="email" value="<?php echo $row[2]; ?>" id="emaili" class="form-control" readonly placeholder="<?php echo $row[2]; ?>">     
                                    <div class="valid-feedback" id="vie">valid </div>
                                    <div class="invalid-feedback" id="ivie">In valid email Id</div>
                                </div>
                            </div>
                           <br>
<?php
          
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
?>
  
<?php 
}
else{
   echo '<script>window.alert("no record"); </script>';
}
?>                    
                                  <div class="row justify-content-center">
                                    <div class="col-4 text-center">
                                   <label for="adults">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-user"></i>Adults :</label>
                                    </div>
                                    <div class="col-6">
                                       <input type="number" oninput="tvalidate()" name="members" id="adu" onchange="fun()" class="form-control"  required="" placeholder="Members">
                                       <div class="valid-feedback" id="tvi">valid</div>
                                       <div class="invalid-feedback" id="tivi">invalid</div>
                                    </div>
                                </div><br>
                                 <div class="row justify-content-center">

                                
                                    <div class="col-4 text-center">
                                        <label for="adults">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-child"></i>childs :</label>
                                    </div>
                                    <div class="col-6">
                                         
                                            <input type="number" oninput="childvalidate()" name="childs" id="child" onchange="fun()" class="form-control" placeholder="childrens">
                                            <div class="valid-feedback" id="chvi"></div>
                                            <div class="invalid-feedback" id="chivi">invalid</div>
                                         </div>
                                     
                                </div>
                                
                     </div>
                     <div class="card-footer caheat"
                     style="border-bottom-left-radius:50px;border-bottom-right-radius:50px;">
                        <div class="row">
                        <div class="col-6">
                        <a class="btn-block btn btn-secondary" href="adventure.php"style="font-weight:bold;">
                      <i class="fas fa-arrow-left text-dark"style="background-color:lightblue;height:20px;width:20px;
                      border-radius:100%;padding-top:5px;padding-bottom:20px;
                              padding-right:20px;padding-left:5px;"> </i>  EXIT</a>
                    </div>
                    <div class="col-6">
                    <a href="#book-det" id="book" data-toggle="tab" data-bs-target="#book" 
                      rol="tab" class="btn btn-block btn-primary bg-success nav-link text-white"style="font-weight:bold;">
                              NEXT <i class="fas fa-arrow-right text-dark" width=50 style="background-color:lightblue;height:20px;width:20px;
                              border-radius:100%;padding-top:5px;padding-bottom:20px;
                              padding-right:20px;padding-left:5px;"></i>
                         </a>
                        </div>    </div>
                     </div>
            </div>


                <div class="tab-pane bgbok" id="book-det" style="height:600px;overflow-y:scroll;">
<!--No of Days  --><br>

                <div class="row justify-content-center">
                    <div class="col-4 text-center">
                        <label for="days"><i class="far fa-calendar-alt"></i>CHECK-IN:</label>
                    </div>
                    <div class="col-lg-4 col-6">
                        <input type="date" name="day" id="day" oninput="dvalidate()" onchange="calculateDays();fun();" class="form-control" required="" placeholder="total days"><br>
                        <div class="valid-feedback" id="dvc">valid date</div>
                        <div class="invalid-feedback" id="divc">Not a valid dates</div>
                    </div>
                </div>
                    <div class="row justify-content-center">
                    <div class="col-4 text-center">
                      <label for="eday"><i class="far fa-calendar-alt"></i>CHECK-OUT:</label>
                    </div>
                    <div class="col-lg-4 col-6">
                        <input type="date" name="day" id="eday" oninput="edvalidate()" onchange="calculateDays();fun();" class="form-control" required="" placeholder="total days"><br>
                        <div class="valid-feedback" id="dvo">valid date</div>
                        <div class="invalid-feedback" id="divo">Not a valid dates</div>
                    </div>
                </div>
                
            <br>
       
            <?php

$sqls = "select *from cities";
$re = $con->query($sqls);    
?>

<!--From and To location-->
 <div class="row justify-content-center">
      <div class="col-4 text-center">
        <label for="frlocation"><i class="fas fa-map-marker-alt">  </i>  From Location:</label>
    </div>
    <div class="col-lg-4 col-6">
        <select name="fromLocation" oninput="from()" onchange="fun();updateToLocationOptions();flight();from()" required="" id="fromLocation" aria-placeholder="From location" class="form-control"> 
        <?php
        while($row=$re->fetch_array())
        {
        ?>    
            <option value="<?php echo $row[0]; ?>"><?php echo $row[0]; ?></option>  
        <?php
        }
        ?>
            </select>
            <div class="valid-feedback" id="fv">Nice</div>
             <div class="invalid-feedback" id="fiv">Select From location</div>
            <br>
    </div>
 </div>
   <div class="row justify-content-center">
    <div class="col-4 text-center">
        <label for="tolocation"><i class="fas fa-map-marker-alt">  </i>  To Location:</label>
    </div>
    <div class="col-lg-4 col-6">

        <select name="toLocation" oninput="to()" onchange="fun();flight();" id="toLocation" required="" aria-placeholder="tolocation" class="form-control">
        <?php
        $sqlt = "select *from adventure";
        $res = $con->query($sqlt); 
        while($rows=$res->fetch_array())
        {
            ?>
            <option value="<?php echo $rows[1],' ',$rows[3],$rows[6];?>"><?php echo $rows[1];?></option>
        <?php
        }
        ?>    
        </select> 
        <div class="valid-feedback" id="tv">Nice</div>
             <div class="invalid-feedback" id="tiv">Select TO location</div><br>
    </div>
    <input type="hidden" name="country" value="" id="country">
</div>
<!---Hotel categories-->
  <div class="row">
            <div class="col-lg-4 col-8 text-center">
                        <label for="hotel" ><i class="fas fa-bed"></i>  Hotel Category : </label>
                    </div>
  </div>
  <div class="row justify-content-center">
  <div class="col-2 ml-lg-2">  
       <input type="radio" name="hotel" id="hotc1" value="2star" onclick="fun()" onchange="fun()" class="form-control hotelc">  
  </div>
  <div class="col-2">  
    <input type="radio" name="hotel" id="hotc2" value="3star" onclick="fun()" onchange="fun()" class="form-control hotelc">  
</div>
<div class="col-2">  
    <input type="radio" name="hotel" id="hotc3" value="4star" onclick="fun()"  onchange="fun()" class="form-control hotelc">  
</div>
<div class="col-2">  
    <input type="radio" name="hotel" id="hotc4" value="5star" onclick="fun()" onchange="fun()" class="form-control hotelc">  
</div>
<div class="col-2">  
    <input type="radio" name="hotel" id="nohotc" value="NO HOTEL" onclick="fun()" onchange="fun()" checked class="form-control hotelc">  
</div>
</div>
<div class="row justify-content-center ml-2">
<div class="col-2 ml-2">
  <img src="./img/tstar.png" width=50 height=50></div>
  <div class="col-2"> <img src="./img/thstar.png" width=50 height=50></div>
    <div class="col-2"> <img src="./img/fostar.png" width=50 height=50> </div>
        <div class="col-2"> <img src="./img/fistar.png" width=50 height=50></div>
        <div class="col-2"> <img src="./img/nhotel.png" width=50 height=50></div>

</div> 
  <br>      
<!--Transportation-->
<div class="row">
<div class="col-lg-5 col-8 text-center">
    <label for="hotel"><i class="fas fa-train"></i>  Mode of Transportaion : </label>
</div>
</div>
<div class="row justify-content-center transportation-options">
<div class="col-2 fli">  <input type="radio" name="tran" required="" value="Flight" onchange="fun()"  id="flig" class="form-control flight transport" aria-placeholder="Transportaion" checked>       
</div>
<div class="col-2"> 
<input type="radio" name="tran" value="Train" onchange="fun()"required="" id="tra" class="form-control transport" aria-placeholder="Transportaion" disabled>
</div>
<div class="col-2"> 
<input type="radio" name="tran" value="Bus" onchange="fun()" required="" id="bus" class="form-control transport" aria-placeholder="Transportaion" disabled>
</div>
<div class="col-2">
<input type="radio" name="tran" value="Car" onchange="fun()" required="" id="car" class="form-control transport" aria-placeholder="Transportaion" disabled>
</div> 
</div> 
<div class="row justify-content-center">
<div class="col-2 flig" id="imgflig"><img src="./img/flight.png" width=70 height=70></div>              
<div class="col-2 imgtra"><img src="./img/tra.png" width=70 height=70> </div>
<div class="col-2 imgbus"><img src="./img/bus.png" width=70 height=70>  </div>
<div class="col-2 imgcar"> <img src="./img/car.png" width=70 height=70> </div><br>
</div>  <br>    

<!--amount details-->
                <div class="row justify-content-center">
                    <div class="col-4 text-center">
                        <label for="todas"><i class="fas fa-calculator"></i> Total Days :</label>
                    </div>
                    <div class="col-6">
                        <input type="text" name="todays" id="result" onchange="fun()" readonly value="0" class="form-control">
                    </div>
                </div><br>
             
                <div class="row justify-content-center">
                    <div class="col-4 text-center">
                        <label for="pacamount"><i class="fas fa-rupee-sign"></i> package amount :</label>
                    </div>

                    <div class="col-6">
                    <?php
$pam="select amount from adventure";
$ream=$con->query($pam);
while($roa=$ream->fetch_array())
{
?>   
                        <input type="number" name="pacamount" id="pacam" value="<?php echo $roa[0]; } ?>" readonly class="form-control"><br>
                    </div>
                </div>
          
                 <div class="row justify-content-center">
                    <div class="col-4 text-center">
                        <label for="pacamount"><i class="fas fa-rupee-sign"></i> Transport amount :</label>
                    </div>
                    <div class="col-6">
                        <input type="number" name="traamount" id="trcam" value="0" readonly class="form-control"><br>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-4 text-center">
                        <label for="pacamount"><i class="fas fa-rupee-sign"></i> Hotel charge :</label>
                    </div>
                    <div class="col-6">
                        <input type="number" name="hotamount" id="hotam" value="0" readonly class="form-control"><br>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-4 text-center">
                        <label for="total"> <i class="fas fa-rupee-sign"></i> Total amount :</label>
                    </div>     
                    <div class="col-6">
                        <input type="number" name="total" id="total" value="0" readonly class="form-control"><br>
                    </div>
                </div> 
                
               
                   <div class="card-footer caheat">
                      <div class="input-group">
                     <div class="col-6">
                        <a class="btn-block btn btn-secondary" href="adventure.php"style="font-weight:bold;">
                            <i class="fas fa-arrow-left text-dark"style="background-color:lightblue;height:20px;width:20px;
                            border-radius:100%;padding-top:5px;padding-bottom:20px;
                                    padding-right:20px;padding-left:5px;"> </i>  EXIT</a>
                     </div>
                    
                    <div class="col-6">                   
                        <button type="submit" id="submit" class="btn btn-success btn-block" style="font-weight:bold;">
                        
                        <i class="fas fa-check-circle" style="color:blueviolet;background-color:white;
                        border-radius:100%;"></i>  SUBMIT</button>
                    </div>
                   </div>     



                </form> 
                </div>
                   
                </div></div>
            </div>
        </div>
    </div>
</div>
<!-- input field validaions -->
<script>
    function validate()
    {
        let val=document.getElementById("nav");        
        let vai=document.getElementById("vi");
        let inva=document.getElementById("ivi");
        let su=document.getElementById("submit");
        if(val.value.length>0)
        {
        val.classList.add("is-valid");
        val.classList.remove("is-invalid");
        vai.style.display="block";
        inva.style.display="none";
        su.disabled=false;
        }
        else
        {
            val.classList.add("is-invalid");
            val.classList.remove("is-valid");
            vai.style.display="none";
            inva.style.display="block";
            su.disabled=true;
        }
    }
    function evalidate()

    {
        let em=document.getElementById("emaili");
        let vaie=document.getElementById("vie");
        let invae=document.getElementById("ivie");
        let su=document.getElementById("submit");
        if(em.value.length>0 && em.value.includes('@'))
        {
        em.classList.add("is-valid");
        em.classList.remove("is-invalid");
        vaie.style.display="block";
        invae.style.display="none";
        su.disabled=false;
        
        }
        else
        {
            em.classList.add("is-invalid");
            em.classList.remove("is-valid");
            vaie.style.display="none";
            invae.style.display="block";
            su.disabled=true;
        }
    }
     function tvalidate()
     {
        let va=document.getElementById("adu");
        let tv=document.getElementById("tvi");
        let tiv=document.getElementById("tivi");
        let su=document.getElementById("submit");
        if(va.value.length>0 && va.value>0)
        {
            va.classList.add("is-valid");
            va.classList.remove("is-invalid");
            tv.style.display="block";
            tiv.style.display="none";
            su.disabled=false;
        }
        else
        {
            va.classList.add("is-invalid");
            va.classList.remove("is-valid");
            tv.style.display="none";
            tiv.style.display="block";
            su.disabled=true;
        }
     }
     function childvalidate()
     {
        let va=document.getElementById("child");
        let tv=document.getElementById("chvi");
        let tiv=document.getElementById("chivi");
        if(va.value.length>0 && va.value>0)
        {
            va.classList.add("is-valid");
            va.classList.remove("is-invalid");
            tv.style.display="block";
            tiv.style.display="none";
        }
        else{
            va.classList.remove("is-valid");
            tv.style.display="none";
        }
       
     }
    function dvalidate()
     {  
        let cdate=new Date();
        let vd=new Date(document.getElementById("day").value);
        let ed=new Date(document.getElementById("eday").value);
        let dva=document.getElementById("dvc");
        let diva=document.getElementById("divc");
        let vda=document.getElementById("day");

        let eda=document.getElementById("eday");
        let eva=document.getElementById("dvo");
        let eiva=document.getElementById("divo");
        let su=document.getElementById("submit");
        if(vd>=cdate)
        {   
            eda.value="";
            eda.classList.add("is-invalid");
            eda.classList.remove("is-valid");
            vda.classList.add("is-valid");
            vda.classList.remove("is-invalid");
            dva.style.display="block";
            diva.style.display="none";
            eva.style.display="none";
            eiva.style.display="block";
            su.disabled=false;
        }
        else
        {   
            vda.value="";
            eda.value="";
            vda.classList.add("is-invalid");
            eda.classList.remove("is-valid");
            eda.classList.add("is-invalid");
            vda.classList.remove("is-valid");
            dva.style.display="none";
            diva.style.display="block";
            eva.style.display="none";
            eiva.style.display="block";
            su.disabled=true;
        }

    
     }
     function edvalidate()
     {  
        let cdate=new Date();
        let vd=new Date(document.getElementById("eday").value);
        let sd=new Date(document.getElementById("day").value);
        let dva=document.getElementById("dvo");
        let diva=document.getElementById("divo");
        let vda=document.getElementById("eday");
        let su=document.getElementById("submit");
        if(vd>=cdate && vd>sd && vd!=0)
        {   
            
            vda.classList.add("is-valid");
            vda.classList.remove("is-invalid");
            dva.style.display="block";
            diva.style.display="none";
            su.disabled=false;
        
        }
        else
        {   
            vda.value="";
            vda.classList.add("is-invalid");
            vda.classList.remove("is-valid");
            dva.style.display="none";
            diva.style.display="block";
            su.disabled=true;
        }

     }
    function from()
    {
     
     let fac=document.getElementById("fromLocation");
     let fva=document.getElementById("fv");
     let fiva=document.getElementById("fiv");
     if(fac.value==="")
     {
        fac.classList.add("is-invalid");
        fac.classList.remove("is-valid");
        fva.style.display="none";
        fiva.style.display="block";
     }
     else{
        fac.classList.add("is-valid");
        fac.classList.remove("is-invalid");
        fva.style.display="block";
        fiva.style.display="none";
     }
    }
    function to()
    {
     
     let fac=document.getElementById("toLocation");
     
     let fva=document.getElementById("tv");
     let fiva=document.getElementById("tiv");
     if(fac.value==="")
     {
        fac.classList.add("is-invalid");
        fac.classList.remove("is-valid");
        fva.style.display="none";
        fiva.style.display="block";
     }
     else{
        fac.classList.add("is-valid");
        fac.classList.remove("is-invalid");
        fva.style.display="block";
        fiva.style.display="none";
     }
    }
</script>
<!-- form validation -->
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
<!--phone number field-->
<script>
    function phonenumber() {
        let phoneNumberInput = document.getElementById("Phone");
        let errorDiv = document.getElementById("phoneError");
        let phva=document.getElementById("phv");
        let sub=document.getElementById("submit");
    
        if (phoneNumberInput.value.length === 10 && phoneNumberInput.value.substr(0,1)!=0 
        && phoneNumberInput.value>0) {
            phoneNumberInput.classList.add("is-valid");
            phoneNumberInput.classList.remove("is-invalid");
            errorDiv.style.display = "none";
            phva.style.display="block";
            sub.disabled=false;
        } else {
            phoneNumberInput.classList.add("is-invalid");
            phoneNumberInput.classList.remove("is-valid");
            errorDiv.style.display = "block";
            phva.style.display = "none";
            sub.disabled=true;
        }
    }
    </script>


<!--calculate total days-->
<script>
    function calculateDays() {
        // Get the values of the start and end dates from the form
        let startDate = new Date(document.getElementById('day').value);
        let endDate = new Date(document.getElementById('eday').value);

        if(startDate>endDate)
        {
            // //console.log("End date must be greted then start date");
        }
        else{
        // Calculate the difference in milliseconds

        let timeDifference = endDate.getTime() - startDate.getTime();
        // console.log("date"+timeDifference);
    
        // Calculate the number of days and display the result
        
        let daysDifference = Math.ceil(timeDifference / (1000 * 3600 * 24));
        // console.log("days difference :"+daysDifference);
        let days=0;
        if(daysDifference==0)
        {
           days=1;
        }
        else if(daysDifference==1)
        {
            days=2;
        }
        else{
        days=daysDifference+1;
        }
        // console.log("date"+days);
        document.getElementById('result').value = days;
    }
    }
</script>


<!--calculation field-->
<script>
    function fun()
    {
        //  console.log("function called");
    let am;
    let hc;
    let tram=0;
    let paca=0;
    var pac;
    let e=document.getElementById("toLocation").value;
    let fr=document.getElementById("fromLocation").value;
    let da=document.getElementById("result").value;
    let ad=document.getElementById("adu").value;
    let tolc=e.slice(-9);
    let tolocat="";
    if(tolc=='Non-India')
    { 
       tolocat="Non-India" ;
       let fin=e.substring(0,e.length-9);
    //    console.log("sub string : "+fin);
       let sp=fin.split(' ');
       pac=sp.pop();
    }
    else{
        tolocat="India";
        let fin=e.substring(0,e.length-5);
        //console.log("sub string : "+fin);
        let sp=fin.split(' ');
        pac=sp.pop();
    }
    document.getElementById("country").value=tolocat;
    let train=document.getElementById("tra");
    let bus=document.getElementById("bus");
    let car=document.getElementById("car");
    let flit=document.getElementById("flig");
    if(tolc=="Non-India")
    {
        flit.style.display="block";
        train.style.display="none";
        bus.style.display="none";
        car.style.display="none";
        

    }
    else{
    
        flit.style.display="block";
      train.style.display="block";
        bus.style.display="block";
        car.style.display="block";
    }
    //console.log("package amount "+pac);
    paca=parseInt(pac)*da;
    document.getElementById("pacam").value=paca;
    
    //console.log("package amount "+paca);




    let ch=document.getElementById("child").value;
    let admem=ad*1;
    let chmem=ch*1;
    let mem=admem+chmem;
    tram=mem*15000;
    //console.log("total members:"+mem);
    
    
    let seleho = document.querySelector('input[name="hotel"]:checked');

   if (seleho) {
    let hct = seleho.value;
    //console.log("hotel options called");
    if(hct==="2star")
         {hc=da*5000;}
         else if(hct==="3star")
         { hc=da*10000;}
         else if(hct==="4star")
         { hc=da*15000; }
        else if(hct==="5star")
         { hc=da*25000; }
         else if(hct==="NO HOTEL")
         {
            hc=0;
         }
        
 } else {
    //console.log('No hotel option selected');
}

   
    document.getElementById("pacam").value=paca;
    let adm=admem*1000;
    let chm=chmem*500;
   let mc=adm+chm;
    document.getElementById('trcam').value=tram;
    document.getElementById('hotam').value=hc;
    let tot=mc+paca+hc+tram;
    document.getElementById("total").value=tot;
 }
</script>
</body>
</html>