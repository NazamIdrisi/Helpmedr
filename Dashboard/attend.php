<?php
	include("check.php");	
	include("mydbcon.php");
?>
<?php
// Turn off error reporting
error_reporting(0);
if(isset($_POST["submit"]))
{	
$name=$_POST['sname'];
$roll=$_POST['srollnumber'];
$father=$_POST['sfname'];
$course=$_POST['scourse'];
$date=$_POST['sdate'];
$present=$_POST['spresent'];
//$unpresent=$_POST['unpresent2'];

if($present=='n')
{
	echo "<script>alert('please enter the name')</script>";

exit();
}
$cheack="select * from attendance where name='$name' and date='$date'";

$querycheack=mysqli_query($db, $cheack);

if(mysqli_num_rows($querycheack) > 0)
{
	echo "<script>alert('already $name confirm')</script>";
	header('refresh:1; url=attend.php');
	exit();
}

$name="INSERT INTO attendance(name, roll_number, father_name, course, date, present)VALUES( '$name','$roll','$father','$course', '$date', '$present')";
if(mysqli_query($db, $name))
{
	echo "<script>alert('submit')</script>";
		}
		else{
			echo "<script>alert('not submit')</script>";
		}	
}
?> 
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<style>
@import "http://fonts.googleapis.com/css?family=Fauna+One|Muli";
#form {
background-color:#fff;
color:#123456;
box-shadow:0 1px 1px 1px #123456;
font-weight:400;
width:350px;
margin:50px 250px 0 35px;
float:left;
height:500px
}
#form div {
padding:10px 0 0 30px
src:url(addstudent.php);
border-image:url(../new/3d%20(1).jpg);
}
h3 {
margin-top:0;
color:#fff;
background-color:#3C599B;
text-align:center;
width:100%;
height:50px;
padding-top:30px
}
#mainform {
width:960px;
margin:50px auto;
padding-top:20px;
font-family:'Fauna One',serif
}
#name,#date,#course,#roll,#option {
width:90%;
height:30px;
margin-top:10px;
border-radius:3px;
padding:2px;
box-shadow:0 1px 1px 0 #123456
}
input {
background-color:#3C599B;
border:1px solid #fff;
font-family:'Fauna One',serif;
font-weight:700;
font-size:18px;
color:#fff
}
</style>


        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Attendance<small> Information</small>
                            <span class=""><a href="attendance.php" class="pull-right btn btn-primary">Show Attendance</a></span>
                        </h1>
                    </div>
                </div>
                <!-- /.row -->

               
                 
              
                <div class="row">
                  <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-3 col-md-6 col-lg-offset-4 col-lg-5">
                 <div class="panel panel-success">
                <div class="panel-heading bg-success">
                    <h2 class="text-center">Attendance</h2>
                </div>
                <div class="panel-body">
                 
                   <form method="post" action="" >
                    <div class="form-group">
  <label for="sel1">Select Name:</label>
  <select class="form-control" id="option"  onchange="window.location.href=this.value;">
<option value="<?php  ?>">Select Name</option>
  <?php
										$sm="select * from student";
										$query=mysqli_query($db, $sm);
										
										while($row=mysqli_fetch_array($query)){
											$id=$row['id'];
										
										     $name=$row['Student_name'];
											 $fname=$row['Student_father'];
											 $roll=$row['Student_Roll_number'];											
											
										
                                       echo "<option value='attend.php?id=$id' >"; echo $name; echo "</option>";
   
										}
										?>
 <!-- </select>
  <select size="1" name="links" onchange="window.location.href=this.value;">
<option value="index.php">Google</option>
<option value="index.php">Yahoo</option>
</select>-->
</div>
<?php 

  if(isset($_GET['id']))
  {
  $id=$_GET['id'];
  
  $sk="SELECT * FROM student WHERE id='$id'";
  
  $getselect=mysqli_query($db, $sk);
  
  while($row=mysqli_fetch_array($getselect))
  {
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
?>
<div class="form-group">
    <label for="email">Father Name:</label>
    <input type="text" class="form-control" name="sname" id="roll"  value="<?php echo $Stu_name ?>">
  </div>
  <div class="form-group">
    <label for="pwd">Roll Number</label>
    <input type="text" class="form-control disabled" name="srollnumber" id="roll" value="<?php  echo $Stu_roll ?>" readonly>
  </div>
   <div class="form-group">
    <label for="email">Father Name:</label>
    <input type="text" class="form-control" id="name" name="sfname" value="<?php  echo $Stu_father ?>" readonly>
  </div>
  <div class="form-group">
    <label for="pwd">Course:</label>
    <input type="text" class="form-control" id="course" name="scourse" value="<?php  echo $Stu_course ?>" readonly>
  </div><?php
  $date = date_default_timezone_set('Asia/Kolkata');
    $today = date("d/m/y");?>
  <div class="form-group">
    <label for="email">Date:</label>
    <input type="text" class="form-control" id="date" name="sdate"  value='<?php  echo $today ?>' readonly >
  </div>
                      
<div class="checkbox">
  <label><input type="radio" name="spresent" value="present" class="myCheckbox" >Present</label>
  <label><input type="radio" name="spresent" value="unpresent" class="myCheckbox" >Unpresent</label>
</div>

      <button type="submit" class="btn btn-success" name="submit" style="width: 100%">
                        ENTRAR<i class="glyphicon glyphicon-log-in"></i></button>
</form>
<?php
  }
  }
  ?>
</div>
</div>
                  </div>
                    
                                       
                                        
                                            
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
   

    <!-- jQuery -->
    <script type="text/javascript">
	$('.myCheckbox').click(function() {
    $(this).siblings('input:checkbox').prop('checked', false);
});


//Every checkboxes in the page
$('.selectme input:checkbox').click(function() {
    $('.selectme input:checkbox').not(this).prop('checked', false);
});
	</script>
    
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
