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
	<meta name="viewport" content="width=device-width" initial-scale="1.0">
	<link rel="stylesheet" type="text/css" href="styles.css">
	
</head>
<body>
	
	
	
<style type="text/css">
	

	

</style>

	
		
			
			<fieldset>
				<div>
					<hr>
					<p class="login"> LOGIN FORM</p>
					<hr>
					
				<form method="post">
					<label for="studentID" class="labeltext">STUDENT ID:</label>
					<input type="number" name="studentID" placeholder="Please enter your student id here!"  required>
					<label for="user_name" class="labeltext">USERNAME:</label>
					<input type="text" name="user_name" placeholder="Please enter your username here!" required>
					<label for="password" class="labeltext">PASSWORD:</label>
					<input type="password" name="password" placeholder="Please enter your password here!" required>

				<input id="submit" type="submit" value="LOGIN">
			

		
		</form>
		<p id="plinks">Don't have an account yet? <a id="plinks" href="signup.php">Click here to sign up.</p></a><Br>
	</fieldset>
	</div>
		

</body>

</html>