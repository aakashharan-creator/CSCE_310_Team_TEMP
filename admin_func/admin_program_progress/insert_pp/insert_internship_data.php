<?php
    // Now $conn is available to use for queries
    require_once '../../../db_connect.php';

    // Get input from the insert class form in insert_class_page.php
    $input_UIN = $_POST['UIN'];
    $input_Intern_ID = $_POST['Intern_ID'];
    $input_Status = $_POST['Status'];
    $input_Year = $_POST['Year'];

	// Database connection
	if ($conn->connect_error) {
		echo "$conn->connect_error";
		die("Connection Failed : " . $conn->connect_error);
	} else {

        $check_query = "SELECT * FROM College_Student WHERE UIN = '" . $input_UIN . "';";
        $check_result = $conn->query($check_query);
        if ($check_result->num_rows >= 1) {
            $stmt = $conn->prepare("INSERT INTO Intern_App (UIN, Intern_ID, Status, Year) values(?, ?, ?, ?)");
            $stmt->bind_param("ssss", $input_UIN, $input_Intern_ID, $input_Status, $input_Year);
            $execval = $stmt->execute();
            $stmt->close();
            $conn->close();
            echo "Inserted new internship successfully<br>";
            echo "<a href='../program_progress_page.php'>Go back to program progress page</a>";
        }
        else {
            echo "That college student does not exist could not insert internship<br>";
            echo "<a href='../program_progress_page.php'>Go back to program progress page</a>";
        }

		
       
	}
?>
