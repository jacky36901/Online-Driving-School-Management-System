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
 $sql3="select * from registration,stud_reg,login where registration.username='$a' and stud_reg.username='$a' and login.username='$a'";
 $res2=mysqli_query($con,$sql3);

$sq="select * from district";
$me1=mysqli_query($con,$sq);


$sq3="select * from course";
$me2=mysqli_query($con,$sq3);

$sq4="select * from school_reg";
$me4=mysqli_query($con,$sq4);

$sq5="select username from login";
$me8=mysqli_query($con,$sq5);

$sq6="select * from time";
$me9=mysqli_query($con,$sq6);

if(isset($_POST['submit']))
{
 

$w=$_POST['hname'];
$x=$_POST['place'];
$y=$_POST['dis'];
$z=$_POST['pin'];
    
$c=$_POST['dob'];
$d=$_POST['gender'];
$e=$_POST['phone'];   
$m=$_POST['jdate'];
$j=$_POST['dist_id'];
 $s=$_POST['school_id']; 
$k=$_POST['course_id'];    
 $l=$_POST['time_id'];
    
$insert="update registration set hname='$w',place='$x',dis='$y',pin='$z',phone='$e',dist_id='$j',jdate='$m' where username='$user'";  
   
$insert1="update stud_reg set dob='$c',gender='$d',school_id='$s',course_id='$k',time_id='$l' where username='$user'";

mysqli_query($con,$insert1);
if(mysqli_query($con,$insert))
    {
         $query = array(
                    'b' => $s, 
                    'c' => $k,
                         );
                    $query = http_build_query($query);
             
          echo "<script>";echo "alert('Successfully updated!')";echo"</script>";
         echo "<script>";
        echo("location.href='cardpay/index.php?$query'");
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
    <style>
    table
        {
            font-family: Times New Roman; 
            color: black;
        }
        body
    {
        background-image: url(assets/images/p16.jpg);
        background-repeat: no-repeat;
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
        select
        {
            width: 200px;
           height: 30px;
        }
        input
        {
            width: 200px;
        }
    </style>
    
  <h1>Student Profile:</h1>
  <!-- One "tab" for each step in the form: -->
 <?php 
   
if(!isset($_SESSION['sess']))
{
header("location:index.php");
} 
include("connection.php");
    
$a=$_SESSION['sess'];
$sql="select * from registration where username='$a' and user_type=1";
$exe=mysqli_query($con,$sql);
      $sql3="select * from registration where user_type='3' and username='$user'";
                             $exe3=mysqli_query($con,$sql3);
$sql2="select * from stud_reg where username='$a'";
$exe2=mysqli_query($con,$sql2);

    ?>
<center><h2 style="color:blue"><b style="font-size:35px;"><br><br>UPDATE STUDENT PROFILE </b></h2></center>
<center><form method="POST" action="">
    <center>
        <center><table class="table table-striped">                        
						 <?php
						while($fetch=mysqli_fetch_array($exe))
						{
							?>
                    <tr><td></td><td></td><td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="../images/<?php echo $fetch['image']?>" width="200px" height="200px"></td></tr>
                    <tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td align="right"><b style="font-size:15px;">Name :</b></td><td style="font-size:15px;"><?php echo $fetch['name']?>
                                    </td>
						</tr>
                     <tr><td></td><td></td><td align="right"><b style="font-size:15px;">Email :</b></td><td style="font-size:15px;"><?php echo $fetch['email']?>
                                    </td>
						</tr>
                     <tr><td></td><td></td><td align="right"><b style="font-size:15px;">Username :</b></td><td style="font-size:15px;"><?php echo $fetch['username']?>
                                    </td>
						</tr>
               
                     <tr><td></td><td></td><td align="right"><b style="font-size:15px;">Password :</b></td><td style="font-size:15px;"><?php echo $fetch['password']?>
                                    </td>
						</tr>
            <tr><td></td><td></td><td align="center" colspan="2"><b style="font-size:15px;"><a href="search_student.php">Search School</a>  and give your intersted school name in next field </b></td>
    </tr>
            <tr><td></td><td></td><td align="right"><b style="font-size:15px;">School</b></td><td style="font-size:15px;">
                               <div class="form-select">
                
<select name="school_id" id="school">
                                        <option value=""></option>
                                        
                               <?php
    while($fetch900=mysqli_fetch_array($me4))
						{
                            ?>
               <option value="<?php echo $fetch900['username']?>"><?php echo $fetch900['name']?>  <?php
                        }
?></option>>
                                                    
             
                                    
              
                                   </select>
             
                                    
           
                                   </select> </td>
    </tr>
            
            <tr><td></td><td></td><td align="right"><b style="font-size:15px;">Gender  :</b></td>
                   <td>  
                       
                       <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="gender" class="custom-control-input" id="male"  value="Male"><span class="custom-control-label">Male</span>
                                            </label>
                       <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="gender" class="custom-control-input" id="male"  value="Female"><span class="custom-control-label">Female</span>
                                            </label>
                       
                                    </td>
						</tr>
                                    
                                  
            <tr><td></td><td></td><td align="right"><b style="font-size:15px;">House Name :</b></td><td style="font-size:15px;">
                          <input type="text" name="hname" id="hname" required/>
                            <p id="p2"></p>
                 <script>
                 $("#hname").on("blur", function() {
    if ( $(this).val().match('^[a-zA-Z ]{3,50}$') ) {
       $('#p2').hide();
    } else {
         $('#p2').show();
       $('#p2').text("* please enter a valid address *");
        $("#hname").focus();
        
    }
});
    </script>    
      
      
      
      </p>
                          
                                    </td>
						</tr>
     
            
                          <tr><td></td><td></td><td align="right"><b style="font-size:15px;">Place :</b></td><td style="font-size:15px;">
                          <input type="text" name="place" id="place" required/>
                            <p id="p1"></p>
                 <script>
                 $("#place").on("blur", function() {
    if ( $(this).val().match('^[a-zA-Z]{3,50}$') ) {
       $('#p1').hide();
    } else {
         $('#p1').show();
       $('#p1').text("* please enter a valid address *");
        $("#place").focus();
        
    }
});
    </script>    
      
      
      
      </p>
                          
                                    </td>
						</tr>
                                  
 <tr><td></td><td></td><td align="right"><b style="font-size:15px;">District :</b></td><td style="font-size:15px;">
                          <input type="text" name="dis" id="dis" required/>
                            <p id="p3"></p>
                 <script>
                 $("#dis").on("blur", function() {
    if ( $(this).val().match('^[a-zA-Z]{3,50}$') ) {
       $('#p3').hide();
    } else {
         $('#p3').show();
       $('#p3').text("* please enter a valid address *");
        $("#dis").focus();
        
    }
});
    </script>    
      
      
      
      </p>
                          
                                    </td>
						</tr>
     <tr><td></td><td></td><td align="right"><b style="font-size:15px;">Pincode :</b></td><td style="font-size:15px;">
                          <input type="text" name="pin" id="pin" required/>
                            <p id="p4"></p>
                 <script>
                 $("#pin").on("blur", function() {
    if ( $(this).val().match('^[0-9]{6}$') ) {
       $('#p4').hide();
    } else {
         $('#p4').show();
       $('#p4').text("* please enter a valid address *");
        $("#pin").focus();
        
    }
});
    </script>    
      
      
      
      </p>
                          
                                    </td>
						</tr>
        
         <tr><td></td><td></td><td align="right"><b style="font-size:15px;">Phone</b></td><td style="font-size:15px;">
                            <input type="text" name="phone" id="phone" required pattern="[789][0-9]{9}"/>
                            <p id="p19"></p>
   <script>
                 $("#phone").on("blur", function() {
    if ( $(this).val().match(/^(?!(\d)\1{9})(?!0123456789|1234567890|0987654321|0000000000|1111111111|22222222222|3333333333|4444444444|5555555555|6666666666|7777777777|8888888888|9999999999|1000000000|2000000000|3000000000|40000000000|5000000000|6000000000|7000000000|8000000000|9000000000)\d{10}$/) ) {
       $('#p19').hide();
    } else {
         $('#p19').show();
       $('#p19').text("* please enter a valid mobile number *");
        $("#phone").val("");
        
    }
});
    </script>    
        </td>
</tr>   
     <tr><td></td><td></td><td align="right"><b style="font-size:15px;">DOB  :</b></td>
                   <td>   
                       <input type="date" name="dob" id="dob" onblur="return checkDOB()" width="200px">
                            <p id="p14"></p>
         <script type="text/javascript">
            function checkDOB() {
            var dateString = document.getElementById('dob').value;
            var myDate = new Date(dateString);
            var today = new Date();
            if ((today.getFullYear() - myDate.getFullYear() > 18) && (today.getFullYear() - myDate.getFullYear() < 60)) { 
            $('#p14').hide();
            }
            else{
            $('#p14').show();
            $('#p14').text("* Eligibility between 18 years and 60 years ONLY. *");
            $("#dob").focus();
            }
            }
       </script>
                                       </td></tr>
    
    
   
      <tr><td></td><td></td><td align="right"><b style="font-size:15px;">Date of Join :</b></td><td style="font-size:15px;">
                          <input type="date" name="jdate" id="jdate" onblur="return check()" width="250px" required/>
                            <p id="p12"></p>
  <script type="text/javascript">
    function check() {
        var dateString = document.getElementById('jdate').value;
        var myDate = new Date(dateString);
        var today = new Date();
        if (myDate.setHours(0,0,0,0) == today.setHours(0,0,0,0)) { 
            $('#p12').hide();
        }
       else{
           
            $('#p12').show();
            $('#p12').text("* Invalid date. Choose current date *");
        $("#jdate").focus();
}
    }
</script>
			            <label class="errortext" style="display:nne; size:10PX; color:red" id="jdate"></label><br>
                                          

                          
                                    </td>
						</tr>              
                
 
                          
                      <?php
                    while($fetch2=mysqli_fetch_array($exe2))
						{
							?>
              <tr><td></td><td></td><td align="right"><b style="font-size:15px;">Course</b></td><td style="font-size:15px;">
                               <div class="form-select">
                                    <select name="course_id" id="course_id">
                                        <option value=""></option>
                                         <?php
    while($fetch=mysqli_fetch_array($me2))
						{
                            ?>
               <option value="<?php echo $fetch['name']?>"><?php echo $fetch['name']?>  <?php
                        }
?></option>>
                                </select>
                 
              <tr><td></td><td></td><td align="right"><b style="font-size:15px;">Time</b></td><td style="font-size:15px;">
                               <div class="form-select">
                                    <select name="time_id" id="time_id" width="150px">
                                        <option value=""></option>
                                         <?php
    while($fetch=mysqli_fetch_array($me9))
						{
                            ?>
               <option value="<?php echo $fetch['name']?>"><?php echo $fetch['name']?>  <?php
                        }
?></option>>
                                </select>
                  </div></td></tr>
                     
                                  
                                   
                                   
     
                                      <tr><td></td><td></td><td align="right"><b style="font-size:15px;">Med Certificate   :</b></td>
                   <td> <img src="../images/<?php echo $fetch2['medcertificate']?>" width="200px" height="200px">
                       
                       
                                    </td>
						</tr>
                                   
                                      <tr><td></td><td></td><td align="right"><b style="font-size:15px;">Certificate   :</b></td>
                   <td> <img src="../images/<?php echo $fetch2['certificate']?>" width="200px" height="200px">
                                    </td>
						</tr>
                                      <tr><td></td><td></td><td align="right"><b style="font-size:15px;">Adhaar   :</b></td>
                   <td> <img src="../images/<?php echo $fetch2['adhaar']?>" width="200px" height="200px">
                                    </td>
						</tr>
							                  
                         
                      <?php
    }

    ?> 
                                   
                                   
     <tr><td></td><td></td><td><b style="font-size:15px;"></b></td>
                   <td>  <input type="submit" value="Submit Form" class="submit" name="submit" id="submit"  />
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
                                            <a class="nav-link" href="studprofile_complete.php">Profile Complete</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="viewstud_profile.php">View profile</a>
                                        </li>
                                          <li class="nav-item">
                                            <a class="nav-link" href="stud_edit.php">Edit profile</a>
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
    </div>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
     
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    
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