<?php
session_start();
if(!isset($_SESSION['sess']))
{
header("location:../index.php");
}
?>


<!--

=========================================================
* Argon Dashboard - v1.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2019 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
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
     <style>
    table
        {
            font-family: Times New Roman; 
            color: black;
            font-size: 20px;
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

             <?php

if(!isset($_SESSION['sess']))
{
header("location:index.php");
}

include("connection.php");
$a=$_SESSION['sess'];
    $a=$_GET['b'];
$sql="select * from registration where username='$a' and user_type=3";
$exe=mysqli_query($con,$sql);
$sql2="select * from school_reg where username='$a'";
$exe2=mysqli_query($con,$sql2);
$sql3="select * from fee where username='$a'";
$exe3=mysqli_query($con,$sql3);    
    

?>

<center><h2 style="color:blue"><b style="font-size:25px;">VIEW DETAILS</b></h2></center>
<form method="POST">
    <center><br><br>
				<center><table class="table table-striped">
					                         
						 <?php
						while($fetch=mysqli_fetch_array($exe))
						{
							?>
                    <tr><td></td><td></td><td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="../images/<?php echo $fetch['image']?>" width="200px" height="200px"></td></tr>
                    <tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td align="right"><b style="font-size:20px;">Name :</b></td><td style="font-size:15px;"><?php echo $fetch['name']?>
                                    </td>
						</tr>
                     <tr><td></td><td></td><td align="right"><b style="font-size:20px;">Username :</b></td><td style="font-size:15px;"><?php echo $fetch['username']?>
                                  
                                   </td>
							</tr>
                <tr><td></td><td></td><td align="right"><b style="font-size:20px;">Password :</b></td><td style="font-size:15px;"><?php echo $fetch['password']?>
                                  
                                   </td>
							</tr>
                    <tr><td></td><td></td><td align="right"><b style="font-size:20px;">House Name :</b></td><td style="font-size:15px;"><?php echo $fetch['hname']?>
                                  
                                   </td>
							</tr>
                    <tr><td></td><td></td><td align="right"><b style="font-size:20px;">Place :</b></td><td style="font-size:15px;"><?php echo $fetch['place']?>
                                  
                                   </td>
							</tr>
                    <tr><td></td><td></td><td align="right"><b style="font-size:20px;">District :</b></td><td style="font-size:15px;"><?php echo $fetch['dis']?>
                                  
                                   </td>
							</tr>
                    <tr><td></td><td></td><td align="right"><b style="font-size:20px;">Pincode :</b></td><td style="font-size:15px;"><?php echo $fetch['pin']?>
                                  
                                   </td>
							</tr>
                    
                    
                     <tr><td></td><td></td><td align="right"><b style="font-size:20px;">Phone :</b></td><td style="font-size:15px;"><?php echo $fetch['phone']?>
                                  
                                   </td>
							</tr>
                    
                    
                    <?php
                    while($fetch3=mysqli_fetch_array($exe3))
						{
							?>
                    <tr><td></td><td></td><td colspan="2" align="center"><b style="font-size:20px;">Fee Details </b></td>
							</tr>
                    <tr><td></td><td></td><td align="right"><b style="font-size:20px;">Learners :</b></td><td style="font-size:15px;"><?php echo $fetch3['Learners']?>
                                  
                                   </td>
							</tr>
                    <tr><td></td><td></td><td align="right"><b style="font-size:20px;">Learners and Advanced :</b></td><td style="font-size:15px;"><?php echo $fetch3['Learners_n_Advanced']?>
                                  
                                   </td>
							</tr>
                    <tr><td></td><td></td><td align="right"><b style="font-size:20px;">Advanced :</b></td><td style="font-size:15px;"><?php echo $fetch3['Advanced']?>
                                  
                                   </td>
							</tr>
                    <tr><td></td><td></td><td align="right"><b style="font-size:20px;">Driving Test :</b></td><td style="font-size:15px;"><?php echo $fetch3['Driving_test']?>
                                  
                                   </td>
							</tr>
                     <?php }?>
                    
                      <?php
                    while($fetch2=mysqli_fetch_array($exe2))
						{
							?>
                    
                    <tr><td></td><td></td><td align="right"><b style="font-size:20px;">License   :</b></td>
                   <td> <img src="../images/<?php echo $fetch2['license']?>" width="200px" height="200px">
                                    </td>
						</tr>
                    
                    
                    <tr><td></td><td></td><td colspan="2"> 
<a href="school_edit.php?b=<?php echo $a;?>"><font color="red"><b style="font-size:25px;font-family:Algerian;">Edit</b></font></a>
</td><td></td></tr>
                    
     <?php }?>
                    
       
								<?php
                        }
						
mysqli_close($con );
						?>
					
    		</table>
    </center>
              </form>
              
    
    
</head>

<body>
   
              

<style>
 input
                {
                   padding: 5px;
  width: 30%;
  font-size: 14px;
    border-radius: 5px;
        color:gray;
  font-family: Raleway;
  border: 1px solid #aaaaaa;  
                }
    .collapse navbar-collapse
    {
        background-color: aqua;
    }
            </style>


</head>

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