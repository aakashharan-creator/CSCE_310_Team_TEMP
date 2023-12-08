<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
   <title>Student certificate progress</title>
</head>
<body>

    <h2>Student internship progress</h2>
    <p>Enter a students UIN to see their internship progress</p>
    <form method="post">
        <input type="number" name="UIN" required>
        <input type="submit" value="Submit">
    </form>

</body>
</html>

<?php

if($_POST) {

  $uin = $_POST['UIN'];

  $_SESSION['ViewUIN'] = $uin;

  header("Location: view_internship_data.php");
  exit;

}

?>