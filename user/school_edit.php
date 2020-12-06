<?php
session_start();
if(!isset($_SESSION['sess']))
{
header("location:../index.php");
}
include("connection.php");
$a=$_SESSION['sess'];
    $a=$_GET['b'];
$sql="select * from registration where username='$a' and user_type=3";
$exe=mysqli_query($con,$sql);
$sql3="select * from fee where username='$a'";
$res3=mysqli_query($con,$sql3);

  
if(isset($_POST['submit']))
{
 
$b=$_POST['name']; 

$g=$_POST['username'];    
$h=$_POST['password'];
   
$w=$_POST['hname'];
$x=$_POST['place'];
$y=$_POST['dis'];
$z=$_POST['pin'];

$e=$_POST['phone'];   
$f1=$_POST['Learners'];
$f2=$_POST['Advanced'];
$f3=$_POST['Learners_n_Advanced'];
$f4=$_POST['Driving_test'];
    
  

   
    
 $sql89="update registration set hname='$w',place='$x',dis='$y',pin='$z' ,phone='$e' where username='$a'";
 $sql90="update fee set Learners='$f1', Advanced='$f2',Learners_n_Advanced='$f3',Driving_test='$f4' where username='$f'";
    
 
    if(mysqli_query($con,$sql89))
    {
          echo "<script>";echo "alert('Successfully updated!')";echo"</script>";
         echo "<script>";
        echo("'location.href='view_studlist.php'");
        echo"</script>";
    }
}
?>

<!doctype html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
   DriveOn
  </title>
  <!-- Favicon -->
  <link href="./assets/img/brand/favicon.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="./assets/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
  <link href="./assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="./assets/css/argon-dashboard.css?v=1.1.0" rel="stylesheet" />
</head>

<body class="">
  <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      <a class="navbar-brand pt-0" href="./index.php">
        <img src="./assets/img/brand/driveon.png" class="navbar-brand-img" alt="...">
      </a>
      <!-- User -->
      <ul class="nav align-items-center d-md-none">
        <li class="nav-item dropdown">
          <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ni ni-bell-55"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="media align-items-center">
              <span class="avatar avatar-sm rounded-circle">
                <img alt="Image placeholder" src="./assets/img/brand/admin12.jpg">
              </span>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
            <div class=" dropdown-header noti-title">
              <h6 class="text-overflow m-0">Welcome!</h6>
            </div>
            <a href="index.php" class="dropdown-item">
              <i class="ni ni-single-02"></i>  
              <span>My profile</span>
            </a>
          <!--  <a href="#" class="dropdown-item">
              <i class="ni ni-settings-gear-65"></i>
              <span>Settings</span>
            </a>-->
        
            <div class="dropdown-divider"></div>
            <a href="logout.php" class="dropdown-item">
              <i class="ni ni-user-run"></i>
              <span>Logout</span>
            </a>
          </div>
        </li>
      </ul>
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Collapse header -->
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="./index.html">
                <img src="./assets/img/brand/blue.png">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <!-- Form -->
        <form class="mt-4 mb-3 d-md-none">
          <div class="input-group input-group-rounded input-group-merge">
            <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <span class="fa fa-search"></span>
              </div>
            </div>
          </div>
        </form>
        <!-- Navigation -->
        <ul class="navbar-nav ">
          <li class="nav-item  class=" active" ">
          <a class=" nav-link active " href=" ./index.php"> <i class="ni ni-tv-2 text-primary"></i> Admin Home
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="student_approve.php">
              <i  class="ni ni-single-02 text-green"></i> Approve Student
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="school_approve.php">
              <i  class="ni ni-single-02 text-yellow"></i> Approve School
            </a>
          </li>
            <li class="nav-item">
            <a class="nav-link " href="active_user.php">
              <i  class="ni ni-single-02 text-blue"></i> Active Students
            </a>
          </li>
             <li class="nav-item">
            <a class="nav-link " href="active_school.php">
              <i  class="ni ni-single-02 text-blue"></i> Active Schools
            </a>
          </li>
              <li class="nav-item">
            <a class="nav-link " href="blocked_users.php">
              <i  class="ni ni-single-02 text-blue"></i> Blocked Students
            </a>
          </li>
            <li class="nav-item">
            <a class="nav-link " href="blocked_school.php">
              <i  class="ni ni-single-02 text-blue"></i> Blocked Schools
            </a>
          </li>
           
          <!--   <li class="nav-item">
            <a class="nav-link " href="user_view.php">
              <i  class="ni ni-single-02 text-blue"></i>View Users
            </a> -->
          </li>
           <li class="nav-item">
            <a class="nav-link " href="change_pwd.php">
             <i class="ni ni-settings-gear-65"></i> Change password
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="">
             <i class="ni ni-bell-55"></i> Notification
            </a>
          </li>
        
        <!-- Divider -->
       
      </div>
    </div>
  </nav>
  <div class="main-content">
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="./index.php">Admin Home</a>
        <!-- Form -->
        <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
          <div class="form-group mb-0">
            <div class="input-group input-group-alternative">
             
            </div>
          </div>
        </form>
        <!-- User -->
        <ul class="navbar-nav align-items-center d-none d-md-flex">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
               <span class="avatar avatar-sm rounded-circle">
                  <img alt="" src="./assets/img/brand/admin12.jpg">
                </span>
                <div class="media-body ml-2 d-none d-lg-block">
                  <span class="mb-0 text-sm  font-weight-bold text-white">Admin</span>
                </div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <div class=" dropdown-header noti-title">
                <h6 class="text-overflow m-0">Welcome!</h6>
              </div>
              <a href="./index.php" class="dropdown-item">
                <i class="ni ni-single-02"></i>
                <span>My profile</span>
              </a>
             
            
              <div class="dropdown-divider"></div>
              <a href="logout.php" class="dropdown-item">
                <i class="ni ni-user-run"></i>
                <span>Logout</span>
              </a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <!-- End Navbar -->
    <!-- Header -->
    <div class="header bg-gradient-dark pb-8 pt-5 pt-md-8">
      <div class="container-fluid">
        <div class="header-body">
          <!-- Card stats -->
          <div class="row">
            <div class="col-xl-3 col-lg-6">
             
            </div>
            <div class="col-xl-3 col-lg-6">
             
            </div>
            <div class="col-xl-3 col-lg-6">
              
            </div>
            <div class="col-xl-3 col-lg-6">
             
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid mt--7">
      <div class="row">
        <div class="col-xl-12 mb-2 mb-xl-0">
         
          <div class="card shadow">
            <div class="card-header bg-transparent">
              <div class="row align-items-center">
                
              </div>
            </div>

       
<style>
 input
                {
                   padding: 5px;
  width: 30%;
  font-size: 14px;
    border-radius: 5px;
        color:gray;
  font-family: Times New Roman;
  border: 1px solid #aaaaaa;  
    }
    .row
        {
            font-family: Times New Roman; 
            color: black;
        }
        tr
            {
             background-color: azure;   
            }
        h2
        {
         font-family: Times New Roman; 
            color: black;   
        }
    

            </style>

<!--<center><h2 style="color:blue"><b style="font-size:25px;">Add Trainer</b></h2></center>
              
<form method="POST" action="">-->
    <center> <div class="box">

<fieldset  id="fi"    style="width:600px; color:black; border-color: white;">
<legend></legend>
<form name="form1"  class="form" onsubmit="return validation()"  enctype="multipart/form-data"  style="max-width:500px; margin:auto" method="post">
  <center><h2>EDIT PROFILE</h2></center>
  <br>

    
      <?php
                               while($fetch=mysqli_fetch_array($exe))
                               {
                                ?>
    
  <div class="row">
    <p><div class="name">Name</div><input class="input-field col-md-12" type="text" placeholder=" " name="name" id="name" value="<?php echo $fetch['name']?>"
                                          name="user_bio" id="user_bio"   onchange="validatetxt()"  readonly  required>

			            <label class="errortext" style="display:nne; size:10PX; color:red" id="name"></label><br>
                                          
                                          </div>
                                          <br>
                    
        <div class="row">
    <p><div class="username">Email</div><input class="input-field col-md-12" type="text" placeholder=" " name="username" id="username" value="<?php echo $fetch['username']?>" name="user_bio" id="user_bio"   onchange="validatetxt()" readonly required>

			            <label class="errortext" style="display:nne; size:10PX; color:red" id="email"></label><br>
                                          
                                          </div>
                                          <br>
        
        <div class="row">
    <p><div class="address">House Name</div><input class="input-field col-md-12" type="text" placeholder=" " name="hname" id="hname" value="<?php echo $fetch['hname']?>"  name="user_bio" id="user_bio"   onchange="validatetxt()"required>

			            <label class="errortext" style="display:nne; size:10PX; color:red" id="address"></label><br>
                                          
                                            </p>
                                          </div>
                                          <br>
    <div class="row">
    <p><div class="address">Place</div><input class="input-field col-md-12" type="text" placeholder=" " name="place" id="place" value="<?php echo $fetch['place']?>"  name="user_bio" id="user_bio"   onchange="validatetxt()"required>

			            <label class="errortext" style="display:nne; size:10PX; color:red" id="address"></label><br>
                                          
                                            </p>
                                          </div>
                                          <br>
    <div class="row">
    <p><div class="address">District</div><input class="input-field col-md-12" type="text" placeholder=" " name="dis" id="dis" value="<?php echo $fetch['dis']?>"  name="user_bio" id="user_bio"   onchange="validatetxt()"required>

			            <label class="errortext" style="display:nne; size:10PX; color:red" id="address"></label><br>
                                          
                                            </p>
                                          </div>
                                          <br>
<div class="row">
    <p><div class="address">Pincode</div><input class="input-field col-md-12" type="text" placeholder=" " name="pin" id="pin" value="<?php echo $fetch['pin']?>"  name="user_bio" id="user_bio"   onchange="validatetxt()"required>

			            <label class="errortext" style="display:nne; size:10PX; color:red" id="address"></label><br>
                                          
                                            </p>
                                          </div>
                                          <br>
        
        <div class="row">
    <p><div class="phone">Phone</div><input class="input-field col-md-12" type="text" placeholder=" " name="phone" id="phone" value="<?php echo $fetch['phone']?>"
                                          name="user_bio" id="user_bio"   onchange="validatetxt()"required>

			            <label class="errortext" style="display:nne; size:10PX; color:red" id="phone"></label><br>
                                          

                                            </p>
                                          </div>
                              

 <?php 
                               }
    ?>
                                          <br>

 <?php
                               while($fetch2=mysqli_fetch_array($res3))
                               {
                                ?>

 <div class="row">
    <p><div class="Learners">Learners</div><input class="input-field col-md-12" type="text" placeholder=" " name="Learners" id="Learners" value="<?php echo $fetch2['Learners']?>"
                                          name="user_bio" id="user_bio"   onchange="validatetxt()"required>

			            <label class="errortext" style="display:nne; size:10PX; color:red" id="Learners"></label><br>
                                          

                                            </p>
                                          </div>
                                          <br>
 <div class="row">
    <p><div class="Advanced">Advanced</div><input class="input-field col-md-12" type="text" placeholder=" " name="Advanced" id="Advanced" value="<?php echo $fetch2['Advanced']?>"
                                          name="user_bio" id="user_bio"   onchange="validatetxt()"required>

			            <label class="errortext" style="display:nne; size:10PX; color:red" id="Advanced"></label><br>
                                          

                                            </p>
                                          </div>
                                          <br>
 <div class="row">
    <p><div class="Learners_n_Advanced">Learners and Advanced</div><input class="input-field col-md-12" type="text" placeholder=" " name="Learners_n_Advanced" id="Learners_n_Advanced" value="<?php echo $fetch2['Learners_n_Advanced']?>"
                                          name="user_bio" id="user_bio"   onchange="validatetxt()"required>

			            <label class="errortext" style="display:nne; size:10PX; color:red" id="Learners_n_Advanced"></label><br>
                                         
                                          </div>
                                          <br>
 <div class="row">
    <p><div class="Driving_test">Driving Test</div><input class="input-field col-md-12" type="text" placeholder=" " name="Driving_test" id="Driving_test" value="<?php echo $fetch2['Driving_test']?>"
                                          name="user_bio" id="user_bio"   onchange="validatetxt()"required>

			            <label class="errortext" style="display:nne; size:10PX; color:red" id="Driving_test"></label><br>
                                          
                                          </div>
                                          <br>
<?php 
                               }
    ?>


     <div class="input-container">

      <button type="submit" class="btn btn-primary" name="submit"  value="POST"><b>Update</b></button>

        

</div>
                                                                                                                    
               
        			</form>
</fieldset>
		
</body>
</html>

              
              
              
          </div>
        </div>
      </div>
     <!-- <div class="row mt-5">
       
        
     <!-- <div class="row mt-5">
       
        <div class="col-xl-4">
         
        </div>
      </div> -->

    
    
    
</head>

<body>
    <div class="row mt-5">
       
        <div class="col-xl-4">
         
        </div>
      </div>
      <!-- Footer -->
      <footer class="footer">
        <div class="row align-items-center justify-content-xl-between">
          <div class="col-xl-6">
            <div class="copyright text-center text-xl-left text-muted">
              &copy; 2018 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">DriveOn</a>
            </div>
          </div>
          <div class="col-xl-6">
            <ul class="nav nav-footer justify-content-center justify-content-xl-end">
              <li class="nav-item">
                <a href="https://www.creative-tim.com" class="nav-link" target="_blank">DriveOn</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
              </li>
              <li class="nav-item">
                <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
              </li>
              <li class="nav-item">
                <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
              </li>
            </ul>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core   -->
  <script src="./assets/js/plugins/jquery/dist/jquery.min.js"></script>
  <script src="./assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!--   Optional JS   -->
  <script src="./assets/js/plugins/chart.js/dist/Chart.min.js"></script>
  <script src="./assets/js/plugins/chart.js/dist/Chart.extension.js"></script>
  <!--   Argon JS   -->
  <script src="./assets/js/argon-dashboard.min.js?v=1.1.0"></script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-dashboard-free"
      });
  </script>
</body>

</html>