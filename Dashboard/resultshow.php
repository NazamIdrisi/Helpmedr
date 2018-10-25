<?php
	include("check.php");	
	include("mydbcon.php");
?>


        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                             <small></small>
                        </h1>
                    </div>
                </div>
                <!-- /.row -->

               
                <!-- /.row -->

              
                <div class="row" id="block1">
                  
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center"><i class="fa fa-money fa-fw"></i> Student Result
                                 </h3>
                                
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped bg-success">
                                       
                                       <?php 
									   

  if(isset($_GET['srn']))
  {
  $id=$_GET['srn'];

  $sql = "SELECT * FROM student WHERE Student_Roll_number='$id'";
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
} else {
    echo "0 results";
}
}
mysqli_close($db);
?>
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
                                    <a href="#" onClick="printPage('block1');">Print Result <i class="fa fa-arrow-circle-right"></i></a>
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
