<?php
	session_start();

	$username = $_SESSION["username"];
	$rounds = 3;
?>

<!DOCTYPE html>
<html>
<head>
	<title>Quiz</title>
	<link rel="stylesheet" type="text/css" href="static/style_game.css">
</head>
<body>
	<form action="home.php" method="post"><button id="back">Back</button></form>


	<?php
		for($i = 0; $i < $rounds; $i++){
			// todo game loop
		}
	?>
	<div class="question">
	<h1>Question: ...</h1>
	<form action="game.php" method="post">
		<input type="hidden" name="a">
		<button class="answer">A</button></form>
	<form action="game.php" method="post">
		<input type="hidden" name="b">
		<button class="answer">B</button></form>
	<form action="game.php" method="post">
		<input type="hidden" name="c">
		<button class="answer">C</button></form>
	</div>

</body>
</html>