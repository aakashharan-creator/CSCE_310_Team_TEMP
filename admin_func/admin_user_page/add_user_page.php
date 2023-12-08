<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Add User Page</h1>
    <a href="admin_user_page.php" style="position: absolute; top: 25px; right: 25px;">Go back</a>
    <form action="/admin_func/admin_user_page/add_admin_form_handler.php" method="post">
        <input type="text" name="uin" placeholder="UIN" required><br><br>
        <input type="text" name="fname" placeholder="First Name" required><br><br>
        <input type="text" name="m_init" placeholder="M Initial" required><br><br>
        <input type="text" name="lname" placeholder="Last Name" required><br><br>
        <input type="text" name="user_name" placeholder="Username" required><br><br>
        <input type="text" name="password" placeholder="Password" required><br><br>
        <input type="text" name="email" placeholder="Email" required><br><br>
        <input type="text" name="discord_name" placeholder="Discord" required><br><br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>