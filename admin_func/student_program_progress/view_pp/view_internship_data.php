<?php

session_start();
$conn = new mysqli('sql9.freemysqlhosting.net', 'sql9658278', 'ZX2Ybn3eNA', 'sql9658278');

if ($conn->connect_error) {
    echo "$conn->connect_error";
    die("Connection Failed : " . $conn->connect_error);
} else {
    // SELECT CE.* FROM User LEFT JOIN Intern_App CE ON User.UIN = CE.UIN WHERE User.Username = 'svettsy';


    $query = "SELECT CE.* FROM User LEFT JOIN Intern_App CE ON User.UIN = CE.UIN WHERE User.Username = '" . $_SESSION['Username'] . "';";
    
    $result = mysqli_query($conn, $query);
    $rows = array();
    while ($row = $result->fetch_array()) {
        $value = array($row["IA_Num"], $row["UIN"], $row["Intern_ID"], $row["Status"], $row["Year"]);
        array_push($rows, $value);
    }
}

echo json_encode($rows);

?>