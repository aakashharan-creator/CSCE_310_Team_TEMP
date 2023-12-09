<?php 
session_start();


// get the db connectionn started
$conn = new mysqli('sql9.freemysqlhosting.net', 'sql9658278', 'ZX2Ybn3eNA', 'sql9658278');

if ($conn->connect_error) {
    echo "$conn->connect_error";
    die("Connection Failed : " . $conn->connect_error);
}


//getting the uin of user through the session kept username
$name = $_SESSION["Username"];
$sql = "SELECT (UIN) FROM User WHERE Username='$name'";

$result_user = $conn->query($sql);
$result_user = $result_user -> fetch_assoc();
$uin = $result_user["UIN"];

//Get data used for the table, inner joins with programs view
$sql = "SELECT App_Num, Name, UIN, Uncom_Cert, Com_Cert, Purpose_Statement FROM Application INNER JOIN program_view ON Application.Program_Num = program_view.Program_Num WHERE UIN='$uin'";

$result = $conn->query($sql);

?>

<htlm>
    <body>
    
    <?php 
                  
                  if(empty($result)){
                    //it is empty so just say there is no data
                    echo "No Data unfortunately";

                    // return ; this would make everything else stop rendering
                  }else{
                    echo "<table class=\"table\" style=\"text-align: left; border: black solid 2px;\">";
                    echo "<tr style=\"background-color: lightgreen; border-bottom: black 2px solid;\">
                      <th style=\"padding: auto\">Application ID</th>
                      <th style=\"margin: auto\">Program Name</th>
                      <th style=\"margin: auto\">UIN</th>
                      <th style=\"margin: auto\">UCERT</th>
                      <th style=\"margin: auto\">CCERT</th>
                      <th style=\"margin: auto\">Purpose</th>
                      <th> Report </th>
                    </tr>";
                  }

                  //get the rows from the inner join query
                  while($row = $result->fetch_assoc()){
                    echo "<tr>";
                    foreach($row as $data){
                      echo "<td>$data</td>";
                    }
                    $id = $row['App_Num'];
                    //add a personalized link to go directly to the update page
                    echo "<td style=\"text-align:center\"> <a class=\"btn btn-default\"  href=\"modify_applications.php/?id=$id\">View</a></td>";
                    echo "</tr>";
                  }

                  echo "</table>";

            ?>
            <br>

            <!-- Have a way to pass the message whenever they are redirected to the view page -->
            <?php 
              if(isset($_GET["msg"])){
                if($_GET["msg"] == "failed_id"){
                  echo "Resource requested doesn't exist";
                }else if($_GET["msg"] == "del_successful"){
                  echo "Successfully Deleted";
                }
              }
            
            ?>
            <!-- Redirect to this functionalities home page -->
            <div>
                <form action="./" method="get">
                    <button>Go back</button>
                </form>
            </div>
    </body>
</html>

