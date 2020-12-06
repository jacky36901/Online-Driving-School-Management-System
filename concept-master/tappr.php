<?php
include("connection.php");
$a=$_GET['m'];

$sql3="update rqst_slot set status='3' where username='$a'";

mysqli_query($con,$sql3);
echo "<script>";echo "alert('Approved')";echo"</script>";
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