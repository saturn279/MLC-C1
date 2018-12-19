<?php 

session_start();
$errorMsg="";
date_default_timezone_set("Asia/Calcutta");
$t= date("H:i:s");
/*if(isset($_COOKIE['uid']))
{
 $_SESSION['uid']=$_COOKIE['uid'];
 header("location: compiler.php");
}*/
if(isset($_GET['logout'])){
	session_destroy();
	setcookie("uid",'',time()-500000);
}
	
if(isset($_POST['submit']))
{
	print_r($_POST);
	$remember="on";
	$con=mysqli_connect("localhost","root","","DB");
	$con1=mysqli_connect("localhost","root","","check_log");
	if($con)
	{
	 $pass=MD5($_POST['password']);
	 $query="SELECT * FROM `users` where `email` = '".$_POST['email']."' AND `password`= '".$pass."';";
	  //print_r("kahdsuifah");
	  $result = mysqli_query($con , $query);
	  if(mysqli_num_rows($result)>0)
	  {
	    $row=mysqli_fetch_assoc($result);
		$_SESSION['uid']=$row['id'];
		if($remember=="on")  //if the remember me is checked,it willcreate a cookie
		{
		  //echo "OK";die;
		  setcookie("uid", $row['id'], time()+100000,"/");
		}
		echo "Login successful";
		$q="INSERT INTO `logs` (`email`, `date`,`time`) VALUES ('".$_POST['email']."','".date("Y-m-d")."','".$t."')";
		mysqli_query($con1 , $q);
		if($_POST['email']=="admin@jdk.com")
		{
			header("location: admin.php");
		}
		else{
		header("location: compiler.php");}
		//echo "name=".$row['name'];die;
	  }else
	  {
	   echo "<script type='text/javascript'>alert('Invalid email/password')</script>";
	  }
	}else
	{
	  echo "connection Problem";
	}

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
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
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100" style="padding : 100px 130px 65px 95px" >
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" action="" method="POST">
					<span class="login100-form-title">
						Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<input type="submit" name="submit" class="login100-form-btn" />
							
						
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="forgot_pass.php">
							Username / Password?
						</a>
					</div>
					
					<div class="text-center p-t-12">
						
						<a class="txt2" href="register.php">
							Create new account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>

					<!--<div class="text-center p-t-136">
						<a class="txt2" href="register.php">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>-->
					
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>