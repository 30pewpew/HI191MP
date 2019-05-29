<?php

// Initialize values
$server = "127.0.0.1";
$username = "root";
$password = "";
$database = "diabetic_db";
$caucasian = 0;
$african_american = 0;
$unknown = 0;

// Establish connection
$connect = mysqli_connect($server, $username, $password, $database);

// Check connection
if($connect === false){
	echo "ERROR";
}

// Fetch all Caucasian in table
$sql = "SELECT * FROM race WHERE race LIKE '%Caucasian%'";

// Execute query
$exec = mysqli_query($connect, $sql);

// Count occurrences
$caucasian = mysqli_num_rows($exec);

// Fetch all AfricanAmerican in table
$sql = "SELECT * FROM race WHERE race LIKE '%African American%'";

// Execute query
$exec = mysqli_query($connect, $sql);

// Count occurrences
$african_american = mysqli_num_rows($exec);

// Fetch all AfricanAmerican in table
$sql = "SELECT * FROM race WHERE race LIKE '%?%'";

// Execute query
$exec = mysqli_query($connect, $sql);

// Count occurrences
$unknown = mysqli_num_rows($exec);

mysqli_close($connect);

?>