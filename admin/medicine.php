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
                           Medicine <small> Information </small>
                           <!--<span ><a href="addequipments.php" class="pull-right btn btn-primary"> Add Equipments</a></span>-->
                        </h1>
                    </div>
                </div>
                <!-- /.row -->

               
                <!-- /.row -->

              
                   
                <div class="row">
                  
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i>All Medicine Request 
                                 </h3>
                                
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped bg-success">
                                        <thead>
                                            <tr class="bg-info">
                                                <th>Medicine Id</th>
                                                <th>Medicine Name</th>
                                                <th>User Name</th>
                                                <th>Medicine Quantity/Tablet/Cap</th>
                                                
                                                <th>Description</th>
                                                                                            </tr>
                                        </thead>
                                        <tbody>
										
  <?php
  

$sql = "select * from medicine";
$result = mysqli_query($db, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        
        $m_id=$row['id'];
        $med_name=$row['m_name'];
											 
        $mu_name=$row['muser_name'];
        $m_qty=$row['m_quantity'];
        $m_desc=$row['m_desc'];
        
											 
        
    ?>                          <tr>
                                            <td><?php echo $m_id; ?></td>
                                            <td><?php echo $med_name; ?></td>
                                            <td><?php echo $mu_name; ?></td>
                                            <td><?php echo $m_qty; ?></td>
                                            
                                            <td><?php echo $m_desc; ?></td>
                                            
                                            
				                                            
                                            
                                            
                                            
                                            
                                              
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
