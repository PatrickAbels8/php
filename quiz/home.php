<?php
	include_once "dao.php"; //$conn
	session_start();

	if(isset($_POST["login"])){
		if($_POST["username"]=="admin" and $_POST["password"]=="0000"){ //contodo query db
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
</head>
<body>
	<form action="home.php" method="post"><button>Home</button></form>
	<form action="game.php" method="post"><button>New Game</button></form>
	<form action="logout.php" method="post"><button>Logout</button></form>
	<p>Welcome <?php echo $username ?> !</p>
</body>
</html>