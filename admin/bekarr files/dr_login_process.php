<?php
	session_start();
	include("connection.php"); //Establishing connection with our database
	
	$error = ""; //Variable for storing our errors.
	if(isset($_POST["dr_submit"]))
	{
		if(empty($_POST["dr_email"]) || empty($_POST["dr_password"]))
		{
			$error = "Both fields are required.";
		}else
		{
			// Define $username and $password
			$username=$_POST['dr_email'];
			$password=$_POST['dr_password'];

			// To protect from MySQL injection
			
			
			//Check username and password from database
			$sql="SELECT dr_id FROM doctor WHERE dr_email='$username' and pass='$password'";
			$result=mysqli_query($db,$sql);
			$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
			
			//If username and password exist in our database then create a session.
			//Otherwise echo error.
			
			if(mysqli_num_rows($result) == 1)
			{
				$_SESSION['UserName'] = $username; // Initializing Session
				header("location: m.php"); // Redirecting To Other Page
			}else
			{
				$error = "Incorrect username or password.";
			}

		}
	}

?>