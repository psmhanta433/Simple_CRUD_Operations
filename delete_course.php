<?php
							
	define("DB_HOST", "localhost");
	define("DB_USER", "root");
	define("DB_PASSWORD", "");
	define("DB_DATABASE", "demo");
	
	$id=$_GET['id'];
							
	$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
							
	$sql="delete from course where id=$id";

	$result=mysqli_query($conn,$sql);
	
	header("index.php");
?>
						  