<?php
include('connection.php');
session_start();
$user_check=$_SESSION['Student_Roll_number'];

$ses_sql = mysqli_query($db,"SELECT Student_Roll_number FROM student WHERE Student_Roll_number='$user_check' ");

$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

$login_user=$row['Student_Roll_number'];

if(!isset($user_check))
{
header("Location: login.php");
}
?>