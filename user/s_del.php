<?php
include("connection.php");
$b=$_GET['b'];
$sql2="update registeration set status='9' where username='$b'";
$sql3="update login set status='9' where username='$b'";
mysqli_query($con,$sql2);
mysqli_query($con,$sql3);
echo "<script>";
	echo "alert('Removed')";
	echo "</script>";
?>
<html>
<body>
    <script>
    <?php
        echo("location.href='school_approve.php'");
        ?>
    </script>
    </body>
</html>