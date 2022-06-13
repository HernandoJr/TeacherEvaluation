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

		if(!empty($user_name) && !empty($password) && is_numeric($studentID))
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
			
			echo "--------Please enter some valid information!-----------";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
	<meta name="viewport" content="width=device-width" initial-scale="1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	
	<fieldset>
	<div>
		<hr><p class="register"> REGISTRATION FORM</p><hr>
		<form method="post">
		
				<label for="studentID" class="labeltext" >STUDENT ID:</label>
				<input  type="number" name="studentID"  pattern="{8,0>" placeholder="Please enter your student id here!" required >
				<label for="user_name" class="labeltext">USERNAME:</label>
				<input  type="text" name="user_name"  pattern="[A-Za-z]{8,10}" title="letters only and it should be 8 to 10 characters only." placeholder="Please enter your username here!" required>
				<label for="password" class="labeltext">PASSWORD:</label>
				<input  type="password" name="password" placeholder="Please enter your password here!" required>

			<input type="submit" id="submit" value="REGISTER">
			<p id="plinks">Have an account already? <a id="plinks" href="login.php">Click here to Login.</p></a><br>
		</form>
	</fieldset>
	</	
</body>
</html>