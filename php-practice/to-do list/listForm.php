<?php
	/*
		This will be where the to-do list interacts with the database.
		It will need to 
			1 - access the database
			2 - transpose into To-do list file
	*/
$servername = "localhost";
$username = "doomsday_toDo";
$password = "D0omsday!";
$dbname = "doomsday_formList";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT Numbers, Name, Due_Date, Complete_Date FROM formList";
$results = $conn->query($sql);