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
    
    <br>
    <br>
    
     <br>
    <br>
        <style>
    body
    {
     background-image: url(assets/images/p16.jpg)  ; 
        background-repeat: no-repeat;
    }
    table
    {
        font-family: Times New Roman;
        font-size: 30px;
        color: black;
        font-weight: bold;
        
    }
            tr
            {
             background-color: azure;   
            }
            h1
            {
            font-family: Times New Roman;
        font-weight: bold;    
            }
    </style>
       

             <?php

if(!isset($_SESSION['sess']))
{
header("location:index.php");
}

include('connection.php');

$a=$_SESSION['sess'];
$sql="select * from registration where username='$a' and user_type=3";
$exe=mysqli_query($con,$sql);
$sql2="select * from school_reg where username='$a'";
$exe2=mysqli_query($con,$sql2);
$sql3="select * from fee where username='$a'";
$exe3=mysqli_query($con,$sql3);    

//$sl="select player_name,dob,mobile from team_player  where tid='$a'";
//$row=mysqli_query($con,$sl);
?>

<center><h1 style="color:blue"><b style="font-size:45px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;VIEW PROFILE</b></h1></center>
<form method="POST">
    <center><br><br>
				<center><table class="table table-striped">
					                         
						 <?php
						while($fetch=mysqli_fetch_array($exe))
						{
							?>
                    <tr><td></td><td></td><td colspan="2" align="center"><img src="../images/<?php echo $fetch['image']?>" width="200px" height="200px"></td></tr>
                    <tr><td></td><td></td><td align="right"><b style="font-size:15px;">Name :</b></td><td style="font-size:15px;"><?php echo $fetch['name']?>
                                    </td>
						</tr>
                     <tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td align="right"><b style="font-size:15px;">Email :</b></td><td style="font-size:15px;"><?php echo $fetch['email']?>
                                  
                                   </td>
							</tr>
                
                     <tr><td></td><td></td><td align="right"><b style="font-size:15px;">Username :</b></td><td style="font-size:15px;"><?php echo $fetch['username']?>
                                  
                                   </td>
							</tr>
                    
                     <tr><td></td><td></td><td align="right"><b style="font-size:15px;">Password :</b></td><td style="font-size:15px;"><?php echo $fetch['password']?>
                                  
                                   </td>
							</tr>
                 <tr><td></td><td></td><td align="right"><b style="font-size:15px;">Buliding Name :</b></td><td style="font-size:15px;"><?php echo $fetch['hname']?>
                                  
                                   </td>
							</tr>
                    <tr><td></td><td></td><td align="right"><b style="font-size:15px;">Place :</b></td><td style="font-size:15px;"><?php echo $fetch['place']?>
                                  
                                   </td>
							</tr>
                    <tr><td></td><td></td><td align="right"><b style="font-size:15px;">District :</b></td><td style="font-size:15px;"><?php echo $fetch['dis']?>
                                  
                                   </td>
							</tr>
                    <tr><td></td><td></td><td align="right"><b style="font-size:15px;">Pincode :</b></td><td style="font-size:15px;"><?php echo $fetch['pin']?>
                                  
                                   </td>
							</tr>
                    
                 
                    
                     <tr><td></td><td></td><td align="right"><b style="font-size:15px;">Phone :</b></td><td style="font-size:15px;"><?php echo $fetch['phone']?>
                                  
                                   </td>
							</tr>
                    <tr><td></td><td></td><td align="right"><b style="font-size:15px;">Date of Join :</b></td><td style="font-size:15px;"><?php echo $fetch['jdate']?>
                                  
                                   </td>
							</tr>
                     <?php
                    while($fetch3=mysqli_fetch_array($exe3))
						{
							?>
                    <tr><td></td><td></td><td align="right"><b style="font-size:15px;">Fee Details :</b></td><td></td>
							</tr>
                    <tr><td></td><td></td><td align="right"><b style="font-size:15px;">Learners :</b></td><td style="font-size:15px;"><?php echo $fetch3['Learners']?>
                                  
                                   </td>
							</tr>
                    <tr><td></td><td></td><td align="right"><b style="font-size:15px;">Learners and Advanced :</b></td><td style="font-size:15px;"><?php echo $fetch3['Learners_n_Advanced']?>
                                  
                                   </td>
							</tr>
                    <tr><td></td><td></td><td align="right"><b style="font-size:15px;">Advanced :</b></td><td style="font-size:15px;"><?php echo $fetch3['Advanced']?>
                                  
                                   </td>
							</tr>
                    <tr><td></td><td></td><td align="right"><b style="font-size:15px;">Driving Test :</b></td><td style="font-size:15px;"><?php echo $fetch3['Driving_test']?>
                                  
                                   </td>
							</tr>
                     <?php }?>
                      <?php
                    while($fetch2=mysqli_fetch_array($exe2))
						{
							?>
                    <tr><td></td><td></td><td align="right"><b style="font-size:15px;">License   :</b></td>
                   <td> <img src="../images/<?php echo $fetch2['license']?>" width="200px" height="200px">
                                    </td>
						</tr>
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
                            
                           <!--  <li class="nav-item ">
                                <a class="nav-link active" href="index.php"><i class="fa fa-fw fa-user-circle"></i>Home<span class="badge badge-success">6</span></a> -->
                                 
                                 
                            <li class="nav-item ">
                                <a class="nav-link" href="index.php"><i class="fa fa-fw fa-user-circle"></i>Home<span class="badge badge-success"></span></a>
                             
                            
                            <li class="nav-item ">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Profile<span class="badge badge-success"></span></a>
                            
                                <div id="submenu-1" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                           
                                        </li>
                                        
                                        <li class="nav-item">
                                            <a class="nav-link" href="profile_edit.php">Edit profile</a>
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
        </div>
        
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