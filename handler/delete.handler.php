<?php
require '../classes/Db.php';
require '../classes/Helper.php';
$helper = new Helper;
if (isset($_GET['name']) and $_GET['name'] == 'delete_airlines') {
	$helper->DeleteAirlines($_GET['id']);
	header("location: ../admin/airlines.php?msg=Airline Deleted Successfully");
} else {
	# code...
}

 ?>