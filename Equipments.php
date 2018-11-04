<?php session_start();?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>HELPMEDR - Equipments</title>
<link href="images/logo.png" rel="shortcut icon"/>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/dr-framework.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/navigation.css" type="text/css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/fullwidth.css" media="screen" />
	<link rel="stylesheet" href="css/revslider.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/jquery.bxslider.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/responsive.css" type="text/css" media="screen">
	<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
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
		<div class="note">Equipments</div>
		<div class="site-map">
    	You are here:<a href="index.php">Home</a> &gt; Equipments
		</div>
	<div class="clear"></div>
        <br/>
        
        <div class="">
            <center>
                <form>
                <table><div class="form-group ">
                    <tr>
                        <td>
  
  <div class="input-group">
   <div class="input-group-addon">
	<span>Search</span> 
   </div>
   <input class="form-control" id="myInput"  placeholder="Search Equipments" type="text"/>
  </div>
                            <div id="result"></div>
 </td>
                       <!-- <td ><input type="submit" name="seaa" class="btn btn-primary" value="Search" /></td>-->
                    </tr></div>
                </table>
                </form>
            </center>
        </div>
        
	</div>
	</div>
	


	<!-- Container -->
    
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
        
    <table  id="myTable">
    
   
        <?php
    include("db.php");
       
      
      $select="select * from equipments";
                                                    
      $query=mysqli_query($con,$select);
      
       while($row=mysqli_fetch_array($query))
              {       
           $Product_Id=$row['Product_Id'];
            $Product_Name=$row['Product_Name'];
           $Description=$row['Description'];
           $Aditional_Details=$row['Aditional_Details'];
           $Image=$row['Image'];
           
      ?>
       
  <tr class="col-sm-4">
        <td >
      <div class="wrapper">
	<div id="container">
  <div id="ourHolder">
    <div class="item treat col-sm-4">
	<div class="view view-two"> 
		<img src="admin/images/<?php echo $Image; ?>" alt="" style="width:240px;height:200px;" /> 
		<div class="mask"> 
			<a href="equipments_details.php?pp_id=<?php echo $row["Product_Id"]?>" class='btn-icon'></a> 
			<a class="btn-icon2" href="equipments_details.php?pp_id=<?php echo $row["Product_Id"]?>"></a> 
		</div>
	</div>
      <div class="port-span">
	      <h3><b><?php echo $Product_Name; ?></b></h3>
	      <span><?php echo substr($Aditional_Details,0,30); ?></span>
      </div>
    </div>
  </div>
</div>
	</div>
      </td>
      </tr>
   <!-- <li class="active"><a href="#" class="all">All</a></li>..-->
      
    
    <!--<li><a href="#" class="heart">Heart</a></li>
    <li><a href="#" class="diabet">Diabet</a></li>
    <li><a href="#" class="treat">Treatments</a></li>
    <li><a href="#" class="health">Health</a></li>
    <li><a href="#" class="medical">Medical Devices</a></li>.-->
	
      
       <?php
                                                    
                                                    }
       ?>
      
  
  </table>
    
	
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