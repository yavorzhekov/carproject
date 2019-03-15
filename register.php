<?php
	include 'functions.php';
	include 'db.php';
	//Registration Business Logic
	$firstName = saveFields($_POST['fname']);
	$lastName = saveFields($_POST['lname']);	
	$email = saveFields($_POST['email']);	
	$password = saveFields($_POST['pass']);	
	$address = saveFields($_POST['address']);	
	$phone = saveFields($_POST['phone']);

	$sql = "INSERT INTO users(user_fname, user_lname, user_email, user_password, user_address, user_phone) VALUES ('".$firstName."', '".$lastName."', '".$email."', '".md5($password)."', '".$address."', '".$phone."')";
	if(ifExists($email)) {
		$query = mysqli_query($linkDB, $sql);
		session_start();
		$_SESSION['fname'] = $firstName;
		#$_SESSION['e_mail'] = $email;
		header('Location: index.php?mess=Successfull registration!');
	}
	else {
		header('Location: index.php?mess=This user is already Registered');
	}

?>