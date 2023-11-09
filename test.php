<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Home page</h1>
    <?php 
        session_start();
        echo "<h1>Welcome " . $_SESSION['Username'] . "!</h1>";
    ?>
</body>
</html>