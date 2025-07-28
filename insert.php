<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_form";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$age = $_POST['age'];

$sql = "INSERT INTO users (name, age, status) VALUES ('$name', '$age', 0)";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>