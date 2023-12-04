function populateUserData() {
    let table = document.getElementById("user-data");

    fetch("view_pp_data.php").then((response) => {
        return response.json();
    }).then((data) => {
        // CertE_Num, UIN, Cert_ID, Status, Training_Status, Program_Num, Semester, Year
        let keys = ["CertE_Num", "UIN", "Cert_ID", "Status", "Training_Status", "Program_Num", "Semester", "Year"];
        //let keys = ["Username", "First Name", "M Initial", "Last Name", "Email", "Discord"];

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