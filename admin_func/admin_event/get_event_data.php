<?php

session_start();
$conn = new mysqli('sql9.freemysqlhosting.net', 'sql9658278', 'ZX2Ybn3eNA', 'sql9658278');
if ($conn->connect_error) {
    echo "$conn->connect_error";
    die("Connection Failed : " . $conn->connect_error);
} else {
    // fetch all information from the event table
    $result = mysqli_query($conn, "SELECT * FROM Event");
    $rows = array();
    while ($row = $result->fetch_array()) {
        $value = array($row["Event_ID"], $row["UIN"], $row["Program_Num"], $row["Start_Date"], $row["Start_Time"],
                $row["Location"], $row["End_Date"], $row["End_Time"], $row["Event_Type"]);
        array_push($rows, $value);
    }
}

echo json_encode($rows);

?>