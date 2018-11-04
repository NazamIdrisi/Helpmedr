<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>HELPMEDR - Doctors</title>
<link href="images/logo.png" rel="shortcut icon"/>
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
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
    <link rel="stylesheet" href="css/animate.css" />

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
						<li><a href="login.php">Login</a></li>
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
		
        <div class="note">Doctors</div>
        
        <div class="site-map">
    	You are here:<a href="index.php" style="text-size:-5px;"><span></span></a> &gt; Doctors
		</div>
		
	<div class="clear"></div>
        <br/>
        
        <div class="">
            <center>
                <form method="post" action="#" enctype="multipart/form-data">
                <table><div class="form-group ">
                    <tr>
                        <td>
  
  <div class="input-group">
   <div class="input-group-addon" >
	<span class="glyphicon glyphicon-search" > Search</span> 
   </div>
   <input class="form-control animated slideInLeft" style="animation-duration: 2s;animation-delay: 0.2s;" id="myInput" name="mm" type="text"/>
  </div>
                             <div id="result"></div>
 </td>
                        <!--<td style="text-align:center;" class="animated slideInLeft"><input type="submit" name="seaa" class="btn btn-primary" style="height:35px;"  value="Search" /></td>-->
                    </tr></div>
                </table>
                </form>
            </center>
        </div>
	</div>
	</div>
	

	<!-- Container -->
	<div style="margin-left:40px;">

	<div>
	
    <!--<ul id="filterOptions">
 <center>
    <li class="active"><a href="#" class="all">All</a></li>
    <li><a href="#" class="child">Children</a></li>
    <li><a href="#" class="heart">Heart</a></li>
    <li><a href="#" class="diabet">Diabet</a></li>
    <li><a href="#" class="treat">Treatments</a></li>
    <li><a href="#" class="health">Health</a></li>
	</center>
  </ul>--->
 
  
  <div id="ourHolder">
      
      <?php  
      
      include("db.php");
      
  
      
      if(isset($_POST['submit'])){
          
        $snam = $_POST['snm'];
          
          $show="select * from doctor where dr_specialities='heart'";
          
          $result = mysqli_query($con,$show);
          
          while($row=mysqli_fetch_array($result)){
              
             $dr_name=$row['dr_name']; 
              $img=$row['img']; 
              $add=$row['dr_add'];
              $specialities = $row['dr_specialities'];
              
              ?>
      
                <div class="item treat">
	<div class="view view-two"> 
		<img src="admin/images/<?php echo $img; ?>" alt="" style="height:190px;width:270px;"/> 
		<div class="mask"> 
			<a class="btn-icon" href="dr_profile.php?did=<?php echo $row["dr_id"]?>"></a> 
			<a class="btn-icon2" href="dr_profile.php?did=<?php echo $row["dr_id"]?>"></a> 
		</div>
	</div>
      <div class="port-span">
	      <h3>Dr Name:- <?php echo $dr_name; ?></h3>
	      <span>Dr Specialities:- <?php echo $specialities; ?><br/>Dr Address:- <?php echo $add; ?></span>
      </div>
    </div>
      
      <?php
          }
      }
      else{
       
          ?>
      
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
     <table  id="myTable" class="col-md-8" >
    
   
        <?php
        
        
    include("db.php");
        
      
        
      
      
      $select = "select * from doctor";
                                                    
      $query=mysqli_query($con,$select);
      
       while($row=mysqli_fetch_array($query))
              {       
           $did=$row['dr_id'];
            $dname=$row['dr_name'];
           $dsp=$row['dr_specialities'];
           $dadd=$row['dr_add'];
           $dimg=$row['img'];
      ?>
       
  <tr class="col-sm-4">
        <td style="width:300px;">
      <div class="card"  style="width:250px;">
  <img src="admin/images/<?php echo $dimg; ?>" alt="John" class="animated zoomIn" style="width:240px;height:200px;border-radius:20px;animation-duration: 5s;animation-delay: 0.4s;">
  <h1 class="animated zoomIn" style="animation-duration: 5s;animation-delay: 0.4s;"><?php echo $dname; ?></h1>
  <p class="title animated zoomIn" style="animation-duration: 5s;animation-delay: 0.4s;">Specialities: <?php echo $dsp; ?></p>
  <p class="animated zoomIn" style="animation-duration: 5s;animation-delay: 0.4s;">Location: <?php echo $dadd; ?></p>
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
 </div><div class="cont">
 <p class="animated zoomIn"><a href="dr_profile.php?did=<?php echo $row["dr_id"]?>" class='btn btn-4' >Read More
     </a></p></div>
</div><br/><br/>
      </td>
      </tr>
   <!-- <li class="active"><a href="#" class="all">All</a></li>..-->
      <style>
         
  
          
         .btn {
             padding-top:15px;
             height: 50px;
             width:100%;
  flex: 1 1 auto;
  
  
  text-align: center;
  text-transform: uppercase;
  transition: 0.5s;
  background-size: 200% auto;
  color: white;
 /* text-shadow: 0px 0px 10px rgba(0,0,0,0.2);*/
  box-shadow: 0 0 20px #eee;
 
 }

/* Demo Stuff End -> */

/* <- Magic Stuff Start */

.btn:hover {
  background-position: right center; /* change the direction of the change here */
}


.btn-4 {
  background-image: linear-gradient(to right, #a1c4fd 0%, #2E86C1 60%, #a1c4fd 100%);
}


/* Magic Stuff End -> */
         </style>
    
    <!--<li><a href="#" class="heart">Heart</a></li>
    <li><a href="#" class="diabet">Diabet</a></li>
    <li><a href="#" class="treat">Treatments</a></li>
    <li><a href="#" class="health">Health</a></li>
    <li><a href="#" class="medical">Medical Devices</a></li>.-->
	
      
       <?php
                                                    
      
       }
       
       
       ?>
      
        
  
  </table>
      
      
      
      <?php
          
      }
      
      ?>
      
      
   <div class="col-md-4" style="border:1px solid blue;height:200px;">
  
      
</div>
      
   
      
    <!--<div class="item treat">
	<div class="view view-two"> 
		<img src="admin/images/" alt="" style="height:190px;width:270px;"/> 
		<div class="mask"> 
			<a class="btn-icon" href="profile.php"></a> 
			<a class="btn-icon2" href="#"></a> 
		</div>
	</div>
      <div class="port-span">
	      <h3>dd</h3>
	      <span><br/></span>
      </div>
    </div>-->
      
      
      
    <!--<div class="item child">
      	<div class="view view-two"> 
		<img src="images/Dr. Nandani Rastogi.jpg" alt="" style="height:190px;width:270px;"/> 
		<div class="mask"> 
			<a class="btn-icon" href="#"></a> 
			<a class="btn-icon2" href="#"></a> 
		</div>
	</div>      <div class="port-span">
	      <h3>Dr. Nandani Rastogi</h3>
	      <span>Diabetologist, Kanpur</span>
      </div>
    </div>
    <div class="item medical">
      	<div class="view view-two"> 
		<img src="images/Dr. Sharad Damele.jpg" alt="" style="height:190px;width:270px;"/> 
		<div class="mask"> 
			<a class="btn-icon" href="#"></a> 
			<a class="btn-icon2" href="#"></a> 
		</div>
	</div>      <div class="port-span">
	      <h3>Dr. Sharad Damele</h3>
	      <span>General & Laparoscopic Surgeon, Kanpur</span>
      </div>
    </div>
    <div class="item heart">
      	<div class="view view-two"> 
		<img src="images/Dr. Brij Mohan.jpg" alt="" style="height:190px;width:270px;"/> 
		<div class="mask"> 
			<a class="btn-icon" href="#"></a> 
			<a class="btn-icon2" href="#"></a> 
		</div>
	</div>      <div class="port-span">
	      <h3>Dr. Brij Mohan</h3>
	      <span>Diabetologist, Kanpur</span>
      </div>
    </div>
    <div class="item heart health">
      	<div class="view view-two"> 
		<img src="images/portfolio5.jpg" alt="" /> 
		<div class="mask"> 
			<a class="btn-icon" href="#"></a> 
			<a class="btn-icon2" href="#"></a> 
		</div>
	</div>      <div class="port-span">
	      <h3>Lasik Eye Surgery</h3>
	      <span>eye, laser</span>
      </div>
    </div>
    <div class="item child">
      	<div class="view view-two"> 
		<img src="images/portfolio6.jpg" alt="" /> 
		<div class="mask"> 
			<a class="btn-icon" href="#"></a> 
			<a class="btn-icon2" href="#"></a> 
		</div>
	</div>      <div class="port-span">
	      <h3>Doctor</h3>
	      <span>child, health</span>
      </div>
    </div>
    <div class="item treat">
      	<div class="view view-two"> 
		<img src="images/portfolio7.jpg" alt="" /> 
		<div class="mask"> 
			<a class="btn-icon" href="#"></a> 
			<a class="btn-icon2" href="#"></a> 
		</div>
	</div>      <div class="port-span">
	      <h3>Heart Check</h3>
	      <span>doctor, health</span>
      </div>
    </div>
    <div class="item child">
      	<div class="view view-two"> 
		<img src="images/portfolio8.jpg" alt="" /> 
		<div class="mask"> 
			<a class="btn-icon" href="#"></a> 
			<a class="btn-icon2" href="#"></a> 
		</div>
	</div>      <div class="port-span">
	      <h3>Children Care</h3>
	      <span>child, health</span>
      </div>
    </div>-->
    <!--<div class="item diabet">
      	<div class="view view-two"> 
		<img src="images/portfolio9.jpg" alt="" /> 
		<div class="mask"> 
			<a class="btn-icon" href="#"></a> 
			<a class="btn-icon2" href="#"></a> 
		</div>
	</div>      <div class="port-span">
	      <h3>Doctors</h3>
	      <span>child, health</span>
      </div>
    </div>
    <div class="item medical">
      	<div class="view view-two"> 
		<img src="images/portfolio10.jpg" alt="" /> 
		<div class="mask"> 
			<a class="btn-icon" href="#"></a> 
			<a class="btn-icon2" href="#"></a> 
		</div>
	</div>
      <div class="port-span">
	      <h3>Helath Care</h3>
	      <span>child, health</span>
      </div>
    </div>
    <div class="item diabet">
      	<div class="view view-two"> 
		<img src="images/portfolio11.jpg" alt="" /> 
		<div class="mask"> 
			<a class="btn-icon" href="#"></a> 
			<a class="btn-icon2" href="#"></a> 
		</div>
	</div>
      <div class="port-span">
	      <h3>Doctor</h3>
	      <span>people, health</span>
      </div>
    </div>
    <div class="item heart">
      	<div class="view view-two"> 
		<img src="images/portfolio12.jpg" alt="" /> 
		<div class="mask"> 
			<a class="btn-icon" href="#"></a> 
			<a class="btn-icon2" href="#"></a> 
		</div>
	</div>
      <div class="port-span">
	      <h3>Heart Treatment</h3>
	      <span>heart, health</span>
      </div>
    </div>
    <div class="item medical">
      	<div class="view view-two"> 
		<img src="images/portfolio13.jpg" alt="" /> 
		<div class="mask"> 
			<a class="btn-icon" href="#"></a> 
			<a class="btn-icon2" href="#"></a> 
		</div>
	</div>
      <div class="port-span">
	      <h3>Writing notes</h3>
	      <span>notes, to-do</span>
      </div>
    </div>
    <div class="item heart">
      	<div class="view view-two"> 
		<img src="images/portfolio14.jpg" alt="" /> 
		<div class="mask"> 
			<a class="btn-icon" href="#"></a> 
			<a class="btn-icon2" href="#"></a> 
		</div>
	</div>
      <div class="port-span">
	      <h3>Happy Patient</h3>
	      <span>care, health</span>
      </div>
    </div>    
    <div class="item child">
      	<div class="view view-two"> 
		<img src="images/portfolio15.jpg" alt="" /> 
		<div class="mask"> 
			<a class="btn-icon" href="#"></a> 
			<a class="btn-icon2" href="#"></a> 
		</div>
	</div>
      <div class="port-span">
	      <h3>Helath Care</h3>
	      <span>child, health</span>
      </div>
    </div>
    <div class="item health child">
      	<div class="view view-two"> 
		<img src="images/portfolio16.jpg" alt="" /> 
		<div class="mask"> 
			<a class="btn-icon" href="#"></a> 
			<a class="btn-icon2" href="#"></a> 
		</div>
	</div>
      <div class="port-span">
	      <h3>Helath Care</h3>
	      <span>child, health</span>
      </div>
    </div>--->    
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
    <script type="text/javascript" src="js/script.js"></script>

<script src="http://code.jquery.com/jquery-2.2.4.min.js"></script>

</body>
</html>