<?php

namespace App\Services;

use PDO;
use PDOException;

class DataBase {
	public $servername = "localhost";
	public $username = "disco-site";
	public $password = "disco-vinil";
	public $name = "disco";
	public function getConnection() {
		try {
			$conn = new PDO("mysql:host={$this->servername};dbname={$this->name}", $this->username, $this->password);
		} catch (PDOException $ex) {
			echo "Error: " . $ex->getMessage();
		}
		return $conn;
	}
}
