<?php

class DataBase{
private $sname= "localhost";
private $uname= "c31kincsesdbu";
private $password = "gyevFtJ9TX@E";
private $db_name = "c31kincsesdb";

private $conn;

function __construct(){
	// Create connection
	$conn = new mysqli($this->sname, $this->uname, $this->password, $this->db_name);

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	$this->conn = $conn;
}

public function dbselect($sql){

	if($result = $this->conn->query($sql)){
	if ($result->num_rows > 0){
		return $result;
	}
	else{
		return NULL;
	}
	}
	elseif($this->conn->error){
		die("SQL error: ". $this->conn->error);
	}
}

public function dbinsert($sql){
	if ($this->conn->query($sql) === TRUE) {} 
	else {
		echo "Error: " . $sql . "<br>" . $this->conn->error;
	}
		
}
}