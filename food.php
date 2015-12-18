<?php

error_reporting(E_ALL);
ini_set('display_error',1);

$datafoodxml = simplexml_load_file('food.xml');

include 'connect.php'; 

foreach ($datafoodxml->food as $content) {
	$code = $content->code;
	$name = $content->name;
	$price = $content->price;
	$description = $content->description;
	$calories = $content->calories;
	
	mysqli_query($conn,
					"INSERT INTO 
						food
					VALUES
						(
							'',
							'$code',
							'$name',
							'$price',
							'$description',
							'$calories'
							
						)
					") 
					or die(mysql_error());
}
?>