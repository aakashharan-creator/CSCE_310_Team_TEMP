<?php
$conn = new mysqli('sql9.freemysqlhosting.net', 'sql9658278', 'ZX2Ybn3eNA', 'sql9658278');

if ($conn->connect_error) {
    echo "$conn->connect_error";
    die("Connection Failed : " . $conn->connect_error);
}


if($_SERVER["REQUEST_METHOD"] == "GET"){
    // echo "Got to the get method";
   $form = $_GET["frmname"];
    if($form == "selectForm"){
        $_SERVER["select_result"] = "Should persist now\n";
        $select_result = "Got something for you\n";
        echo $_SERVER["select_result"] . "<br>";
        echo "Got to it again\n";


        echo "<html><form style=\"background-color: red; display: block;\" method=\"get\" action=\"../pages/admin.php\" id=\"theForm\" name=\"selectForm\">
        <input type=\"hidden\" name=\"frmname\" value=\"selectDataForm\"/>
        <input >
        <script>
        console.log(\"Getting here2\")
        console.log(document.getElementById(\"theForm\"));
        document.getElementById(\"theForm\").submit();
    </script>
      </form></html>";

        // $result = $conn->query($select_result);
        
        // header("Location: ../pages/admin.php");
    }

    return ;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if($_SERVER["action"] == "add_program"){
        
    }

    echo "Getting the values\n";
    $category = $_POST["category2"];

	// $password = $_POST['testId'];

    echo "Enterting the post section\n";

    // return 4;


    echo "$category";
    


    //will either be update or insert
    if($_POST["id"] = "update_table"){
        $stmt = $conn->prepare("UPDATE SET Account(acc_user_name, acc_password, acc_type) values('?', '?', '?')");
		$stmt->bind_param("sss", $username, $password, $acct_type);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
    }	

}


?>

<html>

    <script>
        console.log("Getting here3")
        document.getElementsByName("selectForm").submit();
    </script>

</html>