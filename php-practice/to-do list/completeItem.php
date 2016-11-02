<?php
	require('listForm.php');
	// store # for toDo list item
	$itemNumber = $_POST['number'];
	var_dump($itemNumber);
	// Get the toDo list #
	$query = "SELECT * FROM to_do WHERE Numbers= $itemNumber";
	$results = $conn->query($query);
	$toDoList = $results->fetch_assoc();

	// Delete post from Database
	$query = "DELETE FROM to_do WHERE Numbers= $itemNumber";
	$conn->query($query);

	header("Location:http://localhost/to-do-list.php");