<?php

session_start();
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>HELPMEDR - Portfolio</title>

	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/card.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/dr-framework.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/navigation.css" type="text/css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/fullwidth.css" media="screen" />
	<link rel="stylesheet" href="css/revslider.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/jquery.bxslider.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/responsive.css" type="text/css" media="screen">
	<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
 <link rel="stylesheet" href="css/animate.css" />
    <link rel="stylesheet" href="css/profile.css" />

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	

	<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->
	<!-- html5.js for IE less than 9 -->
	<!-- css3-mediaqueries.js for IE less than 9 -->
	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!--[if lt IE 9]>
 	<link rel="stylesheet" type="text/css" href="css/ie8-and-down.css" />
	<![endif]-->
</head>
<body>

	<!-- Start Header -->
	<header id="header">
		
		<div class="subheader clearfix">
			<div class="inner-subheader">
				<div class="phone">+91 8960176488</div>

				<div class="subheader2">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="about.php">About</a></li>
						<li><a href="services.php">Services </a></li>
						<li><a href="contact.php">Contact</a></li>
						<?php if (isset($_SESSION['usr_id'])) { ?>
				<li><b><p style="color:white;">Signed in as <?php echo $_SESSION['usr_name']; ?></p></b></li>
				<li><a href="user/index.php">My account</a></li>
                        <li><a href="logout.php">Log Out</a></li>
                        
				<?php } else { ?>
				<li><a href="choose_login.php">Login</a></li>
				
				<?php } ?>
					</ul>				
				</div>
			</div>
		</div>

		<div class="row2">
		<div class="upper-header">
			
			<div class="logo">
				<center><a href="index.php"><img src="images/logo.png" alt="" style="height:70%;width:70%;"></a></center>
			</div>					
			
			
        	<div class="clear"></div>
       </div>  
       <!-- End Upper Header -->
       </div>
       <!-- End Row2 -->

	</header>
	<!-- End Header -->

	<div class="banner">
	<div class="inner-banner">
		<div class="note"></div>
		<div class="site-map">
    	You are here:<a href="index.html">Home</a> &gt; Doctors
		</div>
	<div class="clear"></div>
	</div>
	</div>
	

	<!-- Container -->
    
     <?php
    include("db.php");
                                        if(isset($_GET['did'])){
        
                                                $cat_title = $_GET['did'];
            
         
                $get_cat_pro = "select * from doctor where dr_id='$cat_title'";
                
                $run_cat_pro = mysqli_query($con,$get_cat_pro);
                
           //.. $count = mysqli_num_rows($con,$run_cat_pro);
            
            ////if($count == 0){
           //     echo "<h2>No post found in this categories.</h2>";
//}
                while($row=mysqli_fetch_array($run_cat_pro)){
                    
                    $d_id = $row['dr_id'];
                    $d_name = $row['dr_name'];
                    $d_mob = $row['dr_mobile'];
                    $d_sps = $row['dr_specialities'];
                    $d_email = $row['dr_email'];
                    $d_add = $row['dr_add'];
                    $dimg= $row['img'];
                    $d_lan = $row['dr_languages'];
                    $d_ex = $row['dr_expertise'];
                    $d_abt = $row['dr_about'];
                    $d_edu = $row['dr_education'];
                    $d_amt = $row['dr_achievements'];
                    $d_pra = $row['dr_practice'];
                    
                     $_SESSION['doctorid']=$d_id;
                    $_SESSION['dname']=$d_name;
                    
                    
                    
    
    ?>
    
    
    
	<div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            
                            <img src="admin/images/<?php echo $dimg; ?>" alt="" style="width:245px;height:200px;"/>
                            <div class="file btn btn-lg btn-primary">
                                <?php echo $_SESSION['dname'] ;?>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="profile-head">
                                    <h5>
                                        <?php echo $_SESSION['dname'] ;?>
                                    </h5>
                                    <h6>
                                        <?php echo $d_amt ;?>
                                    </h6>
                                    <p class="proile-rating">SPECIALITIES : <span><?php echo $d_sps;?></span></p>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Description</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                       <a href="bookappointment.php?did=<?php echo $row["dr_id"]?>" class="profile-edit-btn btn-success" name="btnAddMore" style="text-decoration:none">Book Appointment</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            <p>WORK EXPERIENCE</p>
                            <a href="#"><?php echo $d_ex ;?> Years</a><br/>
                            
                            <p>EDUCATION TIME</p>
                            <a href=""><?php echo $d_edu ;?></a><br/>
                            
                            
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Doctor Id</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>doc13<?php echo $d_id ;?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $d_name;?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $d_email;?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>+91 <?php echo $d_mob ;?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Address</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $d_add ;?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Language</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $d_lan ;?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Practice</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $d_pra ;?></p>
                                            </div>
                                        </div>
                                        
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                       
                                        
                                        
                                       
                                        
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>Description</label><br/>
                                        <p><?php echo $d_abt ;?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>
    
    
    
    
    
	 <?php
                    
                }
                                        }
    ?>
	<!-- End Wrapper -->

	<!-- Footer -->
	<?php include 'footer.php'; ?>


	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script src="js/jquery.flexslider.js"></script>
	<script type="text/javascript" charset="utf-8">
  		$(window).load(function() {
  		  $('.flexslider').flexslider();
  		});
	</script>
	<script type="text/javascript" src="js/jquery.superfish.js"></script>
    <script type="text/javascript" src="js/script.js"></script>

<script src="http://code.jquery.com/jquery-2.2.4.min.js"></script>


</body>
</html>