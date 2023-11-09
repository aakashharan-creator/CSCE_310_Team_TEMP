<!DOCTYPE html>
<html>

<body>

    <h1>My first PHP page</h1>

    <?php
    // Database connection
    $conn = new mysqli('sql9.freemysqlhosting.net', 'sql9658278', 'ZX2Ybn3eNA', 'sql9658278');
    if ($conn->connect_error) {
        echo "$conn->connect_error";
        die("Connection Failed : " . $conn->connect_error);
    } else {
        $result = mysqli_query($conn, "SELECT * FROM Account");
        echo "<h1>" . "Returned rows are: " . mysqli_num_rows($result) . "</h1>";

        echo "<table>";
        while ($row = $result->fetch_array()) {
            echo '<tr><td>' . $row["acc_user_name"] . '</td><td>' . $row["acc_type"] . '</td></tr>';
        }
        echo "</table>";

        mysqli_free_result($result);
        $conn->close();
    }
    ?>

</body>

</html>