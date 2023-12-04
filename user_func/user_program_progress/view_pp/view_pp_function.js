function populateUserData() {

    // Get table 
    let table = document.getElementById("user-data");
    if(!table) {
      console.log("Error: Table not found");
      return;
    }
  
    // Fetch data
    fetch("view_pp_data.php")
      .then(response => {
        if(!response.ok) {
          throw new Error("Fetch failed");  
        }
        return response.json(); 
      })
      .then(data => {
        
        console.log(data);
        
        if(!data || data.length == 0) {
          console.log("No data returned");
          return;
        }
  
        let keys = ["CertE_Num", "UIN", "Cert_ID", "Status", 
          "Training_Status", "Program_Num", "Semester", "Year"];
  
        keys.forEach(key => {
  
          let row = document.createElement("tr");
          
          let label = document.createElement("td");
          label.innerText = key;
          
          let value = document.createElement("td"); 
          value.innerText = data[key];
          
          row.appendChild(label);
          row.appendChild(value);
          
          table.appendChild(row);
        });
  
      })
      .catch(error => {
        console.log("Error: " + error);
      });
  
  }