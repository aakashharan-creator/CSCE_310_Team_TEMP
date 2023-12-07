<?php
// Create a connection to the database
session_start();
$conn = new mysqli('sql9.freemysqlhosting.net', 'sql9658278', 'ZX2Ybn3eNA', 'sql9658278');

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get input from the login form
$input_Program_Num = $_POST['Program_Num'];
$input_Start_Date = $_POST['Start_Date'];
$input_Start_Time = $_POST['Start_Time'];
$input_Location = $_POST['Location'];
$input_End_Date = $_POST['End_Date'];
$input_End_Time = $_POST['End_Time'];
$input_Event_Type = $_POST['Event_Type'];

// verify that the event type chosen is valid
if ($input_Event_Type != "Conference" && $input_Event_Type != "Workshop" && $input_Event_Type != "CTF" && $input_Event_Type != "Hackathon") {
    echo "<h2>Error: Invalid event type. Please select \"Conference\", \"Workshop\", \"CTF\", or \"Hackathon\".</h2>";
    echo "<a href='add_event.php'>Go back</a>";
} else {
    // verify that the program number chosen is valid
    $query_uin = "SELECT * FROM Programs WHERE Program_Num = '" . $input_Program_Num . "';";
    $result = $conn->query($query_uin);

    if (!($result->num_rows >= 1)) {
        echo "<h2>Error: Invalid program number. Please verify that your program exists.</h2>";
        echo "<a href='add_event.php'>Go back</a>";
    } else {
        // retrieve the current admin's UIN to use for the event
        $quer = "SELECT * FROM User WHERE Username = '" . $_SESSION['Username'] . "';";
        $res = mysqli_query($conn, $quer);

        $newrow = $res->fetch_assoc();
        $input_UIN = $newrow["UIN"];

        // query the database to add the new event
        $query = "INSERT INTO Event (UIN, Program_Num, Start_Date, Start_Time, Location, End_Date, End_Time, Event_Type)
                    VALUES " . "('" . $input_UIN . "', '" . $input_Program_Num . "', '" 
                    . $input_Start_Date . "', '" . $input_Start_Time . "', '" . $input_Location . "', '" . $input_End_Date 
                    . "', '" . $input_End_Time . "', '" . $input_Event_Type . "');";

        $result = mysqli_query($conn, $query);
        if ($result) {
            echo "<h2>New event created successfully!</h2>";
            echo "<a href='add_event.php'>Go back</a>";

            // add to event tracking entity
            $row = $result->fetch_assoc();
            $eid = $row["Event_ID"];
            $tracking = "INSERT INTO Event_Tracking (Event_ID, UIN) VALUES ('" . $eid . "', '" . $input_UIN . "');";
            $result2 = mysqli_query($conn, $tracking);
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            echo "<a href='add_event.php'>Go back</a>";
        }
    }
}
$conn->close(); // Close the database connection
