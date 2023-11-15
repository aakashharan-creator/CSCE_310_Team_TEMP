<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/admin_css/admin_user_page.css">
    <script src="admin_user_page.js"></script>
    <title>Document</title>
</head>

<body onload="populateTable()">
    <h1>Admin User Page</h1>
    <a class="nav-button" href="../admin_home.php">Go Home</a>
    <button onclick="filter('admin')">Show admins</button>
    <button onclick="filter('student')">Show students</button>
    <button onclick="filter('')">Show All</button>
    <br>
    <a href="add_user_page.php">Add Admin</a>
    <button>Remove User</button>
    <table id="user-table">
        <tr>
            <th>UIN</th>
            <th>Name</th>
            <th>User Type</th>
        </tr>
    </table>
</body>

</html>