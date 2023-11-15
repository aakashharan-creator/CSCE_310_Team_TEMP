<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin_css/admin_user_page.css">
    <title>Document</title>
</head>

<body>
    <h1>Admin User Page</h1>
    <button type="submit" name="admin_button" onclick="filter('admin')">Show admins</button>
    <button type="submit" name="admin_button" onclick="filter('student')">Show students</button>
    <button type="submit" name="admin_button" onclick="filter('')">Clear</button>
    <table id="user-table">
        <tr>
            <th>UIN</th>
            <th>Name</th>
            <th>User Type</th>
        </tr>
    </table>

    <script>
        function filter(type) {
            let table = document.getElementById("user-table");
            let rows = table.querySelectorAll("tr");

            for (let i = 1; i < rows.length; i++)
                rows[i].remove();

            for (let i = 0; i < all_users.length; i++) {
                let user = all_users[i];
                
                if (type !== '' && user[2] !== type)
                    continue;

                let row = document.createElement("tr");
                let uin = document.createElement("td");
                let name = document.createElement("td");
                let user_type = document.createElement("td");

                uin.innerHTML = user[0];
                name.innerHTML = user[1];
                user_type.innerHTML = user[2];

                row.appendChild(uin);
                row.appendChild(name);
                row.appendChild(user_type);

                table.appendChild(row);
            }
        }
    </script>

    <script type="text/javascript">
        let all_users = [];
        let table = document.getElementById("user-table");
        fetch("get-admin-user-page-data.php").then((response) => {
            return response.json();
        }).then((data) => {
            all_users = data;
            all_users.forEach(user => {
                let row = document.createElement("tr");
                let uin = document.createElement("td");
                let name = document.createElement("td");
                let user_type = document.createElement("td");

                uin.innerHTML = user[0];
                name.innerHTML = user[1];
                user_type.innerHTML = user[2];

                row.appendChild(uin);
                row.appendChild(name);
                row.appendChild(user_type);

                table.appendChild(row);
            });
        })
    </script>

</body>

</html>