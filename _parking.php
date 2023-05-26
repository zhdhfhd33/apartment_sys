<?php
// MySQL 데이터베이스 연결
$host = 'localhost';
$db   = 'apart';
// $user = 'your_username';
$password = '0000';
$charset = 'utf8mb4';
$username = 'root';

// Create a connection
$conn = new mysqli($host, $username, $password, $db);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = 'select * from parkinglot';
$result = $conn->query($sql);

if ($result) {
    // Fetch all rows as an associative array
    while ($row = $result->fetch_assoc()) {
        // Print all columns of each row
        foreach ($row as $column => $value) {
            echo "$column: $value<br>";
        }
        echo "<br>";
    }
    // Free the result set
    $result->free();
} else {
    // Handle the case when the query fails
    echo "Error executing the query: " . $conn->error;
}

// Close the database connection
$conn->close();


?>