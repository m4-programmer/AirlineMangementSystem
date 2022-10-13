<?php 

/**
 * 
 */

class User extends Database
{
	public function LoginUser($email,$pword){
		// check if email and password exist in Db
		$this->query('SELECT * FROM traveler_details where email = :email and password = :pword');
		$this->bind(':email',$email);
		$this->bind(':pword',$pword);
		$res = $this->fetchresult();
		if (count($res) > 0) { //1 if user is found and 0 if user is not found
			return true;
		}else{
			return false;
		}
	}
	// Generate user_id for each user
	public function userId($name,$dob){
        if(isset($_POST['signup'])){
			$fname = $_POST['fname'];
			$lname = $_POST['lname'];
			$name = $fname." ".$lname;
			$dob = $_POST['dob'];
        
        	$user_name = array_filter(explode(" ",strtoupper($name)));
        	$user_name = array_slice($user_name,0,2);
        	$user_dob = array_filter(explode("/",($dob)));
        	$user_dob = array_slice($user_dob,0,3);

        	$part1 = (!empty($user_name[0]))?substr($$user_name[0],0,1):"";
        	$part2 = (!empty($user_name[1]))?substr($user_name[1],0,2):"";
        	$part3 = (!empty($user_dob[0]))?substr($user_dob[0],0,4):"";
        	$part4 = (!empty($user_dob[2]))?substr($user_dob[2],0,2):"";

        	$userid = $part1. $part3. $part4. str_shuffle($part2);
		}
		return $userid;
    }
	public function register_step_one($a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k,$l,$m,$n,$o,$p,$q,$r,$img,$user)
	{
		$save = $this->
		query("INSERT into traveler_details
		 (id,User_id,Surname,Firstname,Middlename,Dateofbirth,Gender,Email,password,Phonenumber,User_img,Address,State,City,Country,Next_of_kin_name,Next_of_kin_state,Next_of_kin_no,Next_of_kin_email,Next_of_kin_city,Next_of_kin_country,created_at) 
		 values('',:user,:a,:b,:c,:d,:e,:f,:g,:h,:img,:i,:j,:k,:l,:m,:n,:o,:p,:q,:r,now())");
		$this->bind(':user',$user);
		$this->bind(':a',$a);
		$this->bind(':b',$b);
		$this->bind(':c',$c);
		$this->bind(':d',$d);
		$this->bind(':e',$e);
		$this->bind(':f',$f);
		$this->bind(':g',$g);
		$this->bind(':h',$h);
		$this->bind(':img',$img);
		$this->bind(':i',$i);
		$this->bind(':j',$j);
		$this->bind(':k',$k);
		$this->bind(':l',$l);
		$this->bind(':m',$m);
		$this->bind(':n',$n);
		$this->bind(':o',$o);
		$this->bind(':p',$p);
		$this->bind(':q',$q);
		$this->bind(':r',$r);
	

		$this->execute();
		// if registration is successful, note who was registered
		
		return true;
	}
	public function isEmailTaken($email)
	{
		$this->query('SELECT * FROM traveler_details where email = :email');
		$this->bind(':email',$email);
		$res = $this->fetchresult();
		if(count($res)>0){
			return true;
		}else{
			return false;
		}
	}

	public function isPhone_noTaken($Phonenumber)
	{
		$this->query('SELECT * FROM traveler_details where Phonenumber = :Phonenumber');
		$this->bind(':Phonenumber',$Phonenumber);
		$res = $this->fetchresult();
		if(count($res)>0){
			return true;
		}else{
			return false;
		}
	}
	public function isUser_loggedIn($email){
		if(!isset($email)){
			header('Location:../login.php');
		}
	}
	// Fetch Log in USer Details
	public function FetchUserDetails($email=null){
		
		//it fetch only the user's specified
		$this->query('SELECT * FROM traveler_details where Email = :email');
		$this->bind(':email',$email);
		return $this->fetchresult();
		
	}
	
		/*This fetches the informations of those that made bookings*/
	public function getFlightSchedules()
	{
		$this->query('SELECT * FROM `airlines` INNER JOIN flight_schedule on airlines.id = flight_schedule.Airline_id ');   

		$res = $this->fetchresult();
		return 	$res;
	}


	public function getSearchedFlightSchedules($location,$destination)
	{
		$this->query('SELECT * FROM `airlines` INNER JOIN flight_schedule on airlines.id = flight_schedule.Airline_id where Location = :location and Flight_destination=:destination');
		$this->bind(':location', $location);
		$this->bind(':destination', $destination);
		return $this->fetchresult();
		
	}
}
 ?>