<?php
session_start();
if(!isset($_SESSION['sess']))
{
header("location:../index.php");
}
?>

<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <title>DriveOn</title>
     <link rel="stylesheet" href="css/3dslider.css" />
   <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
   <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
   <script src="js/3dslider.js"></script>
    <br>
    <br>
    <center><h2 style="color:blue">ADD VEHICLE</h2></center>
   
<?php
include("connection.php");

  $user=$_SESSION['sess'];            
 if(isset($_POST["submit"]))
  {
      
      $veh_name=$_POST['veh_name'];
      $veh_type=$_POST['veh_type'];
      
     

   $sql=mysqli_query ($con,"INSERT INTO  `smartdrive`.`vehicle` (
`veh_id` ,
`school_id` ,
`veh_name` ,
`veh_type` ,
`status`
)
VALUES (
NULL ,  '$user',  '$veh_name',  '$veh_type',  '1'
)");
      
  if($sql==true)
  { ?>
          <script>
          alert("Vehicle Added Successfully!!!");

          </script>
          <?php


  }
  else {
    ?>
            <script>
            alert(" failed!!!");

            </script>
            <?php
    echo mysqli_connect_error();
    // code...
  }
}
 ?>
      
        
<style>
 input
                {
                   padding: 5px;
  width: 30%;
  font-size: 14px;
    border-radius: 5px;
        color:skyblue;
  font-family: Times New Roman; 
  border: 1px solid #aaaaaa;  
                }
    body
    {
     background-image: url(assets/images/p3.jpg)  ; 
        background-repeat: no-repeat;
    }
    .row
    {
    color: black;
    font-size: 25px;
        font-family: Times New Roman; 
    }
    h1
    {
        color: navy;
        font-weight: bold;
        font-size: 40px;
        font-family: Times New Roman; 
    }
    .button
    {
        background-color: aqua;
        color: blue;
    }
    </style> 


    
       <?php

if(!isset($_SESSION['sess']))
{

header("location:index.php");
}


$user=$_SESSION['sess'];

  $sql="select * from registration where user_type='3' and username='$user'";
                             $exe=mysqli_query($con,$sql);
//$sl="select player_name,dob,mobile from team_player  where tid='$a'";
//$row=mysqli_query($con,$sl);
?>
    
    <center> <div class="box">

<fieldset  id="fi"    style="width:600px; color:black; border-color: white;">
<legend></legend>
<form name="form1"  class="form" onsubmit="return validation()"  enctype="multipart/form-data"  style="max-width:500px; margin:auto" method="post">
  <center><h1>ADD VEHICLE</h1></center>
  <br>
    
 
    
						 <?php
						while($fetch=mysqli_fetch_array($exe))
						{
                          
							?>
  <div class="row">
    <p><div class="school_id">School</div><input class="input-field col-md-12" type="text" placeholder=" " name="school_id" id="school_id"
                                          name="user_bio" id="user_bio"   onchange="validatetxt()" value=<?php echo $fetch['name']?> readonly required>
                              
      
			            <label class="errortext" style="display:nne; size:10PX; color:red" id="school_id"></label><br>
                                            </p>
                                          </div>
                                      <br>
                     
    
 <div class="row">
    <p><div class="veh_name">Vehicle Number</div><input class="input-field col-md-12" type="text" placeholder=" " name="veh_name" id="veh_name"
                                          name="user_bio" id="user_bio"   onchange="validatetxt()" required>

			            <label class="errortext" style="display:nne; size:10PX; color:red" id="veh_name"></label><br>
                                          

                                            </p>
                                          </div>
                                          <br>

       
                                          
<div class="row">
    <p><div class="veh_type">Vehicle Type</div><input class="input-field col-md-12" type="text" placeholder=" " name="veh_type" id="veh_type"
                                          name="user_bio" id="user_bio"   onchange="validatetxt()" required>

			            <label class="errortext" style="display:nne; size:10PX; color:red" id="veh_type"></label><br>
                                          

                                            </p>
                                          </div>
                                          <br>

                                          <br>
     <div class="input-container">
   <?php }?> 
      <input type="submit" class="button" name="submit"  value="SUBMIT">
</div>
                                                                                                                    
               
        			</form>
</fieldset>
		
</body>
</html>

              
              
              
          </div>
        </div>
      </div>
     
    
    
    
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="index.html">DriveOn</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item">
                            <div id="custom-search" class="top-search-bar">
                                <input class="form-control" type="text" placeholder="Search..">
                            </div>
                        </li>
                        <li class="nav-item dropdown notification">
                            <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-bell"></i> <span class="indicator"></span></a>
                            <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                              
                                <li>
                                    <div class="list-footer"> <a href="#">View all notifications</a></div>
                                </li>
                            </ul>
                        </li>
                     
                        
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/<?php echo $fetch['image'];?>" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                 <div class="nav-user-info">
                                  
                                    
                                </div>
                                <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Account</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Setting</a>
                                <a class="dropdown-item" href="logout.php"><i class="fas fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li> 
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-light">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-dark">
                    <a class="d-xl-none d-lg-none" href="#"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            
                           
                            <li class="nav-item ">
                                <a class="nav-link" href="index.php"><i class="fa fa-fw fa-user-circle"></i>Home<span class="badge badge-success"></span></a>
                             
                            
                            <li class="nav-item ">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Profile<span class="badge badge-success"></span></a>
                            
                                <div id="submenu-1" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                           
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="view_profile.php">View profile</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
    
                           <li class="nav-item ">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="fas fa-cog mr-2"></i>Settings</a>
                                <div id="submenu-4" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="change_pwd.php">Change password</a>
                                        </li>
                                      
                        </ul>
                    </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
       
                              
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title"> </h2>
                                <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link"></a></li>
                                            <li class="breadcrumb-item active" aria-current="page"></li>
                                        </ol>
                                    </nav>
                                    
                                        <div class="container-fluid mt--7">

       
                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
              
                      
            </div>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
            </div></div></div></div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
                <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="assets/libs/js/main-js.js"></script>
    <!-- chart chartist js -->
    <script src="assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="assets/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script src="assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="assets/libs/js/dashboard-ecommerce.js"></script>
</body>
 
</html>