<?php

require 'class_includer.php';

if(isset($_POST['signin'])){

	$email = $_POST['email'];
	$pword = $_POST['pword'];

	//1. Email and Password must not be Empty
	if(empty($email) or empty($pword)){
		$err = "Please! fill in the details";
		return header("Location: ../login.php?email=$email&err=$err");
	}
	//2. email and password must exist
	else{
		$check_user =$user->LoginUser($email,$pword);
		if ($check_user == true) {
			if (isset($_SESSION['email'])) {//if the session isset before the login it should be unset
				unset($_SESSION['email']);
			}
			$_SESSION['email'] = $email;
			return header("Location: ../users/index.php");
		}else{

		$err = "Incorrect Email or Password";
		return header("Location: ../login.php?email=$email&err=$err");
		}
	}

	
}
// if user do not click the login button to login, do the following below
else{

		$err = "Please! fill in the details";
		return header("Location: ../login.php?&err=$err");
}

?>