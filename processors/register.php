<?php

register();

function register(){
	require '../config.php';
	if(isset($_POST['fname'])
		&&isset($_POST['lname'])
		&&isset($_POST['grade'])
		&&isset($_POST['email'])
		&&isset($_POST['username'])
		&&isset($_POST['valid'])
		&&isset($_POST['password'])){
		$fname = $_POST['fname'];
		$spec = "---";
		$lname = $_POST['lname'];
		$grade = $_POST['grade'];
		$email = $_POST['email'];
		$username = $_POST['username'];
		$valid = $_POST['valid'];
		$password = $_POST['password'];
		$mobile = "---";
		$address = "---";
		$gender = "Male";
		$status = "Single";
		$religion = "---";
		$year = "---";
		$school = "---";

		$available = checkEmailAvailability($email);

		if($available){
			$sql = "INSERT INTO users (u_fname, u_spec , u_lname, u_grade, u_email, u_username, u_valid, u_password, u_mobile, u_address, u_gender, u_status, u_religion, u_year, u_school, u_role) VALUES 
			('".$fname."', '".$spec."', '".$lname."' , '".$grade."', '".$email."', 
			'".$username."','".$valid."','".$password."','".$mobile."', '".$address."' ,'".$gender."',
			'".$status."','".$religion."','".$year."','".$school."','user')";

			if($conn->query($sql)){
				session_start();
				session_destroy();
				header('Location: ../controller.php?page=login');
			}else{
				echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn	);
			}
		}else{
			session_start();
			$_SESSION['err_fname'] = $fname;
			$_SESSION['err_lname'] = $lname;
			$_SESSION['err_grade'] = $grade;
			$_SESSION['err_email'] = $email;
			$_SESSION['err_username'] = $username;
			$_SESSION['err_password'] = $password;
			$_SESSION['err_valid'] = $valid;
			header('Location: ../controller.php?page=register&error');
			echo "string1";
		}
	}else{
		header('Location: ../controller.php?page=home');
		echo "string2";
	}$conn->close();
}

function checkEmailAvailability($email) {
	require '../config.php';
	$ava = False;
	$sql = "SELECT * FROM users WHERE u_email = '".$email."'";
	$result = $conn->query($sql);
	if ($result->num_rows == 1) {
		$ava = False;
	}else{
		$ava = True;
	}
	return $ava;
}



