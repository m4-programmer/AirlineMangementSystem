<?php 

/**
 * 
 */
class Admin extends Database
{
	
	// function __construct()
	// {
	// 	//here,if any method created is called or anything wriiten inside will execute first
	// 	// if () {
	// 	// 	# code...
	// 	// }

	// 	
	// }
		public function LoginAdmin($uname,$pword){
		// check if email and password exist in Db
		$this->query('SELECT * FROM admin where uname = :uname and pword = :pword');
		$this->bind(':uname',$uname);
		$this->bind(':pword',$pword);
		$res = $this->fetchresult();
		if (count($res) > 0) { //1 if user is found and 0 if user is not found
			return true;
		}else{
			return false;
		}
	}
	public function isLoggedIn($uname){
		if(!isset($uname)){
			header('Location:login.php');
		}
	}
	public function FetchUserDetails($uname=null){
		// if email is null fetch all the travelers in the system
		if (is_null($uname)) {
			 $this->query('SELECT * FROM traveler_details ');
			 return $this->fetchresult();
		}else{
		// //else fetch only the user's specified
		$this->query('SELECT * FROM admin where uname = :uname');
		$this->bind(':uname',$uname);
		return $this->fetchresult();
		}
	}
	public function addAirlines($name,$location,$description,$motto)
	{
		$add = $this->
		query("INSERT into airlines
		 (Id,Name,Location,Description,Motto,created_at) 
		 values('',:name,:loc,:des,:mot,now())");
		$this->bind(':name',$name);
		$this->bind(':loc',$location);
		$this->bind(':des',$description);
		$this->bind(':mot',$motto);

		$this->execute();
		// to insert airlines
		
		return true;
	}

	public function fetchAirlines($id=null)
	{
		if (is_null($id)) {
			$this->query('SELECT * FROM airlines');
			$res = $this->fetchresult();
			return 	$res;
		} else {
			$this->query('SELECT * FROM airlines where id = :id');
			$this->bind(':id',$id);
			$res = $this->fetchresult();
			return 	$res;
		}
		
		
	}

	public function makeFlightSchedule($Airline_id,$Departure,$Arrival,$Flight_destination,$Duration,$Seats)
	{
		$this->
		query("INSERT into flight_schedule
		 (Id,Airline_id,Departure,Arrival,Flight_destination,Duration,Seats) 
		 values('',:Airline_id,:Departure,:Arrival,:Flight_destination,:Duration,:Seats)");
		$this->bind(':Airline_id',$Airline_id);
		$this->bind(':Departure',$Departure);
		$this->bind(':Arrival',$Arrival);
		$this->bind(':Flight_destination',$Flight_destination);
		$this->bind(':Duration',$Duration);
		$this->bind(':Seats',$Seats);
		$this->execute();
		// to insert into make flight schedule table
		return true;
	}
	public function viewFlightSchedule()
	{
		$this->query('SELECT * FROM `airlines` INNER JOIN flight_schedule on airlines.id = flight_schedule.Airline_id');

		$res = $this->fetchresult();

		return 	$res;
	}
	// Added newly
	/*This fetches the informations of those that made bookings*/
	public function getBookings()
	{
		$this->query('SELECT * FROM `traveler_details` INNER JOIN bookings on traveler_details.id = bookings.User_id;');

		$res = $this->fetchresult();

		return 	$res;
	}
	// Fetch all the states
	public function fetchLocations()
	{
		$this->query('SELECT * FROM `location`');
		return $this->fetchresult();
	}
	
}
 ?>