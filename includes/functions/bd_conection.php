<?php  
	$conn = new mysqli('localhost', 'root', 'root', 'gdlwebcamp2018');
	if ($conn->connect_error) {
		echo $error -> $conn->connect_error;
	}
?>