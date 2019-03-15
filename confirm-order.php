<?php 
	include 'db.php';
	include 'functions.php';
	$userId = (int)$_GET['userId'];
	$carId = (int)$_GET['carId'];
	echo "<h1>User ID: $userId AND Car ID: $carId </h1>";
	if(existOrder($carId, $userId)) {
		header("Location: cars.php?buy=This car is already bought!");		
	}
	else {
		$sql = "INSERT INTO orders(order_nc_id, order_u_id) VALUES (".$carId.", ".$userId.")";
		$query = mysqli_query($linkDB, $sql);
		header("Location: buy.php");
	}
 ?>