<?php 

// Create database
// $sql = "CREATE DATABASE asaKew";
// if ($conn->query($sql) === TRUE) {
//     echo "Database created successfully";
// } else {
//     echo "Error creating database: " . $conn->error;
// }

// Connection SQL
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "asaKew";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to create table
// $sql = "CREATE TABLE myRegUsers (
// id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// regFirstName VARCHAR(30) NOT NULL,
// regLastName VARCHAR(30) NOT NULL,
// -- regUserName VARCHAR(30) NOT NULL,
// regEmail VARCHAR(50),
// -- regPassword VARCHAR(30) NOT NULL,
// -- regBio VARCHAR(30) NOT NULL,
// reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// )";

$sql = "SELECT id, firstname, lastname FROM myRegUsers ORDER BY lastname";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();




















?>