<?php
// Database connection
$host = 'localhost'; // Change if different
$user = 'root';      // Your MySQL username
$pass = '';          // Your MySQL password
$dbname = 'hussaincatering'; // Your database name

$conn = new mysqli($host, $user, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form data
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $datetime = $conn->real_escape_string($_POST['datetime']);
    $no_of_people = $conn->real_escape_string($_POST['no_of_people']);
    $special_request = $conn->real_escape_string($_POST['message']);

    $sql = "INSERT INTO booking (name, email, datetime, no_of_people, special_request) 
            VALUES ('$name', '$email', '$datetime', '$no_of_people', '$special_request')";

    if ($conn->query($sql) === TRUE) {
        echo "Booking successfully submitted!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
