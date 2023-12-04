<!--
CertE_Num
UIN
Cert_ID
Status
Training_Status
Program_Num
Semester
Year
-->

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

        // edit Cert_ID
		$update_certID = "UPDATE Cert_Enrollment SET Cert_ID = '" . $input_Cert_ID . "' WHERE CertE_Num = '" . $input_CertE_Num . "';";
		$result_certID = $conn->query($update_certID);

        if (!$result_certID) {
        echo "Could not update Cert_ID";
        } else {
        echo "Updated Cert_ID successfully!";  
        }

        // Update Status 
        $update_status = "UPDATE Cert_Enrollment SET Status = '". $input_Status ."' WHERE CertE_Num = '". $input_CertE_Num . "';";
        $result_status = $conn->query($update_status); 
        
        if (!$result_status) {
            echo "Could not update status";
            } else {
            echo "Updated status successfully!";  
        }

        // Update Training Status 
        $update_training_status = "UPDATE Cert_Enrollment SET Training_Status = '". $input_Training_Status ."' WHERE CertE_Num = '". $input_CertE_Num . "';";
        $result_training_status = $conn->query($update_training_status); 
        echo $update_training_status;
        
        if (!$result_training_status) {
            echo "Could not update training status";
            } else {
            echo "Updated training status successfully!";  
        }
        
	}
?>

<!--
$query_uin = "SELECT * FROM User WHERE UIN = '" . $uin . "' or Email = '" . $email . "' or Discord_Name = '" . $discord_name . "' or Username = '" . $user_name . "';";
$result = $conn->query($query_uin);

UPDATE Cert_Enrollment
SET Cert_ID = 2
WHERE CertE_Num = 1;
-->