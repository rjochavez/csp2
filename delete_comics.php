<?php

require 'connection.php';


if(isset($_REQUEST["deleteid"]))
{
	$deleteid = $_REQUEST["deleteid"];
	$sql = ("DELETE FROM comics WHERE id = $deleteid");
	$result = mysqli_query($conn, $sql);

	sleep(2);
	header('location: profile.php');
}