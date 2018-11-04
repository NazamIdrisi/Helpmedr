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
	<title>HELPMEDR | Login</title>
<link href="images/logo.png" rel="shortcut icon"/>
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
	
	<?php
    include("db.php");
    
    if(!empty($_POST["dr_submit"])){
            
            $dr_name = $_POST["dr_email"];
            
            $d_pass = $_POST["dr_pass"];
           
            
            $query ="select * from doctor where dr_email = '$dr_name' and pass = '$d_pass'";
              $rs=mysqli_query($con,$query);
            $fr=mysqli_fetch_row($rs);
           
            $dr_username=$fr[4];
            $drr_pass=$fr[13];
       
                      
            if($dr_name==$dr_username && $d_pass==$drr_pass)
            {
               
                $_SESSION['dusername']=$dr_username;
                $_SESSION['dpass']=$drr_pass;
                
                
                
                                
                
                header("Location: admin/d_login.php");
                
                
            }
            else{
                
              
               echo "<h4 style='color:red;text-align:center;'>Invalid id and password</h4>";
            }
            
            
        }elseif(!empty($_POST["p_submit"])){
            
            $p_name = $_POST["p_email"];
            
            $p_pass = $_POST["p_pass"];
           
            
            $query ="select * from pathology where User_Name = '$p_name' and User_Password = '$p_pass'";
              $rs=mysqli_query($con,$query);
            $fr=mysqli_fetch_row($rs);
           
            $User_Name=$fr[7];
            $User_Password=$fr[8];
       
                      
            if($p_name==$User_Name && $p_pass==$User_Password)
            {
               
                $_SESSION['pusername']=$pp_username;
                $_SESSION['ppass']=$pp_pass;
                
                
                
                                
                
                header("Location: admin/p_login.php");
                
                
            }
            else{
                
              
               echo "<h4 style='color:red;text-align:center;'>Invalid id and password</h4>";
            }
            
            
        }elseif(!empty($_POST["e_submit"])){
            
            $e_name = $_POST["e_email"];
            
            $e_pass = $_POST["e_pass"];
           
            
            $query ="select * from equipments where user_name = '$e_name' and user_password = '$e_pass'";
              $rs=mysqli_query($con,$query);
            $fr=mysqli_fetch_row($rs);
           
            $user_name=$fr[5];
            $user_password=$fr[6];
       
                      
            if($e_name==$user_name && $e_pass==$user_password)
            {
               
                $_SESSION['eusername']=$ee_username;
                $_SESSION['epass']=$ee_pass;
                
                
                
                                
                
                header("Location: admin/e_login.php");
                
                
            }
            else{
                
              
               echo "<h4 style='color:red;text-align:center;'>Invalid id and password</h4>";
            }
            
            
        }
    
    ?>

            
    
    
    
    
    <div class="container">
  
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Doctors</a></li>
    <li><a data-toggle="tab" href="#menu1">Pathology</a></li>
    <li><a data-toggle="tab" href="#menu2">Equipments</a></li>
    <!--<li><a data-toggle="tab" href="#menu3">Helth Insurance</a></li>
      <li><a data-toggle="tab" href="#menu4">Medicine</a></li>-->
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <div class="msg-form column3 col-sm-12" style="background-color:#eff0de;padding:10px 5px 50px 5px;border-radius:15px;margin-top:50px;margin-bottom:50px;">
				<center><h4>Login</h4></center>
				<div class="border"></div>
				<form  id="contact-form" action="company_login.php" method="post" enctype="multipart/form-data">
					<center>
                        <table>
                            
                            
                    <tr><td><input name="dr_email"  type="text" data-value="User Id" required></td></tr>
                        <tr><td><input name="dr_pass"  type="text" data-value="Password" style="-webkit-text-security: square;" required></td></tr>
                        
                        <tr><td><input type="submit"  name="dr_submit" value="Submit" style="padding-right:40px;padding-left:40px;"></td></tr>
                        </table>
                    </center>
				</form>
			</div>
      </div> 
      
      <?php
      
      
    
    ?>
    <div id="menu1" class="tab-pane fade">
      <div class="msg-form column3 col-sm-12" style="background-color:#eff0de;padding:10px 5px 50px 5px;border-radius:15px;margin-top:50px;margin-bottom:50px;">
				<center><h4>Login</h4></center>
				<div class="border"></div>
				<form  id="contact-form" action="company_login.php" method="post" enctype="multipart/form-data">
					<center>
                        <table>
                            
                            <tr>
                        
                        </tr>
                    <tr><td><input name="p_email" id="name" type="text" data-value="User Id" required></td></tr>
                        <tr><td><input name="p_pass" id="mail" type="text" data-value="Password" style="-webkit-text-security: square;" required></td></tr>
                        
                        <tr><td><input type="submit" name="p_submit" value="Submit" style="padding-right:40px;padding-left:40px;"></td></tr>
                        </table>
                    </center>
				</form>
			</div>
    </div>
      
      <?php
      
      
    
    ?>
      
    <div id="menu2" class="tab-pane fade">
      <div class="msg-form column3 col-sm-12" style="background-color:#eff0de;padding:10px 5px 50px 5px;border-radius:15px;margin-top:50px;margin-bottom:50px;">
				<center><h4>Login</h4></center>
				<div class="border"></div>
				<form  id="contact-form" action="company_login.php" method="post" enctype="multipart/form-data">
					<center>
                        <table>
                            
                            <tr>
                        
                        </tr>
                    <tr><td><input name="e_email" id="name" type="text" data-value="User Id" required></td></tr>
                        <tr><td><input name="e_pass" id="mail" type="text" data-value="Password" required style="-webkit-text-security: square;"></td></tr>
                        
                        <tr><td><input type="submit"  name="e_submit" value="Submit" style="padding-right:40px;padding-left:40px;"></td></tr>
                        </table>
                    </center>
				</form>
			</div>
    </div>
    <div id="menu3" class="tab-pane fade">
       <div class="msg-form column3 col-sm-12" style="background-color:#eff0de;padding:10px 5px 50px 5px;border-radius:15px;margin-top:50px;margin-bottom:50px;">
				<center><h4>Login</h4></center>
				<div class="border"></div>
				<form  id="contact-form" action="#">
					<center>
                        <table>
                            
                            <tr>
                        
                        </tr>
                    <tr><td><input name="h_email" id="name" type="text" data-value="User Id" required></td></tr>
                        <tr><td><input name="h_pass" id="mail" type="text" data-value="Password" required style="-webkit-text-security: square;"></td></tr>
                        
                        <tr><td><input type="submit" name="h_submit" value="Submit" style="padding-right:40px;padding-left:40px;"></td></tr>
                        </table>
                    </center>
				</form>
			</div>
    </div>
      
      <div id="menu4" class="tab-pane fade">
       <div class="msg-form column3 col-sm-12" style="background-color:#eff0de;padding:10px 5px 50px 5px;border-radius:15px;margin-top:50px;margin-bottom:50px;">
				<center><h4>Login</h4></center>
				<div class="border"></div>
				<form  id="contact-form" action="#">
					<center>
                        <table>
                            
                            <tr>
                        
                        </tr>
                    <tr><td><input name="m_email" id="name" type="text" data-value="User Id" required></td></tr>
                        <tr><td><input name="m_pass" id="mail" type="text" data-value="Password" required style="-webkit-text-security: square;"></td></tr>
                        
                        <tr><td><input type="submit" name="m_submit" value="Submit" style="padding-right:40px;padding-left:40px;"></td></tr>
                        </table>
                    </center>
				</form>
			</div>
    </div>
  </div>
</div>
    
    
    
    
    
    
    
    
    
    
    
	<!-- Container --
	<div class="wrapper">
		<div class="contact-row dark">
		<br><br>
			<div class="contact2 column4">
				
			</div>


			<div class="msg-form column3" style="background-color:#eff0de;padding:10px 5px 50px 5px;border-radius:15px;margin-right:10px;">
				<center><h4>Login</h4>
				<div class="border"></div>
				<form  id="contact-form" action="#">
					<input name="User Id" id="name" type="text" data-value="User Id"><br>
					<input name="Password" id="mail" type="text" data-value="Password"><br>
					
					<input type="submit" id="submit_contact" value="Reset">
					<input type="submit" id="submit_contact" value="Submit">
	  				<div id="msg" class="message"></div>
				</form></center>
			</div>
			<div class="contact2 column5">
				
			</div>
			<div class="clear"></div>
			<br>
			<br>
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