<?php

// Initialize values
$server = "127.0.0.1";
$username = "root";
$password = "";
$database = "diabetic_db";
$less_week = 0;
$week_more = 0;
$two_weeks = 0;

// Establish connection
$connect = mysqli_connect($server, $username, $password, $database);

// Check connection
if($connect === false){
	echo "ERROR";
}

// Fetch all readmissions 6 days or less in table
$sql = "SELECT * FROM readmission WHERE time_in_hospital <= 6 AND readmitted != 0";

// Execute query
$exec = mysqli_query($connect, $sql);

// Count occurrences
$less_week = mysqli_num_rows($exec);

// Fetch all readmissions 7 to 13 days in table
$sql = "SELECT * FROM readmission WHERE time_in_hospital >= 7 AND time_in_hospital <= 13 AND readmitted != 0";

// Execute query
$exec = mysqli_query($connect, $sql);

// Count occurrences
$week_more = mysqli_num_rows($exec);

// Fetch all readmissions 14 days in table
$sql = "SELECT * FROM readmission WHERE time_in_hospital = 14 AND readmitted != 0";

// Execute query
$exec = mysqli_query($connect, $sql);

// Count occurrences
$two_weeks = mysqli_num_rows($exec);

mysqli_close($connect);

?>