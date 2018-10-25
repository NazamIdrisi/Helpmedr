<?php
include('db.php');

$user_check=$_SESSION['dr_email'];

$ses_sql = mysqli_query($db,"SELECT dr_email FROM doctor WHERE dr_email='$user_check' ");

$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

$login_user=$row['dr_email'];

if(!isset($user_check))
{
header("Location: ../choose_login.php");
}
?>