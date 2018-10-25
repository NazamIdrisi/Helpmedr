<?php 
include("check.php");	
include("mydbcon.php");

?>

<?php


  if(isset($_GET['p_id'])){
  $ids=$_GET['p_id'];
  $_SESSION['fd']=$ids;
                               
               $ct=$_SESSION['fd'];                 
                                

    
  $sql="SELECT * FROM pathology WHERE Pathology_Id='$ct'";
  
  $result = mysqli_query($db, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
                                           $p_id=$row['Pathology_Id'];
											 $p_name=$row['Pathology_Name'];
	                                      $p_add = $row['Pathology_Address'];	
                                      $p_mobile=$row['Pathology_Mobile'];
                                             $p_email=$row['Pathology_Email'];
       $p_des=$row['Pathology_Description'];
       $pa_img=$row['Image'];
        $p_type=$row['type'];
       $u_name=$row['User_Name'];
        $u_pass=$row['User_Password'];
        
                                                                    
            
        
     }
}
}
else{};



  //$id=$_GET['p_id'];
  if(isset($_POST['p_update']))
  {
    include("db.php");
      $ct=$_SESSION['fd'];
      
  
  $path_name=$_POST['pathology_name'];
  $path_add=$_POST['pathology_add'];
  $path_mobile=$_POST['pathology_mobile'];
  $path_em = $_POST['pathology_email'];
  $path_des=	  $_POST['pathology_des'];
  //$u_name=	   $_POST['user_name'];
  //$u_pass=	  $_POST['user_pass'];
      $ptype=	  $_POST['p_type'];
      $pic = $_FILES["pathology_img"]['name'];
  
  
  
  $sql = mysqli_query($con,"UPDATE pathology SET Pathology_Name='$path_name',Pathology_Address='$path_add',Pathology_Mobile='$path_mobile',Pathology_Email='$path_em',Pathology_Description='$path_des',Image='$pic',type='$ptype' WHERE Pathology_Id='$ct'");

      move_uploaded_file($_FILES['pathology_img']['tmp_name'],"images/".$pic);
      
if (!$sql) {
    
    echo mysqli_error($con);
   
     
}
      else{
          
          header("location:pathologies.php");
      }
  }

  

  
 
?>




        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Pathology <small> Informatin </small>
                           <span class=""><a href="addpathologies.php" class="pull-right btn btn-primary"> Add Pathology</a></span>
                        </h1>
                    </div>
                </div>
                <!-- /.row -->
<div class="row">
<div class="panel panel-green">
<div class="panel-heading">
      <h2 class="panel-title text-center text-success"> Update Information</h2>
      </div>
      <div class="panel-body">
      <form class="form-horizontal" action="update_pathology.php" method="POST" enctype="multipart/form-data" >
      <div class="row">
      <div class="col-sm-6">
	
        
        <div class="form-group">
          <label class="control-label col-sm-3" for="name">Pathology Name:</label>
          <div class="col-sm-8">          
            <input type="text" class="form-control" name="pathology_name" id="name" placeholder="Enter name" value="<?php echo $p_name; ?>">
          </div>
        </div>
        <div class="form-group">        
          <label class="control-label col-sm-3" for="email">Pathology Address:</label>

          <div class="col-sm-8">          
            <input type="text" class="form-control" name="pathology_add" id="email" placeholder="Enter email" value="<?php echo $p_add; ?>">
          </div>
        </div>
		 <div class="form-group">
          <label class="control-label col-sm-3" for="Course">Pathology Mobile:</label>
          <div class="col-sm-8">          
            <input type="text" class="form-control" name="pathology_mobile" id="marks" placeholder="Enter marks" value="<?php echo $p_mobile; ?>">
          </div>
        </div>
        <div class="form-group">        
          <label class="control-label col-sm-3" for="marks">Pathology Email:</label>
          <div class="col-sm-8">          
            <input type="email" class="form-control" name="pathology_email" id="Grade" placeholder="Enter grade" value="<?php echo $p_email; ?>">
          </div>
        </div>
        <div class="form-group">
         <label class="control-label col-sm-3" for="fname">Pathology Description:</label>
  <div class="col-sm-8">
      <textarea type="text" name="pathology_des" class="form-control" id="add" placeholder="Enter Address" ><?php echo $p_des; ?></textarea>
            
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3" for="mobile_nu">Image:</label>
          <div class="col-sm-8">          
            <img src="images/<?php echo $pa_img; ?>" class="img-responsive" style="width:80px;height:80px;" alt="">
              <input type="file" class="form-control" name="pathology_img" id="Course" placeholder="Enter course" value="<?php echo $pa_img; ?>">
          </div>
        </div>
          <div class="form-group">        
           <label class="control-label col-sm-3" for="Add">Pathology Type:</label>
          <div class="col-sm-8">          
            
              <input type="text" class="form-control" name="p_type" id="fname" placeholder="Enter pathology type " value="<?php echo $p_type; ?>">
          </div>
        </div>
        <div class="form-group-lg">        
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" name="p_update" class="btn btn-success btn-group-lg" style="width:100%;">Submit</button>
          </div>
        </div>
        </div>
        
        </div>
      </form>
    </div>
    </div>
     </div>           <!-- /.row -->

              
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
