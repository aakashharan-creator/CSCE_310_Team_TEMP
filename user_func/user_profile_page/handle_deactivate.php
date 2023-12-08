<?php

session_start();
$conn = new mysqli('sql9.freemysqlhosting.net', 'sql9658278', 'ZX2Ybn3eNA', 'sql9658278');

if ($conn->connect_error) {
    echo "$conn->connect_error";
    die("Connectaion Failed : " . $conn->connect_error);
} else {
    $query = "UPDATE User SET has_access = False WHERE Username = '" . $_SESSION["Username"] . "';";
    $result = mysqli_query($conn, $query);
    echo "Deactivated account";
    echo "<a href='../../index.php' style='position: absolute; top: 25px; right: 25px;'>go home<a>";
}

?>