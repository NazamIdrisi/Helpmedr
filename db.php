<?php 

    $con = mysqli_connect("localhost","root","","helpme");

    if(!$con){
        echo "<script>alert('you are not connected')</script>";
    }

?>