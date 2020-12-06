          <?php
session_start();
if(!isset($_SESSION['sess']))
{
header("location:index.php");
}

$con=mysqli_connect("localhost","root","root","smartdrive")or die("connection failed");
$a=$_GET['b'];
$sql="select * from registeration where username='$a'";
$exe=mysqli_query($con,$sql);
$sql2="select * from stud_reg where username='$a'";
$exe2=mysqli_query($con,$sql2);

//$sl="select player_name,dob,mobile from team_player  where tid='$a'";
//$row=mysqli_query($con,$sl);
?>
<center><h2 style="color:blue"><b style="font-size:25px;">VIEW STUDENT DETAILS</b></h2></center>
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
                    
                   <?php
                    while($fetch2=mysqli_fetch_array($exe2))
						{
							?>
                    
                    
                    <tr><td></td><td></td><td><b style="font-size:15px;">Date of birth   :</b></td><td style="font-size:15px;"><?php echo $fetch2['dob']?>
                                  
                                    </td>
							</tr>
                    <tr><td></td><td></td><td><b style="font-size:15px;">Phone  :</b></td><td style="font-size:15px;"><?php echo $fetch['phone']?>
                                  
                                    </td>
							</tr>
                    <tr><td></td><td></td><td><b style="font-size:15px;">Gender :</b></td><td style="font-size:15px;"><?php echo $fetch2['gender']?>
                                  
                                    </td>
						</tr>
                     <tr><td></td><td></td><td><b style="font-size:15px;">Address   :</b></td><td style="font-size:15px;"><?php echo $fetch['address']?>
                                  
                                   </td>
							</tr>
                    
                    
							</tr>
                    <tr><td></td><td></td><td><b style="font-size:15px;">Email :</b></td><td style="font-size:15px;"><?php echo $fetch['email']?>
                                  
                                    <?php }?></td>
							</tr>
                    	<?php }?>
                    <tr></tr>
							<tr><td></td><td></td><td colspan=2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        
<a href="tapp.php?m=<?php echo $a;?>"><font color="blue"><b style="font-size:15px;">Approve</b></font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<a href="tdel.php?b=<?php echo $a;?>"><font color="red"><b style="font-size:15px;">Remove</b></font></a></td>

							</tr>
						
					

								<?php
						
mysqli_close($con);
						?>
					
				</table>
    </center>
			</form>
              
              

              
              
              