<?php
session_start();
include("connection.php");
session_unset();
header("location:../index.php");
?>