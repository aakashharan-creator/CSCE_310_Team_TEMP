<?php
// Create a connection to the database
$conn = new mysqli('sql9.freemysqlhosting.net', 'sql9658278', 'ZX2Ybn3eNA', 'sql9658278');

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get input from the login form
$uin = $_POST['uin'];

$check_user_exists = "SELECT * FROM User WHERE UIN = '" . $uin . "';";
$result = $conn->query($check_user_exists);

if ($result->num_rows == 0) {
    echo "No user with that UIN exists.";
} else {

    $update_access = "UPDATE User SET has_access = False WHERE UIN = '" . $uin . "';";

    if ($conn->query($update_access)) {
        echo "Successfully revoked access.";
        echo $update_access;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close(); // Close the database connection

?>