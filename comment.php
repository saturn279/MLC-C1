
 <!doctype html>
<html>
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main1.css">
<!--===============================================================================================-->
<title>Comment Box</title>
<style>



input[type=text], select {
 width: 100%;
 border-radius: 5px;
 margin: 7px 0;
 border: 1px solid #ccc;
 padding: 14px 18px; 
 display: inline-block;
 box-sizing: border-box;
}

input[type=submit]:hover {
 background-color: #000;
}

textarea, select {
 width: 100%;
 border-radius: 5px;
 margin: 7px 0;
 border: 1px solid #ccc;
 padding: 14px 18px; 
 display: inline-block;
 box-sizing: border-box;
}

input[type=submit] {
 width: 100%;
 border: none;
 color: white;
 padding: 14px 20px;
 margin: 8px 0;
 cursor: pointer;
 border-radius: 4px;
 
}

</style>

</head>
<body>
<div class="limiter">
		<div class="container-login100">

					
			<div class="wrap-login100">
<span class="login100-form-title">
						Feedback
					</span>
<table bgcolor="#FFFFFF" style="padding:50px" align="center">
<form action="" method="post">
<tr>
<td> Name : </td><td><input type="text" name="name"></td>
</tr>
<tr>
<td> Email : </td><td><input type="text" name="email"></td>
</tr>
<tr>
<td> Website : </td><td><input type="text" name="website"></td>
</tr>
<tr>
<td> Feedback : </td><td><textarea name="comment" rows="6" cols="50"></textarea></td>
</tr>
<tr>
<td><input type="submit" class="login100-form-btn" name="submit"></td></tr>

</form>
</table>



<?php
if(isset($_POST["submit"]))
{
 
 //Including dbconfig file.

 //This script is designed by Android-Examples.com
//Define your host here.
$hostname = "localhost";

//Define your database username here.
$username = "root";

//Define your database password here.
$password = "";

//Define your database name here.
$dbname = "check_log";

 $conn = mysql_connect($hostname, $username, $password);
 
 if (!$conn)
 
 {
 
 die('Could not connect: ' . mysql_error());
 
 }
 
 mysql_select_db($dbname, $conn);

 //This script is designed by Android-Examples.com
 
$name = $_POST["name"];
$email = $_POST["email"];
$website = $_POST["website"];
$comment = $_POST["comment"];


mysql_query("INSERT INTO comment_table (name,mail,website,comment) VALUES ('$name','$email','$website','$comment')"); 

echo '<script type="text/javascript">alert("Feedback submitted successfully");</script>';

}

 ?>
</div></div></div>
</body>
</html>