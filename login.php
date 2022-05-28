<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$studentID = $_POST['studentID'];
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !empty($studentID) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from users where username = '$user_name' limit 1";
			$query = "select * from users where student_ID = '$studentID' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>


<!DOCTYPE html>
<html>
<head>

	<title>Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>

	<style type="text/css">
	
	
body{
	background-color: #e5e5f7;
	opacity: 2.1;
	background-size: 80px 80px;
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

	<div id="box">
		
		<form method="post">
			<div style="font-size: 50px;margin: 1px;color: green;font-family:consolas;background-color:white;">LOGIN FORM</div><br>
			<input id="text" type="int" name="studentID" placeholder="Student ID" required><br><br>
			<input id="text" type="text" name="user_name" placeholder="Username" required><br><br>
			<input id="text" type="password" name="password" placeholder="Password" required><br><br>

			<input id="button" type="submit" value="LOGIN"><br><br>

			<a href="signup.php">Click to Signup</a><br><br>
		</form>
	</div>
</body>
</html>