<?php
session_start();

// Replace these values with your actual database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "register";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize signup success message
$signupSuccess = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["signup"])) {
    // Handle signup logic
    $username = $_POST["txt"];
    $email = $_POST["email"];
    $password = $_POST["pswd"];

    // Hash the password for security
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Use prepared statement to insert data into the database
    $stmt = $conn->prepare("INSERT INTO register.form (username, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $email, $hashedPassword);

    if ($stmt->execute()) {
        $signupSuccess = "Thank you for connecting with us!";
        echo "<script>alert('$signupSuccess');</script>";
        // Redirect to index.html after successful signup
        header("Location: index.php");
        exit(); // Ensure that the script stops executing after the header redirect
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the prepared statement
    $stmt->close();
}

// Close the database connection
$conn->close();
?>
