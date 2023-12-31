<!--
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin_css/admin_home.css">
    <title>Document</title>
</head>

<body>
    <h1>Admin Home Page</h1>

    <a class="log-out" href="../index.php">Logout</a>
    <a href="admin_user_page/admin_user_page.php">Go to user page</a>
    <a href="admin_event/view_events.php">Go to event page</a>
</body>

</html>
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin_css/admin_home.css">
    <title>Document</title>
</head>

<body>
    <!-- Redirecting back to logout -->
    <a href="../index.php" style="position: absolute; top:25px; right: 25px;">Logout</a>
    <h1>Admin Home Page</h1>

    <!-- List of Admin Functionalities -->
    <h3>User Page</h3>
        <a href="admin_user_page/admin_user_page.php">
            <button>User Page</button> 
        </a>
    <h3>Program Information Management</h3>
    <a href="admin_program_management/admin.php">
        <button>Program Management</button>
    </a>
    <h3>Student Program Progress</h3>
        <a href="admin_program_progress/program_progress_page.php">
            <button>Program Progress</button> 
        </a>
    <h3>Event Page</h3>
        <a href="admin_event/view_events.php">
            <button>Event Page</button> 
        </a>
</body>

</html>