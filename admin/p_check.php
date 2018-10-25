<?php
include('db.php');

$user_check=$_SESSION['p_email'];

$ses_sql = mysqli_query($db,"SELECT User_Name FROM pathology WHERE User_Name='$user_check' ");

$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

$login_user=$row['User_Name'];

if(!isset($user_check))
{
header("Location: ../choose_login.php");
}
?>