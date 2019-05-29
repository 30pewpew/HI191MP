<?php

// Initialize values
$server = "127.0.0.1";
$username = "root";
$password = "password";
$database = "diabetic_db";
$zero = 0;
$ten = 0;
$twenty = 0;
$thirty = 0;
$forty = 0;
$fifty = 0;
$sixty = 0;
$seventy = 0;
$eighty = 0;
$ninety = 0;

// Establish connection
$connect = mysqli_connect($server, $username, $password, $database);

// Check connection
if($connect === false){
	echo "ERROR";
}

// Fetch 0 - 10 age group
$sql = "SELECT * FROM readmission WHERE age LIKE '%[0-10)%' AND readmitted != 0";

// Execute query
$exec = mysqli_query($connect, $sql);

// Count occurrences
$zero = mysqli_num_rows($exec);

// Fetch 10 - 20 age group
$sql = "SELECT * FROM readmission WHERE age LIKE '%[10-20)%' AND readmitted != 0";

// Execute query
$exec = mysqli_query($connect, $sql);

// Count occurrences
$ten = mysqli_num_rows($exec);

// Fetch 20 - 30 age group
$sql = "SELECT * FROM readmission WHERE age LIKE '%[20-30)%' AND readmitted != 0";

// Execute query
$exec = mysqli_query($connect, $sql);

// Count occurrences
$twenty = mysqli_num_rows($exec);

// Fetch 30 - 40 age group
$sql = "SELECT * FROM readmission WHERE age LIKE '%[30-40)%' AND readmitted != 0";

// Execute query
$exec = mysqli_query($connect, $sql);

// Count occurrences
$thirty = mysqli_num_rows($exec);

// Fetch 40 - 50 age group
$sql = "SELECT * FROM readmission WHERE age LIKE '%[40-50)%' AND readmitted != 0";

// Execute query
$exec = mysqli_query($connect, $sql);

// Count occurrences
$forty = mysqli_num_rows($exec);

// Fetch 50 - 60 age group
$sql = "SELECT * FROM readmission WHERE age LIKE '%[50-60)%' AND readmitted != 0";

// Execute query
$exec = mysqli_query($connect, $sql);

// Count occurrences
$fifty = mysqli_num_rows($exec);

// Fetch 60 - 70 age group
$sql = "SELECT * FROM readmission WHERE age LIKE '%[60-70)%' AND readmitted != 0";

// Execute query
$exec = mysqli_query($connect, $sql);

// Count occurrences
$sixty = mysqli_num_rows($exec);

// Fetch 70 - 80 age group
$sql = "SELECT * FROM readmission WHERE age LIKE '%[70-80)%' AND readmitted != 0";

// Execute query
$exec = mysqli_query($connect, $sql);

// Count occurrences
$seventy = mysqli_num_rows($exec);

// Fetch 80 - 90 age group
$sql = "SELECT * FROM readmission WHERE age LIKE '%[80-90)%' AND readmitted != 0";

// Execute query
$exec = mysqli_query($connect, $sql);

// Count occurrences
$eighty = mysqli_num_rows($exec);

// Fetch 90 - 100 age group
$sql = "SELECT * FROM readmission WHERE age LIKE '%[90-100)%' AND readmitted != 0";

// Execute query
$exec = mysqli_query($connect, $sql);

// Count occurrences
$ninety = mysqli_num_rows($exec);

mysqli_close($connect);

?>
