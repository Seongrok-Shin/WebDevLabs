<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en" >
<head>
<title>Using file functions</title>
</head>

<body>
	<h1>Web Development - Lab05</h1>
	<?php
		require_once('../../conf/settings.php');

		$conn = @mysqli_connect($host,
			$user,
			$pswd,
			$dbnm
		);

		if (!$conn) {
			echo "<p>Database connection failure</p>";
		} else {
			$query = "SELECT * FROM cars";
			$result = mysqli_query($conn, $query);
			echo "test";
			if(!$result) {
				echo "<p>Something is wrong with ",	$query, "</p>";
			} else {
				echo "test";
				echo "<table border=\"1\">";
				echo "<tr>\n"
					 ."<th scope=\"col\">ID</th>\n"
				     ."<th scope=\"col\">Make</th>\n"
					 ."<th scope=\"col\">Model</th>\n"
					 ."<th scope=\"col\">Price</th>\n"
					 ."</tr>\n";
	
				while ($row = mysqli_fetch_assoc($result)){
					echo "<tr>";
					echo "<td>",$row["car_id"],"</td>";
					echo "<td>",$row["make"],"</td>";
					echo "<td>",$row["model"],"</td>";
					echo "<td>",$row["price"],"</td>";
					echo "</tr>";
			}
			echo "</table>";
			mysqli_free_result($result);
		}
		
			mysqli_close($conn);
		}
	?>
</body>
</html>