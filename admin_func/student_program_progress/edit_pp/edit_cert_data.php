<?php
    // Get input from the insert class form in insert_cert_page.php
    $input_CertE_Num = $_POST['CertE_Num'];
    $input_UIN = $_POST['UIN'];
    $input_Cert_ID = $_POST['Cert_ID'];
    $input_Status = $_POST['Status'];
    $input_Training_Status = $_POST['Training_Status'];
    $input_Program_Num = $_POST['Program_Num'];
    $input_Semester = $_POST['Semester'];
    $input_Year = $_POST['Year'];

	// Database connection
	$conn = new mysqli('sql9.freemysqlhosting.net', 'sql9658278', 'ZX2Ybn3eNA', 'sql9658278');
	if ($conn->connect_error) {
		echo "$conn->connect_error";
		die("Connection Failed : " . $conn->connect_error);
	} else {

        $check_query = "SELECT * FROM Cert_Enrollment WHERE CertE_Num = '" . $input_CertE_Num . "';";
        $check_result = $conn->query($check_query);
        if ($check_result->num_rows >= 1) {
            // edit Cert_ID
            $update_certID = "UPDATE Cert_Enrollment SET UIN = '" . $input_UIN . "' WHERE CertE_Num = '" . $input_CertE_Num . "';";
            $result_certID = $conn->query($update_certID);

            if (!$result_certID) {
            echo "Could not update UIN<br>";
            } else {
            echo "Updated UIN successfully!<br>";  
            }

            // edit Cert_ID
            $update_certID = "UPDATE Cert_Enrollment SET Cert_ID = '" . $input_Cert_ID . "' WHERE CertE_Num = '" . $input_CertE_Num . "';";
            $result_certID = $conn->query($update_certID);

            if (!$result_certID) {
            echo "Could not update Cert_ID<br>";
            } else {
            echo "Updated Cert_ID successfully!<br>";  
            }

            // Update Status 
            $update_status = "UPDATE Cert_Enrollment SET Status = '". $input_Status ."' WHERE CertE_Num = '". $input_CertE_Num . "';";
            $result_status = $conn->query($update_status); 
            
            if (!$result_status) {
                echo "Could not update status<br>";
                } else {
                echo "Updated status successfully!<br>";  
            }

            // Update Training Status 
            $update_training_status = "UPDATE Cert_Enrollment SET Training_Status = '". $input_Training_Status ."' WHERE CertE_Num = '". $input_CertE_Num . "';";
            $result_training_status = $conn->query($update_training_status); 
            
            if (!$result_training_status) {
                echo "Could not update training status<br>";
                } else {
                echo "Updated training status successfully!<br>";  
            }

            // Proram Number
            $update_program_num = "UPDATE Cert_Enrollment SET Program_Num = '". $input_Program_Num ."' WHERE CertE_Num = '". $input_CertE_Num . "';";
            $result_program_num = $conn->query($update_program_num); 
            
            if (!$result_program_num) {
                echo "Could not update program number<br>";
                } else {
                echo "Updated program number successfully!<br>";  
            }

            // Update Sesmester
            $update_semester = "UPDATE Cert_Enrollment SET Semester = '". $input_Semester ."' WHERE CertE_Num = '". $input_CertE_Num . "';";
            $result_semester = $conn->query($update_semester); 
            
            if (!$result_semester) {
                echo "Could not update semester<br>";
                } else {
                echo "Updated semester successfully!<br>";  
            }

            // Update Year
            $update_year = "UPDATE Cert_Enrollment SET Year = '". $input_Year ."' WHERE CertE_Num = '". $input_CertE_Num . "';";
            $result_year = $conn->query($update_year); 

            echo "Edited certificate successfully!<br>";  
            echo "<a href='../program_progress_page.php'>Go back to program progress page</a>";

        }
        else{

            echo "That certification does not exist could not edit<br>";
            echo "<a href='../program_progress_page.php'>Go back to program progress page</a>";
        }

        
	}
?>
