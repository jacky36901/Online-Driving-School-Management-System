             



              <?php
session_start();
if(!isset($_SESSION['sess']))
{
header("location:index.php");
}



$con=mysqli_connect("localhost","root","root","smartdrive")or die("connection failed");
$sql="select * from registeration where status=0 and user_type=2";
$exe=mysqli_query($con,$sql);
?>
        



<center><h2 style="color:blue"><b style="font-size:25px;">TRAINER DETAILS</b></h2></center>
<form method="POST">
    <br><br>
				<table class="table table-striped">
					<thead>
						<tr> 
						<th style="font-size:15px;"><b>NAME</b></th>
						
						<th></th>
						
                        </tr>

						</thead>
					<tbody>
						<?php
						while($fetch=mysqli_fetch_array($exe))
						{
							?>
						<tr>
							
							<td style="font-size:15px;"><?php echo $fetch['name']?></td>
							
													
							<td><a href="trainer_view.php?b=<?php echo $fetch['reg_id'];?>">
                                <font color="red"><b style="font-size:15px;">view</b></font></a></td>
							
							</tr>
							
					
								<?php
						}
mysqli_close($con);
						?>
					</tbody>
				</table>
			</form>
