<?php
$submit = false;
 if($_SERVER["REQUEST_METHOD"]=="POST"){
  $server = "localhost";
  $username = "root";
  $password = "";
  $database = "yamunafile";

$con = mysqli_connect($server, $username, $password, $database);
if(!$con){
    die('error: ' . mysqli_connect_error());
    
}
  $email = $_POST['email'];
  $passwd = $_POST['password'];

  $sql = " SELECT * from `user` where email ='$email' AND password = '$passwd'";
  $result = mysqli_query($con, $sql);
  $num = mysqli_num_rows($result);
  if($num == 1){
    session_start();
	
    header("location: ques.php");
  }
  else{
    $submit = true;
}

 }
 ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Login | Online Quiz System</title>
		<link rel="stylesheet" href="scripts/bootstrap/bootstrap.min.css">
		<link rel="stylesheet" href="scripts/ionicons/css/ionicons.min.css">
		<link rel="stylesheet" href="css/form.css">
        <style type="text/css">
            body{
                  width: 100%;
                  background: url(image/book.png) ;
                  background-position: center center;
                  background-repeat: no-repeat;
                  background-attachment: fixed;
                  background-size: cover;
                }
          </style>
	</head>

	<body>
		<section class="login first grey">
			<div class="container">
				<div class="box-wrapper">				
					<div class="box box-border">
						<div class="box-body">
						<center> <h5 style="font-family: Noto Sans;">Login to </h5><h4 style="font-family: Noto Sans;">Online Quiz System</h4></center><br>
							<form method="post" action="login.php" enctype="multipart/form-data">
								<?php
								if($submit == true){
								echo '<div style="color:red;text-align:center;">Wrong Credentials</div>';};
								?>
								<div class="form-group">
									<label>Enter Your Email Id:</label>
									<input type="email" name="email" class="form-control">
								</div>
								<div class="form-group">
									<label class="fw">Enter Your Password:
									</label>
									<input type="password" name="password" class="form-control">
								</div> 
								<div class="form-group text-right">
									<button class="btn btn-primary btn-block" name="submit">Login</button>
								</div>
								<div class="form-group text-center">
									<span class="text-muted">Don't have an account?</span> <a href="register.php">Register</a> Here..
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>

		<script src="js/jquery.js"></script>
		<script src="scripts/bootstrap/bootstrap.min.js"></script>
	</body>
</html>