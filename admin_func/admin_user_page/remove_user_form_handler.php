<?php
// Create a connection to the database
$conn = new mysqli('sql9.freemysqlhosting.net', 'sql9658278', 'ZX2Ybn3eNA', 'sql9658278');

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get input from the login form
$uin = $_POST['uin'];

// Query the database for user authentication
$get_user = "SELECT * FROM User WHERE UIN = '" . $uin . "';";
$delete_user = "DELETE FROM User WHERE UIN = '" . $uin . "';";
$delete_event_tracking = "DELETE FROM Event_Tracking WHERE UIN = '" . $uin . "';";
$delete_college_student = "DELETE FROM College_Student WHERE UIN = '" . $uin . "';";
$delete_intern_app = "DELETE FROM Intern_App WHERE UIN = '" . $uin . "';";
$delete_cert_enrollment = "DELETE FROM Cert_Enrollment WHERE UIN = '" . $uin . "';";
$delete_track = "DELETE FROM Track WHERE UIN = '" . $uin . "';";
$delete_class_enrollment = "DELETE FROM Class_Enrollment WHERE UIN = '" . $uin . "';";
// delete documents as well
$get_app_num = "SELECT App_Num FROM Application WHERE UIN = '" . $uin . "';";
$delete_application = "DELETE FROM Application WHERE UIN = '" . $uin . "';";

$result = $conn->query($get_user);
$row = $result->fetch_assoc();

if ($row) {
    if ($row["User_Type"] == "admin") {
        $conn->query($delete_user);
    } else {
        $result = $conn->query($get_app_num);
        $row = $result->fetch_assoc();
        $app_num = $row["App_Num"];

        $delete_documents = "DELETE FROM Documentation WHERE App_Num = " . $app_num . ";";
        $update_event = "UPDATE Event SET UIN = '0' WHERE UIN = '" . $uin . "';";

        $conn->query($delete_intern_app);
        $conn->query($delete_cert_enrollment);
        $conn->query($delete_class_enrollment);

        $conn->query($delete_track);
        $conn->query($delete_application);
        $conn->query($delete_event_tracking);
        $conn->query($update_event);

        $conn->query($delete_user);
        $conn->query($delete_college_student);
        $conn->query($delete_documents);

        echo "Successfully deleted all traces of user from database.";
    }
} else {
    echo "No user with that UIN exists.";
}


$conn->close(); // Close the database connection
