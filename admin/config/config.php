<?php
// user config
session_start();
error_reporting(E_ALL ^ E_NOTICE);
define("DB_SERVER", "localhost:3306");

define("DB_DATABASE", "student_information");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "");


define("ROOT", "http://localhost/race_computer/");
define("BaseROOT", "http://localhost/race_computer/");


//change post data
foreach ($_POST as $key => $value) {
    if(!is_array($value)){
      $_POST[$key] = htmlspecialchars($value, ENT_QUOTES);
    }
}
?>

