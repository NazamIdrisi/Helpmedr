<?php
	include("check.php");	
	include("mydbcon.php");
?>
<?php
		
if(isset($_POST["e_submit"]))
{
$Product_id    = $_POST['Product_Id'];	
$Product_name  = $_POST['Product_Name'];
$description   = $_POST['Description'];
$Aditional_details=	 $_POST['Aditional_Details'];
$User_name     = $_POST['User_Name'];
$User_password = $_POST['User_Password'];
$pic = $_FILES["Image"]['name'];

$sql = "INSERT INTO equipments
(Product_Id,Product_Name,Description,Aditional_Details,User_Name,User_Password,Image)
VALUES('$Product_id','$Product_name','$description','$Aditional_details','$User_name','$User_password','$pic')";

if (mysqli_query($db, $sql)) {
    
    move_uploaded_file($_FILES['Image']['tmp_name'],"images/".$pic);
    echo "<script>alert('Successfull Submit')</script>";
} 
else {
    echo "<script>alert('not submit')</script>";
}
}
mysqli_close($db);

	
	
?> 
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Equipments <small> Informatin </small>
                           <span class=""><a href="Equipments.php" class="pull-right btn btn-primary">Show Equipments</a></span>
                        </h1>
                    </div>
                </div>
                <!-- /.row -->
<div class="row">
     <div class="panel panel-yellow">
<div class="panel-heading">
      <h2 class="panel-title text-center text-success"> Add Equipments Information</h2>
      </div>
      <div class="panel-body">
      <form class="form-horizontal" action="addequipments.php" method="POST" enctype="multipart/form-data" role="form">
      <div class="row">
	  <div class="col-sm-2">
	  </div>
      <div class="col-sm-6">
        <div class="form-group">
          <label class="control-label col-sm-3" for="stu_id">Product Id:</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" name="Product_Id" id="stu_id" placeholder="Enter Student Id">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3" for="name">Product Name:</label>
          <div class="col-sm-9">          
            <input type="text" class="form-control" name="Product_Name" id="name" placeholder="Enter name">
          </div>
        </div>
        <div class="form-group">        
          <label class="control-label col-sm-3" for="email">Description:</label>
          <div class="col-sm-9">          
            <input type="text" class="form-control" name="Description"  placeholder="Enter email">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3" for="fname">Aditional Details:</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" name="Aditional_Details"  placeholder="Enter father name">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3" for="mobile_nu">Image:</label>
          <div class="col-sm-9">          
            <input type="file" class="form-control" name="Image"  placeholder="Enter mobile number">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3" for="fname">User Name:</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" name="User_Name"  placeholder="Enter father name">
          </div>
        </div><div class="form-group">
          <label class="control-label col-sm-3" for="fname">User Password:</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" name="User_Password"  placeholder="Enter father name">
          </div>
        </div>
          
		<div class="form-group">        
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" name="e_submit" class="btn btn-success" style="width:100%;">Submit</button>
          </div>
        </div>
        <div class="col-sm-6">
        
        
        
        </div>
        </div>
      </form>
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
