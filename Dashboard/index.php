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
                           Student <small> Informatin </small>
                           <span ><a href="addstudent.php" class="pull-right btn btn-primary"> Add Student</a></span>
                        </h1>
                    </div>
                </div>
                <!-- /.row -->

               
                <!-- /.row -->

              
                   
                <div class="row">
                  
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Student Panel
                                 </h3>
                                
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped bg-success">
                                        <thead>
                                            <tr class="bg-info">
                                                <th>Student Id</th>
                                                <th> Name</th>
                                                <th> Birth Date</th>
                                                <th> Father Name</th>
                                                <th> Number</th>
                                                <th> Email</th>
                                                <th> Address</th>
                                                <th> Course</th>
                                                <th> Roll Number</th>
                                                <th> Marks</th>
                                                <th> Grade</th>
                                                <th> Password</th>
                                                <th> Update</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										
  <?php
  

$sql = "select * from student";
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
											 
											 echo "<tr>";
                                                echo "<td>"; echo $Stu_id; echo "</td>";
												echo "<td>"; echo $Stu_name; echo "</td>";
												echo "<td>"; echo $Stu_date; echo "</td>";
												echo "<td>"; echo $Stu_father; echo "</td>";
												echo "<td>"; echo $Stu_number; echo "</td>";
												echo "<td>"; echo $Stu_email; echo "</td>";
												echo "<td>"; echo $Stu_add; echo "</td>";
												echo "<td>"; echo $Stu_course; echo "</td>";
												echo "<td>"; echo $Stu_roll; echo "</td>";
												echo "<td>"; echo $Stu_marks; echo "</td>";
												echo "<td>"; echo $Stu_grade; echo "</td>";
												echo "<td>"; echo $Stu_pass; echo "</td>";
												 
                                             
                                                echo "<td>"; echo "<a href='update.php?id=$id' class='btn btn-danger'>UPDATE</a>"; echo "</td>";
                                               
                                            echo "</tr>";
    }
} else {
    echo "0 results";
}

mysqli_close($db);
?>
                                            
                                            
                                           
                                        </tbody>
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
