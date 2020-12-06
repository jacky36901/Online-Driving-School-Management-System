<?php
include('connection.php');
include('header.php');
session_start();
$reg= $_SESSION['reg_no'];
// if(isset($_POST['submit']))
//   {
//        $user_bio=$_POST('user_bio');
//           $branch_id=$_POST('user_branch');
//               $user_email=$_POST('user_email');
//                   $user_phn=$_POST('user_phn');
//                 //  $user_img=$_POST('user_img');
//
// }
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
       color:black;
       padding: 15px 20px;
       border: none;
       cursor: pointer;
       width: 150px;
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
 <body onload='reloadFunction()'>

   <div class="box">

   <fieldset  id="fi"    style="width:600px; color:black; background-color:whitesmoke;">
   <legend></legend>
   <form name="form1"  class="form"   enctype="multipart/form-data"  style="max-width:500px; margin:auto"  method="post">
    <center><h4>Profile</h4></center>
    <br>
    <!-- <div class="img">
      <img src="data:image/jpeg;base64,<?php echo base64_encode($row['user_img']); ?>" alt="no image" height="120px" width="120px"/>

    </div> -->
    <div class="row">
    <p><div class="title">Full Name</div><input class="input-field col-md-12" type="text" placeholder="" name="fullname" readonly id="fullname" value="<?php echo $name ;?>" required>


   </p>
   </div>

   <br>

    <div class="row">

    <p><div class="title">Reg.No/Emp.Id</div> <input class="input-field col-md-12" value="<?php echo $reg ;?>" type="text"  readonly placeholder="" name="reg_no" id="reg_no"  required>

    </p>

   </div><br>
    <div class="row">
      <p><div class="title">Write something about u</div><input class="input-field col-md-12" value="<?php echo $bio ;?>"  readonly type="text" placeholder=" "
      name="user_bio" id="user_bio"   required>


                                              </p>
                                            </div>
                                            <br>


   <div class="row">
   <p><div class="title">Branch</div>
     <select name="user_branch" class="col-md-12"  required readonly>
        <option value="">-Select Branch-</option>
            <?php
            $branch_select_sql ="SELECT DISTINCT branch_id, branch_name FROM branch  ORDER BY branch_name ASC";
            $branch_array=mysqli_query($con,$branch_select_sql);
            while ($row_branch = mysqli_fetch_array($branch_array))
            {
                if($row_branch['branch_id'] == $branch){
                    echo "<option selected='selected' value=".$row_branch['branch_id'].">".$row_branch['branch_name']."</option>";
              }else {
                    echo "<option value=".$row_branch['branch_id'].">".$row_branch['branch_name']." </option>";
                }
            }
            ?>
      </select>

   <p>
   </div>
   <br>
    <div class="row">
    <p><div class="title">Email</div><input class="input-field col-md-6" value="<?php echo $email ;?>" type="text"  readonly placeholder="" name="user_email" id="user_email" required onchange="Validateemail1">
                    <label class="errormail" style="display:nne; color:red" id="email_3"></label><br>

</div>

    <br>
    <div class="row">
      <p><div class="title">Phone number</div><input class="input-field col-md-12" value="<?php echo $phn ;?>" type="text" readonly placeholder="" name="user_phn" id="user_phn" required onchange="Validatep()">
                     <label class="errormob" style="display:none; color:red" id="mobile_1"></label>

                                              </p>



    </div>
    <br>


    <br>

      <div class="input-container">

     <button class="btn" name="submit" value="Edit"><a href="edit_pro.php">Edit</a></button>
     <button class="btn" name="submit" value="Edit"><a href="chpass.php">Change Password</a></button>

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
