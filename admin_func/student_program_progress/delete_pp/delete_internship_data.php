<?php
    // Get input from the insert class form in insert_cert_page.php
    $input_IA_Num = $_POST['IA_Num'];

	// Database connection
	$conn = new mysqli('sql9.freemysqlhosting.net', 'sql9658278', 'ZX2Ybn3eNA', 'sql9658278');
	if ($conn->connect_error) {
		echo "$conn->connect_error";
		die("Connection Failed : " . $conn->connect_error);
	} else {

        $check_query = "SELECT * FROM Intern_App WHERE IA_Num = '" . $input_IA_Num . "';";
        $check_result = $conn->query($check_query);


        if ($check_result->num_rows >= 1) {
            // delete certification record
            $delete_internship = "DELETE FROM Intern_App WHERE IA_Num = '" . $input_IA_Num . "';";
            $result_internship = $conn->query($delete_internship);
            echo "Deleted internship successfully!<br>"; 
            echo "<a href='../program_progress_page.php'>Go back to program progress page</a>";
        }
        else {
            echo "That internship application does not exist could not delete<br>";
            echo "<a href='../program_progress_page.php'>Go back to program progress page</a>";
        }
	}
?>
