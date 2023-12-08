<?php
function get_conn()
{
    $conn = new mysqli('sql9.freemysqlhosting.net', 'sql9658278', 'ZX2Ybn3eNA', 'sql9658278');

    // Check the connection
    if ($conn->connect_error)
        die("Connection failed: " . $conn->connect_error);
    else
        return $conn;
}