<?php

	session_start();
	
	header('location:login.php');
	
	$con = mysqli_connect('localhost:3307', 'root');
	
	if($con){
		echo"Connection Established!";
	}else{
		echo"Connection not Established!";
	}
	
	mysqli_select_db($con, 'sessionpractical');
	
	$name = $_POST['user'];
	$pass = $_POST['password'];
	
	$query = "SELECT * FROM signin WHERE name = '$name' && password = '$pass'";
	
	$result = mysqli_query($con, $query);
	
	$num = mysqli_num_rows($result);
	
	if($num == 1){
		echo"Already Registered !";
	}else{
		$q = "INSERT INTO signin (name, password) VALUES ('$name', '$pass')";
		mysqli_query($con, $q);
		echo"Successfully Registered !";
	}

?>