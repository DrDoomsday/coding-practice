<?php
	/*
		This will be where the to-do list interacts with the database.
		It will need to 
			1 - access the database
			2 - transpose into To-do list file
	*/

		class Database {
		const USERNAME = 'root';
		const PASSWORD = '1234';

		public function query($query) {
			$mysqli = new mysqli("localhost", self::USERNAME, self::PASSWORD, "to_do");
			$result = $mysqli->query($query);
			
			return $result;
		}
	}