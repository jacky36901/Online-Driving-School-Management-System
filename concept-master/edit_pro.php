<?php
session_start();
$con=mysqli_connect("localhost","root","root","smartdrive")or die("connection failed");
$user=$_SESSION['sess'];
$sql="select * from registeration where user_type=3";
$res=mysqli_query($con,$sql);

$sq3="select * from school_reg";//select active list of country
$place=mysqli_query($con,$sq3);
if(isset($_POST['submit']))
{
 
  
$a=$_POST['name']; 
$f=$_POST['email'];
$g=$_POST['username'];    
$h=$_POST['password'];
$i=$_POST['confirmpassword'];
$l=$_POST['image'];
$p=$_POST['user_type'];  
$q=$_POST['license'];  
 $sql89="update registeration set name='$a' ,email='$f',username='$g',image='$l',license='$q' where user_type='3'";
    if(mysqli_query($con,$sql89))
    {
          echo "<script>";echo "alert('Successfully updated!')";echo"</script>";
         echo "<script>";
        echo("location.href='editprofilefarmer.php'");
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
    <center><label class="err" style="display:nne; color:red" id="ema"> </label><br></center>

    <br>
 <?php
                               while($fetch=mysqli_fetch_array($res))
                               {
                                ?>
                  
        <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input id="name" type="text" name="name"  value="<?php echo $fetch['name']?>" class="form-control customize"  readonly  required/> 
       
 

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
                                </div>
                            </div>
       
       
       

    <div class="row">
    <p><div class="title">Email</div><input class="input-field col-md-6" value="<?php echo $email['email']?>" type="text"   placeholder="" name="email"id="email" required>
  			            <label class="errormail" style="display:nne; color:red" id="email"></label><br>
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

                                </div>
                            </div>
  			                         

                                                              <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Phone No</label>
                                        <input id="phone" type="number" name="phone" value="<?php echo $fetch['phone']?>"  class="form-control customize" onchange="Validatep()"; required/>
                                        
<label class="errormob" style="display:none; color:black" id="mobile_1"></label>
                                              <script>
                                              function Validatep()
                                              {
                                                  var val = document.getElementById('phone').value;
                                                //  var user_phn =/^(?!(\d)\1{9})(?!0123456789|1234567890|0987654321)\d{10}$/ ;

                                                  if (!val.match(/^(?!(\d)\1{9})(?!0123456789|1234567890|0987654321|0000000000|1111111111|22222222222|3333333333|4444444444|5555555555|6666666666|7777777777|8888888888|9999999999|1000000000|2000000000|3000000000|40000000000|5000000000|6000000000|6777777777|7666666666|6888888888|6999999999|7888888888|7999999999|8666666666|8777777777|8999999999|9666666666|9777777777|9888888888|7000000000|8000000000|9000000000)\d{10}$/))
                                                  {
                                                  $("#mobile_1").html('Invalid Phone number..!').fadeIn().delay(4000).fadeOut();
                                                  document.getElementById('phone').value = "";
                                                      return false;
                                                  }
                                                  return true;
                                              }
                                              </script>  
    
                     
                                                           <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input id="phone" type="number" name="phone" value="<?php echo $fetch['address']?>"  class="form-control customize" onchange="Validatep()"; required/>
                                        
                                        
 <div class="row">
    <p><div class="title">Name</div><input class="input-field col-md-6" value="<?php echo $image['image']?>" type="text"   placeholder="" name="name"id="name" required>

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
                        <?php }
       ?>
                         
                            
                             <div class="row row-space">
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" name="submit" id="submit" type="submit">Submit</button>
                             
                        </div>
                            </div>
                            
                    </form>
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
