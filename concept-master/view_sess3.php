<?php
session_start();
if(!isset($_SESSION['sess']))
{
header("location:../index.php");
}
include('connection.php');
$user=$_SESSION['sess'];
$sql="select * from registration where username='$user'";
$res=mysqli_query($con,$sql);
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
    
    <br>
    <br>
    <br>
   
   <center> <div class="box">

<fieldset  id="fi"    style="width:600px; color:black; border-color: white;">
<legend></legend>
<?php     
 $t=date("Y-m-d");
    $a=$_SESSION['sess'];

$sql0="select * from add_slot where username='$a'";
$res00=mysqli_query($con,$sql0);

?>
<br>
  <h1 style="color:cyan;font-size:45px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SLOT DETAILS</h1>
  <form method="post" class="form" style="max-width:500px; margin:auto">
    <br>
        <table class="table table-striped" width=50% align="center" border="1" style="font-family='Times New Roman;'">
            <tr><th>NAME</th><th>DATE</th><th>VEHICLE TYPE</th><th>VEHICLE NAME</th><th>SLOT</th><th>PLACE</th><th>TIME</th><th>STATUS</th></tr>
            <?php
            $x=1;
            while($fetch=mysqli_fetch_array($res00))
            {
                $d=$fetch['status1'];
                if($d==0)
                {
                    $m="waiting for attendance..";
                      
                    }
                else if($d==2)
                {
                    $m="student attended!!! ";
                    
                    
                   
                }
                else if($d==10)
                {
                  $m="student not attended!!!";
                   
                    
                }
            ?>
          
<tr><td><?php echo $fetch['stud_id'];?></td><td><?php echo $fetch['date'];?></td><td><?php echo $fetch['veh_type'];?></td><td><?php echo $fetch['veh_name'];?></td><td><?php echo $fetch['slot'];?></td><td><?php echo $fetch['place'];?></td><td><?php echo $fetch['time'];?></td><td><?php echo $m;?></td></tr>
            <?php
                
            }
            ?>
      </table>
            <br>

           </form> 
</fieldset>
      </div>
   <div class="row mt-5">
       
        <div class="col-xl-4">
         
        </div>
      </div>
    </center>
<style>
    body
    {
     background-image: url(assets/images/p11.jpg)  ; 
        background-repeat: no-repeat;
    }
    table
    {
        font-family: Times New Roman;
        font-size: 20px;
        color: black;
    }
    tr
    {
        background-color: azure;   
    }
    h1
    {
     font-family: Times New Roman;   
    }
    </style>
    
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
                                  <!--  <h5 class="mb-0 text-white nav-user-name"> </h5> -->
                                    
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
                                <a class="nav-link active" href="index.php"><i class="fa fa-fw fa-user-circle"></i>Home<span class="badge badge-success"></span></a>
                            
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
                           
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-fw fa-chart-pie"></i>Sessions</a>
                                <div id="submenu-3" class="collapse submenu" style="">
                                    
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="view_sess2.php">View sessions</a>
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
                                      <!--  <li class="nav-item">
                      
        
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
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