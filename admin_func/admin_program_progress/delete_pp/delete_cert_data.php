<?php
    // Now $conn is available to use for queries
    require_once '../../../db_connect.php';
    // Get input from the insert class form in insert_cert_page.php
    $input_CertE_Num = $_POST['CertE_Num'];

	// Database connection
	if ($conn->connect_error) {
		echo "$conn->connect_error";
		die("Connection Failed : " . $conn->connect_error);
	} else {

        $check_query = "SELECT * FROM Cert_Enrollment WHERE CertE_Num = '" . $input_CertE_Num . "';";
        $check_result = $conn->query($check_query);
        if ($check_result->num_rows >= 1) {
            // if record exists delete certification record
            $delete_cert = "DELETE FROM Cert_Enrollment WHERE CertE_Num = '" . $input_CertE_Num . "';";
            $result_certID = $conn->query($delete_cert);
            echo "Deleted certificate successfully!<br>";
            echo "<a href='../program_progress_page.php'>Go back to program progress page</a>";
        }
        else {
            echo "That certification does not exist could not delete<br>";
            echo "<a href='../program_progress_page.php'>Go back to program progress page</a>";
        }
	}
?>

