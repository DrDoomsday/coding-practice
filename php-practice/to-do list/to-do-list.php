<?php 
require('listForm.php');

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
				</tr>
		<?php
			}
		?>
	</table>
	<!-- second table will be the completed section that will be hideable. Items will be supplied by first table -->
	<table>
	</table>
</body>