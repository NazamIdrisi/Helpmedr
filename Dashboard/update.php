<?php 
include("check.php");	
include("mydbcon.php");
?>

<?php
  global $login_user;
  
  $sql="SELECT * FROM student WHERE Student_Roll_number='$login_user'";
  
  $result = mysqli_query($db, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $id=$row['id'];
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
}
  
?>


<?php
  $login_user;
  
  if(isset($_POST['update']))
  {
 // $stu_id=$_POST['stu_id'];
  $name=$_POST['name'];
  $father=$_POST['fname'];
  $add=$_POST['add'];
  $mobile=$_POST['number'];
  $email=	  $_POST['email'];
  $date=	   $_POST['date'];
  //$marks=	  $_POST['mark'];
  
  //$course=	 $_POST['course'];
  $pass=	   $_POST['pass'];
  //$grade=	  $_POST['grade'];
  //$roll_number=$_POST['roll_number'];
  
  $sql = "UPDATE student SET  Student_name='$name',   Student_password='$pass', Birth_date='$date' , Student_email='$email' , Student_mobile_number='$mobile', Student_father='$father', Student_address='$add' WHERE Student_Roll_number='$login_user'";

if (mysqli_query($db, $sql)) {
    echo "<script>alert('Successfull Submit')</script>";
} else {
    echo "<script>alert('Not Submit')</script>";
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
                           Student <small> Informatin </small>
                          
                        </h1>
                    </div>
                </div>
                <!-- /.row -->
<div class="row">
<div class="panel panel-green">
<div class="panel-heading">
      <h2 class="panel-title text-center text-success"> Update Information</h2>
      </div>
      <div class="panel-body">
      <form class="form-horizontal" action="" method="POST" role="form">
      <div class="row">
      <div class="col-sm-6">
	
        
        <div class="form-group">
          <label class="control-label col-sm-2" for="name">Name:</label>
          <div class="col-sm-8">          
            <input type="text" class="form-control" name="name" id="name" placeholder="Enter name" value="<?php echo $Stu_name; ?>">
          </div>
        </div>
        <div class="form-group">        
          <label class="control-label col-sm-2" for="email">Email:</label>
          <div class="col-sm-8">          
            <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" value="<?php echo $Stu_email; ?>">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="fname">Father Name:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="fname" id="fname" placeholder="Enter father name" value="<?php echo $Stu_father; ?>">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="mobile_nu">Mobile Number:</label>
          <div class="col-sm-8">          
            <input type="number" class="form-control" name="number" id="mobile_nu" placeholder="Enter mobile number" value="<?php echo $Stu_number; ?>">
          </div>
        </div>
        <div class="form-group">        
          <label class="control-label col-sm-2" for="Add">Address:</label>
          <div class="col-sm-8">          
            <textarea type="text" name="add" rows="5" class="form-control" id="add" placeholder="Enter Address" ><?php echo $Stu_add; ?></textarea>
          </div>
        </div>
        </div>
        <div class="col-sm-6">
        <div class="form-group">
          <label class="control-label col-sm-2" for="Course">Course:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="course" id="Course" disabled placeholder="Enter course" value="<?php echo $Stu_course; ?>">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="marks">Marks:</label>
          <div class="col-sm-8">          
            <input type="number" class="form-control" name="mark" id="marks" disabled placeholder="Enter marks" value="<?php echo $Stu_marks; ?>">
          </div>
        </div>
        <div class="form-group">        
          <label class="control-label col-sm-2" for="grade">Grade:</label>
          <div class="col-sm-8">          
            <input type="text" class="form-control" name="grade" id="Grade" disabled placeholder="Enter grade" value="<?php echo $Stu_grade; ?>">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="date">Date Of Birth:</label>
          <div class="col-sm-8">
            <input type="date" class="form-control" name="date" id="date" placeholder="Enter date of birth" value="<?php echo $Stu_date; ?>">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="r_number">Roll Number:</label>
          <div class="col-sm-8">          
            <input type="text" class="form-control" name="roll_number" id="r_number" disabled placeholder="Enter roll number" value="<?php echo $Stu_roll; ?>">
          </div>
        </div>
        <div class="form-group">        
          <label class="control-label col-sm-2" for="Password">Password:</label>
          <div class="col-sm-8">          
            <input type="password" class="form-control" name="pass" id="Password" placeholder="Enter password" value="<?php echo $Stu_pass; ?>">
          </div>
        </div>
        <div class="form-group-lg">        
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" name="update" class="btn btn-success btn-group-lg" style="width:100%;">Submit</button>
          </div>
        </div>
        </div>
        </div>
      </form>
    </div>
    </div>
     </div>           <!-- /.row -->

              
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
