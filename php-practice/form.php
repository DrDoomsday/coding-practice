<?php
	/*
		This will be where the to-do list interacts with the database.
		It will need to 
			1 - access the database
			2 - transpose into To-do list file
	*/
$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "to_do";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT Numbers, Name, Due_Date, Complete_Date FROM to_do";
$results = $conn->query($sql);
var_dump($results);