<?
session_start();

include("db.php");
?>

<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- FAVICON -->
    <link rel="icon" href="assets/img/favicon.png">
    <!--   Title Page -->
    <title>EKUDMIN - Home</title>
    <!-- bootstrap.min.css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- animate.css -->
    <link href="assets/css/animate.min.css" rel="stylesheet">
    <!-- material fonts.css -->
    <link href="assets/css/material-design-iconic-font.min.css" rel="stylesheet">
    <!-- style.css -->
    <link href="style.css" rel="stylesheet">
    <!-- responsive.css -->
    <link href="assets/css/responsive.css" rel="stylesheet">
    <!-- theme-color.css -->
    <link href="assets/css/theme-color.css" rel="stylesheet">
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <!--  page loader -->
    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <!--  page loader end -->
    <!--  custom theme area start -->
    <div class="theme_toggle">
        <!-- theme toggle btn start-->
        <span class="theme-icon"><i class="zmdi zmdi-settings"></i></span>
    </div>
    <div class="custom-theme">
        <h4 class="title-theme">Configuration</h4>
        <div class="theme-switch">
            <span class="title_meta">Background Image</span>
            <label class="switch">
              <input type="checkbox" checked>
              <span class="slider"></span>
            </label>
        </div>
        <div class="filter-color">
            <span class="filter-title">Filters</span>
            <span class="color_green"></span>
            <span class="color_blue"></span>
            <span class="color_black"></span>
        </div>
        <div class="theme-image">
            <h4>Sidebar image & Background</h4>
            <span class="theme_img1"><img src="assets/img/theme-img1.jpg" alt=""></span>
            <span class="theme_img2"><img src="assets/img/theme-img2.jpg" alt=""></span>
            <span class="theme_img3"><img src="assets/img/theme-img3.jpg" alt=""></span>
        </div>
        <div class="theme-social-link">
            <h4>Thank you for sharing!</h4>
            <a href="#"><i class="zmdi zmdi-facebook"></i> Facebook</a>
            <a href="#"><i class="zmdi zmdi-twitter"></i> Twitter</a>
            <a href="#"><i class="zmdi zmdi-google-plus"></i> Google-plus</a>
        </div>
    </div>
    <!--  custom theme area end -->
    <!--  Header area start -->
    
    <?php  include("user_header.php"); ?>
    
    
    <!--  Header area end -->
    <!--  Nav menu area start -->
  <?php  include("sidebar.php"); ?>
    
    
    <!-- /.dash-navbar-left -->
    <!--  Homepage sec 1 start -->
    <div class="main-wraper-bg mar_lft_282">
        <div class="homepage-sec1">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Dashboard</h2>
                    </div>
                </div>
               
            </div>
        </div>
        <!--  Homepage sec 1 end -->
        <!--  Homepage sec 2 start -->
        <div class="homepage-sec2">
            <div class="container-fluid">
                <div class="row">
                   
                   
                </div>
                <div class="home_table_area form-shadow">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="home_table_title">
                                <h3>New Doctors</h3>
                            </div>
                        </div>
                    </div>
                    <div class="basic-table cta">
                        <div class="row">
                            <div class="col-lg-12 table_basic1">
                                <table class="responsive-table-input-matrix">
                                    <thead>
                                        <tr>
                                            <th>Doctor Name</th>
                                            <th>Doctor Contact</th>
                                            <th>Specification</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                            <th>Image</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
  
                                        include("db.php");
                                        
$sql = "select * from doctor ORDER BY(dr_id) DESC LIMIT 0,10";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
                                             $id=$row['dr_id'];
											 $Doct_id=$row['dr_id'];
        
											 $Doct_name=$row['dr_name'];
        
											 $Doct_mobile=$row['dr_mobile'];
        
                                            $Doct_specialities=$row['dr_specialities'];
        
                                            $Doct_email=$row['dr_email'];
        
                                            $Doct_add=$row['dr_add'];
        
                                            $Doct_im=$row['img'];
        
                                            $Doct_language=$row['dr_languages'];
        
                                            $Doct_expertise=$row['dr_expertise'];
        
                                            $Doct_about=$row['dr_about'];
        
                                            $Doct_education=$row['dr_education'];
        
                                            $Doct_achievements=$row['dr_achievements'];
        
                                            $Doct_practice=$row['dr_practice'];
        
                                             $Doct_pass=$row['pass'];
								?>
                                            
											<tr>
                                               
												<td><?php echo $Doct_name; ?></td>
												<td><?php echo $Doct_mobile; ?></td>
												<td><?php echo $Doct_specialities; ?></td>
												<td><?php echo $Doct_email; ?></td>
												<td><?php echo $Doct_add; ?></td>
												<td><img src="../admin/images/<?php echo $Doct_im; ?>" class="img-responsive" style="width:80px;height:80px;" alt=""></td>
												
												
												
												 
                                             
                                                
                                               
                                            </tr>
                                            
                                            <?php
    }
} else {
    echo "0 results";
}

mysqli_close($con);
?>
                                            
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  Homepage sec 2 end -->
    <!-- footer area start -->
    <div class="footer-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-8 col-12">
                    <h5>© 2018 All right recive Design by <a href="#">Crazycafe</a></h5>
                </div>
                <div class="col-lg-6 col-md-4 col-12 text-right">
                    <div class="footer-support">
                        <a href="#">Contact us</a>
                        <a href="#">Support</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer area end -->
    <!-- jquery.js -->
    <script src="assets/js/jquery.js"></script>
    <!-- jquery.popper.min.js -->
    <script src="assets/js/popper.min.js"></script>
    <!-- bootstrap.min.js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- inview.min.js -->
    <script src="assets/js/inview.js"></script>
    <!-- counter.min.js -->
    <script src="assets/js/counter.js"></script>
    <!-- jvectormap -->
    <script src="assets/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="assets/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!--  dashboard js active -->
    <script src="assets/js/dashboard.js"></script>
    <!--  dashboard-map js active -->
    <script src="assets/js/dashboard-map.js"></script>
    <!--  touchswip js  -->
    <script src="assets/js/jquery.touchSwipe.min.js"></script>
    <!-- chart.min.js -->
    <script src="assets/js/chart.min.js"></script>
    <!-- main.js -->
    <script src="assets/js/main.js"></script>
    <!-- custom-theme.js -->
    <script src="assets/js/custom-theme.js"></script>
</body>

<!-- Mirrored from static.crazycafe.net/crazycafe/ekudmin/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Aug 2018 04:32:30 GMT -->
</html>