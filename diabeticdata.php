<?php

// Open data set file
if (($file_pointer = fopen("../diabetic_data.csv", "r")) !== FALSE){

	// Each line in the CSV file is converted into one array, which is stored in $data
	while (($data = fgetcsv($file_pointer, 0, ",")) !== FALSE){
		
		// Each instance of $data is stored into this multidimensional array
		$multi_array[] = $data;		

	}
	
	// Close data set file
	fclose($file_pointer);

}
// End result is a multidimensional array with 101766 rows and 50 columns. Jesus. Probably best to split the data set into manageable chunks.

// Game plan: get columns 3 (race), 5 (age), 10 (time in hospital), and 50 (readmitted). Work from there.


// Change index numbers to check different values. First is row, second is column.
//echo $multi_array[0][0];

// Initialize tally counts
$tally_NO = 0;
$tally_less30 = 0;
$tally_more30 = 0;

// Loop tallying all readmission entries
for($num = 1; $num < 20; $num++){
	if($multi_array[$num][3] == "NO"){

		$tally_NO++;

	}

	if($multi_array[$num][3] == ">30"){

		$tally_more30++;

	}

	if($multi_array[$num][3] == "<30"){

		$tally_less30++;

	}
}

// Output tally for "NO" (correct answer is 10)
//echo $tally_NO;

?>