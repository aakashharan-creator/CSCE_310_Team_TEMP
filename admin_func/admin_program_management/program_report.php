<?php 

// Establishing the db connecton
$conn = new mysqli('sql9.freemysqlhosting.net', 'sql9658278', 'ZX2Ybn3eNA', 'sql9658278');

if ($conn->connect_error) {
    echo "$conn->connect_error";
    die("Connection Failed : " . $conn->connect_error);
}

//shouldn't call this page with anything else than get
if($_SERVER["REQUEST_METHOD"] == "GET"){
  if(isset($_GET["id"])){
    $id = $_GET["id"];
    $query = "SELECT * FROM Programs where Program_Num='$id'";
    $result = $conn->query($query);
    $readData = $result;
    //make sure it has the a value or else send back to the admin page
    if(!($result->num_rows > 0)){
        header("Location: admin.php");
    }
    
  }else{
    //redirect back to the admin page since need a report id
    header("Location: admin.php");
  }

    //at this point should already have the id so
    //this does all the numerical reporting that is showed on this page
    $query = "SELECT COUNT(*) FROM Event WHERE Program_Num=$id";

    $event_result = $conn->query($query);


    $query = "SELECT COUNT(*) FROM Application WHERE Program_Num=$id";

    $application_result = $conn->query($query);

    $query = "SELECT COUNT(*) FROM Cert_Enrollment WHERE Program_Num=$id";

    $cert_result = $conn->query($query);


}



?>

<!DOCTYPE html>
<html>
  <head>
    <title>Program Report</title>

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
      }

      .border_bottom{
        border-bottom: 2px solid black;
        border-radius: 5px;
        width: fit-content;
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
      <div class="panel panel-primary" style="height: 45%;">
          <div class="col-xs-12 panel-heading">
            <div>
              <h2>Program Report</h2>
            </div>
            <br>

            <!-- Have the program information populated and unmutable -->
            <?php $row = $readData -> fetch_assoc() ?>

            <div class="col-xs-12">
                <h5>Program Id</h5>  
                <input style="color: black" value="<?php echo $row["Program_Num"]; ?>" disabled/>
            </div>
            <div class="col-xs-4">
                <h5>Name</h5>  
                <input style="color: black" value="<?php echo $row["Name"]; ?>" disabled/>
            </div>
            <div class="col-xs-4">
                <h5>Description</h5>
                <input style="color: black" value="<?php echo $row["Description"]; ?>" disabled/>

            </div>

          </div>
          <!-- Report body -->
          <div class="panel-body">
            <h3 style="text-align: center">Report Information</h3>
            <br>

            <!-- Putting the results of the count queries in their appropiate sections -->
            <div>
              <h4 class="border_bottom">Events with Program</h4>
              <p><?php echo $event_result -> fetch_column(0);?></p>
            </div>

            <br>

            <div>
              <h4 class="border_bottom">Applications with Program</h4>
              <p><?php echo $application_result -> fetch_column(0);?></p>
            </div>

            <br>
            <div>
              <h4 class="border_bottom">Certifications with Program</h4>
              <p><?php echo $cert_result -> fetch_column(0);?></p>
            </div> 

          </div>
          <!-- Redirection back to the admin programs page -->
          <div class="col panel panel-secondary">
                  <!-- Need to keep it as ../admin.php since the url adds the /?id= and it makes it think it's a new directory -->
                  <form action="../admin.php" method="get">
                    <button class="btn" type="submit">Go Back</button>
                  </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>