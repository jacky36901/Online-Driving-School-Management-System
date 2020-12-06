<?php
include("connection.php");
$sql="SELECT fullname,reg_no,user_branch,user_email,user_phn,user_img FROM user_details WHERE user_categ=2";
//$sql1="SELECT pass FROM login  WHERE reg_no LIKE 'S%'";
$result=mysqli_query($con,$sql);
//$result1=mysqli_query($con,$sql1);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>E-Magazine</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/css/demo.css" rel="stylesheet" />
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-image="../assets/img/sidebar-5.jpg">

            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="http://www.creative-tim.com" class="simple-text">
                        Creative Tim
                    </a>
                </div>
                <ul class="nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="dashboard.php">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="reqitem.php">
                            <i class="nc-icon nc-paper-2"></i></i>
                            <p>Requested Items</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="teacher.php">
                            <i class="nc-icon nc-circle-09"></i>
                            <p>Teacher list</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="student.php">
                            <i class="nc-icon nc-circle-09"></i>
                            <p>Student list</p>
                        </a>

                    </li>
                    <li>
                        <a class="nav-link" href="notifications.php">
                            <i class="nc-icon nc-bell-55"></i>
                            <p>Notifications</p>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#pablo"> Student List </a>
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="nav navbar-nav mr-auto">
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="dropdown">
                                    <i class="nc-icon nc-palette"></i>
                                    <span class="d-lg-none">Dashboard</span>
                                </a>
                            </li>
                            <li class="dropdown nav-item">
                                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                    <i class="nc-icon nc-planet"></i>
                                    <span class="notification">5</span>
                                    <span class="d-lg-none">Notification</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Notification 1</a>
                                    <a class="dropdown-item" href="#">Notification 2</a>
                                    <a class="dropdown-item" href="#">Notification 3</a>
                                    <a class="dropdown-item" href="#">Notification 4</a>
                                    <a class="dropdown-item" href="#">Another notification</a>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nc-icon nc-zoom-split"></i>
                                    <span class="d-lg-block">&nbsp;Search</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    <span class="no-icon">Account</span>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="no-icon">Dropdown</span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    <span class="no-icon">Log out</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card strpied-tabled-with-hover">
                                <div class="card-header ">
                                  <h4 class="card-title"><b>Registered Students<b></h4>

                              </div>
                              <div class="card-body table-full-width table-responsive">
                                  <table class="table table-hover table-striped">
                                      <thead>
                                          <th>Name</th>
                                          <th>Reg.No</th>
                                          <th>Branch</th>
                                          <th>Email id</th>
                                          <th>Phone Number</th>
                                          <th>Image</th>
                                          <!-- <th>Password</th> -->
                                      </thead>
                                      <?php
                                      while($row=mysqli_fetch_array($result))
                                      {
                                        ?>



                                      <tbody>
                                          <tr><td><?php echo $row['fullname'];?></td>
                                              <td><?php echo $row['reg_no'];?></td>
                                            <td><?php echo $row['user_branch'];?></td>
                                            <td><?php echo $row['user_email'];?></td>
                                            <td><?php echo $row['user_phn'];?></td>
                                            <td><img src=".../emag&&&&/abc/bcd/demo/brave/image/<?php $row['user_img']?>" height=20px width=20px alt="not found"/></td>

                                          </tr>
                                        </tbody>
                                <?php }  ?>


              </body>
              <!--   Core JS Files   -->
              <script src="../assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
              <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
              <script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
              <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
              <script src="../assets/js/plugins/bootstrap-switch.js"></script>
              <!--  Google Maps Plugin    -->
              <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
              <!--  Chartist Plugin  -->
              <script src="../assets/js/plugins/chartist.min.js"></script>
              <!--  Notifications Plugin    -->
              <script src="../assets/js/plugins/bootstrap-notify.js"></script>
              <!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
              <script src="../assets/js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>
              <!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
              <script src="../assets/js/demo.js"></script>

              </html>
