<?php

// Initialize values
$server = "127.0.0.1";
$username = "root";
$password = "password";
$database = "diabetic_db";
$readmitted_no = 0;
$readmitted_less30 = 0;
$readmitted_more30 = 0;

// Establish connection
$connect = mysqli_connect($server, $username, $password, $database);

// Check connection
if($connect === false){
	echo "ERROR";
}

// Fetch all "no readmissions" in table
$sql = "SELECT * FROM readmission WHERE readmitted = 0";

// Execute query
$exec = mysqli_query($connect, $sql);

// Count occurrences
$readmitted_no = mysqli_num_rows($exec);

// Fetch all "readmissions greater than 30 days" in table
$sql = "SELECT * FROM readmission WHERE readmitted = 30";

// Execute query
$exec = mysqli_query($connect, $sql);

// Count occurrences
$readmitted_more30 = mysqli_num_rows($exec);

// Fetch all "readmissions less than 30 days" in table
$sql = "SELECT * FROM readmission WHERE readmitted = -30";

// Execute query
$exec = mysqli_query($connect, $sql);

// Count occurrences
$readmitted_less30 = mysqli_num_rows($exec);

mysqli_close($connect);

?>