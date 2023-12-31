<?php
    // Now $conn is available to use for queries
    require_once '../../../db_connect.php';

    session_start();
    // Get input from the insert class form in insert_cert_page.php
    $input_Cert_ID = $_POST['Cert_ID'];
    $input_Status = $_POST['Status'];
    $input_Training_Status = $_POST['Training_Status'];
    $input_Program_Num = $_POST['Program_Num'];
    $input_Semester = $_POST['Semester'];
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


        $stmt = $conn->prepare("INSERT INTO Cert_Enrollment (UIN, Cert_ID, Status, Training_Status, Program_Num, Semester, Year) values(?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssss", $uin, $input_Cert_ID, $input_Status, $input_Training_Status, $input_Program_Num, $input_Semester, $input_Year);
		$execval = $stmt->execute();
		$stmt->close();
		$conn->close();
        $stmt = null;
        $conn = null; 
        if ($execval == 1){
            echo "Inserted new certification successfully<br>";
            echo "<a href='../program_progress_page.php'>Go back to program progress page</a>";

        }
        else{
            echo "Could not add new certificaition please double check UIN entered...";
            echo "<a href='../program_progress_page.php'>Go back to program progress page</a>";
        }
        

	}
?>
<!--
    
-->