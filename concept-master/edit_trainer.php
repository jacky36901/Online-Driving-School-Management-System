<?php
session_start();
if(!isset($_SESSION['sess']))
{
header("location:../index.php");
}
include("connection.php");
$d=$_GET['b'];

$sql="select * from add_trainer where name='$d'";
$res=mysqli_query($con,$sql);

if(isset($_POST['submit']))
{
 
$a=$_POST['name']; 
$f=$_POST['dob'];
$g=$_POST['gender'];    
$h=$_POST['phone'];
$w=$_POST['hname'];
$x=$_POST['place'];
$y=$_POST['dis'];
$z=$_POST['pin'];
$r=$_POST['email'];
$l=$_POST['image'];
$p=$_POST['user_type'];  
$q=$_POST['license']; 
    
 $sql89="update add_trainer set phone='$h',hname='$w',place='$x',dis='$y',pin='$z',email='$r' where name='$a'";
    if(mysqli_query($con,$sql89))
    {
          echo "<script>";
        echo "alert('Successfully updated!')";echo"</script>";
         echo "<script>";
        echo("location.href='trainer_view2.php'");
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
     background-image: url(assets/images/p10.jpg)  ; 
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
    <br>
    <br>
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
                                          

                                            </p>
                                          </div>
                                          <br>
             
    
 <div class="row">
    <p><div class="dob">DOB</div><input class="input-field col-md-12" type="text" placeholder=" " name="dob" id="dob" value="<?php echo $fetch['dob']?>"
                                          name="user_bio" id="user_bio"   onchange="validatetxt()" readonly required>

			            <label class="errortext" style="display:nne; size:10PX; color:red" id="dob"></label><br>
                                          

                                            </p>
                                          </div>
                                          <br>
        
        <div class="row">
    <p><div class="gender">Gender</div><input class="input-field col-md-12" type="text" placeholder=" " name="gender" id="gender" value="<?php echo $fetch['gender']?>"
                                          name="user_bio" id="user_bio"   onchange="validatetxt()" readonly required>

			            <label class="errortext" style="display:nne; size:10PX; color:red" id="gender"></label><br>
                                          

                                            </p>
                                          </div>
                                          <br>
        
        <div class="row">
    <p><div class="phone">Phone</div><input class="input-field col-md-12" type="number" placeholder=" " name="phone" id="phone" value="<?php echo $fetch['phone']?>"
                                          name="user_bio" id="user_bio"   onchange="validatetxt()"required pattern="[789][0-9]{9}">
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

         <div class="row">
    <p><div class="address">House Name</div><input class="input-field col-md-12" type="text" placeholder=" " name="hname" id="hname" value="<?php echo $fetch['hname']?>"
                                          name="user_bio" id="user_bio"   onchange="validatetxt()" required>
             <p id="p1"></p>
                 <script>
                 $("#hname").on("blur", function() {
    if ( $(this).val().match('^[a-zA-Z ]{3,50}$') ) {
       $('#p1').hide();
    } else {
         $('#p1').show();
       $('#p1').text("* please enter a valid house name *");
        $("#hname").focus();
        
    }
});
    </script>    
			            <label class="errortext" style="display:nne; size:10PX; color:red" id="hname"></label><br>
                                          

                                            </p>
                                          </div>
                                          <br>
    
      <div class="row">
    <p><div class="address">Place</div><input class="input-field col-md-12" type="text" placeholder=" " name="place" id="place" value="<?php echo $fetch['place']?>"
                                          name="user_bio" id="user_bio"   onchange="validatetxt()" required>
             <p id="p2"></p>
                 <script>
                 $("#place").on("blur", function() {
    if ( $(this).val().match('^[a-zA-Z ]{3,50}$') ) {
       $('#p2').hide();
    } else {
         $('#p2').show();
       $('#p2').text("* please enter a valid place *");
        $("#place").focus();
        
    }
});
    </script>    
			            <label class="errortext" style="display:nne; size:10PX; color:red" id="place"></label><br>
                                          

                                            </p>
                                          </div>
                                          <br>

      <div class="row">
    <p><div class="address">District</div><input class="input-field col-md-12" type="text" placeholder=" " name="dis" id="dis" value="<?php echo $fetch['dis']?>"
                                          name="user_bio" id="user_bio"   onchange="validatetxt()" required>
             <p id="p3"></p>
                 <script>
                 $("#dis").on("blur", function() {
    if ( $(this).val().match('^[a-zA-Z]{3,50}$') ) {
       $('#p3').hide();
    } else {
         $('#p3').show();
       $('#p3').text("* please enter a valid district *");
        $("#dis").focus();
        
    }
});
    </script>    
			            <label class="errortext" style="display:nne; size:10PX; color:red" id="dis"></label><br>
                                          

                                            </p>
                                          </div>
                                          <br>

      <div class="row">
    <p><div class="address">Pincode</div><input class="input-field col-md-12" type="text" placeholder=" " name="pin" id="pin" value="<?php echo $fetch['pin']?>"
                                          name="user_bio" id="user_bio"   onchange="validatetxt()" required>
             <p id="p4"></p>
                 <script>
                 $("#address").on("blur", function() {
    if ( $(this).val().match('^[0-9]{6}$') ) {
       $('#p4').hide();
    } else {
         $('#p4').show();
       $('#p4').text("* please enter a valid pincode *");
        $("#pin").focus();
        
    }
});
    </script>    
			            <label class="errortext" style="display:nne; size:10PX; color:red" id="pin"></label><br>
                                          

                                            </p>
                                          </div>
                                          <br>



 <div class="row">
    <p><div class="email">Email</div><input class="input-field col-md-12" type="text" placeholder=" " name="email" id="email" value="<?php echo $fetch['email']?>"
                                           name="user_bio" id="user_bio"   onchange="validatetxt()" readonly required>
                     <p id="p8"></p>
       <script>
                 $("#email").on("blur", function() {
    if ( $(this).val().match('^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$') ) {
       $('#p8').hide();
    } else {
         $('#p8').show();
       $('#p8').text("*  Please enter valid email  *");
        $("#email").focus();
        
    }
});
    </script> 

			            <label class="errortext" style="display:nne; size:10PX; color:red" id="email"></label><br>
                                          

                                            </p>
                                          </div>
                                          <br>

       
                                    

<?php 
                               }
    mysqli_close($con );

    ?>
     <div class="input-container">

      <button type="submit" class="btn btn-primary"name="submit"  value="POST"><b>UPDATE</b></button>

        

    
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
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-user-circle"></i>Trainers</a>
                                <div id="submenu-2" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        
                                        <li class="nav-item">
                                            <a class="nav-link" href="trainer_view.php">View</a> 
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