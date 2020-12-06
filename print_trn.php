<?php 
session_start();
if(!isset($_SESSION['sess']))
{
header("location:../index.php");
}
include("connection.php");
$user=$_SESSION['sess'];
$sql="select * from registeration where username='$user'";
$res=mysqli_query($con,$sql);
?><head>
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
    <title></title>
<style>
 th{
			height: 40px;
			background-color: brown;
			color: white;
            text-align: center;
		}
        td{
            text-align: center;
            height: 60px;
        }
        INPUT[TYPE=SUBMIT],INPUT[TYPE=RESET]
{
	background-color:#CCFF66;
	COLOR:BLACK;
	HEIGHT:35pX;
	WIDTH:100PX;
    border-radius:8px;
}
    
    </style>
 </head>
	<!--user--->

       

<div class="report">
<link rel="stylesheet" href="file:///F|/css/print.css" type="text/css">
<script>
    function fun()
    { 
       var a=document.getElementById('a');
       a.style.visibility='hidden';
       window.print();
      
           }
    </script>
		<?php
		if(isset($_POST['search']))
{
    $txtStartDate=$_POST['txtStartDate'];
    $txtEndDate=$_POST['txtEndDate'];
	//echo $txtStartDate;
	
    $query="select * from add_trainer where school_id='$user' and jdate between'$txtStartDate'and'$txtEndDate' order by jdate";
    $tbl=mysqli_query($con,$query);
    
if($tbl==null){
   echo "<div style='position:relative;top:150px;color:blue;left:620px;'>NO CUSTOMER JOINED BETWEEN THESE DATES...</div>";
}
	else{
        ?>
		<br>
		<br>
		<br>

		

	
									
<h2 style="position:relative;left:450px;top:-50px;font-size:50px">TRAINER REPORT</h2>
				<table border="1" style="position:relative;width:1200px;left:50px;top:-40px;">
				
					<div style="position:relative;left:350px;top:-60px">
		<label>
            <br><br>
			<font color="green" size="5px">Date From : </font>
		</label>   <?php echo $txtStartDate;?>
		<br>
		<label>
			<font color="green" size="5px">Date To:</font>
		</label>   <?php echo $txtEndDate;?>
</div>
                    <tr><th>NAME</th><th>DATE OF BIRTH</th><th>GENDER</th><th>PHONE NUMBER</th><th>HOUSE NAME</th><th>PLACE</th><th>DISTRICT</th><th>PINCODE</th><th>EMAIL</th><th>IMAGE</th></tr>
					
					<?php  while($fetch=mysqli_fetch_array($tbl))
                                                    {
             
                                                ?>
					<tr><td><?php echo $fetch['name']?></td><td><?php echo $fetch['dob']?></td><td><?php echo $fetch['gender'] ?></td><td><?php echo $fetch['phone'] ?></td><td><?php echo $fetch['hname'] ?></td><td><?php echo $fetch['place'] ?></td><td><?php echo $fetch['dis'] ?></td><td><?php echo $fetch['pin'] ?></td><td><?php echo $fetch['email'] ?></td><td><img src="../images/<?php echo $fetch['image']?>" width="200px" height="200px"></td></tr>
</td>
					<?php 
					}
	

					?>
										
<div style="position:relative;left:950px;top:400px">
	<label>Signature</label>
</div>
<div style="position:relative;left:600px;top:450px">
<input type="submit" name="sub" id="a" value="Print" onclick="fun();" size="500"/>
</div>
                        <br>
                        <br>
                        <div style="position:relative;left:600px;top:450px">
<a href="index.php"><font color="red"><b style="font-size:25px;">Back</b></font></a>
</div>
                        
						<?php
}
}
					     ?>
				
				
				</table>
    </div>
        