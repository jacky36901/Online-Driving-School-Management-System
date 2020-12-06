<?php
session_start();
if(!isset($_SESSION['sess']))
{
header("location:../index.php");
}
include("connection.php");
$user=$_SESSION['sess'];
$sql="select * from registration where user_type=1 and username='$user'";
$res=mysqli_query($con,$sql);
$sql2="select * from stud_reg where username='$user'";
$res2=mysqli_query($con,$sql2);
$sq6="select * from time";
$me9=mysqli_query($con,$sq6);

if(isset($_POST['submit']))
{
 
$a=$_POST['name']; 
$f=$_POST['email'];
$g=$_POST['username'];    
$h=$_POST['password'];

$l=$_POST['image'];
$p=$_POST['user_type'];  
    
$w=$_POST['hname'];
$x=$_POST['place'];
$y=$_POST['dis'];
$z=$_POST['pin'];
$c=$_POST['dob'];
$d=$_POST['gender'];
$e=$_POST['phone'];   
$b=$_POST['time'];
$j=$_POST['dist_id'];
$k=$_POST['course_id'];   

$m=$_POST['certificate'];
$n=$_POST['med_certificate'];
$o=$_POST['adhaar'];   
    
 $sql89="update registration set email='$g',hname='$w',place='$x',dis='$y',pin='$z' ,phone='$e' where username='$user'";
    $sql90="update stud_reg set time_id='$b' where username='$user'";
 
    if(mysqli_query($con,$sql89))
    {
        if(mysqli_query($con,$sql90))
        {
          echo "<script>";echo "alert('Successfully updated!')";echo"</script>";
         echo "<script>";
        echo("location.href='viewstud_profile.php'");
        echo"</script>";
        }
    }
}
?>

<!doctype html>
<html lang="en">
 
<head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
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
    .row
        {
            font-family: Times New Roman; 
            color: black;
            font-size: 20px;
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
            color: blue;  
            font-size: 35px;
        }
    select
    {
        padding: 5px;
  width: 530px;
  
    border-radius: 5px;
        color:gray;
  font-family: Raleway;
  border: 1px solid #aaaaaa; 
    }
            </style>


    <center> <div class="box">

<fieldset  id="fi"    style="width:600px; color:black; border-color: white;">
<legend></legend>
<form name="form1"  class="form" onsubmit="return validation()"  enctype="multipart/form-data"  style="max-width:500px; margin:auto" method="post">
  <center><h2><b>EDIT PROFILE</b></h2></center>
  <br>

    
      <?php
                               while($fetch=mysqli_fetch_array($res))
                               {
                                ?>
    
  <div class="row">
    <p><div class="name">Name</div><input class="input-field col-md-12" type="text" placeholder=" " name="name" id="name" value="<?php echo $fetch['name']?>"
                                          name="user_bio" id="user_bio"   onchange="validatetxt()"  readonly  required>

			            <label class="errortext" style="display:nne; size:10PX; color:red" id="name"></label><br>
      </p>
   
                                          </div>
                                          <br>
             
        <div class="row">
    <p><div class="username">Username</div><input class="input-field col-md-12" type="text" placeholder=" " name="username" id="username" value="<?php echo $fetch['username']?>" name="user_bio" id="user_bio"   onchange="validatetxt()" readonly required>

			            <label class="errortext" style="display:nne; size:10PX; color:red" id="email"></label><br>
                                         </p>
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
			            <label class="errortext" style="display:nne; size:10PX; color:red" id="phone"></label><br>
                                          

                                            </p>
                                          </div>
                                          <br>

        
       
                                          <br>
                                     

<?php 
                               }
    ?>
  <?php
                               while($fetch2=mysqli_fetch_array($res2))
                               {
                                ?>
  <div class="row">
    <p><div class="time2">Time</div><input class="input-field col-md-12" type="text" placeholder=" " name="time2" id="time2" value="<?php echo $fetch2['time_id']?>"
                                          name="user_bio" id="user_bio"   onchange="validatetxt()" readonly required>

			            <label class="errortext" style="display:nne; size:10PX; color:red" id="time"></label>
</div>
<?php
                        }
?>

<br>
<div class="row">
<p><div class="time">Time</div><br>
      <div class="form-select">
                                    <select name="time" id="time">
                                        <option value=""></option>
   <?php
while($fetch3=mysqli_fetch_array($me9))
						{
                            ?>
               <option value="<?php echo $fetch3['name']?>"><?php echo $fetch3['name']?>
                                         <?php
                        }
?></option>
                                </select>
                  </div>
</div>
      
<br>
     <div class="input-container">

      <button type="submit" class="btn btn-primary" name="submit"  value="POST"><b>Update</b></button>

        

   
</div>
        </div>                                                                                                           
               
        			</form>
</fieldset>
		


              
      

    
    
    
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
                                <a class="nav-link" href="student_home.php"><i class="fa fa-fw fa-user-circle"></i>Home<span class="badge badge-success"></span></a>
                             
                            
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

    
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
   
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
   
    <script src="assets/libs/js/main-js.js"></script>
    
    <script src="assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    
    <script src="assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
   
    <script src="assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="assets/vendor/charts/morris-bundle/morris.js"></script>
    
    <script src="assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="assets/libs/js/dashboard-ecommerce.js"></script>
</body>
 
</html>