<!--
    INSERT INTO Intern_App (UIN, Intern_ID, Status, Year)
    VALUES (120, 2, "Done", 2023);
-->

<?php

    // Get input from the insert class form in insert_class_page.php
    $input_UIN = $_POST['UIN'];
    $input_Intern_ID = $_POST['Intern_ID'];
    $input_Status = $_POST['Status'];
    $input_Year = $_POST['Year'];

	// Database connection
	$conn = new mysqli('sql9.freemysqlhosting.net', 'sql9658278', 'ZX2Ybn3eNA', 'sql9658278');
	if ($conn->connect_error) {
		echo "$conn->connect_error";
		die("Connection Failed : " . $conn->connect_error);
	} else {
		$stmt = $conn->prepare("INSERT INTO Intern_App (UIN, Intern_ID, Status, Year) values(?, ?, ?, ?)");
		$stmt->bind_param("ssss", $input_UIN, $input_Intern_ID, $input_Status, $input_Year);
		$execval = $stmt->execute();
		
        if ($execval == 1){
            echo "Inserted internship successfully...";
        }
        else{
            echo "Could not insert internship there was an error...";
        }
		$stmt->close();
		$conn->close();
	}
?>
