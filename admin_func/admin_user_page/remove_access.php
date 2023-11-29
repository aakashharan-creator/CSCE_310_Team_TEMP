<?php
// Create a connection to the database
$conn = new mysqli('sql9.freemysqlhosting.net', 'sql9658278', 'ZX2Ybn3eNA', 'sql9658278');

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get input from the login form
$uin = $_POST['uin'];

$update_access = "UPDATE User SET has_access = False WHERE UIN = '" . $uin . "';";
$conn->query($update_access);

if ($conn->query($update_access)) {
    echo "Successfully revoked access.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close(); // Close the database connection

?>