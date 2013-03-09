<!doctype html>
<html>
  <head>
		<title>Multi-dimensional array</title>
	</head>

	<body>
		<?php

		// Create a multi-dimensional array:
		$semester = array (
			"John Smith" => array(90, 87, 52, 95),
			"Jane Doe" => array(57, 63, 95, 73),
			"Jim Jones" => array(87, 75, 90, 88)
		);

		if (is_array($semester) && !empty($semester)) {

			print("<p>The following students were in the class this semester:<br /><br />");
			// Display the names of the students in the class
			foreach (array_keys($semester) as $student) {
				print("$student<br />");
			}
			print("</p>");

			// Display the names of the students in the class and their marks
			printf("<p>And their marks for the semester are:<br /><br />");
			foreach ($semester as $student => $marks) {
				print("$student: <b>" . implode(", ", $marks) . "</b><br />");
			}
		} else {
			// If the semester array is either not an array or an empty array, indicate that there
			// are no students in the class
			print("<p>There are no students in the class this semester.");
		}

		print("</p>");

		?>
	</body>
</html>
