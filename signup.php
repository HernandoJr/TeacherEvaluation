<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
		$studentID = $_POST['studentID'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name) && is_numeric($studentID))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,username,password,student_ID) values ('$user_id','$user_name','$password',$studentID)";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}
		else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>

	<style type="text/css">
	
	body{
background-color: #e5e5f7;
opacity: 10;
background-size: 100px 100px;
background-image: repeating-linear-gradient(45deg, #00790a 0, #00790a 3.6px, #e5e5f7 0, #e5e5f7 50%);
	}
	p{
		color:black;
		border:2px white solid;
		background-color:white;
		font-family:consolas;
		font-style: italic;
	}
	form{
		background-color:rgba(2,130,50,50);
		border: yellow;
		border-width:10px; 
		border-style:solid;
		text-align:center;
		object-fit:cover;
		margin:auto;
		width:500px;
	}
	 label {
			display: inline-block;
			width: 130px;
			text-align: left;
			color:white;
			font-family:consolas;
		  }
	h1{
		color:yellow;
		font-family:consolas;
	}
	button{
	color:rgba(1,0,200,100);
	font-size:17px;
	}	
	a{
		background-color:lightblue;
		font-style:WildWest;
		font-family:consolas;
	}
	
	
</style>
	</style>

	<div id="box">
		
		<form method="post">
			<div style="font-size: 50px;margin: 1px;color: green;font-family:consolas;background-color:white;">REGISTRATION FORM</div><br>
			<input id="text" type="int" name="studentID" placeholder="Student ID" required ><br><br>
			<input id="text" type="text" name="user_name" placeholder="Username" required><br><br>
			<input id="text" type="password" name="password" placeholder="Password" required><br><br>

			<input id="button" type="submit" value="REGISTER"><br><br>

			<a href="login.php">Click to Login</a><br><br>
		</form>
	</div>
</body>
</html>