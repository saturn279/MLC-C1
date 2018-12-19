<?php




$myfile = fopen("C:\Program Files\Java\jdk1.8.0_101\bin\\test3.java", "w") or die("cannot open file");
	//echo fread($myfile);
	$txt =  $_POST["code"];
	fwrite($myfile, $txt);
	fclose($myfile);
	$str = exec('start batch.bat');
	
//}

//echo exec("mkdir xnd");
//$f1= readfile("abc.java"); 

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V1</title>
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
</head>
<body align="center">
	
	<div class="limiter">
		<div class="container-login100">

					
			<div class="wrap-login100">
				

				<form class="login100-form validate-form" action="" method="POST">
					<span class="login100-form-title">
						
					</span>
				
			








<select style="color:rgb(100,100,100); border-color:#FFFFFF; outline:none ;" id="lan">
    <option value="hide"> Language </option>
    <option value="january" rel="icon-temperature">c++</option>
    <option value="february">java</option>
   </select> 
<br>
<br>
		


		<textarea id="code" placeholder="Code here" rows="10" cols="90" style="border:5pxborder-color:#FFFFFF" name="code"><?php 
/*$myfile = fopen("C:\Program Files\Java\jdk1.8.0_101\bin\\test1.java", "r") or die("cannot open file"); echo fread($myfile,10); fclose($myfile);*/ readfile("C:\Program Files\Java\jdk1.8.0_101\bin\\test3.java"); ?></textarea>
<textarea id="output" placeholder="Output" rows="5" cols="90" style=" background-color: #FFFFFF 
  border: 2px solid #FFF; " ><?php readfile("C:\Program Files\Java\jdk1.8.0_101\bin\\op.txt"); ?></textarea>
















					
					<div class="container-login100-form-btn">
						<input type="submit" value="Compile" name="submit" class="login100-form-btn" />
							
						
					</div>

				</form>
			</div>
		</div>
	</div>
	
	
</body>
</html>
