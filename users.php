<?php  
session_start();
require 'connection.php';


?>

<?php  
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

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
	<title>ComEx Online - Admin User Management Page</title>
</head>

<body>

	<?php 
		include 'profile_nav.php';
	 ?>


<div class="product-overall-container" data-parallax="scroll" data-image-src="img/bg2.jpg">
	<div class="product-product-side">
		<div class="product-side-bar"></div>
	</div>
	<div class="product-product-title"><i class='fa fa-github' style=' font-size: 1.2em;'></i> ADMIN / USER MANAGEMENT PAGE</div>
	<div class="product-product-release">

<?php  
		while ($row = mysqli_fetch_assoc($result)) {
				extract($row);
				$user_username = $row['username'];
				$user_fname = $row['firstname'];
				$user_lname = $row['lastname'];
				$user_email = $row['email'];
				$user_role = $row['role'];
				$user_image = $row['images'];
				$user_id = $row['id'];

		echo "
				<div class='product-items-container'>
					<div class='new release-comic1 product-image'>";?>
					<?php echo	"<img src='img/".$user_image."'alt=''>"?>
		<?php
			echo "</div>
					<div class='comic-title product-title'>
						<p class='product-comic-title'>Username : $user_username</p>
						<p>Firstname : $user_fname</p>
						<p>Lastname : $user_lname</p>	
						<p>Role : $user_role</p>	
						<p>Email : $user_email</p>	
					</div>";
		

					echo "<a href='users_edit_page.php?edituserid=$user_id'><button class='edit-item-btn edit-users-btn' name='edit_user'type='submit'><i class='fa fa-edit'></i> Edit User Details</button></a>";
					echo "<a href='delete_user.php?deleteuserid=$user_id'><button class='delete-btn' name='delete_item' type='submit'><i class='fa fa-trash'></i> Delete User</button></a>";
		echo "</div>";
	};
?>

</div>

<div class="product-footer">
		<div class="product-footer-show">SHOW MORE</div>
		<div class="product-footer-con"></div>
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
			$('.error-message').html('Forwarding details..');
		});
		$('.delete-btn').click(function(){
			$('.error-message').show(300);
			$('.error-message').html('Deleting user from database..');
		});
	</script>
</body>
</html>