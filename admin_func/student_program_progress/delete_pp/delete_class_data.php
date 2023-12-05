<!--
   DELETE FROM CE_Enrollment
    WHERE CE_Num = 4;
-->

<?php
    // Get input from the insert class form in insert_cert_page.php
    $input_CE_Num = $_POST['CE_Num'];

	// Database connection
	$conn = new mysqli('sql9.freemysqlhosting.net', 'sql9658278', 'ZX2Ybn3eNA', 'sql9658278');
	if ($conn->connect_error) {
		echo "$conn->connect_error";
		die("Connection Failed : " . $conn->connect_error);
	} else {

        // delete certification record
		$delete_class = "DELETE FROM Class_Enrollment WHERE CE_Num = '" . $input_CE_Num . "';";
		$result_class = $conn->query($delete_class);

        if (!$result_class) {
        echo "Could not delete class<br>";
        } else {
        echo "Deleted class successfully!<br>";  
        }
        
        
	}
?>
