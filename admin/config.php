<?php 

$server="localhost:3306";
$user="anujkrp_wp8";
$password="anujkrp@121";
$dbname="race_computer";


$conn = mysqli_connect($server, $user, $password,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>