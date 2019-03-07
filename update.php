<?php

include_once("config.php");

if(isset($_POST['Submit'])) {
	
	$id = $_POST["id"];
	$first_name = $_POST["first_name"];
	$last_name = $_POST["last_name"];
	$job_title = $_POST["job_title"];
	$salary = $_POST["salary"];
	$notes = $_POST["notes"];
	
	/*$query = "INSERT INTO employee(first_name,last_name,job_title,salary,notes) 
	VALUES (" . $first_name . "," . $last_name . "," . $job_title . "," . $salary . "," . $notes . ")";*/
	/*$query = "INSERT INTO employee(first_name,last_name,job_title,salary,notes) 
	VALUES (" . $first_name . "," . $last_name . "," . $job_title . "," . $salary . "," . $notes . ")";*/
	//$result = $dbConn->query($query);
	
	//$dbConn->exec($query);
	
	try {
		$sql = "UPDATE employee SET first_name =:first_name , last_name =:last_name , job_title =:job_title , salary =:salary , notes =:notes WHERE id=:id";
		
		$query = $dbConn->prepare($sql);
		$query->bindparam(':first_name',$first_name);
		$query->bindparam(':last_name',$last_name);
		$query->bindparam(':job_title',$job_title);
		$query->bindparam(':salary',$salary);
		$query->bindparam(':notes',$notes);
		$query->bindparam(':id',$id);
		$query->execute();		
		//echo "Data is stored";
		
		header("Location:index.php");
		
	} catch (PDOException $e) {
		echo "Your failed message: " . $e->getMessage();	
	}	

	//echo $first_name.$last_name.$job_title.$salary.$notes;

}

?>