<!--
   DELETE FROM Cert_Enrollment
    WHERE CertE_Num = 4;
-->

<?php
    // Get input from the insert class form in insert_cert_page.php
    $input_CertE_Num = $_POST['CertE_Num'];

	// Database connection
	$conn = new mysqli('sql9.freemysqlhosting.net', 'sql9658278', 'ZX2Ybn3eNA', 'sql9658278');
	if ($conn->connect_error) {
		echo "$conn->connect_error";
		die("Connection Failed : " . $conn->connect_error);
	} else {

        // delete certification record
		$delete_cert = "DELETE FROM Cert_Enrollment WHERE CertE_Num = '" . $input_CertE_Num . "';";
		$result_certID = $conn->query($delete_cert);
        echo $update_certID;

        if (!$result_certID) {
        echo "Could not delete certificate<br>";
        } else {
        echo "Deleted certificate successfully!<br>";  
        }
	}
?>