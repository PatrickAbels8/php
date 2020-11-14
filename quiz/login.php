<?php 

	include_once "dao.php";
	session_start();

	if(isset($_POST["register"])){
		if($_POST["username"]!="" and $_POST["password"]!="" and $_POST["password"]==$_POST["password2"]){
			$query = "SELECT * FROM " . $users_table . " WHERE username='" . $_POST["username"] . "'";
			$response = mysqli_query($conn, $query);
			if(mysqli_num_rows($response) == 0){
				$query = "INSERT INTO " . $users_table . " (username, password) VALUES ('". $_POST["username"] ."', MD5('". $_POST["password"] ."'))";
				mysqli_query($conn, $query);
				$reg_success = true;
			}else{
				$reg_success = false;
			}
		}else{
			$reg_success = false;
		}
	}else{
		$reg_success = null;
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="static/style_login.css">
</head>
<body>
	<form action="login.php" method="post">
		<div class="register-box">
			<h1>Register</h1>
			<div class="textbox">
				<input type="text" name="username" placeholder="Username">
			</div>
			<div class="textbox">
				<input type="password" name="password" placeholder="Password">
			</div>
			<div class="textbox">
				<input type="password" name="password2" placeholder="Password (repeat)">
			</div>
			<input type="hidden" name="register">
			<button class="btn" type="submit">Sign up!</button>
			<?php
				if(isset($reg_success)){
					if($reg_success){
			?>
						<p class="pos_feedback">Successfully registered!</p>
			<?php
					}else{
			?>
						<p class="neg_feedback">Something went wrong there! Username might already be taken.</p>
			<?php
					}
				}
			?>
		</div>
	</form>

	<form action="home.php" method="post">
		<div class="login-box">
			<h1>Login</h1>
			<div class="textbox">
				<input type="text" name="username" placeholder="Username">
			</div>
			<div class="textbox">
				<input type="password" name="password" placeholder="Password">
			</div>
			<input type="hidden" name="login">
			<button class="btn" type="submit">Sign in!</button>
		</div>
	</form>
</body>
</html>