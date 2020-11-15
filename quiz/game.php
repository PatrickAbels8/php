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
			$_SESSION["history"] = trim($_SESSION["history"], "##");
			$qa_list = explode("##", $_SESSION["history"]);
			$right = 0;
			$wrong = 0;
			foreach($qa_list as $qa){
				list($question_i, $answer1_i, $answer2_i, $answer3_i, $solution_i, $guess_i) = explode("#", $qa);
				echo "<div class='qa'>";
				echo "<h3>" . $question_i . "</h3>";
				if($solution_i==1){
					if($guess_i==1){
						echo "<p class='solution guess'>" . $answer1_i . "</p>";
					}else{
						echo "<p class='solution'>" . $answer1_i . "</p>";
					}
				}else{
					if($guess_i==1){
						echo "<p class='guess'>" . $answer1_i . "</p>";
					}else{
						echo "<p>" . $answer1_i . "</p>";
					}
				}
				if($solution_i==2){
					if($guess_i==2){
						echo "<p class='solution guess'>" . $answer2_i . "</p>";
					}else{
						echo "<p class='solution'>" . $answer2_i . "</p>";
					}
				}else{
					if($guess_i==2){
						echo "<p class='guess'>" . $answer2_i . "</p>";
					}else{
						echo "<p>" . $answer2_i . "</p>";
					}
				}
				if($solution_i==3){
					if($guess_i==3){
						echo "<p class='solution guess'>" . $answer3_i . "</p>";
					}else{
						echo "<p class='solution'>" . $answer3_i . "</p>";
					}
				}else{
					if($guess_i==3){
						echo "<p class='guess'>" . $answer3_i . "</p>";
					}else{
						echo "<p>" . $answer3_i . "</p>";
					}
				}
				if($solution_i==$guess_i){
					$right += 1;
				}else{
					$wrong += 1;
				}
				echo "</div>";
			}
			echo "<div class='score'>" . sprintf("%.2f%%", $right/($right+$wrong) * 100) . "</div>";
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
			$_SESSION["history"] = $_SESSION["history"] . "##" . $question . "#" . $answer1 . "#" . $answer2 . "#" . $answer3 . "#" . $solution;
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
</body>
</html>

<?php
	}
?>