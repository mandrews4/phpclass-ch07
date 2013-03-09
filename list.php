<!doctype html>
<html>
  <head>
		<title>A simple array</title>
	</head>

	<body>
		<?php // list.php
			/* This script receives a string in $_POST['words']. It then turns it into an array,
			 * sorts the array alphabetically, and reprints it.
		     */

			// Turn the incoming string into an array:
			$words_array = explode(' ' , $_POST['words']);
			
			if (is_array($words_array) && !empty($words_array)) {
				/* If the array is indeed an array and is not empty, sort it, then display its
				 * individual elements using a foreach loop
				 */
				sort($words_array);
				print "<p>An alphabetized version of your list is: <br />";
				foreach ($words_array as $words) {
					print("$words<br />");
				}
				print("</p>");
			}
		?>
	</body>
</html>
