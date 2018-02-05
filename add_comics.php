<?php  
session_start();
require 'connection.php';

if (isset($_POST['add_comics'])) {
	$new_name = $_POST['name'];
	$new_author = $_POST['author'];
	$new_description = $_POST['description'];
	$new_price = $_POST['price'];
	$new_image = $_POST['image'];


	$sql = "INSERT INTO comics (name, price, description, author, images) VALUES ('$new_name', $new_price, '$new_description', '$new_author', '$new_image')";
	mysqli_query($conn, $sql);
	sleep(2);
	header('location: profile.php');
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
	<title></title>
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
			<div class="register-title"><i class='fa fa-file' style='font-size: 1em;'></i> ADMIN / ADD COMICS</div>
			<div class="register-user-container">
				<form action="" method="POST">
					<div class="userIn-con user-reg-username">
						<input class="user-input" type="text" name="image" placeholder="source folder and name of image file" required>
					</div>
					<div class="userIn-con user-reg-username">
						<input class="user-input" type="text" name="name" placeholder="title of comics" required>
					</div>
					<div  class="userIn-con user-reg-firstname">
						<input class="user-input" type="text" name="author" placeholder="author" required>
					</div>
					<div class="userIn-con user-reg-lastname">
						<input class="user-input" type="text" name="description" placeholder="description">
					</div>
					<div class="userIn-con user-reg-password">
						<input class="user-input" type="number" name="price" placeholder="price" required>
					</div>
					<div class="userIn-con user-reg-btn">
						<button  class="btn-user-reg add-to-comics-btn" type="submit" name="add_comics">Add to Comics</button>
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
		echo "
			<script>
				$('.add-to-comics-btn').click(function(){
					$('.error-message').show(300);
					$('.error-message').html('Adding item to Database.. Please wait..');
				});
			</script>
		";

	?>

</body>
</html>
