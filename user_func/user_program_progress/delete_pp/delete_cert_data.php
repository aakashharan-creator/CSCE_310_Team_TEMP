<?php
    // Get input from the insert class form in insert_cert_page.php
    $input_CertE_Num = $_POST['CertE_Num'];

	// Database connection
	$conn = new mysqli('sql9.freemysqlhosting.net', 'sql9658278', 'ZX2Ybn3eNA', 'sql9658278');
	if ($conn->connect_error) {
		echo "$conn->connect_error";
		die("Connection Failed : " . $conn->connect_error);
	} else {


        $check_query = "SELECT * FROM Cert_Enrollment WHERE CertE_Num = '" . $input_CertE_Num . "';";
        $check_result = $conn->query($check_query);
        if ($check_result->num_rows >= 1) {
            // delete certification record
            $delete_cert = "DELETE FROM Cert_Enrollment WHERE CertE_Num = '" . $input_CertE_Num . "';";
            $result_certID = $conn->query($delete_cert);
            echo "Deleted certification succesfully<br>";
            echo "<a href='../program_progress_page.php'>Go back to program progress page</a>";
        }
        else{
            echo "That certification does not exist could not delete<br>";
            echo "<a href='../program_progress_page.php'>Go back to program progress page</a>";
        }
    }


?>
