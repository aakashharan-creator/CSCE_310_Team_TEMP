<?php
    // Now $conn is available to use for queries
    require_once '../../../db_connect.php';
    session_start();

    // Get input from the insert class form in insert_class_page.php
    $input_UIN = $_POST['UIN'];
    $input_Intern_ID = $_POST['Intern_ID'];
    $input_Status = $_POST['Status'];
    $input_Year = $_POST['Year'];
    // session variables
    $session_user = $_SESSION['Username'];

	// Database connection
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

		$stmt = $conn->prepare("INSERT INTO Intern_App (UIN, Intern_ID, Status, Year) values(?, ?, ?, ?)");
		$stmt->bind_param("ssss", $uin, $input_Intern_ID, $input_Status, $input_Year);
		$execval = $stmt->execute();
		
        if ($execval == 1){
            echo "Inserted new internship successfully<br>";
            echo "<a href='../program_progress_page.php'>Go back to program progress page</a>";
        }
        else{
            echo "<a href='../program_progress_page.php'>Go back to program progress page</a>";
        }
		$stmt->close();
		$conn->close();
	}
?>
