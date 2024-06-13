<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Vulnerable SQL query with unsanitized input
if (isset($_GET['user_id'])) {
    $user_id = $_GET['user_id'];
    $sql = "SELECT * FROM users WHERE id = $user_id";  // SQL Injection vulnerability

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["email"]. "<br>";
        }
    } else {
        echo "0 results";
    }
} else {
    echo "No user_id parameter provided.";
}

$conn->close();
?>
