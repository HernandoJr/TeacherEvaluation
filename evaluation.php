<?php 

////DATABASE CONNECTION HERE!
session_start();

	include("connection.php");
	include("functions.php");
		
		//CHECKING THE BUTTON IF IS IT CLICK!
		
			if(isset($_POST['submit'])){
				if(!empty(['submit'])){
					if(!empty(['statement'])){
						$statement  = $_POST['statement'];
						$statement1 = $_POST['statement1'];
						$statement2 = $_POST['statement2'];
						$statement3 = $_POST['statement3'];
						$statement4 = $_POST['statement4'];
						$statement5 = $_POST['statement5'];
						$statement6 = $_POST['statement6'];
						
						$query="INSERT INTO 'results' ('statement', 'statement1', 'statement2', 'statement3', 'statement', 'statement5', 'statement6') VALUES('$statement', '$statement1', '$statement2', '$statement3', '$statement4', '$statement5', '$statement6')";
						$result = mysqli_query($con, $query);
						if($result){
							echo'<script type="text/javascript"> alert("YOUR RESPONSE HAS BEEN SUBMITTED. THANK YOU!") </script>';
		
						}
					}
					else{ 
						echo'<script type="text/javascript"> alert("SUBMIT YOUR RESPONSE") </script>';
						}
				}		
				else{
					echo'<script type="text/javascript"> alert(" PLEASE CLICK ONE RADIO BUTTON PER QUESTIONS! </script>';
					}
			}	
								
?>

						<!-- HTML CODES START HERE-->
<!DOCTYPE html>
<html>


		<!-- INTERNAL CSS -->
<head>
<meta name="viewport" content="width=device-width" initial-scale="1.0">
<link rel="stylesheet" href="evaluationstyle.css" type="text/css">
	
	
		<header>WELCOME TO TEACHER EVALUATION SYSTEM</header>
</head><br>

<body>
			<!-- EVALUATION STATEMENTS ALONG WITH THEIR RADIO BUTTONS -->
	<div>		
	<form method="POST">
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
			<input type="radio"  name="statement" value="radio1" required>
			<label for="statement1">1</label>
			<input type="radio"  name="statement" value="radio2" >
			<label for="statement2">2</label>
			<input type="radio" name="statement" value="radio3" >
			<label for="statement3">3</label>
			<input type="radio"  name="statement" value="radio4" >
			<label for="statement4">4</label>
			<input type="radio"  name="statement" value="radio5" >
			<label for="statement5s">5</label>
	</td>
	</tr>
	
	<tr>
	<td>
			<label>2.The teacher was effective in communicating the content of the course.</label>
	</td>
	<td id="A">
			<input type="radio"  name="statement2" value="radio11" required >
			<label for="statement1">1</label>
			<input type="radio"  name="statement2" value="radio22" >
			<label for="statement2">2</label>
			<input type="radio"  name="statement2" value="radio33" >
			<label for="statement3">3</label>
			<input type="radio"  name="statement2" value="radio44" >
			<label for="statement4">4</label>
			<input type="radio"  name="statement2" value="radio55" >
			<label for="statement5s">5</label>
	</td>
	</tr>
	
	<tr>
	<td>
			<label>3.The teacher was enthusiastic about the course.</label>
	</td>
	<td id="A">
			<input type="radio"  name="statement3" value="radio11" required>
			<label for="statement1">1</label>
			<input type="radio"  name="statement3" value="radio22" >
			<label for="statement2">2</label>
			<input type="radio"  name="statement3" value="radio33" >
			<label for="statement3">3</label>
			<input type="radio"  name="statement3" value="radio44" >
			<label for="statement4">4</label>
			<input type="radio"  name="statement3" value="radio55" >
			<label for="statement5s">5</label>
	</td>	</td>
	</tr>
	
	<tr>
	<td>
			<label>4.The teacher was accessible and willing to provide help.</label>
	</td>
	<td id="A">
			<input type="radio"  name="statement4" value="radio111" required>
			<label for="statement1">1</label>
			<input type="radio"  name="statement4" value="radio222" >
			<label for="statement2">2</label>
			<input type="radio"  name="statement4" value="radio333" >
			<label for="statement3">3</label>
			<input type="radio"  name="statement4" value="radio444" >
			<label for="statement4">4</label>
			<input type="radio"  name="statement4" value="radio555" >
			<label for="statement5s">5</label>	</td>
	</tr>
	
	<tr>
	<td>
			<label>5.Do you want him to be your teacher next semester?</label>
	</td>
	<td id="A">
			<input type="radio"  name="statement5" value="radio1111" required>
			<label for="statement1">1</label>
			<input type="radio"  name="statement5" value="radio2222" >
			<label for="statement2">2</label>
			<input type="radio"  name="statement5" value="radio3333" >
			<label for="statement3">3</label>
			<input type="radio"  name="statement5" value="radio4444" >
			<label for="statement4">4</label>
			<input type="radio"  name="statement5" value="radio5555" >
			<label for="statement5s">5</label>	</td>
	</tr>
	
	<tr>
	<td>
			<label>6.Overall, how would you rate this teacher?</label>
	</td>
	<td id="A">
			<input type="radio"  name="statement6" value="radio11111" required>
			<label for="statement1">1</label>
			<input type="radio" name="statement6" value="radio22222" >
			<label for="statement2">2</label>
			<input type="radio"  name="statement6" value="radio33333" >
			<label for="statement3">3</label>
			<input type="radio"  name="statement6" value="radio44444" >
			<label for="statement4">4</label>
			<input type="radio"  name="statement6" value="radio55555" >
			<label for="statement5s">5</label>	</td>
	</td>
	</tr>
	
	</table>
	<br>
		
		<footer>
		
		<label for="comment"><p>COMMENT SECTION:</p>
		<textarea name="comment" placeholder="ENTER YOUR COMMENT HERE!" id="COMMENT" rows="5" cols="140"></textarea>
		<button type="submit" name="submit">Submit</button></label>				
    
	</form>
		<form action="index.php">
		<button type="submit" id="back" name="submit" onclik="index.php">Go back</button></label>
		</form></footer>
	</div>
	
	
</body>

</html>