<!doctype html>
<html>
  <head>
		<title>No Soup for You!</title>
	</head>

	<body>
		<h1>Mmm...soups</h1>
		<?php // Script 7.2 - soups2.php
		/* This script creates and prints out an array. */

		// Create the array:
		$soups = array (
			'Monday' => 'Clam Chowder',
			'Tuesday' => 'White Chicken Chili',
			'Wednesday' => 'Vegetarian'
		);

		// Print the current number of elements in the array:
		print "<p>The soups array originally had " . count ($soups) . " elements.</p>";

		// Add three items to the array:
		$soups['Thursday'] = 'Chicken Noodle';
		$soups['Friday'] = 'Tomato';
		$soups['Saturday'] = 'Cream of Broccoli';

		// Print the number of elements in the array again:
		print "<p>After adding 3 more soups, the array now has " . count ($soups) . " elements.</p>";

		// Print the contents of the array:
		print_r ($soups);

		?>
	</body>
</html>
