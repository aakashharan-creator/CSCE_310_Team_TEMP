<?php

session_start();
$conn = new mysqli('sql9.freemysqlhosting.net', 'sql9658278', 'ZX2Ybn3eNA', 'sql9658278');

if ($conn->connect_error) {
    echo "$conn->connect_error";
    die("Connectaion Failed : " . $conn->connect_error);
} else {
    $query = "SELECT * FROM User use index(uin_idx) JOIN College_Student CS ON User.UIN = CS.UIN  WHERE User.Username = '" . $_SESSION['Username'] . "';";
    $result = mysqli_query($conn, $query);
    
    $row = $result->fetch_assoc();
    $user_data = array($row["Username"], $row["First_Name"], $row["M_Initial"], $row["Last_Name"], 
    $row["Email"], $row["Discord_Name"], $row["UIN"], $row["Gender"], $row["Hispanic_or_Latino"], 
    $row["Race"], $row["US_Citizen"], $row["First_Generation"], $row["GPA"], $row["Major"], $row["Minor_1"], 
    $row["Minor_2"], $row["Expected_Graduation"], $row["School"], $row["Classification"], $row["Phone"], 
    $row["Student_Type"]);
}

echo json_encode($user_data);

?>