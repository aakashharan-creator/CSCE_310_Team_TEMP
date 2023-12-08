<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
   <title>Student certificate progress</title>
</head>
<body>
<a href="../program_progress_page.php" style="position: absolute; top: 25px; right: 25px;">Go back</a>
    <h2>Student certificate progress</h2>
    <p>Enter a students UIN to see their certificate progress</p>
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

  header("Location: view_cert_data.php");
  exit;

}

?>

