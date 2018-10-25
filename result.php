<?php
$conn = mysqli_connect("localhost", "root", "","helpme");

//search code
//error_reporting(0);
if($_REQUEST['submit']){
$name = $_POST['sname'];

if(empty($name)){
	$make = '<h4>You must type a word to search!</h4>';
}else{
	$make = '<h4>No match found!</h4>';
	$sele = "SELECT * FROM doctor WHERE dr_specialities LIKE '%$name%'";
	$result = mysql_query($sele);
	
	if($mak = mysql_num_rows($result) > 0){
		while($row = mysql_fetch_assoc($result)){
            
            ?>
		
        
        echo '<h4> Id						: '.$row['id'];
		echo '<br> name						: '.$row['name'];
		echo '</h4>';

<?php	

}
}else{
echo'<h2> Search Result</h2>';

print ($make);
}
mysql_free_result($result);
mysql_close($conn);
}
}

?>
