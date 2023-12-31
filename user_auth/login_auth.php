<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate user credentials using a database (e.g., MySQL)

    // Create a connection to the database
    $conn = new mysqli('sql9.freemysqlhosting.net', 'sql9658278', 'ZX2Ybn3eNA', 'sql9658278');

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get input from the login form
    $input_username = $_POST['Username'];
    $input_password = $_POST['Password'];

    // Query the database for user authentication
    $query = "SELECT * FROM User WHERE Username = '$input_username' AND Password = '$input_password'";
    $result = $conn->query($query);

    // Check if a user with the given credentials exists
    if ($result->num_rows == 1) {
        $_SESSION['Username'] = $input_username; // Set session variable
        // Check if the session variable is set after authentication
        if (isset($_SESSION['Username'])) {
            // You can perform further actions or redirection here after successful authentication
            $user = $result->fetch_assoc();
            $_SESSION["USER_TYPE"] = $user["User_Type"];
            $_SESSION["UIN"] = $user["UIN"];
            if ($user["has_access"])
                if ($user["User_Type"] == "student")
                    header("Location: ../user_func/home.php"); // Redirect to dashboard upon successful login
                else
                    header("Location: ../admin_func/admin_home.php"); // Redirect to dashboard upon successful login
            else
                echo "Authentication failed. Access to account has been revoked.";
        } else {
            echo "Authentication failed. Invalid username or password.";
        }

        exit();
    } else {
        $error = "Invalid username or password";
        echo $error;
    }

    $conn->close(); // Close the database connection

}
?>
<!-- ... Remaining HTML and login form -->