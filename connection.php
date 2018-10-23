<?php

class Database {

	 public $conn;

	 public function __construct()
	 {

		$this->conn = mysqli_connect("localhost","root","","registered_vehicles");
		//$conn = mysqli_connect("localhost","root","","papisdesserts_db");

		if (!$this->conn) 
		 {	echo "Error in Connecting ".mysqli_connect_error(); }
	}

}

?>