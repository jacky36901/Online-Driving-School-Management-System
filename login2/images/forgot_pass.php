<?php
session_start();
include('connection.php');

if(isset($_POST['forgotpass']))
{
  $email=$_POST['user_email'];
  $sql="SELECT * FROM login WHERE user_email='$email'";
  $res=mysqli_query($con,$sql);
  $count=mysqli_num_rows($res);
  if($count==1)
  {
    while($res3=mysqli_fetch_array($res))
    {
      $mail=$res3['user_email'];
    }
    $to=$mail;
    $from="ADMIN";
    $subject="Your Recovered Password";
    $password=rand();
    // $password_hash=md5($password);
    $message="Please use this password to login ".$password;
    $header="From".$from;
    if(mail($to,$subject,$message,$header)){
      $sql4="update login set pass='$password',flag=0 where user_email='$email' ";
      if(mysqli_query($con,$sql4))
      {
        echo "<script>";
        echo "alert('Your password has been sent to your email id')";
        echo "</script>";

      }
      else{
        echo "<script>";
        echo "alert('User name does not exist in database please provide valid email')";
        echo "</script>";
      }
    }
  }
}
?>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/3dslider.css" />
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
  <link rel="shortcut icon" href="http://tk-themes.net/html-shout/images/monogram.ico"/>
  <title>Zines On The Scene</title>

  <link rel="stylesheet" href="../../css/bootstrap.min.css" type="text/css" media="all"/>
  <link rel="stylesheet" href="../../css/font-awesome.min.css" type="text/css" media="all" />
  <link rel="stylesheet" href="../../css/font-materialdesign.css" type="text/css" media="all" />
  <link rel="stylesheet" href="../../css/slick.css" type="text/css" media="all" />
  <link rel="stylesheet" href="../../css/magnific-popup.min.css" type="text/css" media="all" />
  <link rel="stylesheet" href="../../css/flexslider.css" type="text/css" media="all" />
  <link rel="stylesheet" href="../../css/style.css" type="text/css" media="all" />
  <link rel="stylesheet" href="../../css/style-brave.css" type="text/css" media="all" />
  <link rel="stylesheet" href="../../css/custom.css" type="text/css" media="all" />
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Manuale:400,400i,500,500i,600,600i,700,700i%7CSource+Sans+Pro:300,400,400i,600,700" />

 </head>
<style>
body {
  margin: 0;
  background-color:black;

}

.mainnav a.active {
  background-color: #4CAF50;
  color: black;
}
.content
{
font-size:20px;
font-family:Arno Pro Smbd Caption;
}
.logo{
margin-top:10px;
}
p{
font-size:20px;
font-family:"Trebuchet MS", Helvetica, sans-serif;
font-style:bold;
margin-left:10;
}

  .main{
   left: 0;
   bottom: 0;
   width: 100%;
   background-color:black;
   color: black;
padding-center:20px;
padding-left:20px;
   text-align: center;
padding-bottom:50px;
font-size:15px;

font-size:20px;
font-family:Arno Pro Smbd Caption;
}
.content
{
font-size:20px;
font-family:Arno Pro Smbd Caption;
}
.input-container {
    display: -ms-flexbox; /* IE10 */
    display: flex;
    width: 100%;
    margin-bottom: 15px;
 color:black;

}

.icon {
    padding: 10px;
    background: yellow;
    color: black;
    min-width: 50px;
    text-align: center;
}

.input-field {
    width: 100%;
    padding: 10px;
    outline: none;
 border-radius:5px;
  border-color: black;
  background-color:white;
}
a{
  color: blue;
}

.input-field:focus {
    border: 2px solid yellow;
 background-color:white;
  color:black;
}

/* Set a style for the submit button */
.btn {
  background-color: blue;
    color:white;
    padding: 15px 20px;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
 border-radius:6px;
   }

.h2{
align:center;
}


.btn:hover {
    opacity: 1;
}
.form
{
margin-top:40px;

}
p{
color:black;
}
.box{

background-color:#111111;
padding-top:50px;

}
#fi{
border-radius:8px;
align:center;
  margin:auto;

}
select
{
    width: 105%;
    padding: 15px;
    outline: none;
    color: black;
    margin: auto;
 border-radius:5px;
  max-width:8000px;
  background-color: white;
}
.img
{
  color: black;
}
.title{
  color: black;
}
</style>
<body>
  <div id="body_hider" class="hider_flag"></div>
  <div id="body_hider_full" class="hider_flag"></div>
  <div class="hidden-bar desktop-panel">
    <div class="hidden-bar-inner">
      <div id="hidden-bar-logo" class="hidden-bar-logo">
        <img src="../../images/logo_brave.png" alt="" />
      </div>
      <div class="mb-5"></div>
      <div class="widget">
        <div class="widget-title-wrapper">
          <div class="widget-title">
            GET CONNECTED
            <div class="simple-line"></div>
          </div>
          <div class="simple-line"></div>
        </div>
        <div class="widget-social text-center">
          <a href="#"><i class="fa fa-dribbble"></i></a>
          <a href="#"><i class="fa fa-flickr"></i></a>
          <a href="#"><i class="fa fa-instagram"></i></a>
          <a href="#"><i class="fa fa-pinterest-square"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-vimeo-square"></i></a>
          <a href="#"><i class="fa fa-rss"></i></a>
        </div>
      </div>
      <div class="widget">
        <div class="widget-title-wrapper">
          <div class="widget-title">
            GALLERY
            <div class="simple-line"></div>
          </div>
          <div class="simple-line"></div>
        </div>
        <div class="widget-gallery">
          <a href="../../images/gallery/gallery_1.jpg" class="mfp-image gallery-item">
            <img src="../../images/gallery/thumb/gallery_1.jpg" alt="" />
          </a>
          <a href="../../images/gallery/gallery_2.jpg" class="mfp-image gallery-item">
            <img src="../../images/gallery/thumb/gallery_2.jpg" alt="" />
          </a>
          <a href="../../images/gallery/gallery_3.jpg" class="mfp-image gallery-item">
            <img src="../../images/gallery/thumb/gallery_3.jpg" alt="" />
          </a>
          <a href="../../images/gallery/gallery_4.jpg" class="mfp-image gallery-item">
            <img src="../../images/gallery/thumb/gallery_4.jpg" alt="" />
          </a>
          <a href="../../images/gallery/gallery_5.jpg" class="mfp-image gallery-item">
            <img src="../../images/gallery/thumb/gallery_5.jpg" alt="" />
          </a>
          <a href="../../images/gallery/gallery_6.jpg" class="mfp-image gallery-item">
            <img src="../../images/gallery/thumb/gallery_6.jpg" alt="" />
          </a>
        </div>
      </div>
      <div class="widget">
        <div class="widget-title-wrapper">
          <div class="widget-title">
            THEME AD WIDGET
            <div class="simple-line"></div>
          </div>
          <div class="simple-line"></div>
        </div>
        <div class="widget-ads text-center">
          <a href="#"><img src="../../images/advertise-black.png" alt="" /></a>
        </div>
      </div>
    </div>
  </div>
  <div class="hidden-bar mobile-panel">
    <div class="hidden-bar-inner">
      <div id="hidden-bar-logo-2" class="hidden-bar-logo">
        <img src="../../images/logo_brave.png" alt="" />
      </div>
      <div class="mobile-menu">
        <ul class="nav-collapse navbar-nav">
          <li><a href="contact.html">Get in touch</a></li>
          <li>
            <a href="#">About <i class="fa fa-angle-down"></i></a>
            <ul class="sub-menu">
              <li><a href="about-me.html">About me</a></li>
              <li><a href="about-us-authors.html">About Us - Authors</a></li>
              <li><a href="about-us-team.html">About Us - Team</a></li>
              <li><a href="author-detail.html">Author Single Page</a></li>
            </ul>
          </li>
          <li>
            <a href="#">Categories <i class="fa fa-angle-down"></i></a>
            <ul class="sub-menu">
              <li><a href="categories-1.html">Free your mind</a></li>
              <li><a href="categories-2.html">LifeStyle</a></li>
              <li><a href="categories-3.html">Untold Stories</a></li>
            </ul>
          </li>
          <li>
            <a href="#">Content Layout <i class="fa fa-angle-down"></i></a>
            <ul class="sub-menu">
              <li>
                <a href="#">Post Layouts <i class="fa fa-angle-down"></i></a>
                <ul class="sub-menu">
                  <li><a href="blog-featured-header.html">Featured Header</a></li>
                  <li><a href="blog-featured-media.html">Featured Media</a></li>
                  <li><a href="blog-media-sidebar-aside.html">Media and Sidebar Aside</a></li>
                  <li><a href="blog-media-above-sidebar.html">Media Above, Sidebar Aside</a></li>
                </ul>
              </li>

              <li><a href="elements.html">Page Elements</a></li>
            </ul>
          </li>
          <li><a href="contact.html">Get in touch</a></li>

        </ul>
      </div>
      <div class="simple-line mt-2 mb-2"></div>
      <div class="widget">
        <div class="widget-title-wrapper">
          <div class="widget-title white">
            GET CONNECTED
          </div>
        </div>
        <div class="widget-social text-center">
          <a href="#"><i class="fa fa-dribbble"></i></a>
          <a href="#"><i class="fa fa-flickr"></i></a>
          <a href="#"><i class="fa fa-instagram"></i></a>
          <a href="#"><i class="fa fa-pinterest-square"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-vimeo-square"></i></a>
          <a href="#"><i class="fa fa-rss"></i></a>
        </div>
      </div>
    </div>
  </div>
  <div id="search-hider"></div>
  <div class="search-form-top">
    <div class="search-form-top-inner">
      <form class="form-search">
        <input type="text" value="" name="s" id="search_top" class="highlighted" placeholder="Type And Hit ENTER..." />
      </form>
      <div class="search-close">
        <div class="line line-1"></div>
        <div class="line line-2"></div>
        <div class="line line-3"></div>
      </div>
    </div>
  </div>
  <div class="site">

    <header class="header header-desktop">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3 hidden-sm hidden-xs pl-4">

          </div>
          <div class="col-md-6 col-sm-6 col-xs-6">
            <div id="logo" class="text-center text-left-sm">

              <img src="../../images/logo.png" class="hidden-sm hidden-xs" alt="Logo" />
                <img src="../../images/logo_brave_sticky.png" class="hidden-lg" alt="" />
              </a>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-6 pr-4">
            <div class="side-menu">


            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 p-0">
            <div class="main-menu">
              <div class="main-menu-inner">
                <ul class="nav-collapse navbar-nav">

                  <li><a href="index.php">Home</a></li>


                  <!-- <li><a href="gallery.html">Gallery</a></li> -->




                  <!-- <li><a href="contact.html">Get in touch</a></li> -->

                  <li><a href="login.php">Login</a></li>
                  <li><a href="register.php">Register</a></li>

                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

 <body>
 <div class="box">
     <fieldset  id="fi" style="width:600px;  color: black;background-color:whitesmoke;">
     <legend></legend>
     <form method="post"  style="max-width:500px;margin:auto">
         <center><h4>**** Forgot Password****</h4></center>
         <br>
         <div class="row">


        <div class="title">Email-ID</div><input class="input-field col-md-12" type="text"  required  name="user_email" autocomplete="off">

         </div>
         <br>

         <br><br>
         <div class="input-container">
             <input class="btn" type="submit" name="forgotpass" id="forgotpass"   value="RESET PASSWORD">

         </div>
         <div class="input-container" >
      <a href="login.php"><input class="btn" style="width:500px;" value="LOGIN"></a>
         </div>



         </div>
         <br><br>
    </form>
    </fieldset>
</div>
 </body>


</html>
<?php
include('footer-index.php');
?>
