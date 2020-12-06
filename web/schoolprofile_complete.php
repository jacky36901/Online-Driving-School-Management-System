<?php
session_start();
if(!isset($_SESSION['sess']))
{
header("location:index.php");
}
$con=mysqli_connect("localhost","root","root","smartdrive")or die("connection failed");
$c=$_SESSION['sess'];
$a=trim($c);
 $sql2="select * from registeration,school_reg,login where registeration.username='$a' and school_reg.username='$a' and login.username='$a'";
 $res2=mysqli_query($con,$sql2);
?>

<!DOCTYPE html>
<html lang="en">
   <!-- Basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- Mobile Metas -->
   <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
   <!-- Site Metas -->
   <title>Torneo</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- Site Icons -->
   <link rel="shortcut icon" href="" type="image/x-icon" />
   <link rel="apple-touch-icon" href="">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <!-- Site CSS -->
   <link rel="stylesheet" href="style.css">
   <!-- Colors CSS -->
   <link rel="stylesheet" href="css/colors.css">
   <!-- ALL VERSION CSS -->	
   <link rel="stylesheet" href="css/versions.css">
   <!-- Responsive CSS -->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- Custom CSS -->
   <link rel="stylesheet" href="css/custom.css">
   <!-- font family -->
   <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
   <!-- end font family -->
   <link rel="stylesheet" href="css/3dslider.css" />
   <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
   <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
   <script src="js/3dslider.js"></script>
    <style>
       select
    {
      padding: 10px;
  width: 100%;
  font-size: 17px;
    border-radius: 5px;
        color:gray;
  font-family: Raleway;
  border: 1px solid #aaaaaa;   
    }
    
    </style>
   </head>
   <body class="game_info" data-spy="scroll" data-target=".header">
      <!-- LOADER -->
      <div id="preloader">
         <img class="preloader" src="images/loading-img.gif" alt="">
      </div>
      <!-- END LOADER -->
      <section id="top">
         <header>
            <div class="container">
               <div class="header-top">
                  <div class="row">
                     <div class="col-md-6">
                        <div class="full">
                           <div class="logo">
                              <a href="index.php"><img src="images/torneo_logo.png" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="right_top_section">
                           <!-- social icon -->
                           <ul class="social-icons pull-left">
                              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                              <li><a class="youtube" href="#"><i class="fa fa-youtube-play"></i></a></li>
                              <li><a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a></li>
                           </ul>
                           <!-- end social icon -->
                           <!-- button section -->
                           <ul class="login">
                              <li>
                                 <div class="cart-option">
                                    <a href="logout.php" class="login"><i class="fa fa-user"></i>Logout</a>
                                      <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
            <div class=" dropdown-header noti-title">
              <h6 class="text-overflow m-0">Welcome!</h6>
            </div>
            <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-single-02"></i>
              <span>My profile</span>
            </a>
            <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-settings-gear-65"></i>
              <span>Settings</span>
            </a>
            <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-calendar-grid-58"></i>
              <span>Activity</span>
            </a>
            <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-support-16"></i>
              <span>Support</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#!" class="dropdown-item">
              <i class="ni ni-user-run"></i>
              <span>Logout</span>
            </a>
          </div>
                                 </div>
                              </li>
                           </ul>
                           <!-- end button section -->
                        </div>
                     </div>
                  </div>
               </div>
               <div class="header-bottom">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="full">
                           <div class="main-menu-section">
                              <div class="menu">
                                
                                
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </header>
         <div class="inner-page-banner">
            <div class="container">
            </div>
         </div>
         <div class="inner-information-text">
            <div class="container">
               <h3>Profile</h3>
               <ul class="breadcrumb">
                  <li><a href="index.php">Home</a></li>
                  <li class="active">Complete profile</li>
               </ul>
            </div>
         </div>
      </section>
      
      
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
}

#regForm {
  background-color: #ffffff;
  margin: 100px auto;
  font-family: Raleway;
  padding: 40px;
  width: 70%;
  min-width: 300px;
}
#b
    {
        width:10px;
    }
h1 {
  text-align: center;  
}

input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
    border-radius: 5px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}
    textarea
    {
 padding: 10px;
  width: 100%;
  font-size: 17px;
    border-radius: 5px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
    }

button {
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4CAF50;
}
</style>
<body>
 <br><br><br> <br><br><br> <br><br><br>
<form id="regForm" action="/action_page.php">
   
  <h1>School Profile:</h1>
  <!-- One "tab" for each step in the form: -->
 <?php 
    session_start();
if(!isset($_SESSION['sess']))
{
header("location:index.php");
}
$con=mysqli_connect("localhost","root","root","smartdrive")or die("connection failed");
$a=$_GET['b'];
$sql="select * from registeration where username='$a' and user_type=3";
$exe=mysqli_query($con,$sql);
$sql2="select * from school_reg where username='$a'";
$exe2=mysqli_query($con,$sql2);

    ?>
<center><h2 style="color:blue"><b style="font-size:25px;">VIEW SCHOOL DETAILS</b></h2></center>
<form method="POST">
    <center><br><br>
				<table class="table table-striped">                        
						 <?php
						while($fetch=mysqli_fetch_array($exe))
						{
							?>
                    <tr><td></td><td></td><td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="../images/<?php echo $fetch['image']?>" width="200px" height="200px"></td></tr>
                    <tr><td></td><td></td><td><b style="font-size:15px;">Name :</b></td><td style="font-size:15px;"><?php echo $fetch['name']?>
                                    </td>
						</tr>
                     <tr><td></td><td></td><td><b style="font-size:15px;">Email :</b></td><td style="font-size:15px;"><?php echo $fetch['email']?>
                                    </td>
						</tr>
                     <tr><td></td><td></td><td><b style="font-size:15px;">Username :</b></td><td style="font-size:15px;"><?php echo $fetch['username']?>
                                    </td>
						</tr>
                     <tr><td></td><td></td><td><b style="font-size:15px;">Password :</b></td><td style="font-size:15px;"><?php echo $fetch['password']?>
                                    </td>
						</tr>
                      <?php
                    while($fetch2=mysqli_fetch_array($exe2))
						{
							?>
                    <tr><td></td><td></td><td><b style="font-size:15px;">License   :</b></td>
                   <td> <img src="../images/<?php echo $fetch2['license']?>" width="200px" height="200px">
                                    </td>
						</tr>
     
							
                   
           <?php
    }
    ?>
            
  <div class="tab">Manager:
      
     <p> <input id="b" type="checkbox" name="same">   Select if captain is manager</p>
    <p><input id="fname" placeholder="Manager name..." oninput="this.className = ''" name="fname">
      
       <p id="p1"></p>
                 <script>
                 $("#fname").on("blur", function() {
    if ( $(this).val().match('^[a-zA-Z]{3,16}$') ) {
       $('#p1').hide();
     } else {
         $('#p1').show();
       $('#p1').text("* please enter a valid name *");
        $("#fname").focus();
        
    }
});
    </script>     
      
      
      
      
      </p>
            
               <p><input id="dob" placeholder="Date of birth" type="date" oninput="this.className = ''" name="dob" onblur="return checkDOB()" >
                    <p id="p4"></p>
       
       <script type="text/javascript">
    function checkDOB() {
        var dateString = document.getElementById('dob').value;
        var myDate = new Date(dateString);
        var today = new Date();
        if (today.getFullYear() - myDate.getFullYear() > 18) { 
            $('#p4').hide();
        }
       else{
           
            $('#p4').show();
            $('#p4').text("* Eligibility 18 years ONLY. *");
        $("#dob").focus();
}
    }
</script>
       
       
       
       </p>
             
                  <p><input id="num" placeholder="Numberof players..." type="number" oninput="this.className = ''" name="num">
    
     <p id="p5"></p>
                 <script>
                 $("#num").on("blur", function() {
                    
    if ( $(this).val() >= 11) {
       $('#p5').hide();
    } else {
         $('#p5').show();
       $('#p5').text("* Team should contain atleast 11 members *");
        $("#num").focus();
        
    }
});
    </script>     
    
    
    
    </p>
  
                   <p><input id="hname" placeholder="House name." type="text" oninput="this.className = ''" name="hname" required>
               <p id="p11"></p>
                 <script>
                 $("#hname").on("blur", function() {
    if ( $(this).val().length==0 ) {
      $('#p11').show();
       $('#p11').text("* required field *");
        $("#hname").focus();
    } else {
          $('#p11').hide();
        
        
    }
});
    </script>
    
    
    </p>
       <p><input id="poffice" placeholder="postoffice" type="text" oninput="this.className = ''" name="poffice" required>
              <p id="p10"></p>
                 <script>
                 $("#poffice").on("blur", function() {
    if ( $(this).val().length==0 ) {
      $('#p10').show();
       $('#p10').text("* required field *");
        $("#poffice").focus();
    } else {
          $('#p10').hide();
        
        
    }
});
    </script>    
             </p>
      <p><select id="country" type="dropdown" name="Country" required>
                     <option value disabled selected>--Country--</option>
                     <option value="under-25">India</option>
                     
                     </select>
          
           <p id="p191"></p>
                 <script>
                 $("#country").on("blur", function() {
    if ( $(this).val().length==0 ) {
      $('#p191').show();
       $('#p191').text("* required field *");
        $("#country").focus();
    } else {
          $('#p191').hide();
        
        
    }
});
    </script>  
          
               </p>
<p><select type="dropdown" name="state" required>
                   <option value disabled selected>--State--</option>
                     
                     
                     </select>
               </p>

        <p><input type="text" name="district"  >
                 
                     
               
               </p>
                <p><input id="mob" placeholder="Mobile No..." type="number" oninput="this.className = ''" name="fname">
    
    <p id="p9"></p>
                 <script>
                 $("#mob").on("blur", function() {
    if ( $(this).val().match('^[6-9][0-9]{9,9}$') ) {
       $('#p9').hide();
    } else {
         $('#p9').show();
       $('#p9').text("* please enter a valid mobile number *");
        $("#mob").focus();
        
    }
});
    </script>
    
    </p>
              <p><input id="email" placeholder="Email..." type="email" oninput="this.className = ''" name="email">
    
    
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
    
    </p>
   Aadhar proof:
             <p><input id="aadhar" placeholder="Aadhar proof..." type="file"  oninput="this.className = ''" name="aadhar">
    <p id="p19"></p>
                 <script>
                 $("#aadhar").on("blur", function() {
    if ( $(this).val().length==0 ) {
      $('#p19').show();
       $('#p19').text("* required field *");
        $("#aadhar").focus();
    } else {
          $('#p19').hide();
        
        
    }
});
    </script>   
    
    
    
    </p>
                  Photo:
             <p><input id="photo" placeholder="photo .." type="file"  oninput="this.className = ''" name="fname">
    
     <p id="p20"></p>
                 <script>
                 $("#photo").on("blur", function() {
    if ( $(this).val().length==0 ) {
      $('#p20').show();
       $('#p20').text("* required field *");
        $("#photo").focus();
    } else {
          $('#p20').hide();
        
        
    }
});
    </script>   
    
    
    </p>
             <?php
}
    ?> 
</div>

   <div class="tab">Add Team Member:
       <br>
       <br>
     <center><img id="blah" src="#" alt="your image" /></center> <br>
  <input id="file" type='file' onchange="readURL(this);" />
       <p id="p21"></p>
                 <script>
                 $("#file").on("blur", function() {
    if ( $(this).val().length==0 ) {
      $('#p21').show();
       $('#p21').text("* required field *");
        $("#file").focus();
    } else {
          $('#p21').hide();
        
        
    }
});
    </script>   
       
       
       <br><br>
       <input id="name1" type="text" name="name" placeholder="Name..">
       <p id="p101"></p>
                 <script>
                 $("#name1").on("blur", function() {
    if ( $(this).val().length==0 ) {
      $('#p101').show();
       $('#p101').text("* required field *");
        $("#name").focus();
    } else {
          $('#p101').hide();
        
        
    }
});
    </script>   
       
       
       
       <br><br>
        <input id="mob1" type="number" name="mobile" placeholder="Mobile..">
       <p id="p39"></p>
                 <script>
                 $("#mob1").on("blur", function() {
    if ( $(this).val().match('^[6-9][0-9]{9,9}$') ) {
       $('#p39').hide();
    } else {
         $('#p39').show();
       $('#p39').text("* please enter a valid mobile number *");
        $("#mob1").focus();
        
    }
});
    </script>
       
       <br><br>
        <script>
         function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result)
                        .width(200)
                        .height(200);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
        </script>
        
    </div>
  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Submit</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
      <span class="step"></span>
 </div>
</form>

<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>


      <!-- ALL JS FILES -->
      <script src="js/all.js"></script>
      <!-- ALL PLUGINS -->
      <script src="js/custom.js"></script>
   </body>

</html>
