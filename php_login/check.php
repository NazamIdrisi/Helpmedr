<?php
include_once 'dbconnect.php';
session_start();
$user_check=$_SESSION['usr_name'];

$ses_sql = mysqli_query($db,"SELECT usr_name FROM users WHERE usr_name='$user_check' ");

$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

$login_user=$row['usr_name'];

if(!isset($user_check))
{
header("Location: login.php");
}
?>