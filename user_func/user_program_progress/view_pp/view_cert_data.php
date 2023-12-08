<?php

// Now $conn is available to use for queries
require_once '../../../db_connect.php';

session_start();

if ($conn->connect_error) {
    echo "$conn->connect_error";
    die("Connection Failed : " . $conn->connect_error);
} else {
    $query = "SELECT CE.* FROM User LEFT JOIN Cert_Enrollment CE ON User.UIN = CE.UIN WHERE User.Username = '" . $_SESSION['Username'] . "';";
    $result = mysqli_query($conn, $query);
    $rows = array();
    while ($row = $result->fetch_array()) {
        $value = array($row["CertE_Num"], $row["UIN"], $row["Cert_ID"], $row["Status"], $row["Training_Status"], $row["Program_Num"], $row["Semester"], $row["Year"]);
        array_push($rows, $value);
    }
}

echo json_encode($rows);

?>