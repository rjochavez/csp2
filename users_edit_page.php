<?php
session_start();
require 'connection.php';

if(isset($_REQUEST["edituserid"]))
{
	sleep(2);
	$editid = $_REQUEST["edituserid"];
	$sql = ("SELECT * FROM users WHERE id = $editid");
	$result = mysqli_query($conn, $sql);


		while ($row = mysqli_fetch_assoc($result)) {
				extract($row);
				$username = $row['username'];
				$firstname = $row['firstname'];
				$lastname = $row['lastname'];
				$email = $row['email'];
				$role = $row['role'];
				$image = $row['images'];
				$id = $row['id'];

		};

}

if(isset($_POST['edit-users-btn'])){
	$new_role = mysqli_real_escape_string($conn,$_POST['role']);
	$new_username = mysqli_real_escape_string($conn,$_POST['username']);
	$new_firstname = mysqli_real_escape_string($conn,$_POST['firstname']);
	$new_lastname = mysqli_real_escape_string($conn,$_POST['lastname']);
	$new_email = mysqli_real_escape_string($conn,$_POST['email']);

	$sql = "UPDATE users SET 
			username ='$new_username',
			firstname = '$new_firstname',	
			lastname = '$new_lastname',	
			email = '$new_email',
			role = '$new_role'
			WHERE id = '$id'";

	mysqli_query($conn,$sql);
	sleep(2);
	header('location: users.php');
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
	<title>ComEx Online - Admin User Management Page</title>
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
			<div class="register-title">ADMIN / EDIT USER's DETAILS</div>
			<div class="register-user-container">
				<form action="" method="POST">
					<div class="userIn-con user-reg-username">
						<?php echo "<img src=img/".$image.">"; ?>
					</div>
					<div class="userIn-con user-reg-username">
						<?php echo "<input class='user-input' type='name' name='role' placeholder='(User Type) $role' required>" ?>
					</div>
					<div class="userIn-con user-reg-username">
						<?php echo "<input class='user-input' type='name' name='username' placeholder='(Username) $username' required>" ?>
					</div>
					<div  class="userIn-con user-reg-firstname">
						<?php echo "<input class='user-input' type='name' name='firstname' placeholder='(Firstname) $firstname' required>" ?>
					</div>
					<div class="userIn-con user-reg-lastname">
						<?php echo "<input class='user-input' type='name' name='lastname' placeholder='(Lastname) $lastname' required>" ?>
					</div>
					<div class="userIn-con user-reg-email">
						<?php echo "<input class='user-input' type='name' name='email' placeholder='(Email) $email' required>" ?>
					</div>
					<div class="userIn-con user-reg-btn">
						<button  class="btn-user-reg edit-users-btn" type="submit" name="edit-users-btn">Update User Info</button>
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
	<script type="text/javascript" src="js/js.js"></script>
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/parallax.min.js"></script>

	<script type="text/javascript">
		$('.edit-users-btn').click(function(){
			$('.error-message').show(300);
			$('.error-message').html('Saving changes..');
		});
	</script>
</body>
</html>
