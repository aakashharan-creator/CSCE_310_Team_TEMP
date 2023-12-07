<?php
    $input_Doc_Num = $_POST['Doc_Num'];

	// Database connection
	$conn = new mysqli('sql9.freemysqlhosting.net', 'sql9658278', 'ZX2Ybn3eNA', 'sql9658278');
	if ($conn->connect_error) {
		echo "$conn->connect_error";
		die("Connection Failed: " . $conn->connect_error);
	} else {
        // delete the selected document
		$query = "DELETE FROM Documentation WHERE Doc_Num = '" . $input_Doc_Num . "';";
		$result = $conn->query($query);

        if ($conn->affected_rows == 0) {
            echo "<h2>Could not delete document.</h2>";
            echo "<a href='delete_docs.php'>Go back</a>";
        } else {
            echo "<h2>Deleted document successfully!</h2>"; 
            echo "<a href='delete_docs.php'>Go back</a>"; 
        }
        
        
	}
?>
