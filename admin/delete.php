<?php
	include('../connect.php');

	$id = $_GET['id'];

	$deletequery = "delete from form where id=$id";

	$query = mysqli_query($con, $deletequery);

	if($deletequery) {
		header('Location: index.php');
		die();
	}
	else {
		echo "Error";
	}
?>