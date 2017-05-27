<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Kuliner Bogor</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>/assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url(); ?>/assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url(); ?>/assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo base_url(); ?>/assets/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    
    <!-- bootstrap-progressbar -->
    <link href="<?php echo base_url(); ?>/assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?php echo base_url(); ?>/assets/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo base_url(); ?>/assets/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    
    <!-- Custom Theme Style -->
    <link href="<?php echo base_url(); ?>/assets/css/custom.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/css/kuliner.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/css/font-awesome.min.css" rel="stylesheet">

  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title">
              <div class="img-logo">
                  <img src="<?php echo base_url(); ?>/assets/production/images/kuliner-bogor.png">
              </div>
              <a href="index.php" class="site_title logo"></i> <span>Kuliner Bogor</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?php echo base_url(); ?>/assets/production/images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Selamat Datang,</span>
                <h2>Admin</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                  <li><a href="<?php echo base_url(); ?>/main/dashboard"><i class="fa fa-home"></i> Dashboard</a></li>
                  <li><a href="<?php echo base_url(); ?>/login"><i class="fa fa-sign-out"></i> Keluar</a></li>
                </ul>
              </div>
              </div>
            </div>
            <!-- /sidebar menu -->
          </div>
        </div>

        <!-- top navigation -->
        <!-- <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt="">Username
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="login.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div> -->
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_colm" style="min-height: 720px !important;">
            
            <div class="col-md-12 image-cover">
                <img src="<?php echo base_url(); ?>/assets/production/images/restoran/cover.jpg">
            </div>
            
            <div class="col-md-12 user-photo">
                <div class="photo">
                    <img src="<?php echo base_url(); ?>/assets/production/images/img.jpg">
                </div>
                <div class="name-resto">NASI GORENG ACEH MERDEKA</div>
                <a class="btn-cover"><i class="fa fa-pencil-square-o" aria-hidden="true">&nbsp;&nbsp;</i>Sunting Profil</a>
            </div>

            <div class="col-md-4">
                <div class="biodata">
                    <div class="username-bar"><i class="fa fa-user" aria-hidden="true">&nbsp;&nbsp;&nbsp;</i>Username</div>
                    <div class="phone-bar"><i class="fa fa-phone" aria-hidden="true">&nbsp;&nbsp;&nbsp;</i>08123456789</div>
                    <div class="time-bar"><i class="fa fa-clock-o" aria-hidden="true">&nbsp;&nbsp;&nbsp;</i>08.00 WIB - 20.00 WIB</div>
                    <div class="address-bar">
                        <i class="fa fa-map-marker">&nbsp;&nbsp;&nbsp;</i>
                        <span>Jl. Padjajaran No 41, Kota Bogor, Jawa Barat, Indonesia</span>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="menu-bar">
                    <div class="header-menu">
                        <i class="fa fa-list">&nbsp;&nbsp;&nbsp;</i>Menu Makanan dan Minuman
                    </div>
                    <div class="image-menu">
                        <img src="<?php echo base_url(); ?>/assets/production/images/restoran/1a.jpg">
                    </div>
                    <div class="image-menu">
                        <img src="<?php echo base_url(); ?>/assets/production/images/restoran/2a.jpg">
                    </div>
                    <div class="image-menu">
                        <img src="<?php echo base_url(); ?>/assets/production/images/restoran/3a.jpg">
                    </div>
                    <div class="image-menu">
                        <img src="<?php echo base_url(); ?>/assets/production/images/restoran/4a.jpg">
                    </div>
                    <div class="image-menu">
                        <img src="<?php echo base_url(); ?>/assets/production/images/restoran/1a.jpg">
                    </div>
                </div>
            </div>


        </div>
        <!-- /page content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>/assets/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url(); ?>/assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url(); ?>/assets/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url(); ?>/assets/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="<?php echo base_url(); ?>/assets/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="<?php echo base_url(); ?>/assets/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?php echo base_url(); ?>/assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url(); ?>/assets/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="<?php echo base_url(); ?>/assets/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="<?php echo base_url(); ?>/assets/vendors/Flot/jquery.flot.js"></script>
    <script src="<?php echo base_url(); ?>/assets/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="<?php echo base_url(); ?>/assets/vendors/Flot/jquery.flot.time.js"></script>
    <script src="<?php echo base_url(); ?>/assets/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="<?php echo base_url(); ?>/assets/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="<?php echo base_url(); ?>/assets/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="<?php echo base_url(); ?>/assets/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="<?php echo base_url(); ?>/assets/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="<?php echo base_url(); ?>/assets/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="<?php echo base_url(); ?>/assets/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="<?php echo base_url(); ?>/assets/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo base_url(); ?>/assets/vendors/moment/min/moment.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url(); ?>/assets/js/custom.min.js"></script>
    
  </body>
</html>
