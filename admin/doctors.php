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
                           Doctor <small> Informatin </small>
                           <span ><a href="adddoctor.php" class="pull-right btn btn-primary"> Add Doctor</a></span>
                        </h1>
                    </div>
                </div>
                <!-- /.row -->

               
                <!-- /.row -->

              
                   
                <div class="row">
                  
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i>All Doctors 
                                 </h3>
                                
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped bg-success">
                                        <thead>
                                            <tr class="bg-info">									

                                                <th> Doctor Id</th>
                                                <th> Doctor Name</th>
                                                <th> Doctor Mobile</th>
                                                <th> Doctor Specialities</th>
                                                <th> Doctor Email</th>
                                                <th> Doctor Address</th>
												<th> Doctor Image</th>
                                                <th> Doctor Language</th>
                                                <th> Doctor Expertise</th>
                                                <th> Doctor About</th>
                                                <th> Doctor Education</th>
                                                <th> Doctor Achievements</th>
												<th> Doctor practice</th>
                                                <th> Password</th>
                                                <th> Update</th>
                                                <th> Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										
  <?php
  
$sql = "select * from doctor";
$result = mysqli_query($db, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
                                             $id=$row['dr_id'];
											 $Doct_id=$row['dr_id'];
        
											 $Doct_name=$row['dr_name'];
        
											 $Doct_mobile=$row['dr_mobile'];
        
                                            $Doct_specialities=$row['dr_specialities'];
        
                                            $Doct_email=$row['dr_email'];
        
                                            $Doct_add=$row['dr_add'];
        
                                            $Doct_im=$row['img'];
        
                                            $Doct_language=$row['dr_languages'];
        
                                            $Doct_expertise=$row['dr_expertise'];
        
                                            $Doct_about=$row['dr_about'];
        
                                            $Doct_education=$row['dr_education'];
        
                                            $Doct_achievements=$row['dr_achievements'];
        
                                            $Doct_practice=$row['dr_practice'];
        
                                             $Doct_pass=$row['pass'];
								?>
                                            
											<tr>
                                                <td> <?php echo $Doct_id; ?></td>
												<td><?php echo $Doct_name; ?></td>
												<td><?php echo $Doct_mobile; ?></td>
												<td><?php echo $Doct_specialities; ?></td>
												<td><?php echo $Doct_email; ?></td>
												<td><?php echo $Doct_add; ?></td>
												<td><img src="images/<?php echo $Doct_im; ?>" class="img-responsive" style="width:80px;height:80px;" alt=""></td>
												<td><?php echo $Doct_language; ?></td>
												<td><?php echo $Doct_expertise; ?></td>
												<td><?php echo $Doct_about; ?></td>
												<td><?php echo $Doct_education; ?></td>
												<td><?php echo $Doct_achievements; ?></td>
                                                <td><?php echo $Doct_practice; ?></td>
                                                <td><?php echo $Doct_pass; ?></td>
												 
                                             
                                                <td><a href="update.php?dr_id=<?php echo $row["dr_id"]?>" class='btn btn-success'>UPDATE</a></td>
                                                <td><a href="<?php echo "delete.php?dr_id=$Doct_id";    ?>"class='btn btn-danger'>DELETE</a></td>
                                               
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
