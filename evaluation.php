<?php 

////DATABASE CONNECTION HERE!
session_start();

	include("connection.php");
	include("functions.php");
	

		if(isset($_POST['submit'])){
		
		//something was posted
		
		$_GLOBAL= $statement = $_POST['statement'];
		$statement2 =$_POST['statement2'];
		$statement22 = $_POST['statement22'];
		$statement222 = $_POST['statement222'];
		$statement2222 =$_POST['statement2222'];
		$statement22222= $_POST['statement22222'];
		$statement222222= $_POST['statement222222'];
		
		$query = "insert into evaluation_results (statement, statement2, statement22, statement222, statement2222, statement22222, statement222222 ) values('$statement', '$statement2', '$statement22', '$statement222', '$statement2222', '$statement22222', '$statement222222' )";

		mysqli_query($con, $query);
		header("Location: login.php");	
		die;
		}
		
		else{
			echo"Error";
		}
	
?>
	


						<!-- HTML CODES START HERE-->
<!DOCTYPE html>
<html>


		<!-- INTERNAL CSS -->
<head>
<meta name="viewport" content="width=device-width" initial-scale="1.0">
	
	<style>
		body{
				background-color: #e5e5f7;
				opacity: 10;
				background-size: 50px 50px;
				background-image: repeating-linear-gradient(45deg, #00790a 0, #00790a 3.6px, #e5e5f7 0, #e5e5f7 50%);
			
		}
	
		table{
				border:5px solid green;
				width:85%;
				color:darkyellow;
				outline: 5px solid green;
				font-family:consolas;
				margin: 10px 20px 30px 110px;
				padding:15px;
				background-color: yellow;
				word-spacing:normal;
				
		}


		header{
				background-color:white;
				font-family:ARIAL;
				font-weight:bold;
				text-align:center;
				font-size:40px;
				color:darkgreen;
				border:8px solid gold;
		}

		td{
			    border:6px solid green;
			    width:50%;
			    color:black;
			    font-weight: bold;
			    outline: 5px solid green;
			    font-size:20px;
			    font-family:consolas;
			    text-align:justify;
			    margin: 10px 20px 30px 350px;
			    padding:15px;
			    background-color:white;	
			    word-wrap: break-word;
		}

		th{
				color:yellow;
				font-family:consolas;
				font-size:20px;
				border: 3px solid yellow; 
				padding:20px;
				text-align:justified;
				background-color:forestgreen;
				outline: 5px solid black;
			
		}
		
		button{
				text-align:center;
				word-wrap: break-word;
				
		}
		
		#A{
			   text-align:center;
			   text-decoration-style:double;
		}
		
		#COMMENT{
			    background-color:white;
				border:green solid 5px;
		}
	</style>
		<header>WELCOME TO TEACHER EVALUATION SYSTEM</header>
</head>

<body>
			<!-- EVALUATION STATEMENTS ALONG WITH THEIR RADIO BUTTONS -->
	<div>		
	<form action="exit.php" method="POST">
	<table>
	<tr>
				<th >STATEMENTS</th>
			 <th col=spa>1- POOR 2-FAIR 3-GOOD 4-VERY GOOD 5-EXCELLENT</th>
			</tr>
	<tr>
	<td>
	
			<label>1.The teacher demonstrated knowledge of the subject matter.</label>
			
	</td>
	<td id="A">
			<input type="radio" id="rd1" name="statement" value="radio1" >
			<label for="statement1">1</label>
			<input type="radio" id="rd2" name="statement" value="radio2" >
			<label for="statement2">2</label>
			<input type="radio" id="rd3" name="statement" value="radio3" >
			<label for="statement3">3</label>
			<input type="radio" id="rd4" name="statement" value="radio4" >
			<label for="statement4">4</label>
			<input type="radio" id="rd5" name="statement" value="radio5" checked>
			<label for="statement5s">5</label>
	</td>
	</tr>
	
	<tr>
	<td>
			<label>2.The teacher was effective in communicating the content of the course.</label>
	</td>
	<td id="A">
			<input type="radio" id="rd11" name="statement2" value="radio11" >
			<label for="statement1">1</label>
			<input type="radio" id="rd22" name="statement2" value="radio22" >
			<label for="statement2">2</label>
			<input type="radio" id="rd33" name="statement2" value="radio33" >
			<label for="statement3">3</label>
			<input type="radio" id="rd44" name="statement2" value="radio44" >
			<label for="statement4">4</label>
			<input type="radio" id="rd55" name="statement2" value="radio55" checked>
			<label for="statement5s">5</label>
	</td>
	</tr>
	
	<tr>
	<td>
			<label>3.The teacher was enthusiastic about the course.</label>
	</td>
	<td id="A">
			<input type="radio" id="rd111" name="statement22" value="radio11" >
			<label for="statement1">1</label>
			<input type="radio" id="rd222" name="statement22" value="radio22" >
			<label for="statement2">2</label>
			<input type="radio" id="rd333" name="statement22" value="radio33" >
			<label for="statement3">3</label>
			<input type="radio" id="rd444" name="statement22" value="radio44" >
			<label for="statement4">4</label>
			<input type="radio" id="rd555" name="statement22" value="radio55" checked>
			<label for="statement5s">5</label>
	</td>	</td>
	</tr>
	
	<tr>
	<td>
			<label>4.The teacher was accessible and willing to provide help.</label>
	</td>
	<td id="A">
			<input type="radio" id="rd1111" name="statement222" value="radio111" >
			<label for="statement1">1</label>
			<input type="radio" id="rd2222" name="statement222" value="radio222" >
			<label for="statement2">2</label>
			<input type="radio" id="rd3333" name="statement222" value="radio333" >
			<label for="statement3">3</label>
			<input type="radio" id="rd4444" name="statement222" value="radio444" >
			<label for="statement4">4</label>
			<input type="radio" id="rd5555" name="statement222" value="radio555" checked>
			<label for="statement5s">5</label>	</td>
	</tr>
	
	<tr>
	<td>
			<label>5.Do you want him to be your teacher next semester?</label>
	</td>
	<td id="A">
			<input type="radio" id="rd11111" name="statement2222" value="radio1111" >
			<label for="statement1">1</label>
			<input type="radio" id="rd22222" name="statement2222" value="radio2222" >
			<label for="statement2">2</label>
			<input type="radio" id="rd33333" name="statement2222" value="radio3333" >
			<label for="statement3">3</label>
			<input type="radio" id="rd44444" name="statement2222" value="radio4444" >
			<label for="statement4">4</label>
			<input type="radio" id="rd55555" name="statement2222" value="radio5555" checked>
			<label for="statement5s">5</label>	</td>
	</tr>
	
	<tr>
	<td>
			<label>6.Overall, how would you rate this teacher?</label>
	</td>
	<td id="A">
			<input type="radio" id="rd111111" name="statement22222" value="radio11111" >
			<label for="statement1">1</label>
			<input type="radio" id="rd222222" name="statement22222" value="radio22222" >
			<label for="statement2">2</label>
			<input type="radio" id="rd333333" name="statement22222" value="radio33333" >
			<label for="statement3">3</label>
			<input type="radio" id="rd444444" name="statement22222" value="radio44444" >
			<label for="statement4">4</label>
			<input type="radio" id="rd555555" name="statement22222" value="radio55555" checked>
			<label for="statement5s">5</label>	</td>
	</td>
	</tr>
	</div>
	</table>
							
    <button type="submit" name="submit">Submit</button>
	</form>
	
	
</body>
</html>