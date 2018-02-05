<?php
require 'connection.php';
session_start();

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

 		sleep(2);
 		header('location: login_page.php');

 	}else{
 		echo "<script> alert('username password did not match')</script>";
 		header('location: register_page.php');
 	}


}

