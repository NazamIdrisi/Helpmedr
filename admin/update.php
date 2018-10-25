<?php 
include("check.php");	
include("mydbcon.php");
?>

<?php
 if(isset($_GET['dr_id'])){
  $ids=$_GET['dr_id'];
  $_SESSION['fd']=$ids;
                               
               $ct=$_SESSION['fd'];                 
                                

    
  $sql="SELECT * FROM doctor WHERE dr_id='$ct'";
  
  
  $result = mysqli_query($db, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
                                            // $id=$row['id'];
											 
											 $dname=$row['dr_name'];
											 $dabout=$row['dr_about'];
                                             $demail=$row['dr_email'];
											 $dmobile=$row['dr_mobile'];
											 $dedu=$row['dr_education'];
											 $dspes=$row['dr_specialities'];
											 $dex=$row['dr_expertise'];
											 $damt=$row['dr_achievements'];
											 $dprt=$row['dr_practice'];
											 $dlan=$row['dr_languages'];
											 $dadd=$row['dr_add'];
                                            $dimg=$row['img'];
											 
 }
}
  }
?>


<?php
 // $id=$_GET['id'];

  if(isset($_POST['dupdate']))
  {
      include("db.php");
      $ct=$_SESSION['fd'];

      
  $d_name=$_POST['dname'];
  $d_mobile=$_POST['dmobile'];
  $d_lan=$_POST['dlanguage'];
  $d_ex = $_POST['dex'];
  $d_spes=	  $_POST['dspes'];
  $d_email=	   $_POST['demail'];
  $d_add =	  $_POST['daddress'];
      $d_about=	  $_POST['dabout'];
      $d_edu=	  $_POST['deducation'];
      $d_a=	  $_POST['dach'];
      $d_pt=	  $_POST['dpractice'];
      
      $pic = $_FILES["dimg"]['name'];
  
  
  
  $sql = mysqli_query($con,"UPDATE doctor SET dr_name='$d_name',dr_mobile='$d_mobile',dr_languages='$d_lan',dr_expertise='$d_ex',dr_specialities='$d_spes',dr_email='$d_email',dr_add='$d_add',img='$pic',dr_about='$d_about',dr_education='$d_edu',dr_achievements='$d_a',dr_practice='$d_pt' WHERE dr_id='$ct'");

      move_uploaded_file($_FILES['dimg']['tmp_name'],"images/".$pic);
      
if (!$sql) {
    
    echo mysqli_error($con);
   
     
}
      else{
         
          header("location:doctors.php");
      }
  }

  

  
 
?>





        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Doctor <small> Update </small>
                           <span class=""><a href="adddoctor.php" class="pull-right btn btn-primary"> Add Doctors</a></span>
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
      <form class="form-horizontal" action="update.php" method="POST" role="form" enctype="multipart/form-data">
      <div class="row">
      <div class="col-sm-6">
	
       
        <div class="form-group">
          <label class="control-label col-sm-3" for="name">Dr. Name:</label>
          <div class="col-sm-8">          
            <input type="text" class="form-control" name="dname" id="name" placeholder="Enter name" value="<?php echo $dname; ?>">
          </div>
        </div>
        <div class="form-group">        
          <label class="control-label col-sm-3" for="email">Mobile Number:</label>

          <div class="col-sm-8">          
            <input type="text" class="form-control" name="dmobile" id="email" placeholder="Enter email" value="<?php echo $dmobile; ?>">
          </div>
        </div>
		 <div class="form-group">
          <label class="control-label col-sm-3" for="Course">Languages:</label>
          <div class="col-sm-8">          
            <input type="text" class="form-control" name="dlanguage" id="marks" placeholder="Enter marks" value="<?php echo $dlan; ?>">
          </div>
        </div>
        <div class="form-group">        
          <label class="control-label col-sm-3" for="marks">Expertise:</label>
          <div class="col-sm-8">          
            <input type="number" class="form-control" name="dex" id="Grade" placeholder="Enter grade" value="<?php echo $dex; ?>">
          </div>
        </div>
        <div class="form-group">
         <label class="control-label col-sm-3" for="fname">Dr. Specialities:</label>
  <div class="col-sm-8">
            <input type="text" class="form-control" name="dspes" id="fname" placeholder="Enter father name" value="<?php echo $dspes; ?>">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3" for="mobile_nu">Dr. Email:</label>
          <div class="col-sm-8">          
            <input type="email" class="form-control" name="demail" id="mobile_nu" placeholder="Enter mobile number" value="<?php echo $demail; ?>">
          </div>
        </div>
        <div class="form-group">        
           <label class="control-label col-sm-3" for="Add">Address:</label>
          <div class="col-sm-8">          
            <textarea type="text" name="daddress" class="form-control" id="add" placeholder="Enter Address" ><?php echo $dadd; ?></textarea>
          </div>
        </div>
        </div>
        <div class="col-sm-6">
        <div class="form-group">
           <label class="control-label col-sm-3" for="Add">Image:</label>
          <div class="col-sm-8">
              <img src="images/<?php echo $dimg; ?>" class="img-responsive" style="width:80px;height:80px;" alt="">
            <input type="file" class="form-control" name="dimg" id="Course" placeholder="Enter course" value="<?php echo $dimg; ?>">
          </div>
        </div>
       
        <div class="form-group">
           <label class="control-label col-sm-3" for="grade">About:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="dabout" id="date" placeholder="Enter date of birth" value="<?php echo $dabout; ?>">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3" for="date">Education:</label>
          <div class="col-sm-8">          
            <input type="date" class="form-control" name="deducation" id="r_number" placeholder="Enter roll number" value="<?php echo $dedu; ?>">
          </div>
        </div>
        <div class="form-group">        
          <label class="control-label col-sm-3" for="r_number">Achievements:</label>
          <div class="col-sm-8">          
            <input type="text" class="form-control" name="dach" id="Password" placeholder="Enter password" value="<?php echo $damt; ?>">
          </div>
        </div>
		<div class="form-group">        
          <label class="control-label col-sm-3" for="Password">Practice Information:</label>
          <div class="col-sm-8">          
            <input type="text" class="form-control" name="dpractice" id="Password" placeholder="Enter password" value="<?php echo $dprt; ?>">
          </div>
        </div>
		
		
        <div class="form-group-lg">        
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" name="dupdate" class="btn btn-success btn-group-lg" style="width:100%;">Submit</button>
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
