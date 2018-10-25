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
                           Attendance<small> Information</small>
                            
                        </h1>
                    </div>
                </div>
                <!-- /.row -->

               
                <!-- /.row -->

              
                <div class="row">
                  
                    <div class="col-lg-12">
                        <div class="panel panel-default panel-red">
                            <div class="panel-heading ">
                                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Attendance Panel
                                 </h3>
                                
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped bg-success">
                                        <thead>
                                            <tr class="bg-info">
                                                <th> Id</th>
                                                <th> Name</th>
                                                <th> Father </th>
                                                <th> Roll Number</th>

                                                <th> Course</th>
                                                 <th> Attendance</th>
                                                <th> Date</th>
                                               <!-- <th>Absent</th>-->
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
										
                                        global $login_user;
										
                                        $query="SELECT * FROM attendance where roll_number='$login_user'";
										
                                        $sli=mysqli_query($db, $query);
										
                               			while($row=mysqli_fetch_array($sli))
                                           {
										 
											 $id=$row['id'];
											
											 $name=$row['name'];
											 $fname=$row['father_name'];
											 $roll=$row['roll_number'];
											 $course=$row['course'];
											 $date=$row['date'];
											 $attendance=$row['present'];
											
											 
											 //$attend=$row['present'];
											 
											 echo "<tr>";
                                                echo "<td>"; echo $id; echo "</td>";
												echo "<td>"; echo $name; echo "</td>";
												echo "<td>"; echo $fname; echo "</td>";
												echo "<td>"; echo $roll; echo "</td>";
												echo "<td>"; echo $course; echo "</td>";
												echo "<td>"; echo $attendance; echo "</td>";
												echo "<td>"; echo $date; echo "</td>";
                                                echo "<td><a href='attendance.php' class='btn btn-info'>Back</a> </td>";                                   
                                               
                                             echo "</tr>";
											 
                                           }
                                        
										
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







































  
                
                <!-- /.row -->





            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    <?Php
if( isset($_POST['clicks']) ) { 
    incrementClickCount();
}

function getClickCount()
{
    return (int)file_get_contents("clickit.txt");
}

function incrementClickCount()
{
    $count = getClickCount() + 1;
    file_put_contents("clickit.txt", $count);
}
?>


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
