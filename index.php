<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);
	
?>	


<!DOCTYPE html>
<html>
<head >
	<title >Teachers List</title>
	<meta name="viewport" content="width=device-width" initial-scale="1.0">

</head>
<body>
	
	<header>Hello, <?php echo $user_data['username']; ?> 
	<marquee>Welcome to Teachers List Page</marquee></header>
	
		<div  id="eval">
		<form action="evaluation.php" method="POST">
		<table>
			<tr>
			 <th >Teachers Name</th>
			 <th col=spa>Click evaluate to proceed to evaluation page</th>
			</tr>
			<tr>
				<td>Mr. Karlo E. Nabablit</td>
				<td><button name="Nabablit">Evaluate</button></td>
				<script>document.getElementById("Nabablit").onclick = function() {
    //disable
    this.disabled = true;

    //do some validation stuff
	</script>
			</tr>
			<tr>
				<td>Ms. Sherilyn Fajutagana</td>
				<td><button name="Fajutagana" >Evaluate</button></td>
			</tr>
			<tr>	
				<td>Ms. Wyeth Allauigan</td>
				<td><button name="Allauigan">Evaluate</button></td>
			</tr>		
			<td>Mr. Mark Nolledo</td><td>
			<button name="Nolledo">Evaluate</button></td>
			</tr>
		</table>
		</form>
		</div>


	<footer><a href="logout.php">Logout</a></footer>

</body>
</html>