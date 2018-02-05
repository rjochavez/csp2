<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/style.css">
	<title></title>
</head>
<body>
	

	<div class="brand-nav-container">
		<div class="brand-nav-logo">
			<a href="index.php"><img src="img/logo.png" alt=""></a>
		</div>
		<div class="mobile-collapse-bar">
			<p><i class="fa fa-bars"></i></p>
			<p><a href="login_page.php"></a></p>
			<p><a href="logout_page.php">LOG-OUT <i class="fa fa-sign-out"></i></a></p>
		</div>
		<div class="brand-nav-socsign">
			<div class="brand-socsign-icons">
				<p><i class="fa fa-facebook-square"></i></p>
				<p><i class="fa fa-twitter-square"></i></p>
				<p><i class="fa fa-youtube-play"></i></p>
			</div>
			<p class="com comCard"><i class="fa fa-cc-mastercard"></i> ComEx Mastercard®</p>
			<p class="com comInsider"><a href="register_page.php"></a></p>
			<p class="com comSign"><a class="logout-btn" href="logout_page.php">LOG-OUT <i class="fa fa-sign-out"></i></a></p>
		</div>
		<div class="brand-nav-navbar">
			<p><a href="">LATEST NEWS</a></p>
			<p><a href="">COMICS</a></p>
			<p><a href="">MOVIES</a></p>
			<p><a href="">VIDEOS</a></p>
			<p><a href="">GAMES</a></p>
			<p><a href="">TV</a></p>
			<p><a href="">CHARACTERS</a></p>
			<p><a href="">SHOP</a></p>
			<p><a href=""><i class="fa fa-search"></i></a></p>
		</div>
	</div>

	<div class="comics-navbar-container profile-names">
		<p><a href="profile.php">WELCOME</a></p>
		<p><a href="profile.php"><i class="fa fa-home" style="font-size: 1.3em;"></i> DASHBOARD</a></p>
		<p class="profile-firstname"><a href="edit_profile.php"><i class="fa fa-user-circle-o" style="color:##000; font-size: 1.2em;"></i><?php echo " 	".$_SESSION['firstname'];?></a></p>
		<p <?php if (($_SESSION['role'] == 'admin')): ?>
			style="background: rgba(45,45,45,1);
		<?php endif ?>"><a href="profile.php"<?php if (($_SESSION['role'] == 'admin')): ?>
			style="color: #fff;"
		<?php endif ?>>
		<?php if (($_SESSION['role'] == 'admin')): ?>
			<i class="fa fa-unlock" style= "font-size: 1.2em;"></i>
		<?php endif ?>
		<?php if (($_SESSION['role'] == 'user')): ?>
			<i class="fa fa-lock" style="color:##000; font-size: 1.2em;"></i>
		<?php endif ?>
		<?php echo " ".$_SESSION['role'];?></a></p>
		<p><a href="edit_profile.php"><i class="fa fa-user-plus" style="color:##000; font-size: 1.2em;"></i> EDIT PROFILE</a></p>
		<?php if (($_SESSION['role'] == 'user')): ?>
			<?php echo "
		<p><a id='view-cart' href='profile.php'><i class='fa fa-shopping-cart' style='color:##000; font-size: 1.2em;'></i> VIEW CART</a></p>
		<p><a id='view-cart' href='profile.php'><i class='fa fa-mail-forward' style='color:##000; font-size: 1.2em;'></i> CHECK OUT</a></p>
			" ?>
		<?php endif ?>
		<?php if (($_SESSION['role'] == 'admin')): ?>
			<?php echo "
		<p><a href='profile.php'><i class='fa fa-edit' style='font-size: 1.2em;'></i> EDIT ITEMS</a></p>
		<p><a href='add_comics.php'><i class='fa fa-file' style='font-size: 1em;'></i> ADD ITEMS</a></p>
		<p><a href='profile.php'><i class='fa fa-trash' style=' font-size: 1.2em;'></i> DELETE ITEMS</a></p>
		<p><a href='users.php'><i class='fa fa-github' style=' font-size: 1.2em;'></i> USERS</a></p>
			" ?>
		<?php endif ?>
		
	</div>
	

	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/js.js"></script>

	<script type="text/javascript">
		
	
	</script>

		<?php  
		echo "
			<script>
				$('.logout-btn').click(function(){
					$('.error-message').show(300);
					$('.error-message').html('Logging Out..');
				});
				$('.fa-bars').click(function(event) {
					$('.comics-navbar-container').toggle(300);
				});
			</script>
		";

		?>


</body>
</html>