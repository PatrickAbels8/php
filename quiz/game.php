<?php
	include_once "dao.php";
	session_start();

	$username = $_SESSION["username"];
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
		if(isset($_POST["answer1"])){
			$_SESSION["history"] = $_SESSION["history"] . "#1"; 
		}else if(isset($_POST["answer2"])){
			$_SESSION["history"] = $_SESSION["history"] . "#2"; 
		}else if(isset($_POST["answer3"])){
			$_SESSION["history"] = $_SESSION["history"] . "#3"; 
		}
		if($_SESSION["round"]==0){
			echo $_SESSION["history"];
		}else{
			$_SESSION["round"] = $_SESSION["round"]-1;

			$query = "SELECT * FROM " . $questions_table;
			$response = mysqli_query($conn, $query);
			$num_questions = mysqli_num_rows($response);
			$id = rand(1, $num_questions);
			$query = "SELECT question, answer1, answer2, answer3, solution FROM " . $questions_table . " WHERE id=" . $id;
			$response = mysqli_query($conn, $query);
			$row = mysqli_fetch_assoc($response);

			$question = $row["question"];
			$answer1 = $row["answer1"];
			$answer2 = $row["answer2"];
			$answer3 = $row["answer3"];
			$solution = $row["solution"];
			$_SESSION["history"] = $_SESSION["history"] . "#" . $question . "#" . $answer1 . "#" . $answer2 . "#" . $answer3 . "#" . $solution;
	?> 
	<div class="question">
	<h1><?php echo $_SESSION["rounds"]-$_SESSION["round"]; ?>. Question: <?php echo $question; ?></h1>
	<form action="game.php" method="post">
		<input type="hidden" name="answer1">
		<button class="answer"><?php echo $answer1; ?></button></form>
	<form action="game.php" method="post">
		<input type="hidden" name="answer2">
		<button class="answer"><?php echo $answer2; ?></button></form>
	<form action="game.php" method="post">
		<input type="hidden" name="answer3">
		<button class="answer"><?php echo $answer3; ?></button></form>
	</div>
	<!-- <?php
		// }
	?> -->

</body>
</html>

<?php
	}
?>