<?php
include("connection.php");
$a=$_GET['m'];
$sql="update registration set status='1' where username='$a'";
$sql2="update stud_reg set status='1' where username='$a'";
$sql3="update login set Status='1' where username='$a'";
mysqli_query($con,$sql);
mysqli_query($con,$sql2);
mysqli_query($con,$sql3);
echo "<script>";echo "alert('Approved')";echo"</script>";
?>
<html>
<body>
    <script>
    <?php
        echo("location.href='student_approve.php'");
        ?>
    </script>
    </body>
</html>