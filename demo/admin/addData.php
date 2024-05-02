
<?php
include('./config/dbcon.php');

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];

// Prepare SQL statement
$sql = "INSERT INTO addData (name, email, phone, password) VALUES (?, ?, ?, ?)";

// Prepare and bind parameters
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $name,  $email, $phone, $password);

// Execute the statement
if ($stmt->execute() === TRUE) {
    // Close statement and connection
    $stmt->close();
    $conn->close();
    
    // Redirect to an HTML page
    header("Location: success.html");
    exit;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close statement and connection
$stmt->close();
$conn->close();

?>
