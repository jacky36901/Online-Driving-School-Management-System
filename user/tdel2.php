<?php
include("connection.php");
$a=$_GET['b'];
$sql="update registration set status='9' where username='$a'";
$sql2="update stud_reg set status='9' where username='$a'";
$sql3="update login set status='9' where username='$a'";
mysqli_query($con,$sql);
mysqli_query($con,$sql2);
mysqli_query($con,$sql3);
echo "<script>";
	echo "alert('Blocked')";
	echo "</script>";
?>
<html>
<body>
    <script>
    <?php
        echo("location.href='active_user.php'");
        ?>
    </script>
    </body>
</html>