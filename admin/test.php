<html>
<head>
<script>
function printPage(id)
{
   var html="<html>";
   html+= document.getElementById(id).innerHTML;

   html+="</html>";

   var printWin = window.open('toolbar=0,scrollbars=0,status  =0');
   printWin.document.write(html);
   printWin.document.close();
   printWin.focus();
   printWin.print();
   printWin.close();
}

</script>
</head>
<body>
<div id="block1">
<table border="1" >
</tr>
<th colspan="3">Block 1</th>
</tr>
<tr>
<th>1</th><th>XYZ</th><th>athock</th>
</tr>
</table>

</div>

<div id="block2">
    This is Block 2 content
</div>

<input type="button" value="Print Block 1" onClick="printPage('block1');"></input>
<input type="button" value="Print Block 2" onClick="printPage('block2');"></input>
<?php
include ('mydbcon.php');
$result = mysql_query("select count(*) FROM attendance where name='Mulk raj'");
$row = mysql_fetch_array($result);

$total = $row[0];
echo "Total rows: " . $total;
?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>

    <!-- Bootstrap Core CSS -->
   
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<script>
/*<!--function run(sel) {
    var i = sel.selectedIndex;
    if (i != -1) {
        document.getElementById("car").value = sel.options[i].text;
    }
}-->*/
</script>
<body>

  <!-- <form id="myForm" method="POST">
  <select id="dropdown1" class="select" tabindex="2" onchange="run(this)">
    <option>Select</option>-->
     <?php
										/*include "mydbcon.php";
										$query=mysql_query("select * from student");
										while($row=mysql_fetch_array($query)){
											$id=$row['id'];
										
										 $name=$row['Student_name'];
											 $fname=$row['Student_father'];
											 $roll=$row['Student_Roll_number'];*/											
											
										?>
    <option><?php //echo $name; ?></option>
   <?php {
		 								}
										?>
<!--</select>
<input type="text" id="car" name="car" id="car" value="<?=$_POST[car]?>" disabled /> 
</form>-->

<?php
//include('mydbcon.php');
//if(isset($_POST['formSubmit']) ){
//  $var = $_POST['select'];
//  $query = "SELECT * FROM student WHERE Student_name='$var'";
//  $result = mysql_query($query)
//  or die(mysql_error());
//
//  while($row = mysql_fetch_array($result)){
//    $var2 = $row['Student_father'];
//    echo "First field: " . $var2 . "<br>";
//    // and so on for what you want to echo out
//  }
//}
?>




 <?php
//									
//										$query=mysql_query("select * from student where name='' ");
//										while($row=mysql_fetch_array($query)){
//											$id=$row['id'];
//										
//										 $name=$row['Student_name'];
//											echo  $fname=$row['Student_father'];
//											  echo $roll=$row['Student_Roll_number'];
//										}
											?>
                                            <?php

	if( isset($_POST['userEdit']) ) {
		header('Location: '.$_POST['userEdit']);
	}

?>

</body>

</html>
    <html>
    <body>
    <?php
   
	  /*  $date = date_default_timezone_set('Asia/Kolkata');
    $today = date("j/m/Y");*/
    ?>
  <!--  Time: <input type="text" name="dat1" value="<?php echo $today; ?>">
    </body>
    </html>
    
Create a HTML form, test_post.php, with multiple checkboxes as shown below.

    <html>  
    <body>  
       <form action="" method="post" enctype="multipart/form-data">  
       <div style="width:200px;border-radius:6px;margin:0px auto">  
    <table border="1">  
       <tr>  
          <td colspan="2">Select Technolgy:</td>  
       </tr>  
       <tr>  
          <td>PHP</td>  
          <td><input type="checkbox" name="techno[]" value="PHP"></td>  
       </tr>  
       <tr>  
          <td>.Net</td>  
          <td><input type="checkbox" name="techno[]" value=".Net"></td>  
       </tr>  
       <tr>  
          <td>Java</td>  
          <td><input type="checkbox" name="techno[]" value="Java"></td>  
       </tr>  
       <tr>  
          <td>Javascript</td>  
          <td><input type="checkbox" name="techno[]" value="javascript"></td>  
       </tr>  
       <tr>  
          <td colspan="2" align="center"><input type="submit" value="submit" name="techno"></td>  
       </tr>  
    </table>  
    </div> 
    <input type="text" placeholder="select" readonly value="select" accesskey="left"  > 
    
    
    -->
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    </form>
    <style>
	#a{
		color:#00F;
		}

	#b{
		color:#F00;
		}
	
	</style>
    <p id="a" id="b" style="color:#FF0;" draggable="false" >hello how are you</p>  
    <?php  
    if(isset($_POST['sub']))  
    {  
    $host="localhost";//host name  
    $username="root"; //database username  
    $word="";//database word  
    $db_name="student_information";//database name  
    $tbl_name="attendance"; //table name  
    $con=mysqli_connect("$host", "$username", "$word","$db_name")or die("cannot connect");//connection string 
	
	
	 
    $checkbox1=$_POST['techno'];  
    $chk="";  
    foreach($checkbox1 as $chk1)  
       {  
          $chk .= $chk1.",";  
       }  
    $in_ch=mysqli_query($con,"insert into attendance(present) values ('$chk')");  
    if($in_ch==1)  
       {  
          echo'<script>alert("Inserted Successfully")</script>';  
       }  
    else  
       {  
          echo'<script>alert("Failed To Insert")</script>';  
       }  
    }  
    ?> 
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <?php


//<!--$result = mysql_query("SELECT COUNT(id)  FROM  WHERE id=7;");
//
//while ($row = mysql_fetch_array($result)) {
//
//    $var = $row['Count'];
//
//    echo "There are currently " .$var. " users.";
//
//}-?>


<!DOCTYPE html>
<html>
<body>

<?php
$cars=array
   (
   "Volvo"=>array
   (
   "XC60",
   "XC90"
   ),
   "BMW"=>array
   (
   "X3",
   "X5"
   ),
   "Toyota"=>array
   (
   "Highlander"
   )
   );
echo "Normal count: " . count($cars)."<br>";
echo "Recursive count: " . count($cars,1);
?>

</body>
</html>
