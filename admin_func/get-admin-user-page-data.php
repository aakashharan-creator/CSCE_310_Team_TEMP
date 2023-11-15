<?php

// echo json_encode(42);

$conn = new mysqli('sql9.freemysqlhosting.net', 'sql9658278', 'ZX2Ybn3eNA', 'sql9658278');
if ($conn->connect_error) {
    echo "$conn->connect_error";
    die("Connection Failed : " . $conn->connect_error);
} else {
    $result = mysqli_query($conn, "SELECT * FROM User");
    $rows = array();
    while ($row = $result->fetch_array()) {
        $value = array($row["UIN"], $row["First_Name"], $row["User_Type"]);
        array_push($rows, $value);
    }
}

echo json_encode($rows);
?>
