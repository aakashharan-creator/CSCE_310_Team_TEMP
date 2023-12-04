function populateUserData() {
    let table = document.getElementById("user-data");
  
    fetch("view_pp_data.php")
      .then((response) => {
        return response.json();
      })
      .then((data) => {
        for (let i = 0; i < data.length; i++) {
          let row = document.createElement("tr");
  
          let username = document.createElement("td");
  
          for (let k = 0; k < data[i].length; k++) {
            let username_val = document.createElement("td");
            username_val.innerHTML = data[i][k];
            
            row.appendChild(username_val);
          }
  
          table.appendChild(row);
        }
      })
  }