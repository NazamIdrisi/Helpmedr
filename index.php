<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>HELPMEDR</title>
    <link href="images/logo.png" rel="shortcut icon"/>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/zebra.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/dr-framework.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/navigation.css" type="text/css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/fullwidth.css" media="screen" />
	<link rel="stylesheet" href="css/revslider.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/jquery.bxslider.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/responsive.css" type="text/css" media="screen">
	<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Philosopher:400,700,400italic' rel='stylesheet' type='text/css'>

	

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
    
    
    <style type="text/css">
    body{
        font-family: Arail, sans-serif;
    }
    /* Formatting search box */
    /*.search-box{
        width: 300px;
        position: relative;
        display: inline-block;
        font-size: 14px;
    }*/
   /* .search-box input[type="text"]{
        height: 32px;
        padding: 5px 10px;
        border: 1px solid #CCCCCC;
        font-size: 14px;
    }*/
    .result{
        color:white;
        position: absolute;        
        z-index: 999;
        top: 100%;
        left: 0;
    }
   /* .search-box input[type="text"], .result{
        width: 100%;
        box-sizing: border-box;
    }*/
    /* Formatting result items */
    .result p{
        margin-top: -60px;
        margin-left:550px;
        padding: 7px 10px;
        
        border-top: none;
        cursor: pointer;
    }
    .result p:hover{
        color: black;   
        background:lightblue;
    }
</style>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('.search-box input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("backend-search.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });
});
</script>
    
</head>
<body>

	<!-- Start Header -->
	<?php include 'header.php'; ?>
	<!-- End Header -->
	 <!-- Slider -->
	<div class="slider" >
		<div class="flexslider">
		  <ul class="slides">
		    <li>
		      <img src="images/slide1.jpg" />
		    </li>
			<li>
			  <img src="images/slide2.jpg" />
			</li>
			<li>
			  <img src="images/slide3.jpg" />
			</li>
		  </ul>
		</div>
	
       <style>
           #location,#searc {
               margin-top: 50px;
           }
           
           #location{
background-image:url(images/location.png); 
background-repeat: no-repeat; 
background-position: 7px 7px;
}
        </style>
    
	<!-- Book Apointment -->
	<div class="book-form" >
		<div class="inner-form">

		<h4><img src="images/calendar.png" alt="">Search an Doctors</h4>
		<form  action="doctors.php" method="post">
				<div class="inputs search-box">
			<input id="location" type="text" data-value="Kanpur" placeholder="Kanpur" disabled>
				<input name="snm" id="searc" type="text" autocomplete="off" placeholder="Search Doctor...">
                    <div class="result"></div>
				<!--<input name="phone" id="phone" type="text" data-value="Phone Number">
	       		<input name="date" id="date" type="text" data-value="dd/mm/yyyy 00:00">-->
	        </div>

			<input  type="submit" name="submit" value="SEARCH DOCTOR">
			<div id="msg2" class="message"></div>
		</form>
		
		</div>
	</div>
	<!-- End Book Apointment -->
	</div>
	<!-- End SLider -->



	<!-- Container -->
	<div class="wrapper">
				
		<!-- Recent Works -->
		<div class="features dark">
			<div class="features-items column2">
				<a href="#">
					<div class="service-item">
						<a href="doctors.php" class="service-img"><img src="images/scope.png" alt=""></a>
					</div>
					<h4>Doctors</h4>
					<div class="line"></div>
					
				</a>
			</div>
			<div class="features-items column2">
				<a href="#">
					<div class="service-item">
						<a href="pathology.php" class="service-img"><img src="images/diograph.png" alt=""></a>
					</div>
					<h4>Pathology</h4>
					<div class="line"></div>
					
				</a>
			</div>
			<div class="features-items column2">
				<a href="#">
					<div class="service-item">
						<a href="Equipments.php" class="service-img"><img src="images/care.png" alt=""></a>
					</div>
					<h4>Our Equipments</h4>
					<div class="line"></div>
					
				</a>
			</div>
			<div class="features-items column2">
				<a href="#">
					<div class="service-item">
						<a href="health.php" class="service-img"><img src="images/healthins.png" alt=""></a>
					</div>
					<h4>Health Insurance</h4>
					<div class="line"></div>
					
				</a>
			</div>
			<div class="features-items column2">
				<a href="#">
					<div class="service-item">
						<a href="medicine.php" class="service-img"><img src="images/medical1.png" alt="" style="width:50px;height:50px;"></a>
					</div>
					<h4>Medicine</h4>
					<div class="line"></div>
					
				</a>
			</div>
			<div class="features-items column2">
				<a href="#">
					<div class="service-item">
						<a href="#" class="service-img"><img src="images/ambulance.png" alt=""></a>
					</div>
					<h4>24/7 Ambulance</h4>
					<div class="line"></div>
					
				</a>
			</div>
			<div class="clear"></div>
		</div>
		<!-- End Recent Works -->

			

		
	

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
    <script type="text/javascript" src="js/zebra_datepicker.js"></script>
    <script type="text/javascript" src="js/core.js"></script>

</body>
</html>