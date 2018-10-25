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
                                       <tr class="text-center" style="font-size:20px;"><td>Name</td><td>Mobile</td><td>Email</td><td>Subject</td><td>Message</td></tr>
                                       <?php 
									   $sql = "SELECT * FROM message";
$result = mysqli_query($db, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
            $Stu_id=$row['id'];
   			$Stu_sub=$row['subject'];
			$Stu_name=$row['message'];
			$Stu_father=$row['attachment'];
			
			echo "<thead>";
            echo "<tbody class='text-center'>";
            echo "<tr><td>"; echo $Stu_id; echo "</td><td>"; echo $Stu_name; echo "</td><td>"; echo $Stu_father; echo "</td><td>"; echo $Stu_email; echo "</td></tr>";                               
            echo "</tbody>";
            echo "</thead>";
    }
} else {
    echo "0 results";
}

mysqli_close($db);

                                         
?>
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
