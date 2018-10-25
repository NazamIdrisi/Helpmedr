<?php 
include("check.php");	
include("mydbcon.php");

?>

<?php


  if(isset($_GET['Pro_Id'])){
  $ids=$_GET['Pro_Id'];
  $_SESSION['fd']=$ids;
                               
               $ct=$_SESSION['fd'];                 
                                

    
  $sql="SELECT * FROM equipments WHERE Product_Id='$ct'";
  
  $result = mysqli_query($db, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
                                         
											 $p_name=$row['Product_Name'];
	                                      $p_details = $row['Aditional_Details'];	
                                      $p_desc=$row['Description'];
                                             $pa_img=$row['Image'];
       
        
                                                                    
            
        
     }
}
}
else{};



  //$id=$_GET['p_id'];
  if(isset($_POST['e_update']))
  {
    include("db.php");
      $ct=$_SESSION['fd'];
      
  
  $pro_name=$_POST['p_name'];
  $pro_details=$_POST['p_details'];
  $pro_desc=$_POST['p_desc'];
  //$path_em = $_POST['pathology_email'];
  //$path_des=	  $_POST['pathology_des'];
  //$u_name=	   $_POST['user_name'];
  //$u_pass=	  $_POST['user_pass'];
    //  $ptype=	  $_POST['p_type'];
      $pic = $_FILES["pa_img"]['name'];
  
  
  
  $sql = mysqli_query($con,"UPDATE equipments SET Product_Name='$pro_name',Aditional_Details	='$pro_details',Description='$pro_desc',Image='$pic' WHERE Product_Id='$ct'");

      move_uploaded_file($_FILES['pa_img']['tmp_name'],"images/".$pic);
      
if (!$sql) {
    
    echo mysqli_error($con);
   
     
}
      else{
          
          header("location:Equipments.php");
      }
  }

  

  
 
?>




        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Equipments <small> Update </small>
                           <span class=""><a href="addequipments.php" class="pull-right btn btn-primary"> Add Equipments</a></span>
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
      <form class="form-horizontal" action="update_equipments.php" method="POST" enctype="multipart/form-data" >
      <div class="row">
      <div class="col-sm-6">
	
        
        <div class="form-group">
          <label class="control-label col-sm-3" for="name">Product Name:</label>
          <div class="col-sm-8">          
            <input type="text" class="form-control" name="p_name" id="name" placeholder="Enter name" value="<?php echo $p_name; ?>">
          </div>
        </div>
        <div class="form-group">        
          <label class="control-label col-sm-3" for="email">Aditional Details:</label>

          <div class="col-sm-8">          
            <textarea type="text" name="p_details" class="form-control" id="add" placeholder="Enter Address" cols="4" rows="4" ><?php echo $p_details; ?></textarea>
          </div>
        </div>
		 <div class="form-group">
          <label class="control-label col-sm-3" for="Course">Description:</label>
          <div class="col-sm-8">          
            <textarea type="text" name="p_desc" class="form-control" id="add" placeholder="Enter Address" cols="10" rows="10" ><?php echo $p_desc; ?></textarea>
          </div>
        </div>
        
        
        <div class="form-group">
          <label class="control-label col-sm-3" for="mobile_nu">Image:</label>
          <div class="col-sm-8">          
            <img src="images/<?php echo $pa_img; ?>" class="img-responsive" style="width:80px;height:80px;" alt="">
              <label name="pa_img"><?php echo $pa_img;?></label>
              <input type="file" class="form-control" name="pa_img" id="Course" placeholder="Enter course" value="<?php echo $pa_img; ?>">
          </div>
        </div>
          
        <div class="form-group-lg">        
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" name="e_update" class="btn btn-success btn-group-lg" style="width:100%;">Submit</button>
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
