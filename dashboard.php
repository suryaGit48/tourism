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
        session_start();
        $usern=$_SESSION['adminname'];
        $adminemail=$_SESSION['adminemail'];
        $coun="select count(*) as total_users from user";
        $rec=$con->query($coun);
        if($rec==TRUE)
        {
        $row=$rec->fetch_assoc();
        $total=$row['total_users'];
        }
        else{
            echo 'no records found';
        }
        $counb="select count(*) as to_book from book";
        if($resb=$con->query($counb))
        {
        $rowb=$resb->fetch_assoc();
        $totb=$rowb['to_book'];
        }
        else{
            $totb=0;
        }
        
    
        $counpk="select count(*) as to_poppackages from poppack";
        if($respk=$con->query($counpk))
        {
        $rowpk=$respk->fetch_assoc();
        $totpk=$rowpk['to_poppackages'];
        }
        else{
            $totpk=0;
        }
        $counad="select count(*) as to_advpackages from adventure";
        if($resad=$con->query($counad))
        {
        $rowad=$resad->fetch_assoc();
        $totad=$rowad['to_advpackages'];
        }
        else{
            $totad=0;
        }
        $counis="select count(*) as to_islpackages from island";
        if($resis=$con->query($counis))
        {
        $rowis=$resis->fetch_assoc();
        $totis=$rowis['to_islpackages'];
        }
        else{
            $totis=0;
        }
        $counbe="select count(*) as to_beapackages from beach";
        if($resbe=$con->query($counbe))
        {
        $rowbe=$resbe->fetch_assoc();
        $totbe=$rowbe['to_beapackages'];
        }
        else{
            $totbe=0;
        }
        $counre="select count(*) as to_relpackages from religion";
        if($resre=$con->query($counre))
        {
        $rowre=$resre->fetch_assoc();
        $totre=$rowre['to_relpackages'];
        }
        else{
            $totre=0;
        }
        $counlo="select count(*) as to_locpackages from packages";
        if($reslo=$con->query($counlo))
        {
        $rowlo=$reslo->fetch_assoc();
        $totlo=$rowlo['to_locpackages'];
        }
        else{
            $totlo=0;
        }
        $adm="select name as adminn from admin where email='surya2148@gmail.com'";
        if($rea=$con->query($adm))
        {
             $rowad=$rea->fetch_assoc();  
            $adminname=$rowad['adminn'];
        }
        else{
            $adminname="surya";
        }
     
        ?>

<div class="adnav" >
    <div class="container">
    <div class="das">
        <div class="row">
            <div class="col-sm-3 col-lg-5">
                <h1 class="text-danger"> <img src="./img/prlogo5.png" alt="lo" height=70 width=150><i class="fas fa-clipboard text-primary"></i> DASHBOARD</h1>                
            </div>
             <div class="col-lg-2 mt-2">
                
                    <h6 class="text-primary text-center ml-5">
                     Welcome..... <?Php echo $usern; ?><br>
                    
                    </h6>                                
             </div>
             <div class="col-lg-4 mt-5 ml-5">
                <h6><a href="adminprofile.php" class="text-success" style="text-decoration:underline;">MY PROFILE </a> &nbsp;&nbsp;&nbsp;&nbsp;
        <a href="adminl.html" style="text-decoration:underline;" class="text-dark ml-5">LOGOUT</a></h6>
             </div>
             
                </div></div>
    </div>
</div>
<div class="dashbg">
<div class="container mt-5">
  
    <div class="row justify-content-center  mt-sm-5 ml-lg-2"> 
        <div class="col-lg-12 col-sm-12">

    <div class="card-header" style="background:none;border:none;">
    <nav class="navbar navbar-expand-lg col-12  mt-lg-2" style="position:relative;">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <div class="nba"></div>
          <div class="nba"></div>
          <div class="nba"></div>
          <div class="nba"></div>
          </button>
          <div class="navbar-collapse collapse" id="navbarNav">
              <ul class="nav nav-pills nav-tabs ml-sm-auto" id="mytabs" style="background:none;border:none;">
                     <li class="nav-item">
                <a href="#userdetails" id="user" data-toggle="tab" data-bs-target="#user" role="tab" class="nav-link text-dark active col-sm-12 " style="font-weight:bold; background:none;">
                    USER MANAGEMENT
                </a></li><br>
                <li class="nav-item">
                 <a href="#dashboard" id="personal" data-toggle="tab" data-bs-target="#personal" role="tab" style="font-weight:bold;background:none;" class="nav-link col-sm-12 text-dark">
                     BOOKING MANAGEMENT
                 </a></li><br>
                 <li class="nav-item">
                 <a href="#packages" id="pack" data-toggle="tab" data-bs-target="#packages" role="tab" style="font-weight:bold;background:none;" class="nav-link col-sm-12 text-dark">
                     MANAGE PACKAGES
                 </a></li><br>
                 <li class="nav-item">
                 <a href="#feedback" id="feed" data-toggle="tab" data-bs-target="#feedback" role="tab" style="font-weight:bold;background:none;" class="nav-link col-sm-12 text-dark">
                     ENQUIRIES
                 </a></li><br>
                
                 <li class="nav-item">
                <a href="#admindetails" id="admin" data-toggle="tab" style="font-weight:bold;background:none;" role="tab" class="nav-link col-sm-12 text-dark">
                     ADMIN MANAGEMENT
                 </a></li>
                </ul> 
            </div>
    </nav>
        </div>
                </div>
         </div>
<div class="tab-content">
    <!-- Booking management -->
    <div class="tab-pane show" style="border-color:green" id="dashboard">
                            <!--Total users and bookings-->
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="card-body mt-2">                       
                        <h4 class="text-primary text-center"><i class="fas fa-user text-secondary"></i> TOTAL USERS</h4>
                        <h3 class="text-danger text-center"><?php echo $total; ?></h3>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="card-body mt-2">                       
                        <h4 class="text-primary text-center"><i class="fas fa-book text-secondary"></i> TOTAL BOOKINGS</h4>
                        <h3 class="text-danger text-center"><?php echo $totb; ?></h3>
                    </div>
                </div>
            </div>
            <!--payment transactions-->
                    <?php 
                    $sqls="select sum(total) as payment from book";
                    if($ress=$con->query($sqls))
                    {
                        $rows=$ress->fetch_assoc();
                        $pay=$rows['payment'];
                    }
                    else{
                        $pay=0;
                    }
                    ?>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="card-body mt-2" style="background:none;">                       
                        <h4 class="text-primary text-center"><i class="fas fa-rupee-sign text-secondary"></i>PAYMENT TRANSACTIONS</h4>
                        <h3 class="text-danger text-center"><i class="fas fa-rupee-sign text-primary"></i><?php echo $pay; ?></h3>
                    </div>
                </div>  
                    <?php 
                    $sqls="select sum(total)/100*10 as income from book";
                    if($resin=$con->query($sqls))
                    {
                        $rowin=$resin->fetch_assoc();
                        $inc=$rowin['income'];
                    }
                    else{
                        $inc=0;
                    }
                    ?>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="card-body mt-2" style="background:none;">                       
                        <h4 class="text-primary text-center"><i class="fas fa-rupee-sign text-secondary"></i>INCOME AMOUNT </h4>
                        <h3 class="text-danger text-center"><i class="fas fa-rupee-sign text-primary"></i><?php echo $inc; ?></h3>
                    </div>
                </div>                 
            </div>
                <!--Booking history-->
            <div class="row mt-5">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header text-center text-light bg-primary"><h4>BOOKING HISTORY</h4></div>
                        <div class="card-body">
                            <div class="table-responsive" style="height:300px; overflow-y:scroll">
                                <table class="table table-sm table-bordered table-hover text-center">
                                            <thead class="bg-success text-white">
                                            <tr><th>DATE<th>TIME<th>BOOKING ID<th>NAME<th>E-MAIL<th>FROM<th>TO<th>TOTAL AMOUNT</tr>
                                        </thead>
                                    <?php 
                                    $sqlh="select date,time,bookingid,name,email,frloc,toloc,total from book";
                                    if($resh=$con->query($sqlh))
                                    {
                                        if($resh->num_rows>0)
                                        {
                                    while($rowh=$resh->fetch_array())
                                    {
                                    echo '<tbody> 
                                    <tr><td>'.$rowh[0].'<td>'.$rowh[1].'<td>'.$rowh[2].'<td>'.$rowh[3].'<td>'.$rowh[4].'<td>'.
                                    $rowh[5].'<td>'.$rowh[6].'<td>'.$rowh[7].'<td><form method="post" action="delete_row.php">
                                    <input type="hidden" name="delete_row" value="'. $rowh[2].'">
                                                    <button type="submit" id="can" class="btn btn-danger cancel-button">
                                                    <i class="fas fa-times"></i></button>
                                        </form></tr>
                                    </tbody>';
                                            }
                                        }
                                    }
                                            ?> 
            
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div> 
    <!--user management-->
    <div class="tab-pane show active" style="border-color:red;" id="userdetails">
        <div class="row mt-2 justify-content-center">
            <div class="col-12">
                <div class="card-body w-100">
                        <h4 class="text-primary text-center"><i class="fas fa-user text-secondary"></i> TOTAL USERS</h4>
                        <h3 class="text-danger text-center" data-toggle="counter-up"><?php echo $total; ?></h3>
                </div> 
            </div>
        </div>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <div class="row justify-content-center">
            <div class="col-lg-6 col-12">
                <div class="card mt-5" style="background:none;">
                        <div class="card-header text-center text-dark data"><h4>
                        <i class="fas fa-users"></i> USERS LIST</h4></div>
                        <div class="card-body">
                            <div class="table-responsive" style="overflow-y:scroll;height:450px;">
                                <table class="table table-sm table-bordered table-hover text-center">
                                            <thead class="bg-success text-white">
                                            <tr><th>NAME<th>EMAIL<th>PHONE NO<th>PASSWORD<th>Remove</tr>
                                        </thead>
                                    <?php 
                                    $sqlad="select uname,email,password,phone from user";
                                    if($resad=$con->query($sqlad))
                                    {
                                        if($resad->num_rows>0)
                                    {
                                    while($rowa=$resad->fetch_array())
                                    {
                                    echo '<tbody> 
                                    <tr><td>'.$rowa[0].'<td>'.$rowa[1].'<td>'.$rowa[3].'<td>'.$rowa[2].'<td><form method="post" action="delete_user.php">
                                    <input type="hidden" name="delete_rows" value="'. $rowa[0].'">
                                                    <button type="submit" id="can" class="btn btn-danger cancel-button">
                                                    <i class="fas fa-times"></i></button>
                                        </form></tr>
                                    </tbody>';
                                    }
                                        }
                                        }
                                    ?> 
                                </table>
                            </div>                   
                        </div>
                </div>
            </div>
            <div class="col-lg-5 col-12">
                <div class="card mt-5" style="background:none;">
                                <div class="card-header bg-primary text-center text-dark data">
                                    <h4><i class="fas fa-user"></i> ADD USERS</h4></div>
                    <div class="card-body">
                            <form action="adduser.php" method="post" class="needs-validation" novalidate>
                                    <label for="name">Name : </label>
                                    <input type="text" name="siname" class="form-control" style="background:none;" required=""><br>
                                    <label for="email">E-mail : </label>
                                    <input type="email" name="siemail" id="mail"style="background:none;" oninput="evalidate()" class="form-control" required=""><br>
                                    <div class="valid-feedback" id="ev"></div>
                                    <div class="invalid-feedback" id="eiv">Invalid</div>
                                    <label for="phone">Phone NO : </label>
                                    <input type="phone" name="siphone" id="phone"style="background:none;" oninput="phones()" class="form-control" required=""><br>
                                    <div class="valid-feedback" id="pv"></div>
                                    <div class="invalid-feedback" id="piv">Invalid</div>
                                    <label for="pass">password : </label>
                                    <input type="password" name="sipass" id="pas" oninput="passwords()" style="background:none;" class="form-control" required=""><br>
                                    <div class="valid-feedback" id="spv"></div>
                                    <div class="invalid-feedback" id="spiv">Too small..</div>
                                    <div class="card-footer justify-content-center">
                                        <button type="submit" id="subm" class="btn btn-primary btn-block text-center">submit</button>
                                    </div>
                            </form> 
                    </div>
                </div>
            </div>                     
        </div>
    </div>
    <!-- Manage packages -->
    <div class="tab-pane"style="border-color:red;" id="packages">
        <div class="row">
            
            <div class="col-lg-5 col-12">
                <div class="card mt-5" style="background:none;">
                    <div class="card-header bg-primary text-center text-dark data">
                            <h4> <i class="fas fa-car"></i> ADD PACKAGES</h4></div>
                    <div class="card-body">
                            <form action="addpackages.php" method="post" enctype="multipart/form-data">
                            <label for="packages">Packages : </label>
                            <select name="pack" class="form-control" style="background:none;">
                            <option value="poppack">popular packages</option>
                            <option value="adventure">Adventure packages</option>
                            <option value="packages">Local packages</option>
                            <option value="island">Island packages</option>
                            <option value="religion">Religion packages</option>
                            <option value="beach">Beach packages</option>
                            </select>
                            <br>
                            <label for="pacname">place Name : </label>
                                <input type="text" name="plname" id="pacname" style="background:none;" class="form-control">
                                <label for="locate">Location : </label>
                                <input type="text" name="location" id="locate" style="background:none;" class="form-control">
                            <label for="country">Country : </label>
                            <select name="country" class="form-control" style="background:none;" id="country">
                                <option value="India">India</option>
                                <option value="Non-India">Non-India</option>
                                </select>
                            <label for="durat"> Duration : </label>
                                <input type="text" name="duration" style="background:none;" id="durname" class="form-control">
                            
                            <label for="amou"> Amount/Day : </label>
                                <input type="text" name="pamount" style="background:none;" id="amou" class="form-control">
                            <label for="link">About us Link : </label>
                            <input type="text" name="aboutus" style="background:none;" id="link" class="form-control">
                        <label for="image">Image :</label>
                        <input type="file" name="image" id="image" style="background:none;" class="form-control">
                            <button type="submit" class="btn btn-primary btn-block">submit</button>
                        </form> 
                    </div>
                </div>
            </div>
        <div class="col-lg-6 col-12">
                <div class="card mt-5" style="background:none;">
                    <div class="card-header bg-primary text-dark text-center data"><h4>
                    <i class="fas fa-tree"></i> CATEGORIES OF PACKAGES</h4></div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-sm table-bordered table-hover text-center">
                            <thead><tr><th>categories<th>places</tr></thead>
                            <tbody class="text-dark">
                                    <tr><td>POPULAR PACKAGES<td><?php echo $totpk; ?></tr>
                                    <tr><td>ADVENTURE PACKAGES<td><?php echo $totad; ?></tr>
                                    <tr><td>ISLAND PACKAGES<td><?php echo $totis; ?></tr>
                                    <tr><td>BEACH PACKAGES<td><?php echo $totbe; ?></tr>
                                    <tr><td>RELIGION PACKAGES<td><?php echo $totre; ?></tr>
                                    <tr><td>LOCAL PACKAGES<td><?php echo $totlo; ?></tr>
                                    <?php 
                                    $total=$totpk+$totad+$totis+$totbe+$totre+$totlo;
                                    ?>
                                    <tr><th>TOTAL PACKAGES<th><?php echo $total; ?></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-12">
                <div class="card mt-5">
                        <div class="card-header text-center text-light adpack"><h4>LOCAL PACKAGES</h4></div>
                        <div class="card-body">
                                <div class="table-responsive" style="overflow-y:scroll;">
                                    <table class="table table-sm table-bordered table-hover text-center">
                                                        <thead class="bg-success text-white">
                                                        <tr><th>PLACE<th>Location<th>DURATION<th>AMOUNT<th>IMAGE<th>UPDATE<th>Remove</tr>
                                                    </thead>
                                                <?php 
                                                $sqlad="select *from packages";
                                                if($resad=$con->query($sqlad))
                                                {
                                                    if($resad->num_rows>0)
                                            {
                                                while($rowa=$resad->fetch_array())
                                                {
                                                echo '<tbody> 
                                                <tr><td>'.$rowa[0].'<td>'.$rowa[1].'<td>'.$rowa[2].'<td>'.$rowa[3].'<td>
                                                <img src="./image/'.$rowa[4].'" width=40 height=40>'.
                                                '<td><form method="post" action="updatepackages.php">
                                                <input type="hidden" name="update" value="'.$rowa[0].'">
                                                <input type="hidden" name="tab" value="packages">
                                                <input type="hidden" name="plname" value="'.$rowa[0].'">
                                                <input type="hidden" name="locat" value="'.$rowa[1].'">
                                                <input type="hidden" name="duration" value="'.$rowa[2].'">
                                                <input type="hidden" name="amount" value="'.$rowa[3].'">
                                                <input type="hidden" name="img" value="'.$rowa[4].'">
                                                <input type="hidden" name="about" value="'.$rowa[5].'">
                                                 <button type="submit" id="can" class="btn btn-primary">
                                                <i class="fas fa-pen"></i></button>
                                                </form><td><form method="post" action="delete_package.php">
                                                <input type="hidden" name="delete_rows" value="'. $rowa[0].'">
                                                                <button type="submit" id="can" class="btn btn-danger cancel-button">
                                                                <i class="fas fa-times"></i></button>
                                                    </form></tr>
                                                </tbody>';
                                                }
                                            }
                                            }
                                                ?> 
                            
                                    </table>
                                </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                            <div class="card mt-5">
                                    <div class="card-header text-center text-light adpack"><h4>POPULAR PACKAGES</h4></div>
                                    <div class="card-body">
                                        <div class="table-responsive" style="overflow-y:scroll;">
                                            <table class="table table-sm table-bordered table-hover text-center">
                                                        <thead class="bg-success text-white">
                                                        <tr><th>PLACE<th>Location<th>DURATION<th>AMOUNT<th>IMAGE<th>UPDATE<th>Remove</tr>
                                                    </thead>
                                                <?php 
                                                $sqlpop="select *from poppack";
                                                if($respop=$con->query($sqlpop))
                                                {
                                                    if($respop->num_rows>0)
                                                    {
                                                while($rowp=$respop->fetch_array())
                                                {
                                                echo '<tbody> 
                                                <tr><td>'.$rowp[0].'<td>'.$rowp[1].'<td>'.$rowp[3].'<td>'.$rowp[4].'<td>
                                                <img src="./image/'.$rowp[5].'" width=40 height=40>'.
                                                '<td><form method="post" action="updatepackages.php">
                                                <input type="hidden" name="update" value="'.$rowp[0].'">
                                                <input type="hidden" name="tab" value="poppack">
                                                <input type="hidden" name="plname" value="'.$rowp[0].'">
                                                <input type="hidden" name="locat" value="'.$rowp[1].'">
                                                <input type="hidden" name="duration" value="'.$rowp[3].'">
                                                <input type="hidden" name="amount" value="'.$rowp[4].'">
                                                <input type="hidden" name="img" value="'.$rowp[5].'">
                                                <input type="hidden" name="about" value="'.$rowp[6].'">
                                                 <button type="submit" id="can" class="btn btn-primary">
                                                <i class="fas fa-pen"></i></button>
                                                </form>
                                                <td><form method="post" action="delete_pop_package.php">
                                                <input type="hidden" name="delete_rows" value="'. $rowp[0].'">
                                                                <button type="submit" id="can" class="btn btn-danger cancel-button">
                                                                <i class="fas fa-times"></i></button>
                                                    </form></tr>
                                                </tbody>';
                                                        }
                                                    }
                                                }
                                                        ?> 
                            
                                            </table>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>

        <div class="row">
        <div class="col-lg-6 col-12">
            <div class="card mt-5">
                <div class="card-header text-center text-light adpack"><h4>ADVENTURE PACKAGES</h4></div>
                    <div class="card-body">
                        <div class="table-responsive" style="overflow-y:scroll;">
                        <table class="table table-sm table-bordered table-hover text-center">
                        <thead class="bg-success text-white">
                        <tr><th>PLACE<th>Location<th>DURATION<th>AMOUNT<th>IMAGE<th>UPDATE<th>Remove</tr>
                    </thead>
                <?php 
                $sqladv="select *from adventure";
                if($resadv=$con->query($sqladv))
                {
                    if($resadv->num_rows>0)
            {
                while($rowv=$resadv->fetch_array())
                {
                echo '<tbody> 
                <tr><td>'.$rowv[0].'<td>'.$rowv[1].'<td>'.$rowv[2].'<td>'.$rowv[3].'<td>
                <img src="./image/'.$rowv[4].'" width=40 height=40>'.'
                <td><form method="post" action="updatepackages.php">
                                                <input type="hidden" name="update" value="'.$rowv[0].'">
                                                <input type="hidden" name="tab" value="adventure">
                                                <input type="hidden" name="plname" value="'.$rowv[0].'">
                                                <input type="hidden" name="locat" value="'.$rowv[1].'">
                                                <input type="hidden" name="duration" value="'.$rowv[2].'">
                                                <input type="hidden" name="amount" value="'.$rowv[3].'">
                                                <input type="hidden" name="img" value="'.$rowv[4].'">
                                                <input type="hidden" name="about" value="'.$rowv[5].'">
                                                 <button type="submit" id="can" class="btn btn-primary">
                                                <i class="fas fa-pen"></i></button>
                                                </form>
                <td><form method="post" action="delete_adv_package.php">
                <input type="hidden" name="delete_rows" value="'. $rowv[0].'">
                                <button type="submit" id="can" class="btn btn-danger cancel-button">
                                <i class="fas fa-times"></i></button>
                    </form></tr>
                </tbody>';
                }
            }
        }
                ?> 
            
            </table>
        </div>
        </div></div>
        </div>
        <div class="col-lg-6 col-12">
            <div class="card mt-5">
                <div class="card-header text-center text-light adpack"><h4>ISLAND PACKAGES</h4></div>
                    <div class="card-body">
                        <div class="table-responsive" style="overflow-y:scroll;">
                        <table class="table table-sm table-bordered table-hover text-center">
                        <thead class="bg-success text-white">
                        <tr><th>PLACE<th>Location<th>DURATION<th>AMOUNT<th>IMAGE<th>UPDATE<th>Remove</tr>
                    </thead>
                <?php 
                $sqlis="select *from island";
                if($resis=$con->query($sqlis))
                {
                    if($resis->num_rows>0)
            {
                while($rowis=$resis->fetch_array())
                {
                echo '<tbody> 
                <tr><td>'.$rowis[0].'<td>'.$rowis[1].'<td>'.$rowis[2].'<td>'.$rowis[3].'<td>
                <img src="./image/'.$rowis[4].'" width=40 height=40>'.'
                <td><form method="post" action="updatepackages.php">
                                                <input type="hidden" name="update" value="'.$rowis[0].'">
                                                <input type="hidden" name="tab" value="island">
                                                <input type="hidden" name="plname" value="'.$rowis[0].'">
                                                <input type="hidden" name="locat" value="'.$rowis[1].'">
                                                <input type="hidden" name="duration" value="'.$rowis[2].'">
                                                <input type="hidden" name="amount" value="'.$rowis[3].'">
                                                <input type="hidden" name="img" value="'.$rowis[4].'">
                                                <input type="hidden" name="about" value="'.$rowis[5].'">
                                                 <button type="submit" id="can" class="btn btn-primary">
                                                <i class="fas fa-pen"></i></button>
                                                </form>
                <td><form method="post" action="delete_adv_package.php">
                <input type="hidden" name="delete_rows" value="'. $rowis[0].'">
                                <button type="submit" id="can" class="btn btn-danger cancel-button">
                                <i class="fas fa-times"></i></button>
                    </form></tr>
                </tbody>';
                }
            }
        }
                ?> 
            
            </table>
        </div>
        </div>
      </div>
        </div>



        </div>
        <div class="row">
        <div class="col-lg-6 col-12">
            <div class="card mt-5">
                <div class="card-header text-center text-light adpack"><h4>RELIGION PACKAGES</h4></div>
                    <div class="card-body">
                        <div class="table-responsive" style="overflow-y:scroll;">
                        <table class="table table-sm table-bordered table-hover text-center">
                        <thead class="bg-success text-white">
                        <tr><th>PLACE<th>Location<th>DURATION<th>AMOUNT<th>IMAGE<th>UPDATE<th>Remove</tr>
                    </thead>
                <?php 
                $sqlrel="select *from religion";
                if($resrel=$con->query($sqlrel))
                {
                    if($resrel->num_rows>0)
            {
                while($rowre=$resrel->fetch_array())
                {
                echo '<tbody> 
                <tr><td>'.$rowre[0].'<td>'.$rowre[1].'<td>'.$rowre[3].'<td>'.$rowre[4].'<td>
                <img src="./image/'.$rowre[5].'" width=40 height=40>'.'
                <td><form method="post" action="updatepackages.php">
                                                <input type="hidden" name="update" value="'.$rowre[0].'">
                                                <input type="hidden" name="tab" value="religion">
                                                <input type="hidden" name="plname" value="'.$rowre[0].'">
                                                <input type="hidden" name="locat" value="'.$rowre[1].'">
                                                <input type="hidden" name="duration" value="'.$rowre[3].'">
                                                <input type="hidden" name="amount" value="'.$rowre[4].'">
                                                <input type="hidden" name="img" value="'.$rowre[5].'">
                                                <input type="hidden" name="about" value="'.$rowre[6].'">
                                                 <button type="submit" id="can" class="btn btn-primary">
                                                <i class="fas fa-pen"></i></button>
                                                </form>
                <td><form method="post" action="delete_reli_package.php">
                <input type="hidden" name="delete_rows" value="'. $rowre[0].'">
                                <button type="submit" id="can" class="btn btn-danger cancel-button">
                                <i class="fas fa-times"></i></button>
                    </form></tr>
                </tbody>';
                }
            }
        }
                ?> 
            
            </table>
        </div>
        </div></div>
        </div>
        <div class="col-lg-6 col-12">
            <div class="card mt-5">
                <div class="card-header text-center text-light adpack"><h4>BEACH PACKAGES</h4></div>
                    <div class="card-body">
                        <div class="table-responsive" style="overflow-y:scroll;">
                        <table class="table table-sm table-bordered table-hover text-center">
                        <thead class="bg-success text-white">
                        <tr><th>PLACE<th>Location<th>DURATION<th>AMOUNT<th>IMAGE<th>UPDATE<th>Remove</tr>
                    </thead>
                <?php 
                $sqlbe="select *from beach";
                if($resbe=$con->query($sqlbe))
                {
                    if($resbe->num_rows>0)
            {
                while($rowbe=$resbe->fetch_array())
                {
                echo '<tbody> 
                <tr><td>'.$rowbe[0].'<td>'.$rowbe[1].'<td>'.$rowbe[2].'<td>'.$rowbe[3].'<td>
                <img src="./image/'.$rowbe[4].'" width=40 height=40>'.'
                <td><form method="post" action="updatepackages.php">
                                                <input type="hidden" name="update" value="'.$rowbe[0].'">
                                                <input type="hidden" name="tab" value="beach">
                                                <input type="hidden" name="plname" value="'.$rowbe[0].'">
                                                <input type="hidden" name="locat" value="'.$rowbe[1].'">
                                                <input type="hidden" name="duration" value="'.$rowbe[2].'">
                                                <input type="hidden" name="amount" value="'.$rowbe[3].'">
                                                <input type="hidden" name="img" value="'.$rowbe[4].'">
                                                <input type="hidden" name="about" value="'.$rowbe[5].'">
                                                 <button type="submit" id="can" class="btn btn-primary">
                                                <i class="fas fa-pen"></i></button>
                                                </form>
                <td><form method="post" action="delete_beach_package.php">
                <input type="hidden" name="delete_rows" value="'. $rowbe[0].'">
                                <button type="submit" id="can" class="btn btn-danger cancel-button">
                                <i class="fas fa-times"></i></button>
                    </form></tr>
                </tbody>';
                }
            }
        }
                ?> 
            
            </table>
        </div>
        </div>
        </div>
            </div>
            </div>
    </div>
    <!-- Feedbacks and Enquiries -->
    <div class="tab-pane" style="border-color:red;" id="feedback">
    <!-- Enquiries -->
        <div class="row mt-5">
            <div class="col">
                <div class="card">
                    <div class="card-header text-center bg-primary text-light">
                    <h2><i class="fas fa-comment text-dark"></i> ENQUIRIES</h2>
                    </div>
                    <div class="card-body">
                    <div class="table-responsive" style="overflow-y:scroll;">
                                <table class="table table-sm table-bordered table-hover text-center">
                                <thead class="bg-success text-white">
                                <tr><th>NAME<th>EMAIL<th>PHONE<th>ENQUIRIES<th>REPLY<th>SEND</tr>
                            </thead>
                        <?php 
                        $sqlfe="select distinct uname,email,phone,enquiry from enquiry where enquiry != 'NULL' group by uname";
                        if($resfe=$con->query($sqlfe))
                        {
                            if($resfe->num_rows>0)
                    {
                        while($rowf=$resfe->fetch_array())
                        {
                        echo '<tbody> 
                        <tr><td>'.$rowf[0].'</td><td>'.$rowf[1].'</td><td>'.$rowf[2].'</td><td class="feedback">'.$rowf[3].'</td>
                        <td><form method="post" action="enqusend.php">
                        <input type="hidden" name="uname" value="'.$rowf[0].'">
                        <input type="text" name="msg" class="form-control" required=""></td><td><button type="submit" class="btn btn-block btn-primary"><i class="fas fa-check-circle"></i>SEND</button>
                        </form></td>
                
                        </tr>
                        </tbody>';
                        }
                    }
                }
                        ?> 


        <script>
           function view(button) 
            {            
                var row = button.parentNode.parentNode;
                var feedback = row.querySelector('.feedback');    
                var fb=row.querySelector('.fb');
                if(fb.style.display==="block") 
                {
                    fb.style.display="none";
                    feedback.style.display="table-cell"
                }                           
                else{
                    fb.style.display="block";
                    feedback.style.display="none";
                }        
            }
                </script>
                    </table></div>
                    </div>
                </div>
            </div>
        </div><br><br><br>
        <div class="row mt-5">
            <div class="col">
                <div class="card">
                    <div class="card-header text-center bg-primary text-light">
                    <h2><i class="fas fa-comment text-dark"></i> FEEDBACKS</h2>
                    </div>
                    <div class="card-body">
                    <div class="table-responsive" style="overflow-y:scroll;">
                                <table class="table table-sm table-bordered table-hover text-center">
                                <thead class="bg-success text-white">
                                <tr><th>NAME<th>EMAIL<th>PHONE<th>FEEDBACK<th>VIEW</tr>
                            </thead>
                        <?php 
                        $sqlfe="select name,email,phone,feedback from feedback where feedback!= 'Null' group by name";
                        if($resfe=$con->query($sqlfe))
                        {
                            if($resfe->num_rows>0)
                    {
                        while($rowf=$resfe->fetch_array())
                        {
                        echo '<tbody> 
                        <tr><td>'.$rowf[0].'</td><td>'.$rowf[1].'</td><td>'.$rowf[2].'</td><td class="fb">*************</td><td class="feedback" style="display:none;">'.$rowf[3].'</td>
                        <td><button onclick="view(this)" style="border:none;background:none;"><i class="fas fa-eye text-primary"></i></button></td></tr>
                        </tbody>';
                        }
                    }
                }
                        ?> 


        <script>
           function view(button) 
            {            
                var row = button.parentNode.parentNode;
                var feedback = row.querySelector('.feedback');    
                var fb=row.querySelector('.fb');
                if(fb.style.display==="block") 
                {
                    fb.style.display="none";
                    feedback.style.display="table-cell"
                }                           
                else{
                    fb.style.display="block";
                    feedback.style.display="none";
                }        
            }
                </script>
                    </table></div>
                    </div>
                </div>
            </div>
        </div><br><br><br><br><br><br><br>
    </div>

    <!--Admin management-->
    <div class="tab-pane show" style="border-color:red;" id="admindetails">
            <?php
            $counad="select count(*) as to_book from admin";
            if($resad=$con->query($counad))
            {
            $rowad=$resad->fetch_assoc();
            $tota=$rowad['to_book'];
            }
            else{
                $tota=0;
            }
            ?>                 
                                
            <div class="row mt-2 justify-content-center">
                        <div class="col-lg-6 col-12">
                                    <div class="card-body w-100">
                                <h4 class="text-primary text-center"><i class="fas fa-user text-danger"></i> TOTAL ADMINS</h4>
                                <h3 class="text-danger text-center" data-toggle="counter-up"><?php echo $tota; ?></h3>
                                </div> 
                        </div>
                        <div class="col-lg-6 col-12">
                                    <div class="card-body w-100">
                                <h4 class="text-primary text-center"><i class="fas fa-user text-danger"></i>TOURISM MANAGER :  <i class="text-secondary"><?php echo $adminname; ?></i></h4>
                                <h3 class="text-primary text-center" data-toggle="counter-up"><i class="fas fa-envelope text-danger"></i>E-mail ID : <i class="text-secondary"> surya2148@gmail.com </i></h3>
                                </div> 
                        </div>

            </div>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <div class="row justify-content-center">
                <div class="col-lg-6 col-12">
                    <div class="card mt-5" style="background:none;">
                        <div class="card-header text-center text-dark bg-info data"><h4>
                        <i class="fas fa-users"></i> ADMINS LIST</h4></div>
                            <div class="card-body">
                                <div class="table-responsive" style="overflow-y:scroll;">
                                <table class="table table-sm table-bordered table-hover text-center">
                                <thead class="bg-success text-white">
                                <tr><th>NAME<th>EMAIL<th>PHONE<th>PASSWORD<th>Remove</tr>
                            </thead>
                        <?php 
                        $sqlad="select name,email,phone,password from admin where email!='surya2148@gmail.com' ";
                        if($resad=$con->query($sqlad))
                        {
                            if($resad->num_rows>0)
                    {
                        while($rowa=$resad->fetch_array())
                        {
                        echo '<tbody> 
                        <tr><td>'.$rowa[0].'<td>'.$rowa[1].'<td>'.$rowa[2].'<td>'.$rowa[3].'<td><form method="post" action="delet_admin.php">
                        <input type="hidden" name="delete_rows" value="'. $rowa[0].'">
                        <input type="hidden" name="email" value="'.$adminemail.'">
                                        <button type="submit" id="can" class="btn btn-danger cancel-button">
                                        <i class="fas fa-times"></i></button>
                            </form></tr>
                        </tbody>';
                        }
                    }
                }
                        ?> 
                    
                    </table></div>
            </div></div></div>
            <div class="col-lg-5 col-12">
                                        <div class="card mt-5" style="background:none;">
                                        <div class="card-header bg-primary text-center text-dark data">
                                            <h4><i class="fas fa-users"></i> ADD ADMINS</h4></div>
                                        <div class="card-body">
                                            <form action="adminlogin.php" method="post" class="needs-validation" novalidate>
                                            <label for="name">Name : </label>
                                            <input type="text" name="siname" class="form-control" style="background:none;" required="">
                                            <label for="email">E-mail : </label>
                                            <input type="email" name="siemail" id="amail" oninput="avalidate()"style="background:none;" class="form-control" required="">
                                            <div class="valid-feedback" id="av"></div>
                                            <div class="invalid-feedback" id="aiv">Invalid</div>
                                            <label for="phone">Phone number: </label>
                                            <input type="number" name="siphone" id="pho" oninput="phone()"style="background:none;" class="form-control" required="">
                                            <div class="valid-feedback" id="phv"></div>
                                            <div class="invalid-feedback" id="phiv">Invalid</div>
                                            <label for="pass">password : </label><br>
                                            <input type="password" name="sipass" style="background:none;" class="form-control" required="">
                                            <div class="card-footer justify-content-center">
                                                <button type="submit" id="asubm" class="btn btn-primary btn-block text-center">submit</button>
                                            </div>
                                                </form> 
                                                </div>
                                            </div>
                                    </div>                     

                                </div>

                                
                                    

                    </div>

        </div>
</div>
<script>
      function phones()
      {
         console.log("Phone function called");
         let ph=document.getElementById("phone");
         let piv=document.getElementById("piv");
         let su=document.getElementById("subm");
         if(ph.value.length===10)
         {
             
             ph.classList.remove("is-invalid");
             piv.style.display="none";
             su.disabled=false;
         }
         else{
            ph.classList.add("is-invalid");
            piv.style.display="block";
             su.disabled=true;
         }
      }
      function phone()
      {
         console.log("Phone function called");
         let aph=document.getElementById("pho");
         let apv=document.getElementById("phv");
         let apiv=document.getElementById("phiv");
         let asu=document.getElementById("asubm");
         if(aph.value.length===10)
         {
             aph.classList.add("is-valid");
             aph.classList.remove("is-invalid");
             apiv.style.display="none";
             apv.style.display="block";
             asu.disabled=false;
         }
         else{
            aph.classList.add("is-invalid");
            aph.classList.remove("is-valid");
            apiv.style.display="block";
            apv.style.display="none";
             asu.disabled=true;
         }
      }
      function passwords()
      {
                  let sn=document.getElementById("pas");
                  let sva=document.getElementById("spv")
                  let siva=document.getElementById("spiv");
                  let usub=document.getElementById("subm");
                  if(sn.value.length>8)
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
    
    function evalidate()
        {
        let up=document.getElementById("mail");
    
        let uiva=document.getElementById("eiv");
        let pay=document.getElementById("subm");
        if(up.value.length>0 && up.value.includes('@'))
        {
            
            up.classList.remove("is-invalid");            
            uiva.style.display="none";
            pay.disabled=false;
        }
        else{
            up.classList.add("is-invalid");            
            uiva.style.display="block";
            pay.disabled=true;
            
        }
        }
    
        function avalidate()
        {
        let up=document.getElementById("amail");
        let uva=document.getElementById("av");
        let uiva=document.getElementById("aiv");
        let pay=document.getElementById("asubm");
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