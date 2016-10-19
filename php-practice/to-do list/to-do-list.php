<?php 
require('listForm.php');

// top line is for rdripley.com website
// $sql = "SELECT Numbers, Name, Due_Date, Complete_Date FROM formList";
// this line is for localhost
$sql = "SELECT Numbers, Name, Due_Date, Complete_Date FROM to_do";
$results = $conn->query($sql);

$toDos = array();

while ($result = $results->fetch_assoc()) {
	array_push($toDos, $result);
}

?>
<head>
	<title>To Do List</title>
	<link rel="stylesheet" type="text/css" href="listStyles.css">
</head>
<body>
	<!-- first table will be the To-Do section -->
	<table>
		<tr>
			<th>Number</th>
			<th>Name of Item</th>
			<th>Due Date</th>
			<th>Completed Date</th>
			<th>Complete</th>
		</tr>
		<?php 
			foreach ($toDos as $toDo) { ?>
				<tr>
					<!-- Consequtive integer will start 1 and will iterate up as the forloop supplies the items -->
					<td><?php echo $toDo['Numbers'];?></td>
					<td><?php echo $toDo['Name'];?></td>
					<td><?php echo $toDo['Due_Date'];?></td>
					<!-- when the completed date is filled out item will move to completed category. Will need to be a button/form? -->
					<td><?php echo $toDo['Complete_Date'];?></td>
					<td>
						<form action="completeItem.php">
						<input type="button" value="Complete">
						</form>
					</td>
				</tr>
		<?php
			}
		?>
	</table>
	<br>
	<form action="createItem.php" method="post">
		Name of Item: <input type="text" name="itemName"><br>
		Due Date: <input type="text" name="dueDate"><br>
		<input type="submit" value="Add">
</body>