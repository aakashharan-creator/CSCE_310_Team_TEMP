<?php

    // Get input from the insert class form in insert_class_page.php
    $input_UIN = $_POST['UIN'];
    $input_Class_ID = $_POST['Class_ID'];
    $input_Status = $_POST['Status'];
    $input_Semester = $_POST['Semester'];
    $input_Year = $_POST['Year'];

	// Database connection
	$conn = new mysqli('sql9.freemysqlhosting.net', 'sql9658278', 'ZX2Ybn3eNA', 'sql9658278');
	if ($conn->connect_error) {
		echo "$conn->connect_error";
		die("Connection Failed : " . $conn->connect_error);
	} else {
		$stmt = $conn->prepare("INSERT INTO Class_Enrollment (UIN, Class_ID, Status, Semester, Year) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("sssss", $input_UIN, $input_Class_ID, $input_Status, $input_Semester, $input_Year);
		$execval = $stmt->execute();
		
		$stmt->close();
		$conn->close();
		
        if ($execval == 1){
            echo "Inserted class successfully...";
			header("Location: ../program_progress_page.php");
        }
		else{
			echo "Error inserting class...";
		}
		
	}
?>