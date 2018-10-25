<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "helpme");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM pathology 
  WHERE Pathology_Name LIKE '%".$search."%'
  OR Pathology_Email LIKE '%".$search."%' 
  OR Pathology_Address LIKE '%".$search."%' 
  ";
}
else
{
 $query = "
  SELECT * FROM pathology ORDER BY Pathology_Id
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>Customer Name</th>
     <th>Address</th>
     <th>City</th>
     </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
     ?><?php
   $output .= '  
  
  
  ?>
  
   <tr>
    <td>'.$row["Pathology_Name"].'</td>
    <td>'.$row["Pathology_Email"].'</td>
    <td>'.$row["Pathology_Address"].'</td>
    
   </tr>
   
   <?php
  ';
     ?>

<?php
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}

?>
