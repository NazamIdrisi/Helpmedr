<?php
include("db.php");

if(isset($_GET['p_id']))
                            {
                                $catid=$_GET['p_id'];
                                
                               
                                
                                

                                        $edit = mysqli_query($con,"delete from pathology where Pathology_Id = $catid");
                
                    header('Location:pathologies.php');
               
                                            
                            }
else{
    echo "<script>alert('Not Deleteed')</script>";
}


?>