<?php

class Database{
	private $host = DB_HOST;
	private $user = DB_USER;
	private $pass = DB_PASS;
	private $dbname = DB_NAME;

	private $pdo;
	private $error;
	private $stmt;

	public function __construct(){
		// set DSN
		$dsn = 'mysql:host='.$this->host.';dbname='.$this->dbname;

		// set options
		$options = array(
			PDO::ATTR_PERSISTENT		  => true,
			PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    		PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    		PDO::ATTR_EMULATE_PREPARES   => false,
		);

		// create PDO instance
		try{
			//echo "you have not connected yet\n";
			$this->pdo = new PDO($dsn, $this->user, $this->pass, $options);
			//echo "you have connected!";
			//echo $this->pdo;
		} catch(PDOException $e){
			$this->error = $e->getMessage();
			echo $this->error;
			//throw new PDOException($e->getMessage(), (int)$e->getCode());
		}
	}

	public function query($query){
		// require 'config/config.php';

		$this->stmt = $this->pdo->prepare($query);
	}

	public function bind($param, $value, $type = null){
		if(is_null($type)){
			switch(true){
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
			}
		}
		$this->stmt->bindValue($param, $value, $type);
	}

	public function execute(){
		return $this->stmt->execute();
	}

	public function resultSet(){
		$this->execute();
		return $this->stmt->fetchAll(PDO::FETCH_OBJ);
	}

	public function single(){
		$this->execute();
		return $this->stmt->fetch(PDO::FETCH_OBJ);
	}
}