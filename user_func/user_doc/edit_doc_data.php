<?php
    $input_Doc_Num = $_POST['Doc_Num'];
    $input_Link = $_POST['Link'];

	// Database connection
	$conn = new mysqli('sql9.freemysqlhosting.net', 'sql9658278', 'ZX2Ybn3eNA', 'sql9658278');
	if ($conn->connect_error) {
		echo "$conn->connect_error";
		die("Connection Failed: " . $conn->connect_error);
	} else {
		$query1 = "UPDATE Documentation SET Link = '" . $input_Link . "' WHERE Doc_Num = '" . $input_Doc_Num . "';";
		$result1 = $conn->query($query1);

        if ($conn->affected_rows == 0) {
            echo "<h2>Could not update document.</h2>";
            echo "<a href='edit_docs.php'>Go back</a>";
        } else {
            echo "<h2>Updated document successfully!</h2>";
            echo "<a href='edit_docs.php'>Go back</a>";
        }        
	}
?>