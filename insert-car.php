<?php
	include 'db.php';
	include 'functions.php';

	$manifact = saveFields($_POST['car_manif']);
	$model = saveFields($_POST['car_model']);
	$pic = saveFields($_POST['car_pic']);
	$fuel = saveFields($_POST['car_fuel']);
	$engineVol = saveFields($_POST['engine_vol']);
	$VIN = saveFields($_POST['car_VIN']);
	$gearBox = saveFields($_POST['car_gearbox']);
	$carConsumpt = saveFields($_POST['car_consumpt']);
	$passCapacity = saveFields($_POST['pass_cap']);
	$price = saveFields($_POST['car_price']);
	$carClass = saveFields($_POST['car_class']);
	$carFeatures = saveFields($_POST['car_feat']);
	$carMileage = saveFields($_POST['car_mill']);
	$carDoors = saveFields($_POST['car_doors']);
	$maxLuggage = saveFields($_POST['car_luggage']);
	$carTires = saveFields($_POST['car_tires']);
	$sql = "INSERT INTO newcar (car_manif, car_model, car_pic, car_fuel, car_engine_vol, car_VIN, car_gearbox, fuel_consumpt,  car_pass_cap, car_price, car_class, car_features, car_mileage, car_doors, car_max_luggage, car_tires) VALUES ('$manifact', '$model', '$pic','$fuel', $engineVol ,'$VIN', '$gearBox', '$carConsumpt', $passCapacity, $price,'$carClass', '$carFeatures', $carMileage, $carDoors, $maxLuggage, '$carTires')";
	
	$query = mysqli_query($linkDB, $sql);
	/*if (mysqli_query($linkDB, $sql)) {
    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . mysqli_error($linkDB);
	}*/
	header('location: cars.php?msg=New record created successfully');
?>