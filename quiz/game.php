<?php
	session_start();

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
	<p>Ano vs <?php echo $username ?></p>
</body>
</html>