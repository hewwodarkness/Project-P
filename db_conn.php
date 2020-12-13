<?php  

$servername = "sql2.7m.pl";
$username = "reznikchmo_players";
$password = "ilovepony1";
$dbname = "reznikchmo_players";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
	?>