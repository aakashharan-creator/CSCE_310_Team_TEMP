function populateUserData() {

    // Get certification table
    const certTable = document.getElementById("user-data");
  
    // Populate certification table
    fetch("view_cert_data.php")
      .then(response => response.json()) 
      .then(data => {
        console.log(data); // print data to console
        for(let i = 0; i < data.length; i++) {
          let certRow = document.createElement("tr");
  
          for(let j = 0; j < data[i].length; j++) {
             let cell = document.createElement("td");
             cell.innerHTML = data[i][j];
             
             certRow.appendChild(cell);
          }
  
          certTable.appendChild(certRow);  
        }
      });
  
    
  }