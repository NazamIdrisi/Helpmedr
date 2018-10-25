<?php
include("db.php");

if(isset($_GET['Pro_Id']))
                            {
                                $catid=$_GET['Pro_Id'];
                                
                               
                                
                                

                                        $edit = mysqli_query($con,"delete from equipments where Product_Id = $catid");
                
                    header('Location:Equipments.php');
               
                                            
                            }
else{
    echo "<script>alert('Not Deleteed')</script>";
}


?>