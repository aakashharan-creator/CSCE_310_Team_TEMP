<!DOCTYPE html>
<html>
    <head>
        <title>Application Page</title>

        <script src="https://code.jquery.com/jquery-3.7.1.js"
            integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="/css/bootstrap.css" />

        <style>

            table {
                text-align: center;
            }

            th {
                width: 25%;
                padding: 3%;
            }


            div {
                height: fit-content;
                width: auto;
            }

            .border_bottom {
                /* border-bottom: 2px solid black; */
                border-radius: 5px;
                width: auto;
            }

            /* h1   {color: blue;} */
            /* p    {color: red;} */
        </style>
    </head>

    <body>
        <!-- Redirecting back to the user home page -->
        <div style="text-align: right; position: absolute; top:25px; right: 25px;">
        <a style=" " href="/user_func/home.php">User Home</a>
        </div>
        <!-- Redirecting them to the view page-->
        <h2>View and Update Applications</h2>
        <form action="view_applications.php" method="get">
            <button type="submit">See current applications</button>
        </form>

        <br>
        <!-- Redirecting them to add new applications -->
        <h2>Add New Applications</h2>
        <form action="modify_applications.php" method="get">
            <button type="submit">Add Application</button>
        </form>
    </body>

</html>