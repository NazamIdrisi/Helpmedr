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
                            <span class=""><a href="attend.php" class="pull-right btn btn-primary">Add Attendance</a></span>
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

                                                <th> Present</th>
                                                <th> Abesent</th>
                                               <!-- <th>Absent</th>-->
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
    <?php
	
	$query="SELECT id, name, present , unpresent, father_name, roll_number, COUNT(present),COUNT(unpresent) FROM attendance where present='present'  GROUP BY name ";
	
	$result = mysqli_query($db, $query);

    if (mysqli_num_rows($result) > 0) 
	{
	
	 while($row = mysqli_fetch_assoc($result)) {
		 
		$id=$row['id'];
	    $name=$row['name'];
	    $fname=$row['father_name'];
		$roll=$row['roll_number'];
		$count=$row['COUNT(present)'];
		$count2=$row['COUNT(unpresent)'];
	
                                            echo "<tr>";
                                              echo  "<td>"; echo $id; echo "</td>";
											  echo  "<td>"; echo $name; echo "</td>";
											  echo  "<td>"; echo $fname; echo "</td>";
											  echo  "<td>"; echo $roll; echo "</td>";
                                              echo  "<td>"; echo "<button type='button' class='btn btn-success'>Present <span class='badge'>"; echo $count; echo "Days</button></td>";
                                              echo  "<td><a href='attendancereport.php?name=$name' class='btn btn-info'>Show All Attendance</a> </td>";                                      
                                            echo "</tr>";
                                   }							 
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
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
    <input type="submit" value="click me!" name="clicks">
</form>
<div>Click Count: <?php echo getClickCount(); ?></div>
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
