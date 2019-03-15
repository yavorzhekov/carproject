<?php
	function saveFields($field){
		return htmlspecialchars(strip_tags($field));
	}
	function ifExists($e_mail) {
		include 'db.php';
		$sql = "SELECT * FROM users WHERE user_email = '".$e_mail."'";
		$result = mysqli_query($linkDB, $sql);
		$numRows = mysqli_num_rows($result);
		 if( $numRows == 0) {
		 	return true;
		 }
		 else {
		 	return false;
		 }
	}
	function checkCar($manifac, $model, $fuel, $engineVol, $VIN) {
		include 'db.php';
		$sql = "SELECT * FROM newcar WHERE car_manif='$manifact' AND car_model='$model' AND car_fuel='$fuel'  
		AND car_engine_vol='$engineVol' AND car_VIN='$VIN'";
		$result=myqsqli_query($linkDB, $sql);
		$numRows = mysqli_num_rows($result);
		 if( $numRows == 0) {
		 	return true;
		 }
		 else {
		 	return false;
		 }

	}	
	function allCars($id=null) {
		include 'db.php';
		if($id != null) {
			$sql = "SELECT * FROM newcar WHERE car_id = $id";
		}
		else {
			$sql = "SELECT * FROM newcar";
		}
          $query = mysqli_query($linkDB, $sql);
          $row = null;
          while($res = mysqli_fetch_assoc($query)) {
             $row [] = $res;
          }
          return $row;
	}
   function allNews($limit=null){
   	include 'db.php';
   	if($limit != null) {
   		$sql = "SELECT* FROM news LIMIT $limit";
   	}
   	else {
   		$sql = "SELECT* FROM news";
   	} 
   	$query=mysqli_query($linkDB,$sql);
   	$row=null;
   	while($res = mysqli_fetch_assoc($query)) {
             $row [] = $res;
          }
          return $row;
   }
   function showUser(){
   	include 'db.php';
   	$user=$_SESSION['fname'];
    $sql="SELECT * FROM users WHERE user_fname='".$user."'";
    $row=null;
    $query=mysqli_query($linkDB, $sql);
    while($res = mysqli_fetch_assoc($query)) {
             $row [] = $res;
          }
          return $row;

   	
   	
   }
   function existOrder($carId, $userId) {
   	include 'db.php';
   	//TODO: 
		$sql = "SELECT * FROM orders WHERE order_nc_id = $carId AND order_u_id = $userId ";
		$result=mysqli_query($linkDB, $sql);
		$numRows = mysqli_num_rows($result);
		 if( $numRows == 0) {
		 	return false;
		 }
		 else {
		 	return true;
		 }
   }
   function allOrders() {
	include 'db.php';
	  	$sql = "SELECT orders.order_id, newcar.car_manif, newcar.car_pic, newcar.car_model, newcar.car_class,newcar.car_fuel,newcar.car_price,users.user_fname, users.user_lname, users.user_email,users.user_phone,users.user_address, orders.order_date 
	  		FROM orders JOIN newcar ON orders.order_nc_id = newcar.car_id
		  	JOIN users ON orders.order_u_id = users.user_id ORDER BY orders.order_id";				  	
	  	$query = mysqli_query($linkDB, $sql);
	  	$row = null;
		while($res = mysqli_fetch_assoc($query)) {
		 $row [] = $res;
		}
		return $row;
   }
?>