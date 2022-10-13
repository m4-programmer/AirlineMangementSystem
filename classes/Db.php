<?php

class Database{
	private $host = 'localhost';
	private $username = 'root';
	private $password = '';
	private $dbname = 'airlines_system';

	private $dbh;
	private $error;
	private $stmt;

	public function __construct(){
		//set DSN
		$dsn = 'mysql:host='. $this->host. ';dbname='. $this->dbname;
		//set options
		$options = array(
			PDO::ATTR_PERSISTENT => true,
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
		);
		//create new PDO
		try{
			$this->dbh = new PDO($dsn, $this->username, $this->password, $options);
		}catch(PDOEception $e){
			$this->error = $e->getMessage();
		}
	}

	public function query($query)
	{
		$this->stmt = $this->dbh->prepare($query);
	}
	public function bind($param,$value,$type = null)//we bind wen we want to INSERT or UPDATE
	{
		if (is_null($type)) {
			switch (true) {
				case is_int($value):
					$type = PDO::PARAM_INT;
					break;
				case is_bool($value):
					$type = PDO::PARAM_BOOL;
					break;
				case is_null($value):
					$type = PDO::PARAM_NULL;
					break;
				default:
					$type = PDO::PARAM_STR;
					break;
			}
		}
		$this->stmt->bindValue($param,$value,$type);
	}

	public function execute()
	{
		return $this->stmt->execute();
	}
	public function fetchresult()
	{
		$this->execute();
		return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
	}
}

?>