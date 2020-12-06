<?php
include("connection.php");
$a=$_GET['b'];
$sql3="update add_slot set status1='10' where slot_id='$a'";
mysqli_query($con,$sql3);
echo "<script>";echo "alert('Not Attended')";echo"</script>";
?>
<html>
<body>
    <script>
    <?php
        echo("location.href='view_sess2.php'");
        ?>
    </script>
    </body>
</html>