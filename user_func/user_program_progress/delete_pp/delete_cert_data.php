<?php
    session_start();
    // Get input from the insert class form in insert_cert_page.php
    $input_CertE_Num = $_POST['CertE_Num'];
    // session variables
    $session_user = $_SESSION['Username'];

	// Database connection
	$conn = new mysqli('sql9.freemysqlhosting.net', 'sql9658278', 'ZX2Ybn3eNA', 'sql9658278');
	if ($conn->connect_error) {
		echo "$conn->connect_error";
		die("Connection Failed : " . $conn->connect_error);
	} else {

        // get uin in cert trying to delete
        $checkuin_query = "SELECT UIN FROM Cert_Enrollment WHERE CertE_NUM = '" . $input_CertE_Num . "';";
        $check_uin = $conn->query($checkuin_query);
        $row2 = $check_uin->fetch_assoc();
        $certuin = $row2['UIN'];

        // get session uin
        $check_query = "SELECT UIN FROM User WHERE Username = '" . $session_user . "';";
        $check_result = $conn->query($check_query);
        $row = $check_result->fetch_assoc();
        $uin = $row['UIN'];

        // check if record exists
        $check_query = "SELECT * FROM Cert_Enrollment WHERE CertE_Num = '" . $input_CertE_Num . "';";
        $check_result = $conn->query($check_query);

        // if exists then edit 
        if ($check_result->num_rows >= 1) {

            // check if uin of mathes uin in record
            if($uin == $certuin){
                // delete certification record
                $delete_cert = "DELETE FROM Cert_Enrollment WHERE CertE_Num = '" . $input_CertE_Num . "';";
                $result_certID = $conn->query($delete_cert);
                echo "Deleted certification succesfully<br>";
                echo "<a href='../program_progress_page.php'>Go back to program progress page</a>";
            }
            else{
                echo "That certification does not exist for you<br>";
                echo "<a href='../program_progress_page.php'>Go back to program progress page</a>";
            }
        }
        else{
            echo "That certification does not exist could not delete<br>";
            echo "<a href='../program_progress_page.php'>Go back to program progress page</a>";
        }
    }


?>
