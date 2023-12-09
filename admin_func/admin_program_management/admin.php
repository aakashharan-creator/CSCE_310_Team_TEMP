<?php 

$conn = new mysqli('sql9.freemysqlhosting.net', 'sql9658278', 'ZX2Ybn3eNA', 'sql9658278');

if ($conn->connect_error) {
    echo "$conn->connect_error";
    die("Connection Failed : " . $conn->connect_error);
}


// do the handling for the post
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $form_type = $_POST["frmname"];

  // doing the post method depending on what type of form it was
  if($form_type == "insertProgram"){
    $program_name = $_POST["program_name"];
    $description = $_POST["program_description"];

    $query = $conn->prepare("INSERT INTO Programs (Name, DESCRIPTION) VALUES  (?,?)");
    $query->bind_param("ss", $program_name, $description);

    $insert_result = $query->execute();

  }else if($form_type == "updateProgram"){
    //update the program
    $program_id = $_POST["program_id"];
    $program_name = $_POST["program_name"];
    $description = $_POST["program_description"];

    $query = $conn->prepare("UPDATE Programs SET Name = ?, Description = ? WHERE Program_Num=?");
    $query->bind_param("sss", $program_name, $description, $program_id);

    $update_result = $query->execute();
  }
  
}


if($_SERVER["REQUEST_METHOD"] == "GET"){
  if(isset($_GET["frmname"])){
    $form_type = $_GET["frmname"];
  }

  if(isset($_GET["program_id"]) || isset($form_type) && $form_type == "deleteProgram"){
    $program_id = $_GET["program_id"];


    $query = "DELETE FROM Programs WHERE Program_Num='$program_id'";
    // $query->bind_param("s", $program_id);

    $delete_result = $conn->query($query);

  }

}

//regardless of what request, do a select query for most recent data
$query = "SELECT * FROM Programs";

$result = $conn->query($query);

//realized through testing that variables don't persist on anything that refreshes the page

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Admin Page</title>

    <script
      src="https://code.jquery.com/jquery-3.7.1.js"
      integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
      crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.css" />

    <style>
      body {background-color: powderblue;}
      
      table{
        text-align: center;
      }

      th {
        width: 25%;
        padding: 3%;
      }
      

      div{
        height: fit-content;
        width: auto;
      }

      .border_bottom{
        /* border-bottom: 2px solid black; */
        border-radius: 5px;
        width: auto;
      }

</style>
  </head>
  <body>
    <!-- Wanted to implement a silent push to another php file to handle db connection -->
  <form style="background-color: red; display: none;" method="get" action="../php_handlers/admin_info_handler.php" id="theForm" name="selectForm" enctype="multipart/form-data">
    <input type="hidden" name="frmname" value="selectForm"/>
  </form>
    <div class="container">
      <div class="row col-md-6 col-md-offset-3">
        <div class="panel panel-primary" style="height: 45%; width: max-content; justify-content: center;;">
          <div class="panel-heading text-center">
            <h1>Main Menu</h1>
            <br>
          </div>
          <div class="panel-body">
            <!-- Redirection to home admin page with other functionalities -->
            <form style="text-align:right" action="../admin_home.php" method="get">
              <button>Home</button>
            </form>

            <!-- Show all the programs that the admin have available -->
            <h2>View the current pograms</h2>
            <?php 
                  

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

          </div>
          <div class="row panel-secondary" style="width: max-content; padding: 2%; justify-content: center;">

          <!-- Insert a program form -->
            <div class="col-xs-6" style=" margin:auto; ">
              <h4 class="border_bottom"> Insert </h4>
              <form action="" method="post">
                <input type="hidden" name="frmname" value="insertProgram"/>
                <h5>Program Name</h5>
                <input class="input" name="program_name" required/>

                <h5>Description</h5>
                <input class="input" name="program_description" required/>
                  <br>
                  <br>
                <button class="btn" style="background-color: lightgrey;" type="submit">Submit</button>
              </form>
                <!-- Prints out the status of the insert query -->
              <?php
                if(isset($insert_result)){
                  if( $insert_result === false ){
                    echo "Failure to insert";
                  }else{
                    echo "Inserted Sucessfully";
                  }
                }
              ?>
            </div>
            <!-- Update the program -->
            <div class="col-xs-6">
              <h4>Update</h4>

              <form action="" method="post">
                <h5>Program id</h5>
                <input class="input" type="number" name="program_id" required/>
                <input type="hidden" name="frmname" value="updateProgram" />
                <h5>Program Name</h5>
                <input class="input" name="program_name" required/>

                <h5>Description</h5>
                <input class="input" name="program_description" required/>
                  <br>
                  <br>
                <button class="btn" style="background-color: lightgrey;" type="submit">Submit</button>
              </form>

              <?php 
                
                if(isset($update_result)){
                  if( $update_result === false ){
                    echo "Failure to update";
                  }else{
                    echo "Updated Sucessfully";
                  }
                }
              
              ?>
            </div>
            <!-- Deleting the program -->
            <div class="col-xs-4" style="margin-right: 1%;">
              <h4>Delete</h4>

              <form action="" method="delete">
                <!-- <input type="hidden" name="frmname" value="deleteProgram"/> -->
                <h5>Program id</h5>
                <input class="input" type="number" name="program_id" required/>
                <br>
                <br>
                <button class="btn btn-danger" type="submit">Submit</button>
                
              </form>
              <?php 
                //sometimes it seems the mysqli_result only evaluates to true or false
                if(isset($delete_result)){
                  if( $delete_result === false ){
                    echo "Failure to delete";
                  }/*else if( $delete_result->fetch_assoc() === false ){
                    echo "ID doesn't exist";
                  }*/else{
                    echo "Deleted Sucessfully";
                  }
                }
              
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>