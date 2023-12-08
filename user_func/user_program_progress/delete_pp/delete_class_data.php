<?php
    session_start();
    // Get input from the insert class form in insert_cert_page.php
    $input_CE_Num = $_POST['CE_Num'];
    $session_user = $_SESSION['Username'];
    
	// Database connection
	$conn = new mysqli('sql9.freemysqlhosting.net', 'sql9658278', 'ZX2Ybn3eNA', 'sql9658278');
	if ($conn->connect_error) {
		echo "$conn->connect_error";
		die("Connection Failed : " . $conn->connect_error);
	} else {

        // get session uin
        $check_query = "SELECT UIN FROM User WHERE Username = '" . $session_user . "';";
        $check_result = $conn->query($check_query);
        $row = $check_result->fetch_assoc();
        $uin = $row['UIN'];

        // get uin in class trying to edit 
        $checkuin_query = "SELECT UIN FROM Class_Enrollment WHERE CE_Num = '" . $input_CE_Num . "';";
        $check_uin = $conn->query($checkuin_query);
        $row2 = $check_uin->fetch_assoc();
        $certuin = $row2['UIN'];

        // check if record exists
        $check_query = "SELECT * FROM Class_Enrollment WHERE CE_Num = '" . $input_CE_Num . "';";
        $check_result = $conn->query($check_query);

        if ($check_result->num_rows >= 1) {

            // check if uin of mathes uin in record
            if($uin == $certuin){
                 // delete class record
                $delete_class = "DELETE FROM Class_Enrollment WHERE CE_Num = '" . $input_CE_Num . "';";
                $result_class = $conn->query($delete_class);
                echo "Deleted class successfully!<br>";
                echo "<a href='../program_progress_page.php'>Go back to program progress page</a>";
            }
            else{
                echo "That class does not exist for you<br>";
                echo "<a href='../program_progress_page.php'>Go back to program progress page</a>";
            }
        }
        else{
            echo "That class enrollment does not exist could not delete<br>";
            echo "<a href='../program_progress_page.php'>Go back to program progress page</a>";
        }
        
	}
?>
