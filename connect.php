<!-- submit.php -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "properwebsite1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    
    $sql = "INSERT INTO db1 (names) VALUES ('$name')";

    if ($conn->query($sql) === TRUE) {
        header("Location: page2.html");  // Redirect to another page after successful insert
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
