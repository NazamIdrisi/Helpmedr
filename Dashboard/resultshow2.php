<?php
	include("check.php");	
	
?>

  
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Result</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Race Computer Institute</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>  <?php  
    echo $_SESSION['Student_Roll_number'];  
    ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <!--<li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>-->
                        <li class="divider"></li>
                        <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
           
            <!-- /.navbar-collapse -->
        </nav>
 <?php
  
      
    if(!$_SESSION['Student_Roll_number'] && !$_SESSION['Student_password'])  
    {  
      
        header("Location: login.php");//redirect to login page to secure the welcome page without login access.  
    }  
      
    ?>


        <div id="page-wrapper" style="width:100%;margin-left:-120px;">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Student  <small>Result Information</small>
                        </h1>
                    </div>
                </div>
                <!-- /.row -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_information";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

  $srn= $_SESSION['Student_Roll_number'];
  
  
$sql = "SELECT * FROM student WHERE Student_Roll_number='$srn'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
                                             $Stu_id=$row['id'];
   			                                 $Stu_id=$row['Student_id'];
											 $Stu_name=$row['Student_name'];
											 $Stu_father=$row['Student_father'];
											 $Stu_email=$row['Student_email'];
											 $Stu_number=$row['Student_mobile_number'];
											 $Stu_add=$row['Student_address'];
											 $Stu_course=$row['Student_course'];
											 $Stu_marks=$row['Student_marks'];
											 $Stu_grade=$row['Student_grade'];
											 $Stu_roll=$row['Student_Roll_number'];
											 $Stu_date=$row['Birth_date'];
											 $Stu_pass=$row['Student_password'];
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
               
                <!-- /.row -->
                            
              
                <div class="row">
                  
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center"><i class="fa fa-money fa-fw"></i> Student Result <?php echo $Stu_name;?>
                                 </h3>
                                
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped bg-success">
                                  
 <thead >
  <tbody class="text-center">
                                           
                                                <tr class="bg-info"><th class="text-center">Student Id</th> <td><?php echo $Stu_id;?></td></tr>
                                                <tr class="bg-info"><th class="text-center"> Name</th><td><?php echo $Stu_name;?></td></tr>
                                                <tr class="bg-info"><th class="text-center"> Birth Date</th> <td><?php echo $Stu_date;?></td></tr>
                                                <tr class="bg-info"><th class="text-center"> Father Name</th><td><?php echo $Stu_father;?></td></tr>
                                                <tr class="bg-info"><th class="text-center"> Number</th> <td><?php echo $Stu_number;?></td></tr>
                                                <tr class="bg-info"><th class="text-center"> Email</th> <td><?php echo $Stu_email;?></td></tr>
                                                <tr class="bg-info"><th class="text-center"> Address</th><td><?php echo $Stu_add;?></td></tr>
                                                <tr class="bg-info"><th class="text-center"> Course</th><td><?php echo $Stu_course;?></td></tr>
                                                <tr class="bg-info"><th class="text-center"> Roll Number</th> <td><?php echo $Stu_roll;?></td></tr>
                                                <tr class="bg-info"><th class="text-center"> Marks</th><td><?php echo $Stu_marks;?></td></tr>
                                                <tr class="bg-info"><th class="text-center"> Grade</th><td><?php echo $Stu_grade;?></td></tr>
                                                <tr class="bg-info"><th class="text-center"> Password</th><td><?php echo $Stu_pass;?></td></tr>
                                            </tr>
                                            </tbody>
                                        </thead>
                                       
                                            
                                        
                                           
                                        
                                    </table>
                                </div>
                                <div class="text-right">
                                    <a href="#">View All Transactions <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->
   
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
