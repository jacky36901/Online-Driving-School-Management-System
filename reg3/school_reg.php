<?php
session_start();
include("connection.php");


$sq="select * from district";
$me1=mysqli_query($con,$sq);

$sq3="select * from course";
$me2=mysqli_query($con,$sq3);
$sq5="select username from login";
$me8=mysqli_query($con,$sq5);

if(isset($_POST['submit']))
{
 
  
$a=$_POST['name']; 

$g=$_POST['username'];    
$h=$_POST['password'];
$i=$_POST['confirmpassword'];

    
 $l = $_FILES["image"]["name"];
$q = $_FILES["license"]["name"];
move_uploaded_file($_FILES["image"]["tmp_name"], "../images/" . $l);
move_uploaded_file($_FILES["license"]["tmp_name"], "../images/" . $q);
 
$insert="INSERT INTO  `smartdrive`.`registration` (
`reg_id` ,
`name` ,


`email` ,
`username` ,
`password` ,
`confirmpassword` ,

`image` ,
`user_type` ,
`status`
)
VALUES (
NULL ,  '$a', '$g',  '$g',  '$h',  '$i',  '$l', '3','0'
)";
    

$insert2="INSERT INTO  `smartdrive`.`school_reg` (
`school_id` ,
`username` ,
`name` ,
`license` ,
`status`
)
VALUES (
NULL ,  '$g',  '$a',  '$q', '0'
)";
    
$insert3="INSERT INTO  `smartdrive`.`login` (
`login_id` ,
`username` ,
`password` ,
`user_type` ,
`status`
)
VALUES (
NULL ,  '$g',  '$h',  '3',  '0'
)";


mysqli_query($con,$insert2); 
mysqli_query($con,$insert3);  
    
    
    if(mysqli_query($con,$insert))
    {
          echo "<script>";echo "alert('Successfully registered!If admin approves you ,you can log in after two days')";echo"</script>";
         echo "<script>";
        echo("location.href='../login2/index.php'");
        echo"</script>";
    }
    mysqli_close($con);
}    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title></title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    
     <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="formvalid.js"></script>
   <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
   <script src="js/3dslider.js"></script> 
    
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
    

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-70 p-b-50 ">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Registration Form</h2>
                    <form method="POST" enctype="multipart/form-data">
                        
                        <div class="row row-space">
                            
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Name</label>
                                    <input class="input--style-4" type="text" name="name" id="name" required>
                                     <p id="p0"></p>
                 <script>
                 $("#name").on("blur", function() {
    if ( $(this).val().match('^[a-zA-Z ]{3,50}$') ) {
       $('#p0').hide();
    } else {
         $('#p0').show();
       $('#p0').text("* please enter a valid  name *"); 
         $('#name').focus(); 
    }
  
});
    </script> 
                         <!--       </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Email</label>
                                    <input class="input--style-4" type="text" name="email" id="email" required>
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
    </script> -->

                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                         <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Username</label>
                                    <input class="input--style-4" type="text" placeholder="Enter Email id" name="username" id="username" required>
                                                                    <p id="p6"></p>
       <script>
                 $("#username").on("blur", function() {
    if ( $(this).val().match('^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$') ) {
       $('#p6').hide();
        <?php
         while($fetch4=mysqli_fetch_array($me8))
						{
                            $user=$fetch4['username'];
                        ?>
        if( $(this).val().match('^<?php echo $user;?>$') )
            {
             $('#p6').show();
       $('#p6').text("*  This username already exists choose another name.  *");
        $("#username").focus();   
            }
        <?php
                        }
        ?>
    } else {
         $('#p6').show();
       $('#p6').text("*  Please enter valid email  *");
        $("#username").focus();
        
    }
});
    </script>  
      
                                </div>
                            </div>
                            
                         <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Password</label>
                                    <input class="input--style-4" type="password" name="password"
                                           id="password" required>
                                    <p id="p7"></p>
       <script>
                 $("#password").on("blur", function() {
    if ( $(this).val().match('^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})') ) {
       $('#p7').hide();
    } else {
         $('#p7').show();
       $('#p7').text("*Must contain at least one number and one uppercase and lowercase letter and special character, and at least 8 or more characters*");
        $("#password").focus();
        
    }
});
    </script> 
                                </div>
                            </div>
                            <div class="row row-space">
                         <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Confirm Paasword</label>
                                    <input class="input--style-4" type="password" name="confirmpassword" id="confirmpassword" onblur="return Validate()" required>
                                           
                                     <script type="text/javascript">
 function Validate() {
        var password = document.getElementById("confirmpassword").value;
        var confirmPassword = document.getElementById("password").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            document.getElementById("confirmpassword").value="";
            myInput.focus();
        }
        return true;
    }
</script>
                                </div>
                            </div>
                                 <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Image</label>
                                    <input class="input--style-4" type="file" name="image" id="image" onchange="validateImage()" required>
                                    <script type="text/javascript">
                             function validateImage(){
                               var formData = new FormData();
                                 var file = document.getElementById("image").files[0];
                                 formData.append("FileData",file);
                                 var t = file.type.split('/').pop().toLocaleLowerCase();
                                 if (t != "jpeg" && t != "jpg" && t != "png" && t != "gif"){
                                     alert('Please select a valid image file');
                                     document.getElementById("img").value = '';
                                     return false;
                                 }
                                 if (file.size > 1024000){
                                     alert('max upload size is 1mb only');
                                     document.getElementById("image").value = '';
                                     return false;
                                 }
                                 return true;
                             }
                             </script>
                                </div>
                            </div>
                        
                         <div class="col-2">
                                <div class="input-group">
                                    <label class="label">License</label>
                                    <input class="input--style-4" type="file" name="license" id="license" required>
                                </div>
                            </div>
                            
                             <div class="row row-space">
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" name="submit" id="submit" type="submit">Submit</button>
                             
                        </div>
                            </div>
                            
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>
             <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->