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

function populateTable() {
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
}