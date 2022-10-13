<?php
require 'class_includer.php';


if (isset($_POST['change'])) {
	$oldpword = $_POST['opwrd'];
	$newpword = $_POST['npwrd'];
	$cpword = $_POST['cpwrd'];
	$err =" ";

	if (empty($opwrd) or empty($npwrd) or empty($cpwrd) )
	 {
			$err = "Please Fill in the needed details";
			return header("location: ../users/change_password.php?opwrd=$opwrd&npwrd=$npwrd&cpwrd=$cpwrd&err=$err");
	}
	elseif($opwrd != $loggedUser[0]['password'])   {
			$err = "Input Correct Password";
			return header("location: ../users/change_password.php?opwrd=$opwrd&npwrd=$npwrd&cpwrd=$cpwrd&err=$err");
		}

	elseif ($npwrd != $cpwrd ) {
			$err = "Passwords does not match";
			return header("location: ../users/change_password.php?opwrd=$opwrd&npwrd=$npwrd&cpwrd=$cpwrd&err=$err");
		}
	}
	else{
			return header("location: ../users/change_password.php?msg='Please fill in the required information'");
		}


	
?>