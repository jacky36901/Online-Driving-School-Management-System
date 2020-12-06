<?php
session_start();
if(!isset($_SESSION['sess']))
{
header("location:../index.php");
}
include('connection.php');
$user=$_SESSION['sess'];
$sql="select * from registration where user_type=3 and username='$user'";
$res=mysqli_query($con,$sql);
$sql2="select * from school_reg";
$res2=mysqli_query($con,$sql2);
$sql3="select * from fee where username='$user'";
$res3=mysqli_query($con,$sql3);

if(isset($_POST['submit']))
{
 
$a=$_POST['name']; 
$f=$_POST['email'];
//$g=$_POST['username'];    
//$h=$_POST['password'];
$e=$_POST['phone'];  
//$l=$_POST['image'];
$w=$_POST['hname'];
$x=$_POST['place'];
$y=$_POST['dis'];
$z=$_POST['pin'];
$f1=$_POST['Learners'];
$f2=$_POST['Advanced'];
$f3=$_POST['Learners_n_Advanced'];
$f4=$_POST['Driving_test'];
    
//$p=$_POST['user_type'];  
//$q=$_POST['license'];  
 $sql89="update registration set phone='$e',hname='$w',place='$x',dis='$y',pin='$z' where username='$f'";
 $sql90="update fee set Learners='$f1', Advanced='$f2',Learners_n_Advanced='$f3',Driving_test='$f4' where username='$f'";
 
    if(mysqli_query($con,$sql89))
    {
        if(mysqli_query($con,$sql90))
        {
          echo "<script>";echo "alert('Successfully updated!')";echo"</script>";
         echo "<script>";
        echo("location.href='view_profile.php'");
        echo"</script>";  
        }
    }
    else
    {
        die( mysqli_error($con));
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
  font-family: Times New Roman;
  border: 1px solid #aaaaaa;  
                }
     body
    {
     background-image: url(assets/images/p16.jpg)  ; 
        background-repeat: no-repeat;
    }
    .row
    {
        font-size: 20px;
          font-family: Times New Roman;
    }
    h2
    {
        font-size: 45px;
        color: blue;
        font-family: Times New Roman;
    }
            </style>


    <center> <div class="box">

<fieldset  id="fi"    style="width:600px; color:black; border-color: white;">
<legend></legend>
<form name="form1"  class="form" onsubmit="return validation()"  enctype="multipart/form-data"  style="max-width:500px; margin:auto" method="post">
    <br><br><br>
  <center><h2>EDIT PROFILE</h2></center>
  <br>

    
      <?php
                               while($fetch=mysqli_fetch_array($res))
                               {
                                ?>
    
  <div class="row">
    <p><div class="name">Name</div><input class="input-field col-md-12" type="text" placeholder=" " name="name" id="name" value="<?php echo $fetch['name']?>"
                                          name="user_bio" id="user_bio"   onchange="validatetxt()"  readonly  required>

			            <label class="errortext" style="display:nne; size:10PX; color:red" id="name"></label><br>
                                          
                                          </div>
                                          <br>
             
    
 <div class="row">
    <p><div class="email">Email</div><input class="input-field col-md-12" type="text" placeholder=" " name="email" id="email" value="<?php echo $fetch['email']?>" name="user_bio" id="user_bio"   onchange="validatetxt()" readonly required>

			            <label class="errortext" style="display:nne; size:10PX; color:red" id="email"></label><br>
                                          

                                          </div>
                                          <br>
        
        <div class="row">
    <p><div class="address">Buliding Name:</div><input class="input-field col-md-12" type="text" placeholder=" " name="hname" id="hname" value="<?php echo $fetch['hname']?>"  name="user_bio" id="user_bio"   onchange="validatetxt()"required>
<p id="p2"></p>
                 <script>
                 $("#hname").on("blur", function() {
    if ( $(this).val().match('^[a-zA-Z" "]{3,50}$') ) {
       $('#p2').hide();
    } else {
         $('#p2').show();
       $('#p2').text("* please enter a valid buliding name *");
        $("#hname").focus();
        
    }
});
    </script>    
      
			            <label class="errortext" style="display:nne; size:10PX; color:red" id="hname"></label><br>
                                          
        
                                            </p>
                                          </div>
                                          <br>
        <div class="row">
    <p><div class="address">Place</div><input class="input-field col-md-12" type="text" placeholder=" " name="place" id="place" value="<?php echo $fetch['place']?>"  name="user_bio" id="user_bio"   onchange="validatetxt()"required>

			            <label class="errortext" style="display:nne; size:10PX; color:red" id="place"></label><br>
                                          
        
                                            </p>
                                          </div>
                                          <br>
    <div class="row">
    <p><div class="address">District</div><input class="input-field col-md-12" type="text" placeholder=" " name="dis" id="dis" value="<?php echo $fetch['dis']?>"  name="user_bio" id="user_bio"   onchange="validatetxt()"required>

			            <label class="errortext" style="display:nne; size:10PX; color:red" id="dis"></label><br>
                                          
        
                                            </p>
                                          </div>
                                          <br>
    <div class="row">
    <p><div class="address">Pincode</div><input class="input-field col-md-12" type="text" placeholder=" " name="pin" id="pin" value="<?php echo $fetch['pin']?>"  name="user_bio" id="user_bio"   onchange="validatetxt()"required>

			            <label class="errortext" style="display:nne; size:10PX; color:red" id="pin"></label><br>
                                          
        
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

        
       <?php 
                               }
    ?>
                                        

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
                                          

                                            </p>
                                          </div>
                                          <br>
 <div class="row">
    <p><div class="Driving_test">Driving Test</div><input class="input-field col-md-12" type="text" placeholder=" " name="Driving_test" id="Driving_test" value="<?php echo $fetch2['Driving_test']?>"
                                          name="user_bio" id="user_bio"   onchange="validatetxt()"required>

			            <label class="errortext" style="display:nne; size:10PX; color:red" id="Driving_test"></label><br>
                                          

                                            </p>
                                          </div>
                                          <br>
<?php 
                               }
    ?>


     <div class="input-container">

      <button type="submit" class="btn btn-primary" name="submit"  value="POST"><b>ADD</b></button>

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
                                    </ul></div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
                              
       
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