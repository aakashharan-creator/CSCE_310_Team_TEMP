function populateUserProgramProgressData() {
    let table = document.getElementById("user-data");

    fetch("../user_profile_page/get_user_data.php").then((response) => {
        return response.json();
    }).then((data) => {
        let keys = ["Username", "First Name", "M Initial", "Last Name", "Email", "Discord"];

        for (let i = 0; i < keys.length; i++) {
            let row = document.createElement("tr");
            let username = document.createElement("td");
            username.innerHTML = keys[i];

            let username_val = document.createElement("td");
            username_val.innerHTML = data[i];

            row.appendChild(username);
            row.appendChild(username_val);

            table.appendChild(row);
        }
    })
}