<?php 
require 'class_includer.php';

if (isset($_POST['signup'])) {
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$oname = $_POST['oname'];
	$email = $_POST['email'];
	$gender = $_POST['gender'];
	$dob = $_POST['dob'];
	$pword = $_POST['pword'];
	$cpword = $_POST['cpword'];
	$phone_no = $_POST['phone_no'];
	$address1 = $_POST['address1'];
	$state1 = $_POST['state1'];
	$city1 = $_POST['city1'];
	$country1 = $_POST['country1'];
	$kname = $_POST['kname'];
	$state2 = $_POST['state2'];
	$phone_no1 = $_POST['phone_no1'];
	$email1 = $_POST['email1'];
	$city2 = $_POST['city2'];
	$country2 = $_POST['country2'];
	$img = $_FILES['img'];
	$name = $fname." ".$lname;
	$err =" ";
	$isEmailTaken =$user->isEmailTaken($email);
	$isPhone_noTaken = $user->isPhone_noTaken($phone_no);
	$userid = $user->userId($name,$dob);
	
	//constrains or things to check


	

	// 4. upload the image path to our database

	// echo $_FILES['img']['type'];
	// if (type[1]!= 'jpeg'  or tyope[1]!=  'png') {
	// 	echo image must jpeg or png
	// }

	//1. check if the fields are empty
		if (empty($fname) or empty($lname) or empty($oname) ) {
			$err = "Please Fill in the needed details";
			return header("location: ../register.php?fname=$fname&lname=$lname&oname=$oname&email=$email&gender=$gender&dob=$dob&phone_no=$phone_no&address1=$address1&state1=$state1&city1=$city1&country1=$country1&kname=$kname&state2=$state2&phone_no1=$phone_no1&email1=$email1&city2=$city2&country2=$country2&err=$err");
		}
	//2. check if email is available
		elseif ($isEmailTaken == true) {
			$err = "Email has been taken";
			return header("location: ../register.php?fname=$fname&lname=$lname&oname=$oname&email=$email&gender=$gender&dob=$dob&phone_no=$phone_no&address1=$address1&state1=$state1&city1=$city1&country1=$country1&kname=$kname&state2=$state2&phone_no1=$phone_no1&email1=$email1&city2=$city2&country2=$country2&err=$err");
		}
	//3. verify that password lenght is Ok with our standard
		elseif (strlen($pword) < 5 ) {
			$err = "Password Lenght must be up to 5 characters";
			return header("location: ../register.php?fname=$fname&lname=$lname&oname=$oname&email=$email&gender=$gender&dob=$dob&phone_no=$phone_no&address1=$address1&state1=$state1&city1=$city1&country1=$country1&kname=$kname&state2=$state2&phone_no1=$phone_no1&email1=$email1&city2=$city2&country2=$country2&err=$err");
		}
	//4. Check if password matched confrim password
		elseif ($pword != $cpword ) {
			$err = "Passwords does not match";
			return header("location: ../register.php?fname=$fname&lname=$lname&oname=$oname&email=$email&gender=$gender&dob=$dob&phone_no=$phone_no&address1=$address1&state1=$state1&city1=$city1&country1=$country1&kname=$kname&state2=$state2&phone_no1=$phone_no1&email1=$email1&city2=$city2&country2=$country2&err=$err");
		}
	//5.Check if Phone number lenght >= 11;
		elseif (strlen($phone_no) < 5 ) {
			$err = "Password Lenght must be up to 5 characters";
			return header("location: ../register.php?fname=$fname&lname=$lname&oname=$oname&email=$email&gender=$gender&dob=$dob&phone_no=$phone_no&address1=$address1&state1=$state1&city1=$city1&country1=$country1&kname=$kname&state2=$state2&phone_no1=$phone_no1&email1=$email1&city2=$city2&country2=$country2&err=$err");
		}
	//6. Check if phone number has been taken
		elseif ($isPhone_noTaken == true ) {
			$err = "Phone number has been taken, Please use another number";
			return header("location: ../register.php?fname=$fname&lname=$lname&oname=$oname&email=$email&gender=$gender&dob=$dob&phone_no=$phone_no&address1=$address1&state1=$state1&city1=$city1&country1=$country1&kname=$kname&state2=$state2&phone_no1=$phone_no1&email1=$email1&city2=$city2&country2=$country2&err=$err");
		}
	//7. check if the address fields are empty
		elseif (empty($address1) or empty($state1) or empty($city1) or empty($country1)) {
			$err = "Please Fill in the needed address details";
			return header("location: ../register.php?fname=$fname&lname=$lname&oname=$oname&email=$email&gender=$gender&dob=$dob&phone_no=$phone_no&address1=$address1&state1=$state1&city1=$city1&country1=$country1&kname=$kname&state2=$state2&phone_no1=$phone_no1&email1=$email1&city2=$city2&country2=$country2&err=$err");
		}
	//8. check if the next of kin fields are empty
		elseif (empty($kname) or empty($phone_no1) or empty($email1)) {
			$err = "Please Fill in the needed next of kin details";
			return header("location: ../register.php?fname=$fname&lname=$lname&oname=$oname&email=$email&gender=$gender&dob=$dob&phone_no=$phone_no&address1=$address1&state1=$state1&city1=$city1&country1=$country1&kname=$kname&state2=$state2&phone_no1=$phone_no1&email1=$email1&city2=$city2&country2=$country2&err=$err");
		}
	//9. check if the password, date of birth and gender fields are empty
		elseif (empty($gender) or empty($dob)) {
			$err = "Please Fill in the gender or dob details";
			return header("location: ../register.php?fname=$fname&lname=$lname&oname=$oname&email=$email&gender=$gender&dob=$dob&phone_no=$phone_no&address1=$address1&state1=$state1&city1=$city1&country1=$country1&kname=$kname&state2=$state2&phone_no1=$phone_no1&email1=$email1&city2=$city2&country2=$country2&err=$err");
		}
		elseif (empty($pword)){
			$err = "Please Fill in the password details";
			return header("location: ../register.php?fname=$fname&lname=$lname&oname=$oname&email=$email&gender=$gender&dob=$dob&phone_no=$phone_no&address1=$address1&state1=$state1&city1=$city1&country1=$country1&kname=$kname&state2=$state2&phone_no1=$phone_no1&email1=$email1&city2=$city2&country2=$country2&err=$err");
		}
	// //10. check if user uploaded a picture
	// 	elseif (empty($img)){
	// 		$err = "Please Upload your recent picture";
	// 		return header("location: ../register.php?fname=$fname&lname=$lname&oname=$oname&email=$email&gender=$gender&dob=$dob&phone_no=$phone_no&address1=$address1&state1=$state1&city1=$city1&country1=$country1&kname=$kname&state2=$state2&phone_no1=$phone_no1&email1=$email1&city2=$city2&country2=$country2&err=$err");
	// 	}
		// other constrains, if available
		else{
			// 1. first, store imagename in a variable
			$imageName = $_FILES['img']['name'];
			// 2. pick out all the neccessary details from the image
			$tmpName = $_FILES['img']['tmp_name'];
			$filePath = 'uploads/'.$imageName;
			// 3. move the image to our server directory
			move_uploaded_file($tmpName, '../'.$filePath);
			// register the user
			$user->register_step_one($fname,$lname,$oname,$dob,$gender,$email,$pword,$phone_no,$address1,$state1,$city1,$country1,$kname,$state2,$phone_no1,$email1,$city2,$country2,$filePath,$userid);

			$_SESSION['email'] = $email;
			return header("location: ../login.php");
		}

}

 ?>
