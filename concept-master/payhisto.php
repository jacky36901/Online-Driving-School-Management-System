<?php
session_start();
if(!isset($_SESSION['sess']))
{
header("location:../index.php");
}
include "connection.php";
$user=$_SESSION['sess'];
$sql67="select * from user_details where Username='$user'";
$res=mysqli_query($con,$sql67);
$sql2="select * from team where Username='$user'";
$res2=mysqli_query($con,$sql2);
$sql22="select * from team where Username='$user'";
$res22=mysqli_query($con,$sql22);
$idd=mysqli_fetch_array($res22);
$id=$idd['Team_id'];
$not="select * from tbl_match where (team1_id='$id' or team2_id='$id') and status='0'";
$match=mysqli_query($con,$not);
$n=mysqli_num_rows($match);
?>

<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Torneo</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!--js-->
<script src="js/jquery-2.1.1.min.js"></script> 
<!--icons-css-->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
<!--static chart-->
<script src="js/Chart.min.js"></script>
<!--//charts-->
<!-- geo chart -->
    <script src="//cdn.jsdelivr.net/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    <script>window.modernizr || document.write('<script src="lib/modernizr/modernizr-custom.js"><\/script>')</script>
    <!--<script src="lib/html5shiv/html5shiv.js"></script>-->
     <!-- Chartinator  -->
    <script src="js/chartinator.js" ></script>
    <script type="text/javascript">
        jQuery(function ($) {

            var chart3 = $('#geoChart').chartinator({
                tableSel: '.geoChart',

                columns: [{role: 'tooltip', type: 'string'}],
         
                colIndexes: [2],
             
                rows: [
                    ['China - 2015'],
                    ['Colombia - 2015'],
                    ['France - 2015'],
                    ['Italy - 2015'],
                    ['Japan - 2015'],
                    ['Kazakhstan - 2015'],
                    ['Mexico - 2015'],
                    ['Poland - 2015'],
                    ['Russia - 2015'],
                    ['Spain - 2015'],
                    ['Tanzania - 2015'],
                    ['Turkey - 2015']],
              
                ignoreCol: [2],
              
                chartType: 'GeoChart',
              
                chartAspectRatio: 1.5,
             
                chartZoom: 1.75,
             
                chartOffset: [-12,0],
             
                chartOptions: {
                  
                    width: null,
                 
                    backgroundColor: '#fff',
                 
                    datalessRegionColor: '#F5F5F5',
               
                    region: 'world',
                  
                    resolution: 'countries',
                 
                    legend: 'none',

                    colorAxis: {
                       
                        colors: ['#679CCA', '#337AB7']
                    },
                    tooltip: {
                     
                        trigger: 'focus',

                        isHtml: true
                    }
                }

               
            });                       
        });
    </script>
<!--geo chart-->

<!--skycons-icons-->
<script src="js/skycons.js"></script>
<!--//skycons-icons-->
</head>
<body>	
<div class="page-container">	
   <div class="left-content">
	   <div class="mother-grid-inner">
            <!--header start here-->
				<div class="header-main">
					<div class="header-left">
							<div class="logo-name">
									 <a href="team2_home.php"> <h1>Torneo</h1> 
									<!--<img id="logo" src="" alt="Logo"/>--> 
								  </a> 								
							</div>
							<!--search-box-->
								<div class="search-box">
									<form>
										<input type="text" placeholder="Search Team..." required="">	
										<input type="submit" value="">					
									</form>
								</div><!--//end-search-box-->
							<div class="clearfix"> </div>
						 </div>
						 <div class="header-right">
							<div class="profile_details_left"><!--notifications of menu start -->
								<ul class="nofitications-dropdown">
									<li class="dropdown head-dpdn">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope"></i><span class="badge">3</span></a>
										<ul class="dropdown-menu">
											<li>
												<div class="notification_header">
													<h3>You have 3 new messages</h3>
												</div>
											</li>
											<li><a href="#">
											   <div class="user_img"><img src="images/p4.png" alt="" ></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor</p>
												<p><span>1 hour ago</span></p>
												</div>
											   <div class="clearfix"></div>	
											</a></li>
											<li class="odd"><a href="#">
												<div class="user_img"><img src="images/p2.png" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor </p>
												<p><span>1 hour ago</span></p>
												</div>
											  <div class="clearfix"></div>	
											</a></li>
											<li><a href="#">
											   <div class="user_img"><img src="images/p3.png" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor</p>
												<p><span>1 hour ago</span></p>
												</div>
											   <div class="clearfix"></div>	
											</a></li>
											<li>
												<div class="notification_bottom">
													<a href="#">See all messages</a>
												</div> 
											</li>
										</ul>
									</li>
								<li class="dropdown head-dpdn">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue"><?php echo $n; ?></span></a>
										<ul class="dropdown-menu">
											<li>
												<div class="notification_header">
													<h3>You have <?php echo $n; ?> new notification</h3>
												</div>
											</li>
                                            <?php
                                            $not1="select * from tbl_match where team1_id='$id' or team2_id='$id' order by addate";
                                            $match1=mysqli_query($con,$not1);
                                            while($match2=mysqli_fetch_array($match1))
                                            {
                                                $hlo=date("Y-m-d H:i:s",$match2['timestamp']);
                                                $hlo2=date("Y-m-d H:i:s",time());
                                                $time1 = new DateTime($hlo);
                                                $time2 = new DateTime($hlo2);
                                                $since_start = $time1->diff($time2);
                                                $d=$since_start->h;
                                                $da=$since_start->days;
                                                $minutes = $since_start->days * 24 * 60;
                                                $minutes += $since_start->h * 60;
                                                $minutes += $since_start->i;

                                                $fg23=$match2['tour_id'];
                                                $tr="select * from tournament where id='$fg23'";
                                                $match3=mysqli_query($con,$tr);
                                                while($match4=mysqli_fetch_array($match3)){
                                                    $uop=$match4['Username'];
                                                    $match5="select * from user_details where Username='$uop'";
                                                    $match6=mysqli_query($con,$match5);
                                                    $match7=mysqli_fetch_array($match6);
                                            ?>
											<li><a href="team_notify_match.php">
												<div class="user_img"><img class="img-circle" src="../images/<?php echo $match7['photo'];?>" alt="" width="40px" height="40px"> </div>
											   <div class="notification_desc">
												<p><?php echo $match4['tour_name'];?></p>
                                                <?php  if($minutes<=5){
                                                    ?>
												<p id="demo3"><span><?php echo "just now"; ?></span></p>
                                                   <?php
                                                    }
                                                    else if(($minutes>5) && ($minutes<=59)){
                                                    ?>
												<p id="demo3"><span><?php echo $minutes; ?> minutes ago</span></p>
                                                   <?php
                                                    }
                                                    else if($d>=1 && $d<=22){
                                                    ?>
                                                   <p id="demo3"><span><?php echo $d; ?> hours ago</span></p>
                                                   <?php
                                                    }
                                                    else{ ?>
                                                        <p id="demo3"><span><?php echo $da; ?> days ago</span></p>
                                                   <?php
                                                        }
                                                    ?>
												</div>
											  <div class="clearfix"></div>	
											 </a></li>
											<?php
                                                }
                                            }
                                            ?>
											 <li>
												<div class="notification_bottom">
													<a href="team_notify_match.php">See all notifications</a>
												</div> 
											</li>
										</ul>
									</li>	
									<li class="dropdown head-dpdn">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i><span class="badge blue1">9</span></a>
										<ul class="dropdown-menu">
											<li>
												<div class="notification_header">
													<h3>You have 8 pending task</h3>
												</div>
											</li>
											<li><a href="#">
												<div class="task-info">
													<span class="task-desc">Database update</span><span class="percentage">40%</span>
													<div class="clearfix"></div>	
												</div>
												<div class="progress progress-striped active">
													<div class="bar yellow" style="width:40%;"></div>
												</div>
											</a></li>
											<li><a href="#">
												<div class="task-info">
													<span class="task-desc">Dashboard done</span><span class="percentage">90%</span>
												   <div class="clearfix"></div>	
												</div>
												<div class="progress progress-striped active">
													 <div class="bar green" style="width:90%;"></div>
												</div>
											</a></li>
											<li><a href="#">
												<div class="task-info">
													<span class="task-desc">Mobile App</span><span class="percentage">33%</span>
													<div class="clearfix"></div>	
												</div>
											   <div class="progress progress-striped active">
													 <div class="bar red" style="width: 33%;"></div>
												</div>
											</a></li>
											<li><a href="#">
												<div class="task-info">
													<span class="task-desc">Issues fixed</span><span class="percentage">80%</span>
												   <div class="clearfix"></div>	
												</div>
												<div class="progress progress-striped active">
													 <div class="bar  blue" style="width: 80%;"></div>
												</div>
											</a></li>
											<li>
												<div class="notification_bottom">
													<a href="#">See all pending tasks</a>
												</div> 
											</li>
										</ul>
									</li>	
								</ul>
								<div class="clearfix"> </div>
							</div>
							<!--notification menu end -->
							<div class="profile_details">		
								<ul>
									<li class="dropdown profile_details_drop">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
											<div class="profile_img">
                                                 <?php  while($fetch33=mysqli_fetch_array($res))
                                                    {
                                                ?>
												<span class="prfil-img"><img class="img-circle" src="../images/<?php echo $fetch33['photo'];?>" alt="" width="40px" height="40px"> </span> 
												<div class="user-name">
                                                 <?php
                                                    }
                                                    ?>
                                                     <?php  while($fetch9=mysqli_fetch_array($res2))
                                                    {
                                                ?>
													<p><?php echo $fetch9['Team_name']?></p>
                                                    <?php
                                                    }
                                                    ?>
													<span>Team
                                                    </span>
												</div>
												<i class="fa fa-angle-down lnr"></i>
												<i class="fa fa-angle-up lnr"></i>
												<div class="clearfix"></div>	
											</div>	
										</a>
										<ul class="dropdown-menu drp-mnu">
											<li> <a href="setting_team.php"><i class="fa fa-cog"></i> Settings</a> </li> 
											<li> <a href="captain_team.php"><i class="fa fa-user"></i> Profile</a> </li> 
											<li> <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
										</ul>
									</li>
								</ul>
							</div>
							<div class="clearfix"> </div>				
						</div>
				     <div class="clearfix"> </div>	
				</div>
<!--heder end here-->
<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
           <br><br>
                    
           
<BR><BR>
<div class="inner-block">
    <div class="product-block">
<center><h2 style="color:blue"><b style="font-size:25px;">PAYMENT HISTORY</b></h2></center>
 <center>
      
       <form id="regForm" action="" method="post" align="center" >
            
    <br><br>
				<table class="table table-striped" width="50">
					<tr><td>1</td><td>mmm</td><td>nnn</td><td>nnnn</td></tr>
				</table>
			</form>
        </center>
    </div>
    </div>

		
</body>
</html>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

</div>
</div>
<!--slider menu-->
          <?php
    $t=date("Y-m-d");
    $sql0="select * from tournament where status=3 and num!=0 and f_date>'$t'";
    $rf=mysqli_query($con,$sql0);
                        $x3=1;
						while($fetch=mysqli_fetch_array($rf))
						{
                          $x3=$x3+1;
                        }
    ?>
<!--slider menu-->
    <div class="sidebar-menu">
		  	<div class="logo"> <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="#"> <span id="logo" ></span> 
			      <!--<img id="logo" src="" alt="Logo"/>--> 
			  </a> </div>		  
		    <div class="menu">
		     <ul id="menu" >
		        <li id="menu-home" ><a href="team2_home.php"><i class="fa fa-tachometer"></i><span>Home</span></a></li>
		          <li><a href=""><i class="fa fa-cogs"></i><span>Profile</span><span class="fa fa-angle-right" style="float: right"></span></a>
		          <ul>
		            <li><a href="captain_team.php">Profile</a></li>
		            <li><a href="team2.php">My Team</a></li>		            
		          </ul>
		        </li>  
                   <li id="menu-home" ><a href="events_team.php"><i class="fa fa-tachometer"></i><span>Events</span><span class="badge"><?php
echo $x3-1; ?></span></a></li>
                    <ul id="menu" >
		        <li id="menu-home" ><a href="hist.php"><i class="fa fa-tachometer"></i><span>Tournament history</span></a></li><!--  <li id="menu-comunicacao" ><a  <!--  <li id="menu-comunicacao" ><a href="#"><i class="fa fa-book nav_icon"></i><span>Element</span><span class="fa fa-angle-right" style="float: right"></span></a>
		          <ul id="menu-comunicacao-sub" >
		            <li id="menu-mensagens" style="width: 120px" ><a href="buttons.html">Buttons</a>		              
		            </li>
		            <li id="menu-arquivos" ><a href="typography.html">Typography</a></li>
		            <li id="menu-arquivos" ><a href="icons.html">Icons</a></li>
		          </ul>
		        </li>
		          <li><a href="maps.html"><i class="fa fa-map-marker"></i><span>Maps</span></a></li>
		        <li id="menu-academico" ><a href="#"><i class="fa fa-file-text"></i><span>Pages</span><span class="fa fa-angle-right" style="float: right"></span></a>
		          <ul id="menu-academico-sub" >
		          	 <li id="menu-academico-boletim" ><a href="login.html">Login</a></li>
		            <li id="menu-academico-avaliacoes" ><a href="signup.html">Sign Up</a></li>		           
		          </ul>
		        </li>
		        
		        <li><a href="charts.html"><i class="fa fa-bar-chart"></i><span>Charts</span></a></li>
		        <li><a href="#"><i class="fa fa-envelope"></i><span>Mailbox</span><span class="fa fa-angle-right" style="float: right"></span></a>
		        	 <ul id="menu-academico-sub" >
			            <li id="menu-academico-avaliacoes" ><a href="inbox.html">Inbox</a></li>
			            <li id="menu-academico-boletim" ><a href="inbox-details.html">Compose email</a></li>
		             </ul>
		        </li>
		         <li><a href="#"><i class="fa fa-cog"></i><span>System</span><span class="fa fa-angle-right" style="float: right"></span></a>
		         	 <ul id="menu-academico-sub" >
			            <li id="menu-academico-avaliacoes" ><a href="404.html">404</a></li>
			            <li id="menu-academico-boletim" ><a href="blank.html">Blank</a></li>
		             </ul>
		         </li>
		         <li><a href="#"><i class="fa fa-shopping-cart"></i><span>E-Commerce</span><span class="fa fa-angle-right" style="float: right"></span></a>
		         	<ul id="menu-academico-sub" >
			            <li id="menu-academico-avaliacoes" ><a href="product.html">Product</a></li>
			            <li id="menu-academico-boletim" ><a href="price.html">Price</a></li>
		             </ul>
		         </li>-->
		      </ul>
		    </div>
        <?php
     
        ?>
	 </div>
	<div class="clearfix"> </div>
</div>
<!--slide bar menu end here-->
<script>
var toggle = true;
            
$(".sidebar-icon").click(function() {                
  if (toggle)
  {
    $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
    $("#menu span").css({"position":"absolute"});
  }
  else
  {
    $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
    setTimeout(function() {
      $("#menu span").css({"position":"relative"});
    }, 400);
  }               
                toggle = !toggle;
            });
</script>
<!--scrolling js-->
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<!--//scrolling js-->
<script src="js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>                     