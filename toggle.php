<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_form";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_GET['id'];

$sql = "UPDATE users SET status = 1 - status WHERE id = $id";

$conn->query($sql);
$conn->close();

header("Location: index.php");
exit();
?>