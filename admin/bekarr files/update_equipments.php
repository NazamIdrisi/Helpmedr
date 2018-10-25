<?php 
include("check.php");	
include("mydbcon.php");
?>

<?php
  if(isset($_GET['id']))
  {
  $id=$_GET['id'];
  
  $sql="SELECT * FROM equipments WHERE Product_ID='$id'";
  
  $result = mysqli_query($db, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
                                             $Product_Id=$row['Product_Id'];
											 $Product_Id=$row['Product_id'];
											 $Doct_name=$row['Doctor_name'];
											 $Doct_father=$row['about'];
											 $Doct_email=$row['mobile_number'];
											 $Doct_number=$row['Education'];
											 $Doct_add=$row['Specialities'];
											 $Doct_course=$row['Expertise'];
											 $Doct_marks=$row['Achievements'];
											 $Doct_grade=$row['Practice Information'];
											 $Doct_roll=$row['Languages'];
											 $Doct_date=$row['Address'];
											 $Doct_pass=$row['Doctor_password'];
 }
}
  }
?>


<?php
  $id=$_GET['id'];
  if(isset($_POST['update']))
  {
  $stu_id=$_POST['stu_id'];
  $name=$_POST['name'];
  $father=$_POST['fname'];
  $add=$_POST['add'];
  $mobile=$_POST['number'];
  $email=	  $_POST['email'];
  $date=	   $_POST['date'];
  $marks=	  $_POST['mark'];
  
  $course=	 $_POST['course'];
  $pass=	   $_POST['pass'];
  $grade=	  $_POST['grade'];
  $roll_number=$_POST['roll_number'];
  
  $sql = "UPDATE student SET Student_id='$stu_id' , Student_name='$name', Student_Roll_number='$roll_number' , Student_course='$course', Student_marks='$marks', Student_grade='$grade', Student_password='$pass', Birth_date='$date' , Student_email='$email' , Student_mobile_number='$mobile', Student_father='$father', Student_address='$add' WHERE id='$id'";

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
                           <span class=""><a href="addstudent.php" class="pull-right btn btn-primary"> Add Student</a></span>
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
          <label class="control-label col-sm-3" for="stu_id">Dr. Id:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="stu_id" id="stu_id" placeholder="Enter Student Id" value="<?php echo $Product_Id; ?>">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3" for="name">Dr. Name:</label>
          <div class="col-sm-8">          
            <input type="text" class="form-control" name="name" id="name" placeholder="Enter name" value="<?php echo $Doct_name; ?>">
          </div>
        </div>
        <div class="form-group">        
          <label class="control-label col-sm-3" for="email">Mobile Number:</label>

          <div class="col-sm-8">          
            <input type="text" class="form-control" name="email" id="email" placeholder="Enter email" value="<?php echo $Doct_email; ?>">
          </div>
        </div>
		 <div class="form-group">
          <label class="control-label col-sm-3" for="Course">Languages:</label>
          <div class="col-sm-8">          
            <input type="number" class="form-control" name="mark" id="marks" placeholder="Enter marks" value="<?php echo $Doct_marks; ?>">
          </div>
        </div>
        <div class="form-group">        
          <label class="control-label col-sm-3" for="marks">Expertise:</label>
          <div class="col-sm-8">          
            <input type="text" class="form-control" name="grade" id="Grade" placeholder="Enter grade" value="<?php echo $Doct_grade; ?>">
          </div>
        </div>
        <div class="form-group">
         <label class="control-label col-sm-3" for="fname">Dr. Specialities:</label>
  <div class="col-sm-8">
            <input type="text" class="form-control" name="fname" id="fname" placeholder="Enter father name" value="<?php echo $Doct_father; ?>">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3" for="mobile_nu">Dr. Email:</label>
          <div class="col-sm-8">          
            <input type="number" class="form-control" name="number" id="mobile_nu" placeholder="Enter mobile number" value="<?php echo $Doct_email; ?>">
          </div>
        </div>
        <div class="form-group">        
           <label class="control-label col-sm-3" for="Add">Address:</label>
          <div class="col-sm-8">          
            <textarea type="text" name="add" class="form-control" id="add" placeholder="Enter Address" ><?php echo $Doct_add; ?></textarea>
          </div>
        </div>
        </div>
        <div class="col-sm-6">
        <div class="form-group">
           <label class="control-label col-sm-3" for="Add">Image:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="course" id="Course" placeholder="Enter course" value="<?php echo $Doct_course; ?>">
          </div>
        </div>
       
        <div class="form-group">
           <label class="control-label col-sm-3" for="grade">About:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="date" id="date" placeholder="Enter date of birth" value="<?php echo $Doct_date; ?>">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3" for="date">Education:</label>
          <div class="col-sm-8">          
            <input type="text" class="form-control" name="roll_number" id="r_number" placeholder="Enter roll number" value="<?php echo $Doct_roll; ?>">
          </div>
        </div>
        <div class="form-group">        
          <label class="control-label col-sm-3" for="r_number">Achievements:</label>
          <div class="col-sm-8">          
            <input type="text" class="form-control" name="pass" id="Password" placeholder="Enter password" value="<?php echo $Doct_pass; ?>">
          </div>
        </div>
		<div class="form-group">        
          <label class="control-label col-sm-3" for="Password">Practice Information:</label>
          <div class="col-sm-8">          
            <input type="text" class="form-control" name="pass" id="Password" placeholder="Enter password" value="<?php echo $Doct_pass; ?>">
          </div>
        </div>
		<div class="form-group">        
          <label class="control-label col-sm-3" for="Password">Password:</label>
          <div class="col-sm-8">          
            <input type="password" class="form-control" name="pass" id="Password" placeholder="Enter password" value="<?php echo $Doct_pass; ?>">
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
