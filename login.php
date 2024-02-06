<?php
session_start();

// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "register";

// Error message
$loginError = "";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["signup"])) {
    // Get user input
    $Email = $_POST["email"];
    $Password = $_POST["pswd"];

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare SQL statement
    $stmt = $conn->prepare("SELECT * FROM register.form WHERE email=?");
    $stmt->bind_param("s", $Email);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if user exists
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc(); // Fetch user data
        $hashedPassword = $row["password"];

        // Verify password
        if (password_verify($Password, $hashedPassword)) {
            // Password is correct, set session variables
            $_SESSION["username"] = $row["username"];
            $_SESSION["email"] = $row["email"];
            
            // Redirect to main.php
            header("Location: main.php");
            exit();
        } else {
            // Incorrect password
            $loginError = "Incorrect password";
        }
    } else {
        // User not found
        $loginError = "User not found";
    }

    // Close prepared statement and database connection
    $stmt->close();
    $conn->close();
}
?>
