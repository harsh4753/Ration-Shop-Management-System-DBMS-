<?php

$conn = "";

try {
	$servername = "localhost:3306";
	$dbname = "DBMS";
	$username = "root";
	$password = "";

	$conn = new PDO(
		"mysql:host=$servername; dbname=DBMS",
		$username, $password
	);
	
$conn->setAttribute(PDO::ATTR_ERRMODE,
					PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}

?>
