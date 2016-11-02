<?php 
require('listForm.php');

// top line is for rdripley.com website
// $sql = "SELECT Numbers, Name, Due_Date, Complete_Date FROM formList";
// this line is for localhost
$sql = "SELECT * FROM to_do ORDER BY Numbers ASC";
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
			<th>#</th>
			<th>Name of Item</th>
			<th>Due Date</th>
			<th>Complete</th>
		</tr>
		<?php
			$number = 1;
			foreach ($toDos as $toDo) { ?>
				<tr>
					<!-- Consequtive integer will start 1 and will iterate up as the forloop supplies the items -->
					<td><?php echo $number++ ?></td>
					<td><?php echo $toDo['Name'];?></td>
					<td><?php echo $toDo['Due_Date'];?></td>
					<td>
						<form action="completeItem.php" method="post">
						<input type="hidden" name="number" value="<?= $toDo['Numbers']; ?>">
							<button type="submit">
								Complete
							</button>
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