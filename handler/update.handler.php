<?php 

require '../classes/Db.php';
require '../classes/Helper.php';
$helper = new Helper;
	if (isset($_GET['name']) and $_GET['name'] == 'airlines') {
		if (isset($_POST['update'])) {
			extract($_POST);
			$id = $_GET['id'];
			$helper->UpdateAirlines($id,$Airline,$Location,$Description,$Motto);
			return header('location: ../admin/airlines.php?msg=airline updated successfully');
		}
	}

	if (isset($_GET['name']) and $_GET['name'] == 'flights') {
		if (isset($_POST['update'])) {
			extract($_POST);
			$id = $_GET['id'];
			$helper->UpdateFlights($id,$Airline_id,$Departure,$Arrival,$Flight_destination,$Duration,$Seats);
			return header('location: ../admin/airlines.php?msg=Flight Schedule updated successfully');
		}
	}


 ?>