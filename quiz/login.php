<?php 

	include_once "dao.php"; //$conn
	session_start();

	if(isset($_POST["register"])){
		if($_POST["username"]!="" and $_POST["password"]!="" and $_POST["password"]==$_POST["password2"]){ //contodo query db
			echo "successfully registered, " . $_POST["username"] . "!";
		}else{
			echo "Something went wrong there!";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<form action="login.php" method="post">
		<input type="text" name="username" placeholder="Username"><br>
		<input type="password" name="password" placeholder="Password"><br>
		<input type="password" name="password2" placeholder="Password (repeat)"><br>
		<input type="hidden" name="register">
		<button type="submit">Register!</button>
	</form>

	<p>&nbsp;</p>

	<form action="home.php" method="post">
		<input type="text" name="username" placeholder="Username"><br>
		<input type="password" name="password" placeholder="Password"><br>
		<input type="hidden" name="login">
		<button type="submit">Login!</button>
	</form>
</body>
</html>