<?php
session_start();
$con=mysqli_connect("localhost","root","root","smartdrive")or die("connection failed");
session_unset();
header("location:../index.php");
?>