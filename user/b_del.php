<?php
include("connection.php");
$b=$_GET['b'];
$sql2="update user_details set status='9' where username='$b'";
$sql3="update login set status='9' where Username='$b'";
$sql4="update team set status='9' where Username='$a'";
$sql5="update sponsor set status='9' where sponsor_name='$a'";
mysqli_query($con,$sql2);
mysqli_query($con,$sql3);
mysqli_query($con,$sql4);
mysqli_query($con,$sql5);
echo "<script>";
	echo "alert('USER BLOCKED!')";
	echo "</script>";
?>
<html>
<body>
    <script>
    <?php
        echo("location.href='user_view.php'");
        ?>
    </script>
    </body>
</html>