<?php
include("connection.php");
$a=$_GET['b'];
$sql3="update add_slot set status='2' where slot_id='$a'";
mysqli_query($con,$sql3);
echo "<script>";echo "alert('Approved')";echo"</script>";
?>
<html>
<body>
    <script>
    <?php
        echo("location.href='slot_det.php'");
        ?>
    </script>
    </body>
</html>