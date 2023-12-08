<?php
    $input_Event_ID = $_POST['Event_ID'];
    $input_Start_Date = $_POST['Start_Date'];
    $input_Start_Time = $_POST['Start_Time'];
    $input_Location = $_POST['Location'];
    $input_End_Date = $_POST['End_Date'];
    $input_End_Time = $_POST['End_Time'];

    // variable used to skip fields that were not changed
    $skip = false;

	// Database connection
	$conn = new mysqli('sql9.freemysqlhosting.net', 'sql9658278', 'ZX2Ybn3eNA', 'sql9658278');
	if ($conn->connect_error) {
		echo "$conn->connect_error";
		die("Connection Failed: " . $conn->connect_error);
	} else {
        // create a view for the event queries
        $createViewQuery = "CREATE VIEW Event_View AS SELECT * FROM Event;";
        $createViewResult = $conn->query($createViewQuery);

        // check if event id is valid
        $query = "SELECT * FROM Event_View WHERE Event_ID = '" . $input_Event_ID . "';";
        $result = $conn->query($query);
        if ($conn->affected_rows == 0) {
            echo "<h2>Invalid Event ID.</h2>";
            echo "<a href='edit_event.php'>Go back</a>";
            exit;
        }

        // start date
        if ($input_Start_Date == "0"){
            $skip = true; 
        }
        
        if (!$skip) {
            $query1 = "UPDATE Event_View SET Start_Date = '" . $input_Start_Date . "' WHERE Event_ID = '" . $input_Event_ID . "';";
            $result1 = $conn->query($query1);

            if ($conn->affected_rows == 0) {
                echo "<h2>Invalid Start Date.</h2>";
                echo "<a href='edit_event.php'>Go back</a>";
            }
        }
        $skip = false;

        // start time
        if ($input_Start_Time == "0"){
            $skip = true; 
        }
        
        if (!$skip) {
            $query1 = "UPDATE Event_View SET Start_Time = '" . $input_Start_Time . "' WHERE Event_ID = '" . $input_Event_ID . "';";
            $result1 = $conn->query($query1);
        
            if ($conn->affected_rows == 0) {
                echo "<h2>Invalid Start Time.</h2>";
                echo "<a href='edit_event.php'>Go back</a>";
            }
        }
        $skip = false;

        // location
        if ($input_Location == "0"){
            $skip = true; 
        }
        
        if (!$skip) {
            $query1 = "UPDATE Event_View SET Location = '" . $input_Location . "' WHERE Event_ID = '" . $input_Event_ID . "';";
            $result1 = $conn->query($query1);

            if ($conn->affected_rows == 0) {
                echo "<h2>Invalid Location.</h2>";
                echo "<a href='edit_event.php'>Go back</a>";
            }
        }
        $skip = false;

        // end date
        if ($input_End_Date == "0"){
            $skip = true; 
        }
        
        if (!$skip) {
            $query1 = "UPDATE Event_View SET End_Date = '" . $input_End_Date . "' WHERE Event_ID = '" . $input_Event_ID . "';";
            $result1 = $conn->query($query1);

            if ($conn->affected_rows == 0) {
                echo "<h2>Invalid End Date.</h2>";
                echo "<a href='edit_event.php'>Go back</a>";
            }
        }
        $skip = false;

        // end time
        if ($input_Start_Date == "0"){
            $skip = true; 
        }
        
        if (!$skip) {
            $query1 = "UPDATE Event_View SET End_Time = '" . $input_End_Time . "' WHERE Event_ID = '" . $input_Event_ID . "';";
            $result1 = $conn->query($query1);

            if ($conn->affected_rows == 0) {
                echo "<h2>Invalid End Time.</h2>";
                echo "<a href='edit_event.php'>Go back</a>";
            }
        }
        echo "<h2>Updated event successfully!</h2>";
        echo "<a href='edit_event.php'>Go back</a>";
	}
?>
