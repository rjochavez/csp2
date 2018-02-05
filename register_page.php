<?php
require 'connection.php';
session_start();?>



<?php 
require 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
	<title>ComEx Online - Register Page</title>
</head>
<body>

	<?php 

	include 'headernav.php';


	?>
	<div class="register-overall-background">
		<div class="register-overall-container">
			<div class="register-side">
				<div class="register-side-bar"></div>
			</div>
			<div class="register-title"><i class="fa fa-user-plus"></i> SIGN-UP / CREATE YOUR ACCOUNT</div>
			<div class="register-user-container">
				<form action="" method="POST">
					<div class="userIn-con user-reg-username">
						<input class="user-input" type="text" name="image" placeholder="profile picture (optional)">
					</div>

					<div class="userIn-con user-reg-username">
						<input class="user-input" type="name" name="username" placeholder="username" required>
					</div>
					<div  class="userIn-con user-reg-firstname">
						<input class="user-input" type="name" name="firstname" placeholder="firstname" required>
					</div>
					<div class="userIn-con user-reg-lastname">
						<input class="user-input " type="name" name="lastname" placeholder="lastname" required>
					</div>
					<div class="userIn-con user-reg-password">
						<input class="user-input " type="password" name="password" placeholder="password" required>
					</div>
					<div class="userIn-con user-reg-conpassword">
						<input class="user-input " type="password" name="confirm_password" placeholder="confirm password" required>
					</div>
					<div class="userIn-con user-reg-email">
						<input class="user-input" type="email" name="email" placeholder="sample@email.com" required>
					</div>
					<div class="userIn-con user-reg-btn">
						<button  class="btn-user-reg register-success" type="submit" name="register_submit">Register</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<?php  
	include 'error_message.php';
	include 'promotedvideo.php';
	include 'relatedmedia.php';
	include 'footer.php';
	?>

	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/js.js"></script>
	<script type="text/javascript" src="js/parallax.min.js"></script>

	<?php

if (isset($_POST['register_submit'])) {
	$username = $_POST['username'];
 	$firstname = $_POST['firstname'];
 	$lastname = $_POST['lastname'];
 	$password = sha1($_POST['password']);
 	$confirm_password = sha1($_POST['confirm_password']);
 	$email = $_POST['email'];
 	$image = $_POST['image'];

 	if ($password == $confirm_password) 
 	{
 		$password = $password;
 		$sql = "INSERT INTO users (username, password, firstname, lastname, email, role, images) VALUES ('$username', '$password', '$firstname', '$lastname', '$email', 'user','$image')";
 		mysqli_query($conn, $sql);
 ?>
		<script type="text/javascript">
			$(document).ready(function(){
				$('.error-message').show(300);
				$('.error-message').html('Registered Successfully.. Please proceed to login page');
			});
		</script>
		<?php 
		
		header('location: login_page.php');
		 ?>

<?php
 	}else{?>
		<script type="text/javascript">
			$(document).ready(function(){
				$('.error-message').show(300);
				$('.error-message').html('Password did not match..');
			});
		</script>
 		
<?php 		
 	}


}?>
</body>
</html>



