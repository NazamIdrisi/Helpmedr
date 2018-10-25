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
						<li><a href="choose_login.php">Login</a></li>
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
    	You are here:<a href="index.php">Home</a> &gt; Pathology
		</div>
	<div class="clear"></div>
	</div>
	</div>
	

	<!-- Container -->
    
    <?php
    include("db.php");
                                        if(isset($_GET['pp_id'])){
        
                                                $cat_title = $_GET['pp_id'];
            
         
                $get_cat_pro = "select * from pathology where Pathology_Id='$cat_title'";
                
                $run_cat_pro = mysqli_query($con,$get_cat_pro);
                
           //.. $count = mysqli_num_rows($con,$run_cat_pro);
            
            ////if($count == 0){
           //     echo "<h2>No post found in this categories.</h2>";
//}
                while($row=mysqli_fetch_array($run_cat_pro)){
                    
                    $Pathology_Id = $row['Pathology_Id'];
                    $Pathology_Name = $row['Pathology_Name'];
                    $Pathology_Address = $row['Pathology_Address'];
                    $Pathology_Mobile = $row['Pathology_Mobile'];
                    $Pathology_Email = $row['Pathology_Email'];
                    $Pathology_Description = $row['Pathology_Description'];
                    $Image= $row['Image'];
                    $type = $row['type'];
                    
                    
                    
    
    ?>
    
	<div class="wrapper">
		<table style="width:100%;border:1px dotted black;background-color:#e8e9eb;">
		<tr><td style="width:300px;border-bottom:1px dotted black;"><div class="view view-two"> 
		<img src="admin/images/<?php echo $Image; ?>" alt="" style="width:350px;height:320px;" /> 
		
	</div>
      <div class="port-span">
	      <h3>Name:- <?php echo $Pathology_Name ;?></h3>
	      <span>Type:- <?php echo $type ;?></span>
      </div></td>
	  <td style="width:600px;border-left:1px dotted black;border-right:1px dotted black;border-bottom:1px dotted black;background-color:white;padding:10px;border-radius:5px;">
	  <h1>Description</h1><pre><?php echo $Pathology_Description ;?></pre></td>
	  <td style="width:20%;border-bottom:1px dotted black;">
	  <h1 style="margin-top:-200px;"><Button style="width:100%;padding:5px;background-color:#ff3a00;border:none;font-size:18px;">Make Appointment</Button></h1>
	  <!--<h1><Button style="width:100%;padding:5px;background-color:#fff;border:none;font-size:18px;">Send Message</Button></h1>-->
	  <h1><Button style="width:100%;padding:5px;background-color:#32cd32;border:none;font-size:18px;">Enquiry Now</Button></h1>
	  </td></tr>		
	  <tr>
	  <td style="width:300px;">
	  <p style="background-color:white;padding:10px;border-radius:5px;">Address:-</p>
	  <p style="background-color:white;padding:10px;border-radius:5px;">Email Id  :-</p>
	  <p style="background-color:white;padding:10px;border-radius:5px;">Phone No :-</p>
	  
	  
	  
	  </td>
	  <td style="width:600px;border-left:1px dotted black;border-right:1px dotted black;">
	  <p style="background-color:white;padding:10px;border-radius:5px;"><?php echo $Pathology_Address;?></p>
      <p style="background-color:white;padding:10px;border-radius:5px;"><?php echo $Pathology_Email ;?></p>
      <p style="background-color:white;padding:10px;border-radius:5px;">+91 <?php echo $Pathology_Mobile ?></p>
      
	  </td>
	  </tr>
	  </table>

	
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