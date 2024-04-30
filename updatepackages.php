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
<body>
    <script src="http://localhost/proj/js/bjquery.js"></script>
    <script src="http://localhost/proj/js/bootstrapm.js"></script>
    <script src="http://localhost/proj/js/bootstrap.bundle.min.js"></script>
    <script src="http://localhost/proj/js/bootstrapm.js"></script>
    <script src="http://localhost/proj/js/bootstrap.min.js"></script>

    


<?php
include 'db.php';

$placename=$_POST['update'];
$pactype=$_POST['tab'];
$pln=$_POST["plname"];
$loc=$_POST["locat"];
$dur=$_POST["duration"];
$am=$_POST["amount"];
$im=$_POST["img"];
$abo=$_POST["about"];
?>
<div class="dashbg">
<div class="container">
    <div class="row justify-content-center">
     <div class="col-lg-5 col-12">
                <div class="card mt-5">
                    <div class="card-header bg-primary text-center text-light">
                            <h4>UPDATE PACKAGES</h4></div>
                    <div class="card-body">
                            <form action="update.php" method="post" enctype="multipart/form-data">
                            <label for="packages">Packages : </label>
                            <input type="text" name="pack" class="form-control"  value="<?php echo $pactype; ?>" readonly>
                            <br>
                            <label for="pacname">place Name : </label>
                                <input type="text" name="plname" id="pacname" value="<?php echo $pln; ?>" class="form-control">
                                <label for="locate">Location : </label>
                                <input type="text" name="location" id="locate"value="<?php echo $loc; ?>" class="form-control">
                            <label for="country">Country : </label>
                            <select name="country" class="form-control" id="country">
                                <option value="India">India</option>
                                <option value="Non-India">Non-India</option>
                                </select>
                            <label for="durat"> Duration : </label>
                                <input type="text" name="duration" id="durname" value="<?php echo $dur; ?>" class="form-control">
                            
                            <label for="amou"> Amount : </label>
                                <input type="text" name="pamount" id="amou" value="<?php echo $am; ?>" class="form-control">
                            <label for="link">About us Link : </label>
                            <input type="text" name="aboutus" id="link" value="<?php echo $abo; ?>" class="form-control">
                        <label for="image">Image :</label>
                        <input type="file" name="image" id="image" value="<?php echo $im; ?>"  class="form-control"> 
                        <br>
                        <input type="hidden" name="plname" value="<?php echo $placename; ?>">
                         <div class="row justify-content-center">
                            <div class="col-6">
                              <a onclick="fun()" class="btn btn-secondary btn-block">Back </a>                            
                            </div>
                            
                            <button type="submit" class="btn btn-primary btn-block col-6">submit</button>
                          
                        </div>
                        </form> 
                    </div>
                </div>
            </div>
            </div>
</div>
</div>
<script>
function fun()
{
     history.go(-1);
}
</script>
</body>
</html>