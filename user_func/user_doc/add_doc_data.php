<?php
// Create a connection to the database
$conn = new mysqli('sql9.freemysqlhosting.net', 'sql9658278', 'ZX2Ybn3eNA', 'sql9658278');

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get input from the login form
$input_App_Num = $_POST['App_Num'];
$input_Link = $_POST['Link'];
$input_Doc_Type = $_POST['Doc_Type'];

// verify that the document type is one of two available
if ($input_Doc_Type != "Resume" && $input_Doc_Type != "CV") {
    echo "<h2>Error: Invalid document type. Please select \"Resume\" or \"CV\".</h2>";
    echo "<a href='add_docs.php'>Go back</a>";
} else {
    // verify that the application number is valid
    $query_uin = "SELECT * FROM Application WHERE App_Num = '" . $input_App_Num . "';";
    $result = $conn->query($query_uin);

    if (!($result->num_rows >= 1)) {
        echo "<h2>Error: Invalid application number. Please verify that your application exists.</h2>";
        echo "<a href='add_docs.php'>Go back</a>";
    } else {
        // verify that the user is not trying to upload a second resume, as that would be redundant
        $query_uin = "SELECT * FROM Documentation WHERE App_Num = '" . $input_App_Num . "' AND Doc_Type = '" . $input_Doc_Type . "';";
        $result = $conn->query($query_uin);

        if ($result->num_rows >= 1 && $input_Doc_Type == 'Resume') {
            echo "<h2>Error: Only one resume can be uploaded. If you wish to make changes, go to the Edit Existing Documents page.</h2>";
            echo "<a href='add_docs.php'>Go back</a>";
        } else {
            // Query the database for inserting the document
            $query = "INSERT INTO Documentation 
                        (App_Num, Link, Doc_Type) VALUES " . "('" . 
                        $input_App_Num . "', '" . $input_Link . "', '" . $input_Doc_Type . "');";


            if ($conn->query($query)) {
                echo "<h2>New document created successfully!</h2>";
                echo "<a href='add_docs.php'>Go back</a>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
                echo "<a href='add_docs.php'>Go back</a>";
            }
        }
    }
}
$conn->close(); // Close the database connection
