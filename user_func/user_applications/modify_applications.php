<?php 
session_start();

// Setting up the database connection
$conn = new mysqli('sql9.freemysqlhosting.net', 'sql9658278', 'ZX2Ybn3eNA', 'sql9658278');

if ($conn->connect_error) {
    echo "$conn->connect_error";
    die("Connection Failed : " . $conn->connect_error);
}

// getting uin to pre-populate the page
$name = $_SESSION["Username"];
$sql = "SELECT (UIN) FROM User WHERE Username='$name'";

$result_user = $conn->query($sql);
$result_user = $result_user -> fetch_assoc();
$curr_uin = $result_user["UIN"];



$isUpdate = isset($_GET["id"]) || isset($_POST["id"]);

//Whenever it's able to get the id it means it's going to be an update
if(isset($_GET["id"])){
    $id = $_GET["id"];
    $sql = "SELECT Application.*, Name  FROM Application INNER JOIN program_view ON Application.Program_Num = program_view.Program_Num WHERE App_Num=$id ";


    $result = $conn->query($sql);

    //Need to make sure that the id actually exists in the table
    if($result == false || $result->num_rows == 0){
        echo "No value";
        header("Location: /user_func/user_applications/view_applications.php?msg=failed_id");
    }



    $result = $result -> fetch_assoc();
}

//See if it's a post request. If so then it can be insert, update or even delete
if($_SERVER["REQUEST_METHOD"] == "POST"){

    //needed seperatately as used by both update and delete
    if(isset($_POST["id"])){  

        $id = $_POST["id"];
    }


    if(isset($_POST["frmname"]) && $_POST["frmname"] == "deleteApplication"){
        $query = "DELETE FROM Application WHERE App_Num='$id'";

        $delete_result = $conn->query($query);

        if($delete_result > 0){
            //succesful and redirect
            header("Location: /user_func/user_applications/view_applications.php?msg=del_successful");

        }else{
            echo "Failed to delete application";
        }
    }else{

        //get the information needed, applies to both insert and update
        $uin = $curr_uin;
        $program_id = $_POST["program_id"];
        $ucert = $_POST["ucert"];
        $ccert = $_POST["ccert"];
        $purpose = $_POST["purpose"];

        if(isset($_POST["frmname"]) && $_POST["frmname"] == "insertApplication"){
            //if it is insert, we check through the forms inputs
            $query = $conn->prepare("INSERT INTO Application (Program_Num, UIN, Uncom_Cert, Com_Cert, Purpose_Statement) VALUES  (?,?,?,?,?)");
            $query->bind_param("sssss", $program_id, $uin, $ucert, $ccert, $purpose);

            $insert_result = $query->execute();
        }else if(isset($_POST["frmname"]) && $_POST["frmname"] == "updateApplication"){
            $query = $conn->prepare("UPDATE Application SET Program_Num = ?,  UIN= ?, Uncom_Cert = ?, Com_Cert = ?, Purpose_Statement = ? WHERE App_Num=?");
            $query->bind_param("ssssss", $program_id, $uin, $ucert, $ccert, $purpose, $id);

            $update_result = $query->execute();
        }
    }
}



?>


<!DOCTYPE html>
<html>
    <head>
        <title>Application Page</title>

        <script src="https://code.jquery.com/jquery-3.7.1.js"
            integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="/css/bootstrap.css" />

        <style>

            table {
                text-align: center;
            }

            th {
                width: 25%;
                padding: 3%;
            }


            div {
                height: fit-content;
                width: auto;
            }

            .border_bottom {
                /* border-bottom: 2px solid black; */
                border-radius: 5px;
                width: auto;
            }
        </style>
    </head>

    <body>

        <!-- Show a table for a reference of the programs -->
        <h4>Program Table Reference</h4>
        <table class="table">
            <tbody>
        <?php
            $query = "SELECT * FROM program_view";

            $program_result= $conn->query($query);


            while($row = $program_result-> fetch_assoc() ){
                echo "<tr>";
                
                    echo "<td>" . $row["Program_Num"] . "</td>";
                    echo "<td>" . $row["Name"] . "</td>";
                echo "</tr>";
                
            }
        
        
        ?>
        </tbody>
        </table>
        <hr>
        <!-- Redirection options -->
        <div style="text-align: left">
            <form style="display: inline-block;" action="/user_func/user_applications/view_applications.php" method="get">
                <button type="submit">Go to applications</button>
            </form>
            <form style="display: inline-block;" action="/user_func/user_applications/" method="get">
                <button type="submit">Go back</button>
            </form>
        </div>

        <!-- This uses the fact that id would have been gotten if it was an update hence "chooses" the type of form the post request will denote -->
        <form action="" method="post">
            <?php 
                $disabled = "";
                if(isset($id)){
                    $disabled = "disabled";
                }

                $type_form = "insertApplication";
                if(isset($_GET["id"])){
                    $type_form = "updateApplication";
                }
            ?>

            <!-- This is how the form knows what type of post request it is -->
            <input type="hidden" name="frmname" value="<?php echo $type_form;?>" />
            
            <!-- Prepopulate and disable these inputs(application id and uin) -->
            <h4>Application ID</h4>
            <input name="id" value="<?php if(isset($id)){ echo $id; } ?>"  disabled/>
            <br>

            <h4>UIN:</h4>
            <input name="uin" value="<?php if(isset($result_user["UIN"])){ echo $result_user["UIN"]; } ?>" disabled required/>

            <hr>
            
            <!-- Give user a dropdown to select the program they have available to choose at the moment -->
            <h4>Program</h4>
            <select name="program_id" required>
                <?php 

                if(!$isUpdate){
                    //give out all the remaining options to submit a new application
                    //utulize the not in part of query to see the rest of programs not applied to yet
                    $sql = "SELECT * FROM program_view WHERE Program_Num NOT IN (
                        SELECT Program_Num FROM Application WHERE UIN = '$curr_uin'
                    );";

                    $result_programs = $conn -> execute_query( $sql );

                    if($result_programs == true){
                        echo "<option value=\"\" selected disabled hidden>Choose here</option>";
                        while($row = $result_programs->fetch_assoc()){
                            $program_id = $row["Program_Num"];
                            $program_name = $row["Name"];
                            echo "<option value='$program_id'>";
                            echo $program_name;
                            echo "</option>";
                        }
                    }
                }else{
                    //only allow the program the application is for
                    $program_id = $result["Program_Num"];
                    $program_name = $result["Name"];
                    echo "<option value='$program_id'>$program_name</option>";
                }
                
                ?>
            </select>

            <br>
            <!-- Allow only yes or no answers for both type of certifications -->
            <h4>University Certifation(Yes/No):</h4>
            <select name="ucert" required>
                <?php 
                    if(isset($result)){
                        $answer = $result["Uncom_Cert"];
                        if($answer == "Yes"){
                            echo "<option selected>$answer</option>";
                            echo "<option>No</option>";
                        }else{
                            echo "<option selected>$answer</option>";
                            echo "<option>Yes</option>";
                        }
                    }else{
                        echo "<option selected hidden disabled>Choose</option>";
                        echo "<option>Yes</option>";
                        echo "<option>No</option>";
                    }
                    
                ?>
            </select>

            <br>

            <h4>Com Certifation(Yes/No):</h4>
            <select name="ccert" required>
                <?php
                    if(isset($result)){
                        $answer = $result["Com_Cert"];
                        if($answer == "Yes"){
                            echo "<option selected>$answer</option>";
                            echo "<option>No</option>";
                        }else{
                            echo "<option selected>$answer</option>";
                            echo "<option>Yes</option>";
                        }
                    }else{
                        echo "<option selected hidden disabled>Choose</option>";
                        echo "<option>Yes</option>";
                        echo "<option>No</option>";
                    }
                ?>
            </select>
            
            
            <br>
                
            <!-- Get purpose statement but can also prepopulate it -->
            <h4>Purpose</h4>
            <input name="purpose" value="<?php if(isset($result)){echo $result["Purpose_Statement"];}?>" required> 
            
            <br><br>
            <button type="submit">Submit</button>
        </form>
        <br>

        <!-- Giving the user the ability to delete only when they select view from the table and can update the application -->
        <form action="" method="post" <?php if(!$isUpdate){echo "hidden";}?>  enctype="multiform/form-data">
            <input type="hidden"  name="frmname" value="deleteApplication" />
            <input name="id" hidden value="<?php if(isset($id)){ echo $id; } ?>"  disabled/>
            <button type="submit">Delete Application</button>
        </form>

        
        <!-- Simply printing out when the insert and update operations were succesful. -->
        <!-- However have to distinguish between them -->
        <?php 
            if(isset($insert_result) && $insert_result == true){
                echo "Inserted Succesfully";
            }else if(isset($update_result) && $update_result == true){
                echo "Updated Successfully";
            }
        ?>

        
    </body>

</html>
