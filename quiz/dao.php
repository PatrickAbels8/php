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