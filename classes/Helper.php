<?php 


/**
 * 
 */
class Helper extends Database
{

	public function DeleteAirlines($value)
	{
		$this->query("DELETE FROM airlines where id = :id");
		$this->bind(':id', $value);
		$this->execute();
	}
	public function UpdateAirlines($id,$name,$Location,$Description,$Motto)
	{
		$this->query("UPDATE  airlines
		 set Name = :name, Location = :loc, Description = :des, Motto = :mot, updated_at = now() where id = :id");
		$this->bind(':id', $id);
		$this->bind(':name', $name);
		$this->bind(':loc', $Location);
		$this->bind(':des', $Description);
		$this->bind(':mot', $Motto);
		$this->execute();
	}

	public function DeleteFlights($value)
	{
		$this->query("DELETE FROM flight_schedule where id = :id");
		$this->bind(':id', $value);
		$this->execute();
	}
	public function UpdateFlights($id,$Airline_id,$Departure,$Arrival,$Flight_destination,$Duration,$Seats)
	{
		$this->query("UPDATE  flight_schedule
		 set Airline_id = :airline_id, Departure = :dep, Arrival = :arr, Flight_destination = :des, Duration = :dur, Seats = :seats where id = :id");
		$this->bind(':id', $id);
		$this->bind(':Airline_id',$Airline_id);
		$this->bind(':Departure',$Departure);
		$this->bind(':Arrival',$Arrival);
		$this->bind(':Flight_destination',$Flight_destination);
		$this->bind(':Duration',$Duration);
		$this->bind(':Seats',$Seats);
		$this->execute();
	}
}