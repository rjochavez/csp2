<?php
session_start();
require 'connection.php';

if(isset($_REQUEST["editid"]))
{
	sleep(2);
	$editid = $_REQUEST["editid"];
	$sql = ("SELECT * FROM comics WHERE id = $editid");
	$result = mysqli_query($conn, $sql);


		while ($row = mysqli_fetch_assoc($result)) {
				extract($row);
				$name = $row['name'];
				$price = $row['price'];
				$description = $row['description'];
				$author = $row['author'];
				$id = $row['id'];
				$image = $row['images'];

		};
}


if(isset($_POST['edit-items-btn'])){
	$new_name = mysqli_real_escape_string($conn,$_POST['name']);
	$new_author = mysqli_real_escape_string($conn,$_POST['author']);
	$new_description = mysqli_real_escape_string($conn,$_POST['description']);
	$new_price = mysqli_real_escape_string($conn,$_POST['price']);

	$sql = "UPDATE comics SET 
			name ='$new_name',
			price = '$new_price',	
			description = '$new_description',	
			author = '$new_author'
			WHERE id = '$id'";

	mysqli_query($conn,$sql);
	sleep(1.5);
	header('location: profile.php');
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
			<div class="register-title"><i class='fa fa-edit' style='font-size: 1.2em;'></i> ADMIN / EDIT COMIC's DETAILS</div>
			<div class="register-user-container">
				<form action="" method="POST">
					<div class="userIn-con user-reg-username">
						 <?php echo  "<img src='".$image."''>"?>
					</div>
					<div class="userIn-con user-reg-username">
						<?php echo "<input class='user-input' type='name' name='name' placeholder='(Title) $name' required>" ?>
					</div>
					<div  class="userIn-con user-reg-firstname">
						<?php echo "<input class='user-input' type='name' name='author' placeholder='(Author) $author' required>" ?>
					</div>
					<div class="userIn-con user-reg-lastname">
						<?php echo "<input class='user-input' type='name' name='description' placeholder='(Description) $description' required>" ?>
					</div>
					<div class="userIn-con user-reg-email">
						<?php echo "<input class='user-input' type='name' name='price' placeholder='(Price) $price' required>" ?>
					</div>
					<div class="userIn-con user-reg-btn">
						<button  class="btn-user-reg edit-comitems-btn" type="submit" name="edit-items-btn">Update Comics</button>
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

	<?php echo "
		<script>
			$('.edit-comitems-btn').click(function(event) {
				$('.error-message').show(300);
				$('.error-message').html('Saving changes.. Please wait...');
		});
		</script>

	" ?>




</body>
</html>
