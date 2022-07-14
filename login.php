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
			$query = "select * from users_account where username = '$user_name' limit 1";
			$query = "select * from users_account where student_ID = '$studentID' limit 1";
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
			

			echo'<script type="text/javascript">alert("Wrong username or password!")</script>';
		}else
		{
			echo'<script type="text/javascript"> alert("Wrong username or password!") </script>';
		}
	}

?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!--J QUERY CDN -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>		
		<!--External CSS-->
		<link rel="stylesheet" href="LoginStyle.css">
	
</head>
<body>
		
				<div class="container">
					
					
					
				<div class="row bg-dark">
				<div class="form-header mt-3 text-center">LOGIN</div>
				
					<form method="post" class="form-inline">
					<div class ="form-group">
						<input type="number" class="form-control mt-3 mb-3" name="studentID" placeholder="STUDENT ID"  required>
					</div>
					<div class ="form-group">
						<input type="text" name="user_name" class="form-control mt-3 mb-3" placeholder="USERNAME" required>
					</div>
					<div class ="form-group">
						<input type="password" name="password" class="form-control mt-3 mb-3" placeholder="PASSWORD" required>
					</div>
					
					<div class="text-center">
						<input id="buttonSumbit" class ="btn btn-success col-sm-5 mb-3 mt-3" type="submit">
					<div>
					</form>
				<hr>
					<a href="signup.php" class="link-primary">SIGN UP</a><br>
					<a href="admin.php" class="link-primary">ADMIN LOGIN</a><hr>
				</div>
		
	
	
	</div>	

</body>

</html>