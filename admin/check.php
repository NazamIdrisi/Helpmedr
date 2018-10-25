<?php
include('connection.php');
session_start();
$user_check=$_SESSION['UserName'];

$ses_sql = mysqli_query($db,"SELECT UserName FROM user WHERE UserName='$user_check' ");

$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

$login_user=$row['UserName'];

if(!isset($user_check))
{
header("Location: login.php");
}
?>