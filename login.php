<?php
	include('login_process.php'); // Include Login Script

	if ((isset($_SESSION['UserName']) != '')) 
	{
		header('Location:login.php');
	}	
	

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>HELPMEDR | Login</title>

	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/bootstrap-responsive.css" type="text/css" media="screen">
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
						<li><a href="services.php">Services </a></li>
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
	<div class="clear"></div>
	<div class="banner">
	<div class="inner-banner">
		<div class="note">Login</div>
		<div class="site-map">
    	You are here:<a href="index.html">Home</a> &gt; Login
		</div>
	<div class="clear"></div>
	</div>
	</div>
	
	

	<!-- Container -->
	<div class="container">
  
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Login</a></li>
    <li><a data-toggle="tab" href="#menu1">Sign Up</a></li>
    
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <div class="msg-form column3 col-sm-12" style="background-color:#eff0de;padding:10px 5px 50px 5px;border-radius:15px;margin-top:50px;margin-bottom:50px;">
				<center><h4>Login</h4></center>
				<div class="border"></div>
				<form  id="contact-form" action="login.php" method="post">
					<center>
                        <table>
                           
                            <tr>
                        
                        </tr>
                    <tr><td><input name="email" id="name" type="text" data-value="User Id"></td></tr>
                        <tr><td><input name="password" id="mail" type="text" data-value="Password"></td></tr>
                        
                        <tr><td><input type="submit" name="submit" id="submit_contact" value="Login!" style="padding-right:40px;padding-left:40px;"></td></tr>
                        </table>
                    </center>
				</form>
			</div>
      </div> 
    <div id="menu1" class="tab-pane fade">
      <div class="msg-form column3 col-sm-12" style="background-color:#eff0de;padding:10px 5px 50px 5px;border-radius:15px;margin-top:50px;margin-bottom:50px;">
				<center><h4>Sign Up</h4></center>
				<div class="border"></div>
				<form  id="contact-form" action="#">
					<center>
                        <table>
                            
                            <tr>
                        
                        </tr>
                    <tr><td><label>Email:</label></td><td><input name="User Id" id="name" type="text" data-value="Email"></td></tr>
                        <tr><td><label>Password:</label></td><td><input name="Password" id="mail" type="text" data-value="Password"></td></tr>
                        
                        <tr><td></td><td><input type="submit" id="submit_contact" value="Submit" style="padding-right:40px;padding-left:40px;"></td></tr>
                        </table>
                    </center>
				</form>
			</div>
    </div>
    
    
     
  </div>
</div>
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
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script type="text/javascript" src="js/gmap3.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>

</body>
</html>