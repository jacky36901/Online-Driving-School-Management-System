<?php
include("connection.php");
$a=$_GET['b'];
$sql="update registration set status='0' where username='$a'";
$sql2="update stud_reg set status='0' where username='$a'";
$sql3="update login set status='0' where username='$a'";
mysqli_query($con,$sql);
mysqli_query($con,$sql2);
mysqli_query($con,$sql3);
echo "<script>";
	echo "alert('Unblocked')";
	echo "</script>";
?>
<html>
<body>
    <script>
    <?php
        echo("location.href='blocked_users.php'");
        ?>
    </script>
    </body>
</html>