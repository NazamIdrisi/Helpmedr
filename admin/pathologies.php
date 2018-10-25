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
                           Pathology <small> Informatin </small>
                           <span ><a href="addpathologies.php" class="pull-right btn btn-primary"> Add Pathology</a></span>
                        </h1>
                    </div>
                </div>
                <!-- /.row -->

               
                <!-- /.row -->

              
                   
                <div class="row">
                  
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i>All Pathology 
                                 </h3>
                                
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <form method="get" action="update_pathology.php" enctype="multipart/form-data">
                                    <table class="table table-bordered table-hover table-striped bg-success">
                                        <thead>
                                            <tr class="bg-info">
                                                <th>Pathology Id</th>
                                                <th>Pathology Name</th>
                                                <th>Pathology Address</th>
                                                <th>Pathology Mobile</th>
                                                <th>Pathology Email</th>
                                                <th>Pathology Description</th>
                                                <th> Image</th>
                                                <th>Pathology Type</th>
                                                <th> User Name</th>
                                                <th>User Password</th>
                                                <th>Update</th>
                                                <th>Delete</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
										
  <?php
  

$sql = "select * from pathology";
$result = mysqli_query($db, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        
						
        
                                            
                                            $p_id=$row['Pathology_Id'];
											 $p_name=$row['Pathology_Name'];
											 $p_add=$row['Pathology_Address'];
											 $p_mobile=$row['Pathology_Mobile'];
											 $p_email=$row['Pathology_Email'];
											 $p_des=$row['Pathology_Description'];
											 $img=$row['Image'];
                                             $pt_type=$row['type'];
											 $u_name=$row['User_Name'];
											 $u_pass=$row['User_Password'];
											?>
                                            
                                            
											 <tr>
                                            <td><?php echo $p_id; ?></td>
                                            <td><?php echo $p_name; ?></td>
                                            <td><?php echo $p_add; ?></td>
                                            <td><?php echo $p_mobile; ?></td>
                                            <td><?php echo $p_email; ?></td>
                                            <td><?php echo $p_des; ?></td>
                                            <td><img src="images/<?php echo $img; ?>" class="img-responsive" style="width:80px;height:80px;" alt=""></td>
                                                 <td><?php echo $pt_type; ?></td>
                                            <td><?php echo $u_name; ?></td>
                                            <td><?php echo $u_pass; ?></td>
                                            
				                                            
                                            
                                            
                                            
                                            <td><a href="update_pathology.php?p_id=<?php echo $row["Pathology_Id"]?>" class='btn btn-success'>UPDATE</a></td>
                                                 <td><a href="delete_pathology.php?p_id=<?php echo $row["Pathology_Id"]?>" class='btn btn-danger'>DELETE</a></td>
                                              
                                            </tr>
                                            
                                            <?php
    }
} else {
    echo "0 results";
}

mysqli_close($db);
?>
                                            
                                            
                                           
                                        </tbody>
                                    </table>
                                        </form>
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
