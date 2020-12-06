<?php
include("connection.php");
$a=$_GET['b'];
$sql3="update add_slot set status='10' where slot_id='$a'";
mysqli_query($con,$sql3);
echo "<script>";echo "alert('Removed')";echo"</script>";
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