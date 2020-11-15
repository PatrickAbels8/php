<?php
	include_once "dao.php";
	session_start();

	if(isset($_POST["login"])){
		$query = "SELECT * FROM " . $users_table . " WHERE username='" . $_POST["username"] . "' AND password=MD5('" . $_POST["password"] . "')";
		$response = mysqli_query($conn, $query);
		if(mysqli_num_rows($response) == 1){
			$_SESSION["username"] = $_POST["username"];
		}else{
			header("Location: logout.php");
		}
	}

	$username = $_SESSION["username"];
?>


<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="static/styles_home.css">
</head>
<body>
	<?php
		$_SESSION["rounds"] = 10;
		$_SESSION["round"] = 10;
		$_SESSION["history"] = "";
	?>
	<div class="content">
		<h1>Welcome, <?php echo $username ?> !</h1>
		<form action="game.php" method="post"><button class="btn">New Game</button></form>
		<form action="logout.php" method="post"><button class="btn">Logout</button></form>
	</div>
</body>
</html>
