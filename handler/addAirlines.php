<?php

require 'class_includer.php';

	//1. handles creation of new Airlines 
	if (isset($_GET['name']) && $_GET['name'] == 'airlines') {
	

		if (isset($_POST['add'])) {
			$name = $_POST['name'];
			$loc = $_POST['location'];
			$des = $_POST['description'];
			$mot = $_POST['motto'];

		$admin->addAirlines($name,$loc,$des,$mot);
		return header("location: ../admin/airlines.php?msg=airline successfully added");
		}
	}


	// Handles creation of new flight schedule
		if (isset($_GET['name']) && $_GET['name'] == 'flights') {
		extract($_POST);
		print_r($_POST);
	
			if (isset($_POST['add'])) {
			$airline;
			// echo strtotime(date('Y M d')).'<br>';
			 $departure = $depart_date." ".$depart_time;
			 $arrival = $arrival_date." ".$arrival_time;
			$Destination;
			$duration = 30;
			$seats;
			

			$insert = $admin->makeFlightSchedule($airline,strtotime($departure),strtotime($arrival),$Destination,$duration,$seats);
		return header("location: ../admin/make_flight.php?msg=airline schedule successfully added");
	}

	}


?>