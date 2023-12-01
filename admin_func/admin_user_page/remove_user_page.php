<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript">
        function submitForm(action) {
            var form = document.getElementById('remove_form');
            form.action = action;
            form.submit();
        }
    </script>
    <title>Document</title>
</head>

<body>
    <h1>Remove User Page</h1>
    <a href="admin_user_page.php" style="position: absolute; top: 25px; right: 25px;">Go back</a>
    <form id="remove_form" method="post">
        <input type="text"  name="uin" placeholder="UIN"><br><br>
        <input type="submit" value="Remove From DB" onclick="submitForm('/admin_func/admin_user_page/remove_user_form_handler.php')">
        <input type="submit" value="Revoke Access" onclick="submitForm('/admin_func/admin_user_page/remove_access.php')">
        <input type="submit" value="Grant Access" onclick="submitForm('/admin_func/admin_user_page/grant_access.php')">
    </form>
</body>

</html>