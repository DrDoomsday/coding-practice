<?php
	require('listForm.php');
	if ($_POST['itemName'] != NULL && $_POST['dueDate'] != NULL) {
		$itemName = mysqli_escape_string($conn, $_POST['itemName']);
		$dueDate = mysqli_escape_string($conn, $_POST['dueDate']);
		$createItem = "INSERT INTO to_do (Name, Due_Date) VALUES ('$itemName', '$dueDate')";
		$conn->query($createItem);
		// header('Location: http://rdripley.com/to-do-list.php');
		header('Location: to-do-list.php');
	} else {
		// header('Location: http://rdripley.com/to-do-list.php');
		header('Location: to-do-list.php');
	}