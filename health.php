
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>HELPMEDR | Contact</title>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
<?php include 'header.php'; ?> 
       <!-- End Upper Header -->
       
       <!-- End Row2 -->


	<!-- End Header -->
	<div class="clear"></div>
	<div class="banner">
	<div class="inner-banner">
		<div class="note">Contact Us</div>
		<div class="site-map">
    	You are here:<a href="index.html">Home</a> &gt; Contact Us
		</div>
	<div class="clear"></div>
	</div>
	</div>
	
	<!--x<div id="map" #eff0declass="map1"></div>-->
<?php
    
    include("db.php");
    
    
    if(isset($_POST["m_submit"])){
        
        $medicine_name=   $_POST['m_name'];
        $muser_name=   $_POST['m_username'];
        $medicine_quantity=   $_POST['m_quantity'];
        $medicine_desc=   $_POST['m_desc'];
        
        $insert = "INSERT INTO health (name,mobile,email,msg) values('$medicine_name','$muser_name','$medicine_quantity','$medicine_desc')";
        
        $query= mysqli_query($con,$insert);
        
        if($query){
            echo "<script>alert('Request submit successfull')</script>";
        }
        else{
         echo "<script>alert('not submit')</script>";   
        }
        
    }
    
    ?>
    
    <script>
    function AllowOnlyNumbers(e) {

    e = (e) ? e : window.event;
    var key = null;
    var charsKeys = [
        97, // a  Ctrl + a Select All
        65, // A Ctrl + A Select All
        99, // c Ctrl + c Copy
        67, // C Ctrl + C Copy
        118, // v Ctrl + v paste
        86, // V Ctrl + V paste
        115, // s Ctrl + s save
        83, // S Ctrl + S save
        112, // p Ctrl + p print
        80 // P Ctrl + P print
    ];

    var specialKeys = [
    8, // backspace
    9, // tab
    27, // escape
    13, // enter
    35, // Home & shiftKey +  #
    36, // End & shiftKey + $
    37, // left arrow &  shiftKey + %
    39, //right arrow & '
    46, // delete & .
    45 //Ins &  -
    ];

    key = e.keyCode ? e.keyCode : e.which ? e.which : e.charCode;

    //console.log("e.charCode: " + e.charCode + ", " + "e.which: " + e.which + ", " + "e.keyCode: " + e.keyCode);
    //console.log(String.fromCharCode(key));

    // check if pressed key is not number 
    if (key && key < 48 || key > 57) {

        //Allow: Ctrl + char for action save, print, copy, ...etc
        if ((e.ctrlKey && charsKeys.indexOf(key) != -1) ||
            //Fix Issue: f1 : f12 Or Ctrl + f1 : f12, in Firefox browser
            (navigator.userAgent.indexOf("Firefox") != -1 && ((e.ctrlKey && e.keyCode && e.keyCode > 0 && key >= 112 && key <= 123) || (e.keyCode && e.keyCode > 0 && key && key >= 112 && key <= 123)))) {
            return true
        }
            // Allow: Special Keys
        else if (specialKeys.indexOf(key) != -1) {
            //Fix Issue: right arrow & Delete & ins in FireFox
            if ((key == 39 || key == 45 || key == 46)) {
                return (navigator.userAgent.indexOf("Firefox") != -1 && e.keyCode != undefined && e.keyCode > 0);
            }
                //DisAllow : "#" & "$" & "%"
            else if (e.shiftKey && (key == 35 || key == 36 || key == 37)) {
                return false;
            }
            else {
                return true;
            }
        }
        else {
            return false;
        }
    }
    else {
        return true;
       }
    }
    </script>
	<!-- Container -->

			
            <center> 
                <div class="container">
                   <div class="msg-form column3 col-sm-12" style="background-color:white;padding:10px 5px 50px 5px;border-radius:15px;margin-top:50px;margin-bottom:50px;"><br/>
				<h4>Health Insurance Enquiry</h4>
				<div class="border"></div>
				<center>
                       <div class="container">
  
  <form class="form-horizontal" action="health.php" method="post">
    <div class="form-group">
      <label class="control-label col-sm-5" for="email">Name:</label>
      <div class="col-sm-1">
        <input type="text" class="form-control" id="email" placeholder="Enter Name" name="m_name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-5" for="email">Mobile:</label>
      <div class="col-sm-1">
        <input type="text" class="form-control"  onkeypress="return AllowOnlyNumbers(event);" placeholder="Enter Mobile"  name="m_username" >
      </div>
    </div>
      
      <div class="form-group">
      <label class="control-label col-sm-5" for="email">Email:</label>
      <div class="col-sm-1">
        <input type="text" class="form-control" id="email" placeholder="Enter Email" name="m_quantity" pattern="[a-zA-Z0-9.-_]{1,}@[a-zA-Z.-]{2,}[.]{1}[a-zA-Z]{2,}" required >
      </div>
    </div>
      <div class="form-group">
      <label class="control-label col-sm-5" for="email">Message:</label>
      <div class="col-sm-1">
          <textarea type="text" class="form-control" id="email" placeholder="Enter Message" name="m_desc" style="width:250px;height:100px;"></textarea>
        
      </div>
    </div>
      
    <div class="form-group">        
      <div class="col-sm-offset-5 col-sm-12">
        <button type="submit" name="m_submit" class="btn btn-primary col-sm-2">Submit</button>
      </div>
    </div>
  </form>
</div>
                       </center>


			</div>
                    </div>
    </center>

			
			
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