<?php
$databaseHost 		= "localhost";
$databaseName 		= "database1";
$databaseUsername 	= "root";
$databasePassword 	= "";

try {
	// to access to database
	// what is your database system mysql sql server postgres, mangodb
	$dbConn = new PDO("mysql:host={$databaseHost};dbname={$databaseName}",$databaseUsername,$databasePassword);
	// set the PDO error mode to exception
	$dbConn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	
	//echo "Connected successfully";
	$query = "Select * from employee";
	
	//$results = $dbConn->query($query);
	
	//print_r($results);
	
	/*foreach($dbConn->query($query) as $row) {
		print_r($row);	
	}*/
	
	
	
		
} catch(PDOException $e) {
	//echo $e->getMessage();
	echo "Connection failed: " . $e->getMessage();
}

?>