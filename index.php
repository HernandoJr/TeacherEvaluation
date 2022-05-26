<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);
	
	
	
	<footer><a href="logout.php">Logout</a></footer>
?>	
<style>
body{
background-color: #e5e5f7;
opacity: 10;
background-size: 50px 50px;
background-image: repeating-linear-gradient(45deg, #00790a 0, #00790a 3.6px, #e5e5f7 0, #e5e5f7 50%);

}
h1{	
text-align:left;
font-family:consolas;
color:forestgreen;
outline:y
}
table {
  border:5px solid green;
  width:50%;
  color:darkyellow;
  outline: 5px solid green;
  font-size:20px;
  font-family:consolas;
  text-align:center;
  margin: 10px 20px 30px 350px;
  padding:15px;
  background-color: yellow;
  
}
td{
	border:6px solid green;
  width:50%;
  color:black;
   font-weight: bold;
  outline: 5px solid green;
  font-size:20px;
  font-family:consolas;
  text-align:center;
  margin: 10px 20px 30px 350px;
  padding:15px;
  background-color:white;
	
	
}
th{
	color:yellow;
	font-family:consolas;
	font-size:30px;
	border: 3px solid yellow; 
	padding:20px;
	background-color:forestgreen;
	outline: 5px solid black;
}
header{
	background-color:white;
	font-family:consolas;
	font-weight:bold;
	text-align:center;
	font-size:60;
	color:darkgreen;
	border:10px solid gold	;
}
footer{
	
background-color:white;
border: 10px solid gold;
font-size:50px;
text-align: center;

}


</style>

<!DOCTYPE html>
<html>
<head >
	<title >Teachers List</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

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
				<td><button >Evaluate</button></td>
			</tr>
			<tr>
				<td>Ms. Sherily</td>
				<td><button >Evaluate</button></td>
			</tr>
			<tr>	
				<td>Ms. Wyeth</td>
				<td><button>Evaluate</button></td>
			</tr>		
			<td>Mr. Mark Nolledo</td><td>
			<button>Evaluate</button></td>
			</tr>
		</table>
		</form>
		</div>


	<footer><a href="logout.php">Logout</a></footer>

</body>
</html>