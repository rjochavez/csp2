<?php


session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/style.css">
	<title>ComEx Online - Profile Page</title>
</head>
<body>
	<?php include 'error_message.php'; ?>
	<?php include 'profile_nav.php'; ?>
	



	<?php  
	include 'items.php';
	include 'promotedvideo.php';
	include 'relatedmedia.php';
	include 'footer.php';
	?>



	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/js.js"></script>
	<script type="text/javascript" src="js/parallax.min.js"></script>
</body>
</html>