<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="http://localhost/proj/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/proj/fontawesome-free-5.15.4-web/css/all.min.css">
</head>
<title>Tourism Management</title>
<body class="bo">
<script src="http://localhost/proj/js/bjquery.js"></script>
<script src="http://localhost/proj/js/jquery.min.js"></script>
<script src="http://localhost/proj/js/bootstrap.bundle.min.js"></script>
    <script src="http://localhost/proj/js/bootstrapm.js"></script>
<script src="http://localhost/proj/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-inputmask@5.0.4/dist/bootstrap-inputmask.min.js"></script>
<?php
include 'db.php';

$sel="select transactionid,total,bookingid from booking";
if($re=$con->query($sel))
{
    if($re->num_rows>0)
    {
        while($rows=$re->fetch_array())
        {
            $tra=$rows[0];
            $ros=$rows[1];
            $boki=$rows[2];
        }
    }
}
?>
<div class="container">
 
<div class="row justify-content-center mt-5">
    <div class="col-lg-8 col-12">
        <div class="card" style="border:none;background:none;">
            <div class="card-header bg-primary"style="border-top-right-radius:20px;
                border-top-left-radius:20px;">
                
                      <div class="row ml-5">

                                             
                        <li class="text-light  col" style="list-style-type:none;" >Amount Rs :<?php echo $ros; ?></li>
            
                         <li class="text-light col" style="list-style-type:none;" >Transaction ID:<?php echo $tra; ?></li>
                        
                         </div>  
                    
                </div>
                
                <div class="card-header col-12 bocha">
                <nav class="navbar navbar-expand-lg col-12 ml-lg-5">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <div class="nba"></div>
          <div class="nba"></div>
          <div class="nba"></div>
          </button>
                <div class="navbar-collapse collapse" id="navbarNav">
                    <ul class="nav nav-pills nav-tabs ml-lg-5 ml-sm-auto" id="mytabs" style="background:none;border:none;">
                     <li class="nav-item">
                        <a href="#credit" id="creditc" style="background:none;" data-toggle="tab" data-bs-target="#creditc" role="tab" class="nav-link col-sm-12 active text-dark palin">
                            CREDIT CARD
                        </a></li><br>                     
                    <li class="nav-item">
                     <a href="#debit" id="debitc" style="background:none;" data-toggle="tab" data-bs-target="#debitc" role="tab"  class="nav-link col-sm-12 text-dark palin">
                             DEPIT CARD
                         </a></li>
                        <br><li class="nav-item">
                          <a href="#netbank"  id="netb"  style="background:none;"data-toggle="tab"  role="tab" class="nav-link col-sm-12 text-dark palin">
                             NET BANKING
                         </a></li>
                         <br><li class="nav-item">
                          <a href="#upit"  id="upitr"style="background:none;" data-toggle="tab"  role="tab" class="nav-link col-sm-12 text-dark palin">
                             UPI TRANSACTION
                         </a></li>
                      </ul>
                    </div>
                </nav></div>
                <div class="card-body bgbok" style="border-bottom-right-radius:20px;border-bottom-left-radius:20px;">
                    <div class="tab-content">
<!--CREDIT CARD-->
<div class="tab-pane show active"id="credit">
        <div class="card-body" >
        <div class="row">
    <div class="col-lg-12 col-md-12 col-12">
            <form class="needs-validation" action="credit.php" method="post" novalidate>
                <div class="row">
                    <div class="col-lg-4 col-md-8 col-6">
                        <h5 class="cty"><label for="ctype" class="ml-lg-5">select card type:</label> </h5>
                    </div>
                    <div class="col-lg-6 col-md-4 ml-sm-5 col-12 ctyp">
                                               
                             <input type="radio" id="ctype"  name="c1" value="VISA" checked>                            
                              <img src="./img/visa.png" width=80 height=50>
                      
                             <input type="radio"  id="ctype" name="c1" value="RUPAY">
                             <img src="./img/rupay.png" width=80 height=50>
                        
                        
                            <input type="radio" id="ctype" name="c1" value="MASTERCARD">
                             <img src="./img/master.png" width=80 height=50>
                        
                    </div>
                </div>
    <select name="total" style="display:none;"><option value="<?php echo $ros; ?>"; ></option></select>
    <select name="booking" style="display:none;"><option value="<?php echo $boki; ?>"; ></option></select>
    <div class="row mt-2">
    
        <div class="input-group">
            <div class="col-lg-5 col-6">
                <h5><label for="credit">creadit card number  :</label></h5>
            </div>
            <div class="col-lg-6 col-6">
                <input type="number" name="canum" oninput="cvalidate()" placeholder="0000 0000 0000 0000" id="cre" data-mask="0000 0000 0000 0000" 
                class="form-control w-100" required>
                <div class="valid-feedback" id="cv">Looks Good</div>
                <div class="invalid-feedback" id="civ"> In-valid credit card number</div>
            </div>
        </div>
    
    </div>
    <div class="row justify-content-center mt-2">
    
        <div class="input-group ml-lg-5">
            <div class="col-lg-5 ml-sm-2 col-6">
                <h5 class="ml-lg-2 nca"><label for="nacar">Name on card:</label></h5>
            </div>
            <div class="col-lg-6 col-6 namcr">
                <input type="text" name="crname" oninput="cnvalidate()" id="nacar" class="form-control incn" required="">
                <div class="valid-feedback" id="cnv">Looks Good</div>
                 <div class="invalid-feedback" id="cniv">Please Enter a name on card</div>
            </div>
         </div>
    
    </div>
        <div class="row mt-2">
    
        <div class="input-group ml-lg-5">
            <div class="col-lg-5 ml-sm-2 col-6">
                 <h5 class="ml-lg-2 ncav"><label for="cv" class="ml-lg-2">CVV number :</label></h5>
             </div>
            <div class="col-lg-6 col-6">
                <input type="number" name="crcv" id="cva" oninput="cvvalidate()"  class="form-control col-12 w-sm-100 w-lg-50 incnu" required="">
                <div class="valid-feedback" id="cvv">Looks Good</div>
                 <div class="invalid-feedback" id="cviv">In-valid CVV number</div>
              </div>
        </div>
    
    </div>
    <div class="row mt-2">
   
        <div class="input-group">
            <div class="col-lg-5 col-6 ml-lg-5">
                <h5 class="exp"><label>Expiry Date:</label></h5>
             </div>
            <div class="col-lg-3 col-3">
                <input type="number" name="cmon" oninput="cmonth();" id="cmonths" placeholder="month" class="form-control col-12 w-100 mon" required="">
                 <div class="valid-feedback" id="mv">Looks Good</div>
                 <div class="invalid-feedback" id="miv">In-valid month</div>
            </div>
            <div class="col-lg-3 col-3 ml-lg-2">
                <input type="number" name="cyea" oninput="cyear();"  id="cyears" width="100px" placeholder="year" class="form-control col-12 w-100 mon" required="">
                <div class="valid-feedback" id="yv">Looks Good</div>
                 <div class="invalid-feedback" id="yiv">In-valid year</div>
            </div>
         </div>
    
        </div>
    <select name="trid" style="display:none";><option value="<?php echo $tra; ?>"> </select>
     <div class="row mt-5 justify-content-center">
        <div class="col-6">
             <button type="submit" id="csubmit" class="btn btn-block btn-primary">paynow</button>
         </div>
    
 
    </form>
    
         <div class="col-6">
            <a class="btn btn-block btn-secondary" href="book.html">BACK</a>
        </div>
        </div>
                
            </div>
        </div>
    </div>
</div>
<!--Debit card-->
<div class="tab-pane show" id="debit">
    <div class="row justify-content-center">
        <div class="col mt-2">
        <form class="needs-validation" action="debit.php" method="post" novalidate>
                <div class="row">
                    <div class="col-lg-4 col-md-8 col-6">
                        <h5 class="cty"><label for="ctype" class="ml-lg-5">select card type:</label> </h5>
                    </div>
                    <div class="col-lg-6 col-md-4 ml-sm-5 col-12 ctyp">
                                               
                             <input type="radio" id="ctype"  name="d1" value="VISA" checked>                            
                              <img src="./img/visa.png" width=80 height=50>
                      
                             <input type="radio"  id="ctype" name="d1" value="RUPAY">
                             <img src="./img/rupay.png" width=80 height=50>
                        
                        
                            <input type="radio" id="ctype" name="d1" value="MASTERCARD">
                             <img src="./img/master.png" width=80 height=50>
                        
                    </div>
                </div>
        <select name="total" style="display:none;"><option value="<?php echo $ros; ?>"; ></option></select>
        <select name="booking" style="display:none;"><option value="<?php echo $boki; ?>"; ></option></select>
            <div class="row mt-2">
    
        <div class="input-group">
            <div class="col-lg-5 col-6">
                <h5 class="decn"><label for="debit">Debit card number  :</label></h5>
            </div>
            <div class="col-lg-6 col-6">
                <input type="text" name="decnu" oninput="dvalidate()" placeholder="0000 0000 0000 0000" id="debits" data-mask="0000 0000 0000 0000" 
                    class="form-control w-100" required area-describedby="credit">
                <div class="valid-feedback" id="dv">Looks Good</div>
                <div class="invalid-feedback" id="div">Please Enter valid card number</div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center mt-2">
    
        <div class="input-group ml-lg-5">
            <div class="col-lg-5 ml-sm-2 col-6">
                <h5 class="ml-lg-2 nca"><label for="nacar">Name on card:</label></h5>
            </div>
            <div class="col-lg-6 col-6 namcr">
                <input type="text" name="dename" oninput="dnvalidate()" id="nacars" class="form-control incn" required="">
                <div class="valid-feedback" id="dnv">Looks Good</div>
                 <div class="invalid-feedback" id="dniv">Please Enter a name on card</div>
            </div>
         </div>
    
        </div>
   <div class="row mt-2">
    
        <div class="input-group ml-lg-5">
            <div class="col-lg-5 ml-sm-2 col-6">
                 <h5 class="ml-lg-2 ncav"><label for="dcvv" class="ml-lg-2">CVV number :</label></h5>
             </div>
            <div class="col-lg-6 col-6">
                <input type="number" name="dccv" id="dacvv" oninput="dcvvalidate()"  class="form-control col-12 w-sm-100 w-lg-50 incnu" required="">
                <div class="valid-feedback" id="dcv">Looks Good</div>
                 <div class="invalid-feedback" id="dciv">Please Enter a CVV number</div>
              </div>
        </div>
    
    </div>
    <div class="row mt-2">
   
        <div class="input-group">
            <div class="col-lg-5 col-6 ml-lg-5">
                <h5 class="exp"><label>Expiry Date:</label></h5>
             </div>
            <div class="col-lg-3 col-3">
                <input type="number" name="dmon" oninput="dmonth()" id="dmonths" placeholder="month" class="form-control col-12 w-100 mon" required="">
                 <div class="valid-feedback" id="dmv">Looks Good</div>
                 <div class="invalid-feedback" id="dmiv">Enter month</div>
            </div>
            <div class="col-lg-3 col-3 ml-lg-2">
                <input type="number" name="dyea" width="100px" oninput="dyear()" id="dyears"  placeholder="year" class="form-control col-12 w-100 mon" required="">
                <div class="valid-feedback" id="dyv">Looks Good</div>
                 <div class="invalid-feedback" id="dyiv">Enter a year</div>
            </div>
         </div>
    
   </div>
   <select name="trid" style="display:none";><option value="<?php echo $tra; ?>"> </select>
  <div class="row mt-5 justify-content-center">
        <div class="col-6">
             <button type="submit" id="dsubmit" class="btn btn-block btn-primary">paynow</button>
         </div>
    
    </form>
    
         <div class="col-6">
            <a href="book.html" class="btn btn-block btn-secondary">BACK</a>
        </div>
  </div>
                
        </div>
    </div>
</div>
<!--Net banking-->
<div class="tab-pane show" id="netbank">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-12">
        <div class="card-body">
  <form class="needs-validation" action="nbank.php" method="post" novalidate>
        <div class="row mt-2 ml-lg-5">
            <div class="col-lg-5 col-5  ml-lg-2">
                <h6> Select Your Bank : 
            </div>
            <div class="col-lg-6 col-7">
                <select name="banks" class="form-control custom-select" id="nb" oninput="nbank()" placeholder="SELECT YOUR BANK" required>
                    <option value=""></option>
                    <option value="INDIAN BANK">INDIAN BANK</option>    
                    <option value="INDIAN OVERSEAS BANK">INDIAN OVERSEAS BANK</option>
                    <option value="STATE BANK OF INDIA">STATE BANK OF INDIA</option>
                    <option value="UNION BANK OF INDIA">UNION BANK OF INDIA</option>
                    <option value="CANARA BANK">CANARA BANK</option>
                    <option value="KARUR VYSIA BANK">KARUR VYSIA BANK</option>
                    <option value="TAMILNADU MERCHANDIAL BANK">TAMILNADU MERCHANDIAL BANK</option>
                 
                </select> 
                <div class="valid-feedback" id="nv">Nice</div>
                <div class="invalid-feedback" id="niv">Select any one bank</div>
                </h6>
            </div>
        </div>
        <select name="total" style="display:none;"><option value="<?php echo $ros; ?>";></option></select>
        <select name="booking" style="display:none;"><option value="<?php echo $boki; ?>"; ></option></select>
 <div class="row mt-2 ml-lg-5">
    <div class="input-group ml-lg-2">
        <div class="col-lg-5 col-5 ml-lg-2">
            <h6><label>Account Number:</label></h6>
        </div> 
       
        <div class="col-lg-6 col-7">
            <input type="number" name="acnum" id="nacc" oninput="naccount()" class="form-control col-12 w-100" required="">
            <div class="valid-feedback" id="nav">Nice</div>
            <div class="invalid-feedback" id="naiv">Invalid</div>
        </div>
    </div>
   </div>
 <div class="row mt-2 ml-lg-5">
    <div class="input-group ml-lg-2">
        <div class="col-lg-5 col-5 ml-lg-2">
            <h6><label>A/C Holder name:</label></h6>
        </div>
        <div class="col-lg-6 col-7">
            <input type="text" name="achona" id="nahn" oninput="naname()" class="form-control w-100" required="">
            <div class="valid-feedback" id="nahv">Nice</div>
            <div class="invalid-feedback" id="nahiv">Enter Account holder name</div>
        </div>
    </div>
      </div>
    <div class="row mt-2 ml-lg-5">
    <div class="input-group ml-lg-2">
        <div class="col-lg-5 col-5 ml-lg-2">
            <h6 class="ml-5"><label>&nbsp;IFSC code :</label></h6>
        </div>
        <div class="col-lg-6 col-7">
            <input type="text" name="ifsc" id="ifs" oninput="icode()" class="form-control w-100" required="">
            <div class="valid-feedback" id="ifv">Nice</div>
            <div class="invalid-feedback" id="ifiv">Enter IFSC code</div>
        </div>
    </div>
   </div>
   <select name="trid" style="display:none";><option value="<?php echo $tra; ?>"></select>
    <div class="row mt-5 justify-content-center">
    <div class="col-6">
        <button type="submit" id="subm" class="btn btn-block btn-primary">paynow</button>
    </div>
      
   </form>
    
    <div class="col-6">
        <a href="book.html" class="btn btn-block btn-secondary">BACK</a>
    </div>
    </div>

    </div>
    </div>
    </div>
</div>
<!--UPI TRANSACTIONS-->
<div class="tab-pane show" id="upit">
    <div class="row">
        <div class="col-lg-12">
           <div class="card-body">
            <form class="needs-validation" action="upi.php" method="post" novalidate>
        <div class="row ml-lg-2">
            <div class="col-lg-8 col-12 ml-lg-5">
                
                    <input type="radio" name="u1" value="GPAY" checked>
                    <img src="./img/gpays.png" width=80 height=130>
                
                
                    <input type="radio" name="u1" value="PHONEPAY">
                    <img src="./img/phpay.png" width=80 height=80>
                
                
                    <input type="radio" name="u1" value="UPI">
                    <img src="./img/upi.png" width=80 height=80>
                 
                
                    <input type="radio" name="u1" value="PAYTM">
                    <img src="./img/paytm.png" width=80 height=80>
                    <div class="valid-feedback"></div>
                    <div class="invalid-feedback">Select any one bank</div>
                
            </div>
        </div>
     <select name="trid" style="display:none";><option value="<?php echo $tra; ?>"></select> 
     <select name="total" style="display:none;"><option value="<?php echo $ros; ?>"; ></option></select>
     <select name="booking" style="display:none;"><option value="<?php echo $boki; ?>"; ></option></select>
     <div class="row mt-2 ml-lg-2">
    <div class="input-group ml-lg-2">
        <div class="col-lg-4 col-5 ml-lg-5">
            <h6><label for="upi">&nbsp;&nbsp;&nbsp;UPI ID &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label></h6>
        </div>
        <div class="col-lg-6 col-7">
            <input type="text" name="upiid" id="upi" oninput="uvalidate()" class="form-control w-100" required="">
            <div class="valid-feedback" id="uv"></div>
            <div class="invalid-feedback" id="uiv">Invalid UPI ID</div>
        </div>
    </div>
    </div>
    <div class="row mt-5 justify-content-center">
    <div class="col-6">
        <button type="submit" class="btn btn-block btn-primary" id="payn">paynow</button>
    </div>
    
    </form>
     
    <div class="col-6">
        <a href="book.html" class="btn btn-block btn-secondary">BACK</a>
    </div>
</div>
</div></div></div></div></div></div></div></div></div></div>
<!--js fields -->
<script>
// credit card validation
function cvalidate()
  { 
     //cosole.log("function called");
    let cr=document.getElementById("cre");
    let cva=document.getElementById("cv");
    let civa=document.getElementById("civ");
    let csub=document.getElementById("csubmit");
    let crl=cr.value;
    let str=crl.toString();
     let len=str.length;
     if(len===16)
     {
        cr.classList.remove("is-invalid");
        cr.classList.add("is-valid");
        cva.style.display="block";
        civa.style.display="none";
        csub.disabled=false;
     }
     else{
        cr.classList.add("is-invalid");
        cr.classList.remove("is-valid");
        civa.style.display="block";
        cva.style.display="none";
        csub.disabled=true;
    }}
function cnvalidate()
 {
  let cn=document.getElementById("nacar");
  let cnva=document.getElementById("cnv");
  let cniva=document.getElementById("cniv");
  if(cn.value.length>0)
  {
    cn.classList.add("is-valid");
    cn.classList.remove("is-invalid");
    cnva.style.display="block";
    cniva.style.display="none";
  }
  else{
    cn.classList.add("is-invalid");
    cn.classList.remove("is-valid");
    cniva.style.display="block";
    cnva.style.display="none";
  }}
function cvvalidate()
 {
  let cvi=document.getElementById("cva");
  let cvl=cvi.value;
  let stc=cvl.toString();
  let cvva=document.getElementById("cvv");
  let cviva=document.getElementById("cviv");
  let csub=document.getElementById("csubmit");
  if(stc.length===3)
  {
    cvi.classList.add("is-valid");
    cvi.classList.remove("is-invalid");
    cvva.style.display="block";
    cviva.style.display="none";
    csub.disabled=false;
  }
  else{
    cvi.classList.add("is-invalid");
    cvi.classList.remove("is-valid");
    cviva.style.display="block";
    cvva.style.display="none";
    csub.disabled=true;
  }
 }
function cmonth()
 {
 let cm=document.getElementById("cmonths");
 let cmv=cm.value;
 let mva=document.getElementById("mv");
 let miva=document.getElementById("miv");
 let csub=document.getElementById("csubmit");
 if(cmv<=12 && cmv>0)
 {
    cm.classList.add("is-valid");
    cm.classList.remove("is-invalid");
    mva.style.display="block";
    miva.style.display="none";
    csub.disabled=false;
 }
 else{
    cm.classList.add("is-invalid");
    cm.classList.remove("is-valid");
    miva.style.display="block";
    mva.style.display="none";
    csub.disabled=true;
 }
 }
function cyear()
 {
    let cma=document.getElementById("cyears");
 let cmva=cma.value;
 let mvaa=document.getElementById("yv");
 let mivaa=document.getElementById("yiv");
 let csub=document.getElementById("csubmit");
 if(cmva>2023 && cmva<=2045)
 {
    cma.classList.add("is-valid");
    cma.classList.remove("is-invalid");
    mvaa.style.display="block";
    mivaa.style.display="none";
    csub.disabled=false;
    
 }
 else{
    cma.classList.add("is-invalid");
    cma.classList.remove("is-valid");
    mivaa.style.display="block";
    mvaa.style.display="none";
    csub.disabled=true;
 }
  }
// Debit card validation
function dvalidate()
  { 
     //cosole.log("function called");
    let cr=document.getElementById("debits");
    let cva=document.getElementById("dv");
    let civa=document.getElementById("div");
    let dsub=document.getElementById("dsubmit");
    let crl=cr.value;
    let str=crl.toString();
     let len=str.length;
     if(len===16)
     {
        cr.classList.remove("is-invalid");
        cr.classList.add("is-valid");
        cva.style.display="block";
        civa.style.display="none";
        dsub.disabled=false;
     }
     else{
        cr.classList.add("is-invalid");
        cr.classList.remove("is-valid");
        civa.style.display="block";
        cva.style.display="none";
        dsub.disabled=true;
    }}
function dnvalidate()
 {
  let cn=document.getElementById("nacars");
  let cnva=document.getElementById("dnv");
  let cniva=document.getElementById("dniv");
  if(cn.value.length>0)
  {
    cn.classList.add("is-valid");
    cn.classList.remove("is-invalid");
    cnva.style.display="block";
    cniva.style.display="none";
  }
  else{
    cn.classList.add("is-invalid");
    cn.classList.remove("is-valid");
    cniva.style.display="block";
    cnva.style.display="none";
  }}
function dcvvalidate(){
  let cvi=document.getElementById("dacvv");
  let cvl=cvi.value;
  let stc=cvl.toString();
  let cvva=document.getElementById("dcv");
  let cviva=document.getElementById("dciv");
  let dsub=document.getElementById("dsubmit");
  if(stc.length===3)
  {
    cvi.classList.add("is-valid");
    cvi.classList.remove("is-invalid");
    cvva.style.display="block";
    cviva.style.display="none";
    dsub.disabled=false;
  }
  else{
    cvi.classList.add("is-invalid");
    cvi.classList.remove("is-valid");
    cviva.style.display="block";
    cvva.style.display="none";
    dsub.disabled=true;
  }}
function dmonth()
 {
 let cm=document.getElementById("dmonths");
 let cmv=cm.value;
 let mva=document.getElementById("dmv");
 let miva=document.getElementById("dmiv");
 let dsub=document.getElementById("dsubmit");
 if(cmv<=12 && cmv>0)
 {
    cm.classList.add("is-valid");
    cm.classList.remove("is-invalid");
    mva.style.display="block";
    miva.style.display="none";
    dsub.disabled=false;
 }
 else{
    cm.classList.add("is-invalid");
    cm.classList.remove("is-valid");
    miva.style.display="block";
    mva.style.display="none";
    dsub.disabled=true;
 }
 }
function dyear()
 {
    let cma=document.getElementById("dyears");
 let cmva=cma.value;
 let mvaa=document.getElementById("dyv");
 let mivaa=document.getElementById("dyiv");
 let dsub=document.getElementById("dsubmit");
 if(cmva>2023 && cmva<=2045)
 {
    cma.classList.add("is-valid");
    cma.classList.remove("is-invalid");
    mvaa.style.display="block";
    mivaa.style.display="none";
    dsub.disabled=false;
 }
 else{
    cma.classList.add("is-invalid");
    cma.classList.remove("is-valid");
    mivaa.style.display="block";
    mvaa.style.display="none";
    dsub.disabled=true;
 }
 }
// Net banking validation
function nbank()
 {
  let nba=document.getElementById("nb");
  let nva=document.getElementById("nv");
  let niva=document.getElementById("niv");
  if(nba.value==="")
  {
    nba.classList.add("is-invalid");
    nba.classList.remove("is-valid");
    niva.style.display("block");
    nva.style.display("none"); 
  }
  else{
    nba.classList.add("is-valid");
    nba.classList.remove("is-invalid");
    nva.style.display("block");
    niva.style.display("none");
  }

 }
function naccount()
 {
 let ac=document.getElementById("nacc");
 let acv=document.getElementById("nav");
 let aciv=document.getElementById("naiv");
 let sub=document.getElementById("subm");
 let nacv=ac.value;
 let st=nacv.toString();
 if(st.length>14 || st.length<11)
 {
    ac.classList.add("is-invalid");
    ac.classList.remove("is-valid");
    aciv.style.display="block";
    acv.style.display="none";
    sub.disabled=true;
   
  }
  else{
    ac.classList.add("is-valid");
    ac.classList.remove("is-invalid");
    acv.style.display="block";
    aciv.style.display="none"; 
    sub.disabled=false;
  }
 }
function naname()
 {
 let ahn=document.getElementById("nahn");
 let ahv=document.getElementById("nahv");
 let ahiv=document.getElementById("nahiv");
 if(ahn.value.length>0)
 {
    ahn.classList.add("is-valid");
    ahn.classList.remove("is-invalid");
    ahv.style.display="block";
    ahiv.style.display="none";
 }
 else{
    ahn.classList.add("is-invalid");
    ahn.classList.remove("is-valid");
    ahiv.style.display="block";
    ahv.style.display="none";
 }
 }
function  icode()
 {
  let ifc=document.getElementById("ifs");
  let ifva=document.getElementById("ifv");
  let ifiva=document.getElementById("ifiv");
  if(ifc.value.length===11)
  {
    ifc.classList.add("is-valid");
    ifc.classList.remove("is-invalid");
    ifva.style.display="block";
    ifiva.style.display="none";
  }
  else{
    ifc.classList.add("is-invalid");
    ifc.classList.remove("is-valid");
    ifiva.style.display="block";
    ifva.style.display="none";
  }

 }
// upi validation
function uvalidate()
  {
 let up=document.getElementById("upi");
 let uva=document.getElementById("uv");
 let uiva=document.getElementById("uiv");
 let pay=document.getElementById("payn");
 if(up.value.length>0 && up.value.includes('@'))
 {
    up.classList.add("is-valid");
    up.classList.remove("is-invalid");
    uva.style.display="block";
    uiva.style.display="none";
    pay.disabled=false;
 }
 else{
    up.classList.add("is-invalid");
    up.classList.remove("is-valid");
    uiva.style.display="block";
    uva.style.display="none";
    pay.disabled=true;
    
 }
}
</script> 
<!-- Form validaion -->
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