<?php
include("connection.php");
$a=$_GET['b'];

$sql3="update rqst_slot set status='9' where username='$a'";

mysqli_query($con,$sql3);
echo "<script>";
	echo "alert('Removed')";
	echo "</script>";
?>
<html>
<body>
    <script>
    <?php
        echo("location.href='index.php'");
        ?>
    </script>
    </body>
</html>