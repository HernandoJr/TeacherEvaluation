
<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);
	
	
	?>
	<html>
<STYLE>
body{
	background-color: yellow;
opacity: 10;
background-size: 80px 80px;
background-image: repeating-linear-gradient(45deg, #00790a 0, #00790a 3.6px, #e5e5f7 0, #e5e5f7 50%);
}
table, tr, td{
	color:green;
	font-family:consolas;
	background-color: yellow;	
	font-size:90px;
	text-align:Center;
	margin: 100px;
	border:3px solid black;
}
</STYLE>
<table>
<tr>
<td>
<header>THANK YOU <?php echo $user_data['username']; ?> 
<p>YOUR FORM HAS BEEN SUBMITTED</p>
<td>
<tr>
</table>

<footer><a href="logout.php">Logout</a></footer>
	
</html>
