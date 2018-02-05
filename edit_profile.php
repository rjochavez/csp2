<?php  
session_start();
require 'connection.php';
$username = $_SESSION['username'];
$firstname = $_SESSION['firstname'];
$lastname = $_SESSION['lastname'];
$email = $_SESSION['email'];
$images = $_SESSION['images'];

if(isset($_POST['edit_profile'])){
	$new_firstname = mysqli_real_escape_string($conn,$_POST['firstname']);
	$new_lastname = mysqli_real_escape_string($conn,$_POST['lastname']);
	$new_password = mysqli_real_escape_string($conn,sha1($_POST['password']));
	$new_email = mysqli_real_escape_string($conn,$_POST['email']);

	$sql = "UPDATE users SET 
			firstname ='$new_firstname',
			lastname = '$new_lastname',	
			password = '$new_password',	
			email = '$new_email'
			WHERE username = '$username'";

	mysqli_query($conn,$sql);
	sleep(3);
	session_destroy();
	header('location: index.php');
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
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
	<title>ComEx Online - Edit Profile Page</title>
</head>

<body>


	<?php 
	include 'profile_nav.php';

	 ?>

	 <div class="register-overall-background">
		<div class="register-overall-container">
			<div class="register-side">
				<div class="register-side-bar"></div>
			</div>
			<div class="register-title"><i class='fa fa-user-plus' style='font-size: 1.2em;'></i>
			<?php if (($_SESSION['role'] == 'user')): ?>
				USER
			<?php endif ?>
			<?php if (($_SESSION['role'] == 'admin')): ?>
				ADMIN
			<?php endif ?>
			 / EDIT PROFILE</div>
			<div class="register-user-container">
				<form action="" method="POST">
					<div  class="userIn-con user-reg-firstname">
						<?php echo "<img src='img/$images'>"; ?>
					</div>
					<div  class="userIn-con user-reg-irstname">
						<?php echo "<input type='name' name='firstname' placeholder='(Firstname) $firstname'>" ?>
					</div>
					<div class="userIn-con user-reg-lastname">
						<?php echo "<input type='name' name='lastname' placeholder='(Lastname) $lastname'>" ?>
					</div>
					<div class="userIn-con user-reg-password">
						<?php echo "<input type='password' name='password' placeholder='new password'>" ?>
					</div>
					<div class="userIn-con user-reg-email">
						<?php echo "<input type='email' name='email' placeholder='(Email) $email'>" ?>
					</div>
					<div class="userIn-con user-reg-btn">
						<button  class="btn-user-reg edit-profile-btn" type="submit" name="edit_profile">Save Changes</button>
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

	<?php  
	echo "
		<script>
			$('.edit-profile-btn').click(function(event) {
				$('.error-message').show(300);
				$('.error-message').html('Saving changes.. You will be logged out shorty.. Please login again.');
		});
		</script>
	";
	?>



</body>
</html>