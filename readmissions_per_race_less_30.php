<?php

// Initialize values
$server = "127.0.0.1";
$username = "root";
$password = "piraka570";
$database = "diabetic_db";
$caucasian_less30 = 0;
$african_american_less30 = 0;
$unknown_less30 = 0;

// Establish connection
$connect = mysqli_connect($server, $username, $password, $database);

// Check connection
if($connect === false){
	echo "ERROR";
}

// Fetch all Caucasian (less 30 days) in table
$sql = "SELECT * FROM readmission WHERE race LIKE '%Caucasian%' AND readmitted = -30";

// Execute query
$exec = mysqli_query($connect, $sql);

// Count occurrences
$caucasian_less30 = mysqli_num_rows($exec);

// Fetch all AfricanAmerican (less 30 days) in table
$sql = "SELECT * FROM readmission WHERE race LIKE '%AfricanAmerican%' AND readmitted = -30";

// Execute query
$exec = mysqli_query($connect, $sql);

// Count occurrences
$african_american_less30 = mysqli_num_rows($exec);

// Fetch all unknown (less 30 days) in table
$sql = "SELECT * FROM readmission WHERE race LIKE ('%?%' OR '%Other%') AND readmitted = -30";

// Execute query
$exec = mysqli_query($connect, $sql);

// Count occurrences
$unknown_less30 = mysqli_num_rows($exec);

mysqli_close($connect);

?>