<?php
	include('login_process.php'); // Include Login Script

	if ((isset($_SESSION['Student_Roll_number']) != '')) 
	{
		header('Location: index.php');
	}	
	

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PHP LOGIN FORM WITH SESSION</title>
<style>

.wrapper
{
	width:800px;
	margin:0 auto;
}
h1
{
	font-size:24px;
	font-family:Gotham, "Helvetica Neue", Helvetica, Arial, sans-serif;
	font-weight:bold;
	color:#000;
}
h1 a
{
	color:#000;
}

label
{
	font-family:Consolas, "Andale Mono", "Lucida Console", "Lucida Sans Typewriter", Monaco, "Courier New", monospace;
	font-size:20px;
	font-weight:bold;
}
.input
{
	padding:5px;
	font-family:Consolas, "Andale Mono", "Lucida Console", "Lucida Sans Typewriter", Monaco, "Courier New", monospace;
	font-size:18px;
}
input[type=submit]
{
	padding:5px;
	font-family:Consolas, "Andale Mono", "Lucida Console", "Lucida Sans Typewriter", Monaco, "Courier New", monospace;
	font-size:18px;
	font-weight:bold;
	background:#999;
	border:2px solid black;
	color:#FFF;
}
.error
{
	color:red;
	font-family:Consolas, "Andale Mono", "Lucida Console", "Lucida Sans Typewriter", Monaco, "Courier New", monospace;
	font-size:16px;
}
</style>
</head>

<body>

<center>
  <div>
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Head_banner -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-5575678841772399"
     data-ad-slot="4174507062"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>


	</div>


<div class="wrapper" style="margin-top:60px;">
<h1 style="background-color:skyblue;width:100%;"><a href="http://racecomputerinstitute.com" style="background-color:skyblue;width:100%;">Race Computer Institute</a></h1>

<form method="post" action="">
<table width="400" border="0" cellpadding="10" cellspacing="10">
<tr>
<td colspan="2" align="center" class="error"><?php echo $error;?></td>
</tr>
<tr>
<td style="font-weight: bold"><div align="right"><label for="uname">Roll No.</label></div></td>
<td><input name="uname" type="text" class="input" size="25" required /></td>
</tr>
<tr>
<td height="23" style="font-weight: bold"><div align="right"><label for="password">Password</label></div></td>
<td><input name="password" type="password" class="input" size="25" required /></td>
</tr>
<tr>
<td height="23"></td>
<td><div align="right">
  <input type="submit" name="submit" value="Login!" />
</div></td>
</tr>
</table>
</form>

<h1 style="background-color:skyblue;width:100%;">Powered By:-<a href="http://lavegainfotech.com" style="background-color:skyblue;width:100%;">LAVEGA INFOTECH</a></h1>

</div>  

  <div>
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Head_banner -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-5575678841772399"
     data-ad-slot="4174507062"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Head_banner -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-5575678841772399"
     data-ad-slot="4174507062"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>

	</div>  
</center>
    