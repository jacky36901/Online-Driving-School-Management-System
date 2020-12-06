<?php 
session_start();
if(!isset($_SESSION['sess']))
{
header("location:../index.php");
}
include("connection.php");
$user=$_SESSION['sess'];
$sql="select * from registration where username='$user'";
$res3=mysqli_query($con,$sql);
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
    .temp
    {
        font-size: 20px;
    }
    .header
    {
        background-color: brown;
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
	
    $query="select * from add_slot where username='$user' and status1=2 and date between'$txtStartDate'and'$txtEndDate' order by date";
    $tbl=mysqli_query($con,$query);
    
if($tbl==null){
   echo "<div style='position:relative;top:150px;color:blue;left:620px;'>NO CUSTOMER JOINED BETWEEN THESE DATES...</div>";
}
	else{
        ?>
		<br>
		

<?php 
        date_default_timezone_set("Asia/Kolkata");
echo "Date " . date("Y/m/d") . "<br>";
echo "Time " . date("h:i:sa") . "<br>";
?>	
   <div class="header">
    <center><img src="./assets/images/icons/driveon.png" width="400px" height="100px"></center>
    </div>		
		<br>							
<center><h2 style="font-size:50px">ATTENDANCE REPORT</h2>
				
<div style="font-size:25px;align:center;">
	
			  <?php echo $txtStartDate;?>  ---  <?php echo $txtEndDate;?>
</div>
    <div class="temp">
        <?php while($fetch1=mysqli_fetch_array($res3))
        {
            ?>
        <h1><?php echo $fetch1['name']?></h1>
        <?php echo $fetch1['hname']?>,
        <?php echo $fetch1['place']?>,
        <?php echo $fetch1['dis']?>,
        <?php echo $fetch1['pin']?>
                <?php
        }
        ?>
    </div>
    </center>
    <table border="1" width=100%>
                    <tr><th>NAME</th><th>TRAINER</th><th>DATE</th><th>VEHICLE TYPE</th><th>VEHICLE No.</th><th>SLOT</th><th>PLACE</th><th>TIME</th></tr>
					
					<?php  while($fetch=mysqli_fetch_array($tbl))
                                                    {
             $op=$fetch['trainer_id'];
               $m=$fetch['stud_id'];
                $rr="select * from registration where username='$m'";
                $q=mysqli_query($con,$rr);
                $res=mysqli_fetch_array($q);
            
            $rr2="select * from add_trainer where trainer_id='$op'";
                $q2=mysqli_query($con,$rr2);
                $res2=mysqli_fetch_array($q2);
                                                ?>
					<tr><td><?php echo $res['name']?></td><td><?php echo $res2['name']?><td><?php echo $fetch['date']?></td></td><td><?php echo $fetch['veh_type'] ?></td><td><?php echo $fetch['veh_name'] ?></td><td><?php echo $fetch['slot'] ?></td><td><?php echo $fetch['place'] ?></td><td><?php echo $fetch['time'] ?></td>
					<?php 
					}
	

					?>
        </tr>
    </table>
										

<div align="center">
        <br>
    <br>
    <br>
<input type="submit" name="sub" id="a" value="Print" onclick="fun();" size="500"/>
</div>
                        <br>
                        <br>
                        
						<?php
}
}
					     ?>
				
				
				</table>
    </div>
        