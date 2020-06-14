<?php

$api_url = 'https://bio.torre.co/api/bios/johnnam93';

// Read JSON file
$json_data = file_get_contents($api_url);

// Decode JSON data into PHP array
$user_data = json_decode($json_data);

// Cut long data into small & select only first 10 records
$user_data = array_slice($user_data, 0, 9);

// Print data if need to debug
//print_r($user_data);

// Traverse array and display user data
foreach ($user_data as $user) {
	echo "name: ".$user->employee_name;
	echo "<br />";
	echo "name: ".$user->employee_age;
	echo "<br /> <br />";
}

?>


