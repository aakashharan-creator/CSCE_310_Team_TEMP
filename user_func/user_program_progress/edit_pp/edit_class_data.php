<?php
    // Get input from the insert class form in insert_cert_page.php
    $input_CE_Num = $_POST['CE_Num'];
    $input_Class_ID = $_POST['Class_ID'];
    $input_Year = $_POST['Year'];
    $input_Status = $_POST['Status'];
    $input_Semester = $_POST['Semester'];

	// Database connection
	$conn = new mysqli('sql9.freemysqlhosting.net', 'sql9658278', 'ZX2Ybn3eNA', 'sql9658278');
	if ($conn->connect_error) {
		echo "$conn->connect_error";
		die("Connection Failed : " . $conn->connect_error);
	} else {

        // Edit Class_ID
		$update_classID = "UPDATE Class_Enrollment SET Class_ID = '" . $input_Class_ID . "' WHERE CE_Num = '" . $input_CE_Num . "';";
		$result_classID = $conn->query($update_classID);

        if (!$result_classID) {
        echo "Could not update Class_ID<br>";
        } else {
        echo "Updated Class_ID successfully!<br>";  
        }

        // Edit Year
        $update_year = "UPDATE Class_Enrollment SET Year = '". $input_Year ."' WHERE CE_Num = '". $input_CE_Num . "';";
        $result_year = $conn->query($update_year); 

        if (!$result_year) {
            echo "Could not update year<br>";
            } else {
            echo "Updated year successfully!<br>";  
        }

        // Edit Status 
        $update_status = "UPDATE Class_Enrollment SET Status = '". $input_Status ."' WHERE CE_Num = '". $input_CE_Num . "';";
        $result_status = $conn->query($update_status); 

        if (!$result_status) {
            echo "Could not update status<br>";
            } else {
            echo "Updated status successfully!<br>";  
        }

        // Edit Semester
        $update_semester = "UPDATE Class_Enrollment SET Semester = '". $input_Semester ."' WHERE CE_Num = '". $input_CE_Num . "';";
        $result_semester = $conn->query($update_semester);

        if (!$result_semester) {
            echo "Could not update semester<br>";
            } else {
            echo "Updated semester successfully!<br>";  
        }

	}
?>