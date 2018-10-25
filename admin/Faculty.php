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
                           Faculty<small> Information</small>
                            <span class=""><a href="addfaculty.php" class="pull-right btn btn-primary">Add Faculty</a></span>
                        </h1>
                    </div>
                </div>
                <!-- /.row -->

               
                <!-- /.row -->

              
                <div class="row">
                  
                    <div class="col-lg-12">
                        <div class="panel panel-default panel-red">
                            <div class="panel-heading ">
                                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Faculty Panel
                                 </h3>
                                
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped bg-success">
                                        <thead>
                                            <tr class="bg-info">
                                                <th> Id</th>
                                                <th> Name</th>
                                                <th> Subject</th>
                                                <th> Number</th>
                                                <th> Email</th>
                                                <th>Address</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
										
$sql = "select * from faculty";
$result = mysqli_query($db, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $id=$row['id'];
											 $id=$row['id'];
											 $name=$row['name'];
											 $subject=$row['subject'];
											 $email=$row['email'];
											 $number=$row['number'];
											 $add=$row['address'];
											 
											 echo "<tr>";
                                                echo "<td>"; echo $id; echo "</td>";
												echo "<td>"; echo $name; echo "</td>";
												echo "<td>"; echo $subject; echo "</td>";
												echo "<td>"; echo $email; echo "</td>";
												echo "<td>"; echo $number; echo "</td>";
												echo "<td>"; echo $add; echo "</td>";
												 
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
