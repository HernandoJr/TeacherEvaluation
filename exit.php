<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);
	?>
	
<!DOCTYPE html>
<html>
<Head>
<link rel="stylesheet" href="style.css">
</head>
<body>

<fieldset style="background-color:khaki;border:20px solid maroon;text-align:center;margin:250px 250px 250px 250px;">

<button ><a  href="index.php">Evaluate Another Teacher</a></button>
<hr>

<button ><a  href="logout.php">Logout</a></button>
</fieldset>	
</form>


</body>
</html>