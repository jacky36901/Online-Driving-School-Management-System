<?php
session_start();

if(!isset($_SESSION['sess']))
{
header("location:../index.php");
}
include("connection.php");
$user=$_SESSION['sess'];
$qsr="select * from login where username='$user'";
$mov=mysqli_query($con,$qsr);
if(isset($_POST['submit']))
{
    $a=$_POST['memname2'];
    $mql="update login set password='$a' where username='$user'";
    $mql2="update registration set password='$a',confirmpassword='$a' where username='$user'";
    if(mysqli_query($con,$mql))
    {
          echo "<script>";echo "alert('Password updated!')";echo"</script>";
         echo "<script>";
        echo("location.href='student_home.php'");
        echo"</script>";
    }
}

?>
<html>
<head>
  <style>
  body {
    margin: 0;
    background-color:black;

  }

  .mainnav a.active {
    background-color: #4CAF50;
    color: black;
  }
  .content
  {
  font-size:20px;
  font-family:Arno Pro Smbd Caption;
  }
  .logo{
  margin-top:10px;
  }
  p{
  font-size:20px;
  font-family:"Trebuchet MS", Helvetica, sans-serif;
  font-style:bold;
  margin-left:10;
  }

    .main{
     left: 0;
     bottom: 0;
     width: 100%;
     background-color:black;
     color: black;
  padding-center:20px;
  padding-left:20px;
     text-align: center;
  padding-bottom:50px;
  font-size:15px;

  font-size:20px;
  font-family:Arno Pro Smbd Caption;
  }
  .content
  {
  font-size:20px;
  font-family:Arno Pro Smbd Caption;
  }
  .input-container {
      display: -ms-flexbox; /* IE10 */
      display: flex;
      width: 100%;
      margin-bottom: 15px;
   color:black;


  }

  .icon {
      padding: 10px;
      background: yellow;
      color: black;
      width:20pxS;
      min-width: 50px;
      text-align: center;
  }

  .input-field {
      width: 100%;
      padding: 10px;
      outline: none;
   border-radius:5px;
    border-color: black;
    background-color:white;
  }
  a{
    color: white;
  }
  .input-field:focus {

      border: 2px solid yellow;
   background-color:white;
    color:black;
  }

  /* Set a style for the submit button */
  .btn {
      background-color: blue;
      color:white;
      padding: 15px 20px;
      border: none;
      cursor: pointer;
      width: 100%;
      margin: 40px;
      opacity: 0.9;
   border-radius:6px;
     }

  .h2{
  align:center;
  }


  .btn:hover {
      opacity: 1;

  }
  .form
  {
  margin-top:40px;

  }
  p{
  color:white;
  }
  .box{

  background-color:#111111;
  padding-top:50px;

  }
  #fi{
  border-radius:8px;
  align:center;
    margin:auto;

  }
  button.btn{
    color:white;
  }
  select
  {
      width: 105%;
      padding: 15px;
      outline: none;
      color: black;
      margin: auto;
   border-radius:5px;
    max-width:8000px;
    background-color: white;
  }
  .img
  {
height:50px;
width:50px;
  }
  .title{
    color: black;
  }
</style>
</head>

  <div class="box">

  <fieldset  id="fi"    style="width:600px; color:black; background-color:whitesmoke;">
  <legend></legend>
  <form name="form1"  class="form"   enctype="multipart/form-data"  style="max-width:500px; margin:auto"  method="post">
   <center><h3>CHANGE PASSWORD</h3></center>

	 <div class="market-updates">
		
<center>
       <form id="regForm" action="" method="post" >
   
   
        <input id="name11" type="text" name="memname" placeholder="Current password.." required>
       <p id="p101"></p>
                 <script>
                 $("#name11").on("blur", function() {
    if ( $(this).val().match('^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})') ) {
       $('#p101').hide();
         <?php
 						{
                            $user=$fe['Password'];
                        ?>
        if($(this).val().match('^<?php echo $user;?>$') )
            {

            }
        else
            {
                 $('#p101').show();
       $('#p101').text("*  Wrong password. Check your password again  *");
        $("#name11").focus();   
}
        <?php
                        }
        ?>
    } else {
        
       $('#p101').show();
       $('#p101').text("*Must contain at least one number and one uppercase and lowercase letter and special character, and at least 8 or more characters*");
        $("#name11").focus();
        
    }
});
    </script>
       <br><br>
       <input id="name10" type="text" name="memname2" placeholder="New password.." required>
       <p id="p102"></p>
                 <script>
                 $("#name10").on("blur", function() {
    if ( $(this).val().match('^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})') ) {
       $('#p102').hide();
    } else {
        
       $('#p102').show();
       $('#p102').text("*Must contain at least one number and one uppercase and lowercase letter and special character, and at least 8 or more characters*");
        $("#name10").focus();
        
    }
});
    </script>   
       
       
       
       <br><br>
        <input id="mob1" type="password" name="memmobile" placeholder="Confirm password.." onblur="Validate()"  required>
       <p id="p39"></p>
            
         <script type="text/javascript">
 function Validate() {
        var password = document.getElementById("name10").value;
        var confirmPassword = document.getElementById("mob1").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
             document.getElementById("mob1").value="";
            memmobile.focus();
        }
        return true;
    }
</script>
       
       <br> <br> 
     <input id="submit" type="submit" name="submit" value="CHANGE PASSWORD" style="color:black;">
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
  
</form>
        </center>  


  </fieldset>

  </div>




</body>
</html>

