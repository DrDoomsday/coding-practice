<?php
	/*
		This will be where the to-do list interacts with the database.
		It will need to 
			1 - access the database
			2 - transpose into To-do list file
	*/
// this is for rdripley.com database
// $servername = "localhost";
// $username = "doomsday_toDo";
// $password = "D0omsday!";
// $dbname = "doomsday_formList";

// this is for localhost
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
// top line is for rdripley.com website
// $sql = "SELECT Numbers, Name, Due_Date, Complete_Date FROM formList";
// this line is for localhost
$sql = "SELECT Numbers, Name, Due_Date, Complete_Date FROM to_do";
$results = $conn->query($sql);