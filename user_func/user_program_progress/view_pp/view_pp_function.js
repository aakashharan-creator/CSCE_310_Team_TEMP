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

    let table2 = document.getElementById("user-data2");
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
  
          table2.appendChild(row);
        }
      })


    let table3 = document.getElementById("user-data3");
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
  
          table3.appendChild(row);
        }
      })
  }