<?php
include("connection.php");
$user=$_SESSION['sess'];
$a=$_GET['b'];
$sql3="update stud_reg set school_id='$a' where username='$user'";
mysqli_query($con,$sql3);
echo "<script>";echo "alert('Selected')";echo"</script>";
?>
<html>
<body>
    <script>
    <?php
        echo("location.href='studprofile_complete.php'");
        ?>
    </script>
    </body>
</html>