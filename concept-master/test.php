<?php
session_start();
if(!isset($_SESSION['sess']))
{
header("location:../index.php");
}
include("connection.php");
$user=$_SESSION['sess'];
$c=$_SESSION['sess'];
$a=trim($c);
 $sql3="select * from registeration,stud_reg,login where registeration.username='$a' and stud_reg.username='$a' and login.username='$a'";
 $res2=mysqli_query($con,$sql3);


$sq="select * from district";
$me1=mysqli_query($con,$sq);

$sq11="select * from stud_reg where username='$user'";
$me11=mysqli_query($con,$sq11);

$sq3="select * from course";
$me2=mysqli_query($con,$sq3);

$sq4="select * from school_reg";
$me4=mysqli_query($con,$sq4);

$sq5="select username from login";
$me8=mysqli_query($con,$sq5);

$sq6="select * from test_date";
$me9=mysqli_query($con,$sq6);


if(isset($_POST['submit']))
{
 
   
 $l=$_POST['learners'];
  $date=$_POST['date_id'];
    

  $ins="INSERT INTO `test` (`test_id`,`school_id`,`stud_id`, `avble_date`, `learners`, `status`) VALUES (NULL,'$r','$user', '$date', '$l', '4')";
    
if(mysqli_query($con,$ins))
    {
         
             
          echo "<script>";echo "alert('Successfully updated!')";echo"</script>";
         echo "<script>";
         echo("location.href='student_home.php'");
       // echo("location.href='PHP_Bolt-master/index.php'");
        echo"</script>";
    }
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
    
    
  <h1>Student Profile:</h1>
  <!-- One "tab" for each step in the form: -->
 <?php 
   
if(!isset($_SESSION['sess']))
{
header("location:index.php");
} 
include("connection.php");
$a=$_SESSION['sess'];
$sql="select * from registeration where username='$a' and user_type=1";
$exe=mysqli_query($con,$sql);
      $sql="select * from registeration where user_type='3' and username='$user'";
                             $exe3=mysqli_query($con,$sql);
$sql2="select * from stud_reg where username='$a'";
$exe2=mysqli_query($con,$sql2);

    ?>
<center><h2 style="color:blue"><b style="font-size:25px;"><br><br>APPLY FOR DRIVING TEST </b></h2></center>
<center><form method="POST" action="">
    <center><br><br>
        <center><table class="table table-striped">                        
						 <?php
						while($fetch=mysqli_fetch_array($exe))
						{
							?>
                    <tr><td></td><td></td><td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="../images/<?php echo $fetch['image']?>" width="200px" height="200px"></td></tr>
                    <tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><b style="font-size:15px;">Name :</b></td><td style="font-size:15px;"><?php echo $fetch['name']?>
                                    </td>
						</tr>
                     <tr><td></td><td></td><td><b style="font-size:15px;">Email :</b></td><td style="font-size:15px;"><?php echo $fetch['email']?>
                                    </td>
						</tr>
                
           
     
            
                         <tr><td></td><td></td><td><b style="font-size:15px;">House Name :</b></td><td style="font-size:15px;"><?php echo $fetch['hname']?>
                                  
                                   </td>
							</tr>
                    <tr><td></td><td></td><td><b style="font-size:15px;">Place :</b></td><td style="font-size:15px;"><?php echo $fetch['place']?>
                                  
                                   </td>
							</tr>
                    <tr><td></td><td></td><td><b style="font-size:15px;">District :</b></td><td style="font-size:15px;"><?php echo $fetch['dis']?>
                                  
                                   </td>
							</tr>
                    <tr><td></td><td></td><td><b style="font-size:15px;">Pincode :</b></td><td style="font-size:15px;"><?php echo $fetch['pin']?>
                                  
                                   </td>
							</tr>
                         <tr><td></td><td></td><td><b style="font-size:15px;">Phone :</b></td><td style="font-size:15px;"><?php echo $fetch['phone']?>
                                
                         <tr><td></td><td></td><td><b style="font-size:15px;">District :</b></td><td style="font-size:15px;"><?php echo $fetch['dist_id']?>            
      
      
      </p>
                          
                                    </td>
						</tr>
        

    <?php
                    while($fetch2=mysqli_fetch_array($exe2))
						{
							?>
    
    
                      <tr><td></td><td></td><td><b style="font-size:15px;">Course :</b></td><td style="font-size:15px;"><?php echo $fetch2['course_id']?>            
      
      
      </p>
                          
                                    </td>
						</tr>
        
    
                      
                              
                                   
                    <tr><td></td><td></td><td><b style="font-size:15px;">Gender  :</b></td>
                   <td>  <?php echo $fetch2['gender']?>
                       
                      
                                    
                                   
                                   <tr><td></td><td></td><td><b style="font-size:15px;">DOB  :</b></td>
                   <td>   <?php echo $fetch2['dob']?>
                      
                                   
                                 
     <tr><td></td><td></td><td><b style="font-size:15px;">Available date</b></td><td style="font-size:15px;">
                               <div class="form-select">
                                    
                                        
                               <?php
    while($fetch=mysqli_fetch_array($me9))
						{
                            ?>
<?php echo $fetch['test_1']?>&nbsp;&nbsp;|&nbsp;&nbsp;<?php echo $fetch['test_2']?>&nbsp;&nbsp;|&nbsp;&nbsp;<?php echo $fetch['test_3']?>&nbsp;&nbsp;|&nbsp;&nbsp;<?php echo $fetch['test_4']?>&nbsp;&nbsp;|&nbsp;&nbsp;
                                        <?php
                        }
?>
                                  <tr><td></td><td></td><td>
    <b style="font-size:15px;">Date</b></td><td style="font-size:15px;"><input class="input-field col-md-12" type="date" placeholder=" " name="date" id="date"  onblur="return checkDOB()" onchange="validatetxt()" required>
 
    
                       
                                          <p id="p4"></p>
  <script type="text/javascript">
    function checkDOB() {
        var dateString = document.getElementById('date').value;
        var myDate = new Date(dateString);
        var today = new Date();
        if (myDate >= today) { 
            $('#p4').hide();
        }
       else{
           
            $('#p4').show();
            $('#p4').text("* Invalid date. Choose another date *");
        $("#date").focus();
}
    }
</script>
                            
                                   
                                   
                                    <tr><td></td><td></td><td><b style="font-size:15px;">Upload Learners  :</b></td>
                   <td>   
                       <input type="file" name="learners" id="learners" onblur="return checkDOB()">
                        <p id="op1"></p>
<script type="text/javascript">
                             function validateImage(){
                               var formData = new FormData();
                                 var file = document.getElementById("learners").files[0];
                                 formData.append("FileData",file);
                                 var t = file.type.split('/').pop().toLocaleLowerCase();
                                 if (t != "jpeg" && t != "jpg" && t != "png" && t != "gif"){
                                     alert('Please select a valid image file');
                                     document.getElementById("img").value = '';
                                     return false;
                                 }
                                 if (file.size > 1024000){
                                     alert('max upload size is 1mb only');
                                     document.getElementById("learners").value = '';
                                     return false;
                                 }
                                 return true;
                             }
                             </script>
                                   
     
                                      <tr><td></td><td></td><td><b style="font-size:15px;">Med Certificate   :</b></td>
                   <td> <img src="../images/<?php echo $fetch2['medcertificate']?>" width="200px" height="200px">
                       
                       
                                    </td>
						</tr>
                                   
                                      <tr><td></td><td></td><td><b style="font-size:15px;">Certificate   :</b></td>
                   <td> <img src="../images/<?php echo $fetch2['certificate']?>" width="200px" height="200px">
                                    </td>
						</tr>
                                      <tr><td></td><td></td><td><b style="font-size:15px;">Adhaar   :</b></td>
                   <td> <img src="../images/<?php echo $fetch2['adhaar']?>" width="200px" height="200px">
                                    </td>
						</tr>
							                  
                         
                      <?php
    }

    ?> 
                                   
                                   
     <tr><td></td><td></td><td><b style="font-size:15px;"></b></td>
                   <td>  <input type="submit" value="Submit" class="submit" name="submit" id="submit"  />
                                    </td>
                                   </tr>      
                                   
  
                  
                                   <?php
    }

    ?>
                    
   
      
                        
    
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
                                <a class="nav-link active" href="student_home.php"><i class="fa fa-fw fa-user-circle"></i>Home<span class="badge badge-success"></span></a>
                            <li class="nav-item ">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Profile<span class="badge badge-success"></span></a>
                            
                                <div id="submenu-1" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                           
                                        </li>
                                    
                                        <li class="nav-item">
                                            <a class="nav-link" href="viewstud_profile.php">View profile</a>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </li>                     
                        
                           <li class="nav-item ">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-5"><i class="fas fa-cog mr-2"></i>Settings</a>
                                <div id="submenu-5" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="change_pwd.php">Change password</a>
                                        </li>
                                    </ul>
                               </div>
                            </li></ul>
                    </div>
                </nav>
            </div>
        <!--============================================================== -->
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
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                
                            <!-- ============================================================== -->
                            <!-- end sales traffice country source  -->
                            <!-- ============================================================== -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
         
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
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