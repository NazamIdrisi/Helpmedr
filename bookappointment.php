<?php session_start(); 

include("check.php");
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
    	You are here:<a href="index.php">Home</a> &gt; Doctors
		</div>
	<div class="clear"></div>
	</div>
	</div>
	

	<!-- Container -->

    <?php
    include("db.php");
                                     
                                      
    $dname = $_SESSION['dname'];
    
    ?>
    
    <?php
    
    if(!empty($_POST["p_submit"])){
        
                        $Doc_id = $_SESSION['doctorid'];
                        
                        $dname = $_SESSION['dname'];
                        
                        $user_id = $_SESSION['usr_id'];;

                        

                        $patient_name = $_POST["p_name"];

                        $patient_email = $_POST["p_email"];

                        $patient_phone = $_POST["p_phone"];

                        $patient_gender = $_POST["gendr"];

                        $patient_dob = $_POST["p_dob"];

                        $patient_address = $_POST["p_address"];

                        $patient_date = $_POST["p_date"];

                        $patient_time = $_POST["p_time"];

                        $patient_y = $_POST["yy"];

                        $patient_desc = $_POST["p_desc"];

             $get_cat_pro = "select * from bookappointment";
                
                $run_cat_pro = mysqli_query($con,$get_cat_pro);
                
           //.. $count = mysqli_num_rows($con,$run_cat_pro);
            
            ////if($count == 0){
           //     echo "<h2>No post found in this categories.</h2>";
//}
                while($row=mysqli_fetch_array($run_cat_pro)){
                    
                    $old_time = $row['patient_time'];
                     $_SESSION['old_time']=$old_time;
                }
        
        if($old_time==$patient_time){
            
            echo "<script>alert('Choose Another Time!!')</script>";
            
        }else{
            
             $insert ="insert into bookappointment(doc_id,user_id,doc_name,patient_name,patient_email,patient_phone,gendr,patient_dob,patient_address,patient_date,patient_time,yy,patient_desc) values('$Doc_id','$user_id','$dname','$patient_name','$patient_email','$patient_phone','$patient_gender','$patient_dob','$patient_address','$patient_date','$patient_time','$patient_y','$patient_desc')";
                               
                               $fire = mysqli_query($con,$insert);
        
        if($fire){
            header("location:index.php");
        }
        else{
            echo "<script>alert('Not submit')</script>";
        }
        }
        
        
        
         
        
    }
   
                      
    ?>
    
    
	<div class="container emp-profile">
        <form class="form-group" method="post" action="bookappointment.php" enctype="multipart/form-data">
        <center><h2>Book Your Appointment</h2></center>
           
        <div class="form-group">
          <label for="first_name">Doctor Id</label>
          <input type="text" class="form-control" readonly  name="d_id" value="<?php echo $_SESSION['doctorid'];?>">
          
        </div>
            
        <div class="form-group">
          <label for="first_name">User Id</label>
          <input type="text" class="form-control" readonly name="u_id" value="<?php echo $_SESSION['usr_id']; ?>">
          
        </div>    
        
        <div class="form-group">
          <label for="first_name">Doctor Name</label>
          <input type="text" class="form-control" readonly name="d_name" value="<?php echo $_SESSION['dname']; ?> ">
          
        </div>  
            
        <div class="form-group">
          <label for="first_name">Patient name</label>
          <input type="text" class="form-control" id="p_name" name="p_name" placeholder="Patient name" required>
          
        </div>
            
        <div class="form-group">
          <label for="last_name">Email</label>
          <input type="email" class="form-control" id="Email" name="p_email" placeholder="Email" required >
          
        </div>  
            
        <div class="form-group">
          <label for="phone_number">Phone Number</label>
          <input type="tel" class="form-control" id="phone_number" name="p_phone" placeholder="+91-416-967-1111" required>
          
        </div>
            
            <div class="form-inline">
          <label for="first_name">Gender</label>
                
          <label for="first_name"  style="margin-left:50px;">Male</label> <input type="radio" class="form-inline nn" id="p_name" name="gendr" value="Male"  required >
                
             <label for="first_name" >Female</label> <input type="radio" class="form-inline nn" id="p_name" name="gendr" value="Female"    style="margin-left:10px;" required>
                
             <label for="first_name">Other</label> <input type="radio" class="form-inline nn" id="p_name" name="gendr" value="Other"   style="margin-left:10px;" required><br/>
                
          
        </div>
            
        <div class="form-group">
          <label for="dob">Date of Birth</label>
          <input type="date" class="form-control" name="p_dob" id="dob" required>
          
        </div>
            
            <div class="form-group">
          <label for="first_name">Address</label>
          <input type="text" class="form-control" id="a_name" name="p_address" placeholder="Address"  required>
          
        </div>
            
            <div class="form-group">
          <label for="first_name">Select Date</label>
          <input type="date" class="form-control" id="p_name" name="p_date" placeholder="Select Date"  required>
          
        </div>
            
            <div class="form-group">
          <label for="first_name">Time: Your Appointment Time Valid Only After 15 mint's</label>
          <input type="time" class="form-control" id="p_name" name="p_time" placeholder="Time" required>
          
        </div>
            
            <div class="form-inline">
          <label for="first_name">Have you previsouly attended our facility?</label>
          <label for="first_name" style="margin-left:50px;">Yes</label><input type="radio" class="form-inline" id="p_name" name="yy" value="Yes" placeholder="Patient name" required >
                
                <label for="first_name" style="margin-left:10px;">No</label><input type="radio" class="form-inline" id="p_name" name="yy" value="No" placeholder="Patient name"   style="">
                
          
        </div>
            
            <div class="form-group">
          <label for="first_name">If yes, state on which condition and when?</label>
          
                <textarea class="form-control" name="p_desc" placeholder="Short Description" cols="5" rows="5" required ></textarea>
          
        </div><br/>
            
          <input type="submit" name="p_submit" value="Make appointment" id="apb" class="btn btn-lg btn-block" />
        
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