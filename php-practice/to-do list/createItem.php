<?php
	require('listForm.php');
	$itemName = mysqli_escape_string($conn, $_POST['itemName']);
	$dueDate = mysqli_escape_string($conn, $_POST['dueDate']);
	$createItem = "INSERT INTO to_do (Name, Due_Date) VALUES ('$itemName', '$dueDate')";
	$conn->query($createItem);