<?php 

////DATABASE CONNECTION HERE!
session_start();

	include("connection.php");
	include("functions.php");
	$user_data = check_login($con);
		
		
		//CHECKING THE BUTTON IF IS IT CLICK!
		
			if(isset($_POST['submit'])){
				if(!empty(['submit'])){
					if(!empty(['statement'])){
						
						$statement1 = $_POST['statement1'];
						$statement2 = $_POST['statement2'];
						$statement3 = $_POST['statement3'];
						$statement4 = $_POST['statement4'];
						$statement5 = $_POST['statement5'];
						$statement6 = $_POST['statement6'];
						
						$result=mysqli_query($mysqli, "INSERT INTO ms_fajutagana_results VALUES('','$statement1', '$statement2', '$statement3', '$statement4', '$statement5', '$statement6')");
		
						if($result){
							echo'<script type="text/javascript"> alert("YOUR RESPONSE HAS BEEN SUBMITTED. THANK YOU!") </script>';
							header("location:./exit.php");
							die;
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
			<th class="headertable" ><p class="title">EVALUATEE INFORMATION:</p><p class="name">Teachers Name:&nbsp;Ms. Sherilyn Fajutagana<p class="name">
			<hr>
			<p class="name">Course Code: ITEC-80</P>
			
			</th>
			<th class="headertable"><p class="title">EVALUATOR INFORMATION:</p>
			<p class="names">Student Username:<?php echo $user_data['username']; ?>
			<hr>
			<p class="names">Section: BSCS 402-E</p></th>
			</tr>
		
		<tr>
				<th >STATEMENTS</th>
				 <th>1- POOR 2-FAIR 3-GOOD 4-VERY GOOD 5-EXCELLENT</th>
		</tr>
		
		<tr>
		<td>
		
				<label>1.The teacher demonstrated knowledge of the subject matter.</label>
				
		</td>
		<td id="A">
				<input type="radio"  name="statement1" value="1" required>
				<label for="statement1">1</label>
				<input type="radio"  name="statement1" value="2">
				<label for="statement1">2</label>
				<input type="radio" name="statement1" value="3" >
				<label for="statement1">3</label>
				<input type="radio"  name="statement1" value="4">
				<label for="statement1">4</label>
				<input type="radio"  name="statement1" value="5">
				<label for="statement1">5</label>
		</td>
		</tr>
		
		<tr>
		<td>
				<label>2.The teacher was effective in communicating the content of the course.</label>
		</td>
		<td id="A">
				<input type="radio"  name="statement2" value="1" required >
				<label for="statement2">1</label>
				<input type="radio"  name="statement2"  value="2">
				<label for="statement2">2</label>
				<input type="radio"  name="statement2" value="3">
				<label for="statement2">3</label>
				<input type="radio"  name="statement2" value="4">
				<label for="statement2">4</label>
				<input type="radio"  name="statement2"  value="5">
				<label for="statement2">5</label>
		</td>
		</tr>
		
		<tr>
		<td>
				<label>3.The teacher was enthusiastic about the course.</label>
		</td>
		<td id="A">
				<input type="radio"  name="statement3" value="1" required>
				<label for="statement3">1</label>
				<input type="radio"  name="statement3"  value="2">
				<label for="statement3">2</label>
				<input type="radio"  name="statement3"  value="3">
				<label for="statement3">3</label>
				<input type="radio"  name="statement3" value="4">
				<input type="radio"  name="statement3" value="5" >
				<label for="statement3">5</label>
		</td>	</td>
		</tr>
		
		<tr>
		<td>
				<label>4.The teacher was accessible and willing to provide help.</label>
		</td>
		<td id="A">
				<input type="radio"  name="statement4" value="1" required>
				<label for="statement4">1</label>
				<input type="radio"  name="statement4" value="2" >
				<label for="statement4">2</label>
				<input type="radio"  name="statement4"  value="3">
				<label for="statement4">3</label>
				<input type="radio"  name="statement4"  value="4">
				<label for="statement4">4</label>
				<input type="radio"  name="statement4"  value="5">
				<label for="statement4">5</label>	</td>
		</tr>
		
		<tr>
		<td>
				<label>5.Do you want him to be your teacher next semester?</label>
		</td>
		<td id="A">
				<input type="radio"  name="statement5" value="1" required>
				<label for="statement5">1</label>
				<input type="radio"  name="statement5" value="2" >
				<label for="statement5">2</label>
				<input type="radio"  name="statement5" value="3" >
				<label for="statement5">3</label>
				<input type="radio"  name="statement5" value="4">
				<label for="statement5">4</label>
				<input type="radio"  name="statement5"  value="5">
				<label for="statement5">5</label>	</td>
		</tr>
		
		<tr>
		<td>
				<label>6.Overall, how would you rate this teacher?</label>
		</td>
		<td id="A">
				<input type="radio"  name="statement6" value="1" required>
				<label for="statement1">1</label>
				<input type="radio" name="statement6" value="2" >
				<label for="statement2">2</label>
				<input type="radio"  name="statement6" value="3" >
				<label for="statement3">3</label>
				<input type="radio"  name="statement6"value="4" >
				<label for="statement4">4</label>
				<input type="radio"  name="statement6" 	value="5" >
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