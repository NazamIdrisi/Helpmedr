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
    
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
						<li><a href="#">Services </a></li>
						<li><a href="contact.php">Contact</a></li>
						<?php if (isset($_SESSION['usr_id'])) { ?>
                        
                        <li class="dropdown"><b><p style="color:white;">Signed in as <?php echo $_SESSION['usr_name']; ?></p></b></li>
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
    	You are here:<a href="index.php">Home</a> &gt; Equipments
		</div>
	<div class="clear"></div>
	</div>
	</div>
	

	<!-- Container -->
    
    <?php
    include("db.php");
                                        if(isset($_GET['pp_id'])){
        
                                                $cat_title = $_GET['pp_id'];
            
         
                $get_cat_pro = "select * from equipments where Product_Id='$cat_title'";
                
                $run_cat_pro = mysqli_query($con,$get_cat_pro);
                
           //.. $count = mysqli_num_rows($con,$run_cat_pro);
            
            ////if($count == 0){
           //     echo "<h2>No post found in this categories.</h2>";
//}
                while($row=mysqli_fetch_array($run_cat_pro)){
                    
                    $Product_Id=$row['Product_Id'];
            $Product_Name=$row['Product_Name'];
           $Description=$row['Description'];
           $Aditional_Details=$row['Aditional_Details'];
           $Image=$row['Image'];
                    
                    $_SESSION['product_id']=$Product_Id;
                    $_SESSION['product_name']=$Product_Name;
                    
    
    ?>
    
	<div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            
                            <img src="admin/images/<?php echo $Image; ?>" alt="" style="width:245px;height:200px;"/>
                            <div class="file btn btn-lg btn-primary">
                                <?php echo $Product_Name ;?>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="profile-head">
                                    <h5>
                                        <?php echo $Product_Name ;?>
                                    </h5>
                                   
                                    <p class="proile-rating">Product Id : <span>pro13<?php echo $Product_Id;?></span></p>
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
                       <a href="bookproduct.php?pp_id=<?php echo $row["Product_Id"]?>" class="profile-edit-btn btn-success" name="btnAddMore" style="text-decoration:none">Place Order</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            <!--<p>WORK EXPERIENCE</p>
                            <a href="#"><?php //echo $d_ex ;?> Years</a><br/>--->
                            
                            
                            
                            
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Product Id</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>pro13<?php echo $Product_Id  ;?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $Product_Name ;?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Aditional Details</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $Aditional_Details ;?></p>
                                            </div>
                                        </div>
                                        
                                       
                                        
                                        
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                       
                                        
                                        
                                       
                                        
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>Description</label><br/>
                                        <p><?php echo $Description ;?></p>
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



</body>
</html>