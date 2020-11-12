<?php

$db_servername = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "myDB" //contodo

$conn = mysqli_connect($db_servername, $db_username, $db_password);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

/*
create db: 
	$query = "CREATE DATABASE myDB";
	mysqli_query($conn, $query);
create table: 
	$conn = mysqli_connect($db_servername, $db_username, $db_password, $db_name)
	$query = "CREATE TABLE myT (...)";
	mysqli_query($conn, $query);
insert data:
	$query = "INSERT INTO myT ...";
	mysqli_query($conn, $query);
select data:
	$query = "SELECT ...";
	$response = mysqli_query($conn, $query);
	if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result)) {
			echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
		}
	} else {
  		echo "0 results";
  	}
*/