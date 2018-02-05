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
	<link rel="shortcut icon" type="image/x-icon" href="favicon.png" />
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
	<title>ComEx Online</title>
</head>
<body>
	

	<?php  
	include 'error_message.php';
	include 'headernav.php';
	include 'main_slider.php';
	include 'newrelease.php';
	include 'bestseller.php';
	include 'headerimage.php';
	include 'promotedvideo.php';
	include 'relatedmedia.php';
	include 'footer.php';
	?>

	

	
	<script type="text/javascript" src="js/parallax.min.js"></script>
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/js.js"></script>

		<script type="text/javascript">
			$('.fa-bars').click(function(event) {
					$('.comics-navbar-container').toggle(300);
				});
		</script>
<!-- 	<script type="text/javascript">
		$(document).ready(function(){
		setInterval(function(){
			$('.brand-nav-ad').show();
			$('.brand-nav-ad').css('display', 'grid');
			$('.')
		}, 4000);
		});

		$(document).ready(function(){
		setInterval(function(){
			$('.ad-image').attr('src', 'img/ad1.png');
		}, 10000);
		});

		$(document).ready(function(){
		setInterval(function(){
			$('.ad-image').attr('src', 'img/ad2.png');
		}, 13000);
		});

		$(document).ready(function(){
		setInterval(function(){
			$('.brand-nav-ad').hide();
		}, 18000);
		});
	</script> -->
</body>
</html>

