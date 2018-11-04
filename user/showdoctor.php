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
    <title>Helpmedr||Show Doctors</title>
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
     <script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
    <!--  panel area start -->
    <div class="form-validation mar_lft_282 all-bg">
        <div class="container-fluid">
           
          
               <!--  basic table center -->
                <div class="basic-table sec_2 form-shadow">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="home_table_title">
                                <h3>Your Doctor's History</h3>
                                <div class="forms-select-page">
                                    <!--<span class="show_1">Show</span>
                                    <input type="number" value="10" min="0" max="100" />
                                    <span class="show_2"> entries</span>
                                    <span id="inc-button2" class="spinner-button"><i class="zmdi zmdi-caret-up"></i></span>
                                    <span id="dec-button2" class="spinner-button"><i class="zmdi zmdi-caret-down"></i></span>-->
                                    <span class="table-search-right">
                                        <span>search</span>
                                        <input type="search" id="myInput">
                                         <div id="result"></div>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 table_basic1">
                            
                            
                            <table class="responsive-table-input-matrix" id="myTable" >
                                <thead>
                                    <tr>
                                        <th>ID <i class="zmdi zmdi-caret-up"></i> <i class="zmdi zmdi-caret-down"></i></th>
                                        <th>Doctor Id <i class="zmdi zmdi-caret-up"></i> <i class="zmdi zmdi-caret-down"></i></th>
                                        <th>User ID <i class="zmdi zmdi-caret-up"></i> <i class="zmdi zmdi-caret-down"></i></th>
                                        <th>Doctor Name<i class="zmdi zmdi-caret-up"></i> <i class="zmdi zmdi-caret-down"></i></th>
                                        <th>Patient Name <i class="zmdi zmdi-caret-up"></i> <i class="zmdi zmdi-caret-down"></i></th>
                                        <th>Patient Email <i class="zmdi zmdi-caret-up"></i> <i class="zmdi zmdi-caret-down"></i></th>
                                        <th>Patient Mobile <i class="zmdi zmdi-caret-up"></i> <i class="zmdi zmdi-caret-down"></i></th>
                                        <th>Patient DOB <i class="zmdi zmdi-caret-up"></i> <i class="zmdi zmdi-caret-down"></i></th>
                                        <th>Patient Address <i class="zmdi zmdi-caret-up"></i> <i class="zmdi zmdi-caret-down"></i></th>
                                        <th>Attend Date <i class="zmdi zmdi-caret-up"></i> <i class="zmdi zmdi-caret-down"></i></th>
                                        <th>Attend Time <i class="zmdi zmdi-caret-up"></i> <i class="zmdi zmdi-caret-down"></i></th>
                                        <th>Attended Our Facility <i class="zmdi zmdi-caret-up"></i> <i class="zmdi zmdi-caret-down"></i></th>
                                        <th>Description <i class="zmdi zmdi-caret-up"></i> <i class="zmdi zmdi-caret-down"></i></th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    
                            <?php 
                            
                                    if(isset($_SESSION['usr_id'])!="") {
	

                                    
                            $useerid = $_SESSION['usr_id'];
                            
                            $get_cat_pro = "select * from bookappointment where user_id='$useerid'";
                
                $run_cat_pro = mysqli_query($con,$get_cat_pro);
                
           //.. $count = mysqli_num_rows($con,$run_cat_pro);
            
            ////if($count == 0){
           //     echo "<h2>No post found in this categories.</h2>";
//}
                while($row=mysqli_fetch_array($run_cat_pro)){
                            
                    
                     $main_id = $row['id'];
                    $doc_id = $row['doc_id'];
                    $user_id = $row['user_id'];
                    $doc_name = $row['doc_name'];
                    $patient_name = $row['patient_name'];
                    $patient_email = $row['patient_email'];
                    $patient_phone = $row['patient_phone'];
                    $patient_dob = $row['patient_dob'];
                    $patient_address = $row['patient_address'];
                    $patient_date = $row['patient_date'];
                    $patient_time = $row['patient_time'];
                    $patient_yy = $row['yy'];
                    $patient_desc = $row['patient_desc'];
                     
                    
                    ?>
                            
                         <tr>
                                        <td><?php echo $main_id; ?></td>
                                        <td><?php echo $doc_id ;?></td>
                                        <td><?php echo $user_id ;?></td>
                                        <td><?php echo $doc_name ;?></td>
                                        <td><?php echo $patient_name ;?></td>
                                        <td><?php echo $patient_email ;?></td>
                                        <td><?php echo $patient_phone ;?></td>
                                        <td><?php echo $patient_dob ;?></td>
                                        <td><?php echo $patient_address ;?></td>
                                        <td><?php echo $patient_date ;?></td>
                                        <td><?php echo $patient_time ;?></td>
                                        <td><?php echo $patient_yy ;?></td>
                                        <td><?php echo $patient_desc ;?></td>
                                        
                                    </tr>   
                            
                            
                            
                            
                            
            <?php    }}
                            ?>
                            
                            
                            
                            
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div><!--  basic table bottom end -->
              
            
        </div>
    </div>
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