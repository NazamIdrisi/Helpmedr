<?php
	include("check.php");	
	include("mydbcon.php");
?>
<?php
		
if(isset($_POST["submit"]))
    
                            {
    
$id=         $_POST['dr_id'];	
$name=	   $_POST['dr_name'];
$mobile=      $_POST['dr_mobile'];
$specialities=	 $_POST['dr_specialities'];
$email=	  $_POST['dr_email'];
$add=	   $_POST['dr_add'];
     $pic = $_FILES['dr_img']['name'];
$languages=	  $_POST['dr_languages'];
$education=	 $_POST['dr_education'];
$expertise=	   $_POST['dr_expertise'];
$about=	  $_POST['dr_about'];
$achievements=	$_POST['dr_achievements'];
$pass=$_POST['pass'];
$practice=$_POST['dr_practice'];
   

$insert = "INSERT INTO doctor
(dr_id,dr_name,dr_mobile,dr_specialities,dr_email,dr_add,img,dr_languages,dr_expertise,dr_about,dr_education,dr_achievements,dr_practice,pass)
values('$id','$name','$mobile','$specialities','$email','$add','$pic','$languages','$expertise','$about','$education','$achievements','$practice','$pass')";

                    $query = mysqli_query($db,$insert);
                         move_uploaded_file($_FILES['dr_img']['tmp_name'],"images/".$pic);
                        
                        
 if($query){
     echo "<script>alert('Successfull Submit')</script>"; 
    
}
else{
 
    echo "<script>alert('Not Submit')</script>"; 
}

	
}
?> 
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Doctors <small> Informatin </small>
                           <span class=""><a href="doctors.php" class="pull-right btn btn-primary">Show Doctors</a></span>
                        </h1>
                    </div>
                </div>
                <!-- /.row -->
<div class="row">
     <div class="panel panel-yellow">
<div class="panel-heading">
      <h2 class="panel-title text-center text-success"> Add Doctors Information</h2>
      </div>
      <div class="panel-body">
      <form class="form-horizontal" action="adddoctor.php" method="POST" enctype="multipart/form-data">
      <div class="row">
      <div class="col-sm-6">
        <div class="form-group">
          <label class="control-label col-sm-3" for="stu_id">Dr. Id:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="dr_id" id="stu_id" placeholder="Enter User Id">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3" for="name">Dr. Name:</label>
          <div class="col-sm-8">          
            <input type="text" class="form-control" name="dr_name" id="name" placeholder="Enter name">
          </div>
        </div>
        <div class="form-group">        
          <label class="control-label col-sm-3" for="email">Mobile Number:</label>
          <div class="col-sm-8">          
            <input type="text" class="form-control" name="dr_mobile" id="email" placeholder="Enter Mobile">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3" for="fname">Dr. Specialities:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="dr_specialities" id="fname" placeholder="Enter Specialities">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3" for="mobile_nu">Dr. Email:</label>
          <div class="col-sm-8">          
            <input type="email" class="form-control" name="dr_email" id="mobile_nu" placeholder="Enter email">
          </div>
        </div>
        <div class="form-group">        
          <label class="control-label col-sm-3" for="Add">Address:</label>
          <div class="col-sm-8">          
            <textarea type="text" name="dr_add" class="form-control" id="add" placeholder="Enter Address"></textarea>
          </div>
        </div>
		<div class="form-group">        
          <label class="control-label col-sm-3" for="Add">Image:</label>
          <div class="col-sm-8">          
            <input type="file" name="dr_img" class="form-control"  />
          </div>
        </div>
        </div>
        <div class="col-sm-6">
        <div class="form-group">
          <label class="control-label col-sm-3" for="Course">Languages:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="dr_languages" id="Course" placeholder="Enter Languages">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3" for="marks">Expertise:</label>
          <div class="col-sm-8">          
            <input type="number" class="form-control" name="dr_expertise" id="marks" placeholder="Enter Expertise">
          </div>
        </div>
        <div class="form-group">        
          <label class="control-label col-sm-3" for="grade">About:</label>
          <div class="col-sm-8">          
            <input type="text" class="form-control" name="dr_about" id="Grade" placeholder="Enter About">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3" for="date">Education:</label>
          <div class="col-sm-8">
            <input type="date" class="form-control" name="dr_education" id="date" placeholder="Enter Education">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3" for="r_number">Achievements:</label>
          <div class="col-sm-8">          
            <input type="text" class="form-control" name="dr_achievements" id="r_number" placeholder="Enter Achievements">
          </div>
        </div>
        <div class="form-group">        
          <label class="control-label col-sm-3" for="Password">Practice Information:</label>
          <div class="col-sm-8">          
            <input type="text" class="form-control" name="dr_practice" id="Password" placeholder="Practice Information">
          </div>
        </div>
		
		<div class="form-group">        
          <label class="control-label col-sm-3" for="Password">Password:</label>
          <div class="col-sm-8">          
            <input type="password" class="form-control" name="pass" id="Password" placeholder="Enter password">
          </div>
        </div>
        <div class="form-group">        
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" name="submit" class="btn btn-success" style="width:100%;">Submit</button>
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
