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
                           Equipments <small> Informatin </small>
                           <span ><a href="addequipments.php" class="pull-right btn btn-primary"> Add Equipments</a></span>
                        </h1>
                    </div>
                </div>
                <!-- /.row -->

               
                <!-- /.row -->

              
                   
                <div class="row">
                  
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i>All Equipments 
                                 </h3>
                                
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped bg-success">
                                        <thead>
                                            <tr class="bg-info">
                                                <th>Product Id</th>
                                                <th>Product Name</th>
                                                <th>Description</th>
                                                <th>Aditional Details</th>
                                                <th>Image</th>
                                                <th>User Name</th>
                                                <th>User Password</th>
                                                <th>Update</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										
  <?php
  

$sql = "select * from equipments";
$result = mysqli_query($db, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        
        $id=$row['Product_Id'];
        $Pro_Id=$row['Product_Id'];
											 
        $Product_Name=$row['Product_Name'];
        $Description=$row['Description'];
        $Aditional_Details=$row['Aditional_Details'];
        $User_Name=$row['user_name'];
        $User_Password=$row['user_password'];
        $Image=$row['Image'];
											 
        
    ?>                          <tr>
                                            <td><?php echo $Pro_Id; ?></td>
                                            <td><?php echo $Product_Name; ?></td>
                                            <td><?php echo $Description; ?></td>
                                            <td><?php echo $Aditional_Details; ?></td>
                                            <td><img src="images/<?php echo $Image; ?>" class="img-responsive" style="width:80px;height:80px;" alt=""></td>
                                            <td><?php echo $User_Name; ?></td>
                                            <td><?php echo $User_Password; ?></td>
                                            
				                                            
                                            
                                            
                                            
                                            <td><a href="update_equipments.php?Pro_Id=<?php echo $row["Product_Id"]?>" class='btn btn-success'>UPDATE</a></td>
                                            <td><a href="delete_equipments.php?Pro_Id=<?php echo $row["Product_Id"]?>" class='btn btn-danger'>DELETE</a></td>
                                              
                                            </tr>
                                            
                                            <?php
											// echo "<tr>"; edit.php?id=<?php echo $row["id"]; 
                                              //  echo "<td>"; echo $Product_Id; echo "</td>";
								//				echo "<td>"; echo $Product_Name; echo "</td>";
								//				echo "<td>"; echo $Description; echo "</td>";
								//				echo "<td>"; echo $Aditional_Details; echo "</td>";
                                  //            	echo "<td>"; echo $Image; echo "</td>";						
                                    //            echo "<td>"; echo $User_Name; echo "</td>";
                                      //          echo "<td>"; echo $User_Password; echo "</td>";
												
												 
                                             
                                        //        echo "<td>"; echo "<a href='update.php?id=$Product_Id' class='btn btn-danger'>UPDATE</a>"; echo "</td>";
                                               
                                          //  echo "</tr>";
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
