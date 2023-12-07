<?php
	session_start();
    // Get input from the insert class form in insert_class_page.php
    $input_Class_ID = $_POST['Class_ID'];
    $input_Status = $_POST['Status'];
    $input_Semester = $_POST['Semester'];
    $input_Year = $_POST['Year'];
	// session variables
    $session_user = $_SESSION['Username'];

	// Database connection
	$conn = new mysqli('sql9.freemysqlhosting.net', 'sql9658278', 'ZX2Ybn3eNA', 'sql9658278');
	if ($conn->connect_error) {
		echo "$conn->connect_error";
		die("Connection Failed : " . $conn->connect_error);
	} else {

		// check if changing own record 
        // SELECT UIN FROM User WHERE Username = "svettsy";
        $check_query = "SELECT UIN FROM User WHERE Username = '" . $session_user . "';";
        $check_result = $conn->query($check_query);
        $row = $check_result->fetch_assoc();
        $uin = $row['UIN'];

		$stmt = $conn->prepare("INSERT INTO Class_Enrollment (UIN, Class_ID, Status, Semester, Year) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("sssss", $uin, $input_Class_ID, $input_Status, $input_Semester, $input_Year);
		$execval = $stmt->execute();
		$stmt->close();
		$conn->close();
        if ($execval == 1){
            echo "Inserted new class successfully<br>";
            echo "<a href='../program_progress_page.php'>Go back to program progress page</a>";
        }
		else{
			echo "Could not add new class please double check UIN entered...";
            echo "<a href='../program_progress_page.php'>Go back to program progress page</a>";
		}
		
	}
?>