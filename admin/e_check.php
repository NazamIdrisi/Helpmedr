<?php
include('db.php');

$user_check=$_SESSION['e_email'];

$ses_sql = mysqli_query($db,"SELECT user_name FROM equipments WHERE user_name='$user_check' ");

$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

$login_user=$row['user_name'];

if(!isset($user_check))
{
header("Location: ../choose_login.php");
}
?>