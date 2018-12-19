

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registration</title>
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
	<!--<div class="text-center p-t-12" align="right">
	<a class="txt2" href="index.php" >Home</a></div>-->
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100" style="padding : 100px 130px 0px 95px" >
				

				<form class="login100-form validate-form" action="register.php?set=yes" method="POST">
					<span  class="login100-form-title">
					
<h2 style="align:center">Admin Panel</h2>
					</span>					
					<span class="login100-form-title">
						Check Logs
					</span><textarea readonly="readonly" cols="100" rows="10">
					<?php $con1=mysqli_connect("localhost","root","","check_log");
					$query="SELECT * FROM `logs`";
					$results = mysqli_query($con1,$query);
$i=2;
while ($row = mysqli_fetch_array($results)) {
    echo '
	';
    foreach($row as $field) {
		if(($i%2)==0){
        echo '&nbsp;&nbsp;&nbsp;' . htmlspecialchars($field) . ''; $i;}
		$i=$i+1;
    }
    echo '
	'; 
}?>
</textarea>
<br><br><br><br>
<span class="login100-form-title">
						Feedbacks
					</span><textarea readonly="readonly" cols="100" rows="10">
					<?php 
					$query1="SELECT name,comment FROM `comment_table`";
					$results1 = mysqli_query($con1,$query1);
$j=2;
while ($row = mysqli_fetch_array($results1)) {
    echo '
	';
    foreach($row as $field) {
		if(($j%2)==0){
        echo '&nbsp;&nbsp;&nbsp;' . htmlspecialchars($field) . ''; $j;}
		$j=$j+1;
    }
    echo '
	'; 
}?>
</textarea>
					<!--<div class="wrap-input100 validate-input" data-validate = "Wrong email !!!! <?php echo"\n"; ?>Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Enter your email here">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required or Password is too small">
						<input class="input100" type="password" name="password" placeholder="Enter password	">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>-->
					
					<div class="container-login100-form-btn">
							
						
					</div>
.
					<div class="text-center p-t-136">
						<a class="txt2" href="index.php">
							
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
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
