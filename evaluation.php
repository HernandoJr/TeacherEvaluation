<?php 

?>
<html>
	<header>WELCOME TO TEACHER EVALUATION SYSTEM</header>
	<style>
table{
	 border:5px solid green;
  width:80%;
  color:darkyellow;
  outline: 5px solid green;
  font-size:10px;
  font-family:consolas;
  text-align:center;
  margin: 10px 20px 30px 200px;
  padding:15px;
  background-color: yellow;
}
header{
	background-color:white;
	font-family:consolas;
	font-weight:bold;
	text-align:center;
	font-size:40;
	color:darkgreen;
	border:8px solid gold	;
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
	font-size:20px;
	border: 3px solid yellow; 
	padding:20px;
	background-color:forestgreen;
	outline: 5px solid black;
}
</style>
	<body>
	<form action="exit.php" method="POST">
	<table>
	<tr>
			 <th >STATEMENTS</th>
			 <th col=spa>1- POOR 2-FAIR 3-GOOD 4-VERY GOOD 5-EXCELLENT</th>
			</tr>
	<tr>
	<td>
	<label>1.The teacher demonstrated knowledge of the subject matter</label>
	</td>
	<td>
	<input type="radio" id="html" name="fav_language" value="HTML">
	<label for="html">1</label>
	<input type="radio" id="css" name="fav_language" value="CSS">
	<label for="css">2</label>
	<input type="radio" id="javascript" name="fav_language" value="JavaScript">
	<label for="javascript">3</label>
	<input type="radio" id="javascript" name="fav_language" value="JavaScript">
	<label for="javascript">4</label>
	<input type="radio" id="javascript" name="fav_language" value="JavaScript">
	<label for="javascript">5</label>
	</td>
	</tr>
	
	<tr>
	<td>
	<label>2.The teacher was effective in communicating the content of the course</label>
	</td>
	<td>
	<input type="radio" id="html" name="fav_language" value="HTML">
	<label for="html">1</label>
	<input type="radio" id="css" name="fav_language" value="CSS">
	<label for="css">2</label>
	<input type="radio" id="javascript" name="fav_language" value="JavaScript">
	<label for="javascript">3</label>
	<input type="radio" id="javascript" name="fav_language" value="JavaScript">
	<label for="javascript">4</label>
	<input type="radio" id="javascript" name="fav_language" value="JavaScript">
	<label for="javascript">5</label>
	</td>
	</tr>
	
	<tr>
	<td>
	<label>3.The teacher was enthusiastic about the course</label>
	</td>
	<td>
	<input type="radio" id="html" name="fav_language" value="HTML">
	<label for="html">1</label>
	<input type="radio" id="css" name="fav_language" value="CSS">
	<label for="css">2</label>
	<input type="radio" id="javascript" name="fav_language" value="JavaScript">
	<label for="javascript">3</label>
	<input type="radio" id="javascript" name="fav_language" value="JavaScript">
	<label for="javascript">4</label>
	<input type="radio" id="javascript" name="fav_language" value="JavaScript">
	<label for="javascript">5</label>
	</td>
	</tr>
	
	<tr>
	<td>
	<label>4.The teacher was accessible and willing to provide help</label>
	</td>
	<td>
	<input type="radio" id="html" name="fav_language" value="HTML">
	<label for="html">1</label>
	<input type="radio" id="css" name="fav_language" value="CSS">
	<label for="css">2</label>
	<input type="radio" id="javascript" name="fav_language" value="JavaScript">
	<label for="javascript">3</label>
	<input type="radio" id="javascript" name="fav_language" value="JavaScript">
	<label for="javascript">4</label>
	<input type="radio" id="javascript" name="fav_language" value="JavaScript">
	<label for="javascript">5</label>
	</td>
	</tr>
	
	<tr>
	<td>
	<label>5.Do you want him to be your teacher next semester?</label>
	</td>
	<td>
	<input type="radio" id="html" name="fav_language" value="HTML">
	<label for="html">1</label>
	<input type="radio" id="css" name="fav_language" value="CSS">
	<label for="css">2</label>
	<input type="radio" id="javascript" name="fav_language" value="JavaScript">
	<label for="javascript">3</label>
	<input type="radio" id="javascript" name="fav_language" value="JavaScript">
	<label for="javascript">4</label>
	<input type="radio" id="javascript" name="fav_language" value="JavaScript">
	<label for="javascript">5</label>
	</td>
	</tr>
	
	<tr>
	<td>
	<label>6.Overall, how would you rate this teacher?</label>
	</td>
	<td>
	<input type="radio" id="html" name="fav_language" value="HTML">
	<label for="html">1</label>
	<input type="radio" id="css" name="fav_language" value="CSS">
	<label for="css">2</label>
	<input type="radio" id="javascript" name="fav_language" value="JavaScript">
	<label for="javascript">3</label>
	<input type="radio" id="javascript" name="fav_language" value="JavaScript">
	<label for="javascript">4</label>
	<input type="radio" id="javascript" name="fav_language" value="JavaScript">
	<label for="javascript">5</label>
	</td>
	</tr>
	
	</table

    <h3>COMMENT SECTION</h3>
    
    <fieldset>
     <textarea placeholder="Your comment here" tabindex="5" name="suggestion_text" required></textarea>
    </fieldset>
    <fieldset>
    <button name="submit" type="submit" id="suggestion_box" data-submit="...Sending" value="text to send">Submit</button>
    </fieldset>
	</form>
	</div>
</body>
</html>