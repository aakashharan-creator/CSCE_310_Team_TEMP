<?php

session_start();
$conn = new mysqli('sql9.freemysqlhosting.net', 'sql9658278', 'ZX2Ybn3eNA', 'sql9658278');
// Get input from the form
$input_UIN = $_POST['UIN'];

if ($conn->connect_error) {
    echo "$conn->connect_error";
    die("Connection Failed : " . $conn->connect_error);
} else {
    $query = "SELECT * FROM Cert_Enrollment WHERE UIN = '" . $input_UIN . "';";
    $result = mysqli_query($conn, $query);
    $rows = array();
    while ($row = $result->fetch_array()) {
        $value = array($row["CertE_Num"], $row["UIN"], $row["Cert_ID"], $row["Status"], $row["Training_Status"], $row["Program_Num"], $row["Semester"], $row["Year"]);
        array_push($rows, $value);
    }
}

echo json_encode($rows);
// store rows
$_SESSION['rows'] = $rows;

// Redirect 
header("Location: view_pp_page.php"); 
exit;

?>