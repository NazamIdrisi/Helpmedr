<?php
	include("check.php");	
	include("mydbcon.php");
?>
<?php
		
if(isset($_POST["p_submit"]))
{
$Pathology_id=         $_POST['Pathology_Id'];	
$Pathology_name=	   $_POST['Pathology_Name'];

$Pathology_address=	 $_POST['Pathology_Address'];
$Pathology_mobile=	  $_POST['Pathology_Mobile'];
$Pathology_email=	   $_POST['Pathology_Email'];
$Pathology_description=	  $_POST['Pathology_Description'];
$User_name=	 $_POST['User_Name'];
$User_password=	   $_POST['User_Password'];
$pic = $_FILES["Image"]['name'];
    $p_type=	 $_POST['p_type'];
    
    
$sql = "INSERT INTO pathology
(Pathology_Id,Pathology_Name,Pathology_Address,Pathology_Mobile,Pathology_Email,Pathology_Description,User_Name,User_Password,Image,type)
VALUES('$Pathology_id','$Pathology_name','$Pathology_address','$Pathology_mobile','$Pathology_email','$Pathology_description','$User_name','$User_password','$pic','$p_type')";

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
                           Pathology <small> Informatin </small>
                           <span class=""><a href="pathologies.php" class="pull-right btn btn-primary">Show Pathology</a></span>
                        </h1>
                    </div>
                </div>
                <!-- /.row -->
<div class="row">
     <div class="panel panel-yellow">
<div class="panel-heading">
      <h2 class="panel-title text-center text-success"> Add Pathology Information</h2>
      </div>
      <div class="panel-body">
      <form class="form-horizontal" action="addpathologies.php" method="POST" enctype="multipart/form-data" role="form">
      <div class="row">
      <div class="col-sm-6">
        <div class="form-group">
          <label class="control-label col-sm-4" for="stu_id">Pathology Id:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="Pathology_Id" id="stu_id" placeholder="Enter Pathology Id">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-4" for="name">Pathology Name:</label>
          <div class="col-sm-8">          
            <input type="text" class="form-control" name="Pathology_Name" id="name" placeholder="Enter Pathology name">
          </div>
        </div>
        <div class="form-group">        
          <label class="control-label col-sm-4" for="email">Pathology Address:</label>
          <div class="col-sm-8">          
            <textarea type="text" name="Pathology_Address" class="form-control" id="add" placeholder="Enter description"></textarea>
          </div>
        </div>
          
        <div class="form-group">
          <label class="control-label col-sm-4" for="fname">Pathology Mobile:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="Pathology_Mobile" id="fname" placeholder="Enter Mobile">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-4" for="mobile_nu">Pathology Email:</label>
          <div class="col-sm-8">          
            <input type="email" class="form-control" name="Pathology_Email" id="mobile_nu" placeholder="Enter email">
          </div>
        </div>
        <div class="form-group">        
          <label class="control-label col-sm-4" for="Add">Pathology Description:</label>
          <div class="col-sm-8">          
            <textarea type="text" name="Pathology_Description" class="form-control" id="add" placeholder="Enter description"></textarea>
          </div>
        </div>
        </div>
        <div class="col-sm-6">
        <div class="form-group">
          <label class="control-label col-sm-3" for="Course">Image:</label>
          <div class="col-sm-8">
            <input type="file" class="form-control" name="Image" id="Course" placeholder="Enter course">
          </div>
        </div>
            <div class="form-group">
          <label class="control-label col-sm-3" for="marks">Pathology Type:</label>
          <div class="col-sm-8">          
            <input type="text" class="form-control" name="p_type" id="marks" placeholder="Enter pathology">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3" for="marks">User Name:</label>
          <div class="col-sm-8">          
            <input type="text" class="form-control" name="User_Name" id="marks" placeholder="Enter username">
          </div>
        </div>
        <div class="form-group">        
          <label class="control-label col-sm-3" for="grade">User Password:</label>
          <div class="col-sm-8">          
            <input type="password" class="form-control" name="User_Password" id="Grade" placeholder="Enter password">
          </div>
        </div>
        
        <div class="form-group">        
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" name="p_submit" class="btn btn-success" style="width:100%;">Submit</button>
          </div>
        </div>
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
