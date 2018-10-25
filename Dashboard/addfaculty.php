<?php
	include("check.php");	
	include("mydbcon.php");
?>
<?php
		
if(isset($_POST["submit"]))
{
$name=	   $_POST['name'];
$subject=      $_POST['subject'];
$mobile=	 $_POST['number'];
$email=	  $_POST['email'];
$address=	$_POST['add'];


$sql = "INSERT INTO faculty(name, subject, number, email, address
)VALUES( '$name','$subject','$mobile','$email', '$address')";

if (mysqli_query($db, $sql)) {
    echo "<script>alert('submit')</script>";
} 
else {
    echo "<script>alert('not submit')</script>";
}
}
mysqli_close($db);

	
	
?> 
 


        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Faculty <small> Informatin </small>
                           <span class=""><a href="addfaculty.php" class="pull-right btn btn-primary">Add Faculty</a></span>
                        </h1>
                    </div>
                </div>
                <!-- /.row -->
<div class="row">
     <div class="panel panel-yellow">
<div class="panel-heading">
      <h2 class="panel-title text-center text-success"> Add Faculty Information</h2>
      </div>
      <div class="panel-body">
      <form class="form-horizontal" action="" method="POST" role="form">
      <div class="row">
      <div class="col-sm-8 col-md-offset-2">
       <!-- <div class="form-group">
          <label class="control-label col-sm-2" for="stu_id">Student Id:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="stu_id" id="stu_id" placeholder="Enter Student Id">
          </div>
        </div>-->
        <div class="form-group">
          <label class="control-label col-sm-2" for="name">Name:</label>
          <div class="col-sm-8">          
            <input type="text" class="form-control" name="name" id="name" placeholder="Enter name">
          </div>
        </div>
         <div class="form-group">
          <label class="control-label col-sm-2" for="subject">Subject:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="subject" id="fname" placeholder="Enter father name">
          </div>
        </div>
        <div class="form-group">        
          <label class="control-label col-sm-2" for="email">Email:</label>
          <div class="col-sm-8">          
            <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
          </div>
        </div>
       
        <div class="form-group">
          <label class="control-label col-sm-2" for="mobile_nu">Mobile Number:</label>
          <div class="col-sm-8">          
            <input type="number" class="form-control" name="number" id="mobile_nu" placeholder="Enter mobile number">
          </div>
        </div>
        <div class="form-group">        
          <label class="control-label col-sm-2" for="Add">Address:</label>
          <div class="col-sm-8">          
            <textarea type="text" name="add" class="form-control" id="add" placeholder="Enter Address"></textarea>
          </div>
        </div>
        <div class="form-group">        
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" name="submit" class="btn btn-success" style="width:80%;">Submit</button>
          </div>
        </div>
        </div>
       <!-- <div class="col-sm-6">
        <div class="form-group">
          <label class="control-label col-sm-2" for="Course">Course:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="course" id="Course" placeholder="Enter course">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="marks">Marks:</label>
          <div class="col-sm-8">          
            <input type="number" class="form-control" name="mark" id="marks" placeholder="Enter marks">
          </div>
        </div>
        <div class="form-group">        
          <label class="control-label col-sm-2" for="grade">Grade:</label>
          <div class="col-sm-8">          
            <input type="text" class="form-control" name="grade" id="Grade" placeholder="Enter grade">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="date">Date Of Birth:</label>
          <div class="col-sm-8">
            <input type="date" class="form-control" name="date" id="date" placeholder="Enter date of birth">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="r_number">Roll Number:</label>
          <div class="col-sm-8">          
            <input type="text" class="form-control" name="roll_number" id="r_number" placeholder="Enter roll number">
          </div>
        </div>
        <div class="form-group">        
          <label class="control-label col-sm-2" for="Password">Password:</label>
          <div class="col-sm-8">          
            <input type="password" class="form-control" name="pass" id="Password" placeholder="Enter password">
          </div>
        </div>
        
        </div>-->
        
        </div>
      </form>
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
