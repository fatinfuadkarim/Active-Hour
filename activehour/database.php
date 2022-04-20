<?php
	$servername = "localhost";
	$username = "root";
	$password = "";

	//create connection
	$conn = mysqli_connect($servername, $username, $password);

	//create database in localhost
	$sql = "CREATE DATABASE activehour";

	if(mysqli_query($conn, $sql))
	{
		echo "Database Created Successfully!";
	}
	else
	{
		echo "Error to Create Database: " . mysqli_error($conn);
	}

	mysqli_close($conn);
?>