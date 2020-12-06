<?php
session_start();
$con=mysqli_connect("localhost","root","root","smartdrive")or die("connection failed");


$reg= $_SESSION['reg_no'];
if(isset($_POST['submit']))
  {
       $user_bio=$_POST['user_bio'];
              $user_email=$_POST['user_email'];
                  $user_phn=$_POST['user_phn'];
                //  $user_img=$_POST('user_img');
                $sql89="update user_details set user_bio='$user_bio',user_email='$user_email',user_phn='$user_phn' where reg_no='$reg'";
   if(mysqli_query($con,$sql89))
   {
         echo "<script>";echo "alert('Successfully updated!')";echo"</script>";
        echo "<script>";
       echo("location.href='profile.php'");
       echo"</script>";
   }
}

$sql="SELECT ud.fullname,ud.reg_no,ud.user_bio,ud.branch_id,ud.user_email,ud.user_img,ud.user_phn,lg.pass FROM user_details  ud INNER JOIN login lg ON lg.reg_no  = ud.reg_no WHERE ud.reg_no='$reg'";
$result=mysqli_query($con,$sql);
while($row3 = mysqli_fetch_array($result))
{
$name=$row3["fullname"];
$reg=$row3["reg_no"];
$bio=$row3["user_bio"];
$branch=$row3["branch_id"];
$email=$row3["user_email"];
$phn=$row3["user_phn"];
// $file=$_FILES['user_img']['name'];
//     $location=$_FILES['user_img']['tmp_name'];
//     $folder="image/";
$pass=$row3["pass"];

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
 <body onload='reloadFunction()'>

   <div class="box">

   <fieldset  id="fi"    style="width:600px; color:black; background-color:whitesmoke;">
   <legend></legend>
   <form name="form1"  class="form"   enctype="multipart/form-data"  style="max-width:500px; margin:auto" action="" method="post">
    <center><h4> Edit Profile</h4></center>
    <br>
    <center><label class="err" style="display:nne; color:red" id="ema"> You Can only Edit these fields</label><br></center>

    <br>
    <!-- <div class="img">
      <img src="data:image/jpeg;base64,<?php echo base64_encode($row['user_img']); ?>" alt="no image" height="120px" width="120px"/>

    </div> -->

    <div class="row">
      <p><div class="title">Write something about u</div><input class="input-field col-md-12" value="<?php echo $bio ;?>"   type="text" placeholder=" "
      name="user_bio" id="user_bio"   required>


                                              </p>
                                            </div>
                                            <br>




    <div class="row">
    <p><div class="title">Email</div><input class="input-field col-md-6" value="<?php echo $email ;?>" type="text"   placeholder="" name="user_email"id="user_email" onchange="Validateemail1()"required>
  			            <label class="errormail" style="display:nne; color:red" id="email_3"></label><br>

  			                            <script>
                                                function Validateemail1()
                                                {
                                                     var user_email = document.getElementById('user_email');
                                                       var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                                                       if (!filter.test(user_email.value)) {
                                                        user_email.value="";
                                                        $("#email_3").html('Please provide a valid email address').fadeIn().delay(4000).fadeOut();
                                                        return false;
                                                        }
                                                    return false;
                                                }
                                                </script>
  </p>
    </div>

    <br>
    <div class="row">
      <p><div class="title">Phone number</div><input class="input-field col-md-12" value="<?php echo $phn ;?>" type="text" placeholder="" name="user_phn" id="user_phn" required onchange="Validatep()">
        <label class="errormob" style="display:none; color:red" id="mobile_1"></label>
                                   <script>
                                   function Validatep()
                                   {
                                       var val = document.getElementById('user_phn').value;
                                     //  var user_phn =/^(?!(\d)\1{9})(?!0123456789|1234567890|0987654321)\d{10}$/ ;

                                       if (!val.match(/^(?!(\d)\1{9})(?!0123456789|1234567890|0987654321|0000000000|1111111111|22222222222|3333333333|4444444444|5555555555|6666666666|7777777777|8888888888|9999999999|1000000000|2000000000|3000000000|40000000000|5000000000|6000000000|7000000000|8000000000|9000000000)\d{10}$/))
                                       {
                                       $("#mobile_1").html('Invalid Phone number..!').fadeIn().delay(4000).fadeOut();
                                       document.getElementById('user_phn').value = "";
                                           return false;
                                       }
                                       return true;
                                   }
                                   </script>
                                 </p>
                                 </div>
<br>
    <br>

    <div class="input-container">
        <input class="btn" type="submit" name="submit" value="UPDATE">
    </div>

   </div>

   </form>

   </fieldset>

   </div>




 </body>
 <script type="text/javascript">
  function reloadFunction(){
      document.getElementById('repass').style.display="none";
      document.getElementById('reenter').style.display="none";
   }

 function showreenterpass()

 {
   // if(document.getElementById('chapss').value=="")
   // {
   //   document.getElementById('repass').style.display="none";
   //  document.getElementById('reenter').style.display="none";
   // }
   // else{
     document.getElementById('repass').style.display="block";
    document.getElementById('reenter').style.display="block";
   //
   // }


 }
  function Validatepass3()
  {
    if(document.getElementById('chpass').value=="")
     {

      document.getElementById('repass').style.display="none";
    document.getElementById('reenter').style.display="none";
     }

  }
 </script>
  </html>
<?php
include('footer.php') ?>
