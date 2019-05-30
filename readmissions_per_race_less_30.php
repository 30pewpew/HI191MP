<?php

// Initialize values
$server = "127.0.0.1";
$username = "root";
$password = "";
$database = "diabetic_db";
$caucasian_less30 = 0;
$african_american_less30 = 0;
$unknown_less30 = 0;
$asian_less30 = 0;
$hispanic_less30 = 0;
$other_less30 = 0;

// Establish connection
$connect = mysqli_connect($server, $username, $password, $database);

// Check connection
if($connect === false){
	echo "ERROR";
}

// Fetch all Caucasian (less 30 days) in table
$sql = "SELECT * FROM readmission WHERE race = 'Caucasian' AND readmitted = -30";

// Execute query
$exec = mysqli_query($connect, $sql);

// Count occurrences
$caucasian_less30 = mysqli_num_rows($exec);

// Fetch all Caucasian (less 30 days) in table
$sql = "SELECT * FROM readmission WHERE race = 'Asian' AND readmitted = -30";

// Execute query
$exec = mysqli_query($connect, $sql);

// Count occurrences
$asian_less30 = mysqli_num_rows($exec);

// Fetch all Caucasian (less 30 days) in table
$sql = "SELECT * FROM readmission WHERE race = 'Hispanic' AND readmitted = -30";

// Execute query
$exec = mysqli_query($connect, $sql);

// Count occurrences
$hispanic_less30 = mysqli_num_rows($exec);

// Fetch all AfricanAmerican (less 30 days) in table
$sql = "SELECT * FROM readmission WHERE race LIKE '%AfricanAmerican%' AND readmitted = -30";

// Execute query
$exec = mysqli_query($connect, $sql);

// Count occurrences
$african_american_less30 = mysqli_num_rows($exec);

// Fetch all unknown (less 30 days) in table
$sql = "SELECT * FROM readmission WHERE race LIKE ('%?%') AND readmitted = -30";

// Execute query
$exec = mysqli_query($connect, $sql);

// Count occurrences
$unknown_less30 = mysqli_num_rows($exec);

// Fetch all other (less 30 days) in table
$sql = "SELECT * FROM readmission WHERE race LIKE ('%Other%') AND readmitted = -30";

// Execute query
$exec = mysqli_query($connect, $sql);

// Count occurrences
$other_less30 = mysqli_num_rows($exec);

mysqli_close($connect);

?>
