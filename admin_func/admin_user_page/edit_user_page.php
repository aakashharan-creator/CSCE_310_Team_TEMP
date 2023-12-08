<!DOCTYPE html>
<html lang="en">

<head>
    <script type="text/javascript">
        function submitForm(action) {
            var form = document.getElementById('edit_form');
            form.action = action;
            form.submit();
        }
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Edit User Page</h2>
    <a href="admin_user_page.php" style="position: absolute; top: 25px; right: 25px;">Go back</a>
    <form id="edit_form" action="/admin_func/admin_user_page/add_admin_form_handler.php" method="post">
        <input type="text" name="uin" placeholder="UIN"><br><br>
        <input type="submit" value="Make Admin" onclick="submitForm('/admin_func/admin_user_page/make_admin.php')">
        <input type="submit" value="Make Student" onclick="submitForm('/admin_func/admin_user_page/make_student.php')">
    </form>
</body>

</html>