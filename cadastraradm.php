<?php

$DB_servername = "localhost";
$DB_username = "disco-site";
$DB_password = "disco-vinil";
$DB_name = "disco";
try {
	$conn = new PDO("mysql:host=$DB_servername;dbname=$DB_name", $DB_username, $DB_password);
	$conn->beginTransaction();

	$senha = password_hash("admin", PASSWORD_DEFAULT);
	$conn->prepare("INSERT into administrador (nome,senha) values ('admin','$senha')")
		->execute();
	$conn->commit();
} catch (PDOException $ex) {
	echo "Error: " . $ex->getMessage();
	$conn = null;
}
