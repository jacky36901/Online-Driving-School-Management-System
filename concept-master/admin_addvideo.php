 <?php
session_start();
if (isset($_SESSION['loginid'])) {
	$loginid=$_SESSION['loginid'];
}
else{
 		echo "<script> window.location.href='llogin.php';</script>";
 }
?>	
 <!DOCTYPE html>
<html lang="zxx" class="no-js">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="shortcut icon" href="img/fav.html">

<meta name="author" content="colorlib">

<meta name="description" content="">

<meta name="keywords" content="">

<meta charset="UTF-8">

<title>guiding videos</title>
<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">

<link rel="stylesheet" href="css/linearicons.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/magnific-popup.css">
<link rel="stylesheet" href="css/nice-select.css">
<link rel="stylesheet" href="css/animate.min.css">
<link rel="stylesheet" href="css/owl.carousel.css">
<link rel="stylesheet" href="css/jquery-ui.css">
<link rel="stylesheet" href="css/main2.css">
<style type="text/css">
	.font {
 		 font-family: times sherif;
 		 font-size: 24px;
 		 color: #04091e;
 		 
	} 
	.sfont
	{
		font-family: times sherif;
 		font-size: 18px;
 		color: #04091e;
	}
	.a{
		background-color:#d1cdc;
	}
	.input {
 		 font-family: times sherif;
 		 border-radius: 7px;
 		 color: #04091e;
 		 
	} 
	.image{
		width: 340px;
		height: 200px;
	}
	.choose{
		padding-left: 100px;
	}
</style>
</head>
<body>
<header id="header" id="home">
<div class="header-top">
<div class="container main-menu">
<div class="row justify-content-between">

<div id="logo">
<a href="#"><img src="img/logo.png" alt="" title="" /></a>
</div>
<nav id="nav-menu-container">
<ul class="nav-menu">
<li><a href="admin2.php">Home</a></li>
<li><a href="admin_batch.php">Batch</a></li>
<li><a href="admin_std.php">Students</a></li>
<li><a href="admin_xm.php">NewMembers</a></li>


<li class="menu-has-children"><a href="#">Add</a>
<ul>
<li><a href="admin_addmry.php">Add Memory</a></li>
<li><a href="admin_syll.php">Add Syllabus</a></li>
</ul>
</li>

<li class="menu-has-children"><a href="#">Logout</a>
<ul>
<li><a href="admin_std_view.php">Change Password</a></li>
<li><a href="ulog.php">Logout</a></li>
</ul>
</li>
</nav>

</div>
</div>
</div>

</header>

<section class="container"><center>
	<div class="col-lg-4 col-md-6 search-course-right section-gap">
		<form class="form-wrap" name="chpass" id="chpass" method="POST"   enctype="multipart/form-data">
				<br><center><h4 class="text-dark pb-20 text-center mb-30 font"><b>Upload Videos</b></h4></center>
				<img src="img/frame.jpg" class="image">
				<center><input type="file" name="file" id="file" class="choose" accept="video/*"><br>
				<br><button class="primary-btn text-uppercase" name="vup" id="vup">Upload</button>
				 </center>
		</form>
	</div></center>
</section>`



<script src="js/vendor/jquery-2.2.4.min.js" type="8511f0af96e85e49604af853-text/javascript"></script>
<script src="../../../../cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous" type="8511f0af96e85e49604af853-text/javascript"></script>
<script src="js/vendor/bootstrap.min.js" type="8511f0af96e85e49604af853-text/javascript"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA" type="8511f0af96e85e49604af853-text/javascript"></script>
<script src="js/easing.min.js" type="8511f0af96e85e49604af853-text/javascript"></script>
<script src="js/hoverIntent.js" type="8511f0af96e85e49604af853-text/javascript"></script>
<script src="js/superfish.min.js" type="8511f0af96e85e49604af853-text/javascript"></script>
<script src="js/jquery.ajaxchimp.min.js" type="8511f0af96e85e49604af853-text/javascript"></script>
<script src="js/jquery.magnific-popup.min.js" type="8511f0af96e85e49604af853-text/javascript"></script>
<script src="js/jquery.tabs.min.js" type="8511f0af96e85e49604af853-text/javascript"></script>
<script src="js/jquery.nice-select.min.js" type="8511f0af96e85e49604af853-text/javascript"></script>
<script src="js/owl.carousel.min.js" type="8511f0af96e85e49604af853-text/javascript"></script>
<script src="js/mail-script.js" type="8511f0af96e85e49604af853-text/javascript"></script>
<script src="js/main.js" type="8511f0af96e85e49604af853-text/javascript"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="8511f0af96e85e49604af853-text/javascript"></script>
<script type="8511f0af96e85e49604af853-text/javascript">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script src="../../../../ajax.cloudflare.com/cdn-cgi/scripts/95c75768/cloudflare-static/rocket-loader.min.js" data-cf-settings="8511f0af96e85e49604af853-|49" defer=""></script></body>


</html>
<?php
	include('connection.php');
	if (isset($_POST['vup'])) {

		$name=$_FILES['file']['name'];
		$temp=$_FILES['file']['tmp_name'];
//echo "<script>alert('$temp');</script>";

		$sel="select * from guidevideos where vname='$name'";
		$sel2=mysqli_query($con,$sel);
		$sel3=mysqli_num_rows($sel2);

		if ($sel3>0) {
			echo "<script>alert('This video with same name had already uploaded');</script>";
		}
		else{
			move_uploaded_file($temp,"video/".$name);
			$q="insert into guidevideos(vid,vname) values(NULL,'$name')";
			$q2=mysqli_query($con,$q);
			if ($q2>0) {
				echo "<script>alert('video uploaded !!');</script>";
			}
			else{
				echo "<script>alert('video update failed !!');</script>";
			}
		}

		

		
	}

	//Warning: POST Content-Length of 22372027 bytes exceeds the limit of 8388608 bytes in Unknown on line 0
?>