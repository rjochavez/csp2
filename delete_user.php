<?php

require 'connection.php';


if(isset($_REQUEST["deleteuserid"]))
{
	sleep(2);
	$deleteid = $_REQUEST["deleteuserid"];
	$sql = ("DELETE FROM users WHERE id = $deleteid");
	$result = mysqli_query($conn, $sql);

	sleep(2);
	header('location: users.php');
}