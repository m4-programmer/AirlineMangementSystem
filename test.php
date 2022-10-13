<?php
// if (isset($_POST['test'])) {
// 	// echo $_POST['date'];
// 	extract($_POST);
	
// 	echo $date;
// 	$b = mktime('1212123232');
// 	echo $b;
// }
			$fname = "chukwudi";
			$lname = "sylvia";
			$name = $fname." ".$lname;
			$dob =  "10/11/1999";

function userId($name,$dob){
        // if(isset($_POST['signup'])){
        	$user_id = array_filter(explode(" ",strtoupper($name)));
        	$user_id = array_slice($user_id,0,2);
        	$user_i = array_filter(explode("/",($dob)));
        	$user_i = array_slice($user_i,0,3);

        	$part1 = (!empty($user_name[0]))?substr($$user_name[0],0,1):"";
        	$part2 = (!empty($user_name[1]))?substr($user_name[1],0,2):"";
        	$part3 = (!empty($user_dob[0]))?substr($user_dob[0],0,2):"";
        	$part4 = (!empty($user_dob[2]))?substr($user_dob[2],0,4):"";


        	$userid = $part1. $part3. $part4. str_shuffle($part2);
        print_r($userid);
}
userId($name,$dob);

echo 'ray';
  ?><!-- 
  <form action="" method="post">
  	<input type="date" name="date" >
  	<button name="test">test</button>
  </form> -->