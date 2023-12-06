<!--
   DELETE FROM CE_Enrollment
    WHERE CE_Num = 4;
-->

<?php
    // Get input from the insert class form in insert_cert_page.php
    $input_IA_Num = $_POST['IA_Num'];

	// Database connection
	$conn = new mysqli('sql9.freemysqlhosting.net', 'sql9658278', 'ZX2Ybn3eNA', 'sql9658278');
	if ($conn->connect_error) {
		echo "$conn->connect_error";
		die("Connection Failed : " . $conn->connect_error);
	} else {

        // delete certification record
		$delete_internship = "DELETE FROM Intern_App WHERE IA_Num = '" . $input_IA_Num . "';";
		$result_internship = $conn->query($delete_internship);

        if (!$result_internship) {
            echo "Could not delete internship<br>";
        } else {
            echo "Deleted internship successfully!<br>"; 
            header("Location: ../program_progress_page.php");
        }
        
        
	}
?>
