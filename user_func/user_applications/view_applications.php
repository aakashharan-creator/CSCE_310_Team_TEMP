<?php 
session_start();

$conn = new mysqli('sql9.freemysqlhosting.net', 'sql9658278', 'ZX2Ybn3eNA', 'sql9658278');

if ($conn->connect_error) {
    echo "$conn->connect_error";
    die("Connection Failed : " . $conn->connect_error);
}

$name = $_SESSION["Username"];
$sql = "SELECT (UIN) FROM User WHERE Username='$name'";

$result_user = $conn->query($sql);
$result_user = $result_user -> fetch_assoc();
$uin = $result_user["UIN"];

$sql = "SELECT * FROM Application WHERE UIN='$uin'";

$result_user = $conn->query($sql);



?>

<htlm>
    <body>
    <?php 
                  // if(isset($select_result)){
                  //   echo "<h4>Now have the data</h4>";
                  // }

                  if(empty($result)){
                    //it is empty so just say there is no data
                    echo "No Data unfortunately";

                    // return ; this would make everything else stop rendering
                  }else{
                    echo "<table style=\"text-align: left; border: black solid 2px;\">";
                    echo "<tr style=\"background-color: red; border-bottom: black 2px solid;\">
                      <th style=\"padding: auto\">id</th>
                      <th style=\"margin: auto\">Program Name</th>
                      <th style=\"margin: auto\">Description</th>
                      <th> Report </th>
                    </tr>";
                  }

                  while($row = $result->fetch_assoc()){
                    echo "<tr>";
                    foreach($row as $data){
                      echo "<td>$data</td>";
                    }
                    $id = $row['Program_Num'];
                    echo "<td style=\"text-align:center\"> <a class=\"btn btn-default\"  href=\"program_report.php/?id=$id\">View</a></td>";
                    echo "</tr>";
                  }

                  echo "</table>";

            ?>
    </body>
</html>

