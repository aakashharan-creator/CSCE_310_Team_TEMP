<?php

    // Now $conn is available to use for queries
    require_once '../../../db_connect.php';
    session_start();

    // Get input from the insert class form in insert_cert_page.php
    $input_IA_Num = $_POST['IA_Num'];
    $input_Intern_ID = $_POST['Intern_ID'];
    $input_Status = $_POST['Status'];
    $input_Year = $_POST['Year'];
    // session variables
    $session_user = $_SESSION['Username'];

	// Database connection
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
        $checkuin_query = "SELECT UIN FROM Intern_App WHERE IA_Num = '" . $input_IA_Num . "';";
        $check_uin = $conn->query($checkuin_query);
        $row2 = $check_uin->fetch_assoc();
        $certuin = $row2['UIN'];

        // check if record exists
        $check_query = "SELECT * FROM Intern_App WHERE IA_Num = '" . $input_IA_Num . "';";
        $check_result = $conn->query($check_query);


        if ($check_result->num_rows >= 1) {
            
            if($uin == $certuin){
                // Edit Class_ID
                $update_internID = "UPDATE Intern_App SET Intern_ID = '" . $input_Intern_ID . "' WHERE IA_Num = '" . $input_IA_Num . "';";
                $result_internID = $conn->query($update_internID);

                if (!$result_internID) {
                echo "Could not update intern ID<br>";
                } else {
                echo "Updated intern ID successfully!<br>";  
                }

                // Edit Status 
                $update_status = "UPDATE Intern_App SET Status = '". $input_Status ."' WHERE IA_Num = '". $input_IA_Num . "';";
                $result_status = $conn->query($update_status); 

                if (!$result_status) {
                    echo "Could not update status<br>";
                    } else {
                    echo "Updated status successfully!<br>";  
                }

                // Edit Year
                $update_year = "UPDATE Intern_App SET Year = '". $input_Year ."' WHERE IA_Num = '". $input_IA_Num . "';";
                $result_year = $conn->query($update_year); 

                if (!$result_year) {
                    echo "Could not update year<br>";
                    } else {
                    echo "Updated year successfully!<br>";  
                }

                echo "<a href='../program_progress_page.php'>Go back to program progress page</a>";
                 

            }
            else {
                echo "That internship does not exist for you<br>";
                echo "<a href='../program_progress_page.php'>Go back to program progress page</a>";
            }
           
        }
        else{
            echo "That internship application does not exist could not edit<br>";
            echo "<a href='../program_progress_page.php'>Go back to program progress page</a>";
        }
    }
        
        

?>