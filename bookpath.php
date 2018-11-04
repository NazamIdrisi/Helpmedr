<?php session_start(); ?>
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
    <style>
        #apb:hover{
            background-position: right center;
        }
        #apb{
            background-image: linear-gradient(to right, #a1c4fd 0%, #2E86C1 51%, #a1c4fd 100%);
        }
    </style>
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
    	You are here:<a href="index.php">Home</a> &gt; Pathology
		</div>
	<div class="clear"></div>
	</div>
	</div>
	

	<!-- Container -->

    <?php
    include("db.php");
                                     
                                      
    
    
    ?>
    
    <?php
    
    if(!empty($_POST["path_submit"])){
        
                        $path_id = $_SESSION['pathologyid'];
            
                        $u_id = $_POST["u_id"];
            
                        $path_name = $_SESSION['pathologyname'];
                        
                        
                        
                        

                        

                        $p_name = $_POST["p_name"];

                        $p_email = $_POST["p_email"];

                        $p_phone = $_POST["p_phone"];

                        $gendr = $_POST["gendr"];

                        $p_dob = $_POST["p_dob"];

                        $p_address = $_POST["p_address"];

                        $p_date = $_POST["p_date"];

                        $p_time = $_POST["p_time"];

                        

                        $p_desc = $_POST["p_desc"];

         $get_cat_pro = "select * from bookpath";
                
                $run_cat_pro = mysqli_query($con,$get_cat_pro);
                
           //.. $count = mysqli_num_rows($con,$run_cat_pro);
            
            ////if($count == 0){
           //     echo "<h2>No post found in this categories.</h2>";
//}
                while($row=mysqli_fetch_array($run_cat_pro)){
                    
                    $old_time = $row['p_time'];
                     $_SESSION['old_time']=$old_time;
                }
        
        if($old_time==$p_time){
            
            echo "<script>alert('Choose Another Time!!')</script>";
            
        }else{
            
             $insert ="insert into bookpath(path_id,u_id,path_name,p_name,p_email,p_phone,gendr,p_dob,p_address,p_date,p_time,p_desc) values('$path_id','$u_id','$path_name','$p_name','$p_email','$p_phone','$gendr','$p_dob','$p_address','$p_date','$p_time','$p_desc')";
                               
                               $fire = mysqli_query($con,$insert);
        
        if($fire){
            echo "<script>alert('Your Data Submited Sucessfull!!')</script>";
        }
        else{
            echo "<script>alert('Not submit')</script>";
        }
        
        }
        
        
         
        
    }
   
                      
    ?>
    
	<div class="container emp-profile">
        <form class="form-group" method="post" action="bookpath.php" enctype="multipart/form-data">
        <center><h2>Contact Pathology</h2></center>
            
          
            
        <div class="form-group">
          <label for="first_name">Pathology Id</label>
          <input type="text" class="form-control" readonly name="path_id" value="<?php echo $_SESSION['pathologyid']; ?>"  />
          <span class="help-block"></span>
        </div>
            
        <div class="form-group">
          <label for="first_name">User Id</label>
          <input type="text" class="form-control" readonly  name="u_id" value="<?php echo $_SESSION['usr_id']; ?>" >
          <span class="help-block"></span>
        </div>    
        
        <div class="form-group">
          <label for="first_name">Pathology Name</label>
          <input type="text" class="form-control" readonly  name="path_name" value="<?php echo $_SESSION['pathologyname']; ?>"  >
          <span class="help-block"></span>
        </div>    
            
        <div class="form-group">
          <label for="first_name">Patient name</label>
          <input type="text" class="form-control" required name="p_name" placeholder="Patient name" />
          <span class="help-block"></span>
        </div>
            
        <div class="form-group">
          <label for="last_name">Email</label>
          <input type="email" class="form-control"  name="p_email" placeholder="Email" required >
          <span class="help-block"></span>
        </div>  
            
        <div class="form-group">
          <label for="phone_number">Phone Number</label>
          <input type="tel" class="form-control" required name="p_phone" placeholder="+91-416-967-1111">
          <span class="help-block"></span>
        </div>
            
            <div class="form-inline">
          <label for="first_name">Gender</label>
                
          <label for="first_name"  style="margin-left:50px;">Male</label> <input type="radio" class="form-inline nn" name="gendr" value="Male"  required >
                
             <label for="first_name" >Female</label> <input type="radio" class="form-inline nn"  name="gendr" value="Female"  required  style="margin-left:10px;">
                
             <label for="first_name">Other</label> <input type="radio" class="form-inline nn"  name="gendr" value="Other"  required style="margin-left:10px;"><br/>
                
          <span class="help-block"></span>
        </div>
            
        <div class="form-group">
          <label for="dob">Date of Birth</label>
          <input type="date" class="form-control" name="p_dob" required />
          <span class="help-block"></span>
        </div>
            
            <div class="form-group">
          <label for="first_name">Address</label>
          <input type="text" class="form-control" name="p_address" placeholder="Address" required />
          <span class="help-block"></span>
        </div>
            
            <div class="form-group">
          <label for="first_name">Select Date</label>
          <input type="date" class="form-control"  name="p_date" placeholder="Select Date" required />
          <span class="help-block"></span>
        </div>
            
            <div class="form-group">
          <label for="first_name">Time</label>
          <input type="time" class="form-control"  name="p_time" placeholder="Time" required />
          <span class="help-block"></span>
        </div>
            
            
            
            <div class="form-group">
          <label for="first_name">Your Query</label>
          
                <textarea class="form-control" name="p_desc" required placeholder="Short Description" cols="5" rows="5"></textarea>
          <span class="help-block"></span>
        </div><br/>
            
          <input type="submit" name="path_submit" value="Connect" id="apb" class="btn btn-lg btn-block" />
        
      </form>
           <!-- <center><form method="post">
                <div class="row">
                    <div class="col-md-6">
                        
                       <table>
                        <tr>
                           <td>
                                <div class="form-group">
          <label for="first_name">First Name</label>
          <input type="text" class="form-control" id="first_name" placeholder="First Name" required autofocus autocomplete="on">
          <span class="help-block"></span>
        </div>
                            </td>
                           </tr>
                        </table>
                    </div>
                    <div class="col-md-6">
                        
                    </div>
                    
                </div>
                <div class="row">
                    
                    
                    </div>
                </div>
            </form>   </center> --->       
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
    <script type="text/javascript" src="js/script.js"></script>

<script src="http://code.jquery.com/jquery-2.2.4.min.js"></script>


</body>
</html>