<?php
session_start();
if(session_destroy())
{
header("Location: ../company_login.php");
}

?>