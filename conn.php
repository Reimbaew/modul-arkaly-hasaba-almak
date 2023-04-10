<?php
	$conn=new PDO( 'mysql:host=localhost;dbname=db_pdo_store', 'root', '');
	if(!$conn){
		die("Error: Failed to connect to database!");
	}
?>
