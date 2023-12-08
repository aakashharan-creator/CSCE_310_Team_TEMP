<?php

session_start();
$conn = new mysqli('sql9.freemysqlhosting.net', 'sql9658278', 'ZX2Ybn3eNA', 'sql9658278');

if ($conn->connect_error) {
    echo "$conn->connect_error";
    die("Connection Failed : " . $conn->connect_error);
} else {
    // create indexes for the documentation queries
    $indexquery = "CREATE INDEX Doc_Num_App_Num_Index ON Documentation (Doc_Num, App_Num);";
    $indexresult = $conn->query($indexquery);

    // fetch information to retrieve the current user's UIN
    $quer = "SELECT * FROM User WHERE Username = '" . $_SESSION['Username'] . "';";
    $res = mysqli_query($conn, $quer);

    $newrow = $res->fetch_assoc();
    $newuin = $newrow["UIN"];

    $query = "SELECT * FROM Application WHERE UIN = '" . $newuin . "';";
    $result = mysqli_query($conn, $query);

    // Initialize $doc_data as an empty array
    $doc_data = array();
    
    // retrieve all rows where the application number matches any found under the user's UIN
    while($row = $result->fetch_assoc()) {
        $app_num = $row["App_Num"];

        $query2 = "SELECT * FROM Documentation WHERE App_Num = '" . $app_num . "';";
        $result2 = mysqli_query($conn, $query2);

        while ($row2 = $result2->fetch_array()) {
            // Append each row to $doc_data
            $value = array($row2["Doc_Num"], $row2["App_Num"], $row2["Link"], $row2["Doc_Type"]);
            array_push($doc_data, $value);
        }
    }
}

echo json_encode($doc_data);

?>