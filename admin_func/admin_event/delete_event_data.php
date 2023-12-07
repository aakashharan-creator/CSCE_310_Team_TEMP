<?php
    $input_Event_ID = $_POST['Event_ID'];

	// Database connection
	$conn = new mysqli('sql9.freemysqlhosting.net', 'sql9658278', 'ZX2Ybn3eNA', 'sql9658278');
	if ($conn->connect_error) {
		echo "$conn->connect_error";
		die("Connection Failed: " . $conn->connect_error);
	} else {
		$query = "DELETE FROM Event WHERE Event_ID = '" . $input_Event_ID . "';";
		$result = $conn->query($query);

        if ($conn->affected_rows == 0) {
            echo "<h2>Could not delete event.</h2>";
            echo "<a href='delete_event.php'>Go back</a>";
        } else {
            echo "<h2>Deleted event successfully!</h2>"; 
            echo "<a href='delete_event.php'>Go back</a>"; 
        }
        
        
	}
?>
