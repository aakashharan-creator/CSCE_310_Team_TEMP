<?php

session_start();
$conn = new mysqli('sql9.freemysqlhosting.net', 'sql9658278', 'ZX2Ybn3eNA', 'sql9658278');

// Get input from the insert class
$input_Class_ID = $_POST['Class_ID'];
$input_Status = $_POST['Status'];
$input_Semester = $_POST['Semester'];
$input_Year = $_POST['Year'];


if ($conn->connect_error) {
    echo "$conn->connect_error";
    die("Connection Failed : " . $conn->connect_error);
} else {
    $query = "SELECT * FROM User JOIN College_Student CS ON User.UIN = CS.UIN WHERE User.Username = '" . $_SESSION['Username'] . "';";
    $result = mysqli_query($conn, $query);
    
    $row = $result->fetch_assoc();
    $user_data = array($row["Username"], $row["First_Name"], $row["M_Initial"], $row["Last_Name"], $row["Email"], $row["Discord_Name"]);
}

echo json_encode($user_data);

?>


<!--
  INSERT INTO Class_Enrollment (UIN, Class_ID, Status, Semester, Year)
  VALUES ("120", "310", "In progess", "Fall", "2023");
-->