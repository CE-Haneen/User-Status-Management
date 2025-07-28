<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Form</title>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Cairo', sans-serif;
            margin: 40px;
            background-color: #f2f2f2;
        }

        h2 {
            color: #333;
        }

        form {
            margin-bottom: 30px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"] {
            padding: 6px;
            margin-right: 10px;
            background-color: #f9f9f9;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            padding: 6px 12px;
            background-color: #333;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 3px;
        }

        input[type="submit"]:hover {
            background-color: #000;
        }

        table {
            border-collapse: collapse;
            width: 80%;
            background-color: white;
        }

        th, td {
            border: 1px solid #000;
            padding: 8px 12px;
            text-align: center;
        }

        th {
            background-color: #e9ecef;
        }

        a.btn {
            padding: 4px 8px;
            font-size: 13px;
            background-color: #333;
            color: white;
            border: none;
            border-radius: 3px;
            text-decoration: none;
            display: inline-block;
            margin: 1px;
            width: 60px;
            text-align: center;
        }

        a.btn:hover {
            background-color: #000;
        }
    </style>
</head>
<body>

<h2>Enter User Info</h2>
<form action="insert.php" method="post">
    <label>Name:</label>
    <input type="text" name="name" required>
    <label>Age:</label>
    <input type="number" name="age" required>
    <input type="submit" value="Submit">
</form>

<h2>Users List</h2>
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Age</th>
        <th>Status</th>
        <th>Action</th>
    </tr>

<?php
$conn = new mysqli("localhost", "root", "", "user_form");
$result = $conn->query("SELECT * FROM users");

while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>".$row['id']."</td>";
    echo "<td>".$row['name']."</td>";
    echo "<td>".$row['age']."</td>";
    echo "<td>".$row['status']."</td>";
    echo "<td>
        <a href='toggle.php?id=".$row['id']."' class='btn'>Toggle</a>
        <a href='delete.php?id=".$row['id']."' class='btn'>Delete</a>
    </td>";
    echo "</tr>";
}
$conn->close();
?>

</table>

</body>
</html>