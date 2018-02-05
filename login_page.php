<?php session_start();
require 'connection.php';

if (isset($_POST['login_submit'])) {
	$username = $_POST['username'];
	$password = sha1($_POST['password']);

	$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
	$result = mysqli_query($conn, $sql);
	
	if (mysqli_num_rows($result) > 0)
	{
		while ($row = mysqli_fetch_assoc($result)) {
			extract($row);
			$_SESSION['username'] = $username;
			$_SESSION['lastname'] = $lastname;
			$_SESSION['firstname'] = $firstname;
			$_SESSION['email'] = $email;
			$_SESSION['role'] = $role;
			$_SESSION['id'] = $id;
			$_SESSION['images'] = $images;

			sleep(2);
			header('location: profile.php');
		}
	}

	else
	{
		sleep(2);
		?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/style.css">
	<script type="text/javascript" src="js/js.js"></script>
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/parallax.js"></script>
	<title>ComEx Online - Login Page</title>
</head>
<body>
		<script>
			$(window).ready(function(event) {
				$('.error-message').show(300);
				$('.error-message').html('Invalid Credentials.. Please Login again..');
			});
		</script>
<body>
<?php
	}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/style.css">
	<script type="text/javascript" src="js/js.js"></script>
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/parallax.js"></script>
	<title>ComEx Online - Login Page</title>
</head>
<body>






	<?php 
	include 'headernav.php';
	?>
	



	
	<div class="login-overall-background"	>
		<div class="login-overall-container">
			<div class="login-side">
				<div class="login-side-bar"></div>
			</div>
			<div class="login-title"><i class="fa fa-sign-in"></i> LOGIN / FOR EXISTING USERS</div>
			<div class="login-user-container">
				<form action="" method="POST">
					<div class="logIn-con user-login-username">
						<input class="user-input" type="name" name="username" placeholder="username" required>
					</div>
					<div class="logIn-con user-login-password">
						<input class="user-input " type="password" name="password" placeholder="password" required>
					</div>
					<div class="logIn-con user-login-btn">
						<button  class="btn-login-login" type="submit" name="login_submit">login</button>
					</div>
					<div class="forgot-pass">
						<a href="">forgot your password ?</a>
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



	
		<?php echo "
		<script>
			$('.btn-login-login').click(function(event) {
				$('.error-message').show(300);
				$('.error-message').html('Validating Login.. Please wait...');
			});
		</script>

	" ?>

</body>
</html>

