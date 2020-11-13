<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
</head>
<body>

	<?php
		if(!(isset($_POST["n1"]) and isset($_POST["op"]) and isset($_POST["n2"]))){
	?>
	<form method="post">
		Number 1: <input type="text" name="n1">
		Operation: <select name="op">
			<option value="add">+</option>
			<option value="sub">-</option>
			<option value="mul">*</option>
			<option value="div">/</option>
		</select>
		Number 2: <input type="text" name="n2">
		<button type="submit" name="submit">Calculate!</button>
		<button type="reset" name="reset">Clear!</button>
		<input type="hidden" name="sent"></button>
	</form>

	<?php 
		} else {
			$n1 = $_POST["n1"];
			$op = $_POST["op"];
			$n2 = $_POST["n2"];
			switch($op){
				case "add":
					echo $n1 , "+" , $n2 , "=" , $n1 + $n2;
					break;
				case "sub":
					echo $n1 , "-" , $n2 , "=" , $n1 - $n2;
					break;
				case "mul":
					echo $n1 , "*" , $n2 , "=" , $n1 * $n2;
					break;
				case "div":
					echo $n1 , "/" , $n2 , "=" , $n1 / $n2;
					break;
			}
		}
	?>

</body>
</html>
