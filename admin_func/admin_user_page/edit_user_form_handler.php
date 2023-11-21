<?php
// Create a connection to the database
$conn = new mysqli('sql9.freemysqlhosting.net', 'sql9658278', 'ZX2Ybn3eNA', 'sql9658278');

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get input from the login form
$uin = $_POST['uin'];
$fname = $_POST['fname'];
$m_init = $_POST['m_init'];
$lname = $_POST['lname'];
$user_name = $_POST['user_name'];
$password = $_POST['password'];
$email = $_POST['email'];
$discord_name = $_POST['discord_name'];

$query_uin = "SELECT * FROM User WHERE UIN = '" . $uin . "' or Email = '" . $email . "' or Discord_Name = '" . $discord_name . "' or Username = '" . $user_name . "';";
$result = $conn->query($query_uin);

if ($result->num_rows == 0) {
    echo "<h2>Error: User with that UIN, Email, Discord, or Username doesn't exist</h2>";
    echo "<a href='add_user_page.php'>Go back</a>";
} else {
    // Query the database for user authentication
    $query = "UPDATE User 
                (UIN, First_Name, M_Initial, Last_Name, Username, `Password`, User_Type, Email, Discord_Name) VALUES
                " . "('" . $uin . "', '" . $fname . "', '" . $m_init . "', '" . $lname . "', '" . $user_name . "', '"
        . $password . "', 'admin', '" . $email . "', '" . $discord_name . "');";


    if ($conn->query($query)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close(); // Close the database connection
