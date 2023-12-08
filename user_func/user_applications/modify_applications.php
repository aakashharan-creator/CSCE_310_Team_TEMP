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
$curr_uin = $result_user["UIN"];



$isUpdate = isset($_GET["id"]) || isset($_POST["id"]);

if(isset($_GET["id"])){
    //then it is a 
    $id = $_GET["id"];
    $sql = "SELECT * FROM Application WHERE App_Num=$id";


    $result = $conn->query($sql);

    if($result == false){
        header("Location: index.php");
    }

    $result = $result -> fetch_assoc();
}



if($_SERVER["REQUEST_METHOD"] == "POST"){

    if(isset($_POST["id"])){  

        $id = $_POST["id"];
    }

    // echo $id;
    $uin = $curr_uin;
    $program_id = $_POST["program_id"];
    $ucert = $_POST["ucert"];
    $ccert = $_POST["ccert"];
    $purpose = $_POST["purpose"];

    if(isset($_POST["frmname"]) && $_POST["frmname"] == "insertApplication"){
        //if it is 
        $sql = $conn->prepare("INSERT INTO Application (Program_Num, UIN, Uncom_Cert, Com_Cert, Purpose_Statement) VALUES  (?,?,?,?,?)");
        $query->bind_param("sssss", $program_id, $uin, $ucert, $ccert, $purpose);

        $insert_result = $query->execute();
    }else if(isset($_POST["frmname"]) && $_POST["frmname"] == "updateApplication"){
        $sql = $conn->prepare("UPDATE Application SET Program_Num = ?,  UIN= ?, Uncom_Cert = ?, Com_Cert = ?, Purpose_Statement = ? WHERE App_Num=?");
        $query->bind_param("ssssss", $program_id, $uin, $ucert, $ccert, $purpose, $id);

        $update_result = $query->execute();
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

            /* h1   {color: blue;} */
            /* p    {color: red;} */
        </style>
    </head>

    <body>

        
        <h2>Program Table Reference</h2>
        <table class="table">
            <tbody>
        <?php
            $query = "SELECT * FROM Programs";

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
        <form action="" method="post">
            <?php 
                $disabled = "";
                if(isset($id)){
                    $disabled = "disabled";
                }

                $type_form = "insertProgram";
                if(isset($_GET["id"])){
                    $type_form = "updateForm";
                }
            ?>


            <input type="hidden" name="<?php echo $type_form;?>" />


            <h2>Application ID</h2>
            <input name="id" value="<?php if(isset($id)){ echo $id; } ?>"  disabled/>
            <br>

            <h2>UIN:</h2>
            <input name="uin" value="<?php if(isset($result_user["UIN"])){ echo $result_user["UIN"]; } ?>" disabled/>

            <hr>
                
            <h2>Program</h2>
            <input  name="program_id" type="number" required/>

            <br>
            
            <h2>Com Certifation(Yes/No):</h2>
            <input name="ccert" required>

            <br>
            <h2>University Certifation(Yes/No):</h2>
            <input name="ucert" required>

            <br>
            <h2>Purpose</h2>
            <input name="purpose" required> 
            

            <button type="submit">Submit</button>
        </form>
    </body>

</html>
