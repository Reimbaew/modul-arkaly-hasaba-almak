<?php
	require_once 'conn.php';
	
	if(ISSET($_POST['save'])){
	
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$age = $_POST['age'];
	
		
		try{
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "INSERT INTO `user`(firstname, lastname, age)  VALUES ('$firstname', '$lastname', '$age')";
			$conn->exec($sql);
		}catch(PDOException $e){
			echo $e->getMessage();
		}
		
		$conn = null;
		
		header("location: index.php");
	
	}
?>
