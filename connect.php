<?php
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$number = $_POST['number'];

	
	$conn = new mysqli('localhost','root','','demo');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		if(!empty($_POST['firstName']) && !empty($lastName = $_POST['lastName']) && !empty($gender = $_POST['gender']) 
		&& !empty($email = $_POST['email']) && !empty($password = $_POST['password']) && !empty($number = $_POST['number'])){

		
		$result = $conn->query("INSERT INTO form (firstName, lastName, gender, email, password, number) values('$firstName','$lastName','$gender','$email','$password','$number')");
		echo "Registration successfully...";
	}
		else{
			echo "All fields are required to fill";
		}
	}
