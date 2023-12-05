<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
   <title>Search Certificates</title>
</head>
<body>

    <h1>Search for Certificates</h1>
    
    <form method="post">
        <input type="text" name="UIN">
        <input type="submit" value="View Certs">
    </form>

</body>
</html>

<?php

if($_POST) {

  $uin = $_POST['UIN'];

  $_SESSION['ViewUIN'] = $uin;

  header("Location: view_cert_data.php");
  exit;

}

?>