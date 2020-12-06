<?php
session_start();
if(!isset($_SESSION['sess']))
{
header("location:../index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from templates.aucreative.co/drive/photo-gallery.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Sep 2019 04:48:58 GMT -->
<head>

	<title>Photo Gallery</title>
	<meta charset="UTF-8">
	<meta name="description" content="AuCreative theme tempalte">
	<meta name="author" content="AuCreative">
	<meta name="keywords" content="AuCreative theme template">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/elegant-font/html-css/style.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/lightbox2/css/lightbox.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/dist/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/color.css">
<!--===============================================================================================-->
    
    
</head>
<body class="animsition restyle-index">
	
	<header>
		<div class="container-menu-desktop">
			<div class="top-bar bg-main">
				<div class="container">
				<!--	<div class="content-topbar">
						<div class="left-top-bar">
							<a href="#">Search</a>
							<a href="#">About</a>
							<a href="#">Blog</a>
							<a href="#">FAQ</a>
						</div>

						<div class="right-top-bar">
							<span>
								<i class="icon_phone" aria-hidden="true"></i>
								<span>1-800-123-6889</span>
							</span>

							<span>
								<i class="icon_pin" aria-hidden="true"></i>
								<span>8th floor, 379 Hudson St, New York</span>
							</span>

							<span>
								<i class="icon_clock" aria-hidden="true"></i>
								<span>09:30 am – 06:00 pm</span>
							</span>
						</div>
					</div> -->
				</div>
			</div>

			<div class="wrap-menu-desktop">
				<div class="limiter-menu-desktop">
					
					<!-- Logo desktop -->	
                    
                     <a href="student_home.php" class="logo">
                    <img src="images/icons/driveon.png" alt="IMG-LOGO" /></a>
					
                <!--    <a href="index-2.html" class="logo">
						<img src="images/icons/logo.png" alt="IMG-LOGO">
					</a> -->


					<!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu">
							<li>
								<a href="student_home.php">Home</a>
							<!--	<ul class="sub-menu">
									<li><a href="index-2.html">Homepage V1</a></li>
									<li><a href="home-02.html">Homepage V2</a></li>
									<li><a href="home-03.html">Homepage V3</a></li>
								</ul> -->
							</li>

							<!--<li>
								<a href="course-list.html">Courses</a>
								<ul class="sub-menu">
									<li><a href="course-list.html">Course List</a></li>
									<li><a href="course-grid.html">Course Grid</a></li>
									<li><a href="course-detail.html">Course Detail</a></li>
								</ul>
							</li>

							<li>
								<a href="about-team.html">Teachers</a>
							</li>-->

							<!--<li>
								<a href="photo-gallery.php">Gallery</a>
								<!--<ul class="sub-menu">
									<li><a href="photo-gallery.html">Photo Gallery</a></li>
								</ul> -->
							</li>

							<!--<li>
								<a href="blog.html">Blog</a>
								<ul class="sub-menu">
									<li><a href="blog.html">Blog</a></li>
									<li><a href="blog-single.html">Blog Single</a></li>
								</ul>
							</li>

							<li class="respon-sub-menu">
								<a href="about.html">About</a>
								<ul class="sub-menu">
									<li><a href="about.html">About</a></li>
									<li><a href="about-team.html">About Team Member</a></li>
								</ul>
							</li>

							<li class="respon-sub-menu">
								<a href="contact.html">Contact</a>
							</li>
						</ul>
					</div>
					
					<!-- Social desktop -->
					<!--<div class="social">
						<a href="#"><i class="fa fa-facebook m-l-13" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-twitter m-l-18" aria-hidden="true"></i></a>
					</div> -->
					
				</div>
			</div>	
		</div>


		<!-- Header Mobile -->
		<div class="wrap-header-mobile">
			<!-- Logo moblie -->		
			<a href="index-2.html" class="logo-mobile">
				<img src="images/icons/logo.png" alt="IMG-LOGO">
			</a>
			

			<!-- Button show menu -->
			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
				
		</div>


		<!-- Menu Mobile -->
		<div class="menu-mobile">
			<ul class="topbar-mobile">
				<li class="bo1-b p-t-8 p-b-8">
					<div class="left-top-bar p-l-7">
						<a href="#">Search</a>
						<a href="#">About</a>
						<a href="#">Blog</a>
						<a href="#">FAQ</a>
					</div>
				</li>

				<li class="right-top-bar bo1-b p-t-8 p-b-8">
					<span>
						<i class="icon_phone" aria-hidden="true"></i>
						<span>1-800-123-6889</span>
					</span>
				</li>

				<li class="right-top-bar bo1-b p-t-8 p-b-8">
					<span>
						<i class="icon_pin" aria-hidden="true"></i>
						<span>8th floor, 379 Hudson St, New York</span>
					</span>
				</li>

				<li class="right-top-bar bo1-b p-t-8 p-b-8">
					<span>
						<i class="icon_clock" aria-hidden="true"></i>
						<span>09:30 am – 06:00 pm</span>
					</span>
				</li>
			</ul>

			<ul class="main-menu-m bg-main">
				<li class="bg-main">
					<a href="index-2.html">Home</a>
					<ul class="sub-menu-m">
						<li><a href="index-2.html">Homepage V1</a></li>
						<li><a href="home-02.html">Homepage V2</a></li>
						<li><a href="home-03.html">Homepage V3</a></li>
					</ul>
					<span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>
				</li>

				<li class="bg-main">
					<a href="course-list.html">Courses</a>
					<ul class="sub-menu-m">
						<li><a href="course-list.html">Course List</a></li>
						<li><a href="course-grid.html">Course Grid</a></li>
						<li><a href="course-detail.html">Course Detail</a></li>
					</ul>
					<span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>
				</li>

				<li class="bg-main">
					<a href="about-team.html">Teachers</a>
				</li>

				<li class="bg-main">
					<a href="#">Pages</a>
					<ul class="sub-menu-m">
						<li><a href="photo-gallery.html">Photo Gallery</a></li>
					</ul>
					<span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>
				</li>

				<li class="bg-main">
					<a href="blog.html">Blog</a>
					<ul class="sub-menu-m">
						<li><a href="blog.html">Blog</a></li>
						<li><a href="blog-single.html">Blog Single</a></li>
					</ul>
					<span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>
				</li>

				<li class="bg-main">
					<a href="about.html">About</a>
					<ul class="sub-menu-m">
						<li><a href="about.html">About</a></li>
						<li><a href="about-team.html">About Team Member</a></li>
					</ul>
					<span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>
				</li>

				<li class="bg-main">
					<a href="contact.html">Contact</a>
				</li>
			</ul>
		</div>
	</header>

	<!-- Title page -->
	<section class="bg-img-1 bg-overlay-3 p-t-93 p-b-95" style="background-image: url('images/bg-title-01.jpg');">
		<div class="container">
			<div class="flex-w flex-sb-m">
				<div class="p-t-10 p-b-10 p-r-30">
					<div class="flex-w p-b-9">
						

					<!--<h2 class="m-txt6 respon1">
						About Us
					</h2>-->
				</div>

				<div class="p-t-10 p-b-10">
					<!-- Button -->
					<!--<a href="#" class="btn-drive size1 m-txt1 bg-main bo-rad-4 trans-03">
						Get in touch
						<i class="fa fa-chevron-right m-l-9 fs-14" aria-hidden="true"></i>
					</a>-->
				</div>
			</div>
		</div>
	</section>

	
	<!-- Instructors -->
        
         <?php  

if(!isset($_SESSION['sess']))
{
header("location:index.php");
}
include("connection.php");
$sql="select * from add_trainer";
$result=mysqli_query($con,$sql);


//$sl="select player_name,dob,mobile from team_player  where tid='$a'";
//$row=mysqli_query($con,$sl);
?>
	<section class="bg-white p-t-64 p-b-40">
		<div class="container">
			<div class="p-b-30">
				<h3 class="m-txt4 p-b-8 txt-center respon1">
					OUR Instructors & TESTERS
				</h3>

				<div class="bg-main size2 bo-rad-3 m-lr-auto"></div>
			</div>
             

             <table class="table table-hover table-striped">
                        <thead>

                                             <th>Image</th>
                                            <th>Name</th>
                                               <th>Email</th>
                                               <th>Phone</th>
                                                  <th>Gender</th>
                                           </thead>
                                           <tbody>
                                             <?php
                                             while($row=mysqli_fetch_array($result))
                                             {
                                                $img=$row["image"];
                                               $name=$row["name"];                                             
                                              $email=$row["email"];
                                              $phn=$row["phone"];
                                                 $gender=$row["gender"]; 

                                            ?>
                                               <tr>
                                                         
                                                   <td style="width:200px;"><img src="../images/<?php echo $img; ?> " style="width:140px; height:140px;" alt="" /></td>
                                               
                                                 <td style="width:130px;"><?php echo $name;?></td>
                        
                                                   <td style="width:100px;"><?php echo $email;?></td>
                                                   <td style="width:100px;"><?php echo $phn;?></td>
                                                    <td style="width:100px;"><?php echo $gender;?></td>

                                               </tr>
                                             <?php }?>

                                             </tbody>
                                           </body>
        
              
	</section>

	

	<!--<footer class="bg4 p-t-25">
		<div class="container p-b-60">
			<div class="row">
				<div class=" col-sm-12 col-lg-3 p-t-30">
					<div class="w-full wrap-pic-max-w">
						<a href="index-2.html"><img src="images/icons/logo-02.png" alt="LOGO"></a>
					</div>

					<p class="s-txt9 p-t-30">
						Lean To Drive is a clean PSD theme suitable for corporate. You can cus-tomize it very easy to fit your needs. Lorem ipsum dolor sit amet, consecte-tur adipiscing elit sollicitudin vel effici-tur eu, posuere sit amet erat.
					</p>
				</div>
				
				<div class=" col-sm-6 col-lg-3 p-t-30">
					<h4 class="m-txt12 p-t-14">
						Company
					</h4>

					<div class="wrap-link-footer p-t-28">
						<ul class="col-left">
							<li><a href="#">Home</a></li>
							<li><a href="#">Courses</a></li>
							<li><a href="#">Teachers</a></li>
							<li><a href="#">About</a></li>
							<li><a href="#">Contact</a></li>
						</ul>

						<ul class="col-right">
							<li><a href="#">Blogs</a></li>
							<li><a href="#">404 page</a></li>
							<li><a href="#">Shop</a></li>
							<li><a href="#">Elements</a></li>
							<li><a href="#">Typography</a></li>
						</ul>
					</div>
				</div>

				<div class=" col-sm-6 col-lg-3 p-t-30">
					<h4 class="m-txt12 p-t-14">
						Contact us
					</h4>

					<ul class="contact-footer p-t-28">
						<li>
							<i class="fa fa-home" aria-hidden="true"></i>
							379 5th Ave  New York, NYC 10018
						</li>

						<li>
							<i class="fa fa-phone" aria-hidden="true"></i>
							(+1) 96 716 6879
						</li>

						<li>
							<i class="fa fa-fax" aria-hidden="true"></i>
							(+1) 96 716 6879
						</li>

						<li>
							<i class="fa fa-envelope-o" aria-hidden="true"></i>
							contact@site.com
						</li>

						<li>
							<i class="fa fa-clock-o" aria-hidden="true"></i>
							Mon-Fri 09:00 - 17:00
						</li>
					</ul>
				</div>

				<div class=" col-sm-6 col-lg-3 p-t-30">
					<h4 class="m-txt12 p-t-14">
						Gallery
					</h4>

					<div class="wrap-gallery-footer p-t-35">
						<a class="item-gallery-footer wrap-pic-w" href="images/gallery-footer-01.jpg" data-lightbox="gallery-footer">
							<img src="images/gallery-footer-01.jpg" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="images/gallery-footer-02.jpg" data-lightbox="gallery-footer">
							<img src="images/gallery-footer-02.jpg" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="images/gallery-footer-03.jpg" data-lightbox="gallery-footer">
							<img src="images/gallery-footer-03.jpg" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="images/gallery-footer-04.jpg" data-lightbox="gallery-footer">
							<img src="images/gallery-footer-04.jpg" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="images/gallery-footer-05.jpg" data-lightbox="gallery-footer">
							<img src="images/gallery-footer-05.jpg" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="images/gallery-footer-06.jpg" data-lightbox="gallery-footer">
							<img src="images/gallery-footer-06.jpg" alt="GALLERY">
						</a>
					</div>
				</div>
				
			</div>
		</div>

		<div class="bg3 txt-center p-t-19 p-b-16">
			<span class="s-txt10">@ 2018 AuThemes.</span>
			<a href="https://themeforest.net/cart/add_items?item_ids=21207623" class="dis-inline s-txt11 hov-color-white trans-04">Get The Template</a>
		</div>
	</footer>



	<!-- Back to top -->
	<div class="btn-back-to-top hov-bg-main" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/wow/wow.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/dist/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/slick/slick.min.js"></script>
	<script src="js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/lightbox2/js/lightbox.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/isotope/isotope.pkgd.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/parallax100/parallax100.js"></script>
	<script>
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script src="vendor/waypoint/jquery.waypoints.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countterup/jquery.counterup.min.js"></script>
	<script>
		$('.counter').counterUp({
			delay: 10,
			time: 1000
		});
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>

<!-- Mirrored from templates.aucreative.co/drive/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 Oct 2019 02:32:21 GMT -->
</html>