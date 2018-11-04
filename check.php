<?php
include_once 'db.php';

$user_check=$_SESSION['usr_name'];

$ses_sql = mysqli_query($con,"SELECT usr_name FROM patient WHERE usr_name='$user_check' ");

$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

$login_user=$row['usr_name'];

if(!isset($user_check))
{
header("Location: login.php");
}
?>