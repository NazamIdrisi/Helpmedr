<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>example-aggregate-functions-and-grouping-count-with-group-by- php mysql examples | w3resource</title>
<meta name="description" content="example-aggregate-functions-and-grouping-count-with-group-by- php mysql examples | w3resource">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-12">
<h2>Taking an account of how many authors are there in different countries (in author table):</h2>
<table class='table table-bordered'>
<tr>
<th>Name</th>
<th>Roll Number</th>
<th>Course</th>
<th>Attend</th>
<th>Apsent</th>

</tr>
<?php
$hostname="localhost";
$username="root";
$password="";
$db = "student_information";
$dbh = new PDO("mysql:host=$hostname;dbname=$db", $username, $password);
foreach($dbh->query('SELECT  name, present, course, roll_number, COUNT(*)FROM attendance where present="present" GROUP BY name ') as $row) {
echo "<tr>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['roll_number'] . "</td>";
echo "<td>" . $row['course'] . "</td>";
echo "<td>" . $row['COUNT(*)'] . "</td>";
echo "<td>" . $row['COUNT(*)'] . "</td>";
 echo "</tr>"; 
}
foreach($dbh->query('SELECT  name, present, course, roll_number, COUNT(*)FROM attendance where present="unpresent" GROUP BY name ') as $row) {
echo "<tr>"; 

echo "<td>" . $row['COUNT(*)'] . "</td>";
echo "</tr>"; 
}
?>
</tbody></table>
</div>
</div>
</div>
</body>
</html>












































<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>example-aggregate-functions-and-grouping-count-with-group-by- php mysql examples | w3resource</title>
<meta name="description" content="example-aggregate-functions-and-grouping-count-with-group-by- php mysql examples | w3resource">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-12">
<h2>Taking an account of how many authors are there in different countries (in author table):</h2>
<table class='table table-bordered'>
<tr>
<th>Name</th>
<th>Roll Number</th>
<th>Course</th>
<th>Attend</th>
<th>Apsent</th>

</tr>
<?php
$hostname="localhost";
$username="root";
$password="";
$db = "student_information";
$dbh = new PDO("mysql:host=$hostname;dbname=$db", $username, $password);
foreach($dbh->query('SELECT  name, present, course, roll_number, COUNT(*)FROM attendance where present="present" GROUP BY present ') as $row) {
echo "<tr>";
echo "<td>" . $row['present'] . "</td>";

echo "<td>" . $row['COUNT(*)'] . "</td>";
echo "</tr>"; 
}
?>
</tbody></table>
</div>
</div>
</div>
</body>
</html>