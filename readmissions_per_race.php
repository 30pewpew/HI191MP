<?php

// Initialize values
$server = "127.0.0.1";
$username = "root";
$password = "";
$database = "diabetic_db";
$caucasian = 0;
$african_american = 0;
$asian = 0;
$hispanic = 0;
$other = 0;
$unknown = 0;

// Establish connection
$connect = mysqli_connect($server, $username, $password, $database);

// Check connection
if($connect === false){
	echo "ERROR";
}

// Fetch all Caucasian in table
$sql = "SELECT * FROM readmission WHERE race = 'Caucasian' AND readmitted != 0";

// Execute query
$exec = mysqli_query($connect, $sql);

// Count occurrences
$caucasian = mysqli_num_rows($exec);

// Fetch all AfricanAmerican in table
$sql = "SELECT * FROM readmission WHERE race LIKE '%AfricanAmerican%' AND readmitted != 0";

// Execute query
$exec = mysqli_query($connect, $sql);

// Count occurrences
$african_american = mysqli_num_rows($exec);

// Fetch all asian in table
$sql = "SELECT * FROM readmission WHERE race = 'Asian' AND readmitted != 0";

// Execute query
$exec = mysqli_query($connect, $sql);

// Count occurrences
$asian = mysqli_num_rows($exec);

// Fetch all hispanic in table
$sql = "SELECT * FROM readmission WHERE race LIKE ('%Hispanic%') AND readmitted != 0";

// Execute query
$exec = mysqli_query($connect, $sql);

// Count occurrences
$hispanic = mysqli_num_rows($exec);

// Fetch all other in table
$sql = "SELECT * FROM readmission WHERE race LIKE ('%Other%') AND readmitted != 0";

// Execute query
$exec = mysqli_query($connect, $sql);

// Count occurrences
$other = mysqli_num_rows($exec);

// Fetch all other in table
$sql = "SELECT * FROM readmission WHERE race LIKE ('%?%') AND readmitted != 0";

// Execute query
$exec = mysqli_query($connect, $sql);

// Count occurrences
$unknown = mysqli_num_rows($exec);

mysqli_close($connect);

?>