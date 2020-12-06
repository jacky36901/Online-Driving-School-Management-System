<?php
session_start();
if(!isset($_SESSION['sess']))
{
header("location:../index.php");
}
include('connection.php');
$twe=date("Y-m-d");


$us=$_SESSION['sess'];
 $a=$_GET['b'];
    $f="UPDATE  `smartdrive`.`add_slot` SET  `limit` =  '0',
`status` =  '1' WHERE  `add_slot`.`date` < '$twe'";
    mysqli_query($con,$f);
    $kl="select * from add_slot where status=1 and username='$us'";
    $tti=mysqli_query($con,$kl);
    while($ty=mysqli_fetch_array($tti))
    {
        $id=$ty['trainer_id'];
        $id2=$ty['stud_id'];
         $id45=$ty['username'];
        $ki="update add_trainer set status=0 where trainer_id='$id'";
        mysqli_query($con,$ki);
         $ki="update registration set status=1 where reg_id='$id2'";
        mysqli_query($con,$ki);
          $ju="update vehicle set status=1 where school_id='$id45'";
        mysqli_query($con,$ju);
        
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
    <br>
    <center><h2 style="color:blue"></h2></center>
   
          
              
<?php

 if(isset($_POST['submit']))
{
    
$yy=$_POST['trainer_id']; 
   
$x=$_POST['date']; 
     $y23=$_POST['veh_type'];
    $z=$_POST['veh_name'];    
$y=$_POST['slot'];

$pp=$_POST['place'];
 $t=$_POST['time'];  
 $hh="select * from add_slot where veh_name='$z'";
    $to=mysqli_query($con,$hh);
     $to2=mysqli_fetch_array($to);
    $m=$to2['limit'];
   $user=$_SESSION['sess'];
$hh23="select * from add_slot where veh_name='$z'";
    $to23=mysqli_query($con,$hh23);

    if($m!=$y23)
    {
    $m=$m+1;
 
     $op="UPDATE `smartdrive`.`add_slot` SET `limit` = '$m' WHERE `add_slot`.`veh_name` = '$z';";
        mysqli_query($con,$op);

$sql=mysqli_query ($con,"INSERT INTO `smartdrive`.`add_slot` (`slot_id`, `username`, `stud_id`, `trainer_id`, `date`, `veh_type`, `veh_name`, `slot`,`place`, `time`, `limit`, `status`) VALUES (NULL, '$user', '$a', '$yy', '$x','$y23', '$z', '$y','$pp','$t', '$m', '1');");
    $sll12="update registration set status=1 where reg_id='$a'";
      $dd12=mysqli_query($con,$sll12);
      
        $sl12l2="update add_slot set status=1 where trainer_id='$yy'";
      $dd1222=mysqli_query($con,$sl12l2);
       
    
           
  if($sql==true)
  { ?>

          <script>
          alert("Alloted Successfully!!!");

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
    else
    {
         $sl12l="update add_trainer set status=1 where trainer_id='$yy'";
      $dd122=mysqli_query($con,$sl12l);
         $ju="update vehicle set status=1 where veh_name='$z'";
        mysqli_query($con,$ju);
        
  
echo "<script>";
         echo "alert('Limit exceeded!!!')";

        echo "</script>";
        exit();
    }
}
 ?>
      
      
        
<style>
 input,select
                {
                   padding: 5px;
  width:100%;
  font-size: 14px;
    border-radius: 5px;
        color:gray;
  font-family: Raleway;
  border: 1px solid #aaaaaa;  
                }
    body
    {
     background-image: url(assets/images/p11.jpg)  ; 
        background-repeat: no-repeat;
    }
    .row
    {
        font-family: Times New Roman;
        font-size: 20px;
        color: aqua;
    }
    h1
    {
        font-family: Times New Roman;
        color: aqua;
    }
            </style>


    <center> <div class="box">

<fieldset  id="fi"    style="width:600px; color:black; border-color: white;">
<legend></legend>
<form name="form1"  class="form" onsubmit="return validation()"  enctype="multipart/form-data"  style="max-width:500px; margin:auto" method="post">
    <center><b><h1>ADD SLOT</h1></b></center>
  <br>

  <div class="row">
      <?php 
      $sll="select * from stud_reg where school_id='$us' and username='$a'";
      $dd=mysqli_query($con,$sll);
       $sl1l="select * from add_trainer where school_id='$us'";
      $dd1=mysqli_query($con,$sl1l);
    ?>
    
      <?php  while($gg=mysqli_fetch_array($dd))
                                 { ?>
    <p><div class="name">Name</div><input class="input-field col-md-12" type="text" placeholder=" " name="name" id="name" value="<?php echo $gg['name']?>"
                                          name="user_bio" id="user_bio"   onchange="validatetxt()"  readonly  required>

			            <label class="errortext" style="display:nne; size:10PX; color:red" id="name"></label>   <br>
               </p>
	</div>
                                          <br>
     <div class="row">
    <p><div class="time2">Preffered Time</div><input class="input-field col-md-12" type="text" placeholder=" " name="time2" id="time2" value="<?php echo $gg['time_id']?>"
                                          name="user_bio" id="user_bio"   onchange="validatetxt()"  readonly  required>

			            <label class="errortext" style="display:nne; size:10PX; color:red" id="time2"></label><br>
                                          

                                            </p>
                                          </div>
                                          <br>
<?php } ?>
   
    
                                          <br>
                    
 <div class="row">
    <p><div class="age">Trainer</div> <select name="trainer_id" >
      <option value="" >select</option>
      <?php  while($gg1=mysqli_fetch_array($dd1))
                                 { ?>
          <option value="<?php echo $gg1['trainer_id']; ?>"> <?php echo $gg1['name']; ?> </option>    
<?php } ?>
      </select>
    
			            <label class="errortext" style="display:nne; size:10PX; color:red" id="trainer_id"></label><br>
                                          

                                            </p>
                                          </div>
                                        

                                          <br>
<div class="row">
    <p><div class="phone">Date</div><input class="input-field col-md-12" type="date" placeholder=" " name="date" id="date"
                                          name="user_bio" id="user_bio"   onblur="return checkDOB()" onchange="validatetxt()" required>
 
    
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
			            <label class="errortext" style="display:nne; size:10PX; color:red" id="date"></label><br>
                                          

                                            </p>
                                          </div>
                                          <br>
        <div class="row">
       
    <p><div class="veh_type">Vehicle type</div><select name="veh_type" id="veh_type">
      <option value="" >select</option>
    <option value="4 wheeler" >4 Wheeler</option>
    </select>                   

                                            </p>
                                          </div>
                                          <br>
         <div class="row">
             <?php 
             $re="select * from vehicle where status=1 and school_id='$us'";
             $re2=mysqli_query($con,$re);
             ?>
    <p><div class="veh_name">Vehicle </div><select name="veh_name">
      <option value="" >select</option>
        <?php
        while($ter=mysqli_fetch_array($re2))
        {
            ?>
          <option value="<?php echo $ter['veh_name']?>" ><?php echo $ter['veh_name']?></option>
    <?php
        }
             ?>
     
             
    </select>                   

                                            </p>
        
                                          </div>
    
        

     <br>
    
        
<div class="row">
    <p><div class="slot">Slot</div><select name="slot">
      <option value="" >select</option>
          <option value="Morning" >Morning</option>
    <option value="Evening" >Evening</option>
    </select>                   

                                            </p>
                                          </div>
                                          <br>
        
                                          

                                        
<div class="row">
    <p><div class="place">Place</div><input class="input-field col-md-12" type="place" placeholder=" " name="place" id="place"
                                          name="user_bio" id="user_bio"   onblur="return checkDOB()" onchange="validatetxt()" required>
 
			            <label class="errortext" style="display:nne; size:10PX; color:red" id="place"></label><br>
                                          

                                            </p>
                                          </div>
                                          <br>

<div class="row">
    <p><div class="place">Time</div><input class="input-field col-md-12" type="time" placeholder=" " name="time" id="time"
                                          name="user_bio" id="user_bio"   onblur="return checkDOB()" onchange="validatetxt()" required>
 
			            <label class="errortext" style="display:nne; size:10PX; color:red" id="time"></label><br>
                                          

                                            </p>
                                          </div>
                                          <br>

     <div class="input-container">

      <button type="submit" class="btn btn-primary"name="submit"  value="POST"><b>ALLOT</b></button><br>

        

    
</div>
                                                                                                                 
               
        			</form>
</fieldset>
		
</body>
</html>



          
              
              
          </div>
        </div>



      </table>
            <br>

           </form> 


      </div>
   <div class="row mt-5">
       
        <div class="col-xl-4">
         
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
                                            <a class="nav-link" href="">Profile Complete</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="">View profile</a>
                                        </li>
                                    </ul>
                                          
                                            </div> 
                                        </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-fw fa-chart-pie"></i>Sessions</a>
                                <div id="submenu-3" class="collapse submenu" style="">
                                   <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="add_vehicle.php">Vehicle</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="add_slot.php">Add slot</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="slot_det.php">Slot details</a>
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