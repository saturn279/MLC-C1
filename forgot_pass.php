<?php 

session_start();
$errorMsg="";

if(isset($_POST['submit']))
{
	//print_r($_POST);die;
  //$o_pass=md5($_POST['old_password']);
  $email=$_POST['email'];
  $n_pass=$_POST['password'];
  $c_pass=$_POST['c_password'];
  $con=mysqli_connect("localhost","root","","DB");
  $query="select * from `users` where `email`='".$email."'";
  $result = mysqli_query($con, $query);
  $row=mysqli_fetch_assoc($result);
  if($n_pass!=$c_pass)
  {
	  echo "<script type='text/javascript'>alert('Both Passwords does not match!!!')</script>";
  }
elseif($con)
	{
		//echo  $row['password'];
	  if($row['email']==$email)
	  { // echo"right";
	  	if(1)
		{
			$query="update `users` set password=md5('".$_POST['password']."') where `email`='".$email."'";
			 mysqli_query($con, $query);
			//echo $query;
			//echo"Password Changed Successfully";
			echo "<script type='text/javascript'>alert('Password changed Successfully')</script>";
			header("location: index.php");
		}
	  }else{echo "<script type='text/javascript'>alert('Wrong Email')</script>";}
	}
}
	  
	  
	  
	  
	  
/*if(isset($_COOKIE['uid']))
{
 $_SESSION['uid']=$_COOKIE['uid'];
 echo "Already login";
}

if(isset($_POST['submit']))
{
	print_r($_POST);
	$remember="on";
	$con=mysqli_connect("localhost","root","","DB");
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
		  setcookie("uid", $row['id'], time()+30,"/");
		}
		echo "Login successful";
		header("location: compiler.php");
		//echo "name=".$row['name'];die;
	  }else
	  {
	   echo "<script type='text/javascript'>alert('Invalid email/password')</script>";
	  }
	}else
	{
	  echo "connection Problem";
	}

}*/




?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Change Password</title>
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
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" action="" method="POST">
					<span class="login100-form-title">
						Change Password
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="New Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="c_password" placeholder="Confirm the Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<input type="submit" name="submit" class="login100-form-btn" />
							
						
					</div>

					
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