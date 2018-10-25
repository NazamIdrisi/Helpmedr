<?php
include("db.php");

if(isset($_GET['dr_id']))
                            {
                                $catid=$_GET['dr_id'];
                                
                               
                                
                                

                                        $edit = mysqli_query($con,"delete from doctor where dr_id = $catid");
                
                    header('Location:doctors.php');
               
                                            
                            }
else{
    echo "<script>alert('Not Deleteed')</script>";
}


?>