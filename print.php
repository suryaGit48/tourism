<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tourism management</title>
    <link rel="stylesheet" href="style3.css">
    <link rel="stylesheet" href="http://localhost/proj/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/proj/fontawesome-free-5.15.4-web/css/all.min.css">
</head>
<body class="print">
<script src="http://localhost/proj/js/bjquery.js"></script>
    <script src="http://localhost/proj/js/bootstrapm.js"></script>
<?php
include 'db.php';
$boid=$_POST["print"];
$sqlt="select transactionid from booking where bookingid='".$boid."'";
if($res=$con->query($sqlt))
    {
        if($res->num_rows>0)
        {
            while($rows=$res->fetch_array())
            {
                $tra=$rows[0];
            }
        }
    }
$sqlg="select date,time,bookingid,name,phone,email,frloc,toloc,members,days,hotel,total from book where 
bookingid='".$boid."'";
if($re=$con->query($sqlg))
    {
        if($re->num_rows>0)
        {
            while($rows=$re->fetch_array())
            {
 ?>
<div class="container">
    <div class="row justify-content-center mt-2">
        <div class="col-lg-6 col-md-8 col-12">
            <div class="card">
                    <div class="card-header text-center text-light bg-success">Booking Details</div>
                        <div class="card-body text-center">
                            <table class="ml-5">
                            <tr><td class="item"><h5>Date<td><td>:<td class="iv"> <?php echo $rows[0]; ?></tr></h5>
                            <tr><td><h5 class="item">Time <td><td>:<td class="iv"> <?php echo $rows[1]; ?></tr></h5>
                            <tr><td><h5 class="item">Booking ID <td><td>:<td class="iv"> <?php echo $rows[2]; ?></tr></h5>
                            <tr><td><h5 class="item">Transaction ID <td><td>:<td class="iv"> <?php echo $tra; ?></tr></h5>
                            <tr><td><h5 class="item">Name <td><td>:<td class="iv"><?php echo $rows[3]; ?></tr></h5>
                            <tr><td><h5 class="item">Phone No <td><td>:<td class="iv"><?php echo $rows[4]; ?></tr></h5>
                            <tr><td><h5 class="item">  E-mail <td><td>:<td class="iv"><?php echo $rows[5]; ?></tr></h5>
                            <tr><td><h5 class="item">Location<td><td>:<td class="iv"><?php echo $rows[6]; ?> to <?php echo $rows[7]; ?></tr></h5>
                            <tr><td><h5 class="item">Total members <td><td>:<td class="iv"> <?php echo $rows[8]; ?></tr></h5>                           
                            <tr><td><h5 class="item">No.of Days <td><td>:<td class="iv"> <?php echo $rows[9]; ?></tr></h5>
                            <tr><td><h5 class="item">Hotelcategory <td><td>:<td class="iv"> <?php echo $rows[10]; ?></tr></h5>
                            <tr><td><h5 class="item">Total amount<td> <td>:<td class="iv"> <?php echo $rows[11]; ?></tr></h5>
                            </table>
                        </div>
                        <div class="prfo">
                        <div class="card-footer text-center print">
                            <div class="row">
                                <div class="col-6">
                                    <div class="btn btn-block btn-primary pr" onclick="window.print();">print</div>
                                </div>
                                <div class="col-6">
                                <a href="mybook.php" class="btn btn-block btn-secondary ok">BACK </a></div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
}
}
}
else
{
echo '<script>console.log("can\'t get");;</script>';
}

?>
</body>
</html>