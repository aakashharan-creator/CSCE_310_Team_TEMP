function populateUserData() {
    let table = document.getElementById("user-data");

    fetch("get_user_data.php").then((response) => {
        return response.json();
    }).then((data) => {
        let keys = ["Username", "First Name", "M Initial", "Last Name", "Email",
            "Discord", "UIN", "Gender", "Hispanic_or_Latino", "Race", "US_Citizen", 
        "First_Generation", "GPA", "Major", "Minor_1", "Minor_2", "Expected_Graduation",
            "School", "Classification", "Phone", "Student_Type"];

        for (let i = 0; i < keys.length; i++) {
            let row = document.createElement("tr");
            let table_data_header = document.createElement("td");
            
            table_data_header.innerHTML = keys[i];

            let table_value = document.createElement("td");

            if (i == 8 || i == 10 || i == 11) {
                if (data[i] == 0)
                    table_value.innerHTML = "False";
                else
                    table_value.innerHTML = "True";
            } else {
                table_value.innerHTML = data[i];
            }

            row.appendChild(table_data_header);
            row.appendChild(table_value);

            table.appendChild(row);
        }
    })
}