
<?php 
session_start();

	include("connection.php");
	include("functions.php");

	
	
	//SIRKARLO
	
	$sql = "SELECT Q1, Q2, Q3, Q4, Q5, Q6, comment FROM mr_nabablit_results";
	 if ($result = $con->query($sql)) {
		echo "<table style='margin:0 auto;border:10px solid brown;background-color:khaki;font-family:consolas;font-size:20px;'><p style='border:4px solid black;text-align:center;background-color:maroon;font-family:consolas;color:white;font-size:40px;'>MR.KARLO E. NABABLIT</p><tr ><th style='border:10px solid brown;background-color:brown;color:white;font-size:20px;'>[Statement_1]</th><th style='border:10px solid brown;background-color:brown;color:white;font-size:20px;''>[Statement_2]</th><th style='border:10px solid brown;background-color:brown;color:white;font-size:20px;'>[Statement_3]</th><th style='border:10px solid brown;background-color:brown;color:white;font-size:20px;'>[Statement_4]</th><th style='border:10px solid brown;background-color:brown;color:white;font-size:20px;'>[Statement_5]</th><th style='border:10px solid brown;background-color:brown;color:white;font-size:20px;'>[Statement_6]</th><th style='border:10px solid brown;background-color:brown;color:white;font-size:20px;'>[Comment]</th>";
		// output data of each row
		while($row = $result->fetch_assoc()) {
			echo"<tr style='text-align:center;font-family:consolas;font-size:20px;'><td style='border:3px solid maroon;'>".$row["Q1"]."</td>","<td style='border:3px solid maroon;'>".$row["Q2"]."</td><td style='border:3px solid maroon;'>".$row["Q3"]."</td><td style='border:3px solid maroon;'>".$row["Q4"]."</td><td style='border:3px solid maroon;'>".$row["Q5"]."</td><td style='border:3px solid maroon;'>".$row["Q6"]."</td><td style='border:3px solid maroon;'>".$row["comment"]."</td></tr>";
		}
		
		echo "</table>";
		
	
	} else {
		echo "0 results";
	}
	
	//SIR MARK
	
	$sql = "SELECT Q1, Q2, Q3, Q4, Q5, Q6, comment FROM mr_nolledo_results";
	 if ($result = $con->query($sql)) {
		echo "<table style='margin:0 auto;border:10px solid brown;background-color:khaki;font-family:consolas;font-size:20px;'><p style='border:4px solid black;text-align:center;background-color:maroon;font-family:consolas;color:white;font-size:40px;'> MR. MARK NOLLEDO</p><tr ><th style='border:10px solid brown;background-color:brown;color:white;font-size:20px;'>[Statement_1]</th><th style='border:10px solid brown;background-color:brown;color:white;font-size:20px;''>[Statement_2]</th><th style='border:10px solid brown;background-color:brown;color:white;font-size:20px;'>[Statement_3]</th><th style='border:10px solid brown;background-color:brown;color:white;font-size:20px;'>[Statement_4]</th><th style='border:10px solid brown;background-color:brown;color:white;font-size:20px;'>[Statement_5]</th><th style='border:10px solid brown;background-color:brown;color:white;font-size:20px;'>[Statement_6]</th><th style='border:10px solid brown;background-color:brown;color:white;font-size:20px;'>[Comment]</th>";
		// output data of each row
		while($row = $result->fetch_assoc()) {
			echo"<tr style='text-align:center;font-family:consolas;font-size:20px;'><td style='border:3px solid maroon;'>".$row["Q1"]."</td>","<td style='border:3px solid maroon;'>".$row["Q2"]."</td><td style='border:3px solid maroon;'>".$row["Q3"]."</td><td style='border:3px solid maroon;'>".$row["Q4"]."</td><td style='border:3px solid maroon;'>".$row["Q5"]."</td><td style='border:3px solid maroon;'>".$row["Q6"]."</td><td style='border:3px solid maroon;'>".$row["comment"]."</td></tr>";
		}
		
		echo "</table>";
		
	
	} else {
		echo "0 results";
	}
	
	//MA'AM WYETH
	
	$sql = "SELECT Q1, Q2, Q3, Q4, Q5, Q6, comment FROM ms_allauigan_results";
	 if ($result = $con->query($sql)) {
		echo "<table style='margin:0 auto;border:10px solid brown;background-color:khaki;font-family:consolas;font-size:20px;'><p style='border:4px solid black;text-align:center;background-color:maroon;font-family:consolas;color:white;font-size:40px;'>MS. WYETH ALLAUIGAN</p><tr ><th style='border:10px solid brown;background-color:brown;color:white;font-size:20px;'>[Statement_1]</th><th style='border:10px solid brown;background-color:brown;color:white;font-size:20px;''>[Statement_2]</th><th style='border:10px solid brown;background-color:brown;color:white;font-size:20px;'>[Statement_3]</th><th style='border:10px solid brown;background-color:brown;color:white;font-size:20px;'>[Statement_4]</th><th style='border:10px solid brown;background-color:brown;color:white;font-size:20px;'>[Statement_5]</th><th style='border:10px solid brown;background-color:brown;color:white;font-size:20px;'>[Statement_6]</th><th style='border:10px solid brown;background-color:brown;color:white;font-size:20px;'>[Comment]</th>";
		// output data of each row
		while($row = $result->fetch_assoc()) {
			echo"<tr style='text-align:center;font-family:consolas;font-size:20px;'><td style='border:3px solid maroon;'>".$row["Q1"]."</td>","<td style='border:3px solid maroon;'>".$row["Q2"]."</td><td style='border:3px solid maroon;'>".$row["Q3"]."</td><td style='border:3px solid maroon;'>".$row["Q4"]."</td><td style='border:3px solid maroon;'>".$row["Q5"]."</td><td style='border:3px solid maroon;'>".$row["Q6"]."</td><td style='border:3px solid maroon;'>".$row["comment"]."</td></tr>";
		}
		
		echo "</table>";
		
	
	} else {
		echo "0 results";
	}
	
	//MA'AM SHERILYN
	
	$sql = "SELECT Q1, Q2, Q3, Q4, Q5, Q6, comment FROM ms_fajutagana_results";
	 if ($result = $con->query($sql)) {
		echo "<table style='margin:0 auto;border:10px solid brown;background-color:khaki;font-family:consolas;font-size:20px;'><p style='border:4px solid black;text-align:center;background-color:maroon;font-family:consolas;color:white;font-size:40px;'>MS. SHERILYN FAJUTAGANA</p><tr ><th style='border:10px solid brown;background-color:brown;color:white;font-size:20px;'>[Statement_1]</th><th style='border:10px solid brown;background-color:brown;color:white;font-size:20px;''>[Statement_2]</th><th style='border:10px solid brown;background-color:brown;color:white;font-size:20px;'>[Statement_3]</th><th style='border:10px solid brown;background-color:brown;color:white;font-size:20px;'>[Statement_4]</th><th style='border:10px solid brown;background-color:brown;color:white;font-size:20px;'>[Statement_5]</th><th style='border:10px solid brown;background-color:brown;color:white;font-size:20px;'>[Statement_6]</th><th style='border:10px solid brown;background-color:brown;color:white;font-size:20px;'>[Comment]</th>";
		// output data of each row
		while($row = $result->fetch_assoc()) {
			echo"<tr style='text-align:center;font-family:consolas;font-size:20px;'><td style='border:3px solid maroon;'>".$row["Q1"]."</td>","<td style='border:3px solid maroon;'>".$row["Q2"]."</td><td style='border:3px solid maroon;'>".$row["Q3"]."</td><td style='border:3px solid maroon;'>".$row["Q4"]."</td><td style='border:3px solid maroon;'>".$row["Q5"]."</td><td style='border:3px solid maroon;'>".$row["Q6"]."</td><td style='border:3px solid maroon;'>".$row["comment"]."</td></tr>";
		}
		
		echo "</table>";
		
	
	} else {
		echo "0 results";
	}
?>
	
	
	<!DOCTYPE html>
	<html>
	<meta name="viewport" content="width=device-width" initial-scale="1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<head>
	
	</head>
	<body>
	
	<hr>
	<footer><a href="logout.php">Logout</a></footer>
	</body>
	</html>
