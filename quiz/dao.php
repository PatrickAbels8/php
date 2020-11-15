<?php

$db_servername = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "quizDB"; //contodo
$users_table = "users";
$questions_table = "questions";

/*
$conn = mysqli_connect($db_servername, $db_username, $db_password);
$query = "CREATE DATABASE $db_name";
mysqli_query($conn, $query);*/

$conn = mysqli_connect($db_servername, $db_username, $db_password, $db_name);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

/* DONE:

$query = "CREATE TABLE " . $users_table . " (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
	username VARCHAR(30) NOT NULL, 
	password VARCHAR(255) DEFAULT NULL, 
	reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";
mysqli_query($conn, $query);
$query = "INSERT INTO " . $users_table . " (username, password) VALUES ('admin', MD5('0000'))";
mysqli_query($conn, $query);
$query = "CREATE TABLE " . $questions_table . " (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	question VARCHAR(1000) NOT NULL,
	answer1 VARCHAR(1000) NOT NULL,
	answer2 VARCHAR(1000) NOT NULL,
	answer3 VARCHAR(1000) NOT NULL,
	solution INT(6))";
mysqli_query($conn, $query);

$query = "INSERT INTO " . $questions_table . " (question, answer1, answer2, answer3, solution) VALUES (
	'What is the square root of 121?',
	'11',
	'12',
	'13',
	1)";
mysqli_query($conn, $query);
$query = "INSERT INTO " . $questions_table . " (question, answer1, answer2, answer3, solution) VALUES (
	'What is the square root of 144?',
	'11',
	'12',
	'13',
	2)";
mysqli_query($conn, $query);
$query = "INSERT INTO " . $questions_table . " (question, answer1, answer2, answer3, solution) VALUES (
	'What is the square root of 169?',
	'11',
	'12',
	'13',
	3)";
mysqli_query($conn, $query);
$query = "INSERT INTO " . $questions_table . " (question, answer1, answer2, answer3, solution) VALUES (
	'What is the square root of 196?',
	'14',
	'15',
	'16',
	1)";
mysqli_query($conn, $query);
$query = "INSERT INTO " . $questions_table . " (question, answer1, answer2, answer3, solution) VALUES (
	'What is the square root of 225?',
	'14',
	'15',
	'16',
	2)";
mysqli_query($conn, $query);
$query = "INSERT INTO " . $questions_table . " (question, answer1, answer2, answer3, solution) VALUES (
	'What is the square root of 256?',
	'14',
	'15',
	'16',
	3)";
mysqli_query($conn, $query);
$query = "INSERT INTO " . $questions_table . " (question, answer1, answer2, answer3, solution) VALUES (
	'What is the square root of 289?',
	'17',
	'18',
	'19',
	1)";
mysqli_query($conn, $query);
$query = "INSERT INTO " . $questions_table . " (question, answer1, answer2, answer3, solution) VALUES (
	'What is the square root of 324?',
	'17',
	'18',
	'19',
	2)";
mysqli_query($conn, $query);
$query = "INSERT INTO " . $questions_table . " (question, answer1, answer2, answer3, solution) VALUES (
	'What is the square root of 361?',
	'17',
	'18',
	'19',
	3)";
mysqli_query($conn, $query);*/




/* TUTORIAL:

create db: 
	$query = "CREATE DATABASE myDB";
	mysqli_query($conn, $query);
create table: 
	$conn = mysqli_connect($db_servername, $db_username, $db_password, $db_name);
	$query = "CREATE TABLE myT (...)";
	mysqli_query($conn, $query);
insert data:
	$query = "INSERT INTO myT ...";
	mysqli_query($conn, $query);
select data:
	$query = "SELECT ...";
	$response = mysqli_query($conn, $query);
	if (mysqli_num_rows($response) > 0) {
		while($row = mysqli_fetch_assoc($response)) {
			echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
		}
	} else {
  		echo "0 results";
  	}
*/