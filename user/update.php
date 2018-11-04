<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from static.crazycafe.net/crazycafe/ekudmin/table.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Aug 2018 04:33:00 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- FAVICON -->
    <link rel="icon" href="assets/img/logo.png">
    <!--   Title Page -->
    <title>Helpmedr||Show Products</title>
    <!-- bootstrap.min.css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- animate.css -->
    <link href="assets/css/animate.min.css" rel="stylesheet">
    <!-- material fonts.css -->
    <link href="assets/css/material-design-iconic-font.min.css" rel="stylesheet">
    <!-- parfect scrollbar.css -->
    <link href="assets/css/perfect-scrollbar.min.css" rel="stylesheet">
    <!-- nice select.css -->
    <link href="assets/css/nice-select.css" rel="stylesheet">
    <!-- style.css -->
    <link href="style.css" rel="stylesheet">
    <!-- responsive.css -->
    <link href="assets/css/responsive.css" rel="stylesheet">
    <!-- theme-color.css -->
    <link href="assets/css/theme-color.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>
<body>
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
    
    <?php include("user_header.php"); ?>
    
    <!--  Header area end -->
    <!--  Nav menu area start -->
    <?php include("sidebar.php"); ?>
    <!-- /.dash-navbar-left -->
     
             <center> <div class="form-area mar_lft_282 all-bg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-title-area">
                        <h3>Update Your Password</h3>
                        <h4>Profile / Setting</h4>
                    </div>
                </div>
            </div>
            <?php 
            include("db.php");
            
            if(isset($_POST['update']))
  {
      
     $ct = $_SESSION['usr_name'];

      
   $u_email=$_POST["email"];
  $pass=$_POST['pass'];
  $cpass=$_POST['cpass'];
  
  
  
  
  $sql = mysqli_query($con,"UPDATE patient SET email='$u_email',password='$pass' where email='$ct'");
echo "<script>alert('Update Sucessfulll!!')</script>";
      
      
  }
            
            
            
            
            ?>
            
            
            <div class="wraper-bg-allpage">
                <div class="row">
                    
                    <div class="col-lg-12">
                        <div class="form-basic _cfs cta1 form-shadow">
                            <h3 class="form-title">Horizontal Form Layout</h3>
                            <form action="update.php" method="post" enctype="multipart/form-data">
                                <span class="form_4">Old Email</span>
                                <input type="email" name="email" placeholder="Email">
                                <p class="form-meta_1">Please enter your Email</p>
                                <span class="form_4">Password</span>
                                <input type="password" name="pass" placeholder="New Password">
                                <p class="form-meta_1">Your password must be 8-10 characters</p>
                                <span class="form_4">Confirm Password</span>
                                <input type="password" name="cpass" placeholder="Confirm Password">
                                <p class="form-meta_1">Your password must be 8-10 characters</p>
                               
                                <input type="submit" name="update" value="Update">
                            </form>
                        </div>
                    </div>
                </div>
                
                

               
                   
                </div>
            </div>
        </div>
            </center>
       
    
    <!--  button area end -->
    <!-- footer area start -->
    <?php include("footer.php"); ?>
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
    <!--  touchswip js  -->
    <script src="assets/js/jquery.touchSwipe.min.js"></script>
    <!--  perfect scrollbar js  -->
    <script src="assets/js/perfect-scrollbar.jquery.min.js"></script>
    <!--  nice select js  -->
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <!-- main.js -->
    <script src="assets/js/main.js"></script>
    <!-- custom-theme.js -->
    <script src="assets/js/custom-theme.js"></script>
</body>

<!-- Mirrored from static.crazycafe.net/crazycafe/ekudmin/table.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Aug 2018 04:33:03 GMT -->
</html>