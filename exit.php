
<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);
	
	
	?>
	<html>
	<head>
	<meta name="viewport" content="width=device-width" initial-scale="1.0">
	</head>
<table>
<tr>
<td>
<header>THANK YOU <?php echo $user_data['username']; ?> 
<p>YOUR FORM HAS BEEN SUBMITTED</p>
<td>
<tr>
</table>

<footer><a href="logout.php">Logout</a></footer>
<footer><a href="index.php">Evaluate Teachers</a></footer>
	
</html>
