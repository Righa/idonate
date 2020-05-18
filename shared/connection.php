<?php 

$conn = mysqli_connect("localhost", "root", "", "idonate");
	if ($conn -> connect_error) {
		die("No connection: ". $conn-> connect_error);
	}

 ?>