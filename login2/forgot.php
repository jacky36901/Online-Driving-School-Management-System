<?php
$connection = mysqli_connect('localhost', 'root', '','pass');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
?>