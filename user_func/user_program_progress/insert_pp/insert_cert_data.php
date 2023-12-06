<?php

    // Get input from the insert class form in insert_cert_page.php
    $input_UIN = $_POST['UIN'];
    $input_Cert_ID = $_POST['Cert_ID'];
    $input_Status = $_POST['Status'];
    $input_Training_Status = $_POST['Training_Status'];
    $input_Program_Num = $_POST['Program_Num'];
    $input_Semester = $_POST['Semester'];
    $input_Year = $_POST['Year'];

	// Database connection
	$conn = new mysqli('sql9.freemysqlhosting.net', 'sql9658278', 'ZX2Ybn3eNA', 'sql9658278');
	if ($conn->connect_error) {
		echo "$conn->connect_error";
		die("Connection Failed : " . $conn->connect_error);
	} else {
		$stmt = $conn->prepare("INSERT INTO Cert_Enrollment (UIN, Cert_ID, Status, Training_Status, Program_Num, Semester, Year) values(?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssss", $input_UIN, $input_Cert_ID, $input_Status, $input_Training_Status, $input_Program_Num, $input_Semester, $input_Year);
		$execval = $stmt->execute();
		$stmt->close();
		$conn->close();
        $stmt = null;
        $conn = null; 

        if ($execval == 1){
            echo "Inserted new certification successfully...";
            header("Location: ../program_progress_page.php");
        }
        else{
            echo "Could not add new certificaition please double check parameters entered...";
        }
	}
?>