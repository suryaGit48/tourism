<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tourism management</title>
  <link rel="stylesheet" href="style3.css">
  <link rel="stylesheet" href="http://localhost/proj/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body class="pay">
  
    <script src="http://localhost/proj/js/bjquery.js"></script>
    <script src="http://localhost/proj/js/jquery.js"></script>
    <script src="http://localhost/proj/js/bootstrapm.js"></script>
    <script>window.alert("**Thank you for Booking **");</script>
<script>window.alert("Please copy your Booking ID.This ID is essential for accessing your Booking details."); </script>
<?php 
include 'db.php';
  $crnum=$_POST["canum"];
  $crtype=$_POST["c1"];
  $crname=$_POST["crname"];
  $crcvv=$_POST["crcv"];
  $cmont=$_POST["cmon"];
  $cye=$_POST["cyea"];
  $trai=$_POST["trid"];
  $toam=$_POST["total"];
  $boid=$_POST["booking"];
  $counts=1;
?>
  <div class="container mt-5">
    <div class="row mt-5 justify-content-center">
      <div class="col-lg-5 col-12 mt-5">
          <div class="card">
            <div class="card-header bg-primary text-center text-light">TRANSACTION DETAILS</div>
            <div class="card-body">
            <h6>Transaction ID  <b class="ml-5" >&nbsp;&nbsp;:</b><?php echo $trai; ?></h6> 
            <h6>Booking ID  <b class="ml-5" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b><?php echo $boid; ?></h6> 
            <h6>Total Amount  <b class="ml-5" >&nbsp;&nbsp;&nbsp;:</b><?php echo $toam; ?></h6> 
            <h6>Mode of Payment <b class="ml-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b>CREDIT CARD</h6>
              <h6>Card Type    <b class="ml-5" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b><?php echo $crtype; ?></h6>
              <h6>Credit Card NO  <b class="ml-5" >:</b><?php echo $crnum; ?></h6>
              <h6>Card Holder Name  <b class="ml-2" >&nbsp;&nbsp;&nbsp;&nbsp;:</b> <?php echo $crname; ?></h6>
              <h6>CVV NO  <b class="ml-5" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b> <?php echo $crcvv; ?></h6>
              <h6>Expiry Date  <b class="ml-5" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b> <?php echo $cmont.'/'.$cye; ?></h6>
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col">
                     <a href="Homes.php" class="btn btn-secondary btn-block">BACK</a>
                    </div>
                    <div class="col">
                    <button class="btn btn-primary btn-block" onclick="window.print()">PRINT</button>
                    </div>
                </div>
               
                
            </div>
          </div>
      </div>
    </div>
  </div>
<?php
if($counts==1)
{
         $sele="select bookingid,name,email,phone,members,days,hotel,frloc,toloc,pamo,total,date,time from booking where transactionid='$trai'";
         if($res=$con->query($sele))
{
    if($res->num_rows>0)
    {
        while($rown=$res->fetch_array())
        {
          $sq="insert into book(bookingid,name,email,phone,members,days,hotel,frloc,toloc,pamo,total,date,time) values('$rown[0]','$rown[1]','$rown[2]','$rown[3]','$rown[4]','$rown[5]','$rown[6]','$rown[7]','$rown[8]','$rown[9]','$rown[10]','$rown[11]','$rown[12]')";
          if($con->query($sq))
      {
    echo '<script></script>';
      }
     else{
    echo '<script>window.alert("Failed to Registered"); window.history(-1); </script>';
        }
        }
    }
} 
}
?>
</body>
</html>