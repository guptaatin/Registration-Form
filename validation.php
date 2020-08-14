<?php

	session_start();
		
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
		$_SESSION['username'] = $name;
		header('location:home.php');
	}else{
		header('location:login.php');
	}

?>