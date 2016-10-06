<?php 
	/* this database needs to be connected to MySQL, there are going to be 16 tables that will then export to the validation-page as one single table that can filtered for specific information. 
	*/
	class Database {
		const USERNAME = 'root';
		const PASSWORD = '1234';

		public function query($query) {
			$mysqli = new mysqli("localhost", self::USERNAME, self::PASSWORD, "validation_data");
			$result = $mysqli->query($query);
			
			return $result;
		}
	}