<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_form";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_POST['id'];

$sql = "DELETE FROM users WHERE id = $id";

$conn->query($sql);
$conn->close();

header("Location: index.php");
exit();
?>