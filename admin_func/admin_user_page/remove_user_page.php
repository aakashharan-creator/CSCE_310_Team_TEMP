<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Remove User Page</h1>
    <a href="admin_user_page.php" style="position: absolute; top: 25px; right: 25px;">Go back</a>
    <form action="/admin_func/admin_user_page/remove_user_form_handler.php" method="post">
        <input type="text" name="uin" placeholder="UIN"><br><br>
        <input type="submit" value="Remove">
    </form>
</body>
</html>