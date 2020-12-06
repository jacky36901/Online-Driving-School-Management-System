<?php
$con=mysqli_connect("localhost","root","root","smartdrive")or die("connection failed");
$a=$_GET['m'];
$sql="update registeration set status='1' where username='$a'";
$sql2="update school_reg set status='1' where username='$a'";
$sql3="update login set status='1' where username='$a'";
mysqli_query($con,$sql);
mysqli_query($con,$sql2);
mysqli_query($con,$sql3);
echo "<script>";echo "alert('Approved')";echo"</script>";
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