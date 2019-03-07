<?php

include_once("config.php");

$id = $_GET["id"];
//echo $id;

if(isset($id) && is_numeric($id)) {
	try {
		
		//$query = "DELETE FROM employee WHERE id = " . $id;
		//$result = $dbConn->query($query);
		
		$sql = "DELETE FROM employee WHERE id = :id";
		$query = $dbConn->prepare($sql);
		$query->execute(array(':id'=>$id));
		
		header("Location:index.php");
		
	} catch (PDOException $e) {
		echo "Your failed message: " . $e->getMessage();
	}
}

?>